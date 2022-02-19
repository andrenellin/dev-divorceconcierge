<?php

/*
 * Template Name: Austin Form
 * Version: 1.0
 * Description: Overlaying the Austin Form for Divorce Concierge
 * Author:
 * Author URI:
 * Group: 2. Awaiting Layout Approval
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
 * @var array  $config    The initialised template config class � eg. /config/zadani.php
 * @var object $gfpdf     The main Gravity PDF object containing all our helper classes
 * @var array  $args      Contains an array of all variables - the ones being described right now - passed to the template
 */

/**
 * @var GFPDF\Plugins\DeveloperToolkit\Writer\Writer $w    A helper class that does the heavy lifting and PDF manipulation
 * @var \mPDF|\Mpdf\Mpdf|\GFPDF_Vendor\Mpdf\Mpdf      $mpdf The raw Mpdf object
 */

/* -------------------------------------------------------------------------------------------- */
/* GLOBAL VARIABLES */
$selectOption = 'X';
$leaveBlank = '&nbsp;';

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
$master_entries[0][266] = 'Yes'; // Are there children under the age of 18?
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
$master_entries[0][8003] = '03/01/2022'; // AUSTIN FORM Section I: General Information [Date of Order: Both entered by paralegal]
$master_entries[0][8100] = 'Sharon M. Ramage'; // Peititoner Attorney Name DBU
$master_entries[0][8101] = '972-562-9890'; // Peititoner Attorney Tel DBU
$master_entries[0][8102] = '8951 Collin-McKinney Parkway Suite 1402, McKinney, Texas, 75070'; // Petitoner Attorney Address DBU

// PETITIONER (Tell Us About Yourself)
$master_entries[0][97] = 'Male'; // Gender
$master_entries[0][13] = '111-11-1111'; // SSN
$master_entries[0][279] = 'Yes'; // Drivers license exists
$master_entries[0][14] = 'DL1111111'; // Drivers license number
$master_entries[0][103] = 'Texas'; // Drivers license State
$master_entries[0][7001] = '999-999-9992'; // Petitioner phone home
$master_entries[0][7003] = 'White'; // Petitioner phone home
$master_entries[0][7200]['last'] = 'Parker'; // Maiden Name
// Birth Details
$master_entries[0][7002]['city'] = 'Riverton';
$master_entries[0][7002]['state'] = 'Utah';
$master_entries[0][7002]['country'] = 'United States';
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
$master_entries[0][7100] = '11-1111111'; // Petitioner employer FEIN

// RESPONDENT (Tell Us About Your Spouse)
$master_entries[0][115] = 'Female'; // Gender
$master_entries[0][74] = 'respondent@email.com'; // Email
$master_entries[0][117] = '888-888-8881'; // Phone cell
$master_entries[0][73] = '888-888-8882'; // Phone home
$master_entries[0][119] = '222-22-2222'; // SSN
$master_entries[0][280] = 'Yes'; // Drivers license?
$master_entries[0][120] = 'DL222222222'; // Drivers license number
$master_entries[0][121] = 'Texas'; // Drivers license State
$master_entries[0][6003] = 'Black'; // Drivers license State
$master_entries[0][6200]['last'] = 'Rivers'; // Maiden Name
// Birth Details
$master_entries[0][6002]['city'] = 'Krugersdorp';
$master_entries[0][6002]['state'] = 'Gauteng';
$master_entries[0][6002]['country'] = 'South Africa';
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
$master_entries[0][6100] = '22-2222222'; // Employer FEIN

// MARRIAGE DETAILS (Lets Get Started)
$master_entries[0][20] = '01/01/2001'; // Date of marriage
$master_entries[0][21] = 'Yes'; // Still live together
$master_entries[0][24] = '01/01/2022'; // If No, date of separation
$master_entries[0][5100]['city'] = 'Las Vegas'; // Place of Marriage: City
$master_entries[0][5100]['state'] = 'Nevada'; // Place of Marriage: State
$master_entries[0][5100]['country'] = 'United States'; // Place of Marriage: ZIP

// NAME CHANGE (Lets Get Started)
$master_entries[0][27] = 'Yes'; // Name change requested?
$master_entries[0][28] = 'My Spouse'; // if yes, which party requests name change?
$master_entries[0][29] = 'Rebekah Rochelle Rivers'; // What will the name be changed to?

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

