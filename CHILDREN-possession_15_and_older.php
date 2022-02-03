<meta charset="UTF-8">
<?php

/*
 * Template Name: Possession 15 years and older
 * Version: 1.0.0
 * Description: A print-friendly template displaying the Possession 15 years and older form
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
   line-height: 200%;
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
      <td class="footer_left_half"><span class="bs_bold bs_text_small">POSSESSION 15 YEARS AND OLDER</span></td>
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
$nonPArray = $form_data['field'][3];
//$pArray = $form_data['field'][4];

//strings the entries in array
//$primaryParent = implode(" ",$petitionerArray);
$nonPrimaryParent = implode(" ",$nonPArray);
//amountof children

/* VARIABLES END
 *********************************************************************************************************** */
?>
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!-- PAGE 1 -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

<bookmark content="Original Petition for Divorce" />

<!-- --------------------------------------------------------------------------------------------------------------- -->
<div class="paragraph bs_bold text_underline">Possession Order &#8208; Child Over the Age of 15</div>
<br>

<div class="indent-paragraph"> The Court finds that the parties have agreed and that good cause exists to deviate from the requirements of Chapter 153 of the Texas Family Code due to the child being 15 years of age or older. <? echo "<b>IT IS THEREFORE ORDERED AND DECREED</b>" ?>: 
</div>

<div class="indent-paragraph bs_bold text_underline"> A.   Mutual Agreement or Specified Terms for Possession.  </div>

<div class="indent-paragraph">Both conservators have mutually agreed that possession and access between the child and  <?php echo "$nonPrimaryParent" ?> should be at times agreeable to both conservators and the child. <b> IT IS THEREFORE ORDERED AND DECREED </b> that <?php echo $nonPrimaryParent ?> shall have possession of the child at any and all times mutually agreed to in advance by <?php echo $nonPrimaryParent ?> and the child.  <?php echo $nonPrimaryParent ?> may visit with the child in question at all other reasonable times that are agreeable between the parties and the child in question. <?php echo "$nonPrimaryParent" ?> is ordered to not make plans with the child which would unreasonably interfere with the <?php echo $nonPrimaryParent ?> 's visitation rights set out herein in order that they may exercise their visitation with the <?php echo $nonPrimaryParent ?> if it is mutually agreeable between such child and <?php echo $nonPrimaryParent ?> and such child shall surrender themselves to <?php echo $nonPrimaryParent ?>.
</div>

<div class="indent-paragraph">The Court further finds, given the circumstances of the parties and the age and desires of the child, that more specific orders are unnecessary and unworkable at this time.
</div>

<div class="indent-paragraph">Either party may apply for a more specific possession order in the event such is necessary.
</div>

<div class="indent-paragraph"> This concludes the Possession Order </div>
