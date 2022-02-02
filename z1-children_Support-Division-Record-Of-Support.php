<meta charset="UTF-8">
<?php

/*
 * Template Name: Z1 Child Support Division Record Of Support
 * Version: 1.0.0
 * Description: A print-friendly template displaying the Child support Division Record of Support
 * Author: Bliksem LLC
 * Author URI: https://simplifysmallbiz.com
 * Group: Bliksem
 * License: GPLv2
 * Required PDF Version: 4.0-alpha
 * Tags: Header, Footer, Background, Optional HTML Fields, Optional Page Fields
 */

/* Prevent direct access to the template */
if (!class_exists('GFForms')) {
    return;
}

/**
 * Load our template-specific settings
 */
$show_meta_data = !empty($settings['world_show_meta_data']) ? $settings['world_show_meta_data'] : 'No';
?>

<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!-- STYLES -->
<style>
/* Pages */
@page {
  size: 8.5in 11in;
  margin: 0.5in 0.5in 0.5in 0.5in;
  header: html_MyCustomHeader;
  line-height: 1.3;
  footer: html_MyCustomFooter;
  margin-footer: 10mm;
}


/* FONTS */

/* LISTS */
ul,
ol {
  margin: 0;
  padding-left: 1mm;
  padding-right: 1mm;
  list-style-type: U+2610;
}

li {
  margin: 0;
  padding: 2mm 0 0 0;
  list-style-position: inside;
  list-style: circle;

}

/* TABLES */
.footer_left_half {
  width: 69%;
}

.footer_right_half {
  width: 30%;
}

.column_left_third,
.column_right_third {
  width: 45%;
}

.column_middle_third {
  width: 10%;
}

.section_number {
  width: 20mm;

}

.table_children_col_1 {
  width: 20mm;
}

.table_children_col_2 {
  width: 85mm;
}



/* GENERAL */
.bs_bold {
  font-weight: bold;
}

.bs_italic {
  font-style: italic;
}

.bs_text_small {
  font-size: 7pt;
}

.image-standing_order {
  height: 255mm;
}

.indent-paragraph {
  text-indent: 10.5mm;
  line-height: 250%;
}

.indent-paragraph-text {
  padding-left: 100px;
  text-align: justify;

  line-height: 250%;


}

.indent-paragraph-sub {
  padding-left: 150px;
  text-align: justify;

  line-height: 250%;


}

.indent-paragraph-sub2 {
  padding-left: 200px;
  text-align: justify;

  line-height: 250%;


}


.indent-paragraph-textind {
  padding-left: 70px;
  text-align: justify;
  text-indent: 10.5mm;
  line-height: 250%;


}

.indent-paragraph-texty {
  padding-left: 40px;
  text-align: justify;

  line-height: 250%;


}

.title {

  line-height: 250%;
  text-align: center;
  font-weight: bold;
}

.paragraph {
  line-height: 250%;
}

.headinger {
  line-height: 250%;
  font-weight: bold;
}

.paragraphinfo {
  line-height: 150%;

}

.rotateText {
  transform: rotateY(90);

}

.paragraphleft {
  line-height: 250%;
  width: 290px;
  float: left;

}

.paragraphleftborder {
  line-height: 250%;

  float: left;
  border-width: 1px;
  border-style: solid;
  border-collapse: collapse;
}

.paragraphcenterborder {
  line-height: 250%;
  text-indent: 200px;
  width: 193px;
  float: left;
  border-width: 1px;
  border-style: solid;
  border-collapse: collapse;
}

.paragraphrightborder {
  line-height: 250%;

  float: right;
  border-width: 1px;
  border-style: solid;
  border-collapse: collapse;
}

.paragraphright {
  line-height: 250%;
  width: 300px;
  float: right;

}

.paragraphsmall {
  line-height: 150%;
  font-size: 5pt;
}

.paragraphborder {
  line-height: 250%;
  border-width: 1px;
  border-style: solid;
  display: flex;
  border-collapse: collapse;
}

.paragraphborderfill {
  line-height: 250%;
  border-width: 1px;
  border-style: solid;
  background-color: black;
  color: white;


}

.container {
  line-height: 250%;
  display: flex;

}

.section_content {
  margin-bottom: 5mm;
}

.text_align_center {
  text-align: center;
}

.text_align_right {
  text-align: right;
}

.text_align_left {
  text-align: left;
}

.text_align_justify {
  text-align: justify;
}

.text_underline {
  text-decoration: underline;
}

