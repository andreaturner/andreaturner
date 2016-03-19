<?php
    $page_title = 'Portfolio';
    include ('../shared/header.html');
	 
?>
<!-- [Stuff I've done....] -->
<div class="header-text-blue">
    Portfolio
</div>
            
    <div id="portfolio">
        
     <h3 style="font-weight: bold;">The Quilting Bee</h3>
        <div>
           <a href="http://ned.highline.edu/~paigekeys/Portfolio/QuiltingBee/Quilt/index.html">
           <img src="../images/quiltingBee-100x130.png" width="100" height="130" alt="Quilting Bee Image"></a> 
        </div>
        
    <h3 style="font-weight: bold;">Community Micro Finance</h3>
        <div>
            <a href="http://ned.highline.edu/~paigekeys/Portfolio/CMF/index.html">
            <img src="../images/CMF-101x84.png" width="101" height="84" alt="Community Micro Finance Logo"></a>
        </div>
        
    <h3 style="font-weight: bold;">Wordman Enterprise</h3>
        <div>
            <a href="http://paigeisrael.com/sites/wordman/pages/books-series.php">
            <img src="../images/iftmus-100x147.jpg" width="100" height="147" alt="Iftmus Image"></a>
        </div>
    <h3 style="font-weight:bold;">Kent Food Bank</h3>
            <a href="http://thunderbirds.greenrivertech.net/index.php">
            <img src="../images/kfb-100x112.png" width="100" height="112" alt="Kent Food Bank Logo"</a>
        </div>    
    
    </div>
    
        

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<!-- jquery library -->
		<script src="../scripts/jquery-1.11.3.js"></script> 
		
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