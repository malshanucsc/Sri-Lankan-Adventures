<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/sunbathe.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
</head>
<body >
<div id="full_page" >
	<div id="header" class="col-md-8" >
		<div class= "col-md-2 " >
			<img width="100" id="logo" src="../images/logo.png" >
		</div>
		<div class="col-md-8 col-md-offset-1" id="topic">
		<h1>
			Sri Lankan Adventures 
			</h1>
		</div>
	</div>	
	<br>
	<div class="col-md-12" id="upmenu">

			<ul class="nav nav-pills ">
				<li role="presentation" class="dropdown"><a href="Home.php">Home</a></li>
				<li role="presentation" class="dropdown"><a href="#" class="drpbtn">Activities</a>
						<div class="dropdown-content">
							<a href="sea_side.php"> Sea side</a>
							<a href="river.php"> River side</a>
							<a href="wildlife.php"> Wild life</a>
							
						</div>
				</li>
				<li role="presentation" class="dropdown"><a href="#" class="drpbtn">Places</a>
						<div class="dropdown-content">							
							<a href="culture.php"> Culture</a>
							<a href="hill_country.php"> Hill country</a>
							<a href="historical.php"> Historical</a>
						</div>
				</li>
				<li role="presentation"><a href="reviews.php">Reviews</a></li>
				<li role="presentation"><a href="contact.php">Contact Us</a></li>
			</ul>
	</div>
	<br>

	<div id="upbanner" class="pull-right " >
				<select id="select">
				  <option value="">Looking For..</option>
				  <option value="whale_watching.php">Whale Watching</option>
				  <option value="safari.php">Wild safari</option>
				  <option value="surfing.php">Surfing</option>
				  <option value="diving.php">Diving</option>
				  <option value="sunbathe.php">Sun bathing</option>
				  <option value="historical.php">Historical place visit</option>
				  <option value="hill_country.php">Hill country visit</option>
				  <option value="ayurveda.php">Ayurvedic spa</option> 
				  <option value="meditation.php">Meditation and Yoga</option>
				  </select>
			<script>
			document.getElementById("select").onchange=function(){
				if(this.selectedIndex!==0){
					window.location.href=this.value;
				}
			};
		</script>
	</div>
	<br>
	
	<div id="pagebody">
	
	<br>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">

		<div class="col-md-12">
			<div id="first-slider" class="col-md-10" >
				<div id="carousel-example-generic" class="carousel slide carousel-fade">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						<li data-target="#carousel-example-generic" data-slide-to="3"></li>
						
						
					</ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<!-- Item 1 -->
						<div class="item active slide1">
							<div class="row"><div class="container">
								<div class="col-md-12 text-left">
								<h3 data-animation="animated bounceInDown">SUN BATHING</h3>
									<h4 data-animation="animated bounceInUp">sun bathing is very interesting thing to try..</h4>     
								  
								</div>
								<div class="col-md-7 text-left">
									<!--   <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/pfmmo6qj1/window_domain.png"> -->        
								 </div>
							</div></div>
						 </div> 
						<!-- Item 2 -->
						<div class="item slide2">
							<div class="row"><div class="container">
								<div class="col-md-9 text-left">
									<h3 data-animation="animated bounceInDown">GOLDEN BEACHES</h3>
									<h4 data-animation="animated bounceInUp">golden beaches in sri lanka gives you maximum sun bathing experience.. </h4>
								 </div>
								<div class="col-md-5 text-right">
					  
									<!-- <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/sp11uneml/rack_server_unlock.png"> -->
								</div>
							</div></div>
						</div>
						<!-- Item 3 -->
						<div class="item slide3">
							<div class="row"><div class="container">
								<div class="col-md-7 text-left">
									<h3 data-animation="animated bounceInDown">TROPICAL SUN LIGHT</h3>
									<h4 data-animation="animated bounceInUp">as a tropical country sri lanka is getting the maximum effect of the sun god. </h4>
								 </div>
								<div class="col-md-5 text-right">
									<!-- <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/eq8xvxeq5/globe_network.png"> -->
								</div>     
							</div></div>
						</div>
						
									
									
					</div>
					<!-- End Wrapper for slides-->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>

		<div id="paragraph">
			<p><h2>Sun Bathing</h2> You can make your skin tan by letting the golden sun rays reaches the Sri Lankan sea shores, to wrap your body. Warmth of the sun rays and the fresh breeze of the sea blended together with the mind blowing sea view may offer the feeling of a superb mental and physical relaxation you have never felt before.
			</p>
		</div>
		<div id="info">
			<h2>Places for Whale Watching</h2>
				<ul>
					<li>Mirissa Beach</li>
					<li>Hikkaduwa Beach</li>
					<li>Tangalla Beach</li>
					<li>Unawatuna Beac</li>
				</ul>

		</div>

	</div>
</div>
	<script type="text/javascript" src="../javascript/jquery.js"></script>
	<script type="text/javascript" src="../css/bootstrap/js/bootstrap.js"></script>
	<script src="../javascript/myjs.js"></script>
</body>
</html>

