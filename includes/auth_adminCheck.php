<?php
    if(!isset($_SESSION['id'])){
        header("Location: index.php");
    }else if($_SESSION['id'] != 'super_admin' && $_SESSION['id'] != 'admin'){
        header("Location: error_page.php");
    }
?>