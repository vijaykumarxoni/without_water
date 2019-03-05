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
		<meta name="viewoprt" content="width=device-width, initial-scale=1">

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
											<a class="page-scroll" href="#video">Video</a>
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
                                                <h1 class="title3">Saving Water,  <br> without wasting it. </h1>
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
                                                <h1 class="title2">
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
                                                <h1 class="title2">The actual problem we have seen cases of people dying in dehydration which is the main reason why we have come up with the idea of not wasting but reusing it. 
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
                                <p>With increasing population number of problems increases too be it is a water or any other resource, we as a part of society has come up with the solution of saving water moreover we have given idea how to save water efficiently which is inspired by the gray water recycling in which waste water is generated in our homes is used like water from showers, kitchen, basins is collected which is further used in irrigation backyard gardens and further more but with a modifications like two water tanks and providing safe drinking water that wasn't provided by gray water system itself.

<br/>
<b>Our Mission</b> Waste water generated in our homes is recycled i.e. water from showers, kitchen, basins is collected which is further processed and can be used in house-hold and for drinking purpose.
<br/>

<b>Our Vision</b> In future we will make a distributed system for commercial areas and societies.

                                </p>
                               
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
        

        <!-- Start Wellcome Area -->
        <div class="wellcome-area parallax-bg" id="video" data-stellar-background-ratio="0.6">
            <div class="well-bg area-padding">
                <div class="test-overly"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline white-headline">
                                <h2>Our Idea Video</h2>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                           <div class="skill-bg">
                               <div class="row">
                                
                                <div class="col-xs-12 col-sm-12">
	<div class="box rte">
		
		<iframe width="100%" height="400" frameborder="0"  src="https://www.youtube.com/embed/hLK5KXVhyLI"></iframe>
	</div>
</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Wellcome Area -->
       
       	
		<!-- Start portfolio Area -->
        
        <!-- Start counter Area -->
     
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
                                           <br>Such a problem solving idea 

                                        </p>
                                        <h6>Adnan Ashraf</h6>
                                    </div>
                                </div>
                                <!-- End single item -->
                                <div class="single-testi">
                                    <div class="testi-text">
                                       Keep it up guys 
                                           <br>Awesome Idea

                                        </p>
                                        <h6>Mehdi Raza Lakho/h6>
                                    </div>
                                </div>
                                <!-- End single item -->
                                <div class="single-testi">
                                    <div class="testi-text">
                                        Keep it up guys 
                                           <br>One the best way to reuse the water.

                                        </p>
                                        <h6>Sajid Ali</h6>
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
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> What's our idea?</a></h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
With increasing population number of problems increases too be it is a water or any other resource, we as a part of society has come up with the solution of saving water moreover we have given idea how to save water efficiently which is inspired by the gray water recycling in which waste water is generated in our homes is used like water from showers,kitchen,basins is collected which is further used in irrigation backyard gardens and further more but with a modifications like two water tanks and providing safe drinking water that wasn't provided by gray water system itself.
                                       </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                  What is grey water?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">The relatively clean waste water from baths, sinks, washing machines, and other kitchen appliances.

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
                                        <img src="img/team/saad.png"  width="300" height="500" alt="">
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
                                    <p>Database Specilist</p>
                                </div>
                            </div>
                        </div>
                      
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="https://www.facebook.com/ammie.sid">
                                        <img src="img/team/vijay.jpg" alt=""   width="300" height="500">
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
                                    <h4><a href="#">Vijay Kumar Soni</a></h4>
                                    <p>IT Specilist</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img src="img/team/hira.jpg"  width="300" height="500"  alt="">
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
                                    <h4><a href="#">Hira Ansari</a></h4>
                                    <p>Water purity Specilist</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="team-member">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img src="img/team/masood.jpg" width="300" height="500" alt="">
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
                                    <h4><a href="https://www.facebook.com/masood.junejo.7">Masood Junejo</a></h4>
                                    <p>UI UX Specialist</p>
                                </div>
                            </div>
                        </div>
                      
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="https://www.facebook.com/syedsaeed">
                                        <img src="img/team/saeed.jpg"   width="300" height="300" alt="">
                                    </a>
                                    <div class="team-hover">
                                        <ul>
                                            <li><a href="https://www.facebook.com/syedsaeed"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-content text-center">
                                    <h4><a href="#">Saeed Shah</a></h4>
                                    <p>Hardware Specialist</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img src="img/team/amsa.jpg"  width="300" height="500" alt="">
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
                                    <h4><a href="#">Amsa Shaikh</a></h4>
                                    <p>Research Specialist</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- team area end -->	


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
                                    <p>With increasing population number of problems increases too be it is a water or any other resource, we as a part of society has come up with the solution of saving water moreover we have given idea how to save water efficiently which is inspired by the gray water recycling in which waste water is generated in our homes is used like water from showers,kitchen,basins is collected which is further used in irrigation backyard gardens and further more but with a modifications like two water tanks and providing safe drinking water that wasn't provided by gray water system itself.
</p>
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
                                        <p><span>Phone:</span> +92 331 3325691</p>
                                        <p><span>Email:</span> vijay@zaptox.com</p>
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