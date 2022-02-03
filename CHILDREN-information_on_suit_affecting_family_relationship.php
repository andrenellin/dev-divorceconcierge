<meta charset="UTF-8">
<?php

/*
 * Template Name: Information On Suit Affecting Family Relationship
 * Version: 1.0.0
 * Description: A print-friendly template displaying the Information On Suit Affecting Family Relationship
 * Author: Bliksem LLC
 * Author URI: https://simplifysmallbiz.com
 * Group: 0. To Do
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
  list-style-position: inside;
  list-style: circle;
 
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
  font-size: 7pt;
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
  line-height: 250%;
}

.headinger {
  line-height: 250%;
  font-weight: bold;
}

.paragraphinfo {
  line-height: 150%;

}
.rotateText{
transform: rotateY(90);

}

.paragraphleft {
  line-height: 250%;
  width: 290px;
  float: left;

}
.paragraphleftborder {
  line-height: 250%;
  width: 295px;
  float: left;
   border-width:1px; border-style:solid;
}
.paragraphrightborder {
  line-height: 250%;
  width: 300px;
  float: right;
   border-width:1px; border-style:solid;
}
.paragraphright {
  line-height: 250%;
  width: 300px;
  float: right;

}
.paragraphsmall {
  line-height: 150%;
  font-size: 5pt;
}
.paragraphborder {
  line-height: 250%;
  border-width:1px; border-style:solid;
  display: flex;
}
.container {
  line-height: 250%;
  display: flex;

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
.text_align_left {
  text-align: left;
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
      <td class="footer_left_half"><span class="bs_bold bs_text_small">INFORMATION ON SUIT AFFECTING FAMILY RELATIONSHIP</span></td>
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

//HEADING data

//section 1
$county = $form_data['field'][1];
$courtNo = $form_data['field'][3];
$causeNo = $form_data['field'][2];
$dateOfOrder = $form_data['field'][4];
$typeOfOrderArray = $form_data['field'][7];
     $typeOfOrder = implode(" ",$typeOfOrderArray);
$transferToCounty = $form_data['field'][8];
$transferToCourtNo = $form_data['field'][9];
$transferToStateCourtID = $form_data['field'][10];
$nameOfAttorneyForPetitionerArray = $form_data['field'][11];
    $nameOfAttorneyForPetitioner = implode(" ",$nameOfAttorneyForPetitionerArray);
$attorneyPhone = $form_data['field'][12];
$attorneyMailingAddressArray = $form_data['field'][13];
     $attorneyMailingAddress = implode(" ",$attorneyMailingAddressArray);

//section 2
$petitionerNameArray = $form_data['field'][15];
     $petitionerName = implode(" ",$petitionerNameArray);
$petitionerMaidenNameArray = $form_data['field'][23];
     $petitionerMaiden = implode(" ",$petitionerMaidenNameArray);    
$petitonerPlaceOfBirthArray = $form_data['field'][17];
     $petitonerPlaceOfBirth = implode(" ",$petitonerPlaceOfBirthArray);
$petitionerRace = $form_data['field'][19];
$petitionerDoB = $form_data['field'][20];
$petionerUsualAddressArray = $form_data['field'][21];  
     $petitonerUsalAddress = implode(" ",$petionerUsualAddressArray);

$respondentNameArray = $form_data['field'][22];
     $respondentName = implode(" ",$respondentNameArray);
$respondentMaidenNameArray = $form_data['field'][18];
     $respondentMaidenName = implode(" ",$respondentMaidenNameArray);
$respondentPlaceOfBirthArray = $form_data['field'][25];
     $respondentPlaceOfBirth = implode(" ",$respondentPlaceOfBirthArray);
$respondentRace = $form_data['field'][24];
$respondentDoB = $form_data['field'][26];
$respondentUsualResidenceArray = $form_data['field'][27];
     $respondentUsualResidence = implode(" ",$respondentUsualResidenceArray);

$noOfMinorChildren = $form_data['field'][28];
$dateOfMarriage = $form_data['field'][29];
$placeOfMarriageArray = $form_data['field'][30];
     $placeOfMarriage = implode(" ",$placeOfMarriageArray);

//section 3 children

//Child(ren) information

//get the form ids for the children from the children field.
$childArrayID = $form_data['field'][32];

//get amount of characters in children field. 3 = 1 child, 7 = 2 child etc. is X+1 as theres a coma. 
    $childrenAmount = strlen($childArrayID);
 
//is able to get the last form id 
    $childArrayCalc = substr($childArrayID, -3);
//turns it into an int
    $childArrayLast = $childArrayCalc + 0;
//substracts 1 to get the next data set
    $childArrayID2 =  (int)$childArrayCalc - 1;

//to do: create ifs so that it only displays the right amount of children or none at all

$childArrayID3 = (int)$childArrayID2- 1;
$childArrayID4 = (int)$childArrayID3- 1;
$childArrayID5 = (int)$childArrayID4- 1;
$childArrayID6 = (int)$childArrayID5- 1;
$childArrayID7 = (int)$childArrayID6- 1;
$childArrayID8 = (int)$childArrayID7 - 1;
$childArrayID9 =  (int)$childArrayID8 - 1;
$childArrayID10 = (int)$childArrayID9 - 1;

//gets the nested form id, used the entry id from childArray to find the right details
$form_id = '30'; $entry = GFAPI::get_entry( $childArrayLast);
$form_id = '30'; $entry2 = GFAPI::get_entry( $childArrayID2);
$form_id = '30'; $entry3 = GFAPI::get_entry( $childArrayID3);
$form_id = '30'; $entry4 = GFAPI::get_entry( $childArrayID4);
$form_id = '30'; $entry5 = GFAPI::get_entry( $childArrayID5);
$form_id = '30'; $entry6 = GFAPI::get_entry( $childArrayID6);
$form_id = '30'; $entry7 = GFAPI::get_entry( $childArrayID7);
$form_id = '30'; $entry8 = GFAPI::get_entry( $childArrayID8);
$form_id = '30'; $entry9 = GFAPI::get_entry( $childArrayID9);
$form_id = '30'; $entry10= GFAPI::get_entry( $childArrayID10);


//$childName = array_search("12/22/1999",$entry);
$childGender = $form_data['field'][6]; // child's SEX 
$childBirthdate = $form_data['field'][7]; // child's birthdate

//The array keys for the nested form are in decimals which it doesn't like when entered "$entry[2.1]2 but setting it as a $variable works'
$arrayChildFirst = '1.3';
$arrayChildMiddle = '1.4';
$arrayChildLast = '1.6';
$arrayChildGen = '3';
$arrayChildBirth = '4';
$birthCity = '4.3';
$birthRegion = '4.4';
$birthCountry = '4.5';
$priorFirst = '5.5';
$priorLast = '5.6';


/* VARIABLES END
 *********************************************************************************************************** */
