<meta charset="UTF-8">
<?php

/*
 * Template Name: Statement of Insurance Availability
 * Version: 1.0.1
 * Description: Generate PDF Document for Divorce Concierge, Statement of Insurance Availability
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
  height: 7mm;
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


/* TABLES
****************************** */
/* Table Cause Number */

.table_col_1_4,
.table_col_4_4 {
  width: 40%;
}

.table_col_2_4 {
  width: 5%;
  text-align: right;
  font-weight: bold;
}

.table_col_3_4 {
  width: 15%;
  border-bottom: 1px solid;
  font-weight: bold;
}


/* Table for Section Numbers */
.section_heading {
  margin-top: 3mm;
  margin-bottom: 3mm;
}

.section_number {
  width: 10.5mm;
}


/* Table to Display Children */
.table_row {
  line-height: 1.3;
}

.child-label {
  width: 50mm;
}


/* Table Court Header Information */
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

.table_children_col_1 {
  width: 20mm;
}

.table_children_col_2 {
  width: 85mm;
}

.table_signature_field_col_1_of_3 {
  width: 15mm;
}

.table_signature_field_col_2_of_3 {
  width: 40mm;
  border-bottom: 1px solid;
  text-align: center;
}


/* SIGNATURE FIELDS */
.signature_field_height {
  height: 30mm;
}
</style>
<!-- STYLES END -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

<!-- HEADER / FOOTER -->
<htmlpagefooter name="MyCustomFooter">
  <table class="footer">
    <tr class="paragraph">
      <td class="footer_left_half"><span class="v bs_text_small">&nbsp;</span></td>
      <td class="footer_right_half text_align_right"><span class="bs_bold bs_text_small">PAGE {PAGENO}</span></td>
    </tr>
  </table>
</htmlpagefooter>
<htmlpagefooter name="MyFooterStandingOrder">
</htmlpagefooter>
<!-- HEADR FOOTER END -->

<?php
/* *********************************************************************
 * VARIABLES
 ******************************************************************** */
// CLIENT DETAILS
// $client_user_id = rgar($entry, 'created_by');

// // IN THE MATTER OF / PARTIES
// $petitioner = $form_data['field'][3]; // [3.PETITIONER: Full Name]
// $petitioner_uppercase = strtoupper($petitioner);
// $respondent = $form_data['field'][4]; // [4.RESPONDENT: Full Name]
// $respondent_uppercase = strtoupper($respondent);

// $county = strtoupper($form_data['field'][6]); // [6.County]

// // TESTING

// // 8 CHILDREN OF THE MARRIAGE

// $repeater_children_form_id = 14;
// $repeater_children_search_criteria['field_filters'][] = array('key' => 'created_by', 'value' => $client_user_id);
// $repeater_children_search_criteria['status'] = 'active';
// $repeater_children_sorting = array('key' => 'id', 'direction' => 'ASC', 'is_numeric' => true);
// $children_entries = GFAPI::get_entries($repeater_children_form_id, $repeater_children_search_criteria);
// $count_children_entries = count($children_entries);
// $children = array();

// for ($i = 0; $i < $count_children_entries; $i++) {
//     $children[$i]['first_name'] = $children_entries[$i]['2.3'];
//     $children[$i]['middle_name'] = $children_entries[$i]['2.4'];
//     $children[$i]['last_name'] = $children_entries[$i]['2.6'];
//     if ($children[$i]['middle_name'] != '') {
//         $children[$i]['full_name'] = $children[$i]['first_name'] . ' ' . $children[$i]['middle_name'] . ' ' . $children[$i]['last_name'];
//     } else {
//         $children[$i]['full_name'] = $children[$i]['first_name'] . ' ' . $children[$i]['last_name'];
//     }
//     $children[$i]['gender'] = $children_entries[$i]['3'];
//     $children[$i]['birth_date_raw'] = $children_entries[$i]['4'];
//     $children_birth_date_string = strtotime($children[$i]['birth_date_raw']);
//     $children[$i]['birth_date'] = date('F j, Y', $children_birth_date_string);
//     $children[$i]['has_dl'] = $children_entries[$i]['6'];
//     // echo '<pre>';
//     // echo 'CHILDREN<br>';
//     // print_r($children[$i]);
//     // echo '<br></pre>';
// }

