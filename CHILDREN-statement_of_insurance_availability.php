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

/* ---------------------------------------------------------------------------------------------------- */
/* GLOBAL VARIABLES */

// $client_user_id = rgar($entry, 'created_by');

$selectOption = 'X';
$leaveBlank = '&nbsp;';

// $master_entries[0][] = ''; //

// Get data from master

// For Testing Purposes
$master_entries = array();

// REPEATER FORM ENTRY ID
$master_entries[0][83] = ''; // Tell Is About Your Child(ren)
// $master_entries[0][] = ''; //
// $master_entries[0][] = ''; //

// PREQUAL DATA
$master_entries[0][276] = 'DYW'; // Service
$master_entries[0][277] = 'It\'s Simple'; // Plan (Its Simple, Not So Simple, Its Complicated [with children])

// Petitioner
$master_entries[0][96]['first'] = 'Peter'; // Petitioner Full Name
$master_entries[0][96]['middle'] = 'Paul'; // Petitioner Full Name
$master_entries[0][96]['last'] = 'Parker'; // Petitioner Full Name
$master_entries[0][39] = '999-999-9991'; // Petitioner phone cell
$master_entries[0][40] = 'petitioner@email.com'; // Petitioner phone cell
$master_entries[0][229] = '01/01/1971'; // Petitioner date of birth
// Qualifier
$master_entries[0][234] = 'Get Started'; // Divorce stage
// Respondent
$master_entries[0][114]['first'] = 'Rebekah'; // Respondent full name
$master_entries[0][114]['middle'] = 'Rochelle'; // Respondent full name
$master_entries[0][114]['last'] = 'Parker'; // Respondent full name
$master_entries[0][275] = '02/02/1972'; // Respondent date of birth
$master_entries[0][235] = 'Yes'; // Respondent hired an attorney?
$master_entries[0][236] = 'Alfred Attorney'; // Respondent attorney's name
// Qualifier
$master_entries[0][237] = 'No'; // Petitioner filed for divorce?
$master_entries[0][238] = ''; // If Yes, which court was the divorce filed in?
$master_entries[0][239] = ''; // If Yes, what is the Cause Number?
$master_entries[0][240] = ''; // If Yes, Is the trial date set?
$master_entries[0][241] = 'No'; // Does a pre/post marital agreement exist?
$master_entries[0][242] = 'No'; // Is spousal maintenance requested?
// Qualified Residency
$master_entries[0][243] = 'both'; // Texas Residency OPTIONS both, user, spouse, neither
// Petitioner
$master_entries[0][244] = '6 months or longer'; // Petitioner State duration
$master_entries[0][245] = 'Collin'; // Petitioner County
$master_entries[0][246] = ''; // If 'Other', petitioner County other
$master_entries[0][247] = '3 months or longer'; // $petitioner County duration
// Respondent
$master_entries[0][248] = '6 months or longer'; // Respondent State duration
$master_entries[0][249] = 'Collin'; // Respondent County
$master_entries[0][250] = ''; // If 'Other', respondent County other
$master_entries[0][251] = '3 months or longer'; // Respondent County duration
// Marital Estate
$master_entries[0][252] = 'Yes'; // Real estate purchased while married?
$master_entries[0][253] = '1'; // If yes, number of parcels
$master_entries[0][254] = 'Yes'; // Interest in employer sponsored retirement plans?
$master_entries[0][255] = '1'; // If yes, Number of employer sponsored retirement plans?
$master_entries[0][256] = '4'; // Joint ownership of assets?
$master_entries[0][257] = ''; // If yes, number of jointly owned assets
$master_entries[0][258] = ''; // In agreement on how assets will be divided?
$master_entries[0][259] = ''; // Does either party own separate property?
$master_entries[0][260] = ''; // Are there jointly owned debts?
$master_entries[0][261] = ''; // Are there more than 6 jointly owned debts?
$master_entries[0][262] = ''; // Are the parties in agreement on awarding debts?
// Qualifier Bankruptcy
$master_entries[0][263] = ''; // Is there a pending bankruptct?
$master_entries[0][264] = ''; // If yes, which court?
$master_entries[0][265] = ''; // If yes, date of filing?
// Children
$master_entries[0][266] = ''; // Are there children under the age of 18?
$master_entries[0][267] = ''; // If yes, are both parties in agreement on custody?
$master_entries[0][268] = ''; // If yes, are both parties in agreement on visitation?
$master_entries[0][269] = ''; // If yes, are both parties in agreement on child support?
$master_entries[0][270] = ''; // Are there children age 18 or older?
$master_entries[0][271] = ''; // Is either party expecting a child?
$master_entries[0][272] = ''; // Do protective orders exist?
// Plan
$master_entries[0][274] = ''; // Redirect URL

// Jurisdiction
$master_entries[0][7] = '1234'; // Cause Number
$master_entries[0][5] = '987th'; // Judicial District Number
$master_entries[0][6] = 'Collin'; // Judidicial County

// PETITIONER (Tell Us About Yourself)
$master_entries[0][97] = 'Male'; // Gender
$master_entries[0][X] = '999-999-9992'; // Phone home
$master_entries[0][13] = '111-11-1111'; // SSN
$master_entries[0][279] = 'Yes'; // Drivers license exists
$master_entries[0][14] = 'DL1111111'; // Drivers license number
$master_entries[0][103] = 'Texas'; // Drivers license State
// Petitioner address residence
$master_entries[0][38]['street'] = '321 Petitioner Street'; // Address residence
$master_entries[0][38]['street2'] = 'Apt 321'; // Address residence
$master_entries[0][38]['city'] = 'Prosper'; // Address residence
$master_entries[0][38]['state'] = 'Texas'; // Address residence
$master_entries[0][38]['zip'] = '75078'; // Address residence
// Address mailing
$master_entries[0][106]['street'] = '321 Petitioner Mailing Street'; // Address residence
$master_entries[0][106]['street2'] = 'Apt 321'; // Address residence
$master_entries[0][106]['city'] = 'Plano'; // Address residence
$master_entries[0][106]['state'] = 'Texas'; // Address residence
$master_entries[0][106]['zip'] = '75078'; // Address residence
// Employment
$master_entries[0][230] = 'Yes'; // Petitioner employed?
$master_entries[0][231] = 'Petitioner Employer Inc'; // Petitioner employer
$master_entries[0][100] = '999-999-9993'; // Petitioner phone work
$master_entries[0][232] = '123 Petitoner Employer Street, STE 123, Plano, Texas, 75093'; // Petitioner employer address
$master_entries[0][X] = '11-1111111'; // Petitioner employer FEIN

