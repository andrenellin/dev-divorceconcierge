<meta charset="UTF-8">
<?php

/*
 * Template Name: Special Warranty Deed
 * Version: 1.0.1
 * Description: A print-friendly template displaying the Special Warranty Deed
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

<!-- HEADER / FOOTER -->
<htmlpagefooter name="MyCustomFooter">
  <table class="footer">
    <tr class="paragraph">
      <td class="footer_left_half"><span class="bs_bold bs_text_small">SPECIAL WARRANTY DEED</span></td>
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
$dateOfSign = $form_data['field'][1]; //Date Signed
$spouseConveyingProperty = $form_data['field'][2]; //Which Spouse is Conveying the Property?
$spouseConveyingAddress = $form_data['field'][4]; //Conveying Spouse Mailing Address
$partiesSignedOriginal = $form_data['field'][6]; //Which Parties Signed the Original Real Estate Lien Note on the Property
$originalPrincipalSum = $form_data['field'][8]; //What is the Original Principal Sum of the Note on the Property?
$originalPrincipalSumText  = $form_data['field'][52]; 
$dateOnOriginalNote = $form_data['field'][10]; //What is the Date on the Original Note?
$dateOfDeedofOriginalDeed = $form_data['field'][14]; //Date of Original Deed
$dateOfDeedofTrust = $form_data['field'][18]; //Date of Deed of Trust
$nameOfPayeeUnderOriginalNote = $form_data['field'][29]; //What is the Name of the Payee Under the Original Note?
$nameOfLender = $form_data['field'][30]; //Name of Lender for the Original Note
$nameOfSpouseThatSignedWarrantyDeed = $form_data['field'][20]; //Names of the Spouses that Signed the Warranty Deed
$nameOfTrustee = $form_data['field'][22]; //Name of Trustee of the Original Deed of Trust Signing the Property
$countyWhereDecreeSigned = $form_data['field'][24]; //County where Decree is Signed
$countyNotarised = $form_data['field'][26]; //County where Special Warranty Deed will be Notarized
$recordDeedSent = $form_data['field'][28]; //Where would you like the Recorded Deed sent?

//Needs District, County and Cause number from other form

//Questions for Deed of trust to Secure Assumption

$spouseReceiving = $form_data['field'][32];
$spouseReceivingAddress = $form_data['field'][34];
$trusteeDeedofTrust = $form_data['field'][36];
$trusteeMailingAddress = $form_data['field'][38];
$priorLiens = $form_data['field'][42];
$liensNumber = $form_data['field'][43];

$condIfChildren = $form_data['field'][44];

//script vairables
$petitioner = $form_data['field'][49];
$respondentLower = $form_data['field'][50];
$respondent = strtoupper(" ", $respondentLower);
$causeNo = $form_data['field'][46];
$district = $form_data['field'][47];
$county = $form_data['field'][48];
$children = $form_data['field'][51];




/* VARIABLES END
 *********************************************************************************************************** */
?>
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!-- PAGE 1 -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

<bookmark content="Special Warranty Deed" />

<div class = "title"> Special Warranty Deed

    </div>

<div class = "paragraph text_align_left">Date: <?php echo $dateOfSign ?><br>
    </div>

<div class = "paragraph text_align_left"><br>Grantor: <?php echo $spouseConveyingProperty?><br>
    </div>

<div class = "paragraph text_align_left"><br>Grantor Mailing Address: <?php echo implode(" ", $spouseConveyingAddress)?><br>
    </div>

<div class = "paragraph text_align_left"><br>Grantee: <?php echo $spouseReceiving ?><br>
    </div>

<div class = "paragraph text_align_left"><br>Grantee's Mailing Address: <?php echo implode(" ", $spouseReceivingAddress)?><br>
    </div> 

<div class = "paragraph text_align_left"><br>Consideration: 
    </div>
    <div class = "indent-paragraph">
    <?php 

    if($condIfChildren == 'Yes' && $partiesSignedOriginal == 'Both'){

    
echo "The division of property ordered by the " . $district ." COURT of " . $county . " County, Texas, in Cause No. " . $causeNo . ", styled 'IN THE MATTER OF THE MARRIAGE OF ". $petitioner . " AND " . $respondent . " AND IN THE INTEREST OF ". $children . ", and ten dollars and other valuable consideration paid by Grantee, and Grantee's assumption of the unpaid principal and earned interest on the note in the original principal sum of " . $originalPrincipalSumText . " dollars (".$originalPrincipalSum.") dated " . $dateOnOriginalNote .". , executed by " . $petitioner . " and " . $respondent . ", And payable to the order of " .  $nameOfPayeeUnderOriginalNote .". The note is secured by a vendor's lien retained in a deed dated " . $dateOfDeedofTrust . ", from " . $petitioner .  " and ". $respondent . " to " . $nameOfPayeeUnderOriginalNote . ", and additionally secured by a deed of trust dated " . $dateOfDeedofTrust .", from " . $petitioner .  " and " . $respondent . " to " . $trusteeDeedofTrust . ", Trustee, recorded in the official public records of real property of " .$countyWhereDecreeSigned . " County, Texas.  Grantee agrees to indemnify and hold Grantor harmless from payment of the note and from performance of Grantor's obligations specified in the instruments securing payment of the note.";
   
}

