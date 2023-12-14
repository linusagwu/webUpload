<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set your email address where you want to receive emails.
    $recipient_email = "your_email@example.com";

    // Get the form fields' values
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Prepare the email content
    $subject = "New Contact Form Submission";
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Message:\n$message\n";

    // Set the email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($recipient_email, $subject, $email_content, $headers)) {
        echo "Thank you! Your message has been sent successfully.";
    } else {
        echo "Oops! Something went wrong, and we couldn't send your message.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styels/Plogin.css">
    <script src="https://kit.fontawesome.com/8bd06179dd.js" crossorigin="anonymous"></script>
    <title>Contact Form</title>
</head>
<style>
    .wrapper
  {

    width: 400px;
    height: 400px;
   
  }
</style>

<body >
    <header>
        <a href="index.html"><img src="https://cdn3.sportngin.com/attachments/photo/4608/4432/CUW_Logo_large.jpg" width="100px",  
        alt="FALCON-FITNESS PAL" title="DB" > </a>

    </header>

<div class="wrapper">
    
    
    <div class="form_box register">
    <h1>Contact Us</h1>

    

    <form action="send_email.php" method="post">
        <div class="input_box">
        <span class="icon"><i class="fa-solid fa-user"></i></span>
        <input type="text" id="name" name="name" required><br>
        <label for="name">Name:</label>
        </div>
        
        <div class="input_box">
        <span class="icon"><i class="fa-solid fa-envelope"></i></span>
        <input type="email" id="email" name="email" required><br>
        <label for="email">Email:</label>
        </div>
        
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br>
        <br>
      
        <button type="submit" value="Send" class="btn">Send</button>
    </form>
    </div>
</div> 

</body>
</html>