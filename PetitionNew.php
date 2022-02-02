<?php

/*
 * Template Name: Petition for Divorce Agreement (No Children) New
 * Version: 1.0.0
 * Description: A print-friendly template displaying the Petition for Divorce
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

@page standing-order {
  size: 8.5in 11in;
  margin: 0mm 0mm 0mm 0mm;
  header: ;
  line-height: 1.3;
  footer: MyFooterStandingOrder;
  margin-footer: 0mm;
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

.bs_text_small {
  font-size: 10pt;
}

.image-standing_order {
  height: 255mm;
}

.indent-paragraph {
  text-indent: 20.5mm;
}

.paragraph {
  line-height: 2;
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

<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!-- HEADER / FOOTER -->
<htmlpagefooter name="MyCustomFooter">
  <table class="footer">
    <tr class="paragraph">
      <td class="footer_left_half"><span class="bs_bold bs_text_small">ORIGINAL PETITION FOR DIVORCE</span></td>
      <td class="footer_right_half text_align_right"><span class="bs_bold bs_text_small">PAGE {PAGENO}</span></td>
    </tr>
  </table>
</htmlpagefooter>
<htmlpagefooter name="MyFooterStandingOrder">
</htmlpagefooter>
<!-- HEADR FOOTER END -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<?php
/* *********************************************************************
 * VARIABLES
 ******************************************************************** */
// $client_user_id = $form_data['misc']['created_by'];

// IN THE MATTER OF / PARTIES
$petitioner = $form_data['field'][96]; // [3.PETITIONER: Full Name]
$petitioner_uppercase = strtoupper($petitioner);
$respondent = $form_data['field'][114]; // [4.RESPONDENT: Full Name]
$respondent_uppercase = strtoupper($respondent);

$county = strtoupper($form_data['field'][6]); // [6.County]

// 1 MARITAL ESTATE VALUE
$marital_estate_value_greater_than_250k = $form_data['field'][10]; // [10.Marital Estate Value]

    $discovery_level_paragraph = "Discovery in this case is intended to be conducted under level 2 of rule 190 of the Texas Rules of Civil Procedure. ";

// 2 PARTIES

$petitioner_ssn = strtoupper($form_data['field'][13]); // [13.PETITIONER: SSN]
$petitioner_drivers_license_number = strtoupper($form_data['field'][14]); // [14.PETITIONER: Drivers License Number]

// 3 DOMICILE
$residency_requirement_party = $form_data['field'][41]; // [41.Who meets residency requirement?]

// 6 DATE OF MARRIAGE & SEPARATION
$date_marriage_raw = $form_data['field'][20]; // [20.Date of marriage]
$date_marriage_string = strtotime($date_marriage_raw);
$date_marriage = date('F j, Y', $date_marriage_string);

$residence_stay_together = $form_data['field'][21]; // [21.Still live together]

if ($residence_stay_together == 'No') {
    $date_of_separation_raw = $form_data['field'][24]; // [24.Date of separation]
    $date_of_separation_string = strtotime($date_of_separation_raw);
    $date_of_separation = date('F j, Y', $date_of_separation_string);
    $date_of_separation_content = ' ' . $date_of_separation;
} else {
    $date_of_separation_content = 'the date of the filing of this Original Petition for Divorce';
}

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


// 10 NAME CHANGE

$name_change_requested = $form_data['field'][27]; // [27.Does either party request a name change?]
if ($name_change_requested == 'Yes') {
    $name_change_who = strtoupper($form_data['field'][28]); // [28.Who Requests a Name Change:]

    if ($name_change_who == $petitioner) {
        $name_change_role = 'Petitioner';
    } else {
        $name_change_role = 'Respondent';
    }
    $name_change_to = strtoupper($form_data['field'][29]); // [29.Name Change To:]
}

// MEMBERSHIP TYPE FOR SIGNATURE
$membership_type = $form_data['field'][31]; // [31.Plan] => DYW

// SIGNATURE DETAILS FOR DYW (PRO SE )
$petitioner_street_1 = $form_data['field'][38]['street']; // [38.Petitioner Address][street]
$petitioner_street_2 = $form_data['field'][38]['street2']; // [38.Petitioner Address][street2]
$petitioner_city = $form_data['field'][38]['city']; // [38.Petitioner Address][city]
$petitioner_state = $form_data['field'][38]['state']; // [38.Petitioner Address][state]
$petitioner_zip = $form_data['field'][38]['zip']; // [38.Petitioner Address][zip]
$petitioner_phone = $form_data['field'][39]; // [39.Petitioner Phone]
$petitioner_email = $form_data['field'][40]; // [40.Petitioner Email]