if($condIfChildren == 'Yes' && $partiesSignedOriginal == 'Petitioner'){

    
echo "The division of property ordered by the " . $district ." COURT of " . $county . " County, Texas, in Cause No. " . $causeNo . ", styled 'IN THE MATTER OF THE MARRIAGE OF ". $petitioner . " AND " . $respondent . " AND IN THE INTEREST OF " .$children . ", and ten dollars and other valuable consideration paid by Grantee, and Grantee's assumption of the unpaid principal and earned interest on the note in the original principal sum of " . $originalPrincipalSumText . " dollars (".$originalPrincipalSum.") dated " . $dateOnOriginalNote .". , executed by " . $petitioner .", And payable to the order of " .  $nameOfPayeeUnderOriginalNote .". The note is secured by a vendor's lien retained in a deed dated " . $dateOfDeedofTrust . ", from " . $petitioner . " to " . $nameOfPayeeUnderOriginalNote . ", and additionally secured by a deed of trust dated " . $dateOfDeedofTrust .", from " . $petitioner . " to " . $trusteeDeedofTrust . ", Trustee, recorded in the official public records of real property of " .$countyWhereDecreeSigned . " County, Texas.  Grantee agrees to indemnify and hold Grantor harmless from payment of the note and from performance of Grantor's obligations specified in the instruments securing payment of the note.";
   
}

if($condIfChildren == 'Yes' && $partiesSignedOriginal == 'Respondent'){

    
echo "The division of property ordered by the " . $district ." COURT of " . $county . " County, Texas, in Cause No. " . $causeNo . ", styled 'IN THE MATTER OF THE MARRIAGE OF ". $petitioner . " AND " . $respondent . " AND IN THE INTEREST OF " .$children . ", and ten dollars and other valuable consideration paid by Grantee, and Grantee's assumption of the unpaid principal and earned interest on the note in the original principal sum of " . $originalPrincipalSumText . " dollars (".$originalPrincipalSum.") dated " . $dateOnOriginalNote .". , executed by " . $respondent . ", And payable to the order of " .  $nameOfPayeeUnderOriginalNote .". The note is secured by a vendor's lien retained in a deed dated " . $dateOfDeedofTrust . ", from " . $respondent . " to " . $nameOfPayeeUnderOriginalNote . ", and additionally secured by a deed of trust dated " . $dateOfDeedofTrust .", from " . $respondent . " to " . $trusteeDeedofTrust . ", Trustee, recorded in the official public records of real property of " .$countyWhereDecreeSigned . " County, Texas.  Grantee agrees to indemnify and hold Grantor harmless from payment of the note and from performance of Grantor's obligations specified in the instruments securing payment of the note.";
   
}

if($condIfChildren == 'No' && $partiesSignedOriginal == 'Both'){

    
echo "The division of property ordered by the " . $district ." COURT of " . $county . " County, Texas, in Cause No. " . $causeNo . ", styled 'IN THE MATTER OF THE MARRIAGE OF " .$petitioner . " AND " . $respondent . ", and ten dollars and other valuable consideration paid by Grantee, and Grantee's assumption of the unpaid principal and earned interest on the note in the original principal sum of " . $originalPrincipalSumText . " dollars (".$originalPrincipalSum.") dated " . $dateOnOriginalNote . ". , executed by " . $petitioner . " and " . $respondent . ", And payable to the order of " .  $nameOfPayeeUnderOriginalNote .". The note is secured by a vendor's lien retained in a deed dated " . $dateOfDeedofTrust . ", from " . $petitioner .  " and ". $respondent . " to " . $nameOfPayeeUnderOriginalNote . ", and additionally secured by a deed of trust dated " . $dateOfDeedofTrust .", from " . $petitioner .  " and " . $respondent . " to " . $trusteeDeedofTrust . ", Trustee, recorded in the official public records of real property of " .$countyWhereDecreeSigned . " County, Texas.  Grantee agrees to indemnify and hold Grantor harmless from payment of the note and from performance of Grantor's obligations specified in the instruments securing payment of the note.";
   
}

