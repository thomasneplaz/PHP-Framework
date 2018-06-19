<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // location_delete
        if (0 === strpos($pathinfo, '/location') && preg_match('#^/location/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'location_delete')), array (  '_controller' => 'App\\Controller\\LocationController::delete',));
            if (!in_array($requestMethod, array('DELETE'))) {
                $allow = array_merge($allow, array('DELETE'));
                goto not_location_delete;
            }

            return $ret;
        }
        not_location_delete:

        if (0 === strpos($pathinfo, '/locations')) {
            // location
            if ('/locations' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\LocationController::index',  '_route' => 'location',);
            }

            // location_index
            if ('/locations' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\LocationController::index',  '_route' => 'location_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_location_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'location_index'));
                }

                return $ret;
            }
            not_location_index:

            // location_new
            if ('/locations/new' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\LocationController::new',  '_route' => 'location_new',);
            }

            // location_show
            if (preg_match('#^/locations/(?P<idModule>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'location_show')), array (  '_controller' => 'App\\Controller\\LocationController::show',));
            }

            // location_edit
            if (preg_match('#^/locations/(?P<idModule>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'location_edit')), array (  '_controller' => 'App\\Controller\\LocationController::edit',));
            }

        }

        elseif (0 === strpos($pathinfo, '/module')) {
            // modulemodule_index
            if ('/module' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\ModuleController::index',  '_route' => 'modulemodule_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_modulemodule_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'modulemodule_index'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_modulemodule_index;
                }

                return $ret;
            }
            not_modulemodule_index:

            // modulemodule_new
            if ('/module/new' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\ModuleController::new',  '_route' => 'modulemodule_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_modulemodule_new;
                }

                return $ret;
            }
            not_modulemodule_new:

            // modulemodule_show
            if (preg_match('#^/module/(?P<idModule>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'modulemodule_show')), array (  '_controller' => 'App\\Controller\\ModuleController::show',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_modulemodule_show;
                }

                return $ret;
            }
            not_modulemodule_show:

            // modulemodule_edit
            if (preg_match('#^/module/(?P<idModule>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'modulemodule_edit')), array (  '_controller' => 'App\\Controller\\ModuleController::edit',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_modulemodule_edit;
                }

                return $ret;
            }
            not_modulemodule_edit:

            // modulemodule_delete
            if (preg_match('#^/module/(?P<idModule>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'modulemodule_delete')), array (  '_controller' => 'App\\Controller\\ModuleController::delete',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_modulemodule_delete;
                }

                return $ret;
            }
            not_modulemodule_delete:

            // module
            if ('/module' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\ModuleController',  '_route' => 'module',);
            }

            // module_index
            if ('/module' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\ModuleController::index',  '_route' => 'module_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_module_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'module_index'));
                }

                return $ret;
            }
            not_module_index:

            // module_new
            if ('/module/new' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\ModuleController::new',  '_route' => 'module_new',);
            }

            // module_show
            if (preg_match('#^/module/(?P<idModule>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'module_show')), array (  '_controller' => 'App\\Controller\\ModuleController::show',));
            }

            // module_edit
            if (preg_match('#^/module/(?P<idModule>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'module_edit')), array (  '_controller' => 'App\\Controller\\ModuleController::edit',));
            }

        }

        elseif (0 === strpos($pathinfo, '/user')) {
            // user_index
            if ('/user' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\UserController::index',  '_route' => 'user_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_user_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'user_index'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_user_index;
                }

                return $ret;
            }
            not_user_index:

            // user_new
            if ('/user/new' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\UserController::new',  '_route' => 'user_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_user_new;
                }

                return $ret;
            }
            not_user_new:

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'App\\Controller\\UserController::show',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_user_show;
                }

                return $ret;
            }
            not_user_show:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'App\\Controller\\UserController::edit',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_user_edit;
                }

                return $ret;
            }
            not_user_edit:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'App\\Controller\\UserController::delete',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_user_delete;
                }

                return $ret;
            }
            not_user_delete:

        }

        elseif (0 === strpos($pathinfo, '/_')) {
            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

        }

        // home_page
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\AppController::indexAction',  '_route' => 'home_page',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_home_page;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'home_page'));
            }

            return $ret;
        }
        not_home_page:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
