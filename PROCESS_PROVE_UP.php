<meta charset="UTF-8">
<?php

/*
 * Template Name: Prove Up
 * Version: 1.0.1
 * Description: A print-friendly template displaying the Prove Up for Divorce Concierge
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
/* -------------------------------------------------------------------------------------------- */
/* GLOBAL VARIABLES */
// $client_user_id = $form_data'misc''created_by';
$selectOption = 'X';
$leaveBlank = '&nbsp;';
$currentdate = date('F d, Y');

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
$master_entries[0][266] = 'Yes'; // Are there children under the age of 18?
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
$master_entries[0][8003] = '03/01/2022'; // AUSTIN FORM Section I: General Information [Date of Order: Both entered by paralegal]
$master_entries[0][8100] = 'Sharon M. Ramage'; // Peititoner Attorney Name DBU
$master_entries[0][8101] = '972-562-9890'; // Peititoner Attorney Tel DBU
$master_entries[0][8102] = '8951 Collin-McKinney Parkway Suite 1402, McKinney, Texas, 75070'; // Petitoner Attorney Address DBU

// PETITIONER (Tell Us About Yourself)
$master_entries[0][97] = 'Male'; // Gender
$master_entries[0][13] = '111-11-1111'; // SSN
$master_entries[0][279] = 'Yes'; // Drivers license exists
$master_entries[0][14] = 'DL1111111'; // Drivers license number
$master_entries[0][103] = 'Texas'; // Drivers license State
$master_entries[0][7001] = '999-999-9992'; // Petitioner phone home
$master_entries[0][7003] = 'White'; // Petitioner phone home
$master_entries[0][7200]['last'] = 'Parker'; // Maiden Name
// Petitioner Birth Details
$master_entries[0][7002]['city'] = 'Riverton';
$master_entries[0][7002]['state'] = 'Utah';
$master_entries[0][7002]['country'] = 'United States';
// Petitioner address residence
$master_entries[0][38]['street'] = '321 Petitioner Street'; // Address residence
$master_entries[0][38]['street2'] = 'Apt 321'; // Address residence
$master_entries[0][38]['city'] = 'Prosper'; // Address residence
$master_entries[0][38]['state'] = 'Texas'; // Address residence
$master_entries[0][38]['zip'] = '75078'; // Address residence
// Petitioner Address mailing
$master_entries[0][106]['street'] = '321 Petitioner Mailing Street'; // Address residence
$master_entries[0][106]['street2'] = 'Apt 321'; // Address residence
$master_entries[0][106]['city'] = 'Plano'; // Address residence
$master_entries[0][106]['state'] = 'Texas'; // Address residence
$master_entries[0][106]['zip'] = '75078'; // Address residence
// Petitioner Employment
$master_entries[0][230] = 'Yes'; // Petitioner employed?
$master_entries[0][231] = 'Petitioner Employer Inc'; // Petitioner employer
$master_entries[0][100] = '999-999-9993'; // Petitioner phone work
$master_entries[0][295]['street'] = '123 Petitioner Employer Street'; // Petitioner employer
$master_entries[0][295]['street2'] = 'STE 123'; // Petitioner employer
$master_entries[0][295]['city'] = 'Plano'; // Petitioner employer
$master_entries[0][295]['state'] = 'Texas'; // Petitioner employer
$master_entries[0][295]['zip'] = '75093'; // Petitioner employer
$master_entries[0][7100] = '11-1111111'; // Petitioner employer FEIN

// RESPONDENT (Tell Us About Your Spouse)
$master_entries[0][115] = 'Female'; // Gender
$master_entries[0][74] = 'respondent@email.com'; // Email
$master_entries[0][117] = '888-888-8881'; // Phone cell
$master_entries[0][73] = '888-888-8882'; // Phone home
$master_entries[0][119] = '222-22-2222'; // SSN
$master_entries[0][280] = 'Yes'; // Drivers license?
$master_entries[0][120] = 'DL222222222'; // Drivers license number
$master_entries[0][121] = 'Texas'; // Drivers license State
$master_entries[0][6003] = 'Black'; // Drivers license State
$master_entries[0][6200]['last'] = 'Rivers'; // Maiden Name
// Birth Details
$master_entries[0][6002]['city'] = 'Krugersdorp';
$master_entries[0][6002]['state'] = 'Gauteng';
$master_entries[0][6002]['country'] = 'South Africa';
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
$master_entries[0][6100] = '22-2222222'; // Employer FEIN