// RESPONDENT (Tell Us About Your Spouse)
$master_entries[0][115] = 'Female'; // Gender
$master_entries[0][74] = 'respondent@email.com'; // Email
$master_entries[0][117] = '888-888-8881'; // Phone cell
$master_entries[0][73] = '888-888-8882'; // Phone home
$master_entries[0][119] = '222-22-2222'; // SSN
$master_entries[0][280] = 'Yes'; // Drivers license?
$master_entries[0][120] = 'DL222222222'; // Drivers license number
$master_entries[0][121] = 'Texas'; // Drivers license State
// Address Residence
$master_entries[0][125]['street'] = '321 Respondent Street'; // Address residence
$master_entries[0][125]['street2'] = 'Apt 321'; // Address residence
$master_entries[0][125]['city'] = 'Prosper'; // Address residence
$master_entries[0][125]['state'] = 'Texas'; // Address residence
$master_entries[0][125]['zip'] = '75078'; // Address residence
// Address mailing
$master_entries[0][72]['street'] = '321 Respondent Mailing Street'; // Address residence
$master_entries[0][72]['street2'] = 'Apt 321'; // Address residence
$master_entries[0][72]['city'] = 'Prosper'; // Address residence
$master_entries[0][72]['state'] = 'Texas'; // Address residence
$master_entries[0][72]['zip'] = '75078'; // Address residence
// Employment
$master_entries[0][281] = ''; // Employed?
$master_entries[0][282] = ''; // Emplyer name
$master_entries[0][118] = '888-888-8883'; // Phone work
$master_entries[0][283] = ''; // Employer address
$master_entries[0][x] = ''; // Employer FEIN

// MARRIAGE DETAILS (Lets Get Started)
$master_entries[0][20] = '01/01/1990'; // Date of marriage
$master_entries[0][21] = ''; // Still live together - not needed
$master_entries[0][24] = ''; // If No, date of separation

// NAME CHANGE (Lets Get Started)
$master_entries[0][27] = 'No'; // Name change requested?
$master_entries[0][28] = 'Rebekah Rochelle Parker'; // if yes, which party requests name change?
$master_entries[0][29] = 'Rebekah Rochelle Rasband'; // What will the name be changed to?

// HEALTH INSURANCE FOR CHILDREN
$master_entries[0][9201] = 'No'; // Health Insurance in place
// IF YES
$master_entries[0][9202] = 'Other'; // Health Insurance Type [OPTIONS: My Employment, Spouses Employment, Private, Medicaid, Chip, Other]
$master_entries[0][9203] = 'ABC Health Insurance Company'; // Health Insurance Company Name
$master_entries[0][9204] = 'HIA123456'; // Health Insurance Policy Number
$master_entries[0][9205] = 'HIA-ID1234'; // Health Insurance Policy Holder ID Number
$master_entries[0][9206] = 'Me'; // Health Insurance Person Responsible for premium [Me, My Spouse]
$master_entries[0][9207] = '1250.00'; // Health Insurance Monthly Premium

// DENTAL INSURANCE FOR CHILDREN
$master_entries[0][9211] = 'No'; // Dental Insurance in place
// IF YES
$master_entries[0][9212] = 'My Spouses Employment'; // Dental Insurance Type [OPTIONS: My Employment, My Spouses Employment, Private, Medicaid, Chip, Other]
$master_entries[0][9213] = 'XYZ Dental Insurance Company'; // Dental Insurance Company Name
$master_entries[0][9214] = 'DIA123456'; // Dental Insurance Policy Number
$master_entries[0][9215] = 'DIA-ID1234'; // Dental Insurance Policy Holder ID Number
$master_entries[0][9216] = 'My Spouse'; // Dental Insurance Person Responsible for premium [Me, My Spouse]
$master_entries[0][9217] = '500.00'; // Dental Insurance Monthly Premium

// CHILDREN (Tell Us About Your Child(ren))
$master_entries[0][259] = ''; // Child Reater entry ids comma separated

// CHILDREN CHILD SUPPORT DETAILS
$master_entries[0][9001] = '01/04/2022'; // First Payment Due Date
$master_entries[0][9002] = '1250.00'; // First Amount

// TEST CHILDREN ENTRIES
$children_entries = array(); // Tell Us About Your Child(ren)

// Child 1 if exists Full Name
$children_entries[0][2]['first'] = 'Alice';
$children_entries[0][2]['middle'] = 'Anne';
$children_entries[0][2]['last'] = 'Parker';
$children_entries[0][3] = 'Female'; // Gender
$children_entries[0][22] = '333-33-3333'; // SSN
$children_entries[0][4] = '01/01/2005'; // DOB
$children_entries[0][19] = '17'; // Age
$children_entries[0][6] = 'Yes'; // Drivers License?
$children_entries[0][23] = 'DL333333'; // Drivers license number
$children_entries[0][8] = 'Texas'; // Drivers license State

// Child 2 if exists Full Name
// $children_entries[1][2]['first'] = 'Bryce';
// $children_entries[1][2]['middle'] = 'Ben';
// $children_entries[1][2]['last'] = 'Parker';
// $children_entries[1][3] = 'Male'; // Gender
// $children_entries[1][22] = '444-44-4444'; // SSN
// $children_entries[1][4] = '02/02/2006'; // DOB
// $children_entries[1][19] = '16'; // Age
// $children_entries[1][6] = 'Yes'; // Drivers License?
// $children_entries[1][23] = 'DL444444'; // Drivers license number
// $children_entries[1][8] = 'Texas'; // Drivers license State

