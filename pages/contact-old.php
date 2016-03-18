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
		    
		  <form method="post" action="pages/report.php">
		      
			<label class="label" class="required" for="fname" placeholder="First Name" required>First Name:</label>
			<input type="text" name="fname" id="fname" size="20"><br><br>
			
			<label class="label" for="lname" placeholder="Last Name" required>Last Name:</label>
			<input type="text" name="lname" id="lname" size="20"> &nbsp; &nbsp;<br><br>
			
			<label class="label" for="phone" placeholder="Phone Number">Phone Number:</label>
			<input type="text" name="phone" id="phone" size="20"><br><br>
			
			<label class="label" for="email" placeholder="Email" required>Email Address:</label>
			<input type="text" name="email" id="email" size="50"><br><br>
								
			<div class="submit">
			<input id="mySubmit" type="submit" value="Contact Me!">
			
		    </form>
	    </div>
    </body>
        
</html>