<?php

/*
 * Template Name: State Disbursement Form Overlay
 * Version: 1.0
 * Description: Overlaying the record of support document
 * Author:
 * Author URI:
 * Group: 0. Sort
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
$selectOption = 'X'; // X

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
$w->addPdf(__DIR__ . '/pdfs/State-Disbursement-Form.pdf'); /* CHANGE THIS TO POINT TO YOUR PDF */

/* PAGE 1
 ************ */
$w->addPage(1);

/* SECTION 1  Order Information
------------------------------------------------------------------------------*/
// Variables for Section 1
$county = 'Collin County'; // Right For You
$courtNo = '123'; // Jurisdiction (Judicial Court Number)
$causeNo = '654321'; // Jurisdiction
$attorneyGenCaseNo = ''; //Left blank
$dateOfHearing = '02/02/2022'; // Entered by Paralegal
$dateOfOrderSign = '02/02/2022'; // Entered by Paralegal
//$orderType = ''; Can't be received from other form but for now both options will be manually put in to see where they go.
//$paymentLocation = ''; Again, can't be received from other form but for now will put both choices in to see where they go.

//County Name:
$w->add($county, [13, 83.5, 60, 7]); /* html, [x, y, w, h] */

//Court Number:
$w->add($courtNo, [77, 83.5, 60, 7]); /* html, [x, y, w, h] */

//Cause Number:
$w->add($causeNo, [152, 83.5, 50, 7]); /* html, [x, y, w, h] */

//Attorney General Case Number:
// $w->add($attorneyGenCaseNo, [12.5, 92, 55, 7]); /* html, [x, y, w, h] NEVEN ENTERED */

//Date of Hearing:
$w->add($dateOfHearing, [78, 93.5, 60, 7]); /* html, [x, y, w, h] */

//Order Sign Date:
$w->add($dateOfOrderSign, [142, 93.5, 60, 7]); /* html, [x, y, w, h] */

//ORDER TYPE:

//Order Type: ALWAYS New Order
$w->add($selectOption, [78, 99, 3, 7]); /* html, [x, y, w, h] */
//Probably always New Order
//Order Type: Modified Order
//$w->add($selectOption, [143, 99, 40, 7]); /* html, [x, y, w, h] */

//PAYMENT LOCATION:

//Payment Location: SDU Always
$w->add($selectOption, [62, 105, 3, 7]); /* html, [x, y, w, h] */

/* SECTION 2  Obligee/Custodial Parent Information
------------------------------------------------------------------------------*/
// Variables for Section 2

// Petitioner Details
$petitioner_name = 'Peter Patrick Parker'; // Right For You
$petitioner_uppercase = strtoupper($petitioner_name);

$petitioner_ssn = '123-45-6789'; // Tell Us About Yourself
$petitioner_ssn_last_3 = substr($petitioner_ssn, -3);
$petitioner_drivers_license_number = strtoupper('dl123456'); // Tell Us About Yourself
$petitioner_drivers_license_number_last_3 = substr($petitioner_drivers_license_number, -3);
$petitioner_dob = '01/01/1970'; // Right For You or Tell Us About Yourself
$petitioner_gender = 'Male'; // Tell Us About Yourself

$petitioner_mailing_address_street_1 = '123 Petitioner Street'; // Tell Us About Yourself
$petitioner_mailing_address_street_2 = 'Apt 123'; // Tell Us About Yourself
$petitioner_mailing_address_city = 'Plano'; // Tell Us About Yourself
$petitioner_mailing_address_state = 'Texas'; // Tell Us About Yourself
$petitioner_mailing_address_zip = '75093'; // Tell Us About Yourself
$petitioner_phone_cell = '999-999-9991'; // Right For You
$petitioner_phone_home = '999-999-9992'; // Tell Us About Yourself
$petitioner_phone_work = '999-999-9993'; // Tell Us About Yourself

