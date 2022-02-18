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

// Get data from master

// For Testing Purposes
$master_entries = array();

// REPEATER FORM ENTRY ID
$master_entries[0][83] = ''; // Tell Is About Your Child(ren)
// $master_entries[0][] = ''; //
// $master_entries[0][] = ''; //

// PREQUAL DATA
// Service & Plan
$master_entries[0][276] = 'DYW'; // Service
$master_entries[0][277] = 'It\'s Simple'; // Plan (Its Simple, Not So Simple, Its Complicated [with children])

// Petitioner
$master_entries[0][96]['first'] = 'Peter'; // Petitioner Full Name
$master_entries[0][96]['middle'] = 'Paul'; // Petitioner Full Name
$master_entries[0][96]['last'] = 'Parker'; // Petitioner Full Name
$master_entries[0][39] = '999-999-9991'; // Petitioner phone cell
$master_entries[0][40] = 'petitioner@email.com'; // Petitioner phone cell
$master_entries[0][229] = '01/01/1971'; // Petitioner date of birth
// Qualifier
$master_entries[0][234] = 'Get Started'; // Divorce stage
// Respondent
$master_entries[0][114]['first'] = 'Rebekah'; // Respondent full name
$master_entries[0][114]['middle'] = 'Rochelle'; // Respondent full name
$master_entries[0][114]['last'] = 'Parker'; // Respondent full name
$master_entries[0][275] = '02/02/1972'; // Respondent date of birth
$master_entries[0][235] = 'Yes'; // Respondent hired an attorney?
$master_entries[0][236] = 'Alfred Attorney'; // Respondent attorney's name
// Qualifier
$master_entries[0][237] = 'No'; // Petitioner filed for divorce?
$master_entries[0][238] = ''; // If Yes, which court was the divorce filed in?
$master_entries[0][239] = ''; // If Yes, what is the Cause Number?
$master_entries[0][240] = ''; // If Yes, Is the trial date set?
$master_entries[0][241] = 'No'; // Does a pre/post marital agreement exist?
$master_entries[0][242] = 'No'; // Is spousal maintenance requested?
// Qualified Residency
$master_entries[0][243] = ''; // SECTION HEADING: Texas Residency
$master_entries[0][244] = '6 months or longer'; // Petitioner State duration
$master_entries[0][245] = 'Collin'; // Petitioner County
$master_entries[0][246] = ''; // If 'Other', petitioner County other
$master_entries[0][247] = '3 months or longer'; // $petitioner County duration
$master_entries[0][248] = '6 months or longer'; // Respondent State duration
$master_entries[0][249] = 'Collin'; // Respondent County
$master_entries[0][250] = ''; // If 'Other', respondent County other
$master_entries[0][251] = '3 months or longer'; // Respondent County duration
// Marital Estate
$master_entries[0][252] = 'Yes'; // Real estate purchased while married?
$master_entries[0][253] = '1'; // If yes, number of parcels
$master_entries[0][254] = 'Yes'; // Interest in employer sponsored retirement plans?
$master_entries[0][255] = '1'; // If yes, Number of employer sponsored retirement plans?
$master_entries[0][256] = '4'; // Joint ownership of assets?
$master_entries[0][257] = ''; // If yes, number of jointly owned assets
$master_entries[0][258] = ''; // In agreement on how assets will be divided?
$master_entries[0][259] = ''; // Does either party own separate property?
$master_entries[0][260] = ''; // Are there jointly owned debts?
$master_entries[0][261] = ''; // Are there more than 6 jointly owned debts?
$master_entries[0][262] = ''; // Are the parties in agreement on awarding debts?
// Qualifier Bankruptcy
$master_entries[0][263] = ''; // Is there a pending bankruptct?
$master_entries[0][264] = ''; // If yes, which court?
$master_entries[0][265] = ''; // If yes, date of filing?
// Children
$master_entries[0][266] = ''; // Are there children under the age of 18?
$master_entries[0][267] = ''; // If yes, are both parties in agreement on custody?
$master_entries[0][268] = ''; // If yes, are both parties in agreement on visitation?
$master_entries[0][269] = ''; // If yes, are both parties in agreement on child support?
$master_entries[0][270] = ''; // Are there children age 18 or older?
$master_entries[0][271] = ''; // Is either party expecting a child?
$master_entries[0][272] = ''; // Do protective orders exist?
// Plan
$master_entries[0][274] = ''; // Redirect URL

