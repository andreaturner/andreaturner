<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Paige Israel Contact Me</title>
        <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans|Alegreya|Alegreya+SC' rel='stylesheet' type='text/css' />
        <link rel="shortcut icon" href="favicon.ico" />
        <link rel="stylesheet" href="style.css"/>
    </head>

    <body>
        
        <div class="header">
	    <img src="images/tulip-header-1200x300.jpg" width="800" height="152" alt="Tulip Header" />
            <span>Paige Israel Web Development</span>
            <span class="header-medium">Web Developer</span>
	</div>
        
        <div class="nav ul">
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="pages/about.html">About Me</a></li>
                    <li><a href="pages/portfolio.html">Portfolio</a></li>
                    <li><a href="pages/resume-and-references.html">Resume' & References</a></li>
                    <li><a href="pages/contact.html">Contact Me</a></li>
                </ul>
            </nav>
        </div>
        
            <div class="content">
		
		<!-- How to contact me. -->
		
		<span class="contact-header-medium">Contact Me</span>
		<p style="color: #3A01DF;font-size: 1.3em;">Paige Israel<br>
		206.715.1597<br>
		paige@paigeisrael.com</p>
	    
			<!--  Create the form. -->
			
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