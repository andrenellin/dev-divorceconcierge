<meta charset="UTF-8">
<?php

/*
 * Template Name: Deed of Trust
 * Version: 1.0.1
 * Description: A deed of trust PDF script created 02/02/2022
 * Author: Bliksem LLC
 * Author URI: https://simplifysmallbiz.com
 * Group:  2. Second Review
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

/* -------------------------------------------------------------------------------------------- */
/* DATABASE QUERY: Form Name */

/* Code to Query */
// $client_user_id = $form_data'misc''created_by';
// $X_form_id = 14;
// $X_search_criteria['field_filters'][] = array('key' => 'created_by', 'value' => $client_user_id);
// $X_search_criteria['status'] = 'active';
// $X_sorting = array('key' => 'id', 'direction' => 'ASC', 'is_numeric' => true);
// $X_entries = GFAPI::get_entries($X_form_id, $X_search_criteria, $X_sorting);

/* -------------------------------------------------------------------------------------------- */
/* MODEL OF OUTPUT: MASTER */

// Deed Of Trust Date of Filing

// Petitioner Full Name
$master_entries[0][96]['first'] = 'Peter'; // Petitioner Full Name
$master_entries[0][96]['middle'] = 'Paul'; // Petitioner Full Name
$master_entries[0][96]['last'] = 'Parker'; // Petitioner Full Name
// Petitioner Mailing Address Inline
$master_entries[0][106]['street'] = '321 Petitioner Mailing Str'; // Address residence
$master_entries[0][106]['street2'] = 'Apt 321'; // Address residence
$master_entries[0][106]['city'] = 'Plano'; // Address residence
$master_entries[0][106]['state'] = 'Texas'; // Address residence
$master_entries[0][106]['zip'] = '75078'; // Address residence
$master_entries[0][106]['county'] = 'Collin'; // Address residence

// Respondent Full Name
$master_entries[0][114]['first'] = 'Rebekah'; // Respondent full name
$master_entries[0][114]['middle'] = 'Rochelle'; // Respondent full name
$master_entries[0][114]['last'] = 'Parker'; // Respondent full name

// Respondent Mailing Address Inline
$master_entries[0][72]['street'] = '321 Respondent Mailing Str'; // Address residence
$master_entries[0][72]['street2'] = 'Apt 321'; // Address residence
$master_entries[0][72]['city'] = 'Prosper'; // Address residence
$master_entries[0][72]['state'] = 'Texas'; // Address residence
$master_entries[0][72]['zip'] = '75078'; // Address residence
$master_entries[0][72]['county'] = 'Denton'; // Address residence

/* -------------------------------------------------------------------------------------------- */
/* QUERY: JOINT PROPERTY */

// SECTION: GENERAL
// Deed Of Trust Date of Filing == currentdate
// Property Awarded to
$joint_property_entries[0][3001] = 'My Spouse'; // [Me, My Spouse]

// SECTION: GRANTOR
// Based on Property Awarded to. Query Master to obtain details

// SECTION: TRUSTEE
// Trustee Full Name
$joint_property_entries[0][3002]['first'] = 'Tom';
$joint_property_entries[0][3002]['middle'] = 'Theral';
$joint_property_entries[0][3002]['last'] = 'Thanus';

// Trustee Mailing Address Inline
$joint_property_entries[0][3003]['street'] = '999 Trustee Mailing Str';
$joint_property_entries[0][3003]['street2'] = 'STE 999';
$joint_property_entries[0][3003]['city'] = 'Terrell';
$joint_property_entries[0][3003]['state'] = 'Texas';
$joint_property_entries[0][3003]['zip'] = '75160';
$joint_property_entries[0][3003]['county'] = 'Kaufman';

// SECTION BENEFICIARY
// Based on Property Awarded to. Query Master to obtain details

// SECTION: NOTE OF DEED OF TRUST ASSUMED
// Date of original note
$joint_property_entries[0][3040] = '01/01/2001';
// Original Principal Amount
$joint_property_entries[0][3005] = '450000.00';
// Who is on the note [Me, My Spouse, Both]
$joint_property_entries[0][3006] = 'Both';
// Payee of Original Note [Me, My Spouse, Both]
$joint_property_entries[0][3007] = 'Both';
// Recording Information County
$joint_property_entries[0][3008] = 'Collin';

