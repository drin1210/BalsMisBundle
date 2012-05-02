<?php
/**
 * PHPExcel
 *
 * Copyright (C) 2006 - 2011 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2011 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt	LGPL
 * @version    1.7.6, 2011-02-27
 */

/** Error reporting */
error_reporting(E_ALL);



/** PHPExcel */
require_once '../Classes/PHPExcel.php';

//get variables
$TOR=$_POST["reportType"];
$filterby=$_POST["by"];
$title=substr((date_create()->format('Y-m-d')."_".$TOR.$filterby),0,30);
$filterused=substr($filterby,3);
//get data from database


	
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "bals";

$mysql_link = mysql_connect($mysql_host, $mysql_user, $mysql_password);
mysql_select_db($mysql_database);

if($mysql_link){
switch($TOR){
case("learners"):
//LEARNER

switch($filterby){
case("by_region"):
//BY REGION
    $result=mysql_query("select distinct(clc.region) as region, count(*) as 'number of learners'  from clc,learner where clc.id=learner.clc_enlisted group by region");
break;
case("by_division"):
//BY DIVISION
    $result=mysql_query("select distinct(clc.division) as division, count(*) as 'number of learners' from clc,learner where clc.id=learner.clc_enlisted group by division");
break;
case("by_district"):
//BY DISTRICT
    $result=mysql_query("select distinct(clc.district) as district, count(*) as 'number of learners'  from clc,learner where clc.id=learner.clc_enlisted group by district");
break;
case("by_modality"):
//BY MODALITY    
    $result=mysql_query("select distinct(academicprofile.modality) as 'mode of delivery', count(*) as 'number of learners' from academicprofile, learner where academicprofile.learners_id=learner.id group by 'mode of delivery'");
break;
case("by_sex"):
//BY SEX   
    $result=mysql_query("select distinct(learner.gender) as 'gender', count(*) as 'number of learners' from learner group by gender");
break;
case("by_implementer"):
//BY IMPLEMENTER    
    $result=mysql_query("SELECT CONCAT(facilitator.last_name,' ,',facilitator.first_name, ' ', facilitator.middle_name) as implementer, count(*) as 'number of learners' FROM facilitator, learner, academicprofile WHERE academicprofile.assigned_facilitator=facilitator.id & academicprofile.learners_id=learner.id GROUP BY implementer");
break;
}
break;
case("completers"):
//COMPLETERS
//BY REGION
switch($filterby){
case("by_region"):
    $result=mysql_query("SELECT distinct(clc.region) as region, count(*) as 'number of completers'  FROM clc WHERE clc.id IN (select learner.clc_enlisted from learner where learner.id in (select learners_id from academicprofile where status='complete')) GROUP BY region");
//BY DIVISION
break;
case("by_division"):
    $result=mysql_query("SELECT distinct(clc.division) as division, count(*) as 'number of completers'  FROM clc WHERE clc.id IN (select learner.clc_enlisted from learner where learner.id in (select learners_id from academicprofile where status='complete')) GROUP BY region");
//BY DISTRICT
break;
case("by_district"):
    $result=mysql_query("SELECT distinct(clc.district) as district, count(*) as 'number of completers'  FROM clc WHERE clc.id IN (select learner.clc_enlisted from learner where learner.id in (select learners_id from academicprofile where status='complete')) GROUP BY region");
//BY MODALITY
break;
case("by_modality"):
    $result=mysql_query("SELECT distinct(modality) as modality, count(*) as 'number of completers'  FROM academicprofile where status='complete' group by modality");
//BY SEX
break;
case("by_sex"):
    $result=mysql_query("SELECT distinct(gender) as gender, count(*) as 'number of completers'  FROM learner where learner.id in (select learners_id from academicprofile where status='complete') group by gender");
//BY IMPLEMENTER
break;
case("by_implementer"):
    $result=mysql_query("SELECT CONCAT(facilitator.last_name,' ,',facilitator.first_name, ' ', facilitator.middle_name) as implementer, count(*) as 'number of learners' FROM facilitator WHERE facilitator.id IN (SELECT assigned_facilitator FROM academicprofile WHERE status='complete')  GROUP BY implementer");
break;
}
break;
case("takers"):
//TAKENTEST
//BY REGION
switch($filterby){
case("by_region"):
    $result=mysql_query("SELECT distinct(clc.region) as region, count(*) as 'number of completers'  FROM clc WHERE clc.id IN (select learner.clc_enlisted from learner where learner.id in (select learners_id from academicprofile where status='takentest')) GROUP BY region");
//BY DIVISION
break;
case("by_division"):
    $result=mysql_query("SELECT distinct(clc.division) as division, count(*) as 'number of completers'  FROM clc WHERE clc.id IN (select learner.clc_enlisted from learner where learner.id in (select learners_id from academicprofile where status='takentest')) GROUP BY region");
//BY DISTRICT
break;
case("by_district"):
    $result=mysql_query("SELECT distinct(clc.district) as district, count(*) as 'number of completers'  FROM clc WHERE clc.id IN (select learner.clc_enlisted from learner where learner.id in (select learners_id from academicprofile where status='takentest')) GROUP BY region");
//BY MODALITY
break;
case("by_modality"):
    $result=mysql_query("SELECT distinct(modality) as modality, count(*) as 'number of completers'  FROM academicprofile where status='takentest' group by modality");
//BY SEX
break;
case("by_sex"):
    $result=mysql_query("SELECT distinct(gender) as gender, count(*) as 'number of completers'  FROM learner where learner.id in (select learners_id from academicprofile where status='takentest') group by gender");
//BY IMPLEMENTER
break;
case("by_implementer"):
    $result=mysql_query("SELECT CONCAT(facilitator.last_name,' ,',facilitator.first_name, ' ', facilitator.middle_name) as implementer, count(*) as 'number of learners' FROM facilitator WHERE facilitator.id IN (SELECT assigned_facilitator FROM academicprofile WHERE status='takentest')  GROUP BY implementer");
break;
}
break;
case("passers"):
//PASSERS
//BY REGION
switch($filterby){
case("by_region"):
    $result=mysql_query("SELECT distinct(clc.region) as region, count(*) as 'number of completers'  FROM clc WHERE clc.id IN (select learner.clc_enlisted from learner where learner.id in (select learners_id from academicprofile where status='passed')) GROUP BY region");
//BY DIVISION
break;
case("by_division"):
    $result=mysql_query("SELECT distinct(clc.division) as division, count(*) as 'number of completers'  FROM clc WHERE clc.id IN (select learner.clc_enlisted from learner where learner.id in (select learners_id from academicprofile where status='passed')) GROUP BY region");
//BY DISTRICT
break;
case("by_district"):
    $result=mysql_query("SELECT distinct(clc.district) as district, count(*) as 'number of completers'  FROM clc WHERE clc.id IN (select learner.clc_enlisted from learner where learner.id in (select learners_id from academicprofile where status='passed')) GROUP BY region");
//BY MODALITY
break;
case("by_modality"):
    $result=mysql_query("SELECT distinct(modality) as modality, count(*) as 'number of completers'  FROM academicprofile where status='passed' group by modality");
//BY SEX
break;
case("by_sex"):
    $result=mysql_query("SELECT distinct(gender) as gender, count(*) as 'number of completers'  FROM learner where learner.id in (select learners_id from academicprofile where status='passed') group by gender");
//BY IMPLEMENTER
break;
case("by_implementer"):
    $result=mysql_query("SELECT CONCAT(facilitator.last_name,' ,',facilitator.first_name, ' ', facilitator.middle_name) as implementer, count(*) as 'number of learners' FROM facilitator WHERE facilitator.id IN (SELECT assigned_facilitator FROM academicprofile WHERE status='passed')  GROUP BY implementer");
break;
}
break;
case("clcs"):
//CLCS
//BY REGION
switch($filterby){
case("by_region"):
    $result=mysql_query("SELECT distinct(region) as region, count(*) FROM clc GROUP BY region");
//BY DIVISION
break;
case("by_division"):
    $result=mysql_query("SELECT distinct(division) as division, count(*) FROM clc GROUP BY division");
break;
}
break;
case("serviceproviders"):
//SERVICE PROVIDERS
//BY REGION
switch($filterby){
case("by_region"):
    $result=mysql_query("SELECT distinct(region) as region, count(*) FROM clc, clc_serviceproviders WHERE clc.id=clc_serviceproviders.clc_id  GROUP BY region");
//BY DIVISION
break;
case("by_division"):
    $result=mysql_query("SELECT distinct(division) as division, count(*) FROM clc, clc_serviceproviders WHERE clc.id=clc_serviceproviders.clc_id  GROUP BY division");
break;
}
break;
case("implementers"):
//IMPLEMENTERS
//BY REGION
switch($filterby){
case("by_region"):
    $result=mysql_query("SELECT distinct(region) as region, count(*) FROM clc, clc_facilitators WHERE clc.id=clc_facilitators.clc_id  GROUP BY region");
//BY DIVISION
break;
case("by_division"):
    $result=mysql_query("SELECT distinct(division) as division, count(*) FROM clc, clc_facilitators WHERE clc.id=clc_facilitators.clc_id  GROUP BY division");
break;
}
break;
}
}

