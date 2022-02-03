<meta charset="UTF-8">
<?php

/*
 * Template Name: Income Wiholding Support
 * Version: 1.0.0
 * Description: A print-friendly template displaying the Income Witholding Support PDF
 * Author: Bliksem LLC
 * Author URI: https://simplifysmallbiz.com
 * Group: 0. Sort
 * License: GPLv2
 * Required PDF Version: 4.0-alpha
 * Tags: Header, Footer, Background, Optional HTML Fields, Optional Page Fields
 */

/* Prevent direct access to the template */
if (!class_exists('GFForms')) {
    return;
}

/**
 * Load our template-specific settings
 */
$show_meta_data = !empty($settings['world_show_meta_data']) ? $settings['world_show_meta_data'] : 'No';
?>

<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!-- STYLES -->
<style>
/* Pages */
@page {
  size: 8.5in 11in;
  margin: 1in 1in 1in 1in;
  header: html_MyCustomHeader;
  line-height: 1.3;
  footer: html_MyCustomFooter;
  margin-footer: 10mm;
}


/* FONTS */

/* LISTS */
ul,
ol {
  margin: 0;
  padding-left: 1mm;
  padding-right: 1mm;
  list-style-type: U+2610;
}

li {
  margin: 0;
  padding: 2mm 0 0 0;
  list-style-position: inside;
  list-style: circle;
 
}

/* TABLES */
.footer_left_half {
  width: 69%;
}

.footer_right_half {
  width: 30%;
}

.column_left_third,
.column_right_third {
  width: 45%;
}

.column_middle_third {
  width: 10%;
}

.section_number {
  width: 20mm;
  
}

.table_children_col_1 {
  width: 20mm;
}

.table_children_col_2 {
  width: 85mm;
}



/* GENERAL */
.bs_bold {
  font-weight: bold;
}

.bs_italic {
  font-style: italic;
}

.bs_text_small {
  font-size: 7pt;
}

.image-standing_order {
  height: 255mm;
}

.indent-paragraph {
  text-indent: 10.5mm;
   line-height: 250%;
}

.indent-paragraph-text {
padding-left: 100px;
  text-align: justify;

   line-height: 250%;
 
  
}

.indent-paragraph-sub {
padding-left: 150px;
  text-align: justify;

   line-height: 250%;
 
  
}
.indent-paragraph-sub2 {
padding-left: 200px;
  text-align: justify;

   line-height: 250%;
 
  
}


.indent-paragraph-textind {
padding-left: 70px;
  text-align: justify;
  text-indent: 10.5mm;
   line-height: 250%;
 
  
}

.indent-paragraph-texty {
padding-left: 40px;
  text-align: justify;

   line-height: 250%;
 
  
}
.title{

line-height: 250%;
text-align: center;
font-weight: bold;
}
.paragraph {
  line-height: 250%;
}

.paragraphinfo {
  line-height: 150%;

}

.paragraphleft {
  line-height: 250%;
  width: 290px;
  float: left;

}
.paragraphright {
  line-height: 250%;
  width: 290px;
  float: right;

}
.paragraphsmall {
  line-height: 150%;
  font-size: 5pt;
}
.paragraphborder {
  line-height: 250%;
  border-width:2px; border-style:solid;
  display: flex;
}
.container {
  line-height: 250%;
  display: flex;

}

.section_content {
  margin-bottom: 5mm;
}

.text_align_center {
  text-align: center;
}

.text_align_right {
  text-align: right;
}
.text_align_left {
  text-align: left;
}

.text_align_justify {
  text-align: justify;
}

.text_underline {
  text-decoration: underline;
}

/* SIGNATURE FIELDS */
.height_max {
  height: 10mm;
}
</style>
<!-- STYLES END -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

<!-- HEADER / FOOTER -->
<htmlpagefooter name="MyCustomFooter">
  <table class="footer">
    <tr class="paragraph">
      <td class="footer_left_half"><span class="bs_bold bs_text_small">INCOME WITHOLDING FOR SUPPORT</span></td>
      <td class="footer_right_half text_align_right"><span class="bs_bold bs_text_small">PAGE {PAGENO}</span></td>
    </tr>
  </table>
</htmlpagefooter>
<htmlpagefooter name="MyFooterStandingOrder">
</htmlpagefooter>
<!-- HEADR FOOTER END -->

<?php
/* *********************************************************************
 * VARIABLES
 ******************************************************************** */
// $client_user_id = $form_data'misc''created_by';

//INput data

//HEADING data

//sender info
$reasonForNotice = $form_data['field'][2];
$sender = $form_data['field'][3];
$stateTribeTerritory = $form_data['field'][4];
$cityCounty = $form_data['field'][5];
$privateIndividual = $form_data['field'][6];
$locatorCode = $form_data['field'][7];
$orderID = $form_data['field'][8];
$caseID = $form_data['field'][9];

//Employer and case information

$employerIncomeWitholder = $form_data['field'][12];
$witholderAddressArray = $form_data['field'][13];
     $witholderAddress = implode(" <br>",$witholderAddressArray);
$employeeObligerNameArray = $form_data['field'][14];
    $employeeObligerName = implode(" ",$employeeObligerNameArray);
$empObSSNumber = $form_data['field'][15];
$empObDOB = $form_data['field'][16];
$custodialObligeeNameArray = $form_data['field'][17];
    $custodialObligeeName = implode(" ",$custodialObligeeNameArray);
$empIncFEIN = $form_data['field'][18];

//order information
$currentCPAmount = $form_data['field'][23];
$currentCPPeriod = $form_data['field'][22];

//past-due child support
$pastCPAmount = $form_data['field'][26];
$pastCPPeriod = $form_data['field'][27];
$condArrearsGreaterThan12Weeks = $form_data['field'][28];

//cash medical
$currentCMammount  = $form_data['field'][81];
$currentCMperiod = $form_data['field'][82];

//current spousal support
$currentSCAmount = $form_data['field'][30];
$currentSCPeriod = $form_data['field'][31];

//past spousal support#
$pastSCAmount = $form_data['field'][33];
$pastSCPeriod = $form_data['field'][34];

//other amount per time
$otherName = $form_data['field'][36];
$otherAmount = $form_data['field'][37];
$otherPeriod = $form_data['field'][38];

//total amount to withold
$withholdAmount = $form_data['field'][41];
$witholdPeriod = $form_data['field'][42];

//amounts to withold
$amountPerWeeklyPayPeriod = $form_data['field'][47];
$amountBiWeekly = $form_data['field'][48];
$amountSemiMonthly = $form_data['field'][49];
$lumpSumPayment = $form_data['field'][50];
$amountPerMonthlyPayPeriod = $form_data['field'][51];

//remitance information
$dateOfOrderNotice = $form_data['field'][55];
$noDaysEmployerMustBeginWitholding = $form_data['field'][53];
$noBusinessDaysSendPayment = $form_data['field'][56];
$percentDisposableIncome = $form_data['field'][54];
$SDUTribalOrderPayee = $form_data['field'][57];
$SDUTribalAddressArray  = $form_data['field'][59];
    $SDUTribalAddress = implode(" ",$SDUTribalAddressArray);
$checkIfApplicable = $form_data['field'][61];

//contact informaiton
$contactEmployerIncomeWitholderArray = $form_data['field'][68];
    $contactEmployerIncomeWitholder = implode(" ",$contactEmployerIncomeWitholderArray);
$employerWitholderPhone = $form_data['field'][70];
$employerWitholderFax = $form_data['field'][72];
$employerWitholderEmail = $form_data['field'][66];
$employerWitholderWebsite = $form_data['field'][75];

$contactEmployeeObligerArray = $form_data['field'][69];
    $contactEmployeeObliger = implode(" ",$contactEmployeeObligerArray);
$employeeObligerPhone = $form_data['field'][71];
$employeeObligerFax = $form_data['field'][73];
$employeeObligerEmail = $form_data['field'][67];
$employeeObligerWebsite = $form_data['field'][74];


//Child(ren) information


//get the form ids for the children from the children field.
$childArrayID = $form_data['field'][76];

//get amount of characters in children field. 3 = 1 child, 7 = 2 child etc. is X+1 as theres a coma. 
    $childrenAmount = strlen($childArrayID);
 
//is able to get the last form id 
    $childArrayCalc = substr($childArrayID, -3);
//turns it into an int
    $childArrayLast = $childArrayCalc + 0;