// Get entries from Child Repeater FOrm
// Variables
// $repeater_children_form_id = 14;
// $repeater_children_search_criteria['field_filters'][] = array('key' => 'created_by', 'value' => $client_user_id);
// $repeater_children_search_criteria['status'] = 'active';
// $repeater_children_sorting = array('key' => 'id', 'direction' => 'ASC', 'is_numeric' => true);
// $children_entries = GFAPI::get_entries($repeater_children_form_id, $repeater_children_search_criteria);

$children_entries = array(); // Tell Us About Your Child(ren)

// Child 1 if exists Full Name
$children_entries[0][2]['first'] = 'Alice';
$children_entries[0][2]['middle'] = 'Anne';
$children_entries[0][2]['last'] = 'Parker';
$children_entries[0][3] = 'Female'; // Gender
$children_entries[0][22] = '333-33-3333'; // SSN
$children_entries[0][4] = '01/01/2005'; // DOB
$children_entries[0][3001]['city'] = 'Plano'; // Birthplace: City
$children_entries[0][3001]['state'] = 'Texas'; // Birthplace: State
$children_entries[0][3001]['country'] = 'United States'; // Birthplace: Country
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
$children_entries[1][3001]['city'] = 'Plano'; // Birthplace: City
$children_entries[1][3001]['state'] = 'Texas'; // Birthplace: State
$children_entries[1][3001]['country'] = 'United States'; // Birthplace: Country
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
$children_entries[2][3001]['city'] = 'Plano'; // Birthplace: City
$children_entries[2][3001]['state'] = 'Texas'; // Birthplace: State
$children_entries[2][3001]['country'] = 'United States'; // Birthplace: Country
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
$children_entries[3][4] = '04/04/20010'; // DOB
$children_entries[3][3001]['city'] = 'Plano'; // Birthplace: City
$children_entries[3][3001]['state'] = 'Texas'; // Birthplace: State
$children_entries[3][3001]['country'] = 'United States'; // Birthplace: Country
$children_entries[3][19] = '12'; // Age
$children_entries[3][6] = 'No'; // Drivers License?
$children_entries[3][23] = ''; // Drivers license number
$children_entries[3][8] = ''; // Drivers license State

/* -------------------------------------------------------------------------------------------- */
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

/* -------------------------------------------------------------------------------------------- */
/*
 * Begin PDF Generation
 *
 * The API documentation can be found at https://gravitypdf.com/developer-toolkit-api-documentation/
 */
$w->addPdf(__DIR__ . '/pdfs/Austin-Form.pdf'); /* CHANGE THIS TO POINT TO YOUR PDF */

/* -------------------------------------------------------------------------------------------- */
/* PAGE 1 */
$w->addPage(1);

/* -------------------------------------------------------------------------------------------- */
/* SECTION I: General Information  */
/* Variables */

$jurisCounty = $master_entries[0][6];
$jurisDistrictNumber = $master_entries[0][5];
$jurisCauseNumber = $master_entries[0][7];
$jurisDateOfOrder = $master_entries[0][8002];
$service = $master_entries[0][276]; // DYW or DBU
if ($service == 'DBU') {
    $petitionerAttorneyName = strtoupper($master_entries[0][8100]);
    $petitionerAttorneyTelephone = $master_entries[0][8101];
    $petitionerAttorneyAddress = strtoupper($master_entries[0][8102]);
}

if ($service == 'DBU') {
    $petitionerAttorneyAddress = $petitionerAttorneyAddress; // Right For You
} else {
    $petitionerAttorneyAddress = ''; // Right For You
}
$childrenUnder18 = $master_entries[0][266]; // Yes or No

/* OUTPUT */
// 1a. County
$w->add($jurisCounty, [36, 20.5, 40, 7]); /* html, [x, y, w, h] */

// 1b. Court Number
$w->add($jurisDistrictNumber, [105, 20.5, 35, 7]); /* html, [x, y, w, h] */

// 1c. Cause Number
$w->add($jurisCauseNumber, [39, 27.5, 37, 7]); /* html, [x, y, w, h] */