?>

<bookmark content="Inforamation on Suit Affecting Family Relationship" />


<div class = "title"> INFORMATION ON SUIT AFFECTING THE FAMILY RELATIONSHIP 
<br> (EXCLUDING ADDOPTIONS)
</div>

<div class = "headinger">SECTION I GENERAL INFORMATION (REQUIRED)  &emsp;  STATE FILE NUMBER 
    </div>

<div class = "paragraph"> 1a. COUNTY: <?php echo $county . " 1b. COURT NO.:" . $courtNo; ?>
    </div>
<div class = "paragraph">1c. CAUSE NO.: <?php echo $causeNo . " 1d. DATE OF ORDER (mm/dd/yyyy): " . $dateOfOrder ;?>
    </div>
<div class = "paragraph">2. TYPE OF ORDER (CHECK ALL THAT APPLY):
<br>
    </div>

<div class = "paragraph"><?php if ($typeOfOrder === 'Divorce/Annulment without Children' ){

echo "&#9744; DIVORCE/ANNULMENT <u>WITH</u> CHILDREN(Sec.1,2 and 3)  &emsp; &#9745; Divorce/Anulment without Children(Sec. 1 AND 2)
<br>
&#9744; ESTABLISHMENT OF COURT OF CONTINUING JURISDICTION (SEC 1 AND 3) (Court Order Establishing Paternity, Conservatorship, Child Support or Termination of Parental Rights) 
<br>
&#9744; CHANGE IN THE NAME OF THE CHILD (SEC 1 AND 3) (PROVIDE PRIOR AND NEW NAME OF CHILD IN SECTION 3)
<br>
&#9744; TRANSFER OF COURT OR CONTINUING JURISDICTION (SEC1, 3 AND INFORMATION BELOW) ";

} else if ($typeOfOrder === 'Divorce/Annulment with Children' ){

echo "&#9745; DIVORCE/ANNULMENT <u>WITH</u> CHILDREN(Sec.1,2 and 3)  &emsp; &#9744; Divorce/Anulment without Children(Sec. 1 AND 2)
<br>
&#9744; ESTABLISHMENT OF COURT OF CONTINUING JURISDICTION (SEC 1 AND 3) (Court Order Establishing Paternity, Conservatorship, Child Support or Termination of Parental Rights) 
<br>
&#9744; CHANGE IN THE NAME OF THE CHILD (SEC 1 AND 3) (PROVIDE PRIOR AND NEW NAME OF CHILD IN SECTION 3)
<br>
&#9744; TRANSFER OF COURT OR CONTINUING JURISDICTION (SEC1, 3 AND INFORMATION BELOW) ";

} else if ($typeOfOrder === 'Establishment of Court Continuing Jurisdiction' ){

echo "&#9744; DIVORCE/ANNULMENT <u>WITH</u> CHILDREN(Sec.1,2 and 3)  &emsp; &#9744; Divorce/Anulment without Children(Sec. 1 AND 2)
<br>
&#9745; ESTABLISHMENT OF COURT OF CONTINUING JURISDICTION (SEC 1 AND 3) (Court Order Establishing Paternity, Conservatorship, Child Support or Termination of Parental Rights) 
<br>
&#9744; CHANGE IN THE NAME OF THE CHILD (SEC 1 AND 3) (PROVIDE PRIOR AND NEW NAME OF CHILD IN SECTION 3)
<br>
&#9744; TRANSFER OF COURT OR CONTINUING JURISDICTION (SEC1, 3 AND INFORMATION BELOW) ";

} else if ($typeOfOrder === 'Change in the Name of the Child' ){

echo "&#9744; DIVORCE/ANNULMENT <u>WITH</u> CHILDREN(Sec.1,2 and 3)  &emsp; &#9744; Divorce/Anulment without Children(Sec. 1 AND 2)
<br>
&#9744; ESTABLISHMENT OF COURT OF CONTINUING JURISDICTION (SEC 1 AND 3) (Court Order Establishing Paternity, Conservatorship, Child Support or Termination of Parental Rights) 
<br>
&#9745; CHANGE IN THE NAME OF THE CHILD (SEC 1 AND 3) (PROVIDE PRIOR AND NEW NAME OF CHILD IN SECTION 3)
<br>
&#9744; TRANSFER OF COURT OR CONTINUING JURISDICTION (SEC1, 3 AND INFORMATION BELOW) ";

} else if ($typeOfOrder === 'Transfer of Court or Continuing Jurisdiction' ){

echo "&#9744; DIVORCE/ANNULMENT <u>WITH</u> CHILDREN(Sec.1,2 and 3)  &emsp; &#9744; Divorce/Anulment without Children(Sec. 1 AND 2)
<br>
&#9744; ESTABLISHMENT OF COURT OF CONTINUING JURISDICTION (SEC 1 AND 3) (Court Order Establishing Paternity, Conservatorship, Child Support or Termination of Parental Rights) 
<br>
&#9744; CHANGE IN THE NAME OF THE CHILD (SEC 1 AND 3) (PROVIDE PRIOR AND NEW NAME OF CHILD IN SECTION 3)
<br>
&#9745; TRANSFER OF COURT OR CONTINUING JURISDICTION (SEC1, 3 AND INFORMATION BELOW) ";
}?>
</div>

<div class = "paragraph"> <u> TRANSFER TO:</u> COUNTY: <?php echo $transferToCounty . " COURT NO.: " . $transferToCourtNo . " STATE COURT ID#: " . $transferToStateCourtID ?>
    </div>

    <div class = "paragraphborder"> 3a. NAME OF ATTORNEY FOR PETITIONER <?php echo $nameOfAttorneyForPetitioner?> </div>
    <div class = "paragraphborder"> 3b. TELEPHONE NUMBER (including area code) <?php echo $attorneyPhone ?> </div>
    <div class = "paragraphborder"> 3c. CURRENT MAILING ADDRESS (STREET AND NUMBER OR P.O BOX, CITY, STATE, ZIP) <?php echo $attorneyMailingAddress ?></div>

<div class = "headinger">SECTION 2 (IF APPLICABLE) REPORT OF DIVORCE OR ANNULMENT OF MARRIAGE 
    </div>


<div class = "paragraphborder">PETITIONER   
    </div>

<div class = "container">
    
