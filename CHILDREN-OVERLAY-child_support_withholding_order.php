<?php

/*
 * Template Name: Child Support Withholding Order Overlay
 * Version: 1.0
 * Description: Overlaying the Child Support Withholding Order document
 * Author: Bliksem LLC
 * Author URI: https://simplifysmallbiz.com
 * Group: 2. Second Review
 * Required PDF Version: 4.4.0
 * Toolkit: true
 */

// Looks like this is a duplicate

/* Prevent direct access to the template */
if (!class_exists('GFForms')) {
    return;
}

/**
 * Gravity PDF Toolkit templates have access to the following variables
 *
 * @var array  $form      The current Gravity Form array
 * @var array  $entry     The raw entry data
 * @var array  $form_data The processed entry data stored in an array
 * @var object $settings  The current PDF configuration
 * @var array  $fields    An array of Gravity Form fields which can be accessed with their ID number
 * @var array  $config    The initialised template config class � eg. /config/zadani.php
 * @var object $gfpdf     The main Gravity PDF object containing all our helper classes
 * @var array  $args      Contains an array of all variables - the ones being described right now - passed to the template
 */

/**
 * @var GFPDF\Plugins\DeveloperToolkit\Writer\Writer $w    A helper class that does the heavy lifting and PDF manipulation
 * @var \mPDF|\Mpdf\Mpdf|\GFPDF_Vendor\Mpdf\Mpdf      $mpdf The raw Mpdf object
 */

// GLOBAL VARIABLES
$client_user_id = $form_data['misc']['created_by'];
$selectOption = 'X';

//remitance Information
$remitanceDateofOrder = '01/02/2021'; //PARALEGAL
$remitanceNoDaysBeginWithholding = '2'; //Use 2
$remitanceNoBusinessDaysBeginWithholding = '2'; //Use 2
$remitancePercentage = '50'; //50% always
$remitanceSDUPayee = 'Texas State Disbursement Unit (SDU)  '; //Always this
$remitanceSDUPayeeAddress = 'P. O Box 65791, San Antonio, Texas 78265-9791'; // Always this

//$petitionerDoB = $form_data['field']['229']; /* Realtors First Name  */

/* Load PDF Styles */
$w->beginStyles();
?>
<style>
/* Helper styles to see the field mapping. Remove when ready. */
.single,
.multi {
  background: rgba(244, 247, 118, 0.5) color: #000;
}
</style>
<?php
$w->endStyles();

/*
 * Begin PDF Generation
 *
 * The API documentation can be found at https://gravitypdf.com/developer-toolkit-api-documentation/
 */
$w->addPdf(__DIR__ . '/pdfs/Child-Support-Withholding-Order.pdf'); /* CHANGE THIS TO POINT TO YOUR PDF */

/* PAGE 1
 ********* */
$w->addPage(1);

/* Section I Sender Information
 *********************************************************************************************************************** */
// VARIABLES

// Date of the order
$date_of_order = '01/01/2022'; // ?
// State of Jurisdiction
$juris_state = strtoupper('Texas'); // Right F You
// County of Jurisdiction
$juris_county = strtoupper('Collin'); // Right F You
// Cause Number
$juris_cause_nmber = '1234'; // Masters

// OUTPUT
// Date of the order
$w->add($date_of_order, [139, 21, 40, 7]); /* html, [x, y, w, h] */

// SELECT: Income Withholding Order/Notice for support
$w->add($selectOption, [17.5, 28.5, 4, 7]); /* html, [x, y, w, h] */

// SELECT: Attorney
$w->add($selectOption, [103, 44, 4, 7]); /* html, [x, y, w, h] */

// State/Tribe/Territory = State of Jurisdiction
$w->add($juris_state, [50, 70, 45, 7]); /* html, [x, y, w, h] */

// City/County/Dist/Tribe = County of Jurisdiction
$w->add($juris_county . ' COUNTY', [51, 75, 45, 7]); /* html, [x, y, w, h] */

// Order ID = Cause Number
$w->add($juris_cause_nmber, [117, 74.5, 80, 7]); /* html, [x, y, w, h] */

/* Section II Employer and Case Information (Completed by Sender)
 *********************************************************************************************************************** */

