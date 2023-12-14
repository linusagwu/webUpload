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
    <title>user page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"-->
    <link rel="stylesheet" href="styels/footer_style.css">
    <link rel="stylesheet" href="styels/general_style.css">
    <link rel= "stylesheet" href="styels/background_video.css">
    <script src="https://kit.fontawesome.com/8bd06179dd.js" crossorigin="anonymous"></script>
    <script src= "load_script.js" defer> </script>

</head>

<body>
    <div class="Head">
        <div class="col_1">
            <a href="#"><img src="https://cdn3.sportngin.com/attachments/photo/4608/4432/CUW_Logo_large.jpg" width="100px",  
                alt="FALCON-FITNESS PAL" title="DB" > </a>

        </div>
        
        <div class="col_2">
            <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
         </div>

        <nav class="navigation">
            <button class="btnLogin_popup" onclick="window.location.href = 'login.php';">logout</button>
            
        </nav>
    </div>



   
  <!---------------------------------------------navigation bar start---------------------------------------------->
  <div id="nav"></div>
   

    <!--div class="dropdown" style="float:right;">
        <a href="login.php">jump to Workouts        </a>
        
    </div-->    
  </div>
  <hr>
  <!---------------------------------------------navigation bar end---------------------------------------------->
<!-------------------------------------Login-------------------------------------->


    <hr>
<!-------------------------------------first Bground video-------------------------------------->
    <section>
        <article>
            
            <video autoplay loop muted plays-inline width="100%">
                <source src="img/CUW1.mp4" type="video/mp4">
              </video>
            </div>
            <div class="centered">
                <h1>Trust the Process</h1><br> You Belong Here <br><br>
                
                <button>FIND YOUR DESTINATION</button>
            </div>
       
    <section>
        <article>
            <h3 style="color:DodgerBlue;">
                With over 682 athletic student participate in varsity sports at the school,<br> 
                422 of whom are male and 262 are female,</h3><h3>
                FALCON-FITNESS's comprehensive ecosystem goes beyond the idea 
                <br> of fitness to encompass all aspects of well-being.
            </h3>
        </article>
    </section>


    <section>
        <article>
      <img src="https://www.cuw.edu/life/residence-life/_assets/banner-waicu.jpg" width="100%" height="400" alt="image not avalable" title="DB"> <br>
    </article>
    </section>

    <section>
        <article>
            <img src="img/work.png" width="100%" height="400" alt="image not avalable" title="work"> 
        </article>

        <article>
            <img src="img/living.png" width="100%" height="400" alt="image not avalable" title="living"> 
        </article>
    </section>

    <section>
        <article>
            <img src="img/digital.png" width="100%" height="400" alt="image not avalable" title="digital"> 
        </article>

        <article>
            <img src="img/events.png" width="100%" height="400" alt="image not avalable" title="events"> 
        </article>
    </section>

    


<!-------------------------------------GB end-------------------------------------->

<section>
    <nav>
        <h4 >HEALTHY WAY OF LIFE</h4>
        <br>
        <p style="text-align: left;">The Healthy Way of Life entwines how we <br> live, work, play and move. Find your local <br>
         club and build connections with people.</p>
         <form>

            <button type="button" style="float: right;" onclick="window.location.href = 'Signature_Membership.html';">EXPLORE MEMBERSHIP</button>

        </form>
    </nav>
</section>

<section>
    <article>
      <p>*Costs associated with new membership and access to the outdoor pool area will increase at some Falcon_Fitness
         Athletic Clubs on or before May 3rd, 2023. Not applicable at all clubs or in all markets.
        <br>

        Membership levels, types, amenities, services, programs and their associated dues, pricing, 
        fees and/or charges may vary by location and are subject to change. Access to clubs,<br> and certain services,
         programs, amenities, or areas within a club (e.g., outdoor pools, racquet courts) may be restricted, conditioned, 
         or otherwise limited by specific terms and <br> conditions and/or subject to a separate or supplemental fee for access or 
         use (e.g., your access to the outdoor pool area may require a separate fee and be limited to your <br> designated club). See 
         club for additional terms and conditions that may apply. Always consult your physician before beginning any new exercise program.
      </p>
    </article>
  </section>

    </div>
    </div>
    <!-------------------------------------footer part-------------------------------------->
    <div id="footer"> </div>
    <!-------------------------------------footer end-------------------------------------->
    <hr>
</body>

</html>
</body>

</html>