<!--DO NOT MODIFY ANYTHING OTHER THAN INSIDES OF DIV CONTENTS-->
<html>
    <head>
        <title>
        ALS-MIS
        </title>
        <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('public/css/common.css') ?>" />
        <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('public/css/jquery-ui-1.8.18.custom.css') ?>" />
        
        <script src="<?php echo $view['assets']->getUrl('public/js/jq.js') ?>" type="text/javascript"></script>
        <script src="<?php echo $view['assets']->getUrl('public/js/jqueryui.js') ?>" type="text/javascript"></script>
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <?php include('header.php'); ?>
            </div>
            
            <div id="middle">
                <div id="clcNav">
                
                    <select id="regionfilter" style="width:100%" onchange="changeFilters(1); filter(1)">
                        <option value="all">ALL</option>
                        <?php foreach ($region as $regionItem): ?>
                            <option value="<?php echo $regionItem->getRegion() ?>"><?php echo $regionItem->getRegion() ?></option>
                        <?php endforeach; ?>
                    </select>
                    <select id="divisionfilter" style="width:100%" onchange="changeFilters(2); filter(2)">
                        <option value="all">ALL</option>
                        <?php foreach ($division as $divisionItem): ?>
                            <option class="filterdivision <?php echo $divisionItem->getRegion() ?>" value="<?php echo $divisionItem->getDivision() ?>"><?php echo $divisionItem->getDivision() ?></option>
                        <?php endforeach; ?>
                    </select>
                    <select id="districtfilter" style="width:100%" onchange="changeFilters(3); filter(3)">
                        <option value="all">ALL</option>
                        <?php foreach ($district as $districtItem): ?>
                            <option  class="filterdistrict <?php echo $districtItem->getRegion() ?> <?php echo $districtItem->getDivision() ?>" value="<?php echo $districtItem->getDistrict() ?>"><?php echo $districtItem->getDistrict() ?></option>
                        <?php endforeach; ?>
                    </select>
                    
                    <button style="width: 100%;" onclick="addclc()">+ ADD CLC</button>
                    
                    <input id="search" type="text" style="width:140px;margin:5px;" value="search" onchange="gosearch()" />
                    
                    <div id="clcContainer">
                        <?php foreach ($clc as $item): ?>
                            <?php if($item->getId()!=-1){ ?>
                            <div class="clc <?php if($item->getId()==0){echo "warehouse";} ?> <?php echo $item->getRegion() ?> <?php echo $item->getDivision() ?> <?php echo $item->getDistrict() ?>" onclick="location.href='<?php echo $rootPage; ?>/<?php echo $item->getId(); ?>'" >
                                <?php echo $item->getName() ?>
                            </div>
                            <?php } ?>
                        <?php endforeach; ?>
                        
                    </div>
                    
                    
                    
                </div>
                <div id="tabs">
                    <div class="tab" onclick="location.href='<?php echo $rootPage; ?>/-1/learners'">Learners</div>
                    <div class="tab" onclick="location.href='<?php echo $rootPage; ?>/-1/facilitators'">Facilitators</div>
                    <div class="tab" onclick="location.href='<?php echo $rootPage; ?>/-1/assets'">Digital Assets</div>
                    <div class="tab0" onclick="location.href='<?php echo $rootPage; ?>/0/reports'">Generate Reports</div>
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
    <script >
            var left=(window.innerWidth-800)/2;
            if(left<0){
                left=0;
                
            }
            $('#wrapper').css('left',left);
            
            function addclc(){
                
                window.location="<?php echo $rootPage; ?>/0/newclc";
            
            }
            
            function gosearch(){
                window.setTimeout('redir()',500);
                
            }
            function redir(){
                window.location="<?php echo $rootPage; ?>/"+$("#search").val();
            }
            
            function changeFilters(level){
                region=$('#regionfilter').val()
                division=$('#divisionfilter').val()
                
                //alert(region+division);
                if(level==1){
                    $(".filterdivision").hide();
                    $(".filterdistrict").hide();
                    $("."+region).show();
                }else if(level==2){
                    $(".filterdistrict").hide();
                    $("."+division).show();
                }else if(level==3){
                    $(".filterdistrict").hide();
                    $("."+division).show();
                }
                
                if($('#regionfilter').val()=="all" & $('#divisionfilter').val()=="all"){
                    $(".filterdivision").show();
                    $(".filterdistrict").show();
                }else if($('#regionfilter').val()=="all" & $('#divisionfilter').val()!="all"){
                    $(".filterdivision").show();
                    $("."+division).show();
                }else if($('#regionfilter').val()!="all" & $('#divisionfilter').val()=="all"){
                    $(".filterdivision").hide();
                    $(".filterdistrict").hide();
                    $("."+region).show();
                }
                
                
            }
            function filter(level){
                $(".clc").hide();
                regi=$('#regionfilter').val()
                divi=$('#divisionfilter').val()
                dist=$('#districtfilter').val()
                
                
                $(".warehouse").show();
               
                
                
                if($('#regionfilter').val()=="all" & $('#divisionfilter').val()=="all" & $('#districtfilter').val()=="all"){
                    $(".clc").show();
                }else if($('#regionfilter').val()=="all" & $('#divisionfilter').val()!="all" & $('#districtfilter').val()=="all"){
                    $("."+divi).show();
                }else if($('#regionfilter').val()!="all" & $('#divisionfilter').val()!="all" & $('#districtfilter').val()=="all"){
                    $("."+divi).show();
                }else if($('#regionfilter').val()!="all" & $('#divisionfilter').val()=="all" & $('#districtfilter').val()=="all"){
                    $("."+regi).show();
                }else if($('#regionfilter').val()=="all" & $('#divisionfilter').val()=="all" & $('#districtfilter').val()!="all"){
                    $("."+dist).show();
                }
                
                
            }
            
            
            //autocomplete codes
            var availableTags= new Array();
            
            <?php foreach($clc as $searchtags): ?>
            
                availableTags.push({label:"<?php echo $searchtags->getName(); ?>",value:"<?php echo $searchtags->getId(); ?>"});
               
            <?php endforeach; ?>
            
            $( "#search" ).autocomplete({
			source: availableTags
		});
            
    </script>
</html>
    
    