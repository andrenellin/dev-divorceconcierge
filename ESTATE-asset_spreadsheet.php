<meta charset="UTF-8">
<?php

/*
 * Template Name: Asset Spreadsheet
 * Version: 1.0.0
 * Description: A print-friendly template displaying the Asset Spreadsheet
 * Author: Bliksem LLC
 * Author URI: https://simplifysmallbiz.com
 * Group: 0. To Do
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
  margin: 0.2in 0.2in 0.2in 0.2in;
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

.headinger {
  line-height: 250%;
  font-weight: bold;
}

.paragraphinfo {
  line-height: 150%;

}
.rotateText{
transform: rotateY(90);

}

.paragraphleft {
  line-height: 250%;
  width: 290px;
  float: left;
    font-size: 12pt;

}

.paragraphlefttable {
  line-height: 250%;
  width: 70%;
  float: left;
 
}
.paragraphleftborder {
  line-height: 250%;

  float: left;
   border-width:1px; border-style:solid;
     border-collapse: collapse;
}
.paragraphcenterborder {
  line-height: 250%;
    text-indent: 200px;
  width: 193px;
  float: left;
   border-width:1px; border-style:solid;
     border-collapse: collapse;
}
.paragraphrightborder {
  line-height: 250%;
 
  float: right;
   border-width:1px; border-style:solid;
     border-collapse: collapse;
}
.paragraphright {
  line-height: 250%;
  width: 200px;
  float: right;
    font-size: 12pt;

}

.paragraphrighttable {
  line-height: 250%;
  width: 30%;
  float: right;


}
.paragraphsmall {
  line-height: 150%;
  font-size: 5pt;
}
.paragraphborder {
  line-height: 250%;
  border-width:1px; border-style:solid;
  display: flex;
    border-collapse: collapse;
}

.paragraphborderfill {
  line-height: 250%;
  border-width:1px; border-style:solid;
  background-color: black;
  color: white;


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

table {
	border-width: 1px;
	border-color: black;
    border-style: solid;
    border-collapse: collapse;
 
}



th, td {
  text-align: left;
  padding: 8px;


}

th {
  background-color: white;
  color: black;
  	
}
</style>
<!-- STYLES END -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

<!-- HEADER / FOOTER -->
<htmlpagefooter name="MyCustomFooter">
  <table class="footer">
    <tr class="paragraph">
      <td class="footer_left_half"><span class="bs_bold bs_text_small">ASSET SPREADSHEET</span></td>
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

$client_user_id = rgar($entry, 'created_by');

//INput data

$itemNo = $form_data['field'][1];

//Repeater for bank ACCOUNTS

$repeater_bankAccounts_form_id = 50;
$repeater_bankAccounts_search_criteria['field_filters'][] = array('key' => 'created_by', 'value' => $client_user_id);
$repeater_bankAccounts_search_criteria['status'] = 'active';
$repeater_bankAccounts_sorting = array('key' => 'id', 'direction' => 'ASC', 'is_numeric' => true);
$bankAccounts_entries = GFAPI::get_entries($repeater_bankAccounts_form_id, $repeater_bankAccounts_search_criteria);
$count_bankAccounts_entries = count($bankAccounts_entries);
$bankAccounts = array();

for ($i = 0; $i < $count_bankAccounts_entries; $i++) {
    $bankAccounts[$i]['asset_description'] = $bankAccounts_entries[$i]['1'];
    //after the value has been set, it is formatted to look 1,234
        $bankDescription =  number_format($bankAccounts[$i]['asset_description']);
    $bankAccounts[$i]['current_value'] = $bankAccounts_entries[$i]['2'];
         $bankValue =  number_format($bankAccounts[$i]['current_value']);
    $bankAccounts[$i]['current_debt'] = $bankAccounts_entries[$i]['3'];
        $bankDebt =  number_format($bankAccounts[$i]['current_debt']);
    $bankAccounts[$i]['equity_minus_debt'] = $bankAccounts_entries[$i]['4'];
        $bankEquity =  number_format($bankAccounts[$i]['equity_minus_debt']);
    $bankAccounts[$i]['proposed_division_husband'] = $bankAccounts_entries[$i]['5'];
        $bankHusband =  number_format($bankAccounts[$i]['proposed_division_husband']);
    $bankAccounts[$i]['proposed_division_wife'] = $bankAccounts_entries[$i]['6'];
        $bankWife =  number_format($bankAccounts[$i]['proposed_division_wife']);

    
    // echo '<pre>';
    // echo 'CHILDREN<br>';
    // print_r($children[$i]);
    // echo '<br></pre>';
}



// REAL PROPERTY
$repeater_realProperty_form_id = 51;
$repeater_realProperty_search_criteria['field_filters'][] = array('key' => 'created_by', 'value' => $client_user_id);
$repeater_realProperty_search_criteria['status'] = 'active';
$repeater_realProperty_sorting = array('key' => 'id', 'direction' => 'ASC', 'is_numeric' => true);
$realProperty_entries = GFAPI::get_entries($repeater_realProperty_form_id, $repeater_realProperty_search_criteria);
$count_realProperty_entries = count($realProperty_entries);
$realProperty = array();

for ($i = 0; $i < $count_realProperty_entries; $i++) {
    $realProperty[$i]['asset_description'] = $realProperty_entries[$i]['1'];
    $realProperty[$i]['current_value'] = $realProperty_entries[$i]['2'];
    $realProperty[$i]['current_debt'] = $realProperty_entries[$i]['3'];
    $realProperty[$i]['equity_minus_debt'] = $realProperty_entries[$i]['4'];
    $realProperty[$i]['proposed_division_husband'] = $realProperty_entries[$i]['5'];
    $realProperty[$i]['proposed_division_wife'] = $realProperty_entries[$i]['6'];
    // echo '<pre>';
    // echo 'CHILDREN<br>';
    // print_r($children[$i]);
    // echo '<br></pre>';
}

// IRAs/Retirement Plans/Pension Plans/Deferred Comp

$repeater_iraRetirement_form_id = 52;
$repeater_iraRetirement_search_criteria['field_filters'][] = array('key' => 'created_by', 'value' => $client_user_id);
$repeater_iraRetirement_search_criteria['status'] = 'active';
$repeater_iraRetirement_sorting = array('key' => 'id', 'direction' => 'ASC', 'is_numeric' => true);
$iraRetirement_entries = GFAPI::get_entries($repeater_iraRetirement_form_id, $repeater_iraRetirement_search_criteria);
$count_iraRetirement_entries = count($iraRetirement_entries);
$iraRetirement = array();

for ($i = 0; $i < $count_iraRetirement_entries; $i++) {
    $iraRetirement[$i]['asset_description'] = $iraRetirement_entries[$i]['1'];
    $iraRetirement[$i]['current_value'] = $iraRetirement_entries[$i]['2'];
    $iraRetirement[$i]['current_debt'] = $iraRetirement_entries[$i]['7'];
    $iraRetirement[$i]['equity_minus_debt'] = $iraRetirement_entries[$i]['8'];
    $iraRetirement[$i]['proposed_division_husband'] = $iraRetirement_entries[$i]['9'];
    $iraRetirement[$i]['proposed_division_wife'] = $iraRetirement_entries[$i]['10'];
    // echo '<pre>';
    // echo 'CHILDREN<br>';
    // print_r($children[$i]);
    // echo '<br></pre>';
}

//Life Insurance/Annuities

$repeater_lifeInsurance_form_id = 53;
$repeater_lifeInsurance_search_criteria['field_filters'][] = array('key' => 'created_by', 'value' => $client_user_id);
$repeater_lifeInsurance_search_criteria['status'] = 'active';
$repeater_lifeInsurance_sorting = array('key' => 'id', 'direction' => 'ASC', 'is_numeric' => true);
$lifeInsurance_entries = GFAPI::get_entries($repeater_lifeInsurance_form_id, $repeater_lifeInsurance_search_criteria);
$count_lifeInsurance_entries = count($lifeInsurance_entries);
$lifeInsurance = array();

for ($i = 0; $i < $count_lifeInsurance_entries; $i++) {
    $lifeInsurance[$i]['asset_description'] = $lifeInsurance_entries[$i]['1'];
    $lifeInsurance[$i]['current_value'] = $lifeInsurance_entries[$i]['2'];
    $lifeInsurance[$i]['current_debt'] = $lifeInsurance_entries[$i]['7'];
    $lifeInsurance[$i]['equity_minus_debt'] = $lifeInsurance_entries[$i]['8'];
    $lifeInsurance[$i]['proposed_division_husband'] = $lifeInsurance_entries[$i]['9'];
    $lifeInsurance[$i]['proposed_division_wife'] = $lifeInsurance_entries[$i]['10'];
    // echo '<pre>';
    // echo 'CHILDREN<br>';
    // print_r($children[$i]);
    // echo '<br></pre>';
}

// Vehicles not Leased

$repeater_vehiclesNotLeased_form_id = 54;
$repeater_vehiclesNotLeased_search_criteria['field_filters'][] = array('key' => 'created_by', 'value' => $client_user_id);
$repeater_vehiclesNotLeased_search_criteria['status'] = 'active';
$repeater_vehiclesNotLeased_sorting = array('key' => 'id', 'direction' => 'ASC', 'is_numeric' => true);
$vehiclesNotLeased_entries = GFAPI::get_entries($repeater_vehiclesNotLeased_form_id, $repeater_vehiclesNotLeased_search_criteria);
$count_vehiclesNotLeased_entries = count($vehiclesNotLeased_entries);
$vehiclesNotLeased = array();

for ($i = 0; $i < $count_vehiclesNotLeased_entries; $i++) {
    $vehiclesNotLeased[$i]['asset_description'] = $vehiclesNotLeased_entries[$i]['1'];
    $vehiclesNotLeased[$i]['current_value'] = $vehiclesNotLeased_entries[$i]['2'];
    $vehiclesNotLeased[$i]['current_debt'] = $vehiclesNotLeased_entries[$i]['7'];
    $vehiclesNotLeased[$i]['equity_minus_debt'] = $vehiclesNotLeased_entries[$i]['8'];
    $vehiclesNotLeased[$i]['proposed_division_husband'] = $vehiclesNotLeased_entries[$i]['9'];
    $vehiclesNotLeased[$i]['proposed_division_wife'] = $vehiclesNotLeased_entries[$i]['10'];
    // echo '<pre>';
    // echo 'CHILDREN<br>';
    // print_r($children[$i]);
    // echo '<br></pre>';
}


// Stocks and bonds

$repeater_stocksBonds_form_id = 55;
$repeater_stocksBonds_search_criteria['field_filters'][] = array('key' => 'created_by', 'value' => $client_user_id);
$repeater_stocksBonds_search_criteria['status'] = 'active';
$repeater_stocksBonds_sorting = array('key' => 'id', 'direction' => 'ASC', 'is_numeric' => true);
$stocksBonds_entries = GFAPI::get_entries($repeater_stocksBonds_form_id, $repeater_stocksBonds_search_criteria);
$count_stocksBonds_entries = count($stocksBonds_entries);
$stocksBonds = array();

for ($i = 0; $i < $count_stocksBonds_entries; $i++) {
    $stocksBonds[$i]['asset_description'] = $stocksBonds_entries[$i]['1'];
    $stocksBonds[$i]['current_value'] = $stocksBonds_entries[$i]['2'];
    $stocksBonds[$i]['current_debt'] = $stocksBonds_entries[$i]['7'];
    $stocksBonds[$i]['equity_minus_debt'] = $stocksBonds_entries[$i]['8'];
    $stocksBonds[$i]['proposed_division_husband'] = $stocksBonds_entries[$i]['9'];
    $stocksBonds[$i]['proposed_division_wife'] = $stocksBonds_entries[$i]['10'];
    // echo '<pre>';
    // echo 'CHILDREN<br>';
    // print_r($children[$i]);
    // echo '<br></pre>';
}

// Housefild Furniture and fixings

$repeater_householdFurniture_form_id = 56;
$repeater_householdFurniture_search_criteria['field_filters'][] = array('key' => 'created_by', 'value' => $client_user_id);
$repeater_householdFurniture_search_criteria['status'] = 'active';
$repeater_householdFurniture_sorting = array('key' => 'id', 'direction' => 'ASC', 'is_numeric' => true);
$householdFurniture_entries = GFAPI::get_entries($repeater_householdFurniture_form_id, $repeater_householdFurniture_search_criteria);
$count_householdFurniture_entries = count($householdFurniture_entries);
$householdFurniture = array();

for ($i = 0; $i < $count_householdFurniture_entries; $i++) {
    $householdFurniture[$i]['asset_description'] = $householdFurniture_entries[$i]['1'];
    $householdFurniture[$i]['current_value'] = $householdFurniture_entries[$i]['2'];
    $householdFurniture[$i]['current_debt'] = $householdFurniture_entries[$i]['7'];
    $householdFurniture[$i]['equity_minus_debt'] = $householdFurniture_entries[$i]['8'];
    $householdFurniture[$i]['proposed_division_husband'] = $householdFurniture_entries[$i]['9'];
    $householdFurniture[$i]['proposed_division_wife'] = $householdFurniture_entries[$i]['10'];
    // echo '<pre>';
    // echo 'CHILDREN<br>';
    // print_r($children[$i]);
    // echo '<br></pre>';
}


// Other items

$repeater_otherItems_form_id = 57;
$repeater_otherItems_search_criteria['field_filters'][] = array('key' => 'created_by', 'value' => $client_user_id);
$repeater_otherItems_search_criteria['status'] = 'active';
$repeater_otherItems_sorting = array('key' => 'id', 'direction' => 'ASC', 'is_numeric' => true);
$otherItems_entries = GFAPI::get_entries($repeater_otherItems_form_id, $repeater_otherItems_search_criteria);
$count_otherItems_entries = count($otherItems_entries);
$otherItems = array();

for ($i = 0; $i < $count_otherItems_entries; $i++) {
    $otherItems[$i]['asset_description'] = $otherItems_entries[$i]['1'];
    $otherItems[$i]['current_value'] = $otherItems_entries[$i]['2'];
    $otherItems[$i]['current_debt'] = $otherItems_entries[$i]['7'];
    $otherItems[$i]['equity_minus_debt'] = $otherItems_entries[$i]['8'];
    $otherItems[$i]['proposed_division_husband'] = $otherItems_entries[$i]['9'];
    $otherItems[$i]['proposed_division_wife'] = $otherItems_entries[$i]['10'];
    // echo '<pre>';
    // echo 'CHILDREN<br>';
    // print_r($children[$i]);
    // echo '<br></pre>';
}

// Miscellaneous Items


$repeater_miscellaneousItems_form_id = 58;
$repeater_miscellaneousItems_search_criteria['field_filters'][] = array('key' => 'created_by', 'value' => $client_user_id);
$repeater_miscellaneousItems_search_criteria['status'] = 'active';
$repeater_miscellaneousItems_sorting = array('key' => 'id', 'direction' => 'ASC', 'is_numeric' => true);
$miscellaneousItems_entries = GFAPI::get_entries($repeater_miscellaneousItems_form_id, $repeater_miscellaneousItems_search_criteria);
$count_miscellaneousItems_entries = count($miscellaneousItems_entries);
$miscellaneousItems = array();

for ($i = 0; $i < $count_miscellaneousItems_entries; $i++) {
    $miscellaneousItems[$i]['asset_description'] = $miscellaneousItems_entries[$i]['1'];
    $miscellaneousItems[$i]['current_value'] = $miscellaneousItems_entries[$i]['2'];
    $miscellaneousItems[$i]['current_debt'] = $miscellaneousItems_entries[$i]['7'];
    $miscellaneousItems[$i]['equity_minus_debt'] = $miscellaneousItems_entries[$i]['8'];
    $miscellaneousItems[$i]['proposed_division_husband'] = $miscellaneousItems_entries[$i]['9'];
    $miscellaneousItems[$i]['proposed_division_wife'] = $miscellaneousItems_entries[$i]['10'];
    // echo '<pre>';
    // echo 'CHILDREN<br>';
    // print_r($children[$i]);
    // echo '<br></pre>';
}



// Credit Cards


$repeater_creditCards_form_id = 59;
$repeater_creditCards_search_criteria['field_filters'][] = array('key' => 'created_by', 'value' => $client_user_id);
$repeater_creditCards_search_criteria['status'] = 'active';
$repeater_creditCards_sorting = array('key' => 'id', 'direction' => 'ASC', 'is_numeric' => true);
$creditCards_entries = GFAPI::get_entries($repeater_creditCards_form_id, $repeater_creditCards_search_criteria);
$count_creditCards_entries = count($creditCards_entries);
$creditCards = array();

for ($i = 0; $i < $count_creditCards_entries; $i++) {
    $creditCards[$i]['asset_description'] = $creditCards_entries[$i]['1'];
    $creditCards[$i]['current_value'] = $creditCards_entries[$i]['2'];
    $creditCards[$i]['current_debt'] = $creditCards_entries[$i]['7'];
    $creditCards[$i]['equity_minus_debt'] = $creditCards_entries[$i]['8'];
    $creditCards[$i]['proposed_division_husband'] = $creditCards_entries[$i]['9'];
    $creditCards[$i]['proposed_division_wife'] = $creditCards_entries[$i]['10'];
    // echo '<pre>';
    // echo 'CHILDREN<br>';
    // print_r($children[$i]);
    // echo '<br></pre>';
}

// Other Loans and LIABILITIES


$repeater_otherLoans_form_id = 60;
$repeater_otherLoans_search_criteria['field_filters'][] = array('key' => 'created_by', 'value' => $client_user_id);
$repeater_otherLoans_search_criteria['status'] = 'active';
$repeater_otherLoans_sorting = array('key' => 'id', 'direction' => 'ASC', 'is_numeric' => true);
$otherLoans_entries = GFAPI::get_entries($repeater_otherLoans_form_id, $repeater_otherLoans_search_criteria);
$count_otherLoans_entries = count($otherLoans_entries);
$otherLoans = array();

for ($i = 0; $i < $count_otherLoans_entries; $i++) {
    $otherLoans[$i]['asset_description'] = $otherLoans_entries[$i]['1'];
    $otherLoans[$i]['current_value'] = $otherLoans_entries[$i]['2'];
    $otherLoans[$i]['current_debt'] = $otherLoans_entries[$i]['7'];
    $otherLoans[$i]['equity_minus_debt'] = $otherLoans_entries[$i]['8'];
    $otherLoans[$i]['proposed_division_husband'] = $otherLoans_entries[$i]['9'];
    $otherLoans[$i]['proposed_division_wife'] = $otherLoans_entries[$i]['10'];
    // echo '<pre>';
    // echo 'CHILDREN<br>';
    // print_r($children[$i]);
    // echo '<br></pre>';
}


/* VARIABLES END
 *********************************************************************************************************** */