// MARRIAGE DETAILS (Lets Get Started)
$master_entries[0][20] = '01/01/2001'; // Date of marriage
$master_entries[0][21] = 'Yes'; // Still live together
$master_entries[0][24] = '01/01/2022'; // If No, date of separation
$master_entries[0][5100]['city'] = 'Las Vegas'; // Place of Marriage: City
$master_entries[0][5100]['state'] = 'Nevada'; // Place of Marriage: State
$master_entries[0][5100]['country'] = 'United States'; // Place of Marriage: ZIP

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
// Variables
// $repeater_children_form_id = 14;
// $repeater_children_search_criteria['field_filters'][] = array('key' => 'created_by', 'value' => $client_user_id);
// $repeater_children_search_criteria['status'] = 'active';
// $repeater_children_sorting = array('key' => 'id', 'direction' => 'ASC', 'is_numeric' => true);
// $children_entries = GFAPI::get_entries($repeater_children_form_id, $repeater_children_search_criteria);

$children_entries = array(); // Tell Us About Your Child(ren)

// Child 1 if exists Full Name
// $children_entries[0][2]['first'] = 'Alice';
// $children_entries[0][2]['middle'] = 'Anne';
// $children_entries[0][2]['last'] = 'Parker';
// $children_entries[0][3] = 'Female'; // Gender
// $children_entries[0][22] = '333-33-3333'; // SSN
// $children_entries[0][4] = '01/01/2005'; // DOB
// $children_entries[0][3001]['city'] = 'Plano'; // Birthplace: City
// $children_entries[0][3001]['state'] = 'Texas'; // Birthplace: State
// $children_entries[0][3001]['country'] = 'United States'; // Birthplace: Country
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
// $children_entries[1][3001]['city'] = 'Plano'; // Birthplace: City
// $children_entries[1][3001]['state'] = 'Texas'; // Birthplace: State
// $children_entries[1][3001]['country'] = 'United States'; // Birthplace: Country
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
// $children_entries[2][3001]['city'] = 'Plano'; // Birthplace: City
// $children_entries[2][3001]['state'] = 'Texas'; // Birthplace: State
// $children_entries[2][3001]['country'] = 'United States'; // Birthplace: Country
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
// $children_entries[3][3001]['city'] = 'Plano'; // Birthplace: City
// $children_entries[3][3001]['state'] = 'Texas'; // Birthplace: State
// $children_entries[3][3001]['country'] = 'United States'; // Birthplace: Country
// $children_entries[3][19] = '12'; // Age
// $children_entries[3][6] = 'No'; // Drivers License?
// $children_entries[3][23] = ''; // Drivers license number
// $children_entries[3][8] = ''; // Drivers license State
?>

