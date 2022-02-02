<?php

/*
 * Template Name: Waiver of Service
 * Version: 1.0.0
 * Description: A print-friendly template displaying the Waiver of Service
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
.bs_bold {
    font-weight: bold;
}

.bs_italic {
    font-style: italic;
}

.indent-paragraph {
    text-indent: 20.5mm;
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
            <td class="footer_left_half"><span class="bs_bold">WAIVER OF SERVICE</span></td>
            <td class="footer_right_half text_align_right"><span class="bs_bold">PAGE {PAGENO}</span></td>
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
$spouse_a_address_street_1 = strtoupper($form_data['field'][6]['street']);
$spouse_a_address_street_2 = strtoupper($form_data['field'][6]['street2']);
$spouse_a_address_city = strtoupper($form_data['field'][6]['city']);
$spouse_a_address_state = strtoupper($form_data['field'][6]['state']);
$spouse_a_address_zip = strtoupper($form_data['field'][6]['zip']);
$spouse_a_phone_mobile = strtoupper($form_data['field'][8]);
$spouse_a_email = strtoupper($form_data['field'][7]);
$spouse_a_county = strtoupper($form_data['field'][14]);

$spouse_a_mailing_address = $spouse_a_address_street_1 . ' ' . $spouse_a_address_street_2 . ', ' . $spouse_a_address_city . ' ' . $spouse_a_address_state . ' ' . $spouse_a_address_zip;

// SPOUSE B
$spouse_b = strtoupper($form_data['field'][30]);
$spouse_b_address_street_1 = strtoupper($form_data['field'][20]['street']);
$spouse_b_address_street_2 = strtoupper($form_data['field'][20]['street2']);
$spouse_b_address_city = strtoupper($form_data['field'][20]['city']);
$spouse_b_address_state = strtoupper($form_data['field'][20]['state']);
$spouse_b_address_zip = strtoupper($form_data['field'][20]['zip']);
$spouse_b_phone_mobile = strtoupper($form_data['field'][22]);
$spouse_b_email = strtoupper($form_data['field'][21]);
$spouse_b_mailing_address = $spouse_b_address_street_1 . ' ' . $spouse_b_address_street_2 . ', ' . $spouse_b_address_city . ' ' . $spouse_b_address_state . ' ' . $spouse_b_address_zip;



// PETITION
$petitioner = strtoupper($form_data['field'][31]);
if ($petitioner == $spouse_a) {
    $respondent = $spouse_b;
    $respondent_mailing_address = $spouse_b_mailing_address;
    $respondent_phone = $spouse_b_phone_mobile;
    $respondent_email_address = $spouse_b_email;
} else {
    $respondent = $spouse_a;
    $respondent_mailing_address = $spouse_a_mailing_address;
    $respondent_phone = $spouse_a_phone_mobile;
    $respondent_email_address = $spouse_a_email;
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


// NAME CHANGE
/* ***********************************************************************************************************

 * VARIABLES END
 *********************************************************************************************************** */
?>
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
<div class="text_align_center bs_bold paragraph">WAIVER OF SERVICE</div>
<br>

<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- WAIVER OF SERVICE -->
<div class="section_content paragraph indent-paragraph"><?php echo $respondent ?> appeared in person before me today and
    stated under oath:</div>
<div class="section_content paragraph indent-paragraph">"I, <?php echo $respondent; ?>, am the person named as
    Respondent in this case.</div>
<div class="section_content paragraph indent-paragraph">"I acknowledge that I have been provided a copy of the Original
    Petition for Divorce filed in this case. I have read and understand the contents of that document.</div>
<div class="section_content paragraph indent-paragraph">"I understand that the Texas Rules of Civil Procedure require,
    in most instances, that a party or respondent be served with citation. I do not want to be served with citation, and
    I waive the issuance and service of citation.</div>
<div class="section_content paragraph indent-paragraph">"I enter my appearance in this case for all purposes.</div>
<div class="section_content paragraph indent-paragraph">"I waive the making of a record of testimony in this case.</div>
<div class="section_content paragraph indent-paragraph">"I agree that this case may be taken up and considered by the
    Court without further notice to me.</div>
<div class="section_content paragraph indent-paragraph">"I agree that the case may be decided by the presiding Judge of
    the Court or by a duly appointed Associate Judge of the Court.</div>
<div class="section_content paragraph indent-paragraph">"I want to be notified of any hearing or trial of this case.
</div>
<div class="section_content paragraph indent-paragraph">"I do not waive any rights that I may have with regard to the
    division of my interest in my spouse's and my property.</div>

<!-- --------------------------------------------------------------------------------------------------------------- -->

<!-- REQUEST FOR NAME CHANGE IF YES -->
<!-- php start -->
<?php if ($name_change == "Yes") {?>
<!-- php pause -->
<div class="section_content paragraph indent-paragraph">"I request the Court to order that my legal name be
    <?php echo $name_change_first_name . ' ' . $name_change_middle_name . ' ' . $name_change_last_name ?></div>
<!-- php resume -->
<?php } ?>
<!-- php end -->
<!-- --------------------------------------------------------------------------------------------------------------- -->

<div class="section_content paragraph indent-paragraph">"If I should enter into a settlement agreement with Petitioner,
    that agreement will bear my signature indicating my approval of its terms, conditions, and contents.</div>
<div class="section_content paragraph indent-paragraph">"I request the Court not to enter any orders or judgment not
    signed by me or without my receiving prior written notice of the date, time, and place of any proceedings.</div>
<div class="section_content paragraph indent-paragraph">"I understand that I have a duty to notify the attorney for
    Petitioner if I change my address. I understand that, unless I notify the attorney for Petitioner of any such change
    in writing, any notices that I might otherwise be entitled to receive with regard to disposition of this proceeding
    will be forwarded to me at the address indicated below.</div>
<div class="section_content paragraph indent-paragraph">"Insofar as this suit is concerned, I waive all rights,
    privileges, and exemptions existing or that may hereafter exist in my favor under the Servicemembers Civil Relief
    Act, including the appointment of counsel to represent me in this case.</div>
<div class="section_content paragraph indent-paragraph">"I further state that the following information is correct and
    that my-</div>
<div class="section_content paragraph indent-paragraph">Mailing address is: <?php echo $respondent_mailing_address ?>
</div>
<div class="section_content paragraph indent-paragraph">Telephone number is: <?php echo $respondent_phone;?>
</div>
<div class="section_content paragraph indent-paragraph">E-mail address is: <?php echo $respondent_email_address; ?>
</div>
<div class="section_content paragraph indent-paragraph">"I further understand that I have a duty to notify the Court if
    my mailing address changes during this proceeding."</div>
<br><br>
<table>
    <tr class="paragraph">
        <td class="column_left_half">&nbsp;</td>
        <td class="column_right_half"><?php echo $respondent ?></td>
    </tr>
</table>
<br><br>
<div class="section_content paragraph indent-paragraph">SIGNED under oath before me on __________________________. This
    notarial act was an online notarization.</div>
<br><br>
<table>
    <tr class="paragraph">
        <td class="column_left_half">&nbsp;</td>
        <td class="column_right_half">Notary Public, State of Texas</td>
    </tr>
</table>
<br><br>
<div class="section_content paragraph indent-paragraph">I, the notary public whose signature appears above, certify that
    I am not an attorney in this case.</div>