?>

<bookmark content="Assset Spreadsheet"/>


<div class = "container">
<div class = "paragraphleft"> INVENTORY SPREADSHEET 
    </div>

<div class = "paragraphright"> PROPOSED PROPERTY DIVISION 
    </div>

    </div>

<div class = "container">
<div class = "paragraphlefttable">

<table>
  <tr>
  	<th>Item No. </th>
    <th>Asset Description</th>
    <th>Current Fair Market Value</th>
    <th>Current Debt</th>
    <th style="border-color: black;
    border-style: solid; border-right: 2px;">Equity - FMV minus Debt</th>

  </tr>
  <tr  style=	"border-color: black;
    border-style: solid;
    	border-width: 2px; ">
  <td style="background-color: #f2f2f2"><b>1.</b>  </td>
  <td style="background-color: #f2f2f2"> <b>Bank Accounts </b> </td>
  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2;border-color: black;
    border-style: solid; border-right: 2px;"> </td>

  </tr>

 <?php
for ($i = 0; $i < $count_bankAccounts_entries; $i++) {?>
   <tr>
   <td> <?php echo $i + 1 ?>. </td>
    <td><?php echo $bankAccounts[$i]['asset_description']; ?></td>
     <td><?php echo $bankAccounts[$i]['current_value']; ?></td>
      <td><?php echo $bankAccounts[$i]['current_debt']; ?></td>
       <td style="border-right: 2px;
	border-color: black;
    border-style: solid;"><?php $totalBankAccounts = $totalBankAccounts +  $bankAccounts[$i]['equity_minus_debt']; echo $bankAccounts[$i]['equity_minus_debt']; ?></td>
    </tr>

  <?php }?>
 
