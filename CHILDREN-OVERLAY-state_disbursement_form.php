<?php

/*
 * Template Name: Child State Disbursement Form Overlay
 * Version: 1.0
 * Description: Overlaying the Child State Disbursement Form for Divorce Concierge
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
// $client_user_id = $form_data['misc']['created_by'];
$selectOption = 'X';
$leaveBlank = '&nbsp;';

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
$master_entries[0][295]['zip'] = '75093'; // Petitioner employeraddress
$master_entries[0][X] = '11-1111111'; // Petitioner employer FEIN

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
$master_entries[0][301]['street'] = '123 Respondent Employer Str'; // Respondent employer
$master_entries[0][301]['street2'] = 'STE 123'; // Respondent employer
$master_entries[0][301]['city'] = 'Prosper'; // Respondent employer
$master_entries[0][301]['state'] = 'Texas'; // Respondent employer
$master_entries[0][301]['zip'] = '75078'; // Respondent employer
$master_entries[0][x] = '22-2222222'; // Employer FEIN

// CHILDREN (Tell Us About Your Child(ren))
$master_entries[0][259] = ''; // Child Reater entry ids comma separated

// TEST DATE FROM CHILDREN REPEATERS
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
$children_entries[3][4] = '04/04/20010'; // DOB
$children_entries[3][19] = '12'; // Age
$children_entries[3][6] = 'No'; // Drivers License?
$children_entries[3][23] = ''; // Drivers license number
$children_entries[3][8] = ''; // Drivers license State

/* --------------------------------------------------------------------------------------------------------------- */
/* Variables used throughout */

// Petitioner Full Name
$petitionerNameFirst = $master_entries[0][96]['first'];
$petitionerNameMiddle = $master_entries[0][96]['middle'];
$petitionerNameLast = $master_entries[0][96]['last'];
if ($petitionerNameMiddle == '') {
    $petitionerNameFull = strtoupper($petitionerNameFirst . ' ' . $petitionerNameLast);
} else {
    $petitionerNameFull = strtoupper($petitionerNameFirst . ' ' . $petitionerNameMiddle . ' ' . $petitionerNameLast);
}

// Petitioner DOB
$petitionerDOB = $master_entries[0][229];
// Petitioner SSN Full
$petitionerSSN = $master_entries[0][13];
// Petitioner Mailing Address Street
$petitioner_mailing_address_street_1 = $master_entries[0][106]['street'];
$petitioner_mailing_address_street_2 = $master_entries[0][106]['street2'];
if ($petitioner_mailing_address_street_2 == '') {
    $petitionerMailingAddressStreet = $petitioner_mailing_address_street_1;
} else {
    $petitionerMailingAddressStreet = $petitioner_mailing_address_street_1 . ', ' . $petitioner_mailing_address_street_2;
}

// Petitioner Mailing Address City
$petitionerMailingAddressCity = $master_entries[0][106]['city'];
// Petitioner Mailing Address State
$petitionerMailingAddressState = $master_entries[0][106]['state'];
// Petitioner Mailing Address ZIP
$petitionerMailingAddressZip = $master_entries[0][106]['zip'];
// Petitioner Gender
$petitionerGender = $master_entries[0][97];
// Petitioner Drivers License Number Full
$petitionerDriversLicenseNumber = $master_entries[0][14];
// Petitioner Phone Home
$petitionerPhoneHome = $master_entries[0][7001];
// Petitioner Phone Work
$petitionerPhoneWork = $master_entries[0][100];
// Petitioner Phone Cell
$petitionerPhoneCell = $master_entries[0][39];
// Petitioner Employer Name
$petitionerEmployerName = $master_entries[0][231];
// Petitioner Employer Address Street
$petitioner_employer_address_street_1 = $master_entries[0][295]['street'];
$petitioner_employer_address_street_2 = $master_entries[0][295]['street2'];
if ($petitioner_employer_address_street_2 == '') {
    $petitionerEmployerAddressStreet = $petitioner_employer_address_street_1;
} else {
    $petitionerEmployerAddressStreet = $petitioner_employer_address_street_1 . ', ' . $petitioner_employer_address_street_2;
}
// Petitioner Employer Address City
$petitionerEmployerAddressCity = $master_entries[0][295]['city'];
// Petitioner Employer Address State
$petitionerEmployerAddressState = $master_entries[0][295]['state'];
// Petitioner Employer Address ZIP
$petitionerEmployerAddressZip = $master_entries[0][295]['zip'];