//substracts 1 to get the next data set
    $childArrayID2 =  (int)$childArrayCalc - 1;

//to do: create ifs so that it only displays the right amount of children or none at all

$childArrayID3 = (int)$childArrayID2- 1;
$childArrayID4 = (int)$childArrayID3- 1;
$childArrayID5 = (int)$childArrayID4- 1;
$childArrayID6 = (int)$childArrayID5- 1;
$childArrayID7 = (int)$childArrayID6- 1;
$childArrayID8 = (int)$childArrayID7 - 1;
$childArrayID9 =  (int)$childArrayID8 - 1;
$childArrayID10 = (int)$childArrayID9 - 1;

//gets the nested form id, used the entry id from childArray to find the right details
$form_id = '30'; $entry = GFAPI::get_entry( $childArrayLast);
$form_id = '30'; $entry2 = GFAPI::get_entry( $childArrayID2);
$form_id = '30'; $entry3 = GFAPI::get_entry( $childArrayID3);
$form_id = '30'; $entry4 = GFAPI::get_entry( $childArrayID4);
$form_id = '30'; $entry5 = GFAPI::get_entry( $childArrayID5);
$form_id = '30'; $entry6 = GFAPI::get_entry( $childArrayID6);
$form_id = '30'; $entry7 = GFAPI::get_entry( $childArrayID7);
$form_id = '30'; $entry8 = GFAPI::get_entry( $childArrayID8);
$form_id = '30'; $entry9 = GFAPI::get_entry( $childArrayID9);
$form_id = '30'; $entry10= GFAPI::get_entry( $childArrayID10);


//$childName = array_search("11 11 2012",$entry);
$childGender = $form_data['field'][6]; // child's sex
$childBirthdate = $form_data['field'][7]; // child's birthdate

//The array keys for the nested form are in decimals which it doesn't like when entered "$entry[2.1]2 but setting it as a $variable works'
$arrayChildFirst = '2.3';
$arrayChildMiddle = '2.4';
$arrayChildLast = '2.6';
$arrayChildGen = '3';
$arrayChildBirth = '4';



/* VARIABLES END
 *********************************************************************************************************** */
?>
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!-- PAGE 1 -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

<bookmark content="Income Witholding For Support" />

<!-- --------------------------------------------------------------------------------------------------------------- -->


<!-- INTRO HEADER -->

<div class = "title"> INCOME WITHOLDING FOR SUPPORT</div>
<div class = "paragraph"> <b>I. Sender Information: (Completed by the Sender)</b> &emsp; Date: </div>

<?php if($reasonForNotice === 'Income Withholding Order/Notice for Support'){
echo 
    "&#9745; Income Witholding Order Notice &emsp;
     &#9744; Amended IWO &emsp;
    &#9744; (IWO) One-time Order/Notice for Lump Sum Payment &emsp;
    &#9744; Termination of IWO &emsp;";
}else if($reasonForNotice === 'Amended IWO'){
echo 
    "&#9744; Income Witholding Order Notice &emsp;
    &#9745; Amended IWO &emsp;
    &#9744; (IWO) One-time Order/Notice for Lump Sum Payment &emsp;
    &#9744; Termination of IWO &emsp;";
}else if($reasonForNotice === '(IWO) One-time Order/Notice for Lump Sum Payment'){
echo 
    "&#9744; Income Witholding Order Notice &emsp;
     &#9744;  Amended IWO &emsp;
     &#9745;(IWO) One-time Order/Notice for Lump Sum Payment &emsp;
     &#9744;  Termination of IWO &emsp;";
}else if($reasonForNotice === 'Termination of IWO'){
echo "  &#9744; Income Witholding Order Notice &emsp;
        &#9744;  Amended IWO &emsp;
        &#9744; (IWO) One-time Order/Notice for Lump Sum Payment &emsp;
        &#9745;Termination of IWO &emsp;";
}
?>

<div class = "paragraphborder"> <?php if($sender === 'Court'){
    echo "&#9745; Court &#9744;Child Support Enforcement (CSE) Agency &#9744;Attorney &#9744;Private Individual/Entity ";
}else if($sender === 'Child Support Enforcement (CSE) Agency'){
    echo "&#9744; Court &#9745;Child Support Enforcement (CSE) Agency &#9744;Attorney &#9744;Private Individual/Entity ";
}else if($sender === 'Attorney'){
    echo "&#9744; Court &#9744;Child Support Enforcement (CSE) Agency &#9745;Attorney &#9744;Private Individual/Entity ";
}
else if($sender === 'Private Individual/Entity'){
    echo "&#9744; Court &#9744;Child Support Enforcement (CSE) Agency &#9744;Attorney &#9745;Private Individual/Entity ";
}?>
<br></br><b>NOTE:</b> This IWO must be regular on its face. Under certain circumstances you must reject this IWO and return it to the sender (see IWO instructions <u>www.acf.hhs.gov/css/resource/income-withholding-for-support-instructions)</u>. If you receive this document from someone other than a state or tribal CSE agency or a court, a copy of the underlying support order must be attached. 
    </div>

<div class = "container">
<div class = "paragraphleft"> State/Tribe/Territory: <?php echo $stateTribeTerritory ?> <i>City/County/Dist./Tribe:</i> <?php echo $cityCounty; ?> <br>Private Individual Entity: <?php echo $privateIndividual;?> 
 </div>
<div class = "paragraphright" >Remittance ID (include w/payment): <?php echo $locatorCode ?> <br> Order ID: <?php echo $orderID;?> <br> Case ID: <?php echo $caseID;?>
</div>
 </div>

 <div class = "paragraph"> <b>II. Employer and Case Information: (Completed by the Sender) 
</b>  </div>


<div class = "paragraphborder"> 
<div class = "paragraphleft"> <?php 
echo $employerIncomeWitholder; ?> <br> 
<i>Employer/Income Withholder's Name</i> <br> 
<?php echo $witholderAddress ?> <br>
<i>Employer/Income Withholder's Address </i> <br>
Employer/Income Withholder's FEIN: <?php echo $empIncFEIN ?> 

</div>

<div class = "paragraphright">RE: <?php echo $employeeObligerName; ?> <br> 
<i> Employee/Obliger's Name </i> (Last, First, Middle) <br>
<?php echo $empObSSNumber ?> <br> 
<i>Employee/Obligor's Social Security Number</i> <br>
<?php echo $empObDOB ?> <br>
<i> Employee/Obligor's Date of Birth </i> <br>
<?php echo $custodialObligeeName ?> <br>
<i> Custodial Party/Obligee's Name (Last, First, Middle) </i>


</div>
<div class = "paragraphleft"> Child(ren)'s Name(s) (Last, First, Middle) </div>
<div class = "paragraphright"> Child(ren)'s Birth Date(s) </div>