$petitioner_employer_name = 'Petitioner Employer Inc';
$petitioner_employer_address_street_1 = '123 Petitioner Employer Str';
$petitioner_employer_address_street_2 = 'STE 123';
$petitioner_employer_address_city = 'Plano';
$petitioner_employer_address_state = 'Texas';
$petitioner_employer_address_zip = '75093';

if ($petitioner_mailing_address_street_2 == '') {
    $petitioner_mailing_address_street = $petitioner_mailing_address_street_1;
} else {
    $petitioner_mailing_address_street = $petitioner_mailing_address_street_1 . ', ' . $petitioner_mailing_address_street_2;
}

if ($petitioner_employer_address_street_2 == '') {
    $petitioner_employer_address_street = $petitioner_employer_address_street_1;
} else {
    $petitioner_employer_address_street = $petitioner_employer_address_street_1 . ', ' . $petitioner_employer_address_street_2;
}

// Respondent Details
$respondent_name = 'Rebecca Roxanne Parker'; // Right For You
$respondent_uppercase = strtoupper($respondent_name);

$respondent_ssn = '234-56-7890'; // Tell Us About Yourself
$respondent_ssn_last_3 = substr($respondent_ssn, -3);
$respondent_drivers_license_number = strtoupper('dl654321'); // Tell Us About Yourself
$respondent_drivers_license_number_last_3 = substr($respondent_drivers_license_number, -3);
$respondent_dob = '02/02/1972'; // Right For You or Tell Us About Yourself
$respondent_gender = 'Female'; // Tell Us About Yourself

$respondent_mailing_address_street_1 = '321 Respondent Street'; // Tell Us About Yourself
$respondent_mailing_address_street_2 = 'Apt 321'; // Tell Us About Yourself
$respondent_mailing_address_city = 'Prosper'; // Tell Us About Yourself
$respondent_mailing_address_state = 'Texas'; // Tell Us About Yourself
$respondent_mailing_address_zip = '75009'; // Tell Us About Yourself
$respondent_phone_cell = '999-999-9994'; // Right For You
$respondent_phone_home = '999-999-9995'; // Tell Us About Yourself
$respondent_phone_work = '999-999-9996'; // Tell Us About Yourself

$respondent_employer_name = 'Respondent Employer Inc';
$respondent_employer_address_street_1 = '123 Respondent Employer Str';
$respondent_employer_address_street_2 = 'STE 123';
$respondent_employer_address_city = 'Plano';
$respondent_employer_address_state = 'Texas';
$respondent_employer_address_zip = '75093';

if ($respondent_mailing_address_street_2 == '') {
    $respondent_mailing_address_street = $respondent_mailing_address_street_1;
} else {
    $respondent_mailing_address_street = $respondent_mailing_address_street_1 . ', ' . $respondent_mailing_address_street_2;
}

if ($respondent_employer_address_street_2 == '') {
    $respondent_employer_address_street = $respondent_employer_address_street_1;
} else {
    $respondent_employer_address_street = $respondent_employer_address_street_1 . ', ' . $respondent_employer_address_street_2;
}

// Variables to display in Section: Obligee/Custodial Parent Information

//$familyViolenceProtection = ''; // Right For You: Will need conditional logic to determine whether it appear or not
$custodialParentName = $respondent_name; // Possibly needs new form or can be gathered from possesion schedule section of Tell Us About Your Children
// echo $custodialParentName;

