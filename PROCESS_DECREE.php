<?php

/*
 * Template Name: Final Decree of Divorce
 * Version: 1.0.0
 * Description: A print-friendly template displaying the Final Decree of Divorce
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

.column-left_half,
.column-right_half {
    width: 49%;
}

.section_number {
    width: 20mm;
    font-style: italic;
}

.table_children_col_1 {
    width: 20mm;
}

.table_children_col_2 {
    width: 85mm;
}





/* GENERAL */
.paragraph-indent {
    text-indent: 15mm;
}

.paragraph {
    line-height: 2;
}

.text-align_center {
    text-align: center;
}

.text-align_right {
    text-align: right;
}

.text-bold {
    font-weight: bold;
}

.text-italic {
    font-style: italic;
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
            <td class="footer_left_half"><span class="text-bold">FINAL DECREE OF DIVORCE</span></td>
            <td class="footer_right_half text_align_right"><span class="text-bold">PAGE {PAGENO}</span></td>
        </tr>
    </table>
</htmlpagefooter>
<!-- HEADR FOOTER END -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->




<?php

/* *********************************************************************
 * VARIABLES
 ******************************************************************** */
$date_today = new \DateTime();
// SPOUSE A
$spouse_a = strtoupper($form_data['field'][29]);
$spouse_a_gender = strtoupper($form_data['field'][3]);
$spouse_a_drivers_license = strtoupper($form_data['field'][12]);
$spouse_a_ssn = strtoupper($form_data['field'][13]);
$spouse_a_address_street_1 = strtoupper($form_data['field'][6]['street']);
$spouse_a_address_street_2 = strtoupper($form_data['field'][6]['street2']);
$spouse_a_address_city = strtoupper($form_data['field'][6]['city']);
$spouse_a_address_state = strtoupper($form_data['field'][6]['state']);
$spouse_a_address_zip = strtoupper($form_data['field'][6]['zip']);
$spouse_a_email = strtoupper($form_data['field'][7]);
$spouse_a_phone_mobile = strtoupper($form_data['field'][8]);
$spouse_a_phone_work = strtoupper($form_data['field'][9]);
$spouse_a_county = strtoupper($form_data['field'][14]);

// SPOUSE B
$spouse_b = strtoupper($form_data['field'][30]);
$spouse_b_gender = strtoupper($form_data['field'][17]);
$spouse_b_drivers_license = strtoupper($form_data['field'][18]);
$spouse_b_ssn = strtoupper($form_data['field'][19]);
$spouse_b_address_street_1 = strtoupper($form_data['field'][20]['street']);
$spouse_b_address_street_2 = strtoupper($form_data['field'][20]['street2']);
$spouse_b_address_city = strtoupper($form_data['field'][20]['city']);
$spouse_b_address_state = strtoupper($form_data['field'][20]['state']);
$spouse_b_address_zip = strtoupper($form_data['field'][20]['zip']);
$spouse_b_email = strtoupper($form_data['field'][21]);
$spouse_b_phone_mobile = strtoupper($form_data['field'][22]);
$spouse_b_phone_work = strtoupper($form_data['field'][23]);
$spouse_b_county = strtoupper($form_data['field'][24]);


// MARRIAGE DETAILS
$date_marriage = $form_data['field'][11];
$residence_stay_together = $form_data['field'][34];
$residence_separated_date = $form_data['field'][35];
if ($residence_stay_together == 'No') {
    $date_separation = $residence_separated_date;
} else {
    $date_separation = date("m-d-Y");
}


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
    $child_1_drivers_license = $form_data['field'][63];
    if ($child_1_drivers_license == 'Yes') {
        $child_1_drivers_license_number = $form_data['field'][62];
        $child_1_drivers_license_state = $form_data['field'][67];
    }
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
    $child_2_drivers_license = $form_data['field'][71];
    if ($child_2_drivers_license_exists == 'Yes') {
        $child_2_drivers_license_number = $form_data['field'][69];
        $child_2_drivers_license_state = $form_data['field'][64];
    }
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
    $child_3_drivers_license = $form_data['field'][72];
    if ($child_3_drivers_license_exists == 'Yes') {
        $child_3_drivers_license_number = $form_data['field'][70];
        $child_3_drivers_license_state = $form_data['field'][68];
    }
}

$name_change = $form_data['field'][41];
$name_change_who  = strtoupper($form_data['field'][42]);
$marital_estate_value = $form_data['field'][44];

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

// NAME CHANGE
if ($name_change == 'Yes') {

    // GET FIRST AND MIDDLE NAMES
    if ($name_change_who == $spouse_a) {
        $name_change_first_name = strtoupper($form_data['field'][2]['first']);
        $name_change_middle_name = strtoupper($form_data['field'][2]['middle']);
    } else {
        $name_change_first_name = strtoupper($form_data['field'][16]['first']);
        $name_change_middle_name = strtoupper($form_data['field'][16]['middle']);
    }

    // CHANGE LAST NAME TO
    $name_change_last_name = strtoupper($form_data['field'][45]['last']);
}



//  * VARIABLES END
//  *********************************************************************************************************** */
?>

