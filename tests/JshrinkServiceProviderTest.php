<?php

namespace EmanueleMinotto\JshrinkServiceProvider\Tests;

use EmanueleMinotto\JshrinkServiceProvider\JshrinkServiceProvider;
use PHPUnit_Framework_TestCase;
use Silex\Application;
use Silex\Provider\TwigServiceProvider;

/**
 * @author Emanuele Minotto <minottoemanuele@gmail.com>
 *
 * @coversDefaultClass \EmanueleMinotto\JshrinkServiceProvider\JshrinkServiceProvider
 */
class JshrinkServiceProviderTest extends PHPUnit_Framework_TestCase
{
    /**
     * Test service registration.
     *
     * @covers ::boot
     * @covers ::register
     */
    public function testRegisterServiceProvider()
    {
        $app = new Application();
        $app->register(new JshrinkServiceProvider());
        $app->boot();

        $this->assertTrue($app['jshrink.flagged_comments']);
        $this->assertTrue($app['jshrink.enabled']);
        $this->assertFileExists($app['jshrink.cache_dir']);
    }

    /**
     * Test Twig extension integration in Silex (enabled, default).
     *
     * @coversNothing
     */
    public function testTwigExtension()
    {
        $app = new Application();
        $app->register(new TwigServiceProvider());
        $app->register(new JshrinkServiceProvider());
        $app->boot();

        $this->assertTrue($app['twig']->hasExtension('jshrink_extension'));
    }
}
