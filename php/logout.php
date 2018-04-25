<?php
    session_start();
    if (isset($_SESSION['username'])) {
        $_SESSION = array();
        session_destroy();
        session_write_close();
        header("location: ../");
        die;
    }
?>