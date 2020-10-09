<?php
    if(!isset($_SESSION['id'])){
        header("Location: index.php");
    }else if(isset($_SESSION['id']) && $_SESSION['id'] == 'admin'){
        header("Location: error_page.php");
    }
?>