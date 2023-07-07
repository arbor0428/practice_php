<?php 
    session_start(); //세션 시작
    session_unset(); //세션 해제

    header("Location:login_view.php");// 로그인 뷰 화면으로 이동
?>