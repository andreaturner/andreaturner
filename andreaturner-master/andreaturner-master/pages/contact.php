<?php
    $page_title = 'Contact';
    include ('../shared/header.html');
	 
?>

<?php
$errors = [];
$missing = [];
if (isset($_POST['send'])) {
    $expected = ['name', 'email', 'comments'];
    $required = ['name', 'comments'];
    $to = 'Paige Israel <paige@paigeisrael.com>';
    $subject = 'Feedback from contact form.';
    $headers = [];
    $headers[] = 'From: paige@paigeisrael.com';
    $headers[] = 'Cc: tostrander@greenriver.edu';
    $headers[] = 'Content-type: text/plain; charset=utf-8';
    $authorized = '-fpaige@paigeisrael.com';
    require 'process_mail.php';
    if ($mailSent) {
        header('Location: thanks.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Message body</title>
        <link href="styles.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <!-- [How to contact me.] -->
		
		<div class="header-text-blue">
		  Contact Me
		</div>
		<br>
		
		<div class="header-medium-text-green">
		  Paige Israel<br>
		  206.715.1597<br>
		  paige@paigeisrael.com</p>
	    </div>
		
			<!-- [Create the form.] -->
    <?php
        if ($_POST && ($suspect || isset($errors['mailfail']))) :
    ?>

        <p class="warning">Sorry, we couldn't send your mail.</p>
    
    <?php
        elseif ($errors || $missing) :
    ?>
    
        <p class="warning">Please fix the item(s) indicated.</p>
    
    <?php
        endif;
    ?>
    
        <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
        <p>
				
		      <label class="label" for="fname">First Name:
					 
    <?php
        if ($missing && in_array('fname', $missing)) :
    ?>
    
        <span class="warning">Please enter your first name</span>
        
    <?php
        endif;
    ?>

        </label>
            <input type="text" name="fname" id="fname">
        
    <?php
        if ($errors || $missing) {
            echo 'value="' . htmlentities($fname) . '"';
        }
    ?>
		  </p>
	 
		  <p>
	
		  <label class="label" for="lname">Last Name:
        
    <?php
        if ($missing && in_array('lname', $missing)) :
    ?>
    
        <span class="warning">Please enter your last name</span>
        
    <?php
        endif;
    ?>
		 
        </label>
            <input type="text" name="lname" id="lname">
        
    <?php
        if ($errors || $missing) {
            echo 'value="' . htmlentities($lname) . '"';
        }
    ?>
	 
        </p>
		  
        <p>
            <label class="label" for="email">Email:
        
    <?php
        if ($missing && in_array('email', $missing)) :
    ?>
	 
	 <p>
    <span class="warning">Please enter your email address</span>
    
    <?php
        elseif (isset($errors['email'])) :
    ?>
     
        <span class="warning">Invalid email address</span>
        
    <?php
        endif;
    ?>
            </label>
                <input type="email" name="email" id="email" size="50">
               
    <?php
        if ($errors || $missing) {
            echo 'value="' . htmlentities($email) . '"';
        }
    ?>
        
        </p>
        <p>
            <label class="label textarea" for="comments" rows="6" cols="50">Comments:
            
        <?php
            if ($missing && in_array('comments', $missing)) :
        ?>
        
            <span class="warning">You forgot to add any comments</span>
            
        <?php
            endif;
        ?>
        
            </label>
                <textarea name="comments" id="comments">
        
        <?php
            if ($errors || $missing) {
                echo htmlentities($comments);
            }
        ?>
                </textarea>
        </p>
        <p>
            <input class="submit" type="submit" name="send" id="send" value="Submit">
        </p>
        
        </form>
	
    </body>
</html>