<!-- -------------------------------------------------------------------------------------------- -->
<!-- Load PDF Styles -->

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
body {
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

.bs_lineheight_single {
  line-height: 100%;
}

.bs_lineheight_double {
  line-height: 200%;
}

.bs_spacer {
  height: 5mm;
}

.bs_text_small {
  font-size: 10pt;
}

.bs_underline {
  text-decoration: underline;
}


.indent-paragraph {
  text-indent: 10.5mm;
}

.indent-paragraph-text {
  padding-left: 100px;
  text-align: justify;
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

.paragraph {
  line-height: 150%;
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
</style>

<!-- -------------------------------------------------------------------------------------------- -->
<!-- BEGIN BODY OUTPUT -->

<body>

  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- BOOKMARK: Prove Up Affidavit -->
  <!-- Variables:NONE -->
  <!-- Output -->
  <bookmark content="Declaration of Petitioner for Prove Up of Agreed Divorce" />

  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- HEADER / FOOTER -->
  <!-- Variables -->
  <?php
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
  <!-- HEADER / FOOTER -->
  <htmlpagefooter name="MyCustomFooter">
    <table class="footer">
      <tr>
        <td class="table-footer_col_1_2"><span class="bs_bold bs_text_small">DECLARTION OF
            <?php echo $petitionerNameFull ?> FOR PROVE-UP FOR AGREED DIVORCE</span></td>
        <td class=" table-footer_col_1_2 text_align_right"><span class="bs_bold bs_text_small">PAGE {PAGENO}</span></td>
      </tr>
      <tr>
        <td><span
            class="bs_bold bs_text_small"><?php echo strtoupper($jurisCauseNumber) ?>/<?php echo strtoupper($petitionerNameLast) ?></span>
        </td>
        <td class="text_align_right"><span class="bs_bold bs_text_small"><?php echo $leaveBlank ?></span></td>
      </tr>
    </table>
  </htmlpagefooter>
  <!-- HEADR FOOTER END -->

  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- TABLE: Cause Number -->
  <!-- Variables -->
  <!-- Cause Number -->
  <?php
// Cause Number
$jurisCauseNumber = $master_entries[0][7];
?>
  <!-- Output -->
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

  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- SPACER -->
  <div class="bs_spacer"></div>


  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- TABLE: Pleading Header -->
  <!-- Variables -->
  <?php
/* Petitioner Name Full (Already retrieved) */
/* Respondent Name Full */
$respondentNameFirst = $master_entries[0][114]['first'];
$respondentNameMiddle = $master_entries[0][114]['middle'];
$respondentNameLast = $master_entries[0][114]['last'];
if ($respondentNameMiddle == '') {
    $respondentNameFull = strtoupper($respondentNameFirst . ' ' . $respondentNameLast);
} else {
    $respondentNameFull = strtoupper($respondentNameFirst . ' ' . $respondentNameMiddle . ' ' . $respondentNameLast);
}
/* Childrens Names Full */
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

/* Judicial District Number */
$jurisDistrictNumber = $master_entries[0][5]; // Masters
$jurisCounty = strtoupper($master_entries[0][6]); // Right F You
?>

  <!-- Output -->
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

  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- SPACER -->
  <div class="bs_spacer"></div>
  <div class="bs_spacer"></div>

  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- TITLE -->
  <!-- Variables: Already retrieved -->

  <!-- Output -->
  <div class="bs_bold text_align_center bs_lineheight_single">DECLARATION OF
    <?php echo $petitionerNameFull ?> FOR
    PROVE-UP OF AGREED DIVORCE
  </div>

  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- SPACER -->
  <div class="bs_spacer"></div>

  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- Declaration -->
  <!-- Variables -->
  <?php
// $petitionerNameFull; already retrieved
// $respondentNameFull; already retrieved

// Date of Separation
$dateOfMarriage = date('F j, Y', strtotime($master_entries[0][24]));

$livingTogether = $master_entries[0][21];

if ($livingTogether == 'Yes') {
    $dateOfSeparation = date('F j, Y', strtotime($currentdate));
} else {
    $dateOfSeparation = date('F j, Y', strtotime($dateOfSeparation[0][24]));
}
// echo 'Date of Separation: ' . $dateOfSeparation; // TESTING
// $count_children_entries; already retrieved

// Petitioner Date of Birth
$petitionerDob = date('F j, Y', strtotime($master_entries[0][229]));

// Petitioner Mailing Address
// Petitioner Address mailing
$petitioner_mailing_address_street_1 = $master_entries[0][106]['street'];
$petitioner_mailing_address_street_2 = $master_entries[0][106]['street2'];
$petitioner_mailing_address_city = $master_entries[0][106]['city'];
$petitioner_mailing_address_state = $master_entries[0][106]['state'];
$petitioner_mailing_address_zip = $master_entries[0][106]['zip']; // Address residence

// Inline mailing address
if ($petitioner_mailing_address_street_2 == '') {
    $petitionerMailingAddressInline = $petitioner_mailing_address_street_1 . ', ' . $petitioner_mailing_address_city . ', ' . $petitioner_mailing_address_state . ', ' . $petitioner_mailing_address_zip;
} else {
    $petitionerMailingAddressInline = $petitioner_mailing_address_street_1 . ', ' . $petitioner_mailing_address_street_2 . ', ' . $petitioner_mailing_address_city . ', ' . $petitioner_mailing_address_state . ', ' . $petitioner_mailing_address_zip;
}
?>
  <!-- Output -->
  <div class="indent-paragraph bs_lineheight_double">My name is <?php echo $petitionerNameFull ?> I am above the age of
    eighteen years, and I
    am
    fully
    competent to make this declaration. The facts stated in this declaration are within my personal
    knowledge and are true and correct.
  </div>
  <div class="indent-paragraph bs_lineheight_double">I am presently married to <?php echo $respondentNameFull ?>,
    Respondent.
  </div>
  <div class="indent-paragraph bs_lineheight_double">Before the filing of this suit, I have been a domiciliary of Texas
    for the preceding
    six-
    month period and a residence of this county for the preceding ninety-day period.
  </div>
  <div class="indent-paragraph bs_lineheight_double"><?php echo $respondentNameFull ?> and I were married on
    <?php echo $dateOfMarriage ?>,
    and
    we ceased to live
    together as husband and wife on or about <?php echo $dateOfSeparation ?>.
  </div>
  <div class="indent-paragraph bs_lineheight_double">Our marriage has become insupportable because of a discord or
    conflict of personalities
    that destroys the legitimate ends of the marriage relationship.
  </div>
  <div class="indent-paragraph bs_lineheight_double">There is no reasonable expectation of reconciliation.
  </div>
  <?php if ($count_children_entries == 0) {?>
  <div class="indent-paragraph bs_lineheight_double">There is no child under eighteen years of age or otherwise entitled
    to support who was
    born or adopted of this marriage, and none is expected.
  </div>
  <?php }?>

  <div class="indent-paragraph bs_lineheight_double">There has been no family violence or abuse within two years before
    or during this suit.
    There is no bankruptcy proceeding affecting this suit.
  </div>
  <div class="indent-paragraph bs_lineheight_double">My spouse and I have entered into an agreement concerning the
    division of our property
    and debts.
  </div>
  <div class="indent-paragraph bs_lineheight_double">The terms of the agreement are just and right. The agreement is
    fair and equitable to
    both
    my spouse and me.
  </div>
  <div class="indent-paragraph bs_lineheight_double">I have submitted an Agreed Final Decree of Divorce, which bears the
    signatures of my
    spouse and me. This is the document that contains the agreements entered into between my
    spouse and me.
  </div>
  <div class="indent-paragraph bs_lineheight_double">I am asking the Court to grant a divorce and approve all the
    agreements we have entered
    into.
  </div>
  <div class="indent-paragraph bs_lineheight_double">My name is <?php echo $petitionerNameFull ?>, my date of birth is
    <?php echo $petitionerDob ?>, my address is <?php echo $petitionerMailingAddressInline ?>. I declare under penalty
    of perjury that the foregoing is true and correct.
  </div>

  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- SPACER -->
  <div class="bs_spacer"></div>


  <div class="indent-paragraph bs_lineheight_double">Executed in <?php echo $jurisCounty ?> County, State of Texas, on
    _____________________________.
  </div>

  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- SPACER -->
  <div class="bs_spacer"></div>
  <div class="bs_spacer"></div>
  <div class="bs_spacer"></div>
  <div class="bs_spacer"></div>


  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- TABLE: Signature -->
  <!-- Variables -->
  <!-- Petitioner Name Full: Already retrieved -->
  <!-- Output -->

  <div class="text_align_right">
    _______________________________________________ <br>
    <?php echo $petitionerNameFull ?>, Declarant and Petitioner
  </div>