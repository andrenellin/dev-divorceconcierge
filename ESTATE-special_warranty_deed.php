<?php

/*
 * Template Name: Divorce Concierge - Special Warranty Deed
 * Version: 1.0.0
 * Description: Script to generate PDF to output Special Warranty Deed
 * Author: Bliksem LLC
 * Author URI: https://simplifysmallbiz.com
 * Group:  2. Second Review
 * License: GPLv2
 * Required PDF Version: 4.0-alpha
 * Tags: gravitypdf
 */

/* Group Options
0 To Do
1 Development
2 Second Reviewer
3 Awaiting Layout Approval
4 Connect to Source Data
5 Testing Internal
6 Testing by clients
7 Move to Live Server
8 Live Server Testing
9 Live Server Client Approved
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
$master_entries = array();

// Jurisdiction
$master_entries[0][7] = '1234'; // Cause Number
$master_entries[0][5] = '987th'; // Judicial District Number
$master_entries[0][6] = 'Collin'; // Juditial County

// Petitioner Name Full
$master_entries[0][96]['first'] = 'Peter'; // Petitioner Full Name
$master_entries[0][96]['middle'] = 'Paul'; // Petitioner Full Name
$master_entries[0][96]['last'] = 'Parker'; // Petitioner Full Name

// Petitioner Mailing Address
$master_entries[0][106]['street'] = '321 Petitioner Mailing Str';
$master_entries[0][106]['street2'] = 'Apt 321';
$master_entries[0][106]['city'] = 'Plano';
$master_entries[0][106]['county'] = 'Collin';
$master_entries[0][106]['state'] = 'Texas';
$master_entries[0][106]['zip'] = '75078';

// Respondent Name Full
$master_entries[0][114]['first'] = 'Rebekah'; // Respondent full name
$master_entries[0][114]['middle'] = 'Rochelle'; // Respondent full name
$master_entries[0][114]['last'] = 'Parker'; // Respondent full name

// Respondent Mailing Address
$master_entries[0][72]['street'] = '321 Respondent Mailing Str';
$master_entries[0][72]['street2'] = 'Apt 321';
$master_entries[0][72]['city'] = 'Prosper';
$master_entries[0][72]['county'] = 'Denton';
$master_entries[0][72]['state'] = 'Texas';
$master_entries[0][72]['zip'] = '75078';

/* -------------------------------------------------------------------------------------------- */
/* MODEL OF OUTPUT: REPEATER Child Entries */

$children_entries = array(); // Tell Us About Your Child(ren)

// Child 1 if exists Full Name
$children_entries[0][2]['first'] = 'Alice';
$children_entries[0][2]['middle'] = 'Anne';
$children_entries[0][2]['last'] = 'Parker';

// Child 2 if exists Full Name
$children_entries[1][2]['first'] = 'Bryce';
$children_entries[1][2]['middle'] = 'Ben';
$children_entries[1][2]['last'] = 'Parker';

// Child 3 if exists Full Name
$children_entries[2][2]['first'] = 'Cassie';
$children_entries[2][2]['middle'] = 'Cheryl';
$children_entries[2][2]['last'] = 'Parker';

// Child 4 if exists Full Name
$children_entries[3][2]['first'] = 'Dean';
$children_entries[3][2]['middle'] = 'Donald';
$children_entries[3][2]['last'] = 'Parker';

/* -------------------------------------------------------------------------------------------- */
/* MODEL OF OUTPUT: JOINT PROPERTY */
$joint_property_entries = array();

// Property Address
$joint_property_entries[0][3001]['street'] = '123 Property Str';
$joint_property_entries[0][3001]['street2'] = '';
$joint_property_entries[0][3001]['city'] = 'Plano';
$joint_property_entries[0][3001]['zip'] = '75093';
$joint_property_entries[0][3001]['county'] = 'Collin';
$joint_property_entries[0][3001]['state'] = 'Texas';

// Property Legal Description
$joint_property_entries[0][3002] = 'TRAILS OF FOSSIL CREEK PH I B LOCK GG LOT 15A';

// Original County where deed was recorded
$joint_property_entries[0][3003] = 'Collin';

// Property Awarded to
$joint_property_entries[0][3004] = 'My Spouse'; // [Me, My Spouse]

// SECTION: TRUSTEE
// Trustee Full Name
$joint_property_entries[0][3005]['first'] = 'Tom';
$joint_property_entries[0][3005]['middle'] = 'Theral';
$joint_property_entries[0][3005]['last'] = 'Thanus';

