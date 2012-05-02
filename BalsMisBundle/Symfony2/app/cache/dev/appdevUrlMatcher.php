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

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        if (0 === strpos($pathinfo, '/demo')) {
            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

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

        // BalsMisBundle_homepage
        if ($pathinfo === '/bals') {
            return array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::indexAction',  '_route' => 'BalsMisBundle_homepage',);
        }

        // BalsMisBundle_loginpage
        if ($pathinfo === '/bals/login') {
            return array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::loginAction',  '_route' => 'BalsMisBundle_loginpage',);
        }

        // BalsMisBundle_logoutpage
        if ($pathinfo === '/bals/logout') {
            return array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::logoutAction',  '_route' => 'BalsMisBundle_logoutpage',);
        }

        // BalsMisBundle_loginspage
        if (0 === strpos($pathinfo, '/bals/logins') && preg_match('#^/bals/logins/(?P<user>[^/]+?)/(?P<pass>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::loginsAction',)), array('_route' => 'BalsMisBundle_loginspage'));
        }

        // BalsMisBundle_clcpage
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::clcAction',)), array('_route' => 'BalsMisBundle_clcpage'));
        }

        // BalsMisBundle_clcprofilepage
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/profile$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::clc_profileAction',)), array('_route' => 'BalsMisBundle_clcprofilepage'));
        }

        // BalsMisBundle_clcprofilepagewithTab
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/profile/(?P<tab>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::clc_profilewithTabAction',)), array('_route' => 'BalsMisBundle_clcprofilepagewithTab'));
        }

        // BalsMisBundle_clcsavepage
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/saveCLC/(?P<uName>[^/]+?)/(?P<uAddr>[^/]+?)/(?P<uSinc>[^/]+?)/(?P<uGeog>[^/]+?)/(?P<uRegi>[^/]+?)/(?P<uProv>[^/]+?)/(?P<uCity>[^/]+?)/(?P<uBara>[^/]+?)/(?P<uType>[^/]+?)/(?P<uLibr>[^/]+?)/(?P<uDivi>[^/]+?)/(?P<uDist>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::clc_saveCLCAction',)), array('_route' => 'BalsMisBundle_clcsavepage'));
        }

        // BalsMisBundle_learnersavepage
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/learners/(?P<learnerId>[^/]+?)/saveLearner/(?P<ulname>[^/]+?)/(?P<ufname>[^/]+?)/(?P<umname>[^/]+?)/(?P<ubdate>[^/]+?)/(?P<ugender>[^/]+?)/(?P<ucivils>[^/]+?)/(?P<uhouse>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::learner_saveLearnerAction',)), array('_route' => 'BalsMisBundle_learnersavepage'));
        }

        // BalsMisBundle_facilitatorsavepage
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/facilitators/0/(?P<faciId>[^/]+?)/saveFacilitator/(?P<ulname>[^/]+?)/(?P<ufname>[^/]+?)/(?P<umname>[^/]+?)/(?P<uposit>[^/]+?)/(?P<ugende>[^/]+?)/(?P<uaddre>[^/]+?)/(?P<uother>[^/]+?)/(?P<usource>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::facilitatorsaveAction',)), array('_route' => 'BalsMisBundle_facilitatorsavepage'));
        }

        // BalsMisBundle_transferpage
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/learners/(?P<start>[^/]+?)/(?P<learnerId>[^/]+?)/transfer/(?P<clcid>[^/]+?)/(?P<reason>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::transferAction',)), array('_route' => 'BalsMisBundle_transferpage'));
        }

        // BalsMisBundle_learnerspage
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/learners$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::learnersAction',)), array('_route' => 'BalsMisBundle_learnerspage'));
        }

        // BalsMisBundle_learnerspageWithStart
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/learners/(?P<start>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::learnersWithStartAction',)), array('_route' => 'BalsMisBundle_learnerspageWithStart'));
        }

        // BalsMisBundle_facilitatorspage
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/facilitators$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::facilitatorsAction',)), array('_route' => 'BalsMisBundle_facilitatorspage'));
        }

        // BalsMisBundle_facilitatorspageWithStart
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/facilitators/(?P<start>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::facilitatorsWithStartAction',)), array('_route' => 'BalsMisBundle_facilitatorspageWithStart'));
        }

        // BalsMisBundle_digiassetspage
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/assets$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::digiassetsAction',)), array('_route' => 'BalsMisBundle_digiassetspage'));
        }

        // BalsMisBundle_digiassetspageWithStart
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/assets/(?P<start>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::digiassetsWithStartAction',)), array('_route' => 'BalsMisBundle_digiassetspageWithStart'));
        }

        // BalsMisBundle_reportspage
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/reports$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::reportsAction',)), array('_route' => 'BalsMisBundle_reportspage'));
        }

        // BalsMisBundle_savedigiassetspage
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/assets/0/(?P<daid>[^/]+?)/saveassets/(?P<name>[^/]+?)/(?P<link>[^/]+?)/(?P<rema>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::savedigiassetsAction',)), array('_route' => 'BalsMisBundle_savedigiassetspage'));
        }

        // BalsMisBundle_removedigiassetspage
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/assets/0/(?P<daid>[^/]+?)/removeasset$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::removedigiassetsAction',)), array('_route' => 'BalsMisBundle_removedigiassetspage'));
        }

        // BalsMisBundle_learnersprofilepage
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/learners/(?P<start>[^/]+?)/(?P<learnerId>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::learnersprofileAction',)), array('_route' => 'BalsMisBundle_learnersprofilepage'));
        }

        // BalsMisBundle_learnersprofilepagewithtab
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/learners/(?P<start>[^/]+?)/(?P<learnerId>[^/]+?)/(?P<tab>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::learnersprofilewithtabAction',)), array('_route' => 'BalsMisBundle_learnersprofilepagewithtab'));
        }

        // BalsMisBundle_facilitatorprofilepage
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/facilitators/(?P<start>[^/]+?)/(?P<facilitatorId>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::facilitatorsprofileAction',)), array('_route' => 'BalsMisBundle_facilitatorprofilepage'));
        }

        // BalsMisBundle_facilitatorAApage
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/facilitators/(?P<start>[^/]+?)/(?P<facilitatorId>[^/]+?)/(?P<tab>[^/]+?)/addAssign/(?P<cs>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::facilitatorsAAAction',)), array('_route' => 'BalsMisBundle_facilitatorAApage'));
        }

        // BalsMisBundle_facilitatorRApage
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/facilitators/(?P<start>[^/]+?)/(?P<facilitatorId>[^/]+?)/(?P<tab>[^/]+?)/removeAssign/(?P<cs>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::facilitatorsRAAction',)), array('_route' => 'BalsMisBundle_facilitatorRApage'));
        }

        // BalsMisBundle_facilitatorprofilepagewithtab
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/facilitators/(?P<start>[^/]+?)/(?P<facilitatorId>[^/]+?)/(?P<tab>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::facilitatorsprofilewithtabAction',)), array('_route' => 'BalsMisBundle_facilitatorprofilepagewithtab'));
        }

        // BalsMisBundle_deleteappage
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/learners/(?P<start>[^/]+?)/(?P<learnerId>[^/]+?)/removeAP/(?P<apid>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::deleteapAction',)), array('_route' => 'BalsMisBundle_deleteappage'));
        }

        // BalsMisBundle_saveappage
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/learners/(?P<start>[^/]+?)/(?P<learnerId>[^/]+?)/saveAP/(?P<apid>[^/]+?)/(?P<cat>[^/]+?)/(?P<name>[^/]+?)/(?P<date>[^/]+?)/(?P<faci>[^/]+?)/(?P<score>[^/]+?)/(?P<stat>[^/]+?)/(?P<after>[^/]+?)/(?P<mode>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::saveapAction',)), array('_route' => 'BalsMisBundle_saveappage'));
        }

        // BalsMisBundle_spsavepage
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/profile/(?P<tab>[^/]+?)/serviceprovider/save/(?P<spid>[^/]+?)/(?P<name>[^/]+?)/(?P<head>[^/]+?)/(?P<type>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::clc_saveSPAction',)), array('_route' => 'BalsMisBundle_spsavepage'));
        }

        // BalsMisBundle_spaddpage
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/profile/(?P<tab>[^/]+?)/serviceprovider/add$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::clc_addSPAction',)), array('_route' => 'BalsMisBundle_spaddpage'));
        }

        // BalsMisBundle_sasavepage
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/profile/(?P<tab>[^/]+?)/supportingagencies/save/(?P<said>[^/]+?)/(?P<name>[^/]+?)/(?P<head>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::clc_saveSAAction',)), array('_route' => 'BalsMisBundle_sasavepage'));
        }

        // BalsMisBundle_saaddpage
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/profile/(?P<tab>[^/]+?)/supportingagencies/add$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::clc_addSAAction',)), array('_route' => 'BalsMisBundle_saaddpage'));
        }

        // BalsMisBundle_lisavepage
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/profile/(?P<tab>[^/]+?)/learninginstitutions/save/(?P<liid>[^/]+?)/(?P<name>[^/]+?)/(?P<head>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::clc_saveLIAction',)), array('_route' => 'BalsMisBundle_lisavepage'));
        }

        // BalsMisBundle_liaddpage
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/profile/(?P<tab>[^/]+?)/learninginstitutions/add$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::clc_addLIAction',)), array('_route' => 'BalsMisBundle_liaddpage'));
        }

        // BalsMisBundle_pasavepage
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/profile/(?P<tab>[^/]+?)/partners/save/(?P<paid>[^/]+?)/(?P<name>[^/]+?)/(?P<head>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::clc_savePAAction',)), array('_route' => 'BalsMisBundle_pasavepage'));
        }

        // BalsMisBundle_paaddpage
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/profile/(?P<tab>[^/]+?)/partners/add$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::clc_addPAAction',)), array('_route' => 'BalsMisBundle_paaddpage'));
        }

        // BalsMisBundle_CLCaddpage
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/newclc$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::clc_addAction',)), array('_route' => 'BalsMisBundle_CLCaddpage'));
        }

        // BalsMisBundle_assetsaddpage
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/digiassetsadd$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::assets_addAction',)), array('_route' => 'BalsMisBundle_assetsaddpage'));
        }

        // BalsMisBundle_learneraddpage
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/learnersadd$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::learner_addAction',)), array('_route' => 'BalsMisBundle_learneraddpage'));
        }

        // BalsMisBundle_learnerdeletepage
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/learnersdelete/(?P<learnerid>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::learner_deleteAction',)), array('_route' => 'BalsMisBundle_learnerdeletepage'));
        }

        // BalsMisBundle_facilitatoraddpage
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/facilitatorsadd$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::facilitator_addAction',)), array('_route' => 'BalsMisBundle_facilitatoraddpage'));
        }

        // BalsMisBundle_facilitatordeletepage
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/facilitatorsdelete/(?P<faciid>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::facilitator_deleteAction',)), array('_route' => 'BalsMisBundle_facilitatordeletepage'));
        }

        // BalsMisBundle_learnerapaddpage
        if (0 === strpos($pathinfo, '/bals') && preg_match('#^/bals/(?P<id>[^/]+?)/learners/0/(?P<learnerid>[^/]+?)/1/addAP$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Bals\\MisBundle\\Controller\\DefaultController::learnerap_addAction',)), array('_route' => 'BalsMisBundle_learnerapaddpage'));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
