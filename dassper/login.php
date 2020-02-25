<html>
<head>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <div id="frm">
        <form method="post" action="account.php">
            Username <input type="text" name="username" required/><br> <br>
            Password <input type="password" name="password" required/>
            <input type="submit" value="Log In" id="btn">
        </form>
    </div>
</body>
</html>
<?php 

session_start();
if(isset($_SESSION['login_name'])){
    header("LOCATION:manage.php");
}
else
    session_destroy();
?>