// RESPONDENT DETAILS
// Respondent Full Name
$respondentNameFirst = $master_entries[0][114]['first'];
$respondentNameMiddle = $master_entries[0][114]['middle'];
$respondentNameLast = $master_entries[0][114]['last'];
if ($respondentNameMiddle == '') {
    $respondentNameFull = strtoupper($respondentNameFirst . ' ' . $respondentNameLast);
} else {
    $respondentNameFull = strtoupper($respondentNameFirst . ' ' . $respondentNameMiddle . ' ' . $respondentNameLast);
}

// Respondent DOB
$respondentDOB = $master_entries[0][275];
// Respondent SSN Full
$respondentSSN = $master_entries[0][119];
// Respondent Mailing Address Street
$respondent_mailing_address_street_1 = $master_entries[0][72]['street'];
$respondent_mailing_address_street_2 = $master_entries[0][72]['street2'];
if ($respondent_mailing_address_street_2 == '') {
    $respondentMailingAddressStreet = $respondent_mailing_address_street_1;
} else {
    $respondentMailingAddressStreet = $respondent_mailing_address_street_1 . ', ' . $respondent_mailing_address_street_2;
}
// Respondent Mailing Address City
$respondentMailingAddressCity = $master_entries[0][72]['city'];
// Respondent Mailing Address State
$respondentMailingAddressState = $master_entries[0][72]['state'];
// Respondent Mailing Address ZIP
$respondentMailingAddressZip = $master_entries[0][72]['zip'];
// Respondent Gender
$respondentGender = $master_entries[0]['115'];
// Respondent Drivers License Number Full
$respondentDriversLicenseNumber = $master_entries[0]['120'];
// Respondent Phone Home
$respondentPhoneHome = $master_entries[0]['117'];
// Respondent Phone Work
$respondentPhoneWork = $master_entries[0]['118'];
// Respondent Phone Cell
$respondentPhoneCell = $master_entries[0]['73'];
// Respondent Employer Name
$respondentEmployerName = $master_entries[0]['282'];
// Respondent Employer Address Street
$respondent_employer_address_street_1 = $master_entries[0][301]['street'];
$respondent_employer_address_street_2 = $master_entries[0][301]['street2'];
if ($respondent_employer_address_street_2 == '') {
    $respondentEmployerAddressStreet = $respondent_employer_address_street_1;
} else {
    $respondentEmployerAddressStreet = $respondent_employer_address_street_1 . ', ' . $respondent_employer_address_street_2;
}

// Respondent Employer Address City
$respondentEmployerAddressCity = $master_entries[0][301]['city'];
// Respondent Employer Address State
$respondentEmployerAddressState = $master_entries[0][301]['state'];
// Respondent Employer Address ZIP
$respondentEmployerAddressZip = $master_entries[0][301]['zip'];

/* --------------------------------------------------------------------------------------------------------------- */
/* TESTING */

// $w->add('PETITIONER Mailing Address Street 1: ' . $petitioner_mailing_address_street_1, [10, 10, 100, 7]); /* html, [x, y, w, h] */

/* --------------------------------------------------------------------------------------------------------------- */
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

/* --------------------------------------------------------------------------------------------------------------- */
/*
 * Begin PDF Generation
 *
 * The API documentation can be found at https://gravitypdf.com/developer-toolkit-api-documentation/
 */
$w->addPdf(__DIR__ . '/pdfs/State-Disbursement-Form.pdf'); /* CHANGE THIS TO POINT TO YOUR PDF */

