<?php 
    include "inc/db_connect.php";
    if(!isset($_SESSION['userid'])){

        echo "<script>
                window.alert('Please log in to continue.');
                location.href ='login_view.php';
            </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veggie Life_Board</title>
    <?php include_once "default.php"; ?>
</head>
<body>
    <?php include "inc/header.php"; ?>
    <div class="sub_visual board_visual">
        <p>Veggie life</p>
        <h2>News & Event</h2>
        <div class="linedeco">
            <span class="line01"></span>
            <span class="line02"></span>
            <span class="line03"></span>
        </div>
    </div>
    <div id="board_container">
        <div class="ct-center">
            <?php 
                $num = $_GET['num'];
                $sql = "SELECT * FROM board WHERE number=$num";
                $result = mysqli_query($conn,$sql);

                $row = mysqli_fetch_array($result);
                
                //board 테이블에서 $row['views']; 조회수 컬럼에 해당하는 데이터
                $views = $row['views'] + 1;
                $sql2 = "UPDATE board SET views=$views WHERE number=$num";
                $result = mysqli_query($conn,$sql2);
            ?>
            <div class="bo_title">
                <p><?php echo $row['title']?></p>
            </div>
            <div class="bo_author">
                <p class="first">
                    Writer
                <span><?php echo $row['author']?></span>
                </p>
            </div>
            <div class="bo_context">
                <p><?php echo $row['context']?></p>
            </div>
            <div class="editWrap clear_fix">
                <div class="edit clear_fix">
                    <a href="board_update_view.php?num=<?php echo $num?>">Edit</a>
                    <a href="board_delete.php?num=<?php echo $num?>">Delete</a>
                    <a href="board.php">Board</a>
                </div>
            </div>
        </div>
    </div>
    <?php include "inc/footer.php"; ?>
</body>
</html>