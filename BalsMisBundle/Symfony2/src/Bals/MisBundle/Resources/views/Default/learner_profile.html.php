<!--DO NOT MODIFY ANYTHING OTHER THAN INSIDES OF DIV CONTENTS-->
<html>
    <head>
        <title>
        ALS-MIS
        </title>
        <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('public/css/common.css') ?>" />
        <script src="<?php echo $view['assets']->getUrl('public/js/jq.js') ?>" type="text/javascript"></script>
    </head>
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
                        <div class="clc" onclick="location.href='<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/learners'">
                            < back
                        </div>
                        <div class="noCursor">
                        
                        </div>
                        <div class="noCursor">
                            <?php echo $clc->getName(); ?>
                        </div>
                        <div class="noCursor">
                        
                        </div>
                        <div class="clc" onclick="location.href='<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/profile'">
                            PROFILE
                        </div>
                        
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
                
                    <div id="APViewer">
                        <div id="apclose" onclick="$('#APViewer').hide()">X</div>
                        <div id="apcontent">
                            <b>Program Category:</b>
                            <div id="apCategory">asd</div>
                            <b>Program Name:</b>
                            <div id="apName">asd</div>
                            <b>Assigned Facilitator:</b>
                            <div id="apAssignedFacilitator">asd</div>
                            <b>Date Enlisted:</b>
                            <div id="apDateEnlisted">sd</div>
                            <b>Modality:</b>
                            <div id="apModality">asd</div>
                            <b>Score:</b>
                            <div id="apScore">asd</div>
                            <b>Status:</b>
                            <div id="apStatus">asd</div>
                            <b>Status after program:</b>
                            <div id="apStatusAfterProgram">asd</div>
                            
                        </div>
                        <div id="apedit">asd</div>
                    </div>
                
                    <div class="tabContainer">
                        <div class="tabHeadContainer">
                            <div id="tab1" class="tabLabel tabA" onclick="changeActive('tab1')">
                                Learner's Profile
                            </div>
                            <div id="tab2" class="tabLabel tabNA" onclick="changeActive('tab2')">
                                Academic Profile
                            </div>
                        </div>
                        <div class="tabContents">
                            <div id="tab1Content" comment="learner_profile">
                            
                                <div id="clcProfile">
                                    <div id=clcProfileLeft>
                                        <font style="font-size:16px;text-transform:uppercase;color:#f55;">PERSONAL INFORMATION</font>
                                        <br/><br/>
                                        Last Name: <?php echo $learner->getLastName(); ?>
                                        <br/>
                                        First Name: <?php echo $learner->getFirstName(); ?>
                                        <br/>
                                        Middle Name: <?php echo $learner->getMiddleName(); ?>
                                        <br/>
                                        Birth Date: <?php echo $learner->getBirthdate()->format("Y-m-d"); ?>
                                        <br/>
                                        Gender: <?php echo $learner->getGender(); ?>
                                        <br/>
                                        Civil Status: <?php echo $learner->getCivilStatus(); ?>
                                        <br/>
                                        Household Position: <?php echo $learner->getHouseholdPosition(); ?>
                                        
                                    </div>
                                    <div id=clcProfileRight>
                                    <!--
                                        <div onclick="location.href='<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/update'" style="position:absolute;right:10px;bottom:10px;border:1px solid #666;padding-left:3px;padding-right:3px;padding-top:2px;padding-bottom:2px;cursor:pointer;">update</div>
                                    -->
                                        <div onclick="update()" style="position:absolute;right:10px;bottom:10px;border:1px solid #666;padding-left:3px;padding-right:3px;padding-top:2px;padding-bottom:2px;cursor:pointer;">update</div>
                                    
                                    </div>
                                </div>
                            
                            </div>
                            <div id="tab2Content" comment="academic_profile" style="margin-left:-10px;margin-right:-10px;">
                                <div id="acHeadContainer">
                                    <div class="ac1">
                                        Category    
                                    </div>
                                    <div class="ac2">
                                        Program Name    
                                    </div>
                                  
                                    <?php foreach ($ap as $apItem): ?>
                                        <?php $count=1;
                                        if($count==0){
                                        ?>
                                        <div class="pink">
                                        <?php $count=1;}else{?>
                                        <div>
                                        <?php $count=0;}?>
                                        
                                            <?php if($apItem->getLearnersId()==$learner->getId()){ ?>
                                                <div id="ap<?php echo $apItem->getId();?>cat" class="ac1"><?php echo $apItem->getProgramCategory(); ?></div>
                                                <div id="ap<?php echo $apItem->getId();?>name" class="ac2"><a style="cursor: pointer;color:blue;" onclick="openAPViewer(<?php echo $apItem->getId() ?>)"><?php echo $apItem->getProgramName(); ?></a></div>
                                                
                                                
                                                
                                            </div>
                                        <?php } ?>
                                    <?php endforeach; ?>
                                    
                                    
                                </div>
                                
                                <div class="addap" style="position:absolute;right:0px;top:-24px;border:1px solid #666;padding-left:3px;padding-right:3px;padding-top:2px;padding-bottom:2px;cursor:pointer;" onclick="addap()">
                                    add
                                </div>
                                
                            </div>
                        </div>
                    </div>
                
                
                        
                
                  
                  
                
                  
                  
                    
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
            
            function editap(num){
                cat=$("#apCategory").html();
                name=$("#apName").html();
                date=$("#apDateEnlisted").html();
                moda=$("#apModality").html();
                score=$("#apScore").html();
                stat=$("#apStatus").html();
                after=$("#apStatusAfterProgram").html();
                $("#apCategory").html("<input value='"+cat+"' style='width:100%' id='inap"+num+"cat' type='text'/>");
                $("#apName").html("<input value='"+name+"' style='width:100%' id='inap"+num+"name' type='text'/>");
                $("#apDateEnlisted").html("<input value='"+date+"' style='width:100%' id='inap"+num+"date' type='text'/>");
                $("#apModality").html("<input value='"+moda+"' style='width:100%' id='inap"+num+"mode' type='text'/>");
                
                $("#apAssignedFacilitator").html("<select style='width:100%' id='inap"+num+"faci'> <?php foreach($faci as $faciItem): ?> <option value='<?php echo $faciItem->getId(); ?>'> <?php echo $faciItem->getLastName(); ?>, <?php echo $faciItem->getFirstName(); ?> <?php echo $faciItem->getMiddleName(); ?> </option> <?php endforeach; ?> </select>");
                
                $("#apScore").html("<input value='"+score+"' style='width:100%' id='inap"+num+"score' type='text'/>");
                $("#apStatus").html("<select id='inap"+num+"stat'><option value='complete'>complete</option><option value='takentest'>test taken</option><option value='passed'>passed</option></select> ");
                $("#apStatusAfterProgram").html("<input value='"+after+"' style='width:100%' id='inap"+num+"after' type='text'/>");
               
                $("#apedit").html('<a style="color:blue;text-decoration: underline;" onclick="saveap('+num+')">save</a>');
            }
            
            function saveap(num){
                cat=stripslashes($("#inap"+num+"cat").val());
                name=stripslashes($("#inap"+num+"name").val());
                date=stripslashes($("#inap"+num+"date").val());
                mode=stripslashes($("#inap"+num+"mode").val());
                faci=stripslashes($("#inap"+num+"faci").val());
                score=stripslashes($("#inap"+num+"score").val());
                stat=stripslashes($("#inap"+num+"stat").val());
                after=stripslashes($("#inap"+num+"after").val());
                
                window.location="<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/learners/0/<?php echo $learner->getId() ?>/saveAP/"+num+"/"+cat+"/"+name+"/"+date+"/"+faci+"/"+score+"/"+stat+"/"+after+"/"+mode;
            }
            
            function deleteap(num){
                window.location="<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/learners/0/<?php echo $learner->getId() ?>/removeAP/"+num;
            }
            
            function addap(){
                window.location="<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/learners/0/<?php echo $learner->getId() ?>/1/addAP";
            }
            
            function update(){
                
                $('#clcProfileLeft').html("");
                $('#clcProfileRight').html("");
                var updateString='<font style="font-size:16px;text-transform:uppercase;color:#f55;">PERSONAL INFORMATION</font>';
                    updateString+="<br/>";
                    updateString+="<font style='color:red;'>*</font>Last Name: <input id='ulname' type='text' value='<?php echo $learner->getLastName(); ?>'/>";
                    updateString+="<br/>";
                    updateString+="<font style='color:red;'>*</font>First Name: <input id='ufname' type='text' value='<?php echo $learner->getFirstName(); ?>'/>";
                    updateString+="<br/>";
                    updateString+="Middle Name: <input id='umname' type='text' value='<?php echo $learner->getMiddleName(); ?>'/>";
                    updateString+="<br/>";
                    updateString+="<font style='color:red;'>*</font>Birthdate: <input id='ubdate' type='text' value='<?php echo $learner->getBirthdate()->format("Y-m-d"); ?>'/>";
                    updateString+="<br/>";
                    updateString+="<font style='color:red;'>*</font>Gender: <select id='ugender'><option value='M'>Male</option><option value='F'>Female</option></select>";
                    updateString+="<br/><font style='color:red;'>*</font>Civil Status: <input id='ucivils' type='text' value='<?php echo $learner->getCivilStatus(); ?>'/>";
                    updateString+="<br/><font style='color:red;'>*</font>Household Position: <input id='uhouse' type='text' value='<?php echo $learner->getHouseholdPosition(); ?>'/>";
                    
                $('#clcProfileLeft').html(updateString);            
                $('#clcProfileRight').html('<div onclick="save()" style="position:absolute;right:10px;bottom:10px;border:1px solid #666;padding-left:3px;padding-right:3px;padding-top:2px;padding-bottom:2px;cursor:pointer;">save</div>');           
              
            }
            
            function save(){
                
                
                
                var ulname=stripslashes($("#ulname").val());
                var ufname=stripslashes($("#ufname").val());
                var umname=stripslashes($("#umname").val());
                var ubdate=stripslashes($("#ubdate").val());
                var ugender=stripslashes($("#ugender").val());
                var ucivils=stripslashes($("#ucivils").val());
                var uhouse=stripslashes($("#uhouse").val());
                if(ulname==""|ufname==""|ubdate==""|ucivils==""|uhouse==""){
                    alert("Please complete the form.");
                }else{
                    window.location='<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/learners/<?php echo $learner->getId(); ?>/saveLearner/'+ulname+'/'+ufname+'/'+umname+'/'+ubdate+'/'+ugender+'/'+ucivils+'/'+uhouse;
                }
                
            }
            
            function openAPViewer(apid){
                <?php foreach ($ap as $apItem): ?>
                    if(apid==<?php echo $apItem->getId() ?>){
                        $("#apCategory").html("<?php echo $apItem->getProgramCategory() ?>");
                        $("#apName").html("<?php echo $apItem->getProgramName() ?>");
                        $("#apAssignedFacilitator").html("<?php echo $apItem->getAssignedFacilitator() ?>");
                        $("#apDateEnlisted").html("<?php echo $apItem->getDateEnlisted()->format("Y-m-d");  ?>");
                        $("#apModality").html("<?php echo $apItem->getModality() ?>");
                        $("#apScore").html("<?php echo $apItem->getScore() ?>");
                        $("#apStatus").html("<?php echo $apItem->getStatus() ?>");
                        $("#apStatusAfterProgram").html("<?php echo $apItem->getStatusAfterProgram() ?>");
                        $("#apedit").html('<a style="color:blue;text-decoration: underline;" onclick="editap(<?php echo $apItem->getId() ?>)">edit</a>');
                    }
                 
                <?php endforeach; ?>
                
                $("#APViewer").show();
                
            }
            
            
            //TAB CODE START
            function changeActive(tab){
                if(tab=="tab1"){
                    $("#tab1").removeClass('tabA');
                    $("#tab2").removeClass('tabA');
                    
                    $("#tab1").removeClass('tabNA');
                    $("#tab2").removeClass('tabNA');
                    
                    $("#tab1").addClass('tabA');
                    $("#tab2").addClass('tabNA');
                    showInfo('tab1Content');
                }else if(tab=="tab2"){
                    $("#tab1").removeClass('tabA');
                    $("#tab2").removeClass('tabA');
                    
                    $("#tab1").removeClass('tabNA');
                    $("#tab2").removeClass('tabNA');
                    
                    $("#tab1").addClass('tabNA');
                    $("#tab2").addClass('tabA');
                    showInfo('tab2Content');
                }
            }
            
            function hideInfo(){
                $("#tab1Content").hide();
                $("#tab2Content").hide();
            }
            
            function showInfo(tab){
                hideInfo();
                $("#"+tab).show();
            }
            hideInfo();
            changeActive('tab<?php echo $tab;?>');
            //TAB CODE END
            function stripslashes(str){
                str=str.replace(/\\/g,'');
                str=str.replace(/\//g,'');
                return str;
            }
            $("#APViewer").hide();
    </script>
</html>
    
    