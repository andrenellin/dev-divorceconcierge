<?php

/*
 * Template Name: Petition for Divorce Agreement
 * Version: 1.0.0
 * Description: A print-friendly template displaying the Petition for Divorce
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

.column_left_half,
.column_right_half {
  width: 49%;
}

.section_number {
  width: 20mm;
  font-style: italic;
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

.indent-paragraph {
  text-indent: 20.5mm;
}

.paragraph {
  line-height: 2;
}

.text_align_center {
  text-align: center;
}

.text_align_right {
  text-align: right;
}

/* SIGNATURE FIELDS */
.height_max {
  height: 30mm;
}

/* HEADERS or PAGE */
@page {
  size: 8.5in 11in;
  margin: 20mm 20mm 10mm 20mm;
  header: html_MyCustomHeader;
  line-height: 1.3;
  /* display <htmlpageheader name="MyCustomHeader"> on all pages */
}

/* FOOTERS */
@page {
  footer: html_MyCustomFooter;
  /* display <htmlpagefooter name="MyCustomFooter"> on all pages */
  margin-footer: 10mm;
}
</style>
<!-- STYLES END -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!-- HEADER / FOOTER -->
<htmlpagefooter name="MyCustomFooter">
  <table class="footer">
    <tr class="paragraph">
      <td class="footer_left_half"><span class="bs_bold">ORIGINAL PETITION FOR DIVORCE</span></td>
      <td class="footer_right_half text_align_right"><span class="bs_bold">PAGE {PAGENO}</span></td>
    </tr>
  </table>
</htmlpagefooter>
<!-- HEADR FOOTER END -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<?php
/* *********************************************************************
 * VARIABLES
 ******************************************************************** */
$date_today = new \DateTime();

// Generic variables used in searching gravity form entries

// Get Entry Id's of previous submissions
$entry_id_data_prequal = $form_data['field'][310];
$entry_id_data_personal = $form_data['field'][308];
$entry_id_data_spouse = $form_data['field'][309];

// Get Entry from previous submissions Submission
$entry_data_prequal = gfapi::get_entry($entry_id_data_prequal);
$entry_data_personal = gfapi::get_entry($entry_id_data_personal);
$entry_data_spouse = gfapi::get_entry($entry_id_data_spouse);

// print '<pre>';
// print_r($entry_data_spouse);
// print '</pre>';

// SPOUSE A
$spouse_a = strtoupper($entry_data_personal[29]);
$spouse_a_gender = strtoupper($entry_data_personal[3]);
$spouse_a_drivers_license = strtoupper($entry_data_personal[12]);
$spouse_a_drivers_license_formatted = substr($spouse_a_drivers_license, -3);
$spouse_a_ssn = strtoupper($entry_data_personal[13]);
$spouse_a_ssn_formatted = substr($spouse_a_ssn, -3);
$spouse_a_address_street_1 = strtoupper($entry_data_personal[6.1]);
$spouse_a_address_street_2 = strtoupper($entry_data_personal[6.2]);
$spouse_a_address_city = strtoupper($entry_data_personal[6.3]);
$spouse_a_address_state = strtoupper($entry_data_personal[6.4]);
$spouse_a_address_zip = strtoupper($entry_data_personal[6.5]);
$spouse_a_email = strtoupper($entry_data_personal[7]);
$spouse_a_phone_mobile = strtoupper($entry_data_personal[8]);
$spouse_a_phone_work = strtoupper($entry_data_personal[9]);
$spouse_a_county = strtoupper($entry_data_prequal[45]);

// SPOUSE B
$spouse_b = strtoupper($entry_data_spouse[30]);
$spouse_b_gender = strtoupper($entry_data_spouse[17]);
$spouse_b_drivers_license = strtoupper($entry_data_spouse[18]);
$spouse_b_drivers_license_formatted = substr($spouse_b_drivers_license, -3);
$spouse_b_ssn = strtoupper($entry_data_spouse[19]);
$spouse_b_ssn_formatted = substr($spouse_b_ssn, -3);
$spouse_b_address_street_1 = strtoupper($entry_data_spouse[20.1]);
$spouse_b_address_street_2 = strtoupper($entry_data_spouse[20.2]);
$spouse_b_address_city = strtoupper($entry_data_spouse[20.3]);
$spouse_b_address_state = strtoupper($entry_data_spouse[20.4]);
$spouse_b_address_zip = strtoupper($entry_data_spouse[20.5]);
$spouse_b_email = strtoupper($entry_data_spouse[21]);
$spouse_b_phone_mobile = strtoupper($entry_data_spouse[22]);
$spouse_b_phone_work = strtoupper($entry_data_spouse[23]);
$spouse_b_county = strtoupper($entry_data_spouse[50]);

