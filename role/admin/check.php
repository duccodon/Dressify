<?php
    if(!isset($_SESSION['admin_name'])){
        header('Location: ../../join.php');
    }
?>