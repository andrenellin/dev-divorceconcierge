<?php

/*
 * Template Name: ESTATE Asset Spreadsheet
 * Version: 1.0.X
 * Description: Script to generate PDF to output Asset Spreadsheet
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
/* DATABASE QUERY: Master */

/* Code to Query */
// $client_user_id = $form_data['misc']['created_by'];
// $master_form_id = 92;
// $master_search_criteria['field_filters'][] = array('key' => 'created_by', 'value' => $client_user_id);
// $master_search_criteria['status'] = 'active';
// $master_sorting = array('key' => 'id', 'direction' => 'ASC', 'is_numeric' => true);
// $master_entries = GFAPI::get_entries($master_form_id, $master_search_criteria, $master_sorting);

/* TESTING: Model of Output from Query */
$master_entries = array();

$master_entries[0][97] = 'Male'; // Gender

/* -------------------------------------------------------------------------------------------- */
/* DATABASE QUERY: Repeater Asset Individually Owned */

/* Code to Query */
// $client_user_id = $form_data['misc']['created_by'];
// $asset_individually_owned_form_id = 92;
// $asset_individually_owned_search_criteria['field_filters'][] = array('key' => 'created_by', 'value' => $client_user_id);
// $asset_individually_owned_search_criteria['status'] = 'active';
// $asset_individually_owned_sorting = array('key' => 'id', 'direction' => 'ASC', 'is_numeric' => true);
// $asset_individually_owned_entries = GFAPI::get_entries($asset_individually_owned_form_id, $asset_individually_owned_search_criteria, $asset_individually_owned_sorting);
//      $count_asset_individually_owned = count($asset_individually_owned_entries)

/* TESTING: Model of Output from Query */
$asset_individually_owned_entries = array();

//Bank Accounts
$asset_individually_owned_entries[0]['type_of_asset'] = 'Bank Accounts'; //[Bank Accounts; Brokerage Accounts; Businesses; Employment Benefits; Health & Medical Savings Account; IRA's, Annuities, SEPS; Life Insurance/Annuities; Memberships; Miscellaneous Items; Stocks, Bonds, Securities; Vehicles;]
$asset_individually_owned_entries[0]['name_of_account'] = 'Bank Individual One';
$asset_individually_owned_entries[0]['party_awarded_to'] = 'Me'; //[Me, My Spouse]
$asset_individually_owned_entries[0]['current_market_value'] = '$6,700.00';

//IRA's, Annuities, SEPS
$asset_individually_owned_entries[1]['type_of_asset'] = "IRA's, Annuities, SEPS"; //[Bank Accounts; Brokerage Accounts; Businesses; Employment Benefits; Health & Medical Savings Account; IRA's, Annuities, SEPS; Life Insurance/Annuities; Memberships; Miscellaneous Items; Stocks, Bonds, Securities; Vehicles;]
$asset_individually_owned_entries[1]['name_of_ira'] = 'IRA Individual One';
$asset_individually_owned_entries[1]['party_awarded_to'] = 'Me'; //[Me, My Spouse]
$asset_individually_owned_entries[1]['current_market_value'] = '$12,000.00';

//IRA's, Annuities, SEPS
$asset_individually_owned_entries[2]['type_of_asset'] = "IRA's, Annuities, SEPS"; //[Bank Accounts; Brokerage Accounts; Businesses; Employment Benefits; Health & Medical Savings Account; IRA's, Annuities, SEPS; Life Insurance/Annuities; Memberships; Miscellaneous Items; Stocks, Bonds, Securities; Vehicles;]
$asset_individually_owned_entries[2]['name_of_ira'] = 'IRA Individual Two';
$asset_individually_owned_entries[2]['party_awarded_to'] = 'My Spouse'; //[Me, My Spouse]
$asset_individually_owned_entries[2]['current_market_value'] = '$4,000.00';

//Life Insurance/Annuities
$asset_individually_owned_entries[3]['type_of_asset'] = "Life Insurance/Annuities"; //[Bank Accounts; Brokerage Accounts; Businesses; Employment Benefits; Health & Medical Savings Account; IRA's, Annuities, SEPS; Life Insurance/Annuities; Memberships; Miscellaneous Items; Stocks, Bonds, Securities; Vehicles;]
$asset_individually_owned_entries[3]['name_of_insurance'] = 'Insurance Individual One';
$asset_individually_owned_entries[3]['party_awarded_to'] = 'Me'; //[Me, My Spouse]
$asset_individually_owned_entries[3]['current_market_value'] = '$500.00';

//Life Insurance/Annuities
$asset_individually_owned_entries[4]['type_of_asset'] = "Life Insurance/Annuities"; //[Bank Accounts; Brokerage Accounts; Businesses; Employment Benefits; Health & Medical Savings Account; IRA's, Annuities, SEPS; Life Insurance/Annuities; Memberships; Miscellaneous Items; Stocks, Bonds, Securities; Vehicles;]
$asset_individually_owned_entries[4]['name_of_insurance'] = 'Insurance Individual Two';
$asset_individually_owned_entries[4]['party_awarded_to'] = 'My Spouse'; //[Me, My Spouse]
$asset_individually_owned_entries[4]['current_market_value'] = '$5600.00';

//Vehicles Not Leased
$asset_individually_owned_entries[5]['type_of_asset'] = "Vehicles"; //[Bank Accounts; Brokerage Accounts; Businesses; Employment Benefits; Health & Medical Savings Account; IRA's, Annuities, SEPS; Life Insurance/Annuities; Memberships; Miscellaneous Items; Stocks, Bonds, Securities; Vehicles;]
$asset_individually_owned_entries[5]['make'] = 'Toyota';
$asset_individually_owned_entries[5]['model'] = 'Yaris';
$asset_individually_owned_entries[5]['year'] = '2007';

$asset_individually_owned_entries[5]['party_awarded_to'] = 'Me'; //[Me, My Spouse]
$asset_individually_owned_entries[5]['current_market_value'] = '$670.00';
$asset_individually_owned_entries[5]['current_debt'] = '$0';

//Vehicles Not Leased
$asset_individually_owned_entries[6]['type_of_asset'] = "Vehicles"; //[Bank Accounts; Brokerage Accounts; Businesses; Employment Benefits; Health & Medical Savings Account; IRA's, Annuities, SEPS; Life Insurance/Annuities; Memberships; Miscellaneous Items; Stocks, Bonds, Securities; Vehicles;]
$asset_individually_owned_entries[6]['make'] = 'Tesla';
$asset_individually_owned_entries[6]['model'] = 'Roadster';
$asset_individually_owned_entries[6]['year'] = '2018';

$asset_individually_owned_entries[6]['party_awarded_to'] = 'My Spouse'; //[Me, My Spouse]
$asset_individually_owned_entries[6]['current_market_value'] = '$26000.00';
$asset_individually_owned_entries[6]['current_debt'] = '$5000';

//Stocks, Bonds, Securities
$asset_individually_owned_entries[7]['type_of_asset'] = "Stocks, Bonds, Securities"; //[Bank Accounts; Brokerage Accounts; Businesses; Employment Benefits; Health & Medical Savings Account; IRA's, Annuities, SEPS; Life Insurance/Annuities; Memberships; Miscellaneous Items; Stocks, Bonds, Securities; Vehicles;]
$asset_individually_owned_entries[7]['name_of_asset'] = 'Stock Individual One';
$asset_individually_owned_entries[7]['party_awarded_to'] = 'Me'; //[Me, My Spouse]
$asset_individually_owned_entries[7]['current_market_value'] = '$120,000.00';

//Stocks, Bonds, Securities
$asset_individually_owned_entries[8]['type_of_asset'] = "Stocks, Bonds, Securities"; //[Bank Accounts; Brokerage Accounts; Businesses; Employment Benefits; Health & Medical Savings Account; IRA's, Annuities, SEPS; Life Insurance/Annuities; Memberships; Miscellaneous Items; Stocks, Bonds, Securities; Vehicles;]
$asset_individually_owned_entries[8]['name_of_asset'] = 'Stock Individual Two';
$asset_individually_owned_entries[8]['party_awarded_to'] = 'My Spouse'; //[Me, My Spouse]
$asset_individually_owned_entries[8]['current_market_value'] = '$7,200.00';

//Miscellaneous Items
$asset_individually_owned_entries[9]['type_of_asset'] = "Miscellaneous Items"; //[Bank Accounts; Brokerage Accounts; Businesses; Employment Benefits; Health & Medical Savings Account; IRA's, Annuities, SEPS; Life Insurance/Annuities; Memberships; Miscellaneous Items; Stocks, Bonds, Securities; Vehicles;]
$asset_individually_owned_entries[9]['name_of_asset'] = 'Record Collection Individual';
$asset_individually_owned_entries[9]['party_awarded_to'] = 'Me'; //[Me, My Spouse]
$asset_individually_owned_entries[9]['current_debt'] = '$100';
$asset_individually_owned_entries[9]['current_market_value'] = '$10,000.00';

//Miscellaneous Items
$asset_individually_owned_entries[10]['type_of_asset'] = "Miscellaneous Items"; //[Bank Accounts; Brokerage Accounts; Businesses; Employment Benefits; Health & Medical Savings Account; IRA's, Annuities, SEPS; Life Insurance/Annuities; Memberships; Miscellaneous Items; Stocks, Bonds, Securities; Vehicles;]
$asset_individually_owned_entries[10]['name_of_asset'] = 'Misc Item Two Individual';
$asset_individually_owned_entries[10]['party_awarded_to'] = 'My Spouse'; //[Me, My Spouse]
$asset_individually_owned_entries[10]['current_debt'] = '$0';
$asset_individually_owned_entries[10]['current_market_value'] = '$250.00';

//Furniture
$asset_individually_owned_entries[11]['type_of_asset'] = "Furniture"; //[Bank Accounts; Brokerage Accounts; Businesses; Employment Benefits; Health & Medical Savings Account; IRA's, Annuities, SEPS; Life Insurance/Annuities; Memberships; Miscellaneous Items; Stocks, Bonds, Securities; Vehicles;]
$asset_individually_owned_entries[11]['name_of_asset'] = 'Sofa';
$asset_individually_owned_entries[11]['location'] = 'Living Room';
$asset_individually_owned_entries[11]['party_awarded_to'] = 'My Spouse'; //[Me, My Spouse]
$asset_individually_owned_entries[11]['current_market_value'] = '$250.00';

$asset_individually_owned_entries[12]['type_of_asset'] = "Furniture"; //[Bank Accounts; Brokerage Accounts; Businesses; Employment Benefits; Health & Medical Savings Account; IRA's, Annuities, SEPS; Life Insurance/Annuities; Memberships; Miscellaneous Items; Stocks, Bonds, Securities; Vehicles;]
$asset_individually_owned_entries[12]['name_of_asset'] = 'TV';
$asset_individually_owned_entries[12]['location'] = 'Living Room';
$asset_individually_owned_entries[12]['party_awarded_to'] = 'Me'; //[Me, My Spouse]
$asset_individually_owned_entries[12]['current_market_value'] = '$700.00';

$count_asset_individually_owned = count($asset_individually_owned_entries);

/* -------------------------------------------------------------------------------------------- */
/* DATABASE QUERY: Repeater Asset Jointly Owned  */

/* Code to Query */
// $client_user_id = $form_data'misc''created_by';
// $asset_jointly_owned_entries_form_id = 88;
// $asset_jointly_owned_entries_search_criteria['field_filters'][] = array('key' => 'created_by', 'value' => $client_user_id);
// $asset_jointly_owned_entries_search_criteria['status'] = 'active';
// $asset_jointly_owned_entries_sorting = array('key' => 'id', 'direction' => 'ASC', 'is_numeric' => true);
// $asset_jointly_owned_entries_entries = GFAPI::get_entries($asset_jointly_owned_entries_form_id, $asset_jointly_owned_entries_search_criteria, $asset_jointly_owned_entries_sorting);
//      $count_asset_jointly_owned = count($asset_jointly_owned_entries)

/* TESTING: Model of Output from Query */
$asset_jointly_owned_entries = array();
//BANK ACCOUNT 1

$asset_jointly_owned_entries[0]['type_of_asset'] = 'Bank Accounts'; //[Bank Accounts; Brokerage Accounts; Businesses; Employment Benefits; Health & Medical Savings Account; IRA's, Annuities, SEPS; Life Insurance/Annuities; Memberships; Miscellaneous Items; Stocks, Bonds, Securities; Vehicles;]
$asset_jointly_owned_entries[0]['name_of_account'] = 'Bank Joint One';
$asset_jointly_owned_entries[0]['current_market_value'] = '$9,200.00';

$asset_jointly_owned_entries[0]['awarded_type'] = 'Split between me and my spouse'; //[Awarded to one party, Split between me and my spouse]

//IF [awarded_type = Split between me and my spouse]
$asset_jointly_owned_entries[0]['split_method'] = 'Percentage'; //[Percentage, Fixed dollar amount]
//$asset_jointly_owned_entries[0]['split_method'] = 'Fixed dollar amount'; //[Percentage, Fixed dollar amount]

//IF [awarded_type = Awarded to one party]
//$asset_jointly_owned_entries[0]['party_awarded_to'] = 'Me'; //[Me, My Spouse]

//IF [split_method = Percentage]
$asset_jointly_owned_entries[0]['percentage_split_petitioner'] = '50';
$asset_jointly_owned_entries[0]['percentage_split_respondent'] = '50';

//IF [split_method = Fixed dollar amount]
//$asset_jointly_owned_entries[0]['percentage_split_petitioner'] = '$5,000.00';
//$asset_jointly_owned_entries[0]['percentage_split_respondent'] = '$4,200.00';

//BANK ACCOUNT 2

// $asset_jointly_owned_entries[1]['type_of_asset'] = 'Bank Accounts';//[Bank Accounts; Brokerage Accounts; Businesses; Employment Benefits; Health & Medical Savings Account; IRA's, Annuities, SEPS; Life Insurance/Annuities; Memberships; Miscellaneous Items; Stocks, Bonds, Securities; Vehicles;]
// $asset_jointly_owned_entries[1]['name_of_account'] = 'Bank Joint One';
// $asset_jointly_owned_entries[1]['current_market_value'] = '$9,200.00';

// $asset_jointly_owned_entries[1]['awarded_type'] = 'Split between me and my spouse'; //[Awarded to one party, Split between me and my spouse]

// //IF [awarded_type = Split between me and my spouse]
// $asset_jointly_owned_entries[1]['split_method'] = 'Percentage'; //[Percentage, Fixed dollar amount]
// //$asset_jointly_owned_entries[1]['split_method'] = 'Fixed dollar amount'; //[Percentage, Fixed dollar amount]

// //IF [awarded_type = Awarded to one party]
// $asset_jointly_owned_entries[1]['party_awarded_to'] = 'Me'; //[Me, My Spouse]

// //IF [split_method = Percentage]
// $asset_jointly_owned_entries[1]['percentage_split_petitioner'] = '50';
// $asset_jointly_owned_entries[1]['percentage_split_respondent'] = '50';

// //IF [split_method = Fixed dollar amount]
// //$asset_jointly_owned_entries[1]['percentage_split_petitioner'] = '$5,000.00';
// //$asset_jointly_owned_entries[1]['percentage_split_respondent'] = '$4,200.00';

//IRA's, Annuities, SEPS
$asset_jointly_owned_entries[1]['type_of_asset'] = "IRA's, Annuities, SEPS"; //[Bank Accounts; Brokerage Accounts; Businesses; Employment Benefits; Health & Medical Savings Account; IRA's, Annuities, SEPS; Life Insurance/Annuities; Memberships; Miscellaneous Items; Stocks, Bonds, Securities; Vehicles;]
$asset_jointly_owned_entries[1]['name_of_ira'] = 'IRA Joint One';
$asset_jointly_owned_entries[1]['current_market_value'] = '$15,000.00';

$asset_jointly_owned_entries[1]['awarded_type'] = 'Split between me and my spouse'; //[Awarded to one party, Split between me and my spouse]

//IF [awarded_type = Split between me and my spouse]
//$asset_jointly_owned_entries[0]['split_method'] = 'Percentage'; //[Percentage, Fixed dollar amount]
$asset_jointly_owned_entries[1]['split_method'] = 'Fixed dollar amount'; //[Percentage, Fixed dollar amount]

//IF [awarded_type = Awarded to one party]
//$asset_jointly_owned_entries[0]['party_awarded_to'] = 'Me'; //[Me, My Spouse]

//IF [split_method = Percentage]
$asset_jointly_owned_entries[1]['fixed_dollar_split_petitioner'] = '$10,000.00';
$asset_jointly_owned_entries[1]['fixed_dollar_split_respondent'] = '$5,000.00';

