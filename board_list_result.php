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
    <div id="container">
    <div id="board_container">
        <div class="ct-center">
            <form method="get" action="board_list_result.php">
                <div class="searchBoxWrap clear_fix">
                    <div class="searchBox">
                        <select name="search">
                            <option value="title">title</option>
                            <option value="author">author</option>
                        </select>
                        <input id="txt_box" type="text" name="txt_box02" required>
                        <input id="submit" type="submit" value="search">
                    </div>
                </div>
            </form>
            <table>
                <colgroup>
                    <col width="75px">
                    <col width="729px">
                    <col width="75px">
                    <col width="200px">
                    <col width="121px">
                </colgroup>
                <tbody>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Att</th>
                        <th>Author</th>
                        <th>View</th>
                    </tr>
                    <tr class="not">
                        <td>Notice</td>
                        <td><a href="#">Over half of vegans would refuse to date a meat eater, says new study</a></td>
                        <td><a href="#"><img src="img/board/att.png"></a></td>
                        <td>Ayaan Leonard</td>
                        <td>1629</td>
                    </tr>
                    <tr class="not">
                        <td>Notice</td>
                        <td><a href="#">10 things I learnt from trying to be vegan for a year</a></td>
                        <td><a href="#"><img src="img/board/att.png"></a></td>
                        <td>Ayaan Leonard</td>
                        <td>1629</td>
                    </tr>
                    <tr class="not">
                        <td>Notice</td>
                        <td><a href="#">8 best vegan Christmas mains for a meat-free festive feast</a></td>
                        <td><a href="#"><img src="img/board/att.png"></a></td>
                        <td>Ayaan Leonard</td>
                        <td>1629</td>
                    </tr>
                    <tr class="not">
                        <td>Notice</td>
                        <td><a href="#">All the latest plant-based food launches for Veganuary 2021</a></td>
                        <td><a href="#"><img src="img/board/att.png"></a></td>
                        <td>Ayaan Leonard</td>
                        <td>1629</td>
                    </tr>
                    <tr class="not">
                        <td>Notice</td>
                        <td><a href="#">Vegetarian schools forced to make changes after backlash from parents</a></td>
                        <td><a href="#"><img src="img/board/att.png"></a></td>
                        <td>Ayaan Leonard</td>
                        <td>1629</td>
                    </tr>
                    <?php 

                    //board.php에서 form태그를 통해 전달받은 데이터를 변수에 담아줍니다.
                        $search = $_GET['search'];
                        $txt = $_GET['txt'];

                        $sql = "SELECT number,title,author FROM board WHERE $search LIKE '%$txt%' ORDER BY number DESC";
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_array($result)){

                            echo "<tr>";
                            echo "<td>".$row['number']."</td>";
                            echo "<td><a href='board_detail_view.php?num={$row['number']}'>".$row['title']."</a></td>";
                            echo "<td>"."</td>";
                            echo "<td>".$row['author']."</td>";
                            echo "<td>".$row['views']."</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
            <div class="writeWrap clear_fix">
                <a href="board_insert_view.php">Write</a>
            </div>
            <ul class="pages">
            <li>
                <a href="#">
                    <img src="img/board/double_left.png">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="img/board/left.png">
                </a>
            </li>
            <li class="number fix">
                <a href="#">1</a>
            </li>
            <li>
                <a href="#">
                    <img src="img/board/right.png">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="img/board/double_right.png">
                </a>
            </li>
        </ul>
        </div>
    </div>
    </div>
    <?php include "inc/footer.php"; ?>
</body>
</html>