<?php

/*
 * Template Name: Divorce Concierge - Final Decree
 * Version: 1.0.0
 * Description: A PHP script to display the Final Decree of divorce
 * Author URI: https://simplifysmallbiz.com
 * Group:  2 Second Reviewer
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
$client_user_id = $form_data['misc']['created_by'];
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

$title = 'Final Decree Of Divorce';
$pageNumber = 'PAGE {PAGENO}';

// Function to format date for output
function bsDateFormat($dateToFormat)
{
    $bsFormattedDate = date('F j, Y', strtotime($dateToFormat));
    return $bsFormattedDate;
}

// Function to interpret submittted answers
function jmcAnswers($answerSubmitted)
{
    switch ($answerSubmitted) {
        case 1:
            $convertAnswerSubmitted = 'right subject to the agreement of my spouse';
            break;
        case 2:
            $convertAnswerSubmitted = 'independent right';
            break;
        case 3:
            $convertAnswerSubmitted = 'exclusive right';
            break;

    }
    return $convertAnswerSubmitted;
}

/* -------------------------------------------------------------------------------------------- */
/* MODEL OF OUTPUT: MASTER */
$master_entries = array();

// PREQUAL DATA
// Service & Plan
$master_entries[0][276] = 'DYW'; // Service
$master_entries[0][277] = 'It\'s Simple'; // Plan (Its Simple, Not So Simple, Its Complicated [with children])

// Petitioner
$master_entries[0][96]['first'] = 'Peter';
$master_entries[0][96]['middle'] = 'Paul';
$master_entries[0][96]['last'] = 'Parker';
$master_entries[0][39] = '999-999-9991'; // Petitioner phone cell
$master_entries[0][40] = 'petitioner@email.com'; // Petitioner Email
$master_entries[0][229] = '01/01/1971'; // Petitioner date of birth
// Qualifier
$master_entries[0][234] = 'Get Started'; // Divorce stage
// Respondent
$master_entries[0][114]['first'] = 'Rebekah'; // Respondent full name
$master_entries[0][114]['middle'] = 'Rochelle'; // Respondent full name
$master_entries[0][114]['last'] = 'Parker'; // Respondent full name
$master_entries[0][275] = '02/02/1972'; // Respondent date of birth
$master_entries[0][235] = 'Yes'; // Respondent hired an attorney?
$master_entries[0][236] = 'Alfred Attorney'; // Respondent attorney's name
// Qualifier
$master_entries[0][237] = 'No'; // Petitioner filed for divorce?
$master_entries[0][238] = ''; // If Yes, which court was the divorce filed in?
$master_entries[0][239] = ''; // If Yes, what is the Cause Number?
$master_entries[0][240] = ''; // If Yes, Is the trial date set?
$master_entries[0][241] = 'No'; // Does a pre/post marital agreement exist?
$master_entries[0][242] = 'No'; // Is spousal maintenance requested?
// Qualified Residency
$master_entries[0][243] = ''; // SECTION HEADING: Texas Residency

// OPTION VARIABLE
$master_entries[0][244] = 2; // Petitioner State duration [1 = Less than 6 Months, 2 = 6 Months or Longer]
$master_entries[0][245] = 'Collin'; // Petitioner County
$master_entries[0][246] = ''; // If 'Other', petitioner County other
// OPTION VARIABLE
$master_entries[0][247] = 3; // $petitioner County duration [1 = Less than 3 Months, 2 = 3 - 6 Months, 3 = 6 Months or Longer]
// OPTION VARIABLE
$master_entries[0][248] = 2; // Respondent State duration [1 = Less than 6 Months, 2 = 6 Months or Longer]
$master_entries[0][249] = 'Collin'; // Respondent County
$master_entries[0][250] = ''; // If 'Other', respondent County other
// OPTION VARIABLE
$master_entries[0][251] = 3; // Respondent County duration [1 = Less than 3 Months, 2 = 3 - 6 Months, 3 = 6 Months or Longer]
// Marital Estate
$master_entries[0][252] = 'Yes'; // Real estate purchased while married?
$master_entries[0][253] = '1'; // If yes, number of parcels
$master_entries[0][254] = 'Yes'; // Interest in employer sponsored retirement plans?
$master_entries[0][255] = '1'; // If yes, Number of employer sponsored retirement plans?
$master_entries[0][256] = '4'; // Joint ownership of assets?
$master_entries[0][257] = ''; // If yes, number of jointly owned assets
$master_entries[0][258] = ''; // In agreement on how assets will be divided?
$master_entries[0][259] = ''; // Does either party own separate property?
$master_entries[0][260] = ''; // Are there jointly owned debts?
$master_entries[0][261] = ''; // Are there more than 6 jointly owned debts?
$master_entries[0][262] = ''; // Are the parties in agreement on awarding debts?
// Qualifier Bankruptcy
$master_entries[0][263] = ''; // Is there a pending bankruptct?
$master_entries[0][264] = ''; // If yes, which court?
$master_entries[0][265] = ''; // If yes, date of filing?
// Children
$master_entries[0][266] = ''; // Are there children under the age of 18?
$master_entries[0][267] = ''; // If yes, are both parties in agreement on custody?
$master_entries[0][268] = ''; // If yes, are both parties in agreement on visitation?
$master_entries[0][269] = ''; // If yes, are both parties in agreement on child support?
$master_entries[0][270] = ''; // Are there children age 18 or older?
$master_entries[0][271] = ''; // Is either party expecting a child?
$master_entries[0][272] = ''; // Do protective orders exist?
// Plan
$master_entries[0][274] = ''; // Redirect URL

// Jurisdiction
$master_entries[0][7] = '1234'; // Cause Number
$master_entries[0][5] = '987th'; // Judicial District Number
$master_entries[0][6] = 'Collin'; // Juditial County
$master_entries[0][8001] = '03/01/2022'; // SDU Section: Order Information [Date of Hearing: Both entered by paralegal]
$master_entries[0][8002] = '03/01/2022'; // SDU Section: Order Information [Order Sign Date: Both entered by paralegal]
$master_entries[0][8003] = '03/01/2022'; // AUSTIN FORM Section I: General Information [Date of Order: Both entered by paralegal]
$master_entries[0][8100] = 'Sharon M. Ramage'; // Peititoner Attorney Name DBU
$master_entries[0][8101] = '972-562-9890'; // Peititoner Attorney Tel DBU
$master_entries[0][8102] = '8951 Collin-McKinney Parkway Suite 1402, McKinney, Texas, 75070'; // Petitoner Attorney Address DBU

// Court Address
$master_entries[0][8201]['street'] = '123 Court Street';
$master_entries[0][8201]['street2'] = '';
$master_entries[0][8201]['city'] = 'Plano';
$master_entries[0][8201]['state'] = 'Texas';
$master_entries[0][8201]['zip'] = '75093';

// PETITIONER (Tell Us About Yourself)
$master_entries[0][97] = 'Male'; // Gender
$master_entries[0][13] = '111-11-1111'; // SSN
$master_entries[0][279] = 'Yes'; // Drivers license exists
$master_entries[0][14] = 'DL1111111'; // Drivers license number
$master_entries[0][103] = 'Texas'; // Drivers license State
$master_entries[0][7001] = '999-999-9992'; // Petitioner phone home
$master_entries[0][7003] = 'White'; // Petitioner Race
$master_entries[0][7210] = 'Parker'; // Petitioner Maiden Name if Gender is Female
// Petitioner Birth Details
$master_entries[0][7002]['city'] = 'Riverton';
$master_entries[0][7002]['state'] = 'Utah';
$master_entries[0][7002]['country'] = 'United States';
// Petitioner address residence
$master_entries[0][38]['street'] = '321 Petitioner Street';
$master_entries[0][38]['street2'] = 'Apt 321';
$master_entries[0][38]['city'] = 'Prosper';
$master_entries[0][38]['state'] = 'Texas';
$master_entries[0][38]['zip'] = '75078';
// Petitioner Address mailing
$master_entries[0][106]['street'] = '321 Petitioner Mailing Street';
$master_entries[0][106]['street2'] = 'Apt 321';
$master_entries[0][106]['city'] = 'Plano';
$master_entries[0][106]['county'] = 'Collin';
$master_entries[0][106]['state'] = 'Texas';
$master_entries[0][106]['zip'] = '75078';
// Petitioner Employment
$master_entries[0][230] = 'Yes'; // Petitioner employed?
$master_entries[0][231] = 'Petitioner Employer Inc'; // Petitioner employer
$master_entries[0][100] = '999-999-9993'; // Petitioner phone work
$master_entries[0][295]['street'] = '123 Petitioner Employer Street'; // Petitioner employer
$master_entries[0][295]['street2'] = 'STE 123'; // Petitioner employer
$master_entries[0][295]['city'] = 'Plano'; // Petitioner employer
$master_entries[0][295]['state'] = 'Texas'; // Petitioner employer
$master_entries[0][295]['zip'] = '75093'; // Petitioner employer
$master_entries[0][7100] = '11-1111111'; // Petitioner employer FEIN

// RESPONDENT (Tell Us About Your Spouse)
$master_entries[0][115] = 'Female'; // Gender
$master_entries[0][74] = 'respondent@email.com'; // Email
$master_entries[0][117] = '888-888-8881'; // Phone cell
$master_entries[0][73] = '888-888-8882'; // Phone home
$master_entries[0][119] = '222-22-2222'; // SSN
$master_entries[0][280] = 'Yes'; // Drivers license?
$master_entries[0][120] = 'DL222222222'; // Drivers license number
$master_entries[0][121] = 'Texas'; // Drivers license State
$master_entries[0][6003] = 'Black'; // Drivers license State
$master_entries[0][6200] = 'Riverton'; // Respondent Maiden Name if Gender is Female
// RESPONDENT Birth Details
$master_entries[0][6002]['city'] = 'Krugersdorp';
$master_entries[0][6002]['state'] = 'Gauteng';
$master_entries[0][6002]['country'] = 'South Africa';
// RESPONDENT Address Residence
$master_entries[0][125]['street'] = '321 Respondent Street';
$master_entries[0][125]['street2'] = 'Apt 321';
$master_entries[0][125]['city'] = 'Prosper';
$master_entries[0][125]['state'] = 'Texas';
$master_entries[0][125]['zip'] = '75078';
// RESPONDENT Address mailing
$master_entries[0][72]['street'] = '321 Respondent Mailing Street';
$master_entries[0][72]['street2'] = 'Apt 321';
$master_entries[0][72]['city'] = 'Prosper';
$master_entries[0][72]['county'] = 'Denton';
$master_entries[0][72]['state'] = 'Texas';
$master_entries[0][72]['zip'] = '75078';
// RESPONDENT Employment
$master_entries[0][281] = 'Yes '; // Employed?
$master_entries[0][282] = 'Respondent Employer Inc'; // Emplyer name
$master_entries[0][118] = '888-888-8883'; // Phone work
$master_entries[0][301]['street'] = '123 Respondent Employer Street'; // Respondent employer
$master_entries[0][301]['street2'] = 'STE 123'; // Respondent employer
$master_entries[0][301]['city'] = 'Prosper'; // Respondent employer
$master_entries[0][301]['state'] = 'Texas'; // Respondent employer
$master_entries[0][301]['zip'] = '75078'; // Respondent employer
$master_entries[0][6200] = '22-2222222'; // Employer FEIN

// MARRIAGE DETAILS (Lets Get Started)
$master_entries[0][20] = ''; // Date of marriage
$master_entries[0][21] = ''; // Still live together
$master_entries[0][24] = ''; // If No, date of separation
$master_entries[0][5100]['city'] = 'Las Vegas'; // Place of Marriage: City
$master_entries[0][5100]['state'] = 'Nevada'; // Place of Marriage: State
$master_entries[0][5100]['country'] = 'United States'; // Place of Marriage: ZIP

// NAME CHANGE (Lets Get Started)
$master_entries[0][27] = ''; // Name change requested?
$master_entries[0][28] = ''; // if yes, which party requests name change?
$master_entries[0][29] = ''; // What will the name be changed to?

// CHILDREN (Tell Us About Your Child(ren))
$master_entries[0][259] = ''; // Child Reater entry ids comma separated

// HEALTH INSURANCE FOR CHILDREN
$master_entries[0][9201] = 'No'; // Health Insurance in place
// IF YES
$master_entries[0][9202] = 'Other'; // Health Insurance Type [OPTIONS: My Employment, Spouses Employment, Private, Medicaid, Chip, Other]
$master_entries[0][9203] = 'ABC Health Insurance Company'; // Health Insurance Company Name
$master_entries[0][9204] = 'HIA123456'; // Health Insurance Policy Number
$master_entries[0][9205] = 'HIA-ID1234'; // Health Insurance Policy Holder ID Number
$master_entries[0][9206] = 'Me'; // Health Insurance Person Responsible for premium [Me, My Spouse]
$master_entries[0][9207] = '1250.00'; // Health Insurance Monthly Premium

// DENTAL INSURANCE FOR CHILDREN
$master_entries[0][9211] = 'No'; // Dental Insurance in place
// IF YES
$master_entries[0][9212] = 'My Spouses Employment'; // Dental Insurance Type [OPTIONS: My Employment, My Spouses Employment, Private, Medicaid, Chip, Other]
$master_entries[0][9213] = 'XYZ Dental Insurance Company'; // Dental Insurance Company Name
$master_entries[0][9214] = 'DIA123456'; // Dental Insurance Policy Number
$master_entries[0][9215] = 'DIA-ID1234'; // Dental Insurance Policy Holder ID Number
$master_entries[0][9216] = 'My Spouse'; // Dental Insurance Person Responsible for premium [Me, My Spouse]
$master_entries[0][9217] = '500.00'; // Dental Insurance Monthly Premium

// PARENTING PLANS
// OPTION VARIABLE
$master_entries[0][286] = 2; // Parenting plan selection [1 = Joint Managing Conservators, 2 = Sole Managing Conservator]

/* # ------------------------------------------ */
// Condition: PARENTING PLAN = 1 (Joint Managing Conservators)
// OPTION VARIABLE
$master_entries[0][333] = 'My Spouse'; // Who determines primary residence [Me, My Spouse]
// OPTION VARIABLE
$master_entries[0][368] = 'Yes'; // Geographical limit exists [Yes, No]
// OPTION VARIABLE
$master_entries[0][347] = 'Collin County, Denton County and Dallas County'; // Geographical limits [List of counties]
// OPTION VARIABLE
$master_entries[0][30001] = 'Me'; // Who determines schooling [Me, My Spouse]

/* ## ------------------------------------------ */
// Condition: Who Determines = Me
// A[1 = right subject to the agreement of my spouse, 2 = independent right, 3 = exclusive right]

// OPTION VARIABLE

// consent medical
$master_entries[0][348] = '1'; // [A]

// consent psychiatric
$master_entries[0][334] = '1'; // [A]

// child support
$master_entries[0][349] = '2'; // [1 = neither party will pay the other party child support, 2 = I will pay my spouse child support, 3 = My spouse will pay me child support]

// represent children for legal actions
$master_entries[0][350] = '1'; // [A]

// consent marriage military
$master_entries[0][351] = '1'; // [A]

// education decisions
$master_entries[0][353] = '1'; // [A]

// SPED
// childrenSpecialEdExists
$master_entries[0][352] = 'Yes'; // [Yes, No]
// IF YES
// who enforces special ed rights
$master_entries[0][354] = 'My Spouse'; // [Me, My Spouse]

// right to services and earnings
$master_entries[0][355] = '1'; // [A]

// right to act as agent for children
$master_entries[0][356] = '1'; // [A]

// apply for passports
$master_entries[0][357] = '1'; // [A]

// manage estate
$master_entries[0][358] = '1'; // [A]

/* ## ------------------------------------------ */
// Condition: Who Determines = My Spouse
// A[1 = right subject to the agreement of my spouse, 2 = independent right, 3 = exclusive right]

// OPTION VARIABLE

// consent medical
$master_entries[0][359] = '2'; // [A]

// consent psychiatric
$master_entries[0][360] = '2'; // [A]

// represent children for legal actions
$master_entries[0][361] = '2'; // [A]

// consent marriage military
$master_entries[0][362] = '2'; // [A]

// education decisions
$master_entries[0][363] = '2'; // [A]

// right to services and earnings
$master_entries[0][364] = '2'; // [A]

// right to act as agent for children
$master_entries[0][365] = '2'; // [A]

// apply for passports
$master_entries[0][366] = '2'; // [A]

// manage estate
$master_entries[0][367] = '2'; // [A]

/* # ------------------------------------------ */
// Condition: PARENTING PLAN = 2 (Sole Managing Conservators)

// OPTION VARIABLE

// IF Parenting Plan == 2 (Sole Managing Conservator)
// SMC Possession Schedule
$master_entries[0][4000] = 3; // [1 = Standard Possession, 2 = Alternating Weeks, 3 = Split Weeks]

// $smcSoleManagingConservator
$master_entries[0][40001] = 'Me'; // [Me, My Spouse]

// $smcPossessoryConservator
$master_entries[0][40002] = 'My Spouse'; // [Me, My Spouse]

// $smcWeekendsBeginTime
$master_entries[0][40003] = '07:00:00'; // [HH:MM:SS]
// $smcWeekendsEndTime
$master_entries[0][40004] = '08:00:00'; // [HH:MM:SS]

// $smcWeekendsExtendedHolidayBeginTime
$master_entries[0][40005] = '09:00:00'; // [HH:MM:SS]

// $smcThursdayBeginTime
$master_entries[0][40006] = '10:00:00'; // [HH:MM:SS]

// $smcSpringHolidayEvenYearsBeginTime
$master_entries[0][40007] = '11:00:00'; // [HH:MM:SS]
// $smcSpringHolidayOddYearsBeginTime
$master_entries[0][40008] = '12:00:00'; // [HH:MM:SS]

// $smc100WeekendExtendedHolidayBeginTime
$master_entries[0][40009] = '13:00:00'; // [HH:MM:SS]

// $smcChristmasHolidayEvenYearsBeginTime
$master_entries[0][40010] = '14:00:00'; // [HH:MM:SS]
// $smcChristmasHolidayOddYearsBeginTime
$master_entries[0][40011] = '15:00:00'; // [HH:MM:SS]

// $smcThanksgivingHolidayEvenYearsBeginTime
$master_entries[0][40012] = '16:00:00'; // [HH:MM:SS]
// $smcThanksgivingHolidayOddYearsBeginTime
$master_entries[0][40013] = '17:00:00'; // [HH:MM:SS]

// $smcFathersDayEndTime
$master_entries[0][40014] = '18:00:00'; // [HH:MM:SS]

/* # ------------------------------------------ */
// Condition: Sole Managing Conservator Possesion Schedule = 2 (50/50 Alternating Weeks)

// IF smcPossesionSchedule == 2 (Sole Managing Conservator)

// OPTION VARIABLE

// $smcEffectiveFriday
$master_entries[0][5001] = '01/02/2022';

// $smcMothersBeginningFriday
$master_entries[0][5002] = '01/03/2022';

// $fathersBeginningFriday
$master_entries[0][5003] = '01/04/2022';

/* # ------------------------------------------ */
// Condition Child Support
// child support
$master_entries[0][40015] = '500.00'; // Child One Amount
$master_entries[0][40016] = '400.00'; // Child Additional Amount
$master_entries[0][40017] = '04/01/2022'; // Child Support Date of First Payment

/* -------------------------------------------------------------------------------------------- */
/* MODEL OF OUTPUT: REPEATER Child Entries */

$children_entries = array(); // Tell Us About Your Child(ren)

// OPTION VARIABLE

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

/* -------------------------------------------------------------------------------------------- */
/* GLOBAL VARIABLES */

// Petitioner Details
// $petitionerNameFull: Already obtained
$petitionerEmail = $master_entries[0][40];
$petitionerPhoneCell = $master_entries[0][39];
$petitionerSSN = $master_entries[0][13];
$petitionerDriversLicenseNumber = $master_entries[0][14];

// Petitioner Residential Address
if ($master_entries[0][38]['street2'] == '') {
    $petitionerAddressResidence = $master_entries[0][38]['street'] . ',<br> ' . $master_entries[0][38]['city'] . ', ' . $master_entries[0][38]['state'] . ', ' . $master_entries[0][38]['zip'];
} else {
    $petitionerAddressResidence = $master_entries[0][38]['street'] . ', ' . $master_entries[0][38]['street2'] . ', ' . $master_entries[0][38]['city'] . ', ' . $master_entries[0][38]['state'] . ', ' . $master_entries[0][38]['zip'];
}

// Petitioner Mailing Address
if ($master_entries[0][106]['street2'] == '') {
    $petitionerAddressMailing = $master_entries[0][106]['street'] . ',<br> ' . $master_entries[0][106]['city'] . ', ' . $master_entries[0][106]['state'] . ', ' . $master_entries[0][106]['zip'];
} else {
    $petitionerAddressMailing = $master_entries[0][106]['street'] . ', ' . $master_entries[0][106]['street2'] . ', ' . $master_entries[0][106]['city'] . ', ' . $master_entries[0][106]['state'] . ', ' . $master_entries[0][106]['zip'];
}

// Petitioner Home Phone Number
$petitionerPhoneHome = $master_entries[0][7001];

// Petitioner Employer Name
$petitionerEmployerName = $master_entries[0][231];

