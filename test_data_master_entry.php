<?php
/*
This file contains dummy data to mimic an enquiry to a Master Form entry for a client
 */
// TEMPLATE
// $master_entries[0][] = ''; //

// Get data from master

// For Testing Purposes
$master_entries = array();

// REPEATER FORM ENTRY ID
$master_entries[0][83] = ''; // Tell Is About Your Child(ren)
// $master_entries[0][] = ''; //
// $master_entries[0][] = ''; //

// PREQUAL DATA
// Service & Plan
$master_entries[0][276] = 'DYW'; // Service
$master_entries[0][277] = 'It\'s Simple'; // Plan (Its Simple, Not So Simple, Its Complicated [with children])

// Petitioner
$master_entries[0][96]['first'] = 'Peter'; // Petitioner Full Name
$master_entries[0][96]['middle'] = 'Paul'; // Petitioner Full Name
$master_entries[0][96]['last'] = 'Parker'; // Petitioner Full Name
$master_entries[0][39] = '999-999-9991'; // Petitioner phone cell
$master_entries[0][40] = 'petitioner@email.com'; // Petitioner phone cell
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
$master_entries[0][244] = '6 months or longer'; // Petitioner State duration
$master_entries[0][245] = 'Collin'; // Petitioner County
$master_entries[0][246] = ''; // If 'Other', petitioner County other
$master_entries[0][247] = '3 months or longer'; // $petitioner County duration
$master_entries[0][248] = '6 months or longer'; // Respondent State duration
$master_entries[0][249] = 'Collin'; // Respondent County
$master_entries[0][250] = ''; // If 'Other', respondent County other
$master_entries[0][251] = '3 months or longer'; // Respondent County duration
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
$master_entries[0][5] = '987'; // Judicial District Number
$master_entries[0][6] = 'Collin'; // Juditial County
$master_entries[0][8001] = '03/01/2022'; // SDU Section: Order Information [Date of Hearing: Both entered by paralegal]
$master_entries[0][8002] = '03/01/2022'; // SDU Section: Order Information [Order Sign Date: Both entered by paralegal]
$master_entries[0][8003] = '03/01/2022'; // AUSTIN FORM Section I: General Information [Date of Order: Both entered by paralegal]
$master_entries[0][8100] = 'Sharon M. Ramage'; // Peititoner Attorney Name DBU
$master_entries[0][8101] = '972-562-9890'; // Peititoner Attorney Tel DBU
$master_entries[0][8102] = '8951 Collin-McKinney Parkway Suite 1402, McKinney, Texas, 75070'; // Petitoner Attorney Address DBU

// PETITIONER (Tell Us About Yourself)
$master_entries[0][97] = 'Male'; // Gender
$master_entries[0][13] = '111-11-1111'; // SSN
$master_entries[0][279] = 'Yes'; // Drivers license exists
$master_entries[0][14] = 'DL1111111'; // Drivers license number
$master_entries[0][103] = 'Texas'; // Drivers license State
$master_entries[0][7001] = '999-999-9992'; // Petitioner phone home
$master_entries[0][7003] = 'White'; // Petitioner Race
$master_entries[0][7200]['last'] = 'Parker'; // Petitioner Race
// Birth Details
$master_entries[0][7002]['city'] = 'Riverton';
$master_entries[0][7002]['state'] = 'Utah';
$master_entries[0][7002]['country'] = 'United States';
// Petitioner address residence
$master_entries[0][38]['street'] = '321 Petitioner Street'; // Address residence
$master_entries[0][38]['street2'] = 'Apt 321'; // Address residence
$master_entries[0][38]['city'] = 'Prosper'; // Address residence
$master_entries[0][38]['state'] = 'Texas'; // Address residence
$master_entries[0][38]['zip'] = '75078'; // Address residence
// Address mailing
$master_entries[0][106]['street'] = '321 Petitioner Mailing Street'; // Address residence
$master_entries[0][106]['street2'] = 'Apt 321'; // Address residence
$master_entries[0][106]['city'] = 'Plano'; // Address residence
$master_entries[0][106]['state'] = 'Texas'; // Address residence
$master_entries[0][106]['zip'] = '75078'; // Address residence
// Employment
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
$master_entries[0][6200] = 'Riverton'; // Respondent Maiden Name
// Birth Details
$master_entries[0][6002]['city'] = 'Krugersdorp';
$master_entries[0][6002]['state'] = 'Gauteng';
$master_entries[0][6002]['country'] = 'South Africa';
// Address Residence
$master_entries[0][125]['street'] = '321 Respondent Street'; // Address residence
$master_entries[0][125]['street2'] = 'Apt 321'; // Address residence
$master_entries[0][125]['city'] = 'Prosper'; // Address residence
$master_entries[0][125]['state'] = 'Texas'; // Address residence
$master_entries[0][125]['zip'] = '75078'; // Address residence
// Address mailing
$master_entries[0][72]['street'] = '321 Respondent Mailing Street'; // Address residence
$master_entries[0][72]['street2'] = 'Apt 321'; // Address residence
$master_entries[0][72]['city'] = 'Prosper'; // Address residence
$master_entries[0][72]['state'] = 'Texas'; // Address residence
$master_entries[0][72]['zip'] = '75078'; // Address residence
// Employment
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