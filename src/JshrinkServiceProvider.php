<?php

namespace EmanueleMinotto\JshrinkServiceProvider;

use Salva\JshrinkBundle\Cache\CachedMinifier;
use Salva\JshrinkBundle\Twig\Extension\JshrinkExtension;
use Silex\Application;
use Silex\ServiceProviderInterface;

/**
 * A jshrink service provider for Silex 1.
 *
 * @author Emanuele Minotto <minottoemanuele@gmail.com>
 *
 * @link http://silex.sensiolabs.org/doc/providers.html#creating-a-provider
 */
class JshrinkServiceProvider implements ServiceProviderInterface
{
    /**
     * Registers services and parameters on the app.
     *
     * @param Application $app Silex application.
     */
    public function register(Application $app)
    {
        $app['jshrink.cache_dir'] = sys_get_temp_dir();
        $app['jshrink.enabled'] = true;
        $app['jshrink.flagged_comments'] = true;
    }

    /**
     * Bootstraps the services.
     *
     * @param Application $app Silex application.
     */
    public function boot(Application $app)
    {
        if (!isset($app['twig'])) {
            return;
        }

        $cache = new CachedMinifier($app['jshrink.cache_dir']);
        $extension = new JshrinkExtension($cache, [
            'flaggedComments' => $app['jshrink.flagged_comments'],
        ], $app['jshrink.enabled']);

        $app['twig']->addExtension($extension);
    }
}
