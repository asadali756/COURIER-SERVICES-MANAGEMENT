<?php
include("connection.php");
$ID = $_GET['id'];
$sql = "delete from send_from where id = $ID";
$result =  mysqli_query($conn , $sql);

echo "<script>
    window.location.href = 'send_fromshow.php';
</script>";
?>