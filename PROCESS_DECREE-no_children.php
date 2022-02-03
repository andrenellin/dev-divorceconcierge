<meta charset="UTF-8">
<?php

/*
 * Template Name: Final Decree Of Divorce It's Simple No Children
 * Version: 1.0.1
 * Description: A print-friendly template displaying the final decree of divorce
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
  list-style-position: outside;
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
  font-size: 10pt;
}

.image-standing_order {
  height: 255mm;
}

.indent-paragraph {
  text-indent: 10.5mm;
   line-height: 150%;
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
  line-height: 150%;
}

.section_content {
  margin-bottom: 5mm;
}
.text_align_left {
  text-align: left;
}

.text_align_center {
  text-align: center;
}

.text_align_right {
  text-align: right;
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
<?php
$petitioner = $form_data['field'][1];
$petitionerUpper = strtoupper($petitioner);
?>
<!-- HEADER / FOOTER -->
<htmlpagefooter name="MyCustomFooter">
  <table class="footer">
    <tr class="paragraph">
      <td class="footer_left_half"><span class="bs_bold bs_text_small">AGREED FINAL DECREE OF DIVORCE 468-57162-2020/<?php echo $petitionerUpper?></span></td>
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
    
//Petitioner Details
$petitionerArray = $form_data['field'][96]; //Unprocessed Array
$petitioner = implode(" ", $petitionerArray); // Processed Array
$petitionerUpper = strtoupper($petitioner); //Make sure its in upper case


//Respondent details
$respondentArray = $form_data['field'][114];
$respondent = implode(" ", $respondentArray);
$respondentUpper = strtoupper($respondent);


//Data inputted by Paralegal
$courtnumber = $form_data['field'][90]; // Possession ordeer is effective following friday
$county = $form_data['field'][6]; //  Mother's begging 
$causenumber = $form_data['field'][7]; // Fathers begining

//Name change
$condNameChange = $form_data['field'][27];
$nameChangeParty = $form_data['field'][28];
$nameChangeTo = $form_data['field'][29];

//residency

$petionerResidencyCounty = $form_data['field'][247]; //247
$petionerResidencyState = $form_data['field'][244];

$respondentResidencyCounty = $form_data['field'][251]; 
$repsondentResidencyState = $form_data['field'][248]; 

//Assets owned

$petitionerIRA = $form_data['field'][371];
$petitionerBrokerage = $form_data['field'][377];
$petitionerVehicle = $form_data['field'][383];
$petitionerBusiness = $form_data['field'][389];
$petitionerMembership = $form_data['field'][395];
$petitionerHealthSaving = $form_data['field'][401];
$petitionerDebt = $form_data['field'][408];
$petitionerIRSDebt = $form_data['field'][414];
$petitionerCreditCard = $form_data['field'][420];
$bothCreditCardClosed = $form_data['field'][426];
$petitionerVehicleLoan = $form_data['field'][430];
$petitionerEmployeeBenefit = $form_data['field'][436];
$petitionerProperty = $form_data['field'][442];

$respondentIRA = $form_data['field'][373];
$respondentBrokerage = $form_data['field'][379];
$respondentVehicle = $form_data['field'][385];
$respondentBusiness = $form_data['field'][391];
$respondentMembership = $form_data['field'][397];
$respondentHealthSaving = $form_data['field'][404];
$respondentDebt = $form_data['field'][410];
$respondentIRSDebt = $form_data['field'][416];
$respondentCreditCard = $form_data['field'][422];
$respondentVehicleLoan = $form_data['field'][432];
$respondentEmployeeBenefit = $form_data['field'][438];
$respondentProperty = $form_data['field'][444];

$splitDebt = $form_data['field'][260];
$excludingCreditCard = $form_data['field'][426];

//Check if children (Not necessary but used for header)
$repeater_children_form_id = 14;
$repeater_children_search_criteria['field_filters'][] = array('key' => 'created_by', 'value' => $client_user_id);
$repeater_children_search_criteria['status'] = 'active';
$repeater_children_sorting = array('key' => 'id', 'direction' => 'ASC', 'is_numeric' => true);
$children_entries = GFAPI::get_entries($repeater_children_form_id, $repeater_children_search_criteria);
$count_children_entries = count($children_entries);
$children = array();

for ($i = 0; $i < $count_children_entries; $i++) {
    $children[$i]['first_name'] = $children_entries[$i]['2.3'];
    $children[$i]['middle_name'] = $children_entries[$i]['2.4'];
    $children[$i]['last_name'] = $children_entries[$i]['2.6'];
    if ($children[$i]['middle_name'] != '') {
        $children[$i]['full_name'] = $children[$i]['first_name'] . ' ' . $children[$i]['middle_name'] . ' ' . $children[$i]['last_name'];
    } else {
        $children[$i]['full_name'] = $children[$i]['first_name'] . ' ' . $children[$i]['last_name'];
    }
    $children[$i]['gender'] = $children_entries[$i]['3'];
    $children[$i]['birth_date_raw'] = $children_entries[$i]['4'];
    $children_birth_date_string = strtotime($children[$i]['birth_date_raw']);
    $children[$i]['birth_date'] = date('F j, Y', $children_birth_date_string);
    $children[$i]['has_dl'] = $children_entries[$i]['6'];
    // echo '<pre>';
    // echo 'CHILDREN<br>';
    // print_r($children[$i]);
    // echo '<br></pre>';
}


$childrenOver18 = $form_data['field'][270];

// MEMBERSHIP TYPE FOR SIGNATURE
$membership_type = $form_data['field'][31]; // [31.Plan] => DYW

//representation

$respondentAttorney =  $form_data['field'][235];

// SIGNATURE DETAILS FOR DYW (PRO SE )
$petitioner_street_1 = $form_data['field'][38]['street']; // [38.Petitioner Address][street]
$petitioner_street_2 = $form_data['field'][38]['street2']; // [38.Petitioner Address][street2]
$petitioner_city = $form_data['field'][38]['city']; // [38.Petitioner Address][city]
$petitioner_state = $form_data['field'][38]['state']; // [38.Petitioner Address][state]
$petitioner_zip = $form_data['field'][38]['zip']; // [38.Petitioner Address][zip]
$petitioner_phone = $form_data['field'][39]; // [39.Petitioner Phone]
$petitioner_email = $form_data['field'][40]; // [40.Petitioner Email]


//REPEATER Data

$decreeAwardsID = $form_data['field'][95]; 


$form_id = 49;
 
 $search_criteria['status'] = 'active';
 $search_criteria['field_filters'][] = array( 'key' => 'id', 'value' => $decreeAwardsID);
 $sort_field = ('id');
 $sorting = array( 'key' => $sort_field, 'direction' => 'DESC', 'is_numeric' => true );
 $entries = GFAPI::get_entries($form_id, $search_criteria, $sorting);

// $entryData = array_count_values($entries);


 $iraPetitionerRepeaterID = $entries[0][2];
 $brokeragePetitionerID =  $entries[0][10];
 $vehiclesPetitionerID =  $entries[0][17];
 $businessesPetitionerID =  $entries[0][24];
 $membershipPetitionerID =  $entries[0][31];
 $healthsavingsPetitionerID =  $entries[0][38];
 $debtsPetitionerID =  $entries[0][45];
 $irsDebtsPetitionerID =  $entries[0][52];
 $creditCardsPetitionerID =  $entries[0][59];
 $creditCardsClosedBothID =  $entries[0][73];
 $vehicleLoansPetitionerID =  $entries[0][66];
 $employeeBenefitsPetitionerID =  $entries[0][80];
 
 $iraRespondentRepeaterID = $entries[0][5];
 $brokerageRespondentID =  $entries[0][13];
 $vehiclesRespondentID =  $entries[0][20];
 $businessesRespondentID =  $entries[0][27];
 $membershipRespondentID =  $entries[0][34];
 $healthsavingsRespondentID =  $entries[0][41];
 $debtsRespondentID =  $entries[0][48];
 $irsDebtsRespondentID =  $entries[0][55];
 $creditCardsRespondentID =  $entries[0][62];
 $vehicleLoansRespondentID =  $entries[0][69];
 $employeeBenefitsRespondentID =  $entries[0][83];

 //IRA
 $form_idira = 4;
 $search_criteria1['status'] = 'active';
 $search_criteria1['field_filters'][] = array( 'key' => 'id', 'value' => $iraPetitionerRepeaterID);
 $sort_field1 = ('id');
 $sorting1 = array( 'key' => $sort_field1, 'direction' => 'DESC', 'is_numeric' => true );
 $iraPetitionerArrays = GFAPI::get_entries($form_idira, $search_criteria1, $sorting1);

  $count_iraPetitionerArrays_entries = count($iraPetitionerArrays);
$iraPetitionerArray = array();

 for ($i = 0; $i < $count_iraPetitionerArrays_entries; $i++) {

    $iraPetitionerArray[$i]['Name'] =  $iraPetitionerArrays[$i][1];
    $iraPetitionerArray[$i]['Debt'] =  $iraPetitionerArrays[$i][24];


 }



 $search_criteria2['status'] = 'active';
 $search_criteria2['field_filters'][] = array( 'key' => 'id', 'value' => $iraRespondentRepeaterID);
 $sort_field2 = ('id');
 $sorting = array( 'key' => $sort_field2, 'direction' => 'DESC', 'is_numeric' => true );
 $iraRespondentArrays = GFAPI::get_entries($form_idira, $search_criteria2, $sorting2);
 $count_iraRespondentArrays_entries = count($iraRespondentArrays);
$iraRespondentArray = array();


 for ($i = 0; $i < $count_iraRespondentArrays_entries; $i++) {

    $iraRespondentArray[$i]['Name'] =  $iraRespondentArrays[$i][1];
    $iraRespondentArray[$i]['Debt'] =  $iraRespondentArrays[$i][24];


 }



 //BROKERAGE 

 $form_idBrokerage = 79;
 $search_criteria3['status'] = 'active';
 $search_criteria3['field_filters'][] = array( 'key' => 'id', 'value' => $brokeragePetitionerID);
 $sort_field3 = ('id');
 $sorting3 = array( 'key' => $sort_field3, 'direction' => 'DESC', 'is_numeric' => true );
 $brokeragePetitionerArrays = GFAPI::get_entries($form_idBrokerage, $search_criteria3, $sorting3);
  $count_brokeragePetitionerArrays_entries = count($brokeragePetitionerArrays);
$brokeragePetitionerArray = array();


 for ($i = 0; $i < $count_brokeragePetitionerArrays_entries; $i++) {

    $brokeragePetitionerArray[$i]['Name'] =  $brokeragePetitionerArrays[$i][1];


 }



 $search_criteria4['status'] = 'active';
 $search_criteria4['field_filters'][] = array( 'key' => 'id', 'value' => $brokerageRespondentID);
 $sort_field4 = ('id');
 $sorting = array( 'key' => $sort_field4, 'direction' => 'DESC', 'is_numeric' => true );
 $brokerageRespondentArrays = GFAPI::get_entries($form_idBrokerage, $search_criteria4, $sorting4);
 $count_brokerageRespondentArrays_entries = count($brokerageRespondentArrays);
$brokerageRespondentArray = array();


 for ($i = 0; $i < $count_brokerageRespondentArrays_entries; $i++) {

    $brokerageRespondentArray[$i]['Name'] =  $brokerageRespondentArrays[$i][1];


 }


 //BUSINESS 

 $form_idBusiness = 8;
 $search_criteria5['status'] = 'active';
 $search_criteria5['field_filters'][] = array( 'key' => 'id', 'value' => $businessesPetitionerID);
 $sort_field5 = ('id');
 $sorting5 = array( 'key' => $sort_field5, 'direction' => 'DESC', 'is_numeric' => true );
 $businessPetitionerArrays = GFAPI::get_entries($form_idBusiness, $search_criteria5, $sorting5);
 $count_businessPetitionerArrays_entries = count($businessPetitionerArrays);
$businessPetitionerArray = array();


 for ($i = 0; $i < $count_businessPetitionerArrays_entries; $i++) {

    $businessPetitionerArray[$i]['Name'] =  $businessPetitionerArrays[$i][1];
    $businessPetitionerArray[$i]['Entity'] =  $businessPetitionerArrays[$i][6];


 }

 $search_criteria6['status'] = 'active';
 $search_criteria6['field_filters'][] = array( 'key' => 'id', 'value' => $businessesRespondentID);
 $sort_field6 = ('id');
 $sorting = array( 'key' => $sort_field6, 'direction' => 'DESC', 'is_numeric' => true );
 $businessRespondentArrays = GFAPI::get_entries($form_idBusiness, $search_criteria6, $sorting6);
  $count_businessRespondentArrays_entries = count($businessRespondentArrays);
$businessRespondentArray = array();


 for ($i = 0; $i < $count_businessRespondentArrays_entries; $i++) {

    $businessRespondentArray[$i]['Name'] =  $businessRespondentArrays[$i][1];
    $businessRespondentArray[$i]['Entity'] =  $businessRespondentArrays[$i][6];


 }


 //CREDIT CARDS 

  $form_idcreditCard = 81;
 $search_criteria7['status'] = 'active';
 $search_criteria7['field_filters'][] = array( 'key' => 'id', 'value' => $creditCardsPetitionerID);
 $sort_field7 = ('id');
 $sorting7 = array( 'key' => $sort_field7, 'direction' => 'DESC', 'is_numeric' => true );
 $creditCardPetitionerArrays = GFAPI::get_entries($form_idcreditCard, $search_criteria7, $sorting7);
   $count_creditCardPetitionerArrays_entries = count($creditCardPetitionerArrays);
$creditCardPetitionerArray = array();


 for ($i = 0; $i < $count_creditCardPetitionerArrays_entries; $i++) {

    $creditCardPetitionerArray[$i]['Account_Number'] =  $creditCardPetitionerArrays[$i][1];
    $creditCardPetitionerArray[$i]['DateOfReturn'] =  $creditCardPetitionerArrays[$i][2];


 }

 $search_criteria8['status'] = 'active';
 $search_criteria8['field_filters'][] = array( 'key' => 'id', 'value' => $creditCardsRespondentID);
 $sort_field8 = ('id');
 $sorting = array( 'key' => $sort_field8, 'direction' => 'DESC', 'is_numeric' => true );
 $creditCardRespondentArrays = GFAPI::get_entries($form_idcreditCard, $search_criteria8, $sorting8);
   $count_creditCardRespondentArrays_entries = count($creditCardRespondentArrays);
$creditCardRespondentArray = array();


 for ($i = 0; $i < $count_creditCardRespondentArrays_entries; $i++) {

    $creditCardRespondentArray[$i]['Account_Number'] =  $creditCardRespondentArrays[$i][1];
    $creditCardRespondentArray[$i]['DateOfReturn'] =  $creditCardRespondentArrays[$i][2];


 }

 //DEBTS

 $form_iddebt = 11;
 $search_criteria9['status'] = 'active';
 $search_criteria9['field_filters'][] = array( 'key' => 'id', 'value' => $debtsPetitionerID);
 $sort_field9 = ('id');
 $sorting9 = array( 'key' => $sort_field9, 'direction' => 'DESC', 'is_numeric' => true );
 $debtPetitionerArrays = GFAPI::get_entries($form_iddebt, $search_criteria9, $sorting9);
    $count_debtPetitionerArrays_entries = count($debtPetitionerArrays);
$debtPetitionerArray = array();


 for ($i = 0; $i < $count_debtPetitionerArrays_entries; $i++) {

    $debtPetitionerArray[$i]['Payee'] =  $debtPetitionerArrays[$i][1];
    $debtPetitionerArray[$i]['Account_Number'] =  $debtPetitionerArrays[$i][6];
    $debtPetitionerArray[$i]['NoteHolder'] =  $debtPetitionerArrays[$i][8];
    $debtPetitionerArray[$i]['SecuredOrUnsecured'] =  $debtPetitionerArrays[$i][19];
    $debtPetitionerArray[$i]['SecuredAsset'] =  $debtPetitionerArrays[$i][21];


 }

 $search_criteria10['status'] = 'active';
 $search_criteria10['field_filters'][] = array( 'key' => 'id', 'value' => $debtsRespondentID);
 $sort_field10 = ('id');
 $sorting = array( 'key' => $sort_field10, 'direction' => 'DESC', 'is_numeric' => true );
 $debtRespondentArrays = GFAPI::get_entries($form_iddebt, $search_criteria10, $sorting10);
 $count_debtRespondentArrays_entries = count($debtRespondentArrays);
 $debtRespondentArray = array();


 for ($i = 0; $i < $count_debtRespondentArrays_entries; $i++) {

    $debtRespondentArray[$i]['Payee'] =  $debtRespondentArrays[$i][1];
    $debtRespondentArray[$i]['Account_Number'] =  $debtRespondentArrays[$i][6];
    $debtRespondentArray[$i]['NoteHolder'] =  $debtRespondentArrays[$i][8];
    $debtRespondentArray[$i]['SecuredOrUnsecured'] =  $debtRespondentArrays[$i][19];
    $debtRespondentArray[$i]['SecuredAsset'] =  $debtRespondentArrays[$i][21];



 }





 //HEALTH AND MEDICAL SAVINGS

 $form_idhealthMedical = 10;
 $search_criteria11['status'] = 'active';
 $search_criteria11['field_filters'][] = array( 'key' => 'id', 'value' => $healthsavingsPetitionerID);
 $sort_field11 = ('id');
 $sorting11 = array( 'key' => $sort_field11, 'direction' => 'DESC', 'is_numeric' => true );
 $healthMedicalPetitionerArrays = GFAPI::get_entries($form_idhealthMedical, $search_criteria11, $sorting11);
  $count_healthMedicalPetitionerArrays_entries = count($healthMedicalPetitionerArrays);
 $healthMedicalPetitionerArray = array();


 for ($i = 0; $i < $count_healthMedicalPetitionerArrays_entries; $i++) {

    $healthMedicalPetitionerArray[$i]['Name'] =  $healthMedicalPetitionerArrays[$i][1];
    $healthMedicalPetitionerArray[$i]['Value'] =  $healthMedicalPetitionerArrays[$i][7];



 }


 $search_criteria12['status'] = 'active';
 $search_criteria12['field_filters'][] = array( 'key' => 'id', 'value' => $healthsavingsRespondentID);
 $sort_field12 = ('id');
 $sorting = array( 'key' => $sort_field12, 'direction' => 'DESC', 'is_numeric' => true );
 $healthMedicalRespondentArrays = GFAPI::get_entries($form_idhealthMedical, $search_criteria12, $sorting12);
  $count_healthMedicalRespondentArrays_entries = count($healthMedicalRespondentArrays);
 $healthMedicalRespondentArray = array();


 for ($i = 0; $i < $count_healthMedicalRespondentArrays_entries; $i++) {

    $healthMedicalRespondentArray[$i]['Name'] =  $healthMedicalRespondentArrays[$i][1];
    $healthMedicalRespondentArray[$i]['Value'] =  $healthMedicalRespondentArrays[$i][7];



 }


  //IRS DEBT

 $form_idirsDebt = 80;
 $search_criteria13['status'] = 'active';
 $search_criteria13['field_filters'][] = array( 'key' => 'id', 'value' => $irsDebtsPetitionerID);
 $sort_field13 = ('id');
 $sorting13 = array( 'key' => $sort_field13, 'direction' => 'DESC', 'is_numeric' => true );
 $irsDebtPetitionerArrays = GFAPI::get_entries($form_idirsDebt, $search_criteria13, $sorting13);
   $count_irsDebtPetitionerArrays_entries = count($irsDebtPetitionerArrays);
 $irsDebtPetitionerArray = array();


 for ($i = 0; $i < $count_irsDebtPetitionerArrays_entries; $i++) {

    $irsDebtPetitionerArray[$i]['Year'] =  $irsDebtPetitionerArrays[$i][1];
    $irsDebtPetitionerArray[$i]['Amount'] =  $irsDebtPetitionerArrays[$i][7];



 }

 $search_criteria14['status'] = 'active';
 $search_criteria14['field_filters'][] = array( 'key' => 'id', 'value' => $irsDebtsRespondentID);
 $sort_field14 = ('id');
 $sorting = array( 'key' => $sort_field14, 'direction' => 'DESC', 'is_numeric' => true );
 $irsDebtRespondentArrays = GFAPI::get_entries($form_idirsDebt, $search_criteria14, $sorting14);
   $count_irsDebtRespondentArrays_entries = count($irsDebtRespondentArrays);
 $irsDebtRespondentArray = array();


 for ($i = 0; $i < $count_irsDebtRespondentArrays_entries; $i++) {

    $irsDebtRespondentArray[$i]['Year'] =  $irsDebtRespondentArrays[$i][1];
    $irsDebtRespondentArray[$i]['Amount'] =  $irsDebtRespondentArrays[$i][3];



 }


   //CREDIT CARDS CLOSED

 $form_idcreditCardClosed = 82;
 $search_criteria15['status'] = 'active';
 $search_criteria15['field_filters'][] = array( 'key' => 'id', 'value' => $creditCardsClosedBothID);
 $sort_field15 = ('id');
 $sorting15 = array( 'key' => $sort_field15, 'direction' => 'DESC', 'is_numeric' => true );
 $creditCardClosedPetitionerArrays = GFAPI::get_entries($form_idcreditCardClosed, $search_criteria15, $sorting15);
    $count_creditCardClosedRespondentArrays_entries = count($creditCardClosedRespondentArrays);
 $creditCardClosedPetitionerArray = array();


 for ($i = 0; $i < $count_creditCardClosedRespondentArrays_entries; $i++) {

    $creditCardClosedPetitionerArray[$i]['Account_Number'] =  $creditCardClosedPetitionerArrays[$i][1];



 }




 //MEMBERSHIPS

 $form_idmembership = 9;
 $search_criteria16['status'] = 'active';
 $search_criteria16['field_filters'][] = array( 'key' => 'id', 'value' => $membershipsPetitionerID);
 $sort_field16 = ('id');
 $sorting16 = array( 'key' => $sort_field16, 'direction' => 'DESC', 'is_numeric' => true );
 $membershipPetitionerArrays = GFAPI::get_entries($form_idmembership, $search_criteria16, $sorting16);
     $count_membershipPetitionerArrays_entries = count($membershipPetitionerArrays);
 $membershipPetitionerArray = array();


 for ($i = 0; $i < $count_membershipPetitionerArrays_entries; $i++) {

    $membershipPetitionerArray[$i]['Name'] =  $membershipPetitionerArrays[$i][1];



 }


 $search_criteria17['status'] = 'active';
 $search_criteria17['field_filters'][] = array( 'key' => 'id', 'value' => $membershipsRespondentID);
 $sort_field17 = ('id');
 $sorting = array( 'key' => $sort_field17, 'direction' => 'DESC', 'is_numeric' => true );
 $membershipRespondentArrays = GFAPI::get_entries($form_idmembership, $search_criteria17, $sorting17);
     $count_membershipRespondentArrays_entries = count($membershipRespondentArrays);
 $membershipRespondentArray = array();


 for ($i = 0; $i < $count_membershipRespondentArrays_entries; $i++) {

    $membershipRespondentArray[$i]['Name'] =  $membershipRespondentArrays[$i][1];



 }



 
 //VEHICLES

 $form_idvehicle = 7;
 $search_criteria18['status'] = 'active';
 $search_criteria18['field_filters'][] = array( 'key' => 'id', 'value' => $vehiclesPetitionerID);
 $sort_field18 = ('id');
 $sorting18 = array( 'key' => $sort_field18, 'direction' => 'DESC', 'is_numeric' => true );
 $vehiclePetitionerArrays = GFAPI::get_entries($form_idvehicle, $search_criteria18, $sorting18);
 $count_vehiclePetitionerArrays_entries = count($vehiclePetitionerArrays);
 $vehiclePetitionerArray = array();


 for ($i = 0; $i < $count_vehiclePetitionerArrays_entries; $i++) {

    $vehiclePetitionerArray[$i]['Make'] =  $vehiclePetitionerArrays[$i][1];
    $vehiclePetitionerArray[$i]['Model'] =  $vehiclePetitionerArrays[$i][6];
    $vehiclePetitionerArray[$i]['Year'] =  $vehiclePetitionerArrays[$i][13];
    $vehiclePetitionerArray[$i]['VIN1'] =  $vehiclePetitionerArrays[$i][9];
    $vehiclePetitionerArray[$i]['VIN2'] =  $vehiclePetitionerArrays[$i][17];
    $vehiclePetitionerArray[$i]['isNote'] =  $vehiclePetitionerArrays[$i][11];
    $vehiclePetitionerArray[$i]['NoteHolderName'] =  $vehiclePetitionerArrays[$i][10];

 }


 $search_criteria19['status'] = 'active';
 $search_criteria19['field_filters'][] = array( 'key' => 'id', 'value' => $vehiclesRespondentID);
 $sort_field19 = ('id');
 $sorting = array( 'key' => $sort_field19, 'direction' => 'DESC', 'is_numeric' => true );
 $vehicleRespondentArrays = GFAPI::get_entries($form_idvehicle, $search_criteria19, $sorting19);
 $count_vehicleRespondentArrays_entries = count($vehicleRespondentArrays);
 $vehicleRespondentArray = array();


 for ($i = 0; $i < $count_vehicleRespondentArrays_entries; $i++) {

    $vehicleRespondentArray[$i]['Make'] =  $vehicleRespondentArrays[$i][1];
    $vehicleRespondentArray[$i]['Model'] =  $vehicleRespondentArrays[$i][6];
    $vehicleRespondentArray[$i]['Year'] =  $vehicleRespondentArrays[$i][13];
    $vehicleRespondentArray[$i]['VIN1'] =  $vehicleRespondentArrays[$i][9];
    $vehicleRespondentArray[$i]['VIN2'] =  $vehicleRespondentArrays[$i][17];
    $vehicleRespondentArray[$i]['isNote'] =  $vehicleRespondentArrays[$i][11];
    $vehicleRespondentArray[$i]['NoteHolderName'] =  $vehicleRespondentArrays[$i][10];



 }




  //VEHICLE LOANS

 $form_idvehicleLoan = 83;
 $search_criteria20['status'] = 'active';
 $search_criteria20['field_filters'][] = array( 'key' => 'id', 'value' => $vehicleLoansPetitionerID);
 $sort_field20 = ('id');
 $sorting20 = array( 'key' => $sort_field20, 'direction' => 'DESC', 'is_numeric' => true );
 $vehicleLoanLoanLoanPetitionerArray = GFAPI::get_entries($form_idvehicleLoanLoanLoan, $search_criteria20, $sorting20);
  $count_vehicleLoanLoanPetitionerArrays_entries = count($vehicleLoanLoanPetitionerArrays);
 $vehicleLoanLoanPetitionerArray = array();


 for ($i = 0; $i < $count_vehicleLoanLoanPetitionerArrays_entries; $i++) {

    $vehicleLoanPetitionerArray[$i]['Make'] =  $vehicleLoanPetitionerArrays[$i][3];
    $vehicleLoanPetitionerArray[$i]['Model'] =  $vehicleLoanPetitionerArrays[$i][4];
    $vehicleLoanPetitionerArray[$i]['Year'] =  $vehicleLoanPetitionerArrays[$i][2];
    $vehicleLoanPetitionerArray[$i]['NoteHolderName'] =  $vehicleLoanPetitionerArrays[$i][1];



 }


 $search_criteria21['status'] = 'active';
 $search_criteria21['field_filters'][] = array( 'key' => 'id', 'value' => $vehicleLoansRespondentID);
 $sort_field21 = ('id');
 $sorting = array( 'key' => $sort_field21, 'direction' => 'DESC', 'is_numeric' => true );
 $vehicleLoanLoanRespondentArray = GFAPI::get_entries($form_idvehicleLoanLoan, $search_criteria21, $sorting21);
  $count_vehicleLoanRespondentArrays_entries = count($vehicleLoanRespondentArrays);
 $vehicleLoanRespondentArray = array();


 for ($i = 0; $i < $count_vehicleLoanRespondentArrays_entries; $i++) {

    $vehicleLoanRespondentArray[$i]['Make'] =  $vehicleLoanRespondentArrays[$i][3];
    $vehicleLoanRespondentArray[$i]['Model'] =  $vehicleLoanRespondentArrays[$i][4];
    $vehicleLoanRespondentArray[$i]['Year'] =  $vehicleLoanRespondentArrays[$i][2];
    $vehicleLoanRespondentArray[$i]['NoteHolderName'] =  $vehicleLoanRespondentArrays[$i][1];




 }












/* VARIABLES END
 *********************************************************************************************************** */