<div class = "paragraphleftborder">
    4. NAME (FIRST MIDDLE LAST SUFFIX) <br> <?php echo $petitionerName ?>
   
    <br>6. PLACE OF BIRTH (CITY AND STATE OR FOREIGN COUNTRY)<br> <?php echo $petitonerPlaceOfBirth ?>
  
   <br> 7. RACE <?php echo $petitionerRace ?>
    </div>
<div class = "paragraphrightborder">5. MAIDEN LAST NAME (NAME BEFORE 1ST MARRIAGE) <br><?php echo $petitionerMaidenName ?>
    </div>
<div class = "paragraphrightborder">8. DATE OF BIRTH (mm/dd/yyyy)<br> <?php echo $petitionerDoB ?>
    </div>
</div>
<div class = "paragraphborder">9. USUAL RESIDENCE STREET NAME & NUMBER CITY STATE ZIP <br> <?php echo $petitonerUsalAddress ?>

</div>

<div class = "paragraphborder">RESPONDENT  
    </div>

<div class = "container">
    
<div class = "paragraphleftborder">
    10. NAME (FIRST MIDDLE LAST SUFFIX) <br> <?php echo $respondentName ?>
   
    <br>12. PLACE OF BIRTH (CITY AND STATE OR FOREIGN COUNTRY)<br> <?php echo $petitonerPlaceOfBirth ?>
  
   <br> 13. RACE <?php echo $respondentRace ?>
    </div>
<div class = "paragraphrightborder">11. MAIDEN LAST NAME (NAME BEFORE 1ST MARRIAGE) <br><?php echo $respondentMaidenName ?>
    </div>
<div class = "paragraphrightborder">14. DATE OF BIRTH (mm/dd/yyyy)<br> <?php echo $respondentDoB ?>
    </div>
</div>
<div class = "paragraphborder">15. USUAL RESIDENCE STREET NAME & NUMBER CITY STATE ZIP <br> <?php echo $respondentUsualResidence ?>

</div>

<div class = "paragraphborder">16. NUMBER OF MINOR CHILDREN: <?php echo $noOfMinorChildren ?>
    </div>
<div class = "paragraphborder">17. DATE OF MARRIAGE(mm/dd/yyyy): <?php echo $dateOfMarriage ?>
    </div>
<div class = "paragraphborder">18. PLACE OF MARRIAGE (CITY AND STATE OR FOREIGN COUNTRY): <?php echo $placeOfMarriage ?>
    </div>