<tr  style=	"border-color: black;
    border-style: solid;
    	border-width: 2px; border-right: 3px;">
  <td style="background-color: #f2f2f2"><b>2.</b>  </td>
  <td style="background-color: #f2f2f2"> <b>Real Property</b> </td>
  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>
   <td style="background-color: #f2f2f2;border-color: black;
    border-style: solid; border-right: 2px;"> </td>

   </tr>

      <?php
for ($i = 0; $i < $count_realProperty_entries; $i++) {?>
   <tr>
      <td> <?php echo $i + 1 ?>. </td>
    <td><?php echo $realProperty[$i]['asset_description']; ?></td>
     <td><?php echo $realProperty[$i]['current_value']; ?></td>
      <td><?php echo $realProperty[$i]['current_debt']; ?></td>
       <td style="border-right: 2px;
	border-color: black;
    border-style: solid;"><?php $totalRealProperty = $totalRealProperty + $realProperty[$i]['equity_minus_debt']; echo $realProperty[$i]['equity_minus_debt']; ?></td>
    </tr>

  <?php }?>
 

  <tr  style=	"border-color: black;
    border-style: solid;
    	border-width: 2px; ">
  <td style="background-color: #f2f2f2"><b>3.</b>  </td>
  <td style="background-color: #f2f2f2; "> <b>IRAs/Retirement Plans/Pension Plans/Deferred Comp</b> </td>
  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2;border-color: black;
    border-style: solid; border-right: 2px;"> </td>

  </tr>

 
       <?php
