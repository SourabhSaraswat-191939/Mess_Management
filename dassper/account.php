<?php
$USERNAME = addslashes($_POST['username']);
$PASSWORD = $_POST['password'];
$conn=new mysqli('localhost','root',"",'Mess_Project');
$sql = "SELECT * FROM `Mess_Student_Info` where `name`='$USERNAME'";
//if($sql==true)
//{
//    echo "yes";
//}
$result=$conn->query($sql);

//var_dump($conn,$record);
if($result)
{
    
    $record= mysqli_fetch_assoc($result);
    if(isset($record))
    {
        if($record['pass']==$PASSWORD)
            {
                        echo @$record[id];
                        echo "SUCCESSFULLY LOGGED IN";
                        session_start();
                        echo "<form method='post' action='home.php'><input type='text' name='id' value='".$record[id]."'></form>";
                        $_SESSION['id'] = $record[id];
                        $_SESSION['login_name']=$USERNAME;
                        $_SESSION['login_password']=$PASSWORD;  
//                        var_dump($_SESSION);
                        header("location:home.php");

            }
        else
        {
            echo "Enter Correct Username Or Password";
        }
    }
    else
    {
        echo "Sign up please";
    }
}
else
{
    echo "Error occured";
}







//$name=mysqli_fetch_assoc($record);
//if($USERNAME = $name['Username'])
//{
//    if($PASSWORD == $name['Password'])
//    {
//        var_dump($_SESSION);
////            header('Location:manage.php');  
//    }
//    else 
//    {
//    echo "INCORRECT USERNAME OR PASSWORD";
//    }
//}
//else 
//{
//    echo "INCORRECT USERNAME OR PASSWORD";
//}
//while($name=mysqli_fetch_assoc($record)){
//    echo $name['Username'];
//    echo $name['Password'];
//}

// not working
//if(isset($_POST ['username'])){
//    $uname=addslashes($_POST['username']);
//    $password=addslashes($_POST['password']);
//    $sql = addslashes("select * from user where Username='".$uname."'AND Password='".$password "'");
//    $result = mysql_query($sql);
//    
//    if(mysql_num_rows($result)==1){
//        echo "you have successfuly logged in";
//    }
//    else{
//        echo "you had entered incorect id or password";
//        exit();
//    }
//}
?>