//Employer and Case Information

// PETITIONER DETAILS

// Petitioner Full Name
$petitioner_name = 'Peter Patrick Parker'; // Right For You
$petitioner_name_uppercase = strtoupper($petitioner_name);
// Petitioner SSN
$petitioner_ssn = '123-45-6789'; // Tell Us About Yourself
$petitioner_ssn_last_3 = substr($petitioner_ssn, -3);

// Petitioner DOB
$petitioner_dob = '01/01/1970'; // Right For You or Tell Us About Yourself

// Petitioner Employer Name
$petitioner_employer_name = 'Petitioner Employer Inc';

// Petitioner Employer Address Street
$petitioner_employer_address_street_1 = '123 Petitioner Employer Str';
$petitioner_employer_address_street_2 = 'STE 123';

if ($petitioner_employer_address_street_2 == '') {
    $petitioner_employer_address_street = $petitioner_employer_address_street_1;
} else {
    $petitioner_employer_address_street = $petitioner_employer_address_street_1 . ', ' . $petitioner_employer_address_street_2;
}

// Petitioner Employer Address City, State, Zip
$petitioner_employer_address_city = 'Plano';
$petitioner_employer_address_state = 'Texas';
$petitioner_employer_address_zip = '75093';

// Petitioner Employer Address Country
$petitioner_employer_address_country = 'United States';

// Petitioner Employer FEIN
$petitioner_employer_fein = '00-0000000';

// RESPONDENT Details
// Respondent Full Name
$respondent_name = 'Rebecca Roxanne Parker'; // Right For You
$respondent_uppercase = strtoupper($respondent_name);
// Respondent SSN
$respondent_ssn = '234-56-7890'; // Tell Us About Yourself
$respondent_ssn_last_3 = substr($respondent_ssn, -3);
// Respondent DOB
$respondent_dob = '02/02/1972'; // Right For You or Tell Us About Yourself
// Respondent Employer Name
$respondent_employer_name = 'Respondent Employer Inc';
// Respondent Employer Address Street
$respondent_employer_address_street_1 = '123 Respondent Employer Str';
$respondent_employer_address_street_2 = 'STE 123';
if ($respondent_employer_address_street_2 == '') {
    $respondent_employer_address_street = $respondent_employer_address_street_1;
} else {
    $respondent_employer_address_street = $respondent_employer_address_street_1 . ', ' . $respondent_employer_address_street_2;
}
// Respondent Employer Address City, State, Zip
$respondent_employer_address_city = 'Plano';
$respondent_employer_address_state = 'Texas';
$respondent_employer_address_zip = '75093';
// Respondent Employer Address Country
$respondent_employer_address_country = 'United States';
// Respondent Employer FEIN
$respondent_employer_fein = '00-0000001';

// OBLIGOR Name
$obligorName = $respondent_name;

if ($obligorName == $petitioner_name) {
    // Obligor Employer Name
    $employersName = $petitioner_employer_name;
    // Obligor Employer Address, Street
    $employerAddressStreet = $petitioner_employer_address_street;
    // Obligor Employer City/State?ZIP
    $employerAddressCiyStateZip = $petitioner_employer_address_city . ', ' . $petitioner_employer_address_state . ' ' . $petitioner_employer_address_zip;
    // Obligor Employer Country
    $employerAddressCountry = $petitioner_employer_address_country; // Tell Us About ...
    // Employer FEIN Number
    $employerFEIN = $petitioner_employer_fein;

    // Obligor SSN
    $obligorSSN = $petitioner_ssn; // Tell Us About ...
    // Obligor DOB
    $obligorDoB = $petitioner_dob; // Tell Us About ...
    // Obligee Name
    $obligeeName = $respondent_name;
} else {
    // Obligor Employer Name
    $employersName = $respondent_employer_name;
    // Obligor Employer Address, Street
    $employerAddressStreet = $respondent_employer_address_street;
    // Obligor Employer City/State?ZIP
    $employerAddressCiyStateZip = $respondent_employer_address_city . ', ' . $respondent_employer_address_state . ' ' . $respondent_employer_address_zip;
    // Obligor Employer Country
    $employerAddressCountry = $respondent_employer_address_country; // Tell Us About ...
    // Employer FEIN Number
    $employerFEIN = $respondent_employer_fein;

    // Obligor SSN
    $obligorSSN = $respondent_ssn; // Tell Us About ...
    // Obligor DOB
    $obligorDoB = $respondent_dob; // Tell Us About ...
    // Obligee Name
    $obligeeName = $petitioner_name;
}