?>
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!-- PAGE 1 -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

<bookmark content="Final Decree Of Divorce" />

<!-- --------------------------------------------------------------------------------------------------------------- -->
<div class="text_align_center bs_bold">NO.__________________________________________</div>
<br>



<!-- INTRO HEADER -->
<table class="INTRO">
  <tr class="paragraph">
    <td class="column_third_half"><span class="bs_bold">IN THE MATTER OF</span></td>
    <td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>
    <td class="column_right_third"><span class="bs_bold">IN THE DISTRICT OF</span></td>
  </tr>
  <tr class="paragraph">
    <td class="column_third_half"><span class="bs_bold">IN THE MARRIAGE OF</span></td>
    <td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>
    <td class="column_right_third"><span class="bs_bold">&nbsp;</span></td>
  </tr>
  <tr class="paragraph">
    <td class="column_third_half"><span class="bs_bold">&nbsp;</span></td>
    <td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>
    <td class="column_right_third"><span class="bs_bold">&nbsp;</span></td>
  </tr>
  <tr class="paragraph">
    <td class="column_third_half"><span class="bs_bold"><?php echo $petitionerUpper ; ?></span></td>
    <td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>
    <td class="column_right_third"><span class="bs_bold"> _______ JUDICIAL DISTRICT</span></td>
  </tr>
  <tr class="paragraph">
    <td class="column_third_half"><span class="bs_bold">AND</span></td>
    <td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>
    <td class="column_right_third"><span class="bs_bold">&nbsp;</span></td>
  </tr>
  <tr class="paragraph">
    <td class="column_third_half"><span class="bs_bold"><?php echo $respondentUpper ; ?></span></td>
    <td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>
    
    <?php if($count_children_entries === 0){

    echo    ' <td class="column_right_third"><span class="bs_bold">' . $county .' COUNTY, TEXAS</span></td>';

    }else if($count_children_entries > 0){

      echo  '<td class="column_right_third"><span class="bs_bold">&nbsp;</span></td>';


    } ?>
    
  </tr>



    <?php if($count_children_entries > 1){
    echo '<tr class="paragraph">
    <td class="column_third_half"><span class="bs_bold">AND IN THE INTEREST OF</span></td>
    <td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>
    <td class="column_right_third"><span class="bs_bold"></span></td>
  </tr>';
  } ?>


  
  <?php if($count_children_entries > 1)
    {
    for ($i = 0; $i < $count_children_entries -1; $i++) {

    echo'<tr class="paragraph"> 
         <td class="column_third_half"><span class="bs_bold">'  . strtoupper($children[$i]['full_name']) . ", <br>" . 
   
    
    '</td>' . '<td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>
    </tr>';
    }

    $lastChild = $count_children_entries -1;
    echo'<tr class="paragraph"> 
         <td class="column_third_half"><span class="bs_bold"> AND '  . strtoupper($children[$lastChild]['full_name']) . ", CHILDREN" . 
   
    
    '</td>' . '<td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>
    </tr>';
    
     

    
    
    
     echo "CHILDREN " .
   ' <td class="column_right_third"><span class="bs_bold"> ' . $county . ' COUNTY, TEXAS</span></td>';
    }else if($count_children_entries <= 1){for ($i = 0; $i < $count_children_entries; $i++) {
    echo '<tr class="paragraph"> 
          <td class="column_third_half"><span class="bs_bold">' . strtoupper($children[$i]['full_name'])
    . ', A CHILD </td>
    <td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>
    <td class="column_right_third"><span class="bs_bold">' . $county .' COUNTY, TEXAS</span></td>
    </tr>';
    
    } 
    }
    else if ($count_children_entries === 2){

    echo '<tr class="paragraph"> 
          <td class="column_third_half"><span class="bs_bold">' . strtoupper($children[0]['full_name']) . ", <br> AND " . strtoupper($children[1]['full_name']) 
    . ', CHILDREN</td>
    <td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>
    <td class="column_right_third"><span class="bs_bold">' . $county .' COUNTY, TEXAS</span></td>
    </tr>';


    }
    
    ?> 
 