<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!-- PAGE 1 -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

<!-- --------------------------------------------------------------------------------------------------------------- -->
<div class="text-align_center text-bold">NO.__________________________________________</div>
<br>

<!-- INTRO HEADER -->
<table class="INTRO">
    <tr class="paragraph">
        <td class="column-left_half"><span class="text-bold">IN THE MATTER OF</span></td>
        <td class="column-right_half"><span class="text-bold">&sect; IN THE DISTRICT OF</span></td>
    </tr>
    <tr class="paragraph">
        <td class="column-left_half"><span class="text-bold">IN THE MARRIAGE OF</span></td>
        <td class="column-right_half"><span class="text-bold">&sect; &nbsp;</span></td>
    </tr>
    <tr class="paragraph">
        <td class="column-left_half"><span class="text-bold">&nbsp;</span></td>
        <td class="column-right_half"><span class="text-bold">&sect; &nbsp;</span></td>
    </tr>
    <tr class="paragraph">
        <td class="column-left_half"><span class="text-bold"><?php echo $petitioner ; ?></span></td>
        <td class="column-right_half"><span class="text-bold">&sect; _______ JUDICIAL DISTRICT</span></td>
    </tr>
    <tr class="paragraph">
        <td class="column-left_half"><span class="text-bold">AND</span></td>
        <td class="column-right_half"><span class="text-bold">&sect; &nbsp;</span></td>
    </tr>
    <tr class="paragraph">
        <td class="column-left_half"><span class="text-bold"><?php echo $respondent; ?></span></td>
        <td class="column-right_half"><span class="text-bold">&sect; <?php echo $county; ?>, TEXAS</span></td>
    </tr>
</table>
<br>
<div class="text-align_center text-bold paragraph">FINAL DECREE OF DIVORCE</div>
<br>
<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- PREAMBLE -->
<div class="paragraph paragraph-indent">On this date the Court heard this case.</div>
<div class="paragraph text-italic">Appearances</div>
<div class="paragraph paragraph-indent">Petitioner, <?php echo $petitioner ?>, did not appear in person but has agreed
    to the terms
    of this order as evidenced by Petitioner's signature below.
</div>
<div class="paragraph paragraph-indent">Respondent, <?php echo $respondent ?>, has made a general appearance and has
    agreed to the
    terms of this judgment to the extent permitted by law, as evidenced by Respondent's signature below.
</div>
<div class="paragraph text-italic">Record</div>
<div class="paragraph paragraph-indent">The making of a record of testimony was waived by the parties with the consent
    of the Court.
</div>
<div class="paragraph text-italic">Jurisdiction and Domicile</div>
<div class="paragraph paragraph-indent">he Court finds that the pleadings of Petitioner are in due form and contain all
    the allegations, information, and prerequisites required by law. The Court, after receiving evidence, finds that it
    has jurisdiction of this case and of all the parties and that at least sixty days have elapsed since the date the
    suit was filed.
</div>
<div class="paragraph paragraph-indent">The Court further finds that, at the time this suit was filed, Petitioner had
    been a domiciliary of Texas for the preceding six-month period and a resident of the county in which this suit was
    filed for the preceding ninety-day period. All persons entitled to citation were properly cited.
</div>
<div class="paragraph text-italic">Jury</div>
<div class="paragraph paragraph-indent">A jury was waived, and questions of fact and of law were submitted to the Court.
</div>
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!-- PAGE 1 -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<pagebreak />
<div class="paragraph text-italic">Agreement of Parties</div>
<div class="paragraph paragraph-indent">The Court finds that the parties have entered into a written agreement as
    contained in this decree by virtue of having approved this decree as to both form and substance. To the extent
    permitted by law, the parties stipulate the agreement is enforceable as a contract. The Court approves the agreement
    of the parties as contained in this Final Decree of Divorce.
</div>
<div class="paragraph text-italic">Divorce</div>
<div class="paragraph paragraph-indent">IT IS ORDERED AND DECREED that <?php echo $petitioner ?>, Petitioner, and
    <?php echo $respondent ?>,
    Respondent, are divorced and that the marriage between them is dissolved on the ground of insupportability.
</div>
<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- Division of Marital Estate -->
<?php
/* *********************************************************************
 * VARIABLES DIVISION OF MARITAL ESTATE
 ******************************************************************** */
$petitioner_awarded_real_property = $form_data['field'][1];
if ($petitioner_awarded_real_property == ' Yes') {
    $petitioner_awarded_real_property_address =  $form_data['field'][1];
    $petitioner_awarded_real_property_legal_description =  $form_data['field'][1];
}

$petitioner_awarded_ira_annuities_sep = $form_data['field'][1];
if ($petitioner_awarded_ira_annuities_sep == ' Yes') {
    echo 'Add the required text to pdf script';
}

$petitioner_awarded_petitioners_retirement_benefits = $form_data['field'][1];
if ($petitioner_awarded_petitioners_retirement_benefits == ' Yes') {
    echo 'Add the required text to pdf script';
}