// //INSURANCE DETAILS

// $insurance_data_id = 23;
// $insurance_data_search_criteria['field_filters'][] = array('key' => 'created_by', 'value' => $client_user_id);
// $insurance_data_search_criteria['status'] = 'active';
// $insurance_data_sorting = array('key' => 'id', 'direction' => 'ASC', 'is_numeric' => true);
// $insurance_entries = GFAPI::get_entries($insurance_data_id, $insurance_data_search_criteria);

// $insurance = array();

// //Health insurance details/condition
// $condPrivateHealthInsurancedental= $insurance_entries[0][263]; //do they have private Insurance

// if ($condPrivateHealthInsurancedental== 'Yes') {
//     $privateInsuranceInfo = "Private health inusrance is in effect for the child(ren)";

// } else {
//     $privateInsuranceInfo = "";
// }

// $insuranceCompany = $insurance_entries[0][264]; //the insurance company name
// $policyNumber =  $insurance_entries[0][265]; //insurance policy number
// $responsibleParty =  $insurance_entries[0][266]; //petitioner or respondent responsible for isnurance
// $premiumCost =  $insurance_entries[0][267]; //cost of insurance in $
// $condInsuranceEmployment =  $insurance_entries[0][268]; //is the insurance provided by employment
// $condMedicaid = $insurance_entries[0][269]; //do the children have access to medicaid
// $condHealthBenefits = $insurance_entries[0][270]; //do the children have access to health benefits

// $condPHealthAccess = $insurance_entries[0][271]; //does the petitioner or respondent have access to private healthcare at a reasonable cost
// $condRHealthAccess = $insurance_entries[0][272]; //does the petitioner or respondent have access to private healthcare at a reasonable cost

// //Dental insurance conditions
// $condPrivateDentalInsurancedental=  $insurance_entries[0][276];// dental insurance company name
// $dentalPolicyNumber = $insurance_entries[0][277]; //dental policy number
// $dentalCost = $insurance_entries[0][279]; //dental insurance cost in $
// $condDenInsuranceEmployment = $insurance_entries[0][280]; // is the dental policy provided by employment
// $responsiblePartyDental =  $insurance_entries[0][278];
// $condNoDentalInsurance = $insurance_entries[0][275]; //do they have dental insurance
// $condAccessInsuranceP = $insurance_entries[0][281]; //does petitioner have acces to dental care
// $condAccessInsuranceR =  $insurance_entries[0][282]; //does respondent have acccess to dental care

/* VARIABLES FOR TESTING
 ******************************************************************** */
// CLIENT DETAILS
// $client_user_id = rgar($entry, 'created_by');

/* VARIABLES END
 *********************************************************************************************************** */

// VARIABLES DETERMINING PAGE BREAKS
$count_children_entries = 3;
$condPrivateHealthInsurance = 'No';
$condPrivateDentalInsurance = 'No';

/* SECTION - Header Information
 *********************************************************************************************************** */

//  VARIABLES
// IN THE MATTER OF / PARTIES
$cause_number = '123';
$petitioner = 'Peter Patrick Parker';
$petitioner_uppercase = strtoupper($petitioner);
$respondent = 'Rebecca Roxanne Parker';
$respondent_uppercase = strtoupper($respondent);
$judicial_district_court_number = '456';
$county = 'Denton';
$county_uppercase = strtoupper($county);

// CHILDREN OF THE MARRIAGE

$child_name_1 = 'Alfred Parker';
$child_gender_1 = 'Male';
$child_dob_1 = '01/01/2011';
$child_SSN_1 = 'Exchanged Privately';

$child_name_2 = 'Beverly Parker';
$child_gender_2 = 'Female';
$child_dob_2 = '02/02/2012';
$child_SSN_2 = 'Exchanged Privately';

