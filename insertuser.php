<?php
$conn=new mysqli("localhost","root","2009","accounts");
if($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);


if(isset($_POST["username"], $_POST["password"])) 
    {     

        $username = $_POST["username"]; 
        $password = $_POST["password"]; 
        $rpassword= $_POST["rpassword"];
        if($password!=$rpassword)
        {
            header("location:signin.php");
        }
        else
        {
            $sql=("SELECT username FROM accounts WHERE username = '".$username."'");
            $result= $conn->query($sql);
            if($result->num_rows>0)
            {
                echo 'Existing username'; 
            }
            else
            {
            $sql=("INSERT INTO `accounts`(`username`, `password`) VALUES ('".$username."','".$password."')");
            $result= $conn->query($sql);

            echo 'Successfully registered!';
            }

        }

    }
    $conn->close();
?>