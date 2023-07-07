<?php 

    include "inc/db_connect.php";

    $num = $_GET['num'];

    $sql = "DELETE FROM board WHERE number=$num";
    mysqli_query($conn, $sql);

    header("Location:board.php");

?>