</table>
<!--- title ---->
<div class = "title"><span class="bs_bold text_align_center"> <br> FINAL DECREE OF DIVORCE </span></div>

<!--- Opening paragraphs ---->
    <div class = "indent-paragraph"> On this date the Court heard this case.
</div>
    <div class ="paragraph bs_italic"> Appearences </div>
</div>
    <div class = "indent-paragraph"> Petitioner, <?php echo $petitioner ?>, did not appear in person but has agreed to the terms of this order as evidenced by Petitioner's signature below.
</div>
    <div class = "indent-paragraph">Respondent, <?php echo $respondent ?>, has made a general appearance and has agreed to the terms of this judgment to the extent permitted by law, as evidenced by Respondent's signature below.
</div>
    <div class ="paragraph bs_italic"> Record </div>
</div>
    <div class = "indent-paragraph">The making of a record of testimony was waived by the parties with the consent of the Court.
</div>
    <div class ="paragraph bs_italic"> Jurisdiction and Domicile </div>
</div>
    <div class = "indent-paragraph">The Court finds that the pleadings of Petitioner are in due form and contain all the allegations, information, and prerequisites required by law.  The Court, after receiving evidence, finds that it has jurisdiction of this case and of all the parties and that at least sixty days have elapsed since the date the suit was filed.
