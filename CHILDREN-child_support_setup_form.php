<?php

/*
 * Template Name: Child Support Account Setup Form
 * Version: 1.0.0
 * Description: A print-friendly template displaying the Child Support Account Set Up Form
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

$selectOption = 'X';

// Testing Master Entry
$master_entries[0][83] = ''; // Tell Is About Your Child(ren)
// $master_entries[0][] = ''; //
// $master_entries[0][] = ''; //

// PREQUAL DATA
// Petitioner
$master_entries[0][96]['first'] = 'Peter'; // Petitioner Full Name
$master_entries[0][96]['middle'] = 'Paul'; // Petitioner Full Name
$master_entries[0][96]['last'] = 'Parker'; // Petitioner Full Name
$master_entries[0][39] = '999-999-9991'; // Petitioner phone cell
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
$master_entries[0][20] = ''; // Date of marriage
$master_entries[0][21] = ''; // Still live together
$master_entries[0][24] = ''; // If No, date of separation

// NAME CHANGE (Lets Get Started)
$master_entries[0][27] = ''; // Name change requested?
$master_entries[0][28] = ''; // if yes, which party requests name change?
$master_entries[0][29] = ''; // What will the name be changed to?

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

// PETITIONER DETAILS
$petitionerNameFirst = $master_entries[0][96]['first'];
$petitionerNameMiddle = $master_entries[0][96]['middle'];
$petitionerNameLast = $master_entries[0][96]['last'];
if ($petitionerNameMiddle == '') {
    $petitionerNameFull = strtoupper($petitionerNameFirst . ' ' . $petitionerNameLast);
} else {
    $petitionerNameFull = strtoupper($petitionerNameFirst . ' ' . $petitionerNameMiddle . ' ' . $petitionerNameLast);
}

// Petitioner Mailing Address
$petitionerMailingAddressStreet1 = $master_entries[0][106]['street'];
$petitionerMailingAddressStreet2 = $master_entries[0][106]['street2'];
if ($petitionerMailingAddressStreet2 == '') {
    $petitionerMailingAddressStreet = strtoupper($petitionerMailingAddressStreet1);
} else {
    $petitionerMailingAddressStreet = strtoupper($petitionerMailingAddressStreet1 . ', ' . $petitionerMailingAddressStreet2);
}
$petitionerMailingAddressCity = strtoupper($master_entries[0][106]['city']);
$petitionerMailingAddressState = strtoupper($master_entries[0][106]['state']);
$petitionerMailingAddressZip = strtoupper($master_entries[0][106]['zip']);

// Petitioner Personal Details
$petitionerSsn = $master_entries[0][13];
$petitionerDob = $master_entries[0][14];

$petitionerGender = strtoupper($master_entries[0][97]);

$petitionerPhoneCell = $master_entries[0][39];
$petitionerPhoneWork = $master_entries[0][100];

// Respondent Personal Details
$respondentNameFirst = $master_entries[0][114]['first'];
$respondentNameMiddle = $master_entries[0][114]['middle'];
$respondentNameLast = $master_entries[0][114]['last'];
if ($respondentNameMiddle == '') {
    $respondentNameFull = strtoupper($respondentNameFirst . ' ' . $respondentNameLast);
} else {
    $respondentNameFull = strtoupper($respondentNameFirst . ' ' . $respondentNameMiddle . ' ' . $respondentNameLast);
}

$respondentMailingAddressStreet1 = $master_entries[0][72]['street'];
$respondentMailingAddressStreet2 = $master_entries[0][72]['street2'];
if ($respondentMailingAddressStreet2 == '') {
    $respondentMailingAddressStreet = strtoupper($respondentMailingAddressStreet1);
} else {
    $respondentMailingAddressStreet = strtoupper($respondentMailingAddressStreet1 . ', ' . $respondentMailingAddressStreet2);
}
$respondentMailingAddressCity = strtoupper($master_entries[0][72]['city']);
$respondentMailingAddressState = strtoupper($master_entries[0][72]['state']);
$respondentMailingAddressZip = $master_entries[0][72]['zip'];
$respondentSsn = $master_entries[0][119];
$respondentDob = $master_entries[0][275];
$respondentGender = strtoupper($master_entries[0][115]);
$respondentPhoneCell = $master_entries[0][117];
$respondentPhoneWork = $master_entries[0][118];

// TESTING VARIABLES
// Payor / Payee
$payorNameFull = $petitionerNameFull;

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


/* General */
h1 {
  font-size: 20pt;
}