// Property Address
$joint_property_entries[0][3009]['street'] = '123 Property Str';
$joint_property_entries[0][3009]['street2'] = '';
$joint_property_entries[0][3009]['city'] = 'Plano';
$joint_property_entries[0][3009]['state'] = 'Texas';
$joint_property_entries[0][3009]['zip'] = '75093';
$joint_property_entries[0][3009]['county'] = 'Collin';

// Property Legal Description
$joint_property_entries[0][3010] = 'TRAILS OF FOSSIL CREEK PH I B LOCK GG LOT 15A';

/* -------------------------------------------------------------------------------------------- */
/* QUERY: REPEATER Property */
// Deed Of Trust Date of Filing
// Grantor [Me, My Spouse]
// Trustee
// Trustee Mailing Address
// Beneficiary [Me, My Spouse]
// Date of Original Note
// Amount of Original Note
// Signed on Note [Me, My Spouse, Both of Us]
// Get details from Master based on logic
// Payee on Original Note
// County where deed is recorded [List, Other: Other]

/* -------------------------------------------------------------------------------------------- */
/* GLOBAL VARIABLES: used throughout script. Not specific to a section */

$selectOption = 'X';
$leaveBlank = '&nbsp;';
$currentdate = date('F d, Y');

/* -------------------------------------------------------------------------------------------- */
// Petitioner Full Name
$petitionerNameFirst = strtoupper($master_entries[0][96]['first']);
$petitionerNameMiddle = strtoupper($master_entries[0][96]['middle']);
$petitionerNameLast = strtoupper($master_entries[0][96]['last']);
if ($petitionerNameMiddle == '') {
    $petitionerNameFull = $petitionerNameFirst . ' ' . $petitionerNameLast;
} else {
    $petitionerNameFull = $petitionerNameFirst . ' ' . $petitionerNameMiddle . ' ' . $petitionerNameLast;
}
/* -------------------------------------------------------------------------------------------- */
// Respondent Full Name
$respondentNameFirst = strtoupper($master_entries[0][114]['first']);
$respondentNameMiddle = strtoupper($master_entries[0][114]['middle']);
$respondentNameLast = strtoupper($master_entries[0][114]['last']);
if ($respondentNameMiddle == '') {
    $respondentNameFull = $respondentNameFirst . ' ' . $respondentNameLast;
} else {
    $respondentNameFull = $respondentNameFirst . ' ' . $respondentNameMiddle . ' ' . $respondentNameLast;
}

?>

<!-- -------------------------------------------------------------------------------------------- -->
<!-- Load PDF Styles -->
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
body,
h1,
h2,
.font_size_regular {
  font-size: 12pt;
}

body,
h1,
h2 {
  margin: 0mm;
  padding: 0mm;
  line-height: 10%;
}

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


/* GENERAL */
.bs_spacer {
  height: 5mm;
}

.bs_text_align_right {
  text-align: right;
}

.bs_text_bold {
  font-weight: bold;
}

.bs_text_italic {
  font-style: italic;
}

.bs_text_small {
  font-size: 10pt;
}

.indent_paragraph {
  text-indent: 10.5mm;
  /* line-height: 230%; */
}

.indent_indent_block {
  margin-left: 21mm;
}

ol.alphalowercase {
  list-style-type: lower-alpha;
}

.paragraph {
  line-height: 230%;
}

.text_align_center {
  text-align: center;
}




/* TABLES */
.table_cell_top_line {
  border-top: 1px solid;
}


.table_footer_col_1_2 {
  width: 79%;
}

.table_footer_col_2_2 {
  width: 20%;
}

.table_beneficiary_sign_col_1_1,
.table_beneficiary_sign_col_1_2,
.table_notary_sign_col_1_2,
.table_notary_sign_col_2_2,
.table_return_to_col_1_2,
.table_return_to_col_2_2 {
  width: 50%;
}


.table_signature_state_col_1_3,
.table_signature_state_col_3_3 {
  width: 45%;
}

.table_signature_state_col_2_3 {
  width: 10%;
}
</style>


<!-- -------------------------------------------------------------------------------------------- -->
<!-- BEGIN BODY OUTPUT -->

<body>



  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- HEADER / FOOTER -->
  <!-- Variables: NONE -->
  <!-- Output -->
  <htmlpagefooter name="MyCustomFooter">
    <table class="footer">
      <tr class="paragraph">
        <td class="table_footer_col_1_2"><span class="bs_bold bs_text_small">DEED OF TRUST TO SECURE ASSUMPTION </span>
        </td>
        <td class="table_footer_col_2_2 bs_text_align_right"><span class="bs_bold bs_text_small">PAGE {PAGENO}</span>
        </td>
      </tr>
    </table>
  </htmlpagefooter>
  <htmlpagefooter name="MyFooterStandingOrder">
  </htmlpagefooter>

  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- BOOKMARK: Deed of Trust to Secure Assumption -->
  <!-- Variables:NONE -->
  <!-- Output -->
  <bookmark content="Deed of Trust to Secure Assumption" />

  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- TITLE -->
  <!-- Variables -->

  <?php
