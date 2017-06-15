<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/surfing.css">
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
							<a href="sea_side.php"> sea side</a>
							<a href="river.php"> river side</a>
							<a href="wildlife.php"> wild life</a>
							
						</div>
				</li>
				<li role="presentation" class="dropdown"><a href="#" class="drpbtn">Places</a>
						<div class="dropdown-content">							
							<a href="culture.php"> culture</a>
							<a href="hill_country.php"> hill country</a>
							<a href="historical.php"> historical</a>
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
						<li data-target="#carousel-example-generic" data-slide-to="4"></li>
						
					</ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<!-- Item 1 -->
						<div class="item active slide1">
							<div class="row"><div class="container">
								<div class="col-md-3 text-right">
								  <!--   <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/pfmmo6qj1/window_domain.png"> -->
								</div>
								<div class="col-md-7 text-left">
									<h3 data-animation="animated bounceInDown">IDEAL WEATHER CONDITION</h3>
									<h4 data-animation="animated bounceInUp">weather condition for surfing is good in this island for most of the months in the year</h4>             
								 </div>
							</div></div>
						 </div> 
					<!-- Item 2 -->
						<div class="item slide2">
							<div class="row"><div class="container">
								<div class="col-md-9 text-left">
									<h3 data-animation="animated bounceInDown">SURFING SCHOOLS</h3>
									<h4 data-animation="animated bounceInUp">you can participate and learn how to surf in srilankan surfing schools. </h4>
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
									<h3 data-animation="animated bounceInDown">TIDAL WAVES</h3>
									<h4 data-animation="animated bounceInUp">mother nature is blessed the sri lankan sea by massive tidal waves </h4>
								 </div>
								<div class="col-md-5 text-right">
									<!-- <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/eq8xvxeq5/globe_network.png"> -->
								</div>     
							</div></div>
						</div>
						<!-- Item 4 -->
						<div class="item slide4">
							<div class="row"><div class="container">
								<div class="col-md-7 text-left">
									<h3 data-animation="animated bounceInDown">IDEAL SURFING GROUNDS</h3>
									<h4 data-animation="animated bounceInUp">sri lankan seas have less numer of accident reports during the surfing.</h4>
								 </div>
								<div class="col-md-5 text-right">
									<!-- <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/9vf8xngel/internet_speed.png"> -->
								</div>  
							</div></div>
						</div>
						<!-- End Item 4 -->

                        
                        
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
	<br>
	
		<div id="paragraph">
		
			<p><h3>Surfing</h3> The enchanting Indian Ocean surrounds Sri Lanka is an ideal place for surfing lovers as it assures the reliability and offers the maximum pleasure of surfing. Superfine surfing destinations can be found in East coast and south coast in Sri Lanka. The reliable swells of the surfing locations among Sri Lanka ensure the safety of beginners of surfing. Well-trained guides can be hired for ensuring further safety. April to October can be defined as the season for surfing.

			Surfing in Sri Lanka is a lifestyle. One must surf in Sri Lanka atleast once to experience its depths of culture and some of nature's best creations. Surfing in Sri Lanka has seen many twists and turns. In the late 60's, Mount lavinia was a favorite surf spot for many youngsters around Colombo but now the culture has moved to south and east coast. As surfing is water based sport many youngsters in local fishing communities in the south and east coast, spend more time in the beach. Surfing has become a past time now, building a certain level of expertise.

			While around the world we see many activities that would bring an adrenaline rush, it's not every time you find something thrilling to do in Sri Lanka. Life in an island is full of surprises and one of those surprises is being able to surf. Surfing is a wonderful sport to indulge in but it's only for those who are willing to take living an exciting life one step ahead. 
			</p>
		</div>
		<div id="info">
			<h4>Places for Surfing</h4>
				<ul>
					<li>Mirissa Beach</li>
					<li>Tangalla Beach</li>
					<li>Hikkaduwa Beach</li>
				</ul>
			<h4>Facilitate Agents:</h4>
		</div>
	</div>
</div>
	<script type="text/javascript" src="../javascript/jquery.js"></script>
	<script type="text/javascript" src="../css/bootstrap/js/bootstrap.js"></script>
	<script src="../javascript/myjs.js"></script>
</body>
</html>


