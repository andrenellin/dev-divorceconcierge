<meta charset="UTF-8">
<?php

/*
 * Template Name: Possession Schedule Alternating Weekends
 * Version: 1.0.0
 * Description: A print-friendly template displaying the Possesion scehdule for alternating weekends
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
      <td class="footer_left_half"><span class="bs_bold bs_text_small">POSSESSION SCHEDULE ALTERNATING WEEKS</span></td>
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
$motherNameArray = $form_data['field'][6];
$fatherNameArray = $form_data['field'][7];

$motherName = implode(" ",$motherNameArray);
$fatherName = implode(" ",$fatherNameArray);
$date1 = $form_data['field'][2]; // Possession ordeer is effective following friday
$date2 = $form_data['field'][3]; //  Mother's begging 
$date3 = $form_data['field'][4]; // Fathers begining

/* VARIABLES END
 *********************************************************************************************************** */
?>
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!-- PAGE 1 -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

<bookmark content="Original Petition for Divorce" />

<!-- --------------------------------------------------------------------------------------------------------------- -->
<div class="text_align_center bs_bold">NO.__________________________________________</div>
<br>

<table>
  <tr class="paragraph">
    <td class="section_number">1.</td>
    <td class="section-heading"><span class = "text_underline"> Possession Schedule &ndash; Alternating Weeks</span></td>
  </tr>
</table>
<div class="section_content paragraph indent-paragraph"> The Court finds that the following provisions of this Possession Order are in the best interest of the child, and the court finds that the parties have agreed to deviate from the Standard Possession Order contained in the Texas Family Code at sections 153.311 through 153.317.
IT IS ORDERED that each conservator shall comply with all terms and conditions of this Possession Order.  IT IS ORDERED that this Possession Order is effective <?php echo "echo <b> $date1 </b>"?> and applies to all periods of possession occurring on and after the date the Court signs this Possession Order.  IT IS, THEREFORE, ORDERED:  </div>

<!--subsection ---->
<div class="indent-paragraph"><span class = "bs_bold text_underline"> (a)   Definitions: </span></div>

<div class="indent-paragraph-text" > 1. In this Possession Order &ldquo;school&ldquo; means the primary or secondary school in which the child is enrolled or, if the child is not enrolled in a primary or secondary school, the public school district in which the child primarily resides.
</div>

<div class="indent-paragraph-text" > 2. In this Possession Order &ldquo;child&ldquo; includes each child, whether one or more, who is a subject of this suit while that child is under the age of eighteen years and not otherwise emancipated. </span></div>
<!--- end of subsection --->

<!--subsection ---->
<div class="indent-paragraph"><span class = "bs_bold text_underline"> (b) Mutual Agreement or Specified Terms for Possession</span></div>

<div class="indent-paragraph-text" >  IT IS ORDERED that the conservators shall have possession of the child at times mutually agreed to in advance by the parties, and, in the absence of mutual agreement, it is ORDERED that the conservators shall have possession of the child under the specified terms set out in this Possession Order.
</div>

<!--- end of subsection --->

<!--subsection ---->
<div class="indent-paragraph"><span class = "bs_bold text_underline"> (c) Alternating Weeks</span></div>

<!-- ****** need $ variables ---->
<div class="indent-paragraph-text" > 1. <?php echo "<b> $motherName</b>" ?> shall have possession of the child every other week beginning when school is dismissed on Friday, (or 3:00PM if school is not in session) and ending when school is dismissed on the immediately following Friday (or 3:00PM if school is not in session).  <?php echo "<b> $motherName</b>" ?>&#39;s alternating week possession periods shall begin <?php echo " <b> $date2 </b>" ?>.
</div>

<div class="indent-paragraph-text" > 2. <?php echo "<b> $fatherName</b>" ?> shall have possession of the child every other week beginning when school is dismissed on Friday, (or 3:00PM if school is not in session) and ending when school is dismissed on the immediately following Friday (or 3:00PM if school is not in session).  <?php echo "<b> $fatherName</b>" ?>&#39;s alternating week possession periods shall begin <?php echo " <b> $date3 </b>" ?>.
</div>

<div class="indent-paragraph" > IT IS ORDERED that in calculating each party&#39;ss alternating weekly periods of possession, the periods shall continue to count for the purposes of alternating them even if such alternating weekly periods of possession are superseded by Spring Break, or Holiday periods of possession.

</div>

<!--- end of subsection --->

<!--subsection ---->
<div class="indent-paragraph"><span class = "bs_bold text_underline"> (d) Spring Break and Extended Summer Possession</span></div>

<!-- ****** need $ variables ---->
<div class="indent-paragraph" > Notwithstanding the weekend and weekday (non-holiday) periods of possession ORDERED, it is explicitly ORDERED that <?php echo "<b> $motherName</b>" ?> and <?php echo "<b> $fatherName</b>" ?> shall have a superior right of possession of the child as follows:
</div>