<div class = "headinger"> SECTION 3 (IF APPLICABLE) CHILDREN AFFECTED BY THIS SUIT 
    </div>

    <div class = "paragraphborder"> <?php if ($childrenAmount === 39){
  echo "19a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry[$arrayChildFirst] . " " . $entry[$arrayChildMiddle] . " " . $entry[$arrayChildLast]  . "<br>" .
           "19c. SEX ". $entry[$arrayChildGen] . "<br>" .
           "19b. DATE OF BIRTH (mm/dd/yyyy) " . $entry[$arrayChildBirth] . "<br>" .
           "19d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry[$birthCity] . " " . $entry[$birthRegion] . " " . $entry[$birthCountry] . "<br>" .
           "19e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry[$priorFirst] . " " . $entry[$priorLast] ."<br>" .


        "20a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry2[$arrayChildFirst] . " " . $entry2[$arrayChildMiddle] . " " . $entry2[$arrayChildLast]  . "<br>" .
           "20c. SEX ". $entry2[$arrayChildGen] . "<br>" .
           "20b. DATE OF BIRTH (mm/dd/yyyy) " . $entry2[$arrayChildBirth] . "<br>" .
           "20d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry2[$birthCity] . " " . $entry2[$birthRegion] . " " . $entry2[$birthCountry] . "<br>" .
           "20e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry2[$priorFirst] . " " . $entry2[$priorLast] ."<br>" .

        
        "21a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry3[$arrayChildFirst] . " " . $entry3[$arrayChildMiddle] . " " . $entry3[$arrayChildLast]  . "<br>" .
           "21c. SEX ". $entry3[$arrayChildGen] . "<br>" .
           "21b. DATE OF BIRTH (mm/dd/yyyy) " . $entry3[$arrayChildBirth] . "<br>" .
           "21d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry3[$birthCity] . " " . $entry3[$birthRegion] . " " . $entry3[$birthCountry] . "<br>" .
           "21e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry3[$priorFirst] . " " . $entry3[$priorLast] ."<br>" .


        "22a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry4[$arrayChildFirst] . " " . $entry4[$arrayChildMiddle] . " " . $entry4[$arrayChildLast]  . "<br>" .
           "22c. SEX ". $entry4[$arrayChildGen] . "<br>" .
           "22b. DATE OF BIRTH (mm/dd/yyyy) " . $entry4[$arrayChildBirth] . "<br>" .
           "22d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry4[$birthCity] . " " . $entry4[$birthRegion] . " " . $entry4[$birthCountry] . "<br>" .
           "22e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry4[$priorFirst] . " " . $entry4[$priorLast] ."<br>" .

        "23a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry5[$arrayChildFirst] . " " . $entry5[$arrayChildMiddle] . " " . $entry5[$arrayChildLast]  . "<br>" .
           "23c. SEX ". $entry5[$arrayChildGen] . "<br>" .
           "23b. DATE OF BIRTH (mm/dd/yyyy) " . $entry5[$arrayChildBirth] . "<br>" .
           "23d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry5[$birthCity] . " " . $entry5[$birthRegion] . " " . $entry5[$birthCountry] . "<br>" .
           "23e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry5[$priorFirst] . " " . $entry5[$priorLast] ."<br>" .

        "24a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry6[$arrayChildFirst] . " " . $entry6[$arrayChildMiddle] . " " . $entry6[$arrayChildLast]  . "<br>" .
           "24c. SEX ". $entry6[$arrayChildGen] . "<br>" .
           "24b. DATE OF BIRTH (mm/dd/yyyy) " . $entry6[$arrayChildBirth] . "<br>" .
           "24d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry6[$birthCity] . " " . $entry6[$birthRegion] . " " . $entry6[$birthCountry] . "<br>" .
           "24e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry6[$priorFirst] . " " . $entry6[$priorLast] ."<br>" .

        "25a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry7[$arrayChildFirst] . " " . $entry7[$arrayChildMiddle] . " " . $entry7[$arrayChildLast]  . "<br>" .
           "25c. SEX ". $entry7[$arrayChildGen] . "<br>" .
           "25b. DATE OF BIRTH (mm/dd/yyyy) " . $entry7[$arrayChildBirth] . "<br>" .
           "25d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry7[$birthCity] . " " . $entry7[$birthRegion] . " " . $entry7[$birthCountry] . "<br>" .
           "25e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry7[$priorFirst] . " " . $entry7[$priorLast] ."<br>" .

        "26a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry8[$arrayChildFirst] . " " . $entry8[$arrayChildMiddle] . " " . $entry8[$arrayChildLast]  . "<br>" .
           "26c. SEX ". $entry8[$arrayChildGen] . "<br>" .
           "26b. DATE OF BIRTH (mm/dd/yyyy) " . $entry8[$arrayChildBirth] . "<br>" .
           "26d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry8[$birthCity] . " " . $entry8[$birthRegion] . " " . $entry8[$birthCountry] . "<br>" .
           "26e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry8[$priorFirst] . " " . $entry8[$priorLast] ."<br>" .

        "27a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry9[$arrayChildFirst] . " " . $entry9[$arrayChildMiddle] . " " . $entry9[$arrayChildLast]  . "<br>" .
           "27c. SEX ". $entry9[$arrayChildGen] . "<br>" .
           "27b. DATE OF BIRTH (mm/dd/yyyy) " . $entry9[$arrayChildBirth] . "<br>" .
           "27d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry9[$birthCity] . " " . $entry9[$birthRegion] . " " . $entry9[$birthCountry] . "<br>" .
           "27e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry9[$priorFirst] . " " . $entry9[$priorLast] ."<br>" .

                "28a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry10[$arrayChildFirst] . " " . $entry10[$arrayChildMiddle] . " " . $entry10[$arrayChildLast]  . "<br>" .
           "28c. SEX ". $entry10[$arrayChildGen] . "<br>" .
           "28b. DATE OF BIRTH (mm/dd/yyyy) " . $entry10[$arrayChildBirth] . "<br>" .
           "28d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry10[$birthCity] . " " . $entry10[$birthRegion] . " " . $entry10[$birthCountry] . "<br>" .
           "28e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry10[$priorFirst] . " " . $entry10[$priorLast] ."<br>" 

;
        
}else if ($childrenAmount === 35){
   echo "19a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry[$arrayChildFirst] . " " . $entry[$arrayChildMiddle] . " " . $entry[$arrayChildLast]  . "<br>" .
           "19c. SEX ". $entry[$arrayChildGen] . "<br>" .
           "19b. DATE OF BIRTH (mm/dd/yyyy) " . $entry[$arrayChildBirth] . "<br>" .
           "19d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry[$birthCity] . " " . $entry[$birthRegion] . " " . $entry[$birthCountry] . "<br>" .
           "19e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry[$priorFirst] . " " . $entry[$priorLast] ."<br>" .


        "20a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry2[$arrayChildFirst] . " " . $entry2[$arrayChildMiddle] . " " . $entry2[$arrayChildLast]  . "<br>" .
           "20c. SEX ". $entry2[$arrayChildGen] . "<br>" .
           "20b. DATE OF BIRTH (mm/dd/yyyy) " . $entry2[$arrayChildBirth] . "<br>" .
           "20d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry2[$birthCity] . " " . $entry2[$birthRegion] . " " . $entry2[$birthCountry] . "<br>" .
           "20e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry2[$priorFirst] . " " . $entry2[$priorLast] ."<br>" .

        
        "21a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry3[$arrayChildFirst] . " " . $entry3[$arrayChildMiddle] . " " . $entry3[$arrayChildLast]  . "<br>" .
           "21c. SEX ". $entry3[$arrayChildGen] . "<br>" .
           "21b. DATE OF BIRTH (mm/dd/yyyy) " . $entry3[$arrayChildBirth] . "<br>" .
           "21d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry3[$birthCity] . " " . $entry3[$birthRegion] . " " . $entry3[$birthCountry] . "<br>" .
           "21e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry3[$priorFirst] . " " . $entry3[$priorLast] ."<br>" .


        "22a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry4[$arrayChildFirst] . " " . $entry4[$arrayChildMiddle] . " " . $entry4[$arrayChildLast]  . "<br>" .
           "22c. SEX ". $entry4[$arrayChildGen] . "<br>" .
           "22b. DATE OF BIRTH (mm/dd/yyyy) " . $entry4[$arrayChildBirth] . "<br>" .
           "22d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry4[$birthCity] . " " . $entry4[$birthRegion] . " " . $entry4[$birthCountry] . "<br>" .
           "22e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry4[$priorFirst] . " " . $entry4[$priorLast] ."<br>" .

        "23a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry5[$arrayChildFirst] . " " . $entry5[$arrayChildMiddle] . " " . $entry5[$arrayChildLast]  . "<br>" .
           "23c. SEX ". $entry5[$arrayChildGen] . "<br>" .
           "23b. DATE OF BIRTH (mm/dd/yyyy) " . $entry5[$arrayChildBirth] . "<br>" .
           "23d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry5[$birthCity] . " " . $entry5[$birthRegion] . " " . $entry5[$birthCountry] . "<br>" .
           "23e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry5[$priorFirst] . " " . $entry5[$priorLast] ."<br>" .

        "24a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry6[$arrayChildFirst] . " " . $entry6[$arrayChildMiddle] . " " . $entry6[$arrayChildLast]  . "<br>" .
           "24c. SEX ". $entry6[$arrayChildGen] . "<br>" .
           "24b. DATE OF BIRTH (mm/dd/yyyy) " . $entry6[$arrayChildBirth] . "<br>" .
           "24d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry6[$birthCity] . " " . $entry6[$birthRegion] . " " . $entry6[$birthCountry] . "<br>" .
           "24e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry6[$priorFirst] . " " . $entry6[$priorLast] ."<br>" .

        "25a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry7[$arrayChildFirst] . " " . $entry7[$arrayChildMiddle] . " " . $entry7[$arrayChildLast]  . "<br>" .
           "25c. SEX ". $entry7[$arrayChildGen] . "<br>" .
           "25b. DATE OF BIRTH (mm/dd/yyyy) " . $entry7[$arrayChildBirth] . "<br>" .
           "25d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry7[$birthCity] . " " . $entry7[$birthRegion] . " " . $entry7[$birthCountry] . "<br>" .
           "25e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry7[$priorFirst] . " " . $entry7[$priorLast] ."<br>" .

        "26a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry8[$arrayChildFirst] . " " . $entry8[$arrayChildMiddle] . " " . $entry8[$arrayChildLast]  . "<br>" .
           "26c. SEX ". $entry8[$arrayChildGen] . "<br>" .
           "26b. DATE OF BIRTH (mm/dd/yyyy) " . $entry8[$arrayChildBirth] . "<br>" .
           "26d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry8[$birthCity] . " " . $entry8[$birthRegion] . " " . $entry8[$birthCountry] . "<br>" .
           "26e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry8[$priorFirst] . " " . $entry8[$priorLast] ."<br>" .

        "27a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry9[$arrayChildFirst] . " " . $entry9[$arrayChildMiddle] . " " . $entry9[$arrayChildLast]  . "<br>" .
           "27c. SEX ". $entry9[$arrayChildGen] . "<br>" .
           "27b. DATE OF BIRTH (mm/dd/yyyy) " . $entry9[$arrayChildBirth] . "<br>" .
           "27d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry9[$birthCity] . " " . $entry9[$birthRegion] . " " . $entry9[$birthCountry] . "<br>" .
           "27e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry9[$priorFirst] . " " . $entry9[$priorLast] ."<br>" 


;

           
          
}else if ($childrenAmount === 31){
   echo "19a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry[$arrayChildFirst] . " " . $entry[$arrayChildMiddle] . " " . $entry[$arrayChildLast]  . "<br>" .
           "19c. SEX ". $entry[$arrayChildGen] . "<br>" .
           "19b. DATE OF BIRTH (mm/dd/yyyy) " . $entry[$arrayChildBirth] . "<br>" .
           "19d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry[$birthCity] . " " . $entry[$birthRegion] . " " . $entry[$birthCountry] . "<br>" .
           "19e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry[$priorFirst] . " " . $entry[$priorLast] ."<br>" .


        "20a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry2[$arrayChildFirst] . " " . $entry2[$arrayChildMiddle] . " " . $entry2[$arrayChildLast]  . "<br>" .
           "20c. SEX ". $entry2[$arrayChildGen] . "<br>" .
           "20b. DATE OF BIRTH (mm/dd/yyyy) " . $entry2[$arrayChildBirth] . "<br>" .
           "20d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry2[$birthCity] . " " . $entry2[$birthRegion] . " " . $entry2[$birthCountry] . "<br>" .
           "20e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry2[$priorFirst] . " " . $entry2[$priorLast] ."<br>" .

        
        "21a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry3[$arrayChildFirst] . " " . $entry3[$arrayChildMiddle] . " " . $entry3[$arrayChildLast]  . "<br>" .
           "21c. SEX ". $entry3[$arrayChildGen] . "<br>" .
           "21b. DATE OF BIRTH (mm/dd/yyyy) " . $entry3[$arrayChildBirth] . "<br>" .
           "21d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry3[$birthCity] . " " . $entry3[$birthRegion] . " " . $entry3[$birthCountry] . "<br>" .
           "21e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry3[$priorFirst] . " " . $entry3[$priorLast] ."<br>" .


        "22a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry4[$arrayChildFirst] . " " . $entry4[$arrayChildMiddle] . " " . $entry4[$arrayChildLast]  . "<br>" .
           "22c. SEX ". $entry4[$arrayChildGen] . "<br>" .
           "22b. DATE OF BIRTH (mm/dd/yyyy) " . $entry4[$arrayChildBirth] . "<br>" .
           "22d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry4[$birthCity] . " " . $entry4[$birthRegion] . " " . $entry4[$birthCountry] . "<br>" .
           "22e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry4[$priorFirst] . " " . $entry4[$priorLast] ."<br>" .

        "23a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry5[$arrayChildFirst] . " " . $entry5[$arrayChildMiddle] . " " . $entry5[$arrayChildLast]  . "<br>" .
           "23c. SEX ". $entry5[$arrayChildGen] . "<br>" .
           "23b. DATE OF BIRTH (mm/dd/yyyy) " . $entry5[$arrayChildBirth] . "<br>" .
           "23d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry5[$birthCity] . " " . $entry5[$birthRegion] . " " . $entry5[$birthCountry] . "<br>" .
           "23e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry5[$priorFirst] . " " . $entry5[$priorLast] ."<br>" .

        "24a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry6[$arrayChildFirst] . " " . $entry6[$arrayChildMiddle] . " " . $entry6[$arrayChildLast]  . "<br>" .
           "24c. SEX ". $entry6[$arrayChildGen] . "<br>" .
           "24b. DATE OF BIRTH (mm/dd/yyyy) " . $entry6[$arrayChildBirth] . "<br>" .
           "24d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry6[$birthCity] . " " . $entry6[$birthRegion] . " " . $entry6[$birthCountry] . "<br>" .
           "24e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry6[$priorFirst] . " " . $entry6[$priorLast] ."<br>" .

        "25a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry7[$arrayChildFirst] . " " . $entry7[$arrayChildMiddle] . " " . $entry7[$arrayChildLast]  . "<br>" .
           "25c. SEX ". $entry7[$arrayChildGen] . "<br>" .
           "25b. DATE OF BIRTH (mm/dd/yyyy) " . $entry7[$arrayChildBirth] . "<br>" .
           "25d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry7[$birthCity] . " " . $entry7[$birthRegion] . " " . $entry7[$birthCountry] . "<br>" .
           "25e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry7[$priorFirst] . " " . $entry7[$priorLast] ."<br>" .

        "26a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry8[$arrayChildFirst] . " " . $entry8[$arrayChildMiddle] . " " . $entry8[$arrayChildLast]  . "<br>" .
           "26c. SEX ". $entry8[$arrayChildGen] . "<br>" .
           "26b. DATE OF BIRTH (mm/dd/yyyy) " . $entry8[$arrayChildBirth] . "<br>" .
           "26d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry8[$birthCity] . " " . $entry8[$birthRegion] . " " . $entry8[$birthCountry] . "<br>" .
           "26e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry8[$priorFirst] . " " . $entry8[$priorLast] ."<br>" 

;

          

           
}else if ($childrenAmount === 27){
echo "19a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry[$arrayChildFirst] . " " . $entry[$arrayChildMiddle] . " " . $entry[$arrayChildLast]  . "<br>" .
           "19c. SEX ". $entry[$arrayChildGen] . "<br>" .
           "19b. DATE OF BIRTH (mm/dd/yyyy) " . $entry[$arrayChildBirth] . "<br>" .
           "19d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry[$birthCity] . " " . $entry[$birthRegion] . " " . $entry[$birthCountry] . "<br>" .
           "19e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry[$priorFirst] . " " . $entry[$priorLast] ."<br>" .


        "20a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry2[$arrayChildFirst] . " " . $entry2[$arrayChildMiddle] . " " . $entry2[$arrayChildLast]  . "<br>" .
           "20c. SEX ". $entry2[$arrayChildGen] . "<br>" .
           "20b. DATE OF BIRTH (mm/dd/yyyy) " . $entry2[$arrayChildBirth] . "<br>" .
           "20d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry2[$birthCity] . " " . $entry2[$birthRegion] . " " . $entry2[$birthCountry] . "<br>" .
           "20e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry2[$priorFirst] . " " . $entry2[$priorLast] ."<br>" .

        
        "21a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry3[$arrayChildFirst] . " " . $entry3[$arrayChildMiddle] . " " . $entry3[$arrayChildLast]  . "<br>" .
           "21c. SEX ". $entry3[$arrayChildGen] . "<br>" .
           "21b. DATE OF BIRTH (mm/dd/yyyy) " . $entry3[$arrayChildBirth] . "<br>" .
           "21d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry3[$birthCity] . " " . $entry3[$birthRegion] . " " . $entry3[$birthCountry] . "<br>" .
           "21e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry3[$priorFirst] . " " . $entry3[$priorLast] ."<br>" .


        "22a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry4[$arrayChildFirst] . " " . $entry4[$arrayChildMiddle] . " " . $entry4[$arrayChildLast]  . "<br>" .
           "22c. SEX ". $entry4[$arrayChildGen] . "<br>" .
           "22b. DATE OF BIRTH (mm/dd/yyyy) " . $entry4[$arrayChildBirth] . "<br>" .
           "22d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry4[$birthCity] . " " . $entry4[$birthRegion] . " " . $entry4[$birthCountry] . "<br>" .
           "22e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry4[$priorFirst] . " " . $entry4[$priorLast] ."<br>" .

        "23a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry5[$arrayChildFirst] . " " . $entry5[$arrayChildMiddle] . " " . $entry5[$arrayChildLast]  . "<br>" .
           "23c. SEX ". $entry5[$arrayChildGen] . "<br>" .
           "23b. DATE OF BIRTH (mm/dd/yyyy) " . $entry5[$arrayChildBirth] . "<br>" .
           "23d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry5[$birthCity] . " " . $entry5[$birthRegion] . " " . $entry5[$birthCountry] . "<br>" .
           "23e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry5[$priorFirst] . " " . $entry5[$priorLast] ."<br>" .

        "24a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry6[$arrayChildFirst] . " " . $entry6[$arrayChildMiddle] . " " . $entry6[$arrayChildLast]  . "<br>" .
           "24c. SEX ". $entry6[$arrayChildGen] . "<br>" .
           "24b. DATE OF BIRTH (mm/dd/yyyy) " . $entry6[$arrayChildBirth] . "<br>" .
           "24d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry6[$birthCity] . " " . $entry6[$birthRegion] . " " . $entry6[$birthCountry] . "<br>" .
           "24e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry6[$priorFirst] . " " . $entry6[$priorLast] ."<br>" .

        "25a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry7[$arrayChildFirst] . " " . $entry7[$arrayChildMiddle] . " " . $entry7[$arrayChildLast]  . "<br>" .
           "25c. SEX ". $entry7[$arrayChildGen] . "<br>" .
           "25b. DATE OF BIRTH (mm/dd/yyyy) " . $entry7[$arrayChildBirth] . "<br>" .
           "25d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry7[$birthCity] . " " . $entry7[$birthRegion] . " " . $entry7[$birthCountry] . "<br>" .
           "25e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry7[$priorFirst] . " " . $entry7[$priorLast] ."<br>" 
;


        

}else if ($childrenAmount === 23){
echo "19a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry[$arrayChildFirst] . " " . $entry[$arrayChildMiddle] . " " . $entry[$arrayChildLast]  . "<br>" .
           "19c. SEX ". $entry[$arrayChildGen] . "<br>" .
           "19b. DATE OF BIRTH (mm/dd/yyyy) " . $entry[$arrayChildBirth] . "<br>" .
           "19d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry[$birthCity] . " " . $entry[$birthRegion] . " " . $entry[$birthCountry] . "<br>" .
           "19e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry[$priorFirst] . " " . $entry[$priorLast] ."<br>" .


        "20a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry2[$arrayChildFirst] . " " . $entry2[$arrayChildMiddle] . " " . $entry2[$arrayChildLast]  . "<br>" .
           "20c. SEX ". $entry2[$arrayChildGen] . "<br>" .
           "20b. DATE OF BIRTH (mm/dd/yyyy) " . $entry2[$arrayChildBirth] . "<br>" .
           "20d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry2[$birthCity] . " " . $entry2[$birthRegion] . " " . $entry2[$birthCountry] . "<br>" .
           "20e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry2[$priorFirst] . " " . $entry2[$priorLast] ."<br>" .

        
        "21a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry3[$arrayChildFirst] . " " . $entry3[$arrayChildMiddle] . " " . $entry3[$arrayChildLast]  . "<br>" .
           "21c. SEX ". $entry3[$arrayChildGen] . "<br>" .
           "21b. DATE OF BIRTH (mm/dd/yyyy) " . $entry3[$arrayChildBirth] . "<br>" .
           "21d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry3[$birthCity] . " " . $entry3[$birthRegion] . " " . $entry3[$birthCountry] . "<br>" .
           "21e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry3[$priorFirst] . " " . $entry3[$priorLast] ."<br>" .


        "22a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry4[$arrayChildFirst] . " " . $entry4[$arrayChildMiddle] . " " . $entry4[$arrayChildLast]  . "<br>" .
           "22c. SEX ". $entry4[$arrayChildGen] . "<br>" .
           "22b. DATE OF BIRTH (mm/dd/yyyy) " . $entry4[$arrayChildBirth] . "<br>" .
           "22d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry4[$birthCity] . " " . $entry4[$birthRegion] . " " . $entry4[$birthCountry] . "<br>" .
           "22e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry4[$priorFirst] . " " . $entry4[$priorLast] ."<br>" .

        "23a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry5[$arrayChildFirst] . " " . $entry5[$arrayChildMiddle] . " " . $entry5[$arrayChildLast]  . "<br>" .
           "23c. SEX ". $entry5[$arrayChildGen] . "<br>" .
           "23b. DATE OF BIRTH (mm/dd/yyyy) " . $entry5[$arrayChildBirth] . "<br>" .
           "23d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry5[$birthCity] . " " . $entry5[$birthRegion] . " " . $entry5[$birthCountry] . "<br>" .
           "23e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry5[$priorFirst] . " " . $entry5[$priorLast] ."<br>" .

           "24a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry6[$arrayChildFirst] . " " . $entry6[$arrayChildMiddle] . " " . $entry6[$arrayChildLast]  . "<br>" .
           "24c. SEX ". $entry6[$arrayChildGen] . "<br>" .
           "24b. DATE OF BIRTH (mm/dd/yyyy) " . $entry6[$arrayChildBirth] . "<br>" .
           "24d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry6[$birthCity] . " " . $entry6[$birthRegion] . " " . $entry6[$birthCountry] . "<br>" .
           "24e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry6[$priorFirst] . " " . $entry6[$priorLast] ."<br>" 


;

 

}else if ($childrenAmount === 19){
echo "19a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry[$arrayChildFirst] . " " . $entry[$arrayChildMiddle] . " " . $entry[$arrayChildLast]  . "<br>" .
           "19c. SEX ". $entry[$arrayChildGen] . "<br>" .
           "19b. DATE OF BIRTH (mm/dd/yyyy) " . $entry[$arrayChildBirth] . "<br>" .
           "19d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry[$birthCity] . " " . $entry[$birthRegion] . " " . $entry[$birthCountry] . "<br>" .
           "19e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry[$priorFirst] . " " . $entry[$priorLast] ."<br>" .


        "20a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry2[$arrayChildFirst] . " " . $entry2[$arrayChildMiddle] . " " . $entry2[$arrayChildLast]  . "<br>" .
           "20c. SEX ". $entry2[$arrayChildGen] . "<br>" .
           "20b. DATE OF BIRTH (mm/dd/yyyy) " . $entry2[$arrayChildBirth] . "<br>" .
           "20d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry2[$birthCity] . " " . $entry2[$birthRegion] . " " . $entry2[$birthCountry] . "<br>" .
           "20e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry2[$priorFirst] . " " . $entry2[$priorLast] ."<br>" .

        
        "21a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry3[$arrayChildFirst] . " " . $entry3[$arrayChildMiddle] . " " . $entry3[$arrayChildLast]  . "<br>" .
           "21c. SEX ". $entry3[$arrayChildGen] . "<br>" .
           "21b. DATE OF BIRTH (mm/dd/yyyy) " . $entry3[$arrayChildBirth] . "<br>" .
           "21d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry3[$birthCity] . " " . $entry3[$birthRegion] . " " . $entry3[$birthCountry] . "<br>" .
           "21e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry3[$priorFirst] . " " . $entry3[$priorLast] ."<br>" .


        "22a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry4[$arrayChildFirst] . " " . $entry4[$arrayChildMiddle] . " " . $entry4[$arrayChildLast]  . "<br>" .
           "22c. SEX ". $entry4[$arrayChildGen] . "<br>" .
           "22b. DATE OF BIRTH (mm/dd/yyyy) " . $entry4[$arrayChildBirth] . "<br>" .
           "22d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry4[$birthCity] . " " . $entry4[$birthRegion] . " " . $entry4[$birthCountry] . "<br>" .
           "22e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry4[$priorFirst] . " " . $entry4[$priorLast] ."<br>" 

 ;

          

}else if ($childrenAmount === 15){
echo "19a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry[$arrayChildFirst] . " " . $entry[$arrayChildMiddle] . " " . $entry[$arrayChildLast]  . "<br>" .
           "19c. SEX ". $entry[$arrayChildGen] . "<br>" .
           "19b. DATE OF BIRTH (mm/dd/yyyy) " . $entry[$arrayChildBirth] . "<br>" .
           "19d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry[$birthCity] . " " . $entry[$birthRegion] . " " . $entry[$birthCountry] . "<br>" .
           "19e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry[$priorFirst] . " " . $entry[$priorLast] ."<br>" .


        "20a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry2[$arrayChildFirst] . " " . $entry2[$arrayChildMiddle] . " " . $entry2[$arrayChildLast]  . "<br>" .
           "20c. SEX ". $entry2[$arrayChildGen] . "<br>" .
           "20b. DATE OF BIRTH (mm/dd/yyyy) " . $entry2[$arrayChildBirth] . "<br>" .
           "20d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry2[$birthCity] . " " . $entry2[$birthRegion] . " " . $entry2[$birthCountry] . "<br>" .
           "20e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry2[$priorFirst] . " " . $entry2[$priorLast] ."<br>" .

        
        "21a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry3[$arrayChildFirst] . " " . $entry3[$arrayChildMiddle] . " " . $entry3[$arrayChildLast]  . "<br>" .
           "21c. SEX ". $entry3[$arrayChildGen] . "<br>" .
           "21b. DATE OF BIRTH (mm/dd/yyyy) " . $entry3[$arrayChildBirth] . "<br>" .
           "21d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry3[$birthCity] . " " . $entry3[$birthRegion] . " " . $entry3[$birthCountry] . "<br>" .
           "21e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry3[$priorFirst] . " " . $entry3[$priorLast] ."<br>" .


        "22a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry4[$arrayChildFirst] . " " . $entry4[$arrayChildMiddle] . " " . $entry4[$arrayChildLast]  . "<br>" .
           "22c. SEX ". $entry4[$arrayChildGen] . "<br>" .
           "22b. DATE OF BIRTH (mm/dd/yyyy) " . $entry4[$arrayChildBirth] . "<br>" .
           "22d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry4[$birthCity] . " " . $entry4[$birthRegion] . " " . $entry4[$birthCountry] . "<br>" .
           "22e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry4[$priorFirst] . " " . $entry4[$priorLast] ."<br>" 



 ;



      

}else if ($childrenAmount === 11){
echo "19a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry[$arrayChildFirst] . " " . $entry[$arrayChildMiddle] . " " . $entry[$arrayChildLast]  . "<br>" .
           "19c. SEX ". $entry[$arrayChildGen] . "<br>" .
           "19b. DATE OF BIRTH (mm/dd/yyyy) " . $entry[$arrayChildBirth] . "<br>" .
           "19d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry[$birthCity] . " " . $entry[$birthRegion] . " " . $entry[$birthCountry] . "<br>" .
           "19e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry[$priorFirst] . " " . $entry[$priorLast] ."<br>" .


        "20a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry2[$arrayChildFirst] . " " . $entry2[$arrayChildMiddle] . " " . $entry2[$arrayChildLast]  . "<br>" .
           "20c. SEX ". $entry2[$arrayChildGen] . "<br>" .
           "20b. DATE OF BIRTH (mm/dd/yyyy) " . $entry2[$arrayChildBirth] . "<br>" .
           "20d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry2[$birthCity] . " " . $entry2[$birthRegion] . " " . $entry2[$birthCountry] . "<br>" .
           "20e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry2[$priorFirst] . " " . $entry2[$priorLast] ."<br>" .

        
        "21a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry3[$arrayChildFirst] . " " . $entry3[$arrayChildMiddle] . " " . $entry3[$arrayChildLast]  . "<br>" .
           "21c. SEX ". $entry3[$arrayChildGen] . "<br>" .
           "21b. DATE OF BIRTH (mm/dd/yyyy) " . $entry3[$arrayChildBirth] . "<br>" .
           "21d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry3[$birthCity] . " " . $entry3[$birthRegion] . " " . $entry3[$birthCountry] . "<br>" .
           "21e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry3[$priorFirst] . " " . $entry3[$priorLast] ."<br>" 


 ;
       
} else if ($childrenAmount === 7){
echo "19a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry[$arrayChildFirst] . " " . $entry[$arrayChildMiddle] . " " . $entry[$arrayChildLast]  . "<br>" .
           "19c. SEX ". $entry[$arrayChildGen] . "<br>" .
           "19b. DATE OF BIRTH (mm/dd/yyyy) " . $entry[$arrayChildBirth] . "<br>" .
           "19d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry[$birthCity] . " " . $entry[$birthRegion] . " " . $entry[$birthCountry] . "<br>" .
           "19e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry[$priorFirst] . " " . $entry[$priorLast] ."<br>" .


        "20a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry2[$arrayChildFirst] . " " . $entry2[$arrayChildMiddle] . " " . $entry2[$arrayChildLast]  . "<br>" .
           "20c. SEX ". $entry2[$arrayChildGen] . "<br>" .
           "20b. DATE OF BIRTH (mm/dd/yyyy) " . $entry2[$arrayChildBirth] . "<br>" .
           "20d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry2[$birthCity] . " " . $entry2[$birthRegion] . " " . $entry2[$birthCountry] . "<br>" .
           "20e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry2[$priorFirst] . " " . $entry2[$priorLast] ."<br>" 

;

}else if ($childrenAmount === 3){
echo "19a. CHILD CURRENT NAME (FIRST MIDDLE LAST SUFFIX) " . $entry[$arrayChildFirst] . " " . $entry[$arrayChildMiddle] . " " . $entry[$arrayChildLast]  . "<br>" .
           "19c. SEX ". $entry[$arrayChildGen] . "<br>" .
           "19b. DATE OF BIRTH (mm/dd/yyyy) " . $entry[$arrayChildBirth] . "<br>" .
           "19d. BIRTHPLACE (CITY, COUNTY AND STATE)" . $entry[$birthCity] . " " . $entry[$birthRegion] . " " . $entry[$birthCountry] . "<br>" .
           "19e. PRIOR NAME OF CHILD (FIRST MIDDLE LAST SUFFIX)- IF APPLICABLE" . $entry[$priorFirst] . " " . $entry[$priorLast] ."<br>" 

 ;
}
else if ($childrenAmount === 0){
    echo  "\n There are no children stated.";

}?>
</div>