//Life Insurance/Annuties
//NO JOINT FOR THIS

//Vehicles not leased
//NO JOINT FOR THIS

//Stocks, Bonds, Securities
$asset_jointly_owned_entries[2]['type_of_asset'] = "Stocks, Bonds, Securities"; //[Bank Accounts; Brokerage Accounts; Businesses; Employment Benefits; Health & Medical Savings Account; IRA's, Annuities, SEPS; Life Insurance/Annuities; Memberships; Miscellaneous Items; Stocks, Bonds, Securities; Vehicles;]
$asset_jointly_owned_entries[2]['name_of_asset'] = 'Stock Joint One';
$asset_jointly_owned_entries[2]['current_market_value'] = '$12,000.00';

$asset_jointly_owned_entries[2]['awarded_type'] = 'Split between me and my spouse'; //[Awarded to one party, Split between me and my spouse]

//IF [awarded_type = Split between me and my spouse]
//$asset_jointly_owned_entries[0]['split_method'] = 'Percentage'; //[Percentage, Fixed dollar amount]
$asset_jointly_owned_entries[2]['split_method'] = 'Fixed dollar amount'; //[Percentage, Fixed dollar amount]

//IF [awarded_type = Awarded to one party]
//$asset_jointly_owned_entries[0]['party_awarded_to'] = 'Me'; //[Me, My Spouse]

//IF [split_method = Percentage]
$asset_jointly_owned_entries[2]['fixed_dollar_split_petitioner'] = '$7,000.00';
$asset_jointly_owned_entries[2]['fixed_dollar_split_respondent'] = '$5,000.00';

$asset_jointly_owned_entries[3]['type_of_asset'] = "Stocks, Bonds, Securities"; //[Bank Accounts; Brokerage Accounts; Businesses; Employment Benefits; Health & Medical Savings Account; IRA's, Annuities, SEPS; Life Insurance/Annuities; Memberships; Miscellaneous Items; Stocks, Bonds, Securities; Vehicles;]
$asset_jointly_owned_entries[3]['name_of_asset'] = 'Stock Joint One';
$asset_jointly_owned_entries[3]['current_market_value'] = '$52,000.00';

$asset_jointly_owned_entries[3]['awarded_type'] = 'Split between me and my spouse'; //[Awarded to one party, Split between me and my spouse]

//IF [awarded_type = Split between me and my spouse]
//$asset_jointly_owned_entries[0]['split_method'] = 'Percentage'; //[Percentage, Fixed dollar amount]
$asset_jointly_owned_entries[3]['split_method'] = 'Percentage'; //[Percentage, Fixed dollar amount]

//IF [awarded_type = Awarded to one party]
//$asset_jointly_owned_entries[0]['party_awarded_to'] = 'Me'; //[Me, My Spouse]

//IF [split_method = Percentage]
$asset_jointly_owned_entries[3]['percentage_split_petitioner'] = '40';
$asset_jointly_owned_entries[3]['percentage_split_respondent'] = '60';

//Miscellaneous Items

$asset_jointly_owned_entries[4]['type_of_asset'] = "Miscellaneous Items"; //[Bank Accounts; Brokerage Accounts; Businesses; Employment Benefits; Health & Medical Savings Account; IRA's, Annuities, SEPS; Life Insurance/Annuities; Memberships; Miscellaneous Items; Stocks, Bonds, Securities; Vehicles;]
$asset_jointly_owned_entries[4]['name_of_asset'] = 'Misc Joint One';
$asset_jointly_owned_entries[4]['current_market_value'] = '$5,000.00';
$asset_jointly_owned_entries[4]['current_debt'] = '$0';

$asset_jointly_owned_entries[4]['awarded_type'] = 'Split between me and my spouse'; //[Awarded to one party, Split between me and my spouse]

//IF [awarded_type = Split between me and my spouse]
//$asset_jointly_owned_entries[0]['split_method'] = 'Percentage'; //[Percentage, Fixed dollar amount]
$asset_jointly_owned_entries[4]['split_method'] = 'Fixed dollar amount'; //[Percentage, Fixed dollar amount]

//IF [awarded_type = Awarded to one party]
//$asset_jointly_owned_entries[0]['party_awarded_to'] = 'Me'; //[Me, My Spouse]

//IF [split_method = Percentage]
$asset_jointly_owned_entries[4]['fixed_dollar_split_petitioner'] = '$2,500.00';
$asset_jointly_owned_entries[4]['fixed_dollar_split_respondent'] = '$2,500.00';

$asset_jointly_owned_entries[5]['type_of_asset'] = "Miscellaneous Items"; //[Bank Accounts; Brokerage Accounts; Businesses; Employment Benefits; Health & Medical Savings Account; IRA's, Annuities, SEPS; Life Insurance/Annuities; Memberships; Miscellaneous Items; Stocks, Bonds, Securities; Vehicles;]
$asset_jointly_owned_entries[5]['name_of_asset'] = 'Misc Joint Two';
$asset_jointly_owned_entries[5]['current_market_value'] = '$52,000.00';
$asset_jointly_owned_entries[5]['current_debt'] = '$0';

$asset_jointly_owned_entries[5]['awarded_type'] = 'Split between me and my spouse'; //[Awarded to one party, Split between me and my spouse]

//IF [awarded_type = Split between me and my spouse]
//$asset_jointly_owned_entries[0]['split_method'] = 'Percentage'; //[Percentage, Fixed dollar amount]
$asset_jointly_owned_entries[5]['split_method'] = 'Percentage'; //[Percentage, Fixed dollar amount]

//IF [awarded_type = Awarded to one party]
//$asset_jointly_owned_entries[0]['party_awarded_to'] = 'Me'; //[Me, My Spouse]

//IF [split_method = Percentage]
$asset_jointly_owned_entries[5]['percentage_split_petitioner'] = '20';
$asset_jointly_owned_entries[5]['percentage_split_respondent'] = '80';

//Furniture
$asset_jointly_owned_entries[6]['type_of_asset'] = "Furniture"; //[Bank Accounts; Brokerage Accounts; Businesses; Employment Benefits; Health & Medical Savings Account; IRA's, Annuities, SEPS; Life Insurance/Annuities; Memberships; Miscellaneous Items; Stocks, Bonds, Securities; Vehicles;]
$asset_jointly_owned_entries[6]['name_of_asset'] = 'Cooker';
$asset_jointly_owned_entries[6]['location'] = 'Kitchen';
$asset_jointly_owned_entries[6]['party_awarded_to'] = 'Me'; //[Me, My Spouse]
$asset_jointly_owned_entries[6]['current_market_value'] = '$230.00';

$count_asset_jointly_owned = count($asset_jointly_owned_entries);

/* -------------------------------------------------------------------------------------------- */
/* DATABASE QUERY: Repeater Debts Individually Owned */

/* Code to Query */
// $client_user_id = $form_data'misc''created_by';
// $debt_individually_owned_form_id = 14;
// $debt_individually_owned_search_criteria['field_filters'][] = array('key' => 'created_by', 'value' => $client_user_id);
// $debt_individually_owned_search_criteria['status'] = 'active';
// $debt_individually_owned_sorting = array('key' => 'id', 'direction' => 'ASC', 'is_numeric' => true);
// $debt_individually_owned_entries = GFAPI::get_entries($debt_individually_owned_form_id, $debt_individually_owned_search_criteria, $debt_individually_owned_sorting);

/* TESTING: Model of Output from Query */
$debt_individually_owned_entries = array();

$debt_individually_owned_entries[0]['type_of_asset'] = "Credit Card"; //[Auto Note; Credit Card; Debt; IRS Debt;]

$debt_individually_owned_entries[0]['last_four_digits'] = '3456';
$debt_individually_owned_entries[0]['current_market_value'] = '$3,000.00';
$debt_individually_owned_entries[0]['current_debt'] = '$400.00';
$debt_individually_owned_entries[0]['party_awarded_to'] = 'Me'; //[Me, My Spouse]

$debt_individually_owned_entries[1]['type_of_asset'] = "Credit Card"; //[Auto Note; Credit Card; Debt; IRS Debt;]

$debt_individually_owned_entries[1]['last_four_digits'] = '1002';
$debt_individually_owned_entries[1]['current_market_value'] = '$9,000.00';
$debt_individually_owned_entries[1]['current_debt'] = '$500';
$debt_individually_owned_entries[1]['party_awarded_to'] = 'My Spouse'; //[Me, My Spouse]

//Auto Note
$debt_individually_owned_entries[2]['type_of_asset'] = "Auto Note"; //[Auto Note; Credit Card; Debt; IRS Debt;]

$debt_individually_owned_entries[2]['make'] = 'Renault';
$debt_individually_owned_entries[2]['model'] = 'Clio';
$debt_individually_owned_entries[2]['year'] = '2009';

$debt_individually_owned_entries[2]['current_market_value'] = '$25,000.00';
$debt_individually_owned_entries[2]['current_debt'] = '$9,000.00';
$debt_individually_owned_entries[2]['party_awarded_to'] = 'My Spouse'; //[Me, My Spouse]

$debt_individually_owned_entries[3]['type_of_asset'] = "Auto Note"; //[Auto Note; Credit Card; Debt; IRS Debt;]

$debt_individually_owned_entries[3]['make'] = 'BMW';
$debt_individually_owned_entries[3]['model'] = 'M3';
$debt_individually_owned_entries[3]['year'] = '2020';

$debt_individually_owned_entries[3]['current_market_value'] = '$68,000.00';
$debt_individually_owned_entries[3]['current_debt'] = '$14,000.00';
$debt_individually_owned_entries[3]['party_awarded_to'] = 'Me'; //[Me, My Spouse]

//Debt
$debt_individually_owned_entries[4]['type_of_asset'] = "Debt"; //[Auto Note; Credit Card; Debt; IRS Debt;]

$debt_individually_owned_entries[4]['last_four_digits'] = '1458';

$debt_individually_owned_entries[4]['current_debt'] = '$8,700.00';
$debt_individually_owned_entries[4]['party_awarded_to'] = 'Me'; //[Me, My Spouse]

$debt_individually_owned_entries[5]['type_of_asset'] = "Debt"; //[Auto Note; Credit Card; Debt; IRS Debt;]

$debt_individually_owned_entries[5]['last_four_digits'] = '8965';

$debt_individually_owned_entries[5]['current_debt'] = '$1,000.00';
$debt_individually_owned_entries[5]['party_awarded_to'] = 'My Spouse'; //[Me, My Spouse]

//IRS Debt
$debt_individually_owned_entries[6]['type_of_asset'] = "IRS Debt"; //[Auto Note; Credit Card; Debt; IRS Debt;]

$debt_individually_owned_entries[6]['last_four_digits'] = '9458';

$debt_individually_owned_entries[6]['current_debt'] = '$78,000.00';
$debt_individually_owned_entries[6]['party_awarded_to'] = 'Me'; //[Me, My Spouse]

$debt_individually_owned_entries[7]['type_of_asset'] = "IRS Debt"; //[Auto Note; Credit Card; Debt; IRS Debt;]

$debt_individually_owned_entries[7]['last_four_digits'] = '1065';

$debt_individually_owned_entries[7]['current_debt'] = '$2,500.00';
$debt_individually_owned_entries[7]['party_awarded_to'] = 'My Spouse'; //[Me, My Spouse]

$count_all_individual_debts = count($debt_individually_owned_entries);

/* -------------------------------------------------------------------------------------------- */
/* DATABASE QUERY: Repeater Asset Jointly Owned  */

/* Code to Query */
// $client_user_id = $form_data'misc''created_by';
// $debt_jointly_owned_form_id = 14;
// $debt_jointly_owned_search_criteria['field_filters'][] = array('key' => 'created_by', 'value' => $client_user_id);
// $debt_jointly_owned_search_criteria['status'] = 'active';
// $debt_jointly_owned_sorting = array('key' => 'id', 'direction' => 'ASC', 'is_numeric' => true);
// $debt_jointly_owned_entries = GFAPI::get_entries($debt_jointly_owned_form_id, $debt_jointly_owned_search_criteria, $debt_jointly_owned_sorting);

/* TESTING: Model of Output from Query */
$debt_jointly_owned = array();

$debt_jointly_owned_entries[0]['type_of_asset'] = "Credit Card"; //[Auto Note; Credit Card; Debt; IRS Debt;]

$debt_jointly_owned_entries[0]['last_four_digits'] = '7464';
$debt_jointly_owned_entries[0]['current_market_value'] = '$2,890.00';
$debt_jointly_owned_entries[0]['current_debt'] = '$9,080.00';
$debt_jointly_owned_entries[0]['split_method'] = 'Percentage';

$debt_jointly_owned_entries[0]['percentage_split_petitioner'] = '50';
$debt_jointly_owned_entries[0]['percentage_split_respondent'] = '50';

$debt_jointly_owned_entries[1]['type_of_asset'] = "Credit Card"; //[Auto Note; Credit Card; Debt; IRS Debt;]

$debt_jointly_owned_entries[1]['last_four_digits'] = '8854';
$debt_jointly_owned_entries[1]['current_market_value'] = '$7,890.00';
$debt_jointly_owned_entries[1]['current_debt'] = '$980.00';
$debt_jointly_owned_entries[1]['split_method'] = 'Percentage';

$debt_jointly_owned_entries[1]['percentage_split_petitioner'] = '40';
$debt_jointly_owned_entries[1]['percentage_split_respondent'] = '60';

$count_all_jointly_debts = count($debt_jointly_owned_entries);

/* -------------------------------------------------------------------------------------------- */
/* DATABASE QUERY: Property Solely Owned  */

/* Code to Query */
// $client_user_id = $form_data'misc''created_by';
// $property_solely_owned_entries_form_id = 88;
// $property_solely_owned_entries_search_criteria['field_filters'][] = array('key' => 'created_by', 'value' => $client_user_id);
// $property_solely_owned_entries_search_criteria['status'] = 'active';
// $property_solely_owned_entries_sorting = array('key' => 'id', 'direction' => 'ASC', 'is_numeric' => true);
// $property_solely_owned_entries_entries = GFAPI::get_entries($property_solely_owned_entries_form_id, $property_solely_owned_entries_search_criteria, $property_solely_owned_entries_sorting);
//      $count_property_individually_owned = count($property_solely_owned_entries)

/* TESTING: Model of Output from Query */

$property_individually_owned_entries[0]/*[100]*/['party_awarded_to'] = 'Me';
$property_individually_owned_entries[0]/*[101]*/['current_market_value'] = '$675,000.00';
$property_individually_owned_entries[0]/*[102]*/['debt_on_property'] = '$50,000.00';

$property_individually_owned_entries[0]/*[103]*/['street'] = '9';
$property_individually_owned_entries[0]/*[103]*/['street2'] = '';
$property_individually_owned_entries[0]/*[103]*/['city'] = 'Scunthorpe';
$property_individually_owned_entries[0]/*[103]*/['state'] = 'Texas';
$property_individually_owned_entries[0]/*[103]*/['zip'] = 'BT19 7NH';
$property_individually_owned_entries[0]/*[103]*/['country'] = 'United States';

$count_property_individually_owned = count($property_individually_owned_entries);

/* -------------------------------------------------------------------------------------------- */
/* DATABASE QUERY: Property Jointly Owned  */

/* Code to Query */
// $client_user_id = $form_data'misc''created_by';
// $property_jointly_owned_entries_form_id = 88;
// $property_jointly_owned_entries_search_criteria['field_filters'][] = array('key' => 'created_by', 'value' => $client_user_id);
// $property_jointly_owned_entries_search_criteria['status'] = 'active';
// $property_jointly_owned_entries_sorting = array('key' => 'id', 'direction' => 'ASC', 'is_numeric' => true);
// $property_jointly_owned_entries_entries = GFAPI::get_entries($property_jointly_owned_entries_form_id, $property_jointly_owned_entries_search_criteria, $property_jointly_owned_entries_sorting);
//      $count_property_jointly_owned = count($property_jointly_owned_entries);

$property_jointly_owned_entries[0]/*[100]*/['party_awarded_to'] = 'My Spouse';
$property_jointly_owned_entries[0]/*[101]*/['current_market_value'] = '$675,000.00';
$property_jointly_owned_entries[0]/*[102]*/['debt_on_property'] = '$0';

$property_jointly_owned_entries[0]/*[103]*/['street'] = '9';
$property_jointly_owned_entries[0]/*[103]*/['street2'] = '';
$property_jointly_owned_entries[0]/*[103]*/['city'] = 'Houston';
$property_jointly_owned_entries[0]/*[103]*/['state'] = 'Texas';
$property_jointly_owned_entries[0]/*[103]*/['zip'] = 'BT19 7NH';
$property_jointly_owned_entries[0]/*[103]*/['country'] = 'United States';