// OUTPUT
// Employer/Income Withholders Name
$w->add($employersName, [15, 95.5, 90, 7]); /* html, [x, y, w, h] */
// Employer Address Street
$w->add($employerAddressStreet, [15, 104, 90, 7]); /* html, [x, y, w, h] */
// Employer Address City, State, ZIP
$w->add($employerAddressCiyStateZip, [15, 112, 90, 7]); /* html, [x, y, w, h] */
// Employer Address Country
$w->add($employerAddressCountry, [15, 120, 90, 7]); /* html, [x, y, w, h] */
// Employer FEIN
$w->add($employerFEIN, [76, 130.5, 40, 7]); /* html, [x, y, w, h] */

// Employee/Obligors Name (Last, First, Middle)
$w->add($obligorName, [119, 95.5, 80, 7]); /* html, [x, y, w, h] */
// Employee/Obligors SSN
$w->add($obligorSSN, [119, 104, 80, 7]); /* html, [x, y, w, h] */
// Employee/Obligors Date of Birth
$w->add($obligorDoB, [119, 112, 80, 7]); /* html, [x, y, w, h] */
// Obligees Full Name
$w->add($obligeeName, [119, 120, 80, 7]); /* html, [x, y, w, h] */

// CHILDRENS DETAILS
// Children

//Check if children
// $repeater_children_form_id = 14;
// $repeater_children_search_criteria['field_filters'][] = array('key' => 'created_by', 'value' => $client_user_id);
// $repeater_children_search_criteria['status'] = 'active';
// $repeater_children_sorting = array('key' => 'id', 'direction' => 'ASC', 'is_numeric' => true);
// $children_entries = GFAPI::get_entries($repeater_children_form_id, $repeater_children_search_criteria);
// $count_children_entries = count($children_entries);
// $children = array();

// for ($i = 0; $i < $count_children_entries; $i++) {
//     $children[$i]['first_name'] = $children_entries[$i]['2.3'];
//     $children[$i]['middle_name'] = $children_entries[$i]['2.4'];
//     $children[$i]['last_name'] = $children_entries[$i]['2.6'];
//     if ($children[$i]['middle_name'] != '') {
//         $children[$i]['full_name'] = $children[$i]['first_name'] . ' ' . $children[$i]['middle_name'] . ' ' . $children[$i]['last_name'];
//     } else {
//         $children[$i]['full_name'] = $children[$i]['first_name'] . ' ' . $children[$i]['last_name'];
//     }
//     $children[$i]['gender'] = $children_entries[$i]['3'];
//     $children[$i]['birth_date_raw'] = $children_entries[$i]['4'];
//     $children_birth_date_string = strtotime($children[$i]['birth_date_raw']);
//     $children[$i]['birth_date'] = date('F j, Y', $children_birth_date_string);
//     $children[$i]['has_dl'] = $children_entries[$i]['6'];
//     // echo '<pre>';
//     // echo 'CHILDREN<br>';
//     // print_r($children[$i]);
//     // echo '<br></pre>';
// }

// CHILDREN OF THE MARRIAGE

// $repeater_children_form_id = 14;
// $repeater_children_search_criteria['field_filters'][] = array('key' => 'created_by', 'value' => $client_user_id);
// $repeater_children_search_criteria['status'] = 'active';
// $repeater_children_sorting = array('key' => 'id', 'direction' => 'ASC', 'is_numeric' => true);
// $children_entries = GFAPI::get_entries($repeater_children_form_id, $repeater_children_search_criteria);

$children_entries = array();

// Child 1 Name (Last, First, Middle)
$children_entries[0]['2.3'] = 'Alice';
$children_entries[0]['2.4'] = 'Anne';
$children_entries[0]['2.6'] = 'Parker';

