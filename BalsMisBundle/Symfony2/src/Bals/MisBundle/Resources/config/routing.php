<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;


$collection = new RouteCollection();
$collection->add('BalsMisBundle_homepage', new Route('/bals', array(
    '_controller' => 'BalsMisBundle:Default:index',
)));
$collection->add('BalsMisBundle_loginpage', new Route('/bals/login', array(
    '_controller' => 'BalsMisBundle:Default:login',
)));
$collection->add('BalsMisBundle_logoutpage', new Route('/bals/logout', array(
    '_controller' => 'BalsMisBundle:Default:logout',
)));
$collection->add('BalsMisBundle_loginspage', new Route('/bals/logins/{user}/{pass}', array(
    '_controller' => 'BalsMisBundle:Default:logins',
)));

$collection->add('BalsMisBundle_clcpage', new Route('/bals/{id}', array(
    '_controller' => 'BalsMisBundle:Default:clc',
)));

$collection->add('BalsMisBundle_clcprofilepage', new Route('/bals/{id}/profile', array(
    '_controller' => 'BalsMisBundle:Default:clc_profile',
)));
$collection->add('BalsMisBundle_clcprofilepagewithTab', new Route('/bals/{id}/profile/{tab}', array(
    '_controller' => 'BalsMisBundle:Default:clc_profilewithTab',
)));

//saves
$collection->add('BalsMisBundle_clcsavepage', new Route('/bals/{id}/saveCLC/{uName}/{uAddr}/{uSinc}/{uGeog}/{uRegi}/{uProv}/{uCity}/{uBara}/{uType}/{uLibr}/{uDivi}/{uDist}', array(
    '_controller' => 'BalsMisBundle:Default:clc_saveCLC',
)));
$collection->add('BalsMisBundle_learnersavepage', new Route('/bals/{id}/learners/{learnerId}/saveLearner/{ulname}/{ufname}/{umname}/{ubdate}/{ugender}/{ucivils}/{uhouse}', array(
    '_controller' => 'BalsMisBundle:Default:learner_saveLearner',
)));
$collection->add('BalsMisBundle_facilitatorsavepage', new Route('/bals/{id}/facilitators/0/{faciId}/saveFacilitator/{ulname}/{ufname}/{umname}/{uposit}/{ugende}/{uaddre}/{uother}/{usource}', array(
    '_controller' => 'BalsMisBundle:Default:facilitatorsave',
)));
//transfer learner
$collection->add('BalsMisBundle_transferpage', new Route('/bals/{id}/learners/{start}/{learnerId}/transfer/{clcid}/{reason}', array(
    '_controller' => 'BalsMisBundle:Default:transfer',
)));

//tabs
$collection->add('BalsMisBundle_learnerspage', new Route('/bals/{id}/learners', array(
    '_controller' => 'BalsMisBundle:Default:learners',
)));
$collection->add('BalsMisBundle_learnerspageWithStart', new Route('/bals/{id}/learners/{start}', array(
    '_controller' => 'BalsMisBundle:Default:learnersWithStart',
)));
$collection->add('BalsMisBundle_facilitatorspage', new Route('/bals/{id}/facilitators', array(
    '_controller' => 'BalsMisBundle:Default:facilitators',
)));
$collection->add('BalsMisBundle_facilitatorspageWithStart', new Route('/bals/{id}/facilitators/{start}', array(
    '_controller' => 'BalsMisBundle:Default:facilitatorsWithStart',
)));
$collection->add('BalsMisBundle_digiassetspage', new Route('/bals/{id}/assets', array(
    '_controller' => 'BalsMisBundle:Default:digiassets',
)));
$collection->add('BalsMisBundle_digiassetspageWithStart', new Route('/bals/{id}/assets/{start}', array(
    '_controller' => 'BalsMisBundle:Default:digiassetsWithStart',
)));
$collection->add('BalsMisBundle_reportspage', new Route('/bals/{id}/reports', array(
    '_controller' => 'BalsMisBundle:Default:reports',
)));

//assets save
$collection->add('BalsMisBundle_savedigiassetspage', new Route('/bals/{id}/assets/0/{daid}/saveassets/{name}/{link}/{rema}', array(
    '_controller' => 'BalsMisBundle:Default:savedigiassets',
)));
//asset remove
$collection->add('BalsMisBundle_removedigiassetspage', new Route('/bals/{id}/assets/0/{daid}/removeasset', array(
    '_controller' => 'BalsMisBundle:Default:removedigiassets',
)));

