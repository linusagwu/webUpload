<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:user_page.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styels/login.css">
    <script src="https://kit.fontawesome.com/8bd06179dd.js" crossorigin="anonymous"></script>
</head>

<body >
    <header>
        <a href="#"><img src="https://cdn3.sportngin.com/attachments/photo/4608/4432/CUW_Logo_large.jpg" width="100px",  
        alt="FALCON-FITNESS PAL" title="DB" > </a>

        <nav class="navigation">
            <button class="btnLogin_popup">Login</button> 
        </nav>
    </header>

    <!-------------------------------------Login-------------------------------------->
    <div class="wrapper">
    
    
         <div class="form_box login">
            <h2>Login to continue.</h2>
            <form action="" method="post">
            
            <?php
            if(isset($error))
            {
                foreach($error as $error)
                {
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
                 <div class="input_box">
                    <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
                
                <div class="input_box">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" name="password" required>
                    <label>password</label>
                </div>
                <div class="remember_forgot">
                    <label><input type="checkbox">
              Remember me</label>
                    <a href="#">Forget password?</a>
                </div>
                <button type="submit"  name="submit" class="btn">Login</button>
                <div class="login_register">
                    <p>Don't have an account? <a href="ex_reg.php" >Register</a></p>
                </div>
            </form>
      
    </div>
</div> 
</body>
</html>