body,
tr.bs_font_size_normal td {
  font-size: 12pt;
}

.bs_spacer {
  height: 5mm;
}

.bs_text_align_center {
  text-align: center;
}

.bs_text_align_right {
  text-align: right;
}

.bs_text_bold {
  font-weight: bold;
}

/* --------------------------------------------------- */

/* TABLES */
.bs_table_cell_underline {
  border-bottom: 1px solid;
}

/* Cause Number */
.table_cause_number_col_1_of_3 {
  width: 12mm;
}

.table_cause_number_col_2_of_3 {
  width: 40mm;
}

.table_cause_number_col_3_of_3 {
  width: 105mm;
}

/* Temporary / Final */
.table_temp_col_1_of_5 {
  width: 15mm;
}

.table_temp_col_2_of_5 {
  width: 15mm;
}

.table_temp_col_3_of_5 {
  width: 7mm;
}

.table_temp_col_4_of_5 {
  width: 15mm;
}

.table_temp_col_5_of_5 {
  width: 100mm;
}

/* Modification / Rule 11 Agreement / Memorandum */
.table_mod_col_1_of_7 {}

.table_mod_col_2_of_7 {
  width: 15mm;
}

.table_mod_col_3_of_7 {}

.table_mod_col_4_of_7 {
  width: 15mm;
}

.table_mod_col_5_of_7 {}

.table_mod_col_6_of_7 {
  width: 20mm;
}

.table_mod_col_7_of_7 {
  width: 25mm;
}

/* PAYEE */
/* Name */
.table_name_col_1_of_2 {
  width: 8%;
}

.table_name_col_2_of_2 {
  width: 92%;
}

/* Address: Street */
.table_street_col_1_of_2 {
  width: 10%;
}

.table_street_col_2_of_2 {
  width: 90%;
}

/* Address: City, State, ZIP */
.table_city_state_zip_col_1_of_6 {
  width: 7%;
}

.table_city_state_zip_col_2_of_6 {
  width: 43%;
}

.table_city_state_zip_col_3_of_6 {
  width: 8%;
}

.table_city_state_zip_col_4_of_6 {
  width: 22%;
}

.table_city_state_zip_col_5_of_6 {
  width: 6%;
}

.table_city_state_zip_col_6_of_6 {
  width: 14%;
}

/* SSN, DOB, Gender */
.table_ssn_dob_gender_col_1_of_6 {
  width: 24%;
}

.table_ssn_dob_gender_col_2_of_6 {
  width: 23%;
}

.table_ssn_dob_gender_col_3_of_6 {
  width: 13%;
}

.table_ssn_dob_gender_col_4_of_6 {
  width: 16%;
}

.table_ssn_dob_gender_col_5_of_6 {
  width: 10%;
}

.table_ssn_dob_gender_col_6_of_6 {
  width: 14%;
}

/* Phone: Cell, Work */
.table_phone_cell_work_col_1_of_4 {
  width: 23%;
}

.table_phone_cell_work_col_2_of_4 {
  width: 17%;
}

.table_phone_cell_work_col_2_of_4,
.table_phone_cell_work_col_4_of_4 {
  width: 30%;
}

/* CHILDREN INVOLVED */
table.table_children_involved td {
  border: 1px solid;
  padding: 5px 10px;
}

.table_children_col_1_of_4 {
  width: 43%;
}

.table_children_col_2_of_4 {
  width: 20%;
}

.table_children_col_3_of_4 {
  width: 22%;
}

.table_children_col_4_of_4 {
  width: 15%;
}

/* PAYMENT DETAILS */

.table_payment_details_col_1_of_5 {
  width: 25%;
}

.table_payment_details_col_2_of_5 {
  width: 18%;
}

