<?php

/*
 * Template Name: Petition for Divorce Agreement
 * Version: 1.0.0
 * Description: A print-friendly template displaying the Petition for Divorce
 * Author: Bliksem LLC
 * Author URI: https://simplifysmallbiz.com
 * Group: ZZZ
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

@page standing-order {
  size: 8.5in 11in;
  margin: 0mm 0mm 0mm 0mm;
  header: ;
  line-height: 1.3;
  footer: MyFooterStandingOrder;
  margin-footer: 0mm;
}

/* FONTS */
body,
.bs_fontsize_normal {
  font-size: 12pt;
}

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

/* GENERAL */
.bs_bold {
  font-weight: bold;
}

.bs_italic {
  font-style: italic;
}

.bs_text_small {
  font-size: 12pt;
}

.image-standing_order {
  height: 255mm;
}

.indent-paragraph {
  text-indent: 10.5mm;
}

.paragraph {
  font-size: 12pt;
  line-height: 2;
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

.bs_underline {
  text-decoration: underline;
}


/* # TABLES */


/* ## Pleading Head Table */

.table_header_left_column,
.table_header_right_column {
  width: 44%;
}

.table_header_middle_column {
  width: 10%
}

/* ## Table to display section headings */
.section_number {
  width: 10mm;
  font-style: italic;
}

/* ## Table to display children of the marriage Section 8 */
/* .children-wrapper {
  margin-left: 10mm;
}
.child_label {
  width: 50mm;
}

.child_data {
  width: 50mm;
}
*/

/* ## Table to display signature fields */
.table_signature_left_column {
  width: 49%;
}


/* ## Footer Table */

.footer_left_half {
  width: 69%;
}

.footer_right_half {
  width: 30%;
}




/* SIGNATURE FIELDS */
.height_max {
  height: 10mm;
}
</style>

<body>
  <!-- STYLES END -->
  <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

  <!-- START VVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVV -->
  <!-- HEADER / FOOTER -->
  <htmlpagefooter name="MyCustomFooter">
    <table class="footer">
      <tr class="paragraph">
        <td class="footer_left_half"><span class="bs_bold bs_text_small">PETITION</span></td>
        <td class="footer_right_half text_align_right"><span class="bs_bold bs_text_small">PAGE {PAGENO}</span></td>
      </tr>
    </table>
  </htmlpagefooter>

  <htmlpagefooter name="MyFooterStandingOrder">
  </htmlpagefooter>
  <!-- HEADER FOOTER END -->
  <!-- END !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->

  <!-- START VVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVV -->
  <!-- Variables -->
  <?php
// CLIENT DETAILS
// $client_user_id = rgar($entry, 'created_by');

// IN THE MATTER OF / PARTIES
$petitioner = 'Peter Patrick Parker'; // Right For You
$petitioner_uppercase = strtoupper($petitioner);
$respondent = 'Rebecca Roxanne Parker'; // Right For You
$respondent_uppercase = strtoupper($respondent);

$county = strtoupper('Collin'); // Right For Youu

// 1 MARITAL ESTATE VALUE
$discovery_level_paragraph = "Discovery in this case is intended to be conducted under level 2 of rule 190 of the Texas Rules of Civil Procedure.";

// 2 PARTIES

$petitioner_ssn = '123-45-6789'; // Tell Us About Yourself
$petitioner_ssn_last_3 = substr($petitioner_ssn, -3);
$petitioner_drivers_license_number = strtoupper('dl123456'); // Tell Us About Yourself
$petitioner_drivers_license_number_last_3 = substr($petitioner_drivers_license_number, -3);

// 3 DOMICILE
$residency_requirement_party = 'Petitioner'; // Right For You

// 6 DATE OF MARRIAGE & SEPARATION
$date_marriage_raw = '2022-01-01'; // Lets Get Started
$date_marriage_string = strtotime($date_marriage_raw);
$date_marriage = date('F j, Y', $date_marriage_string);

$residence_stay_together = 'Yes'; // Lets Get Started

if ($residence_stay_together == 'No') {
    $date_of_separation_raw = '2022-02-20'; // [24.Date of separation]
    $date_of_separation_string = strtotime($date_of_separation_raw);
    $date_of_separation = date('F j, Y', $date_of_separation_string);
    $date_of_separation_content = ' ' . $date_of_separation;
} else {
    $date_of_separation_content = 'the date of the filing of this Original Petition for Divorce';
}

// 8 CHILDREN OF THE MARRIAGE

// $repeater_children_form_id = 14;
// $repeater_children_search_criteria['field_filters'][] = array('key' => 'created_by', 'value' => $client_user_id);
// $repeater_children_search_criteria['status'] = 'active';
// $repeater_children_sorting = array('key' => 'id', 'direction' => 'ASC', 'is_numeric' => true);
// $children_entries = GFAPI::get_entries($repeater_children_form_id, $repeater_children_search_criteria);

$children_entries = array();

// Child 1
$children_entries[0]['2.3'] = 'Alice';
$children_entries[0]['2.4'] = 'Anne';
$children_entries[0]['2.6'] = 'Parker';
$children_entries[0][3] = 'Female';
$children_entries[0][4] = '2005-01-01';
$children_entries[0][6] = 'Yes';
// Child 2
$children_entries[1]['2.3'] = 'Bryce';
$children_entries[1]['2.4'] = 'Ben';
$children_entries[1]['2.6'] = 'Parker';
$children_entries[1][3] = 'Male';
$children_entries[1][4] = '2006-02-02';
$children_entries[1][6] = 'Yes';
// Child 3
$children_entries[2]['2.3'] = 'Cassie';
$children_entries[2]['2.4'] = 'Cheryl';
$children_entries[2]['2.6'] = 'Parker';
$children_entries[2][3] = 'Female';
$children_entries[2][4] = '2009-03-03';
$children_entries[2][6] = 'No';

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

// 10 NAME CHANGE

$name_change_to = 'Rebecca Roxanne Rodell';
$name_change_requested = 'No'; // Lets Get Started
if ($name_change_requested == 'Yes') {
    $name_change_who = strtoupper($respondent); //

    if ($name_change_who == $petitioner) {
        $name_change_role = 'Petitioner';
    } else {
        $name_change_role = 'Respondent';
    }
    $name_change_to = strtoupper($name_change_to); // Lets Get Started
}

// MEMBERSHIP TYPE FOR SIGNATURE
$service = 'DYW'; // Right For You
$plan = 'It\'s Simple'; // Right For You

// SIGNATURE DETAILS FOR DYW (PRO SE )
$petitioner_street_1 = '123 Petitioner Street'; // Tell Us About Yourself
$petitioner_street_2 = 'Apt 123'; // Tell Us About Yourself
$petitioner_city = 'Plano'; // Tell Us About Yourself
$petitioner_state = 'Texas'; // Tell Us About Yourself
$petitioner_zip = '75093'; // Tell Us About Yourself
$petitioner_phone = '999-999-9991'; // Right For You
$petitioner_email = 'petitioner@email.com'; // Right For Your

if ($petitioner_street_2 == '') {
    $petitioner_street = $petitioner_street_1;
} else {
    $petitioner_street = $petitioner_street_1 . ', ' . $petitioner_street_2;
}

?>
  <!-- END !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->

  <!-- START VVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVV -->
  <!-- PAGE 1 -->

  <bookmark content="Original Petition for Divorce" />

  <!-- --------------------------------------------------------------------------------------------------------------- -->
  <div class="text_align_center bs_bold">NO.______________________</div>
  <br>
  <!-- INTRO HEADER -->
  <!-- NO CHILDREN -->
  <?php if ($count_children_entries == 0) {?>
  <table class="INTRO">
    <tr class="paragraph">
      <td class="table_header_column"><span class="bs_bold bs_fontsize_normal">IN THE MATTER OF</span></td>
      <td class="table_header_middle_column"><span class="bs_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_bold bs_fontsize_normal">IN THE DISTRICT OF</span></td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span class="bs_bold bs_fontsize_normal">IN THE MARRIAGE OF</span></td>
      <td class="table_header_middle_column"><span class="bs_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_right_column"><span class="bs_bold bs_fontsize_normal">&nbsp;</span></td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span class="bs_bold bs_fontsize_normal">&nbsp;</span></td>
      <td class="table_header_middle_column"><span class="bs_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_right_column"><span class="bs_bold bs_fontsize_normal">&nbsp;</span></td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span
          class="bs_bold bs_fontsize_normal"><?php echo $petitioner_uppercase; ?></span>
      </td>
      <td class="table_header_middle_column"><span class="bs_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_bold bs_fontsize_normal"> _______ JUDICIAL DISTRICT</span>
      </td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span class="bs_bold bs_fontsize_normal">AND</span></td>
      <td class="table_header_middle_column"><span class="bs_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_bold bs_fontsize_normal">&nbsp;</span></td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span
          class="bs_bold bs_fontsize_normal"><?php echo $respondent_uppercase; ?></span>
      </td>
      <td class="table_header_middle_column"><span class="bs_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span
          class="bs_bold bs_fontsize_normal"><?php echo strtoupper($county) . " COUNTY, TEXAS"; ?></span></td>
    </tr>
  </table>
  <?php }?>



  <!-- WITH CHILDREN -->
  <?php if ($count_children_entries > 0) {?>
  <table class="INTRO">
    <tr class="paragraph">
      <td class="table_header_left_column"><span class="bs_bold bs_fontsize_normal">IN THE MATTER OF</span></td>
      <td class="table_header_middle_column"><span class="bs_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_bold bs_fontsize_normal">IN THE DISTRICT OF</span></td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span class="bs_bold bs_fontsize_normal">IN THE MARRIAGE OF</span></td>
      <td class="table_header_middle_column"><span class="bs_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_bold bs_fontsize_normal">&nbsp;</span></td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span class="bs_bold bs_fontsize_normal">&nbsp;</span></td>
      <td class="table_header_middle_column"><span class="bs_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_bold bs_fontsize_normal">&nbsp;</span></td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span
          class="bs_bold bs_fontsize_normal"><?php echo $petitioner_uppercase; ?></span>
      </td>
      <td class="table_header_middle_column"><span class="bs_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_bold bs_fontsize_normal">&nbsp;</span></td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span class="bs_bold bs_fontsize_normal">AND</span></td>
      <td class="table_header_middle_column"><span class="bs_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_bold bs_fontsize_normal"> _______ JUDICIAL DISTRICT</span>
      </td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span
          class="bs_bold bs_fontsize_normal"><?php echo $respondent_uppercase; ?></span>
      </td>
      <td class="table_header_middle_column"><span class="bs_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_bold bs_fontsize_normal"></span>&nbsp;</td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span class="bs_bold bs_fontsize_normal">&nbsp;</span></td>
      <td class="table_header_middle_column"><span class="bs_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_bold bs_fontsize_normal">&nbsp;</span></td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span class="bs_bold bs_fontsize_normal">AND IN THE INTEREST OF</span></td>
      <td class="table_header_middle_column"><span class="bs_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_bold bs_fontsize_normal"></span>&nbsp;</td>
    </tr>
    <?php if ($count_children_entries == 1) {?>
    <tr class="paragraph">
      <td class="table_header_left_column"><span
          class="bs_bold bs_fontsize_normal"><?php echo strtoupper($children[0]['full_name']) ?>,</span></td>
      <td class="table_header_middle_column"><span class="bs_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_bold bs_fontsize_normal">&nbsp;</span></td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span class="bs_bold bs_fontsize_normal">
          A CHILD.</span></td>
      <td class="table_header_middle_column"><span class="bs_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span
          class="bs_bold bs_fontsize_normal"><?php echo $county . " COUNTY, TEXAS"; ?></span></td>
    </tr>

    <?php }

    if ($count_children_entries == 2) {?>
    <tr class="paragraph">
      <td class="table_header_left_column"><span
          class="bs_bold bs_fontsize_normal"><?php echo strtoupper($children[0]['full_name']) ?> AND
        </span></td>
      <td class="table_header_middle_column"><span class="bs_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_bold bs_fontsize_normal"></span>&nbsp;</td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span
          class="bs_bold bs_fontsize_normal"><?php echo strtoupper($children[1]['full_name']) ?>,</span></td>
      <td class="table_header_middle_column"><span class="bs_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_bold bs_fontsize_normal">&nbsp;</span></td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span class="bs_bold bs_fontsize_normal">
          CHILDREN.</span></td>
      <td class="table_header_middle_column"><span class="bs_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span
          class="bs_bold bs_fontsize_normal"><?php echo $county . " COUNTY, TEXAS"; ?></span></td>
    </tr>
    <?php }
    if ($count_children_entries == 3) {?>
    <tr class="paragraph">
      <td class="table_header_left_column"><span
          class="bs_bold bs_fontsize_normal"><?php echo strtoupper($children[0]['full_name']) ?>,
        </span></td>
      <td class="table_header_middle_column"><span class="bs_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_bold bs_fontsize_normal"></span>&nbsp;</td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span
          class="bs_bold bs_fontsize_normal"><?php echo strtoupper($children[1]['full_name']) ?> AND
        </span></td>
      <td class="table_header_middle_column"><span class="bs_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_bold bs_fontsize_normal"></span>&nbsp;</td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span
          class="bs_bold bs_fontsize_normal"><?php echo strtoupper($children[2]['full_name']) ?>,</span></td>
      <td class="table_header_middle_column"><span class="bs_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_bold bs_fontsize_normal">&nbsp;</span></td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span class="bs_bold bs_fontsize_normal">
          CHILDREN.</span></td>
      <td class="table_header_middle_column"><span class="bs_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_rheader_ight_column"><span
          class="bs_bold bs_fontsize_normal"><?php echo $county . " COUNTY, TEXAS"; ?></span></td>
    </tr>
    <?php }?>
  </table>

  <?php }?>




  <br>
  <div class="text_align_center bs_bold paragraph">ORIGINAL PETITION FOR DIVORCE</div>
  <br>

  <!-- --------------------------------------------------------------------------------------------------------------- -->
  <!-- 1 DISCOVERY -->
  <table>
    <tr class="paragraph section_heading">
      <td class="section_number"><span class="bs_italic bs_fontsize_normal">1. </span></td>
      <td class="section-heading"><span class="bs_italic bs_fontsize_normal">Discovery Level</span></td>
    </tr>
  </table>

  <div class="section_content paragraph indent-paragraph"><?php echo $discovery_level_paragraph ?></div>

  <!-- --------------------------------------------------------------------------------------------------------------- -->
  <!-- 2 PARTIES -->
  <table>
    <tr class="paragraph section_heading">
      <td class="section_number"><span class="bs_italic bs_fontsize_normal">2. </span></td>
      <td class="section-heading"><span class="bs_italic bs_fontsize_normal">Parties</span></td>
    </tr>
  </table>

  <div class="section_content paragraph indent-paragraph">This suit is brought by <?php echo $petitioner_uppercase ?>,
    Petitioner.
    The last three numbers of Petitioner's driver's license number are
    <?php echo $petitioner_drivers_license_number_last_3; ?>.
    The last three numbers of Petitioner's Social Security number are <?php echo $petitioner_ssn_last_3; ?>.
    <!-- php end -->
  </div>
  <div class="section_content paragraph indent-paragraph"><?php echo $respondent_uppercase ?> is Respondent.</div>


  <!-- --------------------------------------------------------------------------------------------------------------- -->
  <!-- 3 DOMICILE -->
  <table>
    <tr class="paragraph section_heading">
      <td class="section_number"><span class="bs_italic bs_fontsize_normal">3. </span></td>
      <td class="section-heading"><span class="bs_italic bs_fontsize_normal">Domicile</span></td>
    </tr>
  </table>
  <div class="section_content paragraph indent-paragraph"><?php echo $residency_requirement_party ?> has been a
    domiciliary of Texas for the preceding six-month period and a resident of this county for the preceding
    ninety-day period.</div>


  <!-- --------------------------------------------------------------------------------------------------------------- -->
  <!-- 4 SERVICE -->
  <table>
    <tr class="paragraph section_heading">
      <td class="section_number"><span class="bs_italic bs_fontsize_normal">4. </span></td>
      <td class="section-heading"><span class="bs_italic bs_fontsize_normal">Service</span></td>
    </tr>
  </table>
  <div class="section_content paragraph indent-paragraph">No service on Respondent is necessary at this time.</div>

  <!-- --------------------------------------------------------------------------------------------------------------- -->

  <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
  <!-- CONDITIONAL PAGE BREAK _-->
  <?php if ($count_children_entries > 1) {?>
  <pagebreak>
    <?php }?>

    <!-- --------------------------------------------------------------------------------------------------------------- -->

    <!-- 5 PROTECTIVE ORDER STATEMENT -->
    <table>
      <tr class="paragraph section_heading">
        <td class="section_number"><span class="bs_italic bs_fontsize_normal">5. </span></td>
        <td class="section-heading"><span class="bs_italic bs_fontsize_normal">Protective Order Statement</span>
        </td>
      </tr>
    </table>
    <div class="section_content paragraph indent-paragraph">No protective order under title 4 of the Texas Family Code,
      protective
      order under subchapter A of Chapter 7B of the Texas Code of Criminal Procedure, or order for emergency protection
      under Article 17.292 of the Texas Code of Criminal Procedure is in effect in regard to a party to this suit and no
      application for any such order is pending.</div>

    <!-- --------------------------------------------------------------------------------------------------------------- -->

    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
    <!-- CONDITIONAL PAGE BREAK _-->
    <?php if ($count_children_entries == 0) {?>
    <pagebreak>
      <?php }?>


      <!-- --------------------------------------------------------------------------------------------------------------- -->

      <!-- 6 DATES OF MARRIAGE & SEPARATION -->
      <table>
        <tr class="paragraph section_heading">
          <td class="section_number"><span class="bs_italic bs_fontsize_normal">6. </span></td>
          <td class="section-heading"><span class="bs_italic bs_fontsize_normal">Dates of Marriage and
              Separation</span></td>
        </tr>
      </table>
      <div class="section_content paragraph indent-paragraph">The parties were married on or about
        <?php echo $date_marriage; ?> and ceased to live together as spouses on
        <?php echo $date_of_separation_content ?>.
      </div>

      <!-- --------------------------------------------------------------------------------------------------------------- -->
      <!-- 7 GROUNDS FOR DIVORCE -->
      <table>
        <tr class="paragraph section_heading">
          <td class="section_number"><span class="bs_italic bs_fontsize_normal">7. </span></td>
          <td class="section-heading"><span class="bs_italic bs_fontsize_normal">Grounds for Divorce</span></td>
        </tr>
      </table>
      <div class="section_content paragraph indent-paragraph">The marriage has become insupportable because of discord
        or
        conflict of personalities between Petitioner and Respondent that destroys the legitimate ends of the marriage
        relationship and
        prevents any reasonable expectation of reconciliation.
      </div>
      <!-- --------------------------------------------------------------------------------------------------------------- -->
      <!-- 8 CHILDREN OF MARRIAGE -->
      <table>
        <tr class="paragraph section_heading">
          <td class="section_number"><span class="bs_italic bs_fontsize_normal">8. </span></td>
          <td class="section-heading"><span class="bs_italic bs_fontsize_normal">Children of Marriage</span></td>
        </tr>
      </table>

      <?php
for ($i = 0; $i < $count_children_entries; $i++) {?>
      <table class="children_wrapper">
        <tr class="child_row">
          <td class="child_label bs_fontsize_normal">Name:</td>
          <td class="child_data bs_fontsize_normal"><?php echo $children[$i]['full_name']; ?></td>
        </tr>
        <tr class="child-row">
          <td class="child_label bs_fontsize_normal">Sex:</td>
          <td class="child_data bs_fontsize_normal"><?php echo $children[$i]['gender']; ?></td>
        </tr>
        <tr class="child-row">
          <td class="child_label bs_fontsize_normal">Birthdate:</td>
          <td class="child_data bs_fontsize_normal"><?php echo $children[$i]['birth_date']; ?></td>
        </tr>
        <tr class="child-row">
          <td class="child_label bs_fontsize_normal">Social Security Number:</td>
          <td class="child_data bs_fontsize_normal">Exchanged Privately</td>
        </tr>
        <?php if ($children[$i]['has_dl'] == 'Yes') {?>
        <tr class="child-row">
          <td class="child_label bs_fontsize_normal">Drivers License:</td>
          <td class="child_data bs_fontsize_normal">Exchanged Privately</td>
        </tr>
        <?php }?>
        <!-- CLOSE IF STATEMENT -->
      </table>
      <br>
      <?php }?>
      <!-- CLOSE COUNTER -->
      <!-- --------------------------------------------------------------------------------------------------------------- -->
      <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
      <!-- CONDITIONAL PAGE BREAK _-->
      <?php if ($count_children_entries == 3) {?>
      <pagebreak>
        <?php }?>
        <!-- --------------------------------------------------------------------------------------------------------------- -->

        <div class="section_content paragraph indent-paragraph">
          There are no court-ordered conservatorships, court-ordered guardianships, or other court-ordered relationships
          affecting the children the subject of this suit.
          Information required by section 154.181(b) and section 154.1815 of the Texas Family Code is provided in the
          statements attached as Exhibit A.
          No property of consequence is owned or possessed by the children the subject of this suit.
          Petitioner believes that Petitioner and Respondent will enter into a written agreement containing provisions
          for
          conservatorship of, possession of, access to, and support of the children. If such an agreement is made,
          Petitioner
          requests that the Court approve that agreement and adopt it as the Court's order. If such an agreement is not
          made,
          Petitioner requests the Court to make orders for conservatorship of, possession of, access to, and support of
          the
          children.
        </div>



        <!-- --------------------------------------------------------------------------------------------------------------- -->

        <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
        <!-- CONDITIONAL PAGE BREAK _-->
        <?php if ($count_children_entries == 1) {?>
        <pagebreak>
          <?php }?>



          <!-- --------------------------------------------------------------------------------------------------------------- -->

          <!-- 9 DIVISION OF COMMUNITY OF PROPERTY -->
          <table>
            <tr class="paragraph section_heading">
              <td class="section_number"><span class="bs_italic bs_fontsize_normal">9. </span></td>
              <td class="section-heading"><span class="bs_italic bs_fontsize_normal">Division of Community
                  Property</span></td>
            </tr>
          </table>
          <div class="section_content paragraph indent-paragraph">Petitioner believes Petitioner and Respondent will
            enter
            into
            an
            agreement
            for the division of their estate. If such an agreement is made, Petitioner requests the Court to approve the
            agreement and divide their estate in a manner consistent with the agreement. If such an agreement is not
            made,
            Petitioner requests the Court to divide their estate in a manner that the Court deems just and right, as
            provided
            by
            law.
          </div>

          <!-- --------------------------------------------------------------------------------------------------------------- -->

          <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
          <!-- CONDITIONAL PAGE BREAK _-->
          <?php if ($count_children_entries == 0) {?>
          <pagebreak>
            <?php }?>




            <!-- --------------------------------------------------------------------------------------------------------------- -->








            <!-- 10 REQUEST FOR NAME CHANGE IF YES -->
            <!-- php start -->
            <?php if ($name_change_requested == "Yes") {?>
            <!-- php pause -->
            <table>
              <tr class="paragraph section_heading">
                <td class="section_number"><span class="bs_italic bs_fontsize_normal">10. </span></td>
                <td class="section-heading"><span class="bs_italic bs_fontsize_normal">Request for Change of
                    Name</span></td>
              </tr>
            </table>
            <div class="section_content paragraph indent-paragraph"><?php echo $name_change_role ?> requests a change of
              name
              to
              <?php echo $name_change_to ?></div>

            <!-- php resume -->
            <?php }?>
            <!-- php end -->
            <!-- --------------------------------------------------------------------------------------------------------------- -->
            <!-- 10 or 11 PRAYER -->
            <!-- php start -->
            <?php if ($name_change_requested == "No") {?>
            <!--php pause  -->
            <table>
              <tr class="paragraph section_heading">
                <td class="section_number"><span class="bs_italic bs_fontsize_normal">10. </span></td>
                <td class="section-heading"><span class="bs_italic bs_fontsize_normal">Prayer</span></td>
              </tr>
            </table>

            <!-- php resume -->
            <?php }?>
            <!-- php end -->




            <!-- php start -->
            <?php if ($name_change_requested == "Yes") {?>
            <!--php pause  -->
            <table>
              <tr class="paragraph section_heading">
                <td class="section_number"><span class="bs_italic bs_fontsize_normal">11. </span></td>
                <td class="section-heading"><span class="bs_italic bs_fontsize_normal">Prayer</span></td>
              </tr>
            </table>
            <!-- php resume -->
            <?php }?>
            <!-- php end -->


            <div class="section_content paragraph indent-paragraph">Petitioner prays that citation and notice issue as
              required
              by
              law and
              that the Court grant a divorce and all other relief requested in this petition.</div>
            <?php if ($name_change_requested == "Yes") {?>
            <div class="section_content paragraph indent-paragraph">Petitioner prays that Petitioner's name be changed
              as
              requested
              above.
            </div>
            <?php }?>
            <div class="section_content paragraph indent-paragraph">Petitioner prays for general relief.
            </div>

            <!-- --------------------------------------------------------------------------------------------------------------- -->

            <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
            <!-- CONDITIONAL PAGE BREAK _-->
            <?php if ($count_children_entries == 2 && $name_change_requested == 'Yes') {?>
            <pagebreak>
              <?php }?>

              <?php if ($count_children_entries == 3) {?>
              <pagebreak>
                <?php }?>

                <!-- --------------------------------------------------------------------------------------------------------------- -->


                <!-- SIGNATURE IF MEMBERSHIP is DIVORCE YOUR WAY FAMILY -->
                <?php if ($service == 'DYW') {
    ?>
                <div class="height_max"></div>
                <table class="SIGNATURES">
                  <tr class="paragraph">
                    <td class="table_signature_left_column bs_fontsize_normal">&nbsp;</td>
                    <td class="table_signature_right_column bs_fontsize_normal">Respectfully submitted,</td>
                  </tr>
                  <tr class="paragraph">
                    <td class="table_signature_left_column bs_fontsize_normal">&nbsp;</td>
                    <td class="table_signature_right_column bs_fontsize_normal">&nbsp;</td>
                  </tr>
                  <tr class="paragraph">
                    <td class="table_signature_left_column bs_fontsize_normal">&nbsp;</td>
                    <td class="table_signature_right_column bs_fontsize_normal"><?php echo $petitioner; ?></td>
                  </tr>
                  <tr class="paragraph">
                    <td class="table_signature_left_column bs_fontsize_normal">&nbsp;</td>
                    <td class="table_signature_right_column bs_fontsize_normal"><?php echo $petitioner_street; ?></td>
                  </tr>
                  <tr class="paragraph">
                    <td class="table_signature_left_column bs_fontsize_normal">&nbsp;</td>
                    <td class="table_signature_right_column bs_fontsize_normal"><?php echo $petitioner_city; ?>, Texas,
                      <?php echo $petitioner_zip; ?></td>
                  </tr>
                  <tr class="paragraph">
                    <td class="table_signature_left_column bs_fontsize_normal">&nbsp;</td>
                    <td class="table_signature_right_column bs_fontsize_normal"><?php echo $petitioner_phone; ?></td>
                  </tr>
                  <tr class="paragraph">
                    <td class="table_signature_left_column bs_fontsize_normal">&nbsp;</td>
                    <td class="table_signature_right_column bs_fontsize_normal"><?php echo $petitioner_email; ?></td>
                  </tr>
                  <tr class="paragraph">
                    <td class="table_signature_left_column bs_fontsize_normal">&nbsp;</td>
                    <td class="table_signature_right_column bs_fontsize_normal">&nbsp;</td>
                  </tr>
                  <tr class="paragraph">
                    <td class="table_signature_left_column bs_fontsize_normal">&nbsp;</td>
                    <td class="table_signature_right_column bs_fontsize_normal">By: <span
                        class="bs_underline bs_italic"> /s/
                        <?php echo $petitioner; ?></span>
                    </td>
                  </tr>
                  <tr class="paragraph">
                    <td class="table_signature_left_column bs_fontsize_normal">&nbsp;</td>
                    <td class="table_signature_right_column bs_fontsize_normal">
                      &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $petitioner; ?>
                    </td>
                  </tr>
                  <tr class="paragraph">
                    <td class="table_signature_left_column bs_fontsize_normal">&nbsp;</td>
                    <td class="table_signature_right_column bs_fontsize_normal">&nbsp;&nbsp;&nbsp;&nbsp;PRO SE</td>
                  </tr>
                </table>

                <?php }?>

                <!-- SIGNATURE IF MEMBERSHIP is DIVORCE BY US FAMILY -->

                <?php if ($service == 'DBU') {
    ?>
                <div class="height_max"></div>
                <table class="SIGNATURES">
                  <tr class="paragraph">
                    <td class="table_signature_left_column bs_fontsize_normal">&nbsp;</td>
                    <td class="table_signature_right_column bs_fontsize_normal">Respectfully submitted,</td>
                  </tr>
                  <tr class="paragraph">
                    <td class="table_signature_left_column bs_fontsize_normal">&nbsp;</td>
                    <td class="table_signature_right_column bs_fontsize_normal">&nbsp;</td>
                  </tr>
                  <tr class="paragraph">
                    <td class="table_signature_left_column bs_fontsize_normal">&nbsp;</td>
                    <td class="table_signature_right_column bs_fontsize_normal">DIVORCE CONCIERGE, PLLC</td>
                  </tr>
                  <tr class="paragraph">
                    <td class="table_signature_left_column bs_fontsize_normal">&nbsp;</td>
                    <td class="table_signature_right_column bs_fontsize_normal">8951 Collin-McKinney Parkway Suite 1402
                    </td>
                  </tr>
                  <tr class="paragraph">
                    <td class="table_signature_left_column bs_fontsize_normal">&nbsp;</td>
                    <td class="table_signature_right_column bs_fontsize_normal">McKinney, Texas, 75070</td>
                  </tr>
                  <tr class="paragraph">
                    <td class="table_signature_left_column bs_fontsize_normal">&nbsp;</td>
                    <td class="table_signature_right_column bs_fontsize_normal">Phone: 972-562-9890</td>
                  </tr>
                  <tr class="paragraph">
                    <td class="table_signature_left_column bs_fontsize_normal">&nbsp;</td>
                    <td class="table_signature_right_column bs_fontsize_normal">Fax: 972-377-8392</td>
                  </tr>
                  <tr class="paragraph">
                    <td class="table_signature_left_column bs_fontsize_normal">&nbsp;</td>
                    <td class="table_signature_right_column bs_fontsize_normal">Email: service@divorceconcierge.com</td>
                  </tr>
                  <tr class="paragraph">
                    <td class="table_signature_left_column bs_fontsize_normal">&nbsp;</td>
                    <td class="table_signature_right_column bs_fontsize_normal">&nbsp;</td>
                  </tr>
                  <tr class="paragraph">
                    <td class="table_signature_left_column bs_fontsize_normal">&nbsp;</td>
                    <td class="table_signature_right_column bs_fontsize_normal">By: ________________________________
                    </td>
                  </tr>
                  <tr class="paragraph">
                    <td class="table_signature_left_column bs_fontsize_normal">&nbsp;</td>
                    <td class="table_signature_right_column bs_fontsize_normal">SHARON M. RAMAGE</td>
                  </tr>
                  <tr class="paragraph">
                    <td class="table_signature_left_column bs_fontsize_normal">&nbsp;</td>
                    <td class="table_signature_right_column bs_fontsize_normal">SBOT: 13740100</td>
                  </tr>
                  <tr class="paragraph">
                    <td class="table_signature_left_column bs_fontsize_normal">&nbsp;</td>
                    <td class="table_signature_right_column bs_fontsize_normal">ATTORNEY FOR PETITIONER</td>
                  </tr>
                </table>
                <?php }?>

                <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
                <!-- PAGE 4 -->
                <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->