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

/* -------------------------------------------------------------------------------------------- */
/* GLOBAL VARIABLES */
$selectOption = 'X';
$leaveBlank = '&nbsp;';

// Get data from master

// For Testing Purposes
$master_entries = array();

// REPEATER FORM ENTRY ID
$master_entries[0][83] = ''; // Tell Is About Your Child(ren)
// $master_entries[0][] = ''; //
// $master_entries[0][] = ''; //

// PREQUAL DATA
// Service & Plan
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
$master_entries[0][243] = ''; // SECTION HEADING: Texas Residency
$master_entries[0][244] = '6 months or longer'; // Petitioner State duration
$master_entries[0][245] = 'Collin'; // Petitioner County
$master_entries[0][246] = ''; // If 'Other', petitioner County other
$master_entries[0][247] = '3 months or longer'; // $petitioner County duration
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
$master_entries[0][6] = 'Collin'; // Juditial County
$master_entries[0][8001] = '03/01/2022'; // SDU Section: Order Information [Date of Hearing: Both entered by paralegal]
$master_entries[0][8002] = '03/01/2022'; // SDU Section: Order Information [Order Sign Date: Both entered by paralegal]

// PETITIONER (Tell Us About Yourself)
$master_entries[0][97] = 'Male'; // Gender
$master_entries[0][13] = '111-11-1111'; // SSN
$master_entries[0][279] = 'Yes'; // Drivers license exists
$master_entries[0][14] = 'DL1111111'; // Drivers license number
$master_entries[0][103] = 'Texas'; // Drivers license State
$master_entries[0][7001] = '999-999-9992'; // Petitioner phone home
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
$master_entries[0][295]['street'] = '123 Petitioner Employer Street'; // Petitioner employer
$master_entries[0][295]['street2'] = 'STE 123'; // Petitioner employer
$master_entries[0][295]['city'] = 'Plano'; // Petitioner employer
$master_entries[0][295]['state'] = 'Texas'; // Petitioner employer
$master_entries[0][295]['zip'] = '75093'; // Petitioner employer
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
$master_entries[0][281] = 'Yes '; // Employed?
$master_entries[0][282] = 'Respondent Employer Inc'; // Emplyer name
$master_entries[0][118] = '888-888-8883'; // Phone work
$master_entries[0][301]['street'] = '123 Respondent Employer Street'; // Respondent employer
$master_entries[0][301]['street2'] = 'STE 123'; // Respondent employer
$master_entries[0][301]['city'] = 'Prosper'; // Respondent employer
$master_entries[0][301]['state'] = 'Texas'; // Respondent employer
$master_entries[0][301]['zip'] = '75078'; // Respondent employer
$master_entries[0][x] = '22-2222222'; // Employer FEIN

// MARRIAGE DETAILS (Lets Get Started)
$master_entries[0][20] = ''; // Date of marriage
$master_entries[0][21] = ''; // Still live together
$master_entries[0][24] = ''; // If No, date of separation

// NAME CHANGE (Lets Get Started)
$master_entries[0][27] = 'Yes'; // Name change requested?
$master_entries[0][28] = 'My Spouse'; // if yes, which party requests name change?
$master_entries[0][29] = 'Rebekah Rochelle Rivers'; // What will the name be changed to?

// CHILDREN (Tell Us About Your Child(ren))
$master_entries[0][259] = ''; // Child Reater entry ids comma separated

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

// Get entries from Child Repeater FOrm

$children_entries = array(); // Tell Us About Your Child(ren)

// Child 1 if exists Full Name
// $children_entries[0][2]['first'] = 'Alice';
// $children_entries[0][2]['middle'] = 'Anne';
// $children_entries[0][2]['last'] = 'Parker';
// $children_entries[0][3] = 'Female'; // Gender
// $children_entries[0][22] = '333-33-3333'; // SSN
// $children_entries[0][4] = '01/01/2005'; // DOB
// $children_entries[0][19] = '17'; // Age
// $children_entries[0][6] = 'Yes'; // Drivers License?
// $children_entries[0][23] = 'DL333333'; // Drivers license number
// $children_entries[0][8] = 'Texas'; // Drivers license State

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

?>


<!-- -------------------------------------------------------------------------------------------- -->
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
  padding: 0;
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
<!-- STYLES END -->

<!-- -------------------------------------------------------------------------------------------- -->
<!-- BEGIN BODY OUTPUT -->

<body>

  <!-- -------------------------------------------------------------------------------------------- -->
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

