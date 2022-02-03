<?php

/*
 * Template Name: Austin Form
 * Version: 1.0
 * Description: Overlaying the record of support document
 * Author: 
 * Author URI: 
 * Group: 0. Sort
 * Required PDF Version: 4.4.0
 * Toolkit: true
 */

/* Prevent direct access to the template */
if ( ! class_exists( 'GFForms' ) ) {
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
 //VARUABLES
  $client_user_id = $form_data['misc']['created_by'];

 //Sender Information
 $county = $form_data['field']['1'];
 $courtNo = $form_data['field']['3'];
 $causeNo = $form_data['field']['2'];
 $dateOfOrder = $form_data['field']['4'];
 $typeOfOrder = $form_data['field']['7'];
 $transferToCounty = $form_data['field']['8'];
 $transferToCourt = $form_data['field']['9'];
 $transferToStateCourtID = $form_data['field']['10'];
 $petitionerAttorneyName = $form_data['field']['11'];
 $petitionerAttorneyPhone = $form_data['field']['12'];

 $petitionerAttorneyAddress;
  $petitionerAttorneyAddressStreet = $form_data['field']['13']['street'];
  $petitionerAttorneyAddressStreet2 = $form_data['field']['13']['street2'];
  $petitionerAttorneyAddressCity = $form_data['field']['13']['city'];
  $petitionerAttorneyAddressState = $form_data['field']['13']['state'];
  $petitionerAttorneyAddressZIP= $form_data['field']['13']['zip'];
  $petitionerAttorneyAddressCountry = $form_data['field']['13']['country'];

  if($petitionerAttorneyAdressStreet2 == null){

  $petitionerAttorneyAddress = strval($petitionerAttorneyAddressStreet) + ", " + strval(petitionerAttorneyAddressCity) + ", " + strval($petitionerAttorneyAddressState) + ", " + strval($petitionerAttorneyAddressZIP) + ", " + strval($petitionerAttorneyAddressCountry);

  }elseif ($petitionerAttorneyAdressStreet2 != null){
    $petitionerAttorneyAddress = $petitionerAttorneyAddressStreet + ", " + $petitionerAttorneyAddressStreet2 + ", " + petitionerAttorneyAddressCity + ", " + $petitionerAttorneyAddressState + ", " + $petitionerAttorneyAddressZIP + ", " + $petitionerAttorneyAddressCountry;


  }
 
 //Section 2
 $petitionerName = $form_data['field']['15'];
 $petitionerMaidenName = $form_data['field']['23'];
 $petitionerPlaceofBirth = $form_data['field']['17'];
 $petitionerRace = $form_data['field']['19'];
 $petitionerDoB = $form_data['field']['20'];
 $petitionerUsualResidence = $form_data['field']['21'];
 
 $respondentName = $form_data['field']['22'];
 $respondentMaidenName = $form_data['field']['18'];
 $respondentPlaceofBirth = $form_data['field']['25'];
 $respondentRace = $form_data['field']['24'];
 $respondentDoB = $form_data['field']['26'];
 $respondentUsualAddress = $form_data['field']['27'];
 $minorChildrenNumber = $form_data['field']['28'];
 $dateOfMarriage = $form_data['field']['29'];
 $placeOfMarriage = $form_data['field']['30'];



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






/* Load PDF Styles */
$w->beginStyles();
?>
	<style>
		/* Helper styles to see the field mapping. Remove when ready. */
		.single,
		.multi {
			background: rgba(244, 247, 118, 0.5)
			color: #000;
		}
	</style>
<?php
$w->endStyles();

/*
 * Begin PDF Generation
 *
 * The API documentation can be found at https://gravitypdf.com/developer-toolkit-api-documentation/
 */
$w->addPdf( __DIR__ . '/pdfs/Austin-Form.pdf' ); /* CHANGE THIS TO POINT TO YOUR PDF */
$w->addPage( 1 );

//$w->add( $petitionerDoB, [ 139, 21, 100, 7 ] ); /* html, [x, y, w, h] */

$w->add( $county , [ 36, 20.5, 100, 7 ] ); /* html, [x, y, w, h] */
$w->add( $courtNo , [ 105, 20.5, 100, 7 ] ); /* html, [x, y, w, h] */
$w->add( $causeNo , [ 39, 27.5, 100, 7 ] ); /* html, [x, y, w, h] */
$w->add( $dateOfOrder , [ 127.5, 27.5, 100, 7 ] ); /* html, [x, y, w, h] */



if($typeOfOrder[0] == "Divorce/Annulment with Children" OR $typeOfOrder[1] == "Divorce/Annulment with Children" OR $typeOfOrder[2] == "Divorce/Annulment with Children" OR $typeOfOrder[3] == "Divorce/Annulment with Children" OR $typeOfOrder[4] == "Divorce/Annulment with Children"){
$w->add( '&#9632;' , [ 18, 41.5, 100, 7 ] ); /* html, [x, y, w, h] */
}
if($typeOfOrder[1] == "Divorce/Annulment without Children" OR $typeOfOrder[0] == "Divorce/Annulment without Children" OR $typeOfOrder[2] == "Divorce/Annulment without Children" OR $typeOfOrder[3] == "Divorce/Annulment without Children" OR $typeOfOrder[4] == "Divorce/Annulment without Children" ){
$w->add( '&#9632;' , [ 108.5, 41.5, 100, 7 ] ); /* html, [x, y, w, h] */
} if($typeOfOrder[2] == "Establishment of Court Continuing Jurisdiction" OR $typeOfOrder[1] == "Establishment of Court Continuing Jurisdiction" OR $typeOfOrder[3] == "Establishment of Court Continuing Jurisdiction" OR $typeOfOrder[4] == "Establishment of Court Continuing Jurisdiction" OR $typeOfOrder[0] == "Establishment of Court Continuing Jurisdiction"){
$w->add( '&#9632;' , [ 18.5, 49, 100, 7 ] ); /* html, [x, y, w, h] */
} if($typeOfOrder[3] == "Change in the Name of the Child" OR $typeOfOrder[0] == "Change in the Name of the Child" OR $typeOfOrder[1] == "Change in the Name of the Child" OR $typeOfOrder[2] == "Change in the Name of the Child" OR $typeOfOrder[4] == "Change in the Name of the Child"){
$w->add( '&#9632;' , [ 18, 60, 100, 7 ] ); /* html, [x, y, w, h] */
} if($typeOfOrder[4] == "Transfer of Court or Continuing Jurisdiction" OR $typeOfOrder[0] == "Transfer of Court or Continuing Jurisdiction" OR $typeOfOrder[1] == "Transfer of Court or Continuing Jurisdiction" OR $typeOfOrder[2] == "Transfer of Court or Continuing Jurisdiction" OR $typeOfOrder[3] == "Transfer of Court or Continuing Jurisdiction"){
$w->add( '&#9632;' , [ 18.5, 71.5, 100, 7 ] ); /* html, [x, y, w, h] */
}

$w->add( $transferToCounty , [ 52, 77, 100, 7 ] ); /* html, [x, y, w, h] */
$w->add( $transferToCourt , [ 86, 77, 100, 7 ] ); /* html, [x, y, w, h] */
$w->add( $transferToStateCourtID , [ 125, 77, 100, 7 ] ); /* html, [x, y, w, h] */

$w->add( implode(" ", $petitionerAttorneyName) , [ 65, 85, 100, 7 ] ); /* html, [x, y, w, h] */
$w->add( $petitionerAttorneyPhone , [ 175, 85, 100, 7 ] ); /* html, [x, y, w, h] */
$w->add($petitionerAttorneyAddress, [ 25, 94, 100, 7 ] ); /* html, [x, y, w, h] */

$w->add( implode(" ", $petitionerName), [ 30, 105, 100, 7 ] ); /* html, [x, y, w, h] */
$w->add( implode(" ",$petitionerMaidenName) , [ 146, 105, 100, 7 ] ); /* html, [x, y, w, h] */
$w->add( implode(", ",$petitionerPlaceofBirth) , [ 30, 114, 100, 7 ] ); /* html, [x, y, w, h] */
$w->add( $petitionerRace , [ 125, 77, 100, 7 ] ); /* html, [x, y, w, h] */
