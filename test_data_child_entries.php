<?php
/*
This form contains dummy data that mimics an enquiry to the Child Repeater Form
 */

/* QUERY
$form_id = 88;
$client_user_id = rgar($entry, 'created_by');

$search_criteria['field_filters'][] = array( 'key' => 'created_by', 'value' => $client_user_id );
$search_criteria['field_filters'][] = array( 'key' => '2', 'value' => 'Vehicles' );
$sorting = array( 'key' => $sort_field, 'direction' => 'ASC', 'is_numeric' => true );

$assets_vehicles_joint_entries = GFAPI::get_entries( $form_id, $search_criteria, $sorting );
 */

$children_entries = array(); // Tell Us About Your Child(ren)

// Child 1 if exists Full Name
$children_entries[0][2]['first'] = 'Alice';
$children_entries[0][2]['middle'] = 'Anne';
$children_entries[0][2]['last'] = 'Parker';
$children_entries[0][3] = 'Female'; // Gender
$children_entries[0][22] = '333-33-3333'; // SSN
$children_entries[0][4] = '01/01/2005'; // DOB
$children_entries[0][3001]['city'] = 'Plano'; // Birthplace: City
$children_entries[0][3001]['state'] = 'Texas'; // Birthplace: State
$children_entries[0][3001]['country'] = 'United States'; // Birthplace: Country
$children_entries[0][19] = '17'; // Age
$children_entries[0][6] = 'Yes'; // Drivers License?
$children_entries[0][23] = 'DL333333'; // Drivers license number
$children_entries[0][8] = 'Texas'; // Drivers license State

// Child 2 if exists Full Name
$children_entries[1][2]['first'] = 'Bryce';
$children_entries[1][2]['middle'] = 'Ben';
$children_entries[1][2]['last'] = 'Parker';
$children_entries[1][3] = 'Male'; // Gender
$children_entries[1][22] = '444-44-4444'; // SSN
$children_entries[1][4] = '02/02/2006'; // DOB
$children_entries[1][3001]['city'] = 'Plano'; // Birthplace: City
$children_entries[1][3001]['state'] = 'Texas'; // Birthplace: State
$children_entries[1][3001]['country'] = 'United States'; // Birthplace: Country
$children_entries[1][19] = '16'; // Age
$children_entries[1][6] = 'Yes'; // Drivers License?
$children_entries[1][23] = 'DL444444'; // Drivers license number
$children_entries[1][8] = 'Texas'; // Drivers license State

// Child 3 if exists Full Name
$children_entries[2][2]['first'] = 'Cassie';
$children_entries[2][2]['middle'] = 'Cheryl';
$children_entries[2][2]['last'] = 'Parker';
$children_entries[2][3] = 'Female'; // Gender
$children_entries[2][22] = '555-55-5555'; // SSN
$children_entries[2][4] = '03/03/2009'; // DOB
$children_entries[2][3001]['city'] = 'Plano'; // Birthplace: City
$children_entries[2][3001]['state'] = 'Texas'; // Birthplace: State
$children_entries[2][3001]['country'] = 'United States'; // Birthplace: Country
$children_entries[2][19] = '13'; // Age
$children_entries[2][6] = 'No'; // Drivers License?
$children_entries[2][23] = ''; // Drivers license number
$children_entries[2][8] = ''; // Drivers license State

// Child 4 if exists Full Name
$children_entries[3][2]['first'] = 'Dean';
$children_entries[3][2]['middle'] = 'Donald';
$children_entries[3][2]['last'] = 'Parker';
$children_entries[3][3] = 'Male'; // Gender
$children_entries[3][22] = '666-66-6666'; // SSN
$children_entries[3][4] = '04/04/20010'; // DOB
$children_entries[3][3001]['city'] = 'Plano'; // Birthplace: City
$children_entries[3][3001]['state'] = 'Texas'; // Birthplace: State
$children_entries[3][3001]['country'] = 'United States'; // Birthplace: Country
$children_entries[3][19] = '12'; // Age
$children_entries[3][6] = 'No'; // Drivers License?
$children_entries[3][23] = ''; // Drivers license number
$children_entries[3][8] = ''; // Drivers license State