/* PAGE 1
 ********* */
$w->addPage(1);

/* --------------------------------------------------------------------------------------------------------------- */
/* SECTION: Order Information */
/* Variables */

$jurisCounty = $master_entries[0][6];
$jurisCourtNumber = $master_entries[0][5];
$jurisCauseNumber = $master_entries[0][7];
$jurisSduDateOfHearing = $master_entries[0][8001];
$jurisSduOrderSignDate = $master_entries[0][8002];

//County Name:
$w->add($jurisCounty . ' County', [13, 83.5, 60, 7]); /* html, [x, y, w, h] */

//Court Number:
$w->add($jurisCourtNumber, [77, 83.5, 60, 7]); /* html, [x, y, w, h] */

//Cause Number:
$w->add($jurisCauseNumber, [152, 83.5, 50, 7]); /* html, [x, y, w, h] */

//Attorney General Case Number:
// $w->add($attorneyGenCaseNo, [12.5, 92, 55, 7]); /* html, [x, y, w, h] NEVEN ENTERED */

//Date of Hearing:
$w->add($jurisSduDateOfHearing, [78, 93.5, 60, 7]); /* html, [x, y, w, h] */

//Order Sign Date:
$w->add($jurisSduOrderSignDate, [142, 93.5, 60, 7]); /* html, [x, y, w, h] */

//ORDER TYPE:

//Order Type: ALWAYS New Order
$w->add($selectOption, [78, 99, 3, 7]); /* html, [x, y, w, h] */
//Probably always New Order
//Order Type: Modified Order
//$w->add($selectOption, [143, 99, 40, 7]); /* html, [x, y, w, h] */

//PAYMENT LOCATION:
//Payment Location: SDU Always
$w->add($selectOption, [62, 105, 3, 7]); /* html, [x, y, w, h] */

/* --------------------------------------------------------------------------------------------------------------- */
/* SECTION: Obligee/Custodial Parent Information */
/* Variables */

// Determine Obligee/Custodial Parent for Child Support
$custodialParentName = $petitionerNameFull; // Possibly needs new form or can be gathered from possesion schedule section of Tell

