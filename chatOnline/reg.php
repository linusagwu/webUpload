<html>
<?php 
if(!session_id()){
	session_start();
}
require("config/db.php");
$title = "Register";
require("layout/head.php"); // $title = "page title"

if(checkUserSession($db) !== False){
	header("location: $_HOME_FILE");exit;
}
?>

<?php 

?>
        <?php 
		
		?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Register form</h5>
                        </div>
                        <div class="ibox-content">
                            <form id="register_form" method="POST" action="" class="form-horizontal">
								<div class="form-group"><label class="col-sm-1 control-label">First Name</label>
									<div class="col-sm-10"><input type="text" name="firstName" value="" class="form-control" autocomplete="off"></div>
								</div>
								
								<div class="form-group"><label class="col-sm-1 control-label">Last Name</label>
									<div class="col-sm-10"><input type="text" name="lastName" value="" class="form-control" autocomplete="off"></div>
								</div>
								
								<hr />
								
								<div class="form-group"><label class="col-sm-1 control-label">Username</label>
									<div class="col-sm-10"><input type="text" name="username" value="" class="form-control" autocomplete="off"></div>
								</div>

								<div class="form-group"><label class="col-sm-1 control-label">Email</label>
									<div class="col-sm-10"><input type="text" name="email" value="" class="form-control" autocomplete="off" required></div>
								</div>

								<div class="form-group"><label class="col-sm-1 control-label">Password</label>
									<div class="col-sm-10"><input type="password" name="password" value="" class="form-control"></div>
								</div>
								<div class="form-group"><label class="col-sm-1 control-label">Re-Password</label>
									<div class="col-sm-10"><input type="password" name="re_password" value="" class="form-control"></div>
								</div>


								<div>
									<select name="user_type">
										<option value="user">user</option>
										<option value="admin">admin</option>
									</select>
								</div> <br><br>
								
								<div class="form-group">
									<div class="col-sm-4 col-sm-offset-1">
										<button id="rgbtn" class="btn btn-primary" value="submit" name="submit" type="submit">Start register</button>
										<br />
										<p>Already have an account? <a href="login.php">Login now</a></p>
									</div>
								</div>
							</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
	</div>
</div>

<!-- Mainly scripts -->
<script src="assets/js/jquery-3.1.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/plugins/toastr/toastr.min.js"></script>
<script src="assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="assets/js/inspinia.js"></script>
<script src="assets/js/plugins/pace/pace.min.js"></script>

<script src="assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script>
$("#register_form").on('submit',(function(e) {
	e.preventDefault();
	$.ajax({
		url: "ajax/auth/register.php",
		type: "POST",
		data:  new FormData(this),
		dataType:  'json',
		contentType: false,
		cache: false,
		processData:false,
		beforeSend: function () {
			$('#rgbtn').text('Processing...').prop('disabled', true)
		},
		success: function(r) {
			if(r.success){
				location.reload()
			} else {
				toastr.error(r.message)
			}
		},
		error: function(){
			
			
		},
		complete: function(){
			$('#rgbtn').text('Start register').prop('disabled', false)
		}
   });
}));
</script>
</body>
</html>


<!-------------------------------------------------------------------------------------->


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