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
                        <div class="clc">
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
                    <div class="tabContainer">
                        <div class="tabHeadContainer">
                            <div id="tab1" class="tabLabel tabA" onclick="changeActive('tab1')">
                                CLC Profile
                            </div>
                            <div id="tab2" class="tabLabel tabNA" onclick="changeActive('tab2')">
                                CLC Service Providers
                            </div>
                            <div id="tab3" class="tabLabel tabNA" onclick="changeActive('tab3')">
                                Supporting Agencies
                            </div>
                            <div id="tab4" class="tabLabel tabNA" onclick="changeActive('tab4')">
                                Learning Inst
                            </div>
                            <div id="tab5" class="tabLabel tabNA" onclick="changeActive('tab5')">
                                Partners
                            </div>
                        </div>
                        <div class="tabContents">
                            <div id="tab1Content" comment="clc_profile">
                              
                                <div id="clc">
                                    <font style="font-size:16px;text-transform:uppercase;"><?php echo $clc->getName(); ?></font>
                                    <br/><br/>
                                    <?php if($clc->getId()==0){}else{ ?>  
                                    Address: <?php echo $clc->getAddress(); ?>
                                   
                                    <br/>
                                    Type: <?php echo $clc->getType(); ?>
                                    <br/>
                                    With Functional Mobile Library: <?php echo $clc->getWithFunctionalMobileLibrary(); ?>
                                    <br/>
                                    CLC since: <?php echo $clc->getCLCSince()->format("Y-m-d"); ?>
                                    <br/>
                                    Geographic ID: <?php echo $clc->getGeographicId(); ?>
                                    <br/>
                                    Region: <?php echo $clc->getRegion(); ?>
                                    <br/>
                                    Province: <?php echo $clc->getProvince(); ?>
                                    <br/>
                                    City/Municipality: <?php echo $clc->getCityMunicipality(); ?>
                                    <br/>
                                    Division: <?php echo $clc->getDivision(); ?>
                                    <br/>
                                    District: <?php echo $clc->getDistrict(); ?>
                                    <br/>
                                    Barangay: <?php echo $clc->getBarangay(); ?>
                                    <br/>
                                    <?php } ?> 
                                </div>
                                <?php if($clc->getId()==0){}else{ ?> 
                                <div id="updateHolder">
                                <!--
                                    <div onclick="location.href='<?php// echo $rootPage; ?>/<?php// echo $clc->getId(); ?>/update'" style="position:absolute;right:10px;bottom:10px;border:1px solid #666;padding-left:3px;padding-right:3px;padding-top:2px;padding-bottom:2px;cursor:pointer;">update</div>
                                -->
                                    <div onclick="update()" style="border:1px solid #666;padding-left:3px;padding-right:3px;padding-top:2px;padding-bottom:2px;cursor:pointer;">edit</div>
                                
                                </div>
                                <?php } ?> 
                                 
                            </div>
                            <div id="tab2Content" comment="service_providers">
                                <div class="table">
                                    <div class="learnerTHead">
                                        <div class="lt1">ID</div>
                                        <div class="lt2">Name</div>
                                        <div class="lt3">Head</div>
                                        <div class="lt4">Type</div>
                                        <div class="lt5">Actions</div>
                                    </div>
                                <?php foreach ($sp as $spitem): ?>
                                <?php if($clc->getId()==0){ ?>
                                        
                                        <?php $count=0; ?>
                                                    <?php if($count==0){ ?>
                                                        <div id="sp<?php echo $spitem->getId(); ?>" class="learnerItem0">
                                                    <?php $count=1;}else{ ?>
                                                        <div id="sp<?php echo $spitem->getId(); ?>" class="learnerItem1">
                                                    <?php $count=0;} ?>
                                                            <div id="sp<?php echo $spitem->getId(); ?>id" class="lt1"><?php echo $spitem->getId() ?></div>
                                                            <div id="sp<?php echo $spitem->getId(); ?>name" class="lt2"><?php echo $spitem->getName() ?></div>
                                                            <div id="sp<?php echo $spitem->getId(); ?>head" class="lt3"><?php echo $spitem->getHead() ?></div>
                                                            <div id="sp<?php echo $spitem->getId(); ?>type" class="lt4"><?php echo $spitem->getType() ?></div>
                                                            <div id="sp<?php echo $spitem->getId(); ?>action" class="lt5"><a style="color:blue;text-decoration: underline;" onclick="updatesp(<?php echo $spitem->getId(); ?>)">edit</a></div>
                                                        </div>
                                        
                                    
                                <?php    }else{ ?> 
                                    <?php foreach ($clcsp as $clcspitem): ?>
                                        <?php if($clcspitem->getClcId()==$clc->getId() & $clcspitem->getServiceproviderId()==$spitem->getId()){?>
                                                
                                                
                                                    
                                                    <?php $count=0; ?>
                                                    <?php if($count==0){ ?>
                                                        <div id="sp<?php echo $spitem->getId(); ?>" class="learnerItem0">
                                                    <?php $count=1;}else{ ?>
                                                        <div id="sp<?php echo $spitem->getId(); ?>" class="learnerItem1">
                                                    <?php $count=0;} ?>
                                                            <div id="sp<?php echo $spitem->getId(); ?>id" class="lt1"><?php echo $spitem->getId() ?></div>
                                                            <div id="sp<?php echo $spitem->getId(); ?>name" class="lt2"><?php echo $spitem->getName() ?></div>
                                                            <div id="sp<?php echo $spitem->getId(); ?>head" class="lt3"><?php echo $spitem->getHead() ?></div>
                                                            <div id="sp<?php echo $spitem->getId(); ?>type" class="lt4"><?php echo $spitem->getType() ?></div>
                                                            <div id="sp<?php echo $spitem->getId(); ?>action" class="lt5"><a style="color:blue;text-decoration: underline;" onclick="updatesp(<?php echo $spitem->getId(); ?>)">edit</a></div>
                                                        </div>
                                                       
                                        <?php } ?>
                                    <?php endforeach; ?>
                                <?php } ?>   
                                <?php endforeach; ?>
                                </div>
                                <?php if($clc->getId()==0){}else{ ?> 
                                <div class="addsp" style="position:absolute;right:30px;top:45px;border:1px solid #666;padding-left:3px;padding-right:3px;padding-top:2px;padding-bottom:2px;cursor:pointer;" onclick="addsp()">
                                    add
                                </div>
                                <?php } ?>
                            </div>
                            
                            <div id="tab3Content" comment="supporting_agencies">
                                <div class="table">
                                    <div class="learnerTHead">
                                        <div class="lt1">ID</div>
                                        <div class="lt2_3">Name</div>
                                        <div class="lt3_3">Head</div>
                                        <div class="lt5">Actions</div>
                                    </div>
                                <?php foreach ($sa as $saitem): ?>
                                <?php if($clc->getId()==0){ ?>
                                        
                                        <?php $count=0; ?>
                                                    <?php if($count==0){ ?>
                                                        <div id="sa<?php echo $saitem->getId(); ?>" class="learnerItem0">
                                                    <?php $count=1;}else{ ?>
                                                        <div id="sa<?php echo $saitem->getId(); ?>" class="learnerItem1">
                                                    <?php $count=0;} ?>
                                                            <div id="sa<?php echo $saitem->getId(); ?>id" class="lt1"><?php echo $saitem->getId() ?></div>
                                                            <div id="sa<?php echo $saitem->getId(); ?>name" class="lt2_3"><?php echo $saitem->getName() ?></div>
                                                            <div id="sa<?php echo $saitem->getId(); ?>head" class="lt3_3"><?php echo $saitem->getHead() ?></div>
                                                            
                                                            <div id="sa<?php echo $saitem->getId(); ?>action" class="lt5"><a style="color:blue;text-decoration: underline;" onclick="updatesa(<?php echo $saitem->getId(); ?>)">edit</a></div>
                                                        </div>
                                        
                                    
                                <?php    }else{ ?> 
                                    <?php foreach ($clcsa as $clcsaitem): ?>
                                        <?php if($clcsaitem->getClcId()==$clc->getId() & $clcsaitem->getSaId()==$saitem->getId()){?>
                                                
                                                
                                                    
                                                    <?php $count=0; ?>
                                                    <?php if($count==0){ ?>
                                                        <div id="sa<?php echo $saitem->getId(); ?>" class="learnerItem0">
                                                    <?php $count=1;}else{ ?>
                                                        <div id="sa<?php echo $saitem->getId(); ?>" class="learnerItem1">
                                                    <?php $count=0;} ?>
                                                            <div id="sa<?php echo $saitem->getId(); ?>id" class="lt1"><?php echo $saitem->getId() ?></div>
                                                            <div id="sa<?php echo $saitem->getId(); ?>name" class="lt2_3"><?php echo $saitem->getName() ?></div>
                                                            <div id="sa<?php echo $saitem->getId(); ?>head" class="lt3_3"><?php echo $saitem->getHead() ?></div>
                                                            
                                                            <div id="sa<?php echo $saitem->getId(); ?>action" class="lt5"><a style="color:blue;text-decoration: underline;" onclick="updatesa(<?php echo $saitem->getId(); ?>)">edit</a></div>
                                                        </div>
                                                       
                                        <?php } ?>
                                    <?php endforeach; ?>
                                <?php } ?>   
                                <?php endforeach; ?>
                                </div>
                                <?php if($clc->getId()==0){}else{ ?> 
                                <div class="addsp" style="position:absolute;right:30px;top:45px;border:1px solid #666;padding-left:3px;padding-right:3px;padding-top:2px;padding-bottom:2px;cursor:pointer;" onclick="addsa()">
                                    add
                                </div>
                                <?php } ?>  
                            </div>
                            
                            <div id="tab4Content" comment="learning_institutions">
                                <div class="table">
                                    <div class="learnerTHead">
                                        <div class="lt1">ID</div>
                                        <div class="lt2_3">Name</div>
                                        <div class="lt3_3">Head</div>
                                        <div class="lt5">Actions</div>
                                    </div>
                                <?php foreach ($li as $liitem): ?>
                                <?php if($clc->getId()==0){ ?>
                                        
                                        <?php $count=0; ?>
                                                    <?php if($count==0){ ?>
                                                        <div id="li<?php echo $liitem->getId(); ?>" class="learnerItem0">
                                                    <?php $count=1;}else{ ?>
                                                        <div id="li<?php echo $liitem->getId(); ?>" class="learnerItem1">
                                                    <?php $count=0;} ?>
                                                            <div id="li<?php echo $liitem->getId(); ?>id" class="lt1"><?php echo $liitem->getId() ?></div>
                                                            <div id="li<?php echo $liitem->getId(); ?>name" class="lt2_3"><?php echo $liitem->getName() ?></div>
                                                            <div id="li<?php echo $liitem->getId(); ?>head" class="lt3_3"><?php echo $liitem->getHead() ?></div>
                                                            
                                                            <div id="li<?php echo $liitem->getId(); ?>action" class="lt5"><a style="color:blue;text-decoration: underline;" onclick="updateli(<?php echo $liitem->getId(); ?>)">edit</a></div>
                                                        </div>
                                        
                                    
                                <?php    }else{ ?> 
                                    <?php foreach ($clcli as $clcliitem): ?>
                                        <?php if($clcliitem->getClcId()==$clc->getId() & $clcliitem->getLiId()==$liitem->getId()){?>
                                                
                                                
                                                    
                                                    <?php $count=0; ?>
                                                    <?php if($count==0){ ?>
                                                        <div id="li<?php echo $liitem->getId(); ?>" class="learnerItem0">
                                                    <?php $count=1;}else{ ?>
                                                        <div id="li<?php echo $liitem->getId(); ?>" class="learnerItem1">
                                                    <?php $count=0;} ?>
                                                            <div id="li<?php echo $liitem->getId(); ?>id" class="lt1"><?php echo $liitem->getId() ?></div>
                                                            <div id="li<?php echo $liitem->getId(); ?>name" class="lt2_3"><?php echo $liitem->getName() ?></div>
                                                            <div id="li<?php echo $liitem->getId(); ?>head" class="lt3_3"><?php echo $liitem->getHead() ?></div>
                                                            
                                                            <div id="li<?php echo $liitem->getId(); ?>action" class="lt5"><a style="color:blue;text-decoration: underline;" onclick="updateli(<?php echo $liitem->getId(); ?>)">edit</a></div>
                                                        </div>
                                                       
                                        <?php } ?>
                                    <?php endforeach; ?>
                                <?php } ?>   
                                <?php endforeach; ?>
                                </div>
                                <?php if($clc->getId()==0){}else{ ?> 
                                <div class="addli" style="position:absolute;right:30px;top:45px;border:1px solid #666;padding-left:3px;padding-right:3px;padding-top:2px;padding-bottom:2px;cursor:pointer;" onclick="addli()">
                                    add
                                </div>
                                <?php } ?> 
                            </div>
                            <div id="tab5Content" comment="partners">
                                <div class="table">
                                    <div class="learnerTHead">
                                        <div class="lt1">ID</div>
                                        <div class="lt2_3">Name</div>
                                        <div class="lt3_3">Head</div>
                                        <div class="lt5">Actions</div>
                                    </div>
                                <?php foreach ($pa as $paitem): ?>
                                <?php if($clc->getId()==0){ ?>
                                        
                                        <?php $count=0; ?>
                                                    <?php if($count==0){ ?>
                                                        <div id="pa<?php echo $paitem->getId(); ?>" class="learnerItem0">
                                                    <?php $count=1;}else{ ?>
                                                        <div id="pa<?php echo $paitem->getId(); ?>" class="learnerItem1">
                                                    <?php $count=0;} ?>
                                                            <div id="pa<?php echo $paitem->getId(); ?>id" class="lt1"><?php echo $paitem->getId() ?></div>
                                                            <div id="pa<?php echo $paitem->getId(); ?>name" class="lt2_3"><?php echo $paitem->getName() ?></div>
                                                            <div id="pa<?php echo $paitem->getId(); ?>head" class="lt3_3"><?php echo $paitem->getHead() ?></div>
                                                            
                                                            <div id="pa<?php echo $paitem->getId(); ?>action" class="lt5"><a style="color:blue;text-decoration: underline;" onclick="updatepa(<?php echo $paitem->getId(); ?>)">edit</a></div>
                                                        </div>
                                        
                                    
                                <?php    }else{ ?> 
                                    <?php foreach ($clcpa as $clcpaitem): ?>
                                        <?php if($clcpaitem->getClcId()==$clc->getId() & $clcpaitem->getPaId()==$paitem->getId()){?>
                                                
                                                
                                                    
                                                    <?php $count=0; ?>
                                                    <?php if($count==0){ ?>
                                                        <div id="pa<?php echo $paitem->getId(); ?>" class="learnerItem0">
                                                    <?php $count=1;}else{ ?>
                                                        <div id="pa<?php echo $paitem->getId(); ?>" class="learnerItem1">
                                                    <?php $count=0;} ?>
                                                            <div id="pa<?php echo $paitem->getId(); ?>id" class="lt1"><?php echo $paitem->getId() ?></div>
                                                            <div id="pa<?php echo $paitem->getId(); ?>name" class="lt2_3"><?php echo $paitem->getName() ?></div>
                                                            <div id="pa<?php echo $paitem->getId(); ?>head" class="lt3_3"><?php echo $paitem->getHead() ?></div>
                                                            
                                                            <div id="pa<?php echo $paitem->getId(); ?>action" class="lt5"><a style="color:blue;text-decoration: underline;" onclick="updatepa(<?php echo $paitem->getId(); ?>)">edit</a></div>
                                                        </div>
                                                       
                                        <?php } ?>
                                    <?php endforeach; ?>
                                <?php } ?>   
                                <?php endforeach; ?>
                                </div>
                                <?php if($clc->getId()==0){}else{ ?> 
                                <div class="addpa" style="position:absolute;right:30px;top:45px;border:1px solid #666;padding-left:3px;padding-right:3px;padding-top:2px;padding-bottom:2px;cursor:pointer;" onclick="addpa()">
                                    add
                                </div>
                                <?php } ?> 
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
            
            function addsp(){
                window.location="<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/profile/2/serviceprovider/add";
            }
            function addsa(){
                window.location="<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/profile/3/supportingagencies/add";
            }
            function addli(){
                window.location="<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/profile/4/learninginstitutions/add";
            }
            function addpa(){
                window.location="<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/profile/5/partners/add";
            }
            
            function savesp(num){
                spid=$("#sp"+num+"id").html();
                name=stripslashes($("#insp"+num+"name").val());
                head=stripslashes($("#insp"+num+"head").val());
                type=stripslashes($("#insp"+num+"type").val());
                window.location=("<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/profile/2/serviceprovider/save/"+spid+"/"+name+"/"+head+"/"+type);
            }
            function updatesp(num){
                $("#sp"+num+"name").html("<input value='"+$("#sp"+num+"name").html()+"' style='width:100%' id='insp"+num+"name' type='text'/>");
                $("#sp"+num+"head").html("<input value='"+$("#sp"+num+"head").html()+"' style='width:100%' id='insp"+num+"head' type='text'/>");
                $("#sp"+num+"type").html("<input value='"+$("#sp"+num+"type").html()+"' style='width:100%' id='insp"+num+"type' type='text'/>");
                $("#sp"+num+"action").html('<a style="color:blue;text-decoration: underline;" onclick="savesp('+num+')">save</a>');
            }
            function updatesa(num){
                $("#sa"+num+"name").html("<input value='"+$("#sa"+num+"name").html()+"' style='width:100%' id='insa"+num+"name' type='text'/>");
                $("#sa"+num+"head").html("<input value='"+$("#sa"+num+"head").html()+"' style='width:100%' id='insa"+num+"head' type='text'/>");
                
                $("#sa"+num+"action").html('<a style="color:blue;text-decoration: underline;" onclick="savesa('+num+')">save</a>');
            }
            function savesa(num){
                said=$("#sa"+num+"id").html();
                name=stripslashes($("#insa"+num+"name").val());
                head=stripslashes($("#insa"+num+"head").val());
                window.location=("<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/profile/3/supportingagencies/save/"+said+"/"+name+"/"+head);
            }
            function updateli(num){
                $("#li"+num+"name").html("<input value='"+$("#li"+num+"name").html()+"' style='width:100%' id='inli"+num+"name' type='text'/>");
                $("#li"+num+"head").html("<input value='"+$("#li"+num+"head").html()+"' style='width:100%' id='inli"+num+"head' type='text'/>");
                
                $("#li"+num+"action").html('<a style="color:blue;text-decoration: underline;" onclick="saveli('+num+')">save</a>');
            }
            function saveli(num){
                liid=$("#li"+num+"id").html();
                name=stripslashes($("#inli"+num+"name").val());
                head=stripslashes($("#inli"+num+"head").val());
                window.location=("<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/profile/4/learninginstitutions/save/"+liid+"/"+name+"/"+head);
            }
            function updatepa(num){
                $("#pa"+num+"name").html("<input value='"+$("#pa"+num+"name").html()+"' style='width:100%' id='inpa"+num+"name' type='text'/>");
                $("#pa"+num+"head").html("<input value='"+$("#pa"+num+"head").html()+"' style='width:100%' id='inpa"+num+"head' type='text'/>");
                
                $("#pa"+num+"action").html('<a style="color:blue;text-decoration: underline;" onclick="savepa('+num+')">save</a>');
            }
            function savepa(num){
                paid=$("#pa"+num+"id").html();
                name=stripslashes($("#inpa"+num+"name").val());
                head=stripslashes($("#inpa"+num+"head").val());
                window.location=("<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/profile/5/partners/save/"+paid+"/"+name+"/"+head);
            }
            
            function update(){
                $('#clc').html("");
                $('#updateHolder').html("");
                var updateString="<input id='updateName' type='text'  value='<?php echo $clc->getName(); ?>' />";
                    updateString+="<br/>";
                    updateString+="Address: <input id='updateAddr' type='text' value='<?php echo $clc->getAddress(); ?>'/>";
                    
                    updateString+="<br/>";
                    updateString+="Type: <input id='updateType' type='text' value='<?php echo $clc->getType(); ?>'/>";
                    updateString+="<br/>";
                    updateString+="With Functional Mobile Library: <input id='updateLib' type='text' value='<?php echo $clc->getWithFunctionalMobileLibrary(); ?>'/>";
                    updateString+="<br/>";
                    updateString+="CLC since: <input id='updateSinc' type='text' value='<?php echo $clc->getCLCSince()->format("Y-m-d"); ?>'/>";
                    updateString+="<br/>";
                    updateString+="Geographic ID: <input id='updateGeog' type='text' value='<?php echo $clc->getGeographicId(); ?>'/>";
                    updateString+="<br/>";
                    updateString+="Region: <input id='updateRegi' type='text' value='<?php echo $clc->getRegion(); ?>'/>";
                    updateString+="<br/>";
                    updateString+="Province: <input id='updateProv' type='text' value='<?php echo $clc->getProvince(); ?>'/>";
                    updateString+="<br/>";
                    updateString+="City/Municipality: <input id='updateCity' type='text' value='<?php echo $clc->getCityMunicipality(); ?>'/>";
                    updateString+="<br/>";
                    updateString+="Division: <input id='updateDivision' type='text' value='<?php echo $clc->getDivision(); ?>'/>";
                    updateString+="<br/>";
                    updateString+="District: <input id='updateDistrict' type='text' value='<?php echo $clc->getDistrict(); ?>'/>";
                    updateString+="<br/>";
                    updateString+="Barangay: <input id='updateBara' type='text' value='<?php echo $clc->getBarangay(); ?>'/>";
                    
                $('#clc').html(updateString);            
                $('#updateHolder').html('<div onclick="save()" style="border:1px solid #666;padding-left:3px;padding-right:3px;padding-top:2px;padding-bottom:2px;cursor:pointer;">save</div>');           
              
            }
            
            function save(){
                var uName=stripslashes($("#updateName").val());
                var uAddr=stripslashes($("#updateAddr").val());
                var uType=stripslashes($("#updateType").val());
                var uLibr=stripslashes($("#updateLib").val());
                var uSinc=stripslashes($("#updateSinc").val());
                var uGeog=stripslashes($("#updateGeog").val());
                var uRegi=stripslashes($("#updateRegi").val());
                var uProv=stripslashes($("#updateProv").val());
                var uCity=stripslashes($("#updateCity").val());
                var uDivi=stripslashes($("#updateDivision").val());
                var uDist=stripslashes($("#updateDistrict").val());
                var uBara=stripslashes($("#updateBara").val());
                
                window.location='<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/saveCLC/'+uName+'/'+uAddr+'/'+uSinc+'/'+uGeog+'/'+uRegi+'/'+uProv+'/'+uCity+'/'+uBara+'/'+uType+'/'+uLibr+'/'+uDivi+'/'+uDist;
            }
            
            
            
            
            
            //TAB CODE START
            function changeActive(tab){
                if(tab=="tab1"){
                    $("#tab1").removeClass('tabA');
                    $("#tab2").removeClass('tabA');
                    $("#tab3").removeClass('tabA');
                    $("#tab4").removeClass('tabA');
                    $("#tab5").removeClass('tabA');
                    
                    $("#tab1").removeClass('tabNA');
                    $("#tab2").removeClass('tabNA');
                    $("#tab3").removeClass('tabNA');
                    $("#tab4").removeClass('tabNA');
                    $("#tab5").removeClass('tabNA');
                    
                    $("#tab1").addClass('tabA');
                    $("#tab2").addClass('tabNA');
                    $("#tab3").addClass('tabNA');
                    $("#tab4").addClass('tabNA');
                    $("#tab5").addClass('tabNA');
                    showInfo('tab1Content');
                }else if(tab=="tab2"){
                    $("#tab1").removeClass('tabA');
                    $("#tab2").removeClass('tabA');
                    $("#tab3").removeClass('tabA');
                    $("#tab4").removeClass('tabA');
                    $("#tab5").removeClass('tabA');
                    
                    $("#tab1").removeClass('tabNA');
                    $("#tab2").removeClass('tabNA');
                    $("#tab3").removeClass('tabNA');
                    $("#tab4").removeClass('tabNA');
                    $("#tab5").removeClass('tabNA');
                    
                    $("#tab1").addClass('tabNA');
                    $("#tab2").addClass('tabA');
                    $("#tab3").addClass('tabNA');
                    $("#tab4").addClass('tabNA');
                    $("#tab5").addClass('tabNA');
                    showInfo('tab2Content');
                }else if(tab=="tab3"){
                    $("#tab1").removeClass('tabA');
                    $("#tab2").removeClass('tabA');
                    $("#tab3").removeClass('tabA');
                    $("#tab4").removeClass('tabA');
                    $("#tab5").removeClass('tabA');
                    
                    $("#tab1").removeClass('tabNA');
                    $("#tab2").removeClass('tabNA');
                    $("#tab3").removeClass('tabNA');
                    $("#tab4").removeClass('tabNA');
                    $("#tab5").removeClass('tabNA');
                    
                    $("#tab1").addClass('tabNA');
                    $("#tab2").addClass('tabNA');
                    $("#tab3").addClass('tabA');
                    $("#tab4").addClass('tabNA');
                    $("#tab5").addClass('tabNA');
                    showInfo('tab3Content');
                }else if(tab=="tab4"){
                    $("#tab1").removeClass('tabA');
                    $("#tab2").removeClass('tabA');
                    $("#tab3").removeClass('tabA');
                    $("#tab4").removeClass('tabA');
                    $("#tab5").removeClass('tabA');
                    
                    $("#tab1").removeClass('tabNA');
                    $("#tab2").removeClass('tabNA');
                    $("#tab3").removeClass('tabNA');
                    $("#tab4").removeClass('tabNA');
                    $("#tab5").removeClass('tabNA');
                    
                    $("#tab1").addClass('tabNA');
                    $("#tab2").addClass('tabNA');
                    $("#tab3").addClass('tabNA');
                    $("#tab4").addClass('tabA');
                    $("#tab5").addClass('tabNA');
                    showInfo('tab4Content');
                }else if(tab=="tab5"){
                    $("#tab1").removeClass('tabA');
                    $("#tab2").removeClass('tabA');
                    $("#tab3").removeClass('tabA');
                    $("#tab4").removeClass('tabA');
                    $("#tab5").removeClass('tabA');
                    
                    $("#tab1").removeClass('tabNA');
                    $("#tab2").removeClass('tabNA');
                    $("#tab3").removeClass('tabNA');
                    $("#tab4").removeClass('tabNA');
                    $("#tab5").removeClass('tabNA');
                    
                    $("#tab1").addClass('tabNA');
                    $("#tab2").addClass('tabNA');
                    $("#tab3").addClass('tabNA');
                    $("#tab4").addClass('tabNA');
                    $("#tab5").addClass('tabA');
                    showInfo('tab5Content');
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
            function stripslashes(str){
                str=str.replace(/\\/g,'');
                str=str.replace(/\//g,'');
                return str;
            }
            
            
    </script>
</html>
    
    