// Jurisdiction
$master_entries[0][7] = '1234'; // Cause Number
$master_entries[0][5] = '987th'; // Judicial District Number
$master_entries[0][6] = 'Collin'; // Juditial County
$master_entries[0][8001] = '03/01/2022'; // SDU Section: Order Information [Date of Hearing: Both entered by paralegal]
$master_entries[0][8002] = '03/01/2022'; // SDU Section: Order Information [Order Sign Date: Both entered by paralegal]

// PETITIONER (Tell Us About Yourself)
$master_entries[0][97] = 'Male'; // Gender
$master_entries[0][13] = '111-11-1111'; // SSN
$master_entries[0][279] = 'Yes'; // Drivers license exists
$master_entries[0][14] = 'DL1111111'; // Drivers license number
$master_entries[0][103] = 'Texas'; // Drivers license State
$master_entries[0][7001] = '999-999-9992'; // Petitioner phone home
// Petitioner address residence
$master_entries[0][38]['street'] = '321 Petitioner Street'; // Address residence
$master_entries[0][38]['street2'] = 'Apt 321'; // Address residence
$master_entries[0][38]['city'] = 'Prosper'; // Address residence
$master_entries[0][38]['state'] = 'Texas'; // Address residence
$master_entries[0][38]['zip'] = '75078'; // Address residence
// Address mailing
$master_entries[0][106]['street'] = '321 Petitioner Mailing Street'; // Address residence
$master_entries[0][106]['street2'] = 'Apt 321'; // Address residence
$master_entries[0][106]['city'] = 'Plano'; // Address residence
$master_entries[0][106]['state'] = 'Texas'; // Address residence
$master_entries[0][106]['zip'] = '75078'; // Address residence
// Employment
$master_entries[0][230] = 'Yes'; // Petitioner employed?
$master_entries[0][231] = 'Petitioner Employer Inc'; // Petitioner employer
$master_entries[0][100] = '999-999-9993'; // Petitioner phone work
$master_entries[0][295]['street'] = '123 Petitioner Employer Street'; // Petitioner employer
$master_entries[0][295]['street2'] = 'STE 123'; // Petitioner employer
$master_entries[0][295]['city'] = 'Plano'; // Petitioner employer
$master_entries[0][295]['state'] = 'Texas'; // Petitioner employer
$master_entries[0][295]['zip'] = '75093'; // Petitioner employer
$master_entries[0][295]['country'] = 'United States'; // Petitioner employer
$master_entries[0][5001] = '11-1111111'; // Petitioner employer FEIN