//$familyViolenceProtection = ''; // Right For You: Will need conditional logic to determine whether it appear or not
// echo $custodialParentName;
if ($custodialParentName == $petitionerNameFull) {
    $custodialParentDoB = $petitionerDOB;
    $custodialParentSSN = $petitionerSSN;
    $custodialParentMailingAddressStreet = $petitionerMailingAddressStreet; // Tell Us About *Relevant Party* MAILING ADDRESS
    $custodialParentMailingAddressCity = $petitionerMailingAddressCity; // Tell Us About *Relevant Party* MAILING ADDRESS
    $custodialParentMailingAddressState = $petitionerMailingAddressState; // Tell Us About *Relevant Party* MAILING ADDRESS
    $custodialParentMailingAddressZIP = $petitionerMailingAddressZip; // Tell Us About *Relevant Party* MAILING ADDRESS
    //$custodialParentSex = ; // Tell Us About *Relevant Party* but will be manually set to both for now
    $custodialParentDriversLicence = $petitionerDriversLicenseNumber; // Tell Us About *Relevant Party*
    $custodialParentHomePhone = $petitionerPhoneHome; // Tell Us About *Relevant Party*
    $custodialParentWorkPhone = $petitionerPhoneWork; // Tell Us About *Relevant Party*
    $custodialParentCellPhone = $petitionerPhoneCell; // Tell Us About *Relevant Party*
    $custodialParentRelationshipToChildren = 'Parent'; // Tell Us About Children in a possession schedule OR determined by party's sex
    $custodialParentEmployerName = $petitionerEmployerName; // Tell Us About *Relevant Party*
    $custodialParentEmployerAddress = $petitionerEmployerAddressStreet; // Tell Us About *Relevant Party*
    $custodialParentEmployerCity = $petitionerEmployerAddressCity; // Tell Us About *Relevant Party*
    $custodialParentEmployerState = $petitionerEmployerAddressState; // Tell Us About *Relevant Party*
    $custodialParentEmployerZip = $petitionerEmployerAddressZip; // Tell Us About *Relevant Party*
    $custodialParentGender = $petitionerGender;

} else {
    $custodialParentDoB = $respondentDOB; // Tell Us About *Relevant Party*
    $custodialParentSSN = $respondentSSN; // Tell Us About *Relevant Party*
    $custodialParentMailingAddressStreet = $respondentMailingAddressStreet; // Tell Us About *Relevant Party* MAILING ADDRESS
    $custodialParentMailingAddressCity = $respondentMailingAddressCity; // Tell Us About *Relevant Party* MAILING ADDRESS
    $custodialParentMailingAddressState = $respondentMailingAddressState; // Tell Us About *Relevant Party* MAILING ADDRESS
    $custodialParentMailingAddressZIP = $respondentMailingAddressZip; // Tell Us About *Relevant Party* MAILING ADDRESS
    //$custodialParentSex = ; // Tell Us About *Relevant Party* but will be manually set to both for now
    $custodialParentDriversLicence = $respondentDriversLicenseNumber; // Tell Us About *Relevant Party*
    $custodialParentHomePhone = $respondentPhoneHome; // Tell Us About *Relevant Party*
    $custodialParentWorkPhone = $respondentPhoneWork; // Tell Us About *Relevant Party*
    $custodialParentCellPhone = $respondentPhoneCell; // Tell Us About *Relevant Party*
    $custodialParentRelationshipToChildren = 'Parent'; // Tell Us About Children in a possession schedule OR determined by party's sex
    $custodialParentEmployerName = $respondentEmployerName; // Tell Us About *Relevant Party*
    $custodialParentEmployerAddress = $respondentEmployerAddressStreet; // Tell Us About *Relevant Party*
    $custodialParentEmployerCity = $respondentEmployerAddressCity; // Tell Us About *Relevant Party*
    $custodialParentEmployerState = $respondentEmployerAddressState; // Tell Us About *Relevant Party*
    $custodialParentEmployerZip = $respondentEmployerAddressZip; // Tell Us About *Relevant Party*
    $custodialParentGender = $respondentGender;
}

/* Output */

//Family Violence Protection (Check if individual below is a victim of family violence):
// $w->add('X', [13.5, 114.5, 40, 7]); /* html, [x, y, w, h] */

//Name:
$w->add($custodialParentName, [13, 125, 60, 7]); /* html, [x, y, w, h] */

//Date of Birth:
$w->add($custodialParentDoB, [78, 125, 60, 7]); /* html, [x, y, w, h] */

//Social Security Number:
$w->add($custodialParentSSN, [142, 125, 60, 7]); /* html, [x, y, w, h] */

//Address:
$w->add($custodialParentMailingAddressStreet, [13, 134, 60, 7]); /* html, [x, y, w, h] */

//City:
$w->add($custodialParentMailingAddressCity, [78, 134, 55, 7]); /* html, [x, y, w, h] */

//State:
$w->add($custodialParentMailingAddressState, [138.5, 134, 17, 7]); /* html, [x, y, w, h] */

//Zip:
$w->add($custodialParentMailingAddressZIP, [158, 134, 40, 7]); /* html, [x, y, w, h] */

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

/* --------------------------------------------------------------------------------------------------------------- */
/* SECTION: Obligor/Non-Custodial Parent Information */
/* Variables */