// Child 3 if exists Full Name
// $children_entries[2][2]['first'] = 'Cassie';
// $children_entries[2][2]['middle'] = 'Cheryl';
// $children_entries[2][2]['last'] = 'Parker';
// $children_entries[2][3] = 'Female'; // Gender
// $children_entries[2][22] = '555-55-5555'; // SSN
// $children_entries[2][4] = '03/03/2009'; // DOB
// $children_entries[2][19] = '13'; // Age
// $children_entries[2][6] = 'No'; // Drivers License?
// $children_entries[2][23] = ''; // Drivers license number
// $children_entries[2][8] = ''; // Drivers license State

// Child 4 if exists Full Name
// $children_entries[3][2]['first'] = 'Dean';
// $children_entries[3][2]['middle'] = 'Donald';
// $children_entries[3][2]['last'] = 'Parker';
// $children_entries[3][3] = 'Male'; // Gender
// $children_entries[3][22] = '666-66-6666'; // SSN
// $children_entries[3][4] = '04/04/20010'; // DOB
// $children_entries[3][19] = '12'; // Age
// $children_entries[3][6] = 'No'; // Drivers License?
// $children_entries[3][23] = ''; // Drivers license number
// $children_entries[3][8] = ''; // Drivers license State

// USED FOR HEALTH & DENTAL SECTIONS
$petitionerGender = $master_entries[0][97];
$respondentGender = $master_entries[0][115];

?>

<!-- ------------------------------------------------------------------------------------------------ -->
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

