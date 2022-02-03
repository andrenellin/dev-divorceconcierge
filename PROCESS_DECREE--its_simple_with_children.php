<meta charset="UTF-8">
<?php

/*
 * Template Name: Final Decree Of Divorce It's Simple With Children
 * Version: 1.0.1
 * Description: A print-friendly template displaying the final decree of divorce created 26/01/2022
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
padding-left: 100px;
  text-align: justify;

   line-height: 150%;
 
  
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
 $client_user_id = $form_data['misc']['created_by'];

//INput data
    
//Petitioner Details
$petitionerArray = $form_data['field'][96]; //Unprocessed Array
$petitioner = implode(" ", $petitionerArray); // Processed Array
$petitionerUpper = strtoupper($petitioner); //Make sure its in upper case
//$client_user_id = $form_data['field'][89]; 
$petitionerGender = $form_data['field'][97];


//Respondent details
$respondentArray = $form_data['field'][114];
$respondent = implode(" ", $respondentArray);
$respondentUpper = strtoupper($respondent);
$respondentGender =  $form_data['field'][115];


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

//PARENTING PLAN
$parentingPlan = $form_data['field'][361];

//JOINT MANAGING CONSERVATOR
$jointPrimaryResidence = $form_data['field'][333];
$jointGeographicalLimit  = $form_data['field'][368];
$jointGeographicalRestrictionsList  = $form_data['field'][347];
$jointMedicalRight = $form_data['field'][348];
$jointPsychRight =  $form_data['field'][334];
$jointChildSupport = $form_data['field'][349];
$jointLegalRepRight = $form_data['field'][350];
$jointMarriageMilitaryRight = $form_data['field'][351];
$jointEducationRight = $form_data['field'][353];
$jointSpecialEdRight = $form_data['field'][352];
$jointSpecialEdEnforcementRight = $form_data['field'][354];
$jointEarningRight = $form_data['field'][355];
$jointAgentRight = $form_data['field'][356];
$jointPassportRight = $form_data['field'][357];
$jointEstateRight = $form_data['field'][358];

//SOLE MANAGING CONSERVATOR

$solePrimaryParent = $form_data['field'][319];
$soleNonPrimaryParent = $form_data['field'][320];
$soleNonPrimaryMotherFather;

if($solePrimaryParent = "Petitioner" && $petitionerGender == "Male"){

$soleNonPrimaryMotherFather = "Mother";

}else if ($solePrimaryParent = "Respondent" && $respondentGender == "Male"){

$soleNonPrimaryMotherFather = "Mother";

}else{

$soleNonPrimaryMotherFather = "Father";

}

$soleNonPrimaryWeekendsBegin = $form_data['field'][321];
$soleNonPrimaryWeekendsEnd = $form_data['field'][322];
$soleNonPrimaryWeekendsHolidayBegin = $form_data['field'][323];
$soleNonPrimaryParentThursdayBegin =$form_data['field'][324];
$soleNonPrimaryParentThursdayend = $form_data['field'][325];
$soleNonPrimaryParentVacationEvenYearsBegin = $form_data['field'][326];
$soleNonPrimaryParentVacationOddYearsBegin = $form_data['field'][327];
$soleNonPrimaryParentChristmasEvenYearsBegin = $form_data['field'][328];
$soleNonPrimaryParentChristmasOddYearsBegin = $form_data['field'][329];
$soleNonPrimaryParentThanksgivingOddYears = $form_data['field'][330];
$soleNonPrimaryParentThanksgivingEvenYears = $form_data['field'][331];
$soleNonPrimaryParentFathersDayEnd = $form_data['field'][332];

// 50/50 ALTERNATING Weeks

$altWeekMotherArray = $form_data['field'][408];
$altWeekFatherArray = $form_data['field'][409];
$altWeekFatherUnArray = implode(" ", $altWeekFatherArray);
$altWeekMotherUnArray = implode(" ", $altWeekMotherArray);

$altWeekMother = strtoupper($altWeekMotherUnArray);
$altWeekFather = strtoupper($altWeekFatherUnArray);

$altWeekEffectie = $form_data['field'][410];
$altWeekBeginMother = $form_data['field'][411];
$altWeekBeginFather = $form_data['field'][412];

// 50/50 Split Weeks

$splitWeekMotherArray = $form_data['field'][415];
$splitWeekFatherArray = $form_data['field'][416];
$splitWeekMotherUnArray = implode(" ", $splitWeekMotherArray);
$splitWeekFatherUnArray = implode(" ", $splitWeekFatherArray);

$splitWeekMother = strtoupper($splitWeekMotherUnArray);
$splitWeekFather = strtoupper($splitWeekFatherUnArray);


$splitWeekEffectie = $form_data['field'][417];
$splitWeekFirstFriday = $form_data['field'][418];
$splitWeekSecondFriday = $form_data['field'][419];
 
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


<?php echo $client_user_id;?>

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
<div class = "paragraph"> <b><i> Child of the Marriage </i></b>
    </div>

<?php
for ($i = 0; $i < $count_children_entries; $i++) {?>
<table class="children-wrapper">
  <tr class="child-row">
    <td class="child-label">Name:</td>
    <td class="child-data"><?php echo $children[$i]['full_name']; ?></td>
  </tr>
  <tr class="child-row">
    <td class="child-label">Sex:</td>
    <td class="child-data"><?php echo $children[$i]['gender']; ?></td>
  </tr>
  <tr class="child-row">
    <td class="child-label">Birthdate:</td>
    <td class="child-data"><?php echo $children[$i]['birth_date']; ?></td>
  </tr>
  <tr class="child-row">
    <td class="child-label">Social Security Number:</td>
    <td class="child-data">Exchanged Privately</td>
  </tr>
  <?php if ($children[$i]['has_dl'] == 'Yes') {?>
  <tr class="child-row">
    <td class="child-label">Drivers License:</td>
    <td class="child-data">Exchanged Privately</td>
  </tr>
  <?php }?>
  <!-- CLOSE IF STATEMENT -->
</table>
<br>
<?php }?>

  <!-- CLOSE IF STATEMENT -->

<br>

<div class = "paragraph"> <i> Parenting Plan </i>
    </div>
<div class = "indent-paragraph">The Court finds that the provisions herein relating to the conservatorship, possession and child support, and optimizing the development of a close and continuing relationship between each party and the child(ren) constitute the parties' agreed parenting plan.  
    </div>

<div class = "paragraph"><i> Best Interests of Children</i>
    </div>
<div class = "indent-paragraph">The following orders are for the safety and welfare and in the best interest of the child(ren)
    </div>

<!---- JOINT MANAGING CONSERVATOR ---->

<?php if ($parentingPlan == "Joint Managing Conservators"){

echo 
'<div class = "indent-paragraph">IT IS ORDERED that ' . $petitionerUpper .' and ' . $respondentUpper . ' are appointed Joint Managing Conservators of the child(ren).
    </div>
<div class = "indent-paragraph">IT IS ORDERED that, at all times, ' . $petitionerUpper . ' and ' . $respondentUpper . ', as parent joint managing conservators, shall have the following rights:
    </div>

<div class = "indent-paragraph">1.	the right to receive information from any other conservator of the children concerning the health, education, and welfare of the children;
    </div>
<div class = "indent-paragraph">2.	the right to confer with the other parent to the extent possible before making a decision concerning the health, education, and welfare of the children;
    </div>
<div class = "indent-paragraph">3.	the right of access to medical, dental, psychological, and educational records of the children;
    </div>
<div class = "indent-paragraph">4.	the right to consult with a physician, dentist, or psychologist of the children;
    </div>
<div class = "indent-paragraph">5.	the right to consult with school officials concerning the children&#39;s welfare and educational status, including school activities;
    </div>
<div class = "indent-paragraph">6.	the right to attend school activities, including school lunches, performances, and field trips;
    </div>
<div class = "indent-paragraph">7.	the right to be designated on the children&#39;s records as a person to be notified in case of an emergency;
    </div>
<div class = "indent-paragraph">8.	the right to consent to medical, dental, and surgical treatment during an emergency involving an immediate danger to the health and safety of the children; and
    </div>
<div class = "indent-paragraph">9.	the right to manage the estates of the children to the extent the estates have been created by the parent or the parent&#39;s family.
    </div>
<div class = "indent-paragraph">IT IS ORDERED that, at all times, ' . $petitionerUpper . ' and ' . $respondentUpper . ', as parent joint managing conservators, shall each have the following duties:
    </div>
<div class = "indent-paragraph">1.	the duty to inform the other conservator of the children in a timely manner of significant information concerning the health, education, and welfare of the children;
    </div>
<div class = "indent-paragraph">2.	the duty to inform the other conservator of the children if the conservator resides with for at least thirty days, marries, or intends to marry a person who the conservator knows is registered as a sex offender under chapter 62 of the Texas Code of Criminal Procedure or is currently charged with an offense for which on conviction the person would be required to register under that chapter.  IT IS ORDERED that notice of this information shall be provided to the other conservator of the children as soon as practicable, but not later than the fortieth day after the date the conservator of the children begins to reside with the person or on the tenth day after the date the marriage occurs, as appropriate.  IT IS ORDERED that the notice must include a description of the offense that is the basis of the person&#39;s requirement to register as a sex offender or of the offense with which the person is charged.  WARNING:  A CONSERVATOR COMMITS AN OFFENSE PUNISHABLE AS A CLASS C MISDEMEANOR IF THE CONSERVATOR FAILS TO PROVIDE THIS NOTICE; 
    </div>
<div class = "indent-paragraph">3.	the duty to inform the other conservator of the children if the conservator establishes a residence with a person who the conservator knows is the subject of a final protective order sought by an individual other than the conservator that is in effect on the date the residence with the person is established.  IT IS ORDERED that notice of this information shall be provided to the other conservator of the children as soon as practicable, but not later than the thirtieth day after the date the conservator establishes residence with the person who is the subject of the final protective order.  WARNING:  A CONSERVATOR COMMITS AN OFFENSE PUNISHABLE AS A CLASS C MISDEMEANOR IF THE CONSERVATOR FAILS TO PROVIDE THIS NOTICE;
    </div>
<div class = "indent-paragraph">4.	the duty to inform the other conservator of the children if the conservator resides with, or allows unsupervised access to a child by, a person who is the subject of a final protective order sought by the conservator after the expiration of sixty-day period following the date the final protective order is issued.  IT IS ORDERED that notice of this information shall be provided to the other conservator of the children as soon as practicable, but not later than the ninetieth day after the date the final protective order was issued.  WARNING:  A CONSERVATOR COMMITS AN OFFENSE PUNISHABLE AS A CLASS C MISDEMEANOR IF THE CONSERVATOR FAILS TO PROVIDE THIS NOTICE; and
    </div>
<div class = "indent-paragraph">5.	the duty to inform the other conservator of the children if the conservator is the subject of a final protective order issued after the date of the order establishing conservatorship.  IT IS ORDERED that notice of this information shall be provided to the other conservator of the children as soon as practicable, but not later than the thirtieth day after the date the final protective order was issued.  WARNING:  A CONSERVATOR COMMITS AN OFFENSE PUNISHABLE AS A CLASS C MISDEMEANOR IF THE CONSERVATOR FAILS TO PROVIDE THIS NOTICE.
    </div>
<div class = "indent-paragraph">IT IS ORDERED that, during their periods of possession, ' . $petitionerUpper . ' and ' . $respondentUpper . ' as parent joint managing conservators, shall have the following rights and duties:
    </div>
<div class = "indent-paragraph">1.	the duty of care, control, protection, and reasonable discipline of the children;
    </div>
<div class = "indent-paragraph">2.	the duty to support the children, including providing the children with clothing, food, shelter, and medical and dental care not involving an invasive procedure;
    </div>
<div class = "indent-paragraph">3.	the right to consent for the children to medical and dental care not involving an invasive procedure; and
    </div>
<div class = "indent-paragraph">4.	the right to direct the moral and religious training of the children.
    </div>
<div class = "indent-paragraph">IT IS ORDERED that ' . $petitionerUpper . ' as a parent joint managing conservator, shall have the rights and duties:
    </div>';
    
    if($jointPrimaryResidence == "Me"){
    echo 

'<div class = "indent-paragraph">1. Petitioner, ' . $petitionerUpper . ' has the exclusive right to designate the primary residence of the child(ren) in ' . $jointGeographicalList .' ; 
    </div>
<div class = "indent-paragraph">2.	the ' . $jointMedicalRight .' to consent to medical, dental, and surgical treatment involving invasive procedures;
    </div>
<div class = "indent-paragraph">3.	the ' . $jointPsychRight . ' to consent to psychiatric and psychological treatment of the child(ren);  
    </div>';
    }
        if($jointChildSupport == "My spouse will pay me child support"){
        echo '<div class = "indent-paragraph"> 4.	The exclusive right to receive and give receipt for periodic payments for the support of the child(ren] and to hold or disburse these funds for the benefit of the child(ren);  
 </div>';

        }
       if($jointPrimaryResidence == "Me"){
    echo

'<div class = "indent-paragraph">5. 	the ' . $jointLegalRepRight . ' to represent the child(ren) in legal action and to make other decisions of substantial legal significance concerning the child(ren);  
    </div>
<div class = "indent-paragraph">6. 	the ' . $jointMarriageMilitaryRight .' to consent to marriage and to enlistment in the armed forces of the United States;  
    </div>';
    }

    if($jointSpecialEdRight == "Yes" && $jointSpecialEdEnforcementRight == "Me"){
    echo
'<div class = "indent-paragraph">7.	the ' .$jointEducationRight .'  to make decisions concerning the child(ren)&#39;s education; provided, however, that ' . $petitionerUpper . ' shall have the exclusive right to enforce the child�s educational rights under applicable federal and state law;  
    </div>';

    }  else if($jointSpecialEdRight == "Yes" && $jointSpecialEdEnforcementRight == "My Spouse"){
    echo
'<div class = "indent-paragraph">7.	the '. $jointEducationRight .'  to make decisions concerning the child(ren)&#39;s education; provided, however, that ' . $respondentUpper . ' shall have the exclusive right to enforce the child�s educational rights under applicable federal and state law;  
    </div>';

    }
           
    if($jointPrimaryResidence == "Me"){

'<div class = "indent-paragraph">7.	the ' . $jointEducationRight . ' to make decisions concerning the child(ren)&#39;s education; 
    </div>
<div class = "indent-paragraph">8.	except as provided by Section 264.0111 of the Texas Family Code, the ' . $jointEarningRight . ' to the services and earnings of the child(ren); 
    </div>
<div class = "indent-paragraph">9.	except when a guardian of the child(ren)&#39;s estate[s] or a guardian or attorney ad litem has been appointed for the child(ren), the ' . $jointAgentRight . ' to act as an agent of the child(ren) in relation to the child(ren)&#39;s estate[s] if the child(ren)&#39;s action is required by a state, the United States, or a foreign government;  
    </div>
<div class = "indent-paragraph">10 	the ' . $jointPassportRight .' to apply for passports for the child(ren), to renew the child(ren)&#39;s passports, and to maintain possession of the child(ren)&#39;s passports; and  
    </div>
<div class = "indent-paragraph">11.	the ' . $jointEstateRight . ' to manage the estate of the child(ren) to the extent the estate has been created by the community or joint property of the parent. 
    </div>';
    }

    if($jointPrimaryResidence == "My Spouse"){
    echo 

'<div class = "indent-paragraph">1. Petitioner, ' . $petitionerUpper . ' has the exclusive right to designate the primary residence of the child(ren) in ' . $jointGeographicalList .' ; 
    </div>
<div class = "indent-paragraph">2.	the ' . $jointMedicalRight .' to consent to medical, dental, and surgical treatment involving invasive procedures;
    </div>
<div class = "indent-paragraph">3.	the ' . $jointPsychRight . ' to consent to psychiatric and psychological treatment of the child(ren);  
    </div>';
    }
        if($jointChildSupport == "I will pay my spouse child support"){
        echo '<div class = "indent-paragraph"> 4.	The exclusive right to receive and give receipt for periodic payments for the support of the child(ren] and to hold or disburse these funds for the benefit of the child(ren);  
 </div>';

        }
       if($jointPrimaryResidence == "My Spouse"){
    echo

'<div class = "indent-paragraph">5. 	the ' . $jointLegalRepRight . ' to represent the child(ren) in legal action and to make other decisions of substantial legal significance concerning the child(ren);  
    </div>
<div class = "indent-paragraph">6. 	the ' . $jointMarriageMilitaryRight .' to consent to marriage and to enlistment in the armed forces of the United States;  
    </div>';
    }

    if($jointSpecialEdRight == "Yes" && $jointSpecialEdEnforcementRight == "Me"){
    echo
'<div class = "indent-paragraph">7.	the ' . $jointEducationRight .'  to make decisions concerning the child(ren)&#39;s education; provided, however, that ' . $petitionerUpper . ' shall have the exclusive right to enforce the child�s educational rights under applicable federal and state law;  
    </div>';

    }  else if($jointSpecialEdRight == "Yes" && $jointSpecialEdEnforcementRight == "My Spouse"){
    echo
'<div class = "indent-paragraph">7.	the '. $jointEducationRight .'  to make decisions concerning the child(ren)&#39;s education; provided, however, that ' . $respondentUpper . ' shall have the exclusive right to enforce the child�s educational rights under applicable federal and state law;  
    </div>';

    }
           
    if($jointPrimaryResidence == "My Spouse"){

'<div class = "indent-paragraph">7.	the ' . $jointEducationRight . ' to make decisions concerning the child(ren)&#39;s education; 
    </div>
<div class = "indent-paragraph">8.	except as provided by Section 264.0111 of the Texas Family Code, the ' . $jointEarningRight . ' to the services and earnings of the child(ren); 
    </div>
<div class = "indent-paragraph">9.	except when a guardian of the child(ren)&#39;s estate[s] or a guardian or attorney ad litem has been appointed for the child(ren), the ' . $jointAgentRight . ' to act as an agent of the child(ren) in relation to the child(ren)&#39;s estate[s] if the child(ren)&#39;s action is required by a state, the United States, or a foreign government;  
    </div>
<div class = "indent-paragraph">10 	the ' . $jointPassportRight .' to apply for passports for the child(ren), to renew the child(ren)&#39;s passports, and to maintain possession of the child(ren)&#39;s passports; and  
    </div>
<div class = "indent-paragraph">11.	the ' . $jointEstateRight . ' to manage the estate of the child(ren) to the extent the estate has been created by the community or joint property of the parent. 
    </div>';
    }

    ?>


<div class = "indent-paragraph">The Court finds that, in accordance with section 153.001 of the Texas Family Code, it is the public policy of Texas to assure that children will have frequent and continuing contact with parents who have shown the ability to act in the best interest of the child, to provide a safe, stable, and nonviolent environment for the child, and to encourage parents to share in the rights and duties of raising their child after the parents have separated or dissolved their marriage. 
    </div>

<?php if ($county == "Dallas" && $jointGeographicalLimit == "No"){

echo'

<div class = "indent-paragraph">The parties have agreed not to limit the residency of the child(ren) to Dallas County, Texas or any other county.
    </div>';

}else if ($jointGeographicalLimit == "No"){
echo '
<div class = "indent-paragraph">The parties have agreed, and IT IS ORDERED, that the primary residence of the children shall not be limited or restricted to any specific county or geographic area.
    </div>';

}else if($jointGeographicalLimit == "Yes" && $jointPrimaryResidence == "Me"){
echo '
<div class = "indent-paragraph">IT IS ORDERED that the primary residence of the children shall be within ' . $jointGeographicalRestrictionsList . ' and the parties shall not remove the children from ' . $jointGeographicalRestrictionsList . ' for the purpose of changing the primary residence of the children until this geographic restriction is modified by further order of the court of continuing jurisdiction or by a written agreement that is signed by the parties and filed with that court.
	IT IS FURTHER ORDERED that ' . $petitionerUpper . ' shall have the exclusive right to designate the children&#39;s primary residence within ' . $jointGeographicalRestrictionsList . '
	IT IS FURTHER ORDERED that this geographic restriction on the residence of the children shall be lifted if, at the time [PRIMARY PARENT] wishes to remove the children from $jointGeographicalRestrictionsListfor the purpose of changing the primary residence of the children, ' . $respondentUpper . ' does not reside in ' . $jointGeographicalRestrictionsList. '.
    </div>';


}else if($jointGeographicalLimit == "Yes" && $jointPrimaryResidence == "My Spouse"){
echo '
<div class = "indent-paragraph">IT IS ORDERED that the primary residence of the children shall be within ' . $jointGeographicalRestrictionsList . ' and the parties shall not remove the children from ' . $jointGeographicalRestrictionsList . ' for the purpose of changing the primary residence of the children until this geographic restriction is modified by further order of the court of continuing jurisdiction or by a written agreement that is signed by the parties and filed with that court.
	IT IS FURTHER ORDERED that ' . $respondentUpper . ' shall have the exclusive right to designate the children&#39;s primary residence within ' . $jointGeographicalRestrictionsList . '
	IT IS FURTHER ORDERED that this geographic restriction on the residence of the children shall be lifted if, at the time [PRIMARY PARENT] wishes to remove the children from $jointGeographicalRestrictionsListfor the purpose of changing the primary residence of the children, ' . $petitionerUpper . ' does not reside in ' . $jointGeographicalRestrictionsList. '.
    </div>';


}


?>

<div class = "indent-paragraph">Notwithstanding any provision in this decree to the contrary, IT IS ORDERED that [SCHOOL PARENT] shall have the exclusive right to enroll the children in school.  Each conservator, during that conservator's period of possession, is ORDERED to ensure the children's attendance in the schools in which [SCHOOL PARENT] has enrolled the children.
    </div>
<div class = "paragraph">Passports
    </div>
<div class = "indent-paragraph">IT IS ORDERED that if a parent's consent is required for the issuance of a passport, that parent shall provide that consent in writing no later than ten days after receipt of the consent documents, unless the parent has good cause for withholding that consent.
    </div>
          
<div class = "indent-paragraph">IT IS ORDERED that either parent shall have the right to maintain possession of any passports of the children, subject to the requirements for delivery of the passports and all other requirements set forth below.
    </div>
<div class = "indent-paragraph">Either parent is ORDERED to deliver or cause to be delivered to the other parent the original, valid passports of the child(ren), within ten days of their receipt of the other parent's notice of intent to have the children travel outside the United States during a period of possession of the other parent.
    </div>
<div class = "indent-paragraph">IT IS ORDERED that if a conservator intends to have the children travel outside the United States during the conservator's period of possession of the children, the conservator shall provide written notice to the other conservator.  IT IS ORDERED that this written notice shall include all the following:
    </div>
<div class = "indent-paragraph">1.	any written consent form for travel outside the United States that is required by the country of destination, countries through which travel will occur, or the intended carriers; 
    </div>
<div class = "indent-paragraph">2.	the date, time, and location of the children's departure from the United States;
    </div>
<div class = "indent-paragraph">3.	a reasonable description of means of transportation, including, if applicable, all names of carriers, flight numbers, and scheduled departure and arrival times;
    </div>
<div class = "indent-paragraph">4.	a reasonable description of each destination of the intended travel, including the name, address, and phone number of each interim destination and the final travel location;
    </div>
<div class = "indent-paragraph">5.	the dates the children are scheduled to arrive and depart at each such destination;
    </div>
<div class = "indent-paragraph">6.	the date, time, and location of the children's return to the United States;
    </div>
<div class = "indent-paragraph">7.	a complete statement of each portion of the intended travel during which the conservator providing the written notice will not accompany the children; and
    </div>
<div class = "indent-paragraph">8.	the name, permanent and mailing addresses, and work and home telephone numbers of each person accompanying the children on the intended travel other than the conservator providing the written notice.
    </div>
<div class = "indent-paragraph">The written notice may be in the form attached to this order as an exhibit and entitled Notice of Intent for Children to Travel Outside the United States.
    </div>
<div class = "indent-paragraph">If the intended travel is a group trip, such as with a school or other organization, the conservator providing the written notice is ORDERED to provide with the written notice all information about the group trip and its sponsor instead of stating the name, permanent and mailing addresses, and work and home telephone numbers of each person accompanying the children.
    </div>
<div class = "indent-paragraph">IT IS FURTHER ORDERED that this written notice shall be furnished to the other conservator no less than twenty-one days before the intended day of departure of the children from the United States.
    </div>
<div class = "indent-paragraph"><?php echo $petitionerUpper . ' and ' . $respondentUpper?> are each ORDERED to properly execute the written consent form to travel abroad attached hereto as an exhibit and any other form required for the travel by the United States Department of State, passport authorities, foreign nations, travel organizers, school officials, or public carriers; when applicable, to have the forms duly notarized; and, within ten days of that conservator's receipt of each consent form, to deliver the form to the conservator providing the written notice.
    </div>
<div class = "indent-paragraph">IT IS ORDERED that any conservator who violates the terms and conditions of these provisions regarding the children's passports shall be liable for all costs incurred due to that person's noncompliance with these provisions.  These costs shall include, but not be limited to, the expense of nonrefundable or noncreditable tickets, the costs of nonrefundable deposits for travel or lodging, attorney's fees, and all other costs incurred seeking enforcement of any of these provisions.
    </div>
    <?php }//Joint Managing Conservators
     ?>

<!--- SOLE MANAGING CONSERVATOR ---->

<?php if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Petitioner"){
echo  '

<div class = "indent-paragraph">IT IS ORDERED that ' . $petitionerUpper .  ' is appointed Sole Managing Conservator and ' . $petitionerUpper . ' is appointed Possessory Conservator of the children.
    </div>';
    }
    if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Petitioner"){
echo  '

<div class = "indent-paragraph">IT IS ORDERED that ' . $petitionerUpper .  ' is appointed Sole Managing Conservator and ' . $petitionerUpper . ' is appointed Possessory Conservator of the children.
    </div>';
    }
    else if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Respondent"){
echo  '

<div class = "indent-paragraph">IT IS ORDERED that ' . $respondentUpper .  ' is appointed Sole Managing Conservator and ' . $respondentUpper . ' is appointed Possessory Conservator of the children.
    </div>';
    }?>
<?php 
if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Petitioner"){
echo  '
<div class = "paragraph"> <i> Possession and Access <i>
    </div>
<div class = "paragraph">1. <u>Standard Possession Order</u>
    </div>  
<div class = "indent-paragraph">IT IS ORDERED that each conservator shall comply with all terms and conditions of this Standard Possession Order.  IT IS ORDERED that this Standard Possession Order is effective immediately and applies to all periods of possession occurring on and after the date the Court signs this Standard Possession Order.  IT IS, THEREFORE, ORDERED:
    </div>
<div class = "indent-paragraph">(a) Definitions
    </div>
<div class = "indent-paragraph">1. In this Standard Possession Order "school" means the elementary or secondary school in which the child is enrolled or, if the child is not enrolled in an elementary or secondary school, the public school district in which the child primarily resides. 
    </div>
<div class = "indent-paragraph">2. In this Standard Possession Order "child" includes each child, whether one or more, who is a subject of this suit while that child is under the age of eighteen years and not otherwise emancipated. 
    </div>
<div class = "paragraph"> (b)
    </div>
<div class = "indent-paragraph">IT IS ORDERED that the conservators shall have possession of the child at times mutually agreed to in advance by the parties, and, in the absence of mutual agreement, it is ORDERED that the conservators shall have possession of the child under the specified terms set out in this Standard Possession Order. 
    </div>
<div class = "paragraph">(c) Conservators Who Reside 100 Miles or Less Apart 
    </div>
    
<div class = "indent-paragraph"> Except as otherwise expressly provided in this Standard Possession Order, when ' . $soleNonPrimaryParent . ' resides 100 miles or less from the primary residence of the child, ' . $soleNonPrimaryParent . ' shall have the right to possession of the child as follows:
    </div>
<div class = "paragraph"> 1. Weekends � 
    </div>
<div class = "indent-paragraph">On weekends that occur during the regular school term, beginning at ' . $soleNonPrimaryWeekendsBegin . ', on the first, third, and fifth Friday of each month and ending at ' . $soleNonPrimaryWeekendsEnd . ' 
    </div>

<div class = "indent-paragraph">On weekends that do not occur during the regular school term, beginning at 6:00 p.m., on the first, third, and fifth Friday of each month and ending at 6:00 p.m. on the following Sunday.
    </div>
<div class = "paragraph">2. Weekend Possession Extended by a Holiday �
    </div>
<div class = "indent-paragraph">Except as otherwise expressly provided in this Standard Possession Order, if a weekend period of possession by ' . $respondentUpper . ' begins on a student holiday or a teacher in-service day that falls on a Friday during the regular school term, as determined by the school in which the child is enrolled, or a federal, state, or local holiday that falls on a Friday during the summer months when school is not in session, that weekend period of possession shall begin at ' . $soleNonPrimaryWeekendsHolidayBegin .' 
    </div>
<div class = "indent-paragraph">Except as otherwise expressly provided in this Standard Possession Order, if a weekend period of possession by ' . $respondentUpper . ' ends on or is immediately followed by a student holiday or a teacher in-service day that falls on a Monday during the regular school term, as determined by the school in which the child is enrolled, or a federal, state, or local holiday that falls on a Monday during the summer months when school is not in session, that weekend period of possession shall end at 6:00 p.m. on that Monday.
    </div>
<div class = "indent-paragraph">3.	Thursdays - On Thursday of each week during the regular school term, beginning at ' . $soleNonPrimaryParentThursdayBegin . ' and ending at ' . $soleNonPrimaryParentThursdayend . '.
    </div>
<div class = "indent-paragraph">4.	Spring Vacation in Even-Numbered Years - In even-numbered years, beginning at ' . $soleNonPrimaryParentVacationEvenYearsBegin . ' for the school&#39;s spring vacation and ending at 6:00 p.m. on the day before school resumes after that vacation.
    </div>
<div class = "indent-paragraph">5.	Extended Summer Possession by ' . $respondentUpper . ' � 
With Written Notice by April 1 - If ' . $respondentUpper . ' gives ' . $petitionerUpper . ' written notice by April 1 of a year specifying an extended period or periods of summer possession for that year, ' . $respondentUpper . ' shall have possession of the child for thirty days beginning no earlier than the day after the child&#39;s school is dismissed for the summer vacation and ending no later than seven days before school resumes at the end of the summer vacation in that year, to be exercised in no more than two separate periods of at least seven consecutive days each, as specified in the written notice
  ';
  }
  if($parentingPlan == "Sole Managing Conservator" && $soleNonPrimaryMotherFather == "Father"){
  echo ', provided that the period or periods of extended summer possession do not interfere with Father&#39;s Day possession. These periods of possession shall begin and end at 6:00 p.m. on each applicable day. 
  </div>';

  }else if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Petitioner"){
  echo 'These periods of possession shall begin and end at 6:00 p.m. on each applicable day. </div>

<div class = "indent-paragraph">Without Written Notice by April 1 - If ' . $respondentUpper . ' does not give ' . $petitionerUpper . ' written notice by April 1 of a year specifying an extended period or periods of summer possession for that year, ' . $respondentUpper . ' shall have possession of the child for thirty consecutive days in that year beginning at 6:00 p.m. on July 1 and ending at 6:00 p.m. on July 31.
    </div>
<div class = "indent-paragraph">Notwithstanding the Thursday periods of possession during the regular school term and the weekend periods of possession ORDERED for ' . $respondentUpper . ', it is expressly ORDERED that ' . $petitionerUpper . ' shall have a superior right of possession of the child as follows:
    </div>
<div class = "indent-paragraph">1.Spring Vacation in Odd-Numbered Years - In odd-numbered years, beginning at ' . $soleNonPrimaryParentVacationOddYearsBegin . ' for the school&#39;s spring vacation and ending at 6:00 p.m. on the day before school resumes after that vacation.
    </div>
<div class = "indent-paragraph">2.Summer Weekend Possession by ' . $petitionerUpper . ' - If ' . $petitionerUpper . ' gives ' . $respondentUpper . ' written notice by April 15 of a year, ' . $petitionerUpper . ' shall have possession of the child on any one weekend beginning at 6:00 p.m. on Friday and ending at 6:00 p.m. on the following Sunday during any one period of the extended summer possession by ' . $respondentUpper . ' in that year, provided that ' . $petitionerUpper . ' picks up the child from ' . $respondentUpper . ' and returns the child to that same place
    ';
    }
if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Petitioner" && $soleNonPrimaryMotherFather == "Father"){
echo ' 
<div class = "indent-paragraph">and that the weekend so designated does not interfere with Father&#39;s Day possession.
    </div>
    ';

}
if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Petitioner"){
echo '
Not later than the fifteenth day before the Friday that begins the designated weekend, ' . $petitionerUpper . ' must give ' . $respondentUpper . ' written notice of the location at which ' . $petitionerUpper . '  is to pick up and return the child.
    </div>
<div class = "indent-paragraph">3.Extended Summer Possession by ' . $petitionerUpper . ' - If ' . $petitionerUpper . ' gives ' . $respondentUpper . ' written notice by April 15 of a year or gives ' . $respondentUpper . ' fourteen days written notice on or after April 16 of a year, ' . $petitionerUpper . ' may designate one weekend beginning no earlier than the day after the child&#39;s school is dismissed for the summer vacation and ending no later than seven days before school resumes at the end of the summer vacation, during which an otherwise scheduled weekend period of possession by ' . $respondentUpper . ' shall not take place in that year, provided that the weekend so designated does not interfere with ' . $respondentUpper . '&#39;s period or periods of extended summer possession
    ';
    }
if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Petitioner" && $soleNonPrimaryMotherFather == "Father"){
echo  'or with Father&#39;s Day possession.';

}
if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Petitioner"){
echo  '
</div>

<div class = "paragraph">(d) Conservators Who Reside More Than 100 Miles Apart
    </div>
<div class = "indent-paragraph">Except as otherwise expressly provided in this Standard Possession Order, when ' . $respondentUpper . ' resides more than 100 miles from the residence of the child, ' . $respondentUpper . ' shall have the right to possession of the child as follows:
    </div>
<div class = "indent-paragraph">1.	Weekends - Unless ' . $respondentUpper . ' elects the alternative period of weekend possession described in the next paragraph, ' . $respondentUpper . ' shall have the right to possession of the child on weekends beginning at 6:00 p.m., on the first, third, and fifth Friday of each month and ending at 6:00 p.m. on the following Sunday.
    </div>
<div class = "indent-paragraph">Alternate Weekend Possession - In lieu of the weekend possession described in the foregoing paragraph, ' . $respondentUpper . ' shall have the right to possession of the child not more than one weekend per month of ' . $respondentUpper . '&#39;s choice beginning at 6:00 p.m. on the day school recesses for the weekend and ending at 6:00 p.m. on the day before school resumes after the weekend.  ' . $respondentUpper . ' may elect an option for this alternative period of weekend possession by giving written notice to ' . $petitionerUpper . ' within ninety days after the parties begin to reside more than 100 miles apart.  If ' . $respondentUpper . ' makes this election, ' . $respondentUpper . ' shall give ' . $petitionerUpper . ' fourteen days written or telephonic notice preceding a designated weekend.  The weekends chosen shall not conflict with the provisions regarding Christmas, Thanksgiving, the child&#39;s birthday or Mother&#39;s Day or Father&#39;s Day possession below.
    </div>
<div class = "paragraph">2. Weekend Possession Extended by a Holiday �
    </div>
<div class = "indent-paragraph">Except as otherwise expressly provided in this Standard Possession Order, if a weekend period of possession by ' . $respondentUpper . ' begins on a student holiday or a teacher in-service day that falls on a Friday during the regular school term, as determined by the school in which the child is enrolled, or a federal, state, or local holiday during the summer months when school is not in session, that weekend period of possession shall begin at ' . $soleNonPrimaryWeekendsHolidayBegin .'
    </div>
<div class = "indent-paragraph">Except as otherwise expressly provided in this Standard Possession Order, if a weekend period of possession by ' . $respondentUpper . ' ends on or is immediately followed by a student holiday or a teacher in-service day that falls on a Monday during the regular school term, as determined by the school in which the child is enrolled, or a federal, state, or local holiday that falls on a Monday during the summer months when school is not in session, that weekend period of possession shall end at 6:00 p.m. on that Monday.
    </div>
<div class = "indent-paragraph">3.Spring Vacation in All Years - Every year, beginning at 6:00 p.m. on the day the child is dismissed from school for the school&#39;s spring vacation and ending at 6:00 p.m. on the day before school resumes after that vacation.
    </div>
<div class = "indent-paragraph">4.Extended Summer Possession by ' . $respondentUpper . ' � 
    </div>
<div class = "indent-paragraph">With Written Notice by April 1 - If ' . $respondentUpper . ' gives ' . $petitionerUpper . ' written notice by April 1 of a year specifying an extended period or periods of summer possession for that year, ' . $respondentUpper . ' shall have possession of the child for forty-two days beginning no earlier than the day after the child&#39;s school is dismissed for the summer vacation and ending no later than seven days before school resumes at the end of the summer vacation in that year, to be exercised in no more than two separate periods of at least seven consecutive days each, as specified in the written notice
    ';
    }
if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Petitioner" && $soleNonPrimaryMotherFather == "Father"){
echo ', provided that the period or periods of extended summer possession do not interfere with Father&#39;s Day possession';

}
if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Petitioner"){
echo '
    These periods of possession shall begin and end at 6:00 p.m. on each applicable day. 
</div>

<div class = "indent-paragraph">Without Written Notice by April 1 - If ' . $respondentUpper . ' does not give ' . $petitionerUpper . ' written notice by April 1 of a year specifying an extended period or periods of summer possession for that year, ' . $respondentUpper . ' shall have possession of the child for forty-two consecutive days beginning at 6:00 p.m. on June 15 and ending at 6:00 p.m. on July 27 of that year.
    </div>
<div class = "indent-paragraph">Notwithstanding the weekend periods of possession ORDERED for ' . $respondentUpper . ', it is expressly ORDERED that ' . $petitionerUpper . ' shall have a superior right of possession of the child as follows:
    </div>
<div class = "indent-paragraph">1.Summer Weekend Possession by ' . $petitionerUpper . ' - If ' . $petitionerUpper . ' gives ' . $respondentUpper . ' written notice by April 15 of a year, ' . $petitionerUpper . ' shall have possession of the child on any one weekend beginning at 6:00 p.m. on Friday and ending at 6:00 p.m. on the following Sunday during any one period of possession by ' . $respondentUpper . ' during ' . $respondentUpper . '&#39;s extended summer possession in that year, provided that if a period of possession by ' . $respondentUpper . ' in that year exceeds thirty days, ' . $petitionerUpper . ' may have possession of the child under the terms of this provision on any two nonconsecutive weekends during that period and provided that ' . $petitionerUpper . ' picks up the child from ' . $respondentUpper . ' and returns the child to that same place
    ';
    }
    if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Petitioner" && $soleNonPrimaryMotherFather == "Father"){
    echo 'and that the weekend so designated does not interfere with Father&#39;s Day possession.';

    }
if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Petitioner"){

echo '
</div>
<div class = "indent-paragraph">2.Extended Summer Possession by ' . $petitionerUpper . ' - If ' . $petitionerUpper . ' gives ' . $respondentUpper . ' written notice by April 15 of a year, ' . $petitionerUpper . ' may designate twenty-one days beginning no earlier than the day after the child&#39;s school is dismissed for the summer vacation and ending no later than seven days before school resumes at the end of the summer vacation in that year, to be exercised in no more than two separate periods of at least seven consecutive days each, during which ' . $respondentUpper . ' shall not have possession of the child, provided that the period or periods so designated do not interfere with ' . $respondentUpper . '&#39;s period or periods of extended summer possession
    </div>';
    }
if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Petitioner" && $soleNonPrimaryMotherFather == "Father"){
echo 'or with Father&#39;s Day possession.';

}
if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Petitioner"){

echo '

These periods of possession shall begin and end at 6:00 p.m. on each applicable day.
    </div>
<div class = "paragraph">(e)Holidays Unaffected by Distance
    </div>
<div class = "indent-paragraph">Notwithstanding the weekend and Thursday periods of possession of ' . $respondentUpper . ', ' . $respondentUpper . ' and ' . $petitionerUpper . ' shall have the right to possession of the child as follows: 
    </div>
<div class = "indent-paragraph">1.Christmas Holidays in Even-Numbered Years - In even-numbered years, ' . $respondentUpper . ' shall have the right to possession of the child beginning at ' . $soleNonPrimaryParentChristmasEvenYearsBegin . ' for the Christmas school vacation and ending at noon on December 28, and ' . $petitionerUpper . ' shall have the right to possession of the child beginning at noon on December 28 and ending at 6:00 p.m. on the day before school resumes after that Christmas school vacation.
    </div>
<div class = "indent-paragraph">2.Christmas Holidays in Odd-Numbered Years - In odd-numbered years, ' . $petitionerUpper . ' shall have the right to possession of the child beginning at ' . $soleNonPrimaryParentChristmasOddYearsBegin . ' for the Christmas school vacation and ending at noon on December 28, and ' . $respondentUpper . ' shall have the right to possession of the child beginning at noon on December 28 and ending at 6:00 p.m. on the day before school resumes after that Christmas school vacation.
    </div>
<div class = "indent-paragraph">3.Thanksgiving in Odd-Numbered Years - In odd-numbered years, ' . $respondentUpper . ' shall have the right to possession of the child beginning at ' . $soleNonPrimaryParentThanksgivingOddYears . ' for the Thanksgiving holiday and ending at 6:00 p.m. on the Sunday following Thanksgiving.
    </div>
<div class = "indent-paragraph">4.Thanksgiving in Even-Numbered Years - In even-numbered years, ' . $petitionerUpper . ' shall have the right to possession of the child beginning at ' . $soleNonPrimaryParentThanksgivingEvenYears . ' for the Thanksgiving holiday and ending at 6:00 p.m. on the Sunday following Thanksgiving.
    </div>
<div class = "indent-paragraph">5.Child&#39;s Birthday - If a conservator is not otherwise entitled under this Standard Possession Order to present possession of a child on the child&#39;s birthday, that conservator shall have possession of the child, and if elected, the child&#39;s minor siblings, beginning at 6:00 p.m. and ending at 8:00 p.m. on that day, provided that that conservator picks up the child(ren) from the other conservator&#39;s residence and returns the child(ren) to that same place.
    </div>';
    }
if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Petitioner" && $soleNonPrimaryMotherFather == "Father"){
echo '
<div class = "indent-paragraph">6.Father&#39;s Day - ' . $respondentUpper . ' shall have the right to possession of the child each year, beginning at 6:00 p.m. on the Friday preceding Father&#39;s Day and ending at ' . $soleNonPrimaryParentFathersDayEnd . ', provided that if ' . $respondentUpper . ' is not otherwise entitled under this Standard Possession Order to present possession of the child, he shall pick up the child from ' . $petitionerUpper . '&#39;s residence and return the child to that same place.
    </div>
<div class = "indent-paragraph">7.Mother&#39;s Day - ' . $petitionerUpper . ' shall have the right to possession of the child each year, beginning at the time school is dismissed on the Friday preceding Mother&#39;s Day and ending at the time school resumes following Mother&#39;s Day weekend, provided that if ' . $petitionerUpper . ' is not otherwise entitled under this Standard Possession Order to present possession of the child, she shall pick up the child from ' . $respondentUpper . '&#39;s residence and return the child to that same place.
    </div>';
}if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Petitioner" && $soleNonPrimaryMotherFather == "Mother"){
echo '
<div class = "indent-paragraph">6.Father&#39;s Day - ' . $petitionerUpper . ' shall have the right to possession of the child each year, beginning at 6:00 p.m. on the Friday preceding Father&#39;s Day and ending at ' . $soleNonPrimaryParentFathersDayEnd . ', provided that if ' . $petitionerUpper . ' is not otherwise entitled under this Standard Possession Order to present possession of the child, he shall pick up the child from ' . $respondentUpper . '&#39;s residence and return the child to that same place.
    </div>
<div class = "indent-paragraph">7.Mother&#39;s Day - ' . $respondentUpper . ' shall have the right to possession of the child each year, beginning at the time school is dismissed on the Friday preceding Mother&#39;s Day and ending at the time school resumes following Mother&#39;s Day weekend, provided that if ' . $respondentUpper . ' is not otherwise entitled under this Standard Possession Order to present possession of the child, she shall pick up the child from ' . $petitionerUpper . '&#39;s residence and return the child to that same place.
    </div>';
}
if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Petitioner"){
echo '
<div class = "paragraph">(f)Undesignated Periods of Possession 
    </div>
<div class = "indent-paragraph">' . $petitionerUpper . ' shall have the right of possession of the child at all other times not specifically designated in this Standard Possession Order for ' . $respondentUpper . '.
    </div>
<div class = "paragraph">(g)General Terms and Conditions 
    </div>
<div class = "indent-paragraph">Except as otherwise expressly provided in this Standard Possession Order, the terms and conditions of possession of the child that apply regardless of the distance between the residence of a [parent/conservator] and the child are as follows:
    </div>
<div class = "indent-paragraph">1.Surrender of Child by ' . $petitionerUpper . ' - ' . $petitionerUpper . ' is ORDERED to surrender the child to ' . $respondentUpper . ' at the beginning of each period of ' . $respondentUpper . '&#39;s possession at the residence of ' . $petitionerUpper . '.
    </div>
<div class = "indent-paragraph">If a period of possession by ' . $respondentUpper . ' begins at the time the child&#39;s school is regularly dismissed, ' . $petitionerUpper . ' is ORDERED to surrender the child to ' . $respondentUpper . ' at the beginning of each such period of possession at the school in which the child is enrolled.  If the child is not in school, ' . $respondentUpper . ' shall pick up the child at the residence of ' . $petitionerUpper . ' at 6:00 p.m., and ' . $petitionerUpper . ' is ORDERED to surrender the child to ' . $respondentUpper . ' at the residence of ' . $petitionerUpper . ' at 6:00 p.m. under these circumstances.
    </div>
<div class = "indent-paragraph">2.Return of Child by ' . $respondentUpper . ' - ' . $respondentUpper . ' is ORDERED to return the child to the residence of ' . $petitionerUpper . ' at the end of each period of possession.  However, it is ORDERED that, if ' . $petitionerUpper . ' and ' . $respondentUpper . ' live in the same county at the time of rendition of this order, ' . $respondentUpper . '&#39;s county of residence remains the same after rendition of this order, and ' . $petitionerUpper . '&#39;s county of residence changes, effective on the date of the change of residence by ' . $petitionerUpper . ', ' . $respondentUpper . ' shall surrender the child to ' . $petitionerUpper . ' at the residence of ' . $respondentUpper . ' at the end of each period of possession.
    </div>
<div class = "indent-paragraph">If a period of possession by ' . $respondentUpper . ' ends at the time the child&#39;s school resumes, ' . $respondentUpper . ' is ORDERED to surrender the child to ' . $petitionerUpper . ' at the end of each such period of possession at the school in which the child is enrolled or, if the child is not in school, at the residence of ' . $respondentUpper . ' at 6:00 p.m.
    </div>
<div class = "indent-paragraph">3.Surrender of Child by ' . $respondentUpper . ' - ' . $respondentUpper . ' Is ORDERED to surrender the child to ' . $petitionerUpper . ', if the child is in ' . $respondentUpper . '&#39;s possession or subject to ' . $respondentUpper . '&#39;s control, at the beginning of each period of ' . $petitionerUpper . '&#39;s exclusive periods of possession, at the place designated in this Standard Possession Order.
    </div>
<div class = "indent-paragraph">4.Return of Child by ' . $petitionerUpper . ' - ' . $petitionerUpper . ' is ORDERED to return the child to ' . $respondentUpper . ', if ' . $respondentUpper . ' is entitled to possession of the child, at the end of each of ' . $petitionerUpper . '&#39;s exclusive periods of possession, at the place designated in this Standard Possession Order.
    </div>
<div class = "indent-paragraph">5.Personal Effects - Each conservator is ORDERED to return with the child the personal effects that the child brought at the beginning of the period of possession.
    </div>
<div class = "indent-paragraph">6.Designation of Competent Adult - Each conservator may designate any competent adult to pick up and return the child, as applicable.  IT IS ORDERED that a conservator or a designated competent adult be present when the child is picked up or returned.
    </div>
<div class = "indent-paragraph">7.Inability to Exercise Possession - Each conservator is ORDERED to give notice to the person in possession of the child on each occasion that the conservator will be unable to exercise that conservator&#39;s right of possession for any specified period.
    </div>
<div class = "indent-paragraph">8.Written Notice - Written notice, including notice provided by electronic mail or facsimile, shall be deemed to have been timely made if received or, if applicable, postmarked before or at the time that notice is due.  Each conservator is ORDERED to notify the other conservator of any change in the conservator&#39;s electronic mail address or facsimile number within twenty-four hours after the change.
    </div>
<div class = "indent-paragraph">9.	Notice to School and ' . $respondentUpper . ' - If ' . $respondentUpper . '&#39;s time of possession of the child ends at the time school resumes and for any reason the child is not or will not be returned to school, ' . $respondentUpper . ' shall immediately notify the school and ' . $petitionerUpper . ' that the child will not be or has not been returned to school.
    </div>';

}//Sole Managing CONSERVATOR

?>


<!--- SOLE MANAGING CONSERVATOR RESPONDENT PRIMARY ---->

<?php if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Respondent"){
echo  '

<div class = "indent-paragraph">IT IS ORDERED that ' . $respondentUpper .  ' is appointed Sole Managing Conservator and ' . $respondentUpper . ' is appointed Possessory Conservator of the children.
    </div>';
    }
    if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Respondent"){
echo  '

<div class = "indent-paragraph">IT IS ORDERED that ' . $respondentUpper .  ' is appointed Sole Managing Conservator and ' . $respondentUpper . ' is appointed Possessory Conservator of the children.
    </div>';
    }
    else if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Respondent"){
echo  '

<div class = "indent-paragraph">IT IS ORDERED that ' . $petitionerUpper .  ' is appointed Sole Managing Conservator and ' . $petitionerUpper . ' is appointed Possessory Conservator of the children.
    </div>';
    }?>
<?php 
if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Respondent"){
echo  '
<div class = "paragraph"> <i> Possession and Access <i>
    </div>
<div class = "paragraph">1. <u>Standard Possession Order</u>
    </div>  
<div class = "indent-paragraph">IT IS ORDERED that each conservator shall comply with all terms and conditions of this Standard Possession Order.  IT IS ORDERED that this Standard Possession Order is effective immediately and applies to all periods of possession occurring on and after the date the Court signs this Standard Possession Order.  IT IS, THEREFORE, ORDERED:
    </div>
<div class = "indent-paragraph">(a) Definitions
    </div>
<div class = "indent-paragraph">1. In this Standard Possession Order "school" means the elementary or secondary school in which the child is enrolled or, if the child is not enrolled in an elementary or secondary school, the public school district in which the child primarily resides. 
    </div>
<div class = "indent-paragraph">2. In this Standard Possession Order "child" includes each child, whether one or more, who is a subject of this suit while that child is under the age of eighteen years and not otherwise emancipated. 
    </div>
<div class = "paragraph"> (b)
    </div>
<div class = "indent-paragraph">IT IS ORDERED that the conservators shall have possession of the child at times mutually agreed to in advance by the parties, and, in the absence of mutual agreement, it is ORDERED that the conservators shall have possession of the child under the specified terms set out in this Standard Possession Order. 
    </div>
<div class = "paragraph">(c) Conservators Who Reside 100 Miles or Less Apart 
    </div>
    
<div class = "indent-paragraph"> Except as otherwise expressly provided in this Standard Possession Order, when ' . $soleNonPrimaryParent . ' resides 100 miles or less from the primary residence of the child, ' . $soleNonPrimaryParent . ' shall have the right to possession of the child as follows:
    </div>
<div class = "paragraph"> 1. Weekends � 
    </div>
<div class = "indent-paragraph">On weekends that occur during the regular school term, beginning at ' . $soleNonPrimaryWeekendsBegin . ', on the first, third, and fifth Friday of each month and ending at ' . $soleNonPrimaryWeekendsEnd . ' 
    </div>

<div class = "indent-paragraph">On weekends that do not occur during the regular school term, beginning at 6:00 p.m., on the first, third, and fifth Friday of each month and ending at 6:00 p.m. on the following Sunday.
    </div>
<div class = "paragraph">2. Weekend Possession Extended by a Holiday �
    </div>
<div class = "indent-paragraph">Except as otherwise expressly provided in this Standard Possession Order, if a weekend period of possession by ' . $petitionerUpper . ' begins on a student holiday or a teacher in-service day that falls on a Friday during the regular school term, as determined by the school in which the child is enrolled, or a federal, state, or local holiday that falls on a Friday during the summer months when school is not in session, that weekend period of possession shall begin at ' . $soleNonPrimaryWeekendsHolidayBegin .' 
    </div>
<div class = "indent-paragraph">Except as otherwise expressly provided in this Standard Possession Order, if a weekend period of possession by ' . $petitionerUpper . ' ends on or is immediately followed by a student holiday or a teacher in-service day that falls on a Monday during the regular school term, as determined by the school in which the child is enrolled, or a federal, state, or local holiday that falls on a Monday during the summer months when school is not in session, that weekend period of possession shall end at 6:00 p.m. on that Monday.
    </div>
<div class = "indent-paragraph">3.	Thursdays - On Thursday of each week during the regular school term, beginning at ' . $soleNonPrimaryParentThursdayBegin . ' and ending at ' . $soleNonPrimaryParentThursdayend . '.
    </div>
<div class = "indent-paragraph">4.	Spring Vacation in Even-Numbered Years - In even-numbered years, beginning at ' . $soleNonPrimaryParentVacationEvenYearsBegin . ' for the school&#39;s spring vacation and ending at 6:00 p.m. on the day before school resumes after that vacation.
    </div>
<div class = "indent-paragraph">5.	Extended Summer Possession by ' . $petitionerUpper . ' � 
With Written Notice by April 1 - If ' . $petitionerUpper . ' gives ' . $respondentUpper . ' written notice by April 1 of a year specifying an extended period or periods of summer possession for that year, ' . $petitionerUpper . ' shall have possession of the child for thirty days beginning no earlier than the day after the child&#39;s school is dismissed for the summer vacation and ending no later than seven days before school resumes at the end of the summer vacation in that year, to be exercised in no more than two separate periods of at least seven consecutive days each, as specified in the written notice
  ';
  }
  if($parentingPlan == "Sole Managing Conservator" && $soleNonPrimaryMotherFather == "Father"){
  echo ', provided that the period or periods of extended summer possession do not interfere with Father&#39;s Day possession. These periods of possession shall begin and end at 6:00 p.m. on each applicable day. 
  </div>';

  }else if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Respondent"){
  echo 'These periods of possession shall begin and end at 6:00 p.m. on each applicable day. </div>

<div class = "indent-paragraph">Without Written Notice by April 1 - If ' . $petitionerUpper . ' does not give ' . $respondentUpper . ' written notice by April 1 of a year specifying an extended period or periods of summer possession for that year, ' . $petitionerUpper . ' shall have possession of the child for thirty consecutive days in that year beginning at 6:00 p.m. on July 1 and ending at 6:00 p.m. on July 31.
    </div>
<div class = "indent-paragraph">Notwithstanding the Thursday periods of possession during the regular school term and the weekend periods of possession ORDERED for ' . $petitionerUpper . ', it is expressly ORDERED that ' . $respondentUpper . ' shall have a superior right of possession of the child as follows:
    </div>
<div class = "indent-paragraph">1.Spring Vacation in Odd-Numbered Years - In odd-numbered years, beginning at ' . $soleNonPrimaryParentVacationOddYearsBegin . ' for the school&#39;s spring vacation and ending at 6:00 p.m. on the day before school resumes after that vacation.
    </div>
<div class = "indent-paragraph">2.Summer Weekend Possession by ' . $respondentUpper . ' - If ' . $respondentUpper . ' gives ' . $petitionerUpper . ' written notice by April 15 of a year, ' . $respondentUpper . ' shall have possession of the child on any one weekend beginning at 6:00 p.m. on Friday and ending at 6:00 p.m. on the following Sunday during any one period of the extended summer possession by ' . $petitionerUpper . ' in that year, provided that ' . $respondentUpper . ' picks up the child from ' . $petitionerUpper . ' and returns the child to that same place
    ';
    }
if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Respondent" && $soleNonPrimaryMotherFather == "Father"){
echo ' 
<div class = "indent-paragraph">and that the weekend so designated does not interfere with Father&#39;s Day possession.
    </div>
    ';

}
if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Respondent"){
echo '
Not later than the fifteenth day before the Friday that begins the designated weekend, ' . $respondentUpper . ' must give ' . $petitionerUpper . ' written notice of the location at which ' . $respondentUpper . '  is to pick up and return the child.
    </div>
<div class = "indent-paragraph">3.Extended Summer Possession by ' . $respondentUpper . ' - If ' . $respondentUpper . ' gives ' . $petitionerUpper . ' written notice by April 15 of a year or gives ' . $petitionerUpper . ' fourteen days written notice on or after April 16 of a year, ' . $respondentUpper . ' may designate one weekend beginning no earlier than the day after the child&#39;s school is dismissed for the summer vacation and ending no later than seven days before school resumes at the end of the summer vacation, during which an otherwise scheduled weekend period of possession by ' . $petitionerUpper . ' shall not take place in that year, provided that the weekend so designated does not interfere with ' . $petitionerUpper . '&#39;s period or periods of extended summer possession
    ';
    }
if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Respondent" && $soleNonPrimaryMotherFather == "Father"){
echo  'or with Father&#39;s Day possession.';

}
if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Respondent"){
echo  '
</div>

<div class = "paragraph">(d) Conservators Who Reside More Than 100 Miles Apart
    </div>
<div class = "indent-paragraph">Except as otherwise expressly provided in this Standard Possession Order, when ' . $petitionerUpper . ' resides more than 100 miles from the residence of the child, ' . $petitionerUpper . ' shall have the right to possession of the child as follows:
    </div>
<div class = "indent-paragraph">1.	Weekends - Unless ' . $petitionerUpper . ' elects the alternative period of weekend possession described in the next paragraph, ' . $petitionerUpper . ' shall have the right to possession of the child on weekends beginning at 6:00 p.m., on the first, third, and fifth Friday of each month and ending at 6:00 p.m. on the following Sunday.
    </div>
<div class = "indent-paragraph">Alternate Weekend Possession - In lieu of the weekend possession described in the foregoing paragraph, ' . $petitionerUpper . ' shall have the right to possession of the child not more than one weekend per month of ' . $petitionerUpper . '&#39;s choice beginning at 6:00 p.m. on the day school recesses for the weekend and ending at 6:00 p.m. on the day before school resumes after the weekend.  ' . $petitionerUpper . ' may elect an option for this alternative period of weekend possession by giving written notice to ' . $respondentUpper . ' within ninety days after the parties begin to reside more than 100 miles apart.  If ' . $petitionerUpper . ' makes this election, ' . $petitionerUpper . ' shall give ' . $respondentUpper . ' fourteen days written or telephonic notice preceding a designated weekend.  The weekends chosen shall not conflict with the provisions regarding Christmas, Thanksgiving, the child&#39;s birthday or Mother&#39;s Day or Father&#39;s Day possession below.
    </div>
<div class = "paragraph">2. Weekend Possession Extended by a Holiday �
    </div>
<div class = "indent-paragraph">Except as otherwise expressly provided in this Standard Possession Order, if a weekend period of possession by ' . $petitionerUpper . ' begins on a student holiday or a teacher in-service day that falls on a Friday during the regular school term, as determined by the school in which the child is enrolled, or a federal, state, or local holiday during the summer months when school is not in session, that weekend period of possession shall begin at ' . $soleNonPrimaryWeekendsHolidayBegin .'
    </div>
<div class = "indent-paragraph">Except as otherwise expressly provided in this Standard Possession Order, if a weekend period of possession by ' . $petitionerUpper . ' ends on or is immediately followed by a student holiday or a teacher in-service day that falls on a Monday during the regular school term, as determined by the school in which the child is enrolled, or a federal, state, or local holiday that falls on a Monday during the summer months when school is not in session, that weekend period of possession shall end at 6:00 p.m. on that Monday.
    </div>
<div class = "indent-paragraph">3.Spring Vacation in All Years - Every year, beginning at 6:00 p.m. on the day the child is dismissed from school for the school&#39;s spring vacation and ending at 6:00 p.m. on the day before school resumes after that vacation.
    </div>
<div class = "indent-paragraph">4.Extended Summer Possession by ' . $petitionerUpper . ' � 
    </div>
<div class = "indent-paragraph">With Written Notice by April 1 - If ' . $petitionerUpper . ' gives ' . $respondentUpper . ' written notice by April 1 of a year specifying an extended period or periods of summer possession for that year, ' . $petitionerUpper . ' shall have possession of the child for forty-two days beginning no earlier than the day after the child&#39;s school is dismissed for the summer vacation and ending no later than seven days before school resumes at the end of the summer vacation in that year, to be exercised in no more than two separate periods of at least seven consecutive days each, as specified in the written notice
    ';
    }
if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Respondent" && $soleNonPrimaryMotherFather == "Father"){
echo ', provided that the period or periods of extended summer possession do not interfere with Father&#39;s Day possession';

}
if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Respondent"){
echo '
    These periods of possession shall begin and end at 6:00 p.m. on each applicable day. 
</div>

<div class = "indent-paragraph">Without Written Notice by April 1 - If ' . $petitionerUpper . ' does not give ' . $respondentUpper . ' written notice by April 1 of a year specifying an extended period or periods of summer possession for that year, ' . $petitionerUpper . ' shall have possession of the child for forty-two consecutive days beginning at 6:00 p.m. on June 15 and ending at 6:00 p.m. on July 27 of that year.
    </div>
<div class = "indent-paragraph">Notwithstanding the weekend periods of possession ORDERED for ' . $petitionerUpper . ', it is expressly ORDERED that ' . $respondentUpper . ' shall have a superior right of possession of the child as follows:
    </div>
<div class = "indent-paragraph">1.Summer Weekend Possession by ' . $respondentUpper . ' - If ' . $respondentUpper . ' gives ' . $petitionerUpper . ' written notice by April 15 of a year, ' . $respondentUpper . ' shall have possession of the child on any one weekend beginning at 6:00 p.m. on Friday and ending at 6:00 p.m. on the following Sunday during any one period of possession by ' . $petitionerUpper . ' during ' . $petitionerUpper . '&#39;s extended summer possession in that year, provided that if a period of possession by ' . $petitionerUpper . ' in that year exceeds thirty days, ' . $respondentUpper . ' may have possession of the child under the terms of this provision on any two nonconsecutive weekends during that period and provided that ' . $respondentUpper . ' picks up the child from ' . $petitionerUpper . ' and returns the child to that same place
    ';
    }
    if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Respondent" && $soleNonPrimaryMotherFather == "Father"){
    echo 'and that the weekend so designated does not interfere with Father&#39;s Day possession.';

    }
if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Respondent"){

echo '
</div>
<div class = "indent-paragraph">2.Extended Summer Possession by ' . $respondentUpper . ' - If ' . $respondentUpper . ' gives ' . $petitionerUpper . ' written notice by April 15 of a year, ' . $respondentUpper . ' may designate twenty-one days beginning no earlier than the day after the child&#39;s school is dismissed for the summer vacation and ending no later than seven days before school resumes at the end of the summer vacation in that year, to be exercised in no more than two separate periods of at least seven consecutive days each, during which ' . $petitionerUpper . ' shall not have possession of the child, provided that the period or periods so designated do not interfere with ' . $petitionerUpper . '&#39;s period or periods of extended summer possession
    </div>';
    }
if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Respondent" && $soleNonPrimaryMotherFather == "Father"){
echo 'or with Father&#39;s Day possession.';

}
if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Respondent"){

echo '

These periods of possession shall begin and end at 6:00 p.m. on each applicable day.
    </div>
<div class = "paragraph">(e)Holidays Unaffected by Distance
    </div>
<div class = "indent-paragraph">Notwithstanding the weekend and Thursday periods of possession of ' . $petitionerUpper . ', ' . $petitionerUpper . ' and ' . $respondentUpper . ' shall have the right to possession of the child as follows: 
    </div>
<div class = "indent-paragraph">1.Christmas Holidays in Even-Numbered Years - In even-numbered years, ' . $petitionerUpper . ' shall have the right to possession of the child beginning at ' . $soleNonPrimaryParentChristmasEvenYearsBegin . ' for the Christmas school vacation and ending at noon on December 28, and ' . $respondentUpper . ' shall have the right to possession of the child beginning at noon on December 28 and ending at 6:00 p.m. on the day before school resumes after that Christmas school vacation.
    </div>
<div class = "indent-paragraph">2.Christmas Holidays in Odd-Numbered Years - In odd-numbered years, ' . $respondentUpper . ' shall have the right to possession of the child beginning at ' . $soleNonPrimaryParentChristmasOddYearsBegin . ' for the Christmas school vacation and ending at noon on December 28, and ' . $petitionerUpper . ' shall have the right to possession of the child beginning at noon on December 28 and ending at 6:00 p.m. on the day before school resumes after that Christmas school vacation.
    </div>
<div class = "indent-paragraph">3.Thanksgiving in Odd-Numbered Years - In odd-numbered years, ' . $petitionerUpper . ' shall have the right to possession of the child beginning at ' . $soleNonPrimaryParentThanksgivingOddYears . ' for the Thanksgiving holiday and ending at 6:00 p.m. on the Sunday following Thanksgiving.
    </div>
<div class = "indent-paragraph">4.Thanksgiving in Even-Numbered Years - In even-numbered years, ' . $respondentUpper . ' shall have the right to possession of the child beginning at ' . $soleNonPrimaryParentThanksgivingEvenYears . ' for the Thanksgiving holiday and ending at 6:00 p.m. on the Sunday following Thanksgiving.
    </div>
<div class = "indent-paragraph">5.Child&#39;s Birthday - If a conservator is not otherwise entitled under this Standard Possession Order to present possession of a child on the child&#39;s birthday, that conservator shall have possession of the child, and if elected, the child&#39;s minor siblings, beginning at 6:00 p.m. and ending at 8:00 p.m. on that day, provided that that conservator picks up the child(ren) from the other conservator&#39;s residence and returns the child(ren) to that same place.
    </div>';
    }
if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Respondent" && $soleNonPrimaryMotherFather == "Father"){
echo '
<div class = "indent-paragraph">6.Father&#39;s Day - ' . $petitionerUpper . ' shall have the right to possession of the child each year, beginning at 6:00 p.m. on the Friday preceding Father&#39;s Day and ending at ' . $soleNonPrimaryParentFathersDayEnd . ', provided that if ' . $petitionerUpper . ' is not otherwise entitled under this Standard Possession Order to present possession of the child, he shall pick up the child from ' . $respondentUpper . '&#39;s residence and return the child to that same place.
    </div>
<div class = "indent-paragraph">7.Mother&#39;s Day - ' . $respondentUpper . ' shall have the right to possession of the child each year, beginning at the time school is dismissed on the Friday preceding Mother&#39;s Day and ending at the time school resumes following Mother&#39;s Day weekend, provided that if ' . $respondentUpper . ' is not otherwise entitled under this Standard Possession Order to present possession of the child, she shall pick up the child from ' . $petitionerUpper . '&#39;s residence and return the child to that same place.
    </div>';
}if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Respondent" && $soleNonPrimaryMotherFather == "Mother"){
echo '
<div class = "indent-paragraph">6.Father&#39;s Day - ' . $respondentUpper . ' shall have the right to possession of the child each year, beginning at 6:00 p.m. on the Friday preceding Father&#39;s Day and ending at ' . $soleNonPrimaryParentFathersDayEnd . ', provided that if ' . $respondentUpper . ' is not otherwise entitled under this Standard Possession Order to present possession of the child, he shall pick up the child from ' . $petitionerUpper . '&#39;s residence and return the child to that same place.
    </div>
<div class = "indent-paragraph">7.Mother&#39;s Day - ' . $petitionerUpper . ' shall have the right to possession of the child each year, beginning at the time school is dismissed on the Friday preceding Mother&#39;s Day and ending at the time school resumes following Mother&#39;s Day weekend, provided that if ' . $petitionerUpper . ' is not otherwise entitled under this Standard Possession Order to present possession of the child, she shall pick up the child from ' . $respondentUpper . '&#39;s residence and return the child to that same place.
    </div>';
}
if($parentingPlan == "Sole Managing Conservator" && $solePrimaryParent == "Respondent"){
echo '
<div class = "paragraph">(f)Undesignated Periods of Possession 
    </div>
<div class = "indent-paragraph">' . $respondentUpper . ' shall have the right of possession of the child at all other times not specifically designated in this Standard Possession Order for ' . $petitionerUpper . '.
    </div>
<div class = "paragraph">(g)General Terms and Conditions 
    </div>
<div class = "indent-paragraph">Except as otherwise expressly provided in this Standard Possession Order, the terms and conditions of possession of the child that apply regardless of the distance between the residence of a [parent/conservator] and the child are as follows:
    </div>
<div class = "indent-paragraph">1.Surrender of Child by ' . $respondentUpper . ' - ' . $respondentUpper . ' is ORDERED to surrender the child to ' . $petitionerUpper . ' at the beginning of each period of ' . $petitionerUpper . '&#39;s possession at the residence of ' . $respondentUpper . '.
    </div>
<div class = "indent-paragraph">If a period of possession by ' . $petitionerUpper . ' begins at the time the child&#39;s school is regularly dismissed, ' . $respondentUpper . ' is ORDERED to surrender the child to ' . $petitionerUpper . ' at the beginning of each such period of possession at the school in which the child is enrolled.  If the child is not in school, ' . $petitionerUpper . ' shall pick up the child at the residence of ' . $respondentUpper . ' at 6:00 p.m., and ' . $respondentUpper . ' is ORDERED to surrender the child to ' . $petitionerUpper . ' at the residence of ' . $respondentUpper . ' at 6:00 p.m. under these circumstances.
    </div>
<div class = "indent-paragraph">2.Return of Child by ' . $petitionerUpper . ' - ' . $petitionerUpper . ' is ORDERED to return the child to the residence of ' . $respondentUpper . ' at the end of each period of possession.  However, it is ORDERED that, if ' . $respondentUpper . ' and ' . $petitionerUpper . ' live in the same county at the time of rendition of this order, ' . $petitionerUpper . '&#39;s county of residence remains the same after rendition of this order, and ' . $respondentUpper . '&#39;s county of residence changes, effective on the date of the change of residence by ' . $respondentUpper . ', ' . $petitionerUpper . ' shall surrender the child to ' . $respondentUpper . ' at the residence of ' . $petitionerUpper . ' at the end of each period of possession.
    </div>
<div class = "indent-paragraph">If a period of possession by ' . $petitionerUpper . ' ends at the time the child&#39;s school resumes, ' . $petitionerUpper . ' is ORDERED to surrender the child to ' . $respondentUpper . ' at the end of each such period of possession at the school in which the child is enrolled or, if the child is not in school, at the residence of ' . $petitionerUpper . ' at 6:00 p.m.
    </div>
<div class = "indent-paragraph">3.Surrender of Child by ' . $petitionerUpper . ' - ' . $petitionerUpper . ' Is ORDERED to surrender the child to ' . $respondentUpper . ', if the child is in ' . $petitionerUpper . '&#39;s possession or subject to ' . $petitionerUpper . '&#39;s control, at the beginning of each period of ' . $respondentUpper . '&#39;s exclusive periods of possession, at the place designated in this Standard Possession Order.
    </div>
<div class = "indent-paragraph">4.Return of Child by ' . $respondentUpper . ' - ' . $respondentUpper . ' is ORDERED to return the child to ' . $petitionerUpper . ', if ' . $petitionerUpper . ' is entitled to possession of the child, at the end of each of ' . $respondentUpper . '&#39;s exclusive periods of possession, at the place designated in this Standard Possession Order.
    </div>
<div class = "indent-paragraph">5.Personal Effects - Each conservator is ORDERED to return with the child the personal effects that the child brought at the beginning of the period of possession.
    </div>
<div class = "indent-paragraph">6.Designation of Competent Adult - Each conservator may designate any competent adult to pick up and return the child, as applicable.  IT IS ORDERED that a conservator or a designated competent adult be present when the child is picked up or returned.
    </div>
<div class = "indent-paragraph">7.Inability to Exercise Possession - Each conservator is ORDERED to give notice to the person in possession of the child on each occasion that the conservator will be unable to exercise that conservator&#39;s right of possession for any specified period.
    </div>
<div class = "indent-paragraph">8.Written Notice - Written notice, including notice provided by electronic mail or facsimile, shall be deemed to have been timely made if received or, if applicable, postmarked before or at the time that notice is due.  Each conservator is ORDERED to notify the other conservator of any change in the conservator&#39;s electronic mail address or facsimile number within twenty-four hours after the change.
    </div>
<div class = "indent-paragraph">9.	Notice to School and ' . $respondentUpper . ' - If ' . $petitionerUpper . '&#39;s time of possession of the child ends at the time school resumes and for any reason the child is not or will not be returned to school, ' . $petitionerUpper . ' shall immediately notify the school and ' . $respondentUpper . ' that the child will not be or has not been returned to school.
    </div>';

}//Sole Managing CONSERVATOR

?>

<!--- 50/50 ALTERNATING WEEKS ---->

<?php if($parentingPlan == "50/50 Alternating Weeks"){
echo '


<div class = "paragraph"><u>1. Possession Schedule � Alternating Weeks </u>
    </div>
<div class = "indent-paragraph">The Court finds that the following provisions of this Possession Order are in the best interest of the child, and the Court finds that the parties have agreed to deviate from the Standard Possession Order contained in the Texas Family Code at sections 153.311 through 153.317.
    </div>
<div class = "indent-paragraph">IT IS ORDERED that each conservator shall comply with all terms and conditions of this Possession Order.  IT IS ORDERED that this Possession Order is effective ' . $altWeekEffectie . ' and applies to all periods of possession occurring on and after the date the Court signs this Possession Order.  IT IS, THEREFORE, ORDERED:
    </div>
<div class = "indent-paragraph"><b>(a) <u>	Definitions </u></b>
    </div>
<div class = "indent-paragraph-sub">1. 	In this Possession Order "school" means the primary or secondary school in which the child is enrolled or, if the child is not enrolled in a primary or secondary school, the public school district in which the child primarily resides.
    </div>
<div class = "indent-paragraph-sub">2. 	In this Possession Order �child� includes each child, whether one or more, who is a subject of this suit while that child is under the age of eighteen years and not otherwise emancipated.
    </div>
<div class = "indent-paragraph"><b>(b) <u>	Mutual Agreement or Specified Terms for Possession</b></u>
    </div>
<div class = "indent-paragraph">IT IS ORDERED that the conservators shall have possession of the child at times mutually agreed to in advance by the parties, and, in the absence of mutual agreement, it is ORDERED that the conservators shall have possession of the child under the specified terms set out in this Possession Order.
    </div>
<div class = "indent-paragraph"><b>(c) <u>	Alternating Weeks �</u></b> 
    </div>
<div class = "indent-paragraph">1. ' . $altWeekMother . ' shall have possession of the child every other week beginning when school is dismissed on Friday, (or 3:00PM if school is not in session) and ending when school is dismissed on the immediately following Friday (or 3:00PM if school is not in session).  ' . $altWeekMother . '�s alternating week possession periods shall begin ' . $altWeekBeginMother . '
    </div>
<div class = "indent-paragraph">2. ' . $altWeekFather . ' shall have possession of the child every other week beginning when school is dismissed on Friday, (or 3:00PM if school is not in session) and ending when school is dismissed on the immediately following Friday (or 3:00PM if school is not in session).  ' . $altWeekFather . '�s alternating week possession periods shall begin ' . $altWeekBeginFather . '.
    </div>
<div class = "indent-paragraph">IT IS ORDERED that in calculating each party�s alternating weekly periods of possession, the periods shall continue to count for the purposes of alternating them even if such alternating weekly periods of possession are superseded by Spring Break, or Holiday periods of possession.
    </div>
<div class = "indent-paragraph"><b>(d) <u>	Spring Break and Extended Summer Possession </u>
    </div>
<div class = "indent-paragraph">Notwithstanding the weekend and weekday (non-holiday) periods of possession ORDERED, it is explicitly ORDERED that ' . $altWeekMother . ' and ' . $altWeekFather . ' shall have a superior right of possession of the child as follows:
    </div>
<div class = "indent-paragraph">1.	Spring Break in Even-Numbered Years - In even-numbered years, ' . $altWeekMother . ' shall have possession of the child beginning at the time the child&#39;s school is regularly dismissed on the day the child is dismissed from school for the school&#39;s spring vacation and ending at 6:00 p.m. on the day before school resumes and after spring break vacation. 
    </div>
<div class = "indent-paragraph">2.	Spring Break in Odd-Numbered Years - In odd-numbered years, ' . $altWeekFather . ' shall have possession of the child beginning at the time the child&#39;s school is regularly dismissed on the day the child is dismissed from school for the school&#39;s spring vacation and ending at 6:00 p.m. on the day before school resumes and after spring break vacation.
    </div>
<div class = "indent-paragraph">3.	Summer Possession: IT IS ORDERED that each parent shall each have fourteen (14) days of possession in the summer to be exercised in two (2) separate periods of seven (7) consecutive days each, beginning no earlier than the day after the children�s school are dismissed from the summer vacation and ending no later than seven days before school resumes at the end of the summer vacation in that year. ' . $altWeekBeginMother . ' shall not choose summer possession that interferes with Father�s Day weekend. Each period of possession shall begin and end at 6:00 p.m. on each applicable day, as specified in the written notice.
    </div>
<div class = "indent-paragraph">IT IS ORDERED that ' . $altWeekMother . ' shall designate and give notice of her two weeks of summer possession to ' . $altWeekFather . ' on or before April 1, in odd-numbered years, and on or before April 15, in even-numbered years.
    </div>
<div class = "indent-paragraph">IT IS ORDERED that ' . $altWeekFather. ' shall designate and give notice of his two weeks of summer possession to ' . $altWeekMother . ' on or before April 15, in odd-numbered years, and on or before April 1, in even-numbered years.
    </div>
<div class = "indent-paragraph"><b>(e) 	<u>Holiday Possession</u>
    </div>
<div class = "indent-paragraph">Notwithstanding the weekend, Spring Break and Extended Summer periods of possession of the parties, ' . $altWeekMother . ' and ' . $altWeekFather . ' shall have the superior right to possession of the child as follows:
    </div>
<div class = "indent-paragraph">1. 	Christmas Holidays in Even-Numbered Years�In even-numbered years, ' . $altWeekFather. ' shall have the right to possession of the child beginning at the time the child�s school is regularly dismissed on the day the child is dismissed from school for the Christmas school vacation and ending at noon on December 28, and ' . $altWeekMother. ' shall have the right to possession of the child beginning at noon on December 28 and ending at the time school resumes after that Christmas school vacation.
    </div>
<div class = "indent-paragraph">2. 	Christmas Holidays in Odd-numbered Years�In odd-numbered years, ' . $altWeekMother. ' shall have the right to possession of the child beginning at the time the child�s school is regularly dismissed on the day the child is dismissed from school for the Christmas school vacation and ending at noon on December 28, and ' . $altWeekFather. ' shall have the right to possession of the child beginning at noon on December 28 and ending at the time the child�s school resumes after that Christmas school vacation.
    </div>
<div class = "indent-paragraph">3. 	Thanksgiving in Odd-numbered Years�In odd-numbered years, ' . $altWeekFather. ' shall have the right to possession of the child beginning at the time the child�s school is regularly dismissed on the day the child is dismissed from school for the Thanksgiving holiday and ending at the time the child�s school resumes after that Thanksgiving holiday.
    </div>
<div class = "indent-paragraph">4. 	Thanksgiving in Even-Numbered Years�In even-numbered years, ' . $altWeekMother. ' shall have the right to possession of the child beginning at the time the child�s school is regularly dismissed on the day the child is dismissed from school for the Thanksgiving holiday and ending at the time the child�s school resumes after that Thanksgiving holiday.
    </div>
<div class = "indent-paragraph">5. 	Child�s Birthday�If a conservator is not otherwise entitled under this Possession Order to present possession of the child on the child�s birthday that conservator shall have possession of the child, and the child�s minor siblings, beginning at 6:00 P.M. and ending at 8:00 P.M. on that day, provided that the conservator picks up the child from the other conservator�s residence and returns the child to that same place.
    </div>
<div class = "indent-paragraph">6. 	Father&#39;s Day Weekend - ' . $altWeekFather. ' shall have the right to possession of the child each year, beginning at 3:00 p.m. on the Friday preceding Father&#39;s Day and ending at 8:00 a.m. on the Monday following Father&#39;s Day, provided that if ' . $altWeekFather. ' is not otherwise entitled under this Possession Order to present possession of the child, he shall pick up the child from ' . $altWeekMother. '�s residence and return the child to that same place.
    </div>
<div class = "indent-paragraph">7.	Mother&#39;s Day Weekend - ' . $altWeekMother. ' shall have the right to possession of the child each year, beginning at the time the child�s school is regularly dismissed on the day the child is dismissed from school for Mother�s Day weekend and ending at the time the child�s school resumes after Mother&#39;s Day, provided that if ' . $altWeekMother. ' is not otherwise entitled under this Possession Order to present possession of the child, she shall pick up the child from [FATHER]�s residence and return the child to that same place.
    </div>
<div class = "indent-paragraph"><b>(f) <u>	General Terms and Conditions </u>
    </div>
<div class = "indent-paragraph">Except as otherwise explicitly provided in this Possession Order, the terms and conditions of possession of the child are as follows:
    </div>
<div class = "indent-paragraph">1. 	Surrender of Child by ' . $altWeekMother . '�' . $altWeekMother. ' is ORDERED to surrender the child to ' . $altWeekFather. ' at the beginning of each period of ' . $altWeekFather. '�s possession at the school in which the child is enrolled. If school is not in session, ' . $altWeekMother. ' is ORDERED to surrender the child to ' . $altWeekFather. ' at the residence of ' . $altWeekMother. '.
    </div>
<div class = "indent-paragraph">2.	Surrender of Child by ' . $altWeekFather. '�' . $altWeekFather. ' is ORDERED to surrender the child to ' . $altWeekMother. ' at the beginning of each period of ' . $altWeekMother. '�s possession at the school in which the child is enrolled. If school is not in session, ' . $altWeekFather. ' is ORDERED to surrender the child to ' . $altWeekMother. ' at the residence of ' . $altWeekFather. '.
    </div>
<div class = "indent-paragraph">3. 	Surrender of Child by ' . $altWeekFather. '-' . $altWeekFather. ' is ORDERED to surrender the child to ' . $altWeekMother . ', if the child is in ' . $altWeekFather. '�s possession or subject to ' . $altWeekFather. '�s control, at the beginning of each period of ' . $altWeekMother . '�s exclusive periods of possession, at the place designated in this Possession Order.
    </div>
<div class = "indent-paragraph">4. 	Surrender of Child by ' . $altWeekMother . '-' . $altWeekMother . ' is ORDERED to surrender the child to ' . $altWeekFather . ', if the child is in ' . $altWeekMother . '�s possession or subject to ' . $altWeekMother . '�s control, at the beginning of each period of ' . $altWeekFather . '�s exclusive periods of possession, at the place designated in this Possession Order.
    </div>
<div class = "indent-paragraph">5. 	Personal Effects�Each conservator is ORDERED to return with the child the personal effects that the child brought at the beginning of the period of possession.
    </div>
<div class = "indent-paragraph">6. 	Designation of Competent Adult�Each conservator may designate any competent adult to pick up and return the child, as applicable. IT IS ORDERED that a conservator or a designated competent adult be present when the child is picked up or returned.
    </div>
<div class = "indent-paragraph">7. 	Inability to Exercise Possession�Each conservator is ORDERED to give as much advance notice as possible to the person in possession of the child on each occasion that the conservator will be unable to exercise that conservator�s right of possession for any specified period.
    </div>
<div class = "indent-paragraph">8.	Written Notice�Written notice shall be deemed to have been timely made if received or postmarked before or at the time that notice is due.
    </div>
<div class = "indent-paragraph">9.	Telephone Access- Each parent shall be allowed reasonable telephone access with the child when the child is in the possession of the other parent.  Reasonable is considered one telephone call per day for a duration not to exceed approximately ten minutes.
    </div>
<div class = "indent-paragraph">10.	Child Care Costs- Each parent shall be responsible for any child-care costs incurred while the child is in that parent�s possession including but not limited to after school care, summer care and camps.
    </div>
<div class = "indent-paragraph">11.	Notice to School and other Conservator - If a conservator�s time of possession of the child ends at the time school resumes and for any reason the child is not or will not be returned to school, the conservator shall immediately notify the school and the other conservator that the child will not be or has not been returned to school.
This concludes the Possession Order.
    </div>';
} ?>

<!---- 50/50 split weeks ---->

<?php if($parentingPlan == "50/50 Split Weeks"){

echo '

<div class = "paragraph">1.	<u> Possession Schedule - Equalized </u>
    </div>
<div class = "indent-paragraph">The Court finds that the following provisions of this Possession Order are in the best interest of the child, and the Court finds that good cause exists to deviate from the Standard Possession Order contained in the Texas Family Code at sections 153.311 through 153.317, as the Standard Possession Order is unworkable or inappropriate under the circumstances.
    </div>
 <div class = "indent-paragraph">IT IS ORDERED that each conservator shall comply with all terms and conditions of this Possession Order.  IT IS ORDERED that this Possession Order is effective ' . $splitWeekEffectie . ' and applies to all periods of possession occurring on and after the date the Court signs this Possession Order.  IT IS, THEREFORE, ORDERED:
    </div>
<div class = "indent-paragraph">(a)	Definitions
    </div>
<div class = "indent-paragraph-sub">1.	In this Possession Order "school" means the primary or secondary school in which the child is enrolled or, if the child is not enrolled in a primary or secondary school, the public school district in which the child primarily resides.
    </div>
<div class = "indent-paragraph-sub">2.	In this Possession Order �child� includes each child, whether one or more, who is a subject of this suit while that child is under the age of eighteen years and not otherwise emancipated.
    </div>
<div class = "indent-paragraph">(b)	Mutual Agreement or Specified Terms for Possession
    </div>
<div class = "indent-paragraph">IT IS ORDERED that the conservators shall have possession of the child at times mutually agreed to in advance by the parties, and, in the absence of mutual agreement, it is ORDERED that the conservators shall have possession of the child under the specified terms set out in this Possession Order.
    </div>
<div class = "indent-paragraph">(c)	Weekend and Weekday Possession
    </div>
<div class = "indent-paragraph">' . $splitWeekMother . ' shall have the right to possession of the child as follows:
    </div>
<div class = "indent-paragraph">1.	Monday and Tuesday- On Monday and Tuesday every week beginning at 8:00 a.m. on Monday morning and ending at the time the child�s school resumes on Wednesday morning or 8:00 a.m. when school is not in session.
    </div>
<div class = "indent-paragraph">2.	Weekends- Every other Friday, Saturday and Sunday, beginning at the time school resumes on Friday morning and ending at the time the child�s school resumes on Monday morning.  Beginning Friday, ' . $splitWeekFirstFriday . ' and every other weekend thereafter.  If school is not in session beginning at 8:00 a.m. on Friday and ending at 8:00 a.m. the following Monday.
    </div>
<div class = "indent-paragraph">' . $splitWeekFather . ' shall have the right to possession of the child as follows:
    </div>
<div class = "indent-paragraph">1.	Wednesday and Thursday- On Wednesday and Thursday of each week beginning at the time school resumes on Wednesday morning or at 8:00 a.m. when school is not in session and ending at the time school resumes on Friday morning or 8:00 a.m. when school is not in session.
    </div>
<div class = "indent-paragraph">2.	Weekends- Every other Friday, Saturday and Sunday, beginning at the time school resumes on Friday morning and ending at the time the child�s school resumes on Monday morning.  Beginning Friday, ' . $splitWeekSecondFriday . ' and every other weekend thereafter.  If school is not in session beginning at 8:00 a.m. on Friday and ending at 8:00 a.m. the following Monday.
    </div>
<div class = "indent-paragraph">IT IS ORDERED that in calculating the weekend periods of possession, the periods shall continue to count for the purposes of alternating them even if they are superseded by Spring Break, Extended Summer, or Holiday periods of possession.  This possession schedule shall continue during the summer months save and except for the provisions below regarding extended summer possession by each parent:
    </div>
<div class = "indent-paragraph">(d)	Spring Break and Extended Summer Possession for ' . $splitWeekMother . ' 
    </div>
<div class = "indent-paragraph">Notwithstanding the weekend and weekday (non-holiday) periods of possession ORDERED for ' . $splitWeekFather . ', it is explicitly ORDERED that ' . $splitWeekMother . ' shall have a superior right of possession of the child as follows:
    </div>
<div class = "indent-paragraph">1.	Spring Break in Even-Numbered Years�In even-numbered years, beginning at the time the child�s school is regularly dismissed on the day the child is dismissed from school for the school�s spring vacation and ending at the time school resumes after that vacation.
    </div>
<div class = "indent-paragraph">2.	Extended Summer Possession by ' . $splitWeekMother . '�
    </div>
<div class = "indent-paragraph">First Choice in Odd-Numbered Years With Written Notice by April 1st.  If ' . $splitWeekMother . ' gives ' . $splitWeekFather . ' written notice by April 1st of an odd-numbered year specifying an extended period of summer possession for that year, ' . $splitWeekMother . ' shall have possession of the child for fourteen consecutive days specified in the written notice beginning no earlier than the day after the child�s school is dismissed for the summer vacation and ending no later than seven days before school resumes at the end of the summer vacation in that year.  These periods of possession shall begin and end at 6:00 p.m.
    </div>
<div class = "indent-paragraph">Without Written Notice by April 1 in Odd-Numbered Years� If ' . $splitWeekMother . ' does not give ' . $splitWeekFather . ' written notice by April 1 of an odd-numbered year specifying an extended period of summer possession for that year, ' . $splitWeekMother . ' shall have possession of the child beginning Sunday of the first full week of July for fourteen days beginning at 6:00 p.m. and ending at 6:00 p.m. on Sunday.
    </div>
<div class = "indent-paragraph">Second Choice in Even-Numbered Years With Written Notice by April 15th- If ' . $splitWeekMother . ' gives ' . $splitWeekFather . ' written notice by April 15 of an even-numbered year specifying an extended period of summer possession for that year, ' . $splitWeekMother . ' shall have possession of the child for fourteen days as specified in the written notice beginning no earlier than the day after the child�s school is dismissed for the summer vacation and ending no later than seven days before school resumes at the end of the summer vacation in that year, provided that the period or periods of extended summer possession do not interfere with [FATHER]�s period of Extended Summer Possession in that year or Father�s Day weekend.  These periods of possession shall begin and end at 6:00 p.m.
    </div>
<div class = "indent-paragraph">Without Written Notice by April 15 in Even-Numbered Years�If ' . $splitWeekMother . '  does not give ' . $splitWeekFather . '  written notice by April 15 of an even-numbered year specifying an extended period or periods of summer possession for that year, ' . $splitWeekMother . '  shall have possession of the child for fourteen days beginning at 6:00 p.m. on the Sunday of the third full week of July and ending 14 days later at 6:00 P.M.
    </div>
<div class = "paragraph">(a) Spring Break and Extended Summer Possession for ' . $splitWeekFather . '
    </div>
<div class = "indent-paragraph">Notwithstanding the weekend and weekday (non-holiday) periods of possession ORDERED for ' . $splitWeekMother . ', it is explicitly ORDERED that ' . $splitWeekFather . ' shall have a superior right of possession of the child as follows:
    </div>
<div class = "indent-paragraph">1.	Spring Break in Odd-Numbered Years�In odd-numbered years, beginning at the time the child�s school is regularly dismissed on the day the child is dismissed from school for the school�s spring vacation and ending at the time school resumes after that vacation.
    </div>
<div class = "indent-paragraph">2.	Extended Summer Possession by ' . $splitWeekFather . '�
    </div>
<div class = "indent-paragraph">First Choice in Even-Numbered Years With Written Notice by April 1st.  If ' . $splitWeekFather . ' gives ' . $splitWeekMother . ' written notice by April 1st of an even-numbered year specifying an extended period of summer possession for that year, ' . $splitWeekFather . ' shall have possession of the child for fourteen consecutive days specified in the written notice beginning no earlier than the day after the child�s school is dismissed for the summer vacation and ending no later than seven days before school resumes at the end of the summer vacation in that year.  These periods of possession shall begin and end at 6:00 p.m.
    </div>
<div class = "indent-paragraph">Without Written Notice by April 1 in Even-Numbered Years�If ' . $splitWeekFather . ' does not give ' . $splitWeekMother . ' written notice by April 1 of an Even-Numbered year specifying an extended period of summer possession for that year, ' . $splitWeekFather . ' shall have possession of the child beginning the Sunday of the first full week of July for fourteen days beginning at 6:00 p.m. and ending at 6:00 p.m. on Sunday.
    </div>
<div class = "indent-paragraph">Second Choice in Odd-Numbered Years With Written Notice by April 15th. - If ' . $splitWeekFather . ' gives ' . $splitWeekMother . ' written notice by April 15 of an odd-numbered year specifying an extended period of summer possession for that year, ' . $splitWeekFather . ' shall have possession of the child for fourteen days as specified in the written notice beginning no earlier than the day after the child�s school is dismissed for the summer vacation and ending no later than seven days before school resumes at the end of the summer vacation in that year, provided that the period or periods of extended summer possession do not interfere with ' . $splitWeekMother . '�s period of Extended Summer Possession in that year.  These periods of possession shall begin and end at 6:00 p.m.
    </div>
<div class = "indent-paragraph">Without Written Notice by April 15 in Odd-Numbered Years�If ' . $splitWeekFather . ' does not give ' . $splitWeekMother . ' written notice by April 15 of an even-numbered year specifying an extended period or periods of summer possession for that year, ' . $splitWeekFather . ' shall have possession of the child for fourteen days beginning at 6:00 p.m. on the Sunday of the third full week of July and ending 14 days later at 6:00 P.M. on Sunday.
    </div>
<div class = "paragraph">(f)	Holiday Possession
    </div>
<div class = "indent-paragraph">Notwithstanding the weekend, weekday, Spring Break and Extended Summer periods of possession of the parties, ' . $splitWeekMother . ' and ' . $splitWeekFather . ' shall have the right to possession of the child as follows:
    </div>
<div class = "indent-paragraph">1.	Christmas Holidays in Even-Numbered Years�In even-numbered years, ' . $splitWeekMother . ' shall have the right to possession of the child beginning at the time the child�s school is regularly dismissed on the day the child is dismissed from school for the Christmas school vacation and ending at noon on December 28, and ' . $splitWeekFather . ' shall have the right to possession of the child beginning at noon on December 28 and ending at the time school resumes after that Christmas school vacation.
    </div>
<div class = "indent-paragraph">2.	Christmas Holidays in Odd-numbered Years�In odd-numbered years, ' . $splitWeekFather . ' shall have the right to possession of the child beginning at the time the child�s school is regularly dismissed on the day the child is dismissed from school for the Christmas school vacation and ending at noon on December 28, and ' . $splitWeekMother . ' shall have the right to possession of the child beginning at noon on December 28 and ending at the time the child�s school resumes after that Christmas school vacation.
    </div>
<div class = "indent-paragraph">3.	Thanksgiving in Odd-numbered Years�In odd-numbered years, ' . $splitWeekMother . ' shall have the right to possession of the child beginning at the time the child�s school is regularly dismissed on the day the child is dismissed from school for the Thanksgiving holiday and ending at the time the child�s school resumes after that Thanksgiving holiday.
    </div>
<div class = "indent-paragraph">4.	Thanksgiving in Even-Numbered Years�In even-numbered years, ' . $splitWeekFather . ' shall have the right to possession of the child beginning at the time the child�s school is regularly dismissed on the day the child is dismissed from school for the Thanksgiving holiday and ending at the time the child�s school resumes after that Thanksgiving holiday.
    </div>
<div class = "indent-paragraph">5.	Child�s Birthday�If a conservator is not otherwise entitled under this Possession Order to present possession of the child on the child�s birthday, that conservator shall have possession of the child beginning at 6:00 p.m. and ending at 8:00 p.m. on that day, provided that conservator picks up the child from the other conservator�s residence and returns the child to that same place.
    </div>
<div class = "indent-paragraph">6.	Father�s Day�' . $splitWeekFather . ' shall have the right to possession of the child each year, beginning at 8:00 a.m. on the Friday preceding Father�s Day and ending at 8:00 p.m. on Father�s Day, provided that if ' . $splitWeekFather . ' is not otherwise entitled under this Possession Order to present possession of the child, he shall pick up the child from the other conservator�s residence and return the child to that same place.
    </div>
<div class = "indent-paragraph">7. Mother�s Day�' . $splitWeekMother . ' shall have the right to possession of the child each year, beginning at 8:00 a.m. on the Friday preceding Mother�s Day and ending at 8:00 p.m. on Mother�s Day, provided that if ' . $splitWeekMother . ' is not otherwise entitled under this Possession Order to present possession of the child, she shall pick up the child from the other conservator�s residence and return the child to that same place.
    </div>
<div class = "paragraph">(f)	General Conditions
    </div>
<div class = "indent-paragraph">1.	Surrender of Child by ' . $splitWeekMother . ' - If a period of possession by ' . $splitWeekFather . ' begins at the time the child�s school resumes or is dismissed, ' . $splitWeekMother . ' is ORDERED to surrender the child to ' . $splitWeekFather . ' at the beginning of each such period of possession at the school in which the child is enrolled.
    </div>
<div class = "indent-paragraph">2.  If the child is not in school ' . $splitWeekFather . ' shall pick up the child at the residence of ' . $splitWeekMother . ' at 8:00 a.m., and ' . $splitWeekMother . ' is ORDERED to surrender the child to ' . $splitWeekFather . ' at the residence of ' . $splitWeekMother . ' at 8:00 a.m. under these circumstances.
    </div>
<div class = "indent-paragraph">3.	Surrender of Child by ' . $splitWeekFather . '�' . $splitWeekFather . ' is ORDERED to surrender the child to ' . $splitWeekMother . ' at the beginning of each period of ' . $splitWeekMother . '�s possession at the residence of ' . $splitWeekFather . '.
    </div>
<div class = "indent-paragraph">4.  If a period of possession by ' . $splitWeekMother . ' begins at the time the child�s school resumes or is regularly dismissed, ' . $splitWeekFather . ' is ORDERED to surrender the child to ' . $splitWeekMother . ' at the beginning of each such period of possession at the school in which the child is enrolled.
    </div>
<div class = "indent-paragraph">5.  If the child is not in school, ' . $splitWeekMother . ' shall pick up the child at the residence of ' . $splitWeekFather . ' at 8:00 a.m., and ' . $splitWeekFather . ' is ORDERED to surrender the child to ' . $splitWeekMother . ' at the residence of ' . $splitWeekMother . ' at 8:00 a.m. under these circumstances.
    </div>
<div class = "indent-paragraph">6.	Personal Effects�Each Conservator is ORDERED to ensure that the child has an adequate supply of clothes and school uniforms at their own residence.  Each Conservator is ORDERED to return with the child the personal effects that the child brought at the beginning of the period of possession that belong at the other parent�s residence.
    </div>
<div class = "indent-paragraph">7.	Designation of Competent Adult�Each conservator may designate any competent adult to pick up and return the child, as applicable. IT IS ORDERED that a conservator or a designated competent adult be present when the child is picked up or returned.
    </div>
<div class = "indent-paragraph">8.  Inability to Exercise Possession�Each conservator is ORDERED to give as much advance notice as possible to the person in possession of the child on each occasion that the conservator will be unable to exercise that conservator�s right of possession for any specified period.
    </div>
<div class = "indent-paragraph">9.  Written Notice�Written notice shall be deemed to have been timely made if received or postmarked before or at the time that notice is due.
    </div>
<div class = "indent-paragraph">10. Telephone Access- Each parent shall be allowed reasonable telephone access with the child when the child is in the possession of the other parent.  Reasonable is considered one telephone call per day for a duration not to exceed approximately ten minutes.
    </div>
<div class = "indent-paragraph">11. Child Care Costs- Each parent shall be responsible for any child care costs incurred while the child is in that parent�s possession including but not limited to after school care, summer care and camps.
    </div>
<div class = "indent-paragraph">12. Notice to School and other Conservator - If a conservator�s time of possession of the child ends at the time school resumes and for any reason the child is not or will not be returned to school, the conservator shall immediately notify the school and the other conservator that the child will not be or has not been returned to school.
    </div>
<div class = "indent-paragraph">This concludes the Possession Order.
    </div>';
    } ?>

<div class = "paragraph">2.  	<u>Duration</u>    
    </div>
<div class = "indent-paragraph">The periods of possession ordered above apply to each child the subject of this suit while that child is under the age of eighteen years and not otherwise emancipated.    
    </div>
<div class = "paragraph">3.	<u>Noninterference with Possession</u>
    </div>
<div class = "indent-paragraph">Except as expressly provided herein, IT IS ORDERED that neither conservator shall take possession of the child during the other conservator's period of possession unless there is a prior written agreement signed by both conservators or in case of an emergency.    
    </div>
 <div class = "indent-paragraph">4.	<u>No Family Violence</u>   
    </div>
<div class = "indent-paragraph">It has been represented to the Court that there has been no pattern of child neglect or family violence by any party to this case within two years preceding the filing of this case or during the pendency of this case.    
    </div>
 <div class = "indent-paragraph">5.	<u>Termination of Orders</u>    
    </div>
<div class = "indent-paragraph">The provisions of this order relating to conservatorship, possession, or access terminate on the remarriage of <?php echo $petitionerUpper . ' and ' . $respondentUpper;?> unless a nonparent or agency has been appointed conservator of the child under chapter 153 of the Texas Family Code.    
    </div>
 <div class = "paragraph"> <i><b>Child Support </i></b>   
    </div>
<div class = "indent-paragraph"> IT IS ORDERED that [OBLIGOR] is obligated to pay and shall pay to [OBLIGEE] child support of $[CHILD SUPPORT AMOUNT] per month, with the first payment being due and payable on [DATE OF FIRST CHILD SUPPORT PAYMENT] and a like payment being due and payable on the first day of each month thereafter until the first month following the date of the earliest occurrence of one of the events specified below:   
    </div>
 <div class = "indent-paragraph">    
    </div>
<div class = "indent-paragraph">    
    </div>
 <div class = "indent-paragraph">    
    </div>
<div class = "indent-paragraph">    
    </div>
 <div class = "indent-paragraph">    
    </div>
<div class = "indent-paragraph">    
    </div>
 <div class = "indent-paragraph">    
    </div>
<div class = "indent-paragraph">    
    </div>
 <div class = "indent-paragraph">    
    </div>
<div class = "indent-paragraph">    
    </div>
 <div class = "indent-paragraph">    
    </div>
<div class = "indent-paragraph">    
    </div>
    








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

