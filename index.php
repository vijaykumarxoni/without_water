<?php 
include("include/dbcon.php");
?>


<!doctype html>
<html class="no-js" lang="en">
	

<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Zaptox Software Solutions</title>
		<meta name="description" content="Zaptox is a software house established in 2017. We provide imaginative,innovative and fully integrated solutions that suits your business demands">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon -->		
		
  <link rel="icon" href="icon.png" type="image/png" >



		<!-- all css here -->

		<!-- bootstrap v3.3.6 css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- nivo-slider css -->
		<link rel="stylesheet" href="lib/css/nivo-slider.css" />
		<link rel="stylesheet" href="lib/css/preview.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="lib/css/style.css" type="text/css" media="screen" />

		<link rel="stylesheet" type="text/css" href="js/jquery.gritter/css/jquery.gritter.css" />
		<!-- owl.carousel css -->
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.transitions.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- font-awesome css -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- venobox css -->
		<link rel="stylesheet" href="css/venobox.css">
		<!-- style css -->
		<link rel="stylesheet" href="style.css">
		<!-- responsive css -->
		<link rel="stylesheet" href="css/responsive.css">

		<!-- modernizr css -->
		<script src="js/vendor/modernizr-2.8.3.min.js"></script>
		<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>

		<script type="text/javascript" >
			
$(document).ready(function(){
	

$('#submit').click(function(){
	var name =$('#name').val();
	var email =$('#email').val();
	var subject =$('#subject').val();
	var message =$('#message').val();


 	$.ajax({
			type:'post',
			url:'ajaxrequest/ajax.contactus.php',
			data:'name='+name+'&email='+email+'&subject='+subject+'&message='+message,

			success:function(msg){
				if(msg=="success"){
						
                        $.notiny({ 
                            text: "Sended -We will reply you soon :-)",
                            image:'img/ok.png',
                            
                           

                      });



                         $("#contactForm input").val('');
                          $("#message").val('');
						}
			}

 	}) //ajax closed

}) //submit closed
	

}) //jquery closed
		</script>
<style type="text/css">
	.footer-img {
    	padding-bottom: 7px;
    	margin-top: 0% ; 
	}
	.contact-form textarea#message {
    	height: 224px;
	}
	.about-well a img {
    	margin-top: -6%;
	}
	.about-well p {
    	margin-top: 8%;
	}
	h1.title2 {
    margin-top: -7%;
}
	@media screen and (min-width: 300px) and (max-width: 767px){
		.features-accordion .panel-title a{
			font-size: 8px;	
		}
		.features-accordion .panel-title a.collapsed::after, .features-accordion .panel-title a::after {
	    	line-height: 43px;
	   	    right: 10px;
	   	    padding-left: 12px;
		}	
		.panel-default>.panel-heading+.panel-collapse>.panel-body {
 		   	font-size: 9px;
		}
		.skill .progress-bar > span {
  			 margin-right: 0px;
		}
	}
  @media screen and (min-width: 692px) and (max-width: 878px){
    .about-well p {
        margin-top: -5%;
        font-size: 9px;
    }
  }

