<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/picturesque.css">
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
				<li role="presentation" class="active"><a href="Home.php">Home</a></li>
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
				<select>
				  <option value="1">Whale Watching</option>
				  <option value="2">Wild safari</option>
				  <option value="3">Surfing</option>
				  <option value="4">Diving</option>
				  <option value="5">Sun bathing</option>
				  <option value="6">Historical place visit</option>
				  <option value="7">Hill country visit</option>
				  <option value="8">Ayurvedic spa</option> 
				  <option value="9">Meditation and Yoga</option>
				</select>
		<input type="submit" id="search_button" value="search"/>
&nbsp&nbsp&nbsp		<button type="button" class="pull-right" id="myBtn">Login</button>
	</div>
	<br>
	
	<div id="pagebody">
	
		<div class="container">
  
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">
    
		<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header" style="padding:35px 50px;">
							<button type="button" class="close" data-dismiss="modal" &times;</button>
							<h5><span class="glyphicon glyphicon-lock"></span> Login</h5>
						</div>
						<div class="modal-body" style="padding:40px 50px;">
						<form role="form">
							<div class="form-group">
								<label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
								<input type="text" class="form-control" id="usrname" placeholder="Enter email">
							</div>
							<div class="form-group">
								<label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
								<input type="text" class="form-control" id="psw" placeholder="Enter password">
							</div>
							<div class="checkbox">
								<label><input type="checkbox" value="" checked>Remember me</label>
							</div>
							<button type="submit" class="btn1 btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
						</form>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
							<p>Not a member? <a href="#">Sign Up</a></p>
							<p>Forgot <a href="#">Password?</a></p>
						</div>
					</div>
      
				</div>
			</div> 
		</div>
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
									<h3 data-animation="animated bounceInDown">FRUITFUL SRILANKAN SOIL</h3>
									<h4 data-animation="animated bounceInUp">sri lankan soil is very fruitful because of the climate variation any kind of plant life can be stored in this fabulous country..</h4>             
								 </div>
							</div></div>
						 </div> 
						<!-- Item 2 -->
						<div class="item slide2">
							<div class="row"><div class="container">
								<div class="col-md-9 text-left">
									<h3 data-animation="animated bounceInDown">TEA ESTATE</h3>
									<h4 data-animation="animated bounceInUp">sri lankan tea is very famous for it's genuine taste. the view of the sri lankan tea estates are evry beautiful.. </h4>
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
									<h3 data-animation="animated bounceInDown">PICTURESUE VIEWS<h3>
									<h4 data-animation="animated bounceInUp">the pearl of the india ocean sri lanka has got the plenty of beautiful places that you must visit. </h4>
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
									<h3 data-animation="animated bounceInDown">RUBBER ESTATES</h3>
									<h4 data-animation="animated bounceInUp">sri lankan rubber is very famous for it's genuine quality. the view of the rubber estates are beautiful..</h4>
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
<br>
		<div id="paragraph">
			<p><h3>PICTUREQUE ESTATES</h3> Hill country of Sri Lanka is rich with acres and acres of tea and rubber estates. This is due to the climate of the hill country region where rainfall is frequent.

			As Sri Lanka is known as one of the world's largest tea exporters expansive Tea Estates in the valleys of Nuwara Eliya has made it the heart of the Sri Lankan tea industry. Once, Nuwara Eliya was the pleasure retreat of English Tea planters. So it has the feel of an English colony. Thus it is also called as "little England" due to the landscape design and various architecture of the area. Not only in Nuwara Eliya tea estates can be found in other wet zones in the south of Sri Lanka such as Deniyaya and Galle tea estates which produce a different flavored tea from that of hill country tea estates. A romantic stroll around the tea estates, an evening walk, taking pictures amidst lush green tea bushes, watching tea pluckers at their work and learning of the process of tea making and tasting freshly made tea are very refreshing activities.

			Rubber estates in Sri Lanka manufacture the world's best Crepe rubber. Rubber estates can mainly be found in southern part of the island. You can visit the Shady rubber estates and learn about the process of making rubber while enjoying the scenery of the plantation.

			Apart from hills there are estates that you can also visit other plantations such as sugar cane estates, coconut estates, small scale oil palm estates and other vegetation such as "Chena". The greenery full of magnificent sceneries and soothing climate would be an ideal relaxation for you.


			</p>
		</div>
		<div id="info">
		<h4>Places for visit</h4>
			<ul>
				<li>knuckles</li>
				<li>Adam's peak</li>
				<li>Ella</li>
				
			</ul>

		</div>
	</div>
</div>
	<script type="text/javascript" src="../javascript/jquery.js"></script>
	<script type="text/javascript" src="../css/bootstrap/js/bootstrap.js"></script>
	<script src="../javascript/myjs.js"></script>
</body>
</html>


