<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // _assetic_b98098e
        if ($pathinfo === '/js/b98098e.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b98098e',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_b98098e',);
        }

        // _assetic_b98098e_0
        if ($pathinfo === '/js/b98098e_part_1_README_1.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b98098e',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_b98098e_0',);
        }

        // _assetic_b98098e_1
        if ($pathinfo === '/js/b98098e_part_1_bootstrap-alert_2.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b98098e',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_b98098e_1',);
        }

        // _assetic_b98098e_2
        if ($pathinfo === '/js/b98098e_part_1_bootstrap-button_3.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b98098e',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_b98098e_2',);
        }

        // _assetic_b98098e_3
        if ($pathinfo === '/js/b98098e_part_1_bootstrap-carousel_4.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b98098e',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_b98098e_3',);
        }

        // _assetic_b98098e_4
        if ($pathinfo === '/js/b98098e_part_1_bootstrap-collapse_5.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b98098e',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_b98098e_4',);
        }

        // _assetic_b98098e_5
        if ($pathinfo === '/js/b98098e_part_1_bootstrap-dropdown_6.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b98098e',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_b98098e_5',);
        }

        // _assetic_b98098e_6
        if ($pathinfo === '/js/b98098e_part_1_bootstrap-modal_7.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b98098e',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_b98098e_6',);
        }

        // _assetic_b98098e_7
        if ($pathinfo === '/js/b98098e_part_1_bootstrap-popover_8.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b98098e',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_b98098e_7',);
        }

        // _assetic_b98098e_8
        if ($pathinfo === '/js/b98098e_part_1_bootstrap-scrollspy_9.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b98098e',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_b98098e_8',);
        }

        // _assetic_b98098e_9
        if ($pathinfo === '/js/b98098e_part_1_bootstrap-tab_10.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b98098e',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_b98098e_9',);
        }

        // _assetic_b98098e_10
        if ($pathinfo === '/js/b98098e_part_1_bootstrap-tooltip_11.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b98098e',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_b98098e_10',);
        }

        // _assetic_b98098e_11
        if ($pathinfo === '/js/b98098e_part_1_bootstrap-transition_12.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b98098e',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_b98098e_11',);
        }

        // _assetic_b98098e_12
        if ($pathinfo === '/js/b98098e_part_1_bootstrap-typeahead_13.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b98098e',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_b98098e_12',);
        }

        // _assetic_b98098e_13
        if ($pathinfo === '/js/b98098e_part_1_tests_14.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b98098e',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_b98098e_13',);
        }

        // _assetic_35a8e64
        if ($pathinfo === '/js/35a8e64.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '35a8e64',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_35a8e64',);
        }

        // _assetic_35a8e64_0
        if ($pathinfo === '/js/35a8e64_comments_1.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '35a8e64',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_35a8e64_0',);
        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // user_route
        if ($pathinfo === '/route') {
            return array (  '_controller' => 'Core\\UserBundle\\Controller\\DefaultController::routeAction',  '_route' => 'user_route',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // role_admin
            if (rtrim($pathinfo, '/') === '/admin/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'role_admin');
                }
                return array (  '_controller' => 'Role\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'role_admin',);
            }

            // role_admin_user
            if (rtrim($pathinfo, '/') === '/admin/admin/users') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'role_admin_user');
                }
                return array (  '_controller' => 'Role\\AdminBundle\\Controller\\UserController::indexAction',  '_route' => 'role_admin_user',);
            }

        }

        // role_user
        if (rtrim($pathinfo, '/') === '/secured') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'role_user');
            }
            return array (  '_controller' => 'Role\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'role_user',);
        }

        // core_foursquare_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Core\\FoursquareBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'core_foursquare_default_index'));
        }

        // fos_user_security_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
        }

        // fos_user_security_check
        if ($pathinfo === '/login_check') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
        }

        // fos_user_security_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
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
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
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

        }

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            // fos_user_registration_check_email
            if ($pathinfo === '/register/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_check_email;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            // fos_user_registration_confirm
            if (0 === strpos($pathinfo, '/register/confirm') && preg_match('#^/register/confirm/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirm;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',)), array('_route' => 'fos_user_registration_confirm'));
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
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',)), array('_route' => 'fos_user_resetting_reset'));
            }
            not_fos_user_resetting_reset:

        }

        // core_api
        if (rtrim($pathinfo, '/') === '/api') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'core_api');
            }
            return array (  '_controller' => 'Core\\ApiBundle\\Controller\\RestController::indexAction',  '_route' => 'core_api',);
        }

        // default
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'default');
            }
            return array (  '_controller' => 'Core\\TemplateBundle\\Controller\\DefaultController::indexAction',  '_route' => 'default',);
        }

        // default_success
        if ($pathinfo === '/success') {
            return array (  '_controller' => 'Core\\TemplateBundle\\Controller\\DefaultController::successAction',  '_route' => 'default_success',);
        }

        // default_promotores
        if ($pathinfo === '/promotores') {
            return array (  '_controller' => 'Core\\TemplateBundle\\Controller\\DefaultController::promotoresAction',  '_route' => 'default_promotores',);
        }

        // default_discotecas
        if ($pathinfo === '/discotecas') {
            return array (  '_controller' => 'Core\\TemplateBundle\\Controller\\DefaultController::discotecasAction',  '_route' => 'default_discotecas',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