</style>
	
	</head>
		<body data-spy="scroll" data-target="#navbar-example">

		
       <div id="preloader"></div> 
		<header>
			<!-- header-area start -->
			<div id="sticker" class="header-area">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12">
                            <ul class="top-right text-right hidden-xs hidden-sm">
                                <li>
                                    <a href="https://www.instagram.com/zaptoxx/" class="instagram-icon">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://mail.google.com/mail/#inbox" class="fa-google-plus-icon">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/Zaptox_site" class="twitter-icon">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/zaptox.sq/" class="facebook-icon">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                            </ul>
							<nav class="navbar navbar-default">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<!-- Brand -->
									<a class="navbar-brand page-scroll sticky-logo" href="index.html">
										<img src="img/logo/logo1.png" alt="">
						</a>
								</div>
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
									<ul class="nav navbar-nav navbar-right">
										<li class="active">
											<a class="page-scroll" href="#home">Home</a>
										</li>
										<li>
											<a class="page-scroll" href="#about">About</a>
										</li>
										<li>
											<a class="page-scroll" href="#services">Services</a>
										</li>
                                        <li>
                                            <a class="page-scroll" href="#portfolio">Work</a>
                                        </li>
										<li>
											<a class="page-scroll" href="#team">Team</a>
										</li>	              	
										<li>
											<a class="page-scroll" href="#blog">Blog</a>
										</li>		              	              	              	
										<li>
											<a class="page-scroll" href="#contact">Contact</a>
										</li>		              			              
									</ul>
								</div>
								<!-- navbar-collapse -->
							</nav>
							<!-- END: Navigation -->
						</div>
					</div>
				</div>
			</div>
			<!-- header-area end -->	
		</header>
		<!-- header end -->
		<!-- Start Slider Area -->
		<div id="home" class="slider-area">
			<div class="bend niceties preview-2">
				<div id="ensign-nivoslider" class="slides">	
					<img src="img/slider/slider1.jpg" alt="" title="#slider-direction-1"  />
					<img src="img/slider/slider2.jpg" alt="" title="#slider-direction-2"  />
					<img src="img/slider/slider3.jpg" alt="" title="#slider-direction-3"  />
				</div>
				<!-- direction 1 -->
				<div id="slider-direction-1" class="slider-direction slider-one">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="slider-content">
                                    <div class="intro-border">
                                        <div class="intro-content">
                                            <!-- layer 2 -->
                                            <div class="layer-1-2  wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                                <h1 class="title3">The ideal Solutions <br> about your business </h1>
                                            </div>
                                            
                                            <!-- layer 3 -->
                                            <div class="layer-1-3  wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                                <a href="#services" class="ready-btn right-btn page-scroll" >See Services</a>
                                                <a href="#contact" class="page-scroll ready-btn"  title="Get Quote" >Contact Us</a>
                                            </div>
                                        </div>
								    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- direction 2 -->
                <div id="slider-direction-2" class="slider-direction slider-two">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="slider-content">
                                    <div class="intro-border">
                                        <div class="intro-content">
                                            <!-- layer 2 -->
                                            <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                                <h1 class="title2">We convert your strategies into software systems & technology processes that elevate your business performance.
                                                </h1>
                                            </div>
                                            <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                               
                                            </div>
                                            <!-- layer 3 -->
                                            <div class="layer-1-3  wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                                <a href="#services" class="ready-btn right-btn page-scroll" >See Services</a>
                                               <a href="#contact" class="page-scroll ready-btn"  title="Get Quote" >Contact Us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<!-- direction 3 -->
                <div id="slider-direction-3" class="slider-direction slider-three">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="slider-content">
                                    <div class="intro-border">
                                        <div class="intro-content">
                                            <!-- layer 2 -->
                                            <div class="layer-1-2  wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                                <h1 class="title2">Highly Qualified Designers <br/> 
                                                That analyze your ideas</h1>
                                            </div>
                                            <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                                <h6 class="title3">Good Design is the Good Business</h6>
                                            </div>
                                            <!-- layer 3 -->
                                            <div class="layer-1-3  wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                                <a href="#services" class="ready-btn right-btn page-scroll" >See Services</a>
                                               <a href="#contact" class="page-scroll ready-btn"  title="Get Quote" >Contact Us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
		<!-- End Slider Area -->
        <!-- Start About Area -->
        <div id ="about" class="about-area page-scroll area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline">
                            <h2>About Zaptox Solutions</h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- start about text -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="about-middle">
                            <div class="about-well">
                                <p>Welcome to Zaptox, your ideal source for all software professional services in Pakistan.