if ($custodialParentName == $petitioner_name) {
    $custodialParentDoB = $petitioner_dob; // Tell Us About *Relevant Party*
    $custodialParentSSN = $petitioner_ssn; // Tell Us About *Relevant Party*
    $custodialParentAddress = $petitioner_mailing_address_street; // Tell Us About *Relevant Party* MAILING ADDRESS
    $custodialParentCity = $petitioner_mailing_address_city; // Tell Us About *Relevant Party* MAILING ADDRESS
    $custodialParentState = $petitioner_mailing_address_state; // Tell Us About *Relevant Party* MAILING ADDRESS
    $custodialParentZIP = $petitioner_mailing_address_zip; // Tell Us About *Relevant Party* MAILING ADDRESS
    //$custodialParentSex = ; // Tell Us About *Relevant Party* but will be manually set to both for now
    $custodialParentDriversLicence = $petitioner_drivers_license_number; // Tell Us About *Relevant Party*
    $custodialParentHomePhone = $petitioner_phone_home; // Tell Us About *Relevant Party*
    $custodialParentWorkPhone = $petitioner_phone_work; // Tell Us About *Relevant Party*
    $custodialParentCellPhone = $petitioner_phone_cell; // Tell Us About *Relevant Party*
    $custodialParentRelationshipToChildren = 'Parent'; // Tell Us About Children in a possession schedule OR determined by party's sex
    $custodialParentEmployerName = $petitioner_employer_name; // Tell Us About *Relevant Party*
    $custodialParentEmployerAddress = $petitioner_employer_address_street; // Tell Us About *Relevant Party*
    $custodialParentEmployerCity = $petitioner_employer_address_city; // Tell Us About *Relevant Party*
    $custodialParentEmployerState = $petitioner_employer_address_state; // Tell Us About *Relevant Party*
    $custodialParentEmployerZip = $petitioner_employer_address_zip; // Tell Us About *Relevant Party*
    $custodialParentGender = $petitioner_gender;

} else {
    $custodialParentDoB = $respondent_dob; // Tell Us About *Relevant Party*
    $custodialParentSSN = $respondent_ssn; // Tell Us About *Relevant Party*
    $custodialParentAddress = $respondent_mailing_address_street; // Tell Us About *Relevant Party* MAILING ADDRESS
    $custodialParentCity = $respondent_mailing_address_city; // Tell Us About *Relevant Party* MAILING ADDRESS
    $custodialParentState = $respondent_mailing_address_state; // Tell Us About *Relevant Party* MAILING ADDRESS
    $custodialParentZIP = $respondent_mailing_address_zip; // Tell Us About *Relevant Party* MAILING ADDRESS
    //$custodialParentSex = ; // Tell Us About *Relevant Party* but will be manually set to both for now
    $custodialParentDriversLicence = $respondent_drivers_license_number; // Tell Us About *Relevant Party*
    $custodialParentHomePhone = $respondent_phone_home; // Tell Us About *Relevant Party*
    $custodialParentWorkPhone = $respondent_phone_work; // Tell Us About *Relevant Party*
    $custodialParentCellPhone = $respondent_phone_cell; // Tell Us About *Relevant Party*
    $custodialParentRelationshipToChildren = 'Parent'; // Tell Us About Children in a possession schedule OR determined by party's sex
    $custodialParentEmployerName = $respondent_employer_name; // Tell Us About *Relevant Party*
    $custodialParentEmployerAddress = $respondent_employer_address_street; // Tell Us About *Relevant Party*
    $custodialParentEmployerCity = $respondent_employer_address_city; // Tell Us About *Relevant Party*
    $custodialParentEmployerState = $respondent_employer_address_state; // Tell Us About *Relevant Party*
    $custodialParentEmployerZip = $respondent_employer_address_zip; // Tell Us About *Relevant Party*
    $custodialParentGender = $respondent_gender;
}

//Family Violence Protection (Check if individual below is a victim of family violence):
// $w->add('X', [13.5, 114.5, 40, 7]); /* html, [x, y, w, h] */

//Name:
$w->add($custodialParentName, [13, 125, 60, 7]); /* html, [x, y, w, h] */

//Date of Birth:
$w->add($custodialParentDoB, [78, 125, 60, 7]); /* html, [x, y, w, h] */

//Social Security Number:
$w->add($custodialParentSSN, [142, 125, 60, 7]); /* html, [x, y, w, h] */

//Address:
$w->add($custodialParentAddress, [13, 134, 60, 7]); /* html, [x, y, w, h] */

//City:
$w->add($custodialParentCity, [78, 134, 55, 7]); /* html, [x, y, w, h] */

//State:
$w->add($custodialParentState, [138.5, 134, 17, 7]); /* html, [x, y, w, h] */