</div>
    <div class = "indent-paragraph">The Court further finds that, at the time this suit was filed, 
    
    <?php if ($petionerResidencyCounty == "3" OR "2" && $petionerResidencyState == "2"){

    echo "Petitioner had been a domiciliary of Texas for the preceding six-month period and a resident of the county in which this suit was filed for the preceding ninety-day period.  All persons entitled to citation were properly cited.";

    }else if ($respondentResidencyCounty == "3" OR "2" && $respondentResidencyState == "2"){
    echo "Respondent had been a domiciliary of Texas for the preceding six-month period and a resident of the county in which this suit was filed for the preceding ninety-day period.  All persons entitled to citation were properly cited.";

}
?>
</div>

  <div class ="paragraph bs_italic"> Jury </div>
</div>
    <div class = "indent-paragraph">A jury was waived, and questions of fact and of law were submitted to the Court.
</div>
    <div class ="paragraph bs_italic"> Agreement of Parties
</div>
    <div class = "indent-paragraph"> The Court finds that the parties have entered into a written agreement as contained in this decree by virtue of having approved this decree as to both form and substance.  To the extent permitted by law, the parties stipulate the agreement is enforceable as a contract.  The Court approves the agreement of the parties as contained in this Final Decree of Divorce.
</div>
    <div class ="paragraph bs_italic"> Divorce