for ($i = 0; $i < $count_iraRetirement_entries; $i++) {?>
   <tr>
      <td> <?php echo $i + 1 ?>. </td>
    <td><?php echo $iraRetirement[$i]['asset_description']; ?></td>
     <td><?php echo $iraRetirement[$i]['current_value']; ?></td>
      <td><?php echo $iraRetirement[$i]['current_debt']; ?></td>
       <td style="border-right: 2px;
	border-color: black;
    border-style: solid;"><?php $totalIraRetirement = $totalIraRetirement + $iraRetirement[$i]['equity_minus_debt'];  echo $iraRetirement[$i]['equity_minus_debt']; ?></td>
    </tr>

  <?php }?>

  <tr  style=	"border-color: black;
    border-style: solid;
    	border-width: 2px; ">
  <td style="background-color: #f2f2f2"><b>4.</b>  </td>
  <td style="background-color: #f2f2f2; "> <b>Life Insurance/Annuities</b> </td>
  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2;border-color: black;
    border-style: solid; border-right: 2px;"> </td>

  </tr>

       <?php
for ($i = 0; $i < $count_lifeInsurance_entries; $i++) {?>
   <tr>
     <td> <?php echo $i + 1 ?>. </td>
    <td><?php echo $lifeInsurance[$i]['asset_description']; ?></td>
     <td><?php echo $lifeInsurance[$i]['current_value']; ?></td>
      <td><?php echo $lifeInsurance[$i]['current_debt']; ?></td>
       <td style="border-right: 2px;
	border-color: black;
    border-style: solid;"><?php $totalLifeInsurance = $totalLifeInsurance + $lifeInsurance[$i]['equity_minus_debt']; echo $lifeInsurance[$i]['equity_minus_debt']; ?></td>
    </tr>

  <?php }?>
 <tr  style=	"border-color: black;
    border-style: solid;
    	border-width: 2px; ">
  <td style="background-color: #f2f2f2"><b>5.</b>  </td>
  <td style="background-color: #f2f2f2; "> <b>Vehicles - Not Leased</b> </td>
  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2;border-color: black;
    border-style: solid; border-right: 2px;"> </td>

  </tr>

        <?php
