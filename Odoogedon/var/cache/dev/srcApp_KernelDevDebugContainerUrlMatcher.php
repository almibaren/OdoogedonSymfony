<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = array(
            '/' => array(array(array('_route' => 'odoogedon', '_controller' => 'App\\Controller\\OdoogedonController::index'), null, null, null, false, false, null)),
            '/login' => array(array(array('_route' => 'login', '_controller' => 'App\\Controller\\OdoogedonController::login'), null, null, null, false, false, null)),
            '/registrar' => array(array(array('_route' => 'registrar', '_controller' => 'App\\Controller\\OdoogedonController::registrar'), null, null, null, false, false, null)),
            '/tienda' => array(array(array('_route' => 'tienda', '_controller' => 'App\\Controller\\OdoogedonController::tienda'), null, null, null, false, false, null)),
            '/inventario' => array(array(array('_route' => 'inventario', '_controller' => 'App\\Controller\\OdoogedonController::inventario'), null, null, null, false, false, null)),
            '/cerrarSesion' => array(array(array('_route' => 'cerrarSesion', '_controller' => 'App\\Controller\\OdoogedonController::cerrarSesion'), null, null, null, false, false, null)),
            '/ws/login' => array(array(array('_route' => 'wslogin', '_controller' => 'App\\Controller\\OdoogedonWebServiceController::login'), null, array('POST' => 0), null, false, false, null)),
            '/ws/inventario' => array(array(array('_route' => 'wsinventario', '_controller' => 'App\\Controller\\OdoogedonWebServiceController::inventario'), null, array('POST' => 0), null, false, false, null)),
            '/_profiler' => array(array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null, true, false, null)),
            '/_profiler/search' => array(array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null, false, false, null)),
            '/_profiler/search_bar' => array(array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null, false, false, null)),
            '/_profiler/phpinfo' => array(array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null, false, false, null)),
            '/_profiler/open' => array(array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null, false, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/producto/([^/]++)(*:25)'
                    .'|/comprado/([^/]++)(*:50)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:88)'
                        .'|wdt/([^/]++)(*:107)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:153)'
                                .'|router(*:167)'
                                .'|exception(?'
                                    .'|(*:187)'
                                    .'|\\.css(*:200)'
                                .')'
                            .')'
                            .'|(*:210)'
                        .')'
                    .')'
                .')/?$}sDu',
        );
        $this->dynamicRoutes = array(
            25 => array(array(array('_route' => 'producto', '_controller' => 'App\\Controller\\OdoogedonController::producto'), array('id'), null, null, false, true, null)),
            50 => array(array(array('_route' => 'comprado', '_controller' => 'App\\Controller\\OdoogedonController::comprado'), array('id'), null, null, false, true, null)),
            88 => array(array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false, true, null)),
            107 => array(array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null, false, true, null)),
            153 => array(array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null, false, false, null)),
            167 => array(array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null, false, false, null)),
            187 => array(array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null, false, false, null)),
            200 => array(array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null, false, false, null)),
            210 => array(array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null, false, true, null)),
        );
    }
}
