<?php
  // require_once('recaptchalib.php');
  // $privatekey = "6LfjbfkSAAAAAGCt8vdzHWIHEOY5amq5K6Kyrrjs";
  // $resp = recaptcha_check_answer ($privatekey,
  //                               $_SERVER["REMOTE_ADDR"],
  //                               $_POST["recaptcha_challenge_field"],
  //                               $_POST["recaptcha_response_field"]);

  // if (!$resp->is_valid) {
  //   // What happens when the CAPTCHA was entered incorrectly
  //   die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
  //        "(reCAPTCHA said: " . $resp->error . ")");
  // } else {
    // Your code here to handle a successful verification
    	$firstname = htmlspecialchars($_POST['fullname']);
	    $email = htmlspecialchars($_POST['email']);
	    $message = htmlspecialchars($_POST['message']);
	                
	    $body = "The Relish Group \n " .
	        "From: " . $name.
	        "Email: " . $email .
	        "Message: " . $message;
	    

	    #mail("basil.begonia@gmail.com", "New Geekshirt Order [".$firstname." ".$lastname."]", $body);
	    mail("jandanbel@gmail.com", "[CompSAt Website Contact Form]", $body);
	    // header ("Location: thanks.php");
  }
    
?>