<meta charset="UTF-8">
<?php

/*
 * Template Name: Prove Up It's Simple No Children
 * Version: 1.0.1
 * Description: A print-friendly template displaying the final decree of divorce, created 26/01/2022
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

.indent-paragraph-sub {
padding-left: 150px;
  text-align: justify;

   line-height: 250%;
 
  
}
.indent-paragraph-sub2 {
padding-left: 200px;
  text-align: justify;

   line-height: 250%;
 
  
}


.indent-paragraph-textind {
padding-left: 70px;
  text-align: justify;
  text-indent: 10.5mm;
   line-height: 250%;
 
  
}

.indent-paragraph-texty {
padding-left: 40px;
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
.text_align_left {
  text-align: left;
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
$petitioner = $form_data['field'][1];
$petitionerUpper = strtoupper($petitioner);
?>
<!-- HEADER / FOOTER -->
<htmlpagefooter name="MyCustomFooter">
  <table class="footer">
    <tr class="paragraph">
      <td class="footer_left_half"><span class="bs_bold bs_text_small">DECLARTION OF /<?php echo $petitionerUpper?> FOR PROVE-UP FOR AGREED DIVORCE</span></td>
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
    
//Petitioner Details
$petitionerArray = $form_data['field'][96]; //Unprocessed Array
$petitioner = implode(" ", $petitionerArray); // Processed Array
$petitionerUpper = strtoupper($petitioner); //Make sure its in upper case
$petitionerDoB =  $form_data['field'][229];
$petitionerAddress = $form_data['field'][38];
$county = $form_data['field'][6];

//Respondent details
$respondentArray = $form_data['field'][114];
$respondent = implode(" ", $respondentArray);
$respondentUpper = strtoupper($respondent);

//Marriage Details
$dateOfMarriage =  $form_data['field'][20];
$dateOfSeperation = $form_data['field'][24];

//Check if children (Not necessary but used for header)
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


$childrenOver18 = $form_data['field'][270];

// MEMBERSHIP TYPE FOR SIGNATURE
$membership_type = $form_data['field'][31]; // [31.Plan] => DYW

/* VARIABLES END
 *********************************************************************************************************** */
?>
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!-- PAGE 1 -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

<bookmark content="Prove Up" />

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
    <td class="column_third_half"><span class="bs_bold"><?php echo $petitionerUpper ; ?></span></td>
    <td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>
    <td class="column_right_third"><span class="bs_bold"> _______ JUDICIAL DISTRICT</span></td>
  </tr>
  <tr class="paragraph">
    <td class="column_third_half"><span class="bs_bold">AND</span></td>
    <td class="column_middle_third"><span class="bs_bold"></span>&sect; </td>
    <td class="column_right_third"><span class="bs_bold">&nbsp;</span></td>
  </tr>
  <tr class="paragraph">
    <td class="column_third_half"><span class="bs_bold"><?php echo $respondentUpper ; ?></span></td>
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
<!--- title ---->
<div class = "title"><span class="bs_bold text_align_center"> <br> <u> DECLARATION OF <?php echo $petitionerUpper ?> FOR PROVE-UP OF AGREED DIVORCE </u></span>
    </div>

<div class = "indent-paragraph">My name is <?php echo $petitionerUpper ?> I am above the age of eighteen years, and I am fully
competent to make this declaration. The facts stated in this declaration are within my personal
knowledge and are true and correct.  
    </div>
<div class = "indent-paragraph">I am presently married to <?php echo $respondentUpper ?>, Respondent.
    </div>
<div class = "indent-paragraph">Before the filing of this suit, I have been a domiciliary of Texas for the preceding six-
month period and a residence of this county for the preceding ninety-day period. 
    </div>
<div class = "indent-paragraph"><?php echo $respondentUpper ?> and I were married on <?php echo $dateOfMarriage ?> , and we ceased to live
together as husband and wife on or about <?php $dateOfSeperation ?>.   
    </div>
<div class = "indent-paragraph">Our marriage has become insupportable because of a discord or conflict of personalities
that destroys the legitimate ends of the marriage relationship.  
    </div>
<div class = "indent-paragraph">There is no reasonable expectation of reconciliation.
    </div>
<div class = "indent-paragraph">There is no child under eighteen years of age or otherwise entitled to support who was
born or adopted of this marriage, and none is expected.  
    </div>
<div class = "indent-paragraph">There has been no family violence or abuse within two years before or during this suit.
There is no bankruptcy proceeding affecting this suit.   
    </div>
<div class = "indent-paragraph">My spouse and I have entered into an agreement concerning the division of our property
and debts.   
    </div>
<div class = "indent-paragraph">The terms of the agreement are just and right. The agreement is fair and equitable to both
my spouse and me.
    </div>
<div class = "indent-paragraph">I have submitted an Agreed Final Decree of Divorce, which bears the signatures of my
spouse and me. This is the document that contains the agreements entered into between my
spouse and me.  
    </div>
<div class = "indent-paragraph">I am asking the Court to grant a divorce and approve all the agreements we have entered
into.   
    </div>
<div class = "indent-paragraph">My name is <?php echo $petitionerUpper .', my date of birth is ' . $petitionerDoB . ', my address is ' . implode(", ", $petitionerAddress) . ' I declare under penalty
of perjury that the foregoing is true and correct.'?>
    </div>
<div class = "indent-paragraph">Executed in <?php echo $county ?> County, State of Texas, on , 2021.
    </div>
    <br>
<div class = "text_align_right"> 
_______________________________________ <br>
<?php echo $petitionerUpper ?>, Declarant and Petitioner
    </div>

  