<?php

$to = 'support@getmihir.com';
$subject = ' Name: ' . $_POST['name']. " ". ' &  No:'. $_POST['phone'];

$message = $_POST['message'];

// Sending email
if(mail($to, $subject, $message)){
    echo 'Your mail has been sent successfully.';
 
} 


else{
    echo 'Unable to send email. Please try again.';

}

    

    echo"<script>
        window.location.assign('https://getmihir.com');
 </script>"

    
    


?>




<div class="contact-form">
                    <form action="mai.php" method="post">

                      
                       
                        <label>Full Name</label>
                        <input type="text" name="name" placeholder="Business Owner Name">

                        <label>Phone Number</label>
                        <input type="text" name="phone" placeholder="123 456 7890">

                        <label>Email</label>
                        <input type="email" name="info" placeholder="youraddress@email.com">

                        <label>Message</label>
                        <textarea name="message"> I'd like to learn about selling my business with TechVisor Group.
                      
                        </textarea>
                        <div class="submit">
                            <input type="submit" value="Contact Us">
                        </div>
                   
                    </form>
                </div>
