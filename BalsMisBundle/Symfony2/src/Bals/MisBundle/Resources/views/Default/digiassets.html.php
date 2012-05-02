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
                        <div style="border:1px solid #666;padding-left: 5px;padding-right: 5px;position: absolute;right: 30px;top: 45px;cursor: pointer;" onclick="addAssets()" id="addHolder">add</div>
                    <?php } ?>
                    <div class="table">
                        <div class="learnerTHead">
                            <div class="lt1">ID</div>
                            <div class="lt2">Name</div>
                            <div class="lt3">Link</div>
                            <div class="lt4">Remarks</div>
                            <div class="lt5">Actions</div>
                        </div>
                        <?php $count=0; ?>
                        <?php $countStart=0; ?>
                        <?php foreach ($digi as $item): ?>
                            <?php foreach ($clcdigi as $clcdigiitem): ?>
                                <?php if($item->getId()==$clcdigiitem->getDigiAssetsId() & ($clc->getId()==$clcdigiitem->getClcId()|$clc->getId()==-1)){ ?>
                                    <?php
                                    if($countStart>=15){
                                        
                                    }
                                    elseif($countStart<$start-1){
                                        $countStart++;
                                    }else{
                                    ?>
                                        
                                        <?php if($count==0){ ?>
                                            <div class="learnerItem0">
                                        <?php $count=1;}else{ ?>
                                            <div class="learnerItem1">
                                        <?php $count=0;} ?>
                                                <div class="lt1"><?php echo $item->getId() ?></div>
                                                <div class="lt2" id="lt2<?php echo $item->getId() ?>"><?php echo $item->getName() ?></div>
                                                <div class="lt3" id="lt3<?php echo $item->getId() ?>"><?php echo $item->getLink() ?></div>
                                                <div class="lt4" id="lt4<?php echo $item->getId() ?>"><?php echo $item->getRemarks() ?></div>
                                                <div class="lt5" id="lt5<?php echo $item->getId() ?>"><font style="color:blue;cursor:pointer;" onclick="edit(<?php echo $item->getId(); ?>)">edit</font>
                                                <?php if($usertype=="admin"){ ?>
                                                | <font style="color:blue;cursor:pointer;" onclick="del(<?php echo $item->getId(); ?>)">del</font></div>
                                                <?php } ?>
                                            </div>
                                    <?php $countStart++;} ?>
                                <?php } ?>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    
                    
                    
                    </div>
                  
                    <div style="position: absolute;bottom: 10px;left:20px;"><a href="<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/assets/<?php echo ($start-14); ?>"> back </a> | <a href="<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/assets/<?php echo ($start+14); ?>"> next </a></div>
                  
                  
                  
                    
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
            
            function edit(num){
                $("#lt2"+num).html("<input value='"+$("#lt2"+num).html()+"' style='width:100%' id='inlt2"+num+"' type='text'/>");
                $("#lt3"+num).html("<input value='"+$("#lt3"+num).html()+"' style='width:100%' id='inlt3"+num+"' type='text'/>");
                $("#lt4"+num).html("<input value='"+$("#lt4"+num).html()+"' style='width:100%' id='inlt4"+num+"' type='text'/>");
            
                $("#lt5"+num).html('<a style="color:blue;text-decoration: underline;" onclick="saveda('+num+')">save</a>');
            }
            
            function saveda(num){
                name=stripslashes($("#inlt2"+num).val());
                link=stripslashes($("#inlt3"+num).val());
                rema=stripslashes($("#inlt4"+num).val());
                window.location="<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/assets/0/"+num+"/saveassets/"+name+"/"+link+"/"+rema;
            }
            function del(num){
                window.location="<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/assets/0/"+num+"/removeasset";
            }
            
            function addAssets(){
                window.location="<?php echo $rootPage; ?>/<?php echo $clc->getId(); ?>/digiassetsadd";
            }
            function stripslashes(str){
                str=str.replace(/\\/g,'');
                str=str.replace(/\//g,'');
                return str;
            }
            
    </script>
</html>
    
    