<?php
    include "db.php";
?>

<?php
    // get all data from DB
    $query = "SELECT * FROM portfolio_karinanosenko";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("DB query failed.");
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Karina Nosenko</title>
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="icon" href="favicon.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<meta name="keywords" content="Onepage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	    
			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
	</script>
</head>
<body>
	<div class="header" id="head">
		<div class="container"> 
			<div class="header-top">
				<div class="logo">
					<a href="#"><img src="images/logo.png" alt=""/></a>
				</div>
				<div class="top-menu">
					<span class="menu"> </span>
					<ul>
						<nav class="cl-effect-5">
							<li><a class="active" href="index.html"><span data-hover="Home">home</span></a></li>
							<li><a href="#about" class="scroll"><span data-hover="about">about</span></a></li>
							<li><a href="#work" class="scroll"><span data-hover="portfolio"><span>portfolio</span></a></li>
							<li><a href="#services" class="scroll"><span data-hover="CV">CV</span></a></li>
							<li><a href="#contact" class="scroll"><span data-hover="contact">contact</span></a></li>
						</nav>
					</ul>
				</div>
				<!--script-nav-->
				<script>
					$("span.menu").click(function(){
						$(".top-menu ul").slideToggle("slow" , function(){});
					});
					</script>
					<div class="clearfix"></div>
				</div>  
				<div class="index-banner">
					<div class="wmuSlider example1">
						<div class="wmuSliderWrapper">
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="banner_center">
										<h2>i am a <span>software engineering</span></h2>
										<h2>student</h2>
									</div>
								</div>
							</article>
							<article style="position: relative; width: 100%; opacity: 1;"> 
								<div class="banner-wrap">
									<div class="banner_center">
										<h1>My name</h1> 
										<h2>is <span>Karina Nosenko</span></h2>
										<h2></h2>
									</div>
								</div>
							</article>
							<article style="position: absolute; width: 100%; opacity: 0;">
								<div class="banner-wrap">
									<div class="banner_center">
										<h1>excited</h1> 
										<h2>by taking <span>complex problems</span></h2>
										<h2>and simplifying them</h2>
									</div>
								</div>
							</article>
					</div>					
				</div>
				<script src="js/jquery.wmuSlider.js"></script> 
				<script>
					$('.example1').wmuSlider();         
				</script> 	           	      
			</div>				
		</div> 
	</div>
	<div class="content">
		<div class="about-section" id="about" id="about">
			<div class="container">
				<div class="about-header">
					<h3>about</h3>
					<div class="about-cont">
						<div class="about-imag">
							<img src="images/pic-9.jpg" alt="" title="Nice to meet you!"/>
						</div>
						<div class="about-text">
							<p>I'm Karina Nosenko, a B.Sc. Software Engineering student.</p> 
							<p class="desk">I have a 2 years of experience as a Data Center specialist in the IDF. There I learned to handle complex tasks, and work as a part of a team. As well, I get a strong practical base of networking and troubleshooting servers and cloud issues.</p>
							<p class="desk">I always loved two things: design and technology, that's why I felt in love with Web. It all started with She Codes web course, where I get the basics of HTML/CSS/JS, and continued in the faculty of Software Engineering at Shenkar - college of Engineering, Design and Art.</p>
						</div>
					</div>
				</div>
				<div class="about-sectiongrids">
					<div class="col-md-6 about-leftgrid">
						<div class="polls">
							<div class="poll">
								<div class="poll-desc">
									<h4>Programming languages</h4>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="skills">
								<div>C &nbsp; C++ &nbsp; JavaScript &nbsp; Dart</div>
							</div>
						</div>
						<div class="polls">
							<div class="poll">
								<div class="poll-desc">
									<h4>Database languages</h4>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="skills">
								<div>MySQL</div>
							</div>
						</div>
						<div class="polls">
							<div class="poll">
								<div class="poll-desc">
									<h4>Client side</h4>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="skills">
								<div>HTML &nbsp; CSS &nbsp; Bootstrap &nbsp; Json &nbsp; AJAX &nbsp; Flutter</div>
							</div>
						</div>
						<div class="polls">
							<div class="poll">
								<div class="poll-desc">
									<h4>Workspaces</h4>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="skills">
								<div>Visual Studio &nbsp; VScode &nbsp; Android Studio &nbsp; Atom &nbsp; MySQL &nbsp; Arduino IDE &nbsp; Git &nbsp; Linux</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 about-rightgrid">
						<div class="polls">
							<div class="poll">
								<div class="poll-desc">
									<h4></h4>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="skills">
								<div><span>♦</span>&nbsp; Ex-member of the first in Israel Google DSC program.</div>
							</div>
						</div>
						<div class="polls">
							<div class="poll">
								<div class="poll-desc">
									<h4></h4>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="skills">
								<div><span>♦</span>&nbsp; Attended a Web course of the She Codes program.</div>
							</div>
						</div>
						<div class="polls">
							<div class="poll">
								<div class="poll-desc">
									<h4></h4>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="skills">
								<div><span>♦</span>&nbsp; Got a Dean's List award for excellence in learning.</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="arrow1">
					<a href="#work" class="scroll"><img src="images/arrow1.png" alt=""/></a>
				</div>
			</div>
		</div>
		<!-- about-section-ends -->
		<div class="works-section" id="work" id="work">
			<div class="works-header">
				<h3>portfolio</h3>
				<p>My projects </p>
			</div>
			<div class="portfolio-section-bottom-row" id="portfolio">
				<div class="container">			
					<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							$('#horizontalTab').easyResponsiveTabs({
								type: 'default', //Types: default, vertical, accordion           
								width: 'auto', //auto or any width like 600px
								fit: true   // 100% fit in a container
							});
						});								
					</script>
					<link rel="stylesheet" href="css/swipebox.css">
					<script src="js/jquery.swipebox.min.js"></script> 
					<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
					</script>
					<div class="sap_tabs">
						<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
							<ul class="resp-tabs-list">
								<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>All</span></li>
								<!-- <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Branding</span></li>
								<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Print</span></li>
								<li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span>Web design</span></li>
								<li class="resp-tab-item" aria-controls="tab_item-4" role="tab"><span>Photography</span></li> -->
								<div class="clearfix"></div>
							</ul>	
							<div id="portfoliolist">
								<div class="resp-tabs-container">
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="tab_img">
											<div id="projects">
												<?php
													while($row = mysqli_fetch_assoc($result)) {
														//output data from each row
														echo '<div class="col-md-3 img-top grid_box">';
														echo '<a href="#"  title="'. $row["name"] .'" data-toggle="modal" data-target="#myModal'. $row["id"] .'">';
														echo '<div class="card">';
														echo '<img src="' . $row["img"] . '" alt="'. $row["name"] .'" style="width:100%">';
														echo '<div class="container">';
														echo '<h4><b>'. $row["name"] .'</b></h4> ';
														echo '<p>'. $row["desc"] . '</p> ';
														echo '</div></div>';
														echo '<span class="zoom-icon"></span> ';              								       
														echo '</a></div>';
													}
												?>								
											</div>
											<?php
												//release returned data
												mysqli_free_result($result);
											?>											
											<?php
												// get all data from DB
												$query = "SELECT * FROM portfolio_karinanosenko";
												$result = mysqli_query($connection, $query);
																								
												if(!$result) {
													die("DB query failed.");
												}
											?>
											<div id="modals">
												<?php
													while($row = mysqli_fetch_assoc($result)) {
														//output data from each row
														echo '<div class="modal" id="myModal'. $row["id"] .'">';
														echo '<div class="modal-dialog">';
														echo '<div class="modal-content">';											  
														echo '<div class="modal-header">';
														echo '<h4 class="modal-title">'. $row["name"] .'</h4>';
														echo '<button type="button" class="close" data-dismiss="modal">&times;</button>';
														echo '</div>';
														echo '<div class="modal-body">';
														echo '<img src="'. $row["img"] .'" alt="'. $row["name"] .'" title="'. $row["name"] .'">';
														echo '<br><br>';
														echo '<p>'. $row["text"] .'</p>';
														echo '<br>';
														echo '<span class="technologies">'. $row["technologies"] .'</span>';
														echo '<br><br>';
														echo '<span><b>GitHub: </b><a href="'. $row["github"] .'" target="_blank">'.$row["github"].'</a></span>';
														echo '</div>';
														echo '<div class="modal-footer">';
														echo '<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>';
														echo '</div></div></div></div>';
													}
												?>
												<?php
													//release returned data
													mysqli_free_result($result);
												?>
											</div>
											<div class="clearfix"></div>	
										</div>																				
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="tab_img">
											<div class="col-md-3 img-top grid_box">
													<a href="images/pic-5.jpg" class="swipebox"  title="Image Title">
														<img src="images/pic-5.jpg" class="img-responsive" alt="">
														<span class="zoom-icon"></span> 
													</a>
												</div>
												<div class="col-md-3 img-top grid_box">
													<a href="images/pic-6.jpg" class="swipebox"  title="Image Title">
														<img src="images/pic-6.jpg" class="img-responsive" alt="">
														<span class="zoom-icon"></span> 
													</a>
												</div>
												<div class="col-md-3 img-top grid_box">
													<a href="images/pic-7.jpg" class="swipebox"  title="Image Title">
														<img src="images/pic-7.jpg" class="img-responsive" alt="">
														<span class="zoom-icon"></span> 
													</a>
												</div>
												<div class="col-md-3 img-top grid_box">
													<a href="images/pic-8.jpg" class="swipebox"  title="Image Title">
														<img src="images/pic-8.jpg" class="img-responsive" alt="">
														<span class="zoom-icon"></span> 
													</a>
												</div>
												
												<div class="clearfix"></div>	
										</div>	 	        					 
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
										
										<div class="tab_img">
												<div class="col-md-3 img-top grid_box">
													<a href="images/pic-2.jpg" class="swipebox"  title="Image Title">
														<img src="images/pic-2.jpg" class="img-responsive" alt="">
														<span class="zoom-icon"></span> 
													</a>
												</div>
												<div class="col-md-3 img-top grid_box">
													<a href="images/pic-3.jpg" class="swipebox"  title="Image Title">
														<img src="images/pic-3.jpg" class="img-responsive" alt="">
														<span class="zoom-icon"></span> 
													</a>
												</div>
												<div class="col-md-3 img-top grid_box">
													<a href="images/pic-4.jpg" class="swipebox"  title="Image Title">
														<img src="images/pic-4.jpg" class="img-responsive" alt="">
														<span class="zoom-icon"></span> 
													</a>
												</div>
												
													<div class="clearfix"></div>
										</div>		        					 
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
										<div class="tab_img">
												<div class="col-md-3 img-top grid_box">
													<a href="images/pic-1.jpg" class="swipebox"  title="Image Title">
														<img src="images/pic-1.jpg" class="img-responsive" alt="">
														<span class="zoom-icon"></span> 
													</a>
												</div>
												<div class="col-md-3 img-top grid_box">
													<a href="images/pic-2.jpg" class="swipebox"  title="Image Title">
														<img src="images/pic-2.jpg" class="img-responsive" alt="">
														<span class="zoom-icon"></span> 
													</a>
												</div>
												
													<div class="clearfix"></div>
										</div>	
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-4">
										<div class="tab_img">
												<div class="col-md-3 img-top grid_box">
													<a href="images/pic-1.jpg" class="swipebox"  title="Image Title">
														<img src="images/pic-1.jpg" class="img-responsive" alt="">
														<span class="zoom-icon"></span> 
													</a>
												</div>
												
												<div class="clearfix"></div>
										</div>	
									</div>										
								</div>	
							</div>
						</div>
					</div>						
					<div class="arrow">
						<a href="#services" class="scroll"><img src="images/arrow.png" alt=""/></a>
					</div>
				</div>
			</div>
		</div>
		<!-- portfolio-section-ends -->
		<div class="services-section" id="services">
			<div class="container"> 
				<div class="services-header">
					<h3>CV</h3>
					<p>Here you can download my CV. </p>
				</div>
				<div class="services-sectiongrids">
					<div class="col-md-4 services-grid">
						<img src="images/img1.png" alt=""/>
						<h4></h4>
						<p></p>
					</div>
					<div class="col-md-4 services-grid">
						<a href="https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:43c78094-029b-447d-90f1-8f3630d6ea7b" target="_blank" title="karina_cv"><img src="images/img2.png" alt=""/></a>
							<a href="https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:43c78094-029b-447d-90f1-8f3630d6ea7b" target="_blank" title="karina_cv"><h4>Download CV</h4></a>
						<p>Tap to open a PDF file.</p>
					</div>
					<div class="col-md-4 services-grid">
						<img src="images/img3.png" alt=""/>
						<h4></h4>
						<p></p>
					</div>
					<div class="clearfix"></div>
					<div class="arrow1">
						<a href="#contact" class="scroll"><img src="images/arrow1.png" alt=""/></a>
					</div>
				</div>
			</div>
		</div>
		<!-- services-section-ends -->
		<div class="footer-section" id="contact" id="contact">
			<div class="container"> 
				<div class="contact-header">
					<h3> contact</h3>
						<p>Feel free to contact me in any of the ways given here. 
							<br><br>
							<b>Karina Nosenko</b>
							<br>
							<b>Email: </b>karina4nosenko@gmail.com
							<br>
							<b>Phone: </b>+972-54-5491128
						</p>
				</div>
				<div class="social-icon">		
					<a href="https://github.com/karina-nosenko" title="GitHub" target="_blank"><i class="icon1"></i></a>			
					<a href="https://www.linkedin.com/in/karina-nosenko/" target="_blank"><i class="icon2" title="LinkedIn"></i></a>		
					<a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSBnqGMWslqwLhnCvCXvTvtQvMkfgXCmvPxMpQqVtLVXhvgzvZQFCHmZpCcWZPCmmWSSmBKr" title="karina4nosenko@gmail.com" target="_blank"><i class="icon3"></i></a>
					<a href="tel:972545491128"><i class="icon4" title="+972-545491128"></i></a>
				</div>
				<div class="contact">
					<form action="https://formsubmit.co/karina4nosenko@gmail.com" method="POST">
						<div class="col-md-4 contactgrid">
							<input type="text" class="text" value=" Name" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' name';}">
						</div>
						<div class="col-md-4 contactgrid">
							<input type="text" class="text" value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'email';}">
						</div>
						<div class="col-md-4 contactgrid">
							<input type="text" class="text" value="Phone" name="phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'phone';}">
						</div>
						<div class="col-md-8 contactgrid1">
							<textarea name="message" onfocus="if(this.value == 'Your Message') this.value='';" onblur="if(this.value == '') this.value='Your Message';" >Your Message</textarea>
						</div>
						<div class="col-md-4 contactgrid2">
							<input type="submit" value="[send message]">
						</div>
					<div class="clearfix"></div>
					</form>
				</div>
				<div class="footer-bottom">
					<p>&copy; 2021 Onepage . All rights  Reserved | Template by<a href="http://templatestock.com" target="target_blank">Template Stock</a> <br> <a href="https://www.shenkar.ac.il/he/departments/engineering-software-department" target="target_blank">תואר ראשון בהנדסת תוכנה בשנקר</a></p>
				</div>
				<script type="text/javascript">
					$(document).ready(function() {													
						$().UItoTop({ easingType: 'easeOutQuart' });						
					});
				</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
			</div>
		</div>		
	</div>		
</body>
</html>

<?php
    //close DB connection
    mysqli_close($connection);
?>