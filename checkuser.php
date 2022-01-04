<?php
$conn=new mysqli("localhost","root","2009","accounts");
if($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);


if(isset($_POST["username"], $_POST["password"])) 
    {     

        $username = $_POST["username"]; 
        $password = $_POST["password"]; 

        $sql=("SELECT username, password FROM accounts WHERE username = '".$username."' AND  password = '".$password."'");
        $result= $conn->query($sql);

        if($result->num_rows>0)
        { 
            header("location:https://corgiorgy.com");
        }
        else
        {
            echo 'The username or password are incorrect!';
        }

    }
    $conn->close();
?>