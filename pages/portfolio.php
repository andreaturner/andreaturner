<?php
    $page_title = 'Portfolio';
    include ('../shared/header.html');
	 
?>
<!-- [Sites I've built and/or maintain] -->

<div class="header-text-blue">
    Portfolio
</div>
            
<div id="portfolio">
        
     <h3>The Quilting Bee</h3>
        <div>
           <a href="http://ned.highline.edu/~paigekeys/Portfolio/QuiltingBee/Quilt/index.html">
           <img src="../images/quiltingBee-100x130.png" width="100" height="130" alt="Quilting Bee Image"></a> 
        </div>
        
    <h3>Community Micro Finance</h3>
        <div>
            <a href="http://ned.highline.edu/~paigekeys/Portfolio/CMF/index.html">
            <img src="../images/CMF-101x84.png" width="101" height="84" alt="Community Micro Finance Logo"></a>
        </div>
        
    <h3>Wordman Enterprise (in progress)</h3>
        <div>
            <a href="http://paigeisrael.com/sites/wordman/pages/books-series.php">
            <img src="../images/iftmus-100x147.jpg" width="100" height="147" alt="Iftmus Image"></a>
        </div>
        
    <h3>West Seattle Skin Care</h3>
        <div>
            <a href="http://westseattleskincare.com">
            <img src="../images/westseattleskincare-100x82.jpg" width="100" height="82" alt="West Seattle Skin Care Image"></a>
        </div>
        
    <h3>Kent Food Bank</h3>
        <div>
            <a href="http://thunderbirds.greenrivertech.net/index.php">
            <img src="../images/kfb-100x112.png" width="100" height="112" alt="Kent Food Bank Logo"</a>
        </div>    
</div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <!-- jquery stylesheet -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    
    
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  
		
		<!-- jQuery UI library -->
		<script src="../scripts/jquery-ui/jquery-ui.min.js"></script>
		
		<script type="text/javascript">
			//shorthand version - everybody uses this one in real life
			$(function(){
				$( "#portfolio" ).accordion({
					heightStyle: 'content',
					active: false,
					collapsible: true
				});
			});			
			
		</script>        