<div class="indent-paragraph-text" > 1.	Spring Break in Even-Numbered Years - In even-numbered years, <?php echo "<b> $motherName</b>" ?> shall have possession of the child beginning at the time the child&#39;ss school is regularly dismissed on the day the child is dismissed from school for the school&#39;s spring vacation and ending at 6:00 p.m. on the day before school resumes and after spring break vacation. 
</div>

<div class="indent-paragraph-text" > 2.	Spring Break in Odd-Numbered Years - In odd-numbered years, <?php echo "<b> $fatherName</b>" ?> shall have possession of the child beginning at the time the child&#39;ss school is regularly dismissed on the day the child is dismissed from school for the school&#39;s spring vacation and ending at 6:00 p.m. on the day before school resumes and after spring break vacation.
</div>
<div class="indent-paragraph-text" > 3.	Summer Possession: IT IS ORDERED that each parent shall each have fourteen (14) days of possession in the summer to be exercised in two (2) separate periods of seven (7) consecutive days each, beginning no earlier than the day after the children&#39;s school are dismissed from the summer vacation and ending no later than seven days before school resumes at the end of the summer vacation in that year. <?php echo "<b> $motherName</b>" ?> shall not choose summer possession that interferes with Father&#39;s Day weekend. Each period of possession shall begin and end at 6:00 p.m. on each applicable day, as specified in the written notice.
	IT IS ORDERED that <?php echo "<b> $motherName</b>" ?> shall designate and give notice of her two weeks of summer possession to <?php echo "<b> $fatherName</b>" ?> on or before April 1, in odd-numbered years, and on or before April 15, in even-numbered years.
	IT IS ORDERED that <?php echo "<b> $fatherName</b>" ?> shall designate and give notice of his two weeks of summer possession to <?php echo "<b> $motherName</b>" ?> on or before April 15, in odd-numbered years, and on or before April 1, in even-numbered years.
</div>


<!--- end of subsection --->

<!--subsection ---->
<div class="indent-paragraph"><span class = "bs_bold text_underline"> (e) Holiday Possesion</span></div>

<!-- ****** need $ variables ---->
<div class="indent-paragraph" > Notwithstanding the weekend, Spring Break and Extended Summer periods of possession of the parties, <?php echo "<b> $motherName</b>" ?> and <?php echo "<b> $fatherName</b>" ?> shall have the superior right to possession of the child as follows:
</div>

<div class="indent-paragraph-text" > 1. 	Christmas Holidays in Even-Numbered Years&ndash;In even-numbered years, <?php echo "<b> $fatherName</b>" ?> shall have the right to possession of the child beginning at the time the child&#39;s school is regularly dismissed on the day the child is dismissed from school for the Christmas school vacation and ending at noon on December 28, and <?php echo "<b> $motherName</b>" ?> shall have the right to possession of the child beginning at noon on December 28 and ending at the time school resumes after that Christmas school vacation.
</div>

<div class="indent-paragraph-text" > 2. 	Christmas Holidays in Odd-numbered Years&ndash;In odd-numbered years, <?php echo "<b> $motherName</b>" ?> shall have the right to possession of the child beginning at the time the child&#39;s school is regularly dismissed on the day the child is dismissed from school for the Christmas school vacation and ending at noon on December 28, and <?php echo "<b> $fatherName</b>" ?> shall have the right to possession of the child beginning at noon on December 28 and ending at the time the child&#39;s school resumes after that Christmas school vacation.
</div>

<div class="indent-paragraph-text" > 3. 	Thanksgiving in Odd-numbered Years&ndash;In odd-numbered years, <?php echo "<b> $fatherName</b>" ?> shall have the right to possession of the child beginning at the time the child&#39;s school is regularly dismissed on the day the child is dismissed from school for the Thanksgiving holiday and ending at the time the child&#39;ss school resumes after that Thanksgiving holiday
</div>

<div class="indent-paragraph-text" > 4. 	Thanksgiving in Even-Numbered Years&ndash;In even-numbered years, <?php echo "<b> $motherName</b>" ?> shall have the right to possession of the child beginning at the time the child&#39;s school is regularly dismissed on the day the child is dismissed from school for the Thanksgiving holiday and ending at the time the child&#39;ss school resumes after that Thanksgiving holiday.
</div>

<div class="indent-paragraph-text" > 5. 	Child&#39;s Birthday&ndash;If a conservator is not otherwise entitled under this Possession Order to present possession of the child on the child&#39;s birthday that conservator shall have possession of the child, and the child&#39;ss minor siblings, beginning at 6:00 P.M. and ending at 8:00 P.M. on that day, provided that the conservator picks up the child from the other conservator&#39;ss residence and returns the child to that same place.
</div>

<div class="indent-paragraph-text" > 6. 	Father&#39;s Day Weekend - <?php echo "<b> $fatherName</b>" ?> shall have the right to possession of the child each year, beginning at 3:00 p.m. on the Friday preceding Father&#39;ss Day and ending at 8:00 a.m. on the Monday following Father&#39;ss Day, provided that if <?php echo "<b> $fatherName</b>" ?> is not otherwise entitled under this Possession Order to present possession of the child, he shall pick up the child from <?php echo "<b> $motherName</b>" ?> residence and return the child to that same place.
</div>

