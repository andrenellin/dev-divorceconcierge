<meta charset="UTF-8">
<?php

/*
 * Template Name: Insurance Availability With Petition
 * Version: 1.0.1
 * Description: A print-friendly template displaying the Insurance availibility form/
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



/* GENERAL */
.bs_bold {
  font-weight: bold;
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

/* SIGNATURE FIELDS */
.height_max {
  height: 10mm;
}
</style>
<!-- STYLES END -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

<!-- HEADER / FOOTER -->
<htmlpagefooter name="MyCustomFooter">
  <table class="footer">
    <tr class="paragraph">
      <td class="footer_left_half"><span class="bs_bold bs_text_small">INSURANCE AVAILIBILITY</span></td>
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
$client_user_id = rgar($entry, 'created_by');

// IN THE MATTER OF / PARTIES
$petitioner = $form_data['field'][3]; // [3.PETITIONER: Full Name]
$petitioner_uppercase = strtoupper($petitioner);
$respondent = $form_data['field'][4]; // [4.RESPONDENT: Full Name]
$respondent_uppercase = strtoupper($respondent);

$county = strtoupper($form_data['field'][6]); // [6.County]


// 8 CHILDREN OF THE MARRIAGE

$repeater_children_form_id = 14;
$repeater_children_search_criteria['field_filters'][] = array('key' => 'created_by', 'value' => $client_user_id);
$repeater_children_search_criteria['status'] = 'active';
$repeater_children_sorting = array('key' => 'id', 'direction' => 'ASC', 'is_numeric' => true);
$children_entries = GFAPI::get_entries($repeater_children_form_id, $repeater_children_search_criteria);
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

//INSURANCE DETAILS

$insurance_data_id = 23;
$insurance_data_search_criteria['field_filters'][] = array('key' => 'created_by', 'value' => $client_user_id);
$insurance_data_search_criteria['status'] = 'active';
$insurance_data_sorting = array('key' => 'id', 'direction' => 'ASC', 'is_numeric' => true);
$insurance_entries = GFAPI::get_entries($insurance_data_id, $insurance_data_search_criteria);

$insurance = array();


//Health insurance details/condition
$condPrivateInsurance = $insurance_entries[0][263]; //do they have private Insurance

if ($condPrivateInsurance == 'Yes') {
    $privateInsuranceInfo = "Private health inusrance is in effect for the child(ren)";

} else {
    $privateInsuranceInfo = "";
}


$insuranceCompany = $insurance_entries[0][264]; //the insurance company name
$policyNumber =  $insurance_entries[0][265]; //insurance policy number
$responsibleParty =  $insurance_entries[0][266]; //petitioner or respondent responsible for isnurance
$premiumCost =  $insurance_entries[0][267]; //cost of insurance in $
$condInsuranceEmployment =  $insurance_entries[0][268]; //is the insurance provided by employment
$condMedicaid = $insurance_entries[0][269]; //do the children have access to medicaid
$condHealthBenefits = $insurance_entries[0][270]; //do the children have access to health benefits

$condPHealthAccess = $insurance_entries[0][271]; //does the petitioner or respondent have access to private healthcare at a reasonable cost
$condRHealthAccess = $insurance_entries[0][272]; //does the petitioner or respondent have access to private healthcare at a reasonable cost


//Dental insurance conditions
$dentalInsurance =  $insurance_entries[0][276];// dental insurance company name
$dentalPolicyNumber = $insurance_entries[0][277]; //dental policy number
$dentalCost = $insurance_entries[0][279]; //dental insurance cost in $
$condDenInsuranceEmployment = $insurance_entries[0][280]; // is the dental policy provided by employment
$responsiblePartyDental =  $insurance_entries[0][278];
$condNoDentalInsurance = $insurance_entries[0][275]; //do they have dental insurance 
$condAccessInsuranceP = $insurance_entries[0][281]; //does petitioner have acces to dental care
$condAccessInsuranceR =  $insurance_entries[0][282]; //does respondent have acccess to dental care


/* VARIABLES END
 *********************************************************************************************************** */
?>
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!-- PAGE 1 -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

<bookmark content="Insurance Availibility" />

<!-- --------------------------------------------------------------------------------------------------------------- -->
<div class="text_align_center bs_bold">NO. <?php echo "<b> $formNumber</b>"?></div>
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
  <tr class="paragraph">
    <td class="column_third_half"><span class="bs_bold">&nbsp;</span></td>
    <td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>
    <td class="column_right_third"><span class="bs_bold">&nbsp;</span></td>
  </tr>
  <tr class="paragraph">
    <td class="column_third_half"><span class="bs_bold"><?php echo $petitioner; ?></span></td>
    <td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>
    <td class="column_right_third"><span class="bs_bold"> _______ JUDICIAL DISTRICT</span></td>
  </tr>
  <tr class="paragraph">
    <td class="column_third_half"><span class="bs_bold">AND</span></td>
    <td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>
    <td class="column_right_third"><span class="bs_bold">&nbsp;</span></td>
  </tr>
  <tr class="paragraph">
    <td class="column_third_half"><span class="bs_bold"><?php echo $respondent ?></span></td>
    <td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>
    <td class="column_right_third"><span class="bs_bold"><?php echo $county; ?> COUNTY, TEXAS</span></td>
  </tr>
</table>

<!--- title ---->
<br>
<div class="text_align_center bs_bold">STATEMENT OF HEALTH INSURANCE AVAILIBILITY</div>
<br>

<div class="indent-paragraph"> This statement is made by <?php echo $petitioner?>, Petitioner, in accordance with sections 154.181 and 154.1815 of the Texas Family Code </div>

<!--- 1. Children ---->
<table>
  <tr class="paragraph">
       <td class="section_number"><span class="bs_italic bs_bold">1. </span></td>
    <td class="section-heading"><span class="bs_italic"> Child[ren]</span></td>
  </tr>
</table>

<?php
for ($i = 0; $i < $count_children_entries; $i++) {?>
<table class="children-wrapper">
  <tr class="child-row">
    <td class="child-label">Name:</td>
    <td class="child-data"><?php echo $children[$i]['full_name']; ?></td>
  </tr>
  <tr class="child-row">
    <td class="child-label">Sex:</td>
    <td class="child-data"><?php echo $children[$i]['gender']; ?></td>
  </tr>
  <tr class="child-row">
    <td class="child-label">Birthdate:</td>
    <td class="child-data"><?php echo $children[$i]['birth_date']; ?></td>
  </tr>
  <tr class="child-row">
    <td class="child-label">Social Security Number:</td>
    <td class="child-data">Exchanged Privately</td>
  </tr>
  <?php if ($children[$i]['has_dl'] == 'Yes') {?>
  <tr class="child-row">
    <td class="child-label">Drivers License:</td>
    <td class="child-data">Exchanged Privately</td>
  </tr>
  <?php }?>
  <!-- CLOSE IF STATEMENT -->
</table>
<br>
<?php }?>
<!-- CLOSE COUNTER -->
<!--- 2. Health insurance Availibility ---->
<table>
  <tr class="paragraph">
       <td class="section_number"><span class="bs_italic bs_bold">2. </span></td>
    <td class="section-heading"><span class="bs_italic"> Health Insurance Availibility</span></td>
  </tr>
</table>

<!--- Many if statements so that it can be formatted nicely in the PDF ---->
<div class = "indent-paragraph"> <?php if ($condPrivateInsurance == 'Yes') {
    echo "Private health is in effect for the child(ren).";
     echo "<br>";
 }?></div>
     <div class = "indent-paragraph"> <?php if ($condPrivateInsurance == 'Yes') {
        echo "  Name of insurance company: " . $insuranceCompany;
         echo "<br>";
     }?></div>
         <div class = "indent-paragraph"> <?php if ($condPrivateInsurance == 'Yes') {
             echo "  Policy number: " . $policyNumber;
             echo "<br>";
         }?></div>
            <div class = "indent-paragraph"> <?php if ($condPrivateInsurance == 'Yes') {
                echo "  Party responisble for premium: " . $responsibleParty;
                echo "<br>";
             }?></div>
                <div class = "indent-paragraph"> <?php if ($condPrivateInsurance == 'Yes') {
                    echo "  Monthly cost of premium: " .$premiumCost;
                }?></div>
                <div class = "indent-paragraph"> <?php if ($condPrivateInsurance == 'No'){
                    echo "Private health care is not in effect for the children"; 
                }?></div>

<!---- if the insurance is from employment ---->
<div class = "indent-paragraph"> <?php if ($condPrivateInsurance === 'Yes' && $condInsuranceEmployment === 'Yes') {
    echo "The insurance IS provided through a parent's employment";
     
} else {
    echo "The insurance IS NOT provided through a parent's employment";
} ?> </div>

 <!--- the children are/are not recieivng medicaid---->
<div class = "indent-paragraph"> <?php if ($condMedicaid === 'Yes') {
    echo "The child(ren) ARE recieving Medicaid benefits under chapter 32, Human Resources Code.";
 } else {
    echo "The child(ren) ARE NOT recieving Medicaid benefits under chapter 32, Human Resources Code.";
 }?></div>

 <!--- the children are/are not recieivng health benefits ---->
 <div class = "indent-paragraph"> <?php if ($condHealthBenefits === 'Yes') {
    echo "The child(ren) ARE recieving health benefits coverage under the Children's Health Insurance Program under chapter 62 of the Texas Health and Safety Code.";
 } else {
    echo "The child(ren) ARE NOT recieving health benefits coverage under the Children's Health Insurance Program under chapter 62 of the Texas Health and Safety Code.";
 }?></div>

  <div class = "indent-paragraph"> <?php if ($condPHealthAccess === 'Yes') {
    echo "Petitioner of the child(ren) HAS access to private health insurance at reasonable cost to her/him.";
 } else {
    echo "Petitioner of the child(ren) HAS NOT access to private health insurance at reasonable cost to her/him.";
 }?></div>

  <div class = "indent-paragraph"> <?php if ($condRHealthAccess === 'Yes') {
    echo "Respondent of the child(ren) HAS access to private health insurance at reasonable cost to her/him.";
 } else {
    echo "Respondent of the child(ren) HAS NOT access to private health insurance at reasonable cost to her/him.";
 }?></div>
 <!--- 3. dental insurance Availibility ---->
 <table>
  <tr class="paragraph">
       <td class="section_number"><span class="bs_italic">3. </span></td>
    <td class="indent"><span class="bs_italic"> Dental Insurance Availibility </span></td>
  </tr>
</table>

 <div class = "indent-paragraph"> <?php if ($condNoDentalInsurance == 'Yes') {
    echo "Private dental care is in effect for the child(ren).";
     echo "<br>";
 }?></div>
     <div class = "indent-paragraph"> <?php if ($condNoDentalInsurance== 'Yes') {
        echo "  Name of insurance company: " . $dentalInsurance;
         echo "<br>";
     }?></div>
         <div class = "indent-paragraph"> <?php if ($condNoDentalInsurance== 'Yes') {
             echo "  Policy number: " . $dentalPolicyNumber;
             echo "<br>";
         }?></div>
            <div class = "indent-paragraph"> <?php if ($condNoDentalInsurance== 'Yes') {
                echo "  Party responisble for premium: " . $responsiblePartyDental;
                echo "<br>";
             }?></div>
                <div class = "indent-paragraph"> <?php if ($condNoDentalInsurance == 'Yes') {
                    echo "  Monthly cost of premium: " .$dentalCost;
                }?></div>
                <div class = "indent-paragraph"> <?php if ($condNoDentalInsurance == 'No'){
                    echo "Private dental care is not in effect for the children"; 
                }?></div>

<!---- if the insurance is from employment ---->
<div class = "indent-paragraph"> <?php if ($condNoDentalInsurance == 'Yes' && $condInsuranceEmployment == 'Is') {
    echo "The insurance IS provided through a parent's employment";
     
} else {
    echo "The insurance IS NOT provided through a parent's employment";
} ?> </div>

<div class = "indent-paragraph"> <?php if($condAccessInsuranceP === 'Yes'){

echo "$petitioner, Petitioner HAS access to dental insurance at a reasonable cost"; 
}else{

echo "$petitioner, Petitioner DOES NOT HAVE access to dental insurance at a reasonable cost"; 
}?> </div>

<div class = "indent-paragraph"> <?php if($condAccessInsuranceR === 'Yes'){

echo "$respondent, Respondent HAS access to dental insurance at a reasonable cost"; 
}else{

echo "$respondent,Respondent DOES NOT HAVE access to dental insurance at a reasonable cost"; 
}?> </div>

<div class = "paragraph">Date: <?php echo $date1 ?> </div>