// RESPONDENT (Tell Us About Your Spouse)
$master_entries[0][115] = 'Female'; // Gender
$master_entries[0][74] = 'respondent@email.com'; // Email
$master_entries[0][117] = '888-888-8881'; // Phone cell
$master_entries[0][73] = '888-888-8882'; // Phone home
$master_entries[0][119] = '222-22-2222'; // SSN
$master_entries[0][280] = 'Yes'; // Drivers license?
$master_entries[0][120] = 'DL222222222'; // Drivers license number
$master_entries[0][121] = 'Texas'; // Drivers license State
// Address Residence
$master_entries[0][125]['street'] = '321 Respondent Street'; // Address residence
$master_entries[0][125]['street2'] = 'Apt 321'; // Address residence
$master_entries[0][125]['city'] = 'Prosper'; // Address residence
$master_entries[0][125]['state'] = 'Texas'; // Address residence
$master_entries[0][125]['zip'] = '75078'; // Address residence
// Address mailing
$master_entries[0][72]['street'] = '321 Respondent Mailing Street'; // Address residence
$master_entries[0][72]['street2'] = 'Apt 321'; // Address residence
$master_entries[0][72]['city'] = 'Prosper'; // Address residence
$master_entries[0][72]['state'] = 'Texas'; // Address residence
$master_entries[0][72]['zip'] = '75078'; // Address residence
// Employment
$master_entries[0][281] = 'Yes '; // Employed?
$master_entries[0][282] = 'Respondent Employer Inc'; // Emplyer name
$master_entries[0][118] = '888-888-8883'; // Phone work
$master_entries[0][301]['street'] = '123 Respondent Employer Street'; // Respondent employer
$master_entries[0][301]['street2'] = 'STE 123'; // Respondent employer
$master_entries[0][301]['city'] = 'Prosper'; // Respondent employer
$master_entries[0][301]['state'] = 'Texas'; // Respondent employer
$master_entries[0][301]['zip'] = '75078'; // Respondent employer
$master_entries[0][301]['country'] = 'United States'; // Respondent employer
$master_entries[0][5002] = '22-2222222'; // Employer FEIN

// MARRIAGE DETAILS (Lets Get Started)
$master_entries[0][20] = ''; // Date of marriage
$master_entries[0][21] = ''; // Still live together
$master_entries[0][24] = ''; // If No, date of separation

// NAME CHANGE (Lets Get Started)
$master_entries[0][27] = ''; // Name change requested?
$master_entries[0][28] = ''; // if yes, which party requests name change?
$master_entries[0][29] = ''; // What will the name be changed to?

// CHILDREN (Tell Us About Your Child(ren))
$master_entries[0][259] = ''; // Child Reater entry ids comma separated

// HEALTH INSURANCE FOR CHILDREN
$master_entries[0][9201] = 'No'; // Health Insurance in place
// IF YES
$master_entries[0][9202] = 'Other'; // Health Insurance Type [OPTIONS: My Employment, Spouses Employment, Private, Medicaid, Chip, Other]
$master_entries[0][9203] = 'ABC Health Insurance Company'; // Health Insurance Company Name
$master_entries[0][9204] = 'HIA123456'; // Health Insurance Policy Number
$master_entries[0][9205] = 'HIA-ID1234'; // Health Insurance Policy Holder ID Number
$master_entries[0][9206] = 'Me'; // Health Insurance Person Responsible for premium [Me, My Spouse]
$master_entries[0][9207] = '1250.00'; // Health Insurance Monthly Premium

// DENTAL INSURANCE FOR CHILDREN
$master_entries[0][9211] = 'No'; // Dental Insurance in place
// IF YES
$master_entries[0][9212] = 'My Spouses Employment'; // Dental Insurance Type [OPTIONS: My Employment, My Spouses Employment, Private, Medicaid, Chip, Other]
$master_entries[0][9213] = 'XYZ Dental Insurance Company'; // Dental Insurance Company Name
$master_entries[0][9214] = 'DIA123456'; // Dental Insurance Policy Number
$master_entries[0][9215] = 'DIA-ID1234'; // Dental Insurance Policy Holder ID Number
$master_entries[0][9216] = 'My Spouse'; // Dental Insurance Person Responsible for premium [Me, My Spouse]
$master_entries[0][9217] = '500.00'; // Dental Insurance Monthly Premium

$children_entries = array(); // Tell Us About Your Child(ren)

// Child 1 if exists Full Name
$children_entries[0][2]['first'] = 'Alice';
$children_entries[0][2]['middle'] = 'Anne';
$children_entries[0][2]['last'] = 'Parker';
$children_entries[0][3] = 'Female'; // Gender
$children_entries[0][22] = '333-33-3333'; // SSN
$children_entries[0][4] = '01/01/2005'; // DOB
$children_entries[0][19] = '17'; // Age
$children_entries[0][6] = 'Yes'; // Drivers License?
$children_entries[0][23] = 'DL333333'; // Drivers license number
$children_entries[0][8] = 'Texas'; // Drivers license State

