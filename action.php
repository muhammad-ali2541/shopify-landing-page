<?php 



    if($_REQUEST != "POST")

        //  header("Location: https://goflare.com/doctors-digital-marketing");







    if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email'])  && isset($_POST['message'])){

        

        $name = $_POST['name'];

        $phone = $_POST['phone'];

        $email = $_POST['email'];

        $message = $_POST['message'];

        $header =  [

            'From: ' . $email,

            'Reply-To: ' . $email,

            

        ];  // header



        $header = implode("\r\n", $header);



        $message = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";

        $to = 'info@goflare.com';

        $subject = 'Shopify Web Development Contact Form Submission';

        $mail_sent = mail($to, $subject, $message, $header);



        if($mail_sent)

            {
      
                

                header("Location: https://www.goflare.com/shopify-development-services/thankyou.html");

                

            }



        else

            echo 'Mail not sent';



    } 

   



?>