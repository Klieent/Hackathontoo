<?php

include "../Model/db.php";



if(isset($_POST['addDepartment'])){


    $name = $_POST['name'];


    insertRecord('department',array('name'),array($name));

    header("Location: ../admin/department.php");
}


if(isset($_POST['editDepartment'])){


    $department_id = $_GET['department_id'];
    $name = $_POST['name'];


    editRecord('department',array('department_id','name'),array($department_id,$name));

    header("Location: ../admin/department.php");
}

if(isset($_POST['deleteDepartment'])){

    $department_id = $_GET['department_id'];

    deleteRecord('department','department_id',$department_id);

    header("Location: ../admin/department.php");


}