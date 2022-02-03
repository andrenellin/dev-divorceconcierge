<meta charset="UTF-8">
<?php

/*
 * Template Name: Deed of Trust
 * Version: 1.0.1
 * Description: A deed of trust PDF script created 02/02/2022
 * Author: Bliksem LLC
 * Author URI: https://simplifysmallbiz.com
 * Group: 1. Development
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

.indent-paragraph-sub {
padding-left: 100px;
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
      <td class="footer_left_half"><span class="bs_bold bs_text_small">DEED OF TRUST TO SECURE ASSUMPTION </span></td>
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
    
$dateOfFiling = '02/02/2022'; //Todays date
$county = 'Colin'; //Jurisdiction
//Who is who will have to be deterimed in a form

$recipientSpouseName = 'Jim Jimothy Jones'; //relevant Tell Us About ... form
$receipientSpouseAddress = '9 Jim Jones Lane, Texas, BT21 G56'; //relevant Tell Us About ... form
$receipientCounty = 'Colin'; //relevant Tell Us About ... form

$trusteeName = 'Jim Jimothy Jones'; //relevant Tell Us About ... form
$trusteeAddress = '9 Jim Jones Lane, Texas, BT21 G56'; //relevant Tell Us About ... form
$trusteeCounty = 'Colin'; //relevant Tell Us About ... form

$conveyingSpouseName = 'Jim Jimothy Jones'; //relevant Tell Us About ... form
$conveyingSpouseAddress = '9 Jim Jones Lane, Texas, BT21 G56'; //relevant Tell Us About ... form
$conveyingSpouseCounty = 'Colin'; //relevant Tell Us About ... form

$dateOfOriginalNote = '10/01/2021'; // Jurisdiction or Today
$amountOfOriginalNote = '$3000'; //form this equates to
$spouseOne = 'Jim Jimothy Jones';//form this equates to
$spouseTwo = 'Jim Jimothy Jones';//form this equates to
$payeeName = 'Jane Janeothy Jones';//form this equates to

?>

<div class = "paragraph text_align_center"><b>Deed of Trust to Secure Assumption</b>
    </div>
    <br>
<div class = "paragraph text_align_center"><b>Basic Information</b>
    </div>

<!--- Date: ---->
<div class = "paragraph"><b>Date:</b> <?php echo $dateOfFiling ?>
    </div>

<!--- Grantor ---->
<div class = "paragraph"><b>Grantor:</b> <?php echo $recipientSpouseName ?>
    </div>
<div class = "paragraph"><b>Grantor's Mailing Address: </b>
    </div>
<div class = "indent-paragraph"><?php echo $receipientSpouseAddress ?>
    </div>
<div class = "indent-paragraph"><?php echo $receipientCounty ?> County
    </div>
<div class = "paragraph"><b>Trustee: </b><?php echo $trusteeName ?>
    </div>
<div class = "paragraph"><b>Trustee's Mailing Address: </b>
    </div>
<div class = "indent-paragraph"> <?php echo $trusteeAddress ?>
    </div>
<div class = "indent-paragraph"><?php echo $trusteeCounty?> County
    </div>
<div class = "paragraph"><b>Beneficiary: </b> <?php echo $conveyingSpouseName ?>
    </div>
<div class = "paragraph"><b>Beneficiary: </b>
    </div>
<div class = "indent-paragraph"><?php echo $conveyingSpouseAddress ?>
    </div>
<div class = "indent-paragraph"><?php echo $conveyingSpouseCounty ?> County
    </div>
<div class = "paragraph"><b>Note and Deed of Trust Assumed: </b>
    </div>
<div class = "indent-paragraph">Date: <?php echo $dateOfOriginalNote ?>
    </div>
<div class = "indent-paragraph">Original principal amount: <?php echo $amountOfOriginalNote ?>
    </div>
<div class = "indent-paragraph">Maker and Grantor: <?php echo $spouseOne . 'and' . $spouseTwo //CONDITION NEEDED, if both are signed ?> 
    </div>
<div class = "indent-paragraph">Payee and Beneficiary: <?php echo $payeeName ?>
    </div>
<div class = "indent-paragraph">Recording information:  RECORDED IN THE DEED OF TRUST RECORDS OF <?php echo $county ?> COUNTY, TEXAS
    </div>
<div class = "paragraph"><b>Property (including any improvements):</b>
    </div>
<div class = "indent-paragraph">LEGAL DESCRIPTION
    </div>
<div class = "paragraph"><b>Prior Lien: </b> None
    </div>
<div class = "paragraph"><b>Other Exceptions to Conveyance and Warranty:</b> None
    </div>
<div class = "paragraph"><b>Consideration:</b>Beneficiary has conveyed the property to Grantor, who as part of the consideration promised to pay the note assumed and to be bound by the deed of trust assumed.
    </div>
<div class = "paragraph"><b>A.	Granting Clause</b>
    </div>
<div class = "indent-paragraph">For value received and to secure Grantor's assumption, Grantor conveys the property to Trustee in trust.  Grantor warrants and agrees to defend the title to the property, subject to the other exceptions to conveyance and warranty.  If Grantor performs all the covenants of the note and deed of trust assumed and if Beneficiary has not filed a notice of advancement, a release of the deed of trust assumed will release this deed of trust to secure assumption and Beneficiary's vendor's lien.
    </div>
<div class = "paragraph"><b>B.	Grantor's Obligations</b>
    </div>
<div class = "indent-paragraph">Grantor agrees to –
    </div>
<div class = "indent-paragraph">B.1.	perform all the covenants of the Note and Deed of Trust assumed; and
    </div>
<div class = "indent-paragraph">B.2.	notify Beneficiary and Lender of any change of address.
    </div>
<div class = "paragraph"><b>C.	Beneficiary's Rights</b>
    </div>
<div class = "indent-paragraph">C.1.	Beneficiary may appoint in writing a substitute trustee, succeeding to all rights and responsibilities of Trustee.
    </div>
<div class = "indent-paragraph">C.2.	If Grantor fails to perform any of Grantor's obligations under the note assumed or deed of trust assumed, Beneficiary may perform those obligations, advance funds required, and then be reimbursed by Grantor on demand for any amounts so advanced, including attorney's fees, plus interest on those amounts from the dates of payment at the highest legal rate.  The amount to be reimbursed will be secured by this deed of trust to secure assumption.
    </div>
<div class = "indent-paragraph">C.3.	Beneficiary may file a sworn notice of such advancement in the office of the county clerk in the county in which the property is located.  The notice will detail the dates, amounts, and purposes of the amounts advanced and the legal description of the property.
    </div>
<div class = "indent-paragraph">C.4.	If Grantor fails on demand to reimburse Beneficiary for the amounts advanced and such failure continues after Beneficiary gives Grantor notice of the failure and the time within which it must be cured, to the extent required by law or by written agreement, Beneficiary may –
    </div>
<div class = "indent-paragraph-sub">a.	exercise Beneficiary's rights with respect to rent under the Texas Property Code as then in effect;
    </div>
<div class = "indent-paragraph-sub">b.	direct Trustee to foreclose this lien, in which case Beneficiary or Beneficiary's agent will cause notice of the foreclosure sale to be given as provided by the Texas Property Code as then in effect; and
    </div>
<div class = "indent-paragraph-sub">c.	purchase the property at any foreclosure sale by offering the highest bid and then have the bid credited to the amount owed to Beneficiary.
    </div>

<div class = "paragraph"><b>D.	Trustee's Rights and Duties</b>
    </div>
<div class = "indent-paragraph">If directed by Beneficiary to foreclose this lien, Trustee will –
    </div>
<div class = "indent-paragraph">D.1.	either personally or by agent give notice of the foreclosure sale as required by this deed of trust to secure assumption and the Texas Property Code as then in effect;
    </div>
<div class = "indent-paragraph">D.2.	sell and convey all or part of the property "AS IS" to the highest bidder for cash with a general warranty binding Grantor, subject to the prior lien and to the other exceptions to conveyance and warranty and without representation or warranty, express or implied, by Trustee;
    </div>
<div class = "indent-paragraph">D.3.	from the proceeds of the sale, pay, in this order –
    </div>
<div class = "indent-paragraph-sub">a.	expenses of foreclosure, including a reasonable commission to Trustee;
    </div>
<div class = "indent-paragraph-sub">b.	to Beneficiary, the full amount advanced, attorney's fees, and other charges due and unpaid;
    </div>
<div class = "indent-paragraph-sub">c.	any amounts required by law to be paid before payment to Grantor; and
    </div>
<div class = "indent-paragraph-sub">d.	to Grantor, any balance; and
    </div>
<div class = "indent-paragraph">D.4.	be indemnified, held harmless, and defended by Beneficiary against all costs, expenses, and liabilities incurred by Trustee for acting in the execution or enforcement of the trust created by this deed of trust to secure assumption, which includes all court and other costs, including attorney's fees, incurred by Trustee in defense of any action or proceeding taken against Trustee in that capacity.
    </div>
<div class = "paragraph"><b>E.	General Provisions</b>
    </div>
<div class = "indent-paragraph">E.1.	If any of the property is sold under this deed of trust to secure assumption, Grantor must immediately surrender possession to the purchaser.  If Grantor does not, Grantor will be a tenant at sufferance of the purchaser, subject to an action for forcible detainer.
    </div>
<div class = "indent-paragraph">E.2.	Recitals in any trustee's deed conveying the property will be presumed to be true.
    </div>
<div class = "indent-paragraph">E.3.	Proceeding under this deed of trust to secure assumption, filing suit for foreclosure, or pursuing any other remedy will not constitute an election of remedies.
    </div>
<div class = "indent-paragraph">E.4.	This lien will be superior to liens later created even if Beneficiary has made no advancements when later liens are created.
    </div>
<div class = "indent-paragraph">E.5.	If any portion of the advancements cannot be lawfully secured by this deed of trust to secure assumption, payments will be applied first to discharge that portion.
    </div>
<div class = "indent-paragraph">E.6.	A sale of the property under this deed of trust to secure assumption-
    </div>
<div class = "indent-paragraph-sub">a.	is subject to Grantor's continuing obligation to make all payments owing on the note assumed and to perform all obligations under the deed of trust assumed; and
    </div>
<div class = "indent-paragraph-sub">b.	does not extinguish Trustee's right to conduct subsequent sales of the property for future Grantor defaults under this deed of trust to secure assumption.
    </div>
<div class = "indent-paragraph">E.7.	Grantor collaterally assigns to Beneficiary all present and future rent from the property and its proceeds.  Grantor warrants the validity and enforceability of the assignment.  Grantor will apply all rent to payment of the note assumed and performance of the deed of trust assumed, but if the rent exceeds the amount due with respect to the note and deed of trust assumed, Grantor may retain the excess.  If a default exists in payment of the note assumed or performance of this deed of trust to secure assumption or of the deed of trust assumed, Beneficiary may exercise Beneficiary's rights with respect to rent under the Texas Property Code as then in effect.  Beneficiary neither has nor assumes any obligations as lessor or landlord with respect to any occupant of the property.  Beneficiary may exercise Beneficiary's rights and remedies under this paragraph without taking possession of the property.  Beneficiary will apply all rent collected under this paragraph as required by the Texas Property Code as then in effect.  Beneficiary is not required to act under this paragraph, and acting under this paragraph does not waive any of Beneficiary's other rights or remedies.
    </div>
<div class = "indent-paragraph">E.8.	Interest on the debt secured by this deed of trust to secure assumption will not exceed the maximum amount of nonusurious interest that may be contracted for, taken, reserved, charged, or received under law.  Any interest in excess of that maximum amount will be credited on the principal of the debt or, if that has been paid, refunded.  On any acceleration or required or permitted prepayment, any such excess will be canceled automatically as of the acceleration or prepayment or, if already paid, credited on the principal of the debt or, if the principal of the debt has been paid, refunded.  This provision overrides any conflicting provisions in this and all other instruments concerning the debt.
    </div>
<div class = "indent-paragraph">E.9.	Any action taken under this deed of trust to secure assumption will not extinguish the rights of Beneficiary to proceed against Grantor under the indemnity contained in the deed by which Grantor assumed the note and deed of trust assumed.
    </div>
<div class = "indent-paragraph">E.10.	When the context requires, singular nouns and pronouns include the plural.
    </div>
<div class = "indent-paragraph">E.11.	This deed of trust to secure assumption binds, benefits, and may be enforced by the successors in interest of all parties.
    </div>
<div class = "indent-paragraph">E.12	Grantor waives and surrenders to Beneficiary (a) Grantor's power to authorize anyone (other than Beneficiary or Grantor) to pay ad valorem taxes on the property and (b) Grantor's power to authorize a taxing entity to transfer its tax lien on the property to anyone other than Beneficiary.  Grantor agrees and declares that any authorization from Grantor to another (other than Beneficiary) to pay the taxes and transfer a tax lien on the property is void.
    </div>
<div class = "paragraph text_align_right">______________________<br> <?php echo $recipientSpouseName ?>
    </div>
<div class = "paragraph text_align_right">This instrument was prepared based on information furnished by the parties, and no independent title search has been made.
    </div>
<div class = "paragraph">STATE OF TEXAS
)
    </div>
<div class = "paragraph">COUNTY OF <?php echo $county ?>
)
    </div>
<div class = "indent-paragraph">This instrument was acknowledged before me on  ______________________  by <?php echo $recipientSpouseName ?>.
    </div>
<div class = "paragraph text_align_right">_____________________________ <br>Notary Public, State of Texas

    </div>
<div class = "indent-paragraph text_align_right"><b> AFTER RECORDING RETURN TO:  </b>  </div>
<div class = "paragraph text_align_right"><?php echo $recipientSpouseName ?>
    </div>
<div class = "paragraph text_align_right"><?php echo $receipientSpouseAddress ?>
    </div>

<!---- END OF DOCUMENT ----> 