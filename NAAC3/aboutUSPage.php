<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
   <title>NAAC | About us</title>
   <link href="CSS/main2CSS.css" rel="stylesheet" />
   <link href="CSS/aboutUsCSS.css" rel="stylesheet" />
</head>

<body id="body">
	<header>
	<div class="headContainer">
	
	<div class="SignInLink">
            <?php  

                if (!isset($_SESSION)) {
                    session_start();
                }

                if($_SESSION['privilege'] == "admin" ){ //session already exists
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
	
	<!--Home Page HTML for ajax start-->
	<!--Home Page HTML for ajax start-->
	<!--Home Page HTML for ajax start-->
	<div class="aboutUsContain">
		
		<div class="hImage">
			<div id="headImg">
				<img src="aboutHead.jpg" alt="Header Image of Dogs" width="100%" height="300">
			</div>		
		</div>		
			
			<div class="bodySec">
				<div class="intro">
					<div id="inTitle">Welcome to Noah's Arc Adoption Center!</div>
						<div id="inBody">
							At NAAC, our mission is to save Cats, Dogs, Kangaroos, and Chickens from going down the wrong path by putting them in homes with people who love them and can guide them to make the best choices and make the most out of their lives.
							Founded in 2018, we have been fighting the good fight for about 4 months. We at NAAC strongly believe in letting the animal pick their owner. This innovative approach is the leading factor behind our 
							highly successful matching system! At an almost 92% success rate, our system speaks for itself.
						</div>
				</div>
				
				<div class="wehs">
					<div id="wehsTitle">Windsor Essex County Humane Society</div>
						<div id="wehsBody">
											For those of you who are looking to adopt your run of the mill Cat or Dog, 
											please visit our associate adoption center the <a id="wehsLink" href="http://windsorhumane.org/">Windsor Essex County Humane Society</a>.
						</div>
				</div>
				
				<div class="adopt">
					<div id="adoptTitle">What to expect when applying for our animals</div>
						<div id="adoptBody">
							Only after signing in will you see the apply for adoption option, if you find a pet that you would like to meet to determine if you might be a good fit for the pet. Send us message and explain what qualities you look for in your new fur-baby and any experience you have with their species. Give us an idea of why you would be the best care-taker for this animal and explain the things you will be doing to ensure this animal doesn't end up back on the streets. Make sure to include the best method to contact you and include minimum 3 reference contacts for us to contact
							Once we receive your application, we will review your information and contact your references. If all goes well during this step, we will begin our 4 week adoption process and invite you to come meet your potential new fur-baby.
							After the 4 week adoption process, you will be given the pet for a 48 hour trial period. During this time you will be taking the pet home and trying to form a bond with this pet. Following this 48 hour trial period if you feel this pet will achieve greatness with your help, we will finish up the entire process and you will go home as the new owner of a very lucky cat, dog, kangaroo, or chicken!
							Disclaimer
							Due to the high-risk nature of most of our animals, please plan to take off a minimum of 6 months time from work and family upon adopting a Noah's Arc Adoption Center Pet.
						</div>
				</div>
			</div>
	</div>
	<!--Home Page HTML for ajax end-->	
	<!--Home Page HTML for ajax end-->	
	<!--Home Page HTML for ajax end-->	
	
	<!--Home Page Footer Links-->
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

</body>
</html>