// Child 1 Date of Birth
$children_entries[0][4] = '2005-01-01';

// Child 2 Name (Last, First, Middle)
$children_entries[1]['2.3'] = 'Bryce';
$children_entries[1]['2.4'] = 'Ben';
$children_entries[1]['2.6'] = 'Parker';
// Child 2 Date of Birth
$children_entries[1][4] = '2006-02-02';

// Child 3 Name (Last, First, Middle)
$children_entries[2]['2.3'] = 'Cassie';
$children_entries[2]['2.4'] = 'Cheryl';
$children_entries[2]['2.6'] = 'Parker';
// Child 3 Date of Birth
$children_entries[2][4] = '2009-03-03';

$count_children_entries = count($children_entries);
$children = array();

for ($i = 0; $i < $count_children_entries; $i++) {
    $children[$i]['first_name'] = $children_entries[$i]['2.3'];
    $children[$i]['middle_name'] = $children_entries[$i]['2.4'];
    $children[$i]['last_name'] = $children_entries[$i]['2.6'];
    if ($children[$i]['middle_name'] != '') {
        $children[$i]['full_name'] = $children[$i]['last_name'] . ', ' . $children[$i]['first_name'] . ', ' . $children[$i]['middle_name'];
    } else {
        $children[$i]['full_name'] = $children[$i]['last_name'] . ', ' . $children[$i]['first_name'];
    }

    $children[$i]['birth_date_raw'] = $children_entries[$i]['4'];
    $children_birth_date_string = strtotime($children[$i]['birth_date_raw']);
    $children[$i]['birth_date'] = date('d/m/Y', $children_birth_date_string);
    // echo '<pre>';
    // echo 'CHILDREN<br>';
    // print_r($children[$i]);
    // echo '<br></pre>';
}

//DEPENDENT 1

if ($count_children_entries > 0) {
    //Name:
    $w->add($children[0]['full_name'], [16.5, 139.5, 60, 7]); /* html, [x, y, w, h] */

    //Date of Birth:
    $w->add($children[0]['birth_date'], [96, 139.5, 35, 7]); /* html, [x, y, w, h] */

}

if ($count_children_entries > 1) {
    //Name:
    $w->add($children[1]['full_name'], [16.5, 144.25, 60, 7]); /* html, [x, y, w, h] */

    //Date of Birth:
    $w->add($children[1]['birth_date'], [96, 144.25, 35, 7]); /* html, [x, y, w, h] */

}

if ($count_children_entries > 2) {
    //Name:
    $w->add($children[2]['full_name'], [16.5, 148.5, 60, 7]); /* html, [x, y, w, h] */

    //Date of Birth:
    $w->add($children[2]['birth_date'], [96, 148.5, 35, 7]); /* html, [x, y, w, h] */

}

/* Section III Order Information
 **************************************************************** */
// VARIABLES
$childSupportCurrentAmount = '1250.00'; //Tell Us About Your Children
$childSupportCurrentPeriod = 'Monthly'; //

$cashMedicalCurrentAmount = '1100.00'; //
$cashMedicalCurrentPeriod = 'Monthly'; //Tell Us About Children

$spousalSupportCurrentAmount = '3500.00'; //
$spousalSupportCurrentPeriod = 'Monthly'; //

$totalWithholdAmount = $childSupportCurrentAmount + $cashMedicalCurrentAmount + $spousalSupportCurrentAmount; //Sum of amounts
$totalWithholdAmountFormatted = number_format($totalWithholdAmount, 2, ',', ' ');
$totalWithholdPeriod = 'Monthly'; //Tell Us About Children

// OUTPUT

// Child Support Amount Current
$w->add($childSupportCurrentAmount, [17, 183, 23, 7]); /* html, [x, y, w, h] */
// Child Support Frequency Current
$w->add($childSupportCurrentPeriod, [51, 183, 23, 7]); /* html, [x, y, w, h] */

// IGNORE Child Support Amount Past Due
// IGNORE Child Support Frequency Past Due
// IGNORE Child Support  Arrears Greater Than 12 WEEK_IN_SECONDS Past Due

