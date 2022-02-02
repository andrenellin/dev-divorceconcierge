<?php

/*
 * Template Name: Statement of Health Insurance Availability
 * Version: 1.0.0
 * Description: A print-friendly template displaying the Statement of Health Insurance Availability
 * Author: Bliksem LLC
 * Author URI: https://simplifysmallbiz.com
 * Group: TexasDivorceSource
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


/* *********************************************************************
 * VARIABLES
 ******************************************************************** */
$date_today = new \DateTime();
// SPOUSE A
$spouse_a = strtoupper($form_data['field'][29]);
$spouse_a_county = strtoupper($form_data['field'][14]);

// SPOUSE B
$spouse_b = strtoupper($form_data['field'][30]);
$spouse_b_county = strtoupper($form_data['field'][24]);

// CHILDREN
$children = $form_data['field'][37];
$children_under_18 = $form_data['field'][38];
$children_expecting = $form_data['field'][39];
$children_number = $form_data['field'][53];

// Child One if exists
if ($children_number == 1 || $children_number == 2 || $children_number == 3) {
    $child_1_firstname = $form_data['field'][57]['first'];
    $child_1_middlename = $form_data['field'][57]['middle'];
    $child_1_lastname = $form_data['field'][57]['last'];
    if ($child_1_middlename != '') {
        $child_1_fullname = $child_1_firstname . ' ' . $child_1_middlename . ' ' . $child_1_lastname;
    } else {
        $child_1_fullname = $child_1_firstname . ' ' . $child_1_lastname;
    }

    $child_1_gender = $form_data['field'][58];
    $child_1_dob = $form_data['field'][60];
    $child_1_ssn = $form_data['field'][61];
}

// Child Two if exists
if ($children_number == 2 || $children_number == 3) {
    $child_2_firstname = $form_data['field'][79]['first'];
    $child_2_middlename = $form_data['field'][79]['middle'];
    $child_2_lastname = $form_data['field'][79]['last'];
    if ($child_2_middlename != '') {
        $child_2_fullname = $child_2_firstname . ' ' . $child_2_middlename . ' ' . $child_2_lastname;
    } else {
        $child_2_fullname = $child_2_firstname . ' ' . $child_2_lastname;
    }
    
    $child_2_gender = $form_data['field'][77];
    $child_2_dob = $form_data['field'][75];
    $child_2_ssn = $form_data['field'][73];
}

// Child Three if exists
if ($children_number == 3) {
    $child_3_firstname = $form_data['field'][80]['first'];
    $child_3_middlename = $form_data['field'][80]['middle'];
    $child_3_lastname = $form_data['field'][80]['last'];
    if ($child_3_middlename != '') {
        $child_3_fullname = $child_3_firstname . ' ' . $child_3_middlename . ' ' . $child_3_lastname;
    } else {
        $child_3_fullname = $child_3_firstname . ' ' . $child_3_lastname;
    }
    $child_3_gender = $form_data['field'][78];
    $child_3_dob = $form_data['field'][76];
    $child_3_ssn = $form_data['field'][74];
}

// PETITION
$petitioner = strtoupper($form_data['field'][31]);
if ($petitioner == $spouse_a) {
    $respondent = $spouse_b;
} else {
    $respondent = $spouse_a;
}

// COUNTY
if ($petitioner == $spouse_a && $spouse_a_county != '') {
    $county = $spouse_a_county;
} elseif ($petitioner == $spouse_b && $spouse_b_county != '') {
    $county = $spouse_b_county;
} elseif ($spouse_a_county != '') {
    $county = $spouse_a_county;
} else {
    $county = $spouse_b_county;
}

// HEALTH INSURANCE
$health_insurance_in_effect = $form_data['field'][83];
$health_insurance_company_name = strtoupper($form_data['field'][84]);
$health_insurance_policy_number = strtoupper($form_data['field'][85]);
$health_insurance_party_responsible = strtoupper($form_data['field'][86]);
$health_insurance_monthly_premium = strtoupper($form_data['field'][87]);
$health_insurance_employment_dependent = $form_data['field'][88];
$health_insurance_medicaid = $form_data['field'][89];
$health_insurance_CHIP = $form_data['field'][90];

