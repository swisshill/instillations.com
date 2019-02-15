<!DOCTYPE HTML>
<html>
	<head>
		<title>Contact us</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<a href="index.html" class="logo">instillations</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
							<ul class="links">
								<li><a href="index.html">Events</a></li>
								<li><a href="about.html">About Us</a></li>
								<li class="active"><a href="contact.php">Contact Us</a></li>
						</ul>
							<ul class="icons">
								<li><a href="https://twitter.com/@_coldsmoke" target="_blank" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="https://www.facebook.com/OfficialColdSmoke" target="_blank" class="icon fa-facebook"><span class="label">Instagram</span></a></li>
								<li><a href="https://soundcloud.com/c0ldsm0ke/" target="_blank" class="icon fa-soundcloud"><span class="label">Soundcloud</span></a></li>
								<li><a href="mailto:info@instillations.com" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
							</ul>
					</nav>

				<!-- Footer -->
					<footer id="footer">
						<section>
							<?php session_start(); // place it on the top of the script ?>
							<?php
									$statusMsg = !empty($_SESSION['msg'])?$_SESSION['msg']:'';
									unset($_SESSION['msg']);
									echo $statusMsg;
							?>
<p>To keep in touch with Instillations' activities, please fill in the following form. We'll keep you updated!</p>
							<form id="signup-form" method="post" action="action.php">
								<div class="field">
									<label for="fname">First Name*</label> <input type="text" id="fname" name="fname"/>
								</div>
									<div class="field">
										<label for="lname">Last Name</label> <input type="text" id="lname" name="lname"/>
									</div>
								<div class="field">
									<label for="email">Email*</label> <input type="email" id="email" name="email" />
								</div>
									<div class="field">
								<h3>Language*</h3>
									<input type="radio" id="lang_fr" value="french" name="lang" checked>
									<label for="lang_fr">French</label>
									<input type="radio" id="lang_en" value="english" name="lang">
									<label for="lang_en">English</label>
							</div>
							<div class="field">
								<h3>Become a member?</h3>
									<input type="radio" id="member_yes" name="member" value="member" checked>
									<label for="member_yes">Yes</label>
										<input type="radio" id="member_no" name="member" value="friend">
										<label for="member_no">No</label>
										<p>You can become a member for free.</p>
									</div>
								<!-- <div class="field">
									<label for="lang">Preferred language*</label> <input type="text" id="lang" name="lang" placeholder="French/English"/>
								</div> -->
								<!-- <div class="field">
									<label for="member">Membership*</label> <input type="text" id="member" name="member" placeholder="Yes/No"/>
								<p>You can become a member for free.</p>
							</div> -->
								<ul class="actions">
									<li><input type="submit" name="submit" value="Subscribe" /></li>
								</ul>
							</form>
							<!-- <p><i>*compulsory fields</i></p> -->
						</section>
						<section class="split contact">
							<section class="alt">
								<h3>Address</h3>
								<p>Association Instillations<br>c/o Sanctuary<br>Av. d'Echallens 40<br>1004 Lausanne<br>Switzerland</p>
							</section>
							<section>
								<h3>Email</h3>
								<p><a href="mailto:info@instillations.com">info@instillations.com</a></p>
							</section>
							<section>
								<h3>Links</h3>
									<ul class="icons">
										<li><a href="https://twitter.com/@_coldsmoke" target="_blank" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="https://www.facebook.com/OfficialColdSmoke" target="_blank" class="icon fa-facebook"><span class="label">Instagram</span></a></li>
										<li><a href="https://soundcloud.com/c0ldsm0ke/" target="_blank" class="icon fa-soundcloud"><span class="label">Soundcloud</span></a></li>
										<li><a href="mailto:info@instillations.com" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
									</ul>
							</section>
							<section>
								<h3>Committee</h3>
								<p>Ash|President, Event and Founder<br>
								Romain Boulandet|Vice-President<br>
									Caroline Naef|Treasurer</p>
							</section>
						</section>
					</footer>

					<!-- Copyright -->
						<div id="copyright">
							<ul>
							<li>Switch to French</li>
							<li>&copy; Instillations</li>
							<li>Credits: <a href="http://html5up.net">HTML5 UP</a></li>					</div>
						</ul>
				</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
