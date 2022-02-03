<?php

/*
 * Template Name: Record of Support Overlay
 * Version: 1.0
 * Description: Overlaying the record of support document
 * Author:
 * Author URI:
 * Group: Custom
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
$selectOption = '&#9679;'; // is a black circle

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
$w->addPdf(__DIR__ . '/pdfs/State-Disbursement-Unit-Form.pdf'); /* CHANGE THIS TO POINT TO YOUR PDF */

/* PAGE 1
 ************ */
$w->addPage(1);

/* SECTION 1  Order Information
------------------------------------------------------------------------------*/
// Variables for Section 1
$county = 'Collin County'; // Right For You
$courtNo = '123'; // Jurisdiction
$causeNo = '654321'; // Jurisdiction
$attorneyGenCaseNo = '987'; //Jurisdiction
$dateOfHearing = '02/02/2022'; // Jurisdiction or Today
$dateOfOrderSign = '02/02/2022'; // Jurisdiction or Today
//$orderType = ''; Can't be received from other form but for now both options will be manually put in to see where they go.
//$paymentLocation = ''; Again, can't be received from other form but for now will put both choices in to see where they go.

//County Name:
$w->add($county, [40, 80, 30, 7]); /* html, [x, y, w, h] */

//Court Number:
$w->add($courtNo, [105, 80, 50, 7]); /* html, [x, y, w, h] */

//Cause Number:
$w->add($causeNo, [178, 80, 30, 7]); /* html, [x, y, w, h] */

//Attorney General Case Number:
$w->add($attorneyGenCaseNo, [12.5, 92, 55, 7]); /* html, [x, y, w, h] */

//Date of Hearing:
$w->add($dateOfHearing, [106.5, 89, 30, 7]); /* html, [x, y, w, h] */

//Order Sign Date:
$w->add($dateOfOrderSign, [172, 89, 40, 7]); /* html, [x, y, w, h] */

//ORDER TYPE:

//Order Type: New Order
$w->add($selectOption, [78.5, 98.5, 40, 7]); /* html, [x, y, w, h] */
//Order Type: Modified Order
$w->add($selectOption, [143, 99, 40, 7]); /* html, [x, y, w, h] */

//PAYMENT LOCATION:

//Payment Location: SDU
$w->add($selectOption, [62.5, 104.5, 40, 7]); /* html, [x, y, w, h] */
//Payment Location: County
$w->add($selectOption, [111.5, 104.5, 40, 7]); /* html, [x, y, w, h] */
//Payment Location: Other
$w->add($selectOption, [160, 104.5, 40, 7]); /* html, [x, y, w, h] */

/* SECTION 2  Obligee/Custodial Parent Information
------------------------------------------------------------------------------*/
// Variables for Section 2
//$familyViolenceProtection = ''; // Right For You: Will need conditional logic to determine whether it appear or not
$custodialParentName = 'Jim Jimothy Jones'; // Possibly needs new form or can be gathered from possesion schedule section of Tell Us About Your Children
$custodialParentDoB = '11/06/1980'; // Tell Us About *Relevant Party*
$custodialParentSSN = '123456'; // Tell Us About *Relevant Party*
$custodialParentAddress = '9 Pentonville Road'; // Tell Us About *Relevant Party*
$custodialParentCity = 'London'; // Tell Us About *Relevant Party*
$custodialParentState = 'Texas'; // Tell Us About *Relevant Party*
$custodialParentZIP = 'BT19 7NH'; // Tell Us About *Relevant Party*
//$custodialParentSex = ; // Tell Us About *Relevant Party* but will be manually set to both for now
$custodialParentDriversLicence = '45649161'; // Tell Us About *Relevant Party*
$custodialParentHomePhone = '01724555666'; // Tell Us About *Relevant Party*
$custodialParentWorkPhone = '01724555666'; // Tell Us About *Relevant Party*
$custodialParentCellPhone = '01724555666'; // Tell Us About *Relevant Party*
$custodialParentRelationshipToChildren = 'Father'; // Tell Us About Children in a possession schedule OR determined by party's sex
$custodialParentEmployerName = 'Bliksem LLC'; // Tell Us About *Relevant Party*
$custodialParentEmployerAddress = '123 Salt Lake Road'; // Tell Us About *Relevant Party*
$custodialParentEmployerCity = 'Salt Lake City'; // Tell Us About *Relevant Party*
$custodialParentEmployerState = 'Utah'; // Tell Us About *Relevant Party*
$custodialParentEmployerZip = 'UT19 B67'; // Tell Us About *Relevant Party*

