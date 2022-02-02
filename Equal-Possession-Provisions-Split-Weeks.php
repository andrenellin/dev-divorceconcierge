<meta charset="UTF-8">
<?php

/*
 * Template Name: Equal Possession Provision
 * Version: 1.0.0
 * Description: A print-friendly template displaying the Equal Possession provions Alternating weeks
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

.indent-paragraph {
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
      <td class="footer_left_half"><span class="bs_bold bs_text_small">POSSESSION SCHEDULE SPLIT WEEKS</span></td>
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
$motherName1 = $form_data['field'][2];
$fatherName1 = $form_data['field'][3];
$date1 = $form_data['field'][4]; // Possession ordeer is effective following friday
$date2 = $form_data['field'][5]; //  Mother's begging 
$date3 = $form_data['field'][6]; // Fathers begining


//strings the entries in array
$motherName = implode(" ",$motherName1);
$fatherName = implode(" ",$fatherName1);

/* VARIABLES END
 *********************************************************************************************************** */
?>
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!-- PAGE 1 -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

<bookmark content="Equal Possesion Split Weeks" />

<!-- --------------------------------------------------------------------------------------------------------------- -->
<div class="text_align_center bs_bold">NO.__________________________________________</div>
<br>

<table>
  <tr class="paragraph">
    <td class="section_number">1.</td>
    <td class="section-heading"><span class = "text_underline"> Possession Schedule &ndash; Equalised</span></td>
  </tr>
</table>

<div class="section_content paragraph indent-paragraph"> The Court finds that the following provisions of this Possession Order are in the best interest of the child, and the court finds that the parties have agreed to deviate from the Standard Possession Order contained in the Texas Family Code at sections 153.311 through 153.317. </div>
<div class="section_content paragraph indent-paragraph">IT IS ORDERED that each conservator shall comply with all terms and conditions of this Possession Order.  IT IS ORDERED that this Possession Order is effective <?php echo " <b> $date1 </b>"?> and applies to all periods of possession occurring on and after the date the Court signs this Possession Order.  IT IS, THEREFORE, ORDERED:  </div>

<!--subsection A ---->

<div class="indent-paragraph"> (a) Definitions:</div>

<div class="indent-paragraph" > 1. In this Possession Order &ldquo;school&ldquo; means the primary or secondary school in which the child is enrolled or, if the child is not enrolled in a primary or secondary school, the public school district in which the child primarily resides.
</div>

<div class="indent-paragraph" > 2. In this Possession Order &ldquo;child&ldquo; includes each child, whether one or more, who is a subject of this suit while that child is under the age of eighteen years and not otherwise emancipated. </span></div>
<!--- end of subsection --->

<!--subsection B ---->
<div class="indent-paragraph"> (b) Mutual Agreement or Specified Terms for Possession</span></div>

<div class="indent-paragraph" >  IT IS ORDERED that the conservators shall have possession of the child at times mutually agreed to in advance by the parties, and, in the absence of mutual agreement, it is ORDERED that the conservators shall have possession of the child under the specified terms set out in this Possession Order.
</div>

<!---- section C ---->
<div class="indent-paragraph"> (c) Weekend and Weekday Possession</span></div>
<div class="indent-paragraph" > <?php echo $motherName ?> shall have the right to possession of the child as follows: </div>

    <div class="indent-paragraph" >1.	Monday and Tuesday- On Monday and Tuesday every week beginning at 8:00 a.m. on Monday morning and ending at the time the child&#39;s school resumes on Wednesday morning or 8:00 a.m. when school is not in session.
</div>
    <div class="indent-paragraph" > 2.	Weekends- Every other Friday, Saturday and Sunday, beginning at the time school resumes on Friday morning and ending at the time the child&#39;s school resumes on Monday morning.  Beginning Friday, <?php echo $date2 ?> and every other weekend thereafter.  If school is not in session beginning at 8:00 a.m. on Friday and ending at 8:00 a.m. the following Monday.
</div>
    <div class="indent-paragraph" > <?php echo $fatherName ?> shall have the right to possession of the child as follows:
</div>
    <div class="indent-paragraph" > 1.	Wednesday and Thursday- On Wednesday and Thursday of each week beginning at the time school resumes on Wednesday morning or at 8:00 a.m. when school is not in session and ending at the time school resumes on Friday morning or 8:00 a.m. when school is not in session.
</div>
    <div class="indent-paragraph" > 2.	Weekends- Every other Friday, Saturday and Sunday, beginning at the time school resumes on Friday morning and ending at the time the child&#39;s school resumes on Monday morning.  Beginning Friday,  <?php echo $date3 ?>  and every other weekend thereafter.  If school is not in session beginning at 8:00 a.m. on Friday and ending at 8:00 a.m. the following Monday.
