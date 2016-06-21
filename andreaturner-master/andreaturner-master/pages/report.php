<! DOCTYPE html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Paige Israel Contact Report</title>
        <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans|Alegreya|Alegreya+SC' rel='stylesheet' type='text/css' />
        <link rel="shortcut icon" href="favicon.ico" />
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>

        <?php
             $to = 'paige.israel@yahoo.com';
             
             $name = $_POST['fname'].' '.$_POST['lname'];
             $fname = $_POST['fname'];
             $lname = $_POST['lname'];
             $phone = $_POST['phone'];
             $email = $_POST['email'];
             $other = $_POST['other'];
             
             $to = 'paige@paigeisrael.com';
             $subject = 'Paige Israel Contact Information';
             $msg = "$name . ',' .' ' .whose phone number is . $phone. ' ' needs .' ' $other. '.'";
            mail($to, $subject, $msg, 'From: .$email');
            
             echo '<h2 style="color: #3A01DF; text-align: center;">Thanks for submitting the form. I will get in touch with you soon!<h3>';
             echo '<p class="label-text">Your submitted the following information:<br>';
             echo '<p class="label-text">Your first name is '. $fname .'.<br>
             Your last name is '. $lname .'.<br>
             Your phone number is '. $phone .'.<br>
             Your email address is '. $email .'.</p>
             <p class="label-text">I can help you with...'.' '.' '.' '.' ' .$other .'</p>';
             
        ?>
        
    </body>
</html>