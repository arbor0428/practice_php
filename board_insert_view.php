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
            <form method="post" action="board_insert.php">
                <input id="title" type="text" name="title" required placeholder="Tittle">
                <textarea name="context" placeholder="Content"></textarea>
                <div class="clear_fix">
                    <label for="author">Writer's name</label>
                    <input id="author" type="text" name="author" required placeholder="Name">
                    <input id="register" type="submit" value="Register">
                </div>
            </form>
        </div>
    </div>
    <?php 
        include "inc/footer.php";
    ?>
</body>
</html>