// MARITAL ESTATE VALUE
$marital_estate_value_greater_than_250k = $form_data['field'][273];
if ($marital_estate_value_greater_than_250k == 'No') {
    $discovery_level_paragraph = "Discovery in this case is intended to be conducted under level 1 of rule 190 of the Texas Rules of Civil Procedure.  No children are involved in this divorce case, and the value of the marital estate is more than zero but not more than $250,000.";

} else {
    $discovery_level_paragraph = "Discovery in this case is intended to be conducted under level 2 of rule 190 of the Texas Rules of Civil Procedure.";
}

// MARRIAGE DETAILS
$date_marriage = $form_data['field'][11];
$residence_stay_together = $form_data['field'][34];
$residence_separated_date = $form_data['field'][35];
if ($residence_stay_together == 'No') {
    $date_separation = $residence_separated_date;
} else {
    $date_separation = date("m-d-Y");
}

$name_change = $form_data['field'][41];
$name_change_who = strtoupper($form_data['field'][42]);
$marital_estate_value = $form_data['field'][44];

// PETITION
$petitioner = strtoupper($form_data['field'][31]);
if ($petitioner == $spouse_a) {
    $respondent = $spouse_b;
} else {
    $respondent = $spouse_a;
}

// COUNTY
if ($petitioner == $spouse_a && $spouse_a_county != '') {
    $county = $spouse_a_county;
} elseif ($petitioner == $spouse_b && $spouse_b_county != '') {
    $county = $spouse_b_county;
} elseif ($spouse_a_county != '') {
    $county = $spouse_a_county;
} else {
    $county = $spouse_b_county;
}

// NAME CHANGE
if ($name_change == 'Yes') {

    // GET FIRST AND MIDDLE NAMES
    if ($name_change_who == $spouse_a) {
        $name_change_first_name = strtoupper($form_data['field'][2]['first']);
        $name_change_middle_name = strtoupper($form_data['field'][2]['middle']);
    } else {
        $name_change_first_name = strtoupper($form_data['field'][16]['first']);
        $name_change_middle_name = strtoupper($form_data['field'][16]['middle']);
    }

    // CHANGE LAST NAME TO
    $name_change_last_name = strtoupper($form_data['field'][45]['last']);
}

// NAME CHANGE
/* ***********************************************************************************************************

 * VARIABLES END
 *********************************************************************************************************** */
?>
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!-- PAGE 1 -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->



<!-- --------------------------------------------------------------------------------------------------------------- -->
<div class="text_align_center bs_bold">NO.__________________________________________</div>
<br>

<!-- INTRO HEADER -->
<table class="INTRO">
  <tr class="paragraph">
    <td class="column_left_half"><span class="bs_bold">IN THE MATTER OF</span></td>
    <td class="column_right_half"><span class="bs_bold">&sect; IN THE DISTRICT OF</span></td>
  </tr>
  <tr class="paragraph">
    <td class="column_left_half"><span class="bs_bold">IN THE MARRIAGE OF</span></td>
    <td class="column_right_half"><span class="bs_bold">&sect; &nbsp;</span></td>
  </tr>
  <tr class="paragraph">
    <td class="column_left_half"><span class="bs_bold">&nbsp;</span></td>
    <td class="column_right_half"><span class="bs_bold">&sect; &nbsp;</span></td>
  </tr>
  <tr class="paragraph">
    <td class="column_left_half"><span class="bs_bold"><?php echo $petitioner; ?></span></td>
    <td class="column_right_half"><span class="bs_bold">&sect; _______ JUDICIAL DISTRICT</span></td>
  </tr>
  <tr class="paragraph">
    <td class="column_left_half"><span class="bs_bold">AND</span></td>
    <td class="column_right_half"><span class="bs_bold">&sect; &nbsp;</span></td>
  </tr>
  <tr class="paragraph">
    <td class="column_left_half"><span class="bs_bold"><?php echo $respondent; ?></span></td>
    <td class="column_right_half"><span class="bs_bold">&sect; <?php echo $county; ?>, TEXAS</span></td>
  </tr>
</table>
<br>
<div class="text_align_center bs_bold paragraph">ORIGINAL PETITION FOR DIVORCE</div>
<br>

<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- 1 DISCOVERY -->
<table>
  <tr class="paragraph">
    <td class="section_number"><span class="bs_italic">1. </span></td>
    <td class="section-heading"><span class="bs_italic">Discovery Level</span></td>
  </tr>