.bs_fontsize_small {
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
.bs_text_bold {
  font-weight: bold;
}

.bs_text_italics {
  font-style: italic;
}

.bs_text_underline {
  text-style: underline;
}

.bs_spacer {
  height: 5mm;
}

.bs_text_small {
  font-size: 10pt;
}

.image-standing_order {
  height: 255mm;
}

.indent-paragraph {
  text-indent: 10.5mm;
  line-height: 200%;
}

.indent-paragraph-text {
  padding-left: 100px;
  text-align: justify;

  line-height: 200%;
}

.paragraph {
  line-height: 200%;
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
table.tb-health_insurance,
table.tb-health_insurance th,
table.tb-health_insurance td {
  border: 1px solid;
  border-collapse: collapse;
}

table.tb-health_insurance th,
table.tb-health_insurance td {
  padding: 5px 1px;
  border-collapse: collapse;
}

/* .table-health_insurance-col_1_8 {
  width: 15%;
} */

.table-health_insurance-col_2_8 {
  width: 12%;
}

.table-health_insurance-col_3_8 {
  width: 12%;
}

.table-health_insurance-col_4_8 {
  width: 10%;
}

.table-health_insurance-col_5_8 {
  width: 12%;
}

.table-health_insurance-col_6_8 {
  width: 8%;
}

.table-health_insurance-col_7_8 {
  width: 8%;
}

.table-health_insurance-col_8_8 {
  width: 8%;
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
  width: 89%;
}

.footer_right_half {
  width: 10%;
}
</style>
<!-- STYLES END -->

<!-- ------------------------------------------------------------------------------------------------ -->
<!-- Body Start -->

<body>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- SECTION: Header/Footer -->
  <!-- Variables -->
  <?php
// Cause Number
$jurisCauseNumber = $master_entries[0][7];

// Petitioner Full Name
$petitionerNameFirst = $master_entries[0][96]['first'];
$petitionerNameMiddle = $master_entries[0][96]['middle'];
$petitionerNameLast = $master_entries[0][96]['last'];
if ($petitionerNameMiddle == '') {
    $petitionerNameFull = strtoupper($petitionerNameFirst . ' ' . $petitionerNameLast);
    $petitionerNameFull = strtoupper('Test');
} else {
    $petitionerNameFull = strtoupper($petitionerNameFirst . ' ' . $petitionerNameMiddle . ' ' . $petitionerNameLast);
}

?>

  <!-- Output -->
  <htmlpagefooter name="MyCustomFooter">
    <table class="footer">
      <tr>
        <td class="footer_left_half"><span class="bs_text_bold bs_fontsize_small">STATEMENT OF HEALTH AND DENTAL
            INSURANCE AVAILABILITY</span>
        </td>
        <td class="footer_right_half text_align_right"><span class="bs_text_bold bs_fontsize_small">PAGE {PAGENO}</span>
        </td>
      </tr>
      <tr>
        <td class="footer_left_half"><span class="bs_text_bold bs_fontsize_small"><?php echo $jurisCauseNumber ?> /
            <?php echo $petitionerNameFull ?></span>
        </td>
        <td class="footer_right_half text_align_right">&nbsp;</td>
      </tr>
    </table>
  </htmlpagefooter>

  <!-- --------------------------------------------------------------------------------------------------------------- -->
  <!-- SECTION: Bookmarks -->
  <!-- Variables: None -->
  <!-- Output -->
  <bookmark content="Insurance Availibility" />

  <!-- --------------------------------------------------------------------------------------------------------------- -->
  <!-- SECTION: Cause Number -->
  <!-- Variables -->
  <!-- $jurisCauseNumber: Already retrieved in SECTION: Bookmark -->
  <!-- Output -->
  <table class="table-cause_number">
    <tr>
      <td class="table-cause_number-col_1_4">&nbsp;</td>
      <td class="table-cause_number-col_2_4 bs_fontsize_normal"><span class="bs_text_bold">NO.</span></td>
      <td class="table-cause_number-col_3_4 bs_fontsize_normal"><span
          class="text_align_center bs_text_bold"><?php echo $jurisCauseNumber ?></span>
      </td>
      <td class="table-cause_number-col_4_4">&nbsp;</td>
    </tr>
  </table>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- SPACER -->
  <!-- Variables: NONE -->
  <!-- Output -->
  <div class="bs_spacer"></div>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- SECTION: Pleading Table -->
  <!-- Variables -->
  <?php
// IN THE MATTER OF | IN THE MARRIAGE OF
// Petitioner Full Name
// Already obtained for Footer

// Respondent Full Name
$respondentNameFirst = $master_entries[0][114]['first'];
$respondentNameMiddle = $master_entries[0][114]['middle'];
$respondentNameLast = $master_entries[0][114]['last'];
if ($respondentNameMiddle == '') {
    $respondentNameFull = strtoupper($respondentNameFirst . ' ' . $respondentNameLast);
} else {
    $respondentNameFull = strtoupper($respondentNameFirst . ' ' . $respondentNameMiddle . ' ' . $respondentNameLast);
}

// Childrens Names
$count_children_entries = count($children_entries);
$children = array();

for ($i = 0; $i < $count_children_entries; $i++) {
    $children[$i]['first_name'] = $children_entries[$i][2]['first'];
    $children[$i]['middle_name'] = $children_entries[$i][2]['middle'];
    $children[$i]['last_name'] = $children_entries[$i][2]['last'];
    if ($children[$i]['middle_name'] != '') {
        $children[$i]['full_name'] = $children[$i]['first_name'] . ' ' . $children[$i]['middle_name'] . ' ' . $children[$i]['last_name'];
    } else {
        $children[$i]['full_name'] = $children[$i]['first_name'] . ' ' . $children[$i]['last_name'];
    }
    $children[$i]['gender'] = $children_entries[$i][3];
    $children[$i]['birth_date_raw'] = $children_entries[$i][4];
    $children[$i]['birth_date_string'] = strtotime($children[$i]['birth_date_raw']);
    $children[$i]['birth_date'] = date('F j, Y', $children[$i]['birth_date_string']);
    $children[$i]['has_dl'] = $children_entries[$i][6];

    // echo '<pre>';
    // echo 'CHILDREN<br>';
    // echo 'Birth Date Raw: ' . $children[$i]['birth_date_raw'] . '<br>';
    // echo 'Birth Date String: ' . $children[$i]['birth_date_string'] . '<br>';
    // echo 'Birth Date: ' . $children[$i]['birth_date'] . '<br>';
    // print_r($children[$i]);
    // echo '</pre>';

    // Judicial District
    $jurisDistrict = $master_entries[0][5];
    // Judicial County
    $jurisCounty = strtoupper($master_entries[0][6]);
}

?>

  <!-- Output -->
  <!-- [CONDITION: NO CHILDREN] -->
  <?php if ($count_children_entries == 0) {?>
  <table class="INTRO">
    <tr class="paragraph">
      <td class="table_header_column"><span class="bs_text_bold bs_fontsize_normal">IN THE MATTER OF</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold bs_fontsize_normal">IN THE DISTRICT OF</span></td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span class="bs_text_bold bs_fontsize_normal">IN THE MARRIAGE OF</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_right_column"><span class="bs_text_bold bs_fontsize_normal">&nbsp;</span></td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span class="bs_text_bold bs_fontsize_normal">&nbsp;</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_right_column"><span class="bs_text_bold bs_fontsize_normal">&nbsp;</span></td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span
          class="bs_text_bold bs_fontsize_normal"><?php echo $petitionerNameFull; ?></span>
      </td>
      <td class="table_header_middle_column"><span class="bs_text_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span
          class="bs_text_bold bs_fontsize_normal"><u>&nbsp;<?php echo $jurisDistrict ?> &nbsp;</u>
          JUDICIAL DISTRICT</span>
      </td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span class="bs_text_bold bs_fontsize_normal">AND</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold bs_fontsize_normal">&nbsp;</span></td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span
          class="bs_text_bold bs_fontsize_normal"><?php echo $respondentNameFull; ?></span>
      </td>
      <td class="table_header_middle_column"><span class="bs_text_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span
          class="bs_text_bold bs_fontsize_normal"><?php echo ($jurisCounty) . " COUNTY, TEXAS"; ?></span></td>
    </tr>
  </table>
  <?php }?>



  <!-- WITH CHILDREN -->
  <?php if ($count_children_entries > 0) {?>
  <table class="INTRO">
    <tr class="paragraph">
      <td class="table_header_left_column"><span class="bs_text_bold bs_fontsize_normal">IN THE MATTER OF</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold bs_fontsize_normal">IN THE DISTRICT OF</span></td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span class="bs_text_bold bs_fontsize_normal">IN THE MARRIAGE OF</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold bs_fontsize_normal">&nbsp;</span></td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span class="bs_text_bold bs_fontsize_normal">&nbsp;</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold bs_fontsize_normal">&nbsp;</span></td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span
          class="bs_text_bold bs_fontsize_normal"><?php echo $petitionerNameFull; ?></span>
      </td>
      <td class="table_header_middle_column"><span class="bs_text_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold bs_fontsize_normal">&nbsp;</span></td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span class="bs_text_bold bs_fontsize_normal">AND</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span
          class="bs_text_bold bs_fontsize_normal"><u>&nbsp;<?php echo $jurisDistrict ?> &nbsp;</u> JUDICIAL
          DISTRICT</span>
      </td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span
          class="bs_text_bold bs_fontsize_normal"><?php echo $respondentNameFull; ?></span>
      </td>
      <td class="table_header_middle_column"><span class="bs_text_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold bs_fontsize_normal"></span>&nbsp;</td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span class="bs_text_bold bs_fontsize_normal">&nbsp;</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold bs_fontsize_normal">&nbsp;</span></td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span class="bs_text_bold bs_fontsize_normal">AND IN THE INTEREST OF</span>
      </td>
      <td class="table_header_middle_column"><span class="bs_text_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold bs_fontsize_normal"></span>&nbsp;</td>
    </tr>
    <?php if ($count_children_entries == 1) {?>
    <tr class="paragraph">
      <td class="table_header_left_column"><span
          class="bs_text_bold bs_fontsize_normal"><?php echo strtoupper($children[0]['full_name']) ?>,</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold bs_fontsize_normal">&nbsp;</span></td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span class="bs_text_bold bs_fontsize_normal">
          A CHILD.</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span
          class="bs_text_bold bs_fontsize_normal"><?php echo $jurisCounty . " COUNTY, TEXAS"; ?></span></td>
    </tr>

    <?php }

    if ($count_children_entries == 2) {?>
    <tr class="paragraph">
      <td class="table_header_left_column"><span
          class="bs_text_bold bs_fontsize_normal"><?php echo strtoupper($children[0]['full_name']) ?> AND
        </span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold bs_fontsize_normal"></span>&nbsp;</td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span
          class="bs_text_bold bs_fontsize_normal"><?php echo strtoupper($children[1]['full_name']) ?>,</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold bs_fontsize_normal">&nbsp;</span></td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span class="bs_text_bold bs_fontsize_normal">
          CHILDREN.</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span
          class="bs_text_bold bs_fontsize_normal"><?php echo $jurisCounty . " COUNTY, TEXAS"; ?></span></td>
    </tr>
    <?php }
    if ($count_children_entries == 3) {?>
    <tr class="paragraph">
      <td class="table_header_left_column"><span
          class="bs_text_bold bs_fontsize_normal"><?php echo strtoupper($children[0]['full_name']) ?>,
        </span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold bs_fontsize_normal"></span>&nbsp;</td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span
          class="bs_text_bold bs_fontsize_normal"><?php echo strtoupper($children[1]['full_name']) ?> AND
        </span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold bs_fontsize_normal"></span>&nbsp;</td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span
          class="bs_text_bold bs_fontsize_normal"><?php echo strtoupper($children[2]['full_name']) ?>,</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold bs_fontsize_normal">&nbsp;</span></td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span class="bs_text_bold bs_fontsize_normal">
          CHILDREN.</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_rheader_ight_column"><span
          class="bs_text_bold bs_fontsize_normal"><?php echo $jurisCounty . " COUNTY, TEXAS"; ?></span></td>
    </tr>
    <?php }
    if ($count_children_entries == 4) {?>
    <tr class="paragraph">
      <td class="table_header_left_column"><span
          class="bs_text_bold bs_fontsize_normal"><?php echo strtoupper($children[0]['full_name']) ?>,
        </span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold bs_fontsize_normal"></span>&nbsp;</td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span
          class="bs_text_bold bs_fontsize_normal"><?php echo strtoupper($children[1]['full_name']) ?> AND
        </span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold bs_fontsize_normal"></span>&nbsp;</td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span
          class="bs_text_bold bs_fontsize_normal"><?php echo strtoupper($children[2]['full_name']) ?>,</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold bs_fontsize_normal">&nbsp;</span></td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span
          class="bs_text_bold bs_fontsize_normal"><?php echo strtoupper($children[3]['full_name']) ?>,</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold bs_fontsize_normal">&nbsp;</span></td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span class="bs_text_bold bs_fontsize_normal">
          CHILDREN.</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_rheader_ight_column"><span
          class="bs_text_bold bs_fontsize_normal"><?php echo $jurisCounty . " COUNTY, TEXAS"; ?></span></td>
    </tr>
    <?php }?>
  </table>

  <?php }?>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- SPACER -->
  <div class="bs_spacer"></div>



  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- TITLE -->
  <!-- Variables:NONE -->
  <!-- Output -->
  <div class="text_align_center bs_text_bold"><u>STATEMENT OF HEALTH INSURANCE AVAILABILITY</u></div>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- SPACER -->
  <div class="bs_spacer"></div>

  <!-- --------------------------------------------------------------------------------------------------------------- -->
  <!-- Intro Paragraph -->
  <!-- Variables: Already obtained -->
  <!-- Output -->
  <div class="indent-paragraph"> This statement is made by <?php echo $petitionerNameFull ?>,
    Petitioner, in accordance with section 154.181 of the TEXAS FAMILY CODE.
    Beside the name of each child, check all types of health insurance or benefits currently covering
    that child:
  </div>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- SPACER -->
  <div class="bs_spacer"></div>

  <!-- --------------------------------------------------------------------------------------------------------------- -->
  <!-- Table of Health Insurance -->
  <!-- Variables:  -->
  <?php
// Is Health Insurance in place?
$hiaInsuranceExists = $master_entries[0][9201];
// TESTING:
// echo 'HIA Exists: ' . $hiaInsuranceExists . '<br>';

// IF YES
if ($hiaInsuranceExists == 'Yes') {

    // Identify Private Insurance Type [OPTIONS: My Employment, Spouses Employment, Private, Medicaid, CHIP, Other]
    $hiaType = $master_entries[0][9202];

    switch ($hiaType) {
        // Check Cell Fathers or Mothers Employment?
        case "My Employment":
            // If Gender of Petitioner == 'Male'
            if ($petitionerGender == 'Male') {
                // $parentRoleResponsible == 'Father'
                $hiaParentRoleResponsible = 'Father';
                $hiaDisplayFathersEmployerCell = $selectOption;
            } else {
                // Else responsible party is Mother
                $hiaParentRoleResponsible = 'Mother';
                $hiaDisplayMothersEmployerCell = $selectOption;
            }
            break;
        case "My Spouses Employment":
            // If Gender of Respondent == 'Male'
            if ($respondentGender == 'Male') {
                // $parentRoleResponsible == 'Father'
                $hiaParentRoleResponsible = 'Father';
                $hiaDisplayFathersEmployerCell = $selectOption;
            } else {
                // Else responsible party is Mother
                $hiaParentRoleResponsible = 'Mother';
                $hiaDisplayMothersEmployerCell = $selectOption;
            }
            break;
        // Check cell Private Insurance?
        case "Private":
            $hiaDisplayPvtCell = $selectOption;
            break;
        // Check cell Medicaid?
        case "Medicaid":
            $hiaDisplayMedicaidCell = $selectOption;
            break;
        // Check cell CHIP?
        case "CHIP":
            $hiaDisplayChipCell = $selectOption;
            break;
        // Check cell Other?
        case "Other":
            $hiaDisplayOtherCell = $selectOption;
            break;
    }
} else {
    // Check Cell None?
    $hiaDisplayNoneCell = $selectOption;
}

?>
  <!-- Output -->
  <p class="bs_text_bold">Health Insurance</p>

  <table class="tb-health_insurance" style="width:100%;">
    <tr>
      <th class="table-health_insurance-col_1_8 bs_text_bold bs_text_italics">&nbsp;</th>
      <th class="table-health_insurance-col_2_8 bs_text_bold bs_text_italics">Father’s Employer</th>
      <th class="table-health_insurance-col_3_8 bs_text_bold bs_text_italics">Mother’s Employer</th>
      <th class="table-health_insurance-col_4_8 bs_text_bold bs_text_italics">Private</th>
      <th class="table-health_insurance-col_5_8 bs_text_bold bs_text_italics">Medicaid</th>
      <th class="table-health_insurance-col_6_8 bs_text_bold bs_text_italics">CHIP</th>
      <th class="table-health_insurance-col_7_8 bs_text_bold bs_text_italics">Other</th>
      <th class="table-health_insurance-col_8_8 bs_text_bold bs_text_italics">None</th>
    </tr>

    <!-- Children == 1 -->

    <!--Child Name: -->

    <tr>
      <td><?php echo $children[0]['full_name'] ?>:</td>
      <!--Father's Employer-->
      <td class="text_align_center"><?php echo $hiaDisplayFathersEmployerCell ?></td>
      <!--Mother's Employer-->
      <td class="text_align_center"><?php echo $hiaDisplayMothersEmployerCell ?></td>
      <!--Private-->
      <td class="text_align_center"><?php echo $hiaDisplayPvtCell ?></td>
      <!--Medicaid-->
      <td class="text_align_center"><?php echo $hiaDisplayMedicaidCell ?></td>
      <!--CHIP-->
      <td class="text_align_center"><?php echo $hiaDisplayChipCell ?></td>
      <!--Other-->
      <td class="text_align_center"><?php echo $hiaDisplayOtherCell ?></td>
      <!--None-->
      <td class="text_align_center"><?php echo $hiaDisplayNoneCell ?></td>
    </tr>

    ?>

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
      <!--Father's Employer-->
      <td class="text_align_center"><?php echo $hiaDisplayFathersEmployerCell ?></td>
      <!--Mother's Employer-->
      <td class="text_align_center"><?php echo $hiaDisplayMothersEmployerCell ?></td>
      <!--Private-->
      <td class="text_align_center"><?php echo $hiaDisplayPvtCell ?></td>
      <!--Medicaid-->
      <td class="text_align_center"><?php echo $hiaDisplayMedicaidCell ?></td>
      <!--CHIP-->
      <td class="text_align_center"><?php echo $hiaDisplayChipCell ?></td>
      <!--Other-->
      <td class="text_align_center"><?php echo $hiaDisplayOtherCell ?></td>
      <!--None-->
      <td class="text_align_center"><?php echo $hiaDisplayNoneCell ?></td>
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
      <td><?php echo $children[2]['full_name'] ?>:</td>
      <!--Father's Employer-->
      <td class="text_align_center"><?php echo $hiaDisplayFathersEmployerCell ?></td>
      <!--Mother's Employer-->
      <td class="text_align_center"><?php echo $hiaDisplayMothersEmployerCell ?></td>
      <!--Private-->
      <td class="text_align_center"><?php echo $hiaDisplayPvtCell ?></td>
      <!--Medicaid-->
      <td class="text_align_center"><?php echo $hiaDisplayMedicaidCell ?></td>
      <!--CHIP-->
      <td class="text_align_center"><?php echo $hiaDisplayChipCell ?></td>
      <!--Other-->
      <td class="text_align_center"><?php echo $hiaDisplayOtherCell ?></td>
      <!--None-->
      <td class="text_align_center"><?php echo $hiaDisplayNoneCell ?></td>
    </tr>
    <?php }?>

    <!-- Children == 4 -->
    <?php if ($count_children_entries > 3) {?>
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
      <td><?php echo $children[3]['full_name'] ?>:</td>
      <!--Father's Employer-->
      <td class="text_align_center"><?php echo $hiaDisplayFathersEmployerCell ?></td>
      <!--Mother's Employer-->
      <td class="text_align_center"><?php echo $hiaDisplayMothersEmployerCell ?></td>
      <!--Private-->
      <td class="text_align_center"><?php echo $hiaDisplayPvtCell ?></td>
      <!--Medicaid-->
      <td class="text_align_center"><?php echo $hiaDisplayMedicaidCell ?></td>
      <!--CHIP-->
      <td class="text_align_center"><?php echo $hiaDisplayChipCell ?></td>
      <!--Other-->
      <td class="text_align_center"><?php echo $hiaDisplayOtherCell ?></td>
      <!--None-->
      <td class="text_align_center"><?php echo $hiaDisplayNoneCell ?></td>
    </tr>
    <?php }?>
  </table>
  <div class="bs_spacer"></div>

  <!-- CONDITIONAL SPACER -->
  <?php if ($count_children_entries == 4) {echo '<pagebreak>';}?>

  <!-- SECTION: Health Insurance Provider Details -->
  <!-- Variables -->
  <?php
if ($hiaInsuranceExists == 'Yes') {
    // Health Insurance Company Name
    $hiaCompanyName = $master_entries[0][9203];
    // Health Insurance Policy Number
    $hiaPolicyNumber = $master_entries[0][9204];
    // Health Insurance Policy Holder Name
    $hiaPolicyHolderResponsibleParty = $master_entries[0][9206];
    if ($hiaPolicyHolderResponsibleParty == 'Me') {
        $hiaPolicyHolderName = $petitionerNameFull;
    } else {
        $hiaPolicyHolderName = $respondentNameFull;
    }
    // Health Insurance Policy Holder ID Number
    $hiaPolicyHolderIdNumber = $master_entries[0][9205];
    // Policy Holder Name & ID Inline
    $hiaPolicyHolderNameId = $hiaPolicyHolderName . ', ' . $hiaPolicyHolderIdNumber;
    // Children Covered
    switch ($count_children_entries) {
        case 1:
            $childrenCovered = $children[0]['full_name'];
            break;
        case 2:
            $childrenCovered = $children[0]['full_name'] . ', ' . $children[1]['full_name'];
            break;
        case 3:
            $childrenCovered = $children[0]['full_name'] . ', ' . $children[1]['full_name'] . ', ' . $children[2]['full_name'];
            break;
        case 4:
            $childrenCovered = $children[0]['full_name'] . ', ' . $children[1]['full_name'] . ', ' . $children[2]['full_name'] . ', ' . $children[3]['full_name'];
            break;
    }
    // Health Insurance Montly Premium
    $hiaPolicyMonthlyPremium = $master_entries[0][9207];
}

?>

  <!-- OUTPUT -->

  <div class="paragraph">2. For each health insurance source, please list:
  </div>
  <div class="indent-paragraph">a. Name of insurance company: <?php echo $hiaCompanyName ?>
  </div>
  <div class="indent-paragraph">b. Group Policy ID number: <?php echo $hiaPolicyNumber ?>
  </div>
  <div class="indent-paragraph">c. Policyholder name and ID number: <?php echo $hiaPolicyHolderNameId ?>
  </div>
  <div class="indent-paragraph">d. Name of child(ren) covered: <?php echo $childrenCovered ?>
  </div>
  <div class="indent-paragraph">e. Cost of premium to policyholder for child(ren), if known:
    <?php echo $hiaPolicyMonthlyPremium ?>
  </div>


  <!-- --------------------------------------------------------------------------------------------------------------- -->
  <!-- Dental Insurance Table -->
  <!-- Variables -->
  <?php

// Is Dental Insurance in place?
$diaInsuranceExists = $master_entries[0][9211];
// TESTING:
// echo 'dia Exists: ' . $diaInsuranceExists . '<br>';

// IF YES
if ($diaInsuranceExists == 'Yes') {

    // Identify Private Insurance Type [OPTIONS: My employment, Spouses employnent, Private, Medicaid, CHIP, Other]
    $diaType = $master_entries[0][9212];

    switch ($diaType) {
        // Check Cell Fathers or Mothers Employment?
        case "My Employment":
            // If Gender of Petitioner == 'Male'
            if ($petitionerGender == 'Male') {
                // $parentRoleResponsible == 'Father'
                $diaParentRoleResponsible = 'Father';
                $diaDisplayFathersEmployerCell = $selectOption;
            } else {
                // Else responsible party is Mother
                $diaParentRoleResponsible = 'Mother';
                $diaDisplayMothersEmployerCell = $selectOption;
            }
            break;
        case "My Spouses Employment":
            // If Gender of Respondent == 'Male'
            if ($respondentGender == 'Male') {
                // $parentRoleResponsible == 'Father'
                $diaParentRoleResponsible = 'Father';
                $diaDisplayFathersEmployerCell = $selectOption;
            } else {
                // Else responsible party is Mother
                $diaParentRoleResponsible = 'Mother';
                $diaDisplayMothersEmployerCell = $selectOption;
            }
            break;
        // Check cell Private Insurance?
        case "Private":
            $diaDisplayPvtCell = $selectOption;
            break;
        // Check cell Medicaid?
        case "Medicaid":
            $diaDisplayMedicaidCell = $selectOption;
            break;
        // Check cell CHIP?
        case "CHIP":
            $diaDisplayChipCell = $selectOption;
            break;
        // Check cell Other?
        case "Other":
            $diaDisplayOtherCell = $selectOption;
            break;
    }
} else {
    // Check Cell None?
    $diaDisplayNoneCell = $selectOption;
}
?>
  <!-- Output -->
  <!-- CONDITIONAL SPACER -->
  <?php if ($count_children_entries > 2) {echo '<div class="bs_spacer"></div>';}?>
  <?php if ($count_children_entries == 1) {echo '<pagebreak>';}?>

  <p class="bs_text_bold">Dental Insurance</p>
  <table class="tb-health_insurance" style="width:100%;">
    <tr>
      <th class="table-health_insurance-col_1_8 bs_text_bold bs_text_italics">&nbsp;</th>
      <th class="table-health_insurance-col_2_8 bs_text_bold bs_text_italics">Father’s Employer</th>
      <th class="table-health_insurance-col_3_8 bs_text_bold bs_text_italics">Mother’s Employer</th>
      <th class="table-health_insurance-col_4_8 bs_text_bold bs_text_italics">Private</th>
      <th class="table-health_insurance-col_5_8 bs_text_bold bs_text_italics">Medicaid</th>
      <th class="table-health_insurance-col_6_8 bs_text_bold bs_text_italics">CHIP</th>
      <th class="table-health_insurance-col_7_8 bs_text_bold bs_text_italics">Other</th>
      <th class="table-health_insurance-col_8_8 bs_text_bold bs_text_italics">None</th>
    </tr>

    <!-- Children == 1 -->

    <!--Child Name: -->

    <tr>
      <td><?php echo $children[0]['full_name'] ?>:</td>
      <!--Father's Employer-->
      <td class="text_align_center"><?php echo $diaDisplayFathersEmployerCell ?></td>
      <!--Mother's Employer-->
      <td class="text_align_center"><?php echo $diaDisplayMothersEmployerCell ?></td>
      <!--Private-->
      <td class="text_align_center"><?php echo $diaDisplayPvtCell ?></td>
      <!--Medicaid-->
      <td class="text_align_center"><?php echo $diaDisplayMedicaidCell ?></td>
      <!--CHIP-->
      <td class="text_align_center"><?php echo $diaDisplayChipCell ?></td>
      <!--Other-->
      <td class="text_align_center"><?php echo $diaDisplayOtherCell ?></td>
      <!--None-->
      <td class="text_align_center"><?php echo $diaDisplayNoneCell ?></td>
    </tr>

    ?>

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
      <!--Father's Employer-->
      <td class="text_align_center"><?php echo $diaDisplayFathersEmployerCell ?></td>
      <!--Mother's Employer-->
      <td class="text_align_center"><?php echo $diaDisplayMothersEmployerCell ?></td>
      <!--Private-->
      <td class="text_align_center"><?php echo $diaDisplayPvtCell ?></td>
      <!--Medicaid-->
      <td class="text_align_center"><?php echo $diaDisplayMedicaidCell ?></td>
      <!--CHIP-->
      <td class="text_align_center"><?php echo $diaDisplayChipCell ?></td>
      <!--Other-->
      <td class="text_align_center"><?php echo $diaDisplayOtherCell ?></td>
      <!--None-->
      <td class="text_align_center"><?php echo $diaDisplayNoneCell ?></td>
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
      <td><?php echo $children[2]['full_name'] ?>:</td>
      <!--Father's Employer-->
      <td class="text_align_center"><?php echo $diaDisplayFathersEmployerCell ?></td>
      <!--Mother's Employer-->
      <td class="text_align_center"><?php echo $diaDisplayMothersEmployerCell ?></td>
      <!--Private-->
      <td class="text_align_center"><?php echo $diaDisplayPvtCell ?></td>
      <!--Medicaid-->
      <td class="text_align_center"><?php echo $diaDisplayMedicaidCell ?></td>
      <!--CHIP-->
      <td class="text_align_center"><?php echo $diaDisplayChipCell ?></td>
      <!--Other-->
      <td class="text_align_center"><?php echo $diaDisplayOtherCell ?></td>
      <!--None-->
      <td class="text_align_center"><?php echo $diaDisplayNoneCell ?></td>
    </tr>
    <?php }?>

    <!-- Children == 4 -->
    <?php if ($count_children_entries > 3) {?>
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
      <td><?php echo $children[3]['full_name'] ?>:</td>
      <!--Father's Employer-->
      <td class="text_align_center"><?php echo $diaDisplayFathersEmployerCell ?></td>
      <!--Mother's Employer-->
      <td class="text_align_center"><?php echo $diaDisplayMothersEmployerCell ?></td>
      <!--Private-->
      <td class="text_align_center"><?php echo $diaDisplayPvtCell ?></td>
      <!--Medicaid-->
      <td class="text_align_center"><?php echo $diaDisplayMedicaidCell ?></td>
      <!--CHIP-->
      <td class="text_align_center"><?php echo $diaDisplayChipCell ?></td>
      <!--Other-->
      <td class="text_align_center"><?php echo $diaDisplayOtherCell ?></td>
      <!--None-->
      <td class="text_align_center"><?php echo $diaDisplayNoneCell ?></td>
    </tr>
    <?php }?>
  </table>
  <div class="bs_spacer"></div>

  <!-- SECTION: Dental Insurance Provider Details -->
  <!-- Variables -->
  <?php
