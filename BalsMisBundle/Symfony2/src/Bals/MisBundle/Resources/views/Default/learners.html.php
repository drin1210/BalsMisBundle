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
                    <div id="popuptrans" style="background:#eee;padding: 10px;z-index:999;position:absolute;border:1px solid #666;border-radius:10px;width:200px;height:150px;top:100px;left:150px;">
                        <br/>Transfer to:<br/><br/>
                        <select id="clcToTransfer">
                            <?php foreach($clcs as $clcitem): ?>
                                <option value="<?php echo $clcitem->getId();?>">
                                    <?php echo $clcitem->getName();?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <textarea id="transferReason">Reason for transfer</textarea>
                        <br/>
                        <div id="transbut">
                            
                        </div>
                    </div>
                    <?php if($clc->getId()!=-1){?>
                        <div style="border:1px solid #666;padding-left: 5px;padding-right: 5px;position: absolute;right: 30px;top: 45px;cursor: pointer;" onclick="addLearner()" id="addHolder">add</div>
                    <?php } ?>
                    <div class="table">
                        <div class="learnerTHead">
                            <div class="lt1">ID</div>
                            <div class="lt2">Last Name</div>
                            <div class="lt3">First Name</div>
                            <div class="lt4">Middle Name</div>
                            
                            <div class="lt5">Actions</div>
                            
                        </div>
                        <?php $count=0; ?>
                        <?php $countStart=0; ?>
                        <?php $countEnder=0; ?>
                        <?php foreach ($learners as $item): ?>
                            <?php if($item->getCLCEnlisted()==$clc->getId()|$clc->getId()==-1){ ?>
                                <?php
                                if($countStart<$start){
                                    $countStart++;
                                }
                                elseif($countEnder>=15){
                                    $countStart++;
                                }else{
                                ?>
                                    
                                    <?php if($count==0){ ?>
                                        <div class="learnerItem0">
                                    <?php $count=1;}else{ ?>
                                        <div class="learnerItem1">
                                    <?php $count=0;} ?>
                                            <div class="lt1"><a href="<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/learners/0/<?php echo $item->getId() ?>"><?php echo $item->getId() ?></a></div>
                                            <div class="lt2"><?php echo $item->getLastName() ?></div>
                                            <div class="lt3"><?php echo $item->getFirstName() ?></div>
                                            <div class="lt4"><?php echo $item->getMiddleName() ?></div>
                                            <div class="lt5">
                                                <font style="color:blue;cursor:pointer;" onclick="transferPop(<?php echo $item->getId() ?>)">Transfer</font>
                                                <?php if($usertype=="admin"){ ?>
                                                |
                                                <font style="color:blue;cursor:pointer;" onclick="deleteLearner(<?php echo $item->getId() ?>)">Delete</font>
                                                <?php } ?>
                                            </div>
                                        </div>
                                <?php $countStart++;$countEnder++;} ?>
                            <?php } ?>
                        <?php endforeach; ?>
                    
                    
                    
                    </div>
                    <div style="position: absolute;bottom: 10px;left:20px;"><a href="<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/learners/<?php echo ($start-14); ?>"> back </a> | <a href="<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/learners/<?php echo ($start+14); ?>"> next </a></div>
                  
                  
                  
                  
                    
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
            
            $("#popuptrans").hide();
            
            function transferPop(num){
                $("#popuptrans").show();
                $("#transbut").html('<button onclick="transfer('+num+')">OK</button><button onclick="cancel()">CANCEL</button>');
            }
            
            function cancel(){
                $('#popuptrans').hide();
            }
            
            function transfer(num){
                clcid=$("#clcToTransfer").val();
                reason=stripslashes($("#transferReason").val());
                window.location="<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/learners/0/"+num+"/transfer/"+clcid+"/"+reason;
            }
            
            function addLearner(){
                window.location="<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/learnersadd";
            }
            
            function deleteLearner(idnum){
                if(confirm("Are you sure you want to delete learner?")){
                    window.location="<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/learnersdelete/"+idnum;
                }
            }
            
            function stripslashes(str){
                str=str.replace(/\\/g,'');
                str=str.replace(/\//g,'');
                return str;
            }
            
    </script>
</html>
    
    