//Family Violence Protection (Check if individual below is a victim of family violence):
$w->add('X', [13.5, 114.5, 40, 7]); /* html, [x, y, w, h] */

//Name:
$w->add($custodialParentName, [25, 122, 50, 7]); /* html, [x, y, w, h] */

//Date of Birth:
$w->add($custodialParentDoB, [102, 122, 40, 7]); /* html, [x, y, w, h] */

//Social Security Number:
$w->add($custodialParentSSN, [142.5, 124, 60, 7]); /* html, [x, y, w, h] */

//Address:
$w->add($custodialParentAddress, [29, 130, 45, 7]); /* html, [x, y, w, h] */

//City:
$w->add($custodialParentCity, [87, 130, 40, 7]); /* html, [x, y, w, h] */

//State:
$w->add($custodialParentState, [138.5, 133.5, 20, 7]); /* html, [x, y, w, h] */

//Zip:
$w->add($custodialParentZIP, [167, 130, 40, 7]); /* html, [x, y, w, h] */

//SEX

//Sex: Male
$w->add($selectOption, [46, 141.5, 100, 7]); /* html, [x, y, w, h] */
//Sex: Female
$w->add($selectOption, [79, 141.5, 100, 7]); /* html, [x, y, w, h] */

//Drivers License Number:
$w->add($custodialParentDriversLicence, [155, 140.5, 50, 7]); /* html, [x, y, w, h] */

//Home Phone:
$w->add($custodialParentHomePhone, [12.5, 153, 30, 7]); /* html, [x, y, w, h] */

//Work Phone:
$w->add($custodialParentWorkPhone, [49, 153, 30, 7]); /* html, [x, y, w, h] */

//Cell Phone:
$w->add($custodialParentCellPhone, [84, 153, 30, 7]); /* html, [x, y, w, h] */

//Relationship to Child(ren):
$w->add($custodialParentRelationshipToChildren, [163, 150.5, 35, 7]); /* html, [x, y, w, h] */

//Employer Name:
$w->add($custodialParentEmployerName, [43, 160, 150, 7]); /* html, [x, y, w, h] */

// Address:
$w->add($custodialParentEmployerAddress, [28, 170, 45, 7]); /* html, [x, y, w, h] */

//City:
$w->add($custodialParentEmployerCity, [87, 170, 40, 7]); /* html, [x, y, w, h] */

//State:
$w->add($custodialParentEmployerState, [138.5, 173, 20, 7]); /* html, [x, y, w, h] */

//Zip:
$w->add($custodialParentEmployerZip, [167, 170, 40, 7]); /* html, [x, y, w, h] */

/* SECTION 3  Obligee/Custodial Parent Information
------------------------------------------------------------------------------*/
// Variables for Section 3
//$familyViolenceProtection = ''; // Right For You: Will need conditional logic to determine whether it appear or not
$nonCustodialParentName = 'Jim Jimothy Jones'; // Possibly needs new form or can be gathered from possesion schedule section of Tell Us About Your Children
$nonCustodialParentDoB = '11/06/1980'; // Tell Us About *Relevant Party*
$nonCustodialParentSSN = '123456'; // Tell Us About *Relevant Party*
$nonCustodialParentAddress = '9 Pentonville Road'; // Tell Us About *Relevant Party*
$nonCustodialParentCity = 'London'; // Tell Us About *Relevant Party*
$nonCustodialParentState = 'Texas'; // Tell Us About *Relevant Party*
$nonCustodialParentZIP = 'BT19 7NH'; // Tell Us About *Relevant Party*
//$nonCustodialParentSex = ; // Tell Us About *Relevant Party* but will be manually set to both for now
$nonCustodialParentDriversLicence = '45649161'; // Tell Us About *Relevant Party*
$nonCustodialParentHomePhone = '01724555666'; // Tell Us About *Relevant Party*
$nonCustodialParentWorkPhone = '01724555666'; // Tell Us About *Relevant Party*
$nonCustodialParentCellPhone = '01724555666'; // Tell Us About *Relevant Party*
$nonCustodialParentRelationshipToChildren = 'Father'; // Tell Us About Children in a possession schedule OR determined by party's sex
$nonCustodialParentEmployerName = 'Bliksem LLC'; // Tell Us About *Relevant Party*
$nonCustodialParentEmployerAddress = '123 Salt Lake Road'; // Tell Us About *Relevant Party*
$nonCustodialParentEmployerCity = 'Salt Lake City'; // Tell Us About *Relevant Party*
$nonCustodialParentEmployerState = 'Utah'; // Tell Us About *Relevant Party*
$nonCustodialParentEmployerZip = 'UT19 B67'; // Tell Us About *Relevant Party*

