<?php

class MailingList {
    private $id;
    private $first_name;
    private $emailAddress;
    private $signUpDate;

    public function __construct() {
        $this->id = 0;
        $this->first_name = '';
        $this->emailAddress = '';
        $this->signUpDate = '';
    }

    public function getMailingListID() {
        return $this->id;
    }
    public function setMailingListID($value) {
        $this->id = $value;
    }

    public function getMailingListFirstName() {
        return $this->first_name;
    }
    public function setMailingListFirstName($value) {
        $this->first_name = $value;
    }


    public function getMailingListEmail() {
        return $this->emailAddress;
    }
    public function setMailingListEmail($value) {
        $this->emailAddress = $value;
    }

    public function getSignUpDate() {
        return $this->signUpDate;
    }
    public function setSignUpDate($value) {
        $this->signUpDate = $value;
    }
}
?>