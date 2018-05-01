<?php

namespace Anax\Middleware;

use \Anax\DI\DIInterface;
use \Anax\Configure\ConfigureInterface;
use \Anax\Configure\Configure2Trait;

/**
 * Base for middleware..
 */
class Middleware implements ConfigureInterface
{
    use Configure2Trait;



    /**
     * Initiate the Proxy\DI to proxy all services available in $di.
     *
     * @param DIInterface $di The service container holding framework
     *                        services.
     *
     * @return void.
     */
    public static function init(DIInterface $di)
    {
        ProxyDI::injectDI($di);
        spl_autoload_register(__CLASS__ . "::autoloader");
    }
}