</table>

<div class="section_content paragraph indent-paragraph"><?php echo $discovery_level_paragraph ?></div>

<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- 2 PARTIES -->
<table>
  <tr class="paragraph">
    <td class="section_number"><span class="bs_italic">2. </span></td>
    <td class="section-heading"><span class="bs_italic">Parties</span></td>
  </tr>
</table>

<div class="section_content paragraph indent-paragraph">This suit is brought by <?php echo $petitioner ?>, Petitioner.
  The last three numbers of Petitioner's driver's license number are
  <!-- php start -->
  <?php
if ($petitioner == $spouse_a) {
    echo $spouse_a_drivers_license_formatted;
} else {
    echo $spouse_b_drivers_license_formatted;
}
?>.
  The last three numbers of Petitioner's Social Security number are
  <?php
if ($petitioner == $spouse_a) {
    echo $spouse_a_ssn_formatted;
} else {
    echo $spouse_b_ssn_formatted;
}
?>.
  <!-- php end -->
</div>
<div class="section_content paragraph indent-paragraph"><?php echo $respondent ?> is Respondent.</div>


<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- 3 DOMICILE -->
<table>
  <tr class="paragraph">
    <td class="section_number"><span class="bs_italic">3. </span></td>
    <td class="section-heading"><span class="bs_italic">Domicile</span></td>
  </tr>
</table>
<div class="section_content paragraph indent-paragraph">Petitioner has been a domiciliary of Texas for the preceding
  six-month
  period and a resident of this county for the preceding ninety-day period.</div>


<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- 4 SERVICE -->
<table>
  <tr class="paragraph">
    <td class="section_number"><span class="bs_italic">4. </span></td>
    <td class="section-heading"><span class="bs_italic">Service</span></td>
  </tr>
</table>
<div class="section_content paragraph indent-paragraph">No service on Respondent is necessary at this time.</div>


<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!-- PAGE 2 -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<pagebreak />

<!-- --------------------------------------------------------------------------------------------------------------- -->

<!-- 5 PROTECTIVE ORDER STATEMENT -->
<table>
  <tr class="paragraph">
    <td class="section_number"><span class="bs_italic">5. </span></td>
    <td class="section-heading"><span class="bs_italic">Protective Order Statement</span></td>
  </tr>
</table>
<div class="section_content paragraph indent-paragraph">No protective order under title 4 of the Texas Family Code,
  protective
  order under subchapter A of Chapter 7B of the Texas Code of Criminal Procedure, or order for emergency protection
  under Article 17.292 of the Texas Code of Criminal Procedure is in effect in regard to a party to this suit and no
  application for any such order is pending.</div>

<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- 6 DATES OF MARRIAGE & SEPARATION -->
<table>
  <tr class="paragraph">
    <td class="section_number"><span class="bs_italic">6. </span></td>
    <td class="section-heading"><span class="bs_italic">Dates of Marriage and Separation</span></td>
  </tr>
</table>
<div class="section_content paragraph indent-paragraph">The parties were married on or about
  <?php echo $date_marriage ?> and
  ceased to live together as spouses on or about <?php echo $date_separation ?>.</div>


<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- 7 GROUNDS FOR DIVORCE -->
<table>
  <tr class="paragraph">
    <td class="section_number"><span class="bs_italic">7. </span></td>
    <td class="section-heading"><span class="bs_italic">Grounds for Divorce</span></td>
  </tr>
</table>
<div class="section_content paragraph indent-paragraph">The marriage has become insupportable because of discord or
  conflict of personalities between Petitioner and Respondent that destroys the legitimate ends of the marriage
  relationship and
  prevents any reasonable expectation of reconciliation.
</div>

<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- 8 CHILDREN OF MARRIAGE -->
<table>
  <tr class="paragraph">
    <td class="section_number"><span class="bs_italic">8. </span></td>
    <td class="section-heading"><span class="bs_italic">Children of Marriage</span></td>
  </tr>
</table>

<div class="section_content paragraph indent-paragraph">There is no child born or adopted of this marriage, and none is
  expected.
</div>

<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- 9 DIVISION OF COMMUNITY OF PROPERTY -->
<table>
  <tr class="paragraph">
    <td class="section_number"><span class="bs_italic">9. </span></td>
    <td class="section-heading"><span class="bs_italic">Division of Community Property</span></td>
  </tr>