<div class = "title"><br>Instructions for Completing the Suit Affecting Parent Child Relationship Form 
    </div>
<div class = "headinger"> GENERAL REQUIREMENT 
    </div>

<div class = "paragraphinfo">  All divorces/annulments (with or without children) and all suits affecting the parent-child relationship must be reported through the clerk of the court to the State Vital Statistics Unit (VSU). 
<br><br>Consolidated reporting by petitioners, attorneys, and the courts is designed to make mandatory reporting more efficient, timely, and improve the quality of reporting. However, this reporting system is only as good or timely as you make it; therefore, your attention in completing and filing this report is critical. 
<br><br>
Legal basis for this reporting is contained in Health and Safety Code $194.002 and Texas Family Code $$108.001-002 and 108.004.
<br><br>For information concerning reporting or questions about this form, contact field services at <u>fieldservices@dshs.texas.gov</u> or by phone at 512 776-3010. 
    </div>
<div class = "headinger"><br>The VSU-165 form must be printed double-sided (one sheet not two). 
    </div>

<div class = "paragraphinfo"><br>For information on the court of continuing jurisdiction of a child, contact VSU at (888) 963-7111 ext. 2529. Inquiries should be addressed to VSU, 1100 West 49th Street, Austin, Texas, 78756-3191; inquiries may also be faxed to (512) 776-7164. 
    </div>

