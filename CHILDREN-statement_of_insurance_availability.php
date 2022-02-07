<meta charset="UTF-8">
<?php

/*
 * Template Name: CHILDREN Statement of Insurance Availability
 * Version: 1.0.1
 * Description: A print-friendly template displaying the Insurance availibility form/
 * Author: Bliksem LLC
 * Author URI: https://simplifysmallbiz.com
 * Group: 1. Development
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

.bs_spacer {
  height: 10mm;
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

.paragraph {
  line-height: 250%;
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

.text_align_justify {
  text-align: justify;
}

.text_underline {
  text-decoration: underline;
}



/* TABLES */
/* ## Table to display Cause Number */
.table-cause_number-col_1_4,
.table-cause_number-col_4_4 {
  width: 50mm;
}

.table-cause_number-col_2_4 {
  text-align: right;
  width: 20mm;
  padding-right: 2mm;
}

.table-cause_number-col_3_4 {
  width: 40mm;
  border-bottom: 1px solid;
}


/* ## Pleading Head Table */
.table_header_left_column,
.table_header_right_column {
  width: 44%;
}

.table_header_middle_column {
  width: 10%
}


/* ## Table to display medical benefits */
table.tb,
table.tb th,
table.tb td {
  border: 1px solid;
  border-collapse: collapse;
}