</div>
    <div class="indent-paragraph" > IT IS ORDERED that in calculating the weekend periods of possession, the periods shall continue to count for the purposes of alternating them even if they are superseded by Spring Break, Extended Summer, or Holiday periods of possession.  This possession schedule shall continue during the summer months save and except for the provisions below regarding extended summer possession by each parent:
</div>
<!--- end of subsection --->

<!---- section D ---->
<div class="indent-paragraph">(d)	Spring Break and Extended Summer Possession for <?php echo $motherName ?></div>

    <div class="indent-paragraph"> Notwithstanding the weekend and weekday (non-holiday) periods of possession ORDERED for <?php echo $fatherName ?>, it is explicitly ORDERED that <?php echo $motherName ?> shall have a superior right of possession of the child as follows:
</div>
<div class="indent-paragraph"> 1.	Spring Break in Even-Numbered Years&#8208;In even-numbered years, beginning at the time the child&#39;s school is regularly dismissed on the day the child is dismissed from school for the school&#39;s spring vacation and ending at the time school resumes after that vacation.
</div>
    <div class="indent-paragraph"> 2.	Extended Summer Possession by <?php echo $motherName ?> 
First Choice in Odd-Numbered Years With Written Notice by April 1st.  If <?php echo $motherName ?> gives <?php echo $fatherName ?> written notice by April 1st of an odd-numbered year specifying an extended period of summer possession for that year, <?php echo $motherName ?> shall have possession of the child for fourteen consecutive days specified in the written notice beginning no earlier than the day after the child&#39;s school is dismissed for the summer vacation and ending no later than seven days before school resumes at the end of the summer vacation in that year.  These periods of possession shall begin and end at 6:00 p.m.
</div>
    <div class="indent-paragraph"> Without Written Notice by April 1 in Odd-Numbered Years&#8208; If <?php echo $motherName ?> does not give <?php echo $fatherName ?> written notice by April 1 of an odd-numbered year specifying an extended period of summer possession for that year, <?php echo $motherName ?> shall have possession of the child beginning Sunday of the first full week of July for fourteen days beginning at 6:00 p.m. and ending at 6:00 p.m. on Sunday. 
</div>
    <div class="indent-paragraph"> Second Choice in Even-Numbered Years With Written Notice by April 15th- If <?php echo $motherName ?> gives <?php echo $fatherName ?> written notice by April 15 of an even-numbered year specifying an extended period of summer possession for that year, <?php echo $motherName ?> shall have possession of the child for fourteen days as specified in the written notice beginning no earlier than the day after the child&#39;s school is dismissed for the summer vacation and ending no later than seven days before school resumes at the end of the summer vacation in that year, provided that the period or periods of extended summer possession do not interfere with <?php echo $fatherName ?>&#39;s period of Extended Summer Possession in that year or Father&#39;s Day weekend.  These periods of possession shall begin and end at 6:00 p.m.
Without Written Notice by April 15 in Even-Numbered Years&#8208;If <?php echo $motherName ?> does not give <?php echo $fatherName ?> written notice by April 15 of an even-numbered year specifying an extended period or periods of summer possession for that year, <?php echo $motherName ?> shall have possession of the child for fourteen days beginning at 6:00 p.m. on the Sunday of the third full week of July and ending 14 days later at 6:00 P.M. 
</div>
<!--- end of subsection ---->

<!---- section E  ---->
<div class="indent-paragraph">(e)	Spring Break and Extended Summer Possession for <?php echo $fatherName ?></div>

<div class="indent-paragraph"> Notwithstanding the weekend and weekday (non-holiday) periods of possession ORDERED for <?php echo $motherName ?>, it is explicitly ORDERED that <?php echo $fatherName ?> shall have a superior right of possession of the child as follows:
</div>
    <div class="indent-paragraph"> 1.	Spring Break in Odd-Numbered Years&#8208;In odd-numbered years, beginning at the time the child&#39;s school is regularly dismissed on the day the child is dismissed from school for the school&#39;s spring vacation and ending at the time school resumes after that vacation.
</div>
    <div class="indent-paragraph"> 2.	Extended Summer Possession by <?php echo $fatherName ?>&#8208; 
