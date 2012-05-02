<?php

namespace Bals\MisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


use Bals\MisBundle\Entity\CLC;
use Bals\MisBundle\Entity\Learner;
use Bals\MisBundle\Entity\Facilitator;
use Bals\MisBundle\Entity\CLC_Facilitators;
use Bals\MisBundle\Entity\ServiceProvider;
use Bals\MisBundle\Entity\CLC_ServiceProviders;

use Bals\MisBundle\Entity\SupportingAgencies;
use Bals\MisBundle\Entity\CLC_SupportingAgencies;
use Bals\MisBundle\Entity\LearningInstitutions;
use Bals\MisBundle\Entity\CLC_LearningInstitutions;
use Bals\MisBundle\Entity\Partners;
use Bals\MisBundle\Entity\CLC_Partners;

use Bals\MisBundle\Entity\AcademicProfile;
use Bals\MisBundle\Entity\DigiAssets;
use Bals\MisBundle\Entity\clc_DigiAssets;

use Bals\MisBundle\Entity\User;
use Bals\MisBundle\Entity\TransferReason;

use Bals\MisBundle\Entity\RegionDivisionDistrict;



class DefaultController extends Controller
{
    
    public function indexAction()
    {
        
        if(isset($_SESSION['trololol'])){
        
        
        $rootPage=$this->generateUrl('BalsMisBundle_homepage');
        $clcRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC');
	$clc = $clcRepo->findAll();
        
        $regionRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:Region');
	$region = $regionRepo->findAll();
        
        $divisionRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:RegionDivision');
	$division = $divisionRepo->findAll();
        
        $districtRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:RegionDivisionDistrict');
	$district = $districtRepo->findAll();
        
        
        
        return $this->render('BalsMisBundle:Default:index.html.php', array('clc'=>$clc,'region'=>$region,'division'=>$division,'district'=>$district,'rootPage'=>$rootPage,'usertype'=>$_SESSION['usertype']));
        }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
        }
    }
    
    public function reportsAction()
    {
        
        if(isset($_SESSION['trololol'])){
        
        
        $rootPage=$this->generateUrl('BalsMisBundle_homepage');
        $clcRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC');
	$clc = $clcRepo->findAll();
        
        
        return $this->render('BalsMisBundle:Default:generateReports.html.php', array('clc'=>$clc,'rootPage'=>$rootPage,'usertype'=>$_SESSION['usertype']));
        }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
        }
    }
    
    public function loginAction()
    {
        $rootPage=$this->generateUrl('BalsMisBundle_homepage');
        $clcRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC');
	$clc = $clcRepo->findAll();
        
        return $this->render('BalsMisBundle:Default:login.html.php', array('clc'=>$clc,'rootPage'=>$rootPage));
    }
    
    public function logoutAction(){
        session_destroy();
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login"); 
    }
    public function loginsAction($user,$pass)
    {
        $userRepo = $this->getDoctrine()
                        ->getRepository('BalsMisBundle:User');
        $users = $userRepo->findAll();
        
        foreach ($users as $item){
            if($item->getUsername()==$user){
                if($item->getPassword()==$pass){
                    $_SESSION['trololol']=$user;
                    $_SESSION['usertype']=$item->getType();
                    $_SESSION['loginstatus']="epic";
                    break;
                }else{
                    $_SESSION['loginstatus']="epicfail";
                }
            }else{
                $_SESSION['loginstatus']="epicfail";
            }
        }
        
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage'));
    }
    
    public function clcAction($id)
    {
    if(isset($_SESSION['trololol'])){
        /*
        $rootPage=$this->generateUrl('BalsMisBundle_homepage');
        $clcRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC');
	$clc = $clcRepo->find($id);
        
        
        return $this->render('BalsMisBundle:Default:clc_view.html.php', array('clc'=>$clc,'rootPage'=>$rootPage));
        */
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/".$id."/profile");
    
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }
    }
    public function clc_addAction($id){
    if(isset($_SESSION['trololol'])){    
        
        $rootPage=$this->generateUrl('BalsMisBundle_homepage');
        $newCLC = new CLC();
        $newCLC->setName('New CLC');
        $newCLC->setAddress('New CLC');
        $newCLC->setCLCSince(date_create());
        $newCLC->setgeographicId('New CLC');
        $newCLC->setRegion('New CLC');
        $newCLC->setProvince('New CLC');
        $newCLC->setDivision('New CLC');
        $newCLC->setDistrict('New CLC');
        $newCLC->setCityMunicipality('New CLC');
        $newCLC->setType('New CLC');
        $newCLC->setbarangay('New CLC');
        $newCLC->setWithFunctionalMobileLibrary('New CLC');
        
        $Repo = $this->getDoctrine()->getEntityManager();
        $Repo->persist($newCLC);
        $Repo->flush();
        
        $newCLCid=$newCLC->getId();
       
        
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/".$newCLCid."/profile");
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }
    }
    
     public function clc_profileAction($id)
    {if(isset($_SESSION['trololol'])){ 
        $tab=1;
        $rootPage=$this->generateUrl('BalsMisBundle_homepage');
        $clcRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC');
        $spRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:ServiceProvider');
        $clcspRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC_ServiceProviders');
        $saRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:SupportingAgencies');
        $clcsaRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC_SupportingAgencies');
        $liRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:LearningInstitutions');
        $clcliRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC_LearningInstitutions');
        $paRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:Partners');
        $clcpaRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC_Partners');
	
        
        $clc = $clcRepo->find($id);
        $sp = $spRepo->findAll();
        $clcsp = $clcspRepo->findAll();
        $sa = $saRepo->findAll();
        $clcsa = $clcsaRepo->findAll();
        $li = $liRepo->findAll();
        $clcli = $clcliRepo->findAll();
        $pa = $paRepo->findAll();
        $clcpa = $clcpaRepo->findAll();
        
        return $this->render('BalsMisBundle:Default:clc_view_profile.html.php', array('tab'=>$tab,'clc'=>$clc,'sp'=>$sp,'clcsp'=>$clcsp,'sa'=>$sa,'clcsa'=>$clcsa,'li'=>$li,'clcli'=>$clcli,'pa'=>$pa,'clcpa'=>$clcpa,'rootPage'=>$rootPage,'usertype'=>$_SESSION['usertype']));
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }}
     public function clc_profilewithTabAction($id,$tab)
    {if(isset($_SESSION['trololol'])){ 
        $rootPage=$this->generateUrl('BalsMisBundle_homepage');
        $clcRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC');
        $spRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:ServiceProvider');
        $clcspRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC_ServiceProviders');
        $saRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:SupportingAgencies');
        $clcsaRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC_SupportingAgencies');
        $liRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:LearningInstitutions');
        $clcliRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC_LearningInstitutions');
        $paRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:Partners');
        $clcpaRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC_Partners');
	
        
        $clc = $clcRepo->find($id);
        $sp = $spRepo->findAll();
        $clcsp = $clcspRepo->findAll();
        $sa = $saRepo->findAll();
        $clcsa = $clcsaRepo->findAll();
        $li = $liRepo->findAll();
        $clcli = $clcliRepo->findAll();
        $pa = $paRepo->findAll();
        $clcpa = $clcpaRepo->findAll();
        
        return $this->render('BalsMisBundle:Default:clc_view_profile.html.php', array('tab'=>$tab,'clc'=>$clc,'sp'=>$sp,'clcsp'=>$clcsp,'sa'=>$sa,'clcsa'=>$clcsa,'li'=>$li,'clcli'=>$clcli,'pa'=>$pa,'clcpa'=>$clcpa,'rootPage'=>$rootPage,'usertype'=>$_SESSION['usertype']));
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }}
    //clc SP ADD
    public function clc_addSPAction($id,$tab)
    {if(isset($_SESSION['trololol'])){
        $newSP = new ServiceProvider();
        $newSP->setName('New SP');
        $newSP->setHead('New SP');
        $newSP->setType('New SP');
        
        $Repo = $this->getDoctrine()->getEntityManager();
        $Repo->persist($newSP);
        $Repo->flush();
        
        $newspid=$newSP->getId();
        
        $newCLCSP = new CLC_ServiceProviders();
        $newCLCSP->setCLCId($id);
        $newCLCSP->setServiceProviderId($newspid);
        $Repo->persist($newCLCSP);
        $Repo->flush();
        
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/".$id."/profile/2");
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }}
    //clc SP ADD
    public function clc_addSAAction($id,$tab)
    {if(isset($_SESSION['trololol'])){
        $newSP = new SupportingAgencies();
        $newSP->setName('New SA');
        $newSP->setHead('New SA');
        //$newSP->setType('New SA');
        
        $Repo = $this->getDoctrine()->getEntityManager();
        $Repo->persist($newSP);
        $Repo->flush();
        
        $newspid=$newSP->getId();
        
        $newCLCSP = new CLC_SupportingAgencies();
        $newCLCSP->setCLCId($id);
        $newCLCSP->setSaId($newspid);
        $Repo->persist($newCLCSP);
        $Repo->flush();
        
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/".$id."/profile/3");
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }}
    //add LI
    public function clc_addLIAction($id,$tab)
    {if(isset($_SESSION['trololol'])){
        $newSP = new LearningInstitutions();
        $newSP->setName('New LI');
        $newSP->setHead('New LI');
        //$newSP->setType('New LI');
        
        $Repo = $this->getDoctrine()->getEntityManager();
        $Repo->persist($newSP);
        $Repo->flush();
        
        $newspid=$newSP->getId();
        
        $newCLCSP = new CLC_LearningInstitutions();
        $newCLCSP->setCLCId($id);
        $newCLCSP->setLiId($newspid);
        $Repo->persist($newCLCSP);
        $Repo->flush();
        
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/".$id."/profile/4");
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }}
    
    public function savedigiassetsAction($id,$daid,$name,$link,$rema)
    {if(isset($_SESSION['trololol'])){
        $Repo = $this->getDoctrine()->getEntityManager();
        $daToUpdate = $Repo->getRepository('BalsMisBundle:DigiAssets')->find($daid);
        $daToUpdate -> setName($name);
        $daToUpdate -> setLink($link);
        $daToUpdate -> setRemarks($rema);
        $Repo->flush();
        
        $rootPage=$this->generateUrl('BalsMisBundle_homepage');
        $clcRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC');
	$clc = $clcRepo->find($id);
        
        
        
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/".$id."/assets");
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }}
    
    //add pa
    public function clc_addPAAction($id,$tab)
    {if(isset($_SESSION['trololol'])){
        $newSP = new Partners();
        $newSP->setName('New PA');
        $newSP->setHead('New PA');
        //$newSP->setType('New PA');
        
        $Repo = $this->getDoctrine()->getEntityManager();
        $Repo->persist($newSP);
        $Repo->flush();
        
        $newspid=$newSP->getId();
        
        $newCLCSP = new CLC_Partners();
        $newCLCSP->setCLCId($id);
        $newCLCSP->setPaId($newspid);
        $Repo->persist($newCLCSP);
        $Repo->flush();
        
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/".$id."/profile/5");
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }}
    
    public function assets_addAction($id)
    {if(isset($_SESSION['trololol'])){
        $newAsset = new DigiAssets();
        $newAsset->setName('New Asset');
        $newAsset->setLink('New Asset');
        $newAsset->setRemarks('New Asset');
        
        $Repo = $this->getDoctrine()->getEntityManager();
        $Repo->persist($newAsset);
        $Repo->flush();
        
        $newCLCAsset = new clc_DigiAssets();
        $newCLCAsset -> setClcId($id);
        $newCLCAsset -> setDigiAssetsId($newAsset->getId());
        $Repo->persist($newCLCAsset);
        $Repo->flush();
        
        $start=$newAsset->getId()-10;
        if($start<15){
            $start=0;
        }
        
        
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/".$id."/assets/".$start);
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }}
    
    //learner_add
    
    public function learner_deleteAction($id,$learnerid){
        if(isset($_SESSION['trololol'])){
        
        $Repo = $this->getDoctrine()->getEntityManager();
        $learner = $Repo->getRepository('BalsMisBundle:Learner')->find($learnerid);
        $Repo->remove($learner);
        $Repo->flush();
        
            return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/".$id."/learners");
        }else{
            return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
        }
    }
    public function facilitator_deleteAction($id,$faciid){
        if(isset($_SESSION['trololol'])){
        
        $Repo = $this->getDoctrine()->getEntityManager();
        $faci = $Repo->getRepository('BalsMisBundle:Facilitator')->find($faciid);
        $Repo->remove($faci);
        $Repo->flush();
        
            return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/".$id."/facilitators");
        }else{
            return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
        }
    }
    
    public function learner_addAction($id)
    {if(isset($_SESSION['trololol'])){
        $newLearner = new Learner();
        $newLearner->setLastName('New Learner');
        $newLearner->setFirstName('New Learner');
        $newLearner->setMiddleName('New Learner');
        //$date = strtotime( '2000-01-01' );
        $newLearner->setbirthdate(date_create());
        $newLearner->setGender('M');
        $newLearner->setHouseholdPosition('New Learner');
        $newLearner->setCivilStatus('New Learner');
        $newLearner->setCLCEnlisted($id);
        
        $Repo = $this->getDoctrine()->getEntityManager();
        $Repo->persist($newLearner);
        $Repo->flush();
        
        $lernerid=$newLearner->getId();
       
        
        
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/".$id."/learners/0/".$lernerid);
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }}
    public function facilitator_addAction($id)
    {if(isset($_SESSION['trololol'])){
        $newFaci = new Facilitator();
        $newFaci->setLastName('New Facilitator');
        $newFaci->setFirstName('New Facilitator');
        $newFaci->setMiddleName('New Facilitator');
        //$date = strtotime( '2000-01-01' );
        //$newFaci->setbirthdate(date_create());
        $newFaci->setGender('M');
        $newFaci->setPosition('New Facilitator');
        $newFaci->setAddress('New Facilitator');
        //$newFaci->setCLCEnlisted($id);
        $newFaci->setOtherEmployment('New Facilitator');
        
        $Repo = $this->getDoctrine()->getEntityManager();
        $Repo->persist($newFaci);
        $Repo->flush();
        
        $newCLCFaci = new CLC_Facilitators();
        $newCLCFaci->setCLCId($id);
        $newCLCFaci->setFacilitatorId($newFaci->getId());
        
        $Repo->persist($newCLCFaci);
        $Repo->flush();
        
        
        $faciid=$newFaci->getId();
        
        
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/".$id."/facilitators/0/".$faciid);
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }}
    
    //saves
    public function clc_saveSAAction($id,$said,$name,$head)
    {if(isset($_SESSION['trololol'])){
        $Repo = $this->getDoctrine()->getEntityManager();
        $SPToUpdate = $Repo->getRepository('BalsMisBundle:SupportingAgencies')->find($said);
        $SPToUpdate -> setName($name);
        $SPToUpdate -> setHead($head);
        //$SPToUpdate -> setType($type);
        //$LearnerToUpdate -> setBirthdate(strtotime($ubdate));
        //$LearnerToUpdate -> setGender($ugender);
        $Repo->flush();
        
        $rootPage=$this->generateUrl('BalsMisBundle_homepage');
        $clcRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC');
	$clc = $clcRepo->find($id);
        
        
        
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/".$id."/profile/3");
        //return $this->render('BalsMisBundle:Default:clc_view_profile.html.php', array('clc'=>$clc,'rootPage'=>$rootPage));
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }}
    public function clc_saveLIAction($id,$liid,$name,$head)
    {if(isset($_SESSION['trololol'])){
        $Repo = $this->getDoctrine()->getEntityManager();
        $SPToUpdate = $Repo->getRepository('BalsMisBundle:LearningInstitutions')->find($liid);
        $SPToUpdate -> setName($name);
        $SPToUpdate -> setHead($head);
        //$SPToUpdate -> setType($type);
        //$LearnerToUpdate -> setBirthdate(strtotime($ubdate));
        //$LearnerToUpdate -> setGender($ugender);
        $Repo->flush();
        
        $rootPage=$this->generateUrl('BalsMisBundle_homepage');
        $clcRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC');
	$clc = $clcRepo->find($id);
        
        
        
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/".$id."/profile/4");
        //return $this->render('BalsMisBundle:Default:clc_view_profile.html.php', array('clc'=>$clc,'rootPage'=>$rootPage));
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }}
    public function clc_savePAAction($id,$paid,$name,$head)
    {if(isset($_SESSION['trololol'])){
        $Repo = $this->getDoctrine()->getEntityManager();
        $SPToUpdate = $Repo->getRepository('BalsMisBundle:Partners')->find($paid);
        $SPToUpdate -> setName($name);
        $SPToUpdate -> setHead($head);
        //$SPToUpdate -> setType($type);
        //$LearnerToUpdate -> setBirthdate(strtotime($ubdate));
        //$LearnerToUpdate -> setGender($ugender);
        $Repo->flush();
        
        $rootPage=$this->generateUrl('BalsMisBundle_homepage');
        $clcRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC');
	$clc = $clcRepo->find($id);
        
        
        
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/".$id."/profile/5");
        //return $this->render('BalsMisBundle:Default:clc_view_profile.html.php', array('clc'=>$clc,'rootPage'=>$rootPage));
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }}
    
    public function clc_saveSPAction($id,$spid,$name,$head,$type)
    {if(isset($_SESSION['trololol'])){
        $Repo = $this->getDoctrine()->getEntityManager();
        $SPToUpdate = $Repo->getRepository('BalsMisBundle:ServiceProvider')->find($spid);
        $SPToUpdate -> setName($name);
        $SPToUpdate -> setHead($head);
        $SPToUpdate -> setType($type);
        //$LearnerToUpdate -> setBirthdate(strtotime($ubdate));
        //$LearnerToUpdate -> setGender($ugender);
        $Repo->flush();
        
        $rootPage=$this->generateUrl('BalsMisBundle_homepage');
        $clcRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC');
	$clc = $clcRepo->find($id);
        
        
        
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/".$id."/profile/2");
        //return $this->render('BalsMisBundle:Default:clc_view_profile.html.php', array('clc'=>$clc,'rootPage'=>$rootPage));
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }}
    public function learner_saveLearnerAction($id,$learnerId,$ulname,$ufname,$umname,$ubdate,$ugender,$ucivils,$uhouse)
    {if(isset($_SESSION['trololol'])){
        $Repo = $this->getDoctrine()->getEntityManager();
        $LearnerToUpdate = $Repo->getRepository('BalsMisBundle:Learner')->find($learnerId);
        $LearnerToUpdate -> setLastName($ulname);
        $LearnerToUpdate -> setFirstName($ufname);
        $LearnerToUpdate -> setMiddleName($umname);
        $LearnerToUpdate -> setBirthdate(date_create($ubdate));
        $LearnerToUpdate -> setGender($ugender);
        $LearnerToUpdate -> setCivilStatus($ucivils);
        $LearnerToUpdate -> setHouseholdPosition($uhouse);
        $Repo->flush();
        
        $rootPage=$this->generateUrl('BalsMisBundle_homepage');
        $clcRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC');
	$clc = $clcRepo->find($id);
        
        
        
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/".$id."/learners/0/".$learnerId);
        //return $this->render('BalsMisBundle:Default:clc_view_profile.html.php', array('clc'=>$clc,'rootPage'=>$rootPage));
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }}
    public function facilitatorsaveAction($id,$faciId,$ulname,$ufname,$umname,$uposit,$ugende,$uaddre,$uother,$usource)
    {if(isset($_SESSION['trololol'])){
        $Repo = $this->getDoctrine()->getEntityManager();
        $facilitatorToUpdate = $Repo->getRepository('BalsMisBundle:Facilitator')->find($faciId);
        $facilitatorToUpdate -> setLastName($ulname);
        $facilitatorToUpdate -> setFirstName($ufname);
        $facilitatorToUpdate -> setMiddleName($umname);
        $facilitatorToUpdate -> setDesignation($uposit);
        $facilitatorToUpdate -> setGender($ugende);
        $facilitatorToUpdate -> setAddress($uaddre);
        $facilitatorToUpdate -> setOtherEmployment($uother);
        $facilitatorToUpdate -> setSourceOfFunds($usource);
        $Repo->flush();
        
        $rootPage=$this->generateUrl('BalsMisBundle_homepage');
        $clcRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC');
	$clc = $clcRepo->find($id);
        
        
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/".$id."/facilitators/0/".$faciId);
        //return $this->render('BalsMisBundle:Default:clc_view_profile.html.php', array('clc'=>$clc,'rootPage'=>$rootPage));
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }}
    
    public function clc_saveCLCAction($id,$uName,$uAddr,$uSinc,$uGeog,$uRegi,$uProv,$uCity,$uBara,$uType,$uLibr,$uDivi,$uDist)
    {if(isset($_SESSION['trololol'])){
        $Repo = $this->getDoctrine()->getEntityManager();
        $CLCToUpdate = $Repo->getRepository('BalsMisBundle:CLC')->find($id);
        $CLCToUpdate -> setName($uName);
        $CLCToUpdate -> setAddress($uAddr);
        $CLCToUpdate -> setType($uType);
        $CLCToUpdate -> setWithFunctionalMobileLibrary($uLibr);
        $CLCToUpdate -> setCLCSince(date_create($uSinc));
        $CLCToUpdate -> setGeographicId($uGeog);
        $CLCToUpdate -> setRegion($uRegi);
        $CLCToUpdate -> setProvince($uProv);
        $CLCToUpdate -> setCityMunicipality($uCity);
        $CLCToUpdate -> setDivision($uDivi);
        $CLCToUpdate -> setDistrict($uDist);
        $CLCToUpdate -> setBarangay($uBara);
        $Repo->flush();
        
        $rootPage=$this->generateUrl('BalsMisBundle_homepage');
        $clcRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC');
	$clc = $clcRepo->find($id);
        
        
        
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/".$id."/profile");
        //return $this->render('BalsMisBundle:Default:clc_view_profile.html.php', array('clc'=>$clc,'rootPage'=>$rootPage));
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }}
    
    
    //transferlearner
    public function transferAction($id,$start,$learnerId,$clcid,$reason)
    {if(isset($_SESSION['trololol'])){
        $Repo = $this->getDoctrine()->getEntityManager();
        $LearnerToUpdate = $Repo->getRepository('BalsMisBundle:Learner')->find($learnerId);
        $oldCLC = $LearnerToUpdate ->getCLCEnlisted();
        $LearnerToUpdate -> setCLCEnlisted($clcid);
        $Repo->flush();
        
        $newTransfer = new TransferReason();
        $newTransfer ->setClcFrom($oldCLC);
        $newTransfer ->setClcTo($clcid);
        $newTransfer ->setReason($reason);
        $Repo = $this->getDoctrine()->getEntityManager();
        $Repo->persist($newTransfer);
        $Repo->flush();
        
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/".$id."/learners");
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }}
    
    
    
    //tabs
    public function learnersAction($id)
    {if(isset($_SESSION['trololol'])){
        $rootPage=$this->generateUrl('BalsMisBundle_homepage');
        $clcRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC');
        $learnerRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:Learner');
                        
	$clc = $clcRepo->find($id);
        $clcs = $clcRepo->findAll();
        $learners = $learnerRepo->findAll();

        return $this->render('BalsMisBundle:Default:learners.html.php', array('clc'=>$clc,'clcs'=>$clcs,'rootPage'=>$rootPage,'learners'=>$learners,'start'=>$start=0,'usertype'=>$_SESSION['usertype']));
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }}
    public function learnersWithStartAction($id,$start)
    {if(isset($_SESSION['trololol'])){
        $rootPage=$this->generateUrl('BalsMisBundle_homepage');
        $clcRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC');
        $learnerRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:Learner');
                        
	$clc = $clcRepo->find($id);
        $learners = $learnerRepo->findAll();
        $clcs = $clcRepo->findAll();
        $learners = $learnerRepo->findAll();

        return $this->render('BalsMisBundle:Default:learners.html.php', array('clc'=>$clc,'clcs'=>$clcs,'rootPage'=>$rootPage,'learners'=>$learners,'start'=>$start,'usertype'=>$_SESSION['usertype']));
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }}
    
    public function facilitatorsAction($id)
    {if(isset($_SESSION['trololol'])){
        $rootPage=$this->generateUrl('BalsMisBundle_homepage');
        $clcRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC');
        $faciRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:Facilitator');
        $clcFaciRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC_Facilitators');                
                        
	$clc = $clcRepo->find($id);
        $faci = $faciRepo->findAll();
        $clcFaci = $clcFaciRepo->findAll();

        return $this->render('BalsMisBundle:Default:facilitators.html.php', array('clc'=>$clc,'rootPage'=>$rootPage,'facilitators'=>$faci,'clcfaci'=>$clcFaci,'start'=>$start=0,'usertype'=>$_SESSION['usertype']));
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }}
    public function facilitatorsWithStartAction($id,$start)
    {if(isset($_SESSION['trololol'])){
        $rootPage=$this->generateUrl('BalsMisBundle_homepage');
        $clcRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC');
        $faciRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:Facilitator');
        $clcFaciRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC_Facilitators');
                        
	$clc = $clcRepo->find($id);
        $faci = $faciRepo->findAll();
        $clcFaci = $clcFaciRepo->findAll();

        return $this->render('BalsMisBundle:Default:facilitators.html.php', array('clc'=>$clc,'rootPage'=>$rootPage,'facilitators'=>$faci,'clcfaci'=>$clcFaci,'start'=>$start,'usertype'=>$_SESSION['usertype']));
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }}
    
    
    //tabs
    
    //faci add aa
     public function facilitatorsAAAction($id,$start,$facilitatorId,$tab,$cs)
    {if(isset($_SESSION['trololol'])){
        
        $newAP = new CLC_Facilitators();
        $newAP->setClcId($cs);
        $newAP->setFacilitatorId($facilitatorId);
        
        $Repo = $this->getDoctrine()->getEntityManager();
        $Repo->persist($newAP);
        $Repo->flush();
        
       
        
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/".$id."/facilitators/0/".$facilitatorId."/2");
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }}
    
    //faci remove aa
    
     public function facilitatorsRAAction($id,$start,$facilitatorId,$tab,$cs)
    {if(isset($_SESSION['trololol'])){
        
        $Repo = $this->getDoctrine()->getEntityManager();
        $AP = $Repo->getRepository('BalsMisBundle:CLC_Facilitators')->find($cs);
        $Repo->remove($AP);
        $Repo->flush();
        
        
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/".$id."/facilitators/0/".$facilitatorId."/2");
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }}
    
    //LEARNER AP ADD
    public function learnerap_addAction($id,$learnerid)
    {if(isset($_SESSION['trololol'])){
        
        $newAP = new AcademicProfile();
        $newAP->setLearnersId($learnerid);
        $newAP->setProgramCategory('NewAP');
        $newAP->setProgramName('NewAP');
        $newAP->setDateEnlisted(date_create());
        $newAP->setAssignedFacilitator(0);
        $newAP->setScore('0');
        $newAP->setModality('NewAP');
        $newAP->setStatus('NewAP');
        $newAP->setStatusAfterProgram('NewAP');
        
        $Repo = $this->getDoctrine()->getEntityManager();
        $Repo->persist($newAP);
        $Repo->flush();
        
       
        
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/".$id."/learners/0/".$learnerid."/2");
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }}
    //delete delete ap
    public function deleteapAction($id,$learnerId,$apid)
    {if(isset($_SESSION['trololol'])){
        
        $Repo = $this->getDoctrine()->getEntityManager();
        $AP = $Repo->getRepository('BalsMisBundle:AcademicProfile')->find($apid);
        $Repo->remove($AP);
        $Repo->flush();
        
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/".$id."/learners/0/".$learnerId."/2");
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }}
    //remove assets
    public function removedigiassetsAction($id,$daid)
    {if(isset($_SESSION['trololol'])){
        
        $Repo = $this->getDoctrine()->getEntityManager();
        $DA = $Repo->getRepository('BalsMisBundle:DigiAssets')->find($daid);
        $Repo->remove($DA);
        $Repo->flush();
        
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/".$id."/assets");
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }}
    public function saveapAction($id,$learnerId,$apid,$cat,$name,$date,$faci,$score,$stat,$after,$mode)
    {if(isset($_SESSION['trololol'])){
        
        
        
        $Repo = $this->getDoctrine()->getEntityManager();
        $SAToUpdate = $Repo->getRepository('BalsMisBundle:AcademicProfile')->find($apid);
        $SAToUpdate->setProgramCategory($cat);
        $SAToUpdate->setProgramName($name);
        $SAToUpdate->setDateEnlisted(date_create($date));
        $SAToUpdate->setAssignedFacilitator($faci);
        $SAToUpdate->setScore($score);
        $SAToUpdate->setModality($mode);
        $SAToUpdate->setStatus($stat);
        $SAToUpdate->setStatusAfterProgram($after);
        $Repo->flush();
        
        $rootPage=$this->generateUrl('BalsMisBundle_homepage');
        $clcRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC');
	$clc = $clcRepo->find($id);
        
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/".$id."/learners/0/".$learnerId."/2");
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }}
    
    
    //LEARNER VERSION 1
    public function learnersprofileAction($id,$start,$learnerId)
    {if(isset($_SESSION['trololol'])){
        $tab=1;
        $rootPage=$this->generateUrl('BalsMisBundle_homepage');
        $clcRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC');
        $learnerRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:Learner');
        $faciRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:Facilitator');
        $apRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:AcademicProfile');
                        
                        
	$clc = $clcRepo->find($id);
        $learner = $learnerRepo->find($learnerId);
        $faci = $faciRepo->findAll();
        $ap = $apRepo->findAll();

        return $this->render('BalsMisBundle:Default:learner_profile.html.php', array('clc'=>$clc,'rootPage'=>$rootPage,'learner'=>$learner,'ap'=>$ap,'faci'=>$faci,'tab'=>$tab,'usertype'=>$_SESSION['usertype']));
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }}
    public function learnersprofilewithtabAction($id,$start,$learnerId,$tab)
    {if(isset($_SESSION['trololol'])){
        $rootPage=$this->generateUrl('BalsMisBundle_homepage');
        $clcRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC');
        $learnerRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:Learner');
        $faciRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:Facilitator');
        $apRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:AcademicProfile');
                        
                        
	$clc = $clcRepo->find($id);
        $learner = $learnerRepo->find($learnerId);
        $faci = $faciRepo->findAll();
        $ap = $apRepo->findAll();

        return $this->render('BalsMisBundle:Default:learner_profile.html.php', array('clc'=>$clc,'rootPage'=>$rootPage,'learner'=>$learner,'ap'=>$ap,'faci'=>$faci,'tab'=>$tab,'usertype'=>$_SESSION['usertype']));
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }}
    //FACILITATOR VERSION 1
    public function facilitatorsprofileAction($id,$start,$facilitatorId)
    {if(isset($_SESSION['trololol'])){
        $rootPage=$this->generateUrl('BalsMisBundle_homepage');
        $clcRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC');
        $facilitatorRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:Facilitator');
        $clcfaciRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC_Facilitators');
        $apRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:AcademicProfile');
                        
        $aps = $apRepo->findAll();
        $clcfaci = $clcfaciRepo -> findAll();                
	$clc = $clcRepo->find($id);
        $clcs = $clcRepo->findAll();
        $facis = $facilitatorRepo->findAll();
        $facilitator = $facilitatorRepo->find($facilitatorId);

        return $this->render('BalsMisBundle:Default:facilitator_profile.html.php', array('aps'=>$aps,'clc'=>$clc,'clcs'=>$clcs,'facis'=>$facis,'clcfaci'=>$clcfaci,'rootPage'=>$rootPage,'facilitator'=>$facilitator,'tab'=>1,'usertype'=>$_SESSION['usertype']));
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }}
    public function facilitatorsprofilewithtabAction($id,$start,$facilitatorId,$tab)
    {if(isset($_SESSION['trololol'])){
        $rootPage=$this->generateUrl('BalsMisBundle_homepage');
        $clcRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC');
        $facilitatorRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:Facilitator');
        $clcfaciRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC_Facilitators');
        $apRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:AcademicProfile');
                        
        $aps = $apRepo->findAll();
        $clcfaci = $clcfaciRepo -> findAll();                 
	$clc = $clcRepo->find($id);
        $clcs = $clcRepo->findAll();
        $facis = $facilitatorRepo->findAll();
        $facilitator = $facilitatorRepo->find($facilitatorId);

        return $this->render('BalsMisBundle:Default:facilitator_profile.html.php', array('aps'=>$aps,'clc'=>$clc,'clcs'=>$clcs,'facis'=>$facis,'clcfaci'=>$clcfaci,'rootPage'=>$rootPage,'facilitator'=>$facilitator,'tab'=>$tab,'usertype'=>$_SESSION['usertype']));
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }}
    
    public function digiassetsAction($id)
    {if(isset($_SESSION['trololol'])){
        $start=0;
        $rootPage=$this->generateUrl('BalsMisBundle_homepage');
        $clcRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC');
        $digiRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:DigiAssets');
        $clcdigiRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:clc_DigiAssets');
                        
        $digi = $digiRepo->findAll();
        $clcdigi = $clcdigiRepo -> findAll();                 
	$clc = $clcRepo->find($id);

        return $this->render('BalsMisBundle:Default:digiassets.html.php', array('digi'=>$digi,'clc'=>$clc,'clcdigi'=>$clcdigi,'rootPage'=>$rootPage,'start'=>$start,'usertype'=>$_SESSION['usertype']));
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }}
    
    public function digiassetswithstartAction($id,$start)
    {if(isset($_SESSION['trololol'])){
        $rootPage=$this->generateUrl('BalsMisBundle_homepage');
        $clcRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:CLC');
        $digiRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:DigiAssets');
        $clcdigiRepo = $this->getDoctrine()
			->getRepository('BalsMisBundle:clc_DigiAssets');
                        
        $digi = $digiRepo->findAll();
        $clcdigi = $clcdigiRepo -> findAll();                 
	$clc = $clcRepo->find($id);

        return $this->render('BalsMisBundle:Default:digiassets.html.php', array('digi'=>$digi,'clc'=>$clc,'clcdigi'=>$clcdigi,'rootPage'=>$rootPage,'start'=>$start,'usertype'=>$_SESSION['usertype']));
    }else{
        return $this->redirect($this->generateUrl('BalsMisBundle_homepage')."/login");    
    }}
    
    
}