</table>
<div class="section_content paragraph indent-paragraph">Petitioner believes Petitioner and Respondent will enter into an
  agreement
  for the division of their estate. If such an agreement is made, Petitioner requests the Court to approve the
  agreement and divide their estate in a manner consistent with the agreement. If such an agreement is not made,
  Petitioner requests the Court to divide their estate in a manner that the Court deems just and right, as provided by
  law.
</div>

<!-- 10 REQUEST FOR NAME CHANGE IF YES -->
<!-- php start -->
<?php if ($name_change == "Yes") {?>
<!-- php pause -->
<table>
  <tr class="paragraph">
    <td class="section_number"><span class="bs_italic">10. </span></td>
    <td class="section-heading"><span class="bs_italic">Request for Change of Name</span></td>
  </tr>
</table>
<div class="section_content paragraph indent-paragraph"><?php echo $name_change_who ?> requests a change of name to
  <?php echo $name_change_first_name . ' ' . $name_change_middle_name . ' ' . $name_change_last_name ?></div>

<!-- php resume -->
<?php }?>
<!-- php end -->

<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!-- PAGE 3 -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<pagebreak />
<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- 10 or 11 PRAYER -->
<!-- php start -->
<?php if ($name_change == "No") {?>
<!--php pause  -->
<table>
  <tr class="paragraph">
    <td class="section_number"><span class="bs_italic">10. </span></td>
    <td class="section-heading"><span class="bs_italic">Prayer</span></td>
  </tr>
</table>

<!-- php resume -->
<?php }?>
<!-- php end -->




<!-- php start -->
<?php if ($name_change == "Yes") {?>
<!--php pause  -->
<table>
  <tr class="paragraph">
    <td class="section_number"><span class="bs_italic">11. </span></td>
    <td class="section-heading"><span class="bs_italic">Prayer</span></td>
  </tr>
</table>
<!-- php resume -->
<?php }?>
<!-- php end -->


<div class="section_content paragraph indent-paragraph">Petitioner prays that citation and notice issue as required by
  law and
  that the Court grant a divorce and all other relief requested in this petition.</div>
<div class="section_content paragraph indent-paragraph">Petitioner prays that Petitioner's name be changed as requested
  above.
</div>

<!-- --------------------------------------------------------------------------------------------------------------- -->
<div class="height_max"></div>
<table class="SIGNATURES">
  <tr class="paragraph">
    <td class="column_left_half">&nbsp;</td>
    <td class="column_right_half">Respectfully submitted,</td>
  </tr>
  <tr class="paragraph">
    <td class="column_left_half">&nbsp;</td>
    <td class="column_right_half">&nbsp;</td>
  </tr>
  <tr class="paragraph">
    <td class="column_left_half">&nbsp;</td>
    <td class="column_right_half">THE RAMAGE LAW GROUP</td>
  </tr>
  <tr class="paragraph">
    <td class="column_left_half">&nbsp;</td>
    <td class="column_right_half">8951 Collin-McKinney Parkway</td>
  </tr>
  <tr class="paragraph">
    <td class="column_left_half">&nbsp;</td>
    <td class="column_right_half">Suite 1401</td>
  </tr>
  <tr class="paragraph">
    <td class="column_left_half">&nbsp;</td>
    <td class="column_right_half">McKinney, Texas, 75070</td>
  </tr>
  <tr class="paragraph">
    <td class="column_left_half">&nbsp;</td>
    <td class="column_right_half">Phone: 972-562-9890</td>
  </tr>
  <tr class="paragraph">
    <td class="column_left_half">&nbsp;</td>
    <td class="column_right_half">Fax: 972-377-8392</td>
  </tr>
  <tr class="paragraph">
    <td class="column_left_half">&nbsp;</td>
    <td class="column_right_half">Email: service@ramagelawfirm.com</td>
  </tr>
  <tr class="paragraph">
    <td class="column_left_half">&nbsp;</td>
    <td class="column_right_half">&nbsp;</td>
  </tr>
  <tr class="paragraph">
    <td class="column_left_half">&nbsp;</td>
    <td class="column_right_half">By: ________________________________</td>
  </tr>
  <tr class="paragraph">
    <td class="column_left_half">&nbsp;</td>
    <td class="column_right_half">SHARON M. RAMAGE</td>
  </tr>
  <tr class="paragraph">
    <td class="column_left_half">&nbsp;</td>
    <td class="column_right_half">SBOT: 13740100</td>
  </tr>
  <tr class="paragraph">
    <td class="column_left_half">&nbsp;</td>
    <td class="column_right_half">ATTORNEY FOR PETITIONER</td>
  </tr>
</table>