// Trustee Mailing Address Inline
$joint_property_entries[0][3006]['street'] = '999 Trustee Mailing Street';
$joint_property_entries[0][3006]['street2'] = 'STE 999';
$joint_property_entries[0][3006]['city'] = 'Terrell';
$joint_property_entries[0][3006]['county'] = 'Kaufman';
$joint_property_entries[0][3006]['state'] = 'Texas';
$joint_property_entries[0][3006]['zip'] = '75160';

// SECTION: ORIGINAL NOTE
// Date of original note
$joint_property_entries[0][3007] = '05/01/2001';
// Original Principal Amount
$joint_property_entries[0][3008] = '450000.00';
// Original Principal Amount Spelled Out
$joint_property_entries[0][3009] = 'Four Hundred And Fifty Thousand';
// Original Note Executed By Parties
$joint_property_entries[0][3010] = 'Peter Paul Parker and Rebekah Rochelle Riverton';
// Original Note Payee
$joint_property_entries[0][3011] = 'ABC Bank of Texas';
// Original Date of Deed of Trust
$joint_property_entries[0][3012] = '06/01/2001';
// New Note Payee
$joint_property_entries[0][3013] = 'ABC Bank of Texas';
// New Date of Deed of Trust
$joint_property_entries[0][3014] = '03/01/2001';

/* -------------------------------------------------------------------------------------------- */
/* GLOBAL VARIABLES: used throughout script. Not specific to a section */
// General
$selectOption = 'X';
$leaveBlank = '&nbsp;';
$currentdate = date('F d, Y');
/* -------------------------------------------------------------------------------------------- */
// Title & Page Number
$title = 'Special Warranty Deed';
$pageNumber = 'PAGE {PAGENO}';
/* -------------------------------------------------------------------------------------------- */
// $petitionerNameFull
if ($master_entries[0][96]['middle'] == '') {
    $petitionerNameFull = $master_entries[0][96]['first'] . ' ' . $master_entries[0][96]['last'];
} else {
    $petitionerNameFull = $master_entries[0][96]['first'] . ' ' . $master_entries[0][96]['middle'] . ' ' . $master_entries[0][96]['last'];
}

// petitionerMailingAddressInline Street, City, County, State
if ($master_entries[0][106]['street2'] == '') {
    $petitionerMailingAddressInline = $master_entries[0][106]['street'] . ', ' . $master_entries[0][106]['city'] . ', ' . $master_entries[0][106]['county'] . ' County, ' . $master_entries[0][106]['state'];

    $petitionerMailingAddressTraditional = $master_entries[0][106]['street'] . ',<br>' . $master_entries[0][106]['city'] . ', ' . $master_entries[0][106]['state'] . ', ' . $master_entries[0][106]['zip'];
} else {
    $petitionerMailingAddressInline = $master_entries[0][106]['street'] . ', ' . $master_entries[0][106]['street2'] . ', ' . $master_entries[0][106]['city'] . ', ' . $master_entries[0][106]['county'] . ' County, ' . $master_entries[0][106]['state'];

    $petitionerMailingAddressTraditional = $master_entries[0][106]['street'] . ', ' . $master_entries[0][106]['street2'] . ',<br>' . $master_entries[0][106]['city'] . ', ' . $master_entries[0][106]['state'] . ', ' . $master_entries[0][106]['zip'];
}
/* -------------------------------------------------------------------------------------------- */
// $respondentNameFull
if ($master_entries[0][114]['middle'] == '') {
    $respondentNameFull = $master_entries[0][114]['first'] . ' ' . $master_entries[0][114]['last'];
} else {
    $respondentNameFull = $master_entries[0][114]['first'] . ' ' . $master_entries[0][114]['middle'] . ' ' . $master_entries[0][114]['last'];
}

// respondentMailingAddress Inline & Traditional
if ($master_entries[0][72]['street2'] == '') {
    $respondentMailingAddressInline = $master_entries[0][72]['street'] . ',<br>' . $master_entries[0][72]['city'] . ', ' . $master_entries[0][72]['county'] . ' County, ' . $master_entries[0][72]['state'];

    $respondentMailingAddressTraditional = $master_entries[0][72]['street'] . ',<br>' . $master_entries[0][72]['city'] . ', ' . $master_entries[0][72]['state'] . ', ' . $master_entries[0][72]['zip'];
} else {
    $respondentMailingAddressInline = $master_entries[0][72]['street'] . ', ' . $master_entries[0][72]['street2'] . ', ' . $master_entries[0][72]['city'] . ', ' . $master_entries[0][72]['county'] . ' County, ' . $master_entries[0][72]['state'];

    $respondentMailingAddressTraditional = $master_entries[0][72]['street'] . ', ' . $master_entries[0][72]['street2'] . ',<br>' . $master_entries[0][72]['city'] . ', ' . $master_entries[0][72]['state'] . ', ' . $master_entries[0][72]['zip'];
}

