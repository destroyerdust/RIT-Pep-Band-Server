<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

	<head>
		<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width">
	  	<meta name="robots" content="noindex, nofollow" />
	  	<title>RIT Pepband Resource Center</title>
	  	<link rel="shortcut icon" href="/favicon.ico" />

    	<link rel="stylesheet" href="css/foundation.css">
  		<link rel="stylesheet" href="css/pepband.css">
  

  		<script src="js/vendor/custom.modernizr.js"></script>
	</head>

	<!-- Body -->
	<body>
	    <!-- Necessary for sticky footer -->
	    <div id="wrap">
	        <div id="main">

	        	<!-- Header -->
				<div id="header">
	                <div class="row">
	                    <div class="large-12 columns">
	                        <a href="index.html"><img src="media/banner.jpg" alt="RIT Pep Band Resource Center" height="120" width="750"></a>
	                    </div>
	                </div>
	            </div>

	            <div class="row">
					<div class="large-2 columns">	
						<!-- Navigation -->
						<?php 
							$root = realpath($_SERVER["DOCUMENT_ROOT"]);
							include($root . "/navigation.php"); ?>
					</div>

					<!-- Main Content -->
					<div class="large-10 columns">
						<?php
							$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
							if (isset($_GET['id']))
							{
								$id = $_GET['id'];
								if ($id == "") 
								{
									include($root . "/calendar.php");
								}
								
								elseif (($id == "minutes" || $id == "documents") && file_exists("docs.php"))
								{
									include($root . "/docs.php");
								}
								
								elseif (file_exists($id . ".php"))
								{
									include($root . "/" . $id . ".php");
								}
								
								else
								{
									include($root . "/notfound.php");
								}
							}
							
							else 
							{
								include($root . "/calendar.php");
							}
						?>
					</div>
				</div>
			</div> <!-- main -->
		</div><!-- wrap -->
		
		<?php 
			$root = realpath($_SERVER["DOCUMENT_ROOT"]);
			include($root . "/footer.php"); 
		?>

		 <script>
	  		document.write('<script src=' +
	  		('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
	  		'.js><\/script>')
	  		</script>
	  
	  	<script src="js/foundation.min.js"></script>
	  	<!--
		  
	  	<script src="js/foundation/foundation.js"></script>
	  
	  	<script src="js/foundation/foundation.alerts.js"></script>
	  
	  	<script src="js/foundation/foundation.clearing.js"></script>
	  
	  	<script src="js/foundation/foundation.cookie.js"></script>
	  
	  	<script src="js/foundation/foundation.dropdown.js"></script>
	  
	  	<script src="js/foundation/foundation.forms.js"></script>
	  
	  	<script src="js/foundation/foundation.joyride.js"></script>
	  
	  	<script src="js/foundation/foundation.magellan.js"></script>
	  
	  	<script src="js/foundation/foundation.orbit.js"></script>
	  
	  	<script src="js/foundation/foundation.reveal.js"></script>
	  
	  	<script src="js/foundation/foundation.section.js"></script>
	  
	  	<script src="js/foundation/foundation.tooltips.js"></script>
	  
	  	<script src="js/foundation/foundation.topbar.js"></script>
	  
	  	<script src="js/foundation/foundation.interchange.js"></script>
	  
	  	<script src="js/foundation/foundation.placeholder.js"></script>
	  
	  	<script src="js/foundation/foundation.abide.js"></script>
	  
	  	-->
	  
	  	<script>
	  	  $(document).foundation();
	  	</script>
	</body>
</html>