$child_name_3 = 'Cindy Parker';
$child_gender_3 = 'Female';
$child_dob_3 = '03/03/2013';
$child_SSN_3 = 'Exchanged Privately';

$county = 'Denton';

?>
<!-- OUTPUT -->
<!-- PAGE 1 -->
<!-- Bookmark -->
<bookmark content="Statement of Insurance Availability" />

<!-- Section Header - Court Information -->

<!-- Cause Number -->
<table id="table_cause_number">
  <tr class="paragraph">
    <td class="table_col_1_4">&nbsp;</td>
    <td class="table_col_2_4">No.</td>
    <td class="table_col_3_4">&nbsp;<?php echo $cause_number ?>&nbsp;</td>
    <td class="table_col_4_4">&nbsp;</td>
  </tr>
</table>
<br>
<!-- INTRO HEADER -->
<table class="INTRO">
  <tr class="paragraph">
    <td class="column_third_half"><span class="bs_bold">IN THE MATTER OF</span></td>
    <td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>
    <td class="column_right_third"><span class="bs_bold">IN THE DISTRICT OF</span></td>
  </tr>
  <tr class="paragraph">
    <td class="column_third_half"><span class="bs_bold">IN THE MARRIAGE OF</span></td>
    <td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>
    <td class="column_right_third"><span class="bs_bold">&nbsp;</span></td>
  </tr>
  <!-- Empty Row -->
  <tr class="paragraph">
    <td class="column_third_half"><span class="bs_bold">&nbsp;</span></td>
    <td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>
    <td class="column_right_third"><span class="bs_bold">&nbsp;</span></td>
  </tr>

  <!-- Petitioner AND Respondent / Judicial District Number -->
  <tr class="paragraph">
    <td class="column_third_half"><span class="bs_bold"><?php echo $petitioner_uppercase; ?></span></td>
    <td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>
    <td class="column_right_third"><span class="bs_bold">&nbsp;</td>
  </tr>
  <tr class="paragraph">
    <td class="column_third_half"><span class="bs_bold">AND</span></td>
    <td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>
    <td class="column_right_third"><span class="bs_bold"><span
          class="bs_underline">&nbsp;<?php echo $judicial_district_court_number ?>&nbsp;</span> JUDICIAL
        DISTRICT</span></span></td>
  </tr>
  <tr class="paragraph">
    <td class="column_third_half"><span class="bs_bold"><?php echo $respondent_uppercase; ?></span></td>
    <td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>
    <td class="column_right_third"><span class="bs_bold">&nbsp;</span></td>;
  </tr>
  <!-- Empty Row -->
  <tr class="paragraph">
    <td class="column_third_half"><span class="bs_bold">&nbsp;</span></td>
    <td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>
    <td class="column_right_third"><span class="bs_bold">&nbsp;</span></td>
  </tr>
  <!-- And In The Interest Of -->
  <tr class="paragraph">
    <td class="column_third_half"><span class="bs_bold">AND IN THE INTEREST OF</span></td>
    <td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>
    <td class="column_right_third"><span class="bs_bold"></span></td>
  </tr>
  <!-- Children's Names / County -->

  <!-- CONDITION [Children == 1] -->

  <?php
