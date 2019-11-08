<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
   <title>NAAC | Contact Us</title>
   <link href="CSS/main2CSS.css" rel="stylesheet" />
   <link href="CSS/contactUsCSS.css" rel="stylesheet" />
   <script type="text/javascript" src="JavaScript/ajax.js"></script>
   <script type="text/javascript" src="JavaScript/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
   <script type="text/javascript">
    

    tinyMCE.init({
        mode : "textareas",
        theme : "advanced",
        plugins : "emotions,spellchecker,advhr,insertdatetime,preview",

        // Theme options - button# indicated the row# only
        theme_advanced_buttons1 : "newdocument,|,bold,italic,underline,|,justifyleft,justifycenter,justifyright,fontselect,fontsizeselect,formatselect",
        theme_advanced_buttons2 : "cut,copy,paste,|,bullist,numlist,|,outdent,indent,|,undo,redo,|,link,unlink,anchor,image,|,code,preview,|,forecolor,backcolor",
        theme_advanced_buttons3 : "insertdate,inserttime,|,spellchecker,advhr,,removeformat,|,sub,sup,|,charmap,emotions",      
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true
    });
  </script>
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
	
	<div class="bodySec">
		<div class="textContainer">
			<div id="textTitle">Contact us</div>
				<div id="textBody">
				We here at Noah's Arc Adoption Center value your input. Please provide your name and email and include any and all questions, comments, concerns.
				</br></br><div id="titleBody">When applying for an animal, please include the following:</div>
				-How many people leave in your home (adults/children)</br>
				-What type of home you live in (apartment/house)</br>
				-Do you rent or own your home</br>
				-Do you have a backyard? if yes, is it fenced? if yes, how high?</br>
				-Do you have experience with the type of pet you selected?</br>
				-Are you willing to commit to training for the pet?</br>
				-And anything else you feel we should consider when selecting this pets future home.</br>



				</div>
		</div>

		<div class="contactForm">
<?php
                if (!isset($_SESSION)) {
                    session_start();
                }

                if($_SESSION['privilege'] == "admin" || $_SESSION['privilege'] == "user"){
                    echo <<<ZZEOF
                    <form>
                    <div class="userName">Name</div> 
                    <input id="inputName" type="text" name="name" placeholder="John Smith">
                    
                    <div class="userName">Email</div>
                    <input id="inputEmail" type="email" name="email" placeholder="email@email.com">
                    
                    <textarea id="textBox" name="content" cols="50" rows="15">
                    This is some content that will be editable with TinyMCE.
                    </textarea>
                    
                    <input id="inputButt" type="submit" value="Submit">
                </form>
ZZEOF;
                }
                else{
                    echo <<<ZZEOF
                    <form>
					<h1>You must log in to contact us.</h1>
                    <div class="userName">Name</div> 
                    <input id="inputName" type="text" name="name" placeholder="John Smith">
                    
                    <div class="userName">Email</div>
                    <input id="inputEmail" type="email" name="email" placeholder="email@email.com">
                    
                    <textarea id="textBox" name="content" cols="50" rows="15">
                    You must log in to contact us.
                    </textarea>
                </form>
ZZEOF;

                }
            ?>
			
		</div>
	</div>
	
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


