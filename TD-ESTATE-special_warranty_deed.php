<meta charset="UTF-8">
<?php

/*
 * Template Name: TD Special Warranty Deed
 * Version: 1.0.1
 * Description: A print-friendly template displaying the Special Warranty Deed
 * Author: Bliksem LLC
 * Author URI: https://simplifysmallbiz.com
 * Group: 0. Sort
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
  margin: 1in 1in 1in 1in;
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
  list-style-position: outside;
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
  font-size: 10pt;
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
  padding-left: 300px;
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

.section_content {
  margin-bottom: 5mm;
}

.text_align_left {
  text-align: left;
}

.text_align_center {
  text-align: center;
}

.text_align_right {
  text-align: right;
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
      <td class="footer_left_half"><span class="bs_bold bs_text_small">SPECIAL WARRANTY DEED</span></td>
      <td class="footer_right_half text_align_right"><span class="bs_bold bs_text_small">PAGE {PAGENO}</span></td>
    </tr>
  </table>
</htmlpagefooter>
<htmlpagefooter name="MyFooterStandingOrder">
</htmlpagefooter>
<!-- HEADR FOOTER END -->

<?php

/* Page 1
 ************ */

/* Section - Title, Date And Grantor
 ************************************** */
// VARIABLES
$dateOfFiling; //Jurisdiction or Today's date
$grantorName; //Tell Us About ... (will be determined by relevant form entry deciding who is grantor and grantee)
$grantorMailingAddress; // Tell Us About ...

$petitionerName = 'Jim Jimothy Jones'; //Tell Us About Yourself
$petitioner_upper = strtoupper($petitionerName);
$petitioner_mailing_address_street_1 = '123 Petitioner Street'; // Tell Us About Yourself
$petitioner_mailing_address_street_2 = 'Apt 123'; // Tell Us About Yourself
$petitioner_mailing_address_city = 'Plano'; // Tell Us About Yourself
$petitioner_mailing_address_state = 'Texas'; // Tell Us About Yourself
$petitioner_mailing_address_zip = '75093'; // Tell Us About Yourself

if ($petitioner_mailing_address_street_2 == '') {
    $petitioner_mailing_address_street = $petitioner_mailing_address_street_1;
} else {
    $petitioner_mailing_address_street = $petitioner_mailing_address_street_1 . ', ' . $petitioner_mailing_address_street_2;
}

$respondentName = 'Jane Janothy Jones'; //Tell Us About Your Spouse
$respondent_upper = strtoupper($respondentName);
$respondent_mailing_address_street_1 = '321 Respondent Street'; // Tell Us About Yourself
$respondent_mailing_address_street_2 = 'Apt 321'; // Tell Us About Yourself
$respondent_mailing_address_city = 'Prosper'; // Tell Us About Yourself
$respondent_mailing_address_state = 'Texas'; // Tell Us About Yourself
$respondent_mailing_address_zip = '75009'; // Tell Us About Yourself

if ($respondent_mailing_address_street_2 == '') {
    $respondent_mailing_address_street = $respondent_mailing_address_street_1;
} else {
    $respondent_mailing_address_street = $respondent_mailing_address_street_1 . ', ' . $respondent_mailing_address_street_2;
}
$grantor = 'Petitioner';

//Condition: If the grantor is petitioner, fill the grantor variables with the petitioner's details and fill grantee details with respondent's details

if ($grantor = 'Petitioner') {
    $grantorName = $petitioner_upper;
    $grantorMailingAddress = $petitioner_mailing_address_street . ', ' . $petitioner_mailing_address_city . ', ' . $petitioner_mailing_address_state . ', ' . $petitioner_mailing_address_zip;

    $granteeName = $respondent_upper;
    $granteeMailingAddress = $respondent_mailing_address_street . ', ' . $respondent_mailing_address_city . ', ' . $respondent_mailing_address_state . ', ' . $respondent_mailing_address_zip;

} else {
    $grantorName = $respondent_upper;
    $grantorMailingAddress = $respondent_mailing_address_street . ', ' . $respondent_mailing_address_city . ', ' . $respondent_mailing_address_state . ', ' . $respondent_mailing_address_zip;

    $granteeName = $petitioner_upper;
    $granteeMailingAddress = $petitioner_mailing_address_street . ', ' . $petitioner_mailing_address_street_city . ', ' . $petitioner_mailing_address_state . ', ' . $petitioner_mailing_address_zip;

}

