<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../css/admin.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<style type="text/css">
		
		/*tables*/
table {

color: #333;
/*font-family: Helvetica, Arial, sans-serif;*/
margin: auto;
width: 95%;
border-collapse: collapse;
 border-spacing: 0;
}

td, th {
border: 1px solid green; /* No more visible border */
height: 30px;
transition: all 0.3s; /* Simple transition for hover effect */
}

th {
background: #8edba6; /* Darken header a bit */
font-weight: bold;
}

td {
background: #FAFAFA;
/*text-align: center;*/
}

td a{
    text-decoration: none;
    
}
/* Cells in even rows (2,4,6...) are one color */
tr:nth-child(even) td { background: #F1F1F1; }

/* Cells in odd rows (1,3,5...) are another (excludes header cells) */
tr:nth-child(odd) td { background: #FEFEFE; }

/*tr td:hover { background: #666; color: #FFF; } *//* Hover cell effect! */




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

<br><br><br><br>
<li><a href="logout.php"  style="color: black;" target="_parent">Logout</a></li>

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
// getting assignment details fro assignment table to get the assignment name
  while($row= $result->fetch_assoc() ) {
    ?>
    <tr>
<!-- assignment title -->
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