if($condIfChildren == 'No' && $partiesSignedOriginal == 'Petitioner'){

    
echo "The division of property ordered by the " . $district ." COURT of " . $county . " County, Texas, in Cause No. " . $causeNo . ", styled 'IN THE MATTER OF THE MARRIAGE OF ". $petitioner . " AND " . $respondent . ", and ten dollars and other valuable consideration paid by Grantee, and Grantee's assumption of the unpaid principal and earned interest on the note in the original principal sum of " . $originalPrincipalSumText . " dollars (".$originalPrincipalSum.") dated " . $dateOnOriginalNote . ". , executed by " . $petitioner. ", And payable to the order of " .  $nameOfPayeeUnderOriginalNote .". The note is secured by a vendor's lien retained in a deed dated " . $dateOfDeedofTrust . ", from " . $petitioner . " to " . $nameOfPayeeUnderOriginalNote . ", and additionally secured by a deed of trust dated " . $dateOfDeedofTrust .", from " . $petitioner . " to " . $trusteeDeedofTrust . ", Trustee, recorded in the official public records of real property of " .$countyWhereDecreeSigned . " County, Texas.  Grantee agrees to indemnify and hold Grantor harmless from payment of the note and from performance of Grantor's obligations specified in the instruments securing payment of the note.";
   
}

if($condIfChildren == 'No' && $partiesSignedOriginal == 'Respondent'){

    
echo "The division of property ordered by the " . $district ." COURT of " . $county . " County, Texas, in Cause No. " . $causeNo . ", styled 'IN THE MATTER OF THE MARRIAGE OF ". $petitioner . " AND " . $respondent . ", and ten dollars and other valuable consideration paid by Grantee, and Grantee's assumption of the unpaid principal and earned interest on the note in the original principal sum of " . $originalPrincipalSumText . " dollars (".$originalPrincipalSum.") dated " . $dateOnOriginalNote . ". , executed by " . $respondent . ", And payable to the order of " .  $nameOfPayeeUnderOriginalNote .". The note is secured by a vendor's lien retained in a deed dated " . $dateOfDeedofTrust . ", from " . $respondent . " to " . $nameOfPayeeUnderOriginalNote . ", and additionally secured by a deed of trust dated " . $dateOfDeedofTrust .", from " . $respondent . " to " . $trusteeDeedofTrust . ", Trustee, recorded in the official public records of real property of " .$countyWhereDecreeSigned . " County, Texas.  Grantee agrees to indemnify and hold Grantor harmless from payment of the note and from performance of Grantor's obligations specified in the instruments securing payment of the note.";
   
}
?>
 </div>


 <div class = "paragraph"> <br> Property (Including any Improvements):
    </div>
    <div class = "paragraph"> Legal Description
</div>

<div class = "paragraph"> <br> Reservations from Conveyance and Exceptions to Conveyance and Warranty:
    </div>
<div class = "indent-paragraph"> This deed is subject to all easements, restrictions, conditions, covenants, and other instruments of record.
    </div>  

<div class = "paragraph"> <br> Conveyance:
    </div>
<div class = "indent-paragraph">Grantor, for the consideration and subject to the reservations from conveyance and exceptions to conveyance and warranty, grants, sells, and conveys to Grantee all of Grantor's interest in the property, together with all and singular the rights and appurtenances thereto in any way belonging, to have and hold it to Grantee and Grantee's heirs, successors, and assigns forever.  Grantor binds Grantor and Grantor's heirs and successors to warrant and forever defend all and singular the property to Grantee and Grantee's heirs, successors, and assigns against every person whomsoever lawfully claiming or to claim the same or any part thereof when the claim is by, through, or under Grantor but not otherwise, except as to the reservations from conveyance and exceptions to conveyance and warranty.
    </div>
<div class = "indent-paragraph">Grantor assigns to Grantee the casualty insurance policy on the property, all utility deposits for utility services at the property, and all funds held in escrow for payment of taxes and insurance premiums.
    </div>
<div class = "paragraph text_align_center"> When the context requires, singular nouns and pronouns include the plural.
Grantee assumes all ad valorem taxes due on the property for the current year.
    </div>

<div class = "paragraph text_align_right">________________________________
    </div>
<div class = "paragraph text_align_right"><?php echo $spouseConveyingProperty?>
    </div>

<div class = "paragraph text_align_right">This instrument was prepared based on information furnished by the parties, and no independent title search has been made.
    </div>

<div class = "paragraph text_align_left"> STATE OF TEXAS
    </div>
<div class = "paragraph text_align_left"> COUNTY OF <?php $county ?>
    </div>

<div class = "indent-paragraph"> This instrument was sworn and acknowledged before me on ___________________________ by <?php if($spouseConveyingProperty == 'Petitioner'){
echo $petitioner;
}else{
    echo $respondent;
}?>.
    </div>

<div class = "paragraph text_align_right"><br>_______________________________
    </div>
<div class = "paragraph text_align_right">	
                                            Notary Public, State of Texas
    </div>

<div class = "paragraph text_align_right"> AFTER RECORDING RETURN TO: <br>
        <?php if($spouseReceiving == 'Petitioner'){
        echo $petitioner . "<br>" . 
         implode(" ", $spouseReceivingAddress);
        }else{

        echo $petitioner . "<br>" .
         implode(" ", $spouseReceivingAddress);
        }
        ?>
    </div>