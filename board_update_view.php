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
    <?php 
        include "inc/header.php";
        $num = $_GET['num'];
        $sql = "SELECT * FROM board WHERE number=$num";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        
    ?>
    <div class="sub_visual board_visual">
        <p>Veggie life</p>
        <h2>News & Event</h2>
        <div class="linedeco">
            <span class="line01"></span>
            <span class="line02"></span>
            <span class="line03"></span>
        </div>
    </div>
    <div id="board_register">
        <div class="ct-center">
        <form method="post" action="board_update.php?num=<?php echo $num?>">
                <input id="title" type="text" name="title" value="<?php echo $row['title']?>" required placeholder="Tittle">
                <textarea name="context" placeholder="Content"><?php echo $row['context']?></textarea>
                게시글 작성자<input type="text" name="author"  value="<?php echo $row['author']?>" required>
                <input id="register" type="submit" value="Edit">
            </form>
        </div>
    </div>
    <?php 
        include "inc/footer.php";
    ?>
</body>
</html>