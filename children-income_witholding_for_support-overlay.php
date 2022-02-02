<?php

/*
 * Template Name: Income Withholding For Support Overlay to Original Document
 * Version: 1.0
 * Description: Overlaying the income withholding for support document
 * Author:
 * Author URI:
 * Group: Bliksem
 * Required PDF Version: 4.4.0
 * Toolkit: true
 */

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
 * @var array  $config    The initialised template config class – eg. /config/zadani.php
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

//Sender Information
// $reasonForNotice = $form_data['field']['2'];
$sender = $form_data['field']['3'];
$senderStateTribe = $form_data['field']['4'];
$senderCityCounty = $form_data['field']['5'];
$privateIndidualEntity = $form_data['field']['6'];
$locatorCode = $form_data['field']['7'];
$orderID = $form_data['field']['8'];
$caseID = $form_data['field']['9'];
//$ = $form_data['field'][''];

//Employer and Case Information

$employerName = $form_data['field']['12'];
$employerAddress = $form_data['field']['13'];
$employerAddressStreet = $form_data['field']['13']['street'];
$employerAddressStreet2 = $form_data['field']['13']['street2'];
$employerAddressCity = $form_data['field']['13']['city'];
$employerAddressState = $form_data['field']['13']['state'];
$employerAddressZIP = $form_data['field']['13']['zip'];
$employerAddressCountry = $form_data['field']['13']['country'];

$obligorName = $form_data['field']['14'];
$obligorSSN = $form_data['field']['15'];
$obligorDoB = $form_data['field']['16'];

$custodialPartyName = $form_data['field']['17'];

$employerFEIN = $form_data['field']['18'];

// Children

//Check if children
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

//Order Information
$childSupportCurrentAmount = $form_data['field']['23'];
$childSupportCurrentAmount = ltrim($childSupportCurrentAmount, '$');
$childSupportCurrentPeriod = $form_data['field']['22'];
$childSupportPastDueAmount = $form_data['field']['26'];
$childSupportPastDueAmount = ltrim($childSupportPastDueAmount, '$');
$childSupportPastDuePeriod = $form_data['field']['27'];
$childSupportPastDueArrears = $form_data['field']['28'];

$cashMedicalCurrentAmount = $form_data['field']['78'];
$cashMedicalCurrentAmount = ltrim($cashMedicalCurrentAmount, '$');

$cashMedicalCurrentPeriod = $form_data['field']['79'];
$cashMedicalPastDueAmount = $form_data['field']['81'];
$cashMedicalPastDueAmount = ltrim($cashMedicalPastDueAmount, '$');

$cashMedicalPastDuePeriod = $form_data['field']['82'];

$spousalSupportCurrentAmount = $form_data['field']['30'];
$spousalSupportCurrentAmount = ltrim($spousalSupportCurrentAmount, '$');

$spousalSupportCurrentPeriod = $form_data['field']['31'];
$spousalSupportPastDueAmount = $form_data['field']['33'];
$spousalSupportPastDueAmount = ltrim($spousalSupportPastDueAmount, '$');

$spousalSupportPastDuePeriod = $form_data['field']['34'];

$otherName = $form_data['field']['36'];
$otherAmount = $form_data['field']['37'];
$otherAmount = ltrim($otherAmount, '$');

$otherPeriod = $form_data['field']['38'];

$totalWithholdAmount = $form_data['field']['41'];
$totalWithholdAmount = ltrim($totalWithholdAmount, '$');

$totalWithholdPeriod = $form_data['field']['42'];

$amountWithholdWeekly = $form_data['field']['47'];
$amountWithholdWeekly = ltrim($amountWithholdWeekly, '$');
$amountWithholdBiWeekly = $form_data['field']['48'];
$amountWithholdBiWeekly = ltrim($amountWithholdBiWeekly, '$');
$amountWithholdMonthly = $form_data['field']['95'];
$amountWithholdMonthly = ltrim($amountWithholdMonthly, '$');