// Respondent Full Name
$respondentNameFirst = $master_entries[0][114]['first'];
$respondentNameMiddle = $master_entries[0][114]['middle'];
$respondentNameLast = $master_entries[0][114]['last'];
if ($respondentNameMiddle == '') {
    $respondentNameFull = strtoupper($respondentNameFirst . ' ' . $respondentNameLast);
} else {
    $respondentNameFull = strtoupper($respondentNameFirst . ' ' . $respondentNameMiddle . ' ' . $respondentNameLast);
}

$count_children_entries = count($children_entries);

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
    $children_birth_date_string = strtotime($children[$i]['birth_date_raw']);
    $children[$i]['birth_date'] = date('F j, Y', $children_birth_date_string);
    $children[$i]['has_dl'] = $children_entries[$i][6];
    // echo '<pre>';
    // echo 'CHILDREN<br>';
    // print_r($children[$i]);
    // echo '<br></pre>';
}

// DISTRICT & COUNTY
$jurisDistrictNumber = $master_entries[0][5]; // Masters
$jurisCounty = strtoupper($master_entries[0][6]); // Right F You

// NAME CHANGE
$nameChangeRequested = $master_entries[0][27]; // Lets Get Started
$nameChangeWho = $master_entries[0][28];
$nameChangeTo = $master_entries[0][29];

// SIGNATURE DETAILS

// Address mailing
$respondent_mailing_address_street_1 = $master_entries[0][72]['street']; // Tell Us About Yourself
$respondent_mailing_address_street_2 = $master_entries[0][72]['street2']; // Tell Us About Yourself
$respondent_mailing_address_city = $master_entries[0][72]['city']; // Tell Us About Yourself
$respondent_mailing_address_state = $master_entries[0][72]['state']; // Tell Us About Yourself
$respondent_mailing_address_zip = $master_entries[0][72]['zip']; // Tell Us About Yourself
// Inline mailing address
if ($respondent_mailing_address_street_2 == '') {
    $respondentMailingAddressInline = $respondent_mailing_address_street_1 . ', ' . $respondent_mailing_address_city . ', ' . $respondent_mailing_address_state . ', ' . $respondent_mailing_address_zip;
} else {
    $respondentMailingAddressInline = $respondent_mailing_address_street_1 . ', ' . $respondent_mailing_address_street_2 . ', ' . $respondent_mailing_address_city . ', ' . $respondent_mailing_address_state . ', ' . $respondent_mailing_address_zip;
}

