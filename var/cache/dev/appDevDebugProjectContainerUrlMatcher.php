<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
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
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_security_login;
                }

                return $ret;
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_security_check;
                }

                return $ret;
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_profile_show;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_profile_show;
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_profile_edit;
                }

                return $ret;
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_change_password;
                }

                return $ret;
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_registration_register;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                }

                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_registration_register;
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_registration_check_email;
                }

                return $ret;
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirm;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirmed;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_request;
                }

                return $ret;
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_resetting_reset;
                }

                return $ret;
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_resetting_send_email;
                }

                return $ret;
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_check_email;
                }

                return $ret;
            }
            not_fos_user_resetting_check_email:

        }

        elseif (0 === strpos($pathinfo, '/E')) {
            if (0 === strpos($pathinfo, '/E/module')) {
                // module_index
                if ('/E/module' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'ElitBundle\\Controller\\ModuleController::indexAction',  '_route' => 'module_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_module_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'module_index'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_module_index;
                    }

                    return $ret;
                }
                not_module_index:

                // module_show
                if (preg_match('#^/E/module/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'module_show']), array (  '_controller' => 'ElitBundle\\Controller\\ModuleController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_module_show;
                    }

                    return $ret;
                }
                not_module_show:

                // module_new
                if ('/E/module/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'ElitBundle\\Controller\\ModuleController::newAction',  '_route' => 'module_new',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_module_new;
                    }

                    return $ret;
                }
                not_module_new:

                // module_edit
                if (preg_match('#^/E/module/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'module_edit']), array (  '_controller' => 'ElitBundle\\Controller\\ModuleController::editAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_module_edit;
                    }

                    return $ret;
                }
                not_module_edit:

                // module_delete
                if (preg_match('#^/E/module/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'module_delete']), array (  '_controller' => 'ElitBundle\\Controller\\ModuleController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_module_delete;
                    }

                    return $ret;
                }
                not_module_delete:

            }

            elseif (0 === strpos($pathinfo, '/E/lessons')) {
                // lessons_index
                if ('/E/lessons' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'ElitBundle\\Controller\\LessonsController::indexAction',  '_route' => 'lessons_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_lessons_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'lessons_index'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_lessons_index;
                    }

                    return $ret;
                }
                not_lessons_index:

                // lessons_show
                if (preg_match('#^/E/lessons/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'lessons_show']), array (  '_controller' => 'ElitBundle\\Controller\\LessonsController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_lessons_show;
                    }

                    return $ret;
                }
                not_lessons_show:

                // lessons_new
                if ('/E/lessons/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'ElitBundle\\Controller\\LessonsController::newAction',  '_route' => 'lessons_new',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_lessons_new;
                    }

                    return $ret;
                }
                not_lessons_new:

                // lessons_edit
                if (preg_match('#^/E/lessons/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'lessons_edit']), array (  '_controller' => 'ElitBundle\\Controller\\LessonsController::editAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_lessons_edit;
                    }

                    return $ret;
                }
                not_lessons_edit:

                // lessons_delete
                if (preg_match('#^/E/lessons/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'lessons_delete']), array (  '_controller' => 'ElitBundle\\Controller\\LessonsController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_lessons_delete;
                    }

                    return $ret;
                }
                not_lessons_delete:

            }

            elseif (0 === strpos($pathinfo, '/E/rendez')) {
                // rendez_index
                if ('/E/rendez' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'ElitBundle\\Controller\\rendezvousController::indexAction',  '_route' => 'rendez_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_rendez_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'rendez_index'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_rendez_index;
                    }

                    return $ret;
                }
                not_rendez_index:

                // rendez_show
                if (preg_match('#^/E/rendez/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'rendez_show']), array (  '_controller' => 'ElitBundle\\Controller\\rendezvousController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_rendez_show;
                    }

                    return $ret;
                }
                not_rendez_show:

                // rendez_new
                if ('/E/rendez/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'ElitBundle\\Controller\\rendezvousController::newAction',  '_route' => 'rendez_new',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_rendez_new;
                    }

                    return $ret;
                }
                not_rendez_new:

                // rendez_edit
                if (preg_match('#^/E/rendez/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'rendez_edit']), array (  '_controller' => 'ElitBundle\\Controller\\rendezvousController::editAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_rendez_edit;
                    }

                    return $ret;
                }
                not_rendez_edit:

                // rendez_delete
                if (preg_match('#^/E/rendez/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'rendez_delete']), array (  '_controller' => 'ElitBundle\\Controller\\rendezvousController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_rendez_delete;
                    }

                    return $ret;
                }
                not_rendez_delete:

            }

            elseif (0 === strpos($pathinfo, '/E/application')) {
                // application_index
                if ('/E/application' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'ElitBundle\\Controller\\applicationController::indexAction',  '_route' => 'application_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_application_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'application_index'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_application_index;
                    }

                    return $ret;
                }
                not_application_index:

                // application_show
                if (preg_match('#^/E/application/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'application_show']), array (  '_controller' => 'ElitBundle\\Controller\\applicationController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_application_show;
                    }

                    return $ret;
                }
                not_application_show:

                // application_new
                if ('/E/application/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'ElitBundle\\Controller\\applicationController::newAction',  '_route' => 'application_new',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_application_new;
                    }

                    return $ret;
                }
                not_application_new:

                // application_edit
                if (preg_match('#^/E/application/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'application_edit']), array (  '_controller' => 'ElitBundle\\Controller\\applicationController::editAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_application_edit;
                    }

                    return $ret;
                }
                not_application_edit:

                // application_delete
                if (preg_match('#^/E/application/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'application_delete']), array (  '_controller' => 'ElitBundle\\Controller\\applicationController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_application_delete;
                    }

                    return $ret;
                }
                not_application_delete:

            }

            elseif (0 === strpos($pathinfo, '/E/classes')) {
                // classes_index
                if ('/E/classes' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'ElitBundle\\Controller\\ClassesController::indexAction',  '_route' => 'classes_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_classes_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'classes_index'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_classes_index;
                    }

                    return $ret;
                }
                not_classes_index:

                // classes_show
                if (preg_match('#^/E/classes/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'classes_show']), array (  '_controller' => 'ElitBundle\\Controller\\ClassesController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_classes_show;
                    }

                    return $ret;
                }
                not_classes_show:

                // classes_new
                if ('/E/classes/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'ElitBundle\\Controller\\ClassesController::newAction',  '_route' => 'classes_new',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_classes_new;
                    }

                    return $ret;
                }
                not_classes_new:

                // classes_edit
                if (preg_match('#^/E/classes/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'classes_edit']), array (  '_controller' => 'ElitBundle\\Controller\\ClassesController::editAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_classes_edit;
                    }

                    return $ret;
                }
                not_classes_edit:

                // classes_delete
                if (preg_match('#^/E/classes/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'classes_delete']), array (  '_controller' => 'ElitBundle\\Controller\\ClassesController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_classes_delete;
                    }

                    return $ret;
                }
                not_classes_delete:

            }

            // elit_homepage
            if ('/E' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'ElitBundle\\Controller\\DefaultController::indexAction',  '_route' => 'elit_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_elit_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'elit_homepage'));
                }

                return $ret;
            }
            not_elit_homepage:

            // ajout_student
            if ('/E/S' === $pathinfo) {
                return array (  '_controller' => 'ElitBundle\\Controller\\StudentController::ajoutAction',  '_route' => 'ajout_student',);
            }

            // affiche_student
            if ('/E/A' === $pathinfo) {
                return array (  '_controller' => 'ElitBundle\\Controller\\StudentController::afficheAction',  '_route' => 'affiche_student',);
            }

            if (0 === strpos($pathinfo, '/E/classrooms')) {
                // classrooms_index
                if ('/E/classrooms' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'ElitBundle\\Controller\\ClassroomsController::indexAction',  '_route' => 'classrooms_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_classrooms_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'classrooms_index'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_classrooms_index;
                    }

                    return $ret;
                }
                not_classrooms_index:

                // classrooms_show
                if (preg_match('#^/E/classrooms/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'classrooms_show']), array (  '_controller' => 'ElitBundle\\Controller\\ClassroomsController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_classrooms_show;
                    }

                    return $ret;
                }
                not_classrooms_show:

                // classrooms_new
                if ('/E/classrooms/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'ElitBundle\\Controller\\ClassroomsController::newAction',  '_route' => 'classrooms_new',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_classrooms_new;
                    }

                    return $ret;
                }
                not_classrooms_new:

                // classrooms_edit
                if (preg_match('#^/E/classrooms/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'classrooms_edit']), array (  '_controller' => 'ElitBundle\\Controller\\ClassroomsController::editAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_classrooms_edit;
                    }

                    return $ret;
                }
                not_classrooms_edit:

                // classrooms_delete
                if (preg_match('#^/E/classrooms/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'classrooms_delete']), array (  '_controller' => 'ElitBundle\\Controller\\ClassroomsController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_classrooms_delete;
                    }

                    return $ret;
                }
                not_classrooms_delete:

            }

            elseif (0 === strpos($pathinfo, '/E/equipement')) {
                // equipement_index
                if ('/E/equipement' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'ElitBundle\\Controller\\EquipementController::indexAction',  '_route' => 'equipement_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_equipement_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'equipement_index'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_equipement_index;
                    }

                    return $ret;
                }
                not_equipement_index:

                // equipement_show
                if (preg_match('#^/E/equipement/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'equipement_show']), array (  '_controller' => 'ElitBundle\\Controller\\EquipementController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_equipement_show;
                    }

                    return $ret;
                }
                not_equipement_show:

                // equipement_new
                if ('/E/equipement/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'ElitBundle\\Controller\\EquipementController::newAction',  '_route' => 'equipement_new',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_equipement_new;
                    }

                    return $ret;
                }
                not_equipement_new:

                // equipement_edit
                if (preg_match('#^/E/equipement/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'equipement_edit']), array (  '_controller' => 'ElitBundle\\Controller\\EquipementController::editAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_equipement_edit;
                    }

                    return $ret;
                }
                not_equipement_edit:

                // equipement_delete
                if (preg_match('#^/E/equipement/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'equipement_delete']), array (  '_controller' => 'ElitBundle\\Controller\\EquipementController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_equipement_delete;
                    }

                    return $ret;
                }
                not_equipement_delete:

            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::backAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