//LEARNER ROUTES VERSION 1
$collection->add('BalsMisBundle_learnersprofilepage', new Route('/bals/{id}/learners/{start}/{learnerId}', array(
    '_controller' => 'BalsMisBundle:Default:learnersprofile',
)));
$collection->add('BalsMisBundle_learnersprofilepagewithtab', new Route('/bals/{id}/learners/{start}/{learnerId}/{tab}', array(
    '_controller' => 'BalsMisBundle:Default:learnersprofilewithtab',
)));
$collection->add('BalsMisBundle_facilitatorprofilepage', new Route('/bals/{id}/facilitators/{start}/{facilitatorId}', array(
    '_controller' => 'BalsMisBundle:Default:facilitatorsprofile',
)));
$collection->add('BalsMisBundle_facilitatorAApage', new Route('/bals/{id}/facilitators/{start}/{facilitatorId}/{tab}/addAssign/{cs}', array(
    '_controller' => 'BalsMisBundle:Default:facilitatorsAA',
)));
$collection->add('BalsMisBundle_facilitatorRApage', new Route('/bals/{id}/facilitators/{start}/{facilitatorId}/{tab}/removeAssign/{cs}', array(
    '_controller' => 'BalsMisBundle:Default:facilitatorsRA',
)));

$collection->add('BalsMisBundle_facilitatorprofilepagewithtab', new Route('/bals/{id}/facilitators/{start}/{facilitatorId}/{tab}', array(
    '_controller' => 'BalsMisBundle:Default:facilitatorsprofilewithtab',
)));

//delete ap
$collection->add('BalsMisBundle_deleteappage', new Route('/bals/{id}/learners/{start}/{learnerId}/removeAP/{apid}', array(
    '_controller' => 'BalsMisBundle:Default:deleteap',
)));
//save ap
$collection->add('BalsMisBundle_saveappage', new Route('/bals/{id}/learners/{start}/{learnerId}/saveAP/{apid}/{cat}/{name}/{date}/{faci}/{score}/{stat}/{after}/{mode}', array(
    '_controller' => 'BalsMisBundle:Default:saveap',
)));

//routes additional CLC SP save
$collection->add('BalsMisBundle_spsavepage', new Route('/bals/{id}/profile/{tab}/serviceprovider/save/{spid}/{name}/{head}/{type}', array(
    '_controller' => 'BalsMisBundle:Default:clc_saveSP',
)));
//CLC SP ADD
$collection->add('BalsMisBundle_spaddpage', new Route('/bals/{id}/profile/{tab}/serviceprovider/add', array(
    '_controller' => 'BalsMisBundle:Default:clc_addSP',
)));
//routes additional CLC sa save
$collection->add('BalsMisBundle_sasavepage', new Route('/bals/{id}/profile/{tab}/supportingagencies/save/{said}/{name}/{head}', array(
    '_controller' => 'BalsMisBundle:Default:clc_saveSA',
)));
//CLC sa ADD
$collection->add('BalsMisBundle_saaddpage', new Route('/bals/{id}/profile/{tab}/supportingagencies/add', array(
    '_controller' => 'BalsMisBundle:Default:clc_addSA',
)));
//routes additional CLC li save
$collection->add('BalsMisBundle_lisavepage', new Route('/bals/{id}/profile/{tab}/learninginstitutions/save/{liid}/{name}/{head}', array(
    '_controller' => 'BalsMisBundle:Default:clc_saveLI',
)));
//CLC li ADD
$collection->add('BalsMisBundle_liaddpage', new Route('/bals/{id}/profile/{tab}/learninginstitutions/add', array(
    '_controller' => 'BalsMisBundle:Default:clc_addLI',
)));
//routes additional CLC pa save
$collection->add('BalsMisBundle_pasavepage', new Route('/bals/{id}/profile/{tab}/partners/save/{paid}/{name}/{head}', array(
    '_controller' => 'BalsMisBundle:Default:clc_savePA',
)));
//CLC pa ADD
$collection->add('BalsMisBundle_paaddpage', new Route('/bals/{id}/profile/{tab}/partners/add', array(
    '_controller' => 'BalsMisBundle:Default:clc_addPA',
)));
//new CLC
$collection->add('BalsMisBundle_CLCaddpage', new Route('/bals/{id}/newclc', array(
    '_controller' => 'BalsMisBundle:Default:clc_add',
)));
//assets add
$collection->add('BalsMisBundle_assetsaddpage', new Route('/bals/{id}/digiassetsadd', array(
    '_controller' => 'BalsMisBundle:Default:assets_add',
)));
//LEARNER ADD
$collection->add('BalsMisBundle_learneraddpage', new Route('/bals/{id}/learnersadd', array(
    '_controller' => 'BalsMisBundle:Default:learner_add',
)));
$collection->add('BalsMisBundle_learnerdeletepage', new Route('/bals/{id}/learnersdelete/{learnerid}', array(
    '_controller' => 'BalsMisBundle:Default:learner_delete',
)));
//FACI ADD
$collection->add('BalsMisBundle_facilitatoraddpage', new Route('/bals/{id}/facilitatorsadd', array(
    '_controller' => 'BalsMisBundle:Default:facilitator_add',
)));
$collection->add('BalsMisBundle_facilitatordeletepage', new Route('/bals/{id}/facilitatorsdelete/{faciid}', array(
    '_controller' => 'BalsMisBundle:Default:facilitator_delete',
)));
//Learner AP ADD
$collection->add('BalsMisBundle_learnerapaddpage', new Route('/bals/{id}/learners/0/{learnerid}/1/addAP', array(
    '_controller' => 'BalsMisBundle:Default:learnerap_add',
)));
return $collection;