// DENTAL INSURANCE
$dental_insurance_in_effect = $form_data['field'][93];
$dental_insurance_company_name = strtoupper($form_data['field'][94]);
$dental_insurance_policy_number = strtoupper($form_data['field'][95]);
$dental_insurance_party_responsible = strtoupper($form_data['field'][96]);
$dental_insurance_monthly_premium = strtoupper($form_data['field'][97]);
$dental_insurance_employment_dependent = $form_data['field'][98];
$no_dental_insurance_party_responsible = $form_data['field'][105];
$no_dental_insurance_access = $form_data['field'][104];


// NAME CHANGE
/* ***********************************************************************************************************

 * VARIABLES END
 *********************************************************************************************************** */
?>



<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!-- STYLES -->
<style>
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

.column_left_half,
.column_right_half {
    width: 49%;
}

.section_number {
    width: 10mm;
    font-style: italic;
}

.table_children_col_1 {
    width: 10mm;
}

.table_children_col_2 {
    width: 50mm;
}





/* GENERAL */
.bs_bold {
    font-weight: bold;
}

.bs_italic {
    font-style: italic;
}

.indent-paragraph {
    text-indent: 10mm;
}

.paragraph {
    line-height: 2;
}

.text_align_center {
    text-align: center;
}

.text_align_right {
    text-align: right;
}

/* SIGNATURE FIELDS */
.height_max {
    height: 30mm;
}

/* HEADERS or PAGE */
@page {
    size: 8.5in 11in;
    margin: 20mm 20mm 10mm 20mm;
    header: html_MyCustomHeader;
    line-height: 1.3;
    /* display <htmlpageheader name="MyCustomHeader"> on all pages */
}

/* FOOTERS */
@page {
    footer: html_MyCustomFooter;
    /* display <htmlpagefooter name="MyCustomFooter"> on all pages */
    margin-footer: 10mm;
}
</style>
<!-- STYLES END -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!-- HEADER / FOOTER -->
<htmlpagefooter name="MyCustomFooter">
    <table class="footer">
        <tr class="paragraph">
            <td class="footer_left_half"><span class="bs_bold">STATEMENT OF HEALTH INSURANCE AVAILABILITY</span></td>
            <td class="footer_right_half text_align_right"><span class="bs_bold">PAGE {PAGENO}</span></td>
        </tr>
    </table>
</htmlpagefooter>
<!-- HEADR FOOTER END -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!-- PAGE 1 -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!-- --------------------------------------------------------------------------------------------------------------- -->
<div class="text_align_center bs_bold">NO.__________________________________________</div>
<br>

<!-- INTRO HEADER -->
<table class="INTRO">
    <tr class="paragraph">
        <td class="column_left_half"><span class="bs_bold">IN THE MATTER OF</span></td>
        <td class="column_right_half"><span class="bs_bold">&sect; IN THE DISTRICT OF</span></td>
    </tr>
    <tr class="paragraph">
        <td class="column_left_half"><span class="bs_bold">IN THE MARRIAGE OF</span></td>
        <td class="column_right_half"><span class="bs_bold">&sect; &nbsp;</span></td>
    </tr>
    <tr class="paragraph">
        <td class="column_left_half"><span class="bs_bold">&nbsp;</span></td>
        <td class="column_right_half"><span class="bs_bold">&sect; &nbsp;</span></td>
    </tr>
    <tr class="paragraph">
        <td class="column_left_half"><span class="bs_bold"><?php echo $petitioner ; ?></span></td>
        <td class="column_right_half"><span class="bs_bold">&sect; _______ JUDICIAL DISTRICT</span></td>
    </tr>
    <tr class="paragraph">
        <td class="column_left_half"><span class="bs_bold">AND</span></td>
        <td class="column_right_half"><span class="bs_bold">&sect; &nbsp;</span></td>
    </tr>
    <tr class="paragraph">
        <td class="column_left_half"><span class="bs_bold"><?php echo $respondent; ?></span></td>
        <td class="column_right_half"><span class="bs_bold">&sect; <?php echo $county; ?>, TEXAS</span></td>
    </tr>