if ($diaInsuranceExists == 'Yes') {
    // Health Insurance Company Name
    $diaCompanyName = $master_entries[0][9213];
    // Health Insurance Policy Number
    $diaPolicyNumber = $master_entries[0][9214];
    // Health Insurance Policy Holder Name
    $diaPolicyHolderResponsibleParty = $master_entries[0][9216];
    if ($diaPolicyHolderResponsibleParty == 'Me') {
        $diaPolicyHolderName = $petitionerNameFull;
    } else {
        $diaPolicyHolderName = $respondentNameFull;
    }
    // Health Insurance Policy Holder ID Number
    $diaPolicyHolderIdNumber = $master_entries[0][9215];
    // Policy Holder Name & ID Inline
    $diaPolicyHolderNameId = $diaPolicyHolderName . ', ' . $diaPolicyHolderIdNumber;
    // Children Covered
    switch ($count_children_entries) {
        case 1:
            $childrenCovered = $children[0]['full_name'];
            break;
        case 2:
            $childrenCovered = $children[0]['full_name'] . ', ' . $children[1]['full_name'];
            break;
        case 3:
            $childrenCovered = $children[0]['full_name'] . ', ' . $children[1]['full_name'] . ', ' . $children[2]['full_name'];
            break;
        case 4:
            $childrenCovered = $children[0]['full_name'] . ', ' . $children[1]['full_name'] . ', ' . $children[2]['full_name'] . ', ' . $children[3]['full_name'];
            break;
    }
    // Health Insurance Montly Premium
    $diaPolicyMonthlyPremium = $master_entries[0][9217];
}