// Petitioner Employer Address
if ($master_entries[0][295]['street2'] == '') {
    $petitionerAddressWork = $master_entries[0][295]['street'] . ',<br> ' . $master_entries[0][295]['city'] . ', ' . $master_entries[0][295]['state'] . ', ' . $master_entries[0][295]['zip'];
} else {
    $petitionerAddressWork = $master_entries[0][106]['street'] . ', ' . $master_entries[0][106]['street2'] . ', ' . $master_entries[0][295]['city'] . ', ' . $master_entries[0][295]['state'] . ', ' . $master_entries[0][295]['zip'];
}

// Petitioner Phone Work
$petitionerPhoneWork = $master_entries[0][100];

// Respondent Details
// $respondentNameFull: Already obtained
$respondentEmail = $master_entries[0][74];
$respondentPhoneCell = $master_entries[0][117];
$respondentSSN = $master_entries[0][119];
$respondentDriversLicenseNumber = $master_entries[0][120];

// Respondent Residential Address
if ($master_entries[0][125]['street2'] == '') {
    $respondentAddressResidence = $master_entries[0][125]['street'] . ',<br> ' . $master_entries[0][125]['city'] . ', ' . $master_entries[0][125]['state'] . ', ' . $master_entries[0][125]['zip'];
} else {
    $respondentAddressResidence = $master_entries[0][125]['street'] . ', ' . $master_entries[0][125]['street2'] . ', ' . $master_entries[0][125]['city'] . ', ' . $master_entries[0][125]['state'] . ', ' . $master_entries[0][125]['zip'];
}

// Respondent Mailing Address
if ($master_entries[0][72]['street2'] == '') {
    $respondentAddressMailing = $master_entries[0][72]['street'] . ',<br> ' . $master_entries[0][72]['city'] . ', ' . $master_entries[0][72]['state'] . ', ' . $master_entries[0][72]['zip'];
} else {
    $respondentAddressMailing = $master_entries[0][72]['street'] . ', ' . $master_entries[0][72]['street2'] . ', ' . $master_entries[0][72]['city'] . ', ' . $master_entries[0][72]['state'] . ', ' . $master_entries[0][72]['zip'];
}

// Respondent Home Phone Number
$respondentPhoneHome = $master_entries[0][73];

// Respondent Employer Name
$respondentEmployerName = $master_entries[0][282];

// Respondent Employer Address
if ($master_entries[0][301]['street2'] == '') {
    $respondentAddressWork = $master_entries[0][301]['street'] . ',<br> ' . $master_entries[0][301]['city'] . ', ' . $master_entries[0][301]['state'] . ', ' . $master_entries[0][301]['zip'];
} else {
    $respondentAddressWork = $master_entries[0][301]['street'] . ', ' . $master_entries[0][301]['street2'] . ', ' . $master_entries[0][301]['city'] . ', ' . $master_entries[0][301]['state'] . ', ' . $master_entries[0][301]['zip'];
}

// Respondent Phone Work
$respondentPhoneWork = $master_entries[0][118];