/* SIGNATURE FIELDS */
.height_max {
  height: 10mm;
}
</style>
<!-- STYLES END -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

<!-- HEADER / FOOTER -->
<htmlpagefooter name="MyCustomFooter">
  <table class="footer">
    <tr class="paragraph">
      <td class="footer_left_half"><span class="bs_bold bs_text_small">CHILD SUPPORT DIVISION - RECORD OF SUPPORT</span>
      </td>
      <td class="footer_right_half text_align_right"><span class="bs_bold bs_text_small">PAGE {PAGENO}</span></td>
    </tr>
  </table>
</htmlpagefooter>
<htmlpagefooter name="MyFooterStandingOrder">
</htmlpagefooter>
<!-- HEADR FOOTER END -->

<?php
/* *********************************************************************
 * VARIABLES
 ******************************************************************** */
// $client_user_id = $form_data'misc''created_by';

//INput data

//HEADING data

//Order information
$county = $form_data['field'][1];
$courtNo = $form_data['field'][3];
$caseNo = $form_data['field'][4];
$attorneyGenCaseNo = $form_data['field'][5];

$dateOfHearing = $form_data['field'][6];
$orderSignDate = $form_data['field'][7];
$orderType = $form_data['field'][8];
$paymentLocation = $form_data['field'][9];

//obligee/custodial parent information
$FVPApplicableArray = $form_data['field'][12];
$FVPApplicable = implode(" ", $FVPApplicableArray);
$obligeeNameArray = $form_data['field'][13];
$obligeeName = implode(" ", $obligeeNameArray);
$obligeeDoB = $form_data['field'][14];
$obligeeSSN = $form_data['field'][15];
$obligeeAdressArray = $form_data['field'][16];
$obligeeAdress = implode(", ", $obligeeAdressArray);
$obligeeSex = $form_data['field'][17];
$obligeeDriversLicense = $form_data['field'][18];
$obligeeHomePhone = $form_data['field'][19];
$obligeeWorkPhone = $form_data['field'][21];
$obligeeCellPhone = $form_data['field'][20];
$obligeeRelationshipToChildren = $form_data['field'][22];
$employerNameArray = $form_data['field'][23];
$employerName = implode(" ", $employerNameArray);
$employerAddressArray = $form_data['field'][24];
$employerAddress = implode(", ", $employerAddressArray);

//obligor/custodial parent information
$FVPApplicable2Array = $form_data['field'][27];
$FVPApplicable2 = implode(" ", $FVPApplicable2Array);
$obligorNameArray = $form_data['field'][28];
$obligorName = implode(" ", $obligorNameArray);
$obligorDoB = $form_data['field'][29];
$obligorSSN = $form_data['field'][30];
$obligorAdressArray = $form_data['field'][31];
$obligorAdress = implode(" ", $obligorAdressArray);
$obligorSex = $form_data['field'][32];
$obligorDriversLicense = $form_data['field'][33];
$obligorHomePhone = $form_data['field'][34];
$obligorWorkPhone = $form_data['field'][35];
$obligorCellPhone = $form_data['field'][36];
$obligorRelationshipToChildren = $form_data['field'][37];
$employerONameArray = $form_data['field'][38];
$employerName = implode(" ", $employerNameArray);
$employerOAddressArray = $form_data['field'][39];
$employerOAddress = implode(" ", $employerOAddressArray);

//dependent information

//Child(ren) information will be changed to dependents

//get the form ids for the children from the children field.
$dependentArrayID = $form_data['field'][49];

//get amount of characters in children field. 3 = 1 child, 7 = 2 child etc. is X+1 as theres a coma.
$dependentrenAmount = strlen($dependentArrayID);

//is able to get the last form id
$dependentArrayCalc = substr($dependentArrayID, -3);
//turns it into an int
$dependentArrayLast = $dependentArrayCalc + 0;
//substracts 1 to get the next data set
$dependentArrayID2 = (int) $dependentArrayCalc - 1;

$dependentArrayID3 = (int) $dependentArrayID2 - 1;
$dependentArrayID4 = (int) $dependentArrayID3 - 1;
$dependentArrayID5 = (int) $dependentArrayID4 - 1;
$dependentArrayID6 = (int) $dependentArrayID5 - 1;
$dependentArrayID7 = (int) $dependentArrayID6 - 1;
$dependentArrayID8 = (int) $dependentArrayID7 - 1;
$dependentArrayID9 = (int) $dependentArrayID8 - 1;
$dependentArrayID10 = (int) $dependentArrayID9 - 1;

