<?php

    require "../models/connect.php";

    $userName = $_POST["username"];
    $userEmail = $_POST["email"];
    $userAvatar = $_FILES["avatar"]["name"];
    $userPassword = $_POST["password"];
    // echo "<pre>";
    // var_dump($_POST);die;
    
   
   
    move_uploaded_file($_FILES["avatar"]["tmp_name"],"../image/".$_FILES["avatar"]["name"]);
     $query = "INSERT INTO users (fullname,email,image,password) VALUES ('$userName','$userEmail','$userAvatar','$userPassword')";
    connect($query);
    header("location:../viewND/dangNhap.php");
?>