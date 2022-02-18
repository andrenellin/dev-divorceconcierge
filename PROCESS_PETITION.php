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
$master_entries[0][5] = '987'; // Judicial District Number
$master_entries[0][6] = 'Collin'; // Juditial County

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
$children_entries[1][2]['first'] = 'Bryce';
$children_entries[1][2]['middle'] = 'Ben';
$children_entries[1][2]['last'] = 'Parker';
$children_entries[1][3] = 'Male'; // Gender
$children_entries[1][22] = '444-44-4444'; // SSN
$children_entries[1][4] = '02/02/2006'; // DOB
$children_entries[1][19] = '16'; // Age
$children_entries[1][6] = 'Yes'; // Drivers License?
$children_entries[1][23] = 'DL444444'; // Drivers license number
$children_entries[1][8] = 'Texas'; // Drivers license State

// Child 3 if exists Full Name
$children_entries[2][2]['first'] = 'Cassie';
$children_entries[2][2]['middle'] = 'Cheryl';
$children_entries[2][2]['last'] = 'Parker';
$children_entries[2][3] = 'Female'; // Gender
$children_entries[2][22] = '555-55-5555'; // SSN
$children_entries[2][4] = '03/03/2009'; // DOB
$children_entries[2][19] = '13'; // Age
$children_entries[2][6] = 'No'; // Drivers License?
$children_entries[2][23] = ''; // Drivers license number
$children_entries[2][8] = ''; // Drivers license State

// Child 4 if exists Full Name
$children_entries[3][2]['first'] = 'Dean';
$children_entries[3][2]['middle'] = 'Donald';
$children_entries[3][2]['last'] = 'Parker';
$children_entries[3][3] = 'Male'; // Gender
$children_entries[3][22] = '666-66-6666'; // SSN
$children_entries[3][4] = '04/04/20010'; // DOB
$children_entries[3][19] = '12'; // Age
$children_entries[3][6] = 'No'; // Drivers License?
$children_entries[3][23] = ''; // Drivers license number
$children_entries[3][8] = ''; // Drivers license State

?>

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
.bs_spacer {
  height: 5mm;
}

.bs_text_bold {
  font-weight: bold;
}