//gets the nested form id, used the entry id from dependentArray to find the right details
$form_id = '49';
$entry = GFAPI::get_entry($dependentArrayLast);
$form_id = '49';
$entry2 = GFAPI::get_entry($dependentArrayID2);
$form_id = '49';
$entry3 = GFAPI::get_entry($dependentArrayID3);
$form_id = '49';
$entry4 = GFAPI::get_entry($dependentArrayID4);
$form_id = '49';
$entry5 = GFAPI::get_entry($dependentArrayID5);
$form_id = '49';
$entry6 = GFAPI::get_entry($dependentArrayID6);
$form_id = '49';
$entry7 = GFAPI::get_entry($dependentArrayID7);
$form_id = '49';
$entry8 = GFAPI::get_entry($dependentArrayID8);
$form_id = '49';
$entry9 = GFAPI::get_entry($dependentArrayID9);
$form_id = '49';
$entry10 = GFAPI::get_entry($dependentArrayID10);

//$dependentName = array_search("11062000",$entry);
$dependentGender = $form_data['field'][6]; // dependent's SEX
$dependentBirthdate = $form_data['field'][7]; // dependent's birthdate

//The array keys for the nested form are in decimals which it doesn't like when entered "$entry[2.1]2 but setting it as a $variable works'
$arraydependentFirst = '2.3';
//$arraydependentMiddle = '1.4';
$arraydependentLast = '2.6';
$arraydependentGen = '3';
$arraydependentBirth = '4';
$arrayDependantSS = '5';
//$birthCity = '4.3';
//$birthRegion = '4.4';
//$birthCountry = '4.5';
//$priorFirst = '5.5';
//$priorLast = '5.6';

//Attonrey information

$obligeeAttorneyNameArray = $form_data['field'][44]; //OBLIGEE
$obligeeAttorneyName = implode(" ", $obligeeAttorneyNameArray);
$obligeeAttorneyPhone = $form_data['field'][45];
$obligorAttorneyNameArray = $form_data['field'][46]; //obligor
$obligorAttorneyName = implode(" ", $obligorAttorneyNameArray);
$obligorAttorneyPhone = $form_data['field'][47];

/* VARIABLES END
 *********************************************************************************************************** */
?>
<bookmark content="Record of Support" />

<div class="title"> Record Of Support
</div>
<div class="paragraphborder">This form is used by counties to provide the record of support data needed by the state
  case registry as required
  by the Texas Family Code � 105.008. (Counties may use the TXCSES Web Portal to provide this information
  in lieu of completing this form.) Send the completed form to the State Case Registry/County Contact Team by
  fax 877-924-6872, e-mail <u>csd-sdu@texasattorneygeneral.gov</u> , or mail to TxCSDU, P.O. Box 659400, San
  Antonio, TX 78265.
</div>

<div class="paragraphborderfill text_align_center"> Order Information
</div>

<div class="paragraphborder">
  <div class="paragraphleftborder" style="width: 230px;"> County Name: <?php echo $county ?>
  </div>

  <div class="paragraphleftborder" style="width: 163px;">Court Number: <?php echo $courtNo ?>
  </div>

  <div class="paragraphrightborder" style="width: 200px;">Cause Number: <?php echo $caseNo ?>
  </div>
</div>
<div class="paragraphborder">
  <div class="paragraphleftborder" style="width: 200px;"> Attorney General Case Number: <?php echo $attorneyGenCaseNo ?>
  </div>


  <div class="paragraphleftborder" style="width: 193px;"> Date of Hearing: <?php echo $dateOfHearing ?>
  </div>


  <div class="paragraphrightborder" style="width: 200px;"> Order Sign Date: <?php echo $orderSignDate ?>
  </div>
</div>
<div class="paragraphborder text_align_center"> <?php if ($orderType == 'New Order') {

    echo "Order Type: &emsp; &#9746; New Order &emsp; &#9744; Modified Order";
} else if ($orderType == 'Modified Order') {

    echo "Order Type: &emsp; &#9744; New Order &emsp; &#9746; Modified Order";

}?>
</div>
<div class="paragraphborder text_align_center"><?php if ($paymentLocation == 'SDU') {

    echo "Payment Location: &emsp; &#9746; SDU &emsp; &#9744; County &emsp; &#9744; Other";
} else if ($paymentLocation == 'County') {

    echo "Payment Location: &emsp; &#9744; SDU &emsp; &#9746; County &emsp; &#9744; Other";

} else if ($paymentLocation == 'Other') {

    echo "Payment Location: &emsp; &#9744; SDU &emsp; &#9744; County &emsp; &#9746; Other";

}?>

