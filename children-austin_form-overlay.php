<?php

/*
 * Template Name: Austin Form
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
$selectOption = 'X';

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
$w->addPdf(__DIR__ . '/pdfs/Austin-Form.pdf'); /* CHANGE THIS TO POINT TO YOUR PDF */

/* PAGE 1
 ************ */
$w->addPage(1);

/* SECTION 1  Jurisdiction & Legal Information
------------------------------------------------------------------------------*/
// Variables for Section 1
$county = 'Collin County'; // Right For You
$courtNo = '123'; // Jurisdiction
$causeNo = '654321'; // Jurisdiction
$dateOfOrder = '02/02/2022'; // Jurisdiction or Today
// $typeOfOrder = $form_data['field']['7'];
// $transferToCounty = $form_data['field']['8'];
// $transferToCourt = $form_data['field']['9'];
// $transferToStateCourtID = $form_data['field']['10'];
$petitionerAttorneyName = 'Alfred Attorney'; // Right For You
$petitionerAttorneyPhone = '999.999.9999'; // Right For You

// $petitionerAttorneyAddressStreet = $form_data['field']['13']['street'];
// $petitionerAttorneyAddressStreet2 = $form_data['field']['13']['street2'];
// $petitionerAttorneyAddressCity = $form_data['field']['13']['city'];
// $petitionerAttorneyAddressState = $form_data['field']['13']['state'];
// $petitionerAttorneyAddressZIP = $form_data['field']['13']['zip'];
// $petitionerAttorneyAddressCountry = $form_data['field']['13']['country'];

// if ($petitionerAttorneyAdressStreet2 == null) {

//     $petitionerAttorneyAddress = strval($petitionerAttorneyAddressStreet)+", "+strval(petitionerAttorneyAddressCity)+", "+strval($petitionerAttorneyAddressState)+", "+strval($petitionerAttorneyAddressZIP)+", "+strval($petitionerAttorneyAddressCountry);

// } elseif ($petitionerAttorneyAdressStreet2 != null) {
//     $petitionerAttorneyAddress = $petitionerAttorneyAddressStreet+", "+$petitionerAttorneyAddressStreet2+", "+petitionerAttorneyAddressCity+", "+$petitionerAttorneyAddressState+", "+$petitionerAttorneyAddressZIP+", "+$petitionerAttorneyAddressCountry;

// }

$petitionerAttorneyAddress = '123 Attorney Street, Suite 123, Allen, Texas, 75013'; // Right For You

// 1a. County
$w->add($county, [36, 20.5, 40, 7]); /* html, [x, y, w, h] */

// 1b. Court Number
$w->add($courtNo, [105, 20.5, 35, 7]); /* html, [x, y, w, h] */

// 1c. Cause Number
$w->add($causeNo, [39, 27.5, 37, 7]); /* html, [x, y, w, h] */

// 1d. Date of Order
$w->add($dateOfOrder, [127.5, 27.5, 25, 7]); /* html, [x, y, w, h] */

// 2. Type of Order
// SELECT ONLY Divorce/Annulment with Children
$w->add($selectOption, [18, 41.5, 5, 7]); /* html, [x, y, w, h] */