<div class = "paragraphleft"><?php if ($childrenAmount === 39){
  echo   $entry[$arrayChildFirst] . " " . $entry[$arrayChildMiddle] . " " . $entry[$arrayChildLast]   . "        "  .  
            "<br>" .

           $entry2[$arrayChildFirst] . " " . $entry2[$arrayChildMiddle] . " " . $entry2[$arrayChildLast]   . "        "  .  
          "<br>" .
        
           $entry3[$arrayChildFirst] . " " . $entry3[$arrayChildMiddle] . " " . $entry3[$arrayChildLast]  . "<br>" .
            "<br>" .

              $entry4[$arrayChildFirst] . " " . $entry4[$arrayChildMiddle] . " " . $entry4[$arrayChildLast]  . "<br>" .
            "<br>" . 

             $entry5[$arrayChildFirst] . " " . $entry5[$arrayChildMiddle] . " " . $entry5[$arrayChildLast]  . "<br>" .
            "<br>" .

             $entry6[$arrayChildFirst] . " " . $entry6[$arrayChildMiddle] . " " . $entry6[$arrayChildLast]  . "<br>" .
           "<br>" .

             $entry7[$arrayChildFirst] . " " . $entry7[$arrayChildMiddle] . " " . $entry7[$arrayChildLast]  . "<br>" .
           "<br>" .

             $entry8[$arrayChildFirst] . " " . $entry8[$arrayChildMiddle] . " " . $entry8[$arrayChildLast]  . "<br>" .
           "<br>";

          $entry9[$arrayChildFirst] . " " . $entry9[$arrayChildMiddle] . " " . $entry9[$arrayChildLast]  . "<br>" .
          "<br>" . 
        
           $entry10[$arrayChildFirst] . " " . $entry10[$arrayChildMiddle] . " " . $entry10[$arrayChildLast] . "<br>" .
             "<br>";
        
}else if ($childrenAmount === 35){
     echo   $entry[$arrayChildFirst] . " " . $entry[$arrayChildMiddle] . " " . $entry[$arrayChildLast]   . "        "  .  
            "<br>" .

           $entry2[$arrayChildFirst] . " " . $entry2[$arrayChildMiddle] . " " . $entry2[$arrayChildLast]   . "        "  .  
          "<br>" .
        
           $entry3[$arrayChildFirst] . " " . $entry3[$arrayChildMiddle] . " " . $entry3[$arrayChildLast]  . "<br>" .
            "<br>" .

              $entry4[$arrayChildFirst] . " " . $entry4[$arrayChildMiddle] . " " . $entry4[$arrayChildLast]  . "<br>" .
            "<br>" . 

             $entry5[$arrayChildFirst] . " " . $entry5[$arrayChildMiddle] . " " . $entry5[$arrayChildLast]  . "<br>" .
            "<br>" .

             $entry6[$arrayChildFirst] . " " . $entry6[$arrayChildMiddle] . " " . $entry6[$arrayChildLast]  . "<br>" .
           "<br>" .

             $entry7[$arrayChildFirst] . " " . $entry7[$arrayChildMiddle] . " " . $entry7[$arrayChildLast]  . "<br>" .
           "<br>" .

             $entry8[$arrayChildFirst] . " " . $entry8[$arrayChildMiddle] . " " . $entry8[$arrayChildLast]  . "<br>" .
           "<br>";

          $entry9[$arrayChildFirst] . " " . $entry9[$arrayChildMiddle] . " " . $entry9[$arrayChildLast]  . "<br>" .
            "<br>" ; 
        
}else if ($childrenAmount === 31){
        echo   $entry[$arrayChildFirst] . " " . $entry[$arrayChildMiddle] . " " . $entry[$arrayChildLast]   . "        "  .  
            "<br>" .

           $entry2[$arrayChildFirst] . " " . $entry2[$arrayChildMiddle] . " " . $entry2[$arrayChildLast]   . "        "  .  
          "<br>" .
        
           $entry3[$arrayChildFirst] . " " . $entry3[$arrayChildMiddle] . " " . $entry3[$arrayChildLast]  . "<br>" .
            "<br>" .

              $entry4[$arrayChildFirst] . " " . $entry4[$arrayChildMiddle] . " " . $entry4[$arrayChildLast]  . "<br>" .
            "<br>" . 

             $entry5[$arrayChildFirst] . " " . $entry5[$arrayChildMiddle] . " " . $entry5[$arrayChildLast]  . "<br>" .
            "<br>" .

             $entry6[$arrayChildFirst] . " " . $entry6[$arrayChildMiddle] . " " . $entry6[$arrayChildLast]  . "<br>" .
           "<br>" .

             $entry7[$arrayChildFirst] . " " . $entry7[$arrayChildMiddle] . " " . $entry7[$arrayChildLast]  . "<br>" .
           "<br>" .

             $entry8[$arrayChildFirst] . " " . $entry8[$arrayChildMiddle] . " " . $entry8[$arrayChildLast]  . "<br>" .
            "<br>" 
     
         ;
      
}else if ($childrenAmount === 27){
      echo   $entry[$arrayChildFirst] . " " . $entry[$arrayChildMiddle] . " " . $entry[$arrayChildLast]   . "        "  .  
            "<br>" .

           $entry2[$arrayChildFirst] . " " . $entry2[$arrayChildMiddle] . " " . $entry2[$arrayChildLast]   . "        "  .  
          "<br>" .
        
           $entry3[$arrayChildFirst] . " " . $entry3[$arrayChildMiddle] . " " . $entry3[$arrayChildLast]  . "<br>" .
            "<br>" .

              $entry4[$arrayChildFirst] . " " . $entry4[$arrayChildMiddle] . " " . $entry4[$arrayChildLast]  . "<br>" .
            "<br>" . 

             $entry5[$arrayChildFirst] . " " . $entry5[$arrayChildMiddle] . " " . $entry5[$arrayChildLast]  . "<br>" .
            "<br>" .

             $entry6[$arrayChildFirst] . " " . $entry6[$arrayChildMiddle] . " " . $entry6[$arrayChildLast]  . "<br>" .
           "<br>" .

             $entry7[$arrayChildFirst] . " " . $entry7[$arrayChildMiddle] . " " . $entry7[$arrayChildLast]  . "<br>" .
            "<br>" 
         ;

}else if ($childrenAmount === 23){
       echo   $entry[$arrayChildFirst] . " " . $entry[$arrayChildMiddle] . " " . $entry[$arrayChildLast]   . "        "  .  
            "<br>" .

           $entry2[$arrayChildFirst] . " " . $entry2[$arrayChildMiddle] . " " . $entry2[$arrayChildLast]   . "        "  .  
          "<br>" .
        
           $entry3[$arrayChildFirst] . " " . $entry3[$arrayChildMiddle] . " " . $entry3[$arrayChildLast]  . "<br>" .
            "<br>" .

              $entry4[$arrayChildFirst] . " " . $entry4[$arrayChildMiddle] . " " . $entry4[$arrayChildLast]  . "<br>" .
            "<br>" . 

             $entry5[$arrayChildFirst] . " " . $entry5[$arrayChildMiddle] . " " . $entry5[$arrayChildLast]  . "<br>" .
            "<br>" .

             $entry6[$arrayChildFirst] . " " . $entry6[$arrayChildMiddle] . " " . $entry6[$arrayChildLast]  . "<br>" .
                "<br>"
         ;

}else if ($childrenAmount === 19){
      echo   $entry[$arrayChildFirst] . " " . $entry[$arrayChildMiddle] . " " . $entry[$arrayChildLast]   . "        "  .  
            "<br>" .

           $entry2[$arrayChildFirst] . " " . $entry2[$arrayChildMiddle] . " " . $entry2[$arrayChildLast]   . "        "  .  
          "<br>" .
        
           $entry3[$arrayChildFirst] . " " . $entry3[$arrayChildMiddle] . " " . $entry3[$arrayChildLast]  . "<br>" .
            "<br>" .

              $entry4[$arrayChildFirst] . " " . $entry4[$arrayChildMiddle] . " " . $entry4[$arrayChildLast]  . "<br>" .
            "<br>" . 

             $entry5[$arrayChildFirst] . " " . $entry5[$arrayChildMiddle] . " " . $entry5[$arrayChildLast]  . "<br>" .
            "<br>" 
          ;
      
}else if ($childrenAmount === 15){
       echo   $entry[$arrayChildFirst] . " " . $entry[$arrayChildMiddle] . " " . $entry[$arrayChildLast]   . "        "  .  
            "<br>" .

           $entry2[$arrayChildFirst] . " " . $entry2[$arrayChildMiddle] . " " . $entry2[$arrayChildLast]   . "        "  .  
             "<br>" .
        
           $entry3[$arrayChildFirst] . " " . $entry3[$arrayChildMiddle] . " " . $entry3[$arrayChildLast]  . "<br>" .
            "<br>" .
            

              $entry4[$arrayChildFirst] . " " . $entry4[$arrayChildMiddle] . " " . $entry4[$arrayChildLast]  . "<br>" .
            "<br>" 
          ;

}else if ($childrenAmount === 11){
       echo $entry[$arrayChildFirst] . " " . $entry[$arrayChildMiddle] . " " . $entry[$arrayChildLast]   . "        "  .  
            
            
            "<br>" .

           $entry2[$arrayChildFirst] . " " . $entry2[$arrayChildMiddle] . " " . $entry2[$arrayChildLast]   . "        "  .  
             
             
          "<br>" .
        
           $entry3[$arrayChildFirst] . " " . $entry3[$arrayChildMiddle] . " " . $entry3[$arrayChildLast]  . " ".
           
              "<br>" 
          ;

} else if ($childrenAmount === 7){
       echo   $entry[$arrayChildFirst] . " " . $entry[$arrayChildMiddle] . " " . $entry[$arrayChildLast]   . "        "  .  
           
             $entry[$arrayChildBirth] . "<br>" . 
            "<br>" ;

           $entry2[$arrayChildFirst] . " " . $entry2[$arrayChildMiddle] . " " . $entry2[$arrayChildLast]   . "        "  .
           "<br>";
            
}else if ($childrenAmount === 3){
    echo   $entry[$arrayChildFirst] . " " . $entry[$arrayChildMiddle] . " " . $entry[$arrayChildLast]   . "        "  .  
            "<br>" ;
}
else if ($childrenAmount === 0){
    echo  "\n There are no children stated.";

}?>
</div>
<div class = "paragraphright"><?php 
if ($childrenAmount === 39){
echo $entry[$arrayChildBirth] . "<br>" .
    $entry2[$arrayChildBirth] . "<br>" .
    $entry3[$arrayChildBirth] . "<br>" .
     $entry4[$arrayChildBirth] . "<br>" .
     $entry5[$arrayChildBirth] . "<br>" .
     $entry6[$arrayChildBirth] . "<br>" .
      $entry7[$arrayChildBirth] . "<br>" .
        $entry8[$arrayChildBirth] . "<br>" .
        $entry9[$arrayChildBirth] . "<br>" .
         $entry10[$arrayChildBirth] . "<br>" ;
}
else if ($childrenAmount === 35){
echo $entry[$arrayChildBirth] . "<br>" .
    $entry2[$arrayChildBirth] . "<br>" .
    $entry3[$arrayChildBirth] . "<br>" .
     $entry4[$arrayChildBirth] . "<br>" .
     $entry5[$arrayChildBirth] . "<br>" .
     $entry6[$arrayChildBirth] . "<br>" .
      $entry7[$arrayChildBirth] . "<br>" .
        $entry8[$arrayChildBirth] . "<br>" .
        $entry9[$arrayChildBirth] . "<br>" ;
}
else if ($childrenAmount === 31){
echo $entry[$arrayChildBirth] . "<br>" .
    $entry2[$arrayChildBirth] . "<br>" .
    $entry3[$arrayChildBirth] . "<br>" .
     $entry4[$arrayChildBirth] . "<br>" .
     $entry5[$arrayChildBirth] . "<br>" .
     $entry6[$arrayChildBirth] . "<br>" .
      $entry7[$arrayChildBirth] . "<br>" .
        $entry8[$arrayChildBirth] . "<br>" ;
}
else if ($childrenAmount === 27){
echo $entry[$arrayChildBirth] . "<br>" .
    $entry2[$arrayChildBirth] . "<br>" .
    $entry3[$arrayChildBirth] . "<br>" .
     $entry4[$arrayChildBirth] . "<br>" .
     $entry5[$arrayChildBirth] . "<br>" .
     $entry6[$arrayChildBirth] . "<br>" .
      $entry7[$arrayChildBirth] . "<br>" ;
}
else if ($childrenAmount === 23){
echo $entry[$arrayChildBirth] . "<br>" .
    $entry2[$arrayChildBirth] . "<br>" .
    $entry3[$arrayChildBirth] . "<br>" .
     $entry4[$arrayChildBirth] . "<br>" .
     $entry5[$arrayChildBirth] . "<br>" .
     $entry6[$arrayChildBirth] . "<br>" ;
}
else if ($childrenAmount === 19){
echo $entry[$arrayChildBirth] . "<br>" .
    $entry2[$arrayChildBirth] . "<br>" .
    $entry3[$arrayChildBirth] . "<br>" .
     $entry4[$arrayChildBirth] . "<br>" .
     $entry5[$arrayChildBirth] . "<br>" ;
}
else if ($childrenAmount === 15){
echo $entry[$arrayChildBirth] . "<br>" .
    $entry2[$arrayChildBirth] . "<br>" .
    $entry3[$arrayChildBirth] . "<br>" .
     $entry4[$arrayChildBirth] . "<br>" ;
}

