<?php
include("connection.php");
$ID = $_GET['id'];
$sql = "delete from bills where id = $ID";
$result =  mysqli_query($conn , $sql);

echo "<script>
    window.location.href = 'billsshow.php';
</script>";
?>