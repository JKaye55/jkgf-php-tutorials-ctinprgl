<?php



include("connections.php");
$user_id=$_POST["user_id"];

mysqli_query($connections, "DELETE FROM mytbl WHERE id='$user_id'");

echo "<script language='javascript'>alert('Record has been DELETED!')</script>";
echo "<script>window.location.href='index_act1.php';</script>";
?>