/* ***********************************************************************************************************

 * VARIABLES END
 *********************************************************************************************************** */
?>
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!-- PAGE 1 -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

<bookmark content="Original Petition for Divorce" />

<!-- --------------------------------------------------------------------------------------------------------------- -->
<div class="text_align_center bs_bold">NO.__________________________________________</div>
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
    <td class="column_third_half"><span class="bs_bold"><?php echo $petitioner_uppercase; ?></span></td>
    <td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>
    <td class="column_right_third"><span class="bs_bold"> _______ JUDICIAL DISTRICT</span></td>
  </tr>
  <tr class="paragraph">
    <td class="column_third_half"><span class="bs_bold">AND</span></td>
    <td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>
    <td class="column_right_third"><span class="bs_bold">&nbsp;</span></td>
  </tr>
  <tr class="paragraph">
    <td class="column_third_half"><span class="bs_bold"><?php echo $respondent_uppercase; ?></span></td>
    <td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>
    
    <?php if($count_children_entries === 0){

    echo    ' <td class="column_right_third"><span class="bs_bold">' . $county .' COUNTY, TEXAS</span></td>';

    }else if($count_children_entries > 0){

      echo  '<td class="column_right_third"><span class="bs_bold">&nbsp;</span></td>';


    } ?>
    
  </tr>



    <?php if($count_children_entries > 1){
    echo '<tr class="paragraph">
    <td class="column_third_half"><span class="bs_bold">AND IN THE INTEREST OF</span></td>
    <td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>
    <td class="column_right_third"><span class="bs_bold"></span></td>
  </tr>';
  } ?>


  
  <?php if($count_children_entries > 1)
    {
    for ($i = 0; $i < $count_children_entries -1; $i++) {

    echo'<tr class="paragraph"> 
         <td class="column_third_half"><span class="bs_bold">'  . strtoupper($children[$i]['full_name']) . ", <br>" . 
   
    
    '</td>' . '<td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>
    </tr>';
    }

    $lastChild = $count_children_entries -1;
    echo'<tr class="paragraph"> 
         <td class="column_third_half"><span class="bs_bold"> AND '  . strtoupper($children[$lastChild]['full_name']) . ", CHILDREN" . 
   
    
    '</td>' . '<td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>
    </tr>';
    
     

    
    
    
     echo "CHILDREN " .
   ' <td class="column_right_third"><span class="bs_bold"> ' . $county . ' COUNTY, TEXAS</span></td>';
    }else if($count_children_entries <= 1){for ($i = 0; $i < $count_children_entries; $i++) {
    echo '<tr class="paragraph"> 
          <td class="column_third_half"><span class="bs_bold">' . strtoupper($children[$i]['full_name'])
    . ', A CHILD </td>
    <td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>
    <td class="column_right_third"><span class="bs_bold">' . $county .' COUNTY, TEXAS</span></td>
    </tr>';
    
    } 
    }
    else if ($count_children_entries === 2){

    echo '<tr class="paragraph"> 
          <td class="column_third_half"><span class="bs_bold">' . strtoupper($children[0]['full_name']) . ", <br> AND " . strtoupper($children[1]['full_name']) 
    . ', CHILDREN</td>
    <td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>
    <td class="column_right_third"><span class="bs_bold">' . $county .' COUNTY, TEXAS</span></td>
    </tr>';


    }
    
    ?> 
 
</table>
<br>
<div class="text_align_center bs_bold paragraph">ORIGINAL PETITION FOR DIVORCE</div>
<br>

<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- 1 DISCOVERY -->
<table>
  <tr class="paragraph">
    <td class="section_number"><span class="bs_italic bs_bold">1. </span></td>
    <td class="section-heading"><span class="bs_italic bs_bold">Discovery Level</span></td>
  </tr>
</table>

<div class="section_content paragraph indent-paragraph"><?php echo $discovery_level_paragraph ?></div>

<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- 2 PARTIES -->
<table>
  <tr class="paragraph">
    <td class="section_number"><span class="bs_italic bs_bold">2. </span></td>
    <td class="section-heading"><span class="bs_italic bs_bold">Parties</span></td>
  </tr>
</table>

<div class="section_content paragraph indent-paragraph">This suit is brought by <?php echo $petitioner_uppercase ?>,
  Petitioner.
  The last three numbers of Petitioner's driver's license number are <?php echo $petitioner_drivers_license_number; ?>.
  The last three numbers of Petitioner's Social Security number are <?php echo $petitioner_ssn; ?>.
  <!-- php end -->