$petitioner_awarded_petitioners_brokerage_accounts_stock = $form_data['field'][1];
if ($petitioner_awarded_petitioners_retirement_benefits == ' Yes') {
    echo 'Add the required text to pdf script';
}




?>
<!-- --------------------------------------------------------------------------------------------------------------- -->
<div class="paragraph text-italic">X</div>
<div class="paragraph paragraph-indent">Y</div>



<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- PREAMBLE -->
<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- PREAMBLE -->
<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- PREAMBLE -->
<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- PREAMBLE -->
<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- PREAMBLE -->
<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- PREAMBLE -->
<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- PREAMBLE -->
<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- PREAMBLE -->
<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- PREAMBLE -->
<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- PREAMBLE -->
<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- PREAMBLE -->
<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- PREAMBLE -->
<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- PREAMBLE -->
<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- PREAMBLE -->
<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- PREAMBLE -->
<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- PREAMBLE -->



<!-- 10 REQUEST FOR NAME CHANGE IF YES -->
<!-- php start -->
<?php if ($name_change == "Yes") {?>
<!-- php pause -->
<table>
    <tr class="paragraph">
        <td class="section_number"><span class="bs_italic">10. </span></td>
        <td class="section-heading"><span class="bs_italic">Request for Change of Name</span></td>
    </tr>
</table>
<div class="section_content paragraph paragraph-indent"><?php echo $name_change_who ?> requests a change of name to
    <?php echo $name_change_first_name . ' ' . $name_change_middle_name . ' ' . $name_change_last_name ?></div>

<!-- php resume -->
<?php } ?>
<!-- php end -->

<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!-- PAGE 3 -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- 10 or 11 PRAYER -->
<!-- php start -->
<?php if ($name_change == "No") {?>
<!--php pause  -->
<table>
    <tr class="paragraph">
        <td class="section_number"><span class="bs_italic">10. </span></td>
        <td class="section-heading"><span class="bs_italic">Prayer</span></td>
    </tr>
</table>

<!-- php resume -->
<?php } ?>
<!-- php end -->




<!-- php start -->
<?php if ($name_change == "Yes") {?>
<!--php pause  -->
<table>
    <tr class="paragraph">
        <td class="section_number"><span class="bs_italic">11. </span></td>
        <td class="section-heading"><span class="bs_italic">Prayer</span></td>
    </tr>
</table>
<!-- php resume -->
<?php } ?>
<!-- php end -->


<div class="section_content paragraph paragraph-indent">Petitioner prays that citation and notice issue as required by
    law and
    that the Court grant a divorce and all other relief requested in this petition.</div>
<div class="section_content paragraph paragraph-indent">Petitioner prays that Petitioner's name be changed as requested
    above.
</div>

<!-- --------------------------------------------------------------------------------------------------------------- -->
<div class="height_max"></div>
<table class="SIGNATURES">
    <tr class="paragraph">
        <td class="column-left_half">&nbsp;</td>
        <td class="column-right_half">Respectfully submitted,</td>
    </tr>
    <tr class="paragraph">
        <td class="column-left_half">&nbsp;</td>
        <td class="column-right_half">&nbsp;</td>
    </tr>
    <tr class="paragraph">
        <td class="column-left_half">&nbsp;</td>
        <td class="column-right_half">THE RAMAGE LAW GROUP</td>
    </tr>
    <tr class="paragraph">
        <td class="column-left_half">&nbsp;</td>
        <td class="column-right_half">8951 Collin-McKinney Parkway</td>
    </tr>
    <tr class="paragraph">
        <td class="column-left_half">&nbsp;</td>
        <td class="column-right_half">Suite 1401</td>
    </tr>
    <tr class="paragraph">
        <td class="column-left_half">&nbsp;</td>
        <td class="column-right_half">McKinney, Texas, 75070</td>
    </tr>
    <tr class="paragraph">
        <td class="column-left_half">&nbsp;</td>
        <td class="column-right_half">Phone: 972-562-9890</td>
    </tr>
    <tr class="paragraph">
        <td class="column-left_half">&nbsp;</td>
        <td class="column-right_half">Fax: 972-377-8392</td>
    </tr>
    <tr class="paragraph">
        <td class="column-left_half">&nbsp;</td>
        <td class="column-right_half">Email: service@ramagelawfirm.com</td>
    </tr>
    <tr class="paragraph">
        <td class="column-left_half">&nbsp;</td>
        <td class="column-right_half">&nbsp;</td>
    </tr>
    <tr class="paragraph">
        <td class="column-left_half">&nbsp;</td>
        <td class="column-right_half">By: ________________________________</td>
    </tr>
    <tr class="paragraph">
        <td class="column-left_half">&nbsp;</td>
        <td class="column-right_half">SHARON M. RAMAGE</td>
    </tr>
    <tr class="paragraph">
        <td class="column-left_half">&nbsp;</td>
        <td class="column-right_half">SBOT: 13740100</td>
    </tr>
    <tr class="paragraph">
        <td class="column-left_half">&nbsp;</td>
        <td class="column-right_half">ATTORNEY FOR PETITIONER</td>
    </tr>
</table>