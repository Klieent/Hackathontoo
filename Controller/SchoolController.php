<?php

include "../Model/db.php";



if(isset($_POST['addSchool'])){


    $name = $_POST['name'];


    insertRecord('school',array('name'),array($name));

    header("Location: ../admin/school.php");
}


if(isset($_POST['editSchool'])){


    $school_id = $_GET['school_id'];
    $name = $_POST['name'];


    editRecord('school',array('school_id','name'),array($school_id,$name));

    header("Location: ../admin/school.php");
}

if(isset($_POST['deleteSchool'])){

    $school_id = $_GET['school_id'];

    deleteRecord('school','school_id',$school_id);

    header("Location: ../admin/school.php");


}