for ($i = 0; $i < $count_vehiclesNotLeased_entries; $i++) {?>
   <tr>
      <td> <?php echo $i + 1 ?>. </td>
    <td><?php echo $vehiclesNotLeased[$i]['asset_description']; ?></td>
     <td><?php echo $vehiclesNotLeased[$i]['current_value']; ?></td>
      <td><?php echo $vehiclesNotLeased[$i]['current_debt']; ?></td>
       <td style="border-right: 2px;
	border-color: black;
    border-style: solid;"><?php $totalVehicles = $totalVehicles + $vehiclesNotLeased[$i]['equity_minus_debt']; echo $vehiclesNotLeased[$i]['equity_minus_debt']; ?></td>
    </tr>

  <?php }?>
 <tr  style=	"border-color: black;
    border-style: solid;
    	border-width: 2px; ">
  <td style="background-color: #f2f2f2"><b>6.</b>  </td>
  <td style="background-color: #f2f2f2; "> <b>Stocks, Bonds, Securities</b> </td>
  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2;border-color: black;
    border-style: solid; border-right: 2px;"> </td>

  </tr>

   <?php
for ($i = 0; $i < $count_stocksBonds_entries; $i++) {?>
   <tr>
      <td> <?php echo $i + 1 ?>. </td>
    <td><?php echo $stocksBonds[$i]['asset_description']; ?></td>
     <td><?php echo $stocksBonds[$i]['current_value']; ?></td>
      <td><?php echo $stocksBonds[$i]['current_debt']; ?></td>
       <td style="border-right: 2px;
	border-color: black;
    border-style: solid;"><?php $totalStocks = $totalStocks + $stocksBonds[$i]['equity_minus_debt']; echo $stocksBonds[$i]['equity_minus_debt']; ?></td>
    </tr>

  <?php }?>

 

 <tr  style=	"border-color: black;
    border-style: solid;
    	border-width: 2px; ">
  <td style="background-color: #f2f2f2"><b>7.</b>  </td>
  <td style="background-color: #f2f2f2; "> <b>Household Furniture & Fixtures</b> </td>
  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2;border-color: black;
    border-style: solid; border-right: 2px;"> </td>

  </tr>


   <tr>
      <td>  </td>
    <td>See "Asset Spreadsheet Furniture" PDF</td>
     <td> </td>
      <td> </td>
       <td style="border-right: 2px;
	border-color: black;
    border-style: solid;"> </td>
    </tr>

  

 <tr  style=	"border-color: black;
    border-style: solid;
    	border-width: 2px; ">
  <td style="background-color: #f2f2f2"><b>8.</b>  </td>
  <td style="background-color: #f2f2f2; "> <b>Other Items</b> </td>
  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2;border-color: black;
    border-style: solid; border-right: 2px;"> </td>

  </tr>

       <?php
for ($i = 0; $i < $count_otherItems_entries; $i++) {?>
   <tr>
    <td> <?php echo $i + 1 ?>. </td>
    <td><?php echo $otherItems[$i]['asset_description']; ?></td>
     <td><?php echo $otherItems[$i]['current_value']; ?></td>
      <td><?php echo $otherItems[$i]['current_debt']; ?></td>
       <td style="border-right: 2px;
	border-color: black;
    border-style: solid;"><?php $totalOther = $totalOther + $otherItems[$i]['equity_minus_debt']; echo $otherItems[$i]['equity_minus_debt']; ?></td>
    </tr>

  <?php }?>

<tr  style=	"border-color: black;
    border-style: solid;
    	border-width: 2px; ">
  <td style="background-color: #f2f2f2"><b>9.</b>  </td>
  <td style="background-color: #f2f2f2; "> <b>Miscellaneous Items</b> </td>
  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2;border-color: black;
    border-style: solid; border-right: 2px;"> </td>

  </tr>

       <?php
for ($i = 0; $i < $count_miscellaneousItems_entries; $i++) {?>
   <tr>
      <td> <?php echo $i + 1 ?>. </td>
    <td><?php echo $miscellaneousItems[$i]['asset_description']; ?></td>
     <td><?php echo $miscellaneousItems[$i]['current_value']; ?></td>
      <td><?php echo $miscellaneousItems[$i]['current_debt']; ?></td>
       <td style="border-right: 2px;
	border-color: black;
    border-style: solid;"><?php $totalMisc = $totalMisc + $miscellaneousItems[$i]['equity_minus_debt']; echo $miscellaneousItems[$i]['equity_minus_debt']; ?></td>
    </tr>

  <?php }?>
     <tr>
 	 <td style="border-top: 2px;
	border-color: black;
    border-style: solid;"> </td>
    <td style="border-top: 2px;
	border-color: black;
    border-style: solid;">  </td>
    <td style="border-top: 2px;
	border-color: black;
    border-style: solid;"> </td>
    <td style="border-top: 2px;
	border-color: black;
    border-style: solid;">TOTAL:  </td>
    <td style="border-right: 2px;
	border-color: black;
    border-style: solid; border-top: 2px;">$<?php