else if ($childrenAmount === 11){
echo $entry[$arrayChildBirth] . "<br>" .
    $entry2[$arrayChildBirth] . "<br>" .
    $entry3[$arrayChildBirth] . "<br>" ;

}else if ($childrenAmount === 7){
echo $entry[$arrayChildBirth] . "<br>" .
    $entry2[$arrayChildBirth] . "<br>" ;
    
}else if ($childrenAmount === 3){
echo $entry[$arrayChildBirth] . "<br>" ;
} ?>

</div>
</div>

<!----- 3. Order informaiton ---->
<div class = "paragraph"> <b>III. Order Information: (Completed by the Sender)</b>  </div>

<div class = "paragraphinfo"> This document is based on the support order from <?php echo $stateTribeTerritory ?> you are required by law to deduct these amounts from the employee/obliger's income until further notice.
    </div>
<div class = "paragraph"><?php 
echo $currentCPAmount . " Per " . $currentCPPeriod; ?> current child support

<?php if($condArrearsGreaterThan12Weeks === 'Yes'){
echo "<br>" . $pastCPAmount . " Per " . $pastCPPeriod . " past-due child support - Arrears greater than 12 weeks? " . "<b>Yes</b>";
}else {
    echo "<br>" . $pastCPAmount . " Per " . $pastCPPeriod . " past-due child support - Arrears greater than 12 weeks? " . "<b>No</b>";
}
echo "<br>" . $currentCMammount . " Per " . $currentCMperiod . " current cash medical support" . "<br>" . $currentSCAmount . " Per " . $currentSCPeriod . " current spousal support" 
. "<br>" . $otherAmount . " Per " . $otherPeriod . " other (must specify) " . $otherName ;
?>
</div>

<div class = "paragraph"> for a <b>Total Amount to Withhold of </b><?php echo $withholdAmount . " Per " . $witholdPeriod ;?>
</div>

<!---- 4. Amounts to Withhold ---->
<div class = "paragraph"> <b>IV. Amounts to Withhold: (Completed by the Sender)</b>  </div>

<div class = "paragraphinfo"> You do not have to vary your pay cycle to be in compliance with the <i>Order Information</i>. If your pay cycle does not match the ordered payment cycle, withhold one of the following amounts: 
</div>

<div class = "container">
    <div class = "paragraphleft"> <?php echo $amountPerWeeklyPayPeriod . " per weekly pay period" ?>
<br> <?php echo $amountBiWeekly . " per biweekly pay period (every two weeks)"?>
    </div>
    <div class = "paragraphright"> <?php echo $amountSemiMonthly . " per semimonthly pay period (twice a month)"?>
<br><?php echo $amountPerMonthlyPayPeriod . " per monthly pay period"?>
    </div>
</div>

    <div class = "paragraph"> <?php echo $lumpSumPayment . "<b> Lump Sum Payment: </b> Do not stop ecisting IWO unless you receive a termination order."?>
</div>

<div class = "paragraphborder bs_text_small">
    <div class = "paragraphinfo">PAPERWORK REDUCTION ACT OF 1995 (Pub. L. 104-13) STATEMENT OF PUBLIC BURDEN: The purpose of this information collection is to provide uniformity and standardization. Public reporting burden for this collection of information is estimated to average two to five minutes per response, including the time for reviewing instructions, gathering and maintaining the data needed, and reviewing the collection of information. This is a mandatory collection of information in accordance with 45 CFR 303.100 of the Child Support Enforcement Program. An agency may not conduct or sponsor, and a person is not required to respond to, a collection of information subject to the requirements of the Paperwork Reduction Act of 1995, unless it displays a currently valid OMB control number. If you have any comments on this collection of information, please contact the Employer Services Team by email at <u>employerservices@acf.hhs.gov.<u> 
    </div>
</div>

<div class = "paragraph">Employer/Income Withholder's Name: <?php echo $employerIncomeWitholder ?> Employer/Income Withholder's FEIN: <?php echo $empIncFEIN ?>
    </div>
<div class = "paragraph">Employee/Obligor's Name: <?php echo $employeeObligerName ?> SSN: <?php echo $empObSSNumber ?>
    </div>
<div class = "paragraph">Case ID: <?php echo $caseID ?> Order ID: <?php echo $orderID ?>
    </div>

<!--- 5. remitance informaiton ---->
<div class = "paragraph"> <b>V. Remittance Information: (Completed by the Sender except for the "Return to Sender" check box.)</b>  
    </div>
  
