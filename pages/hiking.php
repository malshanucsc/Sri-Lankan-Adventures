<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/hiking.css">
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
		<button type="button" class="pull-right" id="myBtn">Login</button>
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
										<h3 data-animation="animated bounceInDown">HIKING IN SRI LANKA</h3>
										<h4 data-animation="animated bounceInUp">sri lankan hill side is ideaal for hiking lovers. there are many mountain sri lanka which can be categorize into different difficult of hiking levls..</h4>             
									 </div>
								</div></div>
							 </div> 
							<!-- Item 2 -->
							<div class="item slide2">
								<div class="row"><div class="container">
									<div class="col-md-9 text-left">
										<h3 data-animation="animated bounceInDown">PICTURESQUE VIEWS</h3>
										<h4 data-animation="animated bounceInUp">sri lankan hill side is fille dwith beauty. the hill side is very attractive and named for the clement weather condition...</h4>
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
										<h3 data-animation="animated bounceInDown">CLIMB MOUNTAINS WITH GROUPS<h3>
										<h4 data-animation="animated bounceInUp">can spend the time  climbing with your group of friends.</h4>
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
										<h3 data-animation="animated bounceInDown">MISTY MOUNTAIN TOPS</h3>
										<h4 data-animation="animated bounceInUp">most of the mountain tops are misty and cold in the sri lankan hill side..so most the you will refresh by thecold mountain breeze.. </h4>
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
<br>
			<div id="paragraph">
				<p><h3>HIKING</h3> Sri Lanka is heaven of natural beauty with many breathtaking landscapes which also include picturesque mountains and colossal rocks where interesting activities can be carries out. Such as hiking, climbing, mountain biking and trekking. For the adventurer there are many places in Sri Lanka to shed some sweat while having the time of their life.

				Mountains such as Piduruthalagala, kirigalpotta,thotupalkanda, Hakgala, Namaunu-kula etc. are ideal for hiking or trekking , whereas rocks at places such as sigiriya, Habarana,Polonnaruwa and buththala offers a unique sense of excitement for the keen adventurer.Rock climbing is a comparatively new activity in Sri Lanka. This reason alone makes it an interesting place for climbing with new routes.

				As for bikers trails through tea estates, rain forests, caves, reservoirs and ancient temples are ample for a ride while enjoying the natural beauty. A majority of tour operators and hotels in Sri Lanka provide mountain biking vacations. The traveler will have the option to get in touch with a smaller 'adventure' based operation in order to select a personal trip
				</p>
			</div>
			<div id="info">
			<h4>Places for visit</h4>
				<ul>
					<li>hortan plains and world's end</li>
					<li>knuckles</li>
					<li>mulkirigala rock</li>
					<li>sigiriya rock fort</li>
				</ul>

			</div>
	</div>
</div>
	<script type="text/javascript" src="../javascript/jquery.js"></script>
	<script type="text/javascript" src="../css/bootstrap/js/bootstrap.js"></script>
	<script src="../javascript/myjs.js"></script>
</body>
</html>


