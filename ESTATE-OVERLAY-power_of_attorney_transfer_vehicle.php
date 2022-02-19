<?php

/*
 * Template Name: Power Of Attorney To Transfer Vehicle Overlay
 * Version: 1.0
 * Description: Overlaying the Power Of Attorney To Transfer Vehicle Overlay
 * Author:
 * Author URI:
 * Group: 2. Second Review
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

/* -------------------------------------------------------------------------------------------- */
/* GLOBAL VARIABLES */
$selectOption = 'X';
$leaveBlank = '&nbsp;';

/* -------------------------------------------------------------------------------------------- */
/* QUERY: Master Entries */

/* PETITIONER */
$master_entries[0][96]['first'] = 'Peter'; // Petitioner Full Name
$master_entries[0][96]['middle'] = 'Paul'; // Petitioner Full Name
$master_entries[0][96]['last'] = 'Parker'; // Petitioner Full Name

$master_entries[0][106]['street'] = '321 Petitioner Mailing Street'; // Address residence
$master_entries[0][106]['street2'] = 'Apt 321'; // Address residence
$master_entries[0][106]['city'] = 'Plano'; // Address residence
$master_entries[0][106]['state'] = 'Texas'; // Address residence
$master_entries[0][106]['zip'] = '75078'; // Address residence

$master_entries[0][245] = 'Collin'; // Petitioner County
$master_entries[0][246] = ''; // If 'Other', petitioner County other

/* RESPONDENT */
$master_entries[0][114]['first'] = 'Rebekah'; // Respondent full name
$master_entries[0][114]['middle'] = 'Rochelle'; // Respondent full name
$master_entries[0][114]['last'] = 'Parker'; // Respondent full name

$master_entries[0][72]['street'] = '321 Respondent Mailing Street'; // Address residence
$master_entries[0][72]['street2'] = 'Apt 321'; // Address residence
$master_entries[0][72]['city'] = 'Prosper'; // Address residence
$master_entries[0][72]['state'] = 'Texas'; // Address residence
$master_entries[0][72]['zip'] = '75078'; // Address residence

$master_entries[0][249] = 'Denton'; // Respondent County
$master_entries[0][250] = ''; // If 'Other', respondent County other

/* -------------------------------------------------------------------------------------------- */
/*QUERY: Repeater Asset Jointly Owned Entries */

/*
$form_id = 88;
$client_user_id = rgar($entry, 'created_by');

$search_criteria['field_filters'][] = array( 'key' => 'created_by', 'value' => $client_user_id );
$search_criteria['field_filters'][] = array( 'key' => '2', 'value' => 'Vehicles' );
$sorting = array( 'key' => $sort_field, 'direction' => 'ASC', 'is_numeric' => true );

$assets_vehicles_joint_entries = GFAPI::get_entries( $form_id, $search_criteria, $sorting );
 */

// Asset Type
$assets_vehicles_joint_entries[0][2] = 'Vehicles'; // Type of Asset (ID: 2)

// VEHICLE INFORMATION
// VIN
// Year
// Make
// Body Style
// Model
// License Plate
// Title/Document Number

// Vehicle 1
$assets_vehicles_joint_entries[0][17] = 'Ford'; // Make (ID: 17)
$assets_vehicles_joint_entries[0][18] = 'Bronco'; // Model (ID: 18)
$assets_vehicles_joint_entries[0][19] = '2020'; // Year (ID: 19)
$assets_vehicles_joint_entries[0][20] = '1AAAA11A11A111111'; // VIN (ID: 20)
$assets_vehicles_joint_entries[0][21] = 'Truck'; // Body Style (ID: 21)
$assets_vehicles_joint_entries[0][2201] = 'AAA1111'; // License Plate Number (ID: X)
$assets_vehicles_joint_entries[0][2202] = '11111111'; // Title Number (ID: X)
$assets_vehicles_joint_entries[0][47] = 'Me'; // Awarded to (ID: 47)

// Vehicle 2
$assets_vehicles_joint_entries[1][17] = 'Chevrolet'; // Make (ID: 17)
$assets_vehicles_joint_entries[1][18] = 'Equinox'; // Model (ID: 18)
$assets_vehicles_joint_entries[1][19] = '2021'; // Year (ID: 19)
$assets_vehicles_joint_entries[1][20] = '1AAAA11A11A111112'; // VIN (ID: 20)
$assets_vehicles_joint_entries[1][21] = 'SUV'; // Body Style (ID: 21)
$assets_vehicles_joint_entries[1][2201] = 'AAA1112'; // License Plate Number (ID: X)
$assets_vehicles_joint_entries[1][2202] = '11111112'; // Title Number (ID: X)
$assets_vehicles_joint_entries[1][47] = 'My Spouse'; // Awarded to (ID: 47)

$count_entries = count($assets_vehicles_joint_entries);