</div>
<div class="section_content paragraph indent-paragraph"><?php echo $respondent_uppercase ?> is Respondent.</div>


<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- 3 DOMICILE -->
<table>
  <tr class="paragraph">
    <td class="section_number"><span class="bs_italic bs_bold">3. </span></td>
    <td class="section-heading"><span class="bs_italic bs_bold">Domicile</span></td>
  </tr>
</table>
<div class="section_content paragraph indent-paragraph"><?php echo $residency_requirement_party ?> has been a
  domiciliary of Texas for the preceding six-month period and a resident of this county for the preceding
  ninety-day period.</div>


<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- 4 SERVICE -->
<table>
  <tr class="paragraph">
    <td class="section_number"><span class="bs_italic bs_bold">4. </span></td>
    <td class="section-heading"><span class="bs_italic bs_bold">Service</span></td>
  </tr>
</table>
<div class="section_content paragraph indent-paragraph">No service on Respondent is necessary at this time.</div>

<!-- --------------------------------------------------------------------------------------------------------------- -->

<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!-- PAGE 2 -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->



<!-- 5 PROTECTIVE ORDER STATEMENT -->
<table>
  <tr class="paragraph">
    <td class="section_number"><span class="bs_italic bs_bold">5. </span></td>
    <td class="section-heading"><span class="bs_italic bs_bold">Protective Order Statement</span></td>
  </tr>
</table>
<div class="section_content paragraph indent-paragraph">No protective order under title 4 of the Texas Family Code,
  protective
  order under subchapter A of Chapter 7B of the Texas Code of Criminal Procedure, or order for emergency protection
  under Article 17.292 of the Texas Code of Criminal Procedure is in effect in regard to a party to this suit and no
  application for any such order is pending.</div>



<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- 6 DATES OF MARRIAGE & SEPARATION -->
<table>
  <tr class="paragraph">
    <td class="section_number"><span class="bs_italic bs_bold">6. </span></td>
    <td class="section-heading"><span class="bs_italic bs_bold">Dates of Marriage and Separation</span></td>
  </tr>
</table>
<div class="section_content paragraph indent-paragraph">The parties were married on or about
  <?php echo $date_marriage; ?> and ceased to live together as spouses on <?php echo $date_of_separation_content ?>.
</div>

<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- 7 GROUNDS FOR DIVORCE -->
<table>
  <tr class="paragraph">
    <td class="section_number"><span class="bs_italic bs_bold">7. </span></td>
    <td class="section-heading"><span class="bs_italic bs_bold">Grounds for Divorce</span></td>
  </tr>
</table>
<div class="section_content paragraph indent-paragraph">The marriage has become insupportable because of discord or
  conflict of personalities between Petitioner and Respondent that destroys the legitimate ends of the marriage
  relationship and
  prevents any reasonable expectation of reconciliation.
</div>

<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- 8 CHILDREN OF MARRIAGE -->
<table>
  <tr class="paragraph">
    <td class="section_number"><span class="bs_italic bs_bold">8. </span></td>
    <td class="section-heading"><span class="bs_italic bs_bold">Children of Marriage</span></td>
  </tr>
</table>

<div class="section_content paragraph indent-paragraph">There is no child born or adopted of this marriage, and none is
  expected.
</div>

<!-- --------------------------------------------------------------------------------------------------------------- -->

<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!-- PAGE 3 -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->



<!-- 9 DIVISION OF COMMUNITY OF PROPERTY -->
<table>
  <tr class="paragraph">
    <td class="section_number"><span class="bs_italic bs_bold">9. </span></td>
    <td class="section-heading"><span class="bs_italic bs_bold">Division of Community Property</span></td>
  </tr>
</table>
<div class="section_content paragraph indent-paragraph">Petitioner believes Petitioner and Respondent will enter into an
  agreement
  for the division of their estate. If such an agreement is made, Petitioner requests the Court to approve the
  agreement and divide their estate in a manner consistent with the agreement. If such an agreement is not made,
  Petitioner requests the Court to divide their estate in a manner that the Court deems just and right, as provided by
  law.
</div>

<!-- --------------------------------------------------------------------------------------------------------------- -->

<!-- 10 REQUEST FOR NAME CHANGE IF YES -->
<!-- php start -->
<?php if ($name_change_requested == "Yes") { ?>
<!-- php pause -->
<table>
  <tr class="paragraph">
    <td class="section_number"><span class="bs_italic bs_bold">10. </span></td>
    <td class="section-heading"><span class="bs_italic bs_bold">Request for Change of Name</span></td>
  </tr>
</table>
<div class="section_content paragraph indent-paragraph"><?php echo $name_change_role ?> requests a change of name to
  <?php echo $name_change_to ?></div>

<!-- php resume -->
<?php } ?>
<!-- php end -->