// 1d. Date of Order
$w->add($jurisDateOfOrder, [127.5, 27.5, 25, 7]); /* html, [x, y, w, h] */

// 2. Type of Order
// SELECT ONLY Divorce/Annulment with Children or Divorce Annulment without Children
$childrenUnder18 = $master_entries[0][266]; // Yes or No
if ($childrenUnder18 == 'Yes') {
    $w->add($selectOption, [18, 42, 5, 7]); /* html, [x, y, w, h] */
} else {
    $w->add($selectOption, [108, 42, 5, 7]); /* html, [x, y, w, h] */
}

// 3. Only Complete if Service is Divorce By Us
if ($service == 'DBU') {

// 3a. Name of Attorney for Petitioner
    $w->add($petitionerAttorneyName, [20, 87, 100, 7]); /* html, [x, y, w, h] */

// 3b. Telephone number
    $w->add($petitionerAttorneyTelephone, [127, 87, 40, 7]); /* html, [x, y, w, h] */

// 3b. Current Mailing Address of Attorney
    $w->add($petitionerAttorneyAddress, [20, 94, 180, 7]); /* html, [x, y, w, h] */
}

/* -------------------------------------------------------------------------------------------- */
/* SECTION 2 Participants Details */
/* PETITONER DETAILS */
// Petitioner Full Name
$petitionerNameFirst = strtoupper($master_entries[0][96]['first']);
$petitionerNameMiddle = strtoupper($master_entries[0][96]['middle']);
$petitionerNameLast = strtoupper($master_entries[0][96]['last']);
if ($petitionerNameMiddle == '') {
    $petitionerNameFull = $petitionerNameFirst . ' ' . $petitionerNameLast;
} else {
    $petitionerNameFull = $petitionerNameFirst . ' ' . $petitionerNameMiddle . ' ' . $petitionerNameLast;
}
$w->add($petitionerNameFull, [28, 106, 110, 7]); /* html, [x, y, w, h] */

// Petitioner Maiden Name
$petitionerNameMaiden = strtoupper($master_entries[0][7200]['last']);
$w->add($petitionerNameMaiden, [144, 106, 60, 7]); /* html, [x, y, w, h] */

// Petitioner Birth Place
$petitionerPlaceOfBirthCity = strtoupper($master_entries[0][7002]['city']);
$petitionerPlaceOfBirthState = strtoupper($master_entries[0][7002]['state']);
$petitionerPlaceOfBirthCountry = strtoupper($master_entries[0][7002]['country']);

if ($petitionerPlaceOfBirthCountry == 'UNITED STATES') {
    $petitionerPlaceOfBirth = strtoupper($master_entries[0][7002]['city'] . ', ' . $master_entries[0][7002]['state']);
} else {
    $petitionerPlaceOfBirth = strtoupper($master_entries[0][7002]['city'] . ', ' . $master_entries[0][7002]['country']);
}
$w->add($petitionerPlaceOfBirth, [28, 114, 85, 7]); /* html, [x, y, w, h] */

// Petitioner Race
$petitionerRace = $master_entries[0][7003];
$w->add($petitionerRace, [116, 114, 26, 7]); /* html, [x, y, w, h] */

// Petitioner Date of Birth
$petitionerDob = $master_entries[0][229];
$w->add($petitionerDob, [144, 114, 60, 7]); /* html, [x, y, w, h] */

// Petitioner Residential Address
$petitioner_address_residencial_street_1 = $master_entries[0][38]['street'];
$petitioner_address_residencial_street_2 = $master_entries[0][38]['street2'];
if ($petitioner_address_residencial_street_2 == '') {
    $petitionerAddressResidentialStreet = $petitioner_address_residencial_street_1;
} else {
    $petitionerAddressResidentialStreet = $petitioner_address_residencial_street_1 . ', ' . $petitioner_address_residencial_street_2;
}
$petitionerAddressResidentialCity = $master_entries[0][38]['city'];
$petitionerAddressResidentialState = $master_entries[0][38]['state'];
$petitionerAddressResidentialZip = $master_entries[0][38]['zip'];

