<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="background-image: url('cuh.png');background-size: fill;background-repeat: no-repeat;background-attachment: fixed;
  background-position: center; backdrop-filter:grayscale(100%);">
</body>
</html>
<?php
session_start();
//var_dump($_SESSION);

if(!isset($_SESSION['login_name']) || isset($_POST['logout']))
{
    
    session_destroy();
    header("location:login.php");
    exit();
}


require_once("./connection.php");
//$result=$conn->query("select * from Mess_Student_Info where id=$_SESSION[id]");
$sql = "SELECT * FROM `Mess_Student_Info` where id='$_SESSION[id]'";
$result=mysqli_query($conn,$sql);
while($data=mysqli_fetch_assoc($result))
{
      $name=$data['name'];
      $card=$data['card'];
      
//    echo "<br><p><b><span style='float:right;'>Username : ".$data['name']."</span>";
//    echo "<br><p>Room No. : ".$data['card'];
//    echo "<br><p>Hostel : ".$data['hostel'];
//    echo "<br><p>Department : ".$data['department'];
//    echo "<br><p>Email : ".$data['email'];
//    echo "<br><p>Mobile : ".$data['mobile'];
//    echo "</b><br><form method='post' action='mail.php'>";
//    echo "<input type='hidden' value='$data[id]' name='id'>";
}
  
  echo "<form method='post' action='".htmlentities($_SERVER['PHP_SELF'])."'>";
    
    echo "<img src='cuh.png' style='float:left;height:50px;width:50px;margin-right:10px;'> CUH MESS";
    echo "<input type='submit' class='btn btn-outline-info' name='logout' value=\"Log Out\" style='float:right;width:70px;height:30px;'><br><br>";
    echo "<span style='color:green;float:right;'>Welcome ".$name."</span>";
    echo "</form>";
    echo "<div style='margin-top:10%;text-align:center;'>";
    echo "<form method='post' action='wantleave.php'>";
//    echo "<input type='submit' name='going' value='Going Home'>";
    echo "<button type='submit' class='btn btn-primary btn-lg'>Want Leave</button><p>";
    echo "<button type='submit' class='btn btn-primary btn-lg' style='margin-top:5%;'>Edit Your Last Entry</button>";
    echo "</form>";
    echo "</div>";


?>