// $awardedTo
$awardedTo = $joint_property_entries[0][3001];

// $grantorNameFull
// $grantorMailingAddress
// $granteeNameFull
// $granteeMailingAddress
if ($awardedTo == 'Me') {
    $grantorNameFull = $respondentNameFull;
    $grantorMailingAddress = $respondentMailingAddressInline;
    $granteeNameFull = $petitionerNameFull;
    $granteeMailingAddress = $petitionerMailingAddressInline;
    $granteeMailingAddressTraditional = $petitionerMailingAddressTraditional;

} else {
    $grantorNameFull = $petitionerNameFull;
    $grantorMailingAddress = $petitionerMailingAddressInline;
    $granteeNameFull = $respondentNameFull;
    $granteeMailingAddress = $respondentMailingAddressInline;
    $granteeMailingAddressTraditional = $respondentMailingAddressTraditional;
}

// $count_children_entries
$count_children_entries = count($children_entries);

// $children_names format inline
$childNames = array();
for ($i = 0; $i < $count_children_entries; $i++) {
    if ($children_entries[$i][2]['middle'] == '') {
        $childNames[$i] = $children_entries[$i][2]['first'] . ' ' . $children_entries[$i][2]['last'];
    } else {
        $childNames[$i] = $children_entries[$i][2]['first'] . ' ' . $children_entries[$i][2]['middle'] . ' ' . $children_entries[$i][2]['last'];
    }
}

// $partiesInline
$children = join(' AND ', array_filter(array_merge(array(join(', ', array_slice($childNames, 0, -1))), array_slice($childNames, -1)), 'strlen'));

