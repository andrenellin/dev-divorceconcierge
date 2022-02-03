<?php

/*
 * Template Name: Power Of Attorney To Transfer Vehicle Overlaty
 * Version: 1.0
 * Description: Overlaying the Power Of Attorney To Transfer Vehicle Overlaty created 03/02/2022
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
$w->addPdf(__DIR__ . '/pdfs/PowerOfAttorney.pdf'); /* CHANGE THIS TO POINT TO YOUR PDF */

/* PAGE 1
 ************ */
$w->addPage(1);

/* Section - Vehicle Information
 ************************************** */
// VARIABLES
//NOTE: Vehicle Information will be gathered from Repeater when using real data
$vehicleIdentificationNumber = '123456';//Asset Spreadsheet but could change
$vehicleYear = '2007';//Asset Spreadsheet but could change
$vehicleMake = 'Toyota';////Asset Spreadsheet but could change
$vehicleBodyStyle = '?';//currently no where and unsure of what it means exactly
$vehicleModel = 'Yaris'; //Asset Spreadsheet but could change
$licensePlateStateNumber = '12345'; //Currently no where
$titleDocumentNumber = '1234567'; //Currently no where

//OUTPUT

//Vehicle Identification number:
$w->add($vehicleIdentificationNumber, [14.5, 126.5, 100, 7]); /* html, [x, y, w, h] */

//Year:
$w->add($vehicleYear, [92, 126.5, 100, 7]); /* html, [x, y, w, h] */

//Make:
$w->add($vehicleMake, [120, 126.5, 100, 7]); /* html, [x, y, w, h] */

//Body:
$w->add($vehicleBodyStyle, [147, 126.5, 100, 7]); /* html, [x, y, w, h] */

//Model:
$w->add($vehicleModel, [175, 126.5, 100, 7]); /* html, [x, y, w, h] */

//License Plate and State Number:
$w->add($licensePlateStateNumber, [15, 137, 100, 7]); /* html, [x, y, w, h] */

//License Plate and State Number:
$w->add($titleDocumentNumber, [92, 137, 100, 7]); /* html, [x, y, w, h] */

/* Section - Grantor Information
 ************************************** */
// VARIABLES
$grantorFirstName = 'Jim'; //Grantor determined in currently unknown way, name from relevant Tell Us About ... Form
$grantorMiddleName = 'Jimothy';//Tell Us About ...
$grantorLastName = 'Jones'; //Tell Us About ... 
$grantorSuffix = 'Mr.'; // Tell Us About ...
$grantorAddress = '9 Jim Jones Road'; // Tell Us About ...
$grantorCity = 'Salt Lake City'; // Tell Us About ...
$grantorCounty = 'Colin'; //Tell Us About ...
$grantorState = 'Texas'; //Tell Us About ...
$grantorZip = 'TX11 6UI';// Tell Us About ...


//OUTPUT

//First Name (or Entity Name)
$w->add($grantorFirstName, [15, 156, 100, 7]); /* html, [x, y, w, h] */

//Middle Name 
$w->add($grantorMiddleName, [92, 156, 100, 7]); /* html, [x, y, w, h] */

//Last Name 
$w->add($grantorLastName, [147, 156, 100, 7]); /* html, [x, y, w, h] */

//Suffix (if any)
$w->add($grantorSuffix, [184, 156, 100, 7]); /* html, [x, y, w, h] */

//Address
$w->add($grantorAddress, [15, 166, 100, 7]); /* html, [x, y, w, h] */

//City
$w->add($grantorCity, [15, 176, 100, 7]); /* html, [x, y, w, h] */

//County
$w->add($grantorCounty, [92, 176, 100, 7]); /* html, [x, y, w, h] */

//State
$w->add($grantorState, [147, 176, 100, 7]); /* html, [x, y, w, h] */

//State
$w->add($grantorZip, [184, 176, 100, 7]); /* html, [x, y, w, h] */

/* Section - Grantee Information
 ************************************** */
// VARIABLES
$granteeFirstName = 'Jim'; //Grantor determined in currently unknown way, name from relevant Tell Us About ... Form
$granteeMiddleName = 'Jimothy';//Tell Us About ...
$granteeLastName = 'Jones'; //Tell Us About ... 
$granteeSuffix = 'Mr.'; // Tell Us About ...
$granteeAddress = '9 Jim Jones Road'; // Tell Us About ...
$granteeCity = 'Salt Lake City'; // Tell Us About ...
$granteeCounty = 'Colin'; //Tell Us About ...
$granteeState = 'Texas'; //Tell Us About ...
$granteeZip = 'TX11 6UI';// Tell Us About ...


//OUTPUT

//First Name (or Entity Name)
$w->add($granteeFirstName, [15, 196, 100, 7]); /* html, [x, y, w, h] */

//Middle Name 
$w->add($granteeMiddleName, [92, 196, 100, 7]); /* html, [x, y, w, h] */

//Last Name 
$w->add($granteeLastName, [147, 196, 100, 7]); /* html, [x, y, w, h] */

//Suffix (if any)
$w->add($granteeSuffix, [184, 196, 100, 7]); /* html, [x, y, w, h] */

//Address
$w->add($granteeAddress, [15, 206, 100, 7]); /* html, [x, y, w, h] */

//City
$w->add($granteeCity, [15, 216, 100, 7]); /* html, [x, y, w, h] */

//County
$w->add($granteeCounty, [92, 216, 100, 7]); /* html, [x, y, w, h] */

//State
$w->add($granteeState, [147, 216, 100, 7]); /* html, [x, y, w, h] */

//State
$w->add($granteeZip, [184, 216, 100, 7]); /* html, [x, y, w, h] */