// Child 2 if exists Full Name
$children_entries[1][2]['first'] = 'Bryce';
$children_entries[1][2]['middle'] = 'Ben';
$children_entries[1][2]['last'] = 'Parker';
$children_entries[1][3] = 'Male'; // Gender
$children_entries[1][22] = '444-44-4444'; // SSN
$children_entries[1][4] = '02/02/2006'; // DOB
$children_entries[1][19] = '16'; // Age
$children_entries[1][6] = 'Yes'; // Drivers License?
$children_entries[1][23] = 'DL444444'; // Drivers license number
$children_entries[1][8] = 'Texas'; // Drivers license State

// Child 3 if exists Full Name
$children_entries[2][2]['first'] = 'Cassie';
$children_entries[2][2]['middle'] = 'Cheryl';
$children_entries[2][2]['last'] = 'Parker';
$children_entries[2][3] = 'Female'; // Gender
$children_entries[2][22] = '555-55-5555'; // SSN
$children_entries[2][4] = '03/03/2009'; // DOB
$children_entries[2][19] = '13'; // Age
$children_entries[2][6] = 'No'; // Drivers License?
$children_entries[2][23] = ''; // Drivers license number
$children_entries[2][8] = ''; // Drivers license State

// Child 4 if exists Full Name
$children_entries[3][2]['first'] = 'Dean';
$children_entries[3][2]['middle'] = 'Donald';
$children_entries[3][2]['last'] = 'Parker';
$children_entries[3][3] = 'Male'; // Gender
$children_entries[3][22] = '666-66-6666'; // SSN
$children_entries[3][4] = '04/04/2010'; // DOB
$children_entries[3][19] = '12'; // Age
$children_entries[3][6] = 'No'; // Drivers License?
$children_entries[3][23] = ''; // Drivers license number
$children_entries[3][8] = ''; // Drivers license State

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
$jurisState = strtoupper('Texas'); // Right F You
// County of Jurisdiction
$jurisCounty = strtoupper($master_entries[0][6]); // Right F You
// Cause Number
$jurisCauseNumber = $master_entries[0][7]; // Masters

// OUTPUT
// Date of the order
$w->add($date_of_order, [139, 21, 40, 7]); /* html, [x, y, w, h] */

// SELECT: Income Withholding Order/Notice for support
$w->add($selectOption, [17.5, 28.5, 4, 7]); /* html, [x, y, w, h] */

// SELECT: Attorney
$w->add($selectOption, [103, 44, 4, 7]); /* html, [x, y, w, h] */

// State/Tribe/Territory = State of Jurisdiction
$w->add($jurisState, [50, 70, 45, 7]); /* html, [x, y, w, h] */

// City/County/Dist/Tribe = County of Jurisdiction
$w->add($jurisCounty . ' COUNTY', [51, 75, 45, 7]); /* html, [x, y, w, h] */

// Order ID = Cause Number
$w->add($jurisCauseNumber, [117, 74.5, 80, 7]); /* html, [x, y, w, h] */

/* Section II Employer and Case Information (Completed by Sender)
 *********************************************************************************************************************** */

//Employer and Case Information

// PETITIONER DETAILS
// Petitioner Full Name
$petitionerNameFirst = $master_entries[0][96]['first'];
$petitionerNameMiddle = $master_entries[0][96]['middle'];
$petitionerNameLast = $master_entries[0][96]['last'];
if ($petitionerNameMiddle == '') {
    $petitionerNameFull = strtoupper($petitionerNameFirst . ' ' . $petitionerNameLast);
    $petitionerNameFull = strtoupper('Test');
} else {
    $petitionerNameFull = strtoupper($petitionerNameFirst . ' ' . $petitionerNameMiddle . ' ' . $petitionerNameLast);
}

// Petitioner SSN
$petitionerSsn = $master_entries[0][13];

// Petitioner DOB
$petitionerDob = $master_entries[0][229]; // Right For You or Tell Us About Yourself

// Petitioner Employer Name
$petitionerEmployerName = 'Petitioner Employer Inc';

