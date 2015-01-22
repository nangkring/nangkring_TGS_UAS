<!DOCTYPE html>
<?php
session_start();
if( isset($_SESSION['userid']) ) {
    header('location:akun.php'); 
}
require_once('connect.php');
?> 

<html>
<head>
    <title>Login Administrator</title>
    <link rel="stylesheet" type="text/css" href="index/style/login.css"/>
</head>

<body>
 
<form name="nangkring" action="proseslogin.php" method="post">
    <div class=wrap>
        <div class="head">
            Login Administrator
        </div>
        <div class="form">
            <form name="nangkring" action="akun.php" method="post">
                Username : <br/>
                <input type="text" name="userid"/>
                <br/>
                Password : <br/>
                <input type="password" name="password"/>
                <br/>
                <input type="submit" value="login" name="button"/>
            </form>
        </div>
        <div class="footer">
            copyright &copy; gembalak corporation
        </div>
    </div>
</body>
</html>