$amountWithholdSemiMonthly = $form_data['field']['49'];
$amountWithholdSemiMonthly = ltrim($amountWithholdSemiMonthly, '$');
$amountWithholdLumpSum = $form_data['field']['50'];
$amountWithholdLumpSum = ltrim($amountWithholdLumpSum, '$');

$amountWithholdPayPeriod = $form_data['field']['51'];

//remitance Information

$remitanceDateofOrder = $form_data['field']['55'];
$remitanceNoDaysBeginWithholding = $form_data['field']['53'];
$remitanceNoBusinessDaysBeginWithholding = $form_data['field']['56'];
$remitancePercentage = $form_data['field']['54'];
$remitanceSDUPayee = $form_data['field']['57'];
$remitanceSDUPayeeAddress = $form_data['field']['59'];
$remitanceCheckIfApplicable = $form_data['field']['61'];

//contactinfo
//employer/wihholder

$employerPhone = $form_data['field']['70'];
$employerFax = $form_data['field']['72'];
$employerEmail = $form_data['field']['66'];
$employerWebsite = $form_data['field']['75'];

//Employee/Obligor
$obligorPhone = $form_data['field']['71'];
$obligorFax = $form_data['field']['73'];
$obligorEmail = $form_data['field']['67'];
$obligorWebsite = $form_data['field']['74'];

$returnToSender = $form_data['field']['83'];

//Employment Termination

$employmentTemrinationType = $form_data['field']['86'];
$employmentTemrinationDate = $form_data['field']['87'];
$employmentTemrinationLastKnownNumber = $form_data['field']['89'];
$employmentTemrinationLastKnownAddress = $form_data['field']['90'];
$employmentTemrinationFinalPaymentDate = $form_data['field']['91'];
$employmentTemrinationFinalPaymentAmount = $form_data['field']['92'];

$employmentTemrinationNewEmployerName = $form_data['field']['93'];
$employmentTemrinationNewEmployerAddress = $form_data['field']['94'];

$petitionerDoB = $form_data['field']['229']; /* Realtors First Name  */

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
$w->addPdf(__DIR__ . '/pdfs/withholdingorder.pdf'); /* CHANGE THIS TO POINT TO YOUR PDF */

/* PAGE 1
 ********* */
$w->addPage(1);

/* Section I Sender Information
 ************************************************ */
// Variables Secion I
$dateOfOrder = '01/01/2022'; // ?
$jurisdictionState = 'Texas'; // Right For You

// OUTPUT
// Date
$w->add($dateOfOrder, [139, 21, 40, 7]); /* html, [x, y, w, h] */

// SELECT: Income Withholding Order/Notice for support
$w->add($selectOption, [17.5, 28.5, 4, 7]); /* html, [x, y, w, h] */

// if ($reasonForNotice == "Income Withholding Order/Notice for Support") {
//     //&#9632; = a black sqaure
//         $w->add('&#9632;', [17.5, 28, 100, 7]); /* html, [x, y, w, h] */
//     } else if ($reasonForNotice == "(IWO) One-time Order/Notice for Lump Sum Payment") {
//         $w->add('&#9632;', [17.5, 36, 100, 7]); /* html, [x, y, w, h] */
//     } else if ($reasonForNotice == "Amended IWO") {
//         $w->add('&#9632;', [144.5, 28, 100, 7]); /* html, [x, y, w, h] */
//     } else if ($reasonForNotice == "Termination of IWO") {
//         $w->add('&#9632;', [144.5, 36, 100, 7]); /* html, [x, y, w, h] */
//     }

// IGNORE: Amended IWO
// IGNORE: (IWO) One-Time Order/Notice for Lump Sum Payment
// IGNORE: Termination of IWO
// IGNORE: Amended IWO

// SELECT: Child Support Enforcement (CSE) Agency
$w->add($selectOption, [15.5, 44, 4, 7]); /* html, [x, y, w, h] */

