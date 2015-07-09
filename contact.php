<html lang="en" class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths no-ipad"><!--<![endif]--><head>
<!-- Author: Zhanelya Subebayeva -->    
        
        <!-- Basic Page Needs
	================================================== -->
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>PWO PROPERTIES :Contact</title>
	<meta name="description" content="PWO Properties is a UK company that seeks to lead the acquisition and disposal of Luxury properties. A company located in the City London with representatives all over the World, is helping invest in the property market with the luxury units as its preoccupation.">
        <link rel="image_src" href="images/fb-logo1.png"/>
        <meta property="og:image" content="http://www.pwoproperties.com/images/fb-logo1.png" />
       <meta name="author" content="William Omony">
<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS
	================================================== -->
	<!-- Bootstrap  -->
	<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<!-- web font  -->
	<link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet" type="text/css">
	<!-- icon fonts -->
	<link type="text/css" rel="stylesheet" href="font-icons/custom-icons/css/custom-icons.css">
	<link type="text/css" rel="stylesheet" href="font-icons/custom-icons/css/custom-icons-ie7.css">
	<!-- Custom css -->
	<link type="text/css" rel="stylesheet" href="css/layout.css">
	<link type="text/css" id="colors" rel="stylesheet" href="css/colors.css">
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
</head>
<body>
<!-- Primary Page Layout 
	================================================== -->
	<!-- globalWrapper -->
        <div id="globalWrapper" >
			<?php include 'header.php';?> 
		<!-- header -->
		<!-- ======================================= content ======================================= -->
		<section id="page" class="bg_contact">
			<section id="content">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<h4>Address:</h4>
							<address>
								<p>
									<i class="icon-location"></i><br>
                                                                        No.1 Poultry<br>
                                                                        London <br>
                                                                        United Kingdom <br>
                                                                        EC2R 8JR <br> <br>
									<i class="icon-phone"></i>&nbsp;+44 (0)7858418449 <br>
									<i class="icon-mail-alt"></i>&nbsp;<a href="mailto:sales@pwoproperties.com">sales@pwoproperties.com</a>
								</p>
							</address>
						</div>
                                            
						<form method="post" action="handle-contact.php" id="contact" role="form">
							<div class="col-sm-4"> 
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
								</div>
								<div class="form-group">
									<label for="email">Email</label>
									<input type="email" class="form-control" name="email" id="email" placeholder="Email" >
								</div>
								<div class="form-group">
									<label for="phone">Phone</label>
									<input name="phone" class="form-control" type="tel" id="phone" size="30" value="" placeholder="+44" >
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label for="comments">Message</label>
									<textarea name="comment" class="form-control" id="comments" cols="3" rows="5" placeholder="Entrer Your Message" title="Please enter your message (at least 10 characters)"></textarea>
								</div>
							
							                      
							<div class="col-md-8 col-md-offset-4">
								<div class="result"></div>
								<button name="valider" type="submit" class="btn btn-info btn-lg" id="submit"> Send</button>
							</div>
						</form>
                                            
					</div>
				</div>
				<br> <br><br> <br><br> <br><br> <br> 
			</section>
		</section>
		<!-- content -->
                
                <!-- footer -->
                <?php include 'footer.php' ?> 
		<!-- End footer -->
                
		
		</div>
			<!-- global wrapper -->
<!-- End Document 
	================================================== -->
	
</body>
</html>
