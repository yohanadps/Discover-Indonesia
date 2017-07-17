<!DOCTYPE html>

<head>
    <title>Discover Indonesia | Experiences</title>
    <?php include "layout/header_rel.php"; ?>
    <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Discover Indonesia | Experiences</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Image Accordion with CSS3" />
        <meta name="keywords" content="accordion, images, slideshow, css3, css-only, web development, component, tutorial" />
        <meta name="author" content="Ring Wing for Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/experiences_demo.css" />
        <link rel="stylesheet" type="text/css" href="css/experiences_style.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="js/experiences.js"></script> 
</head>
<body>
    <?php include "layout/navigation.php";?>
    
    <?php include "layout/sidebar.php";?>
        <div class="container">
		
			<header>
			
				<h1>Top Experiences <span>ENJOY IT!</span></h1>
				<h2>Here are our Top picks of what to see, do and experience in Indonesia. </h2>
				
				<div class="support-note"><!-- let's check browser support with modernizr -->
					<!--span class="no-cssanimations">CSS animations are not supported in your browser</span-->
					<!--span class="no-csstransforms">CSS transforms are not supported in your browser</span-->
					<!--span class="no-csstransforms3d">CSS 3D transforms are not supported in your browser</span-->
					<span class="no-csstransitions">CSS transitions are not supported in your browser</span>
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>
				
			</header>
			
			<section class="main">
			
				<div class="ia-container">
				
					<figure>
						<img src="img/place_monas.jpg" alt="image01" style="width:580px;height:460px"/>
						<input type="radio" name="radio-set" checked="checked"/>
						<figcaption><span><a href="Places/places_monas.php">Tugu Monas</a></span></figcaption>
						
						<figure>
							<img src="img/place_malioboro.jpg" alt="image02"style="width:580px;height:460px"/ />
							<input type="radio" name="radio-set" />
							<figcaption><span><a href="Places/places_malioboro.php">Malioboro</a></span></figcaption>
							
							<figure>
								<img src="img/place_kepri.jpg" alt="image03"style="width:580px;height:460px"/ />
								<input type="radio" name="radio-set" />
								<figcaption><span><a href="Places/places_kep_seribu.php">Kepulauan Seribu</a></span></figcaption>
								
								<figure>
									<img src="img/place_ijen.jpg" alt="image04"style="width:580px;height:460px"/ />
									<input type="radio" name="radio-set" />
									<figcaption><span><a href="Places/places_ijen.php">Kawah Ijen</a></span></figcaption>
									
									<figure>
										<img src="img/place_borobudur.jpg" alt="image05" style="width:580px;height:460px"//>
										<input type="radio" name="radio-set" />
										<figcaption><span><a href="Places/places_borobudur.php">Candi Borobudhur</a></span></figcaption>
										
										<figure>
											<img src="img/place_bunaken.jpg" alt="image06"style="width:580px;height:460px"/ />
											<input type="radio" name="radio-set" />
											<figcaption><span><a href="Places/places_bunaken.php">Taman Laut Bunaken</a></span></figcaption>
								
											<figure>
												<img src="img/place_gilitrawangan.jpg" alt="image07"style="width:580px;height:460px"/ />
												<input type="radio" name="radio-set" />
												<figcaption><span><a href="Places/places_gilitrawangan.php">Gili Trawangan</a></span></figcaption>											

												<figure>
													<img src="img/place_gunung_rinjani.jpg" alt="image08" style="width:580px;height:460px"//>
													<input id="ia-selector-last" type="radio" name="radio-set" />
													<figcaption><span><a href="Places/places_gunung_rinjani.php">Gunung Rinjani</a></span></figcaption>
												</figure>
												
											</figure>
								
										</figure>	
											
									</figure>	
										
								</figure>
									
							</figure>
							
						</figure>
						
					</figure>
					
				</div><!-- ia-container -->
				
			</section>
			
        </div>
    <?php include "layout/footer.php"; ?>
</body>
<html>