if ($count_children_entries == 0) {
    $partiesInline = $petitionerNameFull . ' AND ' . $respondentNameFull;
} else if ($count_children_entries == 1) {

    $partiesInline = $petitionerNameFull . ' AND ' . $respondentNameFull . ' AND IN THE INTEREST OF ' . $childNames[0] . ', a CHILD';
} else {
    $partiesInline = $petitionerNameFull . ' AND ' . $respondentNameFull . ' AND IN THE INTEREST OF ' . $children . ', CHILDREN';
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
.font_size_regular,
h1 {
  font-size: 12pt;
  line-height: 200%;
}


/* LISTS */
ul,
ol {
  margin: 0;
  padding-left: 1mm;
  padding-right: 1mm;
  list-style-type: none;
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

.bs_text_align_center {
  text-align: center;
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

/* ol.alphalowercase {
  list-style-type: lower-alpha;
} */

/* ol.alphalowercase {
  list-style-type: lower-alpha;
} */

/* ol.alphalowercase {
  list-style-type: lower-alpha;
} */

/* ol.alphalowercase {
  list-style-type: lower-alpha;
} */

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

.table_grantor_sign_col_1_2,
.table_grantor_sign_col_2_2,
.table_notary_sign_col_1_2,
.table_notary_sign_col_2_2,
.table_return_to_col_1_2,
.table_return_to_col_2_2 {
  width: 50%;
}

.table_signature_state_col_1_3,
.table_signature_state_col_2_3 {
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
  <!-- TESTING: Outputs to top of page -->
  <?php
// echo 'Parties Inline: ' . $partiesInline . '<br>';
?>



  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- HEADER / FOOTER -->
  <!-- Variables: NONE -->
  <!-- Output -->
  <htmlpagefooter name="MyCustomFooter">
    <table class="footer">
      <tr>
        <td class="table_footer_col_1_2"><span class="bs_text_bold"><?php echo strtoupper($title) ?></span>
        </td>
        <td class="table_footer_col_2_2 bs_text_align_right"><span class="bs_text_bold"><?php echo $pageNumber ?></span>
        </td>
      </tr>
    </table>
  </htmlpagefooter>
  <!-- <htmlpagefooter name="MyFooterOther">
  </htmlpagefooter> -->

  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- BOOKMARK: Deed of Trust to Secure Assumption -->
  <!-- Variables:NONE -->
  <!-- Output -->
  <bookmark content="<?php echo $title ?>" />


  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- SECTION: TITLE -->
  <!-- Variables: $title Already obtained -->
  <!-- Output -->
  <h1 class="bs_text_align_center"><?php echo $title ?></h1>

  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- SECTION: DATE SIGNED -->
  <!-- Variables -->
  <?php
$dateSigned = $currentdate;
?>
  <!-- Output -->
  <div><span class="bs_text_bold">Date: </span> <?php echo strtoupper($dateSigned) ?>
  </div>

  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- SECTION: GRANTOR -->
  <!-- Variables: Global Variables -->
  <!-- Output -->
  <div><span class="bs_text_bold">Grantor:</span> <?php echo strtoupper($grantorNameFull) ?>
  </div>
  <div><span class="bs_text_bold">Grantor's Mailing Address: </span>
  </div>
  <div class="indent_paragraph"><?php echo strtoupper($grantorMailingAddress) ?>
  </div>

  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- SECTION: GRANTEE -->
  <!-- Variables: Global Variables -->
  <!-- Output -->
  <div><span class="bs_text_bold">Grantee:</span> <?php echo strtoupper($granteeNameFull) ?>
  </div>
  <div><span class="bs_text_bold">Grantee's Mailing Address: </span>
  </div>
  <div class="indent_paragraph"><?php echo strtoupper($granteeMailingAddress) ?>
  </div>

  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- SECTION: CONSIDERATION -->
  <!-- Variables -->
  <?php

$jurisCourtNumber = $master_entries[0][5]; // Form:Master
$jurisCounty = $master_entries[0][6]; // Form:Master
$jurisCauseNumber = $master_entries[0][7]; // Form:Master

$originalNoteAmountSpeltOut = $joint_property_entries[0][3009]; // Form: Repeater Joint Property
$originalNoteAmount = $joint_property_entries[0][3008]; // Form: Repeater Joint Property
$originalNoteDate = strtotime($joint_property_entries[0][3007]); // Form: Repeater Joint Property
$originalNoteDateFormatted = date('F j, Y', $originalNoteDate); // Form: Repeater Joint Property
$originalNoteExecutedBy = $joint_property_entries[0][3010]; // Form: Repeater Joint Property
$originalNotePayeeName = $joint_property_entries[0][3011]; // Form: Repeater Joint Property
$originalDateOfDeedOfTrust = strtotime($joint_property_entries[0][3012]); // Form: Repeater Joint Property
$originalDateOfDeedOfTrustFormatted = date('F j, Y', $originalDateOfDeedOfTrust);

if ($joint_property_entries[0][3005]['middle'] == '') {
    $originalNoteTrusteeName = $joint_property_entries[0][3005]['first'] . ' ' . $joint_property_entries[0][3005]['last'];
} else {
    $originalNoteTrusteeName = $joint_property_entries[0][3005]['first'] . ' ' . $joint_property_entries[0][3005]['middle'] . ' ' . $joint_property_entries[0][3005]['last'];
}

$originalCountyDeedRecorded = strtotime($joint_property_entries[0][3012]); // Form: Repeater Joint Property
$originalCountyDeedRecordedFormatted = date('F j, Y', $originalCountyDeedRecorded);

$originalDeedOfTrustCounty = $joint_property_entries[0][3003];

$newNotePayeeName = $joint_property_entries[0][3013]; // Form: Repeater Joint Property
$newDateOfDeedOfTrust = strtotime($joint_property_entries[0][3014]); // Form: Repeater Joint Property
$newDateOfDeedOfTrustFormatted = date('F j, Y', $newDateOfDeedOfTrust);

?>
  <!-- Output -->
  <div><span class="bs_text_bold">Consideration:</span>
  </div>
  <div class="indent_paragraph">The division of property ordered by the <?php echo strtoupper($jurisCourtNumber) ?>
    COURT of
    <?php echo strtoupper($jurisCounty) ?> County, Texas, in Cause No. <?php echo $jurisCauseNumber ?>, styled IN THE
    MATTER OF THE
    MARRIAGE OF <?php echo strtoupper($partiesInline) ?>, and ten dollars and other valuable consideration paid by
    Grantee,
    and Grantee's assumption of the unpaid principal and earned interest on the note in the original principal
    sum of <?php echo strtoupper($originalNoteAmountSpeltOut) ?> dollars ($<?php echo $originalNoteAmount ?>) dated
    <?php echo strtoupper($originalNoteDateFormatted) ?>, executed by <?php echo strtoupper($originalNoteExecutedBy) ?>,
    And payable to the
    order
    of <?php echo strtoupper($originalNotePayeeName) ?>. The note is secured by a vendor's lien retained in a deed dated
    <?php echo strtoupper($originalDateOfDeedOfTrustFormatted) ?>, from
    <?php echo strtoupper($originalNoteExecutedBy) ?> to <?php echo strtoupper($originalNotePayeeName) ?>, and
    additionally secured by a deed of
    trust dated <?php echo strtoupper($originalDateOfDeedOfTrustFormatted) ?>, from
    <?php echo strtoupper($originalNoteExecutedBy) ?> to
    <?php echo strtoupper($originalNoteTrusteeName) ?>, Trustee, recorded in the official public records of real
    property of
    <?php echo strtoupper($originalDeedOfTrustCounty) ?> County, Texas. Grantee agrees to indemnify and hold Grantor
    harmless
    from payment of the note and from performance of Grantor's obligations specified in the instruments securing payment
    of the note.
  </div>

  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- PAGEBREAK -->
  <pagebreak>

    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- SECTION: PROPERTY -->
    <!-- Variables -->
    <?php
$propertyLegalDescription = $joint_property_entries[0][3002];
?>
    <!-- Output -->
    <div><span class="bs_text_bold">Property (including any improvements):</span>
    </div>
    <div class="indent_paragraph"><?php echo $propertyLegalDescription ?>
    </div>

    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- SECTION: RESERVATIONS -->
    <!-- Variables: NONE -->
    <!-- Output -->
    <div><span class="bs_text_bold">Reservations from Conveyance and Exceptions to Conveyance and Warranty:</span>
    </div>
    <div class="indent_paragraph">This deed is subject to all easements, restrictions, conditions, covenants, and other
      instruments of record.
    </div>

    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- SECTION: CONVEYANCe -->
    <!-- Variables: NONE -->
    <!-- Output -->
    <div><span class="bs_text_bold">Conveyance:</span>
    </div>
    <div class="indent_paragraph">Grantor, for the consideration and subject to the reservations from conveyance and
      exceptions to conveyance and warranty, grants, sells, and conveys to Grantee all of Grantor's interest in the
      property, together with all and singular the rights and appurtenances thereto in any way belonging, to have and
      hold
      it to Grantee and Grantee's heirs, successors, and assigns forever. Grantor binds Grantor and Grantor's heirs and
      successors to warrant and forever defend all and singular the property to Grantee and Grantee's heirs, successors,
      and
      assigns against every person whomsoever lawfully claiming or to claim the same or any part thereof when the claim
      is
      by, through, or under Grantor but not otherwise, except as to the reservations from conveyance and exceptions to
      conveyance and warranty.
    </div>
    <div class="indent_paragraph">Grantor assigns to Grantee the casualty insurance policy on the property, all utility
      deposits for utility services at the property, and all funds held in escrow for payment of taxes and insurance
      premiums.
    </div>
    <div class="indent_paragraph">When the context requires, singular nouns and pronouns include the plural.
    </div>
    <div class="indent_paragraph">Grantee assumes all ad valorem taxes due on the property for the current year.
    </div>

    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- SPACER -->
    <div class="bs_spacer"></div>
    <div class="bs_spacer"></div>
    <div class="bs_spacer"></div>

    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- SECTION: SIGNATURE FIELD Conveying Spouse -->
    <!-- Variables -->
    <!-- $grantorNameFull: Already Obtained -->

    <!-- Output -->
    <table>
      <tr>
        <td class="table_grantor_sign_col_1_2"><?php echo $leaveBlank ?></td>
        <td class="table_grantor_sign_col_2_2 "></td>
      </tr>
      <tr>
        <td class="table_grantor_sign_col_1_2"><?php echo $leaveBlank ?></td>
        <td class="table_grantor_col_2_2 table_cell_top_line"><?php echo strtoupper($grantorNameFull) ?>
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
    <!-- PAGEBREAK -->
    <pagebreak>

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
      <!-- SPACER -->
      <div class="bs_spacer"></div>


      <!-- -------------------------------------------------------------------------------------------- -->
      <!-- SECTION: RETURN TO -->
      <!-- Variables -->
      <!-- $granteeNameFull: Already Obtained -->
      <!-- $granteeMailingAddress: Already Obtained -->
      <!-- Output -->

      <table>
        <tr>
          <td class="table_return_to_col_1_2"><?php echo $leaveBlank ?></td>
          <td class="table_return_to_col_2_2 "><span class="bs_text_bold"> AFTER RECORDING RETURN TO:
            </span></td>
        </tr>
        <tr>
          <td class="table_return_to_col_1_2"><?php echo $leaveBlank ?></td>
          <td class="table_return_to_col_2_2"><?php echo strtoupper($granteeNameFull) ?>
          </td>
        </tr>
        <tr>
          <td class="table_return_to_col_1_2"><?php echo $leaveBlank ?></td>
          <td class="table_return_to_col_2_2"><?php echo strtoupper($granteeMailingAddressTraditional) ?></td>
        </tr>
      </table>



</body>
<!---- END OF DOCUMENT ---->