//Zip:
$w->add($custodialParentZIP, [158, 134, 40, 7]); /* html, [x, y, w, h] */

//SEX

//Sex

if ($custodialParentGender == 'Male') {
    // If Male
    $w->add($selectOption, [46, 142, 3, 7]); /* html, [x, y, w, h] */
} else {
    // If Female
    $w->add($selectOption, [79, 142, 3, 7]); /* html, [x, y, w, h] */
}

//Drivers License Number:
$w->add($custodialParentDriversLicence, [110, 145, 50, 7]); /* html, [x, y, w, h] */

//Home Phone:
$w->add($custodialParentHomePhone, [12.5, 154, 30, 7]); /* html, [x, y, w, h] */

//Work Phone:
$w->add($custodialParentWorkPhone, [49, 154, 30, 7]); /* html, [x, y, w, h] */

//Cell Phone:
$w->add($custodialParentCellPhone, [84, 154, 30, 7]); /* html, [x, y, w, h] */

//Relationship to Child(ren):
$w->add($custodialParentRelationshipToChildren, [116, 154, 35, 7]); /* html, [x, y, w, h] */

//Employer Name:
$w->add($custodialParentEmployerName, [13, 164.5, 190, 7]); /* html, [x, y, w, h] */

// Street Address:
$w->add($custodialParentEmployerAddress, [13, 174, 60, 7]); /* html, [x, y, w, h] */

//City:
$w->add($custodialParentEmployerCity, [77, 174, 55, 7]); /* html, [x, y, w, h] */

//State:
$w->add($custodialParentEmployerState, [138.5, 174, 15, 7]); /* html, [x, y, w, h] */

//Zip:
$w->add($custodialParentEmployerZip, [158, 174, 40, 7]); /* html, [x, y, w, h] */

