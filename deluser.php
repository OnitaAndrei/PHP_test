<?php
$conn=new mysqli("localhost","root","2009","customers");

if($conn->connect_error)
die("Connection failed: " . $conn->connect_error);

$id=$_GET["id"];
$sql="DELETE FROM fullnames WHERE id='$id'";

if($conn->query($sql)===TRUE)
    header("location:delete.php");
else
    echo "Error deleting record: " .$conn->error;
    $conn->close();
?>