<!DOCTYPE html>
<html>

<head>


</head>

<body>
    <header id="masthead" class="site-header" role="banner">
<form action="checkuser.php" method="post">
    <table width="300" border="0" cellspacing="1" cellpading="1">
        <tr>
            <td>Username: <td>
            <td> <input type="text" name="username"></td>
        <tr>    
        <tr>
            <td>Password: <td>
            <td> <input type="password" name="password"></td>
        <tr>    
            <td>&nbsp;</td>
            <td> <input type="submit" value="Log In!"></td>
        </tr>
    </table>
</form>
</header>
<?php
require_once 'signin.php';
?>
</body>

</html>