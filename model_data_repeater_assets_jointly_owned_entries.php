<?php
/*
This file contains dummy data to mimic an enquiry to a Repeater Assets Jointly Owned Entries
 */

/* QUERY
$form_id = 88;
$client_user_id = rgar($entry, 'created_by');

$search_criteria['field_filters'][] = array( 'key' => 'created_by', 'value' => $client_user_id );
$search_criteria['field_filters'][] = array( 'key' => '2', 'value' => 'Vehicles' );
$sorting = array( 'key' => $sort_field, 'direction' => 'ASC', 'is_numeric' => true );

$assets_vehicles_joint_entries = GFAPI::get_entries( $form_id, $search_criteria, $sorting );
 */

// TEMPLATE
// $assets_joint_entries[0][] = ''; //

// For Testing Purposes
$assets_joint_entries = array();

// REPEATER FORM ENTRY ID
// $form_ID = 88;

$assets_joint_entries[0][2] = 'Vehicles'; // Type of Asset (ID: 2)
/* [Options: Bank Accounts || Brokerage Accounts || Businesses || Employment Benefits
|| Health & Medical Savings Account || IRA's, Annuities, SEPS || Life Insurance/Annuities
|| Memberships || Miscellaneous Items || Stocks, Bonds, Securities || Vehicles] */

// IF: [Bank Accounts || Brokerage Accounts || Health & Medical Savings Accounts]
$assets_joint_entries[0][63] = ''; // Name of Account (ID: 63)

// IF: Business
$assets_joint_entries[0][36] = ''; // Name of Business (ID: 36)
$assets_joint_entries[0][28] = ''; // Type of Entity (ID: 28)

// IF: Employee Benefits
$assets_joint_entries[0][11] = ''; // Name of Benefit ID: (ID: 11)

// IF: IRA's Annuitues, SEPs
$assets_joint_entries[0][5] = ''; // Name of IRA's Annuitues, SEPs (ID: 5)
$assets_joint_entries[0][8] = ''; // Name of Investment Company (ID: 8)
$assets_joint_entries[0][7] = ''; // Last 4 digits of account number (ID: 7)
$assets_joint_entries[0][6] = ''; // Name of Trustee or Custodian (ID: 6)

// IF: Life Insurance/Annuity
$assets_joint_entries[0][67] = ''; // Name of Insurance/Annuities (ID: 67)

// IF: Miscellaneous
$assets_joint_entries[0][59] = ''; // Name of Item (ID: 59)

// IF: Memberships
$assets_joint_entries[0][31] = ''; // Name of Membership (ID: 31)

// IF: Stocks, Bonds, Securities
$assets_joint_entries[0][54] = ''; // Name of Asset (ID: 54)

// IF: Vehicles
// Vehicle 1
$assets_joint_entries[0][17] = 'Ford'; // Make (ID: 17)
$assets_joint_entries[0][18] = 'Bronco'; // Model (ID: 18)
$assets_joint_entries[0][19] = '2020'; // Year (ID: 19)
$assets_joint_entries[0][20] = '1AAAA11A11A111111'; // VIN (ID: 20)
$assets_joint_entries[0][21] = 'Truck'; // Body Style (ID: 21)

// Vehicle 2
$assets_joint_entries[1][17] = 'Chevrolet'; // Make (ID: 17)
$assets_joint_entries[2][18] = 'Equinox'; // Model (ID: 18)
$assets_joint_entries[3][19] = '2021'; // Year (ID: 19)
$assets_joint_entries[4][20] = '1AAAA11A11A111112'; // VIN (ID: 20)
$assets_joint_entries[5][21] = 'SUV'; // Body Style (ID: 21)

// SECTION: Value of Asset
$assets_joint_entries[0][442] = ''; // Current Market Value (ID: 44)
$assets_joint_entries[0][45] = ''; // Note Outstanding (ID: 45)

// SECTION: Division of Asset

/* CONDITION A: (ID: 41)
[Brokerage Accounts || Employment Benefits || IRAs Annuities SEPs || Memberships
|| Health & Medical Savings Accounts || Bank Accounts || Businesses]
OPTIONS A:
[One Party || % || $]
 */
$assets_joint_entries[0][41] = '';

/* CONDITION B: (ID: 71)
[Business || Employment Benefits || IRAs Annuities SEPs || Awarded to One Party]
OPTIONS B:
[% || $ ]
 */
$assets_joint_entries[0][71] = '';

/* CONDITION C: (ID: 73)
[Businesses]
OPTIONS C:
[One Party || %]
$assets_joint_entries[0][2] = '';
 */
$assets_joint_entries[0][73] = '';

// Awarded to (ID: 47)
// [CONDITIONS: One Party || Vehicles]
// [OPTIONS: Me || My Spouse]
$assets_joint_entries[0][47] = '';

// IF: %
// % to Me (ID: 48)
// % to My Spouse (ID: 49)
$assets_joint_entries[0][49] = '';

// IF: $
// $ to Me (ID: 50)
// $ to My Spouse (ID: 51)
$assets_joint_entries[0][51] = '';