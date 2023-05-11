<?php

include "../Model/db.php";

session_start();

if(isset($_POST['add'])){

    $title = $_POST['title'];
    $content = $_POST['content'];


    $targetDir = "../files/"; // Set target directory
    $fileType = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

    $file = $targetDir . basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], $file);

    insertRecord('questionnaire',array('title','content','mentor_id','file'),array($title,$content,$_SESSION['mentor_id'],$file));
    header("Location: ../mentor/classwork.php");

}