//for ($i = 0; $i < $count_bankAccounts_entries; $i++) {
   // $totalAssets = $bankAccounts[$i]['equity_minus_debt'];
  //  }
 //  for ($i1 = 0; $i1 < $count_realProperty_entries; $i1++) {
 // $totalAssets = $totalAssets + $realProperty[$i1]['equity_minus_debt'];
  //}
 //   for ($i2 = 0; $i2< $count_iraRetirement_entries; $i2++) {
  // $totalAssets = $totalAssets + $iraRetirement[$i2]['equity_minus_debt'];
   //}
  // for ($i3 = 0; $i3 < $count_lifeInsurance_entries; $i3++) {
  // $totalAssets = $totalAssets  + $lifeInsurance[$i3]['equity_minus_debt'];
  //  }
    // for ($i4 = 0; $i4 < $count_vehiclesNotLeased_entries; $i4++) {
   // $totalAssets = $totalAssets  + $vehiclesNotLeased[$i4]['equity_minus_debt'];
  //  }
  //for ($i5 = 0; $i5 < $count_stocksBonds_entries; $i5++) {
  //  $totalAssets = $totalAssets  + $stocksBonds[$i5]['equity_minus_debt'];
  // }
  // for ($i6 = 0; $i6 < $count_householdFurniture_entries; $i6++) {
   // $totalAssets = $totalAssets  + $householdFurniture[$i6]['equity_minus_debt'];
   // }
   // for ($i7 = 0; $i7 < $count_otherItems_entries; $i7++) {
    //$totalAssets = $totalAssets  + $otherItems[$i7]['equity_minus_debt'];
   // }
   // for ($i8 = 0; $i8 < $miscellaneousItems_entries; $i8++) {
  // $totalAssets = $totalAssets  + $miscellaneousItems[$i8]['equity_minus_debt'];
   //}
   
   $totalAssets = $totalBankAccounts + $totalHousefurniture + $totalIraRetirement + $totalLifeInsurance + $totalMisc + $totalOther
   + $totalRealProperty + $totalStocks + $totalVehicles;

   $totalAssetsFormatted = number_format($totalAssets);

    echo $totalAssetsFormatted ?>
  </td>
  </tr>
   <tr>
  	<th style="border-color: black;
    border-style: solid; border-top: 2px;"> </th>
    <th style="border-color: black;
    border-style: solid; border-top: 2px;"><b>LIABILITIES</b></th>
    <th style="border-color: black;
    border-style: solid; border-top: 2px;"> </th>
    <th style="border-color: black;
    border-style: solid; border-top: 2px;"> </th>
    <th style="border-color: black;
    border-style: solid; border-right: 2px; border-top: 2px;"> </th>

  </tr>
  <tr  style=	"border-color: black;
    border-style: solid;
    	border-width: 2px; ">
  <td style="background-color: #f2f2f2"><b></b> 10. </td>
  <td style="background-color: #f2f2f2; "> <b>Credit Cards:</b> </td>
  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2;border-color: black;
    border-style: solid; border-right: 2px;"> </td>

  </tr>
         
  <?php
for ($i = 0; $i < $count_creditCards_entries; $i++) {?>
   <tr>
      <td> <?php echo $i + 1 ?>. </td>
    <td><?php echo $creditCards[$i]['asset_description']; ?></td>
     <td><?php echo $creditCards[$i]['current_value']; ?></td>
      <td><?php echo $creditCards[$i]['current_debt']; ?></td>
       <td style="border-right: 2px;
	border-color: black;
    border-style: solid;"><?php echo $creditCards[$i]['equity_minus_debt']; ?></td>
    </tr>

  <?php }?>


    <tr  style=	"border-color: black;
    border-style: solid;
    	border-width: 2px; ">
  <td style="background-color: #f2f2f2"><b></b> 10. </td>
  <td style="background-color: #f2f2f2; "> <b>Other Loans and Liabilities:</b> </td>
  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2;border-color: black;
    border-style: solid; border-right: 2px;"> </td>

  </tr>
         
  <?php
for ($i = 0; $i < $count_otherLoans_entries; $i++) {?>
   <tr>
      <td> <?php echo $i + 1 ?>. </td>
    <td><?php echo $otherLoans[$i]['asset_description']; ?></td>
     <td><?php echo $otherLoans[$i]['current_value']; ?></td>
      <td><?php echo $otherLoans[$i]['current_debt']; ?></td>
       <td style="border-right: 2px;
	border-color: black;
    border-style: solid;"><?php echo $otherLoans[$i]['equity_minus_debt']; ?></td>
    </tr>

  <?php }?>


<tr  style=	"border-color: black;
    border-style: solid;
    	border-width: 2px; ">
  <td style="background-color: #f2f2f2"><b></b>  </td>
  <td style="background-color: #f2f2f2; "> <b>TOTAL LIABILITIES</b> </td>
  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2;border-color: black;
    border-style: solid; border-right: 2px;"> </td>

  </tr>

  
   <tr>
 	 <td style="border-top: 2px;
	border-color: black;
    border-style: solid;"> </td>
    <td style="border-top: 2px;
	border-color: black;
    border-style: solid;">  </td>
    <td style="border-top: 2px;
	border-color: black;
    border-style: solid;"> </td>
    <td style="border-top: 2px;
	border-color: black;
    border-style: solid;">TOTAL:  </td>
    <td style="border-right: 2px;
	border-color: black;
    border-style: solid; border-top: 2px;">$<?php
for ($i = 0; $i < $count_creditCards_entries; $i++) {
    $totalWithLiability = $totalAssets - $creditCards[$i]['equity_minus_debt'] + $otherLoans[$i]['equity_minus_debt'];


}
 $totalWithLiabilityFormatted = number_format($totalWithLiability);
    echo $totalWithLiabilityFormatted ?> </td>
  </tr>


    </table>
</div>

<!---- RIGHT TABLE ------>

<div class = "paragraphrighttable">

    <table>

  <tr>
    <th>HUSBAND</th>
    <th>WIFE</th>
  </tr>



<tr>
    <td> </td>
    <td> </td>

  </tr>
  <!---- BANK ACCOUNTS -------
  ---------
  -->

    <tr  style=	"border-color: black;
    border-style: solid;
    	border-left: 2px; border-right: 2px; border-top: 2px;  border-bottom: 0px;">

  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>


  </tr>
  <tr  style=	"border-color: black;
    border-style: solid;
    	 border-left: 2px; border-right: 2px; border-top: 0px;  border-bottom: 2px; ">

  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>


  </tr>
    <?php
for ($i = 0; $i < $count_bankAccounts_entries; $i++) {?>
    <tr>
   
     <td><?php $husbandBankAccounts = $husbandBankAccounts + $bankAccounts[$i]['proposed_division_husband']; echo $bankAccounts[$i]['proposed_division_husband']; ?></td>
    <td><?php $wifeBankAccounts = $wifeBankAccounts + $bankAccounts[$i]['proposed_division_wife']; echo $bankAccounts[$i]['proposed_division_wife']; ?></td>
   
</tr>
<?php }?>


  <!---- REAL PROPERTY -------
  ---------
  -->
    <tr  style=	"border-color: black;
    border-style: solid;
    	border-left: 2px; border-right: 2px; border-top: 2px;  border-bottom: 0px;">

  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>


  </tr>
  <tr  style=	"border-color: black;
    border-style: solid;
    	 border-left: 2px; border-right: 2px; border-top: 0px;  border-bottom: 2px; ">

  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>


   <?php