<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- 10 or 11 PRAYER -->
<!-- php start -->
<?php if ($name_change_requested == "No") { ?>
<!--php pause  -->
<table>
  <tr class="paragraph">
    <td class="section_number"><span class="bs_italic bs_bold">10. </span></td>
    <td class="section-heading"><span class="bs_italic bs_bold">Prayer</span></td>
  </tr>
</table>

<!-- php resume -->
<?php } ?>
<!-- php end -->


<!-- php start -->
<?php if ($name_change_requested == "Yes") { ?>
<!--php pause  -->

<table>
  <tr class="paragraph">
    <td class="section_number"><span class="bs_italic bs_bold">11. </span></td>
    <td class="section-heading"><span class="bs_italic bs_bold">Prayer</span></td>
  </tr>
</table>
<!-- php resume -->
<?php } ?>
<!-- php end -->

<div class="section_content paragraph indent-paragraph">Petitioner prays that citation and notice issue as required by
  law and
  that the Court grant a divorce and all other relief requested in this petition.</div>
<?php if ($name_change_requested == "Yes") { ?>
<div class="section_content paragraph indent-paragraph">Petitioner prays that Petitioner's name be changed as requested
  above.
</div>
<?php } ?>

<!-- --------------------------------------------------------------------------------------------------------------- -->

<!-- SIGNATURE IF MEMBERSHIP is DIVORCE YOUR WAY FAMILY -->
<?php if ($membership_type == 'DYW') {
    ?>
<div class="height_max"></div>
<table class="SIGNATURES">
  <tr class="paragraph">
    <td class="column_third_half">&nbsp;</td>
    <td class="column_right_third">Respectfully submitted,</td>
  </tr>
  <tr class="paragraph">
    <td class="column_third_half">&nbsp;</td>
    <td class="column_right_third">&nbsp;</td>
  </tr>
  <tr class="paragraph">
    <td class="column_third_half">&nbsp;</td>
    <td class="column_right_third"><?php echo $petitioner; ?></td>
  </tr>
  <tr class="paragraph">
    <td class="column_third_half">&nbsp;</td>
    <td class="column_right_third"><?php echo $petitioner_street_1; ?></td>
  </tr>

  <?php if ($petitioner_street_2 != '') { ?>
  <tr class="paragraph">
    <td class="column_third_half">&nbsp;</td>
    <td class="column_right_third"><?php echo $petitioner_street_2; ?></td>
  </tr>

  <?php } ?>

  <tr class="paragraph">
    <td class="column_third_half">&nbsp;</td>
    <td class="column_right_third"><?php echo $petitioner_city; ?>, Texas, <?php echo $petitioner_zip; ?></td>
  </tr>
  <tr class="paragraph">
    <td class="column_third_half">&nbsp;</td>
    <td class="column_right_third"><?php echo $petitioner_phone; ?></td>
  </tr>
  <tr class="paragraph">
    <td class="column_third_half">&nbsp;</td>
    <td class="column_right_third"><?php echo $petitioner_email; ?></td>
  </tr>
  <tr class="paragraph">
    <td class="column_third_half">&nbsp;</td>
    <td class="column_right_third">&nbsp;</td>
  </tr>
  <tr class="paragraph">
    <td class="column_third_half">&nbsp;</td>
    <td class="column_right_third">By: <span class="text_underline bs_italic"> /s/ <?php echo $petitioner; ?></span>
    </td>
  </tr>
  <tr class="paragraph">
    <td class="column_third_half">&nbsp;</td>
    <td class="column_right_third">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $petitioner; ?></td>
  </tr>
  <tr class="paragraph">
    <td class="column_third_half">&nbsp;</td>
    <td class="column_right_third">&nbsp;&nbsp;&nbsp;&nbsp;PRO SE</td>
  </tr>
</table>

<?php } ?>

<!-- SIGNATURE IF MEMBERSHIP is DIVORCE BY US FAMILY -->