// Cash Medical Support Amount Current
$w->add($cashMedicalCurrentAmount, [17, 191, 23, 7]); /* html, [x, y, w, h] */
// Cash Medical Support Frequency Current
$w->add($cashMedicalCurrentPeriod, [51, 191, 23, 7]); /* html, [x, y, w, h] */

// IGNORE Due Cash Medical Support Past
// IGNORE Due Cash Medical Support Frequency Past

// Spouse Support Amount Current
$w->add($spousalSupportCurrentAmount, [17, 199, 23, 7]); /* html, [x, y, w, h] */
// Spouse Support Frequency Current
$w->add($spousalSupportCurrentPeriod, [51, 199, 23, 7]); /* html, [x, y, w, h] */

// IGNORE Spouse Support Past Due
// IGNORE Spouse Support Frequency Past Due

// IGNORE Other Amount
// IGNORE Other Frequency

// Total Amount
$w->add($totalWithholdAmountFormatted, [72, 212, 23, 7]); /* html, [x, y, w, h] */
// Total Frequency
$w->add($totalWithholdPeriod, [98, 212, 23, 7]); /* html, [x, y, w, h] */

/* Section IV Amounts To Withhold
 **************************************************************** */

// OUTPUT
// Amount per weekly pay period
$amountWithholdWeekly = $totalWithholdAmount / 52;
$amountWithholdWeeklyFormatted = number_format($amountWithholdWeekly, 2, '.', ',');
$w->add($amountWithholdWeeklyFormatted, [16, 231, 20, 7]); /* html, [x, y, w, h] */

// Amount per semi-monthly Pay Period
$amountWithholdSemiMonthly = $totalWithholdAmount / 24;
$amountWithholdSemiMonthlyFormatted = number_format($amountWithholdSemiMonthly, 2, '.', ',');
$w->add($amountWithholdSemiMonthlyFormatted, [108, 231, 20, 7]); /* html, [x, y, w, h] */

// Amount per bi-weekly pay period
$amountWithholdBiWeekly = $totalWithholdAmount / 26;
$amountWithholdBiWeeklyFormatted = number_format($amountWithholdBiWeekly, 2, '.', ',');
$w->add($amountWithholdBiWeeklyFormatted, [16, 235, 20, 7]); /* html, [x, y, w, h] */

// IGNORE Lump sum payment
// $w->add($amountWithholdLumpSum, [16, 239, 20, 7]); /* html, [x, y, w, h] */

// Amount per monthly pay period
$w->add($totalWithholdAmountFormatted, [108, 235, 20, 7]); /* html, [x, y, w, h] */

/* PAGE 2
 ************ */
$w->addPage(2);

/* Header Info
 **************************************************************** */

// Employer/Income Withholders Name
$w->add($employersName, [67, 7.5, 45, 7]); /* html, [x, y, w, h] */

// Employer/Income Withholders FEIN
$w->add($employerFEIN, [169, 7.5, 30, 7]); /* html, [x, y, w, h] */

// EMployee/Obligors Name
$w->add($obligorName, [52, 15, 90, 7]); /* html, [x, y, w, h] */

// Employee/Obligors SSN
$w->add($obligorSSN, [158, 14.5, 45, 7]); /* html, [x, y, w, h] */

// IGNORE Case ID

// Order ID = Cause Number
$w->add($juris_cause_nmber, [113.5, 21.5, 85, 7]); /* html, [x, y, w, h] */

/* Section V: Remittance Information
 **************************************************************** */

// State
// Days to begin withholding  no later than period
// Send Payment within days
// Withhold Percentage
// State of principal State of Employement
// Remit Payment Payee
// Remit Payment Payee Address
// Remittance ID Number
// OPTION: Return To Sender - Check if payment is not being directed to SDU
// OPTION: Check if Employer/Income Withholder must provide a copy of this form to the Employee/Obligee

