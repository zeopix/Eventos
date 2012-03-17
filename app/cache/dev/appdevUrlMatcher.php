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

        // _assetic_26fbbe1
        if ($pathinfo === '/css/26fbbe1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '26fbbe1',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_26fbbe1',);
        }

        // _assetic_26fbbe1_0
        if ($pathinfo === '/css/26fbbe1_bootstrap_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '26fbbe1',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_26fbbe1_0',);
        }

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

        // core_template_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'core_template_default_index');
            }
            return array (  '_controller' => 'Core\\TemplateBundle\\Controller\\DefaultController::indexAction',  '_route' => 'core_template_default_index',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