$w->add($petitionerAddressResidentialStreet, [28, 122, 70, 7]); /* html, [x, y, w, h] */
$w->add($petitionerAddressResidentialCity, [100, 122, 20, 7]); /* html, [x, y, w, h] */
$w->add($petitionerAddressResidentialState, [125, 122, 20, 7]); /* html, [x, y, w, h] */
$w->add($petitionerAddressResidentialZip, [150, 122, 20, 7]); /* html, [x, y, w, h] */

/* RESPONDENT DETAILS */
// Respondent Full Name
$respondentNameFirst = strtoupper($master_entries[0][114]['first']);
$respondentNameMiddle = strtoupper($master_entries[0][114]['middle']);
$respondentNameLast = strtoupper($master_entries[0][114]['last']);
if ($respondentNameMiddle == '') {
    $respondentNameFull = $respondentNameFirst . ' ' . $respondentNameLast;
} else {
    $respondentNameFull = $respondentNameFirst . ' ' . $respondentNameMiddle . ' ' . $respondentNameLast;
}
$w->add($respondentNameFull, [28, 130, 115, 7]); /* html, [x, y, w, h] */

// Respondent Maiden Name
$respondentNameMaiden = strtoupper($master_entries[0][6200]['last']);
$w->add($respondentNameMaiden, [144, 130, 60, 7]); /* html, [x, y, w, h] */

// Respondent Birth Place
$respondentPlaceOfBirthCountry = strtoupper($master_entries[0][6002]['country']);
if ($respondentPlaceOfBirthCountry == 'UNITED STATES') {
    $respondentPlaceOfBirth = strtoupper($master_entries[0][6002]['city'] . ', ' . $master_entries[0][6002]['state']);
} else {
    $respondentPlaceOfBirth = strtoupper($master_entries[0][6002]['city'] . ', ' . $master_entries[0][6002]['country']);
}
$w->add($respondentPlaceOfBirth, [28, 138, 85, 7]); /* html, [x, y, w, h] */

// Respondent Race
$respondentRace = $master_entries[0][6003];
$w->add($respondentRace, [116, 138, 26, 7]); /* html, [x, y, w, h] */

// Respondent Date of Birth
$respondentDob = $master_entries[0][275];
$w->add($respondentDob, [144, 138, 60, 7]); /* html, [x, y, w, h] */

// Respondent Residence Address
$respondent_address_residencial_street_1 = $master_entries[0][125]['street'];
$respondent_address_residencial_street_2 = $master_entries[0][125]['street2'];
if ($respondent_address_residencial_street_2 == '') {
    $respondentAddressResidentialStreet = $respondent_address_residencial_street_1;
} else {
    $respondentAddressResidentialStreet = $respondent_address_residencial_street_1 . ', ' . $respondent_address_residencial_street_2;
}
$respondentAddressResidentialCity = $master_entries[0][125]['city'];
$respondentAddressResidentialState = $master_entries[0][125]['state'];
$respondentAddressResidentialZip = $master_entries[0][125]['zip'];

$w->add($respondentAddressResidentialStreet, [28, 146, 70, 7]); /* html, [x, y, w, h] */
$w->add($respondentAddressResidentialCity, [100, 146, 20, 7]); /* html, [x, y, w, h] */
$w->add($respondentAddressResidentialState, [125, 146, 20, 7]); /* html, [x, y, w, h] */
$w->add($respondentAddressResidentialZip, [150, 146, 20, 7]); /* html, [x, y, w, h] */

/* MARRIAGE DETAILS */

// Number of Minor Children
$count_children_entries = count($children_entries);
$w->add($count_children_entries, [22, 154, 20, 7]); /* html, [x, y, w, h] */

// Date of Marriage
$dateOfMarriage = $master_entries[0][20];
$w->add($dateOfMarriage, [58, 154, 40, 7]); /* html, [x, y, w, h] */

// Place of Marriage
$placeOfMarriageCountry = strtoupper($master_entries[0][5100]['country']);
if ($placeOfMarriageCountry == 'UNITED STATES') {
    $placeOfMarriage = strtoupper($master_entries[0][5100]['city'] . ', ' . $master_entries[0][5100]['state']);
} else {
    $placeOfMarriage = strtoupper($master_entries[0][5100]['city'] . ', ' . $master_entries[0][5100]['country']);
}
$w->add($placeOfMarriage, [102, 154, 100, 7]); /* html, [x, y, w, h] */

