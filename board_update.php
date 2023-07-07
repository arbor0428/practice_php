<?php 
    include "inc/db_connect.php";

    $num = $_GET['num'];

    $title = $_POST['title'];
    $context = $_POST['context'];
    $author = $_POST['author'];

    $sql = "UPDATE board SET title='$title', context='$context', author='$author' WHERE number=$num";

    mysqli_query($conn,$sql);

    echo "<script>
                window.alert('The modification is complete.');
                history.go(-2);
         </script>";

?>