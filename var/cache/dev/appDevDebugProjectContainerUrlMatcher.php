<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css/app')) {
            // _assetic_d703ff6
            if ($pathinfo === '/css/app.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd703ff6',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_d703ff6',);
            }

            if (0 === strpos($pathinfo, '/css/app_')) {
                // _assetic_d703ff6_0
                if ($pathinfo === '/css/app_bootstrap.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd703ff6',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_d703ff6_0',);
                }

                // _assetic_d703ff6_1
                if ($pathinfo === '/css/app_style_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd703ff6',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_d703ff6_1',);
                }

                // _assetic_d703ff6_2
                if ($pathinfo === '/css/app_font-awesome.min_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd703ff6',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_d703ff6_2',);
                }

                // _assetic_d703ff6_3
                if ($pathinfo === '/css/app_animate_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd703ff6',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_d703ff6_3',);
                }

                if (0 === strpos($pathinfo, '/css/app_owl.')) {
                    // _assetic_d703ff6_4
                    if ($pathinfo === '/css/app_owl.carousel_5.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'd703ff6',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_d703ff6_4',);
                    }

                    if (0 === strpos($pathinfo, '/css/app_owl.t')) {
                        // _assetic_d703ff6_5
                        if ($pathinfo === '/css/app_owl.theme_6.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'd703ff6',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_d703ff6_5',);
                        }

                        // _assetic_d703ff6_6
                        if ($pathinfo === '/css/app_owl.transitions_7.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'd703ff6',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_d703ff6_6',);
                        }

                    }

                }

                // _assetic_d703ff6_7
                if ($pathinfo === '/css/app_responsive_8.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd703ff6',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_d703ff6_7',);
                }

            }

            // _assetic_4e60b51
            if ($pathinfo === '/css/app.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '4e60b51',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_4e60b51',);
            }

            if (0 === strpos($pathinfo, '/css/app_')) {
                // _assetic_4e60b51_0
                if ($pathinfo === '/css/app_bootstrap.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4e60b51',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_4e60b51_0',);
                }

                // _assetic_4e60b51_1
                if ($pathinfo === '/css/app_font-awesome.min_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4e60b51',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_4e60b51_1',);
                }

                // _assetic_4e60b51_2
                if ($pathinfo === '/css/app_animate_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4e60b51',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_4e60b51_2',);
                }

                if (0 === strpos($pathinfo, '/css/app_owl.')) {
                    // _assetic_4e60b51_3
                    if ($pathinfo === '/css/app_owl.carousel_4.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '4e60b51',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_4e60b51_3',);
                    }

                    if (0 === strpos($pathinfo, '/css/app_owl.t')) {
                        // _assetic_4e60b51_4
                        if ($pathinfo === '/css/app_owl.theme_5.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '4e60b51',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_4e60b51_4',);
                        }

                        // _assetic_4e60b51_5
                        if ($pathinfo === '/css/app_owl.transitions_6.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '4e60b51',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_4e60b51_5',);
                        }

                    }

                }

                // _assetic_4e60b51_6
                if ($pathinfo === '/css/app_responsive_7.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4e60b51',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_4e60b51_6',);
                }

                // _assetic_4e60b51_7
                if ($pathinfo === '/css/app_style_8.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4e60b51',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_4e60b51_7',);
                }

            }

            // _assetic_a564d35
            if ($pathinfo === '/css/app.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a564d35',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_a564d35',);
            }

            if (0 === strpos($pathinfo, '/css/app_')) {
                // _assetic_a564d35_0
                if ($pathinfo === '/css/app_bootstrap.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a564d35',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_a564d35_0',);
                }

                // _assetic_a564d35_1
                if ($pathinfo === '/css/app_font-awesome.min_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a564d35',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_a564d35_1',);
                }

                // _assetic_a564d35_2
                if ($pathinfo === '/css/app_animate_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a564d35',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_a564d35_2',);
                }

                if (0 === strpos($pathinfo, '/css/app_owl.')) {
                    // _assetic_a564d35_3
                    if ($pathinfo === '/css/app_owl.carousel_4.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a564d35',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_a564d35_3',);
                    }

                    if (0 === strpos($pathinfo, '/css/app_owl.t')) {
                        // _assetic_a564d35_4
                        if ($pathinfo === '/css/app_owl.theme_5.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a564d35',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_a564d35_4',);
                        }

                        // _assetic_a564d35_5
                        if ($pathinfo === '/css/app_owl.transitions_6.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a564d35',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_a564d35_5',);
                        }

                    }

                }

                // _assetic_a564d35_6
                if ($pathinfo === '/css/app_style_7.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a564d35',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_a564d35_6',);
                }

                // _assetic_a564d35_7
                if ($pathinfo === '/css/app_responsive_8.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a564d35',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_a564d35_7',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/app')) {
            // _assetic_f30651e
            if ($pathinfo === '/js/app.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f30651e',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_f30651e',);
            }

            if (0 === strpos($pathinfo, '/js/app_')) {
                // _assetic_f30651e_0
                if ($pathinfo === '/js/app_jquery-2.1.1.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f30651e',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_f30651e_0',);
                }

                // _assetic_f30651e_1
                if ($pathinfo === '/js/app_bootstrap.min_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f30651e',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_f30651e_1',);
                }

                // _assetic_f30651e_2
                if ($pathinfo === '/js/app_custom_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f30651e',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_f30651e_2',);
                }

                // _assetic_f30651e_3
                if ($pathinfo === '/js/app_nprogress_4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f30651e',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_f30651e_3',);
                }

                // _assetic_f30651e_4
                if ($pathinfo === '/js/app_carousel_5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f30651e',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_f30651e_4',);
                }

                // _assetic_f30651e_5
                if ($pathinfo === '/js/app_9c59445dbc_6.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f30651e',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_f30651e_5',);
                }

                // _assetic_f30651e_6
                if ($pathinfo === '/js/app_sb-admin-2_7.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f30651e',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_f30651e_6',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'home',);
        }

        // admin
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::adminIndexAction',  '_route' => 'admin',);
        }

        // contactUs
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::contactAction',  '_route' => 'contactUs',);
        }

        // participant-registration
        if ($pathinfo === '/register/participant') {
            return array (  '_controller' => 'AppBundle\\Controller\\ParticipantController::registerAction',  '_route' => 'participant-registration',);
        }

        if (0 === strpos($pathinfo, '/dashboard')) {
            // dashboard
            if ($pathinfo === '/dashboard') {
                return array (  '_controller' => 'AppBundle\\Controller\\ParticipantController::dashboardAction',  '_route' => 'dashboard',);
            }

            // receive-dashboard
            if ($pathinfo === '/dashboard/receive') {
                return array (  '_controller' => 'AppBundle\\Controller\\ParticipantController::receiveDashboardAction',  '_route' => 'receive-dashboard',);
            }

            // donate-dashboard
            if ($pathinfo === '/dashboard/donate') {
                return array (  '_controller' => 'AppBundle\\Controller\\ParticipantController::showProfileAction',  '_route' => 'donate-dashboard',);
            }

            // confirmed-dashboard
            if (0 === strpos($pathinfo, '/dashboard/confirmed') && preg_match('#^/dashboard/confirmed/(?P<reservationId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'confirmed-dashboard')), array (  '_controller' => 'AppBundle\\Controller\\ParticipantController::dashboardConfirmedAction',));
            }

            if (0 === strpos($pathinfo, '/dashboard/recycle')) {
                // recycle
                if (rtrim($pathinfo, '/') === '/dashboard/recycle') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'recycle');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ParticipantController::recycleIndexAction',  '_route' => 'recycle',);
                }

                // recycle-dashboard
                if (preg_match('#^/dashboard/recycle/(?P<packageId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'recycle-dashboard')), array (  '_controller' => 'AppBundle\\Controller\\ParticipantController::recycleAction',));
                }

            }

            if (0 === strpos($pathinfo, '/dashboard/p')) {
                // purge-dashboard
                if (0 === strpos($pathinfo, '/dashboard/purge') && preg_match('#^/dashboard/purge/(?P<reservationId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'purge-dashboard')), array (  '_controller' => 'AppBundle\\Controller\\ParticipantController::purgeAction',));
                }

                // paid-dashboard
                if (0 === strpos($pathinfo, '/dashboard/paid') && preg_match('#^/dashboard/paid/(?P<paymentId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paid-dashboard')), array (  '_controller' => 'AppBundle\\Controller\\ParticipantController::donationPaidAction',));
                }

            }

        }

        // noplan-dashboard
        if ($pathinfo === '/plan/notavailable') {
            return array (  '_controller' => 'AppBundle\\Controller\\ParticipantController::noPlanAction',  '_route' => 'noplan-dashboard',);
        }

        // payment-made
        if (0 === strpos($pathinfo, '/dashboard/payment') && preg_match('#^/dashboard/payment/(?P<reservationId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'payment-made')), array (  '_controller' => 'AppBundle\\Controller\\PaymentController::paymentMadeAction',));
        }

        // showProfileAccount
        if (0 === strpos($pathinfo, '/profile/account') && preg_match('#^/profile/account(?:/(?P<link>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'showProfileAccount')), array (  'link' => 'personalInfo',  '_controller' => 'AppBundle\\Controller\\ProfileController::showAccountAction',));
        }

        // raise-ticket
        if (rtrim($pathinfo, '/') === '/ticket/raise') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'raise-ticket');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\TicketController::ticketRaiseAction',  '_route' => 'raise-ticket',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
