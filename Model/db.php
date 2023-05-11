<?php


$conn;

function connect(){
    global $conn;
    $conn = mysqli_connect("localhost","root","","hackathon");

    return $conn;
}

function login($tablename,$username,$password){
    global $conn;
    connect();
    $query = mysqli_query($conn,"SELECT * FROM `$tablename` WHERE `username` = '$username' AND `password` = '$password'");
    disconnect();
    return $query;
}

function getAll($tablename){
    global $conn;
    connect();
    $query = mysqli_query($conn,"SELECT * FROM `$tablename`");
    disconnect();
    return $query;
}

function getRecord($tablename,$fld,$val){
    global $conn;
    connect();
    $query = mysqli_query($conn,"SELECT * FROM `$tablename` WHERE `$fld` = $val");
    disconnect();
    return $query;
}


function insertRecord($tablename,$fields,$values){

    global $conn;
    connect();
    $flds = implode("`,`",$fields);
    $vals = implode("','",$values);
    $query = mysqli_query($conn,"INSERT INTO `$tablename` (`$flds`) VALUES ('$vals')");
    disconnect();
}

function editRecord($tablename,$fields,$values){
    global $conn;
    connect();
    for($i = 1 ; $i < count($fields); $i++){
        $query = mysqli_query($conn,"UPDATE `$tablename` SET `$fields[$i]` = '$values[$i]' WHERE `$fields[0]` = '$values[0]'");
    }
    disconnect();
}

function deleteRecord($tablename,$fields,$values){
    global $conn;
    connect();
    $query = mysqli_query($conn,"DELETE FROM `$tablename` WHERE `$fld` = $val");
    disconnect();
}

function disconnect(){
    global $conn;
    mysqli_close($conn);
}