// Jurisdiction Details
// jurisCounty: Already obtained
// jurisCourtAddress
if ($master_entries[0][8201]['street2'] == '') {
    $jurisCourtAddress = $master_entries[0][8201]['street'] . ',<br> ' . $master_entries[0][8201]['city'] . ', ' . $master_entries[0][8201]['state'] . ', ' . $master_entries[0][8201]['zip'];
} else {
    $jurisCourtAddress = $master_entries[0][8201]['street'] . ', ' . $master_entries[0][8201]['street2'] . ', ' . $master_entries[0][8201]['city'] . ', ' . $master_entries[0][8201]['state'] . ', ' . $master_entries[0][8201]['zip'];
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
td,
li,
.line_height-normal {
  font-size: 12pt;
  line-height: 200%;
}

table.line_height-single td {
  line-height: 100%;
}

/* LISTS */
ul,
ol {
  margin: 0;
  padding-left: 1mm;
  padding-right: 1mm;
}

li {
  margin: 0;
  padding: 2mm 0 0 0;
  list-style-position: outside;
}

.li-indent-level_1 {
  padding-left: 20mm;
}

/* GENERAL */
.bs_text_bold {
  font-weight: bold;
}

.bs_text_underline {
  text-decoration: underline;
}

.bs_text_italic {
  font-style: italic;
}

.bs_spacer {
  height: 5mm;
}

.bs_text_small {
  font-size: 10pt;
}

.child-label {
  padding-left: 10.5mm;
}

.image-standing_order {
  height: 255mm;
}

.indent-first_line,
  {
  text-indent: 10.5mm;
}

.indent-indent-paragraph {
  margin-left: 10.5mm;
  text-indent: 10.5mm;
}

.indent-indent-indent-paragraph {
  margin-left: 15mm;
  text-indent: 10.5mm;
}




.title {
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

.text_align_center {
  text-align: center;
}

.text_align_right {
  text-align: right;
}

.text_align_justify {
  text-align: justify;
}

/* SIGNATURE FIELDS */
.height_max {
  height: 20mm;
}

/* # TABLES */
/* # TABLES */
/* ## Table to display Cause Number */
.table-cause_number-col_1_4,
.table-cause_number-col_4_4 {
  width: 50mm;
}

.table-cause_number-col_2_4 {
  text-align: right;
  width: 20mm;
  padding-right: 2mm;
}

.table-cause_number-col_3_4 {
  width: 40mm;
  border-bottom: 1px solid;
}

/* ## Pleading Head Table */
.table_header_left_column,
.table_header_right_column {
  width: 44%;
}

.table_header_middle_column {
  width: 10%
}

/* ## Table to display signature fields */
.table_signature_left_column,
.table_signature_right_column {
  width: 49%;
}

.table_border_top {
  border-top: 1px solid;
}


/* ## Footer Table */
.footer_left_half {
  width: 69%;
}

.footer_right_half {
  width: 30%;
}
</style>


<!-- -------------------------------------------------------------------------------------------- -->
<!-- BEGIN BODY OUTPUT -->

<body>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- SECTION: Bookmarks -->
  <!-- Variables: None -->
  <!-- Output -->
  <bookmark content="<?php echo $title ?>" />

  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- HEADER / FOOTER -->
  <!-- Variables -->
  <?php
$jurisCauseNumber = $master_entries[0][7];
// Petitioner Full Name
$petitionerNameFirst = $master_entries[0][96]['first'];
$petitionerNameMiddle = $master_entries[0][96]['middle'];
$petitionerNameLast = $master_entries[0][96]['last'];
if ($petitionerNameMiddle == '') {
    $petitionerNameFull = strtoupper($petitionerNameFirst . ' ' . $petitionerNameLast);
    $petitionerNameFull = strtoupper('Test');
} else {
    $petitionerNameFull = strtoupper($petitionerNameFirst . ' ' . $petitionerNameMiddle . ' ' . $petitionerNameLast);
}
?>
  <!-- HEADER / FOOTER -->
  <htmlpagefooter name="MyCustomFooter">
    <table class="footer line_height-single">
      <tr>
        <td class="table-footer_col_1_2"><span
            class="bs_text_bold bs_text_small"><?php echo strtoupper($title) ?></span>
        </td>
        <td class=" table-footer_col_1_2 text_align_right"><span class="bs_text_bold bs_text_small">PAGE {PAGENO}</span>
        </td>
      </tr>
      <tr>
        <td><span
            class="bs_text_bold bs_text_small"><?php echo strtoupper($jurisCauseNumber) ?>/<?php echo strtoupper($petitionerNameLast) ?></span>
        </td>
        <td class="text_align_right"><span class="bs_text_bold bs_text_small"><?php echo $leaveBlank ?></span></td>
      </tr>
    </table>
  </htmlpagefooter>
  <!-- HEADR FOOTER END -->

  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- TABLE: Cause Number -->
  <!-- Variables: ALREADY OBTAINED -->
  <!-- Output -->
  <table class="table-cause_number line_height-single">
    <tr>
      <td class="table-cause_number-col_1_4 line_height-single">&nbsp;</td>
      <td class="table-cause_number-col_2_4"><span class="bs_text_bold">NO.</span></td>
      <td class="table-cause_number-col_3_4"><span
          class="text_align_center bs_text_bold"><?php echo $jurisCauseNumber ?></span>
      </td>
      <td class="table-cause_number-col_4_4">&nbsp;</td>
    </tr>
  </table>

  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- SPACER -->
  <div class="bs_spacer"></div>


  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- TABLE: Pleading Header -->
  <!-- Variables -->
  <?php
/* Petitioner Name Full (Already retrieved) */
/* Respondent Name Full */
$respondentNameFirst = $master_entries[0][114]['first'];
$respondentNameMiddle = $master_entries[0][114]['middle'];
$respondentNameLast = $master_entries[0][114]['last'];
if ($respondentNameMiddle == '') {
    $respondentNameFull = strtoupper($respondentNameFirst . ' ' . $respondentNameLast);
} else {
    $respondentNameFull = strtoupper($respondentNameFirst . ' ' . $respondentNameMiddle . ' ' . $respondentNameLast);
}
/* Childrens Names Full */
$count_children_entries = count($children_entries);

for ($i = 0; $i < $count_children_entries; $i++) {
    $children[$i]['first_name'] = $children_entries[$i][2]['first'];
    $children[$i]['middle_name'] = $children_entries[$i][2]['middle'];
    $children[$i]['last_name'] = $children_entries[$i][2]['last'];
    if ($children[$i]['middle_name'] != '') {
        $children[$i]['full_name'] = $children[$i]['first_name'] . ' ' . $children[$i]['middle_name'] . ' ' . $children[$i]['last_name'];
    } else {
        $children[$i]['full_name'] = $children[$i]['first_name'] . ' ' . $children[$i]['last_name'];
    }
    $children[$i]['gender'] = $children_entries[$i][3];
    $children[$i]['birth_date_raw'] = $children_entries[$i][4];
    $children_birth_date_string = strtotime($children[$i]['birth_date_raw']);
    $children[$i]['birth_date'] = date('F j, Y', $children_birth_date_string);
    $children[$i]['has_dl'] = $children_entries[$i][6];
    // echo '<pre>';
    // echo 'CHILDREN<br>';
    // print_r($children[$i]);
    // echo '<br></pre>';
}

/* Judicial District Number */
$jurisDistrictNumber = $master_entries[0][5]; // Masters
$jurisCounty = $master_entries[0][6]; // Right F You
?>

  <!-- Output -->
  <!-- INTRO HEADER -->
  <!-- NO CHILDREN -->
  <?php if ($count_children_entries == 0) {?>
  <table class="INTRO">
    <tr>
      <td class="table_header_column"><span class="bs_text_bold">IN THE MATTER OF</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold">IN THE DISTRICT OF</span></td>
    </tr>
    <tr>
      <td class="table_header_left_column"><span class="bs_text_bold">IN THE MARRIAGE OF</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold">&sect;</span></td>
      <td class="table_right_column"><span class="bs_text_bold">&nbsp;</span></td>
    </tr>
    <tr>
      <td class="table_header_left_column"><span class="bs_text_bold">&nbsp;</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold">&sect;</span></td>
      <td class="table_right_column"><span class="bs_text_bold">&nbsp;</span></td>
    </tr>
    <tr>
      <td class="table_header_left_column"><span class="bs_text_bold"><?php echo $petitionerNameFull; ?></span>
      </td>
      <td class="table_header_middle_column"><span class="bs_text_bold">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold"><span
            class="bs_text_underline">&nbsp;<?php echo $jurisDistrictNumber ?>&nbsp;</span> JUDICIAL DISTRICT</span>
      </td>
    </tr>
    <tr>
      <td class="table_header_left_column"><span class="bs_text_bold">AND</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold">&nbsp;</span></td>
    </tr>
    <tr>
      <td class="table_header_left_column"><span class="bs_text_bold"><?php echo $respondentNameFull; ?></span>
      </td>
      <td class="table_header_middle_column"><span class="bs_text_bold">&sect;</span></td>
      <td class="table_header_right_column"><span
          class="bs_text_bold"><?php echo $jurisCounty . " COUNTY, TEXAS"; ?></span>
      </td>
    </tr>
  </table>
  <?php }?>



  <!-- WITH CHILDREN -->
  <?php if ($count_children_entries > 0) {?>
  <table class="INTRO line_height-single">
    <tr>
      <td class="table_header_left_column"><span class="bs_text_bold">IN THE MATTER OF</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold">IN THE DISTRICT OF</span></td>
    </tr>
    <tr>
      <td class="table_header_left_column"><span class="bs_text_bold">IN THE MARRIAGE OF</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold">&nbsp;</span></td>
    </tr>
    <tr>
      <td class="table_header_left_column"><span class="bs_text_bold">&nbsp;</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold">&nbsp;</span></td>
    </tr>
    <tr>
      <td class="table_header_left_column"><span class="bs_text_bold"><?php echo $petitionerNameFull; ?></span>
      </td>
      <td class="table_header_middle_column"><span class="bs_text_bold">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold">&nbsp;</span></td>
    </tr>
    <tr>
      <td class="table_header_left_column"><span class="bs_text_bold">AND</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold"><span
            class="bs_text_underline">&nbsp;<?php echo $jurisDistrictNumber ?>&nbsp;</span> JUDICIAL DISTRICT</span>
      </td>
    </tr>
    <tr>
      <td class="table_header_left_column"><span class="bs_text_bold"><?php echo $respondentNameFull; ?></span>
      </td>
      <td class="table_header_middle_column"><span class="bs_text_bold">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold"></span>&nbsp;</td>
    </tr>
    <tr>
      <td class="table_header_left_column"><span class="bs_text_bold">&nbsp;</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold">&nbsp;</span></td>
    </tr>
    <tr>
      <td class="table_header_left_column"><span class="bs_text_bold">AND IN THE INTEREST OF</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold"></span>&nbsp;</td>
    </tr>
    <?php if ($count_children_entries == 1) {?>
    <tr>
      <td class="table_header_left_column"><span
          class="bs_text_bold"><?php echo strtoupper($children[0]['full_name']) ?>,</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold">&nbsp;</span></td>
    </tr>
    <tr>
      <td class="table_header_left_column"><span class="bs_text_bold">
          A CHILD.</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold">&sect;</span></td>
      <td class="table_header_right_column"><span
          class="bs_text_bold"><?php echo $jurisCounty . " COUNTY, TEXAS"; ?></span>
      </td>
    </tr>

    <?php }

    if ($count_children_entries == 2) {?>
    <tr>
      <td class="table_header_left_column"><span
          class="bs_text_bold"><?php echo strtoupper($children[0]['full_name']) ?> AND
        </span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold"></span>&nbsp;</td>
    </tr>
    <tr>
      <td class="table_header_left_column"><span
          class="bs_text_bold"><?php echo strtoupper($children[1]['full_name']) ?>,</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold">&nbsp;</span></td>
    </tr>
    <tr>
      <td class="table_header_left_column"><span class="bs_text_bold">
          CHILDREN.</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold">&sect;</span></td>
      <td class="table_header_right_column"><span
          class="bs_text_bold"><?php echo $jurisCounty . " COUNTY, TEXAS"; ?></span>
      </td>
    </tr>
    <?php }
    if ($count_children_entries == 3) {?>
    <tr>
      <td class="table_header_left_column"><span
          class="bs_text_bold"><?php echo strtoupper($children[0]['full_name']) ?>,
        </span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold"></span>&nbsp;</td>
    </tr>
    <tr>
      <td class="table_header_left_column"><span
          class="bs_text_bold"><?php echo strtoupper($children[1]['full_name']) ?> AND
        </span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold"></span>&nbsp;</td>
    </tr>
    <tr>
      <td class="table_header_left_column"><span
          class="bs_text_bold"><?php echo strtoupper($children[2]['full_name']) ?>,</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold">&nbsp;</span></td>
    </tr>
    <tr>
      <td class="table_header_left_column"><span class="bs_text_bold">
          CHILDREN.</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold">&sect;</span></td>
      <td class="table_rheader_ight_column"><span
          class="bs_text_bold"><?php echo $jurisCounty . " COUNTY, TEXAS"; ?></span>
      </td>
    </tr>

    <?php }

    if ($count_children_entries == 4) {?>
    <tr>
      <td class="table_header_left_column"><span
          class="bs_text_bold"><?php echo strtoupper($children[0]['full_name']) ?>,
        </span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold"></span>&nbsp;</td>
    </tr>
    <tr>
      <td class="table_header_left_column"><span
          class="bs_text_bold"><?php echo strtoupper($children[1]['full_name']) ?>,
        </span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold"></span>&nbsp;</td>
    </tr>
    <tr>
      <td class="table_header_left_column"><span
          class="bs_text_bold"><?php echo strtoupper($children[2]['full_name']) ?> AND
        </span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold">&nbsp;</span></td>
    </tr>
    <tr>
      <td class="table_header_left_column"><span
          class="bs_text_bold"><?php echo strtoupper($children[3]['full_name']) ?>,</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold">&sect;</span></td>
      <td class="table_header_right_column"><span class="bs_text_bold">&nbsp;</span></td>
    </tr>
    <tr>
      <td class="table_header_left_column"><span class="bs_text_bold">
          CHILDREN.</span></td>
      <td class="table_header_middle_column"><span class="bs_text_bold">&sect;</span></td>
      <td class="table_rheader_ight_column"><span
          class="bs_text_bold"><?php echo $jurisCounty . " COUNTY, TEXAS"; ?></span>
      </td>
    </tr>
    <?php }?>
  </table>

  <?php }?>

  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- SPACER -->
  <div class="bs_spacer"></div>
  <div class="bs_spacer"></div>

  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- TITLE -->
  <!-- Variables: Already retrieved -->

  <!-- Output -->
  <div class="bs_text_bold text_align_center bs_lineheight_single">
    <?php echo strtoupper($title) ?>
  </div>

  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- SPACER -->
  <div class="bs_spacer"></div>

  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- SECTION: APPEARANCES -->
  <!-- Variables -->
  <?php
// Petitioner Full Name - Already Obtained
// Respondent Full Name - Already Obtained
// Party Meeting Residency Requirement
$petitionerStateResidencyDuration = $master_entries[0][244];
$petitionerCountyResidencyDuration = $master_entries[0][247];
$respondentStateResidencyDuration = $master_entries[0][248];
$respondentCountyResidencyDuration = $master_entries[0][251];

?>
  <!-- Output -->

  <div class="indent-first_line"> On this date the Court heard this case.
  </div>
  <div class="paragraph bs_text_italic"> Appearances </div>
  </div>
  <div class="indent-first_line"> Petitioner, <?php echo strtoupper($petitionerNameFull) ?>, did not appear in person
    but
    has agreed to the terms of this order as evidenced by Petitioner's signature below.
  </div>
  <div class="indent-first_line">Respondent, <?php echo strtoupper($respondentNameFull) ?>, has made a general
    appearance
    and has agreed to the terms of this judgment to the extent permitted by law, as evidenced by Respondent's signature
    below.
  </div>
  <div class="paragraph bs_text_italic"> Record </div>
  </div>
  <div class="indent-first_line">The making of a record of testimony was waived by the parties with the consent of the
    Court.
  </div>

  <div class="paragraph bs_text_italic"> Jurisdiction and Domicile </div>
  </div>
  <div class="indent-first_line">The Court finds that the pleadings of Petitioner are in due form and contain all the
    allegations, information, and prerequisites required by law. The Court, after receiving evidence, finds that it has
    jurisdiction of this case and of all the parties and that at least sixty days have elapsed since the date the suit
    was filed.
  </div>
  <div class="indent-first_line">The Court further finds that, at the time this suit was filed,

    <?php if ($petitionerStateResidencyDuration == 2 && $petitionerCountyResidencyDuration != 1) {

    echo "Petitioner had been a domiciliary of Texas for the preceding six-month period and a resident of the county in which this suit was filed for the preceding ninety-day period.  All persons entitled to citation were properly cited.";

} else if ($respondentStateResidencyDuration == 2 && $respondentCountyResidencyDuration != 1) {
    echo "Respondent had been a domiciliary of Texas for the preceding six-month period and a resident of the county in which this suit was filed for the preceding ninety-day period.  All persons entitled to citation were properly cited.";
}
?>
  </div>

  <div class="paragraph bs_text_italic"> Jury </div>
  </div>
  <div class="indent-first_line">A jury was waived, and questions of fact and of law were submitted to the Court.
  </div>
  <div class="paragraph bs_text_italic"> Agreement of Parties
  </div>
  <div class="indent-first_line"> The Court finds that the parties have entered into a written agreement as contained in
    this decree by virtue of having approved this decree as to both form and substance. To the extent permitted by law,
    the parties stipulate the agreement is enforceable as a contract. The Court approves the agreement of the parties as
    contained in this Final Decree of Divorce.
  </div>
  <div class="paragraph bs_text_italic"> Divorce
  </div>
  <div class="indent-first_line">IT IS ORDERED AND DECREED that <?php echo $petitionerNameFull ?>, Petitioner, and
    <?php echo $respondentNameFull ?>, Respondent, are divorced and that the marriage between them is dissolved on the
    ground of insupportability.
  </div>

  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- SECTION: CHILDREN OF THE MARRIAGE -->
  <!-- Variables: None -->

  <?php if ($count_children_entries == 0) {?>
  <div class="paragraph bs_text_italic">Child of the Marriage
  </div>
  <?php } else {?>
  <div class="paragraph bs_text_italic">Child(ren) of the Marriage
  </div>
  <?php }?>

  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- CONDITION: CHILDREN = 0 -->
  <!-- Variables -->
  <?php
// Count Children Entries: Already obtained
?>

  <!-- Output -->
  <?php if ($count_children_entries == 0) {?>
  <div class="indent-first_line">The Court finds that there is no child of the marriage of Petitioner and Respondent now
    under eighteen years of age or otherwise entitled to support and that none is expected.
  </div>


  <?php }?>


  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- CONDITION: CHILDREN > 0 -->
  <!-- Variables -->
  <?php
// Number of Children: Already obtained
// For Each Child: Already obtained
// Full Name: Already obtained
// Gender: Already obtained
// Date of Birth: Already obtained
// SSN: Already obtained
// Drivers License Number: Already obtained
// Parenting plan
if ($count_children_entries > 0) {

    for ($i = 0; $i < $count_children_entries; $i++) {?>
  <table class="children-wrapper line_height-single">
    <tr class="child-row">
      <td class="child-label">Name:</td>
      <td class="child-data"><?php echo $children[$i]['full_name']; ?></td>
    </tr>
    <tr class="child-row">
      <td class="child-label">Sex:</td>
      <td class="child-data"><?php echo $children[$i]['gender']; ?></td>
    </tr>
    <tr class="child-row">
      <td class="child-label">Birthdate:</td>
      <td class="child-data"><?php echo $children[$i]['birth_date']; ?></td>
    </tr>
    <tr class="child-row">
      <td class="child-label">Social Security Number:</td>
      <td class="child-data">Exchanged Privately</td>
    </tr>

    <?php if ($children[$i]['has_dl'] == 'Yes') {?>
    <tr class="child-row">
      <td class="child-label">Drivers License:</td>
      <td class="child-data">Exchanged Privately</td>
    </tr>
    <?php } // CLOSE: if ($children[$i]['has_dl'] == 'Yes') ?>
  </table>
  <div class="bs_spacer"></div>
  <?php } // CLOSE: for ($i = 0; $i < $count_children_entries; $i++) ?>
  <div class="indent-first_line">The Court finds no other children of the marriage are expected.
  </div>


  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- SECTION: PARENTING PLAN -->
  <!-- Variables -->
  <?php
// Number of Children: Already obtained
    // Parenting plan
    $parentingPlan = $master_entries[0][286];
    ?>


  <div class="paragraph bs_text_italic">Parenting Plan
  </div>
  <div class="indent-first_line">The Court finds that the provisions herein relating to the conservatorship, possession
    and child support, and optimizing the development of a close and continuing relationship between each party and the
    child(ren) constitute the parties' agreed parenting plan.
  </div>
  <div class="paragraph bs_text_italic">Best Interests of Children
  </div>
  <div class="indent-first_line">The following orders are for the safety and welfare and in the best interest of the
    child(ren)
  </div>

  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- CONDITION: PARENTING PLAN == 1 (Joint Managing Conservators) -->
  <!-- Variables -->
  <?php
// Parenting plan: Already obtained
    $jmcDeterminePrimaryResidence = $master_entries[0][286];
    ?>

  <!-- OUTPUT: Condition [$parentingPlan == 1 (Joint Managing Conservators)]) -->
  <?php
if ($parentingPlan == 1) {?>
  <div class="indent-first_line">IT IS ORDERED that <?php echo strtoupper($petitionerNameFull) ?>
    and <?php echo strtoupper($respondentNameFull) ?> are appointed Joint Managing Conservators of the child(ren).
  </div>
  <div class="indent-first_line">IT IS ORDERED that, at all times, <?php echo strtoupper($petitionerNameFull) ?>
    and <?php echo strtoupper($respondentNameFull) ?>, as parent joint managing conservators, shall have the following
    rights:
  </div>

  <ol class="li-indent-level_1">
    <li>the right to receive information from any other conservator of the children
      concerning the health, education, and welfare of the children;</li>
    <li>the right to confer with the other parent to the extent possible before making a
      decision concerning the health, education, and welfare of the children;
    </li>
    <li>the right of access to medical, dental, psychological, and educational records of
      the
      children;
    </li>
    <li>the right to consult with a physician, dentist, or psychologist of the children;
    </li>
    <li>the right to consult with school officials concerning the children's welfare
      and
      educational status, including school activities;
    </li>
    <li>the right to attend school activities, including school lunches, performances, and
      field trips;
    </li>
    <li>the right to be designated on the children's records as a person to be notified
      in case of an emergency;
    </li>
    <li>the right to consent to medical, dental, and surgical treatment during an emergency
      involving an immediate danger to the health and safety of the children; and
    </li>
    <li>the right to manage the estates of the children to the extent the estates have been
      created by the parent or the parent's family.
    </li>
  </ol>


  <div class="indent-first_line">IT IS ORDERED that, at all times, <?php echo strtoupper($petitionerNameFull) ?>
    and <?php echo strtoupper($respondentNameFull) ?>, as parent joint managing conservators, shall each have the
    following duties:
  </div>

  <ol class="li-indent-level_1">

    <li>the duty to inform the other conservator of the children in a timely manner of
      significant information concerning the health, education, and welfare of the children;
    </li>
    <li>the duty to inform the other conservator of the children if the conservator resides
      with for at least thirty days, marries, or intends to marry a person who the conservator knows is registered as
      a
      sex offender under chapter 62 of the Texas Code of Criminal Procedure or is currently charged with an offense
      for
      which on conviction the person would be required to register under that chapter. IT IS ORDERED that notice of
      this
      information shall be provided to the other conservator of the children as soon as practicable, but not later
      than
      the fortieth day after the date the conservator of the children begins to reside with the person or on the tenth
      day
      after the date the marriage occurs, as appropriate. IT IS ORDERED that the notice must include a description of
      the
      offense that is the basis of the person's requirement to register as a sex offender or of the offense with
      which
      the person is charged. WARNING: A CONSERVATOR COMMITS AN OFFENSE PUNISHABLE AS A CLASS C MISDEMEANOR IF THE
      CONSERVATOR FAILS TO PROVIDE THIS NOTICE;
    </li>
    <li>the duty to inform the other conservator of the children if the conservator
      establishes a residence with a person who the conservator knows is the subject of a final protective order
      sought
      by
      an individual other than the conservator that is in effect on the date the residence with the person is
      established.
      IT IS ORDERED that notice of this information shall be provided to the other conservator of the children as soon
      as
      practicable, but not later than the thirtieth day after the date the conservator establishes residence with the
      person who is the subject of the final protective order. WARNING: A CONSERVATOR COMMITS AN OFFENSE PUNISHABLE AS
      A
      CLASS C MISDEMEANOR IF THE CONSERVATOR FAILS TO PROVIDE THIS NOTICE;
    </li>
    <li>the duty to inform the other conservator of the children if the conservator resides
      with, or allows unsupervised access to a child by, a person who is the subject of a final protective order
      sought
      by
      the conservator after the expiration of sixty-day period following the date the final protective order is
      issued.
      IT
      IS ORDERED that notice of this information shall be provided to the other conservator of the children as soon as
      practicable, but not later than the ninetieth day after the date the final protective order was issued. WARNING:
      A
      CONSERVATOR COMMITS AN OFFENSE PUNISHABLE AS A CLASS C MISDEMEANOR IF THE CONSERVATOR FAILS TO PROVIDE THIS
      NOTICE;
      and
    </li>
    <li>the duty to inform the other conservator of the children if the conservator is the
      subject of a final protective order issued after the date of the order establishing conservatorship. IT IS
      ORDERED
      that notice of this information shall be provided to the other conservator of the children as soon as
      practicable,
      but not later than the thirtieth day after the date the final protective order was issued. WARNING: A
      CONSERVATOR
      COMMITS AN OFFENSE PUNISHABLE AS A CLASS C MISDEMEANOR IF THE CONSERVATOR FAILS TO PROVIDE THIS NOTICE.
    </li>

  </ol>

  <div class="indent-first_line">IT IS ORDERED that, during their periods of
    possession, <?php echo strtoupper($petitionerNameFull) ?> and <?php echo strtoupper($respondentNameFull) ?> as
    parent
    joint
    managing conservators, shall have the following rights and duties:
  </div>

  <ol class="li-indent-level_1">
    <li>the duty of care, control, protection, and reasonable discipline of the children;
    </li>
    <li>the duty to support the children, including providing the children with clothing,
      food, shelter, and medical and dental care not involving an invasive procedure;
    </li>
    <li>the right to consent for the children to medical and dental care not involving an
      invasive procedure; and
    </li>
    <li>the right to direct the moral and religious training of the children.
    </li>
  </ol>



  <!-- SUBSECTION: Joint Managing Conservator Petitioner Rights) -->
  <!-- Variables -->
  <?php

        // Who is the deciding parent for primary residence

        $jmcDecidingParent = $master_entries[0][333];
        if ($jmcDecidingParent == 'Me') {
            $jmcPrimaryParent = $petitionerNameFull;
            $jmcNonPrimaryParent = $respondentNameFull;
        } else if ($jmcDecidingParent == 'My Spouse') {
            $jmcPrimaryParent = $respondentNameFull;
            $jmcNonPrimaryParent = $petitionerNameFull;
        }

        // Determine School Parent
        if ($master_entries[0][30001] == 'Me') {
            $jmcSchoolParent = $petitionerNameFull;
        } else if ($master_entries[0][30001] == 'My Spouse') {
            $jmcSchoolParent = $respondentNameFull;
        }

        $jmcPrimaryResidenceGeographicalLimitExist = $master_entries[0][368];
        $jmcPrimaryResidenceGeographicalLimit = $master_entries[0][347];

        // consent medical
        $jmcPetitionerMedicalRights = jmcAnswers($master_entries[0][348]);

// consent psychiatric
        $jmcPetitionerPsychRights = jmcAnswers($master_entries[0][334]);

// child support
        switch ($master_entries[0][349]) {
            case 1:
                $jmcChildSupport = "Neither party will pay the other party child support";
                break;
            case 2:
                $jmcChildSupport = "I will pay my spouse child support";
                break;
            case 3:
                $jmcChildSupport = "My spouse will pay me child support";
                break;
        }

// represent children for legal actions
        $jmcPetitionerChildrensLegalRights = jmcAnswers($master_entries[0][350]);

// consent marriage military
        $jmcPetitionerMilitaryMarriage = jmcAnswers($master_entries[0][351]);

// education decisions
        $jmcPetitionerEducationRights = jmcAnswers($master_entries[0][353]);

// SPED
        // childrenSpecialEdExists
        $jmcSpecialEducationNeedExists = $master_entries[0][352];
        // IF YES
        // who enforces special ed rights
        if ($jmcSpecialEducationNeedExists == 'Yes') {
            $jmcSpecialEducationParent = $master_entries[0][354];
        }

// right to services and earnings
        $jmcPetitionerChildrensEarnings = jmcAnswers($master_entries[0][355]);

// right to act as agent for children
        $jmcPetitionerChildrensAgent = jmcAnswers($master_entries[0][356]);

// apply for passports
        $jmcPetitionerChildrensPassports = jmcAnswers($master_entries[0][357]);

// manage estate
        $jmcPetitionerChildrensEstateManagement = jmcAnswers($master_entries[0][358]);

        ?>
  <!-- Output -->
  <div class="indent-first_line">IT IS ORDERED that <?php echo strtoupper($petitionerNameFull) ?> as a parent joint
    managing conservator,
    shall have the rights and duties:
  </div>

  <ol class="li-indent-level_1">

    <!-- CONDITION: Petitioner decides Primary Residence & Geographical limits exist -->
    <?php if ($jmcDecidingParent == 'Me' && $jmcPrimaryResidenceGeographicalLimitExist == 'Yes') {?>
    <li>Petitioner, <?php echo strtoupper($petitionerNameFull) ?> has the exclusive right to
      designate the primary
      residence of the child(ren) in <?php echo strtoupper($jmcPrimaryResidenceGeographicalLimit) ?></li>
    <?php } // CLOSE: if ($jmcPrimaryParent == 'Me') ?>

    <!-- Medical Consent -->
    <li>the <?php echo $jmcPetitionerMedicalRights ?> to consent to medical, dental, and
      surgical treatment involving
      invasive procedures;</li>

    <!-- Psychiatric or Psychological Treatment -->
    <li>the <?php echo $jmcPetitionerPsychRights ?> to consent to psychiatric and
      psychological treatment of the
      child(ren);</li>

    <!-- CONDITION: Petitioner Receives Child Support -->
    <?php if ($jmcChildSupport == 'My spouse will pay me child support') {?>
    <li>The exclusive right to receive and give receipt for periodic payments for the support
      of the child(ren] and to
      hold or disburse these funds for the benefit of the child(ren);</li>
    <?php }?>

    <!-- Represent children in legal actions -->
    <li>the <?php echo $jmcPetitionerChildrensLegalRights ?> to represent the child(ren) in
      legal action and to make
      other decisions of substantial legal significance concerning the child(ren);</li>

    <!-- Marriage and enlistment in armed forces -->
    <li>the <?php echo $jmcPetitionerMilitaryMarriage ?> to consent to marriage and to
      enlistment in the armed forces of
      the United States;</li>

    <!-- Education / SPED If applicable -->
    <li>the <?php echo $jmcPetitionerEducationRights ?> to make decisions concerning the
      child(ren)'s education;
      <?php if ($jmcSpecialEducationNeedExists == 'Yes') {?> provided, however,
      that <?php if ($jmcSpecialEducationParent == 'Me') {echo $petitionerNameFull?>
      <?php }?><?php if ($jmcSpecialEducationParent == 'My Spouse') {echo $respondentNameFull?> <?php }?> shall have
      the
      exclusive right to enforce the child's educational rights under applicable federal and state law;<?php }?>
    </li>

    <!-- Services and earnings of children -->
    <li>except as provided by Section 264.0111 of the Texas Family Code, the
      <?php echo $jmcPetitionerChildrensEarnings ?> to the services and earnings of the child(ren);</li>

    <!-- Childrens Estate -->
    <li>except when a guardian of the child(ren)'s estate[s] or a guardian or attorney ad
      litem has been appointed
      for the child(ren), the <?php echo $jmcPetitionerChildrensAgent ?> to act as an agent of the child(ren)
      in relation to the child(ren)'s estate[s] if the child(ren)'s action is required by a state, the United
      States, or a foreign government;</li>

    <!-- Passports -->
    <li>the <?php echo $jmcPetitionerChildrensPassports ?> to apply for passports for the
      child(ren), to renew the
      child(ren)'s passports, and to maintain possession of the child(ren)'s passports; and</li>

    <!-- Manage childrens estate -->
    <li>the <?php echo $jmcPetitionerChildrensEstateManagement ?> to manage the estate of the
      child(ren) to the extent
      the estate has been created by the community or joint property of the parent.</li>

  </ol>

  <!-- SUBSECTION: Joint Managing Conservator Respondent Rights) -->
  <!-- Variables -->
  <?php
// consent medical
        $jmcRespondentMedicalRights = jmcAnswers($master_entries[0][359]);

// consent psychiatric
        $jmcRespondentPsychRights = jmcAnswers($master_entries[0][360]);

// child support: Determined in previous section

// represent children for legal actions
        $jmcRespondentChildrensLegalRights = jmcAnswers($master_entries[0][361]);

// consent marriage military
        $jmcRespondentMilitaryMarriage = jmcAnswers($master_entries[0][362]);

// education decisions
        $jmcRespondentEducationRights = jmcAnswers($master_entries[0][363]);

// SPED: Determined in previous section

// right to services and earnings
        $jmcRespondentChildrensEarnings = jmcAnswers($master_entries[0][364]);

// right to act as agent for children
        $jmcRespondentChildrensAgent = jmcAnswers($master_entries[0][365]);

// apply for passports
        $jmcRespondentChildrensPassports = jmcAnswers($master_entries[0][366]);

// manage estate
        $jmcRespondentChildrensEstateManagement = jmcAnswers($master_entries[0][367]);

        ?>

  <!-- Output -->
  <div class="indent-first_line">IT IS ORDERED that <?php echo strtoupper($respondentNameFull) ?> as a parent joint
    managing conservator, shall have the rights and duties:
  </div>

  <ol class="li-indent-level_1">

    <!-- CONDITION: Respondent decides Primary Residence & Geographical limits exist -->
    <?php if ($jmcDecidingParent == 'My Spouse' && $jmcPrimaryResidenceGeographicalLimitExist == 'Yes') {?>
    <li>Respondent, <?php echo strtoupper($respondentNameFull) ?> has the exclusive right to
      designate the primary
      residence of the child(ren) in <?php echo strtoupper($jmcPrimaryResidenceGeographicalLimit) ?></li>
    <?php } // CLOSE: if ($jmcPrimaryParent == 'Me') ?>

    <!-- Medical Consent -->
    <li>the <?php echo $jmcRespondentMedicalRights ?> to consent to medical, dental, and
      surgical treatment involving
      invasive procedures;</li>

    <!-- Psychiatric or Psychological Treatment -->
    <li>the <?php echo $jmcRespondentPsychRights ?> to consent to psychiatric and
      psychological treatment of the
      child(ren);</li>

    <!-- CONDITION: Petitioner Receives Child Support -->
    <?php if ($jmcChildSupport == 'I will pay my spouse child support') {?>
    <li>The exclusive right to receive and give receipt for periodic payments for the support
      of the child(ren] and to
      hold or disburse these funds for the benefit of the child(ren);</li>
    <?php }?>

    <!-- Represent children in legal actions -->
    <li>the <?php echo $jmcRespondentChildrensLegalRights ?> to represent the child(ren) in
      legal action and to make
      other decisions of substantial legal significance concerning the child(ren);</li>

    <!-- Marriage and enlistment in armed forces -->
    <li>the <?php echo $jmcRespondentMilitaryMarriage ?> to consent to marriage and to
      enlistment in the armed forces of
      the United States;</li>

    <!-- Education / SPED If applicable -->
    <li>the <?php echo $jmcRespondentEducationRights ?> to make decisions concerning the
      child(ren)'s education;
      <?php if ($jmcSpecialEducationNeedExists == 'Yes') {?> provided, however,
      that <?php if ($jmcSpecialEducationParent == 'Me') {echo $petitionerNameFull?>
      <?php }?><?php if ($jmcSpecialEducationParent == 'My Spouse') {echo $respondentNameFull?> <?php }?> shall have
      the
      exclusive right to enforce the child's educational rights under applicable federal and state law;<?php }?>
    </li>

    <!-- Services and earnings of children -->
    <li>except as provided by Section 264.0111 of the Texas Family Code, the
      <?php echo $jmcRespondentChildrensEarnings ?> to the services and earnings of the child(ren);</li>

    <!-- Childrens Estate -->
    <li>except when a guardian of the child(ren)'s estate[s] or a guardian or attorney ad
      litem has been appointed
      for the child(ren), the <?php echo $jmcRespondentChildrensAgent ?> to act as an agent of the child(ren)
      in relation to the child(ren)'s estate[s] if the child(ren)'s action is required by a state, the United
      States, or a foreign government;</li>

    <!-- Passports -->
    <li>the <?php echo $jmcRespondentChildrensPassports ?> to apply for passports for the
      child(ren), to renew the
      child(ren)'s passports, and to maintain possession of the child(ren)'s passports; and</li>

    <!-- Manage childrens estate -->
    <li>the <?php echo $jmcRespondentChildrensEstateManagement ?> to manage the estate of the
      child(ren) to the extent
      the estate has been created by the community or joint property of the parent.</li>

  </ol>

  <div class="indent-first_line">The Court finds that, in accordance with section 153.001 of the Texas Family Code, it
    is
    the public policy of Texas to assure that children will have frequent and continuing contact with parents who have
    shown the ability to act in the best interest of the child, to provide a safe, stable, and nonviolent environment
    for the child, and to encourage parents to share in the rights and duties of raising their child after the parents
    have separated or dissolved their marriage.
  </div>

  <!-- No Geographical Restriction -->
  <!-- Variables: Obtained previously -->
  <?php if ($jmcPrimaryResidenceGeographicalLimitExist == 'No') {?>
  <div class="indent-first_line">The parties have agreed, and IT IS ORDERED, that the primary residence of the children
    shall not be limited or restricted to any specific county or geographic area.
  </div>
  <?php }?>


  <!-- Geographical Restriction Exist-->
  <!-- Variables: Obtained previously -->
  <?php if ($jmcPrimaryResidenceGeographicalLimitExist == 'Yes') {?>
  <div class="indent-first_line">IT IS ORDERED that the primary residence of the children shall be within
    <?php echo $jmcPrimaryResidenceGeographicalLimit ?> and the parties shall not remove the children from
    <?php echo $jmcPrimaryResidenceGeographicalLimit ?> for the purpose of changing the primary residence of the
    children until this geographic restriction is modified by further order of the court of continuing jurisdiction or
    by a written agreement that is signed by the parties and filed with that court.</div>
  <div class="indent-first_line">IT IS FURTHER ORDERED that <?php echo $jmcPrimaryParent ?> shall have
    the exclusive right to designate the children's primary residence within
    <?php echo $jmcPrimaryResidenceGeographicalLimit ?>.</div>
  <div class="indent-first_line">IT IS FURTHER ORDERED that this geographic restriction on the residence of the children
    shall be lifted if, at the time <?php echo $jmcPrimaryParent ?> wishes to remove the children from
    <?php echo $jmcPrimaryResidenceGeographicalLimit ?> for the purpose of changing the primary residence of the
    children, <?php echo $jmcNonPrimaryParent ?> does not reside in <?php echo $jmcPrimaryResidenceGeographicalLimit ?>.
  </div>

  <div class="indent-first_line">Notwithstanding any provision in this decree to the contrary, IT IS ORDERED that
    <?php echo $jmcSchoolParent ?> shall have the exclusive right to enroll the children in school. Each
    conservator, during that conservator's period of possession, is ORDERED to ensure the children's attendance in the
    schools in which <?php echo $jmcSchoolParent ?> has enrolled the children.
  </div>
  <div class="paragraph bs_text_bold bs_text_italic">Passports
  </div>
  <div class="indent-first_line">IT IS ORDERED that if a parent's consent is required for the issuance of a passport,
    that parent shall provide that consent in writing no later than ten days after receipt of the consent documents,
    unless the parent has good cause for withholding that consent.
  </div>
  <div class="indent-first_line">IT IS ORDERED that either parent shall have the right to maintain possession of any
    passports of the children, subject to the requirements for delivery of the passports and all other requirements set
    forth below.
  </div>
  <div class="indent-first_line">Either parent is ORDERED to deliver or cause to be delivered to the other parent the
    original, valid passports of the child(ren), within ten days of their receipt of the other parent's notice of intent
    to have the children travel outside the United States during a period of possession of the other parent.
  </div>
  <div class="indent-first_line">IT IS ORDERED that if a conservator intends to have the children travel outside the
    United States during the conservator's period of possession of the children, the conservator shall provide written
    notice to the other conservator. IT IS ORDERED that this written notice shall include all the following:
  </div>

  <ol class="li-indent-level_1">
    <li>any written consent form for travel outside the United States that is required by the
      country of destination, countries through which travel will occur, or the intended carriers;</li>
    <li>the date, time, and location of the children's departure from the United
      States;</li>
    <li>a reasonable description of means of transportation, including, if applicable, all
      names of carriers, flight numbers, and scheduled departure and arrival times;</li>
    <li>a reasonable description of each destination of the intended travel, including the
      name, address, and phone number of each interim destination and the final travel location;</li>
    <li>the dates the children are scheduled to arrive and depart at each such
      destination;</li>
    <li>the date, time, and location of the children's return to the United States;</span>
    </li>
    <li>a complete statement of each portion of the intended travel during which the
      conservator providing the written notice will not accompany the children; and</li>
    <li>the name, permanent and mailing addresses, and work and home telephone numbers of
      each person accompanying the children on the intended travel other than the conservator providing the written
      notice.</li>
  </ol>

  <div class="indent-first_line">The written notice may be in the form attached to this order as an exhibit and entitled
    Notice of Intent for Children to Travel Outside the United States.
  </div>
  <div class="indent-first_line">If the intended travel is a group trip, such as with a school or other organization,
    the
    conservator providing the written notice is ORDERED to provide with the written notice all information about the
    group trip and its sponsor instead of stating the name, permanent and mailing addresses, and work and home telephone
    numbers of each person accompanying the children.
  </div>
  <div class="indent-first_line">IT IS FURTHER ORDERED that this written notice shall be furnished to the other
    conservator no less than twenty-one days before the intended day of departure of the children from the United
    States.
  </div>
  <div class="indent-first_line"><?php echo $petitionerUpper . ' and ' . $respondentUpper ?> are each ORDERED to
    properly
    execute the written consent form to travel abroad attached hereto as an exhibit and any other form required for the
    travel by the United States Department of State, passport authorities, foreign nations, travel organizers, school
    officials, or public carriers; when applicable, to have the forms duly notarized; and, within ten days of that
    conservator's receipt of each consent form, to deliver the form to the conservator providing the written notice.
  </div>
  <div class="indent-first_line">IT IS ORDERED that any conservator who violates the terms and conditions of these
    provisions regarding the children's passports shall be liable for all costs incurred due to that person's
    noncompliance with these provisions. These costs shall include, but not be limited to, the expense of nonrefundable
    or noncreditable tickets, the costs of nonrefundable deposits for travel or lodging, attorney's fees, and all other
    costs incurred seeking enforcement of any of these provisions.
  </div>

  <?php }?>
  <?php } // CLOSE: if($parentingPlan == 1) ?>

  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- CONDITION: PARENTING PLAN == 2 (Sole Managing Conservators) -->

  <?php
if ($parentingPlan == 2) {?>

  <!-- Variables -->
  <?php

        // PARENTING PLANS: Already obtained

// Possession Schedule Selected
        $smcPossessionSchedule = $master_entries[0][4000]; // [1 = Standard Possession, 2 = Alternating Weeks, 3 = Split Weeks]

// $smcPrimaryParent && $smcNonPrimaryParent
        $smcSoleManagingConservator = $master_entries[0][40001];
        if ($smcSoleManagingConservator == 'Me') {
            $smcPrimaryParent = $petitionerNameFull;
            $smcNonPrimaryParent = $respondentNameFull;
        } else if ($smcSoleManagingConservator == 'My Spouse') {
            $smcPrimaryParent = $respondentNameFull;
            $smcNonPrimaryParent = $petitionerNameFull;
        }

// $smcPossessoryConservator
        $smcPossessoryConservator = $master_entries[0][40002]; // [Me, My Spouse]
        if ($smcPossessoryConservator == 'Me') {
            $smcPossessoryParent = $petitionerNameFull;
        } else if ($smcPossessoryConservator == 'My Spouse') {
            $smcPossessoryParent = $respondentNameFull;
        }

        ?>


  <div class="indent-first_line">IT IS ORDERED that <?php echo strtoupper($smcPrimaryParent) ?> is appointed Sole
    Managing Conservator and <?php echo strtoupper($smcPossessoryParent) ?> is appointed Possessory Conservator of the
    children.
  </div>

  <!-- -------------------------------------------------------------------------------------------- -->
  <!-- ## CONDITION: PARENTING PLAN == 2 (Sole Managing Conservators)
                  && Possession Schedule ==  Standard Possession Order -->

  <!-- Variables -->
  <?php

// $smcPrimaryParentGender && // $smcNonPrimaryParentGender
        $petitionerGender = $master_entries[0][97];
        $respondentGender = $master_entries[0][115];

        if ($smcPrimaryParent == $petitionerNameFull) {
            $smcPrimaryParentGender = $petitionerGender;
        } else {
            $smcPrimaryParentGender = $respondentGender;
        }

        // $smcPrimaryParentRole && // $smcNonPrimaryParentRole [Father, Mother]
        if ($smcPrimaryParentGender == 'Male') {
            $smcPrimaryParentRole = 'Father';
            $smcNonPrimaryParentRole = 'Mother';
        } else {
            $smcPrimaryParentRole = 'Mother';
            $smcNonPrimaryParentRole = 'Father';
        }

        // $smcFather && $smcMother
        if ($smcPrimaryParentGender == $petitionerGender && $smcPrimaryParentGender == 'Male') {
            $smcFather = $petitionerNameFull;
            $smcMother = $respondentNameFull;
        } else {
            $smcFather = $respondentNameFull;
            $smcMother = $petitionerNameFull;
        }

// $smcWeekendsBeginTime
        $smcWeekendsBeginTime = $master_entries[0][40002];

// $smcWeekendsEndTime
        $smcWeekendsEndTime = $master_entries[0][40003];

// $smcWeekendsExtendedHolidayBeginTime
        $smcWeekendsExtendedHolidayBeginTime = $master_entries[0][40004];

// $smcThursdayBeginTime
        $smcThursdayBeginTime = $master_entries[0][40005];

// $smcThursdayEndTime
        $smcThursdayEndTime = $master_entries[0][40005];

// $smcSpringHolidayEvenYearsBeginTime
        $smcSpringHolidayEvenYearsBeginTime = $master_entries[0][40006];

// $smcSpringHolidayOddYearsBeginTime
        $smcSpringHolidayOddYearsBeginTime = $master_entries[0][40007];

// $smc100WeekendExtendedHolidayBeginTime
        $smc100WeekendExtendedHolidayBeginTime = $master_entries[0][40008];

// $smcChristmasHolidayEvenYearsBeginTime
        $smcChristmasHolidayEvenYearsBeginTime = $master_entries[0][40009];

// $smcChristmasHolidayOddYearsBeginTime
        $smcChristmasHolidayOddYearsBeginTime = $master_entries[0][40010];

// $smcThanksgivingHolidayEvenYearsBeginTime
        $smcThanksgivingHolidayEvenYearsBeginTime = $master_entries[0][40011];

// $smcThanksgivingHolidayOddYearsBeginTime
        $smcThanksgivingHolidayOddYearsBeginTime = $master_entries[0][40012];

// $smcFathersDayEndTime
        $smcFathersDayEndTime = $master_entries[0][40012];

        ?>
  <!-- OUTPUT: Condition [$parentingPlan == 2 (Sole Managing Conservators)]) -->



  <!-- OUTPUT: Condition Possession Schedule == 1 (Standard Possession Schedule) -->
  <?php
if ($smcPossessionSchedule == 1) {?>
  <div class="bs_text_bold bs_text_italic">Possession and Access
  </div>

  <div class=" indent-first_line">1. <span class="bs_text_underline">Standard Possession Order</span>
  </div>

  <div class="indent-indent-first_line">IT IS ORDERED that each conservator shall comply with all terms and conditions
    of
    this Standard Possession Order. IT IS ORDERED that this Standard Possession Order is effective immediately and
    applies to all periods of possession occurring on and after the date the Court signs this Standard Possession Order.
    IT IS, THEREFORE, ORDERED:
  </div>

  <div class="indent-indent-indent-paragraph">(a) Definitions</div>
  <div class="indent-indent-indent-paragraph">
    <ol class="li-indent-level_1">
      <li>In this Standard Possession Order "school" means the elementary or secondary school
        in which the child is
        enrolled or, if the child is not enrolled in an elementary or secondary school, the public school district in
        which the child primarily resides.</li>
      <li>In this Standard Possession Order "child" includes each child, whether one or more,
        who is a subject of this
        suit while that child is under the age of eighteen years and not otherwise emancipated.</li>
    </ol>
  </div>

  <div class="indent-indent-indent-paragraph">(b) Mutual Agreement or Specified Terms for Possession </div>
  <div class="indent-indent-indent-paragraph">
    IT IS ORDERED that the conservators shall have possession of the child at times mutually
    agreed to in advance by the parties, and, in the absence of mutual
    agreement, it is ORDERED that the conservators shall have possession of the child under the specified terms set out
    in this Standard Possession Order.

  </div>

  <div class="indent-indent-indent-paragraph">(c) Conservators Who Reside 100 Miles or Less Apart </div>
  <div class="indent-indent-indent-paragraph">
    Except as otherwise expressly provided in this Standard Possession Order, when
    <?php echo strtoupper($smcNonPrimaryParent) ?> resides 100 miles or less from
    the primary residence of the child, <?php echo strtoupper($smcNonPrimaryParent) ?> shall have the right to
    possession of the child as follows:
  </div>
  <ol class="li-indent-level_1">
    <li> Weekends
    </li>
    <div class="indent-indent-paragraph"> Weekends that occur during the regular school term, beginning at
      <?php echo $smcWeekendsBeginTime ?>, on the first, third, and fifth Friday of each month and ending at
      <?php echo $smcWeekendsEndTime ?>
    </div>
    <div class="indent-first_line">On weekends that do not occur during the regular school term, beginning at 6:00 p.m.,
      on the first, third, and fifth Friday of each month and ending at 6:00 p.m. on the following Sunday.
    </div>
    <li>Weekend Possession Extended by a Holiday
    </li>
    <div class="indent-first_line">Except as otherwise expressly provided in this Standard Possession Order, if a
      weekend period of possession by <?php echo strtoupper($smcNonPrimaryParent) ?> begins on a student holiday or a
      teacher in-service day that falls on a Friday during the regular school term, as determined by the school in which
      the child is enrolled, or a federal, state, or local holiday that falls on a Friday during the summer months when
      school is not in session, that weekend period of possession shall begin at
      <?php echo strtoupper($smcWeekendsExtendedHolidayBeginTime) ?>
    </div>
    <div class="indent-first_line">Except as otherwise expressly provided in this Standard Possession Order, if a
      weekend period of possession by <?php echo strtoupper($smcNonPrimaryParent) ?> ends on or is immediately followed
      by a student holiday or a teacher in-service day that falls on a Monday during the regular school term, as
      determined by the school in which the child is enrolled, or a federal, state, or local holiday that falls on a
      Monday during the summer months when school is not in session, that weekend period of possession shall end at 6:00
      p.m. on that Monday.
    </div>
    <li>Thursdays - On Thursday of each week during the regular school term, beginning at
      <?php echo $smcThursdayBeginTime ?> and ending at <?php echo $smcThursdayEndTime ?>.
    </li>
    <li>Spring Vacation in Even-Numbered Years - In even-numbered years, beginning at
      <?php echo $smcSpringHolidayEvenYearsBeginTime ?> for the school's spring vacation and ending at 6:00 p.m.
      on
      the day before school resumes after that vacation.
    </li>
    <li>Extended Summer Possession by <?php echo strtoupper($smcNonPrimaryParent) ?>
      With Written Notice by April 1 - If <?php echo strtoupper($smcNonPrimaryParent) ?> gives
      <?php echo strtoupper($smcPrimaryParent) ?> written notice by April 1 of a year specifying an extended period or
      periods of summer possession for that year, <?php echo strtoupper($smcNonPrimaryParent) ?> shall have possession
      of the child for thirty days beginning no earlier than the day after the child's school is dismissed for the
      summer vacation and ending no later than seven days before school resumes at the end of the summer vacation in
      that year, to be exercised in no more than two separate periods of at least seven consecutive days each, as
      specified in the written notice.
      <?php //IF[NON-PRIMARY PARENT IS FATHER]
            if ($smcNonPrimaryParentGender == 'Male') {
                ?>
      <div class="indent-first_line">, provided that the period or periods of extended summer possession do not
        interfere
        with Father's Day possession
      </div>
      <?php }?>
      <div class="indent-first_line">These periods of possession shall begin and end at 6:00 p.m. on each applicable
        day.
      </div>
  </ol>
  <div class="indent-first_line">Without Written Notice by April 1 - If <?php echo strtoupper($smcNonPrimaryParent) ?>
    does not give <?php echo strtoupper($smcPrimaryParent) ?>
    written notice by April 1 of a year specifying an extended period or periods of summer possession for that year,
    <?php echo strtoupper($smcNonPrimaryParent) ?> shall have possession of the child for thirty consecutive days in
    that year beginning at 6:00 p.m. on July 1 and ending at 6:00 p.m. on July 31.
  </div>
  <div class="indent-first_line">Notwithstanding the Thursday periods of possession during the regular school term and
    the weekend periods of possession ORDERED for <?php echo strtoupper($smcNonPrimaryParent) ?>, it is expressly
    ORDERED that <?php echo strtoupper($smcPrimaryParent) ?> shall have a superior right of possession of the child as
    follows:
  </div>

  <ol class="li-indent-level_1">
    <li>Spring Vacation in Odd-Numbered Years - In odd-numbered years, beginning at
      <?php echo $smcSpringHolidayOddYearsBeginTime ?> for the school's spring vacation and ending at 6:00 p.m. on the
      day before school resumes after that vacation.
    </li>
    <li>Summer Weekend Possession by <?php echo strtoupper($smcPrimaryParent) ?> - If
      <?php echo strtoupper($smcPrimaryParent) ?> gives <?php echo strtoupper($smcNonPrimaryParent) ?> written notice by
      April 15 of a year, <?php echo strtoupper($smcPrimaryParent) ?> shall have possession of the child on any one
      weekend beginning at 6:00 p.m. on Friday and ending at 6:00 p.m. on the following Sunday during any one period of
      the extended summer possession by <?php echo strtoupper($smcNonPrimaryParent) ?> in that year, provided that
      <?php echo strtoupper($smcPrimaryParent) ?>
      picks up the child from <?php echo strtoupper($smcNonPrimaryParent) ?> and returns the child to that same place
      <?php //[CONDITION: NON-PRIMARY PARENT IS FATHER]
            if ($smcNonPrimaryParentRole == 'Father') {?>
      and that the weekend so designated does not interfere with Father's Day possession.
      <?php }?>
      Not later than the fifteenth day before the Friday that begins the designated weekend,
      <?php echo strtoupper($smcPrimaryParent) ?> must give <?php echo strtoupper($smcNonPrimaryParent) ?> written
      notice of the location at which <?php echo strtoupper($smcPrimaryParent) ?> is to pick up and return the child.
    </li>
    <li>Extended Summer Possession by <?php echo strtoupper($smcPrimaryParent) ?> - If
      <?php echo strtoupper($smcPrimaryParent) ?> gives <?php echo strtoupper($smcNonPrimaryParent) ?> written notice by
      April 15 of a year or gives <?php echo strtoupper($smcNonPrimaryParent) ?> fourteen days' written notice on or
      after April 16 of a year,
      <?php echo strtoupper($smcPrimaryParent) ?> may designate one weekend beginning no earlier than the day after the
      child's school is dismissed for the summer vacation and ending no later than seven days before school resumes at
      the end of the summer vacation, during which an otherwise
      scheduled weekend period of possession by <?php echo strtoupper($smcNonPrimaryParent) ?> shall not take place in
      that year, provided that the weekend so designated does not interfere with
      <?php echo strtoupper($smcNonPrimaryParent) ?>'s period or periods of extended summer possession.
      <?php //CONDITION IF NON PRIAMARY PARENT IS FATHER
            if ($smcNonPrimaryParentRole == 'Father') {?>
      or with Father's Day possession.
      <?php }?>
    </li>
  </ol>

  <div class="indent-indent-indent-paragraph">(d) Conservators Who Reside More Than 100 Miles Apart </div>
  <div class="indent-indent-indent-paragraph">
    Except as otherwise expressly provided in this Standard Possession Order, when
    <?php echo strtoupper($smcNonPrimaryParent) ?> resides more than
    100 miles from the residence of the child, <?php echo strtoupper($smcNonPrimaryParent) ?> shall have the right to
    possession of the child as follows:
  </div>
  <ol class="li-indent-level_1">
    <li>Weekends - Unless <?php echo strtoupper($smcNonPrimaryParent) ?> elects the
      alternative
      period of weekend possession described in the next paragraph, <?php echo strtoupper($smcNonPrimaryParent) ?>
      shall have the right to possession of the child on weekends beginning at 6:00 p.m., on the first, third, and fifth
      Friday of each month and ending
      at 6:00 p.m. on the following Sunday.
    </li>
    <div class="indent-first_line">Alternate Weekend Possession - In lieu of the weekend possession described in the
      foregoing paragraph, <?php echo strtoupper($smcNonPrimaryParent) ?>
      shall have the right to possession of the child not more than one weekend per month of
      <?php echo strtoupper($smcNonPrimaryParent) ?>'s choice beginning at 6:00 p.m. on the day school
      recesses for the weekend and ending at 6:00 p.m. on the day before school resumes after the weekend.
      <?php echo strtoupper($smcNonPrimaryParent) ?> may elect an option for this
      alternative period of weekend possession by giving written notice to <?php echo strtoupper($smcPrimaryParent) ?>
      within ninety days after the parties begin to reside more than 100
      miles apart. If <?php echo strtoupper($smcNonPrimaryParent) ?> makes this election,
      <?php echo strtoupper($smcNonPrimaryParent) ?> shall give <?php echo strtoupper($smcPrimaryParent) ?> fourteen
      days' written or telephonic notice
      preceding a designated weekend. The weekends chosen shall not conflict with the provisions regarding Christmas,
      Thanksgiving, the child's
      birthday or Mother's Day or Father's Day possession below.
    </div>
    <li>Weekend Possession Extended by a Holiday -
    </li>
    <div class="indent-first_line">Except as otherwise expressly provided in this Standard Possession Order, if a
      weekend
      period of possession by
      <?php echo strtoupper($smcNonPrimaryParent) ?> begins on a student holiday or a teacher in-service day that falls
      on a Friday during the regular school term, as determined
      by the school in which the child is enrolled, or a federal, state, or local holiday during the summer months when
      school is not in session,
      that weekend period of possession shall begin at <?php echo strtoupper($smcWeekendsExtendedHolidayBeginTime) ?>
    </div>
    <div class="indent-first_line">Except as otherwise expressly provided in this Standard Possession Order, if a
      weekend
      period of possession by
      <?php echo strtoupper($smcNonPrimaryParent) ?> ends on or is immediately followed by a student holiday or a
      teacher in-service day that falls on a Monday during the regular school
      term, as determined by the school in which the child is enrolled, or a federal, state, or local holiday that falls
      on a Monday during the summer months
      when school is not in session, that weekend period of possession shall end at 6:00 p.m. on that Monday.
    </div>
    <li>Spring Vacation in All Years - Every year, beginning at 6:00 p.m. on the day the child
      is dismissed from school for the school's spring vacation
      and ending at 6:00 p.m. on the day before school resumes after that vacation.
    </li>
    <li>4.Extended Summer Possession by <?php echo strtoupper($smcNonPrimaryParent) ?> -
    </li>
    <div class="indent-first_line">With Written Notice by April 1 - If <?php echo strtoupper($smcNonPrimaryParent) ?>
      gives <?php echo strtoupper($smcPrimaryParent) ?> written notice by April 1 of a year
      specifying an extended period or periods of summer possession for that year,
      <?php echo strtoupper($smcNonPrimaryParent) ?> shall have possession of the child for forty-two
      days beginning no earlier than the day after the child's school is dismissed for the summer vacation and ending no
      later than seven days before school
      resumes at the end of the summer vacation in that year, to be exercised in no more than two separate periods of at
      least seven consecutive days each,
      as specified in the written notice
      <?php //[CONDITION: NON-PRIMARY PARENT IS MOTHER]
            if ($smcNonPrimaryParentRole == 'Mother') {?>
      , provided that the period or periods of extended summer possession do not
      interfere with Father's Day possession.
      <?php }?>
      These periods of possession shall begin and end at 6:00 p.m. on each applicable day.
    </div>
    <div class="indent-first_line">Without Written Notice by April 1 - If <?php echo strtoupper($smcNonPrimaryParent) ?>
      does not give <?php echo strtoupper($smcPrimaryParent) ?> written notice by April 1 of a
      year specifying an extended period or periods of summer possession for that year,
      <?php echo strtoupper($smcNonPrimaryParent) ?> shall have possession of the child for forty-two
      consecutive days beginning at 6:00 p.m. on June 15 and ending at 6:00 p.m. on July 27 of that year.
    </div>
    <div class="indent-first_line">Notwithstanding the weekend periods of possession ORDERED for
      <?php echo strtoupper($smcNonPrimaryParent) ?>, it is expressly ORDERED
      that <?php echo strtoupper($smcPrimaryParent) ?> shall have a superior right of possession of the child as
      follows:
    </div>
  </ol>

  <ol class="li-indent-level_1">
    <li>Summer Weekend Possession by <?php echo strtoupper($smcPrimaryParent) ?> - If
      <?php echo strtoupper($smcPrimaryParent) ?> gives <?php echo strtoupper($smcNonPrimaryParent) ?> written notice by
      April 15 of a year, [PRIMARY PARENT] shall have
      possession of the child on any one weekend beginning at 6:00 p.m. on Friday and ending at 6:00 p.m. on the
      following Sunday during any one period of possession
      by <?php echo strtoupper($smcNonPrimaryParent) ?> during <?php echo strtoupper($smcNonPrimaryParent) ?>'s extended
      summer possession in that year, provided that if a period of possession by
      <?php echo strtoupper($smcNonPrimaryParent) ?>
      in that year exceeds thirty days, <?php echo strtoupper($smcPrimaryParent) ?> may have possession of the child
      under the terms of this provision on any two nonconsecutive weekends during
      that period and provided that <?php echo strtoupper($smcPrimaryParent) ?> picks up the child from
      <?php echo strtoupper($smcNonPrimaryParent) ?> and returns the child to that
      same place
      <?php //[CONDITION: NON-PRIMARY PARENT IS FATHER]
            if ($smcNonPrimaryParentRole == 'Father') {?>
      and that the weekend so designated does not interfere with Father's Day possession.

      <?php }?>
    </li>
    <li>Extended Summer Possession by <?php echo strtoupper($smcPrimaryParent) ?> - If
      <?php echo strtoupper($smcPrimaryParent) ?> gives <?php echo strtoupper($smcNonPrimaryParent) ?> written notice by
      April 15 of a year, <?php echo strtoupper($smcPrimaryParent) ?>
      may designate twenty-one days beginning no earlier than the day after the child's school is dismissed for the
      summer vacation and ending no later than seven
      days before school resumes at the end of the summer vacation in that year, to be exercised in no more than two
      separate periods of at least seven
      consecutive days each, during which <?php echo strtoupper($smcNonPrimaryParent) ?> shall not have possession of
      the child, provided that the period or periods so designated
      do not interfere with <?php echo strtoupper($smcNonPrimaryParent) ?>'s period or periods of extended summer
      possession
      <?php //[CONDITION: NON-PRIMARY PARENT IS FATHER]
            if ($smcNonPrimaryParentRole == 'Father') {?>
      or with Father's Day possession.
      <?php }?>
      These periods of possession shall begin and end at 6:00 p.m. on each applicable day.
    </li>
  </ol>

  <div class="indent-first_line">(e)Holidays Unaffected by Distance </div>
  <div class="indent-indent-indent-paragraph">
    Notwithstanding the weekend and Thursday periods of possession of <?php echo strtoupper($smcNonPrimaryParent) ?>,
    <?php echo strtoupper($smcNonPrimaryParent) ?> and <?php echo strtoupper($smcPrimaryParent) ?> shall have the right
    to
    possession of the child as follows:
  </div>

  <ol class="li-indent-level_1">

    <li>Christmas Holidays in Even-Numbered Years - In even-numbered years,
      <?php echo strtoupper($smcNonPrimaryParent) ?> shall have the right to possession
      of the child beginning at <?php echo strtoupper($smcChristmasHolidayEvenYearsBeginTime) ?> for the Christmas
      school vacation and ending at noon on December 28, and <?php echo strtoupper($smcPrimaryParent) ?> shall have
      the right to possession of the child beginning at noon on December 28 and ending at 6:00 p.m. on the day before
      school resumes after that Christmas school
      vacation.
    </li>
    <li>Christmas Holidays in Odd-Numbered Years - In odd-numbered years,
      <?php echo strtoupper($smcPrimaryParent) ?> shall have the right to possession
      of the child beginning at <?php echo strtoupper($smcChristmasHolidayOddYearsBeginTime) ?> for the Christmas school
      vacation and ending at noon on December 28, and <?php echo strtoupper($smcNonPrimaryParent) ?> shall
      have the right to possession of the child beginning at noon on December 28 and ending at 6:00 p.m. on the day
      before school resumes after that Christmas
      school vacation.
    </li>
    <li>Thanksgiving in Odd-Numbered Years - In odd-numbered years,
      <?php echo strtoupper($smcNonPrimaryParent) ?> shall have the right to possession of
      the child beginning at <?php echo strtoupper($smcThanksgivingHolidayOddYearsBeginTime) ?> for the Thanksgiving
      holiday and ending at 6:00 p.m. on the Sunday following Thanksgiving.
    </li>
    <li>Thanksgiving in Even-Numbered Years - In even-numbered years,
      <?php echo strtoupper($smcPrimaryParent) ?> shall have the right to possession of the
      child beginning at <?php echo strtoupper($smcThanksgivingHolidayEvenYearsBeginTime) ?> for the Thanksgiving
      holiday and ending at 6:00 p.m. on the Sunday following Thanksgiving.
    </li>
    <li>Child's Birthday - If a conservator is not otherwise entitled under this Standard
      Possession Order to present possession
      of a child on the child's birthday, that conservator shall have possession of the child, and if elected, the
      child's minor siblings, beginning at 6:00 p.m.
      and ending at 8:00 p.m. on that day, provided that that conservator picks up the child(ren) from the other
      conservator's residence and returns the child(ren)
      to that same place.
    </li>
    <li>Father's Day - <?php echo strtoupper($smcFather) ?> shall have the right to possession
      of the child each year, beginning at 6:00 p.m. on the Friday
      preceding Father's Day and ending at <?php echo strtoupper($smcFathersDayEndTime) ?>, provided that if
      <?php echo strtoupper($smcFather) ?> is not otherwise entitled under this Standard Possession Order
      to present possession of the child, he shall pick up the child from <?php echo strtoupper($smcMother) ?>'s
      residence and return the child to that same place.
    </li>
    <li>Mother's Day - <?php echo strtoupper($smcMother) ?> shall have the right to possession
      of the child each year, beginning at the time school is
      dismissed on the Friday preceding Mother's Day and ending at the time school resumes following Mother's Day
      weekend, provided that if <?php echo strtoupper($smcMother) ?>
      is not otherwise entitled under this Standard Possession Order to present possession of the child, she shall pick
      up the child from <?php echo strtoupper($smcFather) ?>'s
      residence and return the child to that same place.
    </li>

  </ol>

  <div class="indent-first_line">(g)General Terms and Conditions</div>
  <div class="indent-indent-indent-paragraph">
    Except as otherwise expressly provided in this Standard Possession Order, the terms and conditions of possession
    of the child that apply regardless of the distance between the residence of a [parent/conservator] and the child are
    as follows:
  </div>

  <ol class="li-indent-level_1">
    <li>Surrender of Child by <?php echo strtoupper($smcPrimaryParent) ?> -
      <?php echo strtoupper($smcPrimaryParent) ?> is ORDERED to surrender the child to
      <?php echo strtoupper($smcNonPrimaryParent) ?> at
      the beginning of each period of <?php echo strtoupper($smcNonPrimaryParent) ?>'s possession at the residence of
      <?php echo strtoupper($smcPrimaryParent) ?>.
    </li>
    <li>If a period of possession by <?php echo strtoupper($smcNonPrimaryParent) ?> begins at
      the time the child's school is regularly dismissed,
      <?php echo strtoupper($smcPrimaryParent) ?> is ORDERED to surrender the child to
      <?php echo strtoupper($smcNonPrimaryParent) ?> at the beginning of each such period of possession at the
      school in which the child is enrolled. If the child is not in school,
      <?php echo strtoupper($smcNonPrimaryParent) ?> shall pick up the child at the
      residence of <?php echo strtoupper($smcPrimaryParent) ?> at 6:00 p.m., and
      <?php echo strtoupper($smcPrimaryParent) ?> is ORDERED to surrender the child to
      <?php echo strtoupper($smcNonPrimaryParent) ?> at the
      residence of <?php echo strtoupper($smcPrimaryParent) ?> at 6:00 p.m. under these circumstances.
    </li>
    <li>Return of Child by <?php echo strtoupper($smcNonPrimaryParent) ?> -
      <?php echo strtoupper($smcNonPrimaryParent) ?> is ORDERED to return the child to the residence
      of <?php echo strtoupper($smcPrimaryParent) ?> at the end of each period of possession. However, it is ORDERED
      that, if <?php echo strtoupper($smcPrimaryParent) ?> and <?php echo strtoupper($smcNonPrimaryParent) ?>
      live in the same county at the time of rendition of this order, <?php echo strtoupper($smcNonPrimaryParent) ?>'s
      county of residence remains the same after rendition
      of this order, and <?php echo strtoupper($smcPrimaryParent) ?>'s county of residence changes, effective on the
      date of the change of residence
      by <?php echo strtoupper($smcPrimaryParent) ?>, <?php echo strtoupper($smcNonPrimaryParent) ?> shall surrender the
      child to <?php echo strtoupper($smcPrimaryParent) ?> at the residence of
      <?php echo strtoupper($smcNonPrimaryParent) ?>
      at the end of each period of possession.
    </li>
    <div class="indent-first_line">If a period of possession by <?php echo strtoupper($smcNonPrimaryParent) ?> ends at
      the time the child's school resumes, <?php echo strtoupper($smcNonPrimaryParent) ?>
      is ORDERED to surrender the child to <?php echo strtoupper($smcPrimaryParent) ?> at the end of each such period of
      possession at the school in which the child is enrolled or,
      if the child is not in school, at the residence of <?php echo strtoupper($smcNonPrimaryParent) ?> at 6:00 p.m.
    </div>
    <li>Surrender of Child by <?php echo strtoupper($smcNonPrimaryParent) ?> -
      <?php echo strtoupper($smcNonPrimaryParent) ?> Is ORDERED to surrender the child to
      <?php echo strtoupper($smcPrimaryParent) ?>,
      if the child is in <?php echo strtoupper($smcNonPrimaryParent) ?>'s possession or subject to
      <?php echo strtoupper($smcNonPrimaryParent) ?>'s control, at the beginning of each period
      of <?php echo strtoupper($smcPrimaryParent) ?>'s exclusive periods of possession, at the place designated in this
      Standard Possession Order.
    </li>
    <li>Return of Child by <?php echo strtoupper($smcPrimaryParent) ?> -
      <?php echo strtoupper($smcPrimaryParent) ?> is ORDERED to return the child to
      <?php echo strtoupper($smcNonPrimaryParent) ?>,
      if <?php echo strtoupper($smcNonPrimaryParent) ?> is entitled to possession of the child, at the end of each of
      <?php echo strtoupper($smcPrimaryParent) ?>'s exclusive periods of possession,
      at the place designated in this Standard Possession Order.
    </li>
    <li>Personal Effects - Each conservator is ORDERED to return with the child the personal
      effects that the child brought at the beginning of the period of possession.
    </li>
    <li>Designation of Competent Adult - Each conservator may designate any competent adult to
      pick up and return the child, as applicable.
      IT IS ORDERED that a conservator or a designated competent adult be present when the child is picked up or
      returned.
    </li>
    <li>Inability to Exercise Possession - Each conservator is ORDERED to give notice to the
      person in possession of the child
      on each occasion that the conservator will be unable to exercise that conservator's right of possession for any
      specified period.
    </li>
    <li>Written Notice - Written notice, including notice provided by electronic mail or
      facsimile,
      shall be deemed to have been timely made if received or, if applicable, postmarked before or at the time that
      notice is due.
      Each conservator is ORDERED to notify the other conservator of any change in the conservator's electronic mail
      address or facsimile
      number within twenty-four hours after the change.
    </li>
    <li>Notice to School and <?php echo strtoupper($smcPrimaryParent) ?> - If
      <?php echo strtoupper($smcNonPrimaryParent) ?>'s time of possession of the child ends at the time school
      resumes and for any reason the child is not or will not be returned to school,
      <?php echo strtoupper($smcNonPrimaryParent) ?> shall immediately notify the school and
      <?php echo strtoupper($smcPrimaryParent) ?>
      that the child will not be or has not been returned to school.
    </li>

  </ol>

  <?php } // if ($smcPossessionSchedule == 1) {?>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- SECTION: SOLE MANAGING CONSERVATOR - 50/50 POSSESSION ALTERNATING WEEKS POSSESSION ORDER (Page 28 - 34)-->
  <?php if ($smcPossessionSchedule == 2) {?>

  <!-- Variables -->
  <?php

// $smcEffectiveFriday
            $smcEffectiveFriday = $master_entries[0][5001];

// $smcMother: Already obtained
            // $smcMothersBeginningFriday
            $smcMothersBeginningFriday = $master_entries[0][5002];

// $smcFather: Already obtained
            // $smcFathersBeginningFriday
            $smcFathersBeginningFriday = date('m/d/Y', strtotime($smcMothersBeginningFriday . ' + 7 days'));
            ?>
  <!-- Output -->



  <div>1. <span class="bs_text_underline">Possession Schedule - Alternating Weeks </span>
  </div>
  <div class="indent-first_line">The Court finds that the following provisions of this Possession Order are in the best
    interest of the child, and the Court finds
    that the parties have agreed to deviate from the Standard Possession Order contained in the Texas Family Code at
    sections 153.311 through 153.317.
  </div>
  <div class="indent-first_line">IT IS ORDERED that each conservator shall comply with all terms and conditions of this
    Possession Order.
    IT IS ORDERED that this Possession Order is effective <?php echo strtoupper(bsDateFormat($smcEffectiveFriday)) ?>
    and applies to
    all periods of possession occurring on and after the
    date the Court signs this Possession Order. IT IS, THEREFORE, ORDERED:
  </div>
  <div class="indent-first_line bs_text_bold">(a) <span class="bs_text_underline">Definitions </span>
  </div>

  <ol class="li-indent-level_1">
    <li>In this Possession Order “school” means the primary or secondary school in which
      the child is enrolled or,
      if the child is not enrolled in a primary or secondary school, the public school district in which the child
      primarily resides.
    </li>
    <li>In this Possession Order “child” includes each child, whether one or more, who
      is a subject of this suit while
      that child is under the age of eighteen years and not otherwise emancipated.
    </li>
  </ol>

  <div class="indent-first_line bs_text_bold">(b) <span class="bs_text_underline">Mutual Agreement or Specified Terms
      for Possession </span> </div>
  <div class="indent-first_line">IT IS ORDERED that the conservators shall have possession of the child at times
    mutually
    agreed to in advance by the
    parties, and, in the absence of mutual agreement, it is ORDERED that the conservators shall have possession of the
    child under the specified terms
    set out in this Possession Order.
  </div>

  <div class="indent-first_line bs_text_bold">(c) <span class="bs_text_underline">Alternating Weeks - </span> </div>
  <div class="indent-first_line">IT IS ORDERED that the conservators shall have possession of the child at times
    mutually agreed to in advance by the parties, and, in the absence of mutual agreement, it is ORDERED that the
    conservators shall have possession of the child under the specified terms set out in this Possession Order.
  </div>

  <ol class="li-indent-level_1">
    <li><?php echo strtoupper($smcMother) ?> shall have possession of the child every other
      week beginning when school is dismissed on Friday, (or 3:00PM if school is not in session) and ending when school
      is dismissed on the immediately following Friday (or 3:00PM if school is not in session).
      <?php echo strtoupper($smcMother) ?>'s alternating week possession periods shall begin
      <?php echo strtoupper(bsDateFormat($smcMothersBeginningFriday)) ?>
    </li>
    <li><?php echo strtoupper($smcFather) ?> shall have possession of the child every other
      week beginning when school is dismissed on Friday, (or 3:00PM if school is not in session) and ending when school
      is dismissed on the immediately following Friday (or 3:00PM if school is not in session).
      <?php echo strtoupper($smcFather) ?>'s alternating week possession periods shall begin
      <?php echo strtoupper(bsDateFormat($smcFathersBeginningFriday)) ?>.
    </li>
  </ol>

  <div class="indent-first_line">IT IS ORDERED that in calculating each party’s alternating weekly periods of
    possession, the periods shall continue to count for the purposes of alternating them even if such alternating weekly
    periods of possession are superseded by Spring Break, or Holiday periods of possession.
  </div>

  <div class="indent-first_line bs_text_bold">(d) <span class="bs_text_underline">Spring Break and Extended Summer
      Possession </span> </div>
  <div class="indent-first_line">Notwithstanding the weekend and weekday (non-holiday) periods of possession ORDERED, it
    is explicitly ORDERED that <?php echo strtoupper($smcMother) ?> and <?php echo strtoupper($smcFather) ?> shall have
    a superior right of possession of the child as follows:
  </div>
  <ol class="li-indent-level_1">
    <li>Spring Break in Even-Numbered Years - In even-numbered years, <?php echo strtoupper($smcMother) ?> shall have
      possession of the child beginning at the time the child's school is regularly dismissed on the day the child
      is dismissed from school for the school's spring vacation and ending at 6:00 p.m. on the day before school
      resumes and after spring break vacation. </li>
    <li>Spring Break in Odd-Numbered Years - In odd-numbered years, <?php echo strtoupper($smcFather) ?> shall have
      possession of the child beginning at the time the child's school is regularly dismissed on the day the child
      is dismissed from school for the school's spring vacation and ending at 6:00 p.m. on the day before school
      resumes and after spring break vacation.</li>
    <li>Summer Possession: IT IS ORDERED that each parent shall each have fourteen (14) days of possession in the
      summer to be exercised in two (2) separate periods of seven (7) consecutive days each, beginning no earlier than
      the day after the children's school are dismissed from the summer vacation and ending no later than seven days
      before school resumes at the end of the summer vacation in that year. <?php echo strtoupper($smcMother) ?> shall
      not choose summer possession that interferes with Father's Day weekend. Each period of possession shall begin
      and end at 6:00 p.m. on each applicable day, as specified in the written notice.</li>
  </ol>

  <div class="indent-first_line bs_text_bold">(e) <span class="bs_text_underline">Holiday Possession</span></div>
  <div class="indent-first_line">Notwithstanding the weekend, Spring Break and Extended Summer periods of possession of
    the parties, <?php echo strtoupper($smcMother) ?> and <?php echo strtoupper($smcFather) ?> shall have the superior
    right to possession of the child as follows:
  </div>
  <ol class="li-indent-level_1">
    <li>Christmas Holidays in Even-Numbered Years'In even-numbered years, <?php echo strtoupper($smcFather) ?> shall
      have the right
      to possession of the child beginning at the time the child's school is regularly dismissed on the day the
      child is dismissed from school for the Christmas school vacation and ending at noon on December 28, and ' .
      $altWeekMother. ' shall have the right to possession of the child beginning at noon on December 28 and ending at
      the time school resumes after that Christmas school vacation.</li>
    <li>Christmas Holidays in Odd-numbered Years'In odd-numbered years, <?php echo strtoupper($smcMother) ?> shall
      have the right
      to possession of the child beginning at the time the child's school is regularly dismissed on the day the
      child is dismissed from school for the Christmas school vacation and ending at noon on December 28, and ' .
      $altWeekFather. ' shall have the right to possession of the child beginning at noon on December 28 and ending at
      the time the child's school resumes after that Christmas school vacation.</li>
    <li>Thanksgiving in Odd-numbered Years'In odd-numbered years, <?php echo strtoupper($smcFather) ?> shall have
      the right to
      possession of the child beginning at the time the child's school is regularly dismissed on the day the child
      is dismissed from school for the Thanksgiving holiday and ending at the time the child's school resumes after
      that Thanksgiving holiday.</li>
    <li>Thanksgiving in Even-Numbered Years'In even-numbered years, <?php echo strtoupper($smcMother) ?> shall have
      the right to
      possession of the child beginning at the time the child's school is regularly dismissed on the day the child
      is dismissed from school for the Thanksgiving holiday and ending at the time the child's school resumes after
      that Thanksgiving holiday.</li>
    <li>Child's Birthday'If a conservator is not otherwise entitled under this Possession Order to present
      possession of the child on the child's birthday that conservator shall have possession of the child, and the
      child's minor siblings, beginning at 6:00 P.M. and ending at 8:00 P.M. on that day, provided that the
      conservator picks up the child from the other conservator's residence and returns the child to that same
      place.</li>
    <li>Father's Day Weekend - <?php echo strtoupper($smcFather) ?> shall have the right to possession of the child
      each year,
      beginning at 3:00 p.m. on the Friday preceding Father's Day and ending at 8:00 a.m. on the Monday following
      Father's Day, provided that if <?php echo strtoupper($smcFather) ?> is not otherwise entitled under this
      Possession Order to
      present possession of the child, he shall pick up the child from <?php echo strtoupper($smcMother) ?>'s
      residence and return
      the child to that same place.</li>
    <li>Mother's Day Weekend - <?php echo strtoupper($smcMother) ?> shall have the right to possession of the child
      each year,
      beginning at the time the child's school is regularly dismissed on the day the child is dismissed from school
      for Mother's Day weekend and ending at the time the child's school resumes after Mother's Day,
      provided that if <?php echo strtoupper($smcMother) ?> is not otherwise entitled under this Possession Order to
      present possession
      of the child, she shall pick up the child from <?php echo strtoupper($smcFather) ?>'s residence and return the
      child to that same place.
    </li>
  </ol>

  <div class="indent-first_line bs_text_bold">(f) <span class="bs_text_underline">General Terms and Conditions </span>
  </div>
  <div class="indent-first_line">Except as otherwise explicitly provided in this Possession Order, the terms and
    conditions of possession of the child are as follows:
  </div>
  <ol class="li-indent-level_1">
    <li>Surrender of Child by <?php echo strtoupper($smcMother) ?> - <?php echo strtoupper($smcMother) ?> is ORDERED to
      surrender the child to <?php echo strtoupper($smcFather) ?> at the beginning of each period of
      <?php echo strtoupper($smcFather) ?>'s possession at the school in which the child is enrolled. If school is
      not in session, <?php echo strtoupper($smcMother) ?> is ORDERED to surrender the child to
      <?php echo strtoupper($smcFather) ?> at the residence of <?php echo strtoupper($smcMother) ?>.</li>
    <li>Surrender of Child by <?php echo strtoupper($smcFather) ?> - <?php echo strtoupper($smcFather) ?> is ORDERED
      to surrender the child to <?php echo strtoupper($smcMother) ?> at the beginning of each period of
      <?php echo strtoupper($smcMother) ?>'s possession at the school in which the child is enrolled. If school is
      not in session, <?php echo strtoupper($smcFather) ?> is ORDERED to surrender the child to
      <?php echo strtoupper($smcMother) ?> at the residence of <?php echo strtoupper($smcFather) ?>.</li>
    <li>Surrender of Child by <?php echo strtoupper($smcFather) ?> - <?php echo strtoupper($smcFather) ?> is ORDERED to
      surrender the child to <?php echo strtoupper($smcMother) ?>, if the child is in
      <?php echo strtoupper($smcFather) ?>'s
      possession or subject to <?php echo strtoupper($smcFather) ?>'s control, at the beginning of each period of
      <?php echo strtoupper($smcMother) ?>'s exclusive periods
      of possession, at the place designated in this Possession Order.</li>
    <li>Surrender of Child by <?php echo strtoupper($smcMother) ?> - <?php echo strtoupper($smcMother) ?> is ORDERED to
      surrender the child to <?php echo strtoupper($smcFather) ?>, if the child is in
      <?php echo strtoupper($smcMother) ?>'s
      possession or subject to <?php echo strtoupper($smcMother) ?>'s control, at the beginning of each period of
      <?php echo strtoupper($smcFather) ?>'s exclusive periods of possession, at the place designated in this
      Possession Order.</li>
    <li>Personal Effects - Each conservator is ORDERED to return with the child the personal effects that the child
      brought at the beginning of the period of possession.</li>
    <li>Designation of Competent Adult - Each conservator may designate any competent adult to pick up and return the
      child, as applicable. IT IS ORDERED that a conservator or a designated competent adult be present when the child
      is picked up or returned.</li>
    <li>Inability to Exercise Possession - Each conservator is ORDERED to give as much advance notice as possible to
      the person in possession of the child on each occasion that the conservator will be unable to exercise that
      conservator's right of possession for any specified period.</li>
    <li>Written Notice - Written notice shall be deemed to have been timely made if received or postmarked before or
      at the time that notice is due.</li>
    <li>Telephone Access - Each parent shall be allowed reasonable telephone access with the child when the child is in
      the possession of the other parent. Reasonable is considered one telephone call per day for a duration not to
      exceed approximately ten minutes.</li>
    <li>Child Care Costs - Each parent shall be responsible for any child-care costs incurred while the child is in that
      parent's possession including but not limited to after school care, summer care and camps.</li>
    <li>Notice to School and other Conservator - If a conservator's time of possession of the child ends at the time
      school resumes and for any reason the child is not or will not be returned to school, the conservator shall
      immediately notify the school and the other conservator that the child will not be or has not been returned to
      school.</li>
  </ol>
  <div class="indent-first_line">This concludes the Possession Order.
  </div>
  <?php } // CLOSE: if ($smcPossessionSchedule == 2) { ?>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- SECTION: SOLE MANAGING CONSERVATOR - 50/50 POSSESSION SPLIT WEEKS POSSESSION ORDER (Page 35 - 43)-->
  <?php if ($smcPossessionSchedule == 3) {?>

  <!-- Variables -->
  <?php

            // $smcEffectiveFriday
            $smcEffectiveDate = $master_entries[0][1];

            // $smcMother: Already obtained
            // $smcMothersBeginningFriday
            $smcMothersBeginningFriday = $master_entries[0][5002];

            // $smcFather: Already obtained
            // $smcFathersBeginningFriday
            $smcFathersBeginningFriday = date('m/d/Y', strtotime($smcMothersBeginningFriday . ' + 7 days'));
            ?>
  <!-- Output -->
  <div class="paragraph">1. <span class="bs_text_underline">Possession Schedule - Equalized </span>
  </div>
  <div class="indent-first_line">The Court finds that the following provisions of this Possession Order are in the best
    interest of the child, and the Court finds that good cause exists to deviate from the Standard Possession Order
    contained in the Texas Family Code at sections 153.311 through 153.317, as the Standard Possession Order is
    unworkable or inappropriate under the circumstances.
  </div>
  <div class="indent-first_line">IT IS ORDERED that each conservator shall comply with all terms and conditions of this
    Possession Order. IT IS ORDERED that this Possession Order is effective
    <?php echo strtoupper(bsDateFormat($smcEffectiveDate)) ?> and applies to all periods of possession occurring on and
    after the date the Court signs this Possession Order. IT IS, THEREFORE, ORDERED:
  </div>
  <div class="indent-first_line">(a) Definitions
  </div>
  <ol class="li-indent-level_1">
    <li>In this Possession Order "school" means the primary or secondary school in which the child is enrolled or, if
      the child is not enrolled in a primary or secondary school, the public school district in which the child
      primarily resides.</li>
    <li>In this Possession Order &#39;child&#39; includes each child, whether one or more, who is a subject of this suit
      while that child is under the age of eighteen years and not otherwise emancipated.</li>
  </ol>
  <div class="indent-first_line">(b) Mutual Agreement or Specified Terms for Possession</div>
  <div class="indent-first_line">IT IS ORDERED that the conservators shall have possession of the child at times
    mutually agreed to in advance by the parties, and, in the absence of mutual agreement, it is ORDERED that the
    conservators shall have possession of the child under the specified terms set out in this Possession Order.</div>

  <div class="indent-first_line">(c) Weekend and Weekday Possession</div>
  <div class="indent-first_line"><?php echo strtoupper($smcMother) ?> shall have the right to possession of the child as
    follows:
  </div>
  <ol class="li-indent-level_1">
    <li>Monday and Tuesday - On Monday and Tuesday every week beginning at 8:00 a.m. on Monday morning and ending at the
      time the child's school resumes on Wednesday morning or 8:00 a.m. when school is not in session.</li>
    <li>Weekends - Every other Friday, Saturday and Sunday, beginning at the time school resumes on Friday morning and
      ending at the time the child's school resumes on Monday morning. Beginning Friday,
      <?php echo strtoupper(bsDateFormat($smcMothersBeginningFriday)) ?>
      and every other weekend thereafter. If school is not in session beginning at 8:00 a.m. on Friday and ending at
      8:00 a.m. the following Monday.</li>
  </ol>

  <div class="indent-first_line"><?php echo strtoupper($smcFather) ?> shall have the right to possession of the child as
    follows:
  </div>
  <ol class="li-indent-level_1">
    <li>Wednesday and Thursday - On Wednesday and Thursday of each week beginning at the time school resumes on
      Wednesday morning or at 8:00 a.m. when school is not in session and ending at the time school resumes on Friday
      morning or 8:00 a.m. when school is not in session.
      </l>
    <li>Weekends - Every other Friday, Saturday and Sunday, beginning at the time school resumes on Friday morning and
      ending at the time the child's school resumes on Monday morning. Beginning Friday, ' . $splitWeekSecondFriday . '
      and every other weekend thereafter. If school is not in session beginning at 8:00 a.m. on Friday and ending at
      8:00 a.m. the following Monday.
    </li>
  </ol>
  <div class="indent-first_line">IT IS ORDERED that in calculating the weekend periods of possession, the periods shall
    continue to count for the purposes of alternating them even if they are superseded by Spring Break, Extended Summer,
    or Holiday periods of possession. This possession schedule shall continue during the summer months save and except
    for the provisions below regarding extended summer possession by each parent:
  </div>
  <div class="indent-first_line">(d) Spring Break and Extended Summer Possession for
    <?php echo strtoupper($smcMother) ?>
  </div>
  <div class="indent-first_line">Notwithstanding the weekend and weekday (non-holiday) periods of possession ORDERED for
    <?php echo strtoupper($smcFather) ?>, it is explicitly ORDERED that <?php echo strtoupper($smcMother) ?> shall have
    a superior right of possession of the child as follows:
  </div>
  <ol class="li-indent-level_1">
    <li>Spring Break in Even-Numbered Years - In even-numbered years, beginning at the time the child's school is
      regularly dismissed on the day the child is dismissed from school for the school's spring vacation and ending at
      the
      time school resumes after that vacation.
    </li>
    <li>Extended Summer Possession by <?php echo strtoupper($smcMother) ?> -
      </lil>
  </ol>
  <div class="indent-first_line">First Choice in Odd-Numbered Years With Written Notice by April 1st. If
    <?php echo strtoupper($smcMother) ?> gives <?php echo strtoupper($smcFather) ?> written notice by April 1st of an
    odd-numbered year specifying an extended period of summer possession for that year,
    <?php echo strtoupper($smcMother) ?> shall have possession of the child for fourteen consecutive days specified in
    the written notice beginning no earlier than the day after the child's school is dismissed for the summer vacation
    and ending no later than seven days before school resumes at the end of the summer vacation in that year. These
    periods of possession shall begin and end at 6:00 p.m.
  </div>
  <div class="indent-first_line">Without Written Notice by April 1 in Odd-Numbered Years - If
    <?php echo strtoupper($smcMother) ?> does not give <?php echo strtoupper($smcFather) ?> written notice by April 1
    of an odd-numbered year specifying an extended period of summer possession for that year,
    <?php echo strtoupper($smcMother) ?> shall have possession of the child beginning Sunday of the first full week of
    July for fourteen days beginning at 6:00 p.m. and ending at 6:00 p.m. on Sunday.
  </div>
  <div class="indent-first_line">Second Choice in Even-Numbered Years With Written Notice by April 15th- If
    <?php echo strtoupper($smcMother) ?> gives <?php echo strtoupper($smcFather) ?> written notice by April 15 of an
    even-numbered year specifying an extended period of summer possession for that year,
    <?php echo strtoupper($smcMother) ?> shall have possession of the child for fourteen days as specified in the
    written notice beginning no earlier than the day after the child's school is dismissed for the summer vacation and
    ending no later than seven days before school resumes at the end of the summer vacation in that year, provided
    that the period or periods of extended summer possession do not interfere with [FATHER]'s period of Extended
    Summer Possession in that year or Father's Day weekend. These periods of possession shall begin and end at 6:00
    p.m.
  </div>
  <div class="indent-first_line">Without Written Notice by April 15 in Even-Numbered Years - If
    <?php echo strtoupper($smcMother) ?> does not give <?php echo strtoupper($smcFather) ?> written notice by April 15
    of an even-numbered year specifying an extended period or periods of summer possession for that year,
    <?php echo strtoupper($smcMother) ?> shall have possession of the child for fourteen days beginning at 6:00 p.m.
    on the Sunday of the third full week of July and ending 14 days later at 6:00 P.M.
  </div>
  <div class="indent-first_line">(e) Spring Break and Extended Summer Possession for
    <?php echo strtoupper($smcFather) ?>
  </div>
  <div class="indent-first_line">Notwithstanding the weekend and weekday (non-holiday) periods of possession ORDERED for
    <?php echo strtoupper($smcMother) ?>, it is explicitly ORDERED that <?php echo strtoupper($smcFather) ?> shall have
    a superior right of possession of the child as follows:
  </div>
  <ol class="li-indent-level_1">
    <li>Spring Break in Odd-Numbered Years - In odd-numbered years, beginning at the time the child's school is
      regularly dismissed on the day the child is dismissed from school for the school's spring vacation and ending at
      the time school resumes after that vacation.
    </li>
    <li>Extended Summer Possession by <?php echo strtoupper($smcFather) ?> -
    </li>
  </ol>
  <div class="indent-first_line">First Choice in Even-Numbered Years With Written Notice by April 1st. If
    <?php echo strtoupper($smcFather) ?> gives <?php echo strtoupper($smcMother) ?> written notice by April 1st of an
    even-numbered year specifying an extended period of summer possession for that year,
    <?php echo strtoupper($smcFather) ?> shall have possession of the child for fourteen consecutive days specified in
    the written notice beginning no earlier than the day after the child's school is dismissed for the summer vacation
    and ending no later than seven days before school resumes at the end of the summer vacation in that year. These
    periods of possession shall begin and end at 6:00 p.m.
  </div>
  <div class="indent-first_line">Without Written Notice by April 1 in Even-Numbered Years - If
    <?php echo strtoupper($smcFather) ?> does not give <?php echo strtoupper($smcMother) ?> written notice by April 1 of
    an Even-Numbered year specifying an extended period of summer possession for that year,
    <?php echo strtoupper($smcFather) ?> shall have possession of the child beginning the Sunday of the first full week
    of July for fourteen days beginning at 6:00 p.m. and ending at 6:00 p.m. on Sunday.
  </div>
  <div class="indent-first_line">Second Choice in Odd-Numbered Years With Written Notice by April 15th. - If
    <?php echo strtoupper($smcFather) ?> gives <?php echo strtoupper($smcMother) ?> written notice by April 15 of an
    odd-numbered year specifying an extended period of summer possession for that year,
    <?php echo strtoupper($smcFather) ?> shall have possession of the child for fourteen days as specified in the
    written notice beginning no earlier than the day after the child's school is dismissed for the summer vacation and
    ending no later than seven days before school resumes at the end of the summer vacation in that year, provided that
    the period or periods of extended summer possession do not interfere with <?php echo strtoupper($smcMother) ?>'s
    period of Extended Summer Possession in that year. These periods of possession shall begin and end at 6:00 p.m.
  </div>
  <div class="indent-first_line">Without Written Notice by April 15 in Odd-Numbered Years - If
    <?php echo strtoupper($smcFather) ?> does not give <?php echo strtoupper($smcMother) ?> written notice by April 15
    of an even-numbered year specifying an extended period or periods of summer possession for that year,
    <?php echo strtoupper($smcFather) ?> shall have possession of the child for fourteen days beginning at 6:00 p.m. on
    the Sunday of the third full week of July and ending 14 days later at 6:00 P.M. on Sunday.
  </div>
  <div class="indent-first_line">(f) Holiday Possession
  </div>
  <div class="indent-first_line">Notwithstanding the weekend, weekday, Spring Break and Extended Summer periods of
    possession of the parties, <?php echo strtoupper($smcMother) ?> and <?php echo strtoupper($smcFather) ?> shall have
    the right to possession of the child as follows:
  </div>
  <ol class="li-indent-level_1">
    <li>Christmas Holidays in Even-Numbered Years - In even-numbered years, <?php echo strtoupper($smcMother) ?> shall
      have the right to possession of the child beginning at the time the child's school is regularly dismissed on the
      day the child is dismissed from school for the Christmas school vacation and ending at noon on December 28, and
      <?php echo strtoupper($smcFather) ?> shall have the right to possession of the child beginning at noon on December
      28 and ending at the time school resumes after that Christmas school vacation.
    </li>
    <li>Christmas Holidays in Odd-numbered Years - In odd-numbered years, <?php echo strtoupper($smcFather) ?> shall
      have the right to possession of the child beginning at the time the child's school is regularly dismissed on the
      day the child is dismissed from school for the Christmas school vacation and ending at noon on December 28, and
      <?php echo strtoupper($smcMother) ?> shall have the right to possession of the child beginning at noon on December
      28 and ending at the time the child's school resumes after that Christmas school vacation.
    </li>
    <li>Thanksgiving in Odd-numbered Years - In odd-numbered years, <?php echo strtoupper($smcMother) ?> shall have the
      right to possession of the child beginning at the time the child's school is regularly dismissed on the day the
      child is dismissed from school for the Thanksgiving holiday and ending at the time the child's school resumes
      after that Thanksgiving holiday.
    </li>
    <li>Thanksgiving in Even-Numbered Years - In even-numbered years, <?php echo strtoupper($smcFather) ?> shall have
      the right to possession of the child beginning at the time the child's school is regularly dismissed on the day
      the child is dismissed from school for the Thanksgiving holiday and ending at the time the child's school resumes
      after that Thanksgiving holiday.
    </li>
    <li>Child's Birthday&#39;If a conservator is not otherwise entitled under this Possession Order to present
      possession of the child on the child's birthday, that conservator shall have possession of the child beginning at
      6:00 p.m. and ending at 8:00 p.m. on that day, provided that conservator picks up the child from the other
      conservator's residence and returns the child to that same place.
    </li>
    <li>Father's Day&#39;<?php echo strtoupper($smcFather) ?> shall have the right to possession of the child each year,
      beginning at 8:00 a.m. on the Friday preceding Father's Day and ending at 8:00 p.m. on Father's Day, provided that
      if <?php echo strtoupper($smcFather) ?> is not otherwise entitled under this Possession Order to present
      possession of the child, he shall pick up the child from the other conservator's residence and return the child to
      that same place.
    </li>
    <li>Mother's Day&#39;<?php echo strtoupper($smcMother) ?> shall have the right to possession of the child each year,
      beginning at 8:00 a.m. on the Friday preceding Mother's Day and ending at 8:00 p.m. on Mother's Day, provided that
      if <?php echo strtoupper($smcMother) ?> is not otherwise entitled under this Possession Order to present
      possession of the child, she shall pick up the child from the other conservator's residence and return the child
      to that same place.
    </li>
  </ol>

  <div class="indent-first_line">(g) General Conditions
  </div>

  <ol class="li-indent-level_1">
    <li>Surrender of Child by <?php echo strtoupper($smcMother) ?> - If a period of possession by
      <?php echo strtoupper($smcFather) ?> begins at the time the child's school resumes or is dismissed,
      <?php echo strtoupper($smcMother) ?> is ORDERED to surrender the child to <?php echo strtoupper($smcFather) ?> at
      the beginning of each such period of possession at the school in which the child is enrolled.
    </li>
    <li>If the child is not in school <?php echo strtoupper($smcFather) ?> shall pick up the child at the residence of
      <?php echo strtoupper($smcMother) ?> at 8:00 a.m., and <?php echo strtoupper($smcMother) ?> is ORDERED to
      surrender the child to <?php echo strtoupper($smcFather) ?> at the residence of
      <?php echo strtoupper($smcMother) ?> at 8:00 a.m. under these circumstances.
    </li>
    <li>Surrender of Child by <?php echo strtoupper($smcFather) ?> - <?php echo strtoupper($smcFather) ?> is ORDERED to
      surrender the child to <?php echo strtoupper($smcMother) ?> at the beginning of each period of
      <?php echo strtoupper($smcMother) ?>'s possession at the residence of <?php echo strtoupper($smcFather) ?>.
    </li>
    <li>If a period of possession by <?php echo strtoupper($smcMother) ?> begins at the time the child's school resumes
      or is regularly dismissed, <?php echo strtoupper($smcFather) ?> is ORDERED to surrender the child to
      <?php echo strtoupper($smcMother) ?> at the beginning of each such period of possession at the school in which the
      child is enrolled.
    </li>
    <li>If the child is not in school, <?php echo strtoupper($smcMother) ?> shall pick up the child at the residence of
      <?php echo strtoupper($smcFather) ?> at 8:00 a.m., and <?php echo strtoupper($smcFather) ?> is ORDERED to
      surrender the child to <?php echo strtoupper($smcMother) ?> at the residence of
      <?php echo strtoupper($smcMother) ?> at 8:00 a.m. under these circumstances.
    </li>
    <li>Personal Effects&#39;Each Conservator is ORDERED to ensure that the child has an adequate supply of clothes and
      school uniforms at their own residence. Each Conservator is ORDERED to return with the child the personal effects
      that the child brought at the beginning of the period of possession that belong at the other parent's residence.
    </li>
    <li>Designation of Competent Adult&#39;Each conservator may designate any competent adult to pick up and return the
      child, as applicable. IT IS ORDERED that a conservator or a designated competent adult be present when the child
      is picked up or returned.
    </li>
    <li>Inability to Exercise Possession&#39;Each conservator is ORDERED to give as much advance notice as possible to
      the person in possession of the child on each occasion that the conservator will be unable to exercise that
      conservator's right of possession for any specified period.
    </li>
    <li>Written Notice&#39;Written notice shall be deemed to have been timely made if received or postmarked before or
      at the time that notice is due.
    </li>
    <li>Telephone Access- Each parent shall be allowed reasonable telephone access with the child when the child is in
      the possession of the other parent. Reasonable is considered one telephone call per day for a duration not to
      exceed approximately ten minutes.
    </li>
    <li>Child Care Costs- Each parent shall be responsible for any child care costs incurred while the child is in that
      parent's possession including but not limited to after school care, summer care and camps.
    </li>
    <li>Notice to School and other Conservator - If a conservator's time of possession of the child ends at the time
      school resumes and for any reason the child is not or will not be returned to school, the conservator shall
      immediately notify the school and the other conservator that the child will not be or has not been returned to
      school.
    </li>
  </ol>

  <?php } // CLOSE: if ($smcPossessionSchedule == 3) { ?>

  <?php } // CLOSE: if ($parentingPlan == 2) ?>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- # SECTION: Possession General Paragraphs (Page 43 - 44)-->
  <!-- ## SUB SECTION: Duration (Page 43 )-->
  <div class="indent-first_line">2. <span class="bs_text_underline">Duration</span>
  </div>
  <div class="indent-first_line">The periods of possession ordered above apply to each child the subject of this suit
    while
    that child is under the age of eighteen years and not otherwise emancipated.
  </div>

  <!-- ## SUB SECTION: Noninterference with Possession (Page 44 )-->
  <div class="indent-first_line">3. <span class="bs_text_underline">Noninterference with Possession</span>
  </div>
  <div class="indent-first_line">Except as expressly provided herein, IT IS ORDERED that neither conservator shall take
    possession of the child during the other conservator&#39;s period of possession unless there is a prior
    written agreement signed by both conservators or in case of an emergency.
  </div>

  <!-- ## SUB SECTION: No Family Violence (Page 44 )-->
  <div class="indent-first_line">4. <span class="bs_text_underline">No Family Violence</span>
  </div>
  <div class="indent-first_line">It has been represented to the Court that there has been no pattern of child neglect or
    family violence by any party to this case within two years preceding the filing of this case or
    during the pendency of this case.
  </div>

  <!-- ## SUB SECTION: Termination of Orders (Page 44 )-->
  <div class="indent-first_line">5. <span class="bs_text_underline">Termination of Orders</span>
  </div>
  <div class="indent-first_line">The provisions of this order relating to conservatorship, possession, or access
    terminate on the remarriage of [PETITIONER] and [RESPONDENT] unless a nonparent or agency has
    been appointed conservator of the child under chapter 153 of the Texas Family Code.
  </div>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- SECTION: CHILD SUPPORT (Page 43 - 65)-->

  <!-- Variables -->
  <?php
$childSupportDue = $master_entries[0][349];

    if ($childSupportDue != 1) {

        // $childSupportAmountChildOne
        $childSupportAmountChildOne = $master_entries[0][40015];

        // $childSupportAmountChildOther
        $childSupportAmountChildOther = $master_entries[0][40016];

        // $childSupportDateFirstPayment
        $childSupportDateFirstPayment = $master_entries[0][40017];

        switch ($childSupportDue) {
            case 2: // 2 =I will pay my spouse child support (Petitioner Details)
                $obligorName = $petitionerNameFull;
                $obligorEmailAddress = $petitionerEmail;
                $obligorPhoneNumber = $petitionerPhoneCell;

                $obligeeEmailAddress = $respondentEmail;
                $obligeePhoneNumber = $respondentPhoneCell;
                break;
            case 3: // 3 = My spouse will pay me child support (Respondent Details)
                $obligorName = $respondentNameFull;
                $obligorEmailAddress = $respondentEmail;
                $obligorPhoneNumber = $respondentPhoneCell;

                $obligeeEmailAddress = $petitionerEmail;
                $obligeePhoneNumber = $petitionerPhoneCell;
                break;
        }

        ?>




  <div class="bs_text_bold bs_text_italic">Child Support</div>

  <div class="indent-first_line">IT IS ORDERED that <?php echo strtoupper($obligorName) ?> is obligated to pay and shall
    pay to <?php echo strtoupper($obligeeName) ?> child support of $<?php echo $childSupportAmountChildOne ?> per month,
    with the first payment being due and payable on
    <?php echo strtoupper(bsDateFormat($childSupportDateFirstPayment)) ?> and a like payment being due and payable on
    the first day of each month thereafter until the first month following the date of the earliest occurrence of one of
    the events specified below:</div>
  <ol class="li-indent-level_1">
    <li>any child reaches the age of eighteen years or graduates from high school, whichever occurs later, subject to
      the provisions for support beyond the age of eighteen years set out below;</li>
    <li>any child marries;</li>
    <li>any child dies;</li>
    <li>any child enlists in the armed forces of the United States and begins active service as defined by section 101
      of title 10 of the United States Code; or</li>
    <li>any child's disabilities are otherwise removed for general purposes.</li>
  </ol>

  <?php if ($count_children_entries > 1) {?>
  <div class="indent-first_line">Thereafter, <?php echo strtoupper($obligorName) ?> is ORDERED to pay to
    <?php echo strtoupper($obligeeName) ?> child support of $<?php echo $childSupportAmountChildOther ?> per
    month, due and payable on the first day of the first month immediately following the date of the earliest occurrence
    of one of the events specified above for that child and a like sum of $<?php echo $childSupportAmountChildOther ?>
    due and payable on the first day of each month thereafter until the next occurrence of one of the events specified
    above for the other child for whom <?php echo strtoupper($obligorName) ?> remained obligated to pay support under
    this order.</div>
  <div class="indent-first_line">If the child is eighteen years of age and has not graduated from high school and
    <?php echo strtoupper($obligorName) ?>'s obligation to support the child has not already terminated, IT IS ORDERED
    that <?php echo strtoupper($obligorName) ?>'s obligation to pay child support to
    <?php echo strtoupper($obligeeName) ?> shall not terminate but shall continue for as long as the child is enrolled -
  </div>
  <ol class="li-indent-level_1">
    <li>under chapter 25 of the Texas Education Code in an accredited secondary school in a program leading toward a
      high school diploma or under section 130.008 of the Education Code in courses for joint high school and junior
      college credit and is complying with the minimum attendance requirements of subchapter C of chapter 25 of the
      Education Code or</li>
    <li>on a full-time basis in a private secondary school in a program leading toward a high school diploma and is
      complying with the minimum attendance requirements imposed by that school.</li>
  </ol>
  <?php } // if ($count_children_entries > 1) ?>

  <?php if ($count_children_entries > 2) {?>
  <div class="indent-first_line">Thereafter, <?php echo strtoupper($obligorName) ?> is ORDERED to pay to
    <?php echo strtoupper($obligeeName) ?> child support of $<?php echo $childSupportAmountChildOther ?> per
    month, due and payable on the first day of the first month immediately following the date of the earliest occurrence
    of one of the events specified above for that child and a like sum of <?php echo $childSupportAmountChildOther ?>
    due and payable on the first day of each month thereafter until the next occurrence of one of the events specified
    above for the other child for whom <?php echo strtoupper($obligorName) ?> remained obligated to pay support under
    this order.
  </div>
  <div class="indent-first_line">If the child is eighteen years of age and has not graduated from high school and
    <?php echo strtoupper($obligorName) ?>'s obligation to support the child has not already terminated, IT IS ORDERED
    that <?php echo strtoupper($obligorName) ?>'s obligation to pay child support to
    <?php echo strtoupper($obligeeName) ?> shall not terminate but shall continue for as long as the child is enrolled -
  </div>
  <ol class="li-indent-level_1" start="3">
    <li>under chapter 25 of the Texas Education Code in an accredited secondary school in a program leading toward a
      high school diploma or under section 130.008 of the Education Code in courses for joint high school and junior
      college credit and is complying with the minimum attendance requirements of subchapter C of chapter 25 of the
      Education Code or
    </li>
    <li>on a full-time basis in a private secondary school in a program leading toward a high school diploma and is
      complying with the minimum attendance requirements imposed by that school.
    </li>
  </ol>
  <?php } // if ($count_children_entries > 2) ?>


  <div class="indent-first_line bs_text_underline">Withholding from Earnings</div>

  <div class="indent-first_line">IT IS ORDERED that any employer of [OBLIGOR] shall be ordered to withhold the child
    support payments ordered in this decree from the disposable earnings of [OBLIGOR] for the support of [CHILD 1]
    [CHILD 2] and [CHILD 3]. Or for child 4 child 5</div>

  <div class="indent-first_line">IT IS FURTHER ORDERED that all amounts withheld from the disposable earnings of
    [OBLIGOR] by the employer and paid in accordance with the order to that employer shall constitute a credit against
    the child support obligation. Payment of the full amount of child support ordered paid by this decree through the
    means of withholding from earnings shall discharge the child support obligation. If the amount withheld from
    earnings and credited against the child support obligation is less than 100 percent of the amount ordered to be paid
    by this decree, the balance due remains an obligation of [OBLIGOR], and it is hereby ORDERED that [OBLIGOR] pay the
    balance due directly as specified below.
  </div>

  <div class="indent-first_line">On this date the Court signed an Income Withholding for Support.
  </div>

  <div class="indent-first_line bs_text_underline">Payment</div>

  <div class="indent-first_line">IT IS ORDERED that all payments shall be made through the state disbursement unit at
    Texas Child Support Disbursement Unit, P.O. Box 659791, San Antonio, Texas 78265-9791, and thereafter promptly
    remitted to [OBLIGEE] for the support of the child(ren). IT IS ORDERED that all payments shall be made payable to
    the Office of the Attorney General and include the ten-digit Office of the Attorney General case number (if
    available), the cause number of this suit, [OBLIGOR]'s name as the name of the noncustodial parent (NCP), and
    [OBLIGEE]'s name as the name of the custodial parent (CP). Payment options are found on the Office of the Attorney
    General's website at https://www.texasattorneygeneral.gov/cs/payment-options-and-types.
  </div>

  <div class="indent-first_line">IT IS ORDERED that each party shall pay, when due, all fees charged to that party by
    the state disbursement unit and any other agency statutorily authorized to charge a fee.
  </div>

  <div class="indent-first_line bs_text_underline">Change of Employment</div>

  <div class="indent-first_line">IT IS FURTHER ORDERED that [OBLIGOR] shall notify this Court and [OBLIGEE] by U.S.
    certified mail, return receipt requested, of any change of address and of any termination of employment. This notice
    shall be given no later than seven days after the change of address or the termination of employment. This notice or
    a subsequent notice shall also provide the current address of [OBLIGOR] and the name and address of his current
    employer, whenever that information becomes available.</div>

  <div class="indent-first_line bs_text_underline">Clerk's Duties</div>

  <div class="indent-first_line">IT IS ORDERED that, on the request of a prosecuting attorney, the title IV-D agency,
    the friend of the Court, a domestic relations office, [OBLIGEE], [OBLIGOR], or an attorney representing [OBLIGEE] or
    [OBLIGOR], the clerk of this Court shall cause a certified copy of the Income Withholding for Support to be
    delivered to any employer.</div>

  <div class="indent-first_line bs_text_underline bs_text_bold">Medical and Dental Support</div>

  <div class="indent-first_line">1. IT IS ORDERED that [OBLIGEE] and [OBLIGOR] shall each provide medical and dental
    support for each child as set out in this order as additional child support for as long as the Court may order
    [OBLIGEE] and [OBLIGOR] to provide support for the child under sections 154.001 and 154.002 of the Texas Family
    Code. Beginning on the day [OBLIGEE] and OBLIGOR's actual or potential obligation to support a child under sections
    154.001 and 154.002 of the Family Code terminates, IT IS ORDERED that [OBLIGEE] and [OBLIGOR] are discharged from
    the obligations set forth in this medical support order and dental support order with respect to that child, except
    for any failure by a parent to fully comply with those obligations before that date.
  </div>


  <div class="indent-first_line">2. Definitions - </div>
  <div class="indent-first_line">"Health Insurance" means insurance coverage that provides basic health-care services,
    including usual physician services, office visits, hospitalization, and laboratory, X-ray, and emergency services,
    that may be provided through a health maintenance organization or other private or public organization, other than
    medical assistance under chapter 32 of the Texas Human Resources Code.
  </div>
  <div class="indent-first_line">"Reasonable cost" means the total cost of health insurance coverage for all children
    for which [OBLIGOR] is responsible under a medical support order that does not exceed 9 percent of [OBLIGOR]'s
    annual resources, as described by section 154.062(b) of the Texas Family Code.</div>
  <div class="indent-first_line">"Dental insurance" means insurance coverage that provides preventive dental care and
    other dental services, including usual dentist services, office visits, examinations, X-rays, and emergency
    services, that may be provided through a single service health maintenance organization or other private or public
    organization.</div>
  <div class="indent-first_line">"Reasonable cost" of dental insurance means the total cost of dental insurance coverage
    for all children for which [OBLIGOR] is responsible under a medical support order that does not exceed 1.5 percent
    of [OBLIGOR]'s annual resources, as described by section 154.062(b) of the Texas Family Code.
  </div>
  <div class="indent-first_line">"Health-care expenses" include, without limitation, medical, surgical, prescription
    drug, mental health-care services, dental, eye care, ophthalmological, and orthodontic charges but do not include
    expenses for travel to and from the provider or for nonprescription medication.
  </div>
  <div class="indent-first_line">"Health-care expenses that are not reimbursed by insurance" ("unreimbursed expenses")
    include related copayments and deductibles.</div>
  <div class="indent-first_line">"Furnish" means - </div>
  <ol class="li-indent-level_1 ol-alpha_lowercase">
    <li>to hand deliver the document by a person eighteen years of age or older either to the recipient or to a person
      who is eighteen years of age or older and permanently resides with the recipient; </li>
    <li>to deliver the document to the recipient by first-class mail or by certified mail, return receipt requested, to
      the recipient's last known mailing or residence address; </li>
    <li>to deliver the document to the recipient at the recipient's last known mailing or residence address using any
      person or entity whose principal business is that of a courier or deliverer of papers or documents either within
      or outside the United States;</li>
    <li>to deliver the document to the recipient at the recipient's electronic mail address as follows: <br><br>
      OBLIGEE: [[PETITIONER] [RESPONDENT] EMAIL ADDRESS]<br><br>
      OBLIGOR: ][PETITIONER] [RESPONDENT] EMAIL ADDRESS]<br><br>
      and in the event of any change in either recipient's electronic mail address, that recipient is ORDERED to notify
      the other recipient of such change in writing within twenty-four hours after the change; or </li>
    <li>to deliver the document to the recipient at the recipient's mobile telephone by text message as follows:
      <br><br>
      OBLIGEE: [[PETITIONER] [RESPONDENT] PHONE NUMBER]<br><br>
      OBLIGOR: [[PETITIONER] [RESPONDENT] PHONE NUMBER]<br><br>
      and in the event of any change in either recipient's mobile telephone number, that recipient is ORDERED to notify
      the other recipient of such change in writing within twenty-four hours after the change.
    </li>
  </ol>
  <div class="indent-first_line">3. Findings on Availability of Health Insurance - Having considered the cost,
    accessibility, and quality of health insurance coverage available to the parties, the Court finds:</div>
  <div class="indent-first_line">Health insurance is available or is in effect for the children through [OBLIGOR]'s
    employment or membership in a union, trade association, or other organization at a reasonable cost.</div>
  <div class="indent-first_line">IT IS FURTHER FOUND that the following orders regarding health-care coverage are in the
    best interest of the children.</div>


  <div class="indent-first_line">4. Provision of Health-Care Coverage - </div>
  <div class="indent-first_line">As additional child support, [OBLIGOR] is ORDERED to maintain health insurance for each
    child as long as child support is payable for that child.</div>
  <div class="indent-first_line">[OBLIGOR] is ORDERED – </div>

  <ol class="li-indent-level_1 ol-alpha_lowercase">
    <li>to furnish to each conservator of the children the following information no later than the thirtieth day after
      the date the notice of the rendition of this order is received:
      <ol class="li-indent-level_1 ol-roman_numerals">
        <li>[OBLIGOR]'s Social Security number;</li>
        <li>the name and address of [OBLIGOR]'s employer;</li>
        <li>whether [OBLIGOR]'s employer is self-insured or has health insurance available;</li>
        <li>proof that health insurance has been provided for each child;</li>
        <li>if [OBLIGOR]'s employer has health insurance available:
          <ol class="li-indent-level_1 ol-alpha_lowercase">
            <li>the name of the health insurance carrier;</li>
            <li>the number of the policy;</li>
            <li>a copy of the policy;</li>
            <li>a schedule of benefits;</li>
            <li>a health insurance membership card;</li>
            <li>claim forms, and</li>
            <li>any other information necessary to submit a claim; and</li>
          </ol>
        </li>
        <li>if [OBLIGOR]'s employer is self-insured:
          <ol class="li-indent-level_1 ol-alpha_lowercase">
            <li>a copy of the schedule of benefits;</li>
            <li>a membership card;</li>
            <li>claim forms; and</li>
            <li>any other information necessary to submit a claim;</li>
          </ol>
        </li>
      </ol>
    </li>
    <li>to furnish to each conservator of the children a copy of any renewals or changes to the health insurance
      coverage of a child and additional information regarding health insurance coverage of the children not later than
      the fifteenth day after [OBLIGOR] receives or is provided with the renewal, change, or additional information;
    </li>
    <li>to notify each conservator of the children of any termination or lapse of the health insurance coverage of a
      child no later than the fifteenth day after the date of the termination or lapse;</li>
    <li>after termination or lapse of health insurance coverage, to notify each conservator of the children of the
      availability to [OBLIGOR] of additional health insurance for the children not later than the fifteenth day after
      the date the insurance becomes available;</li>
    <li>after termination or lapse of health insurance coverage, to enroll the children in a health insurance plan that
      is available to [OBLIGOR] at reasonable cost at the next available enrollment period.</li>
  </ol>

  <div class="indent-first_line">Pursuant to section 1504.051 of the Texas Insurance Code, IT IS ORDERED that if
    [OBLIGOR] is eligible for dependent health coverage but fails to apply to obtain coverage for the children, the
    insurer shall enroll the children on application of [OBLIGEE] or others as authorized by law.</div>
  <div class="indent-first_line">5. Findings on Availability of Dental Insurance – Having considered the cost,
    accessibility, and quality of dental insurance coverage available to the parties, the Court finds:</div>
  <div class="indent-first_line">Dental insurance is available or is in effect for the children through [OBLIGOR]'s
    employment or membership in a union, trade association, or other organization at a reasonable cost.
  </div>
  <div class="indent-first_line">IT IS FURTHER FOUND that the following orders regarding dental coverage are in the best
    interest of the children.</div>
  <div class="indent-first_line">6. Provision of Dental Coverage -
  </div>
  <div class="indent-first_line">As additional child support, [OBLIGOR] is ORDERED to maintain dental insurance for each
    child as long as child support is payable for that child. [OBLIGOR] is ORDERED -
  </div>

  <ol class="li-indent-level_1 ol-alpha_lowercase">
    <li>to furnish to each conservator of the children the following information no later than the thirtieth day after
      the date the notice of the rendition of this order is received:
      <ol class="li-indent-level_1 ol-roman_numerals">
        <li>[OBLIGOR]'s Social Security number;</li>
        <li>the name and address of [OBLIGOR]'s employer;</li>
        <li>whether [OBLIGOR]'s employer is self-insured or has dental insurance available;</li>
        <li>proof that dental insurance has been provided for each child;</li>
        <li>if [OBLIGOR]'s employer has dental insurance available:
          <ol class="li-indent-level_1 ol-alpha_lowercase">
            <li>the name of the dental insurance carrier;</li>
            <li>the number of the policy;</li>
            <li>a copy of the policy;</li>
            <li>a schedule of benefits;</li>
            <li>a dental insurance membership card;</li>
            <li>claim forms, and</li>
            <li>any other information necessary to submit a claim; and</li>
          </ol>
        </li>
        <li>if [OBLIGOR]'s employer is self-insured:
          <ol class="li-indent-level_1 ol-alpha_lowercase">
            <li>a copy of the schedule of benefits;</li>
            <li>a membership card;</li>
            <li>claim forms; and</li>
            <li>any other information necessary to submit a claim;</li>
          </ol>
        </li>
      </ol>
    </li>
    <li>to furnish to each conservator of the children a copy of any renewals or changes to the dental insurance
      coverage of a child and additional information regarding dental insurance coverage of the children not later than
      the fifteenth day after [OBLIGOR] receives or is provided with the renewal, change, or additional information;
    </li>
    <li>to notify each conservator of the children of any termination or lapse of the dental insurance coverage of a
      child no later than the fifteenth day after the date of the termination or lapse;</li>
    <li>after termination or lapse of dental insurance coverage, to notify each conservator of the children of the
      availability to [OBLIGOR] of additional dental insurance for the children not later than the fifteenth day after
      the date the insurance becomes available;</li>
    <li>after termination or lapse of dental insurance coverage, to enroll the children in a dental insurance plan that
      is available to [OBLIGOR] at reasonable cost at the next available enrollment period.</li>
  </ol>
  <div class="indent-first_line">Pursuant to section 1504.051 of the Texas Insurance Code, IT IS ORDERED that if
    [OBLIGOR] is eligible for dependent dental coverage but fails to apply to obtain coverage for the children, the
    insurer shall enroll the children on application of [OBLIGEE] or others as authorized by law.
  </div>
  <div class="indent-first_line">7. Allocation of Unreimbursed Expenses - </div>
  <div class="indent-first_line">Pursuant to section 154.183(c) of the Texas Family Code, the reasonable and necessary
    health-care expenses of the children that are not reimbursed by health insurance or dental insurance are allocated
    as follows: [OBLIGEE] is ORDERED to pay 50 percent and [OBLIGOR] is ORDERED to pay 50 percent of the unreimbursed
    health-care expenses if, at the time the expenses are incurred, [OBLIGOR] is providing health insurance and
    [OBLIGOR] is providing dental insurance as ordered.
  </div>
  <div class="indent-first_line">The conservator who incurs a health-care expense on behalf of a child is ORDERED to
    furnish to the other conservator all forms, receipts, bills, statements, and explanations of benefits reflecting the
    uninsured portion of the health-care expenses within thirty days after the incurring conservator receives them. If
    the incurring conservator furnishes to the nonincurring conservator the forms, receipts, bills, statements, and
    explanations of benefits reflecting the unreimbursed portion of the health-care expenses within thirty days after
    the incurring conservator receives them, the nonincurring conservator is ORDERED to pay the non-incurring
    conservator's percentage of the unreimbursed portion of the health-care expenses either by paying the health-care
    provider directly or by reimbursing the incurring conservator for any advance payment exceeding the incurring
    conservator's percentage of the unreimbursed portion of the health-care expenses within thirty days after the
    nonincurring conservator receives the forms, receipts, bills, statements, and/or explanations of benefits. If the
    incurring conservator fails to furnish to the nonincurring conservator the forms, receipts, bills, statements, and
    explanations of benefits reflecting the unreimbursed portion of the health-care expenses within thirty days after
    the incurring conservator receives them, the nonincurring conservator is ORDERED to pay the nonincurring
    conservator's percentage of the unreimbursed portion of the health-care expenses either by paying the health-care
    provider directly or by reimbursing the incurring conservator's percentage of the unreimbursed portion of the
    health-care expenses within 120 days after the nonincurring conservator receives the forms, receipts, bills,
    statements, and/or explanations of benefits.
  </div>
  <div class="indent-first_line">8. Secondary Coverage - IT IS ORDERED that if a conservator provides secondary health
    insurance coverage or dental insurance coverage for the children, the conservators shall cooperate fully with regard
    to the handling and filing of claims with the insurance carrier providing the coverage in order to maximize the
    benefits available to the children and to ensure that the conservator who pays for health-care expenses for the
    children is reimbursed for the payment from both carriers to the fullest extent possible.
  </div>
  <div class="indent-first_line">9. Compliance with Insurance Company Requirements - Each conservator is ORDERED to
    conform to all requirements imposed by the terms and conditions of any policy of health or dental insurance covering
    the children in order to assure the maximum reimbursement or direct payment by any insurance company of the incurred
    health-care expense, including but not limited to requirements for advance notice to any carrier, second opinions,
    and the like. Each conservator is ORDERED to use "preferred providers," or services within the health maintenance
    organization or preferred provider network, if applicable. Disallowance of the bill by an insurance company shall
    not excuse the obligation of a conservator to make payment. Excepting emergency health-care expenses incurred on
    behalf of the children, if a party incurs health-care expenses for the children using "out-of-network" health-care
    providers or services, or fails to follow the insurance company procedures or requirements, that conservator shall
    pay all such health-care expenses incurred absent (1) written agreement of the conservators allocating such
    health-care expenses or (2) further order of the Court.</div>
  <div class="indent-first_line">10. Claims - Except as provided in this paragraph, a conservator who is not carrying
    the health or dental insurance policy covering the children is ORDERED to furnish to the party carrying the policy,
    within fifteen days of receiving them, all forms, receipts, bills, and statements reflecting the health-care
    expenses the conservator not carrying the policy incurs on behalf of the children. In accordance with section
    1204.251 and 1504.055(a) of the Texas Insurance Code, IT IS ORDERED that the conservator who is not carrying the
    health or dental insurance policy covering the children, at that conservator's option, or others as authorized by
    law, may file any claims for health-care expenses directly with the insurance carrier with and from whom coverage is
    provided for the benefit of the children and receive payments directly from the insurance company. Further, for the
    sole purpose of section 1204.251 of the Texas Insurance Code, [OBLIGEE] is designated the managing conservator or
    possessory conservator of the children.</div>
  <div class="indent-first_line">The conservator who is carrying the health or dental insurance policy covering the
    children is ORDERED to submit all forms required by the insurance company for payment or reimbursement of
    health-care expenses incurred by either party on behalf of a child to the insurance carrier within fifteen days of
    that party's receiving any form, receipt, bill, or statement reflecting the expenses.</div>
  <div class="indent-first_line">11. Constructive Trust for Payments Received - IT IS ORDERED that any insurance
    payments received by a conservator from the health or dental insurance carrier as reimbursement for health-care
    expenses incurred by or on behalf of a child shall belong to the conservator who paid those expenses. IT IS FURTHER
    ORDERED that the conservator receiving the insurance payments is designated a constructive trustee to receive any
    insurance checks or payments for health-care expenses paid by the other conservator, and the conservator carrying
    the policy shall endorse and forward the checks or payments, along with any explanation of benefits received, to the
    other conservator within three days of receiving them.</div>
  <div class="indent-first_line">12. WARNING - A PARENT ORDERED TO PROVIDE HEALTH INSURANCE OR DENTAL INSURANCE OR TO
    PAY THE OTHER PARENT ADDITIONAL CHILD SUPPORT FOR THE COST OF HEALTH INSURANCE OR DENTAL INSURANCE WHO FAILS TO DO
    SO IS LIABLE FOR NECESSARY MEDICAL EXPENSES OF THE CHILDREN, WITHOUT REGARD TO WHETHER THE EXPENSES WOULD HAVE BEEN
    PAID IF HEALTH INSURANCE OR DENTAL INSURANCE HAD BEEN PROVIDED, AND FOR THE COST OF HEALTH INSURANCE PREMIUMS,
    DENTAL INSURANCE PREMIUMS, OR CONTRIBUTIONS, IF ANY, PAID ON BEHALF OF THE CHILDREN.</div>
  <div class="bs_text_bold bs_text_underline">Miscellaneous Child Support Provisions</div>
  <div class="indent-first_line bs_text_underline">No Credit for Informal Payments</div>
  <div class="indent-first_line">IT IS ORDERED that the child support as prescribed in this decree shall be exclusively
    discharged in the manner ordered and that any direct payments made by [OBLIGOR] to [OBLIGEE] or any expenditures
    incurred by [OBLIGOR] during OBLIGOR's periods of possession of or access to the children, as prescribed in this
    decree, for food, clothing, gifts, travel, shelter, or entertainment are deemed in addition to and not in lieu of
    the support ordered in this decree.
  </div>
  <div class="indent-first_line bs_text_underline">Support as Obligation of Estate</div>
  <div class="indent-first_line">IT IS ORDERED that the provisions for child support in this decree shall be an
    obligation of the estate of [OBLIGOR] and shall not terminate on the death of [OBLIGOR]. IT IS ORDERED that payment
    received by [OBLIGEE] for the benefit of the children due to the death of [OBLIGOR], including payments from the
    Social Security Administration, Department of Veterans Affairs or other governmental agency or life insurance
    proceeds, annuity payments, trust distributions, or retirement survivor benefits, shall be a credit against this
    obligation. Any remaining balance of the child support is an obligation of [OBLIGOR]'s estate.</div>
  <div class="indent-first_line bs_text_underline">Termination of Orders on Remarriage of Parties but Not on Death of
    Obligee</div>
  <div class="indent-first_line">The provisions of this decree relating to current child support terminate on the
    remarriage of [OBLIGEE] to [OBLIGOR] unless a nonparent or agency has been appointed conservator of the children
    under chapter 153 of the Texas Family Code. An obligation to pay child support under this decree does not terminate
    on the death of [OBLIGEE] but continues as an obligation to [CHILD 1] [CHILD 2] and [CHILD 3] add options for
    additional children
  </div>
  <div class="bs_text_italic">Medical Notification</div>
  <div class="indent-first_line">Each conservator is ORDERED to inform the other conservator within two (2) hours of any
    medical condition of the children requiring surgical intervention, hospitalization, or both.
  </div>
  <div class="indent-first_line">Each party is ORDERED to provide notice of all medical and mental health appointments
    of the children at least seven (7) days in advance of the appointment. If this is not possible, the scheduling party
    is ORDERED to provide written notice to the other party within one (1) hour of scheduling the appointment. This
    notice shall contain the name of the provider, the time, date and location of such appointment, and the nature of
    the intended treatment for the child or the purpose of the appointment.
  </div>
  <div class="indent-first_line">Within thirty (30) days after receipt of a written request from the other conservator,
    the conservator receiving the request is ORDERED to execute -
  </div>
  <ol class="li-indent-level_1">
    <li>all necessary releases pursuant to the Health Insurance Portability and Accountability Act (HIPAA) and 45 C.F.R.
      section 164.508 to permit the other conservator to obtain health-care information regarding the children; and</li>
    <li>for all health-care providers of the children, an authorization for disclosure of protected health information
      to the other conservator pursuant to the HIPAA and 45 C.F.R. section 164.508.</li>
  </ol>
  <div class="indent-first_line">Each conservator is further ORDERED to designate the other conservator as a person to
    whom protected health information regarding the children may be disclosed whenever the conservator executes an
    authorization for disclosure of protected health information pursuant to the HIPAA and 45 C.F.R. section 164.508.
  </div>
  <div class="bs_text_bold bs_text_italic">Information Regarding Parties</div>
  <div class="indent-first_line">The information required for each party by Section 105.006(a) of the Texas Family Code
    is as follows:
  </div>
  <table>
    <tr>
      <td>Name</td>
      <td></td>
    </tr>
    <tr>
      <td>Social Security Number:</td>
      <td></td>
    </tr>
    <tr>
      <td>Driver's License Number:</td>
      <td></td>
    </tr>
    <tr>
      <td>Current Residence Address:</td>
      <td></td>
    </tr>
    <tr>
      <td>Mailing Address:</td>
      <td></td>
    </tr>
    <tr>
      <td>Home telephone number:</td>
      <td></td>
    </tr>
    <tr>
      <td>Name of employer:</td>
      <td></td>
    </tr>
    <tr>
      <td>Address of employment:</td>
      <td></td>
    </tr>
    <tr>
      <td>Work telephone number:</td>
      <td></td>
    </tr>
    <tr>
      <td>Name</td>
      <td></td>
    </tr>
    <tr>
      <td>Social Security Number:</td>
      <td></td>
    </tr>
    <tr>
      <td>Driver's License Number:</td>
      <td></td>
    </tr>
    <tr>
      <td>Current Residence Address:</td>
      <td></td>
    </tr>
    <tr>
      <td>Mailing Address:</td>
      <td></td>
    </tr>
    <tr>
      <td>Home telephone number:</td>
      <td></td>
    </tr>
    <tr>
      <td>Name of employer:</td>
      <td></td>
    </tr>
    <tr>
      <td>Address of employment:</td>
      <td></td>
    </tr>
    <tr>
      <td>Work telephone number:</td>
      <td></td>
    </tr>
  </table>

  <div class="bs_text_bold bs_text_italic">Required Notices</div>
  <div class="indent-first_line">EACH PERSON WHO IS A PARTY TO THIS ORDER IS ORDERED TO NOTIFY EACH OTHER PARTY, THE
    COURT, AND THE STATE CASE REGISTRY OF ANY CHANGE IN THE PARTY'S CURRENT RESIDENCE ADDRESS, MAILING ADDRESS, HOME
    TELEPHONE NUMBER, NAME OF EMPLOYER, ADDRESS OF EMPLOYMENT, DRIVER'S LICENSE NUMBER, AND WORK TELEPHONE NUMBER. THE
    PARTY IS ORDERED TO GIVE NOTICE OF AN INTENDED CHANGE IN ANY OF THE REQUIRED INFORMATION TO EACH OTHER PARTY, THE
    COURT, AND THE STATE CASE REGISTRY ON OR BEFORE THE 60TH DAY BEFORE THE INTENDED CHANGE. IF THE PARTY DOES NOT KNOW
    OR COULD NOT HAVE KNOWN OF THE CHANGE IN SUFFICIENT TIME TO PROVIDE 60-DAY NOTICE, THE PARTY IS ORDERED TO GIVE
    NOTICE OF THE CHANGE ON OR BEFORE THE FIFTH DAY AFTER THE DATE THAT THE PARTY KNOWS OF THE CHANGE.</div>
  <div class="indent-first_line">THE DUTY TO FURNISH THIS INFORMATION TO EACH OTHER PARTY, THE COURT, AND THE STATE CASE
    REGISTRY CONTINUES AS LONG AS ANY PERSON, BY VIRTUE OF THIS ORDER, IS UNDER AN OBLIGATION TO PAY CHILD SUPPORT OR
    ENTITLED TO POSSESSION OF OR ACCESS TO A CHILD.</div>
  <div class="indent-first_line">FAILURE BY A PARTY TO OBEY THE ORDER OF THIS COURT TO PROVIDE EACH OTHER PARTY, THE
    COURT, AND THE STATE CASE REGISTRY WITH THE CHANGE IN THE REQUIRED INFORMATION MAY RESULT IN FURTHER LITIGATION TO
    ENFORCE THE ORDER, INCLUDING CONTEMPT OF COURT. A FINDING OF CONTEMPT MAY BE PUNISHED BY CONFINEMENT IN JAIL FOR UP
    TO SIX MONTHS, A FINE OF UP TO $500 FOR EACH VIOLATION, AND A MONEY JUDGMENT FOR PAYMENT OF ATTORNEY'S FEES AND
    COURT COSTS.
  </div>
  <div class="indent-first_line">Notice shall be given to the other party by delivering a copy of the notice to the
    party by registered or certified mail, return receipt requested. Notice shall be given to the Court by delivering a
    copy of the notice either in person to the clerk of this Court or by registered or certified mail addressed to the
    clerk at [COUNTY] County District Courts, [COURT ADDRESS]. Notice shall be given to the state case registry by
    mailing a copy of the notice to State Case Registry, Contract Services Section, MC046S, P.O. Box 12017, Austin,
    Texas 78711-2017. </div>
  <div class="indent-first_line">NOTICE TO ANY PEACE OFFICER OF THE STATE OF TEXAS: YOU MAY USE REASONABLE EFFORTS TO
    ENFORCE THE TERMS OF CHILD CUSTODY SPECIFIED IN THIS ORDER. A PEACE OFFICER WHO RELIES ON THE TERMS OF A COURT ORDER
    AND THE OFFICER'S AGENCY ARE ENTITLED TO THE APPLICABLE IMMUNITY AGAINST ANY CLAIM, CIVIL OR OTHERWISE, REGARDING
    THE OFFICER'S GOOD FAITH ACTS PERFORMED IN THE SCOPE OF THE OFFICER'S DUTIES IN ENFORCING THE TERMS OF THE ORDER
    THAT RELATE TO CHILD CUSTODY. ANY PERSON WHO KNOWINGLY PRESENTS FOR ENFORCEMENT AN ORDER THAT IS INVALID OR NO
    LONGER IN EFFECT COMMITS AN OFFENSE THAT MAY BE PUNISHABLE BY CONFINEMENT IN JAIL FOR AS LONG AS TWO YEARS AND A
    FINE OF AS MUCH AS $10,000.</div>
  <div class="indent-first_line">THE COURT MAY MODIFY THIS ORDER THAT PROVIDES FOR THE SUPPORT OF A CHILD, IF:</div>

  <ol class="li-indent-level_1">
    <li>THE CIRCUMSTANCES OF THE CHILD OR A PERSON AFFECTED BY THE ORDER HAVE MATERIALLY AND SUBSTANTIALLY CHANGED; OR
    </li>
    <li>IT HAS BEEN THREE YEARS SINCE THE ORDER WAS RENDERED OR LAST MODIFIED AND THE MONTHLY AMOUNT OF THE CHILD
      SUPPORT AWARD UNDER THE ORDER DIFFERS BY EITHER 20 PERCENT OR $100 FROM THE AMOUNT THAT WOULD BE AWARDED IN
      ACCORDANCE WITH THE CHILD SUPPORT GUIDELINES.
    </li>
  </ol>
  <div class="bs_text_bold bs_text_italic">Warnings to Parties</div>
  <div class="indent-first_line">WARNINGS TO PARTIES: FAILURE TO OBEY A COURT ORDER FOR CHILD SUPPORT OR FOR POSSESSION
    OF OR ACCESS TO A CHILD MAY RESULT IN FURTHER LITIGATION TO ENFORCE THE ORDER, INCLUDING CONTEMPT OF COURT. A
    FINDING OF CONTEMPT MAY BE PUNISHED BY CONFINEMENT IN JAIL FOR UP TO SIX MONTHS, A FINE OF UP TO $500 FOR EACH
    VIOLATION, AND A MONEY JUDGMENT FOR PAYMENT OF ATTORNEY'S FEES AND COURT COSTS.
  </div>
  <div class="indent-first_line">FAILURE OF A PARTY TO MAKE A CHILD SUPPORT PAYMENT TO THE PLACE AND IN THE MANNER
    REQUIRED BY A COURT ORDER MAY RESULT IN THE PARTY'S NOT RECEIVING CREDIT FOR MAKING THE PAYMENT.
  </div>
  <div class="indent-first_line">FAILURE OF A PARTY TO PAY CHILD SUPPORT DOES NOT JUSTIFY DENYING THAT PARTY
    COURT-ORDERED POSSESSION OF OR ACCESS TO A CHILD. REFUSAL BY A PARTY TO ALLOW POSSESSION OF OR ACCESS TO A CHILD
    DOES NOT JUSTIFY FAILURE TO PAY COURT-ORDERED CHILD SUPPORT TO THAT PARTY.</div>
  <ol class="li-indent-level_1">
  </ol>

  <?php } // CLOSE: if ($childSupportDue != 1) ?>

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- END: Children Related Sections -->
  <?php } // CLOSE: if ($count_children_entries > 0)
