<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $user = strlen($username);
        $pass = strlen($password);
        $x = true;

        if($user>7){
            echo "<script>alert('Username Lebih dari 7');</script>";
            $x = false;
        }
        if (!preg_match("/[A-Z]/", $password) ) {
            echo "<script>alert('password kapital');</script>";
            $x = false;
        }
        if (!preg_match("/[a-z]/", $password)) {
            echo "<script>alert('password kecil');</script>";
            $x = false;
        }
    
        if (!preg_match("/[^a-zA-Z\d]/", $password)) {
            echo "<script>alert('password special character');</script>";
            $x = false;
        }
    
        if (!preg_match("/[0-9]/", $password)) {
            echo "<script>alert('password digit');</script>";
            $x = false;
        }
        if($pass<10){
            echo "<script>alert('password lebih dari 10');</script>";
            $x = false;
        }
        if( $x == true ){
            echo "<script>alert('berhasil');</script>";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 2</title>
</head>
<body>
<form action="" method="post">
    <table border="0" align="center">
        <tr>
        <td colspan="3"align="center"><h3>Login</h3></td>
        </tr>
        <tr>
        <td align="right">Username : </td>
        <td><input name="username" type="text" placeholder="Username"></td>
        </tr>
        <tr>
        <td align="right">Password : </td>
        <td><input name="password" type="password" placeholder="Password" ></td>
        </tr>
        <tr>
        <td> </td>
        <td><input name="Submit" type="submit" value="Login"></td>
        </tr>
    </table>
</form>
</body>
</html>