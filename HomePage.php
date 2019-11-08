<!-- Commented -->
<html>
<head>
	<meta charset="utf-8" />
   <title>NAAC | Main Page</title>
   <link href="CSS/mainCSS.css" rel="stylesheet" />
   <link href="CSS/homePageCSS.css" rel="stylesheet" />
   <link href="CSS/contactUsCSS.css" rel="styelsheet" />
   <link href="CSS/aboutUsCSS.css" rel="stylesheet" />
   <link href="CSS/main2CSS.css" rel="stylesheet" />
   <script type="text/javascript" src="JavaScript/ajax.js"></script>
</head>

<body id="body" onload="getValues('/NAAC/PHP/sqlDatabase/query.php', 'replace');">
	<header>
	<div class="headContainer">

	<div class="SignInLink">
            <?php  

                if (!isset($_SESSION)) {
                    session_start();
                }

                if($_SESSION['privilege'] == "admin" || $_SESSION['privilege'] == "user"){ //session already exists
                   echo <<<ZZEOF
                    <a href="signOutPage.php">
                    <div id ="Slink1">Log Out</div>
                    </a>
ZZEOF;
                }
                else{
                    echo <<<ZZEOF
                    <a href="signInPage.php">
                    <div id ="Slink1">Log In</div>
                    </a>
ZZEOF;
                }
            ?>
	</div>
	<!--Home Page SVG-->
	<div class="headerImage">
	<svg width="1080" height="100">
	<defs>
		<pattern id="image-bg" x="0" y="460" height="500" width="1080" patternUnits="userSpaceOnUse">
		   <image width="1080" height="500" xlink:href="fadeDogs.jpg"/>
		</pattern>
	</defs>	
	<circle id="orange-circle" r="150" cx="50" cy="50" fill="url('#image-bg')" />
  
	<animate 
           xlink:href="#orange-circle"
           attributeName="cx"
           from="-100"
           to="1200" 
           dur="5s"
           begin="0s"
		   repeatCount="indefinite"
           fill="freeze" />
	</svg>
	</div>
	<!--Home Page Header Links-->
	<div class="headerInfo">
		
		<div class="HeaderLinks">
			<div class="HeadLink1">
				<a href="HomePage.php">
					<div id ="Hlink1">Home Page</div>
				</a>
			</div>
			<div class="HeadLink2">
				<a href="contactUsPage.php">
					<div id ="Hlink2">Contact us</div>
				</a>
			</div>
			<div class="HeadLink3">
				<a href="aboutUSPage.php">
					<div id ="Hlink3">About us</div>
				</a>
			</div>
		</div>
	</div>
	</div>
	</header>
	
	<!-- The Form that passes in the values to be queried and returned to the webpage through AJAX -->
	<div class="FilterLinks">
	<form method="#" action="">
		 <label>Animal Type:</label>
		 <select name='type' id = 'type'>
			<option value="%">All</option>
			<option value="dog">Dog</option>
			<option value="cat">Cat</option>
			<option value="chicken">Chicken</option>
			<option value="kangaroo">Kangaroo</option>
		</select>
		<label>Age of animal:</label>
			<select name='age' id = 'age'>
			<option value="%">All</option>
			<option value="baby">0-1 Years</option>
			<option value="young">2-5 Years</option>
			<option value="old">5+ Years</option>
		</select>
		<label>Gender of animal:</label>
			<select name='gender' id = 'gender'>
			<option value="%">All</option>
			<option value="m">Male</option>
			<option value="f">Female</option>
		</select>
		<label>Search for your fur-baby!</label>
		<button type="button" onclick="getValues('/NAAC/PHP/sqlDatabase/query.php', 'replace');" id="petSubmit">Submit!</button>
	</form>
	</div>
	
    <div class="AnBodyTotal" id="replace">
	</div>
	
		<footer>
		<!--Home Page Footer Locations-->
		<div class="footerCol1">
				<div class="location1">
					<div id ="footTitle3">Our Locations</div>
					<div id ="footTitle">Windsor Center</div>
					<div id ="footBody">2000 Talbot Road West</br>Windsor, ON N9A 6S4</div>
				</div>
				<div class="location2">
					<div id ="footTitle">Chatham Center</div>
					<div id ="footBody">1001 Grand Avenue West</br>Chatham, ON N7M 5W4</div>
				</div>
				<div class="location3">
					<div id ="footTitle">London Center</div>
					<div id ="footBody">61 Oxford St West </br>London, ON N6H 5S8</div>
				</div>
				<div class="location1">
					<div id ="footTitle">Brantford Center</div>
					<div id ="footBody">27 Stanley Street </br>Brantford, ON N3S 6M1</div>
				</div>				
		</div>
		<!--Home Page Footer Help Links-->
		<div class="footerCol2">
				<div class="FootLink1">
					<div id ="footTitle4">Helpful Links</div>
					<div id ="footTitle">Windsor Humane Society</div>
					<div id ="footBody2"><a href="http://windsorhumane.org/" target="_blank">windsorhumane.org</a></div>
				</div>
				<div class="FootLink2">
					<div id ="footTitle">Petsmart</div>
					<div id ="footBody2"><a href="https://www.petsmart.ca/" target="_blank">www.petsmart.ca</a></div>
				</div>
				<div class="FootLink3">
					<div id ="footTitle">Royal Canin</div>
					<div id ="footBody2"><a href="http://www.royalcanin.ca/" target="_blank">www.royalcanin.ca</a></div>
				</div>
				<div class="FootLink4">
					<div id ="footTitle">24 Pet Watch</div>
					<div id ="footBody2"><a href="https://www.24petwatch.com/" target="_blank">www.24petwatch.com</a></div>
				</div>				
		</div>
	</footer>
<script type="text/javascript">
	//Creates an event listener for the petSubmit element onclick
	document.getElementById('petSubmit').addEventListener('click', getValues);
	document.getElementById('SignInLink').addEventListner('load', checkStatus);
	//When the above event happen this function runs 
	function getValues(url, objID){
		//Takes in the values of the select boxes from this page 
		var ty = document.getElementById("type").value;
		
		var ag = document.getElementById("age").value;
		
		var ge = document.getElementById("gender").value;
		
		console.log(ty, ag, ge);
  
		//Creates a new XMLHttpRequest to connect to the server
		var xhttp; 
	
		xhttp = new XMLHttpRequest();
		
		//Takes the response text and puts it in the HTML of the object, which above is replace
		xhttp.onreadystatechange = function(){
			var obj = document.getElementById(objID);
			obj.innerHTML = xhttp.responseText;
		}
		
		//Creates the get URL for GET 
		xhttp.open("GET", url + "?type=" + ty + "&age=" + ag + "&gender=" + ge, true);
		xhttp.send(null);
		//Make getData like getValue so that it is easy to work :( :'( 
	}
</script>
</body>
</html>