//OUTPUT
?>
<br>
<div class="paragraph text_align_center"><b>Special Warranty Deed</b>
</div>
<div class="paragraph"><b>Date: </b> <?php echo $dateOfFiling ?>
</div>
<div class="paragraph"><b>Grantor:</b> <?php echo $grantorName ?>
</div>
<div class="paragraph"><b>Grantor's Mailing Address: </b>
</div>
<div class="indent-paragraph"><?php echo $grantorMailingAddress ?>
</div>

<?php
/* Section - Grantee Details
 ************************************** */
// VARIABLES
$granteeName; //Tell Us About ...
$granteeMailingAddress; // Tell Us About ...

//OUTPUT
?>
<div class="paragraph"><b>Grantee:</b> <?php echo $granteeName ?>
</div>
<div class="paragraph"><b>Grantee's Mailing Address: </b>
</div>
<div class="indent-paragraph"><?php echo $granteeMailingAddress ?>
</div>

<?php
/* Section - Consideration
 ************************************** */
// VARIABLES
$judicialDistrict = 'Distict 9'; //Jurisdiction
$county = 'Colin'; //Jurisdiction
$causeNo = '12345'; //Jurisdiction

$originalNoteSpellOutValue = 'One Hundred and Three'; //Supporting Specific form
$originalNoteNumericValue = '??103'; //Supporting Specific form
$originalNoteDate = '01/01/1980'; //Supporting Specific form

$originalNotePayeeName = 'Barry Bannan'; //Supporting Specific form

$conditionBothSpousesOnNote = 'No'; //Supporting Specific form

$originalNoteLenderName = 'Danny Machete Trejo'; //Supporting Specific form
$deedOfTrustDate = '22/01/2022'; //Could possibly be the same data as $dateOfFiling
$originalNoteTrustee = 'Trustworthy Man One'; //Specific Supporting form
$deedOfTrustCounty = 'Colin'; //Specific Supporting Form OR possibly value of $county

$conditionIfChildren = 'Yes'; //Right For You

// Child 1
$children_entries[0]['2.3'] = 'Alice';
$children_entries[0]['2.4'] = 'Anne';
$children_entries[0]['2.6'] = 'Parker';
$children[0]['full_name'] = 'ALICE ANNE PARKER';
$children_entries[0][3] = 'Female';
$children_entries[0][4] = '2005-01-01';
$children_entries[0][6] = 'Yes';
// Child 2
$children_entries[1]['2.3'] = 'Bryce';
$children_entries[1]['2.4'] = 'Ben';
$children_entries[1]['2.6'] = 'Parker';
$children[1]['full_name'] = 'BRYCE BEN PARKER';
$children_entries[1][3] = 'Male';
$children_entries[1][4] = '2006-02-02';
$children_entries[1][6] = 'Yes';
// Child 3
$children_entries[2]['2.3'] = 'Cassie';
$children_entries[2]['2.4'] = 'Cheryl';
$children_entries[2]['2.6'] = 'Parker';
$children[2]['full_name'] = 'CASSIE CHERYL PARKER';
$children_entries[2][3] = 'Female';
$children_entries[2][4] = '2009-03-03';
$children_entries[2][6] = 'No';

$count_children_entries = 3;

$spouseOne = 'Petitioner'; //When real data used, will probably have a condition that states who is spouse 1 and 2 and based on that will place petitioner and respondent data into relevant variable

//IF spouse 1 is petitioner then fill $spouseOneName with petitioner's details and $spouseTwoName with respondent's name and vice versa

if ($spouseOne = 'Petitioner') {

    $spouseOneName = $petitioner_upper;
    $spouseTwoName = $respondent_upper;

} else {
    $spouseOneName = $respondent_upper;
    $spouseTwoName = $petitioner_upper;

}

/***** The following code will be used to get the children's names when real data is added to this script.
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
 */

//OUTPUT
?>
<div class="paragraph"><b>Consideration:</b>
</div>