<div class="indent-paragraph-text" > 7.	Mother&#39;s Day Weekend - <?php echo "<b> $motherName</b>" ?> shall have the right to possession of the child each year, beginning at the time the child&#39;s school is regularly dismissed on the day the child is dismissed from school for Mother&#39;ss Day weekend and ending at the time the child&#39;ss school resumes after Mother&#39;s Day, provided that if <?php echo "<b> $motherName</b>" ?> is not otherwise entitled under this Possession Order to present possession of the child, she shall pick up the child from <?php echo "<b> $fatherName</b>" ?>&#39;s residence and return the child to that same place.
</div>

<!--- end of subsection --->

<!--subsection ---->
<div class="indent-paragraph"><span class = "bs_bold text_underline"> (f) General Terms and Conditions
</span></div>

<!-- ****** need $ variables ---->
<div class="indent-paragraph" > Except as otherwise explicitly provided in this Possession Order, the terms and conditions of possession of the child are as follows:
</div>

<div class="indent-paragraph-text" > 1. 	Surrender of Child by <?php echo "<b> $motherName</b>" ?>&ndash;<?php echo "<b> $motherName</b>" ?> is ORDERED to surrender the child to <?php echo "<b> $fatherName</b>" ?> at the beginning of each period of <?php echo "<b> $fatherName</b>" ?>&#39;s possession at the school in which the child is enrolled. If school is not in session, <?php echo "<b> $motherName</b>" ?> is ORDERED to surrender the child to <?php echo "<b> $fatherName</b>" ?> at the residence of <?php echo "<b> $motherName</b>" ?>.
</div>

<div class="indent-paragraph-text" > 2.	Surrender of Child by <?php echo "<b> $fatherName</b>" ?>&ndash;<?php echo "<b> $fatherName</b>" ?> is ORDERED to surrender the child to <?php echo "<b> $motherName</b>" ?> at the beginning of each period of <?php echo "<b> $motherName</b>" ?>&#39;s possession at the school in which the child is enrolled. If school is not in session, <?php echo "<b> $fatherName</b>" ?> is ORDERED to surrender the child to <?php echo "<b> $motherName</b>" ?> at the residence of <?php echo "<b> $fatherName</b>" ?>.
</div>

<div class="indent-paragraph-text" > 3. Surrender of Child by <?php echo "<b> $fatherName</b>" ?>&ndash;<?php echo "<b> $fatherName</b>" ?> is ORDERED to surrender the child to <?php echo "<b> $motherName</b>" ?>, if the child is in <?php echo "<b> $fatherName</b>" ?>&#39;s possession or subject to <?php echo "<b> $fatherName</b>" ?>&#39;s control, at the beginning of each period of <?php echo "<b> $motherName</b>" ?>&#39;s exclusive periods of possession, at the place designated in this Possession Order.
</div>

<div class="indent-paragraph-text" > 4. Surrender of Child by <?php echo "<b> $motherName</b>" ?>&ndash;<?php echo "<b> $motherName</b>" ?> is ORDERED to surrender the child to <?php echo "<b> $fatherName</b>" ?>, if the child is in <?php echo "<b> $motherName</b>" ?>&#39;s possession or subject to <?php echo "<b> $motherName</b>" ?>&#39;s control, at the beginning of each period of <?php echo "<b> $fatherName</b>" ?>&#39;s exclusive periods of possession, at the place designated in this Possession Order.
</div>

<div class="indent-paragraph-text" > 5. Personal Effects&ndash;Each conservator is ORDERED to return with the child the personal effects that the child brought at the beginning of the period of possession.
</div>

<div class="indent-paragraph-text" > 6. Designation of Competent Adult&ndash;Each conservator may designate any competent adult to pick up and return the child, as applicable. IT IS ORDERED that a conservator or a designated competent adult be present when’ the child is picked up or returned.
</div>

<div class="indent-paragraph-text" > 7.Inability to Exercise Possession&ndash;Each conservator is ORDERED to give as much advance notice as possible to the person in possession of the child on each occasion that the conservator will be unable to exercise that conservator&#39;s right of possession for any specified period.
</div>

<div class="indent-paragraph-text" > 8. Written Notice–Written notice shall be deemed to have been timely made if received or postmarked before or at the time that notice is due.
</div>

<div class="indent-paragraph-text" > 9. Telephone Access- Each parent shall be allowed reasonable telephone access with the child when the child is in the possession of the other parent.  Reasonable is considered one telephone call per day for a duration not to exceed approximately ten minutes.
</div>

<div class="indent-paragraph-text" > 10. Child Care Costs- Each parent shall be responsible for any child-care costs incurred while the child is in that parent&#39;s possession including but not limited to after school care, summer care and camps.
</div>

<div class="indent-paragraph-text" > 11. Notice to School and other Conservator - If a conservator&#39;s time of possession of the child ends at the time school resumes and for any reason the child is not or will not be returned to school, the conservator shall immediately notify the school and the other conservator that the child will not be or has not been returned to school.
	This concludes the Possession Order.
</div>


<!--- end of subsection --->