</table>
<br>
<div class="text_align_center bs_bold paragraph">STATEMENT OF HEALTH INSURANCE AVAILABILITY</div>
<br>

<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- STATEMENT OF HEALTH INSURANCE AVAILABILITY -->


<div class="section_content paragraph indent-paragraph">This statement is made by <?php echo $petitioner ?>, Petitioner,
    in accordance with sections 154.181 and 154.1815 of the Texas Family Code.
</div>
<br>
<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- 1 CHILDREN-->
<table>
    <tr class="paragraph">
        <td class="section_number"><span class="bs_italic">1. </span></td>
        <td class="section-heading"><span class="bs_italic">Child[ren]</span></td>
    </tr>
</table>


<!-- php start -->
<?php
if (($children_number == 1 || $children_number == 2 || $children_number == 3) && $children_expecting == "No") { ?>
<!-- php pause -->
<table>
    <tr>
        <td class="paragraph table_children_col_1">&nbsp;</td>
        <td class="paragraph table_children_col_2">Name:</td>
        <td class="paragraph table_children_col_3"><?php echo $child_1_fullname ?></td>
    </tr>
    <tr>
        <td class="paragraph table_children_col_1">&nbsp;</td>
        <td class="paragraph table_children_col_2">Sex:</td>
        <td class="paragraph table_children_col_3"><?php echo $child_1_gender ?></td>
    </tr>
    <tr>
        <td class="paragraph table_children_col_1">&nbsp;</td>
        <td class="paragraph table_children_col_2">Birthdate:</td>
        <td class="paragraph table_children_col_3"><?php echo $child_1_dob ?></td>
    </tr>
    <tr>
        <td class="paragraph table_children_col_1">&nbsp;</td>
        <td class="paragraph table_children_col_2">Social Security Number:</td>
        <td class="paragraph table_children_col_3"><?php echo $child_1_ssn ?></td>
    </tr>
</table>
<br>

<!-- php resume -->
<?php } ?>
<!-- php end -->

<!-- php start -->
<?php
if (($children_number == 2 || $children_number == 3) && $children_expecting == "No") { ?>
<!-- php pause -->
<table>
    <tr>
        <td class="paragraph table_children_col_1">&nbsp;</td>
        <td class="paragraph table_children_col_2">Name:</td>
        <td class="paragraph table_children_col_3"><?php echo $child_2_fullname ?></td>
    </tr>
    <tr>
        <td class="paragraph table_children_col_1">&nbsp;</td>
        <td class="paragraph table_children_col_2">Sex:</td>
        <td class="paragraph table_children_col_3"><?php echo $child_2_gender ?></td>
    </tr>
    <tr>
        <td class="paragraph table_children_col_1">&nbsp;</td>
        <td class="paragraph table_children_col_2">Birthdate:</td>
        <td class="paragraph table_children_col_3"><?php echo $child_2_dob ?></td>
    </tr>
    <tr>
        <td class="paragraph table_children_col_1">&nbsp;</td>
        <td class="paragraph table_children_col_2">Social Security Number:</td>
        <td class="paragraph table_children_col_3"><?php echo $child_2_ssn ?></td>
    </tr>
</table>
<br>
<!-- php resume -->
<?php } ?>
<!-- php end -->


