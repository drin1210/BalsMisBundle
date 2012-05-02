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
                
                
                    <button style="width: 100%;" onclick="addclc()">+ ADD CLC</button>
                    
                    <input id="search" type="text" style="width:140px;margin:5px;" value="search" onchange="gosearch()" />
                    
                    <div id="clcContainer">
                        <?php foreach ($clc as $item): ?>
                            <div class="clc" onclick="location.href='<?php echo $rootPage; ?>/<?php echo $item->getId(); ?>'">
                                <?php echo $item->getName() ?>
                            </div>  
                        <?php endforeach; ?>
                        
                    </div>
                    
                    
                    
                </div>
                <div id="tabs">
                    <div class="tab" onclick="location.href='<?php echo $rootPage; ?>/0/learners'">Learners</div>
                    <div class="tab" onclick="location.href='<?php echo $rootPage; ?>/0/facilitators'">Facilitators</div>
                    <div class="tab" onclick="location.href='<?php echo $rootPage; ?>/0/assets'">Digital Assets</div>
                    <div class="tab0" onclick="location.href='<?php echo $rootPage; ?>/0/reports'">Generate Reports</div>
                </div>
                <!--DO NOT MODIFY BEFORE THIS LINE-->
                <div id="contents" class="">
		    <div id="grContents">
			<h4>Generate Reports</h4>
			<form action="/generateReports/Tests/generateReport.php" method="POST">
			<select id="reportType" name="reportType" onchange="hideOptions()">
			    <option value="learners">Number of Learners</option>
			    <option value="completers">Number of Completers</option>
			    <option value="takers">Number of Test Takers</option>
			    <option value="passers">Number of Test Passers</option>
			    <option value="clcs">Number of CLCs</option>
			    <option value="serviceproviders">Number of Service Providers</option>
			    <option value="implementers">Number of ALS implementers</option>
			</select>
			<br/>
			<!--
			<input type="radio" id="by" name="by" value="by_year" label="asd">by Year</input>
			<br/>
			-->
			<input type="radio" id="by" name="by" value="by_region">by Region</input>
			<br/>
			<input type="radio" id="by" name="by" value="by_division">by Division</input>
			<br/>
			<div class="removable">
			<!--
			<input type="radio" id="by" name="by" value="by_program">by Program</input>
			<br/>
			-->
			<input type="radio" id="by" name="by" value="by_modality">by Mode of Delivery</input>
			<br/>
			<!--
			<input type="radio" id="by" name="by" value="by_age">by Age Group</input>
			<br/>
			-->
			<input type="radio" id="by" name="by" value="by_sex">by Sex</input>
			<br/>
			<input type="radio" id="by" name="by" value="by_implementer" >by Implementer</input>
			</div>
			<br/>
			<br/>
			<input type="submit" value="Generate" />
			</form> 
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
            
            function addclc(){
                
                window.location="<?php echo $rootPage; ?>/0/newclc";
            
            }
            
	    function hideOptions(){
		if($("#reportType").val()=="learners" | $("#reportType").val()=="completers" | $("#reportType").val()=="takers" | $("#reportType").val()=="passers"){
		    $(".removable").show();
		}else{
		    $(".removable").hide();
		}
		
		
	    }
	    
            function gosearch(){
                window.setTimeout('redir()',500);
                
            }
            function redir(){
                window.location="<?php echo $rootPage; ?>/"+$("#search").val();
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
    
    