//$familyViolenceProtection = ''; // Right For You: Will need conditional logic to determine whether it appear or not
if ($custodialParentName == $petitionerNameFull) {
    $nonCustodialParentName = $respondentNameFull;
    $nonCustodialParentDoB = $respondentDOB; // Tell Us About *Relevant Party*
    $nonCustodialParentSSN = $respondentSSN; // Tell Us About *Relevant Party*
    $nonCustodialParentAddress = $respondentMailingAddressStreet; // Tell Us About *Relevant Party* MAILING ADDRESS
    $nonCustodialParentCity = $respondentMailingAddressCity; // Tell Us About *Relevant Party* MAILING ADDRESS
    $nonCustodialParentState = $respondentMailingAddressState; // Tell Us About *Relevant Party* MAILING ADDRESS
    $nonCustodialParentZIP = $respondentMailingAddressZip; // Tell Us About *Relevant Party* MAILING ADDRESS
    //$nonCustodialParentSex = ; // Tell Us About *Relevant Party* but will be manually set to both for now
    $nonCustodialParentDriversLicence = $respondentDriversLicenseNumber; // Tell Us About *Relevant Party*
    $nonCustodialParentHomePhone = $respondentPhoneHome; // Tell Us About *Relevant Party*
    $nonCustodialParentWorkPhone = $respondentPhoneWork; // Tell Us About *Relevant Party*
    $nonCustodialParentCellPhone = $respondentPhoneCell; // Tell Us About *Relevant Party*
    $nonCustodialParentRelationshipToChildren = 'Parent'; // Tell Us About Children in a possession schedule OR determined by party's sex
    $nonCustodialParentEmployerName = $respondentEmployerName; // Tell Us About *Relevant Party*
    $nonCustodialParentEmployerAddress = $respondentEmployerAddressStreet; // Tell Us About *Relevant Party*
    $nonCustodialParentEmployerCity = $respondentEmployerAddressCity; // Tell Us About *Relevant Party*
    $nonCustodialParentEmployerState = $respondentEmployerAddressState; // Tell Us About *Relevant Party*
    $nonCustodialParentEmployerZip = $respondentEmployerAddressZip; // Tell Us About *Relevant Party*
    $nonCustodialParentGender = $respondentGender;

} else {
    $nonCustodialParentName = $petitionerNameFull;
    $nonCustodialParentDoB = $petitionerDOB; // Tell Us About *Relevant Party*
    $nonCustodialParentSSN = $petitionerSSN; // Tell Us About *Relevant Party*
    $nonCustodialParentAddress = $petitionerMailingAddressStreet; // Tell Us About *Relevant Party* MAILING ADDRESS
    $nonCustodialParentCity = $petitionerMailingAddressCity; // Tell Us About *Relevant Party* MAILING ADDRESS
    $nonCustodialParentState = $petitionerMailingAddressState; // Tell Us About *Relevant Party* MAILING ADDRESS
    $nonCustodialParentZIP = $petitionerMailingAddressZip; // Tell Us About *Relevant Party* MAILING ADDRESS
    //$nonCustodialParentSex = ; // Tell Us About *Relevant Party* but will be manually set to both for now
    $nonCustodialParentDriversLicence = $petitionerDriversLicenseNumber; // Tell Us About *Relevant Party*
    $nonCustodialParentHomePhone = $petitionerPhoneHome; // Tell Us About *Relevant Party*
    $nonCustodialParentWorkPhone = $petitionerPhoneWork; // Tell Us About *Relevant Party*
    $nonCustodialParentCellPhone = $petitionerPhoneCell; // Tell Us About *Relevant Party*
    $nonCustodialParentRelationshipToChildren = 'Parent'; // Tell Us About Children in a possession schedule OR determined by party's sex
    $nonCustodialParentEmployerName = $petitionerEmployerName; // Tell Us About *Relevant Party*
    $nonCustodialParentEmployerAddress = $petitionerEmployerAddressStreet; // Tell Us About *Relevant Party*
    $nonCustodialParentEmployerCity = $petitionerEmployerAddressCity; // Tell Us About *Relevant Party*
    $nonCustodialParentEmployerState = $petitionerEmployerAddressState; // Tell Us About *Relevant Party*
    $nonCustodialParentEmployerZip = $petitionerEmployerAddressZip; // Tell Us About *Relevant Party*
    $nonCustodialParentGender = $petitionerGender;
}

//Name:
$w->add($nonCustodialParentName, [13, 194.5, 60, 7]); /* html, [x, y, w, h] */

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