/* -------------------------------------------------------------------------------------------- */
/* SECTION 3  Children affected by this suit */

$children = array();

for ($i = 0; $i < $count_children_entries; $i++) {
    $children[$i]['first_name'] = $children_entries[$i][2]['first'];
    $children[$i]['middle_name'] = $children_entries[$i][2]['middle'];
    $children[$i]['last_name'] = $children_entries[$i][2]['last'];
    if ($children[$i]['middle_name'] != '') {
        $children[$i]['full_name'] = strtoupper($children[$i]['first_name'] . ' ' . $children[$i]['middle_name'] . ' ' . $children[$i]['last_name']);
    } else {
        $children[$i]['full_name'] = strtoupper($children[$i]['first_name'] . ' ' . $children[$i]['last_name']);
    }
    $children[$i]['gender'] = strtoupper($children_entries[$i][3]);
    $children[$i]['birth_date_raw'] = $children_entries[$i][4];
    $children_birth_date_string = strtotime($children[$i]['birth_date_raw']);
    $children[$i]['birth_date'] = strtoupper(date('F j, Y', $children_birth_date_string));
    $children[$i]['birth_city'] = $children_entries[$i][3001]['city'];
    $children[$i]['birth_state'] = $children_entries[$i][3001]['state'];
    $children[$i]['birth_country'] = $children_entries[$i][3001]['country'];
    if ($children[$i]['birth_country'] == 'United States') {
        $children[$i]['birth_place'] = strtoupper($children[$i]['birth_city'] . ', ' . $children[$i]['birth_state']);
    } else {
        $children[$i]['birth_place'] = strtoupper($children[$i]['birth_city'] . ', ' . $children[$i]['birth_country']);
    }
    $children[$i]['has_dl'] = $children_entries[$i]['6'];
    // echo '<pre>';
    // echo 'CHILDREN<br>';
    // print_r($children[$i]);
    // echo '<br></pre>';
}

// CHILD 1
if ($count_children_entries > 0) {
    $child1Name = $children[0]['full_name']; // Tell Us About Your Child(ren)
    $child1DoB = $children[0]['birth_date']; // Tell Us About Your Child(ren)
    $child1Gender = $children[0]['gender']; // Tell Us About Your Child(ren)
    $child1BirthPlace = $children[0]['birth_place'];

    // 19a. Child Current Name (First, Middle, Last, Suffix)
    $w->add($child1Name, [28, 167, 175, 7]); /* html, [x, y, w, h] */

    // 19b. Date of Birth (mm/dd/yyyy)
    $w->add($child1DoB, [28, 176, 40, 7]); /* html, [x, y, w, h] */

    // 19c. Gender
    $w->add($child1Gender, [72, 176, 20, 7]); /* html, [x, y, w, h] */

    // 19d. Birthplace (City, County and State)
    $w->add($child1BirthPlace, [95, 176, 110, 7]); /* html, [x, y, w, h] */
}
// 19e. Prior name of child (First, Middle, Last, Suffix) NOT NEEDED?

// CHILD 2
if ($count_children_entries > 1) {
    $child2Name = $children[1]['full_name']; // Tell Us About Your Child(ren)
    $child2DoB = $children[1]['birth_date']; // Tell Us About Your Child(ren)
    $child2Gender = $children[1]['gender']; // Tell Us About Your Child(ren)
    $child2BirthPlace = $children[1]['birth_place'];

    // 20a. Child Current Name (First, Middle, Last, Suffix)
    $w->add($child2Name, [28, 191, 175, 7]); /* html, [x, y, w, h] */
    // 20b. Date of Birth (mm/dd/yyyy)
    $w->add($child2DoB, [28, 200, 40, 7]); /* html, [x, y, w, h] */
    // 20c. Gender
    $w->add($child2Gender, [72, 200, 20, 7]); /* html, [x, y, w, h] */
    // 20d. Birthplace (City, County and State)
    $w->add($child2BirthPlace, [95, 200, 110, 7]); /* html, [x, y, w, h] */

    // 20e. Prior name of child (First, Middle, Last, Suffix)
}