table.tb th,
table.tb td {
  padding: 10px 2px;
  border-collapse: collapse;
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

/* ## Footer Table */
.footer_left_half {
  width: 69%;
}

.footer_right_half {
  width: 30%;
}
</style>

<body>
  <!-- STYLES END -->
  <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

  <!-- HEADER / FOOTER -->
  <htmlpagefooter name="MyCustomFooter">
    <table class="footer">
      <tr class="paragraph">
        <td class="footer_left_half"><span class="bs_bold bs_fontsize_normal">STATEMENT OF INSURANCE AVAILABILITY</span>
        </td>
        <td class="footer_right_half text_align_right"><span class="bs_bold bs_fontsize_normal">PAGE {PAGENO}</span>
        </td>
      </tr>
    </table>
  </htmlpagefooter>
  <!-- HEADR FOOTER END -->

  <?php
/* *********************************************************************
 * VARIABLES
 ******************************************************************** */
// CLIENT DETAILS
$client_user_id = rgar($entry, 'created_by');

// CAUSE NUMNER
$cause_nmber = '1234'; // Masters

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
// $children_entries[1]['2.3'] = 'Bryce';
// $children_entries[1]['2.4'] = 'Ben';
// $children_entries[1]['2.6'] = 'Parker';
// $children_entries[1][3] = 'Male';
// $children_entries[1][4] = '2006-02-02';
// $children_entries[1][6] = 'Yes';
// Child 3
// $children_entries[2]['2.3'] = 'Cassie';
// $children_entries[2]['2.4'] = 'Cheryl';
// $children_entries[2]['2.6'] = 'Parker';
// $children_entries[2][3] = 'Female';
// $children_entries[2][4] = '2009-03-03';
// $children_entries[2][6] = 'No';

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

// DISTRICT & COUNTY
$district_number = '123'; // Masters
$county = strtoupper('Collin'); // Right F You

// MEMBERSHIP TYPE FOR SIGNATURE
$service = 'DYW'; // Right For You
$plan = 'It\'s Simple'; // Right For You

/* VARIABLES END
 *********************************************************************************************************** */
?>
  <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
  <!-- PAGE 1 -->
  <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->


  <bookmark content="Insurance Availibility" />


  <!-- --------------------------------------------------------------------------------------------------------------- -->

  <!-- CAUSE NUMBER -->
  <table class="table-cause_number">
    <tr>
      <td class="table-cause_number-col_1_4">&nbsp;</td>
      <td class="table-cause_number-col_2_4 bs_fontsize_normal"><span class="bs_bold">NO.</span></td>
      <td class="table-cause_number-col_3_4 bs_fontsize_normal"><span
          class="text_align_center bs_bold"><?php echo $cause_nmber ?></span>
      </td>
      <td class="table-cause_number-col_4_4">&nbsp;</td>
    </tr>
  </table>

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
      <td class="table_header_right_column"><span class="bs_bold bs_fontsize_normal"><span
            class="bs_underline">&nbsp;<?php echo $district_number ?>&nbsp;</span> JUDICIAL DISTRICT</span>
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
          class="bs_bold bs_fontsize_normal"><?php echo $county . " COUNTY, TEXAS"; ?></span></td>
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
      <td class="table_header_right_column"><span class="bs_bold bs_fontsize_normal"><span
            class="bs_underline">&nbsp;<?php echo $district_number ?>&nbsp;</span> JUDICIAL DISTRICT</span>
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

  <!-- SPACER -->
  <div class="bs_spacer"></div>

  <!-- SECTION: Document Heading -->
  <div class="text_align_center bs_bold"><u>STATEMENT OF HEALTH INSURANCE AVAILABILITY</u></div>

  <!-- SPACER -->
  <div class="bs_spacer"></div>

  <?php
/* Section - Children Table
 ************************************** */

//OUTPUT
?>

  <div class="indent-paragraph"> This statement is made by <?php echo $petitioner_uppercase ?>,
    Petitioner, in accordance with section 154.181 of the TEXAS FAMILY CODE.
    Beside the name of each child, check all types of health insurance or benefits currently covering
    that child:
  </div>


  <table class="tb" style="width:100%;">
    <tr>
      <th>&nbsp;</th>
      <th><i>Father’s Employer</i></th>
      <th><i>Mother’s Employer</i></th>
      <th><i>Private</i></th>
      <th><i>Medicaid</i></th>
      <th><i>CHIP</i></th>
      <th><i>Other</i></th>
      <th><i>None</i></th>
    </tr>

    <!-- Children == 1 -->
    <?php if ($count_children_entries > 0) {?>
    <tr>
      <td><?php echo $children[0]['full_name'] ?>:</td>
      <!--Child Name: -->
      <td class="text_align_center">&#10003;</td>
      <!--Father's Employer-->
      <td class="text_align_center">&#10003;</td>
      <!--Mother's Employer-->
      <td class="text_align_center">&#10003;</td>
      <!--Private-->
      <td class="text_align_center">&#10003;</td>
      <!--Medicaid-->
      <td class="text_align_center">&#10003;</td>
      <!--CHIP-->
      <td class="text_align_center">&#10003;</td>
      <!--Other-->
      <td class="text_align_center">&#10003;</td>
      <!--None-->
    </tr>
    <?php }?>
    <!-- Children == 2 -->
    <?php if ($count_children_entries > 1) {?>
    <tr>
      <!--- Seperator ---->
      <td style="background-color: #C5C5C5; "><br></td>
      <!--Child Name: -->
      <td style="background-color: #C5C5C5; "><br></td>
      <!--Father's Employer-->
      <td style="background-color: #C5C5C5; "><br></td>
      <!--Mother's Employer-->
      <td style="background-color: #C5C5C5; "><br></td>
      <!--Private-->
      <td style="background-color: #C5C5C5; "><br></td>
      <!--Medicaid-->
      <td style="background-color: #C5C5C5; "><br></td>
      <!--CHIP-->
      <td style="background-color: #C5C5C5; "><br></td>
      <!--Other-->
      <td style="background-color: #C5C5C5; "><br></td>
      <!--None-->
    </tr>
    <tr>
      <td><?php echo $children[1]['full_name'] ?>:</td>
      <!--Child Name: -->
      <td class="text_align_center">&#10003;</td>
      <!--Father's Employer-->
      <td class="text_align_center">&#10003;</td>
      <!--Mother's Employer-->
      <td class="text_align_center">&#10003;</td>
      <!--Private-->
      <td class="text_align_center">&#10003;</td>
      <!--Medicaid-->
      <td class="text_align_center">&#10003;</td>
      <!--CHIP-->
      <td class="text_align_center">&#10003;</td>
      <!--Other-->
      <td class="text_align_center">&#10003;</td>
      <!--None-->
    </tr>
    <?php }?>
    <!-- Children == 3 -->
    <?php if ($count_children_entries > 2) {?>
    <tr>
      <!--- Seperator ---->
      <td style="background-color: #C5C5C5; "><br></td>
      <!--Child Name: -->
      <td style="background-color: #C5C5C5; "><br></td>
      <!--Father's Employer-->
      <td style="background-color: #C5C5C5; "><br></td>
      <!--Mother's Employer-->
      <td style="background-color: #C5C5C5; "><br></td>
      <!--Private-->
      <td style="background-color: #C5C5C5; "><br></td>
      <!--Medicaid-->
      <td style="background-color: #C5C5C5; "><br></td>
      <!--CHIP-->
      <td style="background-color: #C5C5C5; "><br></td>
      <!--Other-->
      <td style="background-color: #C5C5C5; "><br></td>
      <!--None-->
    </tr>
    <tr>
      <!--- THERE WILL BE CONDITIONAL LOGIC ON WHETHER THERE IS A TICK OR NOT IN RESPECTIVE COLUMN - AS WELL AS FOR LOOP FOR AMOUNT OF CHILDREN ---->
      <td><?php echo $children[2]['full_name'] ?>:</td>
      <!--Child Name: -->
      <td class="text_align_center">&#10003;</td>
      <!--Father's Employer-->
      <td class="text_align_center">&#10003;</td>
      <!--Mother's Employer-->
      <td class="text_align_center">&#10003;</td>
      <!--Private-->
      <td class="text_align_center">&#10003;</td>
      <!--Medicaid-->
      <td class="text_align_center">&#10003;</td>
      <!--CHIP-->
      <td class="text_align_center">&#10003;</td>
      <!--Other-->
      <td class="text_align_center">&#10003;</td>
      <!--None-->
    </tr>
    <?php }?>
  </table>

  <div class="bs_spacer"></div>

  <?php
/* Section - 2. For each health insurance source, please list:
 ************************************** */
// VARIABLES
// VARIABLES
//INSURANCE DETAILS

// $insurance_data_id = 23;
// $insurance_data_search_criteria['field_filters'][] = array('key' => 'created_by', 'value' => $client_user_id);
// $insurance_data_search_criteria['status'] = 'active';
// $insurance_data_sorting = array('key' => 'id', 'direction' => 'ASC', 'is_numeric' => true);
// $insurance_entries = GFAPI::get_entries($insurance_data_id, $insurance_data_search_criteria);

// ARRAY for testing purposes
$insurance_entries = array(); //Tell Us About Your Child(ren)

// Health Insurance Available?
$insurance_entries[0][263] = 'Yes'; // HIA Private Insurance availanle?
$insurance_entries[0][264] = 'XYZ Health Insurance Company'; // HIA Insurance Company Name
$insurance_entries[0][265] = '1234785897'; // HIA Policy Number
$insurance_entries[0][266] = $petitioner; // HIA Party Responsible
$insurance_entries[0][267] = '456.00'; // HIA Premium
$insurance_entries[0][268] = 'Yes'; // HIA Conditional on employment
$insurance_entries[0][269] = 'Yes'; // HIA Medicaid?
$insurance_entries[0][270] = 'Yes'; // HIA Chip?

$insurance_entries[0][271] = 'Yes'; // If HIA Private == No, does Petitioner have access to insurance?
$insurance_entries[0][272] = 'NO'; // If HIA Private == No && [271] == NO, does Respondent have access to insurance?

$insurance = array();

//Health insurance details/condition
$condPrivateInsurance = $insurance_entries[0][263]; //do they have private Insurance

if ($condPrivateHealthInsurance == 'Yes') {
    $privateInsuranceInfo = "Private health inusrance is in effect for the child(ren)";

} else {
    $privateInsuranceInfo = "";
}

$insuranceCompany = $insurance_entries[0][264]; //the insurance company name
$policyNumber = $insurance_entries[0][265]; //insurance policy number
$responsibleParty = $insurance_entries[0][266]; //petitioner or respondent responsible for isnurance
$premiumCost = $insurance_entries[0][267]; //cost of insurance in $
$condInsuranceEmployment = $insurance_entries[0][268]; //is the insurance provided by employment
$condMedicaid = $insurance_entries[0][269]; //do the children have access to medicaid
$condHealthBenefits = $insurance_entries[0][270]; //do the children have access to health benefits

$condPHealthAccess = $insurance_entries[0][271]; //does the petitioner or respondent have access to private healthcare at a reasonable cost
$condRHealthAccess = $insurance_entries[0][272]; //does the petitioner or respondent have access to private healthcare at a reasonable cost

//Dental insurance Availability
$insurance_entries[0][275] = 'Yes'; //do they have dental insurance
$insurance_entries[0][276] = 'ABC Dental Insurance Company'; // dental insurance company name
$insurance_entries[0][277] = '98788743'; //dental policy number
$insurance_entries[0][279] = '299.00'; //dental insurance cost in $
$insurance_entries[0][280] = 'Yes'; // is the dental policy provided by employment
$insurance_entries[0][278] = $Petitioner; // Party Responsible

// IF [275 == No], alternative dental care available?
$insurance_entries[0][281] = 'No'; //does petitioner have acces to dental care
$insurance_entries[0][282] = 'Yes'; //does respondent have acccess to dental care

$dentalInsurance = $insurance_entries[0][276]; // dental insurance company name
$dentalPolicyNumber = $insurance_entries[0][277]; //dental policy number
$dentalCost = $insurance_entries[0][279]; //dental insurance cost in $
$condDenInsuranceEmployment = $insurance_entries[0][280]; // is the dental policy provided by employment
$responsiblePartyDental = $insurance_entries[0][278]; // Party Responsible
$condNoDentalInsurance = $insurance_entries[0][275]; //do they have dental insurance
$condAccessInsuranceP = $insurance_entries[0][281]; //does petitioner have acces to dental care
$condAccessInsuranceR = $insurance_entries[0][282]; //does respondent have acccess to dental care

//OUTPUT
?>

  <?php if ($condPrivateHealthInsurance == 'Yes') {

}?>
  <div class="paragraph">2. For each health insurance source, please list:
  </div>
  <div class="indent-paragraph">a. Name of insurance company: <?php echo $nameOfInsuranceCompany ?>
  </div>
  <div class="indent-paragraph">b. Group Policy ID number: <?php echo $groupPolicyIDNumber ?>
  </div>
  <div class="indent-paragraph">c. Policyholder name and ID number: <?php echo $policyHolderNameandIDNumber ?>
  </div>
  <div class="indent-paragraph">d. Name of child(ren) covered: <?php echo $nameOfChildrenCovered ?>
  </div>
  <div class="indent-paragraph">e. Cost of premium to policyholder for child, if known: <?php echo $costOfPremium ?>
  </div>

  <?php
/* Section - 3. For each health dental insurance source, please list:
 ************************************** */
// VARIABLES
$nameOfDentalCompany = 'Cool Dental'; //Tell Us About Your Child(ren)
$groupDentalPolicyIDNumber = '12345'; //Tell Us About Your Child(ren)
$dentalPolicyHolderNameandIDNumber = 'Jim Jimothy Jones'; // Tell Us About ... AND Tell Us About Child(ren)
//$nameOfChildrenCovered = $child_name_1 . ' ' . $child_name_2 . ' ' . $child_name_3;
$costOfDentalPremium = '$5600'; //Tell Us About Your Child(ren)

//OUTPUT
?>

  <div class="paragraph">3. For each dental health insurance source, please list:
  </div>
  <div class="indent-paragraph">a. Name of insurance company: <?php echo $nameOfDentalCompany ?>
  </div>
  <div class="indent-paragraph">b. Group Policy ID number: <?php echo $groupDentalPolicyIDNumber ?>
  </div>
  <div class="indent-paragraph">c. Policyholder name and ID number: <?php echo $dentalPolicyHolderNameandIDNumber ?>
  </div>
  <div class="indent-paragraph">d. Name of child(ren) covered: <?php echo $nameOfChildrenCovered ?>
  </div>
  <div class="indent-paragraph">e. Cost of premium to policyholder for child, if known:
    <?php echo $costOfDentalPremium ?>
  </div>

  <div class="bs_spacer"></div>
  <div class="bs_spacer"></div>

  <div class="paragraph">Signed On ________________________
  </div>
  <div class="paragraph"> <?php echo $petitioner ?>
  </div>

</body>