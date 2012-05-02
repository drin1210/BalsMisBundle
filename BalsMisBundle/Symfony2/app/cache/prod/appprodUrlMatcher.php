<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