// if ($typeOfOrder[0] == "Divorce/Annulment with Children" or $typeOfOrder[1] == "Divorce/Annulment with Children" or $typeOfOrder[2] == "Divorce/Annulment with Children" or $typeOfOrder[3] == "Divorce/Annulment with Children" or $typeOfOrder[4] == "Divorce/Annulment with Children") {
//   $w->add('&#9632;', [18, 41.5, 100, 7]); /* html, [x, y, w, h] */
// }
// if ($typeOfOrder[1] == "Divorce/Annulment without Children" or $typeOfOrder[0] == "Divorce/Annulment without Children" or $typeOfOrder[2] == "Divorce/Annulment without Children" or $typeOfOrder[3] == "Divorce/Annulment without Children" or $typeOfOrder[4] == "Divorce/Annulment without Children") {
//   $w->add('&#9632;', [108.5, 41.5, 100, 7]); /* html, [x, y, w, h] */
// }if ($typeOfOrder[2] == "Establishment of Court Continuing Jurisdiction" or $typeOfOrder[1] == "Establishment of Court Continuing Jurisdiction" or $typeOfOrder[3] == "Establishment of Court Continuing Jurisdiction" or $typeOfOrder[4] == "Establishment of Court Continuing Jurisdiction" or $typeOfOrder[0] == "Establishment of Court Continuing Jurisdiction") {
//   $w->add('&#9632;', [18.5, 49, 100, 7]); /* html, [x, y, w, h] */
// }if ($typeOfOrder[3] == "Change in the Name of the Child" or $typeOfOrder[0] == "Change in the Name of the Child" or $typeOfOrder[1] == "Change in the Name of the Child" or $typeOfOrder[2] == "Change in the Name of the Child" or $typeOfOrder[4] == "Change in the Name of the Child") {
//   $w->add('&#9632;', [18, 60, 100, 7]); /* html, [x, y, w, h] */
// }if ($typeOfOrder[4] == "Transfer of Court or Continuing Jurisdiction" or $typeOfOrder[0] == "Transfer of Court or Continuing Jurisdiction" or $typeOfOrder[1] == "Transfer of Court or Continuing Jurisdiction" or $typeOfOrder[2] == "Transfer of Court or Continuing Jurisdiction" or $typeOfOrder[3] == "Transfer of Court or Continuing Jurisdiction") {
//   $w->add('&#9632;', [18.5, 71.5, 100, 7]); /* html, [x, y, w, h] */
// }

// $w->add($transferToCounty, [52, 77, 100, 7]); /* html, [x, y, w, h] */
// $w->add($transferToCourt, [86, 77, 100, 7]); /* html, [x, y, w, h] */
// $w->add($transferToStateCourtID, [125, 77, 100, 7]); /* html, [x, y, w, h] */

// 3. Only Complete if Service is Divorce By Us
// 3a. Name of Attorney for Petitioner
$w->add($petitionerAttorneyName, [20, 87, 100, 7]); /* html, [x, y, w, h] */

// 3b. Telephone number
$w->add($petitionerAttorneyPhone, [127, 87, 40, 7]); /* html, [x, y, w, h] */

// 3b. Current Mailing Address of Attorney
$w->add($petitionerAttorneyAddress, [20, 94, 180, 7]); /* html, [x, y, w, h] */

/* SECTION 2 Participants Details
------------------------------------------------------------------------------*/
// PETIONER DETAILS
// VARIABLES
$petitionerName = 'Dr Petitioner Patrick Pinhead III '; // Right For You
$petitionerMaidenName = 'PetitionerMaidenLastName'; // Lets Get Started Conditional on if Petitioner had prior maiden name
$petitionerPlaceofBirth = 'Prosper, Texxas, United States of America'; // Right for Your || Tell Us About Yourself
$petitionerRace = 'PetitionerRace'; // Tell Us About Yourself
$petitionerDoB = '01/01/1971'; // Tell Us About Yourself
$petitionerUsualResidence = '123 Petitioner Street, Apt 321, Prosper, Texas, 75009'; // Tell Us About Yourself || Lets Get Started

// 4. Name (First, Middle, Last, Suffix)
$w->add($petitionerName, [28, 106, 115, 7]); /* html, [x, y, w, h] */

// 5. Maiden Last Name
$w->add($petitionerMaidenName, [144, 106, 60, 7]); /* html, [x, y, w, h] */

// 6. Place of Birth (City, State / Foreign Country)
$w->add($petitionerPlaceofBirth, [28, 114, 85, 7]); /* html, [x, y, w, h] */

// 7. Race
$w->add($petitionerRace, [116, 114, 26, 7]); /* html, [x, y, w, h] */

// 8. Date of Birth (mm/dd/yyyy)
$w->add($petitionerDoB, [144, 114, 60, 7]); /* html, [x, y, w, h] */

// 9. Usual Residence (Street Name & Number, City, State, ZIP one line)
$w->add($petitionerUsualResidence, [28, 122, 175, 7]); /* html, [x, y, w, h] */