<!-- php start -->
<?php
if ($children_number == 3 && $children_expecting == "No") { ?>
<!-- php pause -->
<table>
    <tr>
        <td class="paragraph table_children_col_1">&nbsp;</td>
        <td class="paragraph table_children_col_2">Name:</td>
        <td class="paragraph table_children_col_3"><?php echo $child_3_fullname ?></td>
    </tr>
    <tr>
        <td class="paragraph table_children_col_1">&nbsp;</td>
        <td class="paragraph table_children_col_2">Sex:</td>
        <td class="paragraph table_children_col_3"><?php echo $child_3_gender ?></td>
    </tr>
    <tr>
        <td class="paragraph table_children_col_1">&nbsp;</td>
        <td class="paragraph table_children_col_2">Birthdate:</td>
        <td class="paragraph table_children_col_3"><?php echo $child_3_dob ?></td>
    </tr>
    <tr>
        <td class="paragraph table_children_col_1">&nbsp;</td>
        <td class="paragraph table_children_col_2">Social Security Number:</td>
        <td class="paragraph table_children_col_3"><?php echo $child_3_ssn ?></td>
    </tr>
</table>
<br>
<!-- php resume -->
<?php } ?>
<!-- php end -->

<!-- php start INSERT PAGEBREAK CONDITIONALLY 3 Children-->
<?php
if ($children_number == 3) { ?>
<!-- php end -->
<pagebreak />
<!-- php resume -->
<?php } ?>
<!-- php end -->


<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- 2 HEALTH INSURANCE AVAILABILITY-->
<table>
    <tr class="paragraph">
        <td class="section_number"><span class="bs_italic">2. </span></td>
        <td class="section-heading"><span class="bs_italic">Health Insurance Availability </span></td>
    </tr>
</table>

<!-- CONDITION:  PRIVATE INSURANCE -->
<div class="section_content paragraph indent-paragraph"> Private health insurance is in effect for the child(ren).
</div>
<table>
    <tr>
        <td class="paragraph">Name of insurance company: <?php echo $health_insurance_company_name;?></td>
    </tr>
    <tr>
        <td class="paragraph">Policy number: <?php echo $health_insurance_policy_number ?></td>
    </tr>
    <tr>
        <td class="paragraph">Party responsible for premium:
            <?php echo $health_insurance_party_responsible ?></td>
    </tr>
    <tr>
        <td class="paragraph">Monthly cost of premium:
            <?php echo $health_insurance_monthly_premium ?>
        </td>
    </tr>
</table>

<!-- php start condition: Health Insurance Dependent on Employment-->
<?php if ($health_insurance_employment_dependent == 'Yes') { ?>
<!-- php pause -->
<div class="section_content paragraph indent-paragraph"> The insurance coverage IS provided through a parent's
    employment.
</div>
<!-- php resume -->
<?php } ?>
<!-- php end -->

<!-- php start condition: Health Insurance NOT dependent on Employment -->
<?php if ($health_insurance_employment_dependent == 'No') { ?>
<!-- php pause -->
<div class="section_content paragraph indent-paragraph"> The insurance coverage IS NOT provided through a parent's
    employment.
</div>
<!-- php resume -->
<?php } ?>
<!-- php end -->

<!-- php start condition: Health Insurance medicaid -->
<?php if ($health_insurance_medicaid == 'Yes') { ?>
<!-- php pause -->
<div class="section_content paragraph indent-paragraph"> The child(ren) ARE receiving Medicaid benefits under chapter
    32, Human Resources Code.
</div>
<!-- php resume -->
<?php } ?>
<!-- php end -->

<!-- php start condition: Health Insurance NOT medicaid  -->
<?php if ($health_insurance_medicaid == 'No') { ?>
<!-- php pause -->
<div class="section_content paragraph indent-paragraph"> The child(ren) ARE NOT receiving Medicaid benefits under
    chapter 32, Human Resources Code.
</div>
<!-- php resume -->
<?php } ?>
<!-- php end -->

<!-- php start condition: Health Insurance Children's Health Insurance Program -->
<?php if ($health_insurance_CHIP == 'Yes') { ?>
<!-- php pause -->
<div class="section_content paragraph indent-paragraph"> The child(ren) ARE receiving health benefits coverage under the
    Children's Health Insurance Program under chapter 62 of the Texas Health and Safety Code</div>
<!-- php resume -->
<?php } ?>
<!-- php end -->