// Petitioner Employer Address Street
$petitioner_employer_address_street_1 = $master_entries[0][295]['street'];
$petitioner_employer_address_street_2 = $master_entries[0][295]['street2'];

if ($petitioner_employer_address_street_2 == '') {
    $petitionerEmployerAddressStreet = $petitioner_employer_address_street_1;
} else {
    $petitionerEmployerAddressStreet = $petitioner_employer_address_street_1 . ', ' . $petitioner_employer_address_street_2;
}

// Petitioner Employer Address City, State, Zip
$petitionerEmployerAddressCity = $master_entries[0][295]['city'];
$petitionerEmployerAddressState = $master_entries[0][295]['state'];
$petitionerEmployerAddressZip = $master_entries[0][295]['zip'];

// Petitioner Employer Address Country
$petitionerEmployerAddressCountry = $master_entries[0][295]['country'];

// Petitioner Employer FEIN
$petitionerEmployerFein = $master_entries[0][5001];

// RESPONDENT Details
// Respondent Full Name
$respondentNameFirst = $master_entries[0][114]['first'];
$respondentNameMiddle = $master_entries[0][114]['middle'];
$respondentNameLast = $master_entries[0][114]['last'];
if ($respondentNameMiddle == '') {
    $respondentNameFull = strtoupper($respondentNameFirst . ' ' . $respondentNameLast);
} else {
    $respondentNameFull = strtoupper($respondentNameFirst . ' ' . $respondentNameMiddle . ' ' . $respondentNameLast);
}
// Respondent SSN
$respondentSsn = $master_entries[0][119]; // Tell Us About Yourself
// Respondent DOB
$respondentDob = $master_entries[0][275]; // Right For You or Tell Us About Yourself
// Respondent Employer Name
$respondentEmployerName = $master_entries[0][282];
// Respondent Employer Address Street
$respondent_employer_address_street_1 = $master_entries[0][301]['street'];
$respondent_employer_address_street_2 = $master_entries[0][301]['street2'];
if ($respondent_employer_address_street_2 == '') {
    $respondentEmployerAddressStreet = $respondent_employer_address_street_1;
} else {
    $respondentEmployerAddressStreet = $respondent_employer_address_street_1 . ', ' . $respondent_employer_address_street_2;
}
// Respondent Employer Address City, State, Zip
$respondentEmployerAddressCity = $master_entries[0][301]['city'];
$respondentEmployerAddressState = $master_entries[0][301];
$respondentEmployerAddressZip = $master_entries[0][301]['zip'];
// Respondent Employer Address Country
$respondentEmployerAddressCountry = $master_entries[0][301]['country'];
// Respondent Employer FEIN
$respondentEmployerFein = $master_entries[0][5002];

// OBLIGOR Name
$obligorName = $respondentNameFull;