switch ($count_children_entries) {
    case 1:
        echo '<tr class="paragraph">';
        echo '<td class="column_third_half"><span class="bs_bold">' . strtoupper($child_name_1) . ', A CHILD </td>';
        echo '<td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>';
        echo '<td class="column_right_third"><span class="bs_bold">' . $county_uppercase . ' COUNTY, TEXAS</span></td>';
        echo '</tr>';
        break;
    case 2:
        //  Display Child 1 of 2
        echo '<tr class="paragraph">';
        echo '<td class="column_third_half"><span class="bs_bold">' . strtoupper($child_name_1) . ', </td>';
        echo '<td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>';
        echo '<td class="column_right_third">&nbsp;</td>';
        echo '</tr>';
        //  Display Child 2 of 2 / County
        echo '<tr class="paragraph">';
        echo '<td class="column_third_half"><span class="bs_bold">' . strtoupper($child_name_2) . ', CHILDREN</td>';
        echo '<td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>';
        echo '<td class="column_right_third"><span class="bs_bold">' . $county_uppercase . ' COUNTY, TEXAS</span></td>';
        echo '</tr>';
        break;
    case 3:
        //  Display Child 1 of 3
        echo '<tr class="paragraph">';
        echo '<td class="column_third_half"><span class="bs_bold">' . strtoupper($child_name_1) . ', </td>';
        echo '<td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>';
        echo '<td class="column_right_third">&nbsp;</td>';
        echo '</tr>';
        //  Display Child 2 of 3
        echo '<tr class="paragraph">';
        echo '<td class="column_third_half"><span class="bs_bold">' . strtoupper($child_name_2) . ', </td>';
        echo '<td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>';
        echo '<td class="column_right_third">&nbsp;</td>';
        echo '</tr>';
        //  Display Child 3 of 3 / County
        echo '<tr class="paragraph">';
        echo '<td class="column_third_half"><span class="bs_bold">' . strtoupper($child_name_3) . ', CHILDREN</td>';
        echo '<td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>';
        echo '<td class="column_right_third"><span class="bs_bold">' . $county_uppercase . ' COUNTY, TEXAS</span></td>';
        echo '</tr>';
        break;
}
?>

</table>

<!-- SPACER -->
<div class="bs_spacer"></div>

<!-- SECTION: Document Heading -->
<div class="text_align_center bs_bold">STATEMENT OF HEALTH INSURANCE AVAILABILITY</div>

<!-- SPACER -->
<div class="bs_spacer"></div>

<!-- SECTION: Intro Paragraph -->
<div class="indent-paragraph"> This statement is made by <?php echo $petitioner ?>, Petitioner, in accordance with
  sections 154.181 and 154.1815 of the Texas Family Code </div>

<!-- SPACER -->
<div class="bs_spacer"></div>

<!-- SECTION 1. Child(ren) -->
<table class="section_heading">
  <tr class="paragraph">
    <td class="section_number"><span class="bs_italic bs_bold">1. </span></td>
    <td class="section-heading"><span class="bs_italic"> Child[ren]</span></td>
  </tr>
</table>

<table class="children-wrapper">
  <?php
for ($i = 1; $i <= $count_children_entries; $i++) {?>

  <tr class="child-row">
    <td class="child-label">Name:</td>
    <td class="child-data"><?php echo ${child_name_ . $i}; ?></td>
  </tr>
  <tr class="child-row">
    <td class="child-label">Sex:</td>
    <td class="child-data"><?php echo ${child_gender_ . $i}; ?></td>
  </tr>
  <tr class="child-row">
    <td class="child-label">Birthdate:</td>
    <td class="child-data"><?php echo ${child_dob_ . $i}; ?></td>
  </tr>
  <tr class="child-row">
    <td class="child-label">Social Security Number:</td>
    <td class="child-data">Exchanged Privately</td>
  </tr>
  <tr class="child-row">
    <td class="child-label">&nbsp;</td>
    <td class="child-data">&nbsp;</td>
  </tr>
  <?php }?>
</table>

<!-- CONTROL: Pagebreaks -->
<?php if ($count_children_entries == 3) {
    echo '<pagebreak>';
}?>




<!--- SECTION 2. Health insurance Availability ---->
<?php
// VARIABLES
$healthInsuranceCompany = 'XYZ Insurance Company ';
$healthInsurancePolicyNumber = '12345678';
$healthInsuranceResponsibleParty = $petitioner_uppercase;
$healthInsurancepremiumCost = '$1000'; //cost of insurance in $
$condHealthInsuranceEmployment = 'Yes';

$condMedicaid = 'No';
$condHealthBenefits = 'Yes';

$condPHealthAccess = 'Petitioner';

?>

<table class="section_heading">
  <tr class="paragraph section_heading">
    <td class="section_number"><span class="bs_italic bs_bold">2. </span></td>
    <td class="section-heading"><span class="bs_italic"> Health Insurance Availability</span></td>
  </tr>
</table>