First Choice in Even-Numbered Years With Written Notice by April 1st.  If <?php echo $fatherName ?> gives <?php echo $motherName ?> written notice by April 1st of an even-numbered year specifying an extended period of summer possession for that year, <?php echo $fatherName ?> shall have possession of the child for fourteen consecutive days specified in the written notice beginning no earlier than the day after the child&#39;s school is dismissed for the summer vacation and ending no later than seven days before school resumes at the end of the summer vacation in that year.  These periods of possession shall begin and end at 6:00 p.m.
</div>
    <div class="indent-paragraph"> Without Written Notice by April 1 in Even-Numbered Years&#8208;If <?php echo $fatherName ?> does not give <?php echo $motherName ?> written notice by April 1 of an Even-Numbered year specifying an extended period of summer possession for that year, <?php echo $fatherName ?> shall have possession of the child beginning the Sunday of the first full week of July for fourteen days beginning at 6:00 p.m. and ending at 6:00 p.m. on Sunday.
Second Choice in Odd-Numbered Years With Written Notice by April 15th. - If <?php echo $fatherName ?> gives <?php echo $motherName ?> written notice by April 15 of an odd-numbered year specifying an extended period of summer possession for that year, <?php echo $fatherName ?> shall have possession of the child for fourteen days as specified in the written notice beginning no earlier than the day after the child&#39;s school is dismissed for the summer vacation and ending no later than seven days before school resumes at the end of the summer vacation in that year, provided that the period or periods of extended summer possession do not interfere with <?php echo $motherName ?>&#39;s period of Extended Summer Possession in that year.  These periods of possession shall begin and end at 6:00 p.m.
</div>
    <div class="indent-paragraph"> Without Written Notice by April 15 in Odd-Numbered Years&#8208;If <?php echo $fatherName ?> does not give <?php echo $motherName ?> written notice by April 15 of an even-numbered year specifying an extended period or periods of summer possession for that year, <?php echo $fatherName ?> shall have possession of the child for fourteen days beginning at 6:00 p.m. on the Sunday of the third full week of July and ending 14 days later at 6:00 P.M. on Sunday. 
</div>

<!---- section F ---->
<div class="indent-paragraph"> (f) Holiday Possession</div>

<div class="indent-paragraph"> Notwithstanding the weekend, weekday, Spring Break and Extended Summer periods of possession of the parties, <?php echo $motherName ?> and <?php echo $fatherName ?> shall have the right to possession of the child as follows:
</div>
    <div class="indent-paragraph"> 1.	Christmas Holidays in Even-Numbered Years&#8208;In even-numbered years, <?php echo $motherName ?> shall have the right to possession of the child beginning at the time the child&#39;s school is regularly dismissed on the day the child is dismissed from school for the Christmas school vacation and ending at noon on December 28, and <?php echo $fatherName ?> shall have the right to possession of the child beginning at noon on December 28 and ending at the time school resumes after that Christmas school vacation.
</div>
    <div class = "indent-paragraph"> 2.	Christmas Holidays in Odd-numbered Years&#8208;In odd-numbered years, <?php echo $fatherName ?> shall have the right to possession of the child beginning at the time the child&#39;s school is regularly dismissed on the day the child is dismissed from school for the Christmas school vacation and ending at noon on December 28, and <?php echo $motherName ?> shall have the right to possession of the child beginning at noon on December 28 and ending at the time the child&#39;s school resumes after that Christmas school vacation. 
</div>
    <div class = "indent-paragraph">3.	Thanksgiving in Odd-numbered Years&#8208;In odd-numbered years, <?php echo $motherName ?> shall have the right to possession of the child beginning at the time the child&#39;s school is regularly dismissed on the day the child is dismissed from school for the Thanksgiving holiday and ending at the time the child&#39;s school resumes after that Thanksgiving holiday.
</div>
    <div class = "indent-paragraph">4.	Thanksgiving in Even-Numbered Years&#8208;In even-numbered years, <?php echo $fatherName ?> shall have the right to possession of the child beginning at the time the child&#39;s school is regularly dismissed on the day the child is dismissed from school for the Thanksgiving holiday and ending at the time the child&#39;s school resumes after that Thanksgiving holiday.
</div>
    <div class = "indent-paragraph">5.	Child&#39;s Birthday&#8208;If a conservator is not otherwise entitled under this Possession Order to present possession of the child on the child&#39;s birthday, that conservator shall have possession of the child beginning at 6:00 p.m. and ending at 8:00 p.m. on that day, provided that conservator picks up the child from the other conservator&#39;s residence and returns the child to that same place.
</div>
    <div class = "indent-paragraph">6.	Father&#39;s Day&#8208;<?php echo $fatherName ?> shall have the right to possession of the child each year, beginning at 8:00 a.m. on the Friday preceding Father&#39;s Day and ending at 8:00 p.m. on Father&#39;s Day, provided that if <?php echo $fatherName ?> is not otherwise entitled under this Possession Order to present possession of the child, he shall pick up the child from the other conservator&#39;s residence and return the child to that same place.
