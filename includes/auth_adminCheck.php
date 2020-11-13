<?php
    if(!isset($_SESSION['id'])){
        header("Location: index.php");
    }else if((isset($_SESSION['id'])&& $_SESSION['id'] != 'admin')&&(isset($_SESSION['id']) && $_SESSION['id'] != 'super_admin')){
        
        header("Location: error_page.php");
    }
?>
<script>
 var session = eval('(<?php echo json_encode($_SESSION)?>)');
 console.log(session);

//you may access session variable "x" as follows
alert(session.id);
</script>