$whattototal="";
$totalofwhat=0;

switch($TOR){
    case ("learners"):
        $whattototal = "Learners";
        break;
    case ("completers"):
        $whattototal = "Completers";
        break;
    case ("takers"):
        $whattototal = "Test Takers";
        break;
    case ("passers"):
        $whattototal = "Test Passers";
        break;
    case ("clcs"):
        $whattototal = "Community Learning Centers";
        break;
    case ("serviceproviders"):
        $whattototal = "Service Providers";
        break;
    case ("implementers"):
        $whattototal = "Implementers";
        break;
}



// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set properties
$objPHPExcel->getProperties()->setCreator("ALS")
							 ->setLastModifiedBy("ALS")
							 ->setTitle($title)
							 ->setSubject($title)
							 ->setDescription($title)
							 ->setKeywords($title)
							 ->setCategory($title);

$rownumber=7;
while ($row = mysql_fetch_array($result)) {
$totalofwhat=$totalofwhat+$row[1];
$objPHPExcel->setActiveSheetIndex(0)
	    ->setCellValue('A'.$rownumber, $row[0])
	    ->setCellValue('B'.$rownumber, $row[1]);
	    $rownumber=$rownumber+1;
}

// Add some data
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'ALTERNATIVE LEARNING SYSTEM')
            ->setCellValue('A2', "MIS Report ".date_create()->format('Y-m-d'))
            ->setCellValue('A4', 'Total Number of '.$whattototal.": ")
            ->setCellValue('B4', $totalofwhat)
	    ->setCellValue('A6', $filterused)
	    ->setCellValue('B6', 'Total');
           



// Rename sheet
$objPHPExcel->getActiveSheet()->setTitle($title);


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);

$styleArray = array(
  'borders' => array(
    'allborders' => array(
      'style' => PHPExcel_Style_Border::BORDER_THIN
    )
  )
);
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(30);
$objPHPExcel->getActiveSheet()->getStyle('A6:B'.($rownumber-1))->applyFromArray($styleArray);
unset($styleArray);


// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="'.$title.'.xls"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
