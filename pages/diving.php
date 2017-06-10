<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/diving.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
</head>
<body >
<div id="full_page" >
	<div id="header" class="col-md-12" >
		<div class= "col-md-2 " >
			<img  id="logo" src="../images/logo.png" >
		</div>
		<div class="col-md-6" id="topic">
			Sri Lankan Adventures 
		</div>
	</div>	

	<div id="upbanner"><h4>Looking for a <select>
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
				 
		<input type="submit" id="search_button" value="search"/></h4>
	</div>
	<br>
	<!-- Trigger the modal with a button -->
		<button type="button" class="btn btn-default btn-lg" id="myBtn">Login</button>

	<!-- Modal -->
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
                        <h3 data-animation="animated bounceInDown">CORAL REEFS</h3>
                        <h4 data-animation="animated bounceInUp">sri lankan sea sides are popular for the coral gardens.</h4>             
                     </div>
                </div></div>
             </div> 
            <!-- Item 2 -->
            <div class="item slide2">
                <div class="row"><div class="container">
                    <div class="col-md-9 text-left">
                        <h3 data-animation="animated bounceInDown">SCUBA DIVING</h3>
                        <h4 data-animation="animated bounceInUp">sri lankan beaches are the perfect place to the scuba diving. </h4>
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
                        <h3 data-animation="animated bounceInDown">SEA TURTLES</h3>
                        <h4 data-animation="animated bounceInUp">sri lankan eaches and seas are very famous for the sea turtles. </h4>
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
<br>
<div class="col-md-12" id="upmenu">

			<ul class="nav nav-pills">
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
<br>
<br>
<div id="paragraph">
<p><h2>Diving and Snorkeling</h2> Sri Lanka is blessed with a stunning blue ocean around it and the beauty of it amazingly keeping nature lovers attracted to it. This amazing ocean can be identified as a paradise composed of colorful aquatic animals and plants, for who loves diving and underwater photography. Divers and photographers can have the guidance of well-trained guides for ensure their safety and achieve a supreme experience.

Diving in Sri Lankan seas is a popular as a non-competitive activity. Such diving usually emphasizes the airborne experience, and the height of the dive, but does not emphasize what goes on once the diver enters the water. Entering water from a height is an enjoyable leisure activity, as is underwater swimming.

Sri Lankan seas are very popular for the high bio-diversity. Most nature lovers, scientists and also normal tourists come to Sri Lanka especially for see the beautiful under water animal kingdoms hidden under the Indian Ocean. Because of the Coral gardens in these sea sides the divers are amazed and thrilled by the beauty of this paradise.
</p>
</div>
<div id="info">
<h2>Places for Whale Watching</h2>
	<ul>
		<li>Mirissa Beach</li>
		<li>Hikkaduwa Beach</li>
		
	</ul>
<h2>Facilitate Agents:</h2>
</div>

</div>
<script type="text/javascript" src="../javascript/jquery.js"></script>
	<script type="text/javascript" src="../css/bootstrap/js/bootstrap.js"></script>
	<script src="../javascript/myjs.js"></script>
</body>
</html>

