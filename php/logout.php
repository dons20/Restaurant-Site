<?php
    /* session_start();
    unset($_SESSION['username']);
    unset($_SESSION['first_name']);
    unset($_SESSION['password']);
    header("location: ../index.php");
    exit; */
    session_start();
    $_SESSION = array();
    session_destroy();
    session_write_close();
    header("location: ../");
    die;
?>