</div>
</div>

<!----- OBLIGEE -------->
<div class="paragraphborderfill text_align_center"> Obligee/Custodial Parent Information
</div>
<div class="paragraphborder">
  <div class="paragraphborder">&#9744;Family Violence Protection (FV) (Check if individual below is a victim of family
    violence)
  </div>

  <div class="paragraphleftborder" style="width: 200px;"> Name: <?php echo $obligeeName ?>
  </div>
  <div class="paragraphcenterborder">Date Of Birth: <?php echo $obligeeDoB ?>
  </div>
  <div class="paragraphrightborder">Social Security Number: <?php echo $obligeeSSN ?>
  </div>
  <div class="paragraphborder"> Address:
    <?php echo $obligeeAdressArray['street'] . " " . $obligeeAdressArray['street2']
    . " City: " . $obligeeAdressArray['city'] . " State: " . $obligeeAdressArray['state'] . " Zip: " . $obligeeAdressArray['zip']; ?>
  </div>

  <div class="paragraphleftborder" style="width: 200px;"><?php if ($obligeeSex === 'Male') {

    echo "Sex:  &emsp; &#9746; Male &emsp; &#9744; Female";

} else if ($obligeeSex === 'Female') {

    echo "Sex:  &emsp; &#9744; Male &emsp; &#9746; Female";

}?>
  </div>
  <div class="paragraphrightborder" style="width: 395px;">Driver's Licence Number: <?php echo $obligeeDriversLicense ?>
  </div>



  <div class="paragraphleftborder" style="width: 130px; ">Home Phone: <?php echo $obligeeHomePhone ?>
  </div>

  <div class="paragraphleftborder" style="width: 130px; ">Work Phone: <?php echo $obligeeWorkPhone ?>
  </div>

  <div class="paragraphleftborder" style="width: 129px; ">Cell Phone: <?php echo $obligeeCellPhone ?>
  </div>

  <div class="paragraphrightborder" style="width: 202px;">Relationship to Child(ren):
    <?php echo $obligeeRelationshipToChildren ?>
  </div>

  <div class="paragraphborder"> Employer Name: <?php echo $employerName ?>
  </div>

  <div class="paragraphborder"> Address:
    <?php echo $employerAdressArray['street'] . " " . $employerAdressArray['street2']
    . " City: " . $employerAdressArray['city'] . " State: " . $employerAdressArray['state'] . " Zip: " . $employerAdressArray['zip']; ?>
  </div>

</div>

<!---- OBLIGOR -------->
<div class="paragraphborderfill text_align_center"> Obligor/Non-Custodial Parent Information
</div>
<div class="paragraphborder">
  <div class="paragraphborder">&#9744;Family Violence Protection (FV) (Check if individual below is a victim of family
    violence)
  </div>

  <div class="paragraphleftborder" style="width: 200px;"> Name: <?php echo $obligorName ?>
  </div>
  <div class="paragraphcenterborder">Date Of Birth: <?php echo $obligorDoB ?>
  </div>
  <div class="paragraphrightborder">Social Security Number: <?php echo $obligorSSN ?>
  </div>
  <div class="paragraphborder"> Address:
    <?php echo $obligorAdressArray['street'] . " " . $obligorAdressArray['street2']
    . " City: " . $obligorAdressArray['city'] . " State: " . $obligorAdressArray['state'] . " Zip: " . $obligorAdressArray['zip']; ?>
  </div>

  <div class="paragraphleftborder" style="width: 200px;"><?php if ($obligorSex === 'Male') {

    echo "Sex:  &emsp; &#9746; Male &emsp; &#9744; Female";

} else if ($obligorSex === 'Female') {

    echo "Sex:  &emsp; &#9744; Male &emsp; &#9746; Female";

}?>
  </div>
  <div class="paragraphrightborder" style="width: 395px;">Driver's Licence Number: <?php echo $obligorDriversLicense ?>
  </div>

</div>

<div class="paragraphborder">

  <div class="paragraphleftborder" style="width: 130px; ">Home Phone: <?php echo $obligorHomePhone ?>
  </div>

  <div class="paragraphleftborder" style="width: 130px; ">Work Phone: <?php echo $obligorWorkPhone ?>
  </div>

  <div class="paragraphleftborder" style="width: 129px; ">Cell Phone: <?php echo $obligorCellPhone ?>
  </div>

  <div class="paragraphrightborder" style="width: 202px;">Relationship to Child(ren):
    <?php echo $obligorRelationshipToChildren ?>
  </div>

  <div class="paragraphborder"> Employer Name: <?php echo $employerName ?>
  </div>

  <div class="paragraphborder"> Address:
    <?php echo $employerOAddressArray['street'] . " " . $employerOAddressArray['street2']
    . " City: " . $employerOAddressArray['city'] . " State: " . $employerOAddressArray['state'] . " Zip: " . $employerOAddressArray['zip']; ?>
  </div>

