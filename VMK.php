<html>
<head>
<link rel="stylesheet" href="contact.css" type="text/css">
</head>
<body>

<div class="container">  
  <form id="contact" action="" method="post">
    <h3>Contact Form (VMK)</h3>
    <h4>Contact us today, and get a reply with in 24 hours!</h4>
    <fieldset>
      <input placeholder="Your name" name="name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" name="email" type="email" tabindex="2" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (Not Required)" type="tel" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" tabindex="3">
    </fieldset>
    <!--   <fieldset>
   <input placeholder="Your Web Site starts with http://" type="url" tabindex="4" required>
    </fieldset> -->
    <fieldset>
      <textarea placeholder="Type your Message Here...." name="subject" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
 
  
</div>

<?php

$user = 'root';
$pass = '';
$db = 'testdb';

$db = new mysqli('localhost', $user, $pass, $db) or die("Unabe to connect");

if (isset($_POST['name']) && isset($_POST['email'])){
$name=$_POST['name'];
$email=$_POST['email'];
$to = 'veganismk@gmail.com';
$subject= "Help A Costumer.";


$body='
<html><body><h2>Feedback- example.com</h2>
<hr>
<p>Name:<br>' .$name. '</p>
<p>Email:<br>' .$email. '</p>
</body>
</html>'; 

// Headers
$headers = "From: " .$name." <".$email.">\r\n";
$headers .= "Reply-To: ".$email."\r\n";
$headers .= "MINE-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";


// Send
$send = mail($to, $subject, $body, $headers);

if ($send) {
echo '<br>';
echo 'Thank you for contacting us. We will be with you shortly.';}

else{
echo "An error has accured. Please try again.";
}}
?>
</body></html>