// if ($sender == "Child Support Enforcement (CSE) Agency") {
//     $w->add('&#9632;', [16, 43.5, 100, 7]); /* html, [x, y, w, h] */
// } else if ($sender == "Court") {
//     $w->add('&#9632;', [87.5, 43.5, 100, 7]); /* html, [x, y, w, h] */
// } else if ($sender == "Attorney") {
//     $w->add('&#9632;', [103.5, 43, 100, 7]); /* html, [x, y, w, h] */
// } else if ($sender == "Private Individual/Entity") {
//     $w->add('&#9632;', [124, 43, 100, 7]); /* html, [x, y, w, h] */
// }
// IGNORE: Court
// IGNORE: Attorney
// IGNORE: Private Individual/ENtity

// State/Tribe/Territory
$w->add($jurisdictionState, [49, 70, 50, 7]); /* html, [x, y, w, h] */

// Remittance ID (include with payment)
$w->add($selectOption, [15.5, 44, 4, 7]); /* html, [x, y, w, h] */

// City/County/Dist/Tribe
$w->add($selectOption, [15.5, 44, 4, 7]); /* html, [x, y, w, h] */

// Order ID
$w->add($selectOption, [15.5, 44, 4, 7]); /* html, [x, y, w, h] */

// Private Individual Entity
$w->add($selectOption, [15.5, 44, 4, 7]); /* html, [x, y, w, h] */

// Case ID
$w->add($selectOption, [15.5, 44, 4, 7]); /* html, [x, y, w, h] */

/* Section II Employer and Case Information (Completed by Sender)
 **************************************************************** */

// OUTPUT
// Employer/Income Withholders Name
// Employee/Obligors Name (Last, First, Middle)
// Employer/Income Withholders Address Line 1
// Employee/Obligors SSN
// Employer/Income Withholders Address Line 2
// Employee/Obligors Date of Birth
// Employer/Income Withholders Address Line 3
// Custodial Party/Obligees Name (Last. First, Middle)
// Employer/Income Withholders FEIN
// Child 1 Name (Last, First, Middle)
// Child 1 Date of Birth
// Child 2 Name (Last, First, Middle)
// Child 2 Date of Birth
// Child 3 Name (Last, First, Middle)
// Child 3 Date of Birth
// Child 4 Name (Last, First, Middle)
// Child 4 Date of Birth
// Child 5 Name (Last, First, Middle)
// Child 5 Date of Birth
// Child 6 Name (Last, First, Middle)
// Child 6 Date of Birth

/* Section III Order Information
 **************************************************************** */

// OUTPUT
// State/Tribe
// Child Support Amount Current
// Child Support Frequency Current
// Child Support Amount Past Due
// Child Support Frequency Past Due
// Child Support  Arrears Greater Than 12 WEEK_IN_SECONDS Past Due
// Cash Medical Support Amount Current
// Cash Medical Support Frequency Current
// Due Cash Medical Support Past
// Due Cash Medical Support Frequency Past
// Spouse Support Amount Current
// Spouse Support Frequency Current
// Spouse Support Past Due
// Spouse Support Frequency Past Due
// Other Amount
// Other Frequency
// Total Amount
// Total Frequency

/* Section IV Amounts To Withhold
 **************************************************************** */

// OUTPUT
// Amount per weekly pay period
// Amount per semi-monthly Pay Period
// Amount per bi-weekly pay period
// Amount per monthly pay period
// Lump sum payment

$w->add($petitionerDoB, [139, 21, 100, 7]); /* html, [x, y, w, h] */
//$w->add( $ , [ 139, 21, 100, 7 ] ); /* html, [x, y, w, h] */