.bs_text_italic {
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

.bs_text_underline {
  text-decoration: underline;
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
<!-- STYLES END -->

<!-- ------------------------------------------------------------------------------------------------ -->
<!-- Body Start -->

<body>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- SECTION: Header/Footer -->
  <!-- Variables: NONE -->

  <!-- Output -->
  <htmlpagefooter name="MyCustomFooter">
    <table class="footer">
      <tr class="paragraph">
        <td class="footer_left_half"><span class="bs_text_bold bs_text_small">PETITION</span></td>
        <td class="footer_right_half text_align_right"><span class="bs_text_bold bs_text_small">PAGE {PAGENO}</span>
        </td>
      </tr>
    </table>
  </htmlpagefooter>

  <htmlpagefooter name="MyFooterStandingOrder">
  </htmlpagefooter>



  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- SECTION: Bookmarks -->
  <!-- Variables: None -->
  <!-- Output -->
  <bookmark content="Original Petition for Divorce" />

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- SECTION: Cause Number -->
  <!-- Variables: NONE -->
  <!-- Output -->
  <table class="table-cause_number">
    <tr>
      <td class="table-cause_number-col_1_4">&nbsp;</td>
      <td class="table-cause_number-col_2_4 bs_fontsize_normal"><span class="bs_text_bold">NO.</span></td>
      <td class="table-cause_number-col_3_4 bs_fontsize_normal">&nbsp;
      </td>
      <td class="table-cause_number-col_4_4">&nbsp;</td>
    </tr>
  </table>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- SPACER -->
  <div class="bs_spacer"></div>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- SECTION: Pleading Table -->
  <!-- Variables -->
  <?php

// IN THE MATTER OF | IN THE MARRIAGE OF
// Petitioner Full Name
$petitionerNameFirst = $master_entries[0][96]['first'];
$petitionerNameMiddle = $master_entries[0][96]['middle'];
$petitionerNameLast = $master_entries[0][96]['last'];
if ($petitionerNameMiddle == '') {
    $petitionerNameFull = strtoupper($petitionerNameFirst . ' ' . $petitionerNameLast);
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

    // Judicial District (Not Needed in Petition)

    // Judicial County
    $jurisCounty = strtoupper($master_entries[0][6]); // Right For You
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
      <td class="table_header_right_column"><span class="bs_text_bold bs_fontsize_normal"> _______ JUDICIAL
          DISTRICT</span>
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
      <td class="table_header_right_column"><span class="bs_text_bold bs_fontsize_normal"> _______ JUDICIAL
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
          class="bs_text_bold bs_fontsize_normal"><?php echo $county . " COUNTY, TEXAS"; ?></span></td>
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
          class="bs_text_bold bs_fontsize_normal"><?php echo $county . " COUNTY, TEXAS"; ?></span></td>
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
          class="bs_text_bold bs_fontsize_normal"><?php echo $county . " COUNTY, TEXAS"; ?></span></td>
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
          class="bs_text_bold bs_fontsize_normal"><?php echo $county . " COUNTY, TEXAS"; ?></span></td>
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

  <div class="text_align_center bs_text_bold paragraph">ORIGINAL PETITION FOR DIVORCE</div>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- SPACER -->
  <div class="bs_spacer"></div>


  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- 1 MARITAL ESTATE VALUE -->
  <!-- Variables: NONE -->
  <!-- Output -->
  <table>
    <tr class="paragraph section_heading">
      <td class="section_number"><span class="bs_text_italic bs_fontsize_normal">1. </span></td>
      <td class="section-heading"><span class="bs_text_italic bs_fontsize_normal">Discovery Level</span></td>
    </tr>
  </table>
  <div class="section_content paragraph indent-paragraph">Discovery in this case is intended to be conducted under level
    2 of rule 190 of the Texas Rules of Civil Procedure.</div>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- 2 Parties -->
  <!-- Variables -->
  <?php
// PETITIONER
// Full name (already registered for pleading table)
// Drivers License last 3 digits

// SSN Last 3 digits
$petitionerSsnLast3 = substr($master_entries[0][13], -3);
$petitionerDriversLicenseNumberLast3 = strtoupper(substr($master_entries[0][14], -3));

// RESPONDENT
// Full name (already registered for pleading table)

?>

  <!-- Output -->
  <table>
    <tr class="paragraph section_heading">
      <td class="section_number"><span class="bs_text_italic bs_fontsize_normal">2. </span></td>
      <td class="section-heading"><span class="bs_text_italic bs_fontsize_normal">Parties</span></td>
    </tr>
  </table>

  <div class="section_content paragraph indent-paragraph">This suit is brought by <?php echo $petitionerNameFull ?>,
    Petitioner.
    The last three numbers of Petitioner's driver's license number are
    <?php echo $petitionerDriversLicenseNumberLast3; ?>.
    The last three numbers of Petitioner's Social Security number are <?php echo $petitionerSsnLast3; ?>.
    <!-- php end -->
  </div>
  <div class="section_content paragraph indent-paragraph"><?php echo $respondentNameFull ?> is Respondent.</div>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- 3 Domicile -->
  <!-- Variables -->
  <?php

// Texas State Residency
$isPetitionerTexasResident = $master_entries[0][243]; // [Options:both, user, spouse, neither]
$petitionerStateResidenceDuration = $master_entries[0][244]; // Petitioner State duration [Options: 1 (< 6mo), 2(>6mo)
$petitionerCountyResidenceDuration = $master_entries[0][247]; // $petitioner County duration  [Options: 1 (<3mo), 2(3-6mo), 3(>6mo)]

// echo 'Both Residents: ' . $isPetitionerTexasResident . '<br>';
// echo 'PetitionerStateDuration: ' . $petitionerStateResidenceDuration . '<br>';
// echo 'PetitionerCountyDuration: ' . $petitionerCountyResidenceDuration . '<br>';

// Check if Texas Residency is 'user' or 'both'
if ($isPetitionerTexasResident == 'user' || $isPetitionerTexasResident == 'both') {
// If Texas Residency is user, check if petitionerTexasResidentDuration is 1 (less than 6 months) or 2 (6 months or longer)
    // If Texas Residency is user, check if  petitioner  qualifying county is not less than 3 months

    if ($petitionerStateResidenceDuration == '6 months or longer' && $petitionerCountyResidenceDuration != 'Less than 3 months') {
// If all conditions met, $residencyRequirementParty is 'Petitioner'
        $residencyRequirementParty = 'Petitioner';
    }

} else {
// Else $residencyRequirementParty is 'Responent'
    $residencyRequirementParty = 'Respondent';
}
?>

  <!-- Output -->
  <table>
    <tr class="paragraph section_heading">
      <td class="section_number"><span class="bs_text_italic bs_fontsize_normal">3. </span></td>
      <td class="section-heading"><span class="bs_text_italic bs_fontsize_normal">Domicile</span></td>
    </tr>
  </table>
  <div class="section_content paragraph indent-paragraph"><?php echo $residencyRequirementParty ?> has been a
    domiciliary of Texas for the preceding six-month period and a resident of this county for the preceding
    ninety-day period.</div>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- 4 Service -->
  <!-- Variables: NONE -->

  <!-- Output -->
  <table>
    <tr class="paragraph section_heading">
      <td class="section_number"><span class="bs_text_italic bs_fontsize_normal">4. </span></td>
      <td class="section-heading"><span class="bs_text_italic bs_fontsize_normal">Service</span></td>
    </tr>
  </table>
  <div class="section_content paragraph indent-paragraph">No service on Respondent is necessary at this time.</div>
  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- CONDITIONAL PAGE BREAK _-->
  <?php if ($count_children_entries > 1) {
    echo '<pagebreak>';
}?>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- 5 Protective Order Statement -->
  <!-- Variables: NONE -->

  <!-- Output -->
  <table>
    <tr class="paragraph section_heading">
      <td class="section_number"><span class="bs_text_italic bs_fontsize_normal">5. </span></td>
      <td class="section-heading"><span class="bs_text_italic bs_fontsize_normal">Protective Order Statement</span>
      </td>
    </tr>
  </table>
  <div class="section_content paragraph indent-paragraph">No protective order under title 4 of the Texas Family Code,
    protective order under subchapter A of Chapter 7B of the Texas Code of Criminal Procedure, or order for emergency
    protection under Article 17.292 of the Texas Code of Criminal Procedure is in effect in regard to a party to this
    suit and no application for any such order is pending.</div>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- CONDITIONAL PAGE BREAK _-->
  <?php if ($count_children_entries == 0) {
    echo '<pagebreak>';
}?>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- 6 Dates of Marriage and Separation -->
  <!-- Variables -->
  <?php

$dateOfMarriage = $master_entries[0][20]; // Date of marriage
$dateOfMarriageContent = date('F j, Y', $dateOfMarriage);
// echo 'Date of Marriage Content: ' . $dateOfMarriageContent . '<br>';
// $date_marriage_string = strtotime($date_marriage_raw);
// $date_marriage = date('F j, Y', $date_marriage_string);
$dateOfSeparation = $master_entries[0][24]; // If No, date of separation
$dateOfSeparationContent = date('F j, Y', $dateOfSeparation);
// echo 'Date of Separation Content: ' . $dateOfSeparationContent . '<br>';

if ($dateOfSeparation != '') {

    // $date_of_separation_string = strtotime($date_of_separation_raw);
    $dateOfSeparationContent = date('F j, Y', $dateOfMarriage);
    // $date_of_separation_content = ' ' . $date_of_separation;
} else {
    $dateOfSeparationContent = 'the date of the filing of this Original Petition for Divorce';
}

?>

  <!-- Output -->
  <table>
    <tr class="paragraph section_heading">
      <td class="section_number"><span class="bs_text_italic bs_fontsize_normal">6. </span></td>
      <td class="section-heading"><span class="bs_text_italic bs_fontsize_normal">Dates of Marriage and
          Separation</span></td>
    </tr>
  </table>
  <div class="section_content paragraph indent-paragraph">The parties were married on or about
    <?php echo $dateOfMarriageContent; ?> and ceased to live together as spouses on
    <?php echo $dateOfSeparationContent ?>.
  </div>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- 7 Grounds for Divorce -->
  <!-- Variables: NONE -->

  <!-- Output -->
  <table>
    <tr class="paragraph section_heading">
      <td class="section_number"><span class="bs_text_italic bs_fontsize_normal">7. </span></td>
      <td class="section-heading"><span class="bs_text_italic bs_fontsize_normal">Grounds for Divorce</span></td>
    </tr>
  </table>
  <div class="section_content paragraph indent-paragraph">The marriage has become insupportable because of discord
    or
    conflict of personalities between Petitioner and Respondent that destroys the legitimate ends of the marriage
    relationship and
    prevents any reasonable expectation of reconciliation.
  </div>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- 8 Children of Marraige -->
  <!-- Variables -->

  <!-- Output -->
  <!-- --------------------------------------------------------------------------------------------------------------- -->
  <!-- 8 CHILDREN OF MARRIAGE -->
  <table>
    <tr class="paragraph section_heading">
      <td class="section_number"><span class="bs_text_italic bs_fontsize_normal">8. </span></td>
      <td class="section-heading"><span class="bs_text_italic bs_fontsize_normal">Children of Marriage</span></td>
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
    <?php if ($children[$i]['has_dl'] == 'Yes'): ?>
    <tr class="child-row">
      <td class="child_label bs_fontsize_normal">Drivers License:</td>
      <td class="child_data bs_fontsize_normal">Exchanged Privately</td>
    </tr>
    <?php endif;?>
  </table>
  <!-- Conditionally add a pagebreak if children == 4 -->
  <?php if ($i == 2) {
    echo '<pagebreak>';
} else {
    echo '<br>';
}?>

  <?php }?>
  <!-- CLOSE COUNTER -->

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- Conditional Page Break -->

  <?php
if ($count_children_entries == 3) {
    echo '<pagebreak>';
}?>

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


  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- 9 Division of Community Property -->
  <!-- Variables: NONE -->

  <!-- Output -->
  <table>
    <tr class="paragraph section_heading">
      <td class="section_number"><span class="bs_text_italic bs_fontsize_normal">9. </span></td>
      <td class="section-heading"><span class="bs_text_italic bs_fontsize_normal">Division of Community
          Property</span></td>
    </tr>
  </table>
  <div class="section_content paragraph indent-paragraph">Petitioner believes Petitioner and Respondent will enter
    into an agreement for the division of their estate. If such an agreement is made, Petitioner requests the Court to
    approve the agreement and divide their estate in a manner consistent with the agreement. If such an agreement is
    not
    made, Petitioner requests the Court to divide their estate in a manner that the Court deems just and right, as
    provided by law.
  </div>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- 10 Name Change [Conditional] -->
  <!-- Variables -->
  <?php

$nameChangeRequested = $master_entries[0][27];
$nameChangeParty = 'Rebecca Roxanne Rodell';
if ($nameChangeParty == $petitionerNameFull) {
    $nameChangeRole = 'Petitioner';
} else {
    $nameChangeRole = 'Respondent';
}
$nameChangeTo = strtoupper($master_entries[0][29]);

?>

  <!-- Output -->
  <?php if ($nameChangeRequested == "Yes") {?>

  <table>
    <tr class="paragraph section_heading">
      <td class="section_number"><span class="bs_text_italic bs_fontsize_normal">10. </span></td>
      <td class="section-heading"><span class="bs_text_italic bs_fontsize_normal">Request for Change of
          Name</span></td>
    </tr>
  </table>
  <div class="section_content paragraph indent-paragraph"><?php echo $nameChangeRole ?> requests a change of
    name
    to
    <?php echo $nameChangeTo ?></div>

  <!-- php resume -->
  <?php }?>


  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- 10 or 11 Prayer -->
  <!-- Variable:Obtained in section Name Change -->

  <!-- Output -->
  <!-- --------------------------------------------------------------------------------------------------------------- -->
  <?php if ($nameChangeRequested == "No") {?>
  <table>
    <tr class="paragraph section_heading">
      <td class="section_number"><span class="bs_text_italic bs_fontsize_normal">10. </span></td>
      <td class="section-heading"><span class="bs_text_italic bs_fontsize_normal">Prayer</span></td>
    </tr>
  </table>
  <?php } else {?>
  <!--php pause  -->
  <table>
    <tr class="paragraph section_heading">
      <td class="section_number"><span class="bs_text_italic bs_fontsize_normal">11. </span></td>
      <td class="section-heading"><span class="bs_text_italic bs_fontsize_normal">Prayer</span></td>
    </tr>
  </table>
  <?php }?>

  <div class="section_content paragraph indent-paragraph">Petitioner prays that citation and notice issue as required
    by
    law and that the Court grant a divorce and all other relief requested in this petition.</div>
  <?php if ($nameChangeRequested == "Yes") {?>
  <div class="section_content paragraph indent-paragraph"><?php echo $nameChangeRole ?> prays that
    <?php echo strtolower($nameChangeRole) ?>'s name be
    changed as requested above.
  </div>
  <?php }?>
  <div class="section_content paragraph indent-paragraph">Petitioner prays for general relief.
  </div>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- Conditional Page Breaks -->

  <?php if ($count_children_entries == 2 && $nameChangeRequested == 'Yes') {
    echo '<pagebreak>';
}

if ($count_children_entries > 2 && $count_children_entries < 4) {
    echo '<pagebreak>';
}?>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- Signature Fields -->
  <!-- Variables -->
  <?php
$service = $master_entries[0][276];

$petitionerMailingStreet1 = $master_entries[0][106]['street']; // Tell Us About Yourself
$petitionerMailingStreet2 = $master_entries[0][106]['street2']; // Tell Us About Yourself
if ($petitionerMailingStreet1 == '') {
    $petitionerMailingStreet = $petitionerMailingStreet1;
} else {
    $petitionerMailingStreet = $petitionerMailingStreet1 . ', ' . $petitionerMailingStreet2;
}
$petitionerMailingCity = $master_entries[0][106]['city']; // Tell Us About Yourself
$petitionerMailingState = $master_entries[0][106]['state']; // Tell Us About Yourself
$petitionerMailingZip = $master_entries[0][106]['zip']; // Tell Us About Yourself
$petitionerPhoneCell = $master_entries[0][39]; // Right For You
$petitionerEmail = $master_entries[0][40]; // Right For Your

?>
  <!-- Output -->
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
      <td class="table_signature_right_column bs_fontsize_normal"><?php echo $petitionerNameFull; ?></td>
    </tr>
    <tr class="paragraph">
      <td class="table_signature_left_column bs_fontsize_normal">&nbsp;</td>
      <td class="table_signature_right_column bs_fontsize_normal"><?php echo $petitionerMailingStreet; ?></td>
    </tr>
    <tr class="paragraph">
      <td class="table_signature_left_column bs_fontsize_normal">&nbsp;</td>
      <td class="table_signature_right_column bs_fontsize_normal"><?php echo $petitionerMailingCity . ', ' . $petitionerMailingState . ', ' .
        $petitioner_zip; ?></td>
    </tr>
    <tr class="paragraph">
      <td class="table_signature_left_column bs_fontsize_normal">&nbsp;</td>
      <td class="table_signature_right_column bs_fontsize_normal"><?php echo $petitionerPhoneCell; ?></td>
    </tr>
    <tr class="paragraph">
      <td class="table_signature_left_column bs_fontsize_normal">&nbsp;</td>
      <td class="table_signature_right_column bs_fontsize_normal"><?php echo $petitionerEmail; ?></td>
    </tr>
    <tr class="paragraph">
      <td class="table_signature_left_column bs_fontsize_normal">&nbsp;</td>
      <td class="table_signature_right_column bs_fontsize_normal">&nbsp;</td>
    </tr>
    <tr class="paragraph">
      <td class="table_signature_left_column bs_fontsize_normal">&nbsp;</td>
      <td class="table_signature_right_column bs_fontsize_normal">By: <span class="bs_text_underline bs_text_italic">
          /s/
          <?php echo $petitionerNameFull; ?></span>
      </td>
    </tr>
    <tr class="paragraph">
      <td class="table_signature_left_column bs_fontsize_normal">&nbsp;</td>
      <td class="table_signature_right_column bs_fontsize_normal">
        &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $petitionerNameFull; ?>
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