<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
   <title>NAAC | Admin Page</title>
   <link href="CSS/main2CSS.css" rel="stylesheet" />
   <link href="CSS/adminPageCSS.css" rel="stylesheet" />
   <script type="text/javascript" src="JavaScript/ajax.js"></script>
</head>

<body id="body">

    <?php
		if (!isset($_SESSION)) {
			session_start();
		}
		
		if(isset($_SESSION['privilege'])){
			if($_SESSION['privilege'] == "admin"){
                //do nothing
			}
			else{
                header('Location: '."403.html"); //user, not admin
            }
        }
        else{
            header('Location: '."403.html"); //trying to url surf
        }
	?>

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
	<div class="buttonContainer">
		<div class="textBox">
			<div id="text">Select an Admin Action</div>
		</div>
		
		
			<div class="buttRow">
				<input id="delUser" type="button" value="Delete User"> <input id="delAUser" type="text" name="delUsername" placeholder="user email"></br>
				<input id="modUser" type="button" value="Give Admin "> <input id="ModAUser" type="text" name="modUsername" placeholder="user email"></br>
			</div>
	</div>

	<script>
			document.getElementById('delUser').addEventListener('click', deleteUser);
			document.getElementById('modUser').addEventListener('click', modifyUser);

		
			function deleteUser(e){
				e.preventDefault();
		
				var user = document.getElementById('delAUser').value;
                console.log(user);
		
				var xhr = new XMLHttpRequest();
				xhr.open('GET', 'PHP/sqlDatabase/deleteAccount.php?user='+user, true);
		
				xhr.onload = function(){
					if(this.responseText == "success"){
						document.getElementById('delAUser').value = "Success!";
					}
                    else{
						document.getElementById('delAUser').value = "User not found; try again";
					}

				}
		
				xhr.send();
			}

            function modifyUser(e){
				e.preventDefault();
		
				var user = document.getElementById('ModAUser').value;
                console.log(user);
		
				var xhr = new XMLHttpRequest();
				xhr.open('GET', 'PHP/sqlDatabase/modAccount.php?user='+user, true);
		
				xhr.onload = function(){
					if(this.responseText == "success"){
						document.getElementById('ModAUser').value = "Success!";
					}
                    else{
						document.getElementById('ModAUser').value = "User not found; try again";
					}

				}
		
				xhr.send();
			}
	
	</script>
	
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


