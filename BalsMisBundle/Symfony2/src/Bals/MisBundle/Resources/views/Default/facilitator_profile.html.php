<!--DO NOT MODIFY ANYTHING OTHER THAN INSIDES OF DIV CONTENTS-->
<html>
    <head>
        <title>
        ALS-MIS
        </title>
        <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('public/css/common.css') ?>" />
        <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('public/css/jquery-ui-1.8.18.custom.css') ?>" />
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
                <div id="contents" class="" >
                    <div style="padding:20px;">
                        <div class="tabHeadContainer">
                            <div id="tab1" class="tabLabel tabA" onclick="changeActive('tab1')">
                                Facilitator's Profile
                            </div>
                            <div id="tab2" class="tabLabel tabNA" onclick="changeActive('tab2')">
                                CLC Assignments
                            </div>
                            <!--
                            <div id="tab3" class="tabLabel tabNA" onclick="changeActive('tab3')">
                                Programs Handled
                            </div>
                            
                            <div id="tab4" class="tabLabel tabNA" onclick="changeActive('tab4')">
                                Allowance Information
                            </div>
                            -->
                        </div>
                        <div class="tabContents">
                            <div id="tab1Content" comment="profile">
                    
                    
                                <div id="clcProfile">
                                    <div id=clcProfileLeft>
                                        <font style="font-size:16px;text-transform:uppercase;color:#f55;">PERSONAL INFORMATION</font>
                                        <br/><br/>
                                        <b>Last Name:</b> <?php echo $facilitator->getLastName(); ?>
                                        <br/>
                                        <b>First Name:</b> <?php echo $facilitator->getFirstName(); ?>
                                        <br/>
                                        <b>Middle Name:</b> <?php echo $facilitator->getMiddleName(); ?>
                                        <br/>
                                        <b>Designation:</b> <?php echo $facilitator->getDesignation(); ?>
                                        <br/>
                                        <b>Gender:</b> <?php echo $facilitator->getGender(); ?>
                                        <br/>
                                        <b>Address:</b> <?php echo $facilitator->getAddress(); ?>
                                        <br/>
                                        <b>Source of funds:</b> <?php echo $facilitator->getSourceOfFunds(); ?>
                                        <br/>
                                        <b>Other Employment:</b> <?php echo $facilitator->getOtherEmployment(); ?>
                                        
                                    </div>
                                    <div id=clcProfileRight>
                                    
                                        <div onclick="update()" style="position:absolute;right:10px;bottom:10px;border:1px solid #666;padding-left:3px;padding-right:3px;padding-top:2px;padding-bottom:2px;cursor:pointer;">update</div>
                                    
                                    </div>
                                
                                </div>
                            </div>
                            <div id="tab2Content" comment="clcassigns" style="margin-left:-10px;margin-right:-10px;">
                                <font style="font-size:14px;">CLC ASSIGNMENTS</font><br/><br/>
                                ADD ASSIGNMENT: <input type="text" id="search" onchange="gosearch()" />
                                <br/><br/>
                                <?php foreach($clcfaci as $clcfaciitem):?>
                                    <?php foreach($clcs as $clcitem):?>
                                            <?php foreach($facis as $faciitem):?>
                                        <?php if($clcitem->getId()==$clcfaciitem->getClcId() & $faciitem->getId()==$clcfaciitem->getFacilitatorId() & $facilitator->getId()==$clcfaciitem->getFacilitatorId()){?>
                                            
                                                <?php// if(){?>
                                                    <?php echo $clcitem->getName(); ?> - <a href="<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/facilitators/0/<?php echo $facilitator->getId(); ?>/2/removeAssign/<?php echo $clcfaciitem->getId();  ?>">remove</a>
                                                <?php// } ?>
                                            
                                        <?php } ?>
                                            <?php endforeach; ?>
                                    <?php endforeach; ?>
                                    <br/>
                                <?php endforeach;?>
                            </div>
                            <div id="tab3Content" comment="programs" style="margin-left:-10px;margin-right:-10px;">
                                <font style="font-size:14px;">PROGRAMS HANDLED</font><br/><br/>
                                <?php foreach($aps as $apsitem):?>
                                    <?php if($facilitator->getId()==$apsitem->getAssignedFacilitator()){?>
                                        - <?php echo $apsitem->getProgramCategory(); ?> - <?php echo $apsitem->getProgramName(); ?> <br/>
                                    <?php } ?>
                                <?php endforeach;?>
                            </div>
                            <div id="tab4Content" comment="allowance" style="margin-left:-10px;margin-right:-10px;">
                            
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
            
            function filter(){
                $('#clcContainer').html("");
                var regionFilter=$('#regFilter').val();
                var cityFilter=$('#citFilter').val();
                var barangayFilter=$('#barFilter').val();
                
                var filterString="<?php foreach ($clc as $item): ?>";
                
                    //filterString+="<?php if($item->getRegion()=="+regionFilter+" || $item->getCityMunicipality()=="+cityFilter+" || $item->getBarangay()=="+barangayFilter+"){ ?>";
                
                    filterString+="<div class='clc' onclick=\"location.href='<?php echo $rootPage; ?>/<?php echo $item->getId(); ?>'\">";
                    filterString+="<?php echo $item->getName(); ?>";    
                    filterString+="</div>";
                    
                    //filterString+="<?php }else{} ?>";
                    
                    filterString+="<?php endforeach; ?>";         
                    
                $('#clcContainer').html(filterString);    
                
            }
            
            function update(){
                
                var updateString='<font style="font-size:16px;text-transform:uppercase;color:#f55;">PERSONAL INFORMATION</font>';
                    updateString+="<br/>";
                    updateString+="Last Name: <input id='ulname' type='text' value='<?php echo $facilitator->getLastName(); ?>'/>";
                    updateString+="<br/>";
                    updateString+="First Name: <input id='ufname' type='text' value='<?php echo $facilitator->getFirstName(); ?>'/>";
                    updateString+="<br/>";
                    updateString+="Middle Name: <input id='umname' type='text' value='<?php echo $facilitator->getMiddleName(); ?>'/>";
                    updateString+="<br/>";
                    updateString+="Designation: <select id='uposit'><option value='Mobile Teacher'>Mobile Teacher</option><option value='Facilitator'>Facilitator</option><option value='IM'>IM</option><option value='DALSC'>DALSC</option></select>";
                    updateString+="<br/>";
                    updateString+="Gender: <select id='ugende'><option value='M'>Male</option><option value='F'>Female</option></select>";
                    updateString+="<br/>";
                    updateString+="Address: <input id='uaddre' type='text' value='<?php echo $facilitator->getAddress(); ?>'/>";
                    updateString+="<br/>Source of funds: <input id='usource' type='text' value='<?php echo $facilitator->getSourceOfFunds(); ?>'/>";
                    updateString+="<br/>Other Employment: <input id='uother' type='text' value='<?php echo $facilitator->getOtherEmployment(); ?>'/>";
                    updateString+="<br/>";
                    
                $('#clcProfileLeft').html(updateString);            
                $('#clcProfileRight').html('<div onclick="save()" style="position:absolute;right:10px;bottom:10px;border:1px solid #666;padding-left:3px;padding-right:3px;padding-top:2px;padding-bottom:2px;cursor:pointer;">save</div>');           
                
            }
            
            function save(){
                
                var ulname=stripslashes($("#ulname").val());
                var ufname=stripslashes($("#ufname").val());
                var umname=stripslashes($("#umname").val());
                var uposit=stripslashes($("#uposit").val());
                var uaddre=stripslashes($("#uaddre").val());
                var uother=stripslashes($("#uother").val());
                var ugende=stripslashes($("#ugende").val());
                var usource=stripslashes($("#usource").val());
                
                window.location='<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/facilitators/0/<?php echo $facilitator->getId(); ?>/saveFacilitator/'+ulname+'/'+ufname+'/'+umname+'/'+uposit+'/'+ugende+'/'+uaddre+'/'+uother+'/'+usource;
                
            }
            
            //TAB CODE START
            function changeActive(tab){
                if(tab=="tab1"){
                    $("#tab1").removeClass('tabA');
                    $("#tab2").removeClass('tabA');
                    $("#tab3").removeClass('tabA');
                    $("#tab4").removeClass('tabA');
                    //$("#tab5").removeClass('tabA');
                    
                    $("#tab1").removeClass('tabNA');
                    $("#tab2").removeClass('tabNA');
                    $("#tab3").removeClass('tabNA');
                    $("#tab4").removeClass('tabNA');
                    //$("#tab5").removeClass('tabNA');
                    
                    $("#tab1").addClass('tabA');
                    $("#tab2").addClass('tabNA');
                    $("#tab3").addClass('tabNA');
                    $("#tab4").addClass('tabNA');
                    //$("#tab5").addClass('tabNA');
                    showInfo('tab1Content');
                }else if(tab=="tab2"){
                    $("#tab1").removeClass('tabA');
                    $("#tab2").removeClass('tabA');
                    $("#tab3").removeClass('tabA');
                    $("#tab4").removeClass('tabA');
                    //$("#tab5").removeClass('tabA');
                    
                    $("#tab1").removeClass('tabNA');
                    $("#tab2").removeClass('tabNA');
                    $("#tab3").removeClass('tabNA');
                    $("#tab4").removeClass('tabNA');
                    //$("#tab5").removeClass('tabNA');
                    
                    $("#tab1").addClass('tabNA');
                    $("#tab2").addClass('tabA');
                    $("#tab3").addClass('tabNA');
                    $("#tab4").addClass('tabNA');
                    //$("#tab5").addClass('tabNA');
                    showInfo('tab2Content');
                }else if(tab=="tab3"){
                    $("#tab1").removeClass('tabA');
                    $("#tab2").removeClass('tabA');
                    $("#tab3").removeClass('tabA');
                    $("#tab4").removeClass('tabA');
                    //$("#tab5").removeClass('tabA');
                    
                    $("#tab1").removeClass('tabNA');
                    $("#tab2").removeClass('tabNA');
                    $("#tab3").removeClass('tabNA');
                    $("#tab4").removeClass('tabNA');
                    //$("#tab5").removeClass('tabNA');
                    
                    $("#tab1").addClass('tabNA');
                    $("#tab2").addClass('tabNA');
                    $("#tab3").addClass('tabA');
                    $("#tab4").addClass('tabNA');
                    //$("#tab5").addClass('tabNA');
                    showInfo('tab3Content');
                }else if(tab=="tab4"){
                    $("#tab1").removeClass('tabA');
                    $("#tab2").removeClass('tabA');
                    $("#tab3").removeClass('tabA');
                    $("#tab4").removeClass('tabA');
                    //$("#tab5").removeClass('tabA');
                    
                    $("#tab1").removeClass('tabNA');
                    $("#tab2").removeClass('tabNA');
                    $("#tab3").removeClass('tabNA');
                    $("#tab4").removeClass('tabNA');
                    //$("#tab5").removeClass('tabNA');
                    
                    $("#tab1").addClass('tabNA');
                    $("#tab2").addClass('tabNA');
                    $("#tab3").addClass('tabNA');
                    $("#tab4").addClass('tabA');
                    //$("#tab5").addClass('tabNA');
                    showInfo('tab4Content');
                }
            }
            
            function hideInfo(){
                $("#tab1Content").hide();
                $("#tab2Content").hide();
                $("#tab3Content").hide();
                $("#tab4Content").hide();
                $("#tab5Content").hide();
            }
            
            function showInfo(tab){
                hideInfo();
                $("#"+tab).show();
            }
            hideInfo();
            changeActive('tab<?php echo $tab; ?>');
            //TAB CODE END
            
            function gosearch(){
                window.setTimeout('redir()',500);
                
            }
            function redir(){
                
                window.location="<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/facilitators/0/<?php echo $facilitator->getId(); ?>/2/addAssign/"+$("#search").val();
            }
            
            //autocomplete codes
            var availableTags= new Array();
            
            <?php foreach($clcs as $searchtags): ?>
            
                availableTags.push({label:"<?php echo $searchtags->getName(); ?>",value:"<?php echo $searchtags->getId(); ?>"});
               
            <?php endforeach; ?>
            
            $( "#search" ).autocomplete({
			source: availableTags
		});
            function stripslashes(str){
                str=str.replace(/\\/g,'');
                str=str.replace(/\//g,'');
                return str;
            }
    </script>
</html>
    
    