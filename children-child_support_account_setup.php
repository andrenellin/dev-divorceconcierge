<meta charset="UTF-8">
<?php

/*
 * Template Name: Child Support Account Setup Form
 * Version: 1.0.0
 * Description: A print-friendly template displaying the Child Support Setup Form
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
/* Pages */
@page {
  size: 8.5in 11in;
  margin: 1in 1in 1in 1in;
  line-height: 1.2;
}


/* FONTS */
h1 {
  font-size: 20pt;
}

h2 {
  font-size: 14pt;
}

h2 {
  font-size: 12pt;
}

h1,
h2,
h3 {
  margin: 0;
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

.bs_spacer {
  height: 2mm;
}

.text_align_center {
  text-align: center;
}

ul li {
  margin: 0;
  padding: 0;
}

/* TABLES */

/* Table displaying Childrens details */
.table_children td {
  border: 0.5mm solid;
  height: 8mm;
  padding-left: 5mm;
}

.table_col_1_4 {
  width: 120mm;
}

.table_col_2_4 {
  width: 30mm;
}

.table_col_3_4 {
  width: 45mm;
}

.table_col_4_4 {
  width: 25mm;
}


/* Table displaying payment details */
.table_col_1_8 {
  width: 15mm;
}

.table_col_3_8 {
  width: 25mm;
}

.table_col_5_8 {
  width: 20mm;
}

.table_col_7_8 {
  width: 15mm;
}

.table_col_3_8,
.table_col_5_8,
.table_col_7_8 {
  padding-left: 3mm;
}



.table_col_2_8,
.table_col_4_8,
.table_col_6_8,
.table_col_8_8 {
  border-bottom: 1px solid;
  width: 20mm;
  text-align: center;
}
</style>
<!-- STYLES END -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

<!-- HEADER / FOOTER -->

<!-- HEADR FOOTER END -->

<?php

/* Page 1
 ************ */

/* Section - Jurisdiction Information
 ************************************** */
// VARIABLES
$county = 'Denton'; // Jurisdiction
$county_caps = strtoupper($county);
$court_email = 'email@court.com'; // Jurisdiction Form
$court_mailing_address = '123 Court Street, City, State, Zip'; // Jurisdiction Form
$cause_number = 'Cause No'; // Jurisdiction Form
$court_temporary = 'CourtTMP'; // What is this?
$court_final = 'CourtFinal'; // What is this?
$modification = 'Mod'; // What is this?
$rule_11_agreement = 'Yes/No'; // What is this?
$memorandum = 'Memo'; // What is this?

?>

<!-- OUTPUT -->
<bookmark content="Child Support Account Setup Form" />
<h1 class="text_align_center bs_bold">Child Support Account Set Up Form</h1>
<h2 class="text_align_center bs_underline">THIS FORM MUST BE COMPLETED AND TURNED IN TO
  <?php echo $county_caps ?> COUNTY CHILD SUPPORT FOR AN ACCOUNT TO BE ACTIVATED</h2>
<!-- Court Email Address -->
<!-- Court Mailing Address -->
<h3 class="text_align_center bs_underline">This form may be emailed to
  <?php echo $court_email ?> or<br>Mailed To:<br>District Clerks Office<br><?php echo $court_mailing_address ?></h3>
<div class="bs_spacer"></div>
<table>
  <!-- Cause Number -->
  <tr class="paragraph">
    <td>Cause #: <span class="bs_underline"><?php echo $cause_number ?></span></td>
  </tr>
  <!-- Temporary, Final -->
  <tr class="paragraph">
    <td>Temporary <span class="bs_underline"><?php echo $court_temporary ?></span> Final <span
        class="bs_underline"><?php echo $court_final ?></span></td>
  </tr>
  <tr class="paragraph">
    <!-- Modification, Rull 11 Agreement, Memorandum -->
    <td>Modification <span class="bs_underline"><?php echo $modification ?></span> Rule 11 Agreement <span
        class="bs_underline"><?php echo $rule_11_agreement ?></span> Memorandum <span
        class="bs_underline"><?php echo $memorandum ?></span></td>
  </tr>
</table>
<div class="bs_spacer"></div>

<?php
/* Section - Payee (Person Receiving Child Support)
 *************************************************** */
// VARIABLES
$payee_full_name = 'Payee Full Name'; // Tell Us About Children
$payee_address_street1_street_2 = '123 Payee Address, Apt 123,'; // Masters
$payee_address_city = 'City'; // Masters
$payee_address_state = 'State'; // Masters
$payee_address_zip = 'ZIP'; // Masters
$payee_ssn_full = '999-99-9999'; // Masters
$payee_dob = '01/01/1970'; // Masters
$payee_gender = 'Male'; // Masters
$payee_phone_mobile = '999.999.9999'; // Masters
$payee_phone_work = '888.888.8888'; // Masters
?>

<!-- OUTPUT -->
<table>
  <tr>
    <td>Payee: Person Receiving Child Support</td>
  </tr>
  <tr>
    <td>Name: <span class="bs_underline"><?php echo $payee_full_name ?></span></td>
  </tr>
  <tr>
    <td>Address: <span class="bs_underline"><?php echo $payee_address_street1_street_2 ?></span></td>
  </tr>
  <tr>
    <td>
      City: <span class="bs_underline"><?php echo $payee_address_city ?></span> State: <span
        class="bs_underline"><?php echo $payee_address_state ?></span> Zip: <span
        class="bs_underline"><?php echo $payee_address_zip ?></span>
    </td>
  </tr>
  <tr>
    <td>
      Full Social Security #: <span class="bs_underline"><?php echo $payee_ssn_full ?></span> Birth Date: <span
        class="bs_underline"><?php echo $payee_dob ?></span> Gender: <span
        class="bs_underline"><?php echo $payee_gender ?></span>
    </td>
  </tr>
  <tr>
    <td>
      Home/ Cell Phone: <span class="bs_underline"><?php echo $payee_phone_mobile ?></span> Work Phone: <span
        class="bs_underline"><?php echo $payee_phone_work ?></span>
    </td>
  </tr>
</table>
<div class="bs_spacer"></div>

<?php
/* Section - Payor (Person Paying Child Support)
 *************************************************** */
// VARIABLES
$payor_full_name = 'Payor Full Name'; // Master
$payor_address_street1_street_2 = ''; // Masters
$payor_address_city = '123 Payor Street, Apt 456'; // Masters
$payor_address_state = 'City'; // Masters
$payor_address_zip = 'State'; // Masters
$payor_ssn_full = 'ZIP'; // Masters
$payor_dob = '02/02/1972'; // Masters
$payor_gender = 'Female'; // Masters
$payor_phone_mobile = '777.777.7777'; // Masters
$payor_phone_work = '666.666.6666'; // Masters

?>

<!-- OUTPUT -->
<table>
  <tr>
    <td>Payor: Person Receiving Child Support</td>
  </tr>
  <tr>
    <td>Name: <span class="bs_underline"><?php echo $payor_full_name ?></span></td>
  </tr>
  <tr>
    <td>Address: <span class="bs_underline"><?php echo $payor_address_street1_street_2 ?></span></td>
  </tr>
  <tr>
    <td>
      City: <span class="bs_underline"><?php echo $payor_address_city ?></span> State: <span
        class="bs_underline"><?php echo $payor_address_state ?></span> Zip: <span
        class="bs_underline"><?php echo $payor_address_zip ?></span>
    </td>
  </tr>
  <tr>
    <td>
      Full Social Security #: <span class="bs_underline"><?php echo $payor_ssn_full ?></span> Birth Date: <span
        class="bs_underline"><?php echo $payor_dob ?></span> Gender: <span
        class="bs_underline"><?php echo $payor_gender ?></span>
    </td>
  </tr>
  <tr>
    <td>
      Home/ Cell Phone: <span class="bs_underline"><?php echo $payor_phone_mobile ?></span> Work Phone: <span
        class="bs_underline"><?php echo $payor_phone_work ?></span>
    </td>
  </tr>
</table>
<div class="bs_spacer"></div>

<?php
/* Section - Children Involved
 *************************************************** */
// VARIABLES
$child_1_name_full = 'Child 1 Name'; // Master, Tell Us About Children
$child_1_dob = '01/01/2011'; // Master, Tell Us About Children
$child_1_ssn_full = '111-11-1111'; // Master, Tell Us About Children
$child_1_gender = 'Male'; // Master, Tell Us About Children

$child_2_name_full = 'Child 2 Name'; // Master, Tell Us About Children
$child_2_dob = '02/02/2012'; // Master, Tell Us About Children
$child_2_ssn_full = '222-22-2222'; // Master, Tell Us About Children
$child_2_gender = 'Female'; // Master, Tell Us About Children

$child_3_name_full = 'Child 3 Name'; // Master, Tell Us About Children
$child_3_dob = '03/03/2013'; // Master, Tell Us About Children
$child_3_ssn_full = '333-33-3333'; // Master, Tell Us About Children
$child_3_gender = 'Male'; // Master, Tell Us About Children

$child_4_name_full = ''; // Master, Tell Us About Children
$child_4_dob = ''; // Master, Tell Us About Children
$child_4_ssn_full = ''; // Master, Tell Us About Children
$child_4_gender = ''; // Master, Tell Us About Children

$child_5_name_full = ''; // Master, Tell Us About Children
$child_5_dob = ''; // Master, Tell Us About Children
$child_5_ssn_full = ''; // Master, Tell Us About Children
$child_5_gender = ''; // Master, Tell Us About Children

$child_6_name_full = ''; // Master, Tell Us About Children
$child_6_dob = ''; // Master, Tell Us About Children
$child_6_ssn_full = ''; // Master, Tell Us About Children
$child_6_gender = ''; // Master, Tell Us About Children

?>

<!-- OUTPUT -->
<div class="bs_bold">Children Involved:</div>
<div class="bs_spacer"></div>
<table class="table_children">
  <tr>
    <td class="table_col_1_4 bs_bold text_align_center">Name</td>
    <td class="table_col_2_4 bs_bold text_align_center">Birth Date</td>
    <td class="table_col_3_4 bs_bold text_align_center">Social Security #</td>
    <td class="table_col_4_4 bs_bold text_align_center">Gender</td>
  </tr>
  <tr>
    <td class="table_col_1_4 "><?php echo $child_1_name_full ?></td>
    <td class="table_col_2_4"><?php echo $child_1_dob ?></td>
    <td class="table_col_3_4"><?php echo $child_1_ssn_full ?></td>
    <td class="table_col_4_4"><?php echo $child_1_gender ?></td>
  </tr>
  <tr>
    <td class="table_col_1_4 "><?php echo $child_2_name_full ?></td>
    <td class="table_col_2_4"><?php echo $child_2_dob ?></td>
    <td class="table_col_3_4"><?php echo $child_2_ssn_full ?></td>
    <td class="table_col_4_4"><?php echo $child_2_gender ?></td>
  </tr>
  <tr>
    <td class="table_col_1_4 "><?php echo $child_3_name_full ?></td>
    <td class="table_col_2_4"><?php echo $child_3_dob ?></td>
    <td class="table_col_3_4"><?php echo $child_3_ssn_full ?></td>
    <td class="table_col_4_4"><?php echo $child_3_gender ?></td>
  </tr>
  <tr>
    <td class="table_col_1_4 "><?php echo $child_4_name_full ?></td>
    <td class="table_col_2_4"><?php echo $child_4_dob ?></td>
    <td class="table_col_3_4"><?php echo $child_4_ssn_full ?></td>
    <td class="table_col_4_4"><?php echo $child_4_gender ?></td>
  </tr>
  <tr>
    <td class="table_col_1_4 "><?php echo $child_5_name_full ?></td>
    <td class="table_col_2_4"><?php echo $child_5_dob ?></td>
    <td class="table_col_3_4"><?php echo $child_5_ssn_full ?></td>
    <td class="table_col_4_4"><?php echo $child_5_gender ?></td>
  </tr>
  <tr>
    <td class="table_col_1_4 "><?php echo $child_6_name_full ?></td>
    <td class="table_col_2_4"><?php echo $child_6_dob ?></td>
    <td class="table_col_3_4"><?php echo $child_6_ssn_full ?></td>
    <td class="table_col_4_4"><?php echo $child_6_gender ?></td>
  </tr>
</table>


<?php
/* Section - Payment Details
 *************************************************** */
// VARIABLES
$first_payment_due_date = '04/04/2022'; // Tell Us About Children
$first_payment_amount = '1000.00'; // Tell Us About Children
$payment_frequency = 'Monthly'; // Payment Frequency OPTIONS=[Monthly, Semi-monthly, Bi-weekly, Weekly)]

switch ($payment_frequency) {
    case 'Monthly':
        $check_monthly = 'X';

        break;
    case 'Semi-monthly':
        $check_semi_annually = 'X';
        break;
    case 'Bi-weekly':
        $check_bi_weekly = 'X';
        break;
    case 'Weekly':
        $check_weekly = 'X';
        break;
}

?>

<!-- OUTPUT -->

<div class="bs_spacer"></div>
Date first payment due: <span class="bs_underline"> <?php echo $first_payment_due_date ?>&nbsp;</span> Amount:
$<span class="bs_underline"><?php echo $first_payment_amount ?>&nbsp;</span>
<table>
  <tr>
    <td class="table_col_1_8">Monthly </td>
    <td class="table_col_2_8"><?php echo $check_monthly ?> </td>
    <td class="table_col_3_8">Semi-monthly </td>
    <td class="table_col_4_8"><?php echo $check_semi_annually ?> </td>
    <td class="table_col_5_8">Bi-weekly </td>
    <td class="table_col_6_8"><?php echo $check_bi_weekly ?> </td>
    <td class="table_col_7_8">Weekly </td>
    <td class="table_col_8_8"><?php echo $check_weekly ?> </td>
  </tr>
</table>
<div class="bs_spacer"></div>
<ul>
  <li>FULL social security number is MANDATORY for set up</li>
  <li>Custodial & Non-Custodial parents will be identified by Social Security #</li>
  <li class="bs_bold">This form will be destroyed after the account is set up</li>
  </li>
</ul>