/* -------------------------------------------------------------------------------------------- */
/* COUNT JOINT ENTRIES TYPE VEHICLES */

/* -------------------------------------------------------------------------------------------- */
/* Load PDF Styles */

/* -------------------------------------------------------------------------------------------- */
/* SECTION I: General Information  */
/* Variables */

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
$w->addPdf(__DIR__ . '/pdfs/Power-Of-Attorney-Transfer-Vehicle.pdf'); /* CHANGE THIS TO POINT TO YOUR PDF */

/* FOR EACH ENTRY */
for ($i = 0; $i < $count_entries; $i++) {

/* -------------------------------------------------------------------------------------------- */
/* LOAD: Page 1  */
    $w->addPage(1);

/* -------------------------------------------------------------------------------------------- */
/* SECTION I: Vehicle Information  */
/* Variables */

/* Section - Vehicle Information
 ************************************** */
// VARIABLES
    //NOTE: Vehicle Information will be gathered from Repeater when using real data
    $vehicleIdentificationNumber = $assets_vehicles_joint_entries[$i][20];
    $vehicleYear = $assets_vehicles_joint_entries[$i][19];
    $vehicleMake = $assets_vehicles_joint_entries[$i][17];
    $vehicleBodyStyle = $assets_vehicles_joint_entries[$i][21];
    $vehicleModel = $assets_vehicles_joint_entries[$i][18];
    $licensePlateStateNumber = $assets_vehicles_joint_entries[$i][2201]; //Currently no where
    $titleDocumentNumber = $assets_vehicles_joint_entries[$i][2202]; //Currently no where

/* OUTPUT */

//Vehicle Identification number:
    $w->add($vehicleIdentificationNumber, [14, 126.5, 50, 7]); /* html, [x, y, w, h] */

//Year:
    $w->add($vehicleYear, [92, 126.5, 20, 7]); /* html, [x, y, w, h] */

//Make:
    $w->add($vehicleMake, [119, 126.5, 25, 7]); /* html, [x, y, w, h] */

//Body:
    $w->add($vehicleBodyStyle, [146, 126.5, 25, 7]); /* html, [x, y, w, h] */

//Model:
    $w->add($vehicleModel, [174, 126.5, 25, 7]); /* html, [x, y, w, h] */

//License Plate and State Number:
    $w->add($licensePlateStateNumber, [15, 137, 24, 7]); /* html, [x, y, w, h] */

//License Plate and State Number:
    $w->add($titleDocumentNumber, [92, 137, 40, 7]); /* html, [x, y, w, h] */

/* -------------------------------------------------------------------------------------------- */
/* SECTION II: Grantor Information */
/* Variables */

    $awardedTo = $assets_vehicles_joint_entries[$i][47];

    // Store Petitioner County
    if ($master_entries[0][245] != 'Other') {
        $petitioner_county = $master_entries[0][245];
    } else {
        $petitioner_county = $master_entries[0][246];
    }

    // Store Respondent County
    if ($master_entries[0][249] != 'Other') {
        $respondent_county = $master_entries[0][249];
    } else {
        $respondent_county = $master_entries[0][250];
    }

    // If Awarded to == Me, Grantor is Respondent, Grantee is Petitioner
    if ($awardedTo == 'Me') {
// GRANTOR
        $grantorFirstName = $master_entries[0][114]['first'];
        $grantorMiddleName = $master_entries[0][114]['middle'];
        $grantorLastName = $master_entries[0][114]['last'];

        $grantor_address_street_1 = $master_entries[0][72]['street'];
        $grantor_address_street_2 = $master_entries[0][72]['street2'];

        if ($grantor_address_street_2 == '') {
            $grantorAddressStreet = $grantor_address_street_1;
        } else {
            $grantorAddressStreet = $grantor_address_street_1 . ', ' . $grantor_address_street_2;
        }

        $grantorAddressCity = $grantor_address_street_1 = $master_entries[0][72]['city'];
        $grantorAddressCounty = $respondent_county;
        $grantorAddressState = $grantor_address_street_1 = $master_entries[0][72]['state'];
        $grantorAddressZip = $grantor_address_street_1 = $master_entries[0][72]['zip'];
// GRANTEE
        $granteeFirstName = $master_entries[0][96]['first'];
        $granteeMiddleName = $master_entries[0][96]['middle'];
        $granteeLastName = $master_entries[0][96]['last'];

        $grantee_address_street_1 = $master_entries[0][106]['street'];
        $grantee_address_street_2 = $master_entries[0][106]['street2'];
        if ($grantee_address_street_2 == '') {
            $granteeAddressStreet = $grantee_address_street_1;
        } else {
            $granteeAddressStreet = $grantee_address_street_1 . ', ' . $grantee_address_street_2;
        }

        $granteeAddressCity = $master_entries[0][106]['city'];
        $granteeAddressCounty = $petitioner_county;
        $granteeAddressState = $master_entries[0][106]['state'];
        $granteeAddressZip = $master_entries[0][106]['zip'];

    } else {
        // If Awarded to != Me, Grantor is Petitioner, Grantee is Respondent
        // GRANTOR
        $grantorFirstName = $master_entries[0][96]['first'];
        $grantorMiddleName = $master_entries[0][96]['middle'];
        $grantorLastName = $master_entries[0][96]['last'];

        $grantor_address_street_1 = $master_entries[0][106]['street'];
        $grantor_address_street_2 = $master_entries[0][106]['street2'];
        if ($grantor_address_street_2 == '') {
            $grantorAddressStreet = $grantor_address_street_1;
        } else {
            $grantorAddressStreet = $grantor_address_street_1 . ', ' . $grantor_address_street_2;
        }

        $grantorAddressCity = $master_entries[0][106]['city'];
        $grantorAddressCounty = $petitioner_county;
        $grantorAddressState = $master_entries[0][106]['state'];
        $grantorAddressZip = $master_entries[0][106]['zip'];

        // GRANTEE
        $granteeFirstName = $master_entries[0][114]['first'];
        $granteeMiddleName = $master_entries[0][114]['middle'];
        $granteeLastName = $master_entries[0][114]['last'];

        $grantee_address_street_1 = $master_entries[0][72]['street'];
        $grantee_address_street_2 = $master_entries[0][72]['street2'];

        if ($grantee_address_street_2 == '') {
            $granteeAddressStreet = $grantee_address_street_1;
        } else {
            $granteeAddressStreet = $grantee_address_street_1 . ', ' . $grantee_address_street_2;
        }

        $granteeAddressCity = $grantee_address_street_1 = $master_entries[0][72]['city'];
        $granteeAddressCounty = $respondent_county;
        $granteeAddressState = $grantee_address_street_1 = $master_entries[0][72]['state'];
        $granteeAddressZip = $grantee_address_street_1 = $master_entries[0][72]['zip'];

    }

    if ($grantorMiddleName == '') {
        $grantorNameFull = $grantorFirstName . ' ' . $grantorLastName;
    } else {
        $grantorNameFull = $grantorFirstName . ' ' . $grantorMiddleName . ' ' . $grantorLastName;
    }

/* OUTPUT */

//First Name (or Entity Name)
    $w->add($grantorFirstName, [14, 156, 50, 7]); /* html, [x, y, w, h] */

//Middle Name
    $w->add($grantorMiddleName, [90, 156, 50, 7]); /* html, [x, y, w, h] */

//Last Name
    $w->add($grantorLastName, [145, 156, 50, 7]); /* html, [x, y, w, h] */

//Suffix (if any)
    // $w->add($grantorSuffix, [184, 156, 100, 7]); /* html, [x, y, w, h] */

//Address
    $w->add($grantorAddressStreet, [14, 166, 180, 7]); /* html, [x, y, w, h] */

//City
    $w->add($grantorAddressCity, [14, 176, 50, 7]); /* html, [x, y, w, h] */

//County
    $w->add($grantorAddressCounty, [90, 176, 50, 7]); /* html, [x, y, w, h] */

//State
    $w->add($grantorAddressState, [143, 176, 30, 7]); /* html, [x, y, w, h] */

//ZIP
    $w->add($grantorAddressZip, [180, 176, 20, 7]); /* html, [x, y, w, h] */

/* -------------------------------------------------------------------------------------------- */
/* SECTION III: Grantee Information */
/* Variables */

/* OUTPUT */

//First Name (or Entity Name)
    $w->add($granteeFirstName, [14, 196, 50, 7]); /* html, [x, y, w, h] */

//Middle Name
    $w->add($granteeMiddleName, [90, 196, 50, 7]); /* html, [x, y, w, h] */

//Last Name
    $w->add($granteeLastName, [145, 196, 50, 7]); /* html, [x, y, w, h] */

//Suffix (if any)
    // $w->add($granteeSuffix, [184, 196, 100, 7]); /* html, [x, y, w, h] */

//Address
    $w->add($granteeAddressStreet, [14, 206, 180, 7]); /* html, [x, y, w, h] */

//City
    $w->add($granteeAddressCity, [14, 216, 50, 7]); /* html, [x, y, w, h] */

//County
    $w->add($granteeAddressCounty, [90, 216, 50, 7]); /* html, [x, y, w, h] */

//State
    $w->add($granteeAddressState, [145, 216, 30, 7]); /* html, [x, y, w, h] */

//ZIP
    $w->add($granteeAddressZip, [180, 216, 20, 7]); /* html, [x, y, w, h] */

/* -------------------------------------------------------------------------------------------- */
/* SECTION IV: Grantor Name Signature Field */
/* Variables */
    $w->add($grantorNameFull, [96, 250, 75, 7]); /* html, [x, y, w, h] */

}