We are committed to give you the very best of our customized IT solutions services, with a focus on high quality, customer satisfaction and uniqueness.
We create a wide variety of IT services and features that empower our customers to grow their business.<br/>
We are also dedicated to frequently study and research the rapid changes of international markets in order to adjust to new technologies and enable our clients to face any future techno-changes and any technological transformations arising today and tomorrow's digital age.
<br/>
<b>Our Vision</b> With the use our skills, expertise to develop software solutions,services and technologies that leaves a considerable impact globally.
<br/>
<b>Our Mission</b> is to developing software solutions and services that are used as leverage to improve our business as well as our clients; domestically and globally.
                                </p>
                                <ul class="about-list hidden-sm">
                                    <li><a href="#">Our Team</a></li>
                                    <li><a href="#">Our Projects</a></li>
                                 
                                   
                                   
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End col End about text --> 
                    <!-- start about images -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="about-left">
                            <div class="about-well">
                                <a href="#">
                                    <img src="img/about/a.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>	
                    <!-- End About images -->
                </div>
            </div>
        </div>
        <!-- end About -->
        
		<!-- Start Service area -->
		<div id="services" class="services-area area-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline">
						<h2>Our Services</h2>
						<hr>
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="services-contents">
						<!-- Start Left services -->
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="about-move">
								<div class="services-details">
									<div class="single-services">
										<a class="services-icon" href="#">
											<i class="fa fa-mobile"></i>
										</a>
										<h4>Mobile Applications</h4>
										<p>
                                            We transform your business model into interactive hybird mobile application,or if you suggest a perticular platform for app then most welcome.
										</p>
									</div>
								</div>
								<!-- end about-details -->
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="about-move">
								<div class="services-details">
									<div class="single-services">
										<a class="services-icon" href="#">
											<i class="fa fa-television"></i>
										</a>
										<h4>Web Design</h4>
										<p>
                                            We have passionate , experienced web designers that take the requirement and design your interative  business model website.
										</p>
									</div>
								</div>
								<!-- end about-details -->
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
								<!-- end col-md-4 -->
							<div class=" about-move">
								<div class="services-details">
									<div class="single-services">
										<a class="services-icon" href="#">
											<i class="fa fa-file-text"></i>
										</a>
										<h4>Web Development</h4>
										<p>
                                            We have experienced PHP, JAVA EE & ASP .NET developers available everytime.
                                           Our first priority is to efficient and secure website .
										</p>
									</div>
								</div>
								<!-- end about-details -->
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<!-- end col-md-4 -->
							<div class=" about-move">
								<div class="services-details">
									<div class="single-services">
										<a class="services-icon" href="#">
                                            <i class="fa fa-desktop"></i>
									</a>
										<h4>Desktop Applications</h4>
										<p>
                                            We will do desktop aplications too, On java and On .net. 

										</p>
									</div>
								</div>
								<!-- end about-details -->
							</div>
						</div>
						<!-- End Left services -->
						<div class="col-md-4 col-sm-4 col-xs-12">
							<!-- end col-md-4 -->
							<div class=" about-move">
								<div class="services-details">
									<div class="single-services">
										<a class="services-icon" href="#">
											<i class="fa fa-database"></i>
										</a>
										<h4>BigData & Analytics</h4>
										<p>
                                            We have best,expert data scientist that fulfill your demands.
										</p>
									</div>
								</div>
								<!-- end about-details -->
							</div>
						</div>
						<!-- End Left services -->
						<div class="col-md-4 col-sm-4 col-xs-12">
							<!-- end col-md-4 -->
							<div class=" about-move">
								<div class="services-details">
									<div class="single-services">
										<a class="services-icon" href="#">
											<i class="fa fa-pencil-square-o"></i>
										</a>
										<h4>Graphic Design</h4>
										<p>
                                            Senior graphic designers are always siting on their seats ,so contact us
										</p>
									</div>
								</div>
								<!-- end about-details -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Service area -->

		<!-- Start portfolio Area -->
        <div id="portfolio" class="portfolio-area area-padding text-center fix">
            <div class="container-full">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline head-2">
                            <h2>Our work</h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Start Portfolio -page -->
                    <div class="awesome-project-1 fix">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="awesome-menu ">
                                <ul class="project-menu">
                                    <li>
                                        <a href="#" class="active" data-filter="*" >All</a>
                                    </li>
                                    <li> 
                                        <a href="#" data-filter=".development">development</a>
                                    </li>
                                    <li>
                                        <a href="#" data-filter=".design">design</a>
                                    </li>
                                    <li>
                                        <a href="#" data-filter=".photo">photoshop</a>
                                    </li>
                                </ul>				
                            </div>
                        </div>
                    </div>
                </div>
                <div class="awesome-project-content">
                    <!-- single-awesome-project start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 design development">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#">
                                    <img src="img/portfolio/a.png" alt="" />
                                </a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="img/portfolio/1.jpg">
                                            <h4>Business City</h4>
                                            <span>Web Development</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->
                    <!-- single-awesome-project start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 photo">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#">
                                    <img src="img/portfolio/b.png" alt="" />
                                </a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="img/portfolio/2.jpg">
                                      	 <h4>Blue Sea</h4>
                                            <span>Photosho</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->
                    <!-- single-awesome-project start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 design">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#">
                                    <img src="img/portfolio/c.png" alt="" />
                                </a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="img/portfolio/3.jpg">
                                            <h4>Beautiful Nature</h4>
                                            <span>Web Design</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->
                    <!-- single-awesome-project start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 photo development">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#">
                                    <img src="img/portfolio/d.png" alt="" />
                                </a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="img/portfolio/4.jpg">
                                            <h4>Creative Team</h4>
                                            <span>Web Development</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->
                    <!-- single-awesome-project start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 development">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#">
                                    <img src="img/portfolio/e.png" alt="" />
                                </a>
                                <div class="add-actions text-center text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="img/portfolio/5.jpg">
                                            <h4>Beautiful Flower</h4>
                                            <span>Web Development</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->
                    <!-- single-awesome-project start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 design photo">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#">
                                    <img src="img/portfolio/f.png" alt="" />
                                </a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="img/portfolio/6.jpg">
                                            <h4>Night Hill</h4>
                                            <span>Web Development</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->

                    <!-- single-awesome-project start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 design development">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#">
                                    <img src="img/portfolio/g.png" alt="" />
                                </a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="img/portfolio/7.jpg">
                                            <h4>Business City</h4>
                                            <span>Web Development</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->
                    <!-- single-awesome-project start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 photo">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#">
                                    <img src="img/portfolio/h.png" alt="" />
                                </a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="img/portfolio/8.jpg">
                                            <h4>Blue Sea</h4>
                                            <span>Photosho</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->
                    <!-- single-awesome-project start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 design">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#">
                                    <img src="img/portfolio/i.png" alt="" />
                                </a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="img/portfolio/9.jpg">
                                            <h4>Beautiful Nature</h4>
                                            <span>Web Design</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->
	




                </div>
            </div>	
        </div>
        <!-- awesome-portfolio end -->


        <!-- Start counter Area -->
        <div class="fun-fact-area">
            <div class="container">
                <div class="row">
                    <div class="fun-wrap">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <!-- fun_text  -->
                            <div class="fun_text">
                                <a href="#"><i class="fa fa-handshake-o"></i></a>
                                <div class="fun-content">
                                    <span class="counter">67</span>
                                    <h4>Project complete</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <!-- fun_text  -->
                            <div class="fun_text">
                                <a href="#"><i class="fa fa-trophy"></i></a>
                                <div class="fun-content">
                                    <span class="counter">5</span>
                                    <h4>Award winner</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <!-- fun_text  -->
                            <div class="fun_text">
                                <a href="#"><i class="fa fa-users"></i></a>
                                <div class="fun-content">
                                    <span class="counter">20</span>
                                    <h4>Happy Clients</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End counter -->	

        <!-- Start Testimonials -->
		<div class="testimonials-area area-padding">
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- Start testimonials Start -->
                        <div class="testimonial-content text-center">
                            <a class="quate" href="#"><i class="fa fa-quote-right"></i></a>
                            <!-- start testimonial carousel -->
                            <div class="testimonial-carousel">
                                <div class="single-testi">
                                    <div class="testi-text">
                                        <p>
                                        	Keep it up guys 
                                           <br>My personally good experience with zaptox solutions, best  youngester group 

                                        </p>
                                        <h6>Hamza Rashid - HamSecure</h6>
                                    </div>
                                </div>
                                <!-- End single item -->
                                <div class="single-testi">
                                    <div class="testi-text">
                                       Keep it up guys 
                                           <br>My personally good experience with zaptox solutions, best  youngester group 

                                        </p>
                                        <h6>Hamza Rashid - HamSecure</h6>
                                    </div>
                                </div>
                                <!-- End single item -->
                                <div class="single-testi">
                                    <div class="testi-text">
                                        Keep it up guys 
                                           <br>My personally good experience with zaptox solutions, best  youngester group 

                                        </p>
                                        <h6>Hamza Rashid - HamSecure</h6>
                                    </div>
                                </div>
                                <!-- End single item -->
                            </div>
                        </div>
                        <!-- End testimonials end -->
                    </div>
                    <!-- End Right Feature -->
                </div>
            </div>
		</div>
		<!-- End Testimonials -->	


        <!-- Start Faq Area -->
        <div class="faq-area area-padding fix">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="text-left section-2">
                            <h2>Some faq questions?</h2>
                            <hr class="separator">
                            <p class="head-content">
                            	Zaptox Solutions Frequently Asked Questions

                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="faq-details">
                            <div class="features-accordion">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Why  Zaptox Solution?</a></h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
