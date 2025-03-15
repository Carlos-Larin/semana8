<?php
    session_start();
    session_destroy();
    header('Location: ejemplo1.php');
?>