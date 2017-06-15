<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/walking_jungle.css">
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
				<li role="presentation" class="active"><a href="#" class="drpbtn">Activities</a>
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
		
&nbsp&nbsp&nbsp <button type="button" class="pull-right" id="myBtn">Login</button>
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
									<h3 data-animation="animated bounceInDown">WALKING JUNGLES</h3>
									<h4 data-animation="animated bounceInUp">walking in sri lankan jungle is a very popular avtivity among the adventure loving people who lives all around the world. </h4>             
								 </div>
							</div></div>
						 </div> 
						<!-- Item 2 -->
						<div class="item slide2">
							<div class="row"><div class="container">
								<div class="col-md-9 text-left">
									<h3 data-animation="animated bounceInDown">COOL WET ADVENTURE</h3>
									<h4 data-animation="animated bounceInUp">when you are walking in the jungles you will find small rivers that cold and fresh water is flowing.. </h4>
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
									<h3 data-animation="animated bounceInDown">WALKING JUNGLES<h3>
									<h4 data-animation="animated bounceInUp">walking in sri lankan jungle is a very popular avtivity among the adventure loving people who lives all around the world</h4>
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
									<h3 data-animation="animated bounceInDown">OUT OF THE ROAD IS MORE FUN</h3>
									<h4 data-animation="animated bounceInUp"></h4>
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
			<p><h3>WALKING IN THE JUNGLES</h3> Jungle walk is the best way to observe wildlife, watch birds, reptiles, butterflies, insects at their most natural behavior and study them. Sri Lanka has several forest reserves for trekking even though it is merely of 65000 square meters.

			Sigiriya, Bodhinagala rain forest, Rumassala, Thangamalay forest reserve, Udawaththakale royal forest park, Kanneliya, Nakiyadeniya, dediyagala are just a few well known forests for taking a stroll filled with interesting things to see. Walking in these forests or jungles you will be able to catch sight of many of rare flora and fauna. You get to walk through a canopy of thick forest growth which makes the forest a little bit dark. You might be able to witness many of Sri Lanka's endemic species and can take rare photographs or collect information if you are interested in wildlife as a hobby.

			The only thing to keep in mind is to keep quiet and not to disturb the natural lifestyle of the species while having the walk or you won't be able to see them at all.

			</p>
		</div>
		<div id="info">
		<h4>Places for visit</h4>
			<ul>
				<li>knuckles</li>
				<li>sinharaja forest</li>
				<li>kalamatiya bird sanctuary</li>
			
			</ul>

		</div>
	</div>
</div>
  <script type="text/javascript" src="../javascript/jquery.js"></script>
  <script type="text/javascript" src="../css/bootstrap/js/bootstrap.js"></script>
  <script src="../javascript/myjs.js"></script>
</body>
</html>


