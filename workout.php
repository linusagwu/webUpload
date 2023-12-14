<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>workouts</title>
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

.dropdown_content_2
{
    display: none;
}
.hover_me:hover .dropdown_content_2
{
    position: absolute;
    display: block;
    margin-top: -55px;
    margin-left: 200px;
    background-color: #4f85e2;
}
.video-container {
        display: flex;
    }

    video {
        width: 50%; /* Each video takes up 50% of the container width */
        height: 50%;
        margin: 5px; /* Add margin for spacing between videos */
    }
</style>
<script src="filter_script.js"></script>
</head>

<body>
  <header>
    <a href="#"><img src="https://cdn3.sportngin.com/attachments/photo/4608/4432/CUW_Logo_large.jpg" 
      width="100px" alt="FALCON-FITNESS PAL" title="DB"> </a> <br>

      <div class="col_2">
        <h4>Hi! <span><?php echo $_SESSION['user_name'] ?></span></h4>
     </div>
        <button  class="button button1"  onclick="window.location.href  = 'login.php'; ">logout</button>
 </header>



  <!---------------------------------------------navigation bar start---------------------------------------------->
  <div id="work_nav"></div>
  <!---------------------------------------------navigation bar end---------------------------------------------->

  <h1>Workout Videos</h1>


<div class="video chest">
    <h2>Chest Workout </h2>
    <div class="video-container">
        <video controls width="640" height="360">
            <source src="W_videos/chest_1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <video controls width="640" height="360">
            <source src="W_videos/chest_2.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>

<div class="video back">
    <h2>Back Workout </h2>
    <div class="video-container">
    <video controls width="640" height="360">
        <source src="W_videos/back_1.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <video controls width="640" height="360">
        <source src="W_videos/back_2.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    </div>
</div>

<div class="video legs">
    <h2>Legs Workout </h2>
    <div class="video-container">
        <video controls width="640" height="360">
            <source src="W_videos/leg_1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <video controls width="640" height="360">
            <source src="W_videos/leg_2.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>

<div class="video Arm">
    <h2>Arm Workout </h2>
    <div class="video-container">
        <video controls width="640" height="360">
            <source src="W_videos/arm_1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <video controls width="640" height="360">
            <source src="W_videos/arm_2.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>

<div class="video Shoulder">
    <h2>Shoulder Workout </h2>
    <div class="video-container">
        <video controls width="640" height="360">
            <source src="W_videos/shoulder_1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <video controls width="640" height="360">
            <source src="W_videos/shoulder_2.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>

<div class="video Calisthenics">
    <h2>Calisthenics Workout </h2>
    <div class="video-container">
        <video controls width="640" height="360">
            <source src="W_videos/6_basic_moves.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <video controls width="640" height="360">
            <source src="W_videos/Chest_Without_Weights.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>

<div class="video Kettlebell_Workouts">
    <h2>Kettlebell_Workouts  </h2>
    <div class="video-container">
        <video controls width="640" height="360">
            <source src="W_videos/KETTELBELL_2.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <video controls width="640" height="360">
            <source src="W_videos/KETTLEBELL_1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>

<div class="video Resistance_Band_Workouts">
    <h2>Resistance_Band_Workouts  </h2>
    <div class="video-container">
        <video controls width="640" height="360">
            <source src="W_videos/Resistance_Band_1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <video controls width="640" height="360">
            <source src="W_videos/Resistance_Band_2.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>

<div class="video powerlifting">
    <h2>Powerlifting Workout </h2>
    <div class="video-container">
        <video controls width="640" height="360">
            <source src="W_videos/powerlift_1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <video controls width="640" height="360">
            <source src="W_videos/powerlift_2.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>

<div class="video HIIT">
    <h2>HIIT Workout </h2>
    <div class="video-container">
        <video controls width="640" height="360">
            <source src="W_videos/HIIT.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <video controls width="640" height="360">
            <source src="W_videos/Hiit_2.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>

<div class="video pilates">
    <h2>Pilates Workout </h2>
    <div class="video-container">
        <video controls width="640" height="360">
            <source src="W_videos/pilates_1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <video controls width="640" height="360">
            <source src="W_videos/Pilates_No_Equipment.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>

<div class = "video Yoga">
    <h2>Yoga Workout </h2>
    <div class="video-container">
        <video controls width="640" height="360">
            <source src="W_videos/yoga_1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <video controls width="640" height="360">
            <source src="W_videos/yoga_2.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>

<div class = "video Running">
    <h2>Running Workout </h2>
    <div class="video-container">
        <video controls width="640" height="360">
            <source src="W_videos/running_1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <video controls width="640" height="360">
            <source src="W_videos/running_2.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>

<div class="video Cycling">
    <h2>Cycling Workout </h2>
    <div class="video-container">
        <video controls width="640" height="360">
            <source src="W_videos/cycle_2.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <video controls width="640" height="360">
            <source src="W_videos/cycling_1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>

<div class="video Jump_Rope">
    <h2>Jump_Rope Workout </h2>
    <div class="video-container">
        <video controls width="640" height="360">
            <source src="W_videos/Jump_Rope_1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <video controls width="640" height="360">
            <source src="W_videos/Jump_Rope_2.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>

<div class="video Recovery">
    <h2>Recovery Workout </h2>
    <div class="video-container">
        <video controls width="640" height="360">
            <source src="W_videos/RECOVERY_1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>


  <!--------------------------------------------footer part-------------------------------------------->
  <div id="footer"></div>

  <div id="na"></div>

</body>
</html>