</div>

<!------- -->


<div class="paragraphborderfill text_align_center"> Dependent Information
</div>

<div class="paragraphborder">
  <div class="paragraphborder">&#9744;Family Violence Protection (FV) (Check if individual below is a victim of family
    violence)
  </div>

  <!---- for the dependents ---->
  <div class="paragraphborder"><?php
if ($dependentrenAmount === 39) {
    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry[$arraydependentFirst] . " " . $entry[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry[$arrayDependantSS]
        . '</div>'
    ;
    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry2[$arraydependentFirst] . " " . $entry2[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry2[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry2[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry2[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry3[$arraydependentFirst] . " " . $entry3[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry3[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry3[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry3[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry4[$arraydependentFirst] . " " . $entry4[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry4[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry4[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry4[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry5[$arraydependentFirst] . " " . $entry5[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry5[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry5[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry5[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry6[$arraydependentFirst] . " " . $entry6[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry6[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry6[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry6[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry7[$arraydependentFirst] . " " . $entry7[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry7[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry7[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry7[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry8[$arraydependentFirst] . " " . $entry8[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry8[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry8[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry8[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry9[$arraydependentFirst] . " " . $entry9[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry9[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry9[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry9[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry10[$arraydependentFirst] . " " . $entry10[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry10[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry10[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry10[$arrayDependantSS]
        . '</div>'
    ;

} else if ($dependentrenAmount === 35) {
    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry[$arraydependentFirst] . " " . $entry[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry[$arrayDependantSS]
        . '</div>'
    ;
    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry2[$arraydependentFirst] . " " . $entry2[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry2[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry2[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry2[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry3[$arraydependentFirst] . " " . $entry3[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry3[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry3[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry3[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry4[$arraydependentFirst] . " " . $entry4[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry4[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry4[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry4[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry5[$arraydependentFirst] . " " . $entry5[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry5[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry5[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry5[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry6[$arraydependentFirst] . " " . $entry6[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry6[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry6[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry6[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry7[$arraydependentFirst] . " " . $entry7[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry7[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry7[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry7[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry8[$arraydependentFirst] . " " . $entry8[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry8[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry8[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry8[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry9[$arraydependentFirst] . " " . $entry9[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry9[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry9[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry9[$arrayDependantSS]
        . '</div>'
    ;

} else if ($dependentrenAmount === 31) {
    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry[$arraydependentFirst] . " " . $entry[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry[$arrayDependantSS]
        . '</div>'
    ;
    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry2[$arraydependentFirst] . " " . $entry2[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry2[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry2[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry2[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry3[$arraydependentFirst] . " " . $entry3[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry3[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry3[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry3[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry4[$arraydependentFirst] . " " . $entry4[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry4[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry4[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry4[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry5[$arraydependentFirst] . " " . $entry5[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry5[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry5[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry5[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry6[$arraydependentFirst] . " " . $entry6[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry6[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry6[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry6[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry7[$arraydependentFirst] . " " . $entry7[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry7[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry7[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry7[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry8[$arraydependentFirst] . " " . $entry8[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry8[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry8[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry8[$arrayDependantSS]
        . '</div>'
    ;

} else if ($dependentrenAmount === 27) {
    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry[$arraydependentFirst] . " " . $entry[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry[$arrayDependantSS]
        . '</div>'
    ;
    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry2[$arraydependentFirst] . " " . $entry2[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry2[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry2[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry2[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry3[$arraydependentFirst] . " " . $entry3[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry3[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry3[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry3[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry4[$arraydependentFirst] . " " . $entry4[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry4[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry4[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry4[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry5[$arraydependentFirst] . " " . $entry5[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry5[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry5[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry5[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry6[$arraydependentFirst] . " " . $entry6[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry6[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry6[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry6[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry7[$arraydependentFirst] . " " . $entry7[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry7[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry7[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry7[$arrayDependantSS]
        . '</div>'
    ;
} else if ($dependentrenAmount === 23) {
    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry[$arraydependentFirst] . " " . $entry[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry[$arrayDependantSS]
        . '</div>'
    ;
    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry2[$arraydependentFirst] . " " . $entry2[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry2[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry2[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry2[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry3[$arraydependentFirst] . " " . $entry3[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry3[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry3[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry3[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry4[$arraydependentFirst] . " " . $entry4[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry4[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry4[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry4[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry5[$arraydependentFirst] . " " . $entry5[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry5[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry5[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry5[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry6[$arraydependentFirst] . " " . $entry6[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry6[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry6[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry6[$arrayDependantSS]
        . '</div>'
    ;
} else if ($dependentrenAmount === 19) {
    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry[$arraydependentFirst] . " " . $entry[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry[$arrayDependantSS]
        . '</div>'
    ;
    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry2[$arraydependentFirst] . " " . $entry2[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry2[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry2[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry2[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry3[$arraydependentFirst] . " " . $entry3[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry3[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry3[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry3[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry4[$arraydependentFirst] . " " . $entry4[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry4[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry4[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry4[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry5[$arraydependentFirst] . " " . $entry5[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry5[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry5[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry5[$arrayDependantSS]
        . '</div>'
    ;
} else if ($dependentrenAmount === 15) {
    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry[$arraydependentFirst] . " " . $entry[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry[$arrayDependantSS]
        . '</div>'
    ;
    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry2[$arraydependentFirst] . " " . $entry2[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry2[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry2[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry2[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry3[$arraydependentFirst] . " " . $entry3[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry3[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry3[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry3[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry4[$arraydependentFirst] . " " . $entry4[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry4[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry4[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry4[$arrayDependantSS]
        . '</div>'
    ;

} else if ($dependentrenAmount === 11) {
    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry[$arraydependentFirst] . " " . $entry[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry[$arrayDependantSS]
        . '</div>'
    ;
    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry2[$arraydependentFirst] . " " . $entry2[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry2[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry2[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry2[$arrayDependantSS]
        . '</div>'
    ;

    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry3[$arraydependentFirst] . " " . $entry3[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry3[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry3[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry3[$arrayDependantSS]
        . '</div>'
    ;

} else if ($dependentrenAmount === 7) {
    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry[$arraydependentFirst] . " " . $entry[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry[$arrayDependantSS]
        . '</div>'
    ;
    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry2[$arraydependentFirst] . " " . $entry2[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry2[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry2[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry2[$arrayDependantSS]
        . '</div>'
    ;

} else if ($dependentrenAmount === 3) {
    echo
        '<div class = "paragraphleftborder" style = "width: 150px;">Name:' . $entry[$arraydependentFirst] . " " . $entry[$arraydependentLast]
        . '</div>' .
        '<div class = "paragraphleftborder" style = "width: 100px;">Sex: ' . $entry[$arraydependentGen] .
        '</div>'
        . '<div class = "paragraphleftborder" style = "width: 139px;">Date of Birth: ' . $entry[$arraydependentBirth]
        . '</div>'
        . '<div class = "paragraphrightborder" style = "width: 200px;">Social Security Number: ' . $entry[$arrayDependantSS]
        . '</div>'
    ;

}?>

  </div>
</div>
<!---- end of dependents ---->
<br>

<!--- ATTORNEY INFORMATION ---->
<div class="paragraphborderfill text_align_center">Attorney Information
</div>

<div class="paragraphborder">

  <div class="paragraphleftborder" style="width: 147px;">Obligee Attorney: <?php echo $obligeeAttorneyName ?>
  </div>
  <div class="paragraphleftborder" style="width: 147px;">Phone: <?php echo $obligeeAttorneyPhone ?>
  </div>
  <div class="paragraphleftborder" style="width: 147px;">Obligor Attorney: <?php echo $obligorAttorneyName ?>
  </div>
  <div class="paragraphrightborder" style="width: 149px;">Phone: <?php echo $obligorAttorneyPhone ?>
  </div>

</div>

<!------- -->
<br>
<div class="paragraph"> Form prepared by:_____________ &emsp; Phone: &emsp; Date:
</div>