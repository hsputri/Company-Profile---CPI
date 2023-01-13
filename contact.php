<?php
   if (isset($_POST['submit'])) {
		// echo "ok"; die();
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		
		$to = 'e.adi@ciptaprimainstrumindo.com'; 
		$body = "From: $name\n E-Mail: $email\n Message:\n $message";
		$headers = "From:" . $email;    
    
        ini_set( 'display_errors', 1 );   
        error_reporting( E_ALL );
        if(mail($to,$subject,$body, $headers)){
            echo '<script>alert("The email has been sent successfully.");window.location.replace("index.html#contact");</script>';
        }else{
            echo '<script>alert("Sorry there was an error sending your message. Please try again later");window.location.replace("index.html#contact");</script>';
        }
   }
?>