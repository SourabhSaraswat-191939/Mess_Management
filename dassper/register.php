<?php
       
require_once("./connection.php");
    if(isset($_POST['submit']))
    {
        $name = addslashes($_POST['name']);
        $card = $_POST['card'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $department = $_POST['department'];
        $hostel = $_POST['hostel'];
        $folder = $name.".png";
        $pass = $_POST['pass'];
        $re_pass = $_POST['re_pass'];
        if(isset($_FILES['cphoto']))
        { 
           $file_tmp = $_FILES['cphoto']['tmp_name'];
           if(! move_uploaded_file($file_tmp,"UploadedCard/".$folder))
           {
                echo 'Failed To Uplaod Image. Please try again';
            }
        }
        if($pass != $re_pass)
        {
            echo "Re-Entered Password Not Matching with Enterd Password.";
        }
        
        $querry="select * from Mess_Student_Info where `mobile`=$mobile OR `name`=$card";
        $result=$conn->query($querry);
        if($result)
        {
            
            $record=mysqli_fetch_array($result);
              if(@count('$record')==0 || $record==null)
            {   
//                if(count('$mobile')!=10)
//                {   
//                    echo "Please Enter Valid Digit Mobile Number.";
//                    exit();
//                }
                $que = "INSERT INTO `Mess_Student_Info` (`name`, `email`, `mobile`, `card`, `department`, `cphoto`,`hostel`, `pass`) VALUES ('$name','$email',$mobile,$card,'$department','$folder','$hostel','$pass')";
                $press=$conn->query($que);
                if(!$press)
                {
                    echo "Not submitted please try again later";
    //                var_dump($conn);
                }
                else
                {
                echo "Successfuly Submitted";
                }
            }
            else
            {
                echo "User Already Registered";
            }
        }
        else
        {
            echo "Invalid inputs";
        }
    }

        
        $conn->close();
?>