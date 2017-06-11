<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/historical.css">
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
						<li data-target="#carousel-example-generic" data-slide-to="5"></li>

						
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
									<h3 data-animation="animated bounceInDown">WORLD FAMOUS SIGIRIYA FRESCOUS </h3>
									<h4 data-animation="animated bounceInUp"> at a single glance you will surely fall in love with sigiriya maidens.the frescoes of theancient beauty queens of sri lanka..</h4>          
								 </div>
							</div></div>
						 </div> 
						<!-- Item 2 -->
						<div class="item slide2">
							<div class="row"><div class="container">
								<div class="col-md-9 text-left">
									<h3 data-animation="animated bounceInDown">ANCIENT DEMONS AND GODS</h3>
								  <h4 data-animation="animated bounceInUp">visitb the demoons and gods who was strongly blend with the life style of the ancient ancesstors of sri lanka..   </h4> 
								 </div>
								<div class="col-md-5 text-right">
					  
									<!-- <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/sp11uneml/rack_server_unlock.png"> -->
								</div>
							</div></div>
						</div>
						<div class="item slide3">
							<div class="row"><div class="container">
								<div class="col-md-9 text-left">
									<h3 data-animation="animated bounceInDown">VISIT ANCIENT KINGS ANND ROYALTIES</h3>
								  <h4 data-animation="animated bounceInUp">ages have been passed but the memories of them still exists and they come to alive  every time people visit these frescoes..</h4> 
								 </div>
								<div class="col-md-5 text-right">
					  
									<!-- <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/sp11uneml/rack_server_unlock.png"> -->
								</div>
							</div></div>
						</div>
						<!-- Item 3 -->
						<div class="item slide4">
							<div class="row"><div class="container">
								<div class="col-md-7 text-left">
									<h3 data-animation="animated bounceInDown">SRI LANKAN CAVE TEMPLES</h3>
									<h4 data-animation="animated bounceInUp">there are many historical cave temples in sri lanka and all of them are anciient art galleries </h4>
								 </div>
								<div class="col-md-5 text-right">
									<!-- <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/eq8xvxeq5/globe_network.png"> -->
								</div>     
							</div></div>
						</div>
						<!-- Item 4 -->
						<div class="item slide5">
							<div class="row"><div class="container">
								<div class="col-md-7 text-left">
									<h3 data-animation="animated bounceInDown">ANCIENT LIFE STYLES</h3>
								  <h4 data-animation="animated bounceInUp">feel the lifestyle of ancient people who lived in sri lanka long time ago as the artists have captured turned into paintings..</h4>
								 </div>
								<div class="col-md-5 text-right">
									<!-- <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/9vf8xngel/internet_speed.png"> -->
								</div>  
							</div></div>
						</div>
						<!-- End Item 4 -->

								  

										  
							<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
								<i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
								<i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
							</a>
					</div>
				</div>
			</div>
		</div>






			<div id="paragraph">
				<p><h3>Historical</h3>Sri Lanka is a country which owns a great and proud history and it is elegantly represented by historical monuments which are all over the country. Amazing Ruins and monuments will definitely add a great value to your journey. Therefore if you are planning to make a wonderful journey in Sri Lanka don't ever miss to explore the great history.

					Sri Lankan Historical places also get the highest attention among history Explorers and tourists because it is the best place all over the world for realizing the maximum entertainment of plenty of enjoyable activities for History lovers such as, </p>
					<ul>
					<li>watching beauiful frescoes</li>
					<li>ancient sri lankan civil engineering architecture</li>
					<li>exploring sri lankan historical ruins</li>
					<li>visit sri lankan ancient temples</li>
					</ul>
				<p>The picturesque view of the sea sides make you attracted to those and definietely the freshand cold breeze sea make you feel so relaxed.
					If you plan to make your journey around sri lankan sea sides have afforded with plenty of luxeries hotels, rest houses, motels, spas, jewellery shops , textiles and etc:n Sri Lanka there are plenty of places which own spanking collections of evidences of the great history of Sri Lanka .The one who owns the chance of exploring such a wonderful history is a very fortunate one and he/she definitely feel it by his/her self. Kandy,Anuradaphura,Polonnaruwa ,Seegiriya and Dabulla can be defined as the key places which highlights the great history of Sri Lanka. By visiting those places you can found lots of amazing creations of Sri Lankans which nicely presents the inconceivable talents of them.

				</p>
			</div>
			<div id="activities">
			<h1>THINGS TO DO</h1>
				<div id="photoGallery">

					<div class="gallery">
					  <a  href="watching_frescoes.php">
						<img src="../images/frescoes.jpg" alt="Fjords" width="300" height="200" style="border:solid">
					  </a>
					  <div class="desc"><h3>Watching Frescoes</h3>artistics skills of ancient minds..</div>
					</div>
					
					<div class="gallery">
					  <a  href="ancient_statue.php">
						<img src="../images/statue.jpg" alt="Forest" width="300" height="200"style="border:solid">
					  </a>
					  <div class="desc"><h3>Ancient Statue</h3> exquisite craftsmanship of ancient sri lanka..</div>
					</div>
					
					<div class="gallery">
					  <a  href="worship_temple.php">
						<img src="../images/temple.jpg" alt="Northern Lights" width="300" height="200"style="border:solid">
					  </a>
					  <div class="desc"><h3>Worship ancient temples</h3> calm and quite relaxation to the mind..</div>
					</div>



				</div>
			</div>
	</div>
</div>
	<script type="text/javascript" src="../javascript/jquery.js"></script>
	<script type="text/javascript" src="../css/bootstrap/js/bootstrap.js"></script>
	<script src="../javascript/myjs.js"></script>
</body>
</html>