/* --------------------------------------------------------------------------------------------------------------- */
/* PAGE 2 */
$w->addPage(2);

/* --------------------------------------------------------------------------------------------------------------- */
/* SECTION: Dependent Information */
/* Variables */
// CHILDREN OF THE MARRIAGE

// $repeater_children_form_id = 14;
// $repeater_children_search_criteria['field_filters'][] = array('key' => 'created_by', 'value' => $client_user_id);
// $repeater_children_search_criteria['status'] = 'active';
// $repeater_children_sorting = array('key' => 'id', 'direction' => 'ASC', 'is_numeric' => true);
// $children_entries = GFAPI::get_entries($repeater_children_form_id, $repeater_children_search_criteria);

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

$count_children_entries = count($children_entries);
$children = array();

for ($i = 0; $i < $count_children_entries; $i++) {
    $children[$i]['first_name'] = $children_entries[$i][2]['first'];
    $children[$i]['middle_name'] = $children_entries[$i][2]['middle'];
    $children[$i]['last_name'] = $children_entries[$i][2]['last'];
    if ($children[$i]['middle_name'] != '') {
        $children[$i]['full_name'] = $children[$i]['first_name'] . ' ' . $children[$i]['middle_name'] . ' ' . $children[$i]['last_name'];
    } else {
        $children[$i]['full_name'] = $children[$i]['first_name'] . ' ' . $children[$i]['last_name'];
    }
    $children[$i]['gender'] = $children_entries[$i][3];
    $children[$i]['birth_date_raw'] = $children_entries[$i][4];
    $children_birth_date_string = strtotime($children[$i]['birth_date_raw']);
    $children[$i]['birth_date'] = date('d/m/Y', $children_birth_date_string);
    $children[$i]['ssn'] = $children_entries[$i][22];
    $children[$i]['has_dl'] = $children_entries[$i][6];
    // echo '<pre>';
    // echo 'CHILDREN<br>';
    // print_r($children[$i]);
    // echo '<br></pre>';
}

// DEPENDENT 1

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

//DEPENDENT 2 ****/

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

//DEPENDENT 3

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

//DEPENDENT 4

if ($count_children_entries > 3) {
    //Name:
    $w->add($children[3]['full_name'], [13, 98, 60, 7]); /* html, [x, y, w, h] */

    //SEX
    if ($children[3]['gender'] == 'Male') {
        // If Male
        $w->add($selectOption, [79, 97, 3, 7]); /* html, [x, y, w, h] */
    } else {
        // If Female
        $w->add($selectOption, [99, 97, 3, 7]); /* html, [x, y, w, h] */
    }

    //Date of Birth:
    $w->add($children[3]['birth_date'], [124.5, 98, 30, 7]); /* html, [x, y, w, h] */

    //Social Security Number:
    $w->add($children[3]['ssn'], [158, 98, 40, 7]); /* html, [x, y, w, h] */
}

/* --------------------------------------------------------------------------------------------------------------- */
/* SECTION: Attorney Information */
/* Variables */

$dc_attorney_name = 'Sharon M. Ramage'; // Dependent Repeater, Will be Sharon M Ramage if DBU
$dc_attorney_phone = '972-562-9890'; // Dependent Repeater
$respondent_attorney_name = 'Ashleigh A. Attorney'; //  Dependent Repeater, Will be Sharon M Ramage if DBU
$respondent_attorney_phone = '888-888-8881'; // Dependent Repeater

if ($custodialParentName == $petitionerNameFull) {
    $obligeeAttorneyName = $dc_attorney_name;
    $obligeeAttorneyPhone = $dc_attorney_phone;
    $obligerAttorneyName = $leaveBlank;
    $obligerAttorneyPhone = $leaveBlank;

} else {
    $obligeeAttorneyName = $leaveBlank;
    $obligeeAttorneyPhone = $leaveBlank;
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

/* --------------------------------------------------------------------------------------------------------------- */
/* SECTION: Prepared By */
/* Variables: NONE (Leave Section Blank) */