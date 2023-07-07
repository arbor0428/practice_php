<?php 
    include "inc/db_connect.php";

    $title = $_POST['title'];
    $context = $_POST['context'];
    $author = $_POST['author'];

    $sql = "INSERT INTO board (title,context,author,views) VALUES ('$title','$context','$author',0)";
    mysqli_query($conn, $sql);

    header("Location:board.php");


?>