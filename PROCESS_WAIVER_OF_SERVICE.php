<meta charset="UTF-8">
<?php

/*
 * Template Name: Waiver of Service
 * Version: 1.0.0
 * Description: A print-friendly template displaying the Waiver of Service for Divorce Concierge
 * Author: Bliksem LLC
 * Author URI: https://simplifysmallbiz.com
 * Group: 4 Connect to Source Data
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

.bs_underline {
  text-decoration: underline;
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
  line-height: 150%;
}

.indent-paragraph-text {
  padding-left: 100px;
  text-align: justify;
  line-height: 250%;
}

.title {
  line-height: 250%;
  text-align: center;
  font-weight: bold;
}

.paragraph {
  line-height: 150%;
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

/* SIGNATURE FIELDS */
.height_max {
  height: 20mm;
}

/* # TABLES */
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
.table_signature_left_column,
.table_signature_right_column {
  width: 49%;
}

.table_border_top {
  border-top: 1px solid;
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
        <td class="footer_left_half"><span class="bs_bold bs_fontsize_normal">WAIVER OF SERVICE</span></td>
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
// $client_user_id = $form_data'misc''created_by';

// CAUSE NUMNER
$cause_nmber = '1234'; // Masters

// IN THE MATTER OF / PARTIES
$petitioner = 'Peter Patrick Parker'; // Right For You
$petitioner_uppercase = strtoupper($petitioner);
$respondent = 'Rebecca Roxanne Parker'; // Right For You
$respondent_uppercase = strtoupper($respondent);

// Child 1
// $children_entries[0]['2.3'] = 'Alice';
// $children_entries[0]['2.4'] = 'Anne';
// $children_entries[0]['2.6'] = 'Parker';
// $children_entries[0][3] = 'Female';
// $children_entries[0][4] = '2005-01-01';
// $children_entries[0][6] = 'Yes';
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

// NAME CHANGE

$name_change_to = 'Rebecca Roxanne Rodell';
$name_change_who = $respondent;
$name_change_requested = 'No'; // Lets Get Started

// SIGNATURE DETAILS FOR DYW (PRO SE )
$respondent_mailing_address_street_1 = '123 Respondent Street'; // Tell Us About Yourself
$respondent_mailing_address_street_2 = 'Apt 123'; // Tell Us About Yourself
$respondent_mailing_address_city = 'Plano'; // Tell Us About Yourself
$respondent_mailing_address_state = 'Texas'; // Tell Us About Yourself
$respondent_mailing_address_zip = '75093'; // Tell Us About Yourself
// Inline mailing address
if ($respondent_mailing_address_street_2 == '') {
    $respondent_mailing_address_inline = $respondent_mailing_address_street_1 . ', ' . $respondent_mailing_address_city . ', ' . $respondent_mailing_address_state . ', ' . $respondent_mailing_address_zip;
} else {
    $respondent_mailing_address_inline = $respondent_mailing_address_street_1 . ', ' . $respondent_mailing_address_street_2 . ', ' . $respondent_mailing_address_city . ', ' . $respondent_mailing_address_state . ', ' . $respondent_mailing_address_zip;
}

$respondent_phone = '999-999-9992'; // Right For You
$respondent_email = 'respondent@email.com'; // Right For Your

if ($respondent_street_2 == '') {
    $respondent_street = $respondent_street_1;
} else {
    $respondent_street = $respondent_street_1 . ', ' . $respondent_street_2;
}
/* VARIABLES END
 *********************************************************************************************************** */
?>
  <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
  <!-- PAGE 1 -->
  <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->


  <bookmark content="Waiver of Service" />

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


  <!--- title ---->
  <div class="title"><span class="bs_bold text_align_center"> <br> WAIVER OF SERVICE </span></div>

  <!--- first paragraph, each div is used to create an indented line for aestetic of PDF ---->
  <p class="indent-paragraph"> <?php echo $respondent ?> appeared in person before me today and stated under oath:
  </p>
  <p class="indent-paragraph"> "I, <?php echo $respondent ?>, am the person named as Respondent in this case. </p>
  <p class="indent-paragraph"> "I acknowledge that I have been provided a copy of the Original Petition for Divorce
    filed in this case. I have read and understand the contents of that document. </p>
  <p class="indent-paragraph"> "I understand that the Texas Rules of Civil Procedure require, in most instances, that a
    party or respondent be served with citation. I do not want to be served with citation, and I waive the issuance and
    service of citation. </p>
  <p class="indent-paragraph"> "I enter my appearance in this case for all purposes. </p>
  <p class="indent-paragraph"> "I waive the making of a record of testimony in this case. </p>
  <p class="indent-paragraph"> "I agree that this case may be taken up and considered by the Court without further
    notice to me. </p>
  <p class="indent-paragraph"> "I agree that the case may be decided by the presiding Judge of the Court or by a duly
    appointed Associate Judge of the Court. </p>
  <p class="indent-paragraph"> "I want to be notified of any hearing or trial of this case. </p>
  <p class="indent-paragraph"> "I do not waive any rights that I may have with regard to the division of my interest in
    my spouse's and my property.</p>

  <!--- Displays if name change requested. Paragraph is stored in a variable ---->
  <?php if ($name_change_requested == 'Yes' && $name_change_who == $respondent) {?>
  <p class="indent-paragraph">'I request the Court to order that my legal name be <?php echo $name_change_to ?>.</p>
  <?php }?>

  <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
  <!-- CONDITIONAL PAGE BREAK _-->
  <?php if ($count_children_entries == 0) {?>
  <pagebreak>
    <?php }?>


    <p class="indent-paragraph"> "If I should enter into a settlement agreement with Petitioner, that agreement will
      bear
      my signature indicating my approval of its terms, conditions, and contents. </p>
    <p class="indent-paragraph"> "I request the Court not to enter any orders or judgment not signed by me or without my
      receiving prior written notice of the date, time, and place of any proceedings. </p>
    <p class="indent-paragraph"> "I understand that I have a duty to notify the attorney for Petitioner if I change my
      address. I understand that, unless I notify the attorney for Petitioner of any such change in writing, any notices
      that I might otherwise be entitled to receive with regard to disposition of this proceeding will be forwarded to
      me
      at
      the address indicated below. </p>
    <p class="indent-paragraph"> "Insofar as this suit is concerned, I waive all rights, privileges, and exemptions
      existing or that may hereafter exist in my favor under the Servicemembers Civil Relief Act, including the
      appointment
      of counsel to represent me in this case. </p>
    <p class="indent-paragraph"> "I further state that the following information is correct and that my- </p>
    <p class="indent-paragraph"> Mailing address is: <?php echo $respondent_mailing_address_inline ?> </p>
    <p class="indent-paragraph"> Telephone number is: <?php echo $respondent_phone ?> </p>
    <p class="indent-paragraph"> E-mail address is: <?php echo $respondent_email ?> </p>
    <p class="indent-paragraph"> "I further understand that I have a duty to notify the Court if my mailing address
      changes during this proceeding."
      </div>


      <!---  SIGNATURES---->

      <pagebreak>



        <div class="height_max"></div>
        <table class="SIGNATURES">
          <tr class="paragraph">
            <td class="table_signature_left_column bs_fontsize_normal">&nbsp;</td>
            <td class="table_signature_right_column bs_fontsize_normal table_border_top">&nbsp;</td>
          </tr>
          <tr class="paragraph">
            <td class="table_signature_left_column bs_fontsize_normal">&nbsp;</td>
            <td class="table_signature_right_column bs_fontsize_normal text_align_right">
              <?php echo strtoupper($respondent) ?>
            </td>
          </tr>
        </table>
        <div class="height_max"></div>
        <p class="indent-paragraph text_align_right">SIGNED under oath before me on
          __________________________________________.
        </p>



        <p class="indent-paragraph"> I, the notary public whose signature above, certify that I am not an attorney in
          this
          case. </div>
        <div class="height_max"></div>
        <table class="SIGNATURES">
          <tr class="paragraph">
            <td class="table_signature_left_column bs_fontsize_normal">&nbsp;</td>
            <td class="table_signature_right_column bs_fontsize_normal table_border_top">&nbsp;</td>
          </tr>
          <tr class="paragraph">
            <td class="table_signature_left_column bs_fontsize_normal">&nbsp;</td>
            <td class="table_signature_right_column bs_fontsize_normal text_align_right">Notary Public, State of Texas
            </td>
          </tr>
        </table>

</body>