<!-- php start condition: Health Insurance NOT Children's Health Insurance Program  -->
<?php if ($health_insurance_CHIP == 'No') { ?>
<!-- php pause -->
<div class="section_content paragraph indent-paragraph"> The child(ren) ARE NOT receiving health benefits coverage under
    the
    Children's Health Insurance Program under chapter 62 of the Texas Health and Safety Code</div>
<!-- php resume -->
<?php } ?>
<!-- php end -->

<div class="section_content paragraph indent-paragraph"><?php echo $health_insurance_party_responsible ?> of the
    child[ren] has access to private health insurance at reasonable cost to her/him;</div>

<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- 3 DENTAL INSURANCE AVAILABILITY-->
<table>
    <tr class="paragraph">
        <td class="section_number"><span class="bs_italic">3. </span></td>
        <td class="section-heading"><span class="bs_italic">Dental Insurance Availability </span></td>
    </tr>
</table>

<!-- php START condition: dental Insurance is in effect -->
<?php if ($dental_insurance_in_effect == 'Yes') { ?>
<!-- php pause -->

<div class="section_content paragraph indent-paragraph"> Dental insurance is in effect for the child(ren).
</div>
<table>
    <tr>
        <td class="paragraph">Name of insurance company: <?php echo $dental_insurance_company_name;?></td>
    </tr>
    <tr>
        <td class="paragraph">Policy number: <?php echo $dental_insurance_policy_number ?></td>
    </tr>
    <tr>
        <td class="paragraph">Party responsible for premium:
            <?php echo $dental_insurance_party_responsible ?></td>
    </tr>
    <tr>
        <td class="paragraph">Monthly cost of premium:
            <?php echo $dental_insurance_monthly_premium ?>
        </td>
    </tr>
</table>

<!-- php start condition: dental Insurance Dependent on Employment-->
<?php if ($dental_insurance_employment_dependent == 'Yes') { ?>
<!-- php pause -->
<div class="section_content paragraph indent-paragraph"> The insurance coverage IS provided through a parent's
    employment.
</div>
<!-- php resume -->
<?php } ?>
<!-- php end condition: dental Insurance Dependent on Employment -->

<!-- php start condition: dental Insurance NOT dependent on Employment -->
<?php if ($dental_insurance_employment_dependent == 'No') { ?>
<!-- php pause -->
<div class="section_content paragraph indent-paragraph"> The insurance coverage IS NOT provided through a parent's
    employment.
</div>
<!-- php resume -->
<?php } ?>
<!-- php end condition: dental Insurance NOT dependent on Employment -->


<!-- php resume -->
<?php } ?>
<!-- php END condition: dental Insurance is in effect -->



<!-- php START condition: dental Insurance is NOT in effect -->
<?php if ($dental_insurance_in_effect == 'No') { ?>
<!-- php pause -->


<!-- php start condition: has access to dental insurance -->
<?php if ($no_dental_insurance_access == 'Yes') { ?>
<!-- php pause -->
<div class="section_content paragraph indent-paragraph"><?php echo $no_dental_insurance_party_responsible ?>, of the
    child[ren] HAS access to dental insurance at reasonable cost to her/him;</div>
<!-- php resume -->
<?php } ?>
<!-- php end condition: has access to dental insurance -->


<!-- php start condition: has access to dental insurance -->
<?php if ($no_dental_insurance_access == 'No') { ?>
<!-- php pause -->
<div class="section_content paragraph indent-paragraph"><?php echo $no_dental_insurance_party_responsible ?>, of the
    child[ren] DOES NOT HAVE access to dental insurance at reasonable cost to her/him;</div>
<!-- php resume -->
<?php } ?>
<!-- php end condition: has access to dental insurance -->


<!-- php resume -->
<?php } ?>
<!-- php END condition: dental Insurance is NOT in effect -->