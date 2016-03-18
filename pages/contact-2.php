<?php
    $page_title = 'Contact';
    include ('../shared/header.html');
	 
?>
 	
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
			
	     <div class="header-medium-text-blue">
				Contact Form
		  </div>   
		    
		  <div class="header-small-text-blue">
			 Please provide the following information:
		  </div>
		  <br>
		    
		  <?php
        if ($_POST && ($suspect || isset($errors['mailfail']))) :
    ?>

        <p class="warning">Sorry, we couldn't send your mail.</p>
    
    <?php
        elseif ($errors || $missing) :
    ?>
    
        <p class="warning">Please fix the item(s) indicated</p>
    
    <?php
        endif;25
    ?>
    
        <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
        <p>
        <label for="name">Name:
        
    <?php
        if ($missing && in_array('name', $missing)) :
    ?>
    
        <span class="warning">Please enter your name</span>
        
    <?php
        endif;
    ?>

        </label>
            <input type="text" name="name" id="name"
        
    <?php
        if ($errors || $missing) {
            echo 'value="' . htmlentities($name) . '"';
        }
    ?>
            
        </p>
        <p>
            <label for="email">Email:
        
    <?php
        if ($missing && in_array('email', $missing)) :
    ?>

    <span class="warning">Please enter your email address</span>
    
    <?php
        elseif (isset($errors['email'])) :
    ?>
     
        <span class="warning">Invalid email address</span>
        
    <?php
        endif;
    ?>
            </label>
                <input type="email" name="email" id="email"
               
    <?php
        if ($errors || $missing) {
            echo 'value="' . htmlentities($email) . '"';
        }
    ?>
        
        </p>
        <p>
            <label for="comments">Comments:
            
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
            <input type="submit" name="send" id="send" value="Send Comments">
        </p>
        
        </form>
	    </div>
    </body>
        
</html>