/* SECTION 3  Obligee/Custodial Parent Information
------------------------------------------------------------------------------*/
// Variables for Section 3
//$familyViolenceProtection = ''; // Right For You: Will need conditional logic to determine whether it appear or not
if ($custodialParentName == $petitioner_name) {
    $nonCustodialParentName = $respondent_name;
    $nonCustodialParentDoB = $respondent_dob; // Tell Us About *Relevant Party*
    $nonCustodialParentSSN = $respondent_ssn; // Tell Us About *Relevant Party*
    $nonCustodialParentAddress = $respondent_mailing_address_street; // Tell Us About *Relevant Party* MAILING ADDRESS
    $nonCustodialParentCity = $respondent_mailing_address_city; // Tell Us About *Relevant Party* MAILING ADDRESS
    $nonCustodialParentState = $respondent_mailing_address_state; // Tell Us About *Relevant Party* MAILING ADDRESS
    $nonCustodialParentZIP = $respondent_mailing_address_zip; // Tell Us About *Relevant Party* MAILING ADDRESS
    //$nonCustodialParentSex = ; // Tell Us About *Relevant Party* but will be manually set to both for now
    $nonCustodialParentDriversLicence = $respondent_drivers_license_number; // Tell Us About *Relevant Party*
    $nonCustodialParentHomePhone = $respondent_phone_home; // Tell Us About *Relevant Party*
    $nonCustodialParentWorkPhone = $respondent_phone_work; // Tell Us About *Relevant Party*
    $nonCustodialParentCellPhone = $respondent_phone_cell; // Tell Us About *Relevant Party*
    $nonCustodialParentRelationshipToChildren = 'Parent'; // Tell Us About Children in a possession schedule OR determined by party's sex
    $nonCustodialParentEmployerName = $respondent_employer_name; // Tell Us About *Relevant Party*
    $nonCustodialParentEmployerAddress = $respondent_employer_address_street; // Tell Us About *Relevant Party*
    $nonCustodialParentEmployerCity = $respondent_employer_address_city; // Tell Us About *Relevant Party*
    $nonCustodialParentEmployerState = $respondent_employer_address_state; // Tell Us About *Relevant Party*
    $nonCustodialParentEmployerZip = $respondent_employer_address_zip; // Tell Us About *Relevant Party*
    $nonCustodialParentGender = $respondent_gender;

} else {
    $nonCustodialParentName = $petitioner_name;
    $nonCustodialParentDoB = $petitioner_dob; // Tell Us About *Relevant Party*
    $nonCustodialParentSSN = $petitioner_ssn; // Tell Us About *Relevant Party*
    $nonCustodialParentAddress = $petitioner_mailing_address_street; // Tell Us About *Relevant Party* MAILING ADDRESS
    $nonCustodialParentCity = $petitioner_mailing_address_city; // Tell Us About *Relevant Party* MAILING ADDRESS
    $nonCustodialParentState = $petitioner_mailing_address_state; // Tell Us About *Relevant Party* MAILING ADDRESS
    $nonCustodialParentZIP = $petitioner_mailing_address_zip; // Tell Us About *Relevant Party* MAILING ADDRESS
    //$nonCustodialParentSex = ; // Tell Us About *Relevant Party* but will be manually set to both for now
    $nonCustodialParentDriversLicence = $petitioner_drivers_license_number; // Tell Us About *Relevant Party*
    $nonCustodialParentHomePhone = $petitioner_phone_home; // Tell Us About *Relevant Party*
    $nonCustodialParentWorkPhone = $petitioner_phone_work; // Tell Us About *Relevant Party*
    $nonCustodialParentCellPhone = $petitioner_phone_cell; // Tell Us About *Relevant Party*
    $nonCustodialParentRelationshipToChildren = 'Parent'; // Tell Us About Children in a possession schedule OR determined by party's sex
    $nonCustodialParentEmployerName = $petitioner_employer_name; // Tell Us About *Relevant Party*
    $nonCustodialParentEmployerAddress = $petitioner_employer_address_street; // Tell Us About *Relevant Party*
    $nonCustodialParentEmployerCity = $petitioner_employer_address_city; // Tell Us About *Relevant Party*
    $nonCustodialParentEmployerState = $petitioner_employer_address_state; // Tell Us About *Relevant Party*
    $nonCustodialParentEmployerZip = $petitioner_employer_address_zip; // Tell Us About *Relevant Party*
    $nonCustodialParentGender = $petitioner_gender;
}

//Name:
$w->add($nonCustodialParentName, [13, 194.5, 50, 7]); /* html, [x, y, w, h] */

//Date of Birth:
$w->add($nonCustodialParentDoB, [77, 194.5, 60, 7]); /* html, [x, y, w, h] */

//Social Security Number:
$w->add($nonCustodialParentSSN, [142.5, 194.5, 60, 7]); /* html, [x, y, w, h] */

//Address:
$w->add($nonCustodialParentAddress, [13, 204, 60, 7]); /* html, [x, y, w, h] */

//City:
$w->add($nonCustodialParentCity, [77, 204, 50, 7]); /* html, [x, y, w, h] */

//State:
$w->add($nonCustodialParentState, [138.5, 204, 15, 7]); /* html, [x, y, w, h] */

//Zip:
$w->add($nonCustodialParentZIP, [158, 204, 40, 7]); /* html, [x, y, w, h] */

//SEX
if ($nonCustodialParentGender == 'Male') {
    // If Male
    $w->add($selectOption, [45.5, 211.5, 3, 7]); /* html, [x, y, w, h] */
} else {
    // If Female
    $w->add($selectOption, [78.5, 211.5, 3, 7]); /* html, [x, y, w, h] */
}

//Drivers License Number:
$w->add($nonCustodialParentDriversLicence, [110, 214.5, 60, 7]); /* html, [x, y, w, h] */

//Home Phone:
$w->add($nonCustodialParentHomePhone, [13, 224, 30, 7]); /* html, [x, y, w, h] */

//Work Phone:
$w->add($nonCustodialParentWorkPhone, [49, 224, 30, 7]); /* html, [x, y, w, h] */

