<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Dream Wedding a Wedding Category Flat Bootstarp responsive Website Template| Blog :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dream Wedding Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Exo:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.11.0.min.js"></script>
<!---- start-smoth-scrolling---->
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

<!---- start-smoth-scrolling---->

</head>
<body>
	<!----start-header---->
	<div class="header" id="home">
		<div class="container">
			<div class="logo">
				<a href="index.html"><img src="images/lg-2.png" alt=""></a>
			</div>
			<div class="navigation">
			 <span class="menu"></span> 
				<ul class="navig">
					<li><a href="index.html">Home</a><span> </span></li>
					<li><a href="about.html">About</a><span> </span></li>
					<li><a href="404.html">Services</a><span> </span></li>
					<li><a class="active" href="blog.html">Blog</a><span> </span></li>
					<li><a href="gallery.html">Gallery</a><span> </span></li>
					<li><a href="contact.html">Contact</a><span> </span></li>
				</ul>
			</div>
				 <!-- script-for-menu -->
		 <script>
				$("span.menu").click(function(){
					$(" ul.navig").slideToggle("slow" , function(){
					});
				});
		 </script>
		 <!-- script-for-menu -->
		</div>
	</div>	
	<!----end-header---->
	<!--banner-starts-->
	<div class="bnr" id="home">
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider4">
			    <li>
					<div class="banner">
						<div class="banner-text">
							<h1>Nulla elementum quam lacinia</h1>
							<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eros massa, aliquet id fringilla at, ullamcorper eu diam. </p>
						</div>
					</div>
				</li>
				<li>
					<div class="banner1">
						<div class="banner-text">
							<h1>Nulla elementum quam lacinia</h1>
							<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eros massa, aliquet id fringilla at, ullamcorper eu diam. </p>
						</div>
					</div>
				</li>
				<li>
					<div class="banner">
						<div class="banner-text">
							<h1>Nulla elementum quam lacinia</h1>
							<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eros massa, aliquet id fringilla at, ullamcorper eu diam. </p>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--banner-ends--> 
	<!--Slider-Starts-Here-->
				<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!--End-slider-script-->
	<!----end-banner---->
	<!----start-blog---->
	<div class="blog">
		<div class="container">
			<div class="blog-head heading">
				<h3>BLOG</h3>
			</div>
			<div class="blog-top">
				<div class="b1">
					<a href="single.html"><img src="images/blog-1.jpg" alt="" /></a>
					<div class="blog-one">
						<div class="blog-left">
							<h5>29</h5>
							<h6>June</h5>
						</div>
						<div class="blog-right">
							<h3><a href="single.html">Lorem Ipsum has been the industry's standard dummy text</a></h3>
							<p class="admin">Posted by <a href="#"> Admin</a> on feb, <a href="#"> 5 Comments</a></p>
							<p>Pellentesque at leo vel erat molestie commodo. Suspendisse sit amet enim imperdiet, rutrum magna sed, porttitor felis. Duis at arcu in orci aliquam ultrices. In facilisis ante eget turpis dictum, vel finibus tortor viverra. Integer laoreet quam id urna posuere tincidunt. Mauris accumsan tellus velit, sit amet elementum velit sodales eu. Aliquam eget lacinia dolor, at rutrum lorem. Nullam ligula risus, pulvinar sit amet placerat sit amet, aliquam sit amet lorem. </p>
							<div class="b-btn">
								<a href="single.html">Read More</a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="b1">
					<a href="single.html"><img src="images/blog-2.jpg" alt="" /></a>
					<div class="blog-one">
						<div class="blog-left">
							<h5>29</h5>
							<h6>June</h5>
						</div>
						<div class="blog-right">
							<h3><a href="single.html">Lorem Ipsum has been the industry's standard dummy text</a></h3>
							<p class="admin">Posted by <a href="#"> Admin</a> on feb, <a href="#"> 5 Comments</a></p>
							<p>Pellentesque at leo vel erat molestie commodo. Suspendisse sit amet enim imperdiet, rutrum magna sed, porttitor felis. Duis at arcu in orci aliquam ultrices. In facilisis ante eget turpis dictum, vel finibus tortor viverra. Integer laoreet quam id urna posuere tincidunt. Mauris accumsan tellus velit, sit amet elementum velit sodales eu. Aliquam eget lacinia dolor, at rutrum lorem. Nullam ligula risus, pulvinar sit amet placerat sit amet, aliquam sit amet lorem. </p>
							<div class="b-btn">
								<a href="single.html">Read More</a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="b1">
					<a href="single.html"><img src="images/blog-3.jpg" alt="" /></a>
					<div class="blog-one">
						<div class="blog-left">
							<h5>29</h5>
							<h6>June</h5>
						</div>
						<div class="blog-right">
							<h3><a href="single.html">Lorem Ipsum has been the industry's standard dummy text</a></h3>
							<p class="admin">Posted by <a href="#"> Admin</a> on feb, <a href="#"> 5 Comments</a></p>
							<p>Pellentesque at leo vel erat molestie commodo. Suspendisse sit amet enim imperdiet, rutrum magna sed, porttitor felis. Duis at arcu in orci aliquam ultrices. In facilisis ante eget turpis dictum, vel finibus tortor viverra. Integer laoreet quam id urna posuere tincidunt. Mauris accumsan tellus velit, sit amet elementum velit sodales eu. Aliquam eget lacinia dolor, at rutrum lorem. Nullam ligula risus, pulvinar sit amet placerat sit amet, aliquam sit amet lorem. </p>
							<div class="b-btn">
								<a href="single.html">Read More</a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="page">
				<nav>
				  <ul class="pagination">
					<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
					<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
					<li><a href="#">2 <span class="sr-only"></span></a></li>
					<li><a href="#">3 <span class="sr-only"></span></a></li>
					<li><a href="#">4 <span class="sr-only"></span></a></li>
					<li><a href="#">5 <span class="sr-only"></span></a></li>
					 <li> <a href="#" aria-label="Next"><span aria-hidden="true">»</span> </a> </li>
				  </ul>
				</nav>
			</div>	
		</div>
	</div>
	<!----end-blog---->
	<!----start-footer---->
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<ul>
					<li><a href="#"><span class="fb"> </span></a></li>
					<li><a href="#"><span class="twit"> </span></a></li>
					<li><a href="#"><span class="google"> </span></a></li>
					<li><a href="#"><span class="pin"> </span></a></li>
					<li><a href="#"><span class="dribble"> </span></a></li>
				</ul>
			</div>
			<div class="newsletter">
				<ul>
					<li><h6>NEWSLETTER  :</h6></li>
					<li><input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/></li>
					<li><form><input type="submit" value="Subscribe" /></form></li>
				</ul>
			</div>
			<div class="footer-text">
				<p>Design by <a href="http://w3layouts.com/" target="_blank"> W3layouts</a></p>
			</div>
		</div>
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
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
	<!----end-footer---->
</body>
</html>