$w->add($juris_state, [103.5, 35.5, 30, 7]); /* html, [x, y, w, h] */
$w->add($remitanceNoDaysBeginWithholding, [78, 40.5, 5, 7]); /* html, [x, y, w, h] */
$w->add($remitanceDateofOrder, [122, 40, 25, 7]); /* html, [x, y, w, h] */
$w->add($remitanceNoBusinessDaysBeginWithholding, [26, 44, 5, 7]); /* html, [x, y, w, h] */
$w->add($remitancePercentage, [56.5, 48, 5, 7]); /* html, [x, y, w, h] */
$w->add($juris_state, [45, 52.5, 30, 7]); /* html, [x, y, w, h] */

$w->add($remitanceSDUPayee, [49, 151, 100, 7]); /* html, [x, y, w, h] */
$w->add($remitanceSDUPayeeAddress, [22, 155.5, 100, 7]); /* html, [x, y, w, h] */
$w->add($locatorCode, [189, 161, 10, 7]); /* html, [x, y, w, h] */

$w->add($selectOption, [13.25, 243.5, 5, 7]); /* html, [x, y, w, h] */

/* PAGE 3
 ************ */
$w->addPage(3);

/* Header Info
 **************************************************************** */

// Employer/Income Withholders Name
$w->add($employersName, [67, 7.5, 45, 7]); /* html, [x, y, w, h] */

// Employer/Income Withholders FEIN
$w->add($employerFEIN, [172, 7.5, 30, 7]); /* html, [x, y, w, h] */

// EMployee/Obligors Name
$w->add($obligorName, [52, 15, 90, 7]); /* html, [x, y, w, h] */

// Employee/Obligors SSN
$w->add($obligorSSN, [163, 14.5, 45, 7]); /* html, [x, y, w, h] */

// IGNORE Case ID

// Order ID = Cause Number
$w->add($juris_cause_nmber, [116, 22.5, 85, 7]); /* html, [x, y, w, h] */

// $w->add($employerName, [67, 7.5, 50, 7]); /* html, [x, y, w, h] */
// $w->add($employerFEIN, [173, 7.5, 40, 7]); /* html, [x, y, w, h] */

// $w->add($obligorName, [52, 15, 100, 7]); /* html, [x, y, w, h] */
// $w->add($obligorSSN, [165, 14.5, 30, 7]); /* html, [x, y, w, h] */

// $w->add($caseID, [26.5, 22.5, 60, 7]); /* html, [x, y, w, h] */
// $w->add($causeNo, [116, 22.5, 60, 7]); /* html, [x, y, w, h] */

/* Section VI: Additional Information for Employers/Income Withholders
 ********************************************************************** */

// Liability

// Anti descrimination

// Supplemental information

/* PAGE 4
 ************ */
$w->addPage(4);

/* Header Info
 **************************************************************** */

// Employer/Income Withholders Name
// Employer/Income Withholders FEIN
// EMployee/Obligors Name
// Employee/Obligors SSN
// Case ID
// Order ID

/* Section VII: Notification of Employment Termination or Income Status (Completed By Employer/Income Withholder)
 ***************************************************************************************************************** */

// OUTPUT
// IGNORE: Check if person has never worked for this employer nore received periodic income
// IGNORE: Check fi this person no longer works for this employer nore received periodic income
// IGNORE: Termination Date
// IGNORE: Last Knonn Telephone Number
// IGNORE: Last Known Address
// IGNORE: Final payment date to SDU
// IGNORE: Final payment amount
// IGNORE: New employers or income withholders name
// IGNORE: New employers or income withholders address

/* Section VIII: Contact Information (Completed By Sender)
 ********************************************************** */

// OUTPUT
// Employer Respond To Name for E
// Employer Respond To  Telephone Number
// Employer Respond To  Fax Number
// Employer Respond To  Email or Website
// Employer Respond To  Address

// Employee Respond To Name for E
// Employee Respond To  Telephone Number
// Employee Respond To  Fax Number
// Employee Respond To  Email or Website
// Employee Respond To  Address

/* PAGE 5
 ************ */
$w->addPage(5);

/* PAGE 6
 ************ */
$w->addPage(6);

/* PAGE 7
 ************ */
$w->addPage(7);

/* PAGE 8
 ************ */
$w->addPage(8);

/* PAGE 9
 ************ */
$w->addPage(9);

/* PAGE 10
 ************ */
$w->addPage(10);

/* PAGE 11
 ************ */
$w->addPage(11);