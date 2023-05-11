<?php


include "../Model/db.php";

if(isset($_POST['addIntern'])){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $middlename= $_POST['middlename'];
    $birthdate = $_POST['birthdate'];
    $address = $_POST['address'];
    $contact_number = $_POST['contact_number'];
    $email = $_POST['email'];
    $school = $_POST['school_id'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $fields = array('firstname','lastname','middlename','birthdate','address','contact_number','email','school_id','username','password');
    $values = array($firstname,$lastname,$middlename,$birthdate,$address,$contact_number,$email,$school,$username,$password);
    insertRecord('intern',$fields,$values);
    header("Location: ../admin/interns.php");
}


if(isset($_POST['editIntern'])){
    $intern_id = $_GET['intern_id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $middlename= $_POST['middlename'];
    $birthdate = $_POST['birthdate'];
    $address = $_POST['address'];
    $contact_number = $_POST['contact_number'];
    $email = $_POST['email'];
    $school = $_POST['school_id'];

    $fields = array('intern_id','firstname','lastname','middlename','birthdate','address','contact_number','email','school_id');
    $values = array($intern_id,$firstname,$lastname,$middlename,$birthdate,$address,$contact_number,$email,$school);

    editRecord('intern',$fields,$values);
    header("Location: ../admin/interns.php");
}

if(isset($_POST['deleteIntern'])){

    $intern_id = $_GET['intern_id'];

    deleteRecord('intern','intern_id',$intern_id);

    header("Location: ../admin/interns.php");


}