?>


  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- # SECTION: DIVISION OF MARITAL ESTATE (Page 65 - 69)-->



  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- ## SUB SECTION: Property To Pettioner (Page 65 - 67 )-->


  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- ## SUB SECTION: Property To Respondent (Page 67 - 69 )-->


  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- # SECTION: DIVISION OF DEBT (Page 69 - )-->



  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- ## SUB SECTION: Debt To Pettioner (Page 69 - 70 )-->


  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- ## SUB SECTION: Debt To Respondent (Page 70 - 72 )-->



  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- ## SUB SECTION: Notic (Page 72) e-->

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- ## SUB SECTION: Attorney's Fees (Page 72) -->


  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- ## SUB SECTION: Treatment/Allocation to Community Income for Year of Divorce (Page 73) -->


  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- ## SUB SECTION: Credit Cards (Page 75) -->


  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- ## SUB SECTION: Transfer and Delivery of Property (Page 76) -->


  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- ## SUB SECTION: Direction to Deliver Property (Page 76) -->



  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- ## SUB SECTION: Continuation of Health Insurance Coverage (Page 76) -->


  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- ## SUB SECTION: Direction to Deliver Property (Page 76) -->


  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- ## SUB SECTION: Name Change Request (Page 77) -->


  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- ## SUB SECTION: Dicharge from Discovery Retention Requirement (Page 77) -->


  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- ## SUB SECTION: Decree Acknowledgement (Page 77) -->

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- ## SUB SECTION: Only One Pro Se Party (Page 79) -->


  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- ## SUB SECTION: Divorce Your Way (Page 79) -->

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- ## SUB SECTION: Clarifying Orders (Page 80) -->

  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- ## SUB SECTION: Relief Not Granted (Page 80) -->


  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- ## SUB SECTION: Date of Judgement (Page 81) -->


  <!-- ------------------------------------------------------------------------------------------------ -->
  <!-- ## SUB SECTION: Approved and Consented to as to both form and substance (Page 81) -->







  <div class="indent-first_line"></div>

  <ol class="li-indent-level_1">
  </ol>

  <div class="bs_spacer"></div>