<div class = "headinger">SECTION 1 GENERAL INFORMATION (REQUIRED) 
    </div>
<div class = "paragraphinfo">This section must be completed for each report filed. 
    <br><li>1a - d. Enter the required information to identify the court proceeding. </li>
    <br><li>2. Check the type of suit being reported. This determines also which sections of the form must be completed. If more than one type of order applies, check all that apply. Transfers from one jurisdiction to another must be reported in this section (if court number is unknown, specify �unknown").</li>
    <br><li>3a - c. Complete the attorney information to assist in questions or follow up. If case was pro se, please enter the information of the person completing this form. </li>

    </div>

<div class = "headinger">SECTION 2 (IF APPLICABLE) REPORT OF DIVORCE OR ANNULMENT OF MARRIAGE 
    </div>
<div class = "paragraphinfo">All divorces/annulments must be reported, even if there were no minor children. All information is required. 
    <br><li>4-9. Report the Petitioner's information including maiden name (if applicable).</li>
    <br><li>10-15. Report the Respondent's information, including maiden name (if applicable). </li>
    <br><li>16. Report the number of minor children affected by this divorce; if none, record "0." This number must correspond to the listing of children in Section 3. </li>
    <br>17-18. Enter the date and place of the marriage being dissolved. </li>

    </div>

<div class = "headinger">SECTION 3 (IF APPLICABLE) CHILDREN AFFECTED BY THIS SUIT 
    </div>

<div class = "paragraphinfo">Every child affected by the suit being reported must be listed, and all items concerning that child must be completed. If more than three children are affected, check the "additional children listed on back of form" box, and continue to list the additional children. If more than 6 children complete section 3 on another form, label it "continuation" and attached the continuation form to the original form. 
    </div>

