<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_welcome' => true,
       '_demo_login' => true,
       '_security_check' => true,
       '_demo_logout' => true,
       'acme_demo_secured_hello' => true,
       '_demo_secured_hello' => true,
       '_demo_secured_hello_admin' => true,
       '_demo' => true,
       '_demo_hello' => true,
       '_demo_contact' => true,
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'BalsMisBundle_homepage' => true,
       'BalsMisBundle_loginpage' => true,
       'BalsMisBundle_logoutpage' => true,
       'BalsMisBundle_loginspage' => true,
       'BalsMisBundle_clcpage' => true,
       'BalsMisBundle_clcprofilepage' => true,
       'BalsMisBundle_clcprofilepagewithTab' => true,
       'BalsMisBundle_clcsavepage' => true,
       'BalsMisBundle_learnersavepage' => true,
       'BalsMisBundle_facilitatorsavepage' => true,
       'BalsMisBundle_transferpage' => true,
       'BalsMisBundle_learnerspage' => true,
       'BalsMisBundle_learnerspageWithStart' => true,
       'BalsMisBundle_facilitatorspage' => true,
       'BalsMisBundle_facilitatorspageWithStart' => true,
       'BalsMisBundle_digiassetspage' => true,
       'BalsMisBundle_digiassetspageWithStart' => true,
       'BalsMisBundle_reportspage' => true,
       'BalsMisBundle_savedigiassetspage' => true,
       'BalsMisBundle_removedigiassetspage' => true,
       'BalsMisBundle_learnersprofilepage' => true,
       'BalsMisBundle_learnersprofilepagewithtab' => true,
       'BalsMisBundle_facilitatorprofilepage' => true,
       'BalsMisBundle_facilitatorAApage' => true,
       'BalsMisBundle_facilitatorRApage' => true,
       'BalsMisBundle_facilitatorprofilepagewithtab' => true,
       'BalsMisBundle_deleteappage' => true,
       'BalsMisBundle_saveappage' => true,
       'BalsMisBundle_spsavepage' => true,
       'BalsMisBundle_spaddpage' => true,
       'BalsMisBundle_sasavepage' => true,
       'BalsMisBundle_saaddpage' => true,
       'BalsMisBundle_lisavepage' => true,
       'BalsMisBundle_liaddpage' => true,
       'BalsMisBundle_pasavepage' => true,
       'BalsMisBundle_paaddpage' => true,
       'BalsMisBundle_CLCaddpage' => true,
       'BalsMisBundle_assetsaddpage' => true,
       'BalsMisBundle_learneraddpage' => true,
       'BalsMisBundle_learnerdeletepage' => true,
       'BalsMisBundle_facilitatoraddpage' => true,
       'BalsMisBundle_facilitatordeletepage' => true,
       'BalsMisBundle_learnerapaddpage' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_welcomeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function get_demo_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login',  ),));
    }

    private function get_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login_check',  ),));
    }

    private function get_demo_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/logout',  ),));
    }

    private function getacme_demo_secured_helloRouteInfo()
    {
        return array(array (), array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_hello_adminRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello/admin',  ),));
    }

    private function get_demoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/',  ),));
    }

    private function get_demo_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/hello',  ),));
    }

    private function get_demo_contactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/contact',  ),));
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getBalsMisBundle_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_loginpageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/bals/login',  ),));
    }

    private function getBalsMisBundle_logoutpageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/bals/logout',  ),));
    }

    private function getBalsMisBundle_loginspageRouteInfo()
    {
        return array(array (  0 => 'user',  1 => 'pass',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::loginsAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'pass',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'user',  ),  2 =>   array (    0 => 'text',    1 => '/bals/logins',  ),));
    }

    private function getBalsMisBundle_clcpageRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::clcAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_clcprofilepageRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::clc_profileAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/profile',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_clcprofilepagewithTabRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'tab',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::clc_profilewithTabAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'tab',  ),  1 =>   array (    0 => 'text',    1 => '/profile',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  3 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_clcsavepageRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'uName',  2 => 'uAddr',  3 => 'uSinc',  4 => 'uGeog',  5 => 'uRegi',  6 => 'uProv',  7 => 'uCity',  8 => 'uBara',  9 => 'uType',  10 => 'uLibr',  11 => 'uDivi',  12 => 'uDist',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::clc_saveCLCAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'uDist',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'uDivi',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'uLibr',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'uType',  ),  4 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'uBara',  ),  5 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'uCity',  ),  6 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'uProv',  ),  7 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'uRegi',  ),  8 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'uGeog',  ),  9 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'uSinc',  ),  10 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'uAddr',  ),  11 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'uName',  ),  12 =>   array (    0 => 'text',    1 => '/saveCLC',  ),  13 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  14 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_learnersavepageRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'learnerId',  2 => 'ulname',  3 => 'ufname',  4 => 'umname',  5 => 'ubdate',  6 => 'ugender',  7 => 'ucivils',  8 => 'uhouse',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::learner_saveLearnerAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'uhouse',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'ucivils',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'ugender',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'ubdate',  ),  4 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'umname',  ),  5 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'ufname',  ),  6 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'ulname',  ),  7 =>   array (    0 => 'text',    1 => '/saveLearner',  ),  8 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'learnerId',  ),  9 =>   array (    0 => 'text',    1 => '/learners',  ),  10 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  11 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_facilitatorsavepageRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'faciId',  2 => 'ulname',  3 => 'ufname',  4 => 'umname',  5 => 'uposit',  6 => 'ugende',  7 => 'uaddre',  8 => 'uother',  9 => 'usource',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::facilitatorsaveAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'usource',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'uother',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'uaddre',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'ugende',  ),  4 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'uposit',  ),  5 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'umname',  ),  6 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'ufname',  ),  7 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'ulname',  ),  8 =>   array (    0 => 'text',    1 => '/saveFacilitator',  ),  9 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'faciId',  ),  10 =>   array (    0 => 'text',    1 => '/facilitators/0',  ),  11 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  12 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_transferpageRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'start',  2 => 'learnerId',  3 => 'clcid',  4 => 'reason',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::transferAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'reason',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'clcid',  ),  2 =>   array (    0 => 'text',    1 => '/transfer',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'learnerId',  ),  4 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'start',  ),  5 =>   array (    0 => 'text',    1 => '/learners',  ),  6 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  7 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_learnerspageRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::learnersAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/learners',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_learnerspageWithStartRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'start',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::learnersWithStartAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'start',  ),  1 =>   array (    0 => 'text',    1 => '/learners',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  3 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_facilitatorspageRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::facilitatorsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/facilitators',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_facilitatorspageWithStartRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'start',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::facilitatorsWithStartAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'start',  ),  1 =>   array (    0 => 'text',    1 => '/facilitators',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  3 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_digiassetspageRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::digiassetsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/assets',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_digiassetspageWithStartRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'start',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::digiassetsWithStartAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'start',  ),  1 =>   array (    0 => 'text',    1 => '/assets',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  3 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_reportspageRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::reportsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/reports',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_savedigiassetspageRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'daid',  2 => 'name',  3 => 'link',  4 => 'rema',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::savedigiassetsAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'rema',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'link',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  3 =>   array (    0 => 'text',    1 => '/saveassets',  ),  4 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'daid',  ),  5 =>   array (    0 => 'text',    1 => '/assets/0',  ),  6 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  7 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_removedigiassetspageRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'daid',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::removedigiassetsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/removeasset',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'daid',  ),  2 =>   array (    0 => 'text',    1 => '/assets/0',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  4 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_learnersprofilepageRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'start',  2 => 'learnerId',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::learnersprofileAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'learnerId',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'start',  ),  2 =>   array (    0 => 'text',    1 => '/learners',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  4 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_learnersprofilepagewithtabRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'start',  2 => 'learnerId',  3 => 'tab',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::learnersprofilewithtabAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'tab',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'learnerId',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'start',  ),  3 =>   array (    0 => 'text',    1 => '/learners',  ),  4 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  5 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_facilitatorprofilepageRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'start',  2 => 'facilitatorId',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::facilitatorsprofileAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'facilitatorId',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'start',  ),  2 =>   array (    0 => 'text',    1 => '/facilitators',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  4 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_facilitatorAApageRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'start',  2 => 'facilitatorId',  3 => 'tab',  4 => 'cs',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::facilitatorsAAAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'cs',  ),  1 =>   array (    0 => 'text',    1 => '/addAssign',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'tab',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'facilitatorId',  ),  4 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'start',  ),  5 =>   array (    0 => 'text',    1 => '/facilitators',  ),  6 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  7 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_facilitatorRApageRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'start',  2 => 'facilitatorId',  3 => 'tab',  4 => 'cs',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::facilitatorsRAAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'cs',  ),  1 =>   array (    0 => 'text',    1 => '/removeAssign',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'tab',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'facilitatorId',  ),  4 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'start',  ),  5 =>   array (    0 => 'text',    1 => '/facilitators',  ),  6 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  7 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_facilitatorprofilepagewithtabRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'start',  2 => 'facilitatorId',  3 => 'tab',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::facilitatorsprofilewithtabAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'tab',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'facilitatorId',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'start',  ),  3 =>   array (    0 => 'text',    1 => '/facilitators',  ),  4 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  5 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_deleteappageRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'start',  2 => 'learnerId',  3 => 'apid',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::deleteapAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'apid',  ),  1 =>   array (    0 => 'text',    1 => '/removeAP',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'learnerId',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'start',  ),  4 =>   array (    0 => 'text',    1 => '/learners',  ),  5 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  6 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_saveappageRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'start',  2 => 'learnerId',  3 => 'apid',  4 => 'cat',  5 => 'name',  6 => 'date',  7 => 'faci',  8 => 'score',  9 => 'stat',  10 => 'after',  11 => 'mode',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::saveapAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'mode',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'after',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'stat',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'score',  ),  4 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'faci',  ),  5 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'date',  ),  6 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  7 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'cat',  ),  8 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'apid',  ),  9 =>   array (    0 => 'text',    1 => '/saveAP',  ),  10 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'learnerId',  ),  11 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'start',  ),  12 =>   array (    0 => 'text',    1 => '/learners',  ),  13 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  14 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_spsavepageRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'tab',  2 => 'spid',  3 => 'name',  4 => 'head',  5 => 'type',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::clc_saveSPAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'type',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'head',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'spid',  ),  4 =>   array (    0 => 'text',    1 => '/serviceprovider/save',  ),  5 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'tab',  ),  6 =>   array (    0 => 'text',    1 => '/profile',  ),  7 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  8 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_spaddpageRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'tab',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::clc_addSPAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/serviceprovider/add',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'tab',  ),  2 =>   array (    0 => 'text',    1 => '/profile',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  4 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_sasavepageRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'tab',  2 => 'said',  3 => 'name',  4 => 'head',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::clc_saveSAAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'head',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'said',  ),  3 =>   array (    0 => 'text',    1 => '/supportingagencies/save',  ),  4 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'tab',  ),  5 =>   array (    0 => 'text',    1 => '/profile',  ),  6 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  7 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_saaddpageRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'tab',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::clc_addSAAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/supportingagencies/add',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'tab',  ),  2 =>   array (    0 => 'text',    1 => '/profile',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  4 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_lisavepageRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'tab',  2 => 'liid',  3 => 'name',  4 => 'head',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::clc_saveLIAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'head',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'liid',  ),  3 =>   array (    0 => 'text',    1 => '/learninginstitutions/save',  ),  4 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'tab',  ),  5 =>   array (    0 => 'text',    1 => '/profile',  ),  6 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  7 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_liaddpageRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'tab',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::clc_addLIAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/learninginstitutions/add',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'tab',  ),  2 =>   array (    0 => 'text',    1 => '/profile',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  4 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_pasavepageRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'tab',  2 => 'paid',  3 => 'name',  4 => 'head',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::clc_savePAAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'head',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'paid',  ),  3 =>   array (    0 => 'text',    1 => '/partners/save',  ),  4 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'tab',  ),  5 =>   array (    0 => 'text',    1 => '/profile',  ),  6 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  7 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_paaddpageRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'tab',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::clc_addPAAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/partners/add',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'tab',  ),  2 =>   array (    0 => 'text',    1 => '/profile',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  4 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_CLCaddpageRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::clc_addAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/newclc',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_assetsaddpageRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::assets_addAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/digiassetsadd',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_learneraddpageRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::learner_addAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/learnersadd',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_learnerdeletepageRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'learnerid',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::learner_deleteAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'learnerid',  ),  1 =>   array (    0 => 'text',    1 => '/learnersdelete',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  3 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_facilitatoraddpageRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::facilitator_addAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/facilitatorsadd',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_facilitatordeletepageRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'faciid',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::facilitator_deleteAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'faciid',  ),  1 =>   array (    0 => 'text',    1 => '/facilitatorsdelete',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  3 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }

    private function getBalsMisBundle_learnerapaddpageRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'learnerid',), array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::learnerap_addAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/1/addAP',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'learnerid',  ),  2 =>   array (    0 => 'text',    1 => '/learners/0',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  4 =>   array (    0 => 'text',    1 => '/bals',  ),));
    }
}
