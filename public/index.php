<!DOCTYPE html>

<html lang='en-US'>
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
	<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'/>
	<meta name='robots' content='all,index,follow' />

	// Facebook OG Options
	<meta property="og:url"           content="http://www.scharvey.com" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="Sam Harvey's Portfolio || Web Developer" />
	<meta property="og:description"   content="Web Developer with a passion to learn code and to become best programmer possible" />
	<meta property="og:image"         content="http://www.scharvey.com/images/meSam." />

	<title>Harvey Designs</title>
	<meta name='description' content='Sam Harveys Portfolio Website - Web Developer'/>
	<link rel='shortcut' href='images/favicon.ico' type='images/x-icon' />
	<link rel='icon' href='images/favicon.ico' type='images/x-icon' />

	<link href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' rel='stylesheet' />
	<link href='http://fonts.googleapis.com/css?family=Play:400,700' rel='stylesheet' type='text/css' />
	<link href='https://fonts.googleapis.com/css?family=Caveat' rel='stylesheet' type='text/css' />
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css' />
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css' />
	<link rel='stylesheet' type='text/css' href='sass/app.min.css' />

	<script>
		window.fbAsyncInit = function() {
			FB.init({
				appId      : '223604378169266',
				xfbml      : true,
				version    : 'v2.10'
			});
			FB.AppEvents.logPageView();

		};

		(function(d, s, id){
			 var js, fjs = d.getElementsByTagName(s)[0];
			 if (d.getElementById(id)) {return;}
			 js = d.createElement(s); js.id = id;
			 js.src = "//connect.facebook.net/en_US/sdk.js";
			 fjs.parentNode.insertBefore(js, fjs);
		 }(document, 'script', 'facebook-jssdk'));

	</script>

	<!-- <div id="fb-root"></div>
	<script>(function(d, s, id) {
		 var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=223604378169266";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script> -->

</head>

<body>

<div class='example3'>
  <nav class='navbar navbar-inverse navbar-fixed-top'>
    <div class='container'>
      <div class='navbar-header'>
        <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar3'>
          <span class='sr-only'>Toggle navigation</span>
          <span class='icon-bar'></span>
          <span class='icon-bar'></span>
          <span class='icon-bar'></span>
        </button>
        <a href='#slide1' class='navbar-brand'><img src='images/harvey_logo_white_lined.png' alt='Harvey Designs'>
        </a>
      </div>
      <div id='navbar3' class='navbar-collapse collapse'>
        <ul class='nav navbar-nav navbar-right'>
          	<li data-slide='1'><a href='#slide1'>home</a></li>
			<li data-slide='2'><a href='#slide2'>works</a></li>
			<li data-slide='3'><a href='#slide3'>skills</a></li>
			<li data-slide='4'><a href='#slide4'>me</a></li>
			<li data-slide='5'><a href='#slide5'>profile</a></li>
			<li data-slide='6'><a href='#slide6'>contacts</a></li>
        </ul>
      </div>
      <!-- .nav-collapse -->
    </div>
    <!-- .container-fluid -->
  </nav>
 </div>

<aside id='sticky-social'>
    <ul class='social-network social-circle'>
        <li><a href='https://www.behance.net/srharveyiv600c' target='_blank' class='icoBehance' title='Behance'><i class='fa fa-behance'></i></a></li>
        <li><a href='https://www.facebook.com/scharveydesigns/' target='_blank' class='icoFacebook' title='Facebook'><i class='fa fa-facebook'></i></a></li>
        <li><a href='https://www.twitter.com/s_harveyIV' target='_blank' class='icoTwitter' title='Twitter'><i class='fa fa-twitter'></i></a></li>
        <li><a href='https://www.github.com/sharvey18' target='_blank' class='icoGithub' title='Github'><i class='fa fa-github'></i></a></li>
        <li><a href='https://www.linkedin.com/in/samharveyiv' target='_blank' class='icoLinkedin' title='Linkedin'><i class='fa fa-linkedin'></i></a></li>
    </ul>
</aside>


	<!-- Main Page -->
		<div class='slide' id='slide1' data-slide='1' data-stellar-background-ratio='.1'>
			<div class='container'>
				<div class='row'>
					<div class='hidden-xs hidden-sm col-md-6 col-lg-6'>
						<div><img src='images/harveyIcon_600.png' id='iconLogo' width='350' alt='Harvey Designs Icon' class='img-responsive'></div>
					</div>
					<div class='col-md-offset-5 col-lg-offset-5'>
						<h1 id='welcomeHeader'>Welcome</h1>
						<h3 id='welcomeSubHeading'>Sam Harvey's Portfolio Website</h3>
					</div>
				</div>
				<div class='container-fluid' id='scrollButton'>
					<div class='row'>
						<div class='col-xs-offset-9 col-sm-offset-9 col-md-offset-10 col-lg-offset-10'>
							<a class='button' data-slide='2' title=''><i class='fa fa-chevron-circle-down fa-5x' aria-hidden='true'></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>





	<!-- Works Slide -->
	<!-- <div class='container'> -->
		<div class='slide' id='slide2' data-slide='2' data-stellar-background-ratio='1'>
			<div class='container'>
			<h1 class='page-header' id='headHeader'>Works</h1>
			<h1>Websites</h1>
				<div class='row'>

					<div class='col-xs-12 col-sm-12 col-md-6 col-lg-6'>
						<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
							<h3>Harvey's | Sam & Cheree</h3>
								<a href='http://harveys.scharvey.com' target='_blank' class='thumbnail'><img src='images/slide2/harveys_screenshot_4.jpg' alt='Harvey's Website' title='Harvey's Website'></a><br>
								<div
									class="fb-like"
									data-layout='button_count'
									data-href="http://harveys.scharvey.com/"
									data-share="false"
									data-width="450"
									data-show-faces="true">
								</div>
							</div>
						</div>


					<div class='col-xs-12 col-sm-12 col-md-6 col-lg-6'>
						<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
							<h3>Weather Wizard</h3>
								<a href='#' target='_blank' class='thumbnail'><img src='images/slide2/under_construction.jpg' alt='Warriors Softball Company' title='Warriors Softball Company'></a><br>
								<div
									class="fb-like"
									data-layout='button_count'
									data-href="http://weather-wizard.scharvey.com/"
									data-share="false"
									data-width="450"
									data-show-faces="true">
								</div>
						</div>
					</div>
				</div>

					<div class="row">
						<div class='col-xs-12 col-sm-12 col-md-6 col-lg-6'>
							<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
								<h3>scharvey.com</h3>
									<a href='http://scharvey.com' target='_blank' class='thumbnail'><img src='images/slide2/scharveyDesigns_screenshot.png' alt='scharvey.com' title='scharvey.com'></a><br>
									<div
										class="fb-like"
										data-layout='button_count'
										data-href="http://scharvey.com/"
										data-share="false"
										data-width="450"
										data-show-faces="true">
									</div>
							</div>
						</div>

						<div class='col-xs-12 col-sm-12 col-md-6 col-lg-6'>
							<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
								<h3>Quick Note - Coming Soon</h3>
									<a href='#' target='_blank' class='thumbnail'><img src='images/slide2/under_construction.jpg' alt='Quick Note' title='Quick Note'></a><br>
									<div
										class="fb-like"
										data-layout='button_count'
										data-href="http://quick-note.scharvey.com/"
										data-share="false"
										data-width="450"
										data-show-faces="true">
									</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class='col-xs-12 col-sm-12 col-md-6 col-lg-6'>
							<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
								<h3>Flash Cards</h3>
									<a href='#' target='_blank' class='thumbnail'><img src='images/slide2/under_construction.jpg' alt='Faith' title='Flash Cards'></a><br>
									<div
										class="fb-like"
										data-layout='button_count'
										data-href="http://flash-cards.scharvey.com/"
										data-share="false"
										data-width="450"
										data-show-faces="true">
									</div>
							</div>
						</div>

						<div class='col-xs-12 col-sm-12 col-md-6 col-lg-6'>
							<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
								<h3>JAshleyRemodeling.com</h3>
									<a href='http://jashleyremodeling.com/' target='_blank' class='thumbnail'><img src='images/slide2/JAshley_ScreenShot.jpg' alt='JAshleyRemodeling' title='JAshleyRemodeling'></a><br>
									<div
										class="fb-like"
										data-layout='button_count'
										data-href="http://jashleyremodeling.com/"
										data-share="false"
										data-width="450"
										data-show-faces="true">
									</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class='col-xs-12 col-sm-12 col-md-6 col-lg-6'>
							<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
								<h3>City Speeder CSS Animation</h3>
									<a href='http://city-speeder.scharvey.com/' target='_blank' class='thumbnail'><img src='images/slide2/city_speeder_animation.jpg' alt='City Speeder' title='City Speeder'></a><br>
									<div
										class="fb-like"
										data-layout='button_count'
										data-href="http://city-speeder.scharvey.com/"
										data-share="false"
										data-width="450"
										data-show-faces="true">
									</div>
							</div>
						</div>

						<div class='col-xs-12 col-sm-12 col-md-6 col-lg-6'>
							<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
								<h3>Tic-Tac-Toe</h3>
									<a href='http://tic-tac-toe.scharvey.com/' target='_blank' class='thumbnail'><img src='images/slide2/tic-tac-toe_screenShot.jpg' alt='Tic-Tac-Toe' title='Tic-Tac-Toe'></a><br>
									<div
										class="fb-like"
										data-layout='button_count'
										data-href="http://tic-tac-toe.scharvey.com/"
										data-share="false"
										data-width="450"
										data-show-faces="true">
									</div>
							</div>
						</div>
					</div><!-- end row-->

					<div class="row">
					<div class='col-xs-12 col-sm-12 col-md-6 col-lg-6'>
						<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
							<h3>Sports App</h3>
								<a href='#' target='_blank' class='thumbnail'><img src='images/slide2/under_construction.jpg' alt='Dealership Finder' title='Sports App'></a><br>
								<div
									class="fb-like"
									data-layout='button_count'
									data-href="http://scharvey.com/"
									data-share="false"
									data-width="450"
									data-show-faces="true">
								</div>
						</div>
					</div>

					<div class='col-xs-12 col-sm-12 col-md-6 col-lg-6'>
						<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
							<h3>Horoscopes</h3>
								<a href='#' target='_blank' class='thumbnail'><img src='images/slide2/under_construction.jpg' alt='#' title='Horoscopes'></a><br>
								<div
									class="fb-like"
									data-layout='button_count'
									data-href="http://horoscopes.scharvey.com/"
									data-share="false"
									data-width="450"
									data-show-faces="true">
								</div>
						</div>
					</div>
					</div><!-- end row-->

					<div class="row">
						<div class='col-xs-12 col-sm-12 col-md-6 col-lg-6'>
							<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
								<h3>jQuery Calculator</h3>
									<a href='http://calculator.scharvey.com/' target='_blank' class='thumbnail'><img src='images/slide2/calculator_jQuery.png' alt='jQuery Calculator' title='jQuery Calculator'></a><br>
									<div
										class="fb-like"
										data-layout='button_count'
										data-href="http://calculator.scharvey.com/"
										data-share="false"
										data-width="450"
										data-show-faces="true">
									</div>
							</div>
						</div>
					</div><!-- end row-->
				<div class='container'>
				<h1>Logos</h1>
					<div class='gallery'>
						<div class='row'>
							<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
									<div class='col-xs-12 col-sm-6 col-md-4 col-lg-4'>

										<h3>Harvey Designs</h3>
											<a href='images/slide2/logos/harveyDesigns_5x2_WB.jpg' data-title='Harvey Designs' data-lightbox='Harvey Designs'>
												<img src='images/slide2/logos/harveyDesigns_5x2_WB.jpg' width='330' height='165' class='img-thumbnail' />
											</a>
									</div>

									<div class='col-xs-12 col-sm-6 col-md-4 col-lg-4'>
										<h3>CMS - PHP</h3>
											<a href='images/slide2/logos/faith_5x2_DG.jpg' data-title='Site Title' data-lightbox='Harvey Designs'>
												<img src='images/slide2/logos/faith_5x2_DG.jpg' width='330' height='165' class='img-thumbnail' />
											</a>
									</div>

									<div class='col-xs-12 col-sm-6 col-md-4 col-lg-4'>
									<h3>The Split Bean</h3>
										<a href='images/slide2/logos/theSplitBean_5x2_WB.jpg' data-title='The Split Bean' data-lightbox='Harvey Designs'>
											<img src='images/slide2/logos/theSplitBean_5x2_WB.jpg' width='330' height='165' class='img-thumbnail' />
										</a>
									</div>

									<div class='col-xs-12 col-sm-6 col-md-4 col-lg-4'>
										<h3>Warriors Softball</h3>
											<a href='images/slide2/logos/warriors_5x2_WB.jpg' data-title='Warriors Softball Company' data-lightbox='Harvey Designs'>
												<img src='images/slide2/logos/warriors_5x2_WB.jpg' width='330' height='165' class='img-thumbnail' />
											</a>
									</div>

									<div class='col-xs-12 col-sm-6 col-md-4 col-lg-4'>
										<h3>Burn Fitness</h3>
											<a href='images/slide2/logos/burnFitness_5x2_WB.jpg' data-title='Burn Fitness' data-lightbox='Harvey Designs'>
												<img src='images/slide2/logos/burnFitness_5x2_WB.jpg' width='330' height='165' class='img-thumbnail' />
											</a>
									</div>

									<div class='col-xs-12 col-sm-6 col-md-4 col-lg-4'>
										<h3>JAshley Remodeling</h3>
											<a href='images/slide2/logos/jAshley_5x2_WB.jpg' data-title='JAshleyRemodeling' data-lightbox='Harvey Designs'>
												<img src='images/slide2/logos/jAshley_5x2_WB.jpg' width='330' height='165' class='img-thumbnail' />
											</a>
									</div>

									<div class='col-xs-12 col-sm-6 col-md-4 col-lg-4'>
										<h3>Pawzle</h3>
											<a href='images/slide2/logos/pawzle_5x2_WB.jpg' data-title='Pawzle' data-lightbox='Harvey Designs'>
												<img src='images/slide2/logos/pawzle_5x2_WB.jpg' width='330' height='165' class='img-thumbnail' />
											</a>
									</div>

									<div class='col-xs-12 col-sm-6 col-md-4 col-lg-4'>
										<h3>Quick Note</h3>
											<a href='images/slide2/logos/quickNoteLogo_white_back.jpg' data-title='Quick Note' data-lightbox='Harvey Designs'>
												<img src='images/slide2/logos/quickNoteLogo_white_back.jpg' width='330' height='165' class='img-thumbnail' />
											</a>
									</div>

							</div>
						</div>
					</div> <!-- End Gallery -->
			    </div> <!-- End Logos Container -->
			</div> <!-- End * Container -->
			<div class='modal' id='myModal' role='dialog'>
			    <div class='modal-dialog'>
			        <div class='modal-content'>
			            <div class='modal-header'>
			                <button class='close' type='button' data-dismiss='modal'>×</button>
			                <h3 class='modal-title'></h3>
			            </div>
			            <div class='modal-body'>
			                <div id='modalCarousel' class='carousel'>
			                    <div class='carousel-inner'>
			                    </div>
			                    <a class='carousel-control left' href='#modaCarousel' data-slide='prev'><i class='glyphicon glyphicon-chevron-left'></i></a>
			                    <a class='carousel-control right' href='#modalCarousel' data-slide='next'><i class='glyphicon glyphicon-chevron-right'></i></a>
			                </div>
			            </div>
			            <div class='modal-footer'>
			                <button class='btn btn-default' data-dismiss='modal'>Close</button>
			            </div>
			        </div>
			    </div>
			</div>
			<div class='container'>
			<h1>Videos</h1>
				<div class='row'>
					<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
						<div class='col-xs-12 col-sm-6 col-md-6 col-lg-6'>
							<h3>Water</h3>
							<div class='embed-responsive embed-responsive-16by9'>
								<video controls>
									<source src='video/water.webm' type='video/webm'>
									<source src='video/water.ogv' type='video/ogv'>
									<source src='video/water.mp4' type='video/mp4'>
								</video>
							</div>
						</div>
						<div class='col-xs-12 col-sm-6 col-md-6 col-lg-6'>
							<h3>Burn Fitness Youtube Intro</h3>
							<div class='embed-responsive embed-responsive-16by9'>
								<video controls>
									<source src='video/Burn_1_FINAL.ogv' type='video/ogv'>
									<source src='video/Burn_1_FINAL.webm' type='video/webm'>
									<source src='video/Burn_!_FINAL.mov' type='video/mov'>
								</video>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class='container' id='scrollButton'>
				<div class='row'>
					<div class='col-xs-offset-9 col-sm-offset-9 col-md-offset-10 col-lg-offset-10'>
						<a class='button' data-slide='3' title=''><i class='fa fa-chevron-circle-down fa-5x' aria-hidden='true'></i></a>
					</div>
				</div>
			</div>
		</div>


	<!-- Skills Slide -->

	<?php
		$orangeBlock = "<img src='images/slide4/orangeBlock.png' width='36' height='22.5'>";
		$whiteBlock = "<img src='images/slide4/whiteBlock.png' width='36' height='22.5'>";
	?>

		<div class='slide' id='slide3' data-slide='3' data-stellar-background-ratio='1'>
			<h1 class='page-header' id='headHeader'>Skills</h1>
			<div class='container'>
				<div class='row'>
					<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
						<div class='panel-group' id='accordion' role='tablist' aria-multiselectable='true'>
							<div class='col-xs-12 col-sm-12 col-md-6 col-lg-6'>
					            <div class='panel panel-default'>
					                <div class='panel-heading' role='tab' id='headingOne'>
					                    <h3 class='panel-title'>
					                    	<a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#collapseOne' aria-expanded='false' aria-controls='collapseOne'>
	          								HTML(5)/CSS(3)
	        								</a>
					                    </h3>
					                </div>
					                <div id='collapseOne' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='headingOne'>
					                    <div class='panel-body'>
																<?php
																	echo str_repeat($orangeBlock, 9);
																	echo str_repeat($whiteBlock, 1);
																 ?>
					                    </div>
					                </div>
					            </div>
					            <div class='panel panel-default'>
					                <div class='panel-heading' role='tab' id='headingTwo'>
					                    <h3 class='panel-title'>
					                    	<a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#collapseTwo' aria-expanded='false' aria-controls='collapseTwo'>
	          								jQuery
	        								</a>
					                    </h3>
					                </div>
					                <div id='collapseTwo' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingTwo'>
					                    <div class='panel-body'>
																<?php
																	 echo str_repeat($orangeBlock, 8);
																	 echo str_repeat($whiteBlock, 2);
																	?>
					                    </div>
					                </div>
					            </div>
					            <div class='panel panel-default'>
					                <div class='panel-heading' role='tab' id='headingThree'>
					                    <h3 class='panel-title'>
					                    	<a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#collapseThree' aria-expanded='false' aria-controls='collapseThree'>
	          								PHP
	        								</a>
					                    </h3>
					                </div>
					                <div id='collapseThree' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingThree'>
					                    <div class='panel-body'>
																<?php
																	 echo str_repeat($orangeBlock, 8);
																	 echo str_repeat($whiteBlock, 2);
																	?>
					                    </div>
					                </div>
					            </div>
					            <div class='panel panel-default'>
					                <div class='panel-heading' role='tab' id='headingFour'>
					                    <h3 class='panel-title'>
					                    	<a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#collapseFour' aria-expanded='false' aria-controls='collapseFour'>
	          								MySQL
	        								</a>
					                    </h3>
					                </div>
					                <div id='collapseFour' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingFour'>
					                    <div class='panel-body'>
																<?php
																	echo str_repeat($orangeBlock, 8);
																	echo str_repeat($whiteBlock, 2);
																 ?>
					                    </div>
					                </div>
					            </div>
					            <div class='panel panel-default'>
					                <div class='panel-heading' role='tab' id='headingFive'>
					                    <h3 class='panel-title'>
					                    	<a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#collapseFive' aria-expanded='false' aria-controls='collapseFive'>
	          								Twitter Bootstrap
	        								</a>
					                    </h3>
					                </div>
					                <div id='collapseFive' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingFive'>
					                    <div class='panel-body'>
																<?php
																	echo str_repeat($orangeBlock, 9);
																	echo str_repeat($whiteBlock, 1);
																 ?>
					                    </div>
					                </div>
					            </div>
					            <div class='panel panel-default'>
					                <div class='panel-heading' role='tab' id='headingSix'>
					                    <h3 class='panel-title'>
					                    	<a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#collapseSix' aria-expanded='false' aria-controls='collapseSix'>
	          								Illustrator
	        								</a>
					                    </h3>
					                </div>
					                <div id='collapseSix' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingSix'>
					                    <div class='panel-body'>
																<?php
																	 echo str_repeat($orangeBlock, 9);
																	 echo str_repeat($whiteBlock, 1);
																	?>
					                    </div>
					                </div>
					            </div>
				       		</div> <!-- End First Column -->

							<div class='col-xs-12 col-sm-12 col-md-6 col-lg-6'>
								<div class='panel-group' id='accordion' role='tablist' aria-multiselectable='true'>

						         	<div class='panel panel-default'>
						                <div class='panel-heading' role='tab' id='headingSeven'>
						                    <h3 class='panel-title'>
						                    	<a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#collapseSeven' aria-expanded='false' aria-controls='collapseSeven'>
		          								Photoshop
		        								</a>
						                    </h3>
						                </div>
						                <div id='collapseSeven' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingSeven'>
					                    	<div class='panel-body'>
																	<?php
																		 echo str_repeat($orangeBlock, 6);
																		 echo str_repeat($whiteBlock, 4);
																		?>
						                    </div>
						                </div>
						            </div>
						            <div class='panel panel-default'>
					                <div class='panel-heading' role='tab' id='headingEight'>
					                    <h3 class='panel-title'>
					                    	<a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#collapseEight' aria-expanded='false' aria-controls='collapseEight'>
	          								SCSS
	        								</a>
					                    </h3>
					                </div>
					                <div id='collapseEight' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingEight'>
					                    <div class='panel-body'>
																<?php
																	echo str_repeat($orangeBlock, 8);
																	echo str_repeat($whiteBlock, 2);
																 ?>
						                    </div>
						                </div>
						            </div>
						            <div class='panel panel-default'>
						                <div class='panel-heading' role='tab' id='headingNine'>
						                    <h3 class='panel-title'>
						                    	<a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#collapseNine' aria-expanded='false' aria-controls='collapseNine'>
		          								Concrete5
		        								</a>
						                    </h3>
						                </div>
						                <div id='collapseNine' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingNine'>
					                    <div class='panel-body'>
																<?php
																	echo str_repeat($orangeBlock, 8);
																	echo str_repeat($whiteBlock, 2);
																 ?>
						                    </div>
						                </div>
						            </div>
						             <div class='panel panel-default'>
					                <div class='panel-heading' role='tab' id='headingTen'>
					                    <h3 class='panel-title'>
					                    	<a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#collapseTen' aria-expanded='false' aria-controls='collapseTen'>
	          								Javascript
	        								</a>
					                    </h3>
					                </div>
					                	<div id='collapseTen' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingTen'>
					                    	<div class='panel-body'>
																	<?php
																		echo str_repeat($orangeBlock, 6);
																		echo str_repeat($whiteBlock, 4);
																	 ?>
						                    </div>
						                </div>
						            </div>
						            <div class='panel panel-default'>
						                <div class='panel-heading' role='tab' id='headingEleven'>
						                    <h3 class='panel-title'>
						                    	<a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#collapseEleven' aria-expanded='false' aria-controls='collapseEleven'>
		          								GIT Version Control
		        								</a>
						                    </h3>
						                </div>
					                	<div id='collapseEleven' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingEleven'>
					                    	<div class='panel-body'>
																	<?php
																		echo str_repeat($orangeBlock, 8);
																		echo str_repeat($whiteBlock, 2);
																	 ?>
						                    </div>
						                </div>
						            </div>
						            <div class='panel panel-default'>
						                <div class='panel-heading' role='tab' id='headingTwelve'>
						                    <h3 class='panel-title'>
						                    	<a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#collapseTwelve' aria-expanded='false' aria-controls='collapseTwelve'>
		          								Vagrant
		        								</a>
						                    </h3>
						                </div>
						                <div id='collapseTwelve' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingTwelve'>
						                    <div class='panel-body'>
																	<?php
																		echo str_repeat($orangeBlock, 7);
																		echo str_repeat($whiteBlock, 3);
																	 ?>
							                </div>
							            </div>
				            		</div>
			        			</div> <!-- End Panel Group -->
		        			</div> <!-- End Accordion Panel Group -->
		        		</div> <!-- End Main Panel Group -->
		        	</div> <!-- End Main Columns -->
		        </div> <!-- End Row -->
			</div> <!-- End Container -->
			<div class='container' id='scrollButton'>
				<div class='row'>
					<div class='col-xs-offset-9 col-sm-offset-9 col-md-offset-10 col-lg-offset-10'>
						<a class='button' data-slide='4' title=''><i class='fa fa-chevron-circle-down fa-5x' aria-hidden='true'></i></a>
					</div>
				</div>
			</div>
		</div> <!-- End Slide 3 -->


	<!-- me Slide -->
		<div class='slide' id='slide4' data-slide='4' data-stellar-background-ratio='.1'>
			<div class='container'>
				<div class='row'>
					<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
						<h1 class='page-header' id='headHeader'>Me</h1>
						<h3>Goal Oriented</h3>
						<p>
						'I am humble, hard working and I consistently set goals for myself. I always
						put forth an effort to learn and absorb as much as possible in any task or project
						I am involved in.'
						</p>
					</div>
				</div>
				<div class='row'>
					<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
						<h3>Growth and Development</h3>
						<p>
						'I am always eager to learn and grow in my craft. I believe that the more you challenge yourself and reach for the impossible, the greater chance of success you will achieve. New technologies are created every week, grasping new technology is both fun and rewarding.'
						</p>
					</div>
				</div>
				<div class='row'>
					<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
						<h3>Self Motivation</h3>
						<p>
						'I'm someone who wants to be judged by individual performance and rewarded for my efforts based on my ability to execute. Coding is a puzzle, I enjoy challenging myself and putting the pieces together and seeing the results.'
						</p>
					</div>
				</div>
				<div class='container' id='scrollButton'>
					<div class='row'>
						<div class='col-xs-offset-9 col-sm-offset-9 col-md-offset-10 col-lg-offset-10'>
							<a class='button' data-slide='5' title=''><i class='fa fa-chevron-circle-down fa-5x' aria-hidden='true'></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>


	<!-- Profile Slide -->
		<!-- <div class='container'> -->
			<div class='slide' id='slide5' data-slide='5' data-stellar-background-ratio='.1'>
				<div class='container' id='profileWrapper'>
				<h1 class='page-header' id='headHeader'>Profile</h1>
					<div class='row'>
						<div class='col-xs-12 col-sm-12 col-md-6 col-lg-6'>
							<h2>Contact Info   <i class='fa fa-info-circle' id='iconStyle' aria-hidden='true'></i></h2>
							<div class='profileInfo'>
								<i class='fa fa-graduation-cap' id='iconStyle' aria-hidden='true'></i>
								Sam Harvey IV
							</div>
							<div class='profileInfo' >
								<i class='fa fa-envelope' id='iconStyle' aria-hidden='true'></i>
								s.rharveyiv@gmail.com
							</div>
							<div class='profileInfo'>
								<i class='fa fa-phone' id='iconStyle' aria-hidden='true'></i>
								(623) 687-5860
							</div>
							<div class='profileInfo'>
								<i class='fa fa-home' id='iconStyle' aria-hidden='true'></i>
								Glendale, Arizona
							</div>
							<h2>A bit about Sam</h2>
							<p class='profileInfo'>
								I, Sam Harvey earned my Bachlelor of Arts Degree in Graphic and Web Design with a concentration in Web Development. I give 100% in everything I do and I know how to use the right resources to find answers quickly.
							</p>
						</div>
						<div class='col-xs-12 col-sm-12 col-md-6 col-lg-6' id='porfilePaddingImage'>
							<div><img src='images/meSam.jpg' class='img-circle' id='profileImage' style width='300px' height='300px'></div>
						</div>
					</div>
					<div class='container' id='scrollButton'>
						<div class='row'>
							<div class='col-xs-offset-9 col-sm-offset-9 col-md-offset-10 col-lg-offset-10'>
								<a class='button' data-slide='6' title=''><i class='fa fa-chevron-circle-down fa-5x' aria-hidden='true'></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>



			<!-- <div class="fb-page" data-href="https://www.facebook.com/scharveydesigns/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
				<blockquote cite="https://www.facebook.com/scharveydesigns/" class="fb-xfbml-parse-ignore">
				<a href="https://www.facebook.com/scharveydesigns/">Harvey Designs</a>
			</blockquote>
		</div> -->




	<!--Contacts Slide -->
		<div class='slide' id='slide6' data-slide='6' data-stellar-background-ratio='2'>
		<div class='container'>
			<h1 class='page-header' id='headHeader'>Contact Me</h1>
				<form name='contactform' method='post' action='send_form_email.php'>
					<div class='form-group'>
						<input type='text' class='form-control' name='first_name' id='first_name' placeholder='First Name'>
						<br>
						<input type='text' class='form-control' name='last_name' id='last_name' placeholder='Last Name'>
						<br>
						<input type='email' class='form-control' name='email' id='email' placeholder='Email'>
						<br>
						<input type='text' class='form-control' name='telephone' id='telephone' placeholder='Phone Number'>
						<br>
						<input type='text' class='form-control' name='company' id='company' placeholder='Company'>
						<br>
						<input type='text' class='form-control' name='position' id='position' placeholder="Whats your position?">
						<br>
						<textarea type='text' class='form-control' name='comments' maxlenth='1000' cols='25' rows='6' id='comments' placeholder='Please comment on my website or my work. All constructive feedback is welcome.'></textarea>
						<br>
						<input type='submit' name='submit' class='btn btn-primary btn-lg btn-block' id='contactBtn' value='Submit'><a href='http://www.scharvey.com'></a>
					</div>
				</form>
			</div>
			<div class='container' id='scrollButton'>
				<div class='row'>
					<div class='col-xs-offset-9 col-sm-offset-9 col-md-offset-10 col-lg-offset-10'>
						<a class='buttonUp' data-slide='1' title=''><i class='fa fa-chevron-circle-up fa-5x' aria-hidden='true'></i></a>
					</div>
				</div>
			</div>
		</div>

		<div id='responsive_social'>
			<ul class='social-network social-circle'>
				<li><a href='https://www.behance.net/srharveyiv600c' target='_blank' class='icoBehance' title='Behance'><i class='fa fa-behance'></i></a></li>
				<li><a href='https://www.facebook.com/scharveydesigns/' target='_blank' class='icoFacebook' title='Facebook'><i class='fa fa-facebook'></i></a></li>
				<li><a href='https://www.twitter.com/s_harveyIV' target='_blank' class='icoTwitter' title='Twitter'><i class='fa fa-twitter'></i></a></li>
				<li><a href='https://www.github.com/sharvey18' target='_blank' class='icoGithub' title='Github'><i class='fa fa-github'></i></a></li>
				<li><a href='https://www.linkedin.com/in/samharveyiv' target='_blank' class='icoLinkedin' title='Linkedin'><i class='fa fa-linkedin'></i></a></li>
			</ul>
		</div>


		<div class='footer'>
			<div class='row'>
			    <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
			        <ul class='nav nav-pills nav-justified'>
			            <li>© 2016 Harvey Designs | All Rights Reserved</li>
			        </ul>
			    </div>
			</div>
		</div>

	<script src='https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
	<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js'></script>
	<script type='text/javascript' src='js/main.js'></script>
	<script type='text/javascript' src='js/activeScroll.js'></script>
	<script type='text/javascript' src='js/scrollHeight.js'></script>
	<script type='text/javascript' src='js/easing.js'></script>
	<script type='text/javascript' src='js/stellar.js'></script>
	<script type='text/javascript' src='js/waypoints.js'></script>
	<script type='text/javascript' src='js/lightbox.js'></script>
</body>

</html>
