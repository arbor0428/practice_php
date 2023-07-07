<?php 
    include "inc/db_connect.php";

    $id = $_POST["id"]; //join.php에 있는 input 태그의 name 속성값
    $pw = $_POST["password"];
    $name = $_POST["name"];

    $sql = "INSERT INTO members (id,password,name) VALUES ('$id','$pw','$name')";

    mysqli_query($conn,$sql);
    header("Location:login_view.php");
?>