<?php if ($membership_type == 'DBU') {
    ?>
    <pagebreak />
  <div class="height_max"></div>
  <table class="SIGNATURES">
    <tr class="paragraph">
      <td class="column_third_half">&nbsp;</td>
      <td class="column_right_third">Respectfully submitted,</td>
    </tr>
    <tr class="paragraph">
      <td class="column_third_half">&nbsp;</td>
      <td class="column_right_third">&nbsp;</td>
    </tr>
    <tr class="paragraph">
      <td class="column_third_half">&nbsp;</td>
      <td class="column_right_third">DIVORCE CONCIERGE PLLC</td>
    </tr>
    <tr class="paragraph">
      <td class="column_third_half">&nbsp;</td>
      <td class="column_right_third">8951 Collin-McKinney Parkway Suite 1403</td>
    </tr>
    <tr class="paragraph">
      <td class="column_third_half">&nbsp;</td>
      <td class="column_right_third">McKinney, Texas, 75070</td>
    </tr>
    <tr class="paragraph">
      <td class="column_third_half">&nbsp;</td>
      <td class="column_right_third">Phone: 972-562-9890</td>
    </tr>
    <tr class="paragraph">
      <td class="column_third_half">&nbsp;</td>
      <td class="column_right_third">Fax: 972-377-8392</td>
    </tr>
    <tr class="paragraph">
      <td class="column_third_half">&nbsp;</td>
      <td class="column_right_third">Email: service@ramagelawfirm.com</td>
    </tr>
    <tr class="paragraph">
      <td class="column_third_half">&nbsp;</td>
      <td class="column_right_third">&nbsp;</td>
    </tr>
    <tr class="paragraph">
      <td class="column_third_half">&nbsp;</td>
      <td class="column_right_third">By: ________________________________</td>
    </tr>
    <tr class="paragraph">
      <td class="column_third_half">&nbsp;</td>
      <td class="column_right_third">SHARON M. RAMAGE</td>
    </tr>
    <tr class="paragraph">
      <td class="column_third_half">&nbsp;</td>
      <td class="column_right_third">SBOT: 13740100</td>
    </tr>
    <tr class="paragraph">
      <td class="column_third_half">&nbsp;</td>
      <td class="column_right_third">ATTORNEY FOR PETITIONER</td>
    </tr>
  </table>
  <?php } ?>

  <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
  <!-- PAGE 4 -->
  <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
  <?php
if ($county == 'COLLIN') {
    $upload_dir = wp_get_upload_dir();
    $upload_base_dir = $upload_dir['baseurl'];
    $standing_order_collin_county = $upload_base_dir . '/gravity_forms/standing_orders/collin_county';
    $standing_order_collin_county_page_1 = $standing_order_collin_county . '/Standing_Order-Collin_County-page_1-exhibit_a.jpg';
    $standing_order_collin_county_page_2 = $standing_order_collin_county . '/Standing_Order-Collin_County-page_2.jpg';
    $standing_order_collin_county_page_3 = $standing_order_collin_county . '/Standing_Order-Collin_County-page_3.jpg';
    $standing_order_collin_county_page_4 = $standing_order_collin_county . '/Standing_Order-Collin_County-page_4.jpg';
    $standing_order_collin_county_page_5 = $standing_order_collin_county . '/Standing_Order-Collin_County-page_5.jpg';
    ?>
  <pagebreak page-selector="standing-order" />
  <bookmark content="Exhibit A: Collin County Standing Orders" />
  <div id="a"></div>
  <img class="image-standing_order" src="<?php echo $standing_order_collin_county_page_1 ?>" />
  <pagebreak page-selector="standing-order" />
  <img class="image-standing_order" src="<?php echo $standing_order_collin_county_page_2 ?>" />
  <pagebreak page-selector="standing-order" />
  <img class="image-standing_order" src="<?php echo $standing_order_collin_county_page_3 ?>" />
  <pagebreak page-selector="standing-order" />
  <img class="image-standing_order" src="<?php echo $standing_order_collin_county_page_4 ?>" />
  <pagebreak page-selector="standing-order" />
  <img class="image-standing_order" src="<?php echo $standing_order_collin_county_page_5 ?>" />
  <?php }


  /* DALLAS COUNTY ------------------------------------------------------*/