//Cell Phone:
$w->add($nonCustodialParentCellPhone, [84, 224, 30, 7]); /* html, [x, y, w, h] */

//Relationship to Child(ren):
$w->add($nonCustodialParentRelationshipToChildren, [116, 224, 50, 7]); /* html, [x, y, w, h] */

//Employer Name:
$w->add($nonCustodialParentEmployerName, [13, 234, 190, 7]); /* html, [x, y, w, h] */

// Address:
$w->add($nonCustodialParentEmployerAddress, [13, 244, 60, 7]); /* html, [x, y, w, h] */

//City:
$w->add($nonCustodialParentEmployerCity, [77, 244, 55, 7]); /* html, [x, y, w, h] */

//State:
$w->add($nonCustodialParentEmployerState, [138.5, 244, 15, 7]); /* html, [x, y, w, h] */

//Zip:
$w->add($nonCustodialParentEmployerZip, [158, 244, 35, 7]); /* html, [x, y, w, h] */

/* PAGE 2
 ************ */
$w->addPage(2);

/* SECTION 4  Dependent Information
------------------------------------------------------------------------------*/
// Variables for Section 3

// CHILDREN OF THE MARRIAGE

// $repeater_children_form_id = 14;
// $repeater_children_search_criteria['field_filters'][] = array('key' => 'created_by', 'value' => $client_user_id);
// $repeater_children_search_criteria['status'] = 'active';
// $repeater_children_sorting = array('key' => 'id', 'direction' => 'ASC', 'is_numeric' => true);
// $children_entries = GFAPI::get_entries($repeater_children_form_id, $repeater_children_search_criteria);

$children_entries = array();

// Child 1
$children_entries[0]['2.3'] = 'Alice';
$children_entries[0]['2.4'] = 'Anne';
$children_entries[0]['2.6'] = 'Parker';
$children_entries[0][3] = 'Female';
$children_entries[0][4] = '2005-01-01';
$children_entries[0][5] = '111-11-1111';
$children_entries[0][6] = 'Yes';

// Child 2
$children_entries[1]['2.3'] = 'Bryce';
$children_entries[1]['2.4'] = 'Ben';
$children_entries[1]['2.6'] = 'Parker';
$children_entries[1][3] = 'Male';
$children_entries[1][4] = '2006-02-02';
$children_entries[1][5] = '111-11-1112';
$children_entries[1][6] = 'Yes';
// Child 3
$children_entries[2]['2.3'] = 'Cassie';
$children_entries[2]['2.4'] = 'Cheryl';
$children_entries[2]['2.6'] = 'Parker';
$children_entries[2][3] = 'Female';
$children_entries[2][4] = '2009-03-03';
$children_entries[2][5] = '111-11-1113';
$children_entries[2][6] = 'No';

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
    $children[$i]['birth_date'] = date('d/m/Y', $children_birth_date_string);
    $children[$i]['ssn'] = $children_entries[$i][5];
    $children[$i]['has_dl'] = $children_entries[$i]['6'];
    // echo '<pre>';
    // echo 'CHILDREN<br>';
    // print_r($children[$i]);
    // echo '<br></pre>';
}

//DEPENDENT 1

if ($count_children_entries > 0) {
//Name:
    $w->add($children[0]['full_name'], [13, 47, 60, 7]); /* html, [x, y, w, h] */

//SEX
    if ($children[0]['gender'] == 'Male') {
        // If Male
        $w->add($selectOption, [79, 46, 3, 7]); /* html, [x, y, w, h] */
    } else {
        // If Female
        $w->add($selectOption, [99, 46, 3, 7]); /* html, [x, y, w, h] */
    }

//Date of Birth:
    $w->add($children[0]['birth_date'], [124.5, 47, 30, 7]); /* html, [x, y, w, h] */

//Social Security Number:
    $w->add($children[0]['ssn'], [158, 47, 40, 7]); /* html, [x, y, w, h] */
}

/************
//DEPENDENT 2
 ****/