</div>
    <div class = "indent-paragraph">7. Mother&#39;s Day&#8208;<?php echo $motherName ?> shall have the right to possession of the child each year, beginning at 8:00 a.m. on the Friday preceding Mother&#39;s Day and ending at 8:00 p.m. on Mother&#39;s Day, provided that if <?php echo $motherName ?> is not otherwise entitled under this Possession Order to present possession of the child, she shall pick up the child from the other conservator&#39;s residence and return the child to that same place.
</div>

<!--- section G ---->
<div class="indent-paragraph"> (g) General Conditions</div>

    <div class = "indent-paragraph">1.	Surrender of Child by <?php echo $motherName ?> - If a period of possession by <?php echo $fatherName ?> begins at the time the child&#39;s school resumes or is dismissed, <?php echo $motherName ?> is ORDERED to surrender the child to <?php echo $fatherName ?> at the beginning of each such period of possession at the school in which the child is enrolled.  
	If the child is not in school <?php echo $fatherName ?> shall pick up the child at the residence of <?php echo $motherName ?> at 8:00 a.m., and <?php echo $motherName ?> is ORDERED to surrender the child to <?php echo $fatherName ?> at the residence of <?php echo $motherName ?> at 8:00 a.m. under these circumstances.
</div>
    <div class = "indent-paragraph">2.	Surrender of Child by <?php echo $fatherName ?>&#8208;<?php echo $fatherName ?> is ORDERED to surrender the child to <?php echo $motherName ?> at the beginning of each period of <?php echo $motherName ?>&#39;s possession at the residence of <?php echo $fatherName ?>.  
</div>
    <div class = "indent-paragraph">If a period of possession by <?php echo $motherName ?> begins at the time the child&#39;s school resumes or is regularly dismissed, <?php echo $fatherName ?> is ORDERED to surrender the child to <?php echo $motherName ?> at the beginning of each such period of possession at the school in which the child is enrolled.
</div>
    <div class = "indent-paragraph">If the child is not in school, <?php echo $motherName ?> shall pick up the child at the residence of <?php echo $fatherName ?> at 8:00 a.m., and <?php echo $fatherName ?> is ORDERED to surrender the child to <?php echo $motherName ?> at the residence of <?php echo $fatherName ?> at 8:00 a.m. under these circumstances.
</div>
    <div class = "indent-paragraph">3.	Personal Effects&#8208;Each Conservator is ORDERED to ensure that the child has an adequate supply of clothes and school uniforms at their own residence.  Each Conservator is ORDERED to return with the child the personal effects that the child brought at the beginning of the period of possession that belong at the other parent&#39;s residence.
</div>
    <div class = "indent-paragraph">4.	Designation of Competent Adult&#8208;Each conservator may designate any competent adult to pick up and return the child, as applicable. IT IS ORDERED that a conservator or a designated competent adult be present when the child is picked up or returned.
</div>    
    <div class = "indent-paragraph">5.	Inability to Exercise Possession&#8208;Each conservator is ORDERED to give as much advance notice as possible to the person in possession of the child on each occasion that the conservator will be unable to exercise that conservator&#39;s right of possession for any specified period.
</div>
    <div class = "indent-paragraph">6.	Inability to Exercise Possession&#8208;Each conservator is ORDERED to give as much advance notice as possible to the person in possession of the child on each occasion that the conservator will be unable to exercise that conservator&#39;s right of possession for any specified period.
</div>
    <div class = "indent-paragraph">8.	Written Notice&#8208;Written notice shall be deemed to have been timely made if received or postmarked before or at the time that notice is due.
</div>
    <div class = "indent-paragraph">9.	Telephone Access- Each parent shall be allowed reasonable telephone access with the child when the child is in the possession of the other parent.  Reasonable is considered one telephone call per day for a duration not to exceed approximately ten minutes.
</div>
    <div class = "indent-paragraph">10.	Child Care Costs- Each parent shall be responsible for any child care costs incurred while the child is in that parent&#39;s possession including but not limited to after school care, summer care and camps.
</div>
    <div class = "indent-paragraph">11.	Notice to School and other Conservator - If a conservator&#39;s time of possession of the child ends at the time school resumes and for any reason the child is not or will not be returned to school, the conservator shall immediately notify the school and the other conservator that the child will not be or has not been returned to school.
</div>
<div class = "paragraph"> This concludes the Possession Order </div>

<table>
  <tr class="paragraph">
    <td class="section_number">2.</td>
    <td class="section-heading"><span class = "text_underline">Duration</span></td>
  </tr>
</table>
<div class = "indent-paragraph">The periods of possession ordered above apply to the child the subject of this suit while that child is under the age of eighteen years and not otherwise emancipated.
</div>