<?php
include("connection.php");
$ID = $_GET['id'];
$sql = "delete from couriers where id = $ID";
$result =  mysqli_query($conn , $sql);

echo "<script>
    window.location.href = 'courier_show.php';
</script>";
?>