if ($county == 'DALLAS') {
    $standing_order_dallas_county = $upload_base_dir . '/gravity_forms/standing_orders/dallas_county';
    $standing_order_dallas_county_page_1 = $standing_order_dallas_county . '/Standing_Order-Dallas_County-page_1.jpg';
    $standing_order_dallas_county_page_2 = $standing_order_dallas_county . '/Standing_Order-Dallas_County-page_2.jpg';
    $standing_order_dallas_county_page_3 = $standing_order_dallas_county . '/Standing_Order-Dallas_County-page_3.jpg';
    $standing_order_dallas_county_page_4 = $standing_order_dallas_county . '/Standing_Order-Dallas_County-page_4.jpg';
    ?>
    <pagebreak page-selector="standing-order" />
    <bookmark content="Exhibit A: Dallas County Standing Orders" />
    <div id="a"></div>
    <img class="image-standing_order" src="<?php echo $standing_order_dallas_county_page_1 ?>" />
    <pagebreak page-selector="standing-order" />
    <img class="image-standing_order" src="<?php echo $standing_order_dallas_county_page_2 ?>" />
    <pagebreak page-selector="standing-order" />
    <img class="image-standing_order" src="<?php echo $standing_order_dallas_county_page_3 ?>" />
    <pagebreak page-selector="standing-order" />
    <img class="image-standing_order" src="<?php echo $standing_order_dallas_county_page_4 ?>" />
    <?php }

/* DENTON COUNTY ------------------------------------------------------*/
if ($county == 'DENTON') {
    $standing_order_denton_county = $upload_base_dir . '/gravity_forms/standing_orders/denton_county';
    $standing_order_denton_county_page_1 = $standing_order_denton_county . '/Standing_Order-Denton_County-page_1.jpg';
    $standing_order_denton_county_page_2 = $standing_order_denton_county . '/Standing_Order-Denton_County-page_2.jpg';
    $standing_order_denton_county_page_3 = $standing_order_denton_county . '/Standing_Order-Denton_County-page_3.jpg';
    $standing_order_denton_county_page_4 = $standing_order_denton_county . '/Standing_Order-Denton_County-page_4.jpg';
    ?>
    <pagebreak page-selector="standing-order" />
    <bookmark content="Exhibit A: Denton County Standing Orders" />
    <div id="a"></div>
    <img class="image-standing_order" src="<?php echo $standing_order_denton_county_page_1 ?>" />
    <pagebreak page-selector="standing-order" />
    <img class="image-standing_order" src="<?php echo $standing_order_denton_county_page_2 ?>" />
    <pagebreak page-selector="standing-order" />
    <img class="image-standing_order" src="<?php echo $standing_order_denton_county_page_3 ?>" />
    <pagebreak page-selector="standing-order" />
    <img class="image-standing_order" src="<?php echo $standing_order_denton_county_page_4 ?>" />
    <?php }

/* ELLIS COUNTY ------------------------------------------------------*/
if ($county == 'ELLIS') {
    $standing_order_ellis_county = $upload_base_dir . '/gravity_forms/standing_orders/ellis_county';
    $standing_order_ellis_county_page_1 = $standing_order_ellis_county . '/Standing_Order-Ellis_County-page_1.jpg';
    $standing_order_ellis_county_page_2 = $standing_order_ellis_county . '/Standing_Order-Ellis_County-page_2.jpg';
    $standing_order_ellis_county_page_3 = $standing_order_ellis_county . '/Standing_Order-Ellis_County-page_3.jpg';
    ?>
    <pagebreak page-selector="standing-order" />
    <bookmark content="Exhibit A: Ellis County Standing Orders" />
    <div id="a"></div>
    <img class="image-standing_order" src="<?php echo $standing_order_ellis_county_page_1 ?>" />
    <pagebreak page-selector="standing-order" />
    <img class="image-standing_order" src="<?php echo $standing_order_ellis_county_page_2 ?>" />
    <pagebreak page-selector="standing-order" />
    <img class="image-standing_order" src="<?php echo $standing_order_ellis_county_page_3 ?>" />
    <?php }

/* FANNIN COUNTY ------------------------------------------------------*/
if ($county == 'FANNIN') {
    $standing_order_fannin_county = $upload_base_dir . '/gravity_forms/standing_orders/fannin_county';
    $standing_order_fannin_county_page_1 = $standing_order_fannin_county . '/Standing_Order-Fannin_County-page_1.jpg';
    $standing_order_fannin_county_page_2 = $standing_order_fannin_county . '/Standing_Order-Fannin_County-page_2.jpg';
    $standing_order_fannin_county_page_3 = $standing_order_fannin_county . '/Standing_Order-Fannin_County-page_3.jpg';
    $standing_order_fannin_county_page_4 = $standing_order_fannin_county . '/Standing_Order-Fannin_County-page_4.jpg';
    $standing_order_fannin_county_page_5 = $standing_order_fannin_county . '/Standing_Order-Fannin_County-page_5.jpg';
    ?>
    <pagebreak page-selector="standing-order" />
    <bookmark content="Exhibit A: Fannin County Standing Orders" />
    <div id="a"></div>
    <img class="image-standing_order" src="<?php echo $standing_order_fannin_county_page_1 ?>" />
    <pagebreak page-selector="standing-order" />
    <img class="image-standing_order" src="<?php echo $standing_order_fannin_county_page_2 ?>" />
    <pagebreak page-selector="standing-order" />
    <img class="image-standing_order" src="<?php echo $standing_order_fannin_county_page_3 ?>" />
    <pagebreak page-selector="standing-order" />
    <img class="image-standing_order" src="<?php echo $standing_order_fannin_county_page_4 ?>" />
    <pagebreak page-selector="standing-order" />
    <img class="image-standing_order" src="<?php echo $standing_order_fannin_county_page_5 ?>" />
    <?php }

