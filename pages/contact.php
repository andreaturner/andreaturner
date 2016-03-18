<?php
    $page_title = 'Contact';
    include ('../shared/header.html');
?>
 	
		<!-- [How to contact me.] -->
		
		<<div class="header-text">Contact Me</<div>
		<p style="color: #3A01DF;font-size: 1.3em;">Paige Israel<br>
		206.715.1597<br>
		paige@paigeisrael.com</p>
	    
			<!-- [Create the form.] -->
			
	     <span id="span-contact-header-medium">Tell Me How To Contact You</span>   
		    
		    <p style="color: #3A01DF;">Please provide the following information.</p>
		    
		    <form method="post" action="pages/report.php">
			    
			<label class="label" for="fname" placeholder="First Name">First Name:</label>
			<input type="text" name="fname" id="fname"><br>
			
			<label class="label" for="lname">Last Name:</label>
			<input type="text" name="lname" id="lname"> &nbsp; &nbsp;<br>
			
			<label class="label" for="phone">Phone Number:</label>
			<input type="text" name="phone" id="phone"><br>
			
			<label class="label-email" for="email">Email Address:</label>
			<input type="text" name="email" id="email" size="50"><br>
			
			<div class="submit">
			<input id="mySubmit" type="submit" value="Contact Me!">
			
		    </form>
	    </div>
    </body>
        
</html>