$count_property_jointly_owned = count($property_jointly_owned_entries);

/* TESTING: Model of Output from Query */

/* -------------------------------------------------------------------------------------------- */
/* MERGE ASSET ARRAYS: $asset_individually_owned_entries, $asset_jointly_owned_entries  */

/* TESTING: Model of Merged array */

$asset = array();

$count_all_assets = $count_asset_individually_owned + $count_asset_jointly_owned;

//for ($i = 0; $i < $count_all_assets; $i++) {

//  array_push($asset, $asset_individually_owned_entries[$i]);
//array_push($asset, $asset_jointly_owned_entries[$i]);

//}

$asset = array_merge($asset_individually_owned_entries, $asset_jointly_owned_entries);

/* -------------------------------------------------------------------------------------------- */
/* MERGE PROPERTY ARRAYS: $property_individually_owned_entries, $property_jointly_owned_entries  */

/* TESTING: Model of Merged array */

$property = array();

$count_all_property = $count_property_individually_owned + $count_property_jointly_owned;

//for ($i = 0; $i < $count_all_propertys; $i++) {

//  array_push($property, $property_individually_owned_entries[$i]);
//array_push($property, $property_jointly_owned_entries[$i]);

//}

$property = array_merge($property_individually_owned_entries, $property_jointly_owned_entries);

/* -------------------------------------------------------------------------------------------- */
/* MERGE ARRAYS: $debt_individually_owned_entries, $debt_jointly_owned_entries  */

/* TESTING: Model of Merged array */

$debt = array();

$debt = array_merge($debt_individually_owned_entries, $debt_jointly_owned_entries);

$count_all_debts = $count_all_individual_debts + $count_all_jointly_debts;

/* -------------------------------------------------------------------------------------------- */
/* GLOBAL VARIABLES: used throughout script. Not specific to a section */

$selectOption = 'X';
$leaveBlank = '&nbsp;';
$currentdate = date('F d, Y');
$checkMark = '&#10003;';

$title = 'Asset Spreadsheet';
//$pageNumber = 'PAGE {PAGENO}';

//Determine which party is the husband and wife
$master_entries[0][97] = 'Male'; // Gender

// if($master_entries[0][97] == 'Male'){
//     $husband = 'Me';
//     $wife = 'My Spouse';
// }else{
//     $husband = 'My Spouse';
//     $wife = 'Me';
// }

$husband = 'Me';
$totalEquityWife = 0; //values to be used to calculate the total equity for the wife
$totalEquityHusband = 0;

?>

<!-- -------------------------------------------------------------------------------------------- -->
<!-- Load PDF Styles -->
<style>
/* Pages */
@page {
  size: 8.5in 11in;
  margin: 0.5in 0.5in 0.5in 0.5in;
  header: html_MyCustomHeader;
  /* line-height: 1.3; */
  /* footer: html_MyCustomFooter; */
  /* margin-footer: 10mm; */
}


/* FONTS */
body,
td {
  font-size: 10pt;
}