.table_payment_details_col_3_of_5 {
  width: 12%;
}

.table_payment_details_col_4_of_5 {
  width: 20%;
}

.table_payment_details_col_5_of_5 {
  width: 25%;
}

/* PAYMENT FREQUENCY */
.table_payment_frequency_col_1_of_8 {
  width: 13%;
}

.table_payment_frequency_col_3_of_8 {
  width: 18%;
}

.table_payment_frequency_col_5_of_8,
.table_payment_frequency_col_7_of_8 {
  width: 15%;
}

.table_payment_frequency_col_2_of_8,
.table_payment_frequency_col_4_of_8,
.table_payment_frequency_col_6_of_8,
.table_payment_frequency_col_8_of_8 {
  width: 10%;
}

/* ## Footer Table */
.table-footer_col_1_2 {
  width: 79%;
}

.table-footer_col_2_2 {
  width: 20%;
}

/* Address: Street */
/* Address: City, State, ZIP */
/* SSN, Birth Date, Gender */
/* Phone: Cell, Work */
</style>

<body>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- Header / Footer -->
  <htmlpagefooter name="MyCustomFooter">
    <table class="footer">
      <tr class="bs_font_size_normal">
        <td class="table-footer_col_1_2"><span class="bs_text_bold ">CHILD SUPPORT SET UP FORM</span></td>
        <td class="table-footer_col_2_2 bs_text_align_right"><span class="bs_text_bold">PAGE {PAGENO}</span>
        </td>
      </tr>
    </table>
  </htmlpagefooter>

  <!-- STYLES END -->

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- TESTING -->

  <?php
// echo 'TEST: ' . $master_entries[0][114]['middle'];
?>
  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- Bookmark -->

  <bookmark content="Child Support Set Up Form" />

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- Bookmark -->

  <h1 class="bs_text_align_center">Child Support Account Set Up Form</h1>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- Spacer -->
  <div class="bs_spacer"></div>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- JURISDICTION INFORMATION -->
  <!-- Variables required to display this section -->
  <?php
$juris_court = $master_entries[0][7];
?>

  <!-- OUTPUT FOR THIS SECTION -->
  <table>
    <tr class="bs_font_size_normal">
      <td class="table_cause_number_col_1_of_3">Cause #:</td>
      <td class="table_cause_number_col_2_of_3 bs_table_cell_underline"><?php echo $juris_court ?></td>
      <td class="table_cause_number_col_3_of_3">&nbsp;</td>
    </tr>
  </table>
  <table>
    <tr class="bs_font_size_normal">
      <td class="table_temp_col_1_of_5">Temporary</td>
      <td class="table_temp_col_2_of_5 bs_table_cell_underline"></td>
      <td class="table_temp_col_3_of_5">&nbsp;Final</td>
      <td class="table_temp_col_4_of_5 bs_text_align_center bs_table_cell_underline"><?php echo $selectOption ?></td>
      <td class="table_temp_col_5_of_5"></td>
    </tr>
  </table>
  <table>
    <tr class="bs_font_size_normal">
      <td class="table_mod_col_1_of_7">Modification</td>
      <td class="table_mod_col_2_of_7 bs_table_cell_underline"></td>
      <td class="table_mod_col_3_of_7">&nbsp;Rule 11 Agreemeent</td>
      <td class="table_mod_col_4_of_7 bs_table_cell_underline"></td>
      <td class="table_mod_col_5_of_7">&nbsp;Memorandum</td>
      <td class="table_mod_col_6_of_7 bs_table_cell_underline"></td>
      <td class="table_mod_col_7_of_7">&nbsp;</td>
    </tr>
  </table>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- PAYEE Person receiving child support -->
  <!-- Variables required to display this section -->
  <?php

// Determine Payee/Payour Details
if ($payorNameFull == $petitionerNameFull) {
    $payeeNameFull = $respondentNameFull;
} else {
    $payeeNameFull = $petitionerNameFull;
}

