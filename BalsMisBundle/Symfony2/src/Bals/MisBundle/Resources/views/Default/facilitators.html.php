<!--DO NOT MODIFY ANYTHING OTHER THAN INSIDES OF DIV CONTENTS-->
<html>
    <head>
        <title>
        ALS-MIS
        </title>
        <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('public/css/common.css') ?>" />
        <script src="<?php echo $view['assets']->getUrl('public/js/jq.js') ?>" type="text/javascript"></script>
    
        <script src="<?php echo $view['assets']->getUrl('public/js/jqueryui.js') ?>" type="text/javascript"></script></head>
    <body>
        <div id="wrapper">
            <div id="header">
                <?php include('header.php'); ?>
            </div>
            
            <div id="middle">
                <div id="clcNav">
                <!--
                    <select style="width:150px;" id="regFilter" onchange="/*(filter()*/">
                    
                        <option value="ncr">ncr</option>
                    
                    </select>
                    <select style="width:150px;" id="citFilter" onchange="/*(filter()*/">
                        <option value="makati">makati</option>
                        <option value="pasay">pasay</option>
                    </select>
                    <select style="width:150px;" id="barFilter" onchange="/*(filter()*/">
                        <option value="magallanes">magallanes</option>
                    </select>
                    
                    <input id="search" type="text" style="width:140px;margin:5px;" value="search" />
                -->    
                    <div id="clcContainer">
                        <div class="clc" onclick="location.href='<?php echo $rootPage; ?>'">
                            < back
                        </div>
                        <div class="noCursor">
                        
                        </div>
                        <div class="noCursor">
                            <?php echo $clc->getName(); ?>
                        </div>
                        <div class="noCursor">
                        
                        </div>
                        <?php if($clc->getId()!=-1){ ?>
                        <div class="clc" onclick="location.href='<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/profile'">
                            PROFILE
                        </div>
                        <?php } ?>
                    </div>
                    
                    
                    
                </div>
                <div id="tabs">
                    <div class="tab" onclick="location.href='<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/learners'">Learners</div>
                    <div class="tab" onclick="location.href='<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/facilitators'">Facilitators</div>
                    <div class="tab" onclick="location.href='<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/assets'">Digital Assets</div>
                    <div class="tab0" onclick="location.href='<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/reports'">Generate Reports</div>
                </div>
                <!--DO NOT MODIFY BEFORE THIS LINE-->
                <div id="contents" class="">
                  
                    <?php if($clc->getId()!=-1){?>
                        <div style="border:1px solid #666;padding-left: 5px;padding-right: 5px;position: absolute;right: 30px;top: 45px;cursor: pointer;" onclick="addFacilitator()" id="addHolder">add</div>
                    <?php } ?>
                  
                    <div class="table">
                        <div class="learnerTHead">
                            <div class="lt1">ID</div>
                            <div class="lt2">Last Name</div>
                            <div class="lt3">First Name</div>
                            <div class="lt4">Middle Name</div>
                            <?php if($usertype=="admin"){ ?>
                            <div class="lt5">Action</div>
                            <?php } ?>
                        </div>
                        <?php $count=0; ?>
                        <?php $countStart=0; ?>
                        <?php foreach ($facilitators as $item): ?>
                            
                                <?php foreach ($clcfaci as $clcfaciitem): ?>
                                <?php    if($clcfaciitem->getFacilitatorId()==$item->getId() & ($clcfaciitem->getCLCId()==$clc->getId()|$clc->getId()==-1)){ ?>
    
                                        <?php if($count==0){ ?>
                                            <div class="learnerItem0">
                                        <?php $count=1;}else{ ?>
                                            <div class="learnerItem1">
                                        <?php $count=0;} ?>
                                                <div class="lt1"><a href="<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/facilitators/0/<?php echo $item->getId() ?>"><?php echo $item->getId() ?></a></div>
                                                <div class="lt2"><?php echo $item->getLastName() ?></div>
                                                <div class="lt3"><?php echo $item->getFirstName() ?></div>
                                                <div class="lt4"><?php echo $item->getMiddleName() ?></div>
                                                <?php if($usertype=="admin"){ ?>
                                                <div class="lt5"><font style="color:blue;cursor:pointer;" onclick="deleteFaci(<?php echo $item->getId() ?>)">Delete</font></div>
                                                <?php } ?>
                                            </div>
                                <?php   } ?>
                                <?php endforeach; ?>
                            
                        <?php endforeach; ?>
                    
                    
                    
                    </div>
                    <div style="position: absolute;bottom: 10px;left:20px;"><a href="<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/facilitators/<?php echo ($start-14); ?>"> back </a> | <a href="<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/facilitators/<?php echo ($start+14); ?>"> next </a></div>
                  
                  
                  
                  
                    
                </div>
                <!--DO NOT MODIFY AFTER THIS LINE-->
            </div>
            
            <div id="footer">
                <?php include('footer.php'); ?>
            </div>
            
        </div>

    </body>
    <script >
            var left=(window.innerWidth-800)/2;
            if(left<0){
                left=0;
                
            }
            $('#wrapper').css('left',left);
            
            function addFacilitator(){
                window.location="<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/facilitatorsadd";
            }
            
            function deleteFaci(idnum){
                if(confirm("Are you sure you want to delete learner?")){
                    window.location="<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/facilitatorsdelete/"+idnum;
                }
            }
            
    </script>
</html>
    
    