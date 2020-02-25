<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
	<link rel="stylesheet" href="feesform.css">
</head>
<body>
<form action='<?php echo htmlentities($_SERVER["PHP_SELF"])?>' method="post" enctype="multipart/form-data">
    <div class="wrapper">
        <div class="title">
          SIGN UP
        </div>
        <div class="form">
           <div class="inputfield">
              <label>Student Name</label>
              <input type="text" class="input" name="name">
           </div>  
           <div class="inputfield">
            <label>CARD Number</label>
            <input type="text" class="input" name="card">
         </div>  
           <div class="inputfield">
            <label>Hostel</label>
            <div class="custom_select">
              <select name="hostel">
                <option value="">Select</option>
                <option value="UG BOYS">UG BOYS</option>
                <option value="UG GIRLS">UG GIRLS</option>
                <option value="PG BOYS">PG BOYS</option>
                <option value="PG GIRLS">PG GIRLS</option>
              </select>
            </div>
         </div> 
           <div class="inputfield">
            <label>Department</label>
            <div class="custom_select">
              <select name="department">
                <option value="">Select</option>
                <option value="B.Tech">B.Tech</option>
                <option value="B.voc">B.voc</option>
                <option value="M.C.A">M.C.A</option>
                <option value="Ph.d">Ph.d</option>
                <option value="M.Sc">M.Sc</option>
              </select>
            </div>
         </div> 
            <div class="inputfield">
              <label>Email Address</label>
              <input type="text" class="input" name="email">
           </div> 
          <div class="inputfield">
              <label>Mobile Number</label>
              <input type="text" class="input" name="mobile">
           </div> 
            <div class="inputfield">
              <label>Enter Your Password</label>
              <input type="text" class="input" name="pass">
           </div>  
            <div class="inputfield">
              <label>Re-Enter Your Password</label>
              <input type="text" class="input" name="re_pass">
           </div>  
           <div class="inputfield">
              <label>CARD Photo</label>
              <input type="file" placeholder="CARD Photo" name="cphoto">
           </div> 
          <!--<div class="inputfield">
              <label>Postal Code</label>
              <input type="text" class="input">
           </div>  -->
          <div class="inputfield terms">
              <label class="check">
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
              <p>Agreed to terms and conditions</p>
           </div>
          <div class="inputfield">
              
          <input type="submit" value="Register" class="btn" name="submit"><br>
            </div>          
            
            
            
            
            <?php    require_once("./register.php"); ?>





            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
<!--
             <h1 style="text-align:center;">
                 
                 <?php
//                if(isset($_GET['msg'])) echo $_GET['msg'];
             ?>
            </h1>-->
<!--
             <h1 id="parra"></h1>
              <script type="text/javascript">
                  var i=0;
                  var text="Thank You";
                  var speed = 1;
                  function typewriter(){
                      if(i<text.length){
                          document.getElementById('parra').innerHTML += text.charAt(i);
                          i++;
                          setTimeout(typewriter,speed);
                      }
                  }
              </script>
-->
        </div>
    </div>
</form>    
	
</body>
</html>