for ($i = 0; $i < $count_realProperty_entries; $i++) {?>
    <tr>
   
     <td><?php $husbandRealProperty = $husbandRealProperty + $realProperty[$i]['proposed_division_husband']; echo $realProperty[$i]['proposed_division_husband']; ?></td>
    <td><?php $wifeRealProperty = $wifeRealProperty + $realProperty[$i]['proposed_division_wife'];  echo $realProperty[$i]['proposed_division_wife']; ?></td>
   
</tr>
<?php }?>

  <!---- IRAs/Retirement
Plans/Pension
Plans/Deferred Comp -------
  ---------
  -->
 <tr  style=	"border-color: black;
    border-style: solid;
    	border-left: 2px; border-right: 2px; border-top: 2px;  border-bottom: 0px;">

  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>


  </tr>

  <tr  style=	"border-color: black;
    border-style: solid;
    	border-left: 2px; border-right: 2px; border-top: 0px;  border-bottom: 0px;">

  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>


  </tr>
 
  <tr  style=	"border-color: black;
    border-style: solid;
    	 border-left: 2px; border-right: 2px; border-top: 0px;  border-bottom: 2px; ">

  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>


   <?php
for ($i = 0; $i < $count_iraRetirement_entries; $i++) {?>
    <tr>
   
     <td><?php $husbandIraRetirement = $husbandIraRetirement +  $iraRetirement[$i]['proposed_division_husband']; echo $iraRetirement[$i]['proposed_division_husband']; ?></td>
    <td><?php $wifeIraRetirement = $wifeIraRetirement +  $iraRetirement[$i]['proposed_division_wife']; echo $iraRetirement[$i]['proposed_division_wife']; ?></td>
   
</tr>
<?php }?>

  <!---- LIFE INSURANCE/ANNUITIES -------
  ---------
  -->
  <tr  style=	"border-color: black;
    border-style: solid;
    	border-left: 2px; border-right: 2px; border-top: 2px;  border-bottom: 0px;">

  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>



  <tr  style=	"border-color: black;
    border-style: solid;
    	 border-left: 2px; border-right: 2px; border-top: 0px;  border-bottom: 2px; ">

  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>

  <?php
for ($i = 0; $i < $count_lifeInsurance_entries; $i++) {?>
    <tr>
   
     <td><?php $husbandLifeInsurance = $husbandLifeInsurance + $lifeInsurance[$i]['proposed_division_husband']; echo $lifeInsurance[$i]['proposed_division_husband']; ?></td>
    <td><?php $wifeLifeInsurance = $wifeLifeInsurance +  $lifeInsurance[$i]['proposed_division_wife']; echo $lifeInsurance[$i]['proposed_division_wife']; ?></td>
   
</tr>
<?php }?>

  <!---- VEHICLES NOT LEASED -------
  ---------
  -->

  <tr  style=	"border-color: black;
    border-style: solid;
    	border-left: 2px; border-right: 2px; border-top: 2px;  border-bottom: 0px;">

  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>


  </tr>

  <tr  style=	"border-color: black;
    border-style: solid;
    	 border-left: 2px; border-right: 2px; border-top: 0px;  border-bottom: 2px; ">

  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>

<?php
for ($i = 0; $i < $count_vehiclesNotLeased_entries; $i++) {?>
    <tr>
   
     <td><?php $husbandVehicles = $husbandVehicles + $vehiclesNotLeased[$i]['proposed_division_husband']; echo $vehiclesNotLeased[$i]['proposed_division_husband']; ?></td>
    <td><?php $wifeVehicles = $wifeVehicles + $vehiclesNotLeased[$i]['proposed_division_wife']; echo $vehiclesNotLeased[$i]['proposed_division_wife']; ?></td>
   
</tr>
<?php }?>

  <!---- STOCKS, BONDS, SECURITY -------
  ---------
  -->

  <tr  style=	"border-color: black;
    border-style: solid;
    	border-left: 2px; border-right: 2px; border-top: 2px;  border-bottom: 0px;">

  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>


  </tr>

  <tr  style=	"border-color: black;
    border-style: solid;
    	 border-left: 2px; border-right: 2px; border-top: 0px;  border-bottom: 2px; ">

  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>


  </tr>
  <?php
for ($i = 0; $i < $count_stocksBonds_entries; $i++) {?>
    <tr>
   
     <td><?php $husbandStocks = $husbandStocks + $stocksBonds[$i]['proposed_division_husband']; echo $stocksBonds[$i]['proposed_division_husband']; ?></td>
    <td><?php $wifeStocks = $wifeStocks + $stocksBonds[$i]['proposed_division_wife']; echo $stocksBonds[$i]['proposed_division_wife']; ?></td>
   
</tr>
<?php }?>

  <!---- HOUSEHOLD FUNITURE AND FIXTURES -------
  ---------
  -->



  <tr  style=	"border-color: black;
    border-style: solid;
    	border-left: 2px; border-right: 2px; border-top: 2px;  border-bottom: 0px;">

  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>


  </tr>
  

  <tr  style=	"border-color: black;
    border-style: solid;
    	 border-left: 2px; border-right: 2px; border-top: 0px;  border-bottom: 2px; ">

  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>


  </tr>
    <tr>
   
     <td>See Attatched <br>.</td>
    <td>PDF <br>.</td>
   
</tr>



  <!---- OTHER ITEMS -------
  ---------
  -->

  <tr  style=	"border-color: black;
    border-style: solid;
    	border-left: 2px; border-right: 2px; border-top: 2px;  border-bottom: 0px;">

  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>


  </tr>

  <tr  style=	"border-color: black;
    border-style: solid;
    	 border-left: 2px; border-right: 2px; border-top: 0px;  border-bottom: 2px; ">

  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>


  </tr>

   <?php