<!--- Many if statements so that it can be formatted nicely in the PDF ---->
<div class="indent-paragraph"> <?php if ($condPrivateHealthInsurance == 'Yes') {
    echo "Private health is in effect for the child(ren).";
    echo "<br>";
}?></div>
<div class="indent-paragraph"> <?php if ($condPrivateHealthInsurance == 'Yes') {
    echo "  Name of insurance company: " . $healthInsuranceCompany;
    echo "<br>";
}?></div>
<div class="indent-paragraph"> <?php if ($condPrivateHealthInsurance == 'Yes') {
    echo "  Policy number: " . $healthInsurancePolicyNumber;
    echo "<br>";
}?></div>
<div class="indent-paragraph"> <?php if ($condPrivateHealthInsurance == 'Yes') {
    echo "  Party responisble for premium: " . $healthInsuranceResponsibleParty;
    echo "<br>";
}?></div>
<div class="indent-paragraph"> <?php if ($condPrivateHealthInsurance == 'Yes') {
    echo "  Monthly cost of premium: " . $healthInsurancepremiumCost;
}?></div>
<div class="indent-paragraph"> <?php if ($condPrivateHealthInsurance == 'No') {
    echo "Private health care is not in effect for the children";
}?></div>

<!---- if the insurance is from employment ---->
<div class="indent-paragraph"> <?php if ($condPrivateHealthInsurance === 'Yes' && $condInsuranceEmployment === 'Yes') {
    echo "The insurance IS provided through a parent's employment";

} elseif ($condPrivateHealthInsurance === 'Yes' && $condInsuranceEmployment === 'No') {
    echo "The insurance IS NOT provided through a parent's employment";
}?> </div>

<?php
// CONDITIONS: $count_children_entries == 2 && ScondPrivateInsurance == No && SdentalInsurance == Yes
if ($count_children_entries == 2 && $condPrivateHealthInsurance == 'No' && $condPrivateDentalInsurance == 'Yes') {
    echo '<pagebreak>';
}

// CONDITIONS: $count_children_entries == 2 && ScondPrivateInsurance == No && SdentalInsurance == No
if ($count_children_entries == 2 && $condPrivateHealthInsurance == 'No' && $condPrivateDentalInsurance == 'No') {
    echo '<pagebreak>';
}

?>

<!--- the children are/are not recieivng medicaid---->
<div class="indent-paragraph"> <?php if ($condMedicaid === 'Yes') {
    echo "The child(ren) ARE receiving Medicaid benefits under chapter 32, Human Resources Code.";
} else {
    echo "The child(ren) ARE NOT receiving Medicaid benefits under chapter 32, Human Resources Code.";
}?></div>

<!--- the children are/are not recieivng health benefits ---->
<div class="indent-paragraph"> <?php if ($condHealthBenefits === 'Yes') {
    echo "The child(ren) ARE receiving health benefits coverage under the Children's Health Insurance Program under chapter 62 of the Texas Health and Safety Code.";
} else {
    echo "The child(ren) ARE NOT receiving health benefits coverage under the Children's Health Insurance Program under chapter 62 of the Texas Health and Safety Code.";
}?></div>

<div class="indent-paragraph"> <?php if ($condPrivateHealthInsurance == 'No' && $condPHealthAccess === 'Petitioner') {
    echo $petitioner_uppercase . " of the child(ren) HAS access to private health insurance at reasonable cost to her/him.";
} elseif ($condPrivateHealthInsurance == 'No' && $condPHealthAccess === 'Respondent') {
    echo $respondent_uppercase . " of the child(ren) HAS access to private health insurance at reasonable cost to her/him.";
}?></div>


<!-- SPACER -->
<div class="bs_spacer"></div>

<!--- 3. dental insurance Availability ---->

<?php
// VARIABLES
//Dental insurance conditions
$dentalInsuranceCompanyName = 'ABC Dental Insurance Company ';
$dentalPolicyNumber = '98765432';
$dentalInsurancepremiumCost = '$500';
$condInsuranceEmployment = 'Yes';
$responsiblePartyDental = $respondent_uppercase;
$condNoDentalInsurance = 'Yes';
$condAccessInsuranceP = 'No';
$condAccessInsuranceR = 'No';

