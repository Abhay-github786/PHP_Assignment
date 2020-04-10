<?php
      $con=mysqli_connect('localhost','root','','registration','3308') or die('not connected');
      if (isset($_POST['submit']))
      {
         $name = $_POST['name'];
         $pass = $_POST['pass'];
         $qry = "insert into login (name,pass) values ('$name','$pass')";
         $result = mysqli_query($con,$qry);
         if($result > 0)
         {
          header('location:login.php');
         }
       }      
?>
      <!DOCTYPE html>
<html>
<head>
      <title>Login</title>
</head>
<link rel="stylesheet" type="text/css" href="login.css">
<body>
          <div id="box1">
            <div id="line">ALREADY A STUDENT?LOGIN</div>
            <div id="form">
              <form action="login.php" method="post">
                  <h6></h6>
                  <input id="ft" type="text" placeholder="User Name" name="name">
                  <h6 id="pass"></h6>
                  <input id="ft1" type="password" placeholder="Password" name="pass"><br>
                  <input id="check" type="checkbox" name="stay" value="Stay_Signed_In"><p>Remember Me?</p><br>
                    
           <div id="bt"><!-- <a href="index.php"> --><input class="btn" type="submit" name="submit" value="Login">
            <div id="new"> <a href="signup.php">Forget Password?</a></div>
           </div>
            </form>
          </div>
            </div>
       </div>
       </div>
       
</body>
</html>