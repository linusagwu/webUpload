<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user WHERE email = '$email' && password = '$password' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($password != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user (username, email, password, user_type) VALUES('$username','$email','$password','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styels/plogin.css">
    <script src="https://kit.fontawesome.com/8bd06179dd.js" crossorigin="anonymous"></script>
</head>

<body >
    <header>
        <a href="index.html"><img src="https://cdn3.sportngin.com/attachments/photo/4608/4432/CUW_Logo_large.jpg" width="100px",  
        alt="FALCON-FITNESS PAL" title="DB" > </a>

        <nav class="navigation">
            <button class="btnLogin_popup">Login</button> 
        </nav>
    </header>

    <!-------------------------------------Login-------------------------------------->
    <div class="wrapper">
    
    
    <div class="form_box register">
            <h2>Registration</h2>
            <form action="" method="post">
            
            <?php
            if(isset($error))
            {
                foreach($error as $error)
                {
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            }
           
            ?>
                 <div class="input_box">
                <span class="icon"><i class="fa-solid fa-user"></i></span>
                <input type="text" name="username"  required>
                <label>Username</label>
                </div>
                <div class="input_box">
                    <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" name="email"  required>
                    <label>Email</label>
                </div>
                
                <div class="input_box">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" name="password" required>
                    <label>password</label>
                </div>

                <div class="input_box">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" name="cpassword" required>
                    <label>confirm password</label>
                </div>

                <div>
                    <select name="user_type">
                        <option value="user">user</option>
                        <option value="admin">admin</option>
                    </select>
                </div> <br><br>

                <div class="remember_forgot">
                    <label><input type="checkbox">
                    agree to the terms & condidtions</label>
                </div>
                

                <button type="submit" name="submit" class="btn">Register</button>
                <div class="login_register">
                    <p>Already have an account? <a href="login.php">Login</a></p>

                </div>
            </form>
            
    </div>
</div> 

</body>
</html>