// CHILD 3
if ($count_children_entries > 2) {
    $child3Name = $children[2]['full_name']; // Tell Us About Your Child(ren)
    $child3DoB = $children[2]['birth_date']; // Tell Us About Your Child(ren)
    $child3Gender = $children[2]['gender']; // Tell Us About Your Child(ren)
    $child3BirthPlace = $children[2]['birth_place'];

// 21a. Child Current Name (First, Middle, Last, Suffix)
    $w->add($child3Name, [28, 216, 175, 7]); /* html, [x, y, w, h] */

// 21b. Date of Birth (mm/dd/yyyy)
    $w->add($child3DoB, [28, 224, 40, 7]); /* html, [x, y, w, h] */

// 21c. Sex
    $w->add($child3Gender, [72, 224, 20, 7]); /* html, [x, y, w, h] */

// 21d. Birthplace (City, County and State)
    $w->add($child3BirthPlace, [95, 224, 110, 7]); /* html, [x, y, w, h] */

// 21e. Prior name of child (First, Middle, Last, Suffix)
}

/* -------------------------------------------------------------------------------------------- */
/* PAGE 2 */
$w->addPage(2);

// CHILD 4
if ($count_children_entries > 3) {
    $child4Name = $children[3]['full_name']; // Tell Us About Your Child(ren)
    $child4DoB = $children[3]['birth_date']; // Tell Us About Your Child(ren)
    $child4Gender = $children[3]['gender']; // Tell Us About Your Child(ren)
    $child4BirthPlace = $children[3]['birth_place'];

// 22a. Child Current Name (First, Middle, Last, Suffix)
    $w->add($child4Name, [28, 15, 175, 7]); /* html, [x, y, w, h] */

// 22b. Date of Birth (mm/dd/yyyy)
    $w->add($child4DoB, [28, 23, 40, 7]); /* html, [x, y, w, h] */

// 22c. Sex
    $w->add($child1Gender, [72, 23, 20, 7]); /* html, [x, y, w, h] */

// 22d. Birthplace (City, County and State)
    $w->add($child4BirthPlace, [95, 23, 110, 7]); /* html, [x, y, w, h] */

// 22e. Prior name of child (First, Middle, Last, Suffix)
}

// CHILD 5
if ($count_children_entries > 4) {
// Variables
    $child5Name = $children[4]['full_name']; // Tell Us About Your Child(ren)
    $child5DoB = $children[4]['birth_date']; // Tell Us About Your Child(ren)
    $child5Gender = $children[4]['gender']; // Tell Us About Your Child(ren)
    $child5BirthPlace = $children[4]['birth_place'];

// 23a. Child Current Name (First, Middle, Last, Suffix)
    $w->add($child5Name, [28, 39, 175, 7]); /* html, [x, y, w, h] */

// 23b. Date of Birth (mm/dd/yyyy)
    $w->add($child5DoB, [28, 47, 40, 7]); /* html, [x, y, w, h] */

// 23c. Sex
    $w->add($child5Gender, [72, 47, 20, 7]); /* html, [x, y, w, h] */

// 23d. Birthplace (City, County and State)
    $w->add($child5BirthPlace, [95, 47, 110, 7]); /* html, [x, y, w, h] */

// 23e. Prior name of child (First, Middle, Last, Suffix)

}

// CHILD 6
if ($count_children_entries > 5) {
    // Variables
    $child5Name = $children[5]['full_name']; // Tell Us About Your Child(ren)
    $child5DoB = $children[5]['birth_date']; // Tell Us About Your Child(ren)
    $child5Gender = $children[5]['gender']; // Tell Us About Your Child(ren)
    $child5BirthPlace = $children[5]['birth_place'];

// 25a. Child Current Name (First, Middle, Last, Suffix)
    $w->add($child6Name, [28, 64, 175, 7]); /* html, [x, y, w, h] */

// 25b. Date of Birth (mm/dd/yyyy)
    $w->add($child6DoB, [28, 72, 40, 7]); /* html, [x, y, w, h] */

// 25c. Sex
    $w->add($child6Sex, [72, 72, 20, 7]); /* html, [x, y, w, h] */

// 25d. Birthplace (City, County and State)
    $w->add($child6BirthPlace, [95, 72, 110, 7]); /* html, [x, y, w, h] */

// 25e. Prior name of child (First, Middle, Last, Suffix)

}