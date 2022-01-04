<?php
$conn=new mysqli("localhost","root","2009","customers");
if($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);
$sql="SELECT id, firstname,lastname,email FROM fullnames";
$result= $conn->query($sql);
?>
<table width="300" border="1" cellspacing="1" cellpadding="1">
    <?php
    if($result->num_rows>0){
    while($row=$result->fetch_assoc()){   
    ?>
    <tr>
        <td>ID</td>
        <td><?php echo $row["id"]; ?></td>
        <td><a href="deluser.php?id=<?php echo $row["id"]?>"> Delete</a></td>
    </tr>
    <tr>
        <td>First Name</td>
        <td><?php echo $row["firstname"]; ?></td>
        <td>&nbsp</td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td><?php echo $row["lastname"]; ?></td>
        <td>&nbsp</td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo $row["email"]; ?></td>
        <td>&nbsp</td>
    </tr>
    <?php
    }
    ?>
    </table>
    <?php
}
    else
    echo "0 results";
    $conn->close();
    ?>