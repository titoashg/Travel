<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>holidaymaker a Travel Category Bootstrap responsive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="holidaymaker Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" /><!-- //pop-ups-->
<!-- team--><link href="css/ihover.css" rel="stylesheet" type="text/css" media="all" /><!-- //team -->
<link rel="stylesheet" href="css/swipebox.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Merienda:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">




<!--style form search of flight -->
<style>
    /*text.section {
        position: relative;
        height: 100vh;
    }

    .section .section-center {
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
    }*/

    .booking-form {
        background: rgba(0, 0, 0, 0.7);
        padding: 40px;
        border-radius: 6px;
    }

    .booking-form .form-group {
        position: relative;
        margin-bottom: 20px;
    }

    .booking-form .form-control {
        background-color: #fff;
        height: 50px;
        color: #191a1e;
        border: none;
        font-size: 16px;
        font-weight: 400;
        -webkit-box-shadow: none;
        box-shadow: none;
        border-radius: 40px;
        padding: 0px 25px;
    }

    .booking-form .form-control::-webkit-input-placeholder {
        color: rgba(82, 82, 84, 0.4);
    }

    .booking-form .form-control:-ms-input-placeholder {
        color: rgba(82, 82, 84, 0.4);
    }

    .booking-form .form-control::placeholder {
        color: rgba(82, 82, 84, 0.4);
    }

    .booking-form input[type="date"].form-control:invalid {
        color: rgba(82, 82, 84, 0.4);
    }

    .booking-form select.form-control {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .booking-form select.form-control+.select-arrow {
        position: absolute;
        right: 10px;
        bottom: 6px;
        width: 32px;
        line-height: 32px;
        height: 32px;
        text-align: center;
        pointer-events: none;
        color: rgba(0, 0, 0, 0.3);
        font-size: 14px;
    }

    .booking-form select.form-control+.select-arrow:after {
        content: '\279C';
        display: block;
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }

    .booking-form .form-label {
        display: block;
        margin-left: 20px;
        margin-bottom: 5px;
        font-weight: 400;
        text-transform: uppercase;
        line-height: 24px;
        height: 24px;
        font-size: 12px;
        color: #fff;
    }

    .booking-form .form-checkbox input {
        position: absolute !important;
        margin-left: -9999px !important;
        visibility: hidden !important;
    }

    .booking-form .form-checkbox label {
        position: relative;
        padding-top: 4px;
        padding-left: 30px;
        font-weight: 400;
        color: #fff;
    }

    .booking-form .form-checkbox label+label {
        margin-left: 15px;
    }

    .booking-form .form-checkbox input+span {
        position: absolute;
        left: 2px;
        top: 4px;
        width: 20px;
        height: 20px;
        background: #fff;
        border-radius: 50%;
    }

    .booking-form .form-checkbox input+span:after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0px;
        height: 0px;
        border-radius: 50%;
        background-color: #f23e3e;
        -webkit-transition: 0.2s all;
        transition: 0.2s all;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .booking-form .form-checkbox input:not(:checked)+span:after {
        opacity: 0;
    }

    .booking-form .form-checkbox input:checked+span:after {
        opacity: 1;
        width: 10px;
        height: 10px;
    }

    .booking-form .form-btn {
        margin-top: 27px;
    }

    .booking-form .submit-btn {
        color: #fff;
        background-color: #f23e3e;
        font-weight: 400;
        height: 50px;
        font-size: 14px;
        border: none;
        width: 100%;
        border-radius: 40px;
        text-transform: uppercase;
        -webkit-transition: 0.2s all;
        transition: 0.2s all;
        background-color: #00bdbd;
    }

    .booking-form .submit-btn:hover,
    .booking-form .submit-btn:focus {
        opacity: 0.9;
    }


</style>

<!--END style form search of flight -->
<!-- //fonts -->
</head>
<body>
<!-- banner -->
	<div class="banner-figures">
		<div class="banner">
			<div class="container banner-drop">
				<div class="header">
					<div class="header-left logo">
						<h1><a href="{{url('/')}}">holidaymaker</a></h1>
					</div>
					<div class="header-right">
						<nav>
						  <ul>
							<li class="active">
								<a href="index.blade.php" class="active"><span>Home</span></a>
							</li>
							<li>
								<a href="#about" class="scroll"><span>About</span></a>
							</li>
							<li>
								<a href="#team" class="scroll"><span>Team</span></a>
							</li>
							<li>
								<a href="#services" class="scroll"><span>Services</span></a>
							</li>
							<li>
								<a href="#gallery" class="scroll"><span>Gallery</span></a>
							</li>
							<li>
								<a href="#contact" class="scroll"><span>Contact</span></a>
							</li>
						  </ul>
						</nav>
						<div class="menu-icon animated wow zoomIn" data-wow-duration="1000ms" data-wow-delay="800ms"><span></span></div>
					</div>
					<div class="clearfix"> </div>
				</div>
                <div class="banner-text-agileits">

					<p>Find Travel Perfection With the Professionalism of Experts.</p>
				</div>
            <br/>
                    <div id="booking" class="section">
                        <div class="section-center">
                            <div class="container">
                                <div class="row">
                                    <div class="booking-form">
                                        <form>
                                             <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <span class="form-label">Flying from</span>
                                                        <input class="form-control" type="text" placeholder="City or airport">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <span class="form-label">Flyning to</span>
                                                        <input class="form-control" type="text" placeholder="City or airport">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <span class="form-label">Departing</span>
                                                        <input class="form-control" type="date" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <span class="form-label">Returning</span>
                                                        <input class="form-control" type="date" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <span class="form-label">Adults (18+)</span>
                                                        <select class="form-control">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                        </select>
                                                        <span class="select-arrow"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <span class="form-label">Children (0-17)</span>
                                                        <select class="form-control">
                                                            <option>0</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                        </select>
                                                        <span class="select-arrow"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <span class="form-label">Travel class</span>
                                                        <select class="form-control">
                                                            <option>Economy class</option>
                                                            <option>Business class</option>
                                                            <option>First class</option>
                                                        </select>
                                                        <span class="select-arrow"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-btn">
                                                        <button class="submit-btn">Show flights</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>










				<div class="social-icons animated wow bounceInDown" data-wow-duration="1000ms" data-wow-delay="800ms">
					<ul class="top-links">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<!-- //banner -->
<!--about-->
<div class="about-agileits" id="about">
	<h3 class="tittle">About Us</h3>
	<p class="head-p-w3ls"> We make travelling safer and easier.</p>
	<div class="about-info">
		<div class="col-md-3 about-left-agileinfo">
			<div class="about-grids-wthree">
				<div class="grid">
					<h4>Make Collage</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ut metus sit amet magna.</p>
				</div>
				<div class="grid">
					<h4>Add Photos</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ut metus sit amet magna.</p>
				</div>
				<div class="grid">
					<h4>Keep Rocking</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ut metus sit amet magna.</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="col-md-6 about-left">
		</div>
		<div class="col-md-3 about-right-agileinfo">

			<div class="about-grids-wthree">
				<div class="grid">
					<h4>Get Inspired</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ut metus sit amet magna.</p>
				</div>
				<div class="grid">
					<h4>Love The World</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ut metus sit amet magna.</p>
				</div>
				<div class="grid">
					<h4>Be Passionate</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ut metus sit amet magna.</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--//about-->
<!--video-->
<div class=" jarallax banner-agileits-btm">
		<div class="button">
			<a href="#small-dialog1" class="play-icon popup-with-zoom-anim"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></a>
		</div>
			<h2>Watch the video to know more about our travels.</h2>
			<div id="small-dialog1" class="mfp-hide w3ls_small_dialog wthree_pop">
				<div class="agileits_modal_body">
					<iframe src="https://player.vimeo.com/video/71319358?badge=0"></iframe>
				</div>
			</div>
	</div>
<!--//video-->
<!-- team -->
<div class="team" id="team">
	<div class="container">
		<h3 class="tittle">Meet Our Team</h3>
	<p class="head-p-w3ls">Choose your next destination</p>
		<div class="team-grids">
			<div class="col-md-3 team-grid text-center">
				<div class="team-img">
					 <!-- normal -->
					<div class="ih-item circle effect1"><a href="#">
						<div class="spinner"></div>
						<div class="img"><img src="images/t1.jpg" alt="img"></div>
						<div class="info">
						  <div class="info-back">
						  </div>
						</div></a></div>
					<!-- end normal -->
					<h4>Michael</h4>
					<p>Traveller</p>
					<div class="social-w3-agileits">
					<ul class="agileits-w3layouts-team">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
				</div>
			</div>
			<div class="col-md-3 team-grid text-center">
				<div class="team-img">
					 <!-- normal -->
					<div class="ih-item circle effect1"><a href="#">
						<div class="spinner"></div>
						<div class="img"><img src="images/t2.jpg" alt="img"></div>
						<div class="info">
						  <div class="info-back">
						  </div>
						</div></a></div>
					<!-- end normal -->
					<h4>Pattrick</h4>
					<p>Agent</p>
					<div class="social-w3-agileits">
					<ul class="agileits-w3layouts-team">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
				</div>
			</div>
			<div class="col-md-3 team-grid text-center">
				<div class="team-img">
					 <!-- normal -->
					<div class="ih-item circle effect1"><a href="#">
						<div class="spinner"></div>
						<div class="img"><img src="images/t3.jpg" alt="img"></div>
						<div class="info">
						  <div class="info-back">
						  </div>
						</div></a></div>
					<!-- end normal -->
					<h4>Albert</h4>
					<p>Guide</p>
					<div class="social-w3-agileits">
					<ul class="agileits-w3layouts-team">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
				</div>
			</div>
			<div class="col-md-3 team-grid text-center">
				<div class="team-img">
					 <!-- normal -->
					<div class="ih-item circle effect1"><a href="#">
						<div class="spinner"></div>
						<div class="img"><img src="images/t4.jpg" alt="img"></div>
						<div class="info">
						  <div class="info-back">
						  </div>
						</div></a></div>
					<!-- end normal -->
					<h4>Smith Doe</h4>
					<p>Traveller</p>
					<div class="social-w3-agileits">
					<ul class="agileits-w3layouts-team">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //team -->
<!-- services -->
	<div class="jarallax services" id="services">
		<div class="container">
		<h3 class="tittle">Our Services</h3>
		<p class="head-p-w3ls"> We will provide you with the best services.</p>
			<div class="w3layouts-grids">
				<div class="services-right-grids">
					<div class="col-sm-4 services-right-grid">
						<div class="services-icon hvr-radial-in">
							<i class="fa fa-building" aria-hidden="true"></i>
						</div>
						<div class="services-icon-info">
							<h5>HOTELS</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci enim, posuere sed tincidunt et.</p>
						</div>
					</div>
					<div class="col-sm-4 services-right-grid">
						<div class="services-icon hvr-radial-in">
							<i class="fa fa-home" aria-hidden="true"></i>
						</div>
						<div class="services-icon-info">
							<h5>RESORTS</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci enim, posuere sed tincidunt et.</p>
						</div>
					</div>
					<div class="col-sm-4 services-right-grid">
						<div class="services-icon hvr-radial-in">
						<i class="fa fa-bed" aria-hidden="true"></i>
						</div>
						<div class="services-icon-info">
							<h5>ROOMS</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci enim, posuere sed tincidunt et.</p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="services-right-grids">
					<div class="col-sm-4 services-right-grid">
						<div class="services-icon hvr-radial-in">
						<i class="fa fa-cutlery" aria-hidden="true"></i>
						</div>
						<div class="services-icon-info">
							<h5>RESTAURANTS</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci enim, posuere sed tincidunt et.</p>
						</div>
					</div>
					<div class="col-sm-4 services-right-grid">
						<div class="services-icon hvr-radial-in">
							<i class="fa fa-plane" aria-hidden="true"></i>
						</div>
						<div class="services-icon-info">
							<h5>TRANSPORT</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci enim, posuere sed tincidunt et.</p>
						</div>
					</div>
					<div class="col-sm-4 services-right-grid">
						<div class="services-icon hvr-radial-in">
							<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
						</div>
						<div class="services-icon-info">
							<h5>CONSULTANCY</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci enim, posuere sed tincidunt et.</p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- //services -->
<!-- destinations -->
<div class="destinations agileits">
	<div class="container">
		<h3 class="tittle">Our Destinations</h3>
	<p class="head-p-w3ls">Choose your next destination</p>
		<div class="diff-grids">
			<div class="col-md-4 diff-grid diff-one bor-bot wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<div class="port-1 effect-3">
                	<div class="image-box">
                    	<img class="img-responsive" src="images/p1.jpg" alt="Image-3">
                    </div>
                    <div class="text-desc">
                    	<h6 class="img-text">The best destination for you</h6>
                    </div>
                </div>
			</div>
			<div class="col-md-4 diff-grid bor-bot bar-two wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
				<div class="hi-icon-wrap hi-icon-effect-4 hi-icon-effect-4b">
					<div class="abt-icon">
						<i class="fa fa-globe" aria-hidden="true"></i>
						<h4>Tokyo architecture</h4>
						<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 diff-grid diff-one bor-bot  wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.3s">
				<div class="port-1 effect-3">
                	<div class="image-box">
                    	<img class="img-responsive" src="images/p2.jpg" alt="Image-3">
                    </div>
                    <div class="text-desc">
                    	<h6 class="img-text">The best destination for you</h6>
                    </div>
                </div>
			</div>
			<div class="col-md-4 diff-grid diff-one bor-top bar-two wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.4s">
				<div class="hi-icon-wrap hi-icon-effect-4 hi-icon-effect-4b">
					<div class="abt-icon">
						<i class="fa fa-globe" aria-hidden="true"></i>
						<h4>Marble Cave</h4>
						<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 diff-grid bor-top wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.5s">
				<div class="port-1 effect-3">
                	<div class="image-box">
                    	<img class="img-responsive" src="images/p3.jpg" alt="Image-3">
                    </div>
                    <div class="text-desc">
                    	<h6 class="img-text">The best destination for you</h6>
                    </div>
                </div>
			</div>
			<div class="col-md-4 diff-grid diff-one bor-top bar-two wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.6s">
				<div class="hi-icon-wrap hi-icon-effect-4 hi-icon-effect-4b">
					<div class="abt-icon">
						<i class="fa fa-globe" aria-hidden="true"></i>
						<h4>Paris pyramid</h4>
						<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- destinations -->
<!--plan-->
<div class="jarallax plan">
	<h5>Discover the new world</h5>
	<h6>The best available choice in travels, we plan your trip.</h6>
	<div class="read-w3ls">
			<a href="#small-dialog" class="play-icon popup-with-zoom-anim readmore">Read More</a>
		</div>
			<div id="small-dialog" class="mfp-hide w3ls_small_dialog wthree_pop">
				<div class="agileits_modal_body">
					<h4>Holidaymaker</h4>
					<img src="images/plan.jpg" alt=" " class="img-responsive">
					<h5>Discover the new world</h5>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>

				</div>
			</div>
</div>
<!--//plan-->
<!--Gallery-->
	<div class="gallery" id="gallery">
		<div class="container">
			<h3 class="tittle">Gallery</h3>
			<p class="head-p-w3ls">Sit accusamus, vel blanditiis iure minima.</p>
					<div class="gallery-grids">
						<div class="col-md-8 col-sm-8 ggd baner-top big wow fadeInRight animated" data-wow-delay=".5s">
							<a href="images/g3.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gal-spin-effect vertical ">
									<img src="images/g3.jpg" alt=" " />
									<div class="gal-text-box">
										<div class="info-gal-con">
											<h4>holidaymaker</h4>
											<span class="separator"></span>
											<p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
											<span class="separator"></span>

										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 ggd baner-top small wow fadeInLeft animated" data-wow-delay=".5s">
							<a href="images/g1.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gal-spin-effect vertical ">
									<img src="images/g1.jpg" alt=" " />
									<div class="gal-text-box">
										<div class="info-gal-con">
											<h4>holidaymaker</h4>
											<span class="separator"></span>
											<p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
											<span class="separator"></span>

										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 ggd baner-top small ban-mar wow fadeInUp animated" data-wow-delay=".5s">
							<a href="images/g2.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gal-spin-effect vertical ">
									<img src="images/g2.jpg" alt=" " />
									<div class="gal-text-box">
										<div class="info-gal-con">
											<h4>holidaymaker</h4>
											<span class="separator"></span>
											<p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
											<span class="separator"></span>

										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-8 col-sm-8 ggd baner-top big ban-mar wow fadeInDown animated" data-wow-delay=".5s">
							<a href="images/g5.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gal-spin-effect vertical ">
									<img src="images/g5.jpg" alt=" " />
									<div class="gal-text-box">
										<div class="info-gal-con">
											<h4>holidaymaker</h4>
											<span class="separator"></span>
											<p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
											<span class="separator"></span>

										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 ggd baner-top three wow fadeInLeft animated gap-w3" data-wow-delay=".5s">
							<a href="images/g4.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gal-spin-effect vertical ">
									<img src="images/g4.jpg" alt=" " />
									<div class="gal-text-box">
										<div class="info-gal-con">
											<h4>holidaymaker</h4>
											<span class="separator"></span>
											<p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
											<span class="separator"></span>

										</div>
									</div>
								</div>
							</a>
					</div>
					<div class="col-md-4 col-sm-4 ggd baner-top three wow fadeInLeft animated" data-wow-delay=".5s">
							<a href="images/g6.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gal-spin-effect vertical ">
									<img src="images/g6.jpg" alt=" " />
									<div class="gal-text-box">
										<div class="info-gal-con">
											<h4>holidaymaker</h4>
											<span class="separator"></span>
											<p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
											<span class="separator"></span>

										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 ggd baner-top three thre wow fadeInLeft animated" data-wow-delay=".5s">
							<a href="images/g7.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gal-spin-effect vertical ">
									<img src="images/g7.jpg" alt=" " />
									<div class="gal-text-box">
										<div class="info-gal-con">
											<h4>holidaymaker</h4>
											<span class="separator"></span>
											<p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
											<span class="separator"></span>

										</div>
									</div>
								</div>
							</a>
						</div>

						<div class="clearfix"> </div>
					</div>
				</div>
		</div>
	<!-- //gallery -->
<!-- contact -->
<div class="jarallax contact" id="contact">
	<div class="container">
	<h3 class="tittle">Get in touch</h3>
	<p class="head-p-w3ls">Sit accusamus, vel blanditiis iure minima.</p>
		<div class="col-md-5 contact-agileits-w3layouts">
		<form action="#" method="post">
				<input type="text" name="Your Name" placeholder="Name" required="" />
				<input type="email" name="Your Email" placeholder="Email" required="" />
				<input type="text" Name="Phone Number" placeholder="Number" required=""/>
				<textarea name="Message" placeholder="Message" required=""></textarea>
				<input type="submit" value="Submit">
			</form>
			<h5 class="sub">Looking for Address</h5>
			<p><span>Location</span> : 345 Setwant natrer,Washington,US.</p>
			<p><span>Phone</span> : +33 892 35 35 35</p>
			<p><span>Email</span><a href="mailto:example@mail.com"> : mail@example.com</a></p>
		</div>
		<div class="col-md-7 contact-map-right">
		<div id="map"></div>
			<!-- Map-JavaScript -->
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
			<script type="text/javascript">
				google.maps.event.addDomListener(window, 'load', init);
				function init() {
					var mapOptions = {
						zoom: 11,
						center: new google.maps.LatLng(40.6700, -73.9400),
						styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
					};
					var mapElement = document.getElementById('map');
					var map = new google.maps.Map(mapElement, mapOptions);
					var marker = new google.maps.Marker({
						position: new google.maps.LatLng(40.6700, -73.9400),
						map: map,
					});
				}
			</script>
		<!-- //Map-JavaScript -->
		</div>
	</div>
</div>
<!-- //about -->
	<div class="footer">
		<div class="container">
		<h3><a href="index.blade.php">holidaymaker</a></h3>
			<p>© 2017 holidaymaker. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			<div class="social-icons animated wow bounceInDown" data-wow-duration="1000ms" data-wow-delay="800ms">
					<ul class="top-links">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
		</div>
	</div>
<!-- //footer -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script>
				(function($){
				  $(".menu-icon").on("click", function(){
						$(this).toggleClass("open");
						$(".container").toggleClass("nav-open");
						$("nav ul li").toggleClass("animate");
				  });

				})(jQuery);
			</script>
		<!-- swipe box js -->
	<script src="js/jquery.swipebox.min.js"></script>
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
	</script>
<!-- //swipe box js -->

		<!-- jarallax-js -->
			<script src="js/jarallax.js"></script>
			<script src="js/SmoothScroll.min.js"></script>
			<script type="text/javascript">
				/* init Jarallax */
				$('.jarallax').jarallax({
					speed: 0.5,
					imgWidth: 1366,
					imgHeight: 768
				})
			</script>
		<!-- //jarallax-js -->
<!--pop-up-box -->
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<script>
					$(document).ready(function() {
					$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
					});

					});
					</script>
<!-- //pop-up-box -->

<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
<!-- //here ends scrolling icon -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smooth-scrolling -->
</body>
</html>