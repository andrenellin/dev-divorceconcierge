<meta charset="UTF-8">
<?php

/*
 * Template Name: Asset Spreadsheet Furniture
 * Version: 1.0.0
 * Description: A print-friendly template displaying the Asset Spreadsheet
 * Author: Bliksem LLC
 * Author URI: https://simplifysmallbiz.com
 * Group: Bliksem
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
  width: 100%;
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


// ONLY RELeVANT TO THIS PDF

$repeater_furniture_form_id = 65;
$repeater_furniture_search_criteria['field_filters'][] = array('key' => 'created_by', 'value' => $client_user_id);
$repeater_furniture_search_criteria['status'] = 'active';
$repeater_furniture_sorting = array('key' => 'id', 'direction' => 'ASC', 'is_numeric' => true);
$furniture_entries = GFAPI::get_entries($repeater_furniture_form_id, $repeater_furniture_search_criteria);
$count_furniture_entries = count($furniture_entries);
$furniture = array();

for ($i = 0; $i < $count_furniture_entries; $i++) {
    $furniture[$i]['asset_description'] = $furniture_entries[$i]['1'];
    $furniture[$i]['location'] = $furniture_entries[$i]['2'];
    $furniture[$i]['item_value'] = $furniture_entries[$i]['3'];
    $furniture[$i]['awarded_to'] = $furniture_entries[$i]['5'];

    // echo '<pre>';
    // echo 'CHILDREN<br>';
    // print_r($children[$i]);
    // echo '<br></pre>';
}

/* VARIABLES END
 *********************************************************************************************************** */
?>

<bookmark content="Asset Spreadsheet Furniture" />

<div class = "container">
<div class = "paragraph"> HOUSEHOLD ITEMS
    </div>



    </div>

<div class = "container">
<div class = "paragraphlefttable">

<table>
  <tr>
  	<th>Item No. </th>
    <th>Item Description</th>
    <th>Location</th>
    <th>Value</th>
    <th>Awarded to</th>
  </tr>


 <?php
for ($i = 0; $i < $count_furniture_entries; $i++) {?>
   <tr>
   <td> <?php echo $i + 1 ?>. </td>
    <td><?php echo $furniture[$i]['asset_description']; ?></td>
     <td><?php echo $furniture[$i]['location']; ?></td>
      <td><?php echo $furniture[$i]['item_value']; ?></td>
         <td><?php echo $furniture[$i]['awarded_to']; ?></td>
    </tr>

  <?php }?>
 
</table>

<!---- RIGHT TABLE ------>

