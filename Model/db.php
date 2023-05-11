<?php


$conn;

function connect(){
    global $conn;
    $conn = mysqli_connect("localhost","root","","");

    return $conn;
}




function disconnect(){
    global $conn;
    mysqli_close($conn);
}

