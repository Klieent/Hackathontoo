<?php

include "../Model/db.php";

session_start();
if(isset($_POST['addMentor'])){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $middlename= $_POST['middlename'];
    $contact_number = $_POST['contact_number'];
    $email = $_POST['email'];
    $department = $_POST['department_id'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $fields = array('firstname','lastname','middlename','contact_number','email','department_id','username','password');
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
    $department = $_POST['department_id'];
   

    $fields = array('mentor_id','firstname','lastname','middlename','contact_number','email','department_id');
    $values = array($mentor_id,$firstname,$lastname,$middlename,$contact_number,$email,$department);
    editRecord('mentor',$fields,$values);
    header("Location: ../admin/mentors.php");
}


if(isset($_POST['deleteMentor'])){

    $mentor_id = $_GET['mentor_id'];

    deleteRecord('mentor','mentor_id',$mentor_id);

    header("Location: ../admin/mentors.php");


}


if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check = login('mentor',$username,$password);

    if(mysqli_num_rows($check) > 0){
        $account = mysqli_fetch_assoc($check);
        $_SESSION['mentor_id'] = $account['mentor_id'];
        header("Location: ../mentor/dashboard.php");
    }else{
        echo "<script>
        alert('Invalid Username or Password');
        window.location.href = '../mentor';
        </script>";
    }
}