if ($payeeNameFull == $petitionerNameFull) {
    $payeeAddressStreetInline = $petitionerMailingAddressStreet;
    $payeeAddressCity = $petitionerMailingAddressCity;
    $payeeAddressState = $petitionerMailingAddressState;
    $payeeAddressZip = $petitionerMailingAddressZip;
    $payeeSSN = $petitionerSsn;
    $payeeDob = $petitionerDob;
    $payeeGender = $petitionerGender;
    $payeePhoneCell = $petitionerPhoneCell;
    $payeePhoneWork = $petitionerPhoneWork;

    $payorAddressStreetInline = $respondentMailingAddressStreet;
    $payorAddressCity = $respondentMailingAddressCity;
    $payorAddressState = $respondentMailingAddressState;
    $payorAddressZip = $respondentMailingAddressZip;
    $payorSSN = $respondentSsn;
    $payorDob = $respondentDob;
    $payorGender = $respondentGender;
    $payorPhoneCell = $respondentPhoneCell;
    $payorPhoneWork = $respondentPhoneWork;
} else {
    $payeeAddressStreetInline = $respondentMailingAddressStreet;
    $payeeAddressCity = $respondentMailingAddressCity;
    $payeeAddressState = $respondentMailingAddressState;
    $payeeAddressZip = $respondentMailingAddressZip;
    $payeeSSN = $respondentSsn;
    $payeeDob = $respondentDob;
    $payeeGender = $respondentGender;
    $payeePhoneCell = $respondentPhoneCell;
    $payeePhoneWork = $respondentPhoneWork;

    $payorAddressStreetInline = $petitionerMailingAddressStreet;
    $payorAddressCity = $petitionerMailingAddressCity;
    $payorAddressState = $petitionerMailingAddressState;
    $payorAddressZip = $petitionerMailingAddressZip;
    $payorSSN = $petitionerSsn;
    $payorDob = $petitionerDob;
    $payorGender = $petitionerGender;
    $payorPhoneCell = $petitionerPhoneCell;
    $payorPhoneWork = $petitionerPhoneWork;
}
?>


  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- Spacer -->
  <div class="bs_spacer"></div>


  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- OUTPUT FOR THIS SECTION -->

  <!-- Payee:Sub Title -->
  <div class="">Payee: Person Receiving Child Support</div>
  <!-- Payee: Name -->
  <table>
    <tr class="bs_font_size_normal">
      <td class="table_name_col_1_of_2">Name: </td>
      <td class="table_name_col_2_of_2 bs_table_cell_underline"><?php echo $payeeNameFull ?></td>
    </tr>
  </table>
  <!-- Payee: Address Street -->
  <table>
    <tr class="bs_font_size_normal">
      <td class="table_street_col_1_of_2">Address: </td>
      <td class="table_street_col_2_of_2 bs_table_cell_underline"><?php echo $payeeAddressStreetInline ?></td>
    </tr>
  </table>
  <!-- Payee: Address City/State/ZIP -->
  <table>
    <tr class="bs_font_size_normal">
      <td class="table_city_state_zip_col_1_of_6">City: </td>
      <td class="table_city_state_zip_col_2_of_6 bs_table_cell_underline"><?php echo $payeeAddressCity ?></td>
      <td class="table_city_state_zip_col_3_of_6"> &nbsp;State: </td>
      <td class="table_city_state_zip_col_4_of_6 bs_table_cell_underline"><?php echo $payeeAddressState ?></td>
      <td class="table_city_state_zip_col_5_of_6"> &nbsp;ZIP: </td>
      <td class="table_city_state_zip_col_6_of_6 bs_table_cell_underline"><?php echo $payeeAddressZip ?></td>
    </tr>
  </table>
  <!-- Payee: SSN Full / DOB / Gender -->
  <table>
    <tr class="bs_font_size_normal">
      <td class="table_ssn_dob_gender_col_1_of_6">Full Social Security #: </td>
      <td class="table_ssn_dob_gender_col_2_of_6 bs_table_cell_underline"><?php echo $payeeSSN ?></td>
      <td class="table_ssn_dob_gender_col_3_of_6">&nbsp;Birth Date: </td>
      <td class="table_ssn_dob_gender_col_4_of_6 bs_table_cell_underline"><?php echo $payeeDob ?></td>
      <td class="table_ssn_dob_gender_col_5_of_6 ">&nbsp;Gender: </td>
      <td class="table_ssn_dob_gender_col_6_of_6 bs_table_cell_underline"><?php echo $payeeGender ?></td>
    </tr>
  </table>
  <!-- Payee: Phone Cell / Phone Work -->
  <table>
    <tr class="bs_font_size_normal">
      <td class="table_phone_cell_work_col_1_of_4">Home / Cell Phone: </td>
      <td class="table_phone_cell_work_col_2_of_4 bs_table_cell_underline"><?php echo $payeePhoneCell ?></td>
      <td class="table_phone_cell_work_col_3_of_4">&nbsp;&nbsp;Work Phone: </td>
      <td class="table_phone_cell_work_col_4_of_4 bs_table_cell_underline"><?php echo $payeePhoneWork ?></td>
    </tr>
  </table>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- Spacer -->
  <div class="bs_spacer"></div>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- Payor:Sub Title -->
  <div class="">Payor: Person Paying Child Support</div>
  <!-- Payor: Name -->
  <table>
    <tr class="bs_font_size_normal">
      <td class="table_name_col_1_of_2">Name: </td>
      <td class="table_name_col_2_of_2 bs_table_cell_underline"><?php echo $payorNameFull ?></td>
    </tr>
  </table>
  <!-- Payor: Address Street -->
  <table>
    <tr class="bs_font_size_normal">
      <td class="table_street_col_1_of_2">Address: </td>
      <td class="table_street_col_2_of_2 bs_table_cell_underline"><?php echo $payorAddressStreetInline ?></td>
    </tr>
  </table>
  <!-- Payor: Address City/State/ZIP -->
  <table>
    <tr class="bs_font_size_normal">
      <td class="table_city_state_zip_col_1_of_6">City: </td>
      <td class="table_city_state_zip_col_2_of_6 bs_table_cell_underline"><?php echo $payorAddressCity ?></td>
      <td class="table_city_state_zip_col_3_of_6"> &nbsp;State: </td>
      <td class="table_city_state_zip_col_4_of_6 bs_table_cell_underline"><?php echo $payorAddressState ?></td>
      <td class="table_city_state_zip_col_5_of_6"> &nbsp;ZIP: </td>
      <td class="table_city_state_zip_col_6_of_6 bs_table_cell_underline"><?php echo $payorAddressZip ?></td>
    </tr>
  </table>
  <!-- Payor: SSN Full / DOB / Gender -->
  <table>
    <tr class="bs_font_size_normal">
      <td class="table_ssn_dob_gender_col_1_of_6">Full Social Security #: </td>
      <td class="table_ssn_dob_gender_col_2_of_6 bs_table_cell_underline"><?php echo $payorSSN ?></td>
      <td class="table_ssn_dob_gender_col_3_of_6">&nbsp;Birth Date: </td>
      <td class="table_ssn_dob_gender_col_4_of_6 bs_table_cell_underline"><?php echo $payorDob ?></td>
      <td class="table_ssn_dob_gender_col_5_of_6 ">&nbsp;Gender: </td>
      <td class="table_ssn_dob_gender_col_6_of_6 bs_table_cell_underline"><?php echo $payorGender ?></td>
    </tr>
  </table>
  <!-- Payor: Phone Cell / Phone Work -->
  <table>
    <tr class="bs_font_size_normal">
      <td class="table_phone_cell_work_col_1_of_4">Home / Cell Phone: </td>
      <td class="table_phone_cell_work_col_2_of_4 bs_table_cell_underline"><?php echo $payorPhoneCell ?></td>
      <td class="table_phone_cell_work_col_3_of_4">&nbsp;&nbsp;Work Phone: </td>
      <td class="table_phone_cell_work_col_4_of_4 bs_table_cell_underline"><?php echo $payorPhoneWork ?></td>
    </tr>
  </table>


  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- CHILDREN INVOLVED -->

  <!-- OUTPUT FOR THIS SECTION -->
  <p class="bs_text_bold">Children Involved: </p>
  <!-- Children: Name / DOB / SSN / GENDER -->
  <table class="table_children_involved">
    <tr class="bs_font_size_normal">
      <td class="table_children_col_1_of_4 bs_text_bold bs_text_align_center">Name</td>
      <td class="table_children_col_2_of_4 bs_text_bold bs_text_align_center">Birth Date</td>
      <td class="table_children_col_3_of_4 bs_text_bold bs_text_align_center">Social Security #</td>
      <td class="table_children_col_4_of_4  bs_text_bold bs_text_align_center">Gender</td>
    </tr>

    <!-- Variables required to display this section -->
    <?php