//   Date of Filing
$dateOfFiling = $currentdate; //Todays date Always long form
?>
  <!-- Output -->
  <h1 class="paragraph text_align_center bs_text_bold">Deed of Trust to Secure Assumption
  </h1>
  <br>
  <h2 class="paragraph text_align_center bs_text_bold"><span class="bs_text_bold">Basic Information</span>
  </h2>
  <!--- Date of filing: ---->
  <div class="paragraph"><span class="bs_text_bold">Date: </span> <?php echo strtoupper($dateOfFiling) ?>
  </div>

  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- GRANTOR / BENEFICIARY -->
  <!-- Get Variables and use logic to determine Grantor and Benefiary details -->
  <?php

$awardedTo = $joint_property_entries[0][3001];

// If Awarded to == Me, Grantor is Respondent, Beneficiary is Petitioner
if ($awardedTo == 'Me') {
    // Grantor Name Full
    $grantorFirstName = $master_entries[0][114]['first'];
    $grantorMiddleName = $master_entries[0][114]['middle'];
    $grantorLastName = $master_entries[0][114]['last'];
    // Grantor  Mailing Address
    $grantor_address_street_1 = $master_entries[0][72]['street'];
    $grantor_address_street_2 = $master_entries[0][72]['street2'];
    $grantor_address_city = $master_entries[0][72]['city'];
    $grantor_address_state = $master_entries[0][72]['state'];
    $grantor_address_zip = $master_entries[0][72]['zip'];

    // Grantor County
    $grantorAddressCounty = $master_entries[0][72]['county'];

    // Beneficiary Name Full
    $beneficiaryFirstName = $master_entries[0][96]['first'];
    $beneficiaryMiddleName = $master_entries[0][96]['middle'];
    $beneficiaryLastName = $master_entries[0][96]['last'];
    // Beneficiary Mailing Address
    $beneficiary_address_street_1 = $master_entries[0][106]['street'];
    $beneficiary_address_street_2 = $master_entries[0][106]['street2'];
    $beneficiary_address_city = $master_entries[0][106]['city'];
    $beneficiary_address_state = $master_entries[0][106]['state'];
    $beneficiary_address_zip = $master_entries[0][106]['zip'];
    // Beneficiary County
    $beneficiaryAddressCounty = $master_entries[0][106]['county'];

} else {
    // If Awarded to != Me, Grantor is Petitioner, beneficiary is Respondent
    // Grantor Name
    $grantorFirstName = $master_entries[0][96]['first'];
    $grantorMiddleName = $master_entries[0][96]['middle'];
    $grantorLastName = $master_entries[0][96]['last'];
    // Grantor Address
    $grantor_address_street_1 = $master_entries[0][106]['street'];
    $grantor_address_street_2 = $master_entries[0][106]['street2'];
    $grantor_address_city = $master_entries[0][106]['city'];
    $grantor_address_state = $master_entries[0][106]['state'];
    $grantor_address_zip = $master_entries[0][106]['zip'];
    // Grantor County
    $grantorAddressCounty = $master_entries[0][106]['county'];

    // Beneficiary Name
    $beneficiaryFirstName = $master_entries[0][114]['first'];
    $beneficiaryMiddleName = $master_entries[0][114]['middle'];
    $beneficiaryLastName = $master_entries[0][114]['last'];
    // Beneficiary Address
    $beneficiary_address_street_1 = $master_entries[0][72]['street'];
    $beneficiary_address_street_2 = $master_entries[0][72]['street2'];
    $beneficiary_address_city = $master_entries[0][72]['city'];
    $beneficiary_address_state = $master_entries[0][72]['state'];
    $beneficiary_address_zip = $master_entries[0][72]['zip'];
    // Beneficiary County
    $beneficiaryAddressCounty = $master_entries[0][72]['county'];

}

?>

  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- GRANTOR -->
  <!-- Variables: Previous Section -->
  <?php