if ($count_children_entries > 1) {
    //Name:
    $w->add($children[1]['full_name'], [13, 64, 60, 7]); /* html, [x, y, w, h] */

    //SEX
    if ($children[1]['gender'] == 'Male') {
        // If Male
        $w->add($selectOption, [79, 63, 3, 7]); /* html, [x, y, w, h] */
    } else {
        // If Female
        $w->add($selectOption, [99, 63, 3, 7]); /* html, [x, y, w, h] */
    }

    //Date of Birth:
    $w->add($children[1]['birth_date'], [124.5, 64, 30, 7]); /* html, [x, y, w, h] */

    //Social Security Number:
    $w->add($children[1]['ssn'], [158, 64, 40, 7]); /* html, [x, y, w, h] */
}

/************
//DEPENDENT 3
 ****/

if ($count_children_entries > 2) {
    //Name:
    $w->add($children[2]['full_name'], [13, 81, 60, 7]); /* html, [x, y, w, h] */

    //SEX
    if ($children[2]['gender'] == 'Male') {
        // If Male
        $w->add($selectOption, [79, 80, 3, 7]); /* html, [x, y, w, h] */
    } else {
        // If Female
        $w->add($selectOption, [99, 80, 3, 7]); /* html, [x, y, w, h] */
    }

    //Date of Birth:
    $w->add($children[2]['birth_date'], [124.5, 81, 30, 7]); /* html, [x, y, w, h] */

    //Social Security Number:
    $w->add($children[2]['ssn'], [158, 81, 40, 7]); /* html, [x, y, w, h] */
}

/************
//DEPENDENT 4
 ****/

if ($count_children_entries > 3) {
    //Name:
    $w->add($children[3]['full_name'], [13, 81, 60, 7]); /* html, [x, y, w, h] */

    //SEX
    if ($children[3]['gender'] == 'Male') {
        // If Male
        $w->add($selectOption, [79, 80, 3, 7]); /* html, [x, y, w, h] */
    } else {
        // If Female
        $w->add($selectOption, [99, 80, 3, 7]); /* html, [x, y, w, h] */
    }

    //Date of Birth:
    $w->add($children[3]['birth_date'], [124.5, 81, 30, 7]); /* html, [x, y, w, h] */

    //Social Security Number:
    $w->add($children[3]['ssn'], [158, 81, 40, 7]); /* html, [x, y, w, h] */
}

/* SECTION 5  Attorney Information
------------------------------------------------------------------------------*/
// Variables for Section 3

$dc_attorney_name = 'Sharon M. Ramage'; // Dependent Repeater, Will be Sharon M Ramage if DBU
$dc_attorney_phone = '972-562-9890'; // Dependent Repeater
$respondent_attorney_name = 'Ashleigh A. Attorney'; //  Dependent Repeater, Will be Sharon M Ramage if DBU
$respondent_attorney_phone = '888-888-8881'; // Dependent Repeater

if ($custodialParentName == $petitioner) {
    $obligeeAttorneyName = $dc_attorney_name;
    $obligeeAttorneyPhone = $dc_attorney_phone;
    $obligerAttorneyName = $respondent_attorney_name;
    $obligerAttorneyPhone = $respondent_attorney_phone;

} else {
    $obligeeAttorneyName = $respondent_attorney_name;
    $obligeeAttorneyPhone = $respondent_attorney_phone;
    $obligerAttorneyName = $dc_attorney_name;
    $obligerAttorneyPhone = $dc_attorney_phone;
}

//Obligee Attorney Name:
$w->add($obligeeAttorneyName, [12, 131, 45, 7]); /* html, [x, y, w, h] */

//Phone:
$w->add($obligeeAttorneyPhone, [61.5, 131, 45, 7]); /* html, [x, y, w, h] */

//Obliger Attorney Name:
$w->add($obligerAttorneyName, [110, 131, 45, 7]); /* html, [x, y, w, h] */

//Phone:
$w->add($obligerAttorneyPhone, [159, 131, 45, 7]); /* html, [x, y, w, h] */