//Family Violence Protection (Check if individual below is a victim of family violence):
$w->add('X', [13.5, 185, 40, 7]); /* html, [x, y, w, h] */

//Name:
$w->add($nonCustodialParentName, [25, 190, 50, 7]); /* html, [x, y, w, h] */

//Date of Birth:
$w->add($nonCustodialParentDoB, [102, 190, 40, 7]); /* html, [x, y, w, h] */

//Social Security Number:
$w->add($nonCustodialParentSSN, [142.5, 193, 60, 7]); /* html, [x, y, w, h] */

//Address:
$w->add($nonCustodialParentAddress, [29, 200, 45, 7]); /* html, [x, y, w, h] */

//City:
$w->add($nonCustodialParentCity, [87, 200, 40, 7]); /* html, [x, y, w, h] */

//State:
$w->add($nonCustodialParentState, [138.5, 203.5, 20, 7]); /* html, [x, y, w, h] */

//Zip:
$w->add($nonCustodialParentZIP, [167, 200, 40, 7]); /* html, [x, y, w, h] */

//SEX

//Sex: Male
$w->add($selectOption, [46, 211, 100, 7]); /* html, [x, y, w, h] */
//Sex: Female
$w->add($selectOption, [79, 211, 100, 7]); /* html, [x, y, w, h] */

//Drivers License Number:
$w->add($nonCustodialParentDriversLicence, [155, 212, 50, 7]); /* html, [x, y, w, h] */

//Home Phone:
$w->add($nonCustodialParentHomePhone, [12.5, 223, 30, 7]); /* html, [x, y, w, h] */

//Work Phone:
$w->add($nonCustodialParentWorkPhone, [49, 223, 30, 7]); /* html, [x, y, w, h] */

//Cell Phone:
$w->add($nonCustodialParentCellPhone, [84, 223, 30, 7]); /* html, [x, y, w, h] */

//Relationship to Child(ren):
$w->add($nonCustodialParentRelationshipToChildren, [163, 220, 35, 7]); /* html, [x, y, w, h] */

//Employer Name:
$w->add($nonCustodialParentEmployerName, [43, 229, 150, 7]); /* html, [x, y, w, h] */

// Address:
$w->add($nonCustodialParentEmployerAddress, [28, 240, 45, 7]); /* html, [x, y, w, h] */

//City:
$w->add($nonCustodialParentEmployerCity, [87, 240, 100, 7]); /* html, [x, y, w, h] */

//State:
$w->add($nonCustodialParentEmployerState, [138.5, 243.5, 40, 7]); /* html, [x, y, w, h] */

//Zip:
$w->add($nonCustodialParentEmployerZip, [167, 240, 20, 7]); /* html, [x, y, w, h] */

/* PAGE 2
 ************ */
$w->addPage(2);

/* SECTION 4  Dependent Information
------------------------------------------------------------------------------*/
// Variables for Section 3

//NOTE: There will be a get entries part of code like what is usually used to get children from repeaters but for now i will manually place data

$dependentName = 'Jim Jimothy Jones'; // Dependent Repeater
$dependentDateofBirth = '02/04/2003'; // Dependent Repeater
$dependentSSN = '123456789'; // Dependent Repeater