</div>
    <div class = "indent-paragraph">IT IS ORDERED AND DECREED that <?php echo $petitioner ?>, Petitioner, and <?php echo $respondent ?>, Respondent, are divorced and that the marriage between them is dissolved on the ground of insupportability.
</div>

<!---- if there is no children under 18 this will happen ---->
 <div class = "indent-paragraph"><?php if ($childrenOver18 == "Yes"){
    
   echo "<b><i> Child of the Marriage </i></b> " . "<br>" ." The Court finds that there is no child of the marriage of Petitioner and Respondent now under eighteen years of age or otherwise entitled to support and that none is expected.";
}

//if there is no children this will happen
 else if ($childrenOver18 == "No"){
    echo "<b><i> Child of the Marriage </i></b> " . "<br>" ."The Court finds that there is no child of the marriage of Petitioner and Respondent and that none is expected.";
}?></div>

<!---- if there is children then this will happen ------>
  
<!--------------- ------>


<div class ="paragraph bs_italic"> Division of Marital Estate </div>
    </div>
<div class = "indent-paragraph"> The Court finds that the following is a just and right division of the parties' marital estate, having due regard for the rights of each party.
    </div>
<div class = "indent-paragraph"> Property to Petitioner
    </div>
<div class = "indent-paragraph">IT IS ORDERED AND DECREED that Petitioner, <?php echo $petitionerUpper ?>, is awarded the following as her sole and separate property, and Respondent, <?php echo $respondentUpper ?>, is divested of all right, title, interest, and claim in and to that property:
    </div>
<div class = "indent-paragraph">P-2.	All household furniture, furnishings, fixtures, goods, art objects, collectibles, appliances, and equipment in the possession of Petitioner or subject to Petitioner�s sole control.
    </div>
<div class = "indent-paragraph">P-3.	All clothing, jewelry, and other personal effects in the possession of Petitioner or subject to Petitioner�s sole control.
    </div>
<div class = "indent-paragraph">P-4.	All sums of cash in the possession of Petitioner or subject to Petitioner�s sole control, including funds on deposit, together with accrued but unpaid interest, in banks, savings institutions, or other financial institutions, which accounts stand in Petitioner's sole name or from which Petitioner has the sole right to withdraw funds or which are subject to Petitioner's sole control.
    </div>
    <!--- ASSUMING THAT IF THEY HAVE NONE, IT DOES NOT APPEAR AT ALL ---->


<?php $pCount = 5;
    
    if($petitionerIRA == "Yes"){

    echo '<div class = "indent-paragraph"> P-'.$pCount.'  All individual retirement accounts, simplified employee pensions, annuities, and variable annuity life insurance benefits in Petitioner&#39;s name. </div>';

    $pCount = $pCount +1;
    }else if ($petitionerEmployeeBenefit == "Yes" ){

    echo '<div class = "indent-paragraph"> P-'.$pCount.' All sums, whether matured or unmatured, accrued or unaccrued, vested or otherwise, together with all increases thereof, the proceeds therefrom, and any other rights related to any profit-sharing plan, retirement plan, Keogh plan, pension plan, employee stock option plan, 401(k) plan, employee savings plan, accrued unpaid bonuses, disability plan, or other benefits existing by reason of Petitioner&#39;s past, present, or future employment. 
    </div>';

        $pCount = $pCount +1;
    }

    echo '<div class = "indent-paragraph"> P-'.$pCount.' All policies of life insurance (including cash values) insuring Petitioner&#39;s life. </div>';

        $pCount = $pCount +1;
    if ($petitionerBrokerage == "Yes" ){

    echo '<div class = "indent-paragraph"> P-'.$pCount.' All brokerage accounts, stocks, bonds, mutual funds, and securities registered in Petitioner&#39;s name, together with all dividends, splits, and other rights and privileges in connection with them.
 </div>';

        $pCount = $pCount +1;
    }else if ($petitionerVehicle == "Yes" ){

   for ($i = 0; $i < $count_vehiclePetitionerArrays_entries; $i++) {


    echo '<div class = "indent-paragraph"> P-'.$pCount.' The ' . $vehiclePetitionerArray[$i]['Year'] . ' ' .  $vehiclePetitionerArray[$i]['Make']. ' ' . $vehiclePetitionerArray[$i]['Model'] . ' motor vehicle, vehicle identification number ' . $vehiclePetitionerArray[$i]['VIN1'] . ', together with all prepaid insurance, keys, and title documents. </div>'
;
        $pCount = $pCount +1;

        }
    }else if ($petitionerBusiness == "Yes" ){
       for ($i = 0; $i < $count_businessPetitionerArrays_entries; $i++) {


    echo '<div class = "indent-paragraph"> P-'.$pCount.' The ' . $businessPetitionerArray[$i]['Entity'] . ' known as ' . $businessPetitionerArray[$i]['Name']. ', including but not limited to its name, goodwill, receivables, claims, and the following furniture, fixtures, machinery, equipment, inventory, accounts, goods, supplies, and personal property used in connection with the operation of the business.
 </div>';

        $pCount = $pCount +1;
    
        }
    }else if ($petitionerMembership == "Yes" ){

           for ($i = 0; $i < $count_membershipPetitionerArrays_entries; $i++) {


    echo '<div class = "indent-paragraph"> P-'.$pCount.'  A 100% interest in the membership in ' . $membershipPetitionerArray[$i]['Name'] .'

 </div>';

        $pCount = $pCount +1;
    }
    
    }else if ($petitionerHealthSaving == "Yes" ){

     for ($i = 0; $i < $count_healthMedicalPetitionerArrays_entries; $i++) {
     

    echo '<div class = "indent-paragraph"> P-'.$pCount.' A 100% interest in the ' . $healthMedicalPetitionerArray[$i]['Name'] . '
 </div>';

        $pCount = $pCount +1;
    }

    }
?>

<div class = "indent-paragraph"> <i> Property to Respondent </i>
    </div>

<div class = "indent-paragraph"> IT IS ORDERED AND DECREED that Respondent, <?php echo $respondentUpper ?>, is awarded the following as his sole and separate property, and Petitioner, <?php echo $petitionerUpper ?> , is divested of all right, title, interest, and claim in and to that property:
    </div>

<div class = "indent-paragraph">R-2.	All household furniture, furnishings, fixtures, goods, art objects, collectibles, appliances, and equipment in the possession of Respondent or subject to Respondent�s sole control.
    </div>
<div class = "indent-paragraph">R-3.	All clothing, jewelry, and other personal effects in the possession of Respondent or subject to Respondent�s sole control.
    </div>
<div class = "indent-paragraph">R-4.	All sums of cash in the possession of Respondent or subject to Respondent�s sole control, including funds on deposit, together with accrued but unpaid interest, in banks, savings institutions, or other financial institutions, which accounts stand in Respondent&#39;s sole name or from which Respondent has the sole right to withdraw funds or which are subject to Respondent&#39;s sole control.
    </div>

    <?php

    $rCount = 5;

    if ($respondentIRA == "Yes"){

    echo '<div class = "indent-paragraph"> R-'.$rCount.'All individual retirement accounts, simplified employee pensions, annuities, and variable annuity life insurance benefits in Respondent&#39;s name.
 </div>';

 $rCount = $rCount + 1;

    }else if ($respondentEmployeeBenefit == "Yes"){

    echo '<div class = "indent-paragraph"> R-'.$rCount.' All sums, whether matured or unmatured, accrued or unaccrued, vested or otherwise, together with all increases thereof, the proceeds therefrom, and any other rights related to any profit-sharing plan, retirement plan, Keogh plan, pension plan, employee stock option plan, 401(k) plan, employee savings plan, accrued unpaid bonuses, disability plan, or other benefits existing by reason of Respondent&#39;s past, present, or future employment.</div>';

     $rCount = $rCount + 1;

    }

    echo '<div class = "indent-paragraph"> R-'.$rCount.' All policies of life insurance (including cash values) insuring Respondent&#39;s life. </div>';
        $rCount = $rCount + 1;

    if ($respondentBrokerage == "Yes"){

    echo '<div class = "indent-paragraph"> R-'.$rCount.' All brokerage accounts, stocks, bonds, mutual funds, and securities registered in Respondent&#39;s name, together with all dividends, splits, and other rights and privileges in connection with them.</div>';
     $rCount = $rCount + 1;


    }else if ($respondentVehicle== "Yes"){

         for ($i = 0; $i < $count_vehicleRespondentArrays_entries; $i++) {


    echo '<div class = "indent-paragraph"> R-'.$rCount.' The ' . $vehicleRespondentArray[$i]['Year'] . ' ' .  $vehicleRespondentArray[$i]['Make'] . ' ' . $vehicleRespondentArray[$i]['Model'] . ' motor vehicle, vehicle identification number ' . $vehicleRespondentArray[$i]['VIN1'] . ', together with all prepaid insurance, keys, and title documents.  </div>';
     $rCount = $rCount + 1;
     }

    }else if ($respondentBusiness == "Yes"){

             for ($i = 0; $i < $count_vehicleRespondentArrays_entries; $i++) {

    echo '<div class = "indent-paragraph"> R-'.$rCount.' The ' . $businessRespondentArray[$i]['Entity'] . ' known as ' . $businessRespondentArray[$i]['Name'] . ', including but not limited to its name, goodwill, receivables, claims, and the following furniture, fixtures, machinery, equipment, inventory, accounts, goods, supplies, and personal property used in connection with the operation of the business.
 </div>';

  $rCount = $rCount + 1;
  }
    }else if ($respondentMembership == "Yes"){

                 for ($i = 0; $i < $count_vehicleRespondentArrays_entries; $i++) {



    echo '<div class = "indent-paragraph"> R-'.$rCount.' A 100% interest in the membership in ' . $membershipPetitionerArray[$i]['Name'] . '
 </div>';

  $rCount = $rCount + 1;

}
    }else if ($respondentHealthSaving == "Yes"){
                 for ($i = 0; $i < $count_vehicleRespondentArrays_entries; $i++) {


    echo '<div class = "indent-paragraph"> R-'.$rCount.' A 100% interest in the ' . $healthMedicalRespondentArray[$i]['Name'] .  '</div>';
    
     $rCount = $rCount + 1;
     }
    }
    ?>