// Grantor Name Full
if ($grantorMiddleName == '') {
    $grantorNameFull = $grantorFirstName . ' ' . $grantorLastName;
} else {
    $grantorNameFull = $grantorFirstName . ' ' . $grantorMiddleName . ' ' . $grantorLastName;
}
// Grantor Mailing Address Inline
if ($grantor_address_street_2 == '') {
    $grantorAddressInline = $grantor_address_street_1 . ', ' . $grantor_address_city . ', ' . $grantor_address_state . ', ' . $grantor_address_zip;
} else {
    $grantorAddressInline = $grantor_address_street_1 . ', ' . $grantor_address_street_2 . ', ' . $grantor_address_city . ', ' . $grantor_address_state . ', ' . $grantor_address_zip;
}
// Grantor County: Obtained in previous section
?>
  <!-- Output: -->
  <!-- Grantor Spouse Full Name -->
  <div class="paragraph"><span class="bs_text_bold">Grantor:</span> <?php echo strtoupper($grantorNameFull) ?>
  </div>
  <!-- Grantor Spouse Mailing Address -->
  <div class="paragraph"><span class="bs_text_bold">Grantor's Mailing Address: </span>
  </div>

  <div class="indent_paragraph paragraph"><?php echo strtoupper($grantorAddressInline) ?>
  </div>
  <!-- Grantor Grantor Spouse County -->
  <div class="indent_paragraph paragraph"><?php echo strtoupper($grantorAddressCounty) ?> County
  </div>



  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- TRUSTEE -->
  <!-- Variables -->
  <?php
// Trustee Full Name
if ($joint_property_entries[0][3002]['middle'] == '') {
    $trusteeNameFull = $joint_property_entries[0][3002]['first'] . ' ' . $joint_property_entries[0][3002]['last'];
} else {
    $trusteeNameFull = $joint_property_entries[0][3002]['first'] . ' ' . $joint_property_entries[0][3002]['middle'] . ' ' . $joint_property_entries[0][3002]['last'];
}
;

// Trustee Mailing Address Inline
if ($joint_property_entries[0][3003]['street2'] == '') {
    $trusteeAddressInline = $joint_property_entries[0][3003]['street'] . ', ' . $joint_property_entries[0][3003]['city'] . ', ' . $joint_property_entries[0][3003] . ', ' . $joint_property_entries[0][3003]['zip'];
} else {
    $trusteeAddressInline = $joint_property_entries[0][3003]['street'] . ', ' . $joint_property_entries[0][3003]['street2'] . ', ' . $joint_property_entries[0][3003]['city'] . ', ' . $joint_property_entries[0][3003] . ', ' . $joint_property_entries[0][3003]['zip'];
}

$trusteeAddressCounty = $joint_property_entries[0][3003]['county']; //relevant Tell Us About ... form

?>
  <!-- Output -->
  <!-- Name of Trustee -->
  <div class="paragraph label"><span class="bs_text_bold">Trustee:</span> <?php echo strtoupper($trusteeNameFull) ?>
  </div>
  <!-- Trustee Mailing Address -->
  <div class="paragraph"><span class="bs_text_bold">Trustee's Mailing Address: </span></div>
  <div class="indent_paragraph paragraph"> <?php echo strtoupper($trusteeAddressInline) ?></div>
  <!-- Trustee County -->
  <div class="indent_paragraph paragraph"><?php echo strtoupper($trusteeAddressCounty) ?> County</div>


  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- BENEFICIARY -->
  <!-- Variables -->
  <?php

//   Benificiary Full Name
if ($beneficiaryMiddleName == '') {
    $beneficiaryNameFull = $beneficiaryFirstName . ' ' . $beneficiaryLastName;
} else {
    $beneficiaryNameFull = $beneficiaryFirstName . ' ' . $beneficiaryMiddleName . ' ' . $beneficiaryLastName;
}
// Benificiary Mailing Address Inline
if ($beneficiary_address_street_2 == '') {
    $beneficiaryAddressInline = $beneficiary_address_street_1 . ', ' . $beneficiary_address_city . ', ' . $beneficiary_address_state . ', ' . $beneficiary_address_zip;

    $beneficiaryAddressInlineTraditional = $beneficiary_address_street_1 . ',<br>' . $beneficiary_address_city . ', ' . $beneficiary_address_state . ', ' . $beneficiary_address_zip;
} else {
    $beneficiaryAddressInline = $beneficiary_address_street_1 . ', ' . $beneficiary_address_street_2 . ', ' . $beneficiary_address_city . ', ' . $beneficiary_address_state . ', ' . $beneficiary_address_zip;

    $beneficiaryAddressInlineTraditional = $beneficiary_address_street_1 . ', ' . $beneficiary_address_street_2 . ',<br>' . $beneficiary_address_city . ', ' . $beneficiary_address_state . ', ' . $beneficiary_address_zip;

}

