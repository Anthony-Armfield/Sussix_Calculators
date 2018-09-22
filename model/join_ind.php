<?php

require('database.php');
require('mailingList.php');
require('mailingListDB.php');


$db = Database::getDB();

$mailingListeDB = new MailingListDB();
/****************************************************************************************
 *                 This section is for the mailing list form data                       *
 ****************************************************************************************/
// get the input from the form
$email_address = filter_input(INPUT_POST, 'email_address1');
$name = filter_input(INPUT_POST, 'name');
// echo "Fields: " . $email_address . $name;

// validate inputs
if ($email_address == null || $name == null) {
    $error = "Invalid input data. Please return to the "." previous page and try again.";
    include('../errors/error.php');
    exit();
} elseif (!ereg("^[a-zA-Z0-9_]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$", $email_address)) { //verifying email is valid
    $error = "That is not a valid email address.  Please return to the"
        ." previous page and try again.";
    include('../errors/error.php');
    exit();
}
// Setting column settings for items not user selectable
$signUpID = NULL;
$signUpDate = date('Y-m-d');

// Add the mailing list info to the mailinglist table
$contactQuery = 'INSERT INTO mailinglist
                 (signUpID, firstName, emailAddress, signUpDate)
              VALUES
                 (:signUpID, :mailing_first_name, :mailing_email, :signUpDate)';
$statement = $db->prepare($contactQuery);
$statement->bindValue(':signUpID', $signUpID);
$statement->bindValue(':mailing_first_name', $name);
$statement->bindValue(':mailing_email', $email_address);
$statement->bindValue(':signUpDate', $signUpDate);
$statement->execute();
$statement->closeCursor();
// echo "Fields: " . $signUpID . $name . $email_address . $signUpDate;
?>