$count_children_entries = count($children_entries);

$children = array();

for ($i = 0; $i < $count_children_entries; $i++) {
    $children[$i]['first_name'] = $children_entries[$i][2]['first'];
    $children[$i]['middle_name'] = $children_entries[$i][2]['middle'];
    $children[$i]['last_name'] = $children_entries[$i][2]['last'];
    if ($children[$i]['middle_name'] != '') {
        $children[$i]['full_name'] = strtoupper($children[$i]['first_name'] . ' ' . $children[$i]['middle_name'] . ' ' . $children[$i]['last_name']);
    } else {
        $children[$i]['full_name'] = strtoupper($children[$i]['first_name'] . ' ' . $children[$i]['last_name']);
    }
    $children[$i]['dob'] = $children_entries[$i][4];
    $children[$i]['ssn_full'] = $children_entries[$i][22];
    $children[$i]['gender'] = strtoupper($children_entries[$i][3]);
    echo '<tr class="bs_font_size_normal">';
    echo '<td>' . $children[$i]['full_name'] . '</td>';
    echo '<td>' . $children[$i]['dob'] . '</td>';
    echo '<td>' . $children[$i]['ssn_full'] . '</td>';
    echo '<td>' . $children[$i]['gender'] . '</td>';
    echo '</tr>';

    // echo '<pre>';
    // echo 'CHILDREN<br>';
    // print_r($children[$i]);
    // echo '<br></pre>';
}
?>
  </table>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- Spacer -->
  <div class="bs_spacer"></div>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- PAYMENT DETAILS -->
  <!-- Variables required to display this section -->
  <?php