// Benificiary County: Previous Section

?>
  <!-- Output -->
  <div class="paragraph"><span class="bs_text_bold">Beneficiary: </span> <?php echo strtoupper($beneficiaryNameFull) ?>
  </div>
  <div class="paragraph"><span class="bs_text_bold">Beneficiary's Address: </span>
  </div>
  <div class="indent_paragraph paragraph"><?php echo strtoupper($beneficiaryAddressInline) ?>
  </div>
  <div class="indent_paragraph paragraph"><?php echo strtoupper($beneficiaryAddressCounty) ?> County
  </div>


  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- NOTE & DEED OF TRUST INFORMATION -->
  <!-- Variables -->
  <?php
// Date of original note
// $children_birth_date_string = strtotime($children[$i]['birth_date_raw']);
// $children[$i]['birth_date'] = date('F j, Y', $children_birth_date_string);
$originalNoteDate = strtotime($joint_property_entries[0][3040]);
$originalNoteDateFormatted = date('F j, Y', $originalNoteDate);
// Original Principal Amount
$originalNoteAmount = $joint_property_entries[0][3005];
// Who is on the NEW note [Me, My Spouse, Both] ALREADY OBTAINED

// Recording Information County
$countyOfRecord = $joint_property_entries[0][3008];

$propertyLegalDescription = $joint_property_entries[0][3010];