?>
<table class="section_heading">
  <tr class="paragraph section_heading">
    <td class="section_number"><span class="bs_italic">3. </span></td>
    <td class="indent"><span class="bs_italic"> Dental Insurance Availability </span></td>
  </tr>
</table>

<div class="indent-paragraph"> <?php if ($condPrivateDentalInsurance == 'Yes') {
    echo "Private dental care is in effect for the child(ren).";
    echo "<br>";
}?></div>
<div class="indent-paragraph"> <?php if ($condPrivateDentalInsurance == 'No') {
    echo "Private dental care is not in effect for the child(ren).";
    echo "<br>";
}?></div>

<div class="indent-paragraph"> <?php if ($condPrivateDentalInsurance == 'Yes') {
    echo "  Name of insurance company: " . $dentalInsuranceCompanyName;
    echo "<br>";
}?></div>
<div class="indent-paragraph"> <?php if ($condPrivateDentalInsurance == 'Yes') {
    echo "  Policy number: " . $dentalPolicyNumber;
    echo "<br>";
}?></div>
<div class="indent-paragraph"> <?php if ($condPrivateDentalInsurance == 'Yes') {
    echo "  Party responisble for premium: " . $responsiblePartyDental;
    echo "<br>";
}?></div>
<div class="indent-paragraph"> <?php if ($condPrivateDentalInsurance == 'Yes') {
    echo "  Monthly cost of premium: " . $dentalInsurancepremiumCost;
}?></div>

<!---- if the insurance is from employment ---->
<div class="indent-paragraph"> <?php if ($condPrivateDentalInsurance == 'Yes' && $condInsuranceEmployment == 'Yes') {
    echo "The insurance coverage IS provided through a parent's employment";

} elseif ($condPrivateDentalInsurance == 'Yes' && $condInsuranceEmployment == 'No') {
    echo "The insurance IS NOT provided through a parent's employment";
}?> </div>




<div class="indent-paragraph"> <?php if ($condPrivateDentalInsurance == 'No' && $condAccessInsuranceP === 'Yes') {
    echo "$petitioner, Petitioner HAS access to dental insurance at a reasonable cost";
} elseif ($condPrivateDentalInsurance == 'No' && $condAccessInsuranceP === 'No') {

    echo "$petitioner, Petitioner DOES NOT HAVE access to dental insurance at a reasonable cost";
}?> </div>

<div class="indent-paragraph"> <?php if ($condPrivateDentalInsurance == 'No' && $condAccessInsuranceR === 'Yes') {

    echo "$respondent, Respondent HAS access to dental insurance at a reasonable cost";
} elseif ($condPrivateDentalInsurance == 'No' && $condAccessInsuranceR === 'No') {

    echo "$respondent, Respondent DOES NOT HAVE access to dental insurance at a reasonable cost";
}?> </div>

<!--- SECTION: Signatures & Date ---->

<?php
// VARIABLES
?>

<!-- CONTROL: Pagebreaks -->
<?php

// CONDITIONS: $count_children_entries == 1 && ScondPrivateInsurance == Yes && SdentalInsurance == Yes
if ($count_children_entries == 1 && $condPrivateHealthInsurance == 'Yes' && $condPrivateDentalInsurance == 'Yes') {
    echo '<div class="bs_spacer"></div>';
    echo '<div class="bs_spacer"></div>';
}
// CONDITIONS: $count_children_entries == 1 && $condPrivateHealthInsurance == Yes && $condPrivateDentalInsurance == No
if ($count_children_entries == 1 && $condPrivateHealthInsurance == 'Yes' && $condPrivateDentalInsurance == 'No') {
    echo '<div class="bs_spacer"></div>';
    echo '<div class="bs_spacer"></div>';
}

