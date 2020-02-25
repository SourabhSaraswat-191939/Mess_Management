<?php
session_start();
if(!isset($_SESSION['login_name']) || isset($_POST['logout']))
{
    
    session_destroy();
    header("location:login.php");
    exit();
}
require_once("./connection.php");
$sql = "SELECT * FROM `Mess_Student_Info` where id='$_SESSION[id]'";
$result=mysqli_query($conn,$sql);
while($data=mysqli_fetch_assoc($result))
{
      $name=$data['name'];
      $card=$data['card'];
}
  echo "<form method='post' action='".htmlentities($_SERVER['PHP_SELF'])."'>";
    
    echo "<img src='cuh.png' style='float:left;height:50px;width:50px;margin-right:10px;'><b><i>CUH MESS</i></b>";
    echo "<input type='submit' class='btn btn-outline-info' name='logout' value=\"Log Out\" style='float:right;width:70px;height:30px;'><br><br>";
    echo "<span style='color:green;float:right;'>Welcome ".$name."</span>";

echo "</form>";    

if(isset($_POST['submit']))
{
    echo "Hello";
    require_once("./connection.php");
}


?>




<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        tr{
            height: 100px;
        }
        input {
            width: 200px;
            height:30px;
            padding: 10%;
        }
        select{
            width: 200px;
            height:30px;
        }
        
    </style>
</head>
<body>
    <form action ="?" method="post">
<div>
<table style="margin-left:35%;" >
             
             <tr>
                 <td>From :</td>
                 <td><input type="date" name="from"></td>
             </tr>
             <tr>
                 <td>To:</td>
                 <td><input type="date" name="to"></td>
             </tr>
             <tr>
                 <td>Number of breakfast :</td>
                 <td><select name="breakfast">
                     <option value=" "> SELECT</option>
                         <option value="0">0</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
                         <option value="4">4</option>
                 </select></td>
             </tr>
             <tr>
                 <td>Number of lunch :</td>
                 <td><select name="lunch">
                     <option value=" "> SELECT</option>
                         <option value="0">0</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
                         <option value="4">4</option>
                 </select></td> 
 
                 
             </tr>
             <tr>
                 <td>Number of breakfast :</td>
                 <td><select name="breakfast">
                     <option value=" "> SELECT</option>
                         <option value="0">0</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
                         <option value="4">4</option>
                 </select></td>
             </tr>
            
             <tr> 
                 <td><input type="submit" style="padding-bottom:20%;margin-left:50%" class='btn btn-primary btn-lg'  name="submit" value="Submit"></td>
             </tr>

</table>
</div>
</form>


</body>
</html>