Our professionals with great industry knowledge & years of expertise ensure that your business reaches unrivaled position & sets a new level of success.                                          </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                  What time zone is Zaptox in ?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                             We are located in +5 GMT time zone. The exact time of contact is certainly whatever suits you best, but it is best to make a time at which you can meet daily. A planned daily meeting makes the development process go much more smoothly.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                   What is our Software Development Process?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                               We use Agile Software Development Methodology.
                                            </div>

                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingFour">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
                                                    Do you provide post-development maintenance?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                            <div class="panel-body">
                                                Yes, we do support all software we design on the basis of a product license. This generally includes bug tracking and fixing. Feature enhancements and developments are handled.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Gallery area -->

        <!-- Team area start -->	
        <div id="team" class="team-area area-padding">
            <div class="container">
                <!-- section head -->
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline">
                            <h2>Our team</h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="team-member">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img src="img/team/saad.png" width="300" alt="">
                                    </a>
                                    <div class="team-hover">
                                        <ul>
                                            <li><a href="https://www.facebook.com/saad.coder"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-content text-center">
                                    <h4><a href="https://www.facebook.com/saad.coder">Saad Jatt</a></h4>
                                    <p>Web Developer</p>
                                </div>
                            </div>
                        </div>
                      
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="https://www.facebook.com/ammie.sid">
                                        <img src="img/team/vijay.jpg" alt="">
                                    </a>
                                    <div class="team-hover">
                                        <ul>
                                            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-content text-center">
                                    <h4><a href="#">Vijay Kumar</a></h4>
                                    <p>Software Engineer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img src="img/team/mehdi.jpg" alt="">
                                    </a>
                                    <div class="team-hover">
                                        <ul>
                                            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-content text-center">
                                    <h4><a href="#">Mehdi Raza Lakho</a></h4>
                                    <p>Android Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- team area end -->	

        <!-- Start Wellcome Area -->
        <div class="wellcome-area parallax-bg" data-stellar-background-ratio="0.6">
            <div class="well-bg area-padding">
                <div class="test-overly"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline white-headline">
                                <h2>Our best skill</h2>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                           <div class="skill-bg">
                               <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="skill-images">
                                            <img src="img/about/ab.png" alt="">						
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="our-skill-team fix">
                                            <div class="skill">
                                                <!-- progress start -->
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped wow fadeInLeft" data-progress="30%" style="width: 100%;" data-wow-duration="1.5s" data-wow-delay="1.2s"> <span>100%</span>
                                                    </div>
													<div class="lead">Tecchnical Skills</div>
                                                </div>
                                                <!-- progress end -->						
                                                <!-- progress start -->
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped wow fadeInLeft" data-progress="60%" style="width: 100%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>100%</span> </div>
                                                    <div class="lead">Communication Skills</div>
                                                </div>
                                                <!-- progress end -->
                                                 <div class="progress">
                                                    <div class="progress-bar progress-bar-striped wow fadeInLeft" data-progress="60%" style="width: 100%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>100%</span> </div>
                                                    <div class="lead">Business Skills</div>
                                                </div>
                                                <!-- progress start -->			
                                                 <div class="progress">
                                                    <div class="progress-bar progress-bar-striped wow fadeInLeft" data-progress="60%" style="width: 100%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>100%</span> </div>
                                                    <div class="lead">Problem Solving Skills</div>
                                                </div>				
                                            
                                                <!-- progress end -->
                                                <!-- progress start -->
                                            
                                                <!-- progress end -->						
                                            </div>							
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Wellcome Area -->
       
       	

        <!--Blog Area Start-->
        <div id="blog" class="blog-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline">
                            <h2>Latest Tech Posts</h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="blog-grid">
                        <!-- Start single blog -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="banner-box">
                                <a href="#" class="image-blog">
                                    <img src="img/blog/android.png" alt="">
                                    <span class="date-time">
                                        <span class="days">05</span>
                                        <span class="months">Fab</span>
                                    </span>
                                </a>
                                <div class="single-blog">
                                    <a href="#"><h4 class="sec-head">Security tips for Android Developers</h4></a>
                                    <p class="author">By Saad Jatt<span> ( 11 comments )</span></p>
                                    <p>Android has worked in security includes that altogether diminish the recurrence and effect of use security issues. The framework is composed so you can ordinarily assemble your applications with the default framework and record consents and stay away from troublesome choices about security. </p>
                                    <a class="blog-btn" href="http://zaptox.com/blog/index.php/2018/02/26/security-tips-for-android-developers/"> Read More..</a>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="banner-box">
                                <a href="#" class="image-blog">
                                    <img src="img/blog/emo1.png" alt="">
                                    <span class="date-time">
                                        <span class="days">19</span>
                                        <span class="months">Mar</span>
                                    </span>
                                </a>
                                <div class="single-blog">
                                    <a href="#"><h4 class="sec-head">Musical application that based on Emotions</h4></a>
                                    <p class="author">By saadjatt<span> ( 07 comments )</span></p>
                                    <p>Determining human emotions for interaction between humans and machine plays an important role in communication systems. Facial expression analysis is the most expressive way to display human emotion.We propose a novel detecting and recognition method for facial expression and emotion </p>
                                    <a class="blog-btn" href="http://zaptox.com/blog/index.php/2018/02/26/184/"> Read More..</a>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="banner-box">
                                <a href="#" class="image-blog">
                                    <img src="img/blog/six3.jpg" alt="">
                                    <span class="date-time">
                                        <span class="days">19</span>
                                        <span class="months">Mar</span>
                                    </span>
                                </a>
                                <div class="single-blog">
                                    <a href="#"><h4 class="sec-head">SixthSense Wearable Gestural Interface</h4></a>
                                    <p class="author">By saadjatt<span> ( 05 comments )</span></p>
                                    <p>‘SixthSense’ is a wearable gestural interface that augments the physical world around us with digital information and lets us use natural hand gestures to interact with that information.We’ve evolved over millions of years to sense the world around.we use our five natural senses to perceive information about it; 

 </p>
                                    <a class="blog-btn" href="http://zaptox.com/blog/index.php/2018/01/14/sixthsense-wearable-gestural-interface/"> Read More..</a>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                    </div>
                </div>
            </div>
        </div>
        <!--End of Blog Area-->	

        
        <!-- Start contact Area -->
        <div id="contact" class="contact-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline">
                            <h2>Contact us</h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="contact-content">
                       
                        <!-- Start contact icon column -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Start Map -->
                            <div class="map-area">
                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7211.273299797971!2d68.37810252218034!3d25.34997093108009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394c71cb450b92c1%3A0xcd289ac90a238994!2sGulshan+e+Zeal+Pak+CHS%2C+Hyderabad%2C+Pakistan!5e0!3m2!1sen!2sus!4v1515252828932" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            <!-- End Map -->
                        </div>
                        <!-- End contact icon -->

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="contact-form">
                                <div class="row">
                                    <form id="contactForm" method="POST" class="contact-form">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" id="subject" class="form-control" placeholder="Subject" required data-error="Please enter your message subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <textarea id="message" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                            <button type="submit" id="submit" class="add-btn contact-btn">Send Message</button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                            <div class="clearfix"></div>
                                        </div>   
                                    </form>  
                                </div>
                            </div>
                        </div>
                        <!-- End contact Form -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Area -->

		<!-- Start Footer bottom Area -->
		<footer>
			<div class="footer-area">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="footer-content">
								<div class="footer-head">
									<div class="footer-img">
										<a href="#">
											<img src="img/logo/logo1.png" alt="">
										</a>
									</div>
                                    <p>Zaptox is a software house established in 2017. We provide innovative and fully integrated solutions that suits your business demands</p>
									<div class="footer-icons">
										<ul>
											<li>
												<a href="https://www.facebook.com/Zaptox-Solutions-123539538326595/">
													<i class="fa fa-facebook"></i>
												</a>
											</li>
											<li>
												<a href="https://twitter.com/Zaptox_site">
													<i class="fa fa-twitter"></i>
												</a>
											</li>
											<li>
												<a href="https://www.linkedin.com/in/zaptox-solutions-19b655149/">
													<i class="fa fa-linkedin"></i>
												</a>
											</li>
											<li>
												<a href="https://www.youtube.com/channel/UCL2sFVUCzZN6d0kaRUFnJ6g?disable_polymer=true">
													<i class="fa fa-youtube"></i>
												</a>
											</li>
											
                                            <li>
                                                <a href="https://www.instagram.com/zaptox/">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
										</ul>
									</div>
								</div>
							</div>
						</div>
                        <!-- end single footer -->
                        <div class="col-md-4 hidden-sm col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Recent Post</h4>
                                    <hr>
                                    <div class="recent-post">
                                        <!-- start single post -->
                                        <div class="recent-single-post">
                                            <div class="post-img">
                                                <a href="http://zaptox.com/blog/index.php/2018/02/26/184/">
                                                    <img src="img/blog/emo1.png" alt="">
                                                </a>
                                            </div>
                                            <div class="pst-content">
                                                <p><a href="http://zaptox.com/blog/index.php/2018/02/26/184/">Determining and recognizing human emotions for interaction between humans...</a></p>
                                            </div>
                                        </div>
                                        <!-- End single post -->
                                        <!-- start single post -->
                                        <div class="recent-single-post">
                                            <div class="post-img">
                                                <a href="http://zaptox.com/blog/index.php/2018/02/26/security-tips-for-android-developers/">
                                                    <img src="img/blog/android.png" alt="">
                                                </a>
                                            </div>
                                            <div class="pst-content">
                                                <p><a href="http://zaptox.com/blog/index.php/2018/02/26/security-tips-for-android-developers/">Android has worked in security includes that altogether diminish the recurrence...</a></p>
                                            </div>
                                        </div>
                                        <!-- End single post -->
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>information</h4>
                                    <hr>
                                    <p>
                                        
                                    </p>
                                    <div class="footer-contacts">
                                        <p><span>Phone:</span> +92 308 8337790</p>
                                        <p><span>Phone:</span> +92 333 2603930</p>
                                        <p><span>Email:</span> zaptox.site@gmail.com</p>
                                        <p><span>Working Hours:</span> 9am - 6pm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
						<!-- end single footer -->
                    
                        <!-- end single footer -->
					</div>
				</div>
			</div>
			<div class="footer-area-bottom">
			   <div class="container">
				   <div class="row">
					  <div class="col-md-12 col-sm-12 col-xs-12">
						  <div class="copyright text-center">
							<p>
								Copyright © 2018 
                                <a href="#"> Zaptox</a>
								 All Rights Reserved
							</p>
						  </div>
					   </div>
				   </div>
			   </div>
			</div>
		</footer>
		<!-- End Footer bottom Area -->

        <!-- Modal -->
     
        <!-- END Modal -->
		
		<!-- all js here -->


		<!-- jquery latest version -->
		<script src="js/vendor/jquery-3.1.min.js"></script>
		<!-- bootstrap js -->
		<script src="js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- venobox js -->
		<script src="js/venobox.min.js"></script>
		<!-- wow js -->
		<script src="js/wow.min.js"></script>
		<!-- Sttelar js -->
        <script src="js/jquery.stellar.min.js"></script>
		<!-- Form validator js -->
		<script src="js/form-validator.min.js"></script>
        <!-- counterup js -->
        <script src="js/jquery.counterup.min.js"></script>
        <!-- waypoints js -->
        <script src="js/waypoints.js"></script>
		<!-- easing js -->
		<script src="js/easing.js"></script>
		<!-- Nivo slider js --> 		
		<script src="lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
		<script src="lib/home.js" type="text/javascript"></script>
		<!-- isotope js -->
		<script src="js/isotope.pkgd.min.js"></script>
		<!-- plugins js -->
		<script src="js/plugins.js"></script>
		<!-- main js -->
		<script src="js/main.js"></script>
        <!-- Google Map js -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdWLY_Y6FL7QGW5vcO3zajUEsrKfQPNzI"></script>
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript" src="js/mapcode.js"></script>
	</body>
<script src="js/notiny.js"></script>
<link href="css/notiny.css" rel="stylesheet" />
</html>