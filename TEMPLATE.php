<?php

/*
 * Template Name: NAME
 * Version: 1.0.X
 * Description: Describe purpose of document for client name
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

/* TESTING: Model of Output from Query */

/* -------------------------------------------------------------------------------------------- */
/* GLOBAL VARIABLES: used throughout script. Not specific to a section */

$selectOption = 'X';
$leaveBlank = '&nbsp;';
$currentdate = date('F d, Y');

$title = 'X';
$pageNumber = 'PAGE {PAGENO}';

?>

<!-- -------------------------------------------------------------------------------------------- -->
<!-- Load PDF Styles -->
<style>
/* Pages */
/* @page {
  size: 8.5in 11in;
  margin: 1in 1in 1in 1in;
  header: html_MyCustomHeader;
  line-height: 1.3;
  footer: html_MyCustomFooter;
  margin-footer: 10mm;
} */


/* FONTS */
body,
.font_size_regular {
  font-size: 12pt;
}

body {
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

.paragraph {
  line-height: 230%;
}

/* TABLES */
.table_footer_col_1_2 {
  width: 79%;
}

.table_footer_col_2_2 {
  width: 20%;
}

.table_X_col_1_1,
.table_X_col_1_2 {
  width: 50%;
}

.table_cell_top_line {
  border-top: 1px solid;
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
        <td class="table_footer_col_1_2"><span class="bs_bold bs_text_small"><?php echo $title ?></span>
        </td>
        <td class="table_footer_col_2_2 bs_text_align_right"><span
            class="bs_bold bs_text_small"><?php echo $pageNumber ?></span>
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
  <!-- SECTION -->
  <!-- Variables -->
  <!-- Output -->


  <!-- --------------------------------------------------------------------------------------------  -->
  <!-- End of document  -->

</body>