/* HUNT COUNTY ------------------------------------------------------*/
if ($county == 'HUNT') {
    $standing_order_hunt_county = $upload_base_dir . '/gravity_forms/standing_orders/hunt_county';
    $standing_order_hunt_county_page_1 = $standing_order_hunt_county . '/Standing_Order-Hunt_County-page_1.jpg';
    $standing_order_hunt_county_page_2 = $standing_order_hunt_county . '/Standing_Order-Hunt_County-page_2.jpg';
    $standing_order_hunt_county_page_3 = $standing_order_hunt_county . '/Standing_Order-Hunt_County-page_3.jpg';
    $standing_order_hunt_county_page_4 = $standing_order_hunt_county . '/Standing_Order-Hunt_County-page_4.jpg';
    $standing_order_hunt_county_page_5 = $standing_order_hunt_county . '/Standing_Order-Hunt_County-page_5.jpg';
    $standing_order_hunt_county_page_6 = $standing_order_hunt_county . '/Standing_Order-Hunt_County-page_6.jpg';
    $standing_order_hunt_county_page_7 = $standing_order_hunt_county . '/Standing_Order-Hunt_County-page_7.jpg';
    ?>
    <pagebreak page-selector="standing-order" />
    <bookmark content="Exhibit A: Hunt County Standing Orders" />
    <div id="a"></div>
    <img class="image-standing_order" src="<?php echo $standing_order_hunt_county_page_1 ?>" />
    <pagebreak page-selector="standing-order" />
    <img class="image-standing_order" src="<?php echo $standing_order_hunt_county_page_2 ?>" />
    <pagebreak page-selector="standing-order" />
    <img class="image-standing_order" src="<?php echo $standing_order_hunt_county_page_3 ?>" />
    <pagebreak page-selector="standing-order" />
    <img class="image-standing_order" src="<?php echo $standing_order_hunt_county_page_4 ?>" />
    <pagebreak page-selector="standing-order" />
    <img class="image-standing_order" src="<?php echo $standing_order_hunt_county_page_5 ?>" />
    <pagebreak page-selector="standing-order" />
    <img class="image-standing_order" src="<?php echo $standing_order_hunt_county_page_6 ?>" />
    <pagebreak page-selector="standing-order" />
    <img class="image-standing_order" src="<?php echo $standing_order_hunt_county_page_7 ?>" />
    <?php }

/* JACK COUNTY ------------------------------------------------------*/
if ($county == 'JACK') {
    $standing_order_jack_county = $upload_base_dir . '/gravity_forms/standing_orders/jack_county';
    $standing_order_jack_county_page_1 = $standing_order_jack_county . '/Standing_Order-Jack_County-page_1.jpg';
    ?>
    <pagebreak page-selector="standing-order" />
    <bookmark content="Exhibit A: Jack County Standing Orders" />
    <div id="a"></div>
    <img class="image-standing_order" src="<?php echo $standing_order_jack_county_page_1 ?>" />
    <?php }