$payment_due_date = $master_entries[0][9001];
$payment_amount = $master_entries[0][9002];

?>
  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- OUTPUT FOR THIS SECTION -->

  <!-- PAYMENT: First payment due date, Payment amount -->
  <table>
    <tr class="bs_font_size_normal">
      <td class="table_payment_details_col_1_of_5">Date first payment due: </td>
      <td class="table_payment_details_col_2_of_5 bs_table_cell_underline"><?php echo $payment_due_date ?></td>
      <td class="table_payment_details_col_3_of_5">&nbsp;Amount: </td>
      <td class="table_payment_details_col_4_of_5 bs_table_cell_underline"><?php echo $payment_amount ?></td>
      <td class="table_payment_details_col_5_of_5">&nbsp;</td>
    </tr>
  </table>

  <!-- PAYMENT: Frequency (Always monthly) -->
  <table>
    <tr class="bs_font_size_normal">
      <td class="table_payment_frequency_col_1_of_8">Monthly: </td>
      <td class="table_payment_frequency_col_2_of_8 bs_table_cell_underline bs_text_align_center">
        <?php echo $selectOption ?></td>
      <td class="table_payment_frequency_col_3_of_8">&nbsp;Semi-monhtly: </td>
      <td class="table_payment_frequency_col_4_of_8 bs_table_cell_underline">&nbsp;</td>
      <td class="table_payment_frequency_col_5_of_8">&nbsp;Bi-weekly: </td>
      <td class="table_payment_frequency_col_6_of_8 bs_table_cell_underline">&nbsp;</td>
      <td class="table_payment_frequency_col_7_of_8">&nbsp;Weekly: </td>
      <td class="table_payment_frequency_col_8_of_8 bs_table_cell_underline">&nbsp;</td>
    </tr>
  </table>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- Spacer -->
  <div class="bs_spacer"></div>




</body>