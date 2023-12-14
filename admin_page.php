<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name']))
{
   header('location:login_form.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>
   <link rel= "stylesheet" href="styels/container_style.css">
<link rel= "stylesheet" href="styels/footer_style.css">
<link rel= "stylesheet" href="styels/background_video.css">

<script src="https://kit.fontawesome.com/8bd06179dd.js" crossorigin="anonymous"></script>
<script src="load_script.js" defer></script>
<style>
   .button
{
  float:right;
}
</style>
<script src="filter_script.js"></script>
</head>
<body>

<header>
    <a href="#"><img src="https://cdn3.sportngin.com/attachments/photo/4608/4432/CUW_Logo_large.jpg"
      width="100px" alt="FALCON-FITNESS PAL" title="DB"> </a> <br>

      <div class="col_2">
        <h4>welcome, <span>Coach <?php echo $_SESSION['admin_name'] ?></span></h4>
        
     </div>
        <button  class="button button1"  onclick="window.location.href  = 'login.php'; ">logout</button>
 </header>

  <!---------------------------------------------navigation bar start---------------------------------------------->
  <div id="work_nav"></div>
  <!---------------------------------------------navigation bar end---------------------------------------------->
  <h2>Upload a File</h2>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload File" name="submit">
    </form>
<!---------------------------------------------second try---------------------------------------------->
    <form class="" action="" method="post" autocomplete= "off" enctype="multipart/form-data">
      <label for="name">Name : </label>
      <input type="text" name="name" id = "name" required value=""> <br>
      <label for="image">Image</label>
      <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value=""> <br> <br>
      <input type="submit" value="Upload File" name="submit">
    </form>

    <br>
<a href="data.php"> Data</a>




  <!--------------------------------------------footer part-------------------------------------------->
  <div id="footer"></div>

  



</body>
</html>