for ($i = 0; $i < $count_otherItems_entries; $i++) {?>
    <tr>
   
     <td><?php $husbandOther = $husbandOther + $otherItems[$i]['proposed_division_husband']; echo $otherItems[$i]['proposed_division_husband']; ?></td>
    <td><?php $wifeOther = $wifeOther + $otherItems[$i]['proposed_division_wife']; echo $otherItems[$i]['proposed_division_wife']; ?></td>
   
</tr>
<?php }?>

  <!---- Miscellaneous Items -------
  ---------
  -->


  <tr  style=	"border-color: black;
    border-style: solid;
    	border-left: 2px; border-right: 2px; border-top: 2px;  border-bottom: 0px;">

  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>


  </tr>

  <tr  style=	"border-color: black;
    border-style: solid;
    	 border-left: 2px; border-right: 2px; border-top: 0px;  border-bottom: 2px; ">

  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>


  </tr>
   <?php
for ($i = 0; $i < $count_miscellaneousItems_entries; $i++) {?>
    <tr>
   
     <td><?php $husbandMisc = $husbandMisc + $miscellaneousItems[$i]['proposed_division_husband']; echo $miscellaneousItems[$i]['proposed_division_husband']; ?></td>
    <td><?php $wifeMisc = $wifeMisc + $miscellaneousItems[$i]['proposed_division_wife']; echo $miscellaneousItems[$i]['proposed_division_wife']; ?></td>
   
</tr>
<?php }?>

 <tr>
 
    <td style="border-top: 2px;
	border-color: black;
    border-style: solid;">$<?php

    $totalAssetsHusband = $husbandBankAccounts + $husbandFurniture + $husbandIraRetirement + $husbandLifeInsurance + $husbandMisc 
    + $husbandOther + $husbandRealProperty + $husbandStocks + $husbandVehicles;

    $totalAssetsHusbandFormtted = number_format($totalAssetsHusband);

    echo $totalAssetsHusbandFormtted ?>   </td>
    
    <td style="border-right: 2px;
	border-color: black;
    border-style: solid; border-top: 2px;">$<?php



    $totalAssetsWife = $wifeBankAccounts + $wifeFurniture + $wifeIraRetirement + $wifeLifeInsurance + 
    $wifeMisc + $wifeOther + $wifeRealProperty + $wifeStocks + $wifeVehicles;

     $totalAssetsWifeFormtted = number_format($totalAssetsWife);

    echo $totalAssetsWifeFormtted ?> </td>
  </tr>
  <tr style = "border-color: black;
    border-style: solid; border-top: 2px;">
    <td> </td>
    <td> </td>

  </tr>
  <tr style = "border-color: black;
    border-style: solid; border-bottom: 2px;">
    <td> </td>
    <td> </td>

  </tr>
 <!---- CREDIT Cards -------
  ---------
  -->
  <tr  style=	"border-color: black;
    border-style: solid;
    	border-left: 2px; border-right: 2px; border-top: 2px;  border-bottom: 0px;">

  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>


  </tr>
  <tr  style=	"border-color: black;
    border-style: solid;
    	 border-left: 2px; border-right: 2px; border-top: 0px;  border-bottom: 2px; ">

  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>


  </tr>
   <?php
for ($i = 0; $i < $count_creditCards_entries; $i++) {?>
    <tr>
   
     <td><?php $husbandCreditCard = $husbandCreditCard + $creditCards[$i]['proposed_division_husband']; echo $creditCards[$i]['proposed_division_husband']; ?></td>
    <td><?php $wifeCreditCard = $wifeCreditCard +  $creditCards[$i]['proposed_division_wife']; echo $creditCards[$i]['proposed_division_wife']; ?></td>
   
</tr>
<?php }?>



 <!---- Other loans and credit cards -------
  ---------
  -->
  <tr  style=	"border-color: black;
    border-style: solid;
    	border-left: 2px; border-right: 2px; border-top: 2px;  border-bottom: 0px;">

  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>


  </tr>
  <tr  style=	"border-color: black;
    border-style: solid;
    	 border-left: 2px; border-right: 2px; border-top: 0px;  border-bottom: 2px; ">

  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>


  </tr>
   <?php
for ($i = 0; $i < $count_otherLoans_entries; $i++) {?>
    <tr>
   <?php
    $otherLoansWife = number_format($otherLoans[$i]['proposed_division_husband']);
    $otherLoansHusband = number_format($otherLoans[$i]['proposed_division_wife']);
    ?>
     <td>$<?php $husbandOtherLoans = $husbandOtherLoans + $otherLoans[$i]['proposed_division_husband']; echo $otherLoansHusband; ?></td>
    <td>$<?php $wifeOtherLoans = $wifeOtherLoans + $otherLoans[$i]['proposed_division_wife'];  echo $otherLoansWife ;?></td>
   
</tr>
<?php }?>


 <!---- TOTAL LIABILITIES -------
  ---------
  -->


  <tr  style=	"border-color: black;
    border-style: solid;
    	 border-left: 2px; border-right: 2px; border-top: 2px;  border-bottom: 0px; ">

  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>


  </tr>

  
  <tr  style=	"border-color: black;
    border-style: solid;
    	 border-left: 2px; border-right: 2px; border-top: 0px;  border-bottom: 2px; ">

  <td style="background-color: #f2f2f2"> </td>
  <td style="background-color: #f2f2f2"> </td>


  </tr>
     <tr>
   
        <td style="
	border-color: black;
    border-style: solid; border-top: 2px;">$<?php

   
    $totalToSubtractHusband = $husbandCreditCard + $husbandOtherLoans;

    $totalWithLiabilityHusband = $totalAssetsHusband - $totalToSubtractHusband;
   
    $totalFormathusband = number_format($totalWithLiabilityHusband);
    echo $totalFormathusband ?> </td>
        <td style="border-right: 2px;
	border-color: black;
    border-style: solid; border-top: 2px;">$<?php

    $totalToSubtractWife = $wifeCreditCard + $wifeOtherLoans;
    $totalWithLiabilityWife = $totalAssetsWife - $totalToSubtractWife;
    $totalFormat = number_format($totalWithLiabilityWife);
    echo $totalFormat; ?> </td>
   

</tr>


</table>


</div>
</div>