?>
  <!-- Output -->
  <div class="paragraph"><span class="bs_text_bold">Note and Deed of Trust Assumed: </span>
  </div>
  <div class="indent_paragraph paragraph">Date: <?php echo strtoupper($originalNoteDateFormatted) ?>
  </div>
  <div class="indent_paragraph paragraph">Original principal amount: $ <?php echo strtoupper($originalNoteAmount) ?>
  </div>
  <div class="indent_paragraph paragraph">Maker and Grantor: <?php echo strtoupper($grantorNameFull) ?>
  </div>
  <div class="indent_paragraph paragraph">Payee and Beneficiary: <?php echo strtoupper($beneficiaryNameFull) ?>
  </div>
  <div class="indent_paragraph paragraph">Recording information: RECORDED IN THE DEED OF TRUST RECORDS OF
    <?php echo strtoupper($countyOfRecord) ?> COUNTY, TEXAS
  </div>
  <pagebreak>
    <div class="paragraph"><span class="bs_text_bold">Property (including any improvements):</span>
    </div>
    <div class="indent_paragraph paragraph"><?php echo strtoupper($propertyLegalDescription) ?></div>


    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- LIENS, EXCEPTIONS, CONSIDERATION -->
    <!-- Variables: NONE -->
    <!-- Output -->
    <div class="paragraph"><span class="bs_text_bold">Prior Lien: </span> None
    </div>
    <div class="paragraph"><span class="bs_text_bold">Other Exceptions to Conveyance and Warranty:</span> None
    </div>
    <div class="paragraph"><span class="bs_text_bold">Consideration:</span> Beneficiary has conveyed the property to
      Grantor,who as part of the consideration promised to pay the note
      assumed and to be bound by the deed of trust assumed.
    </div>

    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- A. GRANTING CLAUSE -->
    <!-- Variables: NONE -->
    <!-- Output -->
    <div class="paragraph"><span class="bs_text_bold">A. Granting Clause</span>
    </div>
    <div class="indent_paragraph paragraph">For value received and to secure Grantor's assumption, Grantor conveys the
      property to
      Trustee in trust. Grantor warrants and agrees to defend the title to the property, subject to the other exceptions
      to conveyance and warranty. If Grantor performs all the covenants of the note and deed of trust assumed and if
      Beneficiary has not filed a notice of advancement, a release of the deed of trust assumed will release this deed
      of
      trust to secure assumption and Beneficiary's vendor's lien.
    </div>

    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- B. GRANTORS OBLIGATIONS -->
    <!-- Variables: NONE -->
    <!-- Output -->
    <div class="paragraph"><span class="bs_text_bold">B. Grantor's Obligations</span>
    </div>
    <div class="indent_paragraph paragraph">Grantor agrees to –
    </div>
    <div class="indent_paragraph paragraph">B.1. perform all the covenants of the Note and Deed of Trust assumed; and
    </div>
    <div class="indent_paragraph paragraph">B.2. notify Beneficiary and Lender of any change of address.
    </div>
    <div class="paragraph"><span class="bs_text_bold">C. Beneficiary's Rights</span>
    </div>
    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- C. BENEFICIARY'S RIGHTS -->
    <!-- Variables: NONE -->
    <!-- Output -->
    <div class="indent_paragraph paragraph">C.1. Beneficiary may appoint in writing a substitute trustee, succeeding to
      all rights
      and responsibilities of Trustee.
    </div>
    <div class="indent_paragraph paragraph">C.2. If Grantor fails to perform any of Grantor's obligations under the note
      assumed or
      deed of trust assumed, Beneficiary may perform those obligations, advance funds required, and then be reimbursed
      by
      Grantor on demand for any amounts so advanced, including attorney's fees, plus interest on those amounts from the
      dates of payment at the highest legal rate. The amount to be reimbursed will be secured by this deed of trust to
      secure assumption.
    </div>
    <div class="indent_paragraph paragraph">C.3. Beneficiary may file a sworn notice of such advancement in the office
      of
      the county
      clerk in the county in which the property is located. The notice will detail the dates, amounts, and purposes of
      the
      amounts advanced and the legal description of the property.
    </div>
    <div class="indent_paragraph paragraph">C.4. If Grantor fails on demand to reimburse Beneficiary for the amounts
      advanced and
      such failure continues after Beneficiary gives Grantor notice of the failure and the time within which it must be
      cured, to the extent required by law or by written agreement, Beneficiary may –
    </div>
    <div class="indent_indent_block">
      <ol class="alphalowercase">
        <li class="paragraph font_size_regular">exercise Beneficiary's rights with respect to rent under the Texas
          Property Code as then in
          effect;</li>

        <li class="paragraph font_size_regular">direct Trustee to foreclose this lien, in which case Beneficiary or
          Beneficiary's
          agent will cause notice of the foreclosure sale to be given as provided by the Texas Property Code as then in
          effect; and
        </li>
        <li class="paragraph font_size_regular">purchase the property at any foreclosure sale by offering the highest
          bid
          and
          then have the bid credited to the amount owed to Beneficiary.
        </li>
      </ol>
    </div>

    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- D. TRUSTEES RIGHTS AND DUTIES -->
    <!-- Variables: NONE -->
    <!-- Output -->
    <div class="paragraph"><span class="bs_text_bold">D. Trustee's Rights and Duties</span>
    </div>
    <div class="indent_paragraph paragraph">If directed by Beneficiary to foreclose this lien, Trustee will –
    </div>
    <div class="indent_paragraph paragraph">D.1. either personally or by agent give notice of the foreclosure sale as
      required by
      this deed of trust to secure assumption and the Texas Property Code as then in effect;
    </div>
    <div class="indent_paragraph paragraph">D.2. sell and convey all or part of the property "AS IS" to the highest
      bidder
      for cash
      with a general warranty binding Grantor, subject to the prior lien and to the other exceptions to conveyance and
      warranty and without representation or warranty, express or implied, by Trustee;
    </div>
    <div class="indent_paragraph paragraph">D.3. from the proceeds of the sale, pay, in this order –
    </div>
    <div class="indent_indent_block">
      <ol class="alphalowercase paragraph">
        <li class="paragraph font_size_regular">expenses of foreclosure, including a reasonable commission to
          Trustee;
        </li>
        <li class="paragraph font_size_regular">to Beneficiary, the full amount advanced, attorney's fees, and
          other
          charges due
          and unpaid;
        </li>
        <li class="paragraph font_size_regular">any amounts required by law to be paid before payment to Grantor;
          and
        <li class="paragraph font_size_regular">to Grantor, any balance; and
        </li>
      </ol>
    </div>
    <div class="indent_paragraph paragraph">D.4. be indemnified, held harmless, and defended by Beneficiary against
      all
      costs,
      expenses, and liabilities incurred by Trustee for acting in the execution or enforcement of the trust created by
      this deed of trust to secure assumption, which includes all court and other costs, including attorney's fees,
      incurred by Trustee in defense of any action or proceeding taken against Trustee in that capacity.
    </div>

    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- E. GENERAL PROVISIONS -->
    <!-- Variables: NONE -->
    <!-- Output -->
    <div class="paragraph"><span class="bs_text_bold">E. General Provisions</span>
    </div>
    <div class="indent_paragraph paragraph">E.1. If any of the property is sold under this deed of trust to secure
      assumption,
      Grantor must immediately surrender possession to the purchaser. If Grantor does not, Grantor will be a tenant at
      sufferance of the purchaser, subject to an action for forcible detainer.
    </div>
    <div class="indent_paragraph paragraph">E.2. Recitals in any trustee's deed conveying the property will be
      presumed to
      be true.
    </div>
    <div class="indent_paragraph paragraph">E.3. Proceeding under this deed of trust to secure assumption, filing suit
      for
      foreclosure, or pursuing any other remedy will not constitute an election of remedies.
    </div>
    <div class="indent_paragraph paragraph">E.4. This lien will be superior to liens later created even if Beneficiary
      has
      made no
      advancements when later liens are created.
    </div>
    <div class="indent_paragraph paragraph">E.5. If any portion of the advancements cannot be lawfully secured by this
      deed of trust
      to secure assumption, payments will be applied first to discharge that portion.
    </div>
    <div class="indent_paragraph paragraph">E.6. A sale of the property under this deed of trust to secure assumption-
    </div>


    <div class="indent_indent_block paragraph">
      <ol class="alphalowercase">

        <li class="paragraph">is subject to Grantor's continuing obligation to make all payments
          owing on the
          note assumed and to perform all obligations under the deed of trust assumed; and
        </li>
        <li class="paragraph">does not extinguish Trustee's right to conduct subsequent sales of
          the
          property
          for future Grantor defaults under this deed of trust to secure assumption.
        </li>
        <li class="paragraph">
      </ol>
    </div>
    <div class="indent_paragraph paragraph">E.7. Grantor collaterally assigns to Beneficiary all present and future
      rent
      from the
      property and its proceeds. Grantor warrants the validity and enforceability of the assignment. Grantor will
      apply
      all rent to payment of the note assumed and performance of the deed of trust assumed, but if the rent exceeds
      the
      amount due with respect to the note and deed of trust assumed, Grantor may retain the excess. If a default
      exists in
      payment of the note assumed or performance of this deed of trust to secure assumption or of the deed of trust
      assumed, Beneficiary may exercise Beneficiary's rights with respect to rent under the Texas Property Code as
      then in
      effect. Beneficiary neither has nor assumes any obligations as lessor or landlord with respect to any occupant
      of
      the property. Beneficiary may exercise Beneficiary's rights and remedies under this paragraph without taking
      possession of the property. Beneficiary will apply all rent collected under this paragraph as required by the
      Texas
      Property Code as then in effect. Beneficiary is not required to act under this paragraph, and acting under this
      paragraph does not waive any of Beneficiary's other rights or remedies.
    </div>
    <div class="indent_paragraph paragraph">E.8. Interest on the debt secured by this deed of trust to secure
      assumption
      will not
      exceed the maximum amount of nonusurious interest that may be contracted for, taken, reserved, charged, or
      received
      under law. Any interest in excess of that maximum amount will be credited on the principal of the debt or, if
      that
      has been paid, refunded. On any acceleration or required or permitted prepayment, any such excess will be
      canceled
      automatically as of the acceleration or prepayment or, if already paid, credited on the principal of the debt
      or, if
      the principal of the debt has been paid, refunded. This provision overrides any conflicting provisions in this
      and
      all other instruments concerning the debt.
    </div>
    <div class="indent_paragraph paragraph">E.9. Any action taken under this deed of trust to secure assumption will
      not
      extinguish
      the rights of Beneficiary to proceed against Grantor under the indemnity contained in the deed by which Grantor
      assumed the note and deed of trust assumed.
    </div>
    <div class="indent_paragraph paragraph">E.10. When the context requires, singular nouns and pronouns include the
      plural.
    </div>
    <div class="indent_paragraph paragraph">E.11. This deed of trust to secure assumption binds, benefits, and may be
      enforced by
      the successors in interest of all parties.
    </div>
    <div class="indent_paragraph paragraph">E.12 Grantor waives and surrenders to Beneficiary (a) Grantor's power to
      authorize
      anyone (other than Beneficiary or Grantor) to pay ad valorem taxes on the property and (b) Grantor's power to
      authorize a taxing entity to transfer its tax lien on the property to anyone other than Beneficiary. Grantor
      agrees
      and declares that any authorization from Grantor to another (other than Beneficiary) to pay the taxes and
      transfer a
      tax lien on the property is void.
    </div>

    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- SPACER -->
    <div class="bs_spacer"></div>

    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- SECTION: SIGNATURE FIELD Recipient Spouse -->
    <!-- Variables -->
    <!-- $beneficiaryNameFull: Already Obtained -->

    <!-- Output -->
    <table>
      <tr>
        <td class="table_grantor_sign_col_1_2"><?php echo $leaveBlank ?></td>
        <td class="table_grantor_sign_col_2_2 "></td>
      </tr>
      <tr>
        <td class="table_grantor_sign_col_1_2"><?php echo $leaveBlank ?></td>
        <td class="table_grantor_col_2_2 table_cell_top_line"><?php echo strtoupper($beneficiaryNameFull) ?>
        </td>
      </tr>
      <tr>
        <td class="table_beneficiary_sign_col_1_2"><?php echo $leaveBlank ?></td>
        <td class="table_grantor_sign_col_2_2"><?php echo $leaveBlank ?></td>
      </tr>
      <tr>
        <td class="table_grantor_sign_col_1_2"><?php echo $leaveBlank ?></td>
        <td class="table_grantor_sign_col_2_2 bs_text_italic">This instrument was prepared based on information
          furnished by the parties, and no independent title search has been made.</td>
      </tr>
    </table>

    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- SPACER -->
    <div class="bs_spacer"></div>

    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- SECTION: SIGNATURE FIELD State -->
    <!-- Variables -->
    <!-- $jurisCounty: Already Obtained -->
    <!-- Output -->
    <table>
      <tr>
        <td class="table_signature_state_col_1_3"><span class="bs_fontsize_normal">STATE OF TEXAS</span></td>
        <td class="table_signature_state_col_2_3 bs_text_align_center"><span class="bs_fontsize_normal">&sect;</span>
        </td>
        <td class="table_signature_state_col_3_3"><?php echo $leaveBlank ?></td>
      </tr>
      <tr>
        <td class="table_signature_state_col_1_3"><?php echo $leaveBlank ?></td>
        <td class="table_signature_state_col_2_3"><?php echo $leaveBlank ?></td>
        <td class="table_signature_state_col_3_3"><?php echo $leaveBlank ?></td>
      </tr>
      <tr>
        <td class="table_signature_state_col_1_3"><span class="bs_fontsize_normal">COUNTY OF
            <?php echo strtoupper($jurisCounty) ?></span></td>
        <td class="table_signature_state_col_2_3 bs_text_align_center"><span class="bs_fontsize_normal">&sect;</span>
        </td>
        <td class="table_signature_state_col_3_3"><?php echo $leaveBlank ?></td>
      </tr>
    </table>

    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- SPACER -->
    <div class="bs_spacer"></div>

    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- SECTION: NOTARY Date -->
    <!-- Variables:None -->
    <!-- Output -->
    <div class="indent_paragraph paragraph">This instrument was acknowledged before me on ______________________ by
      <?php echo strtoupper($granteeNameFull) ?>.
    </div>

    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- SPACER -->
    <div class="bs_spacer"></div>
    <div class="bs_spacer"></div>
    <div class="bs_spacer"></div>

    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- SECTION: NOTARY Signature -->
    <!-- Variables:None -->
    <!-- Output -->
    <table>
      <tr>
        <td class="table_notary_sign_col_1_2 table_cell_top_line">Notary Public, State of Texas</td>
        <td class="table_notary_sign_col_2_2"><?php echo $leaveBlank ?></td>
      </tr>
    </table>
    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- PAGEBREAK -->
    <pagebreak>


      <!-- -------------------------------------------------------------------------------------------- -->
      <!-- SECTION: RETURN TO -->
      <!-- Variables -->
      <!-- $beneficiaryNameFull: Already Obtained -->
      <!-- $beneficiaryMailingAddress: Already Obtained -->
      <!-- Output -->

      <table>
        <tr>
          <td class="table_return_to_col_1_2"><?php echo $leaveBlank ?></td>
          <td class="table_return_to_col_2_2 "><span class="bs_text_bold"> AFTER RECORDING RETURN TO:
            </span></td>
        </tr>
        <tr>
          <td class="table_return_to_col_1_2"><?php echo $leaveBlank ?></td>
          <td class="table_return_to_col_2_2"><?php echo strtoupper($beneficiaryNameFull) ?>
          </td>
        </tr>
        <tr>
          <td class="table_return_to_col_1_2"><?php echo $leaveBlank ?></td>
          <td class="table_return_to_col_2_2"><?php echo strtoupper($beneficiaryAddressInlineTraditional) ?></td>
        </tr>
      </table>
      <!---- END OF DOCUMENT ---->

</body>