<div class = "paragraph"> <u> Division of Debt </u>
    </div>
<div class = "paragraph"> <u> Debts to Petitioner </u>
    </div>

<div class = "indent-paragraph">IT IS ORDERED AND DECREED that Petitioner, <?php echo $petitionerUpper; ?> , shall pay, as a part of the division of the estate of the parties, and shall indemnify and hold Respondent, <?php echo $respondentUpper; ?> , and Respondent�s property harmless from any failure to so discharge, these items:
    </div>

   

    <?php
    
    
    $pDebtCount = 2;
    if ($petitionerVehicleLoan == "Yes"){
                 for ($i = 0; $i < $count_vehicleLoanLoanPetitionerArrays_entries; $i++) {


    echo '<div class = "indent-paragraph"> P-' . $pDebtCount . ' The balance due, including principal, interest, and all other charges, on the promissory note payable to ' . $vehicleLoanPetitionerArray[$i]['NoteHolderName'] . ' and given as part of the purchase price of and secured by a lien on the ' . $vehicleLoanPetitionerArray[$i]['Year'] . ' ' . $vehicleLoanPetitionerArray[$i]['Make'] . ' ' . $vehicleLoanPetitionerArray[$i]['Model'] . '
 </div>';

    $pDebtCount = $pDebtCount + 1;
    }
    }

    echo '<div class = "indent-paragraph"> P-' . $pDebtCount . '    All debts, charges, liabilities, and obligations solely in Petitioner�s name.
 </div>';

    $pDebtCount = $pDebtCount + 1;

     if ($petitionerDebt == "Yes" &&  $petitionerIRSDebt == "Yes" && $splitDebt == "No"){
                  for ($i = 0; $i < $count_debtPetitionerArrays_entries; $i++) {

                  $debtPetitionerLastFourDigits = substr($debtPetitionerArray[$i]['Account_Number'], -4);

    echo '<div class = "indent-paragraph"> P-' . $pDebtCount . ' The following debts, charges, liabilities, and obligations:
	a.	_________ Debt owed to ' . $debtPetitionerArray[$i]['Payee'] . ', Account number ending in ' . $debtPetitionerLastFourDigits ;

    }
   for ($i = 0; $i < $count_irsDebtPetitionerArrays_entries; $i++) {

    
    'b. ' . $irsDebtPetitionerArray[$i]['Amount'] . ' percent of the debt owed to the Internal Revenue Service for the ' . $irsDebtPetitionerArray[$i]['Year'] .' year(s)
 </div>';

    $pDebtCount = $pDebtCount + 1;
    }
    }else if($petitionerDebt == "Yes" &&  $petitionerIRSDebt == "No" && $splitDebt == "No"){
      for ($i = 0; $i < $count_debtPetitionerArrays_entries; $i++) {

                  $debtPetitionerLastFourDigits = substr($debtPetitionerArray[$i]['Account_Number'], -4);

    echo '<div class = "indent-paragraph"> P-' . $pDebtCount . ' The following debts, charges, liabilities, and obligations:
	a.	_________ Debt owed to ' . $debtPetitionerArray[$i]['Payee'] . ', Account number ending in ' . $debtPetitionerLastFourDigits ;
        $pDebtCount = $pDebtCount + 1;

    }
    }
    echo '<div class = "indent-paragraph"> P-' . $pDebtCount . ' All debts, charges, liabilities, and other obligations incurred solely by Petitioner from and after [DATE OF FILING] unless express provision is made in this decree to the contrary. </div>';

    $pDebtCount = $pDebtCount + 1;


    echo '<div class = "indent-paragraph"> P-' . $pDebtCount . ' All encumbrances, ad valorem taxes, liens, assessments, premiums, or other charges due or to become due on the real and personal property awarded to Petitioner in this decree unless express provision is made in this decree to the contrary. </div>';

    $pDebtCount = $pDebtCount + 1;

    ?>

    <div class = "paragraph"> <u> Debts to Respondent </u>
    </div>

    <div class = "indent-paragraph"> IT IS ORDERED AND DECREED that Respondent, <?php echo $respondentUpper ?>, shall pay, as a part of the division of the estate of the parties, and shall indemnify and hold Petitioner, <?php echo $petitionerUpper ?>, and Petitioner�s property harmless from any failure to so discharge, these items:

        </div>

    <?php $rDebtCount = 2;

     if ($respondentVehicleLoan == "Yes"){
                 for ($i = 0; $i < $count_vehicleLoanRespondentArrays_entries; $i++) {


    echo '<div class = "indent-paragraph"> R-' . $rDebtCount . ' The balance due, including principal, interest, and all other charges, on the promissory note payable to ' . $vehicleLoanRespondentArray[$i]['NoteHolderName'] . ' and given as part of the purchase price of and secured by a lien on the ' . $vehicleLoanRespondentArray[$i]['Year'] . ' ' . $vehicleLoanRespondentArray[$i]['Make'] . ' ' . $vehicleLoanRespondentArray[$i]['Model'] . '
 </div>';

    $pDebtCount = $pDebtCount + 1;
    }
}
    echo '<div class = "indent-paragraph"> R-' . $rDebtCount . ' All debts, charges, liabilities, and obligations solely in Respondent�s name.
 </div>';

    $rDebtCount = $rDebtCount + 1;


         if ($respondentDebt == "Yes" &&  $respondentIRSDebt == "Yes" && $splitDebt == "No"){

                  for ($i = 0; $i < $count_debtRespondentArrays_entries; $i++) {

                  $debtRespondentLastFourDigits = substr($debtRespondentArray[$i]['Account_Number'], -4);

    echo '<div class = "indent-paragraph"> R-' . $rDebtCount . ' The following debts, charges, liabilities, and obligations:
	a.	_________ Debt owed to ' . $debtRespondentArray[$i]['Payee'] . ', Account number ending in ' . $debtRespondentLastFourDigits ;

    }
   for ($i = 0; $i < $count_irsDebtRespondentArrays_entries; $i++) {

    
    'b. ' . $irsDebtRespondentArray[$i]['Amount'] . ' percent of the debt owed to the Internal Revenue Service for the ' . $irsDebtRespondentArray[$i]['Year'] .' year(s)
 </div>';

    $pDebtCount = $pDebtCount + 1;
    }
    }else if($RespondentDebt == "Yes" &&  $RespondentIRSDebt == "No" && $splitDebt == "No"){
      for ($i = 0; $i < $count_debtRespondentArrays_entries; $i++) {

                  $debtRespondentLastFourDigits = substr($debtRespondentArray[$i]['Account_Number'], -4);

    echo '<div class = "indent-paragraph"> R-' . $pDebtCount . ' The following debts, charges, liabilities, and obligations:
	a.	_________ Debt owed to ' . $debtRespondentArray[$i]['Payee'] . ', Account number ending in ' . $debtRespondentLastFourDigits ;

    }
    }

    echo '<div class = "indent-paragraph"> R-' . $rDebtCount . ' All debts, charges, liabilities, and other obligations incurred solely by Respondent from and after [DATE OF FILING] unless express provision is made in this decree to the contrary.
 </div>';

    $rDebtCount = $rDebtCount + 1;


    echo '<div class = "indent-paragraph"> R-' . $rDebtCount . ' All encumbrances, ad valorem taxes, liens, assessments, premiums, or other charges due or to become due on the real and personal property awarded to Respondent in this decree unless express provision is made in this decree to the contrary. </div>';

    $rDebtCount = $rDebtCount + 1;

    ?>

    <div class = "paragraph"> <u> Notice </u>
    </div>


