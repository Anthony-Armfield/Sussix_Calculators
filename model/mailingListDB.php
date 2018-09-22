<?php
class MailingListDB {

    //get all employees
    public function getMailingLists() {
        $db = Database::getDB();
        $query = 'SELECT * FROM mailinglist
                  ORDER BY signUpID';
        $statement = $db->query($query);

        //create the employee array
        $$mailingLists = array();
        foreach ($statement as $row) {
            $mailingList = new Employees();
            $mailingList->setMailingListID($row['signUpID']);
            $mailingList->setMailingListFirstName($row['firstName']);
            $mailingList->setMailingListEmail($row['emailAddress']);
            $mailingList->setSignUpDate($row['signUpDate']);
            $mailingLists[] = $mailingList;
        }
        return $mailingLists;
    }
}
?>