// RESPONDENT DETAILS
// Variables
$respondentName = 'Ms Respondent Rebekah Pinhead'; // Tell Us About Your Spouse
$respondentMaidenName = 'RespondentMaidenLastName'; // Tell Us About Your Spouse
$respondentPlaceofBirth = 'Rockwell,Texas, United States of America'; // Tell Us About Your Spouse
$respondentRace = 'RespondentRace'; // Tell Us About Your Spouse
$respondentDoB = '02/02/1971'; // Tell Us About Your Spouse
$respondentUsualAddress = '123 Respondent Street, Apt 321, Rockwell, Texas, 78888'; // Tell Us About Your Spouse || Lets Get Started

// 10. Name (First, Middle, Last, Suffix)
$w->add($respondentName, [28, 130, 115, 7]); /* html, [x, y, w, h] */

// 11. Maiden Last Name
$w->add($respondentMaidenName, [144, 130, 60, 7]); /* html, [x, y, w, h] */

// 12. Place of Birth (City, State / Foreign Country)
$w->add($respondentPlaceofBirth, [28, 138, 85, 7]); /* html, [x, y, w, h] */

// 13. Race
$w->add($respondentRace, [116, 138, 26, 7]); /* html, [x, y, w, h] */
// 14. Date of Birth (mm/dd/yyyy)
$w->add($respondentDoB, [144, 138, 60, 7]); /* html, [x, y, w, h] */

// 15. Usual Residence (Street Name & Number, City, State, ZIP one line)
$w->add($respondentUsualAddress, [28, 146, 175, 7]); /* html, [x, y, w, h] */

// MARRIAGE DETAILS
// Variables
$minorChildrenNumber = '6'; // Tell Us About Your Child(ren)
$dateOfMarriage = '01/03/1991'; // Lets Get Started
$placeOfMarriage = 'Mansfield, Texas'; // Lets Get Started

// 16. Numbero of Minor Children
$w->add($minorChildrenNumber, [22, 154, 20, 7]); /* html, [x, y, w, h] */

// 17. Date of Marriage
$w->add($dateOfMarriage, [58, 154, 40, 7]); /* html, [x, y, w, h] */

// 18. Place of Marriage (City and State, or Foreign Country)
$w->add($placeOfMarriage, [102, 154, 100, 7]); /* html, [x, y, w, h] */

/* SECTION 3  Children affected by this suit
------------------------------------------------------------------------------*/
// Variables
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

// CHILD 1
// Variables
$child1Name = 'Name Child One'; // Tell Us About Your Child(ren)
$child1DoB = '01/01/2001'; // Tell Us About Your Child(ren)
$child1Sex = 'Child1Gender'; // Tell Us About Your Child(ren)
$child1BirthPlace = 'Child One Birthplace'; // Tell Us About Your Child(ren)

// 19a. Child Current Name (First, Middle, Last, Suffix)
$w->add($child1Name, [28, 167, 175, 7]); /* html, [x, y, w, h] */

// 19b. Date of Birth (mm/dd/yyyy)
$w->add($child1DoB, [28, 176, 40, 7]); /* html, [x, y, w, h] */

// 19c. Sex
$w->add($child1Sex, [72, 176, 20, 7]); /* html, [x, y, w, h] */

// 19d. Birthplace (City, County and State)
$w->add($child1BirthPlace, [95, 176, 110, 7]); /* html, [x, y, w, h] */

// 19e. Prior name of child (First, Middle, Last, Suffix) NOT NEEDED?

// CHILD 2
// Variables
$child2Name = 'Name Child Two'; // Tell Us About Your Child(ren)
$child2DoB = '02/02/2002'; // Tell Us About Your Child(ren)
$child2Sex = 'Child2Gender'; // Tell Us About Your Child(ren)
$child2BirthPlace = 'Child Two Birthplace'; // Tell Us About Your Child(ren)

// 20a. Child Current Name (First, Middle, Last, Suffix)
$w->add($child2Name, [28, 191, 175, 7]); /* html, [x, y, w, h] */

// 20b. Date of Birth (mm/dd/yyyy)
$w->add($child2DoB, [28, 200, 40, 7]); /* html, [x, y, w, h] */

// 20c. Sex
$w->add($child2Sex, [72, 200, 20, 7]); /* html, [x, y, w, h] */

// 20d. Birthplace (City, County and State)
$w->add($child2BirthPlace, [95, 200, 110, 7]); /* html, [x, y, w, h] */

// 20e. Prior name of child (First, Middle, Last, Suffix)

