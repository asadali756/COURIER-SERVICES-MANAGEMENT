<?php
include("connection.php");
$ID = $_GET['id'];
$sql = "delete from delivery where id = $ID";
$result =  mysqli_query($conn , $sql);

echo "<script>
    window.location.href = 'send_deliveryshow.php';
</script>";
?>