$respondentPhone = $master_entries[0][117]; // Right For You
$respondentEmail = $master_entries[0][74]; // Right For Your

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
          class="text_align_center bs_bold"><?php echo $jurisCauseNumber ?></span>
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
          class="bs_bold bs_fontsize_normal"><?php echo $petitionerNameFull; ?></span>
      </td>
      <td class="table_header_middle_column"><span class="bs_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_bold bs_fontsize_normal"><span
            class="bs_underline">&nbsp;<?php echo $jurisDistrictNumber ?>&nbsp;</span> JUDICIAL DISTRICT</span>
      </td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span class="bs_bold bs_fontsize_normal">AND</span></td>
      <td class="table_header_middle_column"><span class="bs_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_bold bs_fontsize_normal">&nbsp;</span></td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span
          class="bs_bold bs_fontsize_normal"><?php echo $respondentNameFull; ?></span>
      </td>
      <td class="table_header_middle_column"><span class="bs_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span
          class="bs_bold bs_fontsize_normal"><?php echo $jurisCounty . " COUNTY, TEXAS"; ?></span></td>
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
          class="bs_bold bs_fontsize_normal"><?php echo $petitionerNameFull; ?></span>
      </td>
      <td class="table_header_middle_column"><span class="bs_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_bold bs_fontsize_normal">&nbsp;</span></td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span class="bs_bold bs_fontsize_normal">AND</span></td>
      <td class="table_header_middle_column"><span class="bs_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_bold bs_fontsize_normal"><span
            class="bs_underline">&nbsp;<?php echo $jurisDistrictNumber ?>&nbsp;</span> JUDICIAL DISTRICT</span>
      </td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span
          class="bs_bold bs_fontsize_normal"><?php echo $respondentNameFull; ?></span>
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
          class="bs_bold bs_fontsize_normal"><?php echo $jurisCounty . " COUNTY, TEXAS"; ?></span></td>
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
          class="bs_bold bs_fontsize_normal"><?php echo $jurisCounty . " COUNTY, TEXAS"; ?></span></td>
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
          class="bs_bold bs_fontsize_normal"><?php echo $jurisCounty . " COUNTY, TEXAS"; ?></span></td>
    </tr>

    <?php }

    if ($count_children_entries == 4) {?>
    <tr class="paragraph">
      <td class="table_header_left_column"><span
          class="bs_bold bs_fontsize_normal"><?php echo strtoupper($children[0]['full_name']) ?>,
        </span></td>
      <td class="table_header_middle_column"><span class="bs_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_bold bs_fontsize_normal"></span>&nbsp;</td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span
          class="bs_bold bs_fontsize_normal"><?php echo strtoupper($children[1]['full_name']) ?>,
        </span></td>
      <td class="table_header_middle_column"><span class="bs_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_bold bs_fontsize_normal"></span>&nbsp;</td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span
          class="bs_bold bs_fontsize_normal"><?php echo strtoupper($children[2]['full_name']) ?> AND </span></td>
      <td class="table_header_middle_column"><span class="bs_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_bold bs_fontsize_normal">&nbsp;</span></td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span
          class="bs_bold bs_fontsize_normal"><?php echo strtoupper($children[3]['full_name']) ?>,</span></td>
      <td class="table_header_middle_column"><span class="bs_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_bold bs_fontsize_normal">&nbsp;</span></td>
    </tr>
    <tr class="paragraph">
      <td class="table_header_left_column"><span class="bs_bold bs_fontsize_normal">
          CHILDREN.</span></td>
      <td class="table_header_middle_column"><span class="bs_bold bs_fontsize_normal">&sect;</span></td>
      <td class="table_rheader_ight_column"><span
          class="bs_bold bs_fontsize_normal"><?php echo $jurisCounty . " COUNTY, TEXAS"; ?></span></td>
    </tr>
    <?php }?>
  </table>

  <?php }?>


  <!--- title ---->
  <div class="title"><span class="bs_bold text_align_center"> <br> WAIVER OF SERVICE </span></div>

  <!--- first paragraph, each div is used to create an indented line for aestetic of PDF ---->
  <p class="indent-paragraph"> <?php echo $respondentNameFull ?> appeared in person before me today and stated under
    oath:
  </p>
  <p class="indent-paragraph"> "I, <?php echo $respondentNameFull ?>, am the person named as Respondent in this case.
  </p>
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
  <p class="indent-paragraph"> "I do not waive any rights that I may have with regard to the division of my interest
    in
    my spouse's and my property.</p>

  <!--- Displays if name change requested. Paragraph is stored in a variable ---->
  <?php if ($nameChangeRequested == 'Yes' && $nameChangeWho == 'My Spouse') {?>
  <p class="indent-paragraph">'I request the Court to order that my legal name be <?php echo $nameChangeTo ?>.</p>
  <?php }?>


  <p class="indent-paragraph"> "If I should enter into a settlement agreement with Petitioner, that agreement will
    bear
    my signature indicating my approval of its terms, conditions, and contents. </p>
  <p class="indent-paragraph"> "I request the Court not to enter any orders or judgment not signed by me or without
    my
    receiving prior written notice of the date, time, and place of any proceedings. </p>
  <p class="indent-paragraph"> "I understand that I have a duty to notify the attorney for Petitioner if I change my
    address. I understand that, unless I notify the attorney for Petitioner of any such change in writing, any
    notices
    that I might otherwise be entitled to receive with regard to disposition of this proceeding will be forwarded to
    me
    at
    the address indicated below. </p>
  <p class="indent-paragraph"> "Insofar as this suit is concerned, I waive all rights, privileges, and exemptions
    existing or that may hereafter exist in my favor under the Servicemembers Civil Relief Act, including the
    appointment
    of counsel to represent me in this case. </p>
  <p class="indent-paragraph"> "I further state that the following information is correct and that my- </p>
  <p class="indent-paragraph"> Mailing address is: <?php echo $respondentMailingAddressInline ?> </p>
  <p class="indent-paragraph"> Telephone number is: <?php echo $respondentPhone ?> </p>
  <p class="indent-paragraph"> E-mail address is: <?php echo $respondentEmail ?> </p>
  <p class="indent-paragraph"> "I further understand that I have a duty to notify the Court if my mailing address
    changes during this proceeding."
    </div>


    <!---  SIGNATURES---->

  <div class="height_max"></div>
  <table>
    <tr>
      <td class="table_signature_left_column">&nbsp;</td>
      <td class="table_signature_right_column table_border_top bs_fontsize_normal"><?php echo $respondentNameFull ?>
      </td>
    </tr>
  </table>


  <pagebreak>
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
        <td class="table_signature_right_column bs_fontsize_normal table_border_top">Notary Public, State of Texas
        </td>
      </tr>
    </table>

</body>