<div class = "indent-paragraph">IT IS ORDERED AND DECREED that each party shall send to the other party, within three days of its receipt, a copy of any correspondence from a creditor or taxing authority concerning any potential liability of the other party.

    <div class = "paragraph"> <u> Attorney&#39;s Fees </u>
    </div>

<div class = "indent-paragraph">To effect an equitable division of the estate of the parties and as a part of the division, each party shall be responsible for his or her own attorney&#39;s fees, expenses, and costs incurred as a result of legal representation in this case.
    </div>
<div class = "indent-paragraph">IT IS ORDERED AND DECREED that if a refund of tax or other amounts is made for any year during the parties' marriage through December 31, [YEAR PRIOR TO DIVORCE], each party shall be entitled to one-half of the refund amount, and the party receiving the refund check is designated a constructive trustee for the benefit of the other party to the extent of one-half of the refund amount, and the party receiving the refund check shall pay to the other party one-half of the refund amount within five days of receipt of the refund check. Each party is ORDERED to endorse the refund check on presentation by the other party.
    </div>

    <div class = "paragraph"> <u> Treatment/Allocation of Community Income for Year of Divorce
</u>
    </div>

<div class = "indent-paragraph">IT IS ORDERED AND DECREED that, for the calendar year [YEAR OF DIVORCE], each party shall file a federal income tax return and report thereon the reporting party&#39;s share of the income, gains, losses, deductions, and credits, including estimated taxes and withholding taxes, of the parties during the calendar year [YEAR OF DIVORCE] prior to the date of divorce, and of the reporting party on and after the date of divorce, in accordance with the I.R.C. and this decree.

    </div>
<div class = "indent-paragraph">IT IS ORDERED AND DECREED that for calendar year [YEAR OF DIVORCE], each party shall indemnify and hold the other party and the other party&#39;s property harmless from any tax liability associated with the reporting party&#39;s federal tax return for that year unless the parties have agreed to allocate their tax liability in a manner different from that reflected on their returns.

    </div>
<div class = "indent-paragraph">IT IS ORDERED AND DECREED that each party shall furnish such information to the other party as is requested to prepare federal income tax returns for [YEAR OF DIVORCE] within thirty days of receipt of a written request for the information, and in no event shall the available information be exchanged later than March 1, [YEAR FOLLOWING DIVORCE].  As requested information becomes available after that date, it shall be provided within ten days of receipt.

    </div>
<div class = "indent-paragraph">IT IS ORDERED AND DECREED that each party shall preserve for a period of seven years from the date of divorce all presently existing financial and tax-related documents, information, and records relating to the community and separate estates of the parties and the preparation of the party&#39;s federal and, if applicable, state tax returns for [YEAR OF DIVORCE]. Each party is ORDERED to allow the other party access to these documents, information, and records as reasonably necessary for the determination of that party&#39;s tax liability or to respond to an examination or audit by the Internal Revenue Service or other governmental agency within a reasonable time after receipt of written notice from the party requesting access to the documents, information, and records. Access shall include the right to copy the documents, information, and records.

    </div>
<div class = "indent-paragraph">IT IS ORDERED AND DECREED that all payments made to the other party in accordance with the allocation provisions for payment of federal income taxes contained in this Final Decree of Divorce are not deemed income to the party receiving those payments but are part of the property division and necessary for a just and right division of the parties' estate.

    </div>
<div class = "indent-paragraph">IT IS ORDERED AND DECREED that the parties shall cooperate with each other and exchange all relevant information, notices, and documents in the event of an audit or examination (or notice thereof) of their income tax returns for any period during their marriage through the date of divorce by the Internal Revenue Service or other governmental agency, and each party shall have the right to participate, at that participant party&#39;s cost and expense, in that audit or examination individually or by that party&#39;s designated representative.

    </div>
<div class = "indent-paragraph">IT IS ORDERED AND DECREED that any assets of the parties not awarded or divided by this Final Decree of Divorce are subject to future division as provided in the Texas Family Code.
    </div>
<div class = "indent-paragraph">IT IS FURTHER ORDERED AND DECREED, as a part of the division of the estate of the parties, that any liability not expressly assumed by a party under this decree is to be paid by the party incurring the liability, and the party incurring the liability shall indemnify and hold the other party and the other party&#39;s property harmless from any failure to so discharge the liability.
    </div>

<?php if($excludingCreditCard == "No"){

echo '    <div class = "paragraph"> <u> Credit Cards
</u>
    </div>
    
<div class = "indent-paragraph">IT IS ORDERED AND DECREED that Petitioner is granted exclusive use of the following credit card(s) and Respondent is enjoined and prohibited from using or incurring any indebtedness on that card:
    </div>';
                      for ($i = 0; $i < $count_creditCardPetitionerArrays_entries; $i++) {
                      $creditCardLastFourPet = substr($creditCardPetitionerArray[$i]['Account_Number'], -4);
                      $cardCountP = 1;
'<div class = "indent-paragraph">'. $cardCountP .'.  Account ending in ' . $creditCardLastFourPet .'

    
    </div>
    <div class = "indent-paragraph"> Respondent is ORDERED to return the above card(s) to Petitioner by ' . $creditCardPetitionerArray[$i]['DateOfReturn'] . ';
    </div>';
$cardCountP = $cardCountP + 1;
}

'<div class = "indent-paragraph">IT IS ORDERED AND DECREED that Respondent is granted exclusive use of the following credit card(s) and Petitioner is enjoined and prohibited from using or incurring any indebtedness on that card:
    </div>';
                      for ($i = 0; $i < $count_creditCardRespondentArrays_entries; $i++) {
                      $creditCardLastFourRes = substr($creditCardRespondentArray[$i]['Account_Number'], -4);
                      $cardCountR = 1;
'<div class = "indent-paragraph">'. $cardCountR . '. Account ending in ' . $creditCardLastFourRes .'

    
    </div>
    <div class = "indent-paragraph"> Respondent is ORDERED to return the above card(s) to Respondent by ' . $creditCardRespondentArray[$i]['DateOfReturn'] . ';
    </div>';

    $cardCountR = $cardCountR + 1;
}


}else if($excludingCreditCard == "Yes"){

echo '<div class = "indent-paragraph"> Petitioner and Respondent are both enjoined and prohibited from using or incurring any indebtedness on the following card:
</div>'; 
for ($i = 0; $i < $count_creditCardPetitionerArrays_entries; $i++) {
    $creditCardClosedLastFourPet = substr($creditCardClosedPetitionerArray[$i]['Account_Number'], -4);
    $cardClosedCountP = 1;

    echo '<div class = "indent-paragraph">' . $cardClosedCountP . 'Account Number ending in ' . $creditCardClosedLastFourPet . '</div>';
    $cardClosedCountP = $cardClosedCountP +1;

}
'<div class = "indent-paragraph"> Petitioner and Respondent are both enjoined and prohibited from using or incurring any indebtedness on the above credit card(s):
</div>';

}



?>

<div class = "indent-paragraph">Respondent is ORDERED to return the above card(s) to Petitioner by $petitioner.

    </div>
<div class = "indent-paragraph">
    </div>
<div class = "indent-paragraph">
    </div>
<div class = "indent-paragraph">
    </div>
<div class = "indent-paragraph">
    </div>




   



<!---- [CONDITION: CLOSING DOCUMENTS PREPARED BY DC] ---->
    <div class = "indent-paragraph">Petitioner is ORDERED to appear in the law offices of DIVORCE CONCIERGE, PLLC on or before the date of divorce, and to execute, have acknowledged, and deliver to Respondent the documents attached hereto as Petitioner Exhibits.  [LIST APPLICABLE CLOSING DOCUMENTS]
</div>
    <div class = "indent-paragraph">Respondent is ORDERED to appear in the law offices of DIVORCE CONCIERGE, PLLC on or before the date of divorce, and to execute, have acknowledged, and deliver to Petitioner the documents attached hereto as Respondent Exhibits.  [LIST APPLICABLE CLOSING DOCUMENTS]
</div>
    <div class = "indent-paragraph">This decree shall serve as a muniment of title to transfer ownership of all property awarded to any party in this Final Decree of Divorce.
</div>


<!---- [COBRA ELECTION MADE] ---->
    <div class = "indent-paragraph text_underline">Continuation of Health Insurance Coverage (COBRA)