?>

  <!-- OUTPUT -->

  <div class="paragraph">2. For each dental insurance source, please list:
  </div>
  <div class="indent-paragraph">a. Name of insurance company: <?php echo $diaCompanyName ?>
  </div>
  <div class="indent-paragraph">b. Group Policy ID number: <?php echo $diaPolicyNumber ?>
  </div>
  <div class="indent-paragraph">c. Policyholder name and ID number: <?php echo $diaPolicyHolderNameId ?>
  </div>
  <div class="indent-paragraph">d. Name of child(ren) covered: <?php echo $childrenCovered ?>
  </div>
  <div class="indent-paragraph">e. Cost of premium to policyholder for child(ren), if known:
    <?php echo $diaPolicyMonthlyPremium ?>
  </div>




  <!-- CONDITIONAL SPACER -->
  <?php if ($count_children_entries == 4) {echo '<pagebreak>';}?>

  <!-- SECTION Signature Field -->
  <div class="bs_spacer"></div>
  <div class="bs_spacer"></div>
  <div class="bs_spacer"></div>
  <div class="bs_spacer"></div>

  <div class="paragraph">Signed On ________________________
  </div>

  <div class="paragraph">__________________________________________
  </div>
  <div class="paragraph"> <?php echo $petitionerNameFull ?>
  </div>

</body>