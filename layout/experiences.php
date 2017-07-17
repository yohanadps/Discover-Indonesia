<!DOCTYPE html>

<head>
    <title>Discover Indonesia | Experiences</title>
    <?php include "layout/header_rel.php"; ?>
    <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Image Accordion with CSS3" />
        <meta name="keywords" content="accordion, images, slideshow, css3, css-only, web development, component, tutorial" />
        <meta name="author" content="Ring Wing for Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" hrefs="css/experiences_demo.css" />
        <link rel="stylesheet" type="text/css" hrefs="css/experiences_style.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="js/experiences.js"></script> 
</head>
<body>
    <?php include "layout/navigation.php";?>
    
    <?php include "layout/sidebar.php";?>
    <div class="main-bar">
     <div class="container">
			<!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="http://tympanus.net/Tutorials/FullscreenSlitSlider/">
                    <strong>&laquo; Previous Demo: </strong>Fullscreen Slit Slider
                </a>
                <span class="right">
					<a href="http://www.behance.net/gallery/Laquarelle/433242">Images by Andrey &amp; Lili</a>
                    <a href="http://tympanus.net/codrops/2012/06/06/image-accordion-with-css3/">
                        <strong>Back to the Codrops Article</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
			
			<header>
			
				<h1>Image Accordion <span>with CSS3</span></h1>
				<h2>A css-only image accordion with "click" events.</h2>
				
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
						<img src="img/festival_isen.jpg" alt="image01" style="width:335px;height:480px />
						<input type="radio" name="radio-set" checked="checked"/>
						<figcaption><span>True Colors</span></figcaption>
						
						<figure>
							<img src="img/festival_bintan.jpg" alt="image02" style="width:335px;height:480px />
							<input type="radio" name="radio-set" />
							<figcaption><span>Honest Light</span></figcaption>
							
							<figure>
								<img src="img/festival_jailolo.jpg" alt="image03" style="width:335px;height:480px/>
								<input type="radio" name="radio-set" />
								<figcaption><span>Silent Serenity</span></figcaption>
								
								<figure>
									<img src="img/festival_jfff.jpg" alt="image04" style="width:335px;height:480px/>
									<input type="radio" name="radio-set" />
									<figcaption><span>Warm Welcome</span></figcaption>
									
									<figure>
										<img src="img/festival_layang.jpg" alt="image05" style="width:335px;height:480px/>
										<input type="radio" name="radio-set" />
										<figcaption><span>Sensible Magic</span></figcaption>
										
										<figure>
											<img src="img/festival_pagaruyung.jpg" alt="image06" style="width:335px;height:480px/>
											<input type="radio" name="radio-set" />
											<figcaption><span>Lovely Midnight</span></figcaption>
								
											<figure>
												<img src="img/festival_pasola" alt="image07" style="width:335px;height:480px/>
												<input type="radio" name="radio-set" />
												<figcaption><span>Illuminated Darkness</span></figcaption>											

												
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
    </div>
    <?php include "layout/footer.php"?>
</body>
<html>