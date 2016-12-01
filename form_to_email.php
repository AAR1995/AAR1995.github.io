<!DOCTYPE html>
<html lang="en">

	<head>
		<meta name="author" content="Alfonso Almazan Ruelas">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link href="css/nav_bar.css" rel="stylesheet">
		<link href="css/project.css" rel="stylesheet">

		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-red.min.css">
		<script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="js/contact_me.js"></script>

	</head>

	<body>
		<div class="demo-layout-transparent mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--no-desktop-drawer-button">
			<header class="mdl-layout__header mdl-layout__header--transparent">
				<div class="mdl-layout__header-row mdl-layout--large-screen-only">
					<!-- Title -->
					<span class="mdl-layout-title">Alfonso Almazan Ruelas</span>
					<!-- Add spacer, to align navigation to the right -->
					<div class="mdl-layout-spacer"></div>
					<!-- Navigation -->
					<nav class="mdl-navigation">
						<a class="mdl-navigation__link" href="index.html">Home</a>
						<a class="mdl-navigation__link" href="about_me.html">About Me</a>
						<a class="mdl-navigation__link" href="resume.html">Resume</a>
						<a class="mdl-navigation__link" href="projects.html">Projects</a>
					</nav>
				</div>
			</header>
			
			<div class="mdl-layout__drawer">
				<span class="mdl-layout-title">Alfonso Almazan R.</span>
				<nav class="mdl-navigation">
					<a class="mdl-navigation__link" href="index.html">Home</a>
					<a class="mdl-navigation__link" href="about_me.html">About Me</a>
					<a class="mdl-navigation__link" href="resume.html">Resume</a>
					<a class="mdl-navigation__link" href="projects.html">Projects</a>
				</nav>
			</div>
		
			<main class="mdl-layout__content">
				<div id=SocialMedia>
					<a id=LinkedIn href="https://www.linkedin.com/pub/alfonso-almazan-ruelas/130/382/a7b" target="_blank">
				          <img src="https://static.licdn.com/scds/common/u/img/webpromo/btn_viewmy_160x33.png" alt="View Alfonso Almazan Ruelas's profile on LinkedIn">
				    </a>
			   
			    	<a href="https://www.facebook.com/alfonso.almazan.16" target="_blank">
				          <img src="img/FB-f-Logo__blue_50.png" alt="View Alfonso Almazan Ruelas's profile on Facebook">
				    </a>
			    </div>

			    <div id=contactMeBtn>
					<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" onclick="displayContactForm()">
				  		<i class="material-icons" >email</i>
					</button>
				</div>

				<div id=contactMeForm class="mdl-card">
					  <div id=title class="mdl-card__title">
							Contact Me
					  </div>
					  <div class="mdl-card__supporting-text">
					  		<!-- Simple Textfield -->
					  		<?php 
								if(isset($_POST['submit'])){
								    $to = "almazanruelas@gmail.com"; // this is your Email address
								    echo $to;
								    $from = $_POST['email']; // this is the sender's Email address
								    echo $from;
								    echo $_POST['message'];
								}
							?>
							<form method="post" action=" ">
								<input type="email" name="email"/>
								<input type="text" name="message"/>
								<input name="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect" type="submit">
									Send
								</input>
							</form>
					  </div>
					  <!-- <div class="mdl-card__actions">
							<button id=sendEmailBtn class="mdl-button mdl-js-button mdl-js-ripple-effect">
								Send
							</button>
							<button id=cancelEmailBtn class="mdl-button mdl-js-button mdl-js-ripple-effect" onclick="cancelContactForm()">
						  	Cancel
							</button>
					  </div> -->
				</div>

			</main>

			<div class="footer">
				<p> © 2016 Alfonso Almazan Ruelas. All Rights Reserved. </p>
			</div>
		</div>

	</body>

</html>