//DEPENDENT 1
//Family Violence Protection (Check if individual below is a victim of family violence):
$w->add('X', [13, 35, 40, 7]); /* html, [x, y, w, h] */

//Name:
$w->add($dependentName, [26, 42, 45, 7]); /* html, [x, y, w, h] */

//SEX 

//Sex: Male
$w->add($selectOption, [79, 46, 40, 7]); /* html, [x, y, w, h] */
//Sex: Female
$w->add($selectOption, [99, 46, 40, 7]); /* html, [x, y, w, h] */

//Date of Birth:
$w->add($dependentDateofBirth, [125, 46, 30, 7]); /* html, [x, y, w, h] */

//Social Security Number:
$w->add($dependentSSN, [160, 46, 50, 7]); /* html, [x, y, w, h] */

/************
//DEPENDENT 2
****/

//Family Violence Protection (Check if individual below is a victim of family violence):
$w->add('X', [13, 53, 40, 7]); /* html, [x, y, w, h] */

//Name:
$w->add($dependentName, [26, 61, 45, 7]); /* html, [x, y, w, h] */

//SEX 

//Sex: Male
$w->add($selectOption, [79, 63, 40, 7]); /* html, [x, y, w, h] */
//Sex: Female
$w->add($selectOption, [99, 63, 40, 7]); /* html, [x, y, w, h] */

//Date of Birth:
$w->add($dependentDateofBirth, [125, 64, 30, 7]); /* html, [x, y, w, h] */

//Social Security Number:
$w->add($dependentSSN, [160, 64, 50, 7]); /* html, [x, y, w, h] */

/************
//DEPENDENT 3
****/

//Family Violence Protection (Check if individual below is a victim of family violence):
$w->add('X', [14, 70, 40, 7]); /* html, [x, y, w, h] */

//Name:
$w->add($dependentName, [26, 78, 45, 7]); /* html, [x, y, w, h] */

//SEX 

//Sex: Male
$w->add($selectOption, [79, 81, 40, 7]); /* html, [x, y, w, h] */
//Sex: Female
$w->add($selectOption, [99, 81, 40, 7]); /* html, [x, y, w, h] */

//Date of Birth:
$w->add($dependentDateofBirth, [125, 81, 30, 7]); /* html, [x, y, w, h] */

//Social Security Number:
$w->add($dependentSSN, [160, 81, 50, 7]); /* html, [x, y, w, h] */

/************
//DEPENDENT 4
****/

//Family Violence Protection (Check if individual below is a victim of family violence):
$w->add('X', [14, 87, 40, 7]); /* html, [x, y, w, h] */

//Name:
$w->add($dependentName, [26, 96, 45, 7]); /* html, [x, y, w, h] */

//SEX 

//Sex: Male
$w->add($selectOption, [79, 98, 40, 7]); /* html, [x, y, w, h] */
//Sex: Female
$w->add($selectOption, [99, 98, 40, 7]); /* html, [x, y, w, h] */

//Date of Birth:
$w->add($dependentDateofBirth, [125, 98, 30, 7]); /* html, [x, y, w, h] */

//Social Security Number:
$w->add($dependentSSN, [160, 98, 50, 7]); /* html, [x, y, w, h] */


/* SECTION 5  Attorney Information
------------------------------------------------------------------------------*/
// Variables for Section 3

$obligeeAttorneyName = 'Jim Jimothy Jones'; // Dependent Repeater
$obligeeAttorneyPhone = '859596513'; // Dependent Repeater
$obligerAttorneyName = 'Jim Jimothy Jones'; // Dependent Repeater
$obligerAttorneyPhone = '8956321'; // Dependent Repeater

//Obligee Attorney Name:
$w->add($obligeeAttorneyName, [12, 131, 45, 7]); /* html, [x, y, w, h] */

//Phone:
$w->add($obligeeAttorneyPhone, [61.5, 131, 45, 7]); /* html, [x, y, w, h] */

//Obliger Attorney Name:
$w->add($obligerAttorneyName, [110, 131, 45, 7]); /* html, [x, y, w, h] */

//Phone:
$w->add($obligerAttorneyPhone, [160, 131, 45, 7]); /* html, [x, y, w, h] */
