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
                  
                    
                  
                  
                  
                  
                    
                </div>
                <!--DO NOT MODIFY AFTER THIS LINE-->
            </div>
            
            <div id="footer">
                <?php include('footer.php'); ?>
            </div>
            
        </div>

    </body>
    <script>
            var left=(window.innerWidth-800)/2;
            if(left<0){
                left=0;
            }
            $('#wrapper').css('left',left);
            
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
                }else{
                    $("#tab1").removeClass('tabA');
                    $("#tab2").removeClass('tabA');
                    $("#tab1").removeClass('tabNA');
                    $("#tab2").removeClass('tabNA');
                    $("#tab2").addClass('tabA');
                    $("#tab1").addClass('tabNA');
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
            showInfo('tab1Content');
            //TAB CODE END
            
            
    </script>
</html>
    
    