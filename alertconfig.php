<script src="js/sweetalert.js"></script>


<?php
if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
    ?>
<script>
swal({
    title: "<?php echo $_SESSION['status']; ?>",
    icon: "<?php echo $_SESSION['status_code']; ?>",
    button: "DONE",
});
</script>
<?php
    unset($_SESSION['status']);
}
?>