/* KAUFFMAN COUNTY ------------------------------------------------------*/
if ($county == 'KAUFFMAN') {
    $standing_order_kauffman_county = $upload_base_dir . '/gravity_forms/standing_orders/kauffman_county';
    $standing_order_kauffman_county_page_1 = $standing_order_kauffman_county . '/Standing_Order-Kauffman_County-page_1.jpg';
    $standing_order_kauffman_county_page_2 = $standing_order_kauffman_county . '/Standing_Order-Kauffman_County-page_2.jpg';
    $standing_order_kauffman_county_page_3 = $standing_order_kauffman_county . '/Standing_Order-Kauffman_County-page_3.jpg';
    $standing_order_kauffman_county_page_4 = $standing_order_kauffman_county . '/Standing_Order-Kauffman_County-page_4.jpg';
    $standing_order_kauffman_county_page_5 = $standing_order_kauffman_county . '/Standing_Order-Kauffman_County-page_5.jpg';
    $standing_order_kauffman_county_page_6 = $standing_order_kauffman_county . '/Standing_Order-Kauffman_County-page_6.jpg';
    $standing_order_kauffman_county_page_7 = $standing_order_kauffman_county . '/Standing_Order-Kauffman_County-page_7.jpg';
    ?>
    <pagebreak page-selector="standing-order" />
    <bookmark content="Exhibit A: Kauffman County Standing Orders" />
    <div id="a"></div>
    <img class="image-standing_order" src="<?php echo $standing_order_kauffman_county_page_1 ?>" />
    <pagebreak page-selector="standing-order" />
    <img class="image-standing_order" src="<?php echo $standing_order_kauffman_county_page_2 ?>" />
    <pagebreak page-selector="standing-order" />
    <img class="image-standing_order" src="<?php echo $standing_order_kauffman_county_page_3 ?>" />
    <pagebreak page-selector="standing-order" />
    <img class="image-standing_order" src="<?php echo $standing_order_kauffman_county_page_4 ?>" />
    <pagebreak page-selector="standing-order" />
    <img class="image-standing_order" src="<?php echo $standing_order_kauffman_county_page_5 ?>" />
    <img class="image-standing_order" src="<?php echo $standing_order_kauffman_county_page_6 ?>" />
    <img class="image-standing_order" src="<?php echo $standing_order_kauffman_county_page_7 ?>" />
    <?php }

/* PARKER COUNTY ------------------------------------------------------*/
if ($county == 'PARKER') {
    $standing_order_parker_county = $upload_base_dir . '/gravity_forms/standing_orders/parker_county';
    $standing_order_parker_county_page_1 = $standing_order_parker_county . '/Standing_Order-Parker_County-page_1.jpg';
    $standing_order_parker_county_page_2 = $standing_order_parker_county . '/Standing_Order-Parker_County-page_2.jpg';
    $standing_order_parker_county_page_3 = $standing_order_parker_county . '/Standing_Order-Parker_County-page_3.jpg';
    ?>
    <pagebreak page-selector="standing-order" />
    <bookmark content="Exhibit A: Parker County Standing Orders" />
    <div id="a"></div>
    <img class="image-standing_order" src="<?php echo $standing_order_parker_county_page_1 ?>" />
    <pagebreak page-selector="standing-order" />
    <img class="image-standing_order" src="<?php echo $standing_order_parker_county_page_2 ?>" />
    <pagebreak page-selector="standing-order" />
    <img class="image-standing_order" src="<?php echo $standing_order_parker_county_page_3 ?>" />
    <?php }

/* ROCKWALL COUNTY ------------------------------------------------------*/
if ($county == 'ROCKWALL') {
    $standing_order_rockwall_county = $upload_base_dir . '/gravity_forms/standing_orders/rockwall_county';
    $standing_order_rockwall_county_page_1 = $standing_order_rockwall_county . '/Standing_Order-Rockwall_County-page_1.jpg';
    $standing_order_rockwall_county_page_2 = $standing_order_rockwall_county . '/Standing_Order-Rockwall_County-page_2.jpg';
    $standing_order_rockwall_county_page_3 = $standing_order_rockwall_county . '/Standing_Order-Rockwall_County-page_3.jpg';
    $standing_order_rockwall_county_page_4 = $standing_order_rockwall_county . '/Standing_Order-Rockwall_County-page_4.jpg';
    $standing_order_rockwall_county_page_5 = $standing_order_rockwall_county . '/Standing_Order-Rockwall_County-page_5.jpg';
    ?>
    <pagebreak page-selector="standing-order" />
    <bookmark content="Exhibit A: Rockwall County Standing Orders" />
    <div id="a"></div>
    <img class="image-standing_order" src="<?php echo $standing_order_rockwall_county_page_1 ?>" />
    <pagebreak page-selector="standing-order" />
    <img class="image-standing_order" src="<?php echo $standing_order_rockwall_county_page_2 ?>" />
    <pagebreak page-selector="standing-order" />
    <img class="image-standing_order" src="<?php echo $standing_order_rockwall_county_page_3 ?>" />
    <pagebreak page-selector="standing-order" />
    <img class="image-standing_order" src="<?php echo $standing_order_rockwall_county_page_4 ?>" />
    <pagebreak page-selector="standing-order" />
    <img class="image-standing_order" src="<?php echo $standing_order_rockwall_county_page_5 ?>" />
    <?php }
  ?>