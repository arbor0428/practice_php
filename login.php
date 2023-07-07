
<?php 
    header('Content-Type: text/html; charset=UTF-8');

    $id = $_POST['id'];
    $pw = $_POST['password'];

    include "inc/db_connect.php";
    $sql = "SELECT id,password FROM members WHERE id='$id'";
    $result = mysqli_query($conn,$sql); 

    $row = mysqli_fetch_array($result);

    $db_id = $row['id'];
    $db_pw = $row['password'];


    //입력한 아이디와 비밀번호와 데이터베이스에 있는 아이디 비밀번호 같은지 다른지 체크
    if ($id == $db_id && $pw == $db_pw) {

        $_SESSION['userid'] = $db_id;

        header("Location:login_view.php");

    }

    else {

        echo "<script>
                window.alert('Please check your Id & Password.');
                history.go(-1);
              </script>";
    }
?>