<div class = "paragraphinfo"> If the employee/obligor's principal place of employment is 
<?php echo $stateTribeTerritory ?> (State/Tribe), you must begin withholding no later than the first pay period that occurs <?php echo $noDaysEmployerMustBeginWitholding ?> after the date of 
<?php echo $dateOfOrderNotice ?> of the order/notice. Send payment within <?php echo $noBusinessDaysSendPayment ?> business days of the pay date. If you cannot withhold the full amount of support for any or all orders for this employee/obligor, withhold <?php echo $percentDisposableIncome?>% of disposable income for all orders. If the employee/obligor's principal place of employment is not 
<?php echo $stateTribeTerritory ?> (State/Tribe), obtain withholding limitations, time requirements, the appropriate method to allocate among multiple child support cases/orders and any allowable employer fees from the jurisdiction of the employee/obliger's principal place of employment.
    </div>

<div class = "paragraphinfo"><br> State-specific withholding limit information is available at <u>www.acf.hhs.gov/css/resource/state-income-withholding contacts-and-program-requirements.</u> For tribe-specific contacts, payment addresses, and with holding limitations, please contact the tribe at <u>www.acf.hhs.gov/sites/default/files/programs/css/tribal_agency_contacts_printable_pdf.pdf</u> or <u>www.bia.gov/tribalmap/DataDotGovSamples/tld_map.html.</u>
    </div>

<div class = "paragraphinfo"><br>You may not withhold more than the lesser of: 1) the amounts allowed by the Federal Consumer Credit Protection Act (CCPA) (15 USC $1673 (b)]; or 2) the amounts allowed by the law of the state of the employee/obligor's principal place of employment if the place of employment is in a state; or the tribal law of the employee/obligor's principal place of employment if the place of employment is under tribal jurisdiction. The CCPA is available at <u>www.dol.gov/sites/dolgov/ files/WHD/legacy/files/garn01.pdf.</u> If the Order Information section does not indicate that the arrears are greater than 12 weeks, then the employer should calculate the CCPA limit using the lower percentage. 
</div>

    <div class = "paragraphinfo"><br> If there is more than one IWO against this employee/obligor and you are unable to fully honor all IWOs due to federal, state, or tribal withholding limits, you must honor all IWOs to the greatest extent possible, giving priority to current support before payment of any past-due support. 
</div>

    <div class = "paragraphinfo"><br>If the obligor is a nonemployee, obtain with holding limits from the Supplemental Information section in this IWO. This information is also available at <u>www.acf.hhs.gov/css/resource/state-income-withholding-contacts-and-program requirements.</u> 
</div>

    <div class = "paragraphborder"><b> Remit payment to </b> <?php echo $SDUTribalOrderPayee . " at " . $SDUTribalAddress?> 
<br> Include the Remittance ID with the payment and if necessary this locator code of the SDU/Tribal order payee <?php echo $locatorCode ?> on the payment. 
<br> To set up electronic payments or to learn state requirements for checks, contact the State Disbursement Unit (SDU). Contacts and information are found at <u>www.acf.hhs.gov/css/resource/sdu-eft-contacts-and-program-requirements.</u> 
    </div>

<div class = "paragraphninfo"><br>&#9744; <b>Return to Sender (Completed by Employer/Income Withholder).</b> Payment must be directed to an SDU in accordance with sections 466(b)(5) and (6) of the Social Security Act or Tribal Payee (see Payments in Section VI). If payment is not directed to an SDU/Tribal Payee or this IWO is not regular on its face, you must check this box and return the IWO to the sender. 
</div>

<div class = "paragraphborder"><b>If Required by State or Tribal Law:</b>
<br> Signature of Judge/Issuing Official:________________________________
<br> Print Name of Judge/Issuing Official:________________________________
<br> Title of Judge/Issuing Official:________________________________
<br> Date of Signature:________________________________
</div>

<div class = "paragraphinfo"> If the employee/obligor works in a state or for a tribe that is different from the state or tribe that issued this order, a copy of this IWO must be provided to the employee/obligor. 
<br>    </div>