// CHILD 3
// Variables
$child3Name = 'Name Child Three'; // Tell Us About Your Child(ren)
$child3DoB = '03/03/2003'; // Tell Us About Your Child(ren)
$child3Sex = 'Child3Gender'; // Tell Us About Your Child(ren)
$child3BirthPlace = 'Child Three Birthplace'; // Tell Us About Your Child(ren)

// 21a. Child Current Name (First, Middle, Last, Suffix)
$w->add($child3Name, [28, 216, 175, 7]); /* html, [x, y, w, h] */

// 21b. Date of Birth (mm/dd/yyyy)
$w->add($child3DoB, [28, 224, 40, 7]); /* html, [x, y, w, h] */

// 21c. Sex
$w->add($child3Sex, [72, 224, 20, 7]); /* html, [x, y, w, h] */

// 21d. Birthplace (City, County and State)
$w->add($child3BirthPlace, [95, 224, 110, 7]); /* html, [x, y, w, h] */

// 21e. Prior name of child (First, Middle, Last, Suffix)

/* PAGE 2
 ************ */
$w->addPage(2);

// CHILD 4
// Variables
$child4Name = 'Name Child Four'; // Tell Us About Your Child(ren)
$child4DoB = '04/04/2004'; // Tell Us About Your Child(ren)
$child4Sex = 'Child4Gender'; // Tell Us About Your Child(ren)
$child4BirthPlace = 'Child Four Birthplace'; // Tell Us About Your Child(ren)

// 22a. Child Current Name (First, Middle, Last, Suffix)
$w->add($child4Name, [28, 15, 175, 7]); /* html, [x, y, w, h] */

// 22b. Date of Birth (mm/dd/yyyy)
$w->add($child4DoB, [28, 23, 40, 7]); /* html, [x, y, w, h] */

// 22c. Sex
$w->add($child1Sex, [72, 23, 20, 7]); /* html, [x, y, w, h] */

// 22d. Birthplace (City, County and State)
$w->add($child4BirthPlace, [95, 23, 110, 7]); /* html, [x, y, w, h] */

// 22e. Prior name of child (First, Middle, Last, Suffix)

// CHILD 5
// Variables
$child5Name = 'Name Child Five'; // Tell Us About Your Child(ren)
$child5DoB = '05/05/2005'; // Tell Us About Your Child(ren)
$child5Sex = 'Child5Gender'; // Tell Us About Your Child(ren)
$child5BirthPlace = 'Child Five Birthplace'; // Tell Us About Your Child(ren)

// 23a. Child Current Name (First, Middle, Last, Suffix)
$w->add($child5Name, [28, 39, 175, 7]); /* html, [x, y, w, h] */

// 23b. Date of Birth (mm/dd/yyyy)
$w->add($child5DoB, [28, 47, 40, 7]); /* html, [x, y, w, h] */

// 23c. Sex
$w->add($child5Sex, [72, 47, 20, 7]); /* html, [x, y, w, h] */

// 23d. Birthplace (City, County and State)
$w->add($child5BirthPlace, [95, 47, 110, 7]); /* html, [x, y, w, h] */

// 23e. Prior name of child (First, Middle, Last, Suffix)

// CHILD 6
// Variables
$child6Name = 'Name Child Six'; // Tell Us About Your Child(ren)
$child6DoB = '06/06/2006'; // Tell Us About Your Child(ren)
$child6Sex = 'Child6Gender'; // Tell Us About Your Child(ren)
$child6BirthPlace = 'Child Six Birthplace'; // Tell Us About Your Child(ren)

// 25a. Child Current Name (First, Middle, Last, Suffix)
$w->add($child6Name, [28, 64, 175, 7]); /* html, [x, y, w, h] */

// 25b. Date of Birth (mm/dd/yyyy)
$w->add($child6DoB, [28, 72, 40, 7]); /* html, [x, y, w, h] */

// 25c. Sex
$w->add($child6Sex, [72, 72, 20, 7]); /* html, [x, y, w, h] */

// 25d. Birthplace (City, County and State)
$w->add($child6BirthPlace, [95, 72, 110, 7]); /* html, [x, y, w, h] */

// 25e. Prior name of child (First, Middle, Last, Suffix)

/* SECTION 1 */

/* SECTION 1 */