<div class="indent-paragraph">The division of property ordered by the <?php echo $judicialDistrict ?> COURT of
  <?php echo $county ?> County, Texas,
  in Cause No. <?php echo $causeNo ?>, styled IN THE MATTER OF THE MARRIAGE OF <?php echo $petitionerName ?> AND
  <?php echo $respondentName ?>
  <!-- [CONDITION: IF CHILDREN then the following will show ---->

  <?php if ($conditionIfChildren == 'Yes' && $count_children_entries == 1) {
    echo 'AND IN THE INTEREST OF ' . $childName . ', CHILD';

} else if ($conditionIfChildren == 'Yes' && $count_children_entries > 1) {

    echo 'AND IN THE INTEREST OF ' . $children[0]['full_name'] . ', ' . $children[1]['full_name'] . ', ' . $children[2]['full_name'] . ', CHILDREN';

}
?>


  and ten dollars and other valuable consideration paid by Grantee,
  and Grantee's assumption of the unpaid principal and earned interest on the note in the original principal
  sum of <?php echo $originalNoteSpellOutValue ?> dollars (<?php echo $originalNoteNumericValue ?>) dated
  <?php echo $originalNoteDate ?>,
  executed by <?php echo $spouseOneName ?>

  <?php if ($conditionBothSpousesOnNote == 'Yes') {
    echo 'and' . $spouseTwoName;
}?>

  , And payable to the order of <?php echo $originalNotePayeeName ?>.
  The note is secured by a vendor's lien retained in a deed dated <?php echo $deedOfTrustDate ?>, from
  <?php echo $spouseOneName ?>
  <!---[CONDITION BOTH SPOUSES ON NOTE] ---->
  <?php if ($conditionBothSpousesOnNote == 'Yes') {

    echo 'and ' . $spouseTwoName;

}?>

  to <?php echo $originalNoteLenderName ?>, and additionally secured by a deed of trust
  dated <?php echo $deedOfTrustDate ?>, from <?php echo $spouseOneName ?>
  <!---[CNDITION BOTH ON NOTE] ---->
  <?php if ($conditionBothSpousesOnNote == 'Yes') {
    echo 'and ' . $spouseTwoName;
}?>

  to <?php echo $originalNoteTrustee ?>, Trustee, recorded in the official public records of real property of
  <?php echo $deedOfTrustCounty ?>
  County, Texas. Grantee agrees to indemnify and hold Grantor harmless from payment of the note and from performance of
  Grantor's
  obligations specified in the instruments securing payment of the note.
</div>

<?php

/* Section - Property (inlcuding any improvements)
 ************************************** */
// VARIABLES
$legalDescription = '?' //Not sure what this is
//OUTPUT
?>
<div class="paragraph"><b>Property (including any improvements):</b>
</div>
<div class="indent-paragraph"><?php echo $legalDescription ?>; ?>
</div>

<?php

/* Section - Reservations from Conveyance and Exceptions to Conveyance and Warranty and Conveyance
 ************************************** */
// VARIABLES

//OUTPUT
?>

<div class="paragraph"><b>Reservations from Conveyance and Exceptions to Conveyance and Warranty:</b>
</div>
<div class="indent-paragraph">This deed is subject to all easements, restrictions, conditions, covenants, and other
  instruments of record.
</div>
<div class="paragraph"><b>Conveyance:</b>
</div>
<div class="indent-paragraph">Grantor, for the consideration and subject to the reservations from conveyance and
  exceptions to conveyance and warranty, grants, sells, and conveys to Grantee all of Grantor's interest in the
  property, together with all and singular the rights and appurtenances thereto in any way belonging, to have and hold
  it to Grantee and Grantee's heirs, successors, and assigns forever. Grantor binds Grantor and Grantor's heirs and
  successors to warrant and forever defend all and singular the property to Grantee and Grantee's heirs, successors, and
  assigns against every person whomsoever lawfully claiming or to claim the same or any part thereof when the claim is
  by, through, or under Grantor but not otherwise, except as to the reservations from conveyance and exceptions to
  conveyance and warranty.
</div>
<div class="indent-paragraph">Grantor assigns to Grantee the casualty insurance policy on the property, all utility
  deposits for utility services at the property, and all funds held in escrow for payment of taxes and insurance
  premiums.
</div>
<div class="indent-paragraph">When the context requires, singular nouns and pronouns include the plural.
</div>
<div class="indent-paragraph">Grantee assumes all ad valorem taxes due on the property for the current year.
</div>

<?php

/* Section - Signing of Document
 ************************************** */
// VARIABLES
//$grantorName
//$granteeName
//$granteeMailingAddress
//$county

//OUTPUT
?>

<div class="paragraph text_align_right">__________________________________ <br>
  <?php echo $grantorName ?>
</div>
<div class="indent-paragraph-sub2 text_align_right"><i>This instrument was prepared based on information furnished by
    the parties, and no independent title search has been made.</i>
</div>
<div class="paragraph text_align_left">STATE OF TEXAS
</div>
<div class="paragraph text_align_left">COUNTY OF <?php echo $county ?>
</div>
<div class="indent-paragraph">This instrument was sworn and acknowledged before me on ____________________________ by
  <?php echo $grantorName ?>.
</div>
<div class="paragraph text_align_right">__________________________________<br>
  Notary Public, State of Texas
</div>
<div class="paragraph text_align_right"><b>AFTER RECORDING RETURN TO: </b>
</div>
<div class="paragraph text_align_right"><?php echo $granteeName ?><br>
  <?php echo $granteeMailingAddress ?>
</div>