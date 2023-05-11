<?php

include "../Model/db.php";


if(isset($_POST['addMentor'])){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $middlename= $_POST['middlename'];
    $contact_number = $_POST['contact_number'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $fields = array('firstname','lastname','middlename','contact_number','email','department','username','password');
    $values = array($firstname,$lastname,$middlename,$contact_number,$email,$department,$username,$password);
    insertRecord('mentor',$fields,$values);
    header("Location: ../admin/mentors.php");
}


if(isset($_POST['editMentor'])){
    $mentor_id = $_GET['mentor_id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $middlename= $_POST['middlename'];
    $contact_number = $_POST['contact_number'];
    $email = $_POST['email'];
    $department = $_POST['department'];
   

    $fields = array('mentor_id','firstname','lastname','middlename','contact_number','email','department');
    $values = array($mentor_id,$firstname,$lastname,$middlename,$contact_number,$email,$department);
    editRecord('mentor',$fields,$values);
    header("Location: ../admin/mentors.php");
}


if(isset($_POST['deleteMentor'])){

    $mentor_id = $_GET['mentor_id'];

    deleteRecord('mentor','mentor_id',$mentor_id);

    header("Location: ../admin/mentors.php");


}