//SENDER
$w->add($senderCityCounty, [51, 74.5, 100, 7]); /* html, [x, y, w, h] */
$w->add($privateIndidualEntity, [52, 79.5, 100, 7]); /* html, [x, y, w, h] */
$w->add($locatorCode, [158.5, 69, 100, 7]); /* html, [x, y, w, h] */
$w->add($orderID, [117, 74.5, 100, 7]); /* html, [x, y, w, h] */
$w->add($caseID, [117, 79.5, 100, 7]); /* html, [x, y, w, h] */

$w->add($employerName, [15, 95.5, 100, 7]); /* html, [x, y, w, h] */

$w->add($employerAddressStreet, [15, 104, 100, 7]); /* html, [x, y, w, h] */
$w->add($employerAddressStreet2, [60, 104, 100, 7]); /* html, [x, y, w, h] */
$w->add($employerAddressCity, [15, 112, 100, 7]); /* html, [x, y, w, h] */
$w->add($employerAddressZIP, [60, 112, 100, 7]); /* html, [x, y, w, h] */
$w->add($employerAddressCountry, [15, 121, 100, 7]); /* html, [x, y, w, h] */

$w->add(implode(" ", $obligorName), [115.5, 95.5, 100, 7]); /* html, [x, y, w, h] */
$w->add($obligorSSN, [115.5, 104, 100, 7]); /* html, [x, y, w, h] */
$w->add($obligorDoB, [115.5, 112, 100, 7]); /* html, [x, y, w, h] */
$w->add(implode(" ", $custodialPartyName), [115.5, 120.5, 100, 7]); /* html, [x, y, w, h] */

$w->add($employerFEIN, [75, 131, 100, 7]); /* html, [x, y, w, h] */

