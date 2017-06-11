<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/ayurveda.css">
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
								<h3 data-animation="animated bounceInDown">SRI LANKAN AYURVEDA</h3>
								<h4 data-animation="animated bounceInUp">ayurvedic medicine is a sri lankan system of traditiona medicine native to sri lanka,ayurveda treatments have medicine for even illnesses that hard to cure like cancer, diabetic and breaking limbs etc:..</h4>             
							</div>
						</div></div>
					</div> 
						<!-- Item 2 -->
						<div class="item slide2">
							<div class="row"><div class="container">
								<div class="col-md-9 text-left">
									<h3 data-animation="animated bounceInDown">NATURAL HERBS</h3>
									<h4 data-animation="animated bounceInUp">the special thing of the ayurvedic medicine is that they are extracted from hundred percent natural indigenuous pants grow in sri lanka.</h4>
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
									<h3 data-animation="animated bounceInDown">AYURVEDA TREATMENTS</h3>
									<h4 data-animation="animated bounceInUp">ayurveda treatments are carried on a special way. one way of treating patient is the oil treatments that herbal oils are used to do this treatment.  </h4>
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
									<h3 data-animation="animated bounceInDown">FINDIG THE ROOT OF ILLNESS</h3>
									<h4 data-animation="animated bounceInUp">in ayurveda treatment not only the pain in the body is cured. but also for the root of illness so that the pain willnot come again after some period of times ... </h4>
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

		<div id="paragraph">
			<p><h2>Ayurveda</h2>  Sri Lanka has its own special science of medical treatments since the ancient times which employs indigenous and rare herbs and substances derived from plants. These medications can be used internally or externally as treatment for a number of illnesses as well as to prevent lethal diseases. There are also a wide range of lush treatments using herbs to enhance one's beauty.

				The most popular Ayurvedic Beauty treatment is called "Panchakarma" treatment .It means five treatments which purifies the body completely, by eliminating toxins. An increase of toxins will overburden the body's ability to discharge impurities, weakening the system and creating impairing mental function. Panchakarma effectively stimulates the body's release of toxins which supports the immune system and healing. There are also other treatments depending on your need and the time you are willing to spend in an Ayurvedic spa.

				It is guaranteed that after a splendid Ayurveda treatment you will have clear eyes, a refined skin tone, a robust nervous system, revitalization and regeneration with an increased zest for life.
			</p>
		</div>
		<div id="info">

		<h2>Facilitate Agents:</h2>
		</div>
		<div class="gallery">
		  
			<img src="../images/spa.jpg" alt="Northern Lights" width="300" height="200"style="border:solid">
		  
		  <div class="desc">Ayurveda-Amarasinge spa<br>mirissa<br> contact number:0771234567</div>
		</div>
		<div id="abc">
		<!-- Popup Div Starts Here -->
			<div id="popupContact">
		<!-- Contact Us Form -->
				<form action="#" id="form" method="post" name="form">
					<img id="close" src="../images/ whale_boat.jpg" onclick ="div_hide()">
					<h2 id="contact">Contact Us</h2>
					<hr>
					<input id="name" name="name" placeholder="Name" type="text">
					<input id="email" name="email" placeholder="Email" type="text">
					<textarea id="msg" name="message" placeholder="Message"></textarea>
					<a href="javascript:%20check_empty()" id="submit">Send</a>
				</form>
			</div>
		<!-- Popup Div Ends Here -->
		</div>
<!-- Display Popup Button -->

		<button id="popup" onclick="div_show()">contact us</button>

	</div>
</div>	
	<script type="text/javascript" src="../javascript/jquery.js"></script>
	<script type="text/javascript" src="../css/bootstrap/js/bootstrap.js"></script>
	<script src="../javascript/ayurveda.js"></script>
</body>
</html>

