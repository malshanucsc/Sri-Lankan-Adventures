<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/mycss.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.min.css">
	<script src="../javascript/myjs.js"></script>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
</head>
<body style="background-color:#6b6b47">
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
	
	<div class="slideshow-container ;col-md-6" >

	<div class="mySlides fade ">
  <div class="numbertext">1 / 7</div>
  <img src="../images/Sri-Lanka-Tourism-campaign-1.png" style="width:965px;height:357px">
  <div class="text">WELCOME TO SRI LANKA</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 7</div>
  <img src="../images/tangalla.jpg" style="width:965px;height:357px">
  <div class="text">CLIMATE VARIATION</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 7</div>
  <img src="../images/image4.jpg" style="width:965px;height:357px">
  <div class="text">PLENTY OF WILD LIFE</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 7</div>
  <img src="../images/images.jpg" style="width:965px;height:357px">
  <div class="text">SRI LANKAN CULTURE</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">5 / 7</div>
  <img src="../images/dambullacavetemple_3465946a-xlarge.jpg" style="width:965px;height:357px">
  <div class="text">PROUD HISTORY</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">6 / 7</div>
  <img src="../images/hillcountry.jpg" style="width:965px;height:357px">
  <div class="text">SRI LANKAN UPPER HILLS</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">7 / 7</div>
  <img src="../images/river.jpg" style="width:965px;height:357px">
  <div class="text">PLENTY OF RIVERS</div>
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<div class="col-md-12" id="upmenu">

			<ul class="nav nav-pills">
				<li role="presentation" class="active"><a href="#">Home</a></li>
				<li role="presentation"><a href="#">Activities</a></li>
				<li role="presentation"><a href="#">Places</a></li>
				<li role="presentation"><a href="#">Gallery</a></li>
				<li role="presentation"><a href="#">Contact Us</a></li>
			</ul>
</div>
<br>
<br>
<br>
	<div id="paragraph">
		<p> Sri Lanka is an amazing tiny island surrounded by the bluish Indian Oean.Because of the enchanting beauty of this island it is named as the pearl of the Indian Ocean.It is the beauty queen all over the world
and the calm and quite nature of her afford a great relaxation.</p>
	</div>

<div id="photoGallery">

<div class="gallery">
  <a target="_blank" href="../images/sri_lanka_turtle-700x394.jpg">
    <img src="../images/sri_lanka_turtle-700x394.jpg" alt="Fjords" width="300" height="200">
  </a>
  <div class="desc">Sea Side</div>
</div>

<div class="gallery">
  <a target="_blank" href="../images/traditional-dances-of-sri-lanka-august-2011-2.jpg">
    <img src="../images/traditional-dances-of-sri-lanka-august-2011-2.jpg" alt="Forest" width="300" height="200">
  </a>
  <div class="desc">Culture</div>
</div>

<div class="gallery">
  <a target="_blank" href="../images/5.jpg">
    <img src="../images/5.jpg" alt="Northern Lights" width="300" height="200">
  </a>
  <div class="desc">Historical</div>
</div>

<div class="gallery">
  <a target="_blank" href="../images/tea.jpg">
    <img src="../images/tea.jpg" alt="Mountains" width="300" height="200">
  </a>
  <div class="desc">Hill Country</div>
</div>

<div class="gallery">
  <a target="_blank" href="../images/deer.jpg">
    <img src="../images/deer.jpg" alt="Mountains" width="300" height="200">
  </a>
  <div class="desc">Wild Life</div>
</div>

<div class="gallery">
  <a target="_blank" href="../images/Mahaweli_Ganga_by_Gampola.jpg">
    <img src="../images/Mahaweli_Ganga_by_Gampola.jpg" alt="Mountains" width="300" height="200">
  </a>
  <div class="desc">River Side</div>
</div>

</div>
<br><br><br><br>
<div id="service">
<p><h1>OUR SERVICE</h1>

You will never feel strange when we are in your service.We accept the responsibility of providing a friendly and secure tour for you with full of trust.
We are eager to direct you to the places you love to visit, without any hesitation.
By contacting us you will be able to find out the best suited places for your journey according to your taste and also you can seek for most comfortable and safe places for accommodation.
From the arrival to Sri Lanka till the departure we will serve you heartfully creating remarkable memories of a wonderful journey in your heart. 
</p>
</div>
<br>
<br>
<br>
<div id="downbanner" class="col-md-12" >

                  &copy; sawanisasanka@gmail.com
                    
</div>
</div>
</body>
</html>