if ($obligorName == $petitionerNameFull) {
    // Obligor Employer Name
    $employersName = $petitionerEmployerName;
    // Obligor Employer Address, Street
    $employerAddressStreet = $petitionerEmployerAddressStreet;
    // Obligor Employer City/State?ZIP
    $employerAddressCiyStateZip = $petitionerEmployerAddressCity . ', ' . $petitionerEmployerAddressState . ' ' . $petitionerEmployerAddressZip;
    // Obligor Employer Country
    $employerAddressCountry = $petitionerEmployerAddressCountry; // Tell Us About ...
    // Employer FEIN Number
    $employerFEIN = $petitionerEmployerFein;

    // Obligor SSN
    $obligorSSN = $petitionerSsn; // Tell Us About ...
    // Obligor DOB
    $obligorDoB = $petitionerDob; // Tell Us About ...
    // Obligee Name
    $obligeeName = $respondentNameFull;
} else {
    // Obligor Employer Name
    $employersName = $respondentEmployerName;
    // Obligor Employer Address, Street
    $employerAddressStreet = $respondentEmployerAddressStreet;
    // Obligor Employer City/State?ZIP
    $employerAddressCiyStateZip = $respondentEmployerAddressCity . ', ' . $respondentEmployerAddressState . ' ' . $respondentEmployerAddressZip;
    // Obligor Employer Country
    $employerAddressCountry = $respondentEmployerAddressCountry; // Tell Us About ...
    // Employer FEIN Number
    $employerFEIN = $respondentEmployerFein;

    // Obligor SSN
    $obligorSSN = $respondentSsn; // Tell Us About ...
    // Obligor DOB
    $obligorDoB = $respondentDob; // Tell Us About ...
    // Obligee Name
    $obligeeName = $petitionerNameFull;
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

$count_children_entries = count($children_entries);
$children = array();

for ($i = 0; $i < $count_children_entries; $i++) {
    $children[$i]['first_name'] = $children_entries[$i][2]['first'];
    $children[$i]['middle_name'] = $children_entries[$i][2]['middle'];
    $children[$i]['last_name'] = $children_entries[$i][2]['last'];
    if ($children[$i]['middle_name'] != '') {
        $children[$i]['full_name'] = $children[$i]['last_name'] . ', ' . $children[$i]['first_name'] . ', ' . $children[$i]['middle_name'];
    } else {
        $children[$i]['full_name'] = $children[$i]['last_name'] . ', ' . $children[$i]['first_name'];
    }

    $children[$i]['birth_date_raw'] = $children_entries[$i][4];
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

if ($count_children_entries > 3) {
    //Name:
    $w->add($children[3]['full_name'], [16.5, 152.75, 60, 7]); /* html, [x, y, w, h] */

    //Date of Birth:
    $w->add($children[3]['birth_date'], [96, 152.75, 35, 7]); /* html, [x, y, w, h] */

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
// State/Trive
$w->add($jurisState, [117, 175, 23, 7]); /* html, [x, y, w, h] */

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
$w->add($totalWithholdAmount, [72, 212, 23, 7]); /* html, [x, y, w, h] */
// Total Frequency
$w->add($totalWithholdPeriod, [98, 212, 23, 7]); /* html, [x, y, w, h] */

/* Section IV Amounts To Withhold
 **************************************************************** */

// OUTPUT
// Amount per weekly pay period
$amountWithholdWeekly = ($totalWithholdAmount * 12) / 52;
$amountWithholdWeeklyFormatted = number_format($amountWithholdWeekly, 2, '.', ',');
$w->add($amountWithholdWeeklyFormatted, [16, 231, 20, 7]); /* html, [x, y, w, h] */

// Amount per semi-monthly Pay Period
$amountWithholdSemiMonthly = ($totalWithholdAmount * 12) / 24;
$amountWithholdSemiMonthlyFormatted = number_format($amountWithholdSemiMonthly, 2, '.', ',');
$w->add($amountWithholdSemiMonthlyFormatted, [108, 231, 20, 7]); /* html, [x, y, w, h] */

// Amount per bi-weekly pay period
$amountWithholdBiWeekly = ($totalWithholdAmount * 12) / 26;
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
$w->add($jurisCauseNumber, [113.5, 21.5, 85, 7]); /* html, [x, y, w, h] */

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

$w->add($jurisState, [103.5, 35.5, 30, 7]); /* html, [x, y, w, h] */
$w->add($remitanceNoDaysBeginWithholding, [78, 40.5, 5, 7]); /* html, [x, y, w, h] */
$w->add($remitanceDateofOrder, [122, 40, 25, 7]); /* html, [x, y, w, h] */
$w->add($remitanceNoBusinessDaysBeginWithholding, [26, 44, 5, 7]); /* html, [x, y, w, h] */
$w->add($remitancePercentage, [56.5, 48, 5, 7]); /* html, [x, y, w, h] */
$w->add($jurisState, [45, 52.5, 30, 7]); /* html, [x, y, w, h] */

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
$w->add($jurisCauseNumber, [116, 22.5, 85, 7]); /* html, [x, y, w, h] */

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
$w->add($jurisCauseNumber, [116, 22.5, 85, 7]); /* html, [x, y, w, h] */

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