if ($count_children_entries == 1) {

    $w->add($children[0]['last_name'], [16.5, 139.5, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[0]['first_name'], [44, 139.5, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[0]['middle_name'], [55, 139.5, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[0]['birth_date'], [95, 139.5, 100, 7]); /* html, [x, y, w, h] */

} else if ($count_children_entries == 2) {

    $w->add($children[0]['last_name'], [16.5, 139.5, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[0]['first_name'], [35, 139.5, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[0]['middle_name'], [55, 139.5, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[0]['birth_date'], [95, 139.5, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[1]['last_name'], [16.5, 144.5, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[1]['first_name'], [35, 144.5, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[1]['middle_name'], [55, 144.5, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[1]['birth_date'], [95, 144.5, 100, 7]); /* html, [x, y, w, h] */

} else if ($count_children_entries == 3) {

    $w->add($children[0]['last_name'], [16.5, 139.5, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[0]['first_name'], [35, 139.5, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[0]['middle_name'], [55, 139.5, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[0]['birth_date'], [95, 139.5, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[1]['last_name'], [16.5, 144.5, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[1]['first_name'], [35, 144.5, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[1]['middle_name'], [55, 144.5, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[1]['birth_date'], [95, 139.5, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[2]['last_name'], [16.5, 149, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[2]['first_name'], [35, 149, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[2]['middle_name'], [55, 149, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[2]['birth_date'], [95, 149, 100, 7]); /* html, [x, y, w, h] */

} else if ($count_children_entries == 4) {

    $w->add($children[0]['last_name'], [16.5, 139.5, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[0]['first_name'], [35, 139.5, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[0]['middle_name'], [55, 139.5, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[0]['birth_date'], [95, 139.5, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[1]['last_name'], [16.5, 144.5, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[1]['first_name'], [35, 144.5, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[1]['middle_name'], [55, 144.5, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[1]['birth_date'], [95, 139.5, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[2]['last_name'], [16.5, 149, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[2]['first_name'], [35, 149, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[2]['middle_name'], [55, 149, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[2]['birth_date'], [95, 149, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[3]['last_name'], [16.5, 153.5, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[3]['first_name'], [35, 153.5, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[3]['middle_name'], [55, 153.5, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[3]['birth_date'], [95, 153.5, 100, 7]); /* html, [x, y, w, h] */

} else if ($count_children_entries == 5) {

    $w->add($children[0]['last_name'], [16.5, 139.5, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[0]['first_name'], [35, 139.5, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[0]['middle_name'], [55, 139.5, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[0]['birth_date'], [95, 139.5, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[1]['last_name'], [16.5, 144.5, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[1]['first_name'], [35, 144.5, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[1]['middle_name'], [55, 144.5, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[1]['birth_date'], [95, 139.5, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[2]['last_name'], [16.5, 149, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[2]['first_name'], [35, 149, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[2]['middle_name'], [55, 149, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[2]['birth_date'], [95, 149, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[3]['last_name'], [16.5, 153.5, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[3]['first_name'], [35, 153.5, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[3]['middle_name'], [55, 153.5, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[3]['birth_date'], [95, 153.5, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[3]['last_name'], [16.5, 156.5, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[3]['first_name'], [35, 156.5, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[3]['middle_name'], [55, 156.5, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[3]['birth_date'], [95, 156.5, 100, 7]); /* html, [x, y, w, h] */

} else if ($count_children_entries == 6) {

    $w->add($children[0]['last_name'], [16.5, 139.5, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[0]['first_name'], [35, 139.5, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[0]['middle_name'], [55, 139.5, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[0]['birth_date'], [95, 139.5, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[1]['last_name'], [16.5, 144.5, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[1]['first_name'], [35, 144.5, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[1]['middle_name'], [55, 144.5, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[1]['birth_date'], [95, 139.5, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[2]['last_name'], [16.5, 149, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[2]['first_name'], [35, 149, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[2]['middle_name'], [55, 149, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[2]['birth_date'], [95, 149, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[3]['last_name'], [16.5, 153.5, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[3]['first_name'], [35, 153.5, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[3]['middle_name'], [55, 153.5, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[3]['birth_date'], [95, 153.5, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[4]['last_name'], [16.5, 156.5, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[4]['first_name'], [35, 156.5, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[4]['middle_name'], [55, 156.5, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[4]['birth_date'], [95, 156.5, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[5]['last_name'], [16.5, 160.5, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[5]['first_name'], [35, 160.5, 100, 7]); /* html, [x, y, w, h] */
    $w->add($children[5]['middle_name'], [55, 160.5, 100, 7]); /* html, [x, y, w, h] */

    $w->add($children[5]['birth_date'], [95, 160.5, 100, 7]); /* html, [x, y, w, h] */

}

$w->add($senderStateTribe, [95, 175, 100, 7]); /* html, [x, y, w, h] */

$w->add($childSupportCurrentAmount, [16, 183, 100, 7]); /* html, [x, y, w, h] */
$w->add($childSupportCurrentPeriod, [51, 183, 100, 7]); /* html, [x, y, w, h] */

$w->add($childSupportPastDueAmount, [16, 187, 100, 7]); /* html, [x, y, w, h] */
$w->add($childSupportPastDuePeriod, [51, 187, 100, 7]); /* html, [x, y, w, h] */

if ($childSupportPastDueArrears == "Yes") {
    $w->add('&#9632;', [168.5, 187, 100, 7]); /* html, [x, y, w, h] */
} else if ($childSupportPastDueArrears == "No") {
    $w->add('&#9632;', [182.5, 187, 100, 7]); /* html, [x, y, w, h] */
}

$w->add($cashMedicalCurrentAmount, [16, 191, 100, 7]); /* html, [x, y, w, h] */
$w->add($cashMedicalCurrentPeriod, [51, 191, 100, 7]); /* html, [x, y, w, h] */

$w->add($cashMedicalPastDueAmount, [16, 195, 100, 7]); /* html, [x, y, w, h] */
$w->add($cashMedicalPastDuePeriod, [51, 195, 100, 7]); /* html, [x, y, w, h] */

$w->add($spousalSupportCurrentAmount, [16, 199, 100, 7]); /* html, [x, y, w, h] */
$w->add($spousalSupportCurrentPeriod, [51, 199, 100, 7]); /* html, [x, y, w, h] */

$w->add($spousalSupportPastDueAmount, [16, 203, 100, 7]); /* html, [x, y, w, h] */
$w->add($spousalSupportPastDuePeriod, [51, 203, 100, 7]); /* html, [x, y, w, h] */

$w->add($otherAmount, [16, 207, 100, 7]); /* html, [x, y, w, h] */
$w->add($otherPeriod, [51, 207, 100, 7]); /* html, [x, y, w, h] */

$w->add($otherName, [111.4, 208, 100, 7]); /* html, [x, y, w, h] */

$w->add($totalWithholdAmount, [72, 212, 100, 7]); /* html, [x, y, w, h] */
$w->add($totalWithholdPeriod, [98, 212, 100, 7]); /* html, [x, y, w, h] */

$w->add($amountWithholdWeekly, [16, 231, 100, 7]); /* html, [x, y, w, h] */
$w->add($amountWithholdBiWeekly, [16, 235, 100, 7]); /* html, [x, y, w, h] */
$w->add($amountWithholdLumpSum, [16, 239, 100, 7]); /* html, [x, y, w, h] */

$w->add($amountWithholdSemiMonthly, [108, 231, 100, 7]); /* html, [x, y, w, h] */
$w->add($amountWithholdMonthly, [108, 235, 100, 7]); /* html, [x, y, w, h] */

/* PAGE 2
 ************ */
$w->addPage(2);

/* Header Info
 **************************************************************** */

// Employer/Income Withholders Name
// Employer/Income Withholders FEIN
// EMployee/Obligors Name
// Employee/Obligors SSN
// Case ID
// Order ID

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

$w->add($employerName, [67, 7.5, 100, 7]); /* html, [x, y, w, h] */
$w->add($employerFEIN, [169, 7.5, 100, 7]); /* html, [x, y, w, h] */

$w->add(implode(" ", $obligorName), [52, 15, 100, 7]); /* html, [x, y, w, h] */
$w->add($obligorSSN, [158, 14.5, 100, 7]); /* html, [x, y, w, h] */

$w->add($caseID, [26.5, 21.5, 100, 7]); /* html, [x, y, w, h] */
$w->add($orderID, [113.5, 21.5, 100, 7]); /* html, [x, y, w, h] */

$w->add($senderStateTribe, [103.5, 35.5, 100, 7]); /* html, [x, y, w, h] */
$w->add($remitanceNoDaysBeginWithholding, [78, 40.5, 100, 7]); /* html, [x, y, w, h] */
$w->add($remitanceDateofOrder, [122, 40, 100, 7]); /* html, [x, y, w, h] */
$w->add($remitanceNoBusinessDaysBeginWithholding, [26, 44, 100, 7]); /* html, [x, y, w, h] */
$w->add($remitanceNoBusinessDaysBeginWithholding, [26, 44, 100, 7]); /* html, [x, y, w, h] */
$w->add($remitancePercentage, [56.5, 48, 100, 7]); /* html, [x, y, w, h] */
$w->add($senderStateTribe, [45, 52.5, 100, 7]); /* html, [x, y, w, h] */
$w->add($senderStateTribe, [45, 52.5, 100, 7]); /* html, [x, y, w, h] */

$w->add($remitanceSDUPayee, [49, 151, 100, 7]); /* html, [x, y, w, h] */
$w->add(implode(", ", $remitanceSDUPayeeAddress), [22, 155.5, 100, 7]); /* html, [x, y, w, h] */
$w->add($locatorCode, [189, 161, 100, 7]); /* html, [x, y, w, h] */

if ($returnToSender[0] == "Return to Sender") {

    $w->add('&#9632;', [14, 187, 100, 7]); /* html, [x, y, w, h] */
}

if ($remitanceCheckIfApplicable[0] == "If checked the employer/income withholder must provide a copy of this form to the employee/obligor") {

    $w->add('&#9632;', [13.5, 243, 100, 7]); /* html, [x, y, w, h] */
}

/* PAGE 3
 ************ */
$w->addPage(3);

/* Header Info
 **************************************************************** */

// Employer/Income Withholders Name
// Employer/Income Withholders FEIN
// EMployee/Obligors Name
// Employee/Obligors SSN
// Case ID
// Order ID

$w->add($employerName, [67, 7.5, 100, 7]); /* html, [x, y, w, h] */
$w->add($employerFEIN, [173, 7.5, 100, 7]); /* html, [x, y, w, h] */

$w->add(implode(" ", $obligorName), [52, 15, 100, 7]); /* html, [x, y, w, h] */
$w->add($obligorSSN, [165, 14.5, 100, 7]); /* html, [x, y, w, h] */

$w->add($caseID, [26.5, 22.5, 100, 7]); /* html, [x, y, w, h] */
$w->add($orderID, [116, 22.5, 100, 7]); /* html, [x, y, w, h] */

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

$w->add($employerName, [67, 7.5, 100, 7]); /* html, [x, y, w, h] */
$w->add($employerFEIN, [173, 7.5, 100, 7]); /* html, [x, y, w, h] */

$w->add(implode(" ", $obligorName), [52, 15, 100, 7]); /* html, [x, y, w, h] */
$w->add($obligorSSN, [165, 14.5, 100, 7]); /* html, [x, y, w, h] */

$w->add($caseID, [26.5, 22.5, 100, 7]); /* html, [x, y, w, h] */
$w->add($orderID, [116, 22.5, 100, 7]); /* html, [x, y, w, h] */

if ($employmentTemrinationType[0] == "This person has never worked for this employer nor received periodic income") {
    $w->add('&#9632;', [14, 55.5, 100, 7]); /* html, [x, y, w, h] */

} else if ($employmentTemrinationType[0] == "This person no longer works for this employer nor received periodic income") {

    $w->add('&#9632;', [14, 61, 100, 7]); /* html, [x, y, w, h] */

}

$w->add($employmentTemrinationDate, [57, 77, 100, 7]); /* html, [x, y, w, h] */
$w->add($employmentTemrinationLastKnownNumber, [165, 77, 100, 7]); /* html, [x, y, w, h] */
$w->add(implode(", ", $employmentTemrinationLastKnownAddress), [50, 84.5, 100, 7]); /* html, [x, y, w, h] */
$w->add($employmentTemrinationFinalPaymentDate, [79, 100, 100, 7]); /* html, [x, y, w, h] */
$w->add($employmentTemrinationFinalPaymentAmount, [165, 100, 100, 7]); /* html, [x, y, w, h] */
$w->add($employmentTemrinationNewEmployerName, [95, 107.5, 100, 7]); /* html, [x, y, w, h] */
$w->add(implode(", ", $employmentTemrinationNewEmployerAddress), [95, 116, 100, 7]); /* html, [x, y, w, h] */

$w->add($employerName, [120.5, 140.5, 100, 7]); /* html, [x, y, w, h] */
$w->add($employerPhone, [32, 149.5, 100, 7]); /* html, [x, y, w, h] */
$w->add($employerFax, [77, 149.5, 100, 7]); /* html, [x, y, w, h] */
$w->add($employerWebsite, [141, 149.5, 100, 7]); /* html, [x, y, w, h] */

$w->add(implode(", ", $employerAddress), [120, 158, 100, 7]); /* html, [x, y, w, h] */

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

$w->add(implode(" ", $obligorName), [125, 173, 100, 7]); /* html, [x, y, w, h] */
$w->add($obligorPhone, [35, 182, 100, 7]); /* html, [x, y, w, h] */
$w->add($obligorFax, [77, 182, 100, 7]); /* html, [x, y, w, h] */
$w->add($obligorWebsite, [141, 182, 100, 7]); /* html, [x, y, w, h] */

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