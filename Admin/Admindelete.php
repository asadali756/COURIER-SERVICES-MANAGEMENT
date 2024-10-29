<?php
include("connection.php");
$ID = $_GET['id'];
$sql = "delete from usertable where id = $ID";
$result =  mysqli_query($conn , $sql);

echo "<script>
    window.location.href = 'adminshow.php';
</script>";
?>