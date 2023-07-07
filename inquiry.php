<meta charset="UTF-8">
<?php 

    $phone= $_POST['phone'];
    $name= $_POST['name'];
    $rfq= $_POST['rfq'];

    include "inc/db_connect.php";
    $sql = "INSERT INTO inquiry (phone,name,rfq) VALUES ('$phone','$name','$rfq')";
    mysqli_query($conn,$sql); 

    
    echo "<script>
            window.alert('We will answer you as soon as possible.');
            history.go(-1);
          </script>";

?>