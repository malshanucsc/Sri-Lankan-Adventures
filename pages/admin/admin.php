<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../css/admin.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<style type="text/css">
		
		



	</style>
</head>
<body >
<div id="full_page" >
	<div id="header" class="col-md-8" >
		<div class= "col-md-2 " >
			<img width="100" id="logo" src="../../images/logo.png" >
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
					<li role="presentation" class="active"><a href="admin.php">Home</a></li>
					<li role="presentation" class="dropdown"><a href="#" class="drpbtn">Activities</a>
							<div class="dropdown-content">
								<a href="../sea_side.php"> sea side</a>
								<a href="../river.php"> river side</a>
								<a href="../wildlife.php"> wild life</a>
								
							</div>
					</li>
					<li role="presentation" class="dropdown"><a href="#" class="drpbtn">Places</a>
							<div class="dropdown-content">							
								<a href="../culture.php"> culture</a>
								<a href="../hill_country.php"> hill country</a>
								<a href="../historical.php"> historical</a>
							</div>
					</li>
					<li role="presentation"><a href="../reviews.php">Reviews</a></li>
					<li role="presentation"><a href="../contact.php">Contact Us</a></li>
				</ul>
	</div>
	<br>

	<div id="logout">
		<a href="logout.php"  style="color: black;" target="_parent">Logout</a>
	</div>

	<div id="pagebody">
	
		

		<?php
			include '../../actions/db.php';
			$sql = "SELECT * FROM messages";

			$result = $conn->query($sql);

			if ($result->num_rows > 0) {

		?>
				
				  <table>
					  <tr>
						  <th>First Name</th>
						  <th>Last Name</th>
						  <th>Email</th>
						  <th>Contact Number</th>
						  <th>Country</th>
						  <th>Message</th>
						  <th>Date and Time</th>
					  </tr>

					<?php
						
					  while($row= $result->fetch_assoc() ) {
					?>
						<tr>
					
							<td><?php echo $row['Fname']; ?></td>
							<td><?php echo $row['Lname']; ?></td>
							<td><?php echo $row['Email']; ?></td>
							<td><?php echo $row['c_number'];?></td>
							<td><?php echo $row['country']; ?></td>
							<td><?php echo $row['message']; ?></td>
							<td><?php echo $row['Date_Time']; ?></td>
						</tr>
					<?php
					}
			}else{
					?>
						<tr><td>
						<?php
					  echo "No Data";
						?>
				</td></tr>
				<?php
					}

				?>
		
	</div>

</div>

  <script type="text/javascript" src="../../javascript/jquery.js"></script>
  <script type="text/javascript" src="../../css/bootstrap/js/bootstrap.js"></script>
  <script src="../../javascript/myjs.js"></script>
</body>
</html>