<div class = "paragraphinfo"><br><?php if($checkIfApplicable === '0'){
echo "&#9745; If checked, the employer/income withholder must provide a copy of this form to the employee/obligor. 
";
}else{
echo "&#9744; If checked, the employer/income withholder must provide a copy of this form to the employee/obligor. 
";}?>
</div>

<!---- employer income witholder namw: ---->

<div class = "paragraph">Employer/Income Withholder's Name: <?php echo $employerIncomeWitholder ?> Employer/Income Withholder's FEIN: <?php echo $empIncFEIN ?>
    </div>
<div class = "paragraph">Employee/Obligor's Name: <?php echo $employeeObligerName ?> SSN: <?php echo $empObSSNumber ?>
    </div>
<div class = "paragraph">Case ID: <?php echo $caseID ?> Order ID: <?php echo $orderID ?>
    </div>

<!---- 6 Additional Information ---->
<div class = "paragraph"> <b>VI. Additional Information for Employers/Income Withholders: (Completed by the Sender) </b>  
    </div>

    <div class = "paragraphinfo"><b>Priority:</b> Withholding for support has priority over any other legal process under State law against the same income (section 466(b)(7) of the Social Security Act). If a federal tax levy is in effect, please notify the sender. 
</div>

    <div class = "paragraphinfo"><b><br>Payments:</b> You must send child support payments payable by income withholding to the appropriate State Disbursement Unit or to a tribal CSE agency within 7 business days, or fewer if required by state law, after the date the income would have been paid to the employee/obligor and include the date you withheld the support from his or her income. You may combine withheld amounts from more than one employee/obligor's income in a single payment as long as you separately identify each employee/obligor's portion of the payment. Child support payments may not be made through the federal Office of Child Support Enforcement (OCSE) Child Support Portal.
</div>

    <div class = "paragraphinfo"><b><br>Lump Sum Payments:</b> You may be required to notify a state or tribal CSE agency of upcoming lump sum payments to this employee/obligor such as bonuses, commissions, or severance pay. Contact the sender to determine if you are required to report and/or withhold lump sum payments. Employers/income withholders may use OCSE's Child Support Portal (ocsp.acf.hhs.gov/csp/) to provide information about employees who are eligible to receive lump sum payments and to provide contacts, addresses, and other information about their companies. Child support payments may not be made through the federal OCSE Child Support Portal. 
</div>

    <div class = "paragraphinfo"><b><br>Liability:</b> If you have any doubts about the validity of this IWO, contact the sender. If you fail to withhold income from the employee/obligor's income as the IWO directs, you are liable for both the accumulated amount you should have withheld and any penalties set by state or tribal law/procedure. _______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________
        </div>

    <div class = "paragraphinfo"><b><br>Anti-discrimination:</b> You are subject to a fine determined under state or tribal law for discharging an employee/obligor from employment, refusing to employ, or taking disciplinary action against an employee/obligor because of this IWO. _______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________
</div>
    <div class = "paragraphinfo"><b><br>Supplemental Information:</b>_______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________
</div> 

<div class = "paragraph">Employer/Income Withholder's Name: <?php echo $employerIncomeWitholder ?> Employer/Income Withholder's FEIN: <?php echo $empIncFEIN ?>
    </div>
<div class = "paragraph">Employee/Obligor's Name: <?php echo $employeeObligerName ?> SSN: <?php echo $empObSSNumber ?>
    </div>
<div class = "paragraph">Case ID: <?php echo $caseID ?> Order ID: <?php echo $orderID ?>
    </div>
   
 <!---- 7 Notificaiton of employment temrination ---->
<div class = "paragraph"> <b>VII. Notification of Employment Termination or Income Status: (Completed by the Employer/Income Withholder) 
 </b>  
    </div>

<div class = "paragraphborder">
<div class = "paragraphinfo">If this employee/obligor never worked for you or you are no longer with holding income for this employee/obligor, you must promptly notify the CSE agency and/or the sender by returning this form to the address listed in the <b>Contact Information</b> section below or using OCSE's Child Support Portal (<i>ocsp.acf.hhs.gov/csp</i>). Please report the new employer or income withholder, if known. 
This person has never worked for this employer nor received periodic income. This person no longer works for this employer nor receives periodic income. 
</div>
</div>

<!---- 8 Contact Information ---->
<div class = "paragraph"> <b>VIII. Contact Information: (Completed by the Sender) </b>  
    </div>

<div class = "paragraph"> <b><u>To Employer/Income Withholder</u></b> if you have questions contact <?php echo $contactEmployerIncomeWitholder ?> (sender name) by telephone <?php echo $employerWitholderPhone ?>, by fax: <?php echo $employerWitholderFax ?>, by email or website: <?php echo $employerWitholderEmail . ", " . $employerWitholderWebsite ?>
<br> Send termination/income status notice and other correspondence to: <!--- sender address ---->

<div class = "paragraph"> <b><u>To Employee/Obliger:</u></b> if the employee/obliger has questions, contact contact <?php echo $contactEmployeeObliger ?> (sender name) by telephone <?php echo $employeeObligerPhone ?>, by fax: <?php echo $employeeObligerFax ?>, by email or website: <?php echo $employeeObligerEmail . ", " . $employeeObligerWebsite ?>
    </div>

<div class = "paragraph"> IMPORTANT: The person completing this form is advised that the information may be shared with the employee/obligor. 
    </div>

<div class = "paragraphinfo"><br><b>Encryption Requirements:</b> 
<br>When communicating this form through electronic transmission, precautions must be taken to ensure the security of the data. Child support agencies are encouraged to use the electronic applications provided by the federal Office of Child Support Enforcement. Other electronic means, such as encrypted attachments to emails, may be used if the encryption method is compliant with Federal Information Processing Standard (FIPS) Publication 140-2 (FIPS PUB 140-2). 
    </div>

<div class  = "title"> <br>INCOME WITHHOLDING FOR SUPPORT - Instructions
    </div>
<div class = "paragraphinfo"> The Income Withholding for Support (IWO) is the OMB-approved form used for income withholding in: 
  <li>Tribal, intrastate, and interstate cases enforced under Title IV-D of the Social Security Act</li>
  <li>All child support orders initially issued in the state on or after January 1, 1994 </li>
  <li>All child support orders initially issued in the state on or after January 1, 1994 , if arrearages occur </li>

  <br>This form is the standard format prescribed by the Secretary in accordance with section 466(b)(6)(a)(ii) of the Social Security Act. <b>Except as noted, the following information is required and must be included.</b>

  <br><b>Please note:</b>
  <br> For the purpose of this IWO form and these instructions, "state" is defined as a state or territory. Dos and don'ts on using this form are found at <i>www.acf.hhs.gov/css/resource/using-the-income with holding-for-support-form-dos-and-donts. </b>
</div>

<div class = "paragraphinfo"><b>I. Sender Information: (Completed by the Sender) Check one box for fields 1a - 1d.</b>
    </div>
<div class = "paragraphinfo"><br>1a. <b>Income Withholding Order/Notice for Support (IWO).</b> Check the box if this is an initial IWO. 
    </div>
<div class = "paragraphinfo"><br><b>Amended IWO.</b> Check the box to indicate that this form amends a previous IWO. Any changes to an IWO must be done through an amended IWO. 
    </div>
<div class = "paragraphinfo"><br>1c. <b>One-Time Order/Notice For Lump Sum Payment.</b> Check the box when this IWO is to attach a one time collection of a lump sum payment after receiving notification from an employer/income withholder or other source. When this box is checked, enter the amount in field 14, Lump Sum Payment, in the Amounts to Withhold section. Additional IWOs must be issued to collect subsequent lump sum payments.
    </div>
<div class = "paragraphinfo"><br>1d.<b>Termination of IWO.</b> Check the box to stop income withholding on a child support order. Complete all applicable identifying information to aid the employer/income withholder in terminating the correct IWO. 
    </div>
<div class = "paragraphinfo"><br>1e. <b>Date.</b> Date this form is completed and/or signed. 
    </div>
<div class = "paragraphinfo"><br>1f. <b>Child Support Enforcement (CSE) Agency, Court, Attorney, Private Individual/Entity (Check one box).</b> Check the appropriate box to indicate which entity is sending the IWO. If this IWO is not completed by a state or tribal CSE agency, the sender should contact the CSE agency (see <u>www.acf.hhs.gov/programs/css/resource/state-income-withholding-contacts-and-program-requirements<u>) to determine if the CSE agency needs a copy of this form to facilitate payment processing.
    </div>

<div class = "paragraphborder">
    <div class = "paragraphinfo"><b>NOTE TO EMPLOYER/INCOME WITHHOLDER:</b> This IWO must be regular on its face. The IWO must be rejected and returned to sender under the following circumstances: 
    <br>
    &emsp;<li> &emsp;IWO instructs the employer/income withholder to send a payment to an entity other than a state disbursement unit (for example, payable to the custodial party, court, or attorney). Each state is required to operate a state disbursement unit (SDU), which is a centralized facility for collection and disbursement of child support payments. Exception: If this IWO is issued by a court, attorney, or private individual/entity and the initial child support order was entered before January 1, 1994, or the order was issued by a tribal CSE agency, the employer/income withholder must follow the payment instructions on the form.</li>
    &emsp;<li>Form does not contain all information necessary for the employer to comply with the withholding.</li>
    &emsp;<li>Form is altered or contains invalid information.</li>
    &emsp;<li>Amount to withhold is not a dollar amount. Sender has not used the OMB-approved form for the IWO.</li>
    &emsp;<li>A copy of the underlying order is required and not included. If you receive this document from an attorney or private individual/entity, a copy of the underlying support order containing a provision authorizing income withholding must be attached.</li>
    </div>
</div>

<div class = "paragraphinfo"><br>1g. <b>State/Tribe/Territory.</b> Name of state or tribe sending this form. This must be a government entity of the state or a tribal organization authorized by a tribal government to operate a CSE program. If you are a tribe submitting this form on behalf of another tribe, complete field 1i. 
    </div>
<div class = "paragraphinfo"><br>1h. <b>Remittance ID (include w/payment).</b> Identifier for the SDU/Tribal Payee designated in the Remittance Information section, field 22, that employers/income withholders must include when sending payments for this IWO. The Remittance ID is entered as the case identifier on the electronic funds transfer/electronic data interchange (EFT/EDI) record. 
    </div>
<div class = "paragraphborder"><b>NOTE TO EMPLOYER/INCOME WITHHOLDER:</b> The employer/income withholder must use the Remittance ID when remitting payments so the SDU or tribe can identify and apply the payment correctly. The Remittance ID is entered as the case identifier on the EFT/EDI record. 
    </div>
<div class = "paragraphinfo"><br>1i. <b>City/County/Dist./Tribe. Optional</b> field for the name of the city, county, or district sending this form. If entered, this must be a government entity of the state or the name of the tribe authorized by a tribal government to operate a CSE program for which this form is being sent. If a tribe is submitting this form on behalf of another tribe, enter the name of that tribe. 
    </div>
<div class = "paragraphinfo"><br> 1j. <b>Order ID. Optional</b> unique identifier associated with a specific child support obligation. It could be a court case number, docket number, or other identifier designated by the sender. 
    </div>
<div class = "paragraphinfo"><br>1k. <b>Private Individual/Entity.</b> Name of the private individual/entity or non-IV-D tribal CSE organization sending this form. 
    </div>
<div class = "paragraphinfo"><br> 1l. <b>Case ID.</b> Unique identifier assigned to a state or tribal CSE case. In a state IV-D case as defined at 45 Code of Federal Regulations (CFR) 305.1, this is the identifier reported to the Federal Case Registry (FCR). One IWO must be issued for each IV-D case and must use the unique CSE Agency Case ID. For tribes, this would be either the FCR identifier or other applicable identifier. 
    </div>

<div class = "paragraphinfo"><br><b>II. Employer and Case Information: (Completed by the Sender) </b>
 </b>  
    </div>
<div class = "paragraphinfo"><br>2a. <b>Employer/Income Withholder's Name.</b> Name of employer or income withholder. 
    </div>
<div class = "paragraphinfo"><br>2b. <b>Employer/Income Withholder's Address.</b> Employer/income withholder's mailing address including street/PO box, city, state, and zip code. (This may differ from the employee/obligor's work site.) If the employer/income withholder is a federal government agency, the IWO should be sent to the address listed under Federal Agency Income Withholding Contacts and Program Information at <u>www.acf.hhs.gov/css/resource/federal-agency-iwo-and-medical-contact-information.</u>
    </div>
<div class = "paragraphinfo"><br>2c. <b>Employer/Income Withholder's FEIN.</b> Employer/income with holder's nine-digit Federal Employer Identification Number (if available). 
    </div>
<div class = "paragraphinfo"><br>3a. <b>Employee/Obligor's Name.</b> Employee/obligor's last name and first name. A middle name is <b><i>optional</b></i>.
    </div>
<div class = "paragraphinfo"><br>3b. <b>Employee/Obligor's Social Security Number.</b> Employee/obligor's Social Security number or other taxpayer identification number. 
    </div>
<div class = "paragraphinfo"><br>3c. <b>Employee/Obligor's Date of Birth.</b> Employee/obligor's date of birth is <b><i>optional</i></b>. 
    </div>
<div class = "paragraphinfo"><br>3d. <b>Custodial Party/Obligee's Name.</b> Custodial party/obligee's last name and first name. A middle name is <b>optional</b>. Enter one custodial party/obligee's name on each IWO form. Multiple custodial parties/obligees are not to be entered on a single IWO. Issue one IWO per state IV-D case as defined at 45 CFR 305.1.     
    </div>
<div class = "paragraphinfo"><br>3e. <b>Child(ren)'s Name(s).</b> Child(ren)'s last name(s) and first name(s). A middle name(s) is <b>optional</b>. (Note: If there are more than six children for this IWO, list additional children's names and birth dates in the <b>Supplemental Information</b> section, field 33). Enter the child(ren) associated with the custodial party/obligee and employee/obligor only. Child(ren) of multiple custodial parties/obligees is not to be entered on an IWO. 
    </div>
<div class = "paragraphinfo"><br>3f. <b>Child(ren)'s Birth Date(s).</b> Date of birth for each child named. 
    </div>
<div class = "paragraphinfo"><br>3g. <b>Blank box.</b> Space for court stamps, bar codes, or other information. 
    </div>

<div class = "paragraphinfo"><br><b>III. Order Information: (Completed by the Sender) </b>
<br>The first field identifies which state or tribe issued the order. The other fields identify the dollar amounts for specific kinds of support (taken directly from the support order) and the total amount to withhold for specific time periods. 
    </div>

<div class = "paragraphinfo"><br>4. <b>State/Tribe.</b> Name of the state or tribe that issued the support order. 
    </div>
<div class = "paragraphinfo"><br>5a-b. <b>Current Child Support.</b> Dollar amount to be withheld <b>per</b> the time period (for example, week, month) specified in the underlying support order. 
    </div>
<div class = "paragraphinfo"><br>6a-b. <b>Past-due Child Support.</b> Dollar amount to be withheld <b>per</b> the time period (for example, week, month) specified in the underlying support order. 
        </div>
<div class = "paragraphinfo"><br>6c. </b>Arrears Greater Than 12 Weeks?</b> The appropriate box (Yes/No) must be checked indicating whether arrears are greater than 12 weeks. 
    </div>
<div class = "paragraphinfo"><br> 7a-b. <b>Current Cash Medical Support.</b> Dollar amount to be withheld <b>per</b> the time period (for example, week, month) specified in the underlying support order. 
    </div>
<div class = "paragraphinfo"><br>8a-b. <b>Past-due Cash Medical Support.</b> Dollar amount to be with held <b>per</b> the time period (for example, week, month) specified in the underlying support order. 
    </div>
<div class = "paragraphinfo"><br>9a-b. <b>Current Spousal Support.</b> (Alimony) Dollar amount to be withheld <b>per</b> the time period (for example, week, month) specified in the underlying support order. 
    </div>
<div class = "paragraphinfo"><br>10a-b. <b>Past-due Spousal Support.</b> (Alimony) Dollar amount to be withheld <b>per</b> the time period (for example, week, month) specified in the underlying order. 
    </div>
<div class = "paragraphinfo"><br>11a-c. <b>Other.</b> Miscellaneous obligations dollar amount to be withheld <b>per</b> the time period (for example, week, month) specified in the underlying order. Must specify a description of the obligation (for example, court fees). 
    </div>
<div class = "paragraphinfo"><br>12a-b. <b>Total Amount to Withhold.</b> The total amount of the deductions <b>per</b> the corresponding time period. Fields 5a, 6a, 7a, 8a, 9a, 10a, and 11a should total the amount in 12a. 
    </div>
<div class = "paragraphborder">
    <div class = "paragraphinfo"><b>NOTE TO EMPLOYER/INCOME WITHHOLDER:</b> An acceptable method of determining the amount to be paid on a weekly or biweekly basis is to multiply the monthly amount due by 12 and divide that result by the number of pay periods in a year. Additional information about this topic is available in <u>Action Transmittal 16-04</u>, Correctly Withholding Child Support from Weekly and Biweekly Pay Cycles (<u>https://www.acf.hhs.gov/css/resource/correctly-withholding-child-support-from-weekly-and-biweekly-pay</u> cycles). 
    </div>
</div>

<div class = "paragraphinfo"><br><b>IV. Amounts to Withhold: (Completed by the Sender) </b>
<br>Fields 13a through 13d specify the dollar amount to be withheld for this IWO if the employer/income withholder's pay cycle does not correspond with field 12b.  
</div>

<div class = "paragraphinfo"><br>13a. <b>Per Weekly Pay Period.</b> Total amount an employer/income withholder should withhold if the employee/obligor is paid weekly. 
    </div>

<div class = "paragraphinfo"><br>13b. <b>Per Semimonthly Pay Period.</b> Total amount an employer/income withholder should withhold if the employee/obligor is paid twice a month. 
    </div>
    
<div class = "paragraphinfo"><br>13c. <b>Per Biweekly Pay Period.</b> Total amount an employer/income withholder should withhold if the employee/obligor is paid every two weeks. 
    </div>
    
<div class = "paragraphinfo"><br>13d. <b>Per Monthly Pay Period.</b> Total amount an employer/income withholder should withhold if the employee/obligor is paid once a month. 
    </div>
    
<div class = "paragraphinfo"><br>14. <b>Lump Sum Payment.</b> Dollar amount withheld when the IWO is used to attach a lump sum payment. This field should be used only when field 1c is checked. 
    </div>
    
<div class = "paragraphinfo"><br>15. <b>Document Tracking ID. <i>Optional</i></b> unique identifier for this form assigned by the sender. 
    </div>
    
<div class = "paragraphinfo"><b>Please Note:</b> Employer/Income Withholder's Name, FEIN, Employee/Obligor's Name and SSN, Case ID, and Order ID must appear in the header on page two and subsequent pages. 
    </div>
    
<div class = "paragraphinfo"><br><b>V. Remittance Information: (Completed by the Sender except for the "Return to Sender" check box, field 25. Fields 26-29 are completed only if required by state or tribal law.)</b>
<br>Payments are forwarded to the SDU in each state, unless the initial child support order was entered by a state before January 1, 1994, and never modified, accrued arrears, or was enforced by a child support agency or by a tribal CSE agency. If the order was issued by a tribal CSE agency, the employer/income withholder must follow the remittance instructions on the form in the Supplemental Information Section. 
    </div>

<div class = "paragraphinfo"><br>16. <b>State/Tribe.</b> Name of the state or tribe sending this document. 
    </div>

<div class = "paragraphinfo"><br>17. <b>Days.</b> Number of days after the effective date noted in field 18 in which withholding must begin according to the state or tribal laws/procedures for the employee/obligor's principal place of employment. 
    </div>

<div class = "paragraphinfo"><br>18. <b>Date.</b> Implementation date of this IWO, expressed as date of �service," "receipt," or "mailing." Only one of the three choices is to be entered in the blank line. 
    </div>

<div class = "paragraphinfo"><br>19. <b>Business Days.</b> Number of business days within which an employer/income with holder must remit amounts withheld pursuant to the state or tribal laws/procedures of the principal place of employment. 
    </div>

<div class = "paragraphinfo"><br>20. <b>Percentage of Disposable Income.</b> The percentage of disposable income that may be withheld from the employee/obligor's paycheck. It is the sender's responsibility to determine the percentage an employer/income with holder is required to withhold. Senders must enter a specific percentage and not a range of percentages. 
    </div>

    <div class = "paragraphborder">
<div class = "paragraphinfo"><b>NOTE TO EMPLOYER/INCOME WITHHOLDER:</b> The employer/income with holder may not withhold more than the lesser of: 1) the amounts allowed by the Federal Consumer Credit Protection Act [15 USC 
$1673(b)]; or 2) the amounts allowed by the jurisdiction of the employee/obligor's principal place of employment (i.e., the amounts allowed by state law if the employee/obligor's principal place of employment is in a state; or the amounts allowed by tribal law if the employee/obligor's principal place of employment is under tribal jurisdiction). 
<br>
If permitted by the state or tribe, you may deduct a fee for administrative costs. The combined support amount and fee may not exceed the limit on the IWO.
<br>
State-specific withholding limitations, time requirements, and any allowable employer fees are available at www.acf.hhs.gov/css/resource/state-income-withholding-contacts-and-program-requirements. For tribe specific contacts, payment addresses, and withholding limitations, please contact the tribe at www.acf.hhs.gov/sites/default/files/programs/css/tribal agency_contacts printable_pdf.pdf or <i>https://www.bia.gov/tribalmap/DataDotGovSamples/tld_map.html.</i>
<br>
Depending on applicable state or tribal law, you may need to consider amounts paid for health care premiums to determine disposable income and apply appropriate withholding limits. 
<br>
A federal government agency may withhold from a variety of incomes and forms of payment, including voluntary separation incentive payments (buy-out payments), incentive pay, and cash awards. For a more complete list, see 5 CFR 581.103. 
</div>
    </div>

<div class = "paragraphinfo"><br>21. <b>State/Tribe.</br> Name of the state or tribe sending this document. 
    </div>

    <div class = "paragraphborder">
<div class = "paragraphinfo"><b>NOTE TO SENDER:</b> The Sender must designate the correct SDU. In certain cases, the Sender may be required to designate an SDU (field 22), corresponding SDU Address (field 23), and if required Locator Code (field 24) that is different than the Sender's SDU (see OCSE's AT-17-07: Interstate Child Support Payment Processing, <u>https://www.acf.hhs.gov/css/resource/interstate-child-support-payment-processing</u>). 
The Remittance ID in field 1h must correspond with the SDU identified in field 22. 
</div>
    </div>

<div class = "paragraphinfo"><br>22. <b>SDU/Tribal Order Payee.</b> Name of SDU (or payee specified in the underlying tribal support order) to which payments must be sent. 
    </div>

<div class = "paragraphinfo"><br>23. <b>SDU/Tribal Payee Address.</b> Address of the SDU (or payee specified in the underlying tribal support order) to which payments must be sent.
    </div>

<div class = "paragraphinfo"><br>24. <b>Locator Code.</b> Optional code of the SDU payee state where payment is being remitted. Geographic Locator Codes are standard codes for states, counties, cities, and territories issued by the National Institute of Standards and Technology. These were formerly known as Federal Information Processing Standards (FIPS) codes. 
    </div>

<div class = "paragraphinfo"><br>25. <b>Return to Sender Checkbox.</b> The employer/income with holder should check this box and return the IWO to the sender if this IWO is not payable to an SDU or Tribal Payee or this IWO is not regular on its face as indicated on page 1 of these instructions. 
    </div>

<div class = "paragraphinfo"><br>26. <b>Signature of Judge/lssuing Official.</b> Signature of the official authorizing this IWO if required by state or tribal law.
    </div>

<div class = "paragraphinfo"><br>27. <b>Print Name of Judge/Issuing Official.</b> Name of the official authorizing this IWO if required by state or tribal law. 
    </div>

<div class = "paragraphinfo"><br>28. <b>Title of Judge/Issuing Official.</b> Title of the official authorizing this IWO if required by state or tribal law. 
    </div>

<div class = "paragraphinfo"><br>29. <b>Date of Signature.</b> Date the judge/issuing official signs this IWO if required by state or tribal law. 
    </div>

<div class = "paragraphinfo"><br>30. <b>Copy of IWO checkbox.</b> Check this box for all intergovernmental IWOs. If checked, the employer/income withholder is required to provide a copy of the IWO to the employee/obligor.
    </div>

<div class = "paragraphinfo"><br><b>VI. Additional Information for Employers/Income Withholders: (Completed by the Sender)</b>
  <br>The following fields refer to federal, state, or tribal laws that apply to issuing an IWO to an employer/income withholder. State- or tribal-specific information may be included only in the fields below.
    </div>

<div class = "paragraphinfo"><br>31. <b>Liability.</b> Additional information on the penalty and/or citation of the penalty for an employer/income withholder who fails to comply with the IWO. The state or tribal law/procedures of the employee/obligor's principal place of employment govern the penalty. 
    </div>

<div class = "paragraphinfo"><br>32. <b>Anti-discrimination.</b> Additional information on the penalty and/or citation of the penalty for an employer/income withholder who discharges, refuses to employ, or disciplines an employee/obligor as a result of the IWO. The state or tribal law/procedures of the employee/obligor's principal place of employment govern the penalty.
    </div>

<div class = "paragraphinfo"><br>33. <b>Supplemental Information.</b> Any state-specific information needed, such as maximum withholding percentage for nonemployees/independent contractors, fees the employer/income with holder may charge the obligor for income withholding, or children's names and DOBs if there are more than six children on this IWO. Additional information must be consistent with the requirements of the form and the instructions.
    </div>

<div class = "paragraphinfo"><br><b>VII. Notification of Employment Termination or Income Status: (Completed by the Employer/Income Withholder)</b>
   <br>The employer must complete this section when the employee/obligor's employment is terminated, income withholding ceases, or if the employee/obligor has never worked for the employer. The employer/income withholder may report new payment sources such as workers' compensation, if known. 
    </div>

<div class = "paragraphinfo"><br>34a-b. <b>Employment/Income Status Checkbox.</b> Check the employment/income status of the employee/obligor.
    </div>

<div class = "paragraphinfo"><br>35. <b>Termination Date.</b> If applicable, date employee/obligor was terminated. 
    </div>

<div class = "paragraphinfo"><br>36. <b>Last Known Telephone Number.</b> Last known (home/cell/other) telephone number of the employee/obligor.
    </div>

<div class = "paragraphinfo"><br>37. <b>Last Known Address.</b> Last known home/mailing address of the employee/obligor. 
    </div>

<div class = "paragraphinfo"><br>38. <b>Final Payment Date.</b> Date employer sent final payment to SDU/Tribal Payee.
    </div>

<div class = "paragraphinfo"><br>39. <b>Final Payment Amount.</b> Amount of final payment sent to SDU/Tribal Payee.
    </div>

<div class = "paragraphinfo"><br>40. <b>New Employer's or Income Withholder's Name.</b> Name of employee's/obligor's new employer or income withholder (if known). 
    </div>

<div class = "paragraphinfo"><br>41. <b>New Employer's or Income Withholder's Address.</b> Address of employee's/obligor's new employer or income with holder (if known).
    </div>

<div class = "paragraphinfo"><br><b>VIII. Contact Information: (Completed by the Sender)</b> 
    </div>

<div class = "paragraphinfo"><br>42. <b>Sender Contact for Employer/Income Withholder.</b> Name of the person that the employer/income withholder can call for information regarding this IWO. If the sender is a victim of family or domestic 
violence, rather than including direct contact information, enter contact information for someone else who will communicate for you. 
    </div>

<div class = "paragraphinfo"><br>43. <b>Sender Telephone Number.</b> Telephone number of the contact person. 
    </div>

<div class = "paragraphinfo"><br>44. <b>Sender Fax Number.</b> Optional fax number of the contact person.
    </div>

<div class = "paragraphinfo"><br>45. <b>Sender Email/Website.</b> Optional email or website of the contact person.
    </div>

<div class = "paragraphinfo"><br>46. <b>Sender Address (Termination/Income Status and Correspondence Address).</b> Address to which the employer should return the Employment Termination or Income Status notice. It is also the address that the employer should use to correspond with the issuing entity.
    </div>

<div class = "paragraphinfo"><br>47. <b>Sender Contact for Employee/Obligor.</b> Name of the person that the employee/obligor can call for information.
    </div>

<div class = "paragraphinfo"><br>48. <b>Sender Telephone Number.</b> Telephone number of the contact person.
    </div>

<div class = "paragraphinfo"><br>49. <b>Sender Fax Number.</b> Optional fax number of the contact person
    </div>

<div class = "paragraphinfo"><br>50. <b>Sender Email/Website.</b> Optional email or website of the contact person.
    </div>

<div class = "paragraphinfo"><br><b>Encryption Requirements:</b>
<br>When communicating the Income Withholding for Support (IWO) through electronic transmission, precautions must be taken to ensure the security of the data. Child support agencies are encouraged to use the electronic applications provided by the federal Office of Child Support Enforcement. Other electronic means, such as encrypted attachments to emails, may be used if the encryption method is compliant with Federal Information Processing Standard (FIPS) Publication 140-2 (FIPS PUB 140-2).
    </div>
