
<!DOCTYPE html>
 <html lang="pt-br">
 <head>
 <title>Play-Kids Eventos - Decorando Emoções</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta charset="utf-8">
 <meta name="keywords" content="" >
 <meta name="description" content="" >
 <script type="application/x-javascript"> addEventListener("load", function() {
setTimeout(hideURLbar, 0); }, false); function hideURLbar(){
window.scrollTo(0,1); } </script>
 <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
 <link href="css/style.css" rel='stylesheet' type='text/css' />
 <link rel="stylesheet" href="css/galeria.css" type="text/css" />
 <link href='http://fonts.googleapis.com/css?family=Exo:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic'
rel='stylesheet' type='text/css'>
 <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic'
rel='stylesheet' type='text/css'>
 <script src="js/jquery-1.11.0.min.js"></script>
<!--start-smoth-scrolling-->
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

<!--start-smoth-scrolling-->

</head>
<body>
	<!--start-header-->
  <?php include 'inc/header.php'; ?>

	<!--end-header-->
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
					<div class="banner2">
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
	<!----start-welcome---->
	<div class="welcome">
		<div class="container">

			<div class="welcome-bottom">
				<div class="welcome-bottom-left">
					<h3>PLAYKIDS Eventos</h3>
				</div>
				<div class="welcome-bottom-right">
					<p> Vestibulum placerat euismod viverra. Quisque imperdiet lorem non ante lobortis finibus. Vivamus egestas rhoncus elit, eu mattis mi dictum at. Maecenas mollis viverra dolor sed gravida. Maecenas hendrerit turpis ut facilisis faucibus. Cras felis mi, ullamcorper vitae lorem quis, mattis venenatis est. Nulla enim dolor, egestas vel luctus eu, interdum vel mauris.</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!----end-welcome---->
	<!----start-custom---->
	<div class="custom">
		<div class="container">
			<div class="custom-top">
				<div class="col-md-4 custom-left">
					<div class="custom-one">
						<h3>Casamentos</h3>
						<p>Pellentesque consequat viverra ipsum eget efficitur. Integer lobortis scelerisque urna id eleifend. Nullam sagittis consequat dui ac scelerisque. Proin tempus venenatis euismod. Suspendisse ex elit, fermentum.</p>
						<div class="c-btn">
							<a href="#">Entre em Contato</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 custom-left">
					<div class="custom-one">
						<h3>Aniversários</h3>
						<p>Pellentesque consequat viverra ipsum eget efficitur. Integer lobortis scelerisque urna id eleifend. Nullam sagittis consequat dui ac scelerisque. Proin tempus venenatis euismod. Suspendisse ex elit, fermentum.</p>
						<div class="c-btn">
							<a href="#">Entre em Contato</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 custom-left">
					<div class="custom-one">
						<h3>Eventos</h3>
						<p>Pellentesque consequat viverra ipsum eget efficitur. Integer lobortis scelerisque urna id eleifend. Nullam sagittis consequat dui ac scelerisque. Proin tempus venenatis euismod. Suspendisse ex elit, fermentum.</p>
						<div class="c-btn">
							<a href="#">Entre em Contato</a>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!----end-custom---->
	<!----start-bridal---->
	<div class="bridal">
		<div class="container">
      <h3>Nossos Serviços</h3>

			<div class="bridal-bottom">
				<div class="col-md-4 bridal-bottom-left">
					<img src="images/b-4.jpg" alt="" />
					<div class="b-2">
						<h3>Decoração</h3>
            <p>Pellentesque consequat viverra ipsum eget efficitur. Integer lobortis scelerisque urna id eleifend. Nullam sagittis consequat dui ac scelerisque. Proin tempus venenatis euismod. Suspendisse ex elit, fermentum.</p>
					</div>
				</div>
				<div class="col-md-4 bridal-bottom-left">
					<img src="images/b-6.jpg" alt="" />
						<div class="b-2">
							<h3>Buffet</h3>
              <p>Pellentesque consequat viverra ipsum eget efficitur. Integer lobortis scelerisque urna id eleifend. Nullam sagittis consequat dui ac scelerisque. Proin tempus venenatis euismod. Suspendisse ex elit, fermentum.</p>
						</div>
				</div>
				<div class="col-md-4 bridal-bottom-left">
					<img src="images/d-7.jpg" alt="" />
						<div class="b-2">
							<h3>Locação</h3>
              <p>Pellentesque consequat viverra ipsum eget efficitur. Integer lobortis scelerisque urna id eleifend. Nullam sagittis consequat dui ac scelerisque. Proin tempus venenatis euismod. Suspendisse ex elit, fermentum.</p>
						</div>
					</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
  <!--start-galery-->
  <div class="main">
 <div class="wrap">
  <div class="products">
     <div class="top-box">
      <h3>Nossas Festas</h3>
      <hr>

     </div>

      <div class="section group">
      <div class="col_1_of_4 span_1_of_4">
        <a href="gallery.php" class="swipebox" title=""> <img src="images/1/thumbs/1.jpg" alt=""><span class="zoom-icon"></span> </a>

               </div>
      <div class="col_1_of_4 span_1_of_4">
        <a href="gallery.php" class="swipebox" title=""> <img src="images/1/thumbs/2.jpg" alt=""><span class="zoom-icon"></span> </a>

               </div>
      <div class="col_1_of_4 span_1_of_4">
         <a href="gallery.php" class="swipebox" title=""> <img src="images/1/thumbs/3.jpg" alt=""><span class="zoom-icon"></span> </a>

               </div>
      <div class="col_1_of_4 span_1_of_4">
        <a href="gallery.php" class="swipebox" title=""> <img src="images/1/thumbs/4.jpg" alt=""><span class="zoom-icon"></span> </a>

               </div>
      <div class="clearfix"></div>
    </div>
     <div class="section group">
      <div class="col_1_of_4 span_1_of_4">
        <a href="gallery.php" class="swipebox" title=""> <img src="images/1/thumbs/5.jpg" alt=""><span class="zoom-icon"></span> </a>

               </div>
      <div class="col_1_of_4 span_1_of_4">
        <a href="gallery.php" class="swipebox" title=""> <img src="images/1/thumbs/6.jpg" alt=""><span class="zoom-icon"></span> </a>

               </div>
      <div class="col_1_of_4 span_1_of_4">
        <a href="gallery.php" class="swipebox" title=""> <img src="images/1/thumbs/7.jpg" alt=""><span class="zoom-icon"></span> </a>

               </div>
      <div class="col_1_of_4 span_1_of_4">
        <a href="gallery.php" class="swipebox" title=""> <img src="images/1/thumbs/8.jpg" alt=""><span class="zoom-icon"></span> </a>

               </div>
      <div class="clearfix"></div>
    </div>
  </div>
 </div>
</div>

  <!--end-galery-->


	<!--start-footer-->
    <?php include 'inc/footer.php'; ?>
	<!--end-footer-->
</body>
</html>