body {
  margin: 0mm;
  padding: 0mm;
  line-height: 100%;
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

/* .bs_text_small {
  font-size: 10pt;
} */

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

.table_subheading_col_1_7 {
  width: 5%;
  border: 1px solid;
  border-top: 2px solid;
  border-right: 2px solid;
  text-align: center;

}

.table_subheading_col_2_7 {
  width: 35%;
  border: 1px solid;
  border-top: 2px solid;
  text-align: center;

}

.table_subheading_col_3_7,
.table_subheading_col_4_7,
.table_subheading_col_5_7 {
  width: 12%;
  border: 1px solid;
  border-top: 2px solid;
  text-align: center;

}

.table_subheading_col_6_7 {
  width: 12%;
  border: 1px solid;
  border-top: 2px solid;
  border-left: 2px solid;
  text-align: center;

}

.table_subheading_col_7_7 {
  width: 12%;
  border: 1px solid;
  border-top: 2px solid;
  text-align: center;

}

.table_entry_col_1_7 {
  border-right: 2px solid;
  border-top: 1px solid;
  border-left: 1px solid;
  border-bottom: 1px solid;

}

.table_entry_col_2_7,
.table_entry_col_3_7,
.table_entry_col_4_7,
.table_entry_col_5_7,
.table_entry_col_7_7 {
  border: 1px solid;
}

.table_entry_col_6_7 {
  border-left: 2px solid;
  border-bottom: 1px solid;
  border-top: 1px solid;
  border-right: 1px solid;

}

.table_subsubheading_col_1_7 {
  border-top: 2px solid;
  border-bottom: 2px solid;
  border-right: 2px solid;
  border-left: 1px solid;
  text-align: center;
  background-color: #f2f2f2;

}

.table_subsubheading_col_2_7,
.table_subsubheading_col_3_7,
.table_subsubheading_col_4_7,
.table_subsubheading_col_5_7 {
  border-top: 2px solid;
  border-bottom: 2px solid;
  text-align: center;
  background-color: #f2f2f2;
}

.table_subsubheading_col_6_7 {
  border-top: 2px solid;
  border-bottom: 2px solid;
  border-left: 2px solid;
  text-align: center;
  background-color: #f2f2f2;

}

.table_subsubheading_col_7_7 {
  border-top: 2px solid;
  border-bottom: 2px solid;
  border-right: 1px solid;
  text-align: center;
  background-color: #f2f2f2;

}

.table_furniture_col_1_5 {
  width: 30%;
  border: 1px solid;
}

.table_furniture_col_2_5 {
  width: 20%;
  border: 1px solid;

}

.table_furniture_col_3_5 {
  width: 10%;
  border: 1px solid;

}

.table_furniture_col_4_5 {
  width: 20%;
  border: 1px solid;

}

.table_furniture_col_5_5 {
  width: 20%;
  border: 1px solid;

}

.table_furniture_entry_col_1_5,
.table_furniture_entry_col_2_5,
.table_furniture_entry_col_3_5,
.table_furniture_entry_col_4_5,
.table_furniture_entry_col_5_5 {
  border: 1px solid;

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
  <!-- BOOKMARK: Deed of Trust to Secure Assumption -->
  <!-- Variables:NONE -->
  <!-- Output -->
  <bookmark content="<?php echo $title ?>" />


  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- TABLE: START -->
  <!-- Variables: NONE -->
  <!-- Output -->
  <table>

    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- TABLE: HEADING -->
    <!-- Variables -->
    <!-- Output -->

    <tr>
      <th colspan="5">INVENTORY SPREADSHEET</th>
      <th colspan="2">PROPOSED PROPERTY DIVISION</th>
    </tr>

    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- TABLE: SUB-HEADING -->
    <!-- Variables -->
    <!-- Output -->

    <tr>
      <td class="table_subheading_col_1_7">Item #</th>
      <td class="table_subheading_col_2_7">Asset Description</th>
      <td class="table_subheading_col_3_7">Current Fair Market Value</th>
      <td class="table_subheading_col_4_7">Current Debt</th>
      <td class="table_subheading_col_5_7">Equity - FMV<br>minus Debt</th>
      <td class="table_subheading_col_6_7">HUSBAND</th>
      <td class="table_subheading_col_7_7">WIFE</th>
    </tr>

    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- SECTION 1: Bank Accounts -->
    <!-- Variables -->

    <!-- Output -->
    <tr>
      <td class="table_subsubheading_col_1_7"><?php echo 1 ?></th>
      <td class="table_subsubheading_col_2_7">Bank Accounts</th>
      <td class="table_subsubheading_col_3_7">
        </th>
      <td class="table_subsubheading_col_4_7">
        </th>
      <td class="table_subsubheading_col_5_7">
        </th>
      <td class="table_subsubheading_col_6_7">
        </th>
      <td class="table_subsubheading_col_7_7">
        </th>
    </tr>

    <?php
//for each asset with type of bank account:

//number used for Item # column
$bankCount = 1;
for ($i = 0; $i < $count_all_assets; $i++) {

    if ($asset[$i]['type_of_asset'] == 'Bank Accounts' && $husband == 'Me' && $asset[$i]['split_method'] == 'Percentage') {
        //Calculate value given to husband and wife calculating using current_market_value of item and percentage to whom

        //turn current_market_value into calculatable number

        $replace = array("$", ","); //Array of values that will be used in the str_replace function as characters to be removed from string

        $marketValueBank = str_replace($replace, "", $asset[$i]['current_market_value']); //remove values in $replace from string

        //Perform calculation with percentage for husband and use that to determine value
        //Husband's percentage of asset
        $husbandsPercent = $asset[$i]['percentage_split_petitioner'];

        $intMarketValueBank = intval($marketValueBank); //set string with removed characters to be an integer

        $husbandsPercentValue = $intMarketValueBank * $husbandsPercent / 100;

        $husbandValueFromPercent = number_format($husbandsPercentValue, 2);

        $totalEquityHusband = $totalEquityHusband + $husbandsPercentValue;

        //Use remainder as value for wife
        $wifePercentValue = $marketValueBank - $husbandsPercentValue;

        $totalEquityWife = $totalEquityWife + $wifePercentValue;

        $wifeValueFromPercent = number_format($wifePercentValue, 2);

    } else if ($asset[$i]['type_of_asset'] == 'Bank Accounts' && $husband == 'My Spouse' && $asset[$i]['split_method'] == 'Percentage') {
        //Calculate value given to husband and wife calculating using current_market_value of item and percentage to whom

        //turn current_market_value into calculatable number

        $replace = array("$", ","); //Array of values that will be used in the str_replace function as characters to be removed from string

        $marketValueBank = str_replace($replace, "", $asset[$i]['current_market_value']); //remove values in $replace from string

        //Perform calculation with percentage for husband and use that to determine value
        //Husband's percentage of asset
        $husbandsPercent = $asset[$i]['percentage_split_respondent'];

        $intMarketValueBank = intval($marketValueBank); //set string with removed characters to be an integer

        $husbandsPercentValue = $intMarketValueBank * $husbandsPercent / 100;

        $husbandValueFromPercent = number_format($husbandsPercentValue, 2);

        $totalEquityHusband = $totalEquityHusband + $husbandsPercentValue;

        //Use remainder as value for wife
        $wifePercentValue = $marketValueBank - $husbandsPercentValue;

        $totalEquityWife = $totalEquityWife + $wifePercentValue;

        $wifeValueFromPercent = number_format($wifePercentValue, 2);

    }

    //IF [Solely owned by Petitioner and Petitioner is husband]
    if ($asset[$i]['type_of_asset'] == 'Bank Accounts' && $asset[$i]['party_awarded_to'] == 'Me' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_account'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_6_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_7_7">
        </th>
    </tr>

    <?php $bankCount = $bankCount + 1;
    }
    //IF [Solely owned by Respondent and Petitioner is husband]
    if ($asset[$i]['type_of_asset'] == 'Bank Accounts' && $asset[$i]['party_awarded_to'] == 'My Spouse' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_account'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_6_7">
        </th>
      <td class="table_entry_col_7_7"><?php echo $asset[$i]['current_market_value'] ?></th>
    </tr>

    <?php $bankCount = $bankCount + 1;
    }

    //IF [Solely owned by Petitioner and Respondent is husband]
    if ($asset[$i]['type_of_asset'] == 'Bank Accounts' && $asset[$i]['party_awarded_to'] == 'Me' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_account'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_6_7">
        </th>
      <td class="table_entry_col_7_7"><?php echo $asset[$i]['current_market_value'] ?></th>
    </tr>

    <?php $bankCount = $bankCount + 1;
    }
//IF [Solely owned by Respondent and Respondent is husband]
    if ($asset[$i]['type_of_asset'] == 'Bank Accounts' && $asset[$i]['party_awarded_to'] == 'My Spouse' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_account'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_6_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_7_7">
        </th>
    </tr>

    <?php $bankCount = $bankCount + 1;
    }

    //IF [Split by percentage and husband is petitioner]
    if ($asset[$i]['type_of_asset'] == 'Bank Accounts' && $asset[$i]['split_method'] == 'Percentage' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_account'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_6_7">$<?php echo $husbandValueFromPercent ?></th>
      <td class="table_entry_col_7_7">$<?php echo $wifeValueFromPercent ?></th>
    </tr>

    <?php $bankCount = $bankCount + 1;
    }
    //IF [Split by percentage and husband is respondent]
    if ($asset[$i]['type_of_asset'] == 'Bank Accounts' && $asset[$i]['split_method'] == 'Percentage' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_account'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_6_7">$<?php echo $husbandValueFromPercent ?></th>
      <td class="table_entry_col_7_7">$<?php echo $wifeValueFromPercent ?></th>
    </tr>

    <?php $bankCount = $bankCount + 1;
    }
    //IF[Split by fixed dollar and husband is petitioner]
    if ($asset[$i]['type_of_asset'] == 'Bank Accounts' && $asset[$i]['split_method'] == 'Fixed dollar amount' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_account'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_6_7"><?php echo $asset[$i]['fixed_dollar_split_petitioner'] ?></th>
      <td class="table_entry_col_7_7"><?php echo $asset[$i]['fixed_dollar_split_respondent'] ?></th>
    </tr>

    <?php $bankCount = $bankCount + 1;
    }
    if ($asset[$i]['type_of_asset'] == 'Bank Accounts' && $asset[$i]['split_method'] == 'Fixed dollar amount' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_account'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_6_7"><?php echo $asset[$i]['fixed_dollar_split_respondent'] ?></th>
      <td class="table_entry_col_7_7"><?php echo $asset[$i]['fixed_dollar_split_petitioner'] ?></th>
    </tr>


    <?php $bankCount = $bankCount + 1;
    }
}
?>

    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- SECTION 2: Real Property -->
    <!-- Variables -->

    <tr>
      <td class="table_subsubheading_col_1_7"><?php echo 2 ?></th>
      <td class="table_subsubheading_col_2_7">Real Property</th>
      <td class="table_subsubheading_col_3_7">
        </th>
      <td class="table_subsubheading_col_4_7">
        </th>
      <td class="table_subsubheading_col_5_7">
        </th>
      <td class="table_subsubheading_col_6_7">
        </th>
      <td class="table_subsubheading_col_7_7">
        </th>
    </tr>

    <?php
//for each asset with type of bank account:

for ($i = 0; $i < $count_all_property; $i++) {

    //Calculate Equity
    $replace = array("$", ","); //Array of values that will be used in the str_replace function as characters to be removed from string

    $marketValue = str_replace($replace, "", $property[$i]['current_market_value']); //remove values in $replace from string
    $propertyDebt = str_replace($replace, "", $property[$i]['debt_on_property']);

    $intMarketValue = intval($marketValue); //set string with removed characters to be an integer
    $intPropertyDebt = intval($propertyDebt);

    $equityPreFormat = $intMarketValue - $intPropertyDebt; //calculate equity with new integer

    $equity = number_format($equityPreFormat, 2); //Convert back into format of currency

    $totalEquity = $totalEquity + $equityPreFormat;

    //Format address IF [address line 2 is empty, address is everything except line 2, else, address is everything]
    if ($property[$i]['street2'] == '') {
        $address_full = $property[$i]['street'] . ', ' . $property[$i]['city'] . ', '
            . $property[$i]['state'] . ', ' . $property[$i]['zip'] . ', ' . $property[$i]['country'];

    } else if ($property[$i]['street2'] != '') {
        $address_full = $property[$i]['street'] . ', ' . $property[$i]['street2'] . ', ' . $property[$i]['city'] . ', '
            . $property[$i]['state'] . ', ' . $property[$i]['zip'] . ', ' . $property[$i]['country'];

    }

    if ($property[$i]['party_awarded_to'] == 'Me' && $husband == 'Me') {

        $totalEquityHusband = $totalEquityHusband + $equityPreFormat;

    } else if ($property[$i]['party_awarded_to'] == 'My Spouse' && $husband == 'Me') {

        $totalEquityWife = $totalEquityWife + $equityPreFormat;

    } else if ($property[$i]['party_awarded_to'] == 'Me' && $husband == 'My Spouse') {

        $totalEquityWife = $totalEquityWife + $equityPreFormat;

    } else if ($property[$i]['party_awarded_to'] == 'My Spouse' && $husband == 'My Spouse') {

        $totalEquityHusband = $totalEquityHusband + $equityPreFormat;

    }

    $address_full = strval($address_full);

    //IF [Solely owned by Petitioner and Petitioner is husband]
    if ($property[$i]['party_awarded_to'] == 'Me' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $address_full ?></th>
      <td class="table_entry_col_3_7"><?php echo $property[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $property[$i]['debt_on_property'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_7_7">
        </th>
    </tr>

    <?php }

//IF [Solely owned by Respondent and Petitioner is husband]
    if ($property[$i]['party_awarded_to'] == 'My Spouse' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $address_full ?></th>
      <td class="table_entry_col_3_7"><?php echo $property[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $property[$i]['debt_on_property'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">
        </th>
      <td class="table_entry_col_7_7">$<?php echo $equity ?></th>
    </tr>

    <?php }

//IF [Solely owned by Petitioner and Respondent is husband]
    if ($property[$i]['party_awarded_to'] == 'Me' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $address_full ?></th>
      <td class="table_entry_col_3_7"><?php echo $property[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $property[$i]['debt_on_property'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">
        </th>
      <td class="table_entry_col_7_7">$<?php echo $equity ?></th>
    </tr>

    <?php }

//IF [Solely owned by Respondent and Respondent is husband]
    if ($property[$i]['party_awarded_to'] == 'My Spouse' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $address_full ?></th>
      <td class="table_entry_col_3_7"><?php echo $property[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $property[$i]['debt_on_property'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_7_7">
        </th>
    </tr>

    <?php }

}?>


    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- SECTION 3: IRAs/Retirement Plans/Pension Plans/Deferred Comp -->
    <!-- Variables -->
    <!-- Output -->

    <tr>
      <td class="table_subsubheading_col_1_7"><?php echo 3 ?></th>
      <td class="table_subsubheading_col_2_7">IRAs/Retirement Plans/Pension Plans/Deferred Comp</th>
      <td class="table_subsubheading_col_3_7">
        </th>
      <td class="table_subsubheading_col_4_7">
        </th>
      <td class="table_subsubheading_col_5_7">
        </th>
      <td class="table_subsubheading_col_6_7">
        </th>
      <td class="table_subsubheading_col_7_7">
        </th>
    </tr>

    <?php

for ($i = 0; $i < $count_all_assets; $i++) {

    if ($asset[$i]['type_of_asset'] == "IRA's, Annuities, SEPS" && $husband == 'Me' && $asset[$i]['split_method'] == 'Percentage') {
        //Calculate value given to husband and wife calculating using current_market_value of item and percentage to whom

        //turn current_market_value into calculatable number

        $replace = array("$", ","); //Array of values that will be used in the str_replace function as characters to be removed from string

        $marketValueBank = str_replace($replace, "", $asset[$i]['current_market_value']); //remove values in $replace from string

        //Perform calculation with percentage for husband and use that to determine value
        //Husband's percentage of asset
        $husbandsPercent = $asset[$i]['percentage_split_petitioner'];

        $intMarketValueBank = intval($marketValueBank); //set string with removed characters to be an integer

        $husbandsPercentValue = $intMarketValueBank * $husbandsPercent / 100;

        $husbandValueFromPercent = number_format($husbandsPercentValue, 2);

        $totalEquityHusband = $totalEquityHusband + $husbandsPercentValue;

        //Use remainder as value for wife
        $wifePercentValue = $marketValueBank - $husbandsPercentValue;

        $wifeValueFromPercent = number_format($wifePercentValue, 2);

        $totalEquityWife = $totalEquityWife + $wifePercentValue;

    }
    if ($asset[$i]['type_of_asset'] == "IRA's, Annuities, SEPS" && $husband == 'My Spouse' && $asset[$i]['split_method'] == 'Percentage') {
        //Calculate value given to husband and wife calculating using current_market_value of item and percentage to whom

        //turn current_market_value into calculatable number

        $replace = array("$", ","); //Array of values that will be used in the str_replace function as characters to be removed from string

        $marketValueBank = str_replace($replace, "", $asset[$i]['current_market_value']); //remove values in $replace from string

        //Perform calculation with percentage for husband and use that to determine value
        //Husband's percentage of asset
        $husbandsPercent = $asset[$i]['percentage_split_respondent'];

        $intMarketValueBank = intval($marketValueBank); //set string with removed characters to be an integer

        $husbandsPercentValue = $intMarketValueBank * $husbandsPercent / 100;

        $husbandValueFromPercent = number_format($husbandsPercentValue, 2);

        $totalEquityHusband = $totalEquityHusband + $husbandsPercentValue;

        //Use remainder as value for wife
        $wifePercentValue = $marketValueBank - $husbandsPercentValue;

        $wifeValueFromPercent = number_format($wifePercentValue, 2);

        $totalEquityWife = $totalEquityWife + $wifePercentValue;

    }

    //IF [IRAs/Retirement Plans/Pension Plans/Deferred Comp solely awarded to Petitioner and Petitioner is Husband]

    if ($asset[$i]['type_of_asset'] == "IRA's, Annuities, SEPS" && $asset[$i]['party_awarded_to'] == 'Me' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_ira'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_6_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_7_7">
        </th>
    </tr>

    <?php
}

    //IF [IRAs/Retirement Plans/Pension Plans/Deferred Comp solely awarded to Respondent and Petitioner is Husband]
    if ($asset[$i]['type_of_asset'] == "IRA's, Annuities, SEPS" && $asset[$i]['party_awarded_to'] == 'My Spouse' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_ira'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_6_7">
        </th>
      <td class="table_entry_col_7_7"><?php echo $asset[$i]['current_market_value'] ?></th>
    </tr>

    <?php
}

    //IF [IRAs/Retirement Plans/Pension Plans/Deferred Comp solely awarded to Petitioner and Respondent is Husband]
    if ($asset[$i]['type_of_asset'] == "IRA's, Annuities, SEPS" && $asset[$i]['party_awarded_to'] == 'Me' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_ira'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_6_7">
        </th>
      <td class="table_entry_col_7_7"><?php echo $asset[$i]['current_market_value'] ?></th>
    </tr>

    <?php
}
    //IF [IRAs/Retirement Plans/Pension Plans/Deferred Comp solely awarded to Respondent and Respondent is Husband]
    if ($asset[$i]['type_of_asset'] == "IRA's, Annuities, SEPS" && $asset[$i]['party_awarded_to'] == 'My Spouse' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_ira'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_6_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_7_7">
        </th>
    </tr>

    <?php
}

    //IF [IRAs/Retirement Plans/Pension Plans/Deferred Comp split by Percentage and Petitioner is Husband]
    if ($asset[$i]['type_of_asset'] == "IRA's, Annuities, SEPS" && $asset[$i]['split_method'] == 'Percentage' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_ira'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_6_7">$<?php echo $husbandValueFromPercent ?> </th>
      <td class="table_entry_col_7_7">$<?php echo $wifeValueFromPercent ?> </th>
    </tr>

    <?php
}

    //IF [IRAs/Retirement Plans/Pension Plans/Deferred Comp split by Percentage and Respondent is Husband]
    if ($asset[$i]['type_of_asset'] == "IRA's, Annuities, SEPS" && $asset[$i]['split_method'] == 'Percentage' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_ira'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_6_7">$<?php echo $husbandValueFromPercent ?></th>
      <td class="table_entry_col_7_7">$<?php echo $wifeValueFromPercent ?></th>
    </tr>

    <?php
}

    //IF [IRAs/Retirement Plans/Pension Plans/Deferred Comp split by Fixed dollar amount and Petitioner is Husband]
    if ($asset[$i]['type_of_asset'] == "IRA's, Annuities, SEPS" && $asset[$i]['split_method'] == 'Fixed dollar amount' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_ira'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_6_7"><?php echo $asset[$i]['fixed_dollar_split_petitioner'] ?></th>
      <td class="table_entry_col_7_7"><?php echo $asset[$i]['fixed_dollar_split_respondent'] ?></th>
    </tr>

    <?php
}

    //IF [IRAs/Retirement Plans/Pension Plans/Deferred Comp split by Fixed dollar amount and Respondent is Husband]
    if ($asset[$i]['type_of_asset'] == "IRA's, Annuities, SEPS" && $asset[$i]['split_method'] == 'Fixed dollar amount' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_ira'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_6_7"><?php echo $asset[$i]['fixed_dollar_split_respondent'] ?></th>
      <td class="table_entry_col_7_7"><?php echo $asset[$i]['fixed_dollar_split_petitioner'] ?></th>
    </tr>

    <?php
}

}
?>

    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- SECTION 4: Life Insurance/Annuities -->
    <!-- Variables -->
    <!-- Output -->

    <tr>
      <td class="table_subsubheading_col_1_7"><?php echo 4 ?></th>
      <td class="table_subsubheading_col_2_7">Life Insurance/Annuities</th>
      <td class="table_subsubheading_col_3_7">
        </th>
      <td class="table_subsubheading_col_4_7">
        </th>
      <td class="table_subsubheading_col_5_7">
        </th>
      <td class="table_subsubheading_col_6_7">
        </th>
      <td class="table_subsubheading_col_7_7">
        </th>
    </tr>

    <?php

for ($i = 0; $i < $count_all_assets; $i++) {

    //IF [Life Insurance/Annuities solely awarded to Petitioner and Petitioner is Husband]

    if ($asset[$i]['type_of_asset'] == "Life Insurance/Annuities" && $asset[$i]['party_awarded_to'] == 'Me' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_insurance'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_6_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_7_7">
        </th>
    </tr>

    <?php
}

    //IF [Life Insurance/Annuities solely awarded to Respondent and Petitioner is Husband]
    if ($asset[$i]['type_of_asset'] == "Life Insurance/Annuities" && $asset[$i]['party_awarded_to'] == 'My Spouse' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_insurance'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_6_7">
        </th>
      <td class="table_entry_col_7_7"><?php echo $asset[$i]['current_market_value'] ?></th>
    </tr>

    <?php
}

    //IF [Life Insurance/Annuities solely awarded to Petitioner and Respondent is Husband]
    if ($asset[$i]['type_of_asset'] == "Life Insurance/Annuities" && $asset[$i]['party_awarded_to'] == 'Me' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_insurance'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_6_7">
        </th>
      <td class="table_entry_col_7_7"><?php echo $asset[$i]['current_market_value'] ?></th>
    </tr>

    <?php
}
    //IF [Life Insurance/Annuities solely awarded to Respondent and Respondent is Husband]
    if ($asset[$i]['type_of_asset'] == "Life Insurance/Annuities" && $asset[$i]['party_awarded_to'] == 'My Spouse' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_insurance'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_6_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_7_7">
        </th>
    </tr>

    <?php
}

}

?>

    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- SECTION 5: Vehicles - Not Leased -->
    <!-- Variables -->
    <!-- Output -->

    <tr>
      <td class="table_subsubheading_col_1_7"><?php echo 5 ?></th>
      <td class="table_subsubheading_col_2_7">Vehicles - Not Leased</th>
      <td class="table_subsubheading_col_3_7">
        </th>
      <td class="table_subsubheading_col_4_7">
        </th>
      <td class="table_subsubheading_col_5_7">
        </th>
      <td class="table_subsubheading_col_6_7">
        </th>
      <td class="table_subsubheading_col_7_7">
        </th>
    </tr>

    <?php

for ($i = 0; $i < $count_all_assets; $i++) {

    if ($asset[$i]['type_of_asset'] == "Vehicles") {

        //Calculate Equity
        $replace = array("$", ","); //Array of values that will be used in the str_replace function as characters to be removed from string

        $marketValue = str_replace($replace, "", $asset[$i]['current_market_value']); //remove values in $replace from string
        $assetDebt = str_replace($replace, "", $asset[$i]['current_debt']);

        $intMarketValue = intval($marketValue); //set string with removed characters to be an integer
        $intAssetDebt = intval($assetDebt);

        $equityPreFormat = $intMarketValue - $intAssetDebt; //calculate equity with new integer

        $equity = number_format($equityPreFormat, 2); //Convert back into format of currency

        //Set vehicle name to be vehicle year, make, model
        $vehicleName = $asset[$i]['year'] . ', ' . $asset[$i]['make'] . ', ' . $asset[$i]['model'];

    }
    if ($asset[$i]['type_of_asset'] == 'Vehicles' && $asset[$i]['current_debt'] !== '$0') {
        $totalEquity = $totalEquity + $equityPreFormat;
    }

    //IF [husband is petioner and party awarded asset is petitioner and debt is no 0]
    if ($husband == 'Me' && $asset[$i]['type_of_asset'] == 'Vehicles' && $asset[$i]['party_awarded_to'] == 'Me' && $asset[$i]['current_debt'] !== '$0') {
        $totalEquityHusband = $totalEquityHusband + $equityPreFormat;

        //IF [husband is petioner and party awarded asset is respondent and debt is no 0]
    } else if ($husband == 'Me' && $asset[$i]['type_of_asset'] == 'Vehicles' && $asset[$i]['party_awarded_to'] == 'My Spouse' && $asset[$i]['current_debt'] !== '$0') {
        $totalEquityWife = $totalEquityWife + $equityPreFormat;
    }
    //IF [husband is respondent and party awarded asset is petitioner and debt is no 0]
    else if ($husband == 'My Spouse' && $asset[$i]['type_of_asset'] == 'Vehicles' && $asset[$i]['party_awarded_to'] == 'Me' && $asset[$i]['current_debt'] !== '$0') {
        $totalEquityWife = $totalEquityWife + $equityPreFormat;

        //IF [husband is respondent and party awarded asset is respondent and debt is no 0]
    } else if ($husband == 'My Spouse' && $asset[$i]['type_of_asset'] == 'Vehicles' && $asset[$i]['party_awarded_to'] == 'My Spouse' && $asset[$i]['current_debt'] !== '$0') {
        $totalEquityHusband = $totalEquityHusband + $equityPreFormat;
    }

    //IF [Life Insurance/Annuities solely awarded to Petitioner and Petitioner is Husband]

    if ($asset[$i]['type_of_asset'] == "Vehicles" && $asset[$i]['party_awarded_to'] == 'Me' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $vehicleName ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $asset[$i]['current_debt'] ?> </th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_7_7">
        </th>
    </tr>

    <?php
}

    //IF [Life Insurance/Annuities solely awarded to Respondent and Petitioner is Husband]
    if ($asset[$i]['type_of_asset'] == "Vehicles" && $asset[$i]['party_awarded_to'] == 'My Spouse' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $vehicleName ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $asset[$i]['current_debt'] ?> </th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">
        </th>
      <td class="table_entry_col_7_7">$<?php echo $equity ?></th>
    </tr>

    <?php
}

    //IF [Vehicles solely awarded to Petitioner and Respondent is Husband]
    if ($asset[$i]['type_of_asset'] == "Vehicles" && $asset[$i]['party_awarded_to'] == 'Me' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $vehicleName ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $asset[$i]['current_debt'] ?> </th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">
        </th>
      <td class="table_entry_col_7_7">$<?php echo $equity ?></th>
    </tr>

    <?php
}
    //IF [Vehicles solely awarded to Respondent and Respondent is Husband]
    if ($asset[$i]['type_of_asset'] == "Vehicles" && $asset[$i]['party_awarded_to'] == 'My Spouse' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $vehicleName ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $asset[$i]['current_debt'] ?> </th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_7_7">
        </th>
    </tr>

    <?php
}

}

?>



    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- SECTION 6: Stocks, Bonds, Securities-->
    <!-- Variables -->
    <!-- Output -->

    <tr>
      <td class="table_subsubheading_col_1_7"><?php echo 6 ?></th>
      <td class="table_subsubheading_col_2_7">Stocks, Bonds, Securities</th>
      <td class="table_subsubheading_col_3_7">
        </th>
      <td class="table_subsubheading_col_4_7">
        </th>
      <td class="table_subsubheading_col_5_7">
        </th>
      <td class="table_subsubheading_col_6_7">
        </th>
      <td class="table_subsubheading_col_7_7">
        </th>
    </tr>

    <?php

for ($i = 0; $i < $count_all_assets; $i++) {

    if ($asset[$i]['type_of_asset'] == "Stocks, Bonds, Securities" && $husband == 'Me' && $asset[$i]['split_method'] == 'Percentage') {
        //Calculate value given to husband and wife calculating using current_market_value of item and percentage to whom

        //turn current_market_value into calculatable number

        $replace = array("$", ","); //Array of values that will be used in the str_replace function as characters to be removed from string

        $marketValueBank = str_replace($replace, "", $asset[$i]['current_market_value']); //remove values in $replace from string

        //Perform calculation with percentage for husband and use that to determine value
        //Husband's percentage of asset
        $husbandsPercent = $asset[$i]['percentage_split_petitioner'];

        $intMarketValueBank = intval($marketValueBank); //set string with removed characters to be an integer

        $husbandsPercentValue = $intMarketValueBank * $husbandsPercent / 100;

        $husbandValueFromPercent = number_format($husbandsPercentValue, 2);

        $totalEquityHusband = $totalEquityHusband + $husbandsPercentValue;

        //Use remainder as value for wife
        $wifePercentValue = $marketValueBank - $husbandsPercentValue;

        $wifeValueFromPercent = number_format($wifePercentValue, 2);

        $totalEquityWife = $totalEquityWife + $wifePercentValue;

    }
    if ($asset[$i]['type_of_asset'] == 'Stocks, Bonds, Securities' && $husband == 'My Spouse' && $asset[$i]['split_method'] == 'Percentage') {
        //Calculate value given to husband and wife calculating using current_market_value of item and percentage to whom

        //turn current_market_value into calculatable number

        $replace = array("$", ","); //Array of values that will be used in the str_replace function as characters to be removed from string

        $marketValueBank = str_replace($replace, "", $asset[$i]['current_market_value']); //remove values in $replace from string

        //Perform calculation with percentage for husband and use that to determine value
        //Husband's percentage of asset
        $husbandsPercent = $asset[$i]['percentage_split_respondent'];

        $intMarketValueBank = intval($marketValueBank); //set string with removed characters to be an integer

        $husbandsPercentValue = $intMarketValueBank * $husbandsPercent / 100;

        $husbandValueFromPercent = number_format($husbandsPercentValue, 2);

        $totalEquityHusband = $totalEquityHusband + $husbandsPercentValue;

        //Use remainder as value for wife
        $wifePercentValue = $marketValueBank - $husbandsPercentValue;

        $wifeValueFromPercent = number_format($wifePercentValue, 2);

        $totalEquityWife = $totalEquityWife + $wifePercentValue;

    }

    //IF [Stocks, Bonds, Securities solely awarded to Petitioner and Petitioner is Husband]

    if ($asset[$i]['type_of_asset'] == "Stocks, Bonds, Securities" && $asset[$i]['party_awarded_to'] == 'Me' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_asset'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_6_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_7_7">
        </th>
    </tr>

    <?php
}

    //IF [Stocks, Bonds, Securities solely awarded to Respondent and Petitioner is Husband]
    if ($asset[$i]['type_of_asset'] == "Stocks, Bonds, Securities" && $asset[$i]['party_awarded_to'] == 'My Spouse' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_asset'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_6_7">
        </th>
      <td class="table_entry_col_7_7"><?php echo $asset[$i]['current_market_value'] ?></th>
    </tr>

    <?php
}

    //IF [Stocks, Bonds, Securities solely awarded to Petitioner and Respondent is Husband]
    if ($asset[$i]['type_of_asset'] == "Stocks, Bonds, Securities" && $asset[$i]['party_awarded_to'] == 'Me' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_asset'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_6_7">
        </th>
      <td class="table_entry_col_7_7"><?php echo $asset[$i]['current_market_value'] ?></th>
    </tr>

    <?php
}
    //IF [Stocks, Bonds, Securities solely awarded to Respondent and Respondent is Husband]
    if ($asset[$i]['type_of_asset'] == "Stocks, Bonds, Securities" && $asset[$i]['party_awarded_to'] == 'My Spouse' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_asset'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_6_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_7_7">
        </th>
    </tr>

    <?php
}

    //IF [Stocks, Bonds, Securities split by Percentage and Petitioner is Husband]
    if ($asset[$i]['type_of_asset'] == "Stocks, Bonds, Securities" && $asset[$i]['split_method'] == 'Percentage' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_asset'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_6_7">$<?php echo $husbandValueFromPercent ?></th>
      <td class="table_entry_col_7_7">$<?php echo $wifeValueFromPercent ?></th>
    </tr>

    <?php
}

    //IF [Stocks, Bonds, Securities split by Percentage and Respondent is Husband]
    if ($asset[$i]['type_of_asset'] == "Stocks, Bonds, Securities" && $asset[$i]['split_method'] == 'Percentage' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_asset'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_6_7">$<?php echo $husbandValueFromPercent ?></th>
      <td class="table_entry_col_7_7">$<?php echo $wifeValueFromPercent ?></th>
    </tr>

    <?php
}

    //IF [Stocks, Bonds, Securities split by Fixed dollar amount and Petitioner is Husband]
    if ($asset[$i]['type_of_asset'] == "Stocks, Bonds, Securities" && $asset[$i]['split_method'] == 'Fixed dollar amount' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_asset'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_6_7"><?php echo $asset[$i]['fixed_dollar_split_petitioner'] ?></th>
      <td class="table_entry_col_7_7"><?php echo $asset[$i]['fixed_dollar_split_respondent'] ?></th>
    </tr>

    <?php
}

    //IF [Stocks, Bonds, Securities split by Fixed dollar amount and Respondent is Husband]
    if ($asset[$i]['type_of_asset'] == "Stocks, Bonds, Securities" && $asset[$i]['split_method'] == 'Fixed dollar amount' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_asset'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_6_7"><?php echo $asset[$i]['fixed_dollar_split_respondent'] ?></th>
      <td class="table_entry_col_7_7"><?php echo $asset[$i]['fixed_dollar_split_petitioner'] ?></th>
    </tr>

    <?php
}

}
?>



    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- SECTION 7: Household Furniture & Fixtures -->
    <!-- Variables -->
    <!-- Output -->
    <tr>
      <td class="table_subsubheading_col_1_7"><?php echo 7 ?></th>
      <td class="table_subsubheading_col_2_7">Household Furniture & Fixtures</th>
      <td class="table_subsubheading_col_3_7">
        </th>
      <td class="table_subsubheading_col_4_7">
        </th>
      <td class="table_subsubheading_col_5_7">
        </th>
      <td class="table_subsubheading_col_6_7">
        </th>
      <td class="table_subsubheading_col_7_7">
        </th>
    </tr>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7">SEE NEXT PAGE</th>
      <td class="table_entry_col_3_7">
        </th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7">
        </th>
      <td class="table_entry_col_6_7">
        </th>
      <td class="table_entry_col_7_7">
        </th>
    </tr>

    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- SECTION 8: Other Items -->
    <!-- Variables -->
    <!-- Output -->
    <tr>
      <td class="table_subsubheading_col_1_7"><?php echo 8 ?></th>
      <td class="table_subsubheading_col_2_7">Other Items</th>
      <td class="table_subsubheading_col_3_7">
        </th>
      <td class="table_subsubheading_col_4_7">
        </th>
      <td class="table_subsubheading_col_5_7">
        </th>
      <td class="table_subsubheading_col_6_7">
        </th>
      <td class="table_subsubheading_col_7_7">
        </th>
    </tr>


    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7">
        </th>
      <td class="table_entry_col_3_7">
        </th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7">
        </th>
      <td class="table_entry_col_6_7">
        </th>
      <td class="table_entry_col_7_7">
        </th>
    </tr>


    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- SECTION 9: Miscellaneous Items -->
    <!-- Variables -->
    <!-- Output -->

    <tr>
      <td class="table_subsubheading_col_1_7"><?php echo 9 ?></th>
      <td class="table_subsubheading_col_2_7">Miscellaneous Items</th>
      <td class="table_subsubheading_col_3_7">
        </th>
      <td class="table_subsubheading_col_4_7">
        </th>
      <td class="table_subsubheading_col_5_7">
        </th>
      <td class="table_subsubheading_col_6_7">
        </th>
      <td class="table_subsubheading_col_7_7">
        </th>
    </tr>

    <?php

for ($i = 0; $i < $count_all_assets; $i++) {

    if ($asset[$i]['type_of_asset'] == 'Miscellaneous Items') {
        //Calculate Equity
        $replace = array("$", ","); //Array of values that will be used in the str_replace function as characters to be removed from string

        $marketValue = str_replace($replace, "", $asset[$i]['current_market_value']); //remove values in $replace from string
        $assetDebt = str_replace($replace, "", $asset[$i]['current_debt']);

        $intMarketValue = intval($marketValue); //set string with removed characters to be an integer
        $intAssetDebt = intval($assetDebt);

        $equityPreFormat = $intMarketValue - $intAssetDebt; //calculate equity with new integer

        $equity = number_format($equityPreFormat, 2); //Convert back into format of currency

    }

    if ($asset[$i]['type_of_asset'] == 'Miscellaneous Items' && $asset[$i]['current_debt'] !== '$0') {
        $totalEquity = $totalEquity + $equityPreFormat;
    }
    //IF [husband is petioner and party awarded asset is petitioner and debt is no 0]
    if ($husband == 'Me' && $asset[$i]['type_of_asset'] == 'Miscellaneous Items' && $asset[$i]['party_awarded_to'] == 'Me' && $asset[$i]['current_debt'] !== '$0') {
        $totalEquityHusband = $totalEquityHusband + $equityPreFormat;

        //IF [husband is petioner and party awarded asset is respondent and debt is no 0]
    } else if ($husband == 'Me' && $asset[$i]['type_of_asset'] == 'Miscellaneous Items' && $asset[$i]['party_awarded_to'] == 'My Spouse' && $asset[$i]['current_debt'] !== '$0') {
        $totalEquityWife = $totalEquityWife + $equityPreFormat;
    }
    //IF [husband is respondent and party awarded asset is petitioner and debt is no 0]
    else if ($husband == 'My Spouse' && $asset[$i]['type_of_asset'] == 'Miscellaneous Items' && $asset[$i]['party_awarded_to'] == 'Me' && $asset[$i]['current_debt'] !== '$0') {
        $totalEquityWife = $totalEquityWife + $equityPreFormat;

        //IF [husband is respondent and party awarded asset is respondent and debt is no 0]
    } else if ($husband == 'My Spouse' && $asset[$i]['type_of_asset'] == 'Miscellaneous Items' && $asset[$i]['party_awarded_to'] == 'My Spouse' && $asset[$i]['current_debt'] !== '$0') {
        $totalEquityHusband = $totalEquityHusband + $equityPreFormat;
    }

    if ($asset[$i]['type_of_asset'] == "Miscellaneous Items" && $husband == 'Me' && $asset[$i]['split_method'] == 'Percentage') {
        //Calculate value given to husband and wife calculating using current_market_value of item and percentage to whom

        //turn current_market_value into calculatable number

        $replace = array("$", ","); //Array of values that will be used in the str_replace function as characters to be removed from string

        $marketValueBank = $equityPreFormat; //remove values in $replace from string

        //Perform calculation with percentage for husband and use that to determine value
        //Husband's percentage of asset
        $husbandsPercent = $asset[$i]['percentage_split_petitioner'];

        $intMarketValueBank = intval($marketValueBank); //set string with removed characters to be an integer

        $husbandsPercentValue = $intMarketValueBank * $husbandsPercent / 100;

        $totalEquityHusband = $totalEquityHusband + $husbandsPercentValue;

        $husbandValueFromPercent = number_format($husbandsPercentValue, 2);
        //Use remainder as value for wife
        $wifePercentValue = $marketValueBank - $husbandsPercentValue;

        $wifeValueFromPercent = number_format($wifePercentValue, 2);

        $totalEquityWife = $totalEquityWife + $wifePercentValue;

    } else if ($asset[$i]['type_of_asset'] == 'Miscellaneous Items' && $husband == 'My Spouse' && $asset[$i]['split_method'] == 'Percentage') {
        //Calculate value given to husband and wife calculating using current_market_value of item and percentage to whom

        //turn current_market_value into calculatable number

        $replace = array("$", ","); //Array of values that will be used in the str_replace function as characters to be removed from string

        $marketValueBank = str_replace($replace, "", $asset[$i]['current_market_value']); //remove values in $replace from string

        //Perform calculation with percentage for husband and use that to determine value
        //Husband's percentage of asset
        $husbandsPercent = $asset[$i]['percentage_split_respondent'];

        $marketValueBank = $equityPreFormat; //remove values in $replace from string

        $husbandsPercentValue = $intMarketValueBank * $husbandsPercent / 100;

        $totalEquityHusband = $totalEquityHusband + $husbandsPercentValue;

        $husbandValueFromPercent = number_format($husbandsPercentValue, 2);

        //Use remainder as value for wife
        $wifePercentValue = $marketValueBank - $husbandsPercentValue;

        $wifeValueFromPercent = number_format($wifePercentValue, 2);

        $totalEquityWife = $totalEquityWife + $wifePercentValue;

    }

    //IF [Miscellaneous Items solely awarded to Petitioner and Petitioner is Husband]

    if ($asset[$i]['type_of_asset'] == "Miscellaneous Items" && $asset[$i]['party_awarded_to'] == 'Me' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_asset'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $asset[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_7_7">
        </th>
    </tr>

    <?php
}

    //IF [Miscellaneous Items solely awarded to Respondent and Petitioner is Husband]
    if ($asset[$i]['type_of_asset'] == "Miscellaneous Items" && $asset[$i]['party_awarded_to'] == 'My Spouse' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_asset'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $asset[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">
        </th>
      <td class="table_entry_col_7_7">$<?php echo $equity ?></th>
    </tr>

    <?php
}

    //IF [Miscellaneous Items solely awarded to Petitioner and Respondent is Husband]
    if ($asset[$i]['type_of_asset'] == "Miscellaneous Items" && $asset[$i]['party_awarded_to'] == 'Me' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_asset'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $asset[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">
        </th>
      <td class="table_entry_col_7_7">$<?php echo $equity ?></th>
    </tr>

    <?php
}
    //IF [Miscellaneous Items solely awarded to Respondent and Respondent is Husband]
    if ($asset[$i]['type_of_asset'] == "Miscellaneous Items" && $asset[$i]['party_awarded_to'] == 'My Spouse' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_asset'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $asset[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_7_7">
        </th>
    </tr>

    <?php
}

    //IF [Miscellaneous Items split by Percentage and Petitioner is Husband]
    if ($asset[$i]['type_of_asset'] == "Miscellaneous Items" && $asset[$i]['split_method'] == 'Percentage' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_asset'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $asset[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">$<?php echo $husbandValueFromPercent ?></th>
      <td class="table_entry_col_7_7">$<?php echo $wifeValueFromPercent ?></th>
    </tr>

    <?php
}

    //IF [Miscellaneous Items split by Percentage and Respondent is Husband]
    if ($asset[$i]['type_of_asset'] == "Miscellaneous Items" && $asset[$i]['split_method'] == 'Percentage' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_asset'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $asset[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">$<?php echo $husbandValueFromPercent ?></th>
      <td class="table_entry_col_7_7">$<?php echo $wifeValueFromPercent ?></th>
    </tr>

    <?php
}

    //IF [Miscellaneous Items split by Fixed dollar amount and Petitioner is Husband]
    if ($asset[$i]['type_of_asset'] == "Miscellaneous Items" && $asset[$i]['split_method'] == 'Fixed dollar amount' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_asset'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $asset[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7"><?php echo $asset[$i]['fixed_dollar_split_petitioner'] ?></th>
      <td class="table_entry_col_7_7"><?php echo $asset[$i]['fixed_dollar_split_respondent'] ?></th>
    </tr>

    <?php
}

    //IF [Miscellaneous Items split by Fixed dollar amount and Respondent is Husband]
    if ($asset[$i]['type_of_asset'] == "Miscellaneous Items" && $asset[$i]['split_method'] == 'Fixed dollar amount' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $asset[$i]['name_of_asset'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $asset[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $asset[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7"><?php echo $asset[$i]['fixed_dollar_split_respondent'] ?></th>
      <td class="table_entry_col_7_7"><?php echo $asset[$i]['fixed_dollar_split_petitioner'] ?></th>
    </tr>

    <?php
}

}?>


    <?php

?>
    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7">
        </th>
      <td class="table_entry_col_3_7">
        </th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7">
        </th>
      <td class="table_entry_col_6_7">
        </th>
      <td class="table_entry_col_7_7">
        </th>
    </tr>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7">
        </th>
      <td class="table_entry_col_3_7">
        </th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7">
        </th>
      <td class="table_entry_col_6_7">
        </th>
      <td class="table_entry_col_7_7">
        </th>
    </tr>

    <?php

//Calculate total equity, total wife has, total husband has

/*****
Explanation of how total equity is calculated:

In for loops for item categories that can have debt, the value $totalEquity is added to if the asset has a debt
if not, all assets are ran through the for loop below using their current market value, as the equity wont be changed if
there is no debt

Assets split by percenteges have their respective husband and wife values added in their section

Property, total equity and husband and wife total, is all done in the property section

 */
for ($i = 0; $i < $count_all_assets; $i++) {

    if ($asset[$i]['current_debt'] == '' or $asset[$i]['current_debt'] == '$0') {

        $replace = array("$", ","); //Array of values that will be used in the str_replace function as characters to be removed from string

        $currentMarketValueForTotal = str_replace($replace, "", $asset[$i]['current_market_value']); //remove values in $replace from string

        $totalEquity = $totalEquity + $currentMarketValueForTotal;
    }

    if ($asset[$i]['type_of_asset'] == 'Furniture') {

        $replace = array("$", ","); //Array of values that will be used in the str_replace function as characters to be removed from string

        $currentMarketValueForTotal = str_replace($replace, "", $asset[$i]['current_market_value']); //remove values in $replace from string

        $totalEquity = $totalEquity + $currentMarketValueForTotal;
    }

}

/***
IF asset awarded solely to one party and there is no debt
 */
for ($i = 0; $i < $count_all_assets; $i++) {

    //IF [husband is petitioner and asset solely awarded to petitioner]
    if ($husband == 'Me' && $asset[$i]['party_awarded_to'] == 'Me' && $asset[$i]['current_debt'] == '$0') {

        $replace = array("$", ","); //Array of values that will be used in the str_replace function as characters to be removed from string

        $currentMarketValueForTotal = str_replace($replace, "", $asset[$i]['current_market_value']); //remove values in $replace from string

        $totalEquityHusband = $totalEquityHusband + $currentMarketValueForTotal;

    }
    if ($husband == 'Me' && $asset[$i]['party_awarded_to'] == 'Me' && $asset[$i]['current_debt'] == false) {

        $replace = array("$", ","); //Array of values that will be used in the str_replace function as characters to be removed from string

        $currentMarketValueForTotal = str_replace($replace, "", $asset[$i]['current_market_value']); //remove values in $replace from string

        $totalEquityHusband = $totalEquityHusband + $currentMarketValueForTotal;

    }

    //IF [husband is petitioner and asset solely awarded to respondent]
    if ($husband == 'Me' && $asset[$i]['party_awarded_to'] == 'My Spouse' && $asset[$i]['current_debt'] == '$0') {
        $replace = array("$", ","); //Array of values that will be used in the str_replace function as characters to be removed from string

        $currentMarketValueForTotal = str_replace($replace, "", $asset[$i]['current_market_value']); //remove values in $replace from string

        $totalEquityWife = $totalEquityWife + $currentMarketValueForTotal;

    }
    if ($husband == 'Me' && $asset[$i]['party_awarded_to'] == 'My Spouse' && $asset[$i]['current_debt'] == false) {
        $replace = array("$", ","); //Array of values that will be used in the str_replace function as characters to be removed from string

        $currentMarketValueForTotal = str_replace($replace, "", $asset[$i]['current_market_value']); //remove values in $replace from string

        $totalEquityWife = $totalEquityWife + $currentMarketValueForTotal;

    }

    //IF [husband is respondent and asset solely awarded to petitioner]
    if ($husband == 'My Spouse' && $asset[$i]['party_awarded_to'] == 'Me' && $asset[$i]['current_debt'] == '$0') {

        $replace = array("$", ","); //Array of values that will be used in the str_replace function as characters to be removed from string

        $currentMarketValueForTotal = str_replace($replace, "", $asset[$i]['current_market_value']); //remove values in $replace from string

        $totalEquityWife = $totalEquityWife + $currentMarketValueForTotal;

    }
    if ($husband == 'My Spouse' && $asset[$i]['party_awarded_to'] == 'Me' && $asset[$i]['current_debt'] == false) {

        $replace = array("$", ","); //Array of values that will be used in the str_replace function as characters to be removed from string

        $currentMarketValueForTotal = str_replace($replace, "", $asset[$i]['current_market_value']); //remove values in $replace from string

        $totalEquityWife = $totalEquityWife + $currentMarketValueForTotal;

    }

    //IF [husband is respondent and asset solely awarded to respondent]
    if ($husband == 'My Spouse' && $asset[$i]['party_awarded_to'] == 'My Spouse' && $asset[$i]['current_debt'] == '$0') {
        $replace = array("$", ","); //Array of values that will be used in the str_replace function as characters to be removed from string

        $currentMarketValueForTotal = str_replace($replace, "", $asset[$i]['current_market_value']); //remove values in $replace from string

        $totalEquityHusband = $totalEquityHusband + $currentMarketValueForTotal;

    }
    if ($husband == 'My Spouse' && $asset[$i]['party_awarded_to'] == 'My Spouse' && $asset[$i]['current_debt'] == false) {
        $replace = array("$", ","); //Array of values that will be used in the str_replace function as characters to be removed from string

        $currentMarketValueForTotal = str_replace($replace, "", $asset[$i]['current_market_value']); //remove values in $replace from string

        $totalEquityHusband = $totalEquityHusband + $currentMarketValueForTotal;

    }

}

/*****
Add fixed dollar amount for husband and wife to relevant totals
 */

//IF [husband is petitioner && $aasa]

for ($i = 0; $i < $count_all_assets; $i++) {

    //IF [husband is petitioner && $asset fixed dollar for petititoner and respondent is not empty]

    if ($husband == 'Me' && $asset[$i]['fixed_dollar_split_petitioner'] !== '' && $asset[$i]['fixed_dollar_split_respondent'] !== '') {

        $replace = array("$", ","); //Array of values that will be used in the str_replace function as characters to be removed from string

        $fixedDollarAmountPetitioner = str_replace($replace, "", $asset[$i]['fixed_dollar_split_petitioner']);

        $fixedDollarAmountRespondent = str_replace($replace, "", $asset[$i]['fixed_dollar_split_respondent']);

        $totalEquityHusband = $totalEquityHusband + $fixedDollarAmountPetitioner;
        $totalEquityWife = $totalEquityWife + $fixedDollarAmountRespondent;

        //IF [husband is respondent && $asset fixed dollar for petititoner and respondent is not empty]

    } else if ($husband == 'My Spouse' && $asset[$i]['fixed_dollar_split_petitioner'] !== '' && $asset[$i]['fixed_dollar_split_respondent'] !== '') {

        $replace = array("$", ","); //Array of values that will be used in the str_replace function as characters to be removed from string

        $fixedDollarAmountPetitioner = str_replace($replace, "", $asset[$i]['fixed_dollar_split_petitioner']);

        $fixedDollarAmountRespondent = str_replace($replace, "", $asset[$i]['fixed_dollar_split_respondent']);

        $totalEquityHusband = $totalEquityHusband + $fixedDollarAmountRespondent;
        $totalEquityWife = $totalEquityWife + $fixedDollarAmountPetitioner;

    }

}

$totalEquityPreDisplay = intval($totalEquity); //set string with removed characters to be an integer
$totalEquityHusbandPreDisplay = intval($totalEquityHusband);
$totalEquityWifePreDisplay = intval($totalEquityWife);

$totalEquityToDisplay = number_format($totalEquityPreDisplay, 2);
$totalEquityHusbandToDisplay = number_format($totalEquityHusbandPreDisplay, 2);
$totalEquityWifeToDisplay = number_format($totalEquityWifePreDisplay, 2);

?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><b>TOTAL ASSETS</b></th>
      <td class="table_entry_col_3_7">
        </th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7">$<?php echo $totalEquityToDisplay ?></th>
      <td class="table_entry_col_6_7">$<?php echo $totalEquityHusbandToDisplay ?></th>
      <td class="table_entry_col_7_7">$<?php echo $totalEquityWifeToDisplay ?></th>
    </tr>




    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- SECTION 11: Credit Cards -->
    <!-- Variables -->
    <!-- Output -->
    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><b>LIABILITIES</b></th>
      <td class="table_entry_col_3_7">
        </th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7">
        </th>
      <td class="table_entry_col_6_7">
        </th>
      <td class="table_entry_col_7_7">
        </th>
    </tr>



    <tr>
      <td class="table_subsubheading_col_1_7"><?php echo 10 ?></th>
      <td class="table_subsubheading_col_2_7"> Credit Cards </th>
      <td class="table_subsubheading_col_3_7">
        </th>
      <td class="table_subsubheading_col_4_7">
        </th>
      <td class="table_subsubheading_col_5_7">
        </th>
      <td class="table_subsubheading_col_6_7">
        </th>
      <td class="table_subsubheading_col_7_7">
        </th>
    </tr>

    <?php

for ($i = 0; $i < $count_all_debts; $i++) {

    if ($debt[$i]['type_of_asset'] == 'Credit Card') {
        //Calculate Equity
        $replace = array("$", ","); //Array of values that will be used in the str_replace function as characters to be removed from string

        $marketValue = str_replace($replace, "", $debt[$i]['current_market_value']); //remove values in $replace from string
        $debtDebt = str_replace($replace, "", $debt[$i]['current_debt']);

        $intMarketValue = intval($marketValue); //set string with removed characters to be an integer
        $intAssetDebt = intval($debtDebt);

        $equityPreFormat = $intMarketValue - $intAssetDebt; //calculate equity with new integer

        $equity = number_format($equityPreFormat, 2); //Convert back into format of currency

    }

    if ($debt[$i]['type_of_asset'] == 'Credit Card' && $debt[$i]['current_debt'] !== '$0') {
        $totalDebt = $totalDebt + $equityPreFormat;
    }
    //IF [husband is petioner and party awarded asset is petitioner and debt is no 0]
    if ($husband == 'Me' && $debt[$i]['type_of_asset'] == 'Credit Card' && $debt[$i]['party_awarded_to'] == 'Me' && $debt[$i]['current_debt'] !== '$0') {
        $totalDebtHusband = $totalDebtHusband + $equityPreFormat;

        //IF [husband is petioner and party awarded asset is respondent and debt is no 0]
    } else if ($husband == 'Me' && $debt[$i]['type_of_asset'] == 'Credit Card' && $debt[$i]['party_awarded_to'] == 'My Spouse' && $debt[$i]['current_debt'] !== '$0') {
        $totalDebtWife = $totalDebtWife + $equityPreFormat;
    }
    //IF [husband is respondent and party awarded asset is petitioner and debt is no 0]
    else if ($husband == 'My Spouse' && $debt[$i]['type_of_asset'] == 'Credit Card' && $debt[$i]['party_awarded_to'] == 'Me' && $debt[$i]['current_debt'] !== '$0') {
        $totalDebtWife = $totalDebtWife + $equityPreFormat;

        //IF [husband is respondent and party awarded asset is respondent and debt is no 0]
    } else if ($husband == 'My Spouse' && $debt[$i]['type_of_asset'] == 'Credit Card' && $debt[$i]['party_awarded_to'] == 'My Spouse' && $debt[$i]['current_debt'] !== '$0') {
        $totalDebtHusband = $totalDebtHusband + $equityPreFormat;
    }

    if ($debt[$i]['type_of_asset'] == "Credit Card" && $husband == 'Me' && $debt[$i]['split_method'] == 'Percentage') {
        //Calculate value given to husband and wife calculating using current_market_value of item and percentage to whom

        //turn current_market_value into calculatable number

        $replace = array("$", ","); //Array of values that will be used in the str_replace function as characters to be removed from string

        $marketValueBank = $equityPreFormat; //remove values in $replace from string

        //Perform calculation with percentage for husband and use that to determine value
        //Husband's percentage of asset
        $husbandsPercent = $debt[$i]['percentage_split_petitioner'];

        $intMarketValueBank = intval($marketValueBank); //set string with removed characters to be an integer

        $husbandsPercentValue = $intMarketValueBank * $husbandsPercent / 100;

        $totalDebtHusband = $totalDebtHusband + $husbandsPercentValue;

        $husbandValueFromPercent = number_format($husbandsPercentValue, 2);
        //Use remainder as value for wife
        $wifePercentValue = $marketValueBank - $husbandsPercentValue;

        $wifeValueFromPercent = number_format($wifePercentValue, 2);

        $totalDebtWife = $totalDebtWife + $wifePercentValue;

    } else if ($debt[$i]['type_of_asset'] == 'Credit Card' && $husband == 'My Spouse' && $debt[$i]['split_method'] == 'Percentage') {
        //Calculate value given to husband and wife calculating using current_market_value of item and percentage to whom

        //turn current_market_value into calculatable number

        $replace = array("$", ","); //Array of values that will be used in the str_replace function as characters to be removed from string

        $marketValueBank = str_replace($replace, "", $debt[$i]['current_market_value']); //remove values in $replace from string

        //Perform calculation with percentage for husband and use that to determine value
        //Husband's percentage of asset
        $husbandsPercent = $debt[$i]['percentage_split_respondent'];

        $intMarketValueBank = intval($marketValueBank); //set string with removed characters to be an integer

        $husbandsPercentValue = $intMarketValueBank * $husbandsPercent / 100;

        $totalDebtHusband = $totalDebtHusband + $husbandsPercentValue;

        $husbandValueFromPercent = number_format($husbandsPercentValue, 2);

        //Use remainder as value for wife
        $wifePercentValue = $marketValueBank - $husbandsPercentValue;

        $wifeValueFromPercent = number_format($wifePercentValue, 2);

        $totalDebtWife = $totalDebtWife + $wifePercentValue;

    }

    //IF [Credit Card solely awarded to Petitioner and Petitioner is Husband]

    if ($debt[$i]['type_of_asset'] == "Credit Card" && $debt[$i]['party_awarded_to'] == 'Me' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $debt[$i]['last_four_digits'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $debt[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $debt[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_7_7">
        </th>
    </tr>

    <?php
}

    //IF [Credit Card solely awarded to Respondent and Petitioner is Husband]
    if ($debt[$i]['type_of_asset'] == "Credit Card" && $debt[$i]['party_awarded_to'] == 'My Spouse' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $debt[$i]['last_four_digits'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $debt[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $debt[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">
        </th>
      <td class="table_entry_col_7_7">$<?php echo $equity ?></th>
    </tr>

    <?php
}

    //IF [Credit Card solely awarded to Petitioner and Respondent is Husband]
    if ($debt[$i]['type_of_asset'] == "Credit Card" && $debt[$i]['party_awarded_to'] == 'Me' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $debt[$i]['last_four_digits'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $debt[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $debt[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">
        </th>
      <td class="table_entry_col_7_7">$<?php echo $equity ?></th>
    </tr>

    <?php
}
    //IF [Credit Card solely awarded to Respondent and Respondent is Husband]
    if ($debt[$i]['type_of_asset'] == "Credit Card" && $debt[$i]['party_awarded_to'] == 'My Spouse' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $debt[$i]['last_four_digits'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $debt[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $debt[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_7_7">
        </th>
    </tr>

    <?php
}

    //IF [Credit Card split by Percentage and Petitioner is Husband]
    if ($debt[$i]['type_of_asset'] == "Credit Card" && $debt[$i]['split_method'] == 'Percentage' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $debt[$i]['last_four_digits'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $debt[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $debt[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">$<?php echo $husbandValueFromPercent ?></th>
      <td class="table_entry_col_7_7">$<?php echo $wifeValueFromPercent ?></th>
    </tr>

    <?php
}

    //IF [Credit Card split by Percentage and Respondent is Husband]
    if ($debt[$i]['type_of_asset'] == "Credit Card" && $debt[$i]['split_method'] == 'Percentage' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $debt[$i]['last_four_digits'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $debt[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $debt[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">$<?php echo $husbandValueFromPercent ?></th>
      <td class="table_entry_col_7_7">$<?php echo $wifeValueFromPercent ?></th>
    </tr>

    <?php
}

    //IF [Credit Card split by Fixed dollar amount and Petitioner is Husband]
    if ($debt[$i]['type_of_asset'] == "Credit Card" && $debt[$i]['split_method'] == 'Fixed dollar amount' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $debt[$i]['last_four_digits'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $debt[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $debt[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7"><?php echo $debt[$i]['fixed_dollar_split_petitioner'] ?></th>
      <td class="table_entry_col_7_7"><?php echo $debt[$i]['fixed_dollar_split_respondent'] ?></th>
    </tr>

    <?php
}

    //IF [Credit Card split by Fixed dollar amount and Respondent is Husband]
    if ($debt[$i]['type_of_asset'] == "Credit Card" && $debt[$i]['split_method'] == 'Fixed dollar amount' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $debt[$i]['last_four_digits'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $debt[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $debt[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7"><?php echo $debt[$i]['fixed_dollar_split_respondent'] ?></th>
      <td class="table_entry_col_7_7"><?php echo $debt[$i]['fixed_dollar_split_petitioner'] ?></th>
    </tr>

    <?php
}

}?>


    }
    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- SECTION 11: Other Loans and Liabilities -->
    <!-- Variables -->
    <!-- Output -->

    <tr>
      <td class="table_subsubheading_col_1_7"><?php echo 11 ?></th>
      <td class="table_subsubheading_col_2_7"> Other Loans and Liabilities </th>
      <td class="table_subsubheading_col_3_7">
        </th>
      <td class="table_subsubheading_col_4_7">
        </th>
      <td class="table_subsubheading_col_5_7">
        </th>
      <td class="table_subsubheading_col_6_7">
        </th>
      <td class="table_subsubheading_col_7_7">
        </th>
    </tr>

    <?php

for ($i = 0; $i < $count_all_debts; $i++) {

    if ($debt[$i]['type_of_asset'] == 'Auto Note') {
        //Calculate Equity
        $replace = array("$", ","); //Array of values that will be used in the str_replace function as characters to be removed from string

        $marketValue = str_replace($replace, "", $debt[$i]['current_market_value']); //remove values in $replace from string
        $debtDebt = str_replace($replace, "", $debt[$i]['current_debt']);

        $intMarketValue = intval($marketValue); //set string with removed characters to be an integer
        $intAssetDebt = intval($debtDebt);

        $equityPreFormat = $intMarketValue - $intAssetDebt; //calculate equity with new integer

        $equity = number_format($equityPreFormat, 2); //Convert back into format of currency

    }

    if ($debt[$i]['type_of_asset'] == 'Auto Note' && $debt[$i]['current_debt'] !== '$0') {
        $totalDebt = $totalDebt + $equityPreFormat;
    }
    //IF [husband is petioner and party awarded asset is petitioner and debt is no 0]
    if ($husband == 'Me' && $debt[$i]['type_of_asset'] == 'Auto Note' && $debt[$i]['party_awarded_to'] == 'Me' && $debt[$i]['current_debt'] !== '$0') {
        $totalDebtHusband = $totalDebtHusband + $equityPreFormat;

        //IF [husband is petioner and party awarded asset is respondent and debt is no 0]
    } else if ($husband == 'Me' && $debt[$i]['type_of_asset'] == 'Auto Note' && $debt[$i]['party_awarded_to'] == 'My Spouse' && $debt[$i]['current_debt'] !== '$0') {
        $totalDebtWife = $totalDebtWife + $equityPreFormat;
    }
    //IF [husband is respondent and party awarded asset is petitioner and debt is no 0]
    else if ($husband == 'My Spouse' && $debt[$i]['type_of_asset'] == 'Auto Note' && $debt[$i]['party_awarded_to'] == 'Me' && $debt[$i]['current_debt'] !== '$0') {
        $totalDebtWife = $totalDebtWife + $equityPreFormat;

        //IF [husband is respondent and party awarded asset is respondent and debt is no 0]
    } else if ($husband == 'My Spouse' && $debt[$i]['type_of_asset'] == 'Auto Note' && $debt[$i]['party_awarded_to'] == 'My Spouse' && $debt[$i]['current_debt'] !== '$0') {
        $totalDebtHusband = $totalDebtHusband + $equityPreFormat;
    }

    if ($debt[$i]['type_of_asset'] == "Auto Note" && $husband == 'Me' && $debt[$i]['split_method'] == 'Percentage') {
        //Calculate value given to husband and wife calculating using current_market_value of item and percentage to whom

        //turn current_market_value into calculatable number

        $replace = array("$", ","); //Array of values that will be used in the str_replace function as characters to be removed from string

        $marketValueBank = str_replace($replace, "", $debt[$i]['current_market_value']); //remove values in $replace from string

        //Perform calculation with percentage for husband and use that to determine value
        //Husband's percentage of asset
        $husbandsPercent = $debt[$i]['percentage_split_petitioner'];

        $intMarketValueBank = intval($marketValueBank); //set string with removed characters to be an integer

        $husbandsPercentValue = $intMarketValueBank * $husbandsPercent / 100;

        $totalDebtHusband = $totalDebtHusband + $husbandsPercentValue;

        $husbandValueFromPercent = number_format($husbandsPercentValue, 2);
        //Use remainder as value for wife
        $wifePercentValue = $marketValueBank - $husbandsPercentValue;

        $wifeValueFromPercent = number_format($wifePercentValue, 2);

        $totalDebtWife = $totalDebtWife + $wifePercentValue;

    } else if ($debt[$i]['type_of_asset'] == 'Auto Note' && $husband == 'My Spouse' && $debt[$i]['split_method'] == 'Percentage') {
        //Calculate value given to husband and wife calculating using current_market_value of item and percentage to whom

        //turn current_market_value into calculatable number

        $replace = array("$", ","); //Array of values that will be used in the str_replace function as characters to be removed from string

        $marketValueBank = str_replace($replace, "", $debt[$i]['current_market_value']); //remove values in $replace from string

        //Perform calculation with percentage for husband and use that to determine value
        //Husband's percentage of asset
        $husbandsPercent = $debt[$i]['percentage_split_respondent'];

        $intMarketValueBank = intval($marketValueBank); //set string with removed characters to be an integer

        $husbandsPercentValue = $intMarketValueBank * $husbandsPercent / 100;

        $totalDebtHusband = $totalDebtHusband + $husbandsPercentValue;

        $husbandValueFromPercent = number_format($husbandsPercentValue, 2);

        //Use remainder as value for wife
        $wifePercentValue = $marketValueBank - $husbandsPercentValue;

        $wifeValueFromPercent = number_format($wifePercentValue, 2);

        $totalDebtWife = $totalDebtWife + $wifePercentValue;

    }

    //IF [Auto Note solely awarded to Petitioner and Petitioner is Husband]

    if ($debt[$i]['type_of_asset'] == "Auto Note" && $debt[$i]['party_awarded_to'] == 'Me' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $vehicleName ?></th>
      <td class="table_entry_col_3_7"><?php echo $debt[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $debt[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_7_7">
        </th>
    </tr>

    <?php
}

    //IF [Auto Note solely awarded to Respondent and Petitioner is Husband]
    if ($debt[$i]['type_of_asset'] == "Auto Note" && $debt[$i]['party_awarded_to'] == 'My Spouse' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $vehicleName ?></th>
      <td class="table_entry_col_3_7"><?php echo $debt[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $debt[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">
        </th>
      <td class="table_entry_col_7_7">$<?php echo $equity ?></th>
    </tr>

    <?php
}

    //IF [Auto Note solely awarded to Petitioner and Respondent is Husband]
    if ($debt[$i]['type_of_asset'] == "Auto Note" && $debt[$i]['party_awarded_to'] == 'Me' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $vehicleName ?></th>
      <td class="table_entry_col_3_7"><?php echo $debt[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $debt[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">
        </th>
      <td class="table_entry_col_7_7">$<?php echo $equity ?></th>
    </tr>

    <?php
}
    //IF [Auto Note solely awarded to Respondent and Respondent is Husband]
    if ($debt[$i]['type_of_asset'] == "Auto Note" && $debt[$i]['party_awarded_to'] == 'My Spouse' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $vehicleName ?></th>
      <td class="table_entry_col_3_7"><?php echo $debt[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $debt[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_7_7">
        </th>
    </tr>

    <?php
}

    //IF [Auto Note split by Percentage and Petitioner is Husband]
    if ($debt[$i]['type_of_asset'] == "Auto Note" && $debt[$i]['split_method'] == 'Percentage' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $vehicleName ?></th>
      <td class="table_entry_col_3_7"><?php echo $debt[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $debt[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">$<?php echo $husbandValueFromPercent ?></th>
      <td class="table_entry_col_7_7">$<?php echo $wifeValueFromPercent ?></th>
    </tr>

    <?php
}

    //IF [Auto Note split by Percentage and Respondent is Husband]
    if ($debt[$i]['type_of_asset'] == "Auto Note" && $debt[$i]['split_method'] == 'Percentage' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $vehicleName ?></th>
      <td class="table_entry_col_3_7"><?php echo $debt[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $debt[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">$<?php echo $husbandValueFromPercent ?></th>
      <td class="table_entry_col_7_7">$<?php echo $wifeValueFromPercent ?></th>
    </tr>

    <?php
}

    //IF [Auto Note split by Fixed dollar amount and Petitioner is Husband]
    if ($debt[$i]['type_of_asset'] == "Auto Note" && $debt[$i]['split_method'] == 'Fixed dollar amount' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $vehicleName ?></th>
      <td class="table_entry_col_3_7"><?php echo $debt[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $debt[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7"><?php echo $debt[$i]['fixed_dollar_split_petitioner'] ?></th>
      <td class="table_entry_col_7_7"><?php echo $debt[$i]['fixed_dollar_split_respondent'] ?></th>
    </tr>

    <?php
}

    //IF [Auto Note split by Fixed dollar amount and Respondent is Husband]
    if ($debt[$i]['type_of_asset'] == "Auto Note" && $debt[$i]['split_method'] == 'Fixed dollar amount' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $vehicleName ?></th>
      <td class="table_entry_col_3_7"><?php echo $debt[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $debt[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7"><?php echo $debt[$i]['fixed_dollar_split_respondent'] ?></th>
      <td class="table_entry_col_7_7"><?php echo $debt[$i]['fixed_dollar_split_petitioner'] ?></th>
    </tr>

    <?php
}
}
for ($i = 0; $i < $count_all_debts; $i++) {

    if ($debt[$i]['type_of_asset'] == 'Debt') {
        //Calculate Equity
        $replace = array("$", ","); //Array of values that will be used in the str_replace function as characters to be removed from string

        $marketValue = str_replace($replace, "", $debt[$i]['current_market_value']); //remove values in $replace from string
        $debtDebt = str_replace($replace, "", $debt[$i]['current_debt']);

        $intMarketValue = intval($marketValue); //set string with removed characters to be an integer
        $intAssetDebt = intval($debtDebt);

        $equityPreFormat = $intMarketValue - $intAssetDebt; //calculate equity with new integer

        $equity = number_format($equityPreFormat, 2); //Convert back into format of currency

    }

    if ($debt[$i]['type_of_asset'] == 'Debt' && $debt[$i]['current_debt'] !== '$0') {
        $totalDebt = $totalDebt + $equityPreFormat;
    }
    //IF [husband is petioner and party awarded asset is petitioner and debt is no 0]
    if ($husband == 'Me' && $debt[$i]['type_of_asset'] == 'Debt' && $debt[$i]['party_awarded_to'] == 'Me' && $debt[$i]['current_debt'] !== '$0') {
        $totalDebtHusband = $totalDebtHusband + $equityPreFormat;

        //IF [husband is petioner and party awarded asset is respondent and debt is no 0]
    } else if ($husband == 'Me' && $debt[$i]['type_of_asset'] == 'Debt' && $debt[$i]['party_awarded_to'] == 'My Spouse' && $debt[$i]['current_debt'] !== '$0') {
        $totalDebtWife = $totalDebtWife + $equityPreFormat;
    }
    //IF [husband is respondent and party awarded asset is petitioner and debt is no 0]
    else if ($husband == 'My Spouse' && $debt[$i]['type_of_asset'] == 'Debt' && $debt[$i]['party_awarded_to'] == 'Me' && $debt[$i]['current_debt'] !== '$0') {
        $totalDebtWife = $totalDebtWife + $equityPreFormat;

        //IF [husband is respondent and party awarded asset is respondent and debt is no 0]
    } else if ($husband == 'My Spouse' && $debt[$i]['type_of_asset'] == 'Debt' && $debt[$i]['party_awarded_to'] == 'My Spouse' && $debt[$i]['current_debt'] !== '$0') {
        $totalDebtHusband = $totalDebtHusband + $equityPreFormat;
    }

    if ($debt[$i]['type_of_asset'] == "Debt" && $husband == 'Me' && $debt[$i]['split_method'] == 'Percentage') {
        //Calculate value given to husband and wife calculating using current_market_value of item and percentage to whom

        //turn current_market_value into calculatable number

        $replace = array("$", ","); //Array of values that will be used in the str_replace function as characters to be removed from string

        $marketValueBank = str_replace($replace, "", $debt[$i]['current_market_value']); //remove values in $replace from string

        //Perform calculation with percentage for husband and use that to determine value
        //Husband's percentage of asset
        $husbandsPercent = $debt[$i]['percentage_split_petitioner'];

        $intMarketValueBank = intval($marketValueBank); //set string with removed characters to be an integer

        $husbandsPercentValue = $intMarketValueBank * $husbandsPercent / 100;

        $totalDebtHusband = $totalDebtHusband + $husbandsPercentValue;

        $husbandValueFromPercent = number_format($husbandsPercentValue, 2);
        //Use remainder as value for wife
        $wifePercentValue = $marketValueBank - $husbandsPercentValue;

        $wifeValueFromPercent = number_format($wifePercentValue, 2);

        $totalDebtWife = $totalDebtWife + $wifePercentValue;

    } else if ($debt[$i]['type_of_asset'] == 'Debt' && $husband == 'My Spouse' && $debt[$i]['split_method'] == 'Percentage') {
        //Calculate value given to husband and wife calculating using current_market_value of item and percentage to whom

        //turn current_market_value into calculatable number

        $replace = array("$", ","); //Array of values that will be used in the str_replace function as characters to be removed from string

        $marketValueBank = str_replace($replace, "", $debt[$i]['current_market_value']); //remove values in $replace from string

        //Perform calculation with percentage for husband and use that to determine value
        //Husband's percentage of asset
        $husbandsPercent = $debt[$i]['percentage_split_respondent'];

        $intMarketValueBank = intval($marketValueBank); //set string with removed characters to be an integer

        $husbandsPercentValue = $intMarketValueBank * $husbandsPercent / 100;

        $totalDebtHusband = $totalDebtHusband + $husbandsPercentValue;

        $husbandValueFromPercent = number_format($husbandsPercentValue, 2);

        //Use remainder as value for wife
        $wifePercentValue = $marketValueBank - $husbandsPercentValue;

        $wifeValueFromPercent = number_format($wifePercentValue, 2);

        $totalDebtWife = $totalDebtWife + $wifePercentValue;

    }

    //IF [Debt solely awarded to Petitioner and Petitioner is Husband]

    if ($debt[$i]['type_of_asset'] == "Debt" && $debt[$i]['party_awarded_to'] == 'Me' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $debt[$i]['last_four_digits'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $debt[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $debt[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_7_7">
        </th>
    </tr>

    <?php
}

    //IF [Debt solely awarded to Respondent and Petitioner is Husband]
    if ($debt[$i]['type_of_asset'] == "Debt" && $debt[$i]['party_awarded_to'] == 'My Spouse' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $debt[$i]['last_four_digits'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $debt[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $debt[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">
        </th>
      <td class="table_entry_col_7_7">$<?php echo $equity ?></th>
    </tr>

    <?php
}

    //IF [Debt solely awarded to Petitioner and Respondent is Husband]
    if ($debt[$i]['type_of_asset'] == "Debt" && $debt[$i]['party_awarded_to'] == 'Me' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $debt[$i]['last_four_digits'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $debt[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $debt[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">
        </th>
      <td class="table_entry_col_7_7">$<?php echo $equity ?></th>
    </tr>

    <?php
}
    //IF [Debt solely awarded to Respondent and Respondent is Husband]
    if ($debt[$i]['type_of_asset'] == "Debt" && $debt[$i]['party_awarded_to'] == 'My Spouse' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $debt[$i]['last_four_digits'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $debt[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $debt[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_7_7">
        </th>
    </tr>

    <?php
}

    //IF [Debt split by Percentage and Petitioner is Husband]
    if ($debt[$i]['type_of_asset'] == "Debt" && $debt[$i]['split_method'] == 'Percentage' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $debt[$i]['last_four_digits'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $debt[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $debt[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">$<?php echo $husbandValueFromPercent ?></th>
      <td class="table_entry_col_7_7">$<?php echo $wifeValueFromPercent ?></th>
    </tr>

    <?php
}

    //IF [Debt split by Percentage and Respondent is Husband]
    if ($debt[$i]['type_of_asset'] == "Debt" && $debt[$i]['split_method'] == 'Percentage' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $debt[$i]['last_four_digits'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $debt[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $debt[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">$<?php echo $husbandValueFromPercent ?></th>
      <td class="table_entry_col_7_7">$<?php echo $wifeValueFromPercent ?></th>
    </tr>

    <?php
}

    //IF [Debt split by Fixed dollar amount and Petitioner is Husband]
    if ($debt[$i]['type_of_asset'] == "Debt" && $debt[$i]['split_method'] == 'Fixed dollar amount' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $debt[$i]['last_four_digits'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $debt[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $debt[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7"><?php echo $debt[$i]['fixed_dollar_split_petitioner'] ?></th>
      <td class="table_entry_col_7_7"><?php echo $debt[$i]['fixed_dollar_split_respondent'] ?></th>
    </tr>

    <?php
}

    //IF [Debt split by Fixed dollar amount and Respondent is Husband]
    if ($debt[$i]['type_of_asset'] == "Debt" && $debt[$i]['split_method'] == 'Fixed dollar amount' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $debt[$i]['last_four_digits'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $debt[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $debt[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7"><?php echo $debt[$i]['fixed_dollar_split_respondent'] ?></th>
      <td class="table_entry_col_7_7"><?php echo $debt[$i]['fixed_dollar_split_petitioner'] ?></th>
    </tr>

    <?php
}

}
//IRS Debt
for ($i = 0; $i < $count_all_debts; $i++) {

    if ($debt[$i]['type_of_asset'] == 'IRS Debt') {
        //Calculate Equity
        $replace = array("$", ","); //Array of values that will be used in the str_replace function as characters to be removed from string

        $marketValue = str_replace($replace, "", $debt[$i]['current_market_value']); //remove values in $replace from string
        $debtDebt = str_replace($replace, "", $debt[$i]['current_debt']);

        $intMarketValue = intval($marketValue); //set string with removed characters to be an integer
        $intAssetDebt = intval($debtDebt);

        $equityPreFormat = $intMarketValue - $intAssetDebt; //calculate equity with new integer

        $equity = number_format($equityPreFormat, 2); //Convert back into format of currency

    }

    if ($debt[$i]['type_of_asset'] == 'IRS Debt' && $debt[$i]['current_debt'] !== '$0') {
        $totalDebt = $totalDebt + $equityPreFormat;
    }
    //IF [husband is petioner and party awarded asset is petitioner and debt is no 0]
    if ($husband == 'Me' && $debt[$i]['type_of_asset'] == 'IRS Debt' && $debt[$i]['party_awarded_to'] == 'Me' && $debt[$i]['current_debt'] !== '$0') {
        $totalDebtHusband = $totalDebtHusband + $equityPreFormat;

        //IF [husband is petioner and party awarded asset is respondent and debt is no 0]
    } else if ($husband == 'Me' && $debt[$i]['type_of_asset'] == 'IRS Debt' && $debt[$i]['party_awarded_to'] == 'My Spouse' && $debt[$i]['current_debt'] !== '$0') {
        $totalDebtWife = $totalDebtWife + $equityPreFormat;
    }
    //IF [husband is respondent and party awarded asset is petitioner and debt is no 0]
    else if ($husband == 'My Spouse' && $debt[$i]['type_of_asset'] == 'IRS Debt' && $debt[$i]['party_awarded_to'] == 'Me' && $debt[$i]['current_debt'] !== '$0') {
        $totalDebtWife = $totalDebtWife + $equityPreFormat;

        //IF [husband is respondent and party awarded asset is respondent and debt is no 0]
    } else if ($husband == 'My Spouse' && $debt[$i]['type_of_asset'] == 'IRS Debt' && $debt[$i]['party_awarded_to'] == 'My Spouse' && $debt[$i]['current_debt'] !== '$0') {
        $totalDebtHusband = $totalDebtHusband + $equityPreFormat;
    }

    if ($debt[$i]['type_of_asset'] == "IRS Debt" && $husband == 'Me' && $debt[$i]['split_method'] == 'Percentage') {
        //Calculate value given to husband and wife calculating using current_market_value of item and percentage to whom

        //turn current_market_value into calculatable number

        $replace = array("$", ","); //Array of values that will be used in the str_replace function as characters to be removed from string

        $marketValueBank = $equityPreFormat; //remove values in $replace from string

        //Perform calculation with percentage for husband and use that to determine value
        //Husband's percentage of asset
        $husbandsPercent = $debt[$i]['percentage_split_petitioner'];

        $intMarketValueBank = intval($marketValueBank); //set string with removed characters to be an integer

        $husbandsPercentValue = $intMarketValueBank * $husbandsPercent / 100;

        $totalDebtHusband = $totalDebtHusband + $husbandsPercentValue;

        $husbandValueFromPercent = number_format($husbandsPercentValue, 2);
        //Use remainder as value for wife
        $wifePercentValue = $marketValueBank - $husbandsPercentValue;

        $wifeValueFromPercent = number_format($wifePercentValue, 2);

        $totalDebtWife = $totalDebtWife + $wifePercentValue;

    } else if ($debt[$i]['type_of_asset'] == 'IRS Debt' && $husband == 'My Spouse' && $debt[$i]['split_method'] == 'Percentage') {
        //Calculate value given to husband and wife calculating using current_market_value of item and percentage to whom

        //turn current_market_value into calculatable number

        $replace = array("$", ","); //Array of values that will be used in the str_replace function as characters to be removed from string

        $marketValueBank = $equityPreFormat; //remove values in $replace from string

        //Perform calculation with percentage for husband and use that to determine value
        //Husband's percentage of asset
        $husbandsPercent = $debt[$i]['percentage_split_respondent'];

        $intMarketValueBank = intval($marketValueBank); //set string with removed characters to be an integer

        $husbandsPercentValue = $intMarketValueBank * $husbandsPercent / 100;

        $totalDebtHusband = $totalDebtHusband + $husbandsPercentValue;

        $husbandValueFromPercent = number_format($husbandsPercentValue, 2);

        //Use remainder as value for wife
        $wifePercentValue = $marketValueBank - $husbandsPercentValue;

        $wifeValueFromPercent = number_format($wifePercentValue, 2);

        $totalDebtWife = $totalDebtWife + $wifePercentValue;

    }

    //IF [IRS Debt solely awarded to Petitioner and Petitioner is Husband]

    if ($debt[$i]['type_of_asset'] == "IRS Debt" && $debt[$i]['party_awarded_to'] == 'Me' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $debt[$i]['last_four_digits'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $debt[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $debt[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_7_7">
        </th>
    </tr>

    <?php
}

    //IF [IRS Debt solely awarded to Respondent and Petitioner is Husband]
    if ($debt[$i]['type_of_asset'] == "IRS Debt" && $debt[$i]['party_awarded_to'] == 'My Spouse' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $debt[$i]['last_four_digits'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $debt[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $debt[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">
        </th>
      <td class="table_entry_col_7_7">$<?php echo $equity ?></th>
    </tr>

    <?php
}

    //IF [IRS Debt solely awarded to Petitioner and Respondent is Husband]
    if ($debt[$i]['type_of_asset'] == "IRS Debt" && $debt[$i]['party_awarded_to'] == 'Me' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $debt[$i]['last_four_digits'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $debt[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $debt[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">
        </th>
      <td class="table_entry_col_7_7">$<?php echo $equity ?></th>
    </tr>

    <?php
}
    //IF [IRS Debt solely awarded to Respondent and Respondent is Husband]
    if ($debt[$i]['type_of_asset'] == "IRS Debt" && $debt[$i]['party_awarded_to'] == 'My Spouse' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $debt[$i]['last_four_digits'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $debt[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $debt[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_7_7">
        </th>
    </tr>

    <?php
}

    //IF [IRS Debt split by Percentage and Petitioner is Husband]
    if ($debt[$i]['type_of_asset'] == "IRS Debt" && $debt[$i]['split_method'] == 'Percentage' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $debt[$i]['last_four_digits'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $debt[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $debt[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">$<?php echo $husbandValueFromPercent ?></th>
      <td class="table_entry_col_7_7">$<?php echo $wifeValueFromPercent ?></th>
    </tr>

    <?php
}

    //IF [IRS Debt split by Percentage and Respondent is Husband]
    if ($debt[$i]['type_of_asset'] == "IRS Debt" && $debt[$i]['split_method'] == 'Percentage' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $debt[$i]['last_four_digits'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $debt[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $debt[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7">$<?php echo $husbandValueFromPercent ?></th>
      <td class="table_entry_col_7_7">$<?php echo $wifeValueFromPercent ?></th>
    </tr>

    <?php
}

    //IF [IRS Debt split by Fixed dollar amount and Petitioner is Husband]
    if ($debt[$i]['type_of_asset'] == "IRS Debt" && $debt[$i]['split_method'] == 'Fixed dollar amount' && $husband == 'Me') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $debt[$i]['last_four_digits'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $debt[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $debt[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7"><?php echo $debt[$i]['fixed_dollar_split_petitioner'] ?></th>
      <td class="table_entry_col_7_7"><?php echo $debt[$i]['fixed_dollar_split_respondent'] ?></th>
    </tr>

    <?php
}

    //IF [IRS Debt split by Fixed dollar amount and Respondent is Husband]
    if ($debt[$i]['type_of_asset'] == "IRS Debt" && $debt[$i]['split_method'] == 'Fixed dollar amount' && $husband == 'My Spouse') {?>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7"><?php echo $debt[$i]['last_four_digits'] ?></th>
      <td class="table_entry_col_3_7"><?php echo $debt[$i]['current_market_value'] ?></th>
      <td class="table_entry_col_4_7"><?php echo $debt[$i]['current_debt'] ?></th>
      <td class="table_entry_col_5_7">$<?php echo $equity ?></th>
      <td class="table_entry_col_6_7"><?php echo $debt[$i]['fixed_dollar_split_respondent'] ?></th>
      <td class="table_entry_col_7_7"><?php echo $debt[$i]['fixed_dollar_split_petitioner'] ?></th>
    </tr>

    <?php
}

}

?>


    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7">
        </th>
      <td class="table_entry_col_3_7">
        </th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7">
        </th>
      <td class="table_entry_col_6_7">
        </th>
      <td class="table_entry_col_7_7">
        </th>
    </tr>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7">
        </th>
      <td class="table_entry_col_3_7">
        </th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7">
        </th>
      <td class="table_entry_col_6_7">
        </th>
      <td class="table_entry_col_7_7">
        </th>
    </tr>


    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- SECTION 12: Total Liabilities -->
    <!-- Variables -->
    <!-- Output -->

    <?php
//Calculate total liabalities
/*****
As the code for the liabilities is pretty much the same as was used for assets, items that have debts are processed in the section
This also means debts split by percenteges have their total calculated in their section as well

What will be added to the total here will be debts that have
 */

$totalDebtPreDisplay = intval($totalDebt);
$totalDebtHusbandPreDisplay = intval($totalDebtHusband);
$totalDebtWifePreDisplay = intval($totalDebtWife);

$totalDebtToDisplay = number_format($totalDebtPreDisplay, 2);
$totalDebtHusbandToDisplay = number_format($totalDebtHusbandPreDisplay, 2);
$totalDebtWifeToDisplay = number_format($totalDebtWifePreDisplay, 2);

?>



    <tr>
      <td class="table_entry_col_1_7">
        </th>
      <td class="table_entry_col_2_7"><b>TOTAL LIABILITIES</b></th>
      <td class="table_entry_col_3_7">
        </th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7"><?php echo $totalDebtToDisplay ?></th>
      <td class="table_entry_col_6_7"><?php echo $totalDebtHusbandToDisplay ?></th>
      <td class="table_entry_col_7_7"><?php echo $totalDebtWifeToDisplay ?></th>
    </tr>

    <tr>
      <td class="table_entry_col_1_7"><?php echo $leaveBlank ?></th>
      <td class="table_entry_col_2_7">
        </th>
      <td class="table_entry_col_3_7">
        </th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7">
        </th>
      <td class="table_entry_col_6_7">
        </th>
      <td class="table_entry_col_7_7">
        </th>
    </tr>


    <?php

//Calculate overall total

$completeTotal = $totalEquity + $totalDebt;

$completeTotalHusband = $totalEquityHusband + $totalDebtHusband;

$completeTotalWife = $totalEquityWife + $totalDebtWife;

$completeTotalPreDisplay = intval($completeTotal);
$completeTotalToDisplay = number_format($completeTotalPreDisplay, 2);

$completeTotalHusbandPreDisplay = intval($completeTotalHusband);
$completeTotalHusbandToDisplay = number_format($completeTotalHusbandPreDisplay, 2);

$completeTotalWifePreDisplay = intval($completeTotalWife);
$completeTotalWifeToDisplay = number_format($completeTotalWifePreDisplay, 2);

?>

    <tr>
      <td class="table_entry_col_1_7">
        </th>
      <td class="table_entry_col_2_7"><b>TOTALS </b></th>
      <td class="table_entry_col_3_7">
        </th>
      <td class="table_entry_col_4_7">
        </th>
      <td class="table_entry_col_5_7"><?php echo $completeTotalToDisplay ?></th>
      <td class="table_entry_col_6_7"><?php echo $completeTotalHusbandToDisplay ?></th>
      <td class="table_entry_col_7_7"><?php echo $completeTotalWifeToDisplay ?></th>
    </tr>



    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- TABLE: END-->
    <!-- Variables: NONE -->
    <!-- Output -->
  </table>

  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- TABLE FURNITURE: BEGIN-->
  <!-- Variables: NONE -->
  <!-- Output -->

  <pagebreak>
    <table>

      <tr>
        <th colspan="5">Household Items</th>
      </tr>


      <tr>
        <td class="table_furniture_col_1_5">Item Description</th>
        <td class="table_furniture_col_2_5">Location</th>
        <td class="table_furniture_col_3_5">Value</th>
        <td class="table_furniture_col_4_5">Award to Husband</th>
        <td class="table_furniture_col_5_5">Award to Wife</th>
      </tr>

      <?php

for ($i = 0; $i < $count_all_assets; $i++) {

    if ($asset[$i]['type_of_asset'] == 'Furniture' && $asset[$i]['party_awarded_to'] == 'Me' && $husband == 'Me') {
        ?>

      <tr>
        <td class="table_furniture_entry_col_1_5"><?php echo $asset[$i]['name_of_asset'] ?></th>
        <td class="table_furniture_entry_col_2_5"><?php echo $asset[$i]['location'] ?></th>
        <td class="table_furniture_entry_col_3_5"><?php echo $asset[$i]['current_market_value'] ?></th>
        <td class="table_furniture_entry_col_4_5 bs_text_align_center "><?php echo $checkMark ?></th>
        <td class="table_furniture_entry_col_5_5">
          </th>
      </tr>

      <?php }?>

      <?php
if ($asset[$i]['type_of_asset'] == 'Furniture' && $asset[$i]['party_awarded_to'] == 'My Spouse' && $husband == 'Me') {
        ?>

      <tr>
        <td class="table_furniture_entry_col_1_5"><?php echo $asset[$i]['name_of_asset'] ?></th>
        <td class="table_furniture_entry_col_2_5"><?php echo $asset[$i]['location'] ?></th>
        <td class="table_furniture_entry_col_3_5"><?php echo $asset[$i]['current_market_value'] ?></th>
        <td class="table_furniture_entry_col_4_5">
          </th>
        <td class="table_furniture_entry_col_5_5 bs_text_align_center"><?php echo $checkMark ?></th>
      </tr>

      <?php }?>

      <?php
if ($asset[$i]['type_of_asset'] == 'Furniture' && $asset[$i]['party_awarded_to'] == 'Me' && $husband == 'My Spouse') {
        ?>

      <tr>
        <td class="table_furniture_entry_col_1_5"><?php echo $asset[$i]['name_of_asset'] ?></th>
        <td class="table_furniture_entry_col_2_5"><?php echo $asset[$i]['location'] ?></th>
        <td class="table_furniture_entry_col_3_5"><?php echo $asset[$i]['current_market_value'] ?></th>
        <td class="table_furniture_entry_col_4_5">
          </th>
        <td class="table_furniture_entry_col_5_5 bs_text_align_center"><?php echo $checkMark ?></th>
      </tr>

      <?php }?>

      <?php
if ($asset[$i]['type_of_asset'] == 'Furniture' && $asset[$i]['party_awarded_to'] == 'My Spouse' && $husband == 'My Spouse') {
        ?>

      <tr>
        <td class="table_furniture_entry_col_1_5"><?php echo $asset[$i]['name_of_asset'] ?></th>
        <td class="table_furniture_entry_col_2_5"><?php echo $asset[$i]['location'] ?></th>
        <td class="table_furniture_entry_col_3_5"><?php echo $asset[$i]['current_market_value'] ?></th>
        <td class="table_furniture_entry_col_4_5 bs_text_align_center"><?php echo $checkMark ?></th>
        <td class="table_furniture_entry_col_5_5">
          </th>
      </tr>

      <?php }?>

      <?php } // end for loop ?>


      <!-- -------------------------------------------------------------------------------------------- -->
      <!-- TABLE: END-->
      <!-- Variables: NONE -->
      <!-- Output -->
    </table>


    <!-- --------------------------------------------------------------------------------------------  -->
    <!-- End of document  -->

</body>