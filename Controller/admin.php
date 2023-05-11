<?php

include '../Model/db.php';

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check = login('admin',$username,$password);

    if(mysqli_num_rows($check) > 0){
        $account = mysqli_fetch_assoc($check);
        $_SESSION['admin_id'] = $account['admin_id'];
        header("Location: ../admin/dashboard-analytics.php");
    }else{
        echo "<script>
        alert('Invalid Username or Password');
        window.location.href = '../admin';
        </script>";
    }
}