</div>
    <div class = "indent-paragraph">[INSURED SPOUSE] is ORDERED to give written notice of the Court&#39;s signing of this Final Decree of Divorce to [INSURED SPOUSE]&#39;s employer within five business days after the date of the Court&#39;s signing.  IT IS FURTHER ORDERED that the notice to the employer shall include the last known mailing address of [NON-PARTICIPANT SPOUSE] - and that a copy of the notice shall be sent to [NON-PARTICIPANT SPOUSE].  [INSURED SPOUSE] is also ORDERED to furnish to [NON-PARTICIPANT SPOUSE] a copy of the presently existing health insurance card and any documentation explaining the benefits under the coverage within five business days after the Court&#39;s signing of this decree, unless previously provided.
</div>
<!---- [CONDITION: PETITIONER REQUSTS NAME CHANGE] ---->
<?php if($condNameChange === 'Yes' && $nameChangeParty == $petitioner ){
 echo '   <div class = "indent-paragraph bs_italic">Change of Petitione'."r&#39;s ". 'Name
</div>
    <div class = "indent-paragraph">IT IS ORDERED AND DECREED that Petitione' ."r&#39;s ". 'name is changed to ' . implode(" ", $nameChangeTo) .'
</div>';
//[CONDITION: RESPONDENT REQUSTS NAME CHANGE] ---->
  }
  else if($condNameChange === 'Yes' && $nameChangeParty == $respondent){ 

    echo '<div class = "indent-paragraph bs_italic">Change of Responden' ."t&#39;s " . 'Name
</div>
    <div class = "indent-paragraph">IT IS ORDERED AND DECREED that Responden'."t&#39;s " . 'name is changed to ' . implode(" ", $nameChangeTo) .'
</div>';
}?>

    <div class = "indent-paragraph bs_italic">Court Costs 
</div>
    <div class = "indent-paragraph">IT IS ORDERED AND DECREED that costs of court are to be borne by the party who incurred them.
</div>
    <div class = "indent-paragraph bs_italic">Discharge from Discovery Retention Requirement
</div>
    <div class = "indent-paragraph">IT IS ORDERED AND DECREED that the parties and their respective attorneys are discharged from the requirement of keeping and storing the documents produced in this case in accordance with rule 191.4(d) of the Texas Rules of Civil Procedure.
</div>
    <div class = "indent-paragraph bs_italic">Decree Acknowledgment
</div>
    <div class = "indent-paragraph">Petitioner, <?php echo $petitioner ?>, and Respondent, <?php echo $respondent ?>, each acknowledge that before signing this Final Decree of Divorce they have read this Final Decree of Divorce fully and completely, have had the opportunity to ask any questions regarding the same, and fully understand that the contents of this Final Decree of Divorce constitute a full and complete resolution of this case.  Petitioner and Respondent acknowledge that the division of debts and assets as contained in this Final Decree of Divorce is based on information and data provided to DIVORCE CONCIERGE, PLLC and each other.  The Parties have each elected to waive mandatory disclosures and not to do any further independent investigation or discovery of the assets and the liabilities of the parties to this action, and they have each represented to the Court and to each other that each of them is fully aware of all of the assets and liabilities of the parties� marital estate, whether separate, community, or mixed.  The parties further understand that conducting of disclosures and discovery might reveal additional assts and debts or different characterization (i.e., community versus separate) for which they may be entitled to have the Court divide.  The parties also understand that further discovery may not lead to any finding or knowledge of additional assets.  Knowing this, the parties herein acknowledge and stipulate and affirm that they do not wish to conduct mandatory disclosure or any further formal discovery or disclosures, and the parties accept all responsibility and release their attorney (if represented), and DIVORCE CONCIERGE, PLLC, from any and all liability therefrom.
</div>
    <div class = "indent-paragraph">Petitioner and Respondent acknowledge that they have voluntarily affixed their signatures to this Final Decree of Divorce, believing this agreement to be a just and right division of the marital debt and assets, and state that they have not signed by virtue of any coercion, any duress, or any agreement other than those specifically set forth in this Final Decree of Divorce.  Petitioner and Respondent further acknowledge that they have entered into this agreement without engaging in the exchange of mandatory disclosures or formal discovery, including the exchange of a Sworn Inventory & Appraisement, weighing the costs and benefits of engaging in formal disclosures and discovery, and do so freely and voluntarily. Before signing this Final Decree of Divorce, they have read this Final Decree of Divorce fully and completely, have had the opportunity to ask any questions regarding the same, and fully understand that the contents of this Final Decree of Divorce constitute a full and complete resolution of this case.
</div>

<!----[CONDITION: ONLY ONE PRO SE PARTY]---->

<?php if($membership_type == "DYW" && $respondentAttorney == "Yes"){

    echo '<div class = "indent-paragraph"> Petitioner, ' . $petitionerUpper . ', acknowledges that at the time of the signing of the Decree, ' . $petitionerUpper . ' is self-represented. ' . $petitionerUpper .' stipulates that their spouse�s attorneys, DIVORCE CONCIERGE, PLLC, and its licensed attorneys, have not provided any legal advice to them and acknowledges that no one has coerced them into signing this Final Decree of Divorce, and that they have had the opportunity to seek counsel and advice from an attorney of their own choosing.
</div>';
}

else if($membership_type == "DYW" && $respondentAttorney == "No"){
    '<div class = "indent-paragraph"> Petitioner and Respondent acknowledge that at the time of the signing of this Final Decree of Divorce, both spouses have both elected to represent themselves, Pro Se, and ' . $petitionerUpper . ' has engaged the services of DIVORCE CONCIERGE, PLLC to provide legal advice and counsel in the drafting and completion of this Final Decree of Divorce. ' . $respondentUpper . ' stipulates that DIVORCE CONCIERGE, PLLC, and its licensed attorneys, have not provided any legal advice to them and acknowledges that no one has coerced them into signing this Final Decree of Divorce and that they have had an opportunity to seek assistance and advice from counsel of their own choosing.
</div>';
}
?>
    <div class = "indent-paragraph bs_italic">Indemnification
</div>
    <div class = "indent-paragraph">Each party represents and warrants that they have not incurred any outstanding debt, obligation, or other liability on which the other party is or may be liable, other than those described in this decree.  Each party agrees and IT IS ORDERED that if any claim, action, or proceeding is hereafter initiated seeking to hold the party not assuming a debt, an obligation, a liability, an act, or an omission of the other party liable for such debt, obligation, liability, act or omission of the other party, that other party will, at that other party&#39;s sole expense, defend the party not assuming the debt, obligation, liability, act, or omission of the other party against any such claim or demand, whether or not well founded, and will indemnify the party not assuming the debt, obligation, liability, act, or omission of the other party and hold them harmless from all damages resulting from the claim or demand.
</div>
    <div class = "indent-paragraph">Damages, as used in this provision, includes any reasonable loss, cost, expense, penalty, and other damage, including without limitation attorney&#39;s fees and other costs and expenses reasonably and necessarily incurred in enforcing this indemnity.
</div>
    <div class = "indent-paragraph">IT IS ORDERED that the indemnifying party will reimburse the indemnified party, on demand, for any payment made by the indemnified party at any time after the entry of the divorce decree to satisfy any judgment of any court of competent jurisdiction or in accordance with a bona fide compromise or settlement of claims, demands, or actions for any damages to which this indemnity relates.
</div>
    <div class = "indent-paragraph">The parties agree and IT IS ORDERED that each party will give the other party prompt written notice of any litigation threatened or instituted against either party that might constitute the basis of a claim for indemnity under this decree.
</div>
    <div class = "indent-paragraph bs_italic">Clarifying Orders
</div>
    <div class = "indent-paragraph">Without affecting the finality of this Final Decree of Divorce, this Court expressly reserves the right to make orders necessary to clarify and enforce this decree.
</div>
    <div class = "indent-paragraph bs_italic"> Relief Not Granted
</div>
    <div class = "indent-paragraph">IT IS ORDERED AND DECREED that all relief requested in this case and not expressly granted is denied.  This is a final judgment, for which let execution and all writs and processes necessary to enforce this judgment issue.  This judgment finally disposes of all claims and all parties and is appealable.
</div>
    <div class = "paragraph bs_italic">Date of Judgment
</div>
    <div class = "paragraph text_align_left">SIGNED on _______________________<br>___________________
</div>
    <div class = "text_align_right"><br><br>______________________________
</div>
    <div class = "text_align_right">JUDGE PRESIDING
</div>

    
    <div class = "indent-paragraph"><br>APPROVED AND CONSENTED TO AS TO BOTH FORM AND SUBSTANCE: <br>
</div>
    <div class = "indent-paragraph"><br><?php echo $petitionerUpper . ", Petitioner" ?>
</div>
    <div class = "indent-paragraph"><br><?php echo $respondentUpper . ", Respondent" ?>
</div>

<!---- END OF FORM ---->
