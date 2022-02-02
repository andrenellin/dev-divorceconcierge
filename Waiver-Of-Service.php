<meta charset="UTF-8">
<?php

/*
 * Template Name: Waiver of Service
 * Version: 1.0.0
 * Description: A print-friendly template displaying the Waiver of Service
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
   line-height: 150%;
}

.indent-paragraph-text {
padding-left: 100px;
  text-align: justify;

   line-height: 250%;
 
  
}
.title{

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

<?php
$petitioner = $form_data['field'][3];
$petitionerUpper = strtoupper($petitioner);
?>

<!-- HEADER / FOOTER -->
<htmlpagefooter name="MyCustomFooter">
  <table class="footer">
    <tr class="paragraph">
      <td class="footer_left_half"><span class="bs_bold bs_text_small">WAIVER OF SERVICE 468-57162-2020/<?php echo $petitionerUpper?></span></td>
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
// $client_user_id = $form_data'misc''created_by';

//INput data
/* <!-- $petitioner = $form_data['field'][]; --> (unsure of use at moment) */
/* <!-- $county = $form_data['field'][]; --> (unsure of use at moment) */

$fomrNo = $form_data['field'][2];
$county = $form_data['field'][6];
$district = $form_data['field'][5];


$respondent = $form_data['field'][4]; //respondents current name
$condNameChange = $form_data['field'][27]; // condition if they chose to change name
$newNameParty = $form_data['field'][28]; //  repsondent's new name begging 
$newName = $form_data['field'][29]; //  repsondent's new name begging 
$addressArray = $form_data['field'][72]; // respondent's mailing address
$phoneNumber = $form_data['field'][73]; // respondents phone number 
$emailAddress = $form_data['field'][74]; // respondent's email 

//$respondent= implode(" ",$respondentArray);
//$newName = implode(" ",$newNameArray);
$address = implode(" ",$addressArray);
//$petitioner = implode(" ",$petitionerArray);


/* VARIABLES END
 *********************************************************************************************************** */
?>
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!-- PAGE 1 -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

<bookmark content="Waiver of Service" />

<!-- --------------------------------------------------------------------------------------------------------------- -->
<div class="text_align_center bs_bold">NO. <?php echo $fomrNo ?></div>
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
    <td class="column_right_third"><span class="bs_bold"> <?php echo $district ?> JUDICIAL DISTRICT</span></td>
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
<div class = "title"><span class="bs_bold text_align_center"> <br> WAIVER OF SERVICE </span></div>

<!--- first paragraph, each div is used to create an indented line for aestetic of PDF ---->
<div class = "indent-paragraph"> <?php echo $respondent?> appeared in person before me today and stated under oath: </div>
<div class = "indent-paragraph"> "I, <?php echo $respondent?>, am the person named as Respondent in this case. </div>
<div class = "indent-paragraph"> "I acknowledge that I have been provided a copy of the Original Petition for Divorce filed in this case.  I have read and understand the contents of that document. </div>
<div class = "indent-paragraph"> "I understand that the Texas Rules of Civil Procedure require, in most instances, that a party or respondent be served with citation.  I do not want to be served with citation, and I waive the issuance and service of citation. </div>
<div class = "indent-paragraph"> "I enter my appearance in this case for all purposes. </div>
<div class = "indent-paragraph"> "I waive the making of a record of testimony in this case. </div>
<div class = "indent-paragraph"> "I agree that this case may be taken up and considered by the Court without further notice to me. </div>
<div class = "indent-paragraph"> "I agree that the case may be decided by the presiding Judge of the Court or by a duly appointed Associate Judge of the Court. </div>
<div class = "indent-paragraph"> "I want to be notified of any hearing or trial of this case. </div>
<div class = "indent-paragraph"> "I do not waive any rights that I may have with regard to the division of my interest in my spouse's and my property.</div>

<!--- add if statement to this one ---->
<div class = "indent-paragraph"> <?php if($condNameChange === 'Yes'){

 echo "I request the Court to order that my legal name be  $newName " ;
}else{

}?></div>
<div class = "indent-paragraph"> "If I should enter into a settlement agreement with Petitioner, that agreement will bear my signature indicating my approval of its terms, conditions, and contents. </div>
<div class = "indent-paragraph"> "I request the Court not to enter any orders or judgment not signed by me or without my receiving prior written notice of the date, time, and place of any proceedings. </div>
<div class = "indent-paragraph"> "I understand that I have a duty to notify the attorney for Petitioner if I change my address.  I understand that, unless I notify the attorney for Petitioner of any such change in writing, any notices that I might otherwise be entitled to receive with regard to disposition of this proceeding will be forwarded to me at the address indicated below. </div>
<div class = "indent-paragraph"> "Insofar as this suit is concerned, I waive all rights, privileges, and exemptions existing or that may hereafter exist in my favor under the Servicemembers Civil Relief Act, including the appointment of counsel to represent me in this case. </div>
<div class = "indent-paragraph"> "I further state that the following information is correct and that my- </div>
<div class = "indent-paragraph"> Mailing address is:  <?php echo $address?> </div>
<div class = "indent-paragraph"> Telephone number is: <?php echo $phoneNumber ?> </div>
<div class = "indent-paragraph"> E-mail address is:  <?php echo $emailAddress ?> </div>
<div class = "indent-paragraph"> "I further understand that I have a duty to notify the Court if my mailing address changes during this proceeding."
</div>

<!---  SIGNATURES---->
<div class = "text_align_right"> ____________________________ </span></div>
<div class = "text_align_right"> <?php echo $respondent ?> </span></div>

<div class = "indent-paragraph"> SIGNED under oath before me on ______________________________________. This notarial act was an online notarization. </div>

<div class = "text_align_right"> ____________________________ </span></div>
<div class = "text_align_right">Notary Public, State of Texas </span></div>
<div class = "text_align_right">Print name:____________________________ </span></div>
<div class = "text_align_right"> My Commision Expires:__________________</span></div>

<br>
<br>

<div class = "indent-paragraph"> I, the notary public whose signature above, certify that I am not an attorney in this case. </div>
<br>
<br>
<div class = "text_align_right">__________________________________________ </div>
