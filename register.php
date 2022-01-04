<?php

$fname=val ($_POST["fname"]);
$lname=val ($_POST["lname"]);
$email=val ($_POST["email"]);
function val($x){
    $x=trim($x);
    $x=stripslashes($x);
    $x=htmlspecialchars($x);
    return $x;
}

$servername="localhost";
$username="root";
$password="2009";
$dbname="customers";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Connection failed " . $conn->connect_error);
}
$sql="INSERT INTO fullnames (firstname,lastname,email) VALUES ('$fname','$lname','$email')";
if($conn->query($sql)===TRUE)
    echo "New record created successfully";
    else echo "Error: " . $sql . "<br>" . $conn->error;
$conn->close();
?>