// CONDITIONS: $count_children_entries == 1 && $condPrivateHealthInsurance == No && $condPrivateDentalInsurance == Yes
if ($count_children_entries == 1 && $condPrivateHealthInsurance == 'No' && $condPrivateDentalInsurance == 'Yes') {
    echo '<div class="bs_spacer"></div>';
    echo '<div class="bs_spacer"></div>';
}

// CONDITIONS: $count_children_entries == 1 && $condPrivateHealthInsurance == Np && $condPrivateDentalInsurance == No
if ($count_children_entries == 1 && $condPrivateHealthInsurance == 'No' && $condPrivateDentalInsurance == 'No') {
    echo '<div class="bs_spacer"></div>';
    echo '<div class="bs_spacer"></div>';
}

// CONDITIONS: $count_children_entries == 2 && $condPrivateHealthInsurance == Yes && $condPrivateDentalInsurance == Yes
if ($count_children_entries == 2 && $condPrivateHealthInsurance == 'Yes' && $condPrivateDentalInsurance == 'Yes') {
    echo '<pagebreak>';
}

// CONDITIONS: $count_children_entries == 2 && ScondPrivateInsurance == Yes && SdentalInsurance == No
if ($count_children_entries == 2 && $condPrivateHealthInsurance == 'Yes' && $condPrivateDentalInsurance == 'No') {
    echo '<div class="bs_spacer"></div>';
    echo '<div class="bs_spacer"></div>';
}
// CONDITIONS: $count_children_entries == 2 && ScondPrivateInsurance == No && SdentalInsurance == Yes
if ($count_children_entries == 2 && $condPrivateHealthInsurance == 'No' && $condPrivateDentalInsurance == 'Yes') {
    echo '<div class="bs_spacer"></div>';
    echo '<div class="bs_spacer"></div>';
}

// CONDITIONS: $count_children_entries == 2 && ScondPrivateInsurance == No && SdentalInsurance == No
if ($count_children_entries == 2 && $condPrivateHealthInsurance == 'No' && $condPrivateDentalInsurance == 'No') {
    echo '<div class="bs_spacer"></div>';
    echo '<div class="bs_spacer"></div>';
}

// CONDITIONS: $count_children_entries == 3 && $condPrivateHealthInsurance == Yes && $condPrivateDentalInsurance == Yes
if ($count_children_entries == 3 && $condPrivateHealthInsurance == 'Yes' && $condPrivateDentalInsurance == 'Yes') {
    echo '<pagebreak>';
}

// CONDITIONS: $count_children_entries == 3 && ScondPrivateInsurance == Yes && SdentalInsurance == No
if ($count_children_entries == 3 && $condPrivateHealthInsurance == 'Yes' && $condPrivateDentalInsurance == 'No') {
    echo '<pagebreak>';
}
// CONDITIONS: $count_children_entries == 3 && ScondPrivateInsurance == No && SdentalInsurance == Yes
if ($count_children_entries == 3 && $condPrivateHealthInsurance == 'No' && $condPrivateDentalInsurance == 'Yes') {
    echo '<div class="bs_spacer"></div>';
    echo '<div class="bs_spacer"></div>';
}

// CONDITIONS: $count_children_entries == 3 && ScondPrivateInsurance == No && SdentalInsurance == No
if ($count_children_entries == 3 && $condPrivateHealthInsurance == 'No' && $condPrivateDentalInsurance == 'No') {
    echo '<div class="bs_spacer"></div>';
    echo '<div class="bs_spacer"></div>';
}
?>



<table>
  <tr>
    <td class="table_signature_field_col_1_of_3">Date: </td>
    <td class="table_signature_field_col_2_of_3"><?php echo date("m/d/Y"); ?></td>
    <td class="table_signature_field_col_3_of_3"></td>
  </tr>
</table>

<div class="signature_field_height"></div>
<p><?php echo $petitioner_uppercase ?></p>


<?php

// print_r('Count Children Entries:');
// print_r($count_children_entries . '<br><br>');

// print_r('Private Health Insurance Available:');
// print_r($condPrivateHealthInsurance . '<br><br>');

// print_r('Private Dental Insurance Available:');
// print_r($condPrivateDentalInsurance . '<br><br>');
?>