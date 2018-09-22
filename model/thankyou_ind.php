<?php

require('database.php');
require('employees.php');
require('employeeDB.php');
require('customerDB.php');
require('customer.php');
/******************************************************************
 *              Open the database
 ******************************************************************/
$db = Database::getDB();

// create the EmployeeDB and customer objects
$employeeDB = new EmployeeDB();
$customerDB = new CustomerDB();
/****************************************************************************************
 *                 This section is the contact form data                                *
 ****************************************************************************************/
// get the input from the form
$contact_first_name = filter_input(INPUT_POST, 'first_name');
$contact_last_name = filter_input(INPUT_POST, 'last_name');
$contact_email = filter_input(INPUT_POST, 'email_address1');
$contact_comments = filter_input(INPUT_POST, 'comments');
//echo "Fields: " . $contact_first_name . $contact_last_name . $contact_email . $contact_comments;

// combining the first and last name
$full_name = $contact_first_name . " " . $contact_last_name;

// validate inputs
if ($contact_first_name == null || $contact_last_name == null || $contact_email == null || $contact_comments == null) {
    $error = "Invalid input data. Please return to the "." previous page and try again.";
    include('../errors/error.php');
    exit();
} elseif (!ereg("^[a-zA-Z0-9_]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$", $contact_email)) { //verifying email is valid
    $error = "That is not a valid email address.  Please return to the"
        ." previous page and try again.";
    include('../errors/error.php');
    exit();
}

// Setting column settings for items not user selectable
$customerID = NULL;
$employeeID = 1;
$entryDate = date("Y-m-d");

// Add the contact info to the contact table
$contactQuery = 'INSERT INTO contact
                     (customerID, employeeID, firstName, lastName, emailAddress, comment, entryDate)
                  VALUES
                     (:customerID, :employeeID, :contact_first_name, :contact_last_name, :contact_email, :contact_comment, :entryDate)';
$statement = $db->prepare($contactQuery);
$statement->bindValue(':customerID', $customerID);
$statement->bindValue(':employeeID', $employeeID);
$statement->bindValue(':contact_first_name', $contact_first_name);
$statement->bindValue(':contact_last_name', $contact_last_name);
$statement->bindValue(':contact_email', $contact_email);
$statement->bindValue(':contact_comment', $contact_comments);
$statement->bindValue(':entryDate', $entryDate);
$statement->execute();
$statement->closeCursor();
// echo "Fields: " . $contact_first_name . $contact_last_name . $contact_email . $contact_comments;


?>