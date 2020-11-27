<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login || Dodol Action Figure</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)">
	<script type="text/javascript" src="js/mobile.js"></script>
</head>
<body>
	<div id="header">
		<a href="index.php" class="logo">
			<img src="images/topLogo.png" alt="">
		</a>
		<ul id="navigation">
			<li>
				<a href="index.php">home</a>
			</li>
			<li>
				<a href="">product</a>
			</li>
			<li>
				<a href="">cart</a>
			</li>
			<li>
				<a href="">orders</a>
			</li>
      <li>
        <a href="">contact</a>
      </li>
		</ul>
	</div>
<img src="images/log_in.jpg">
<h4> Anda harus login terlebih dahulu untuk melakukan pembelian. Tidak punya akun? <a href="register.php">Register disini!</a> </h4>

	<form method="POST" action="verifikasi.php" style="margin-top:30px;">
		<div class="row">
			<div class="small-8">

				<div class="row">
					<div class="small-4 columns">
						<label for="right-label" class="right inline">Email</label>
					</div>
				<div class="small-8 columns">
					<input type="email" id="right-label" placeholder="Email Anda" name="username">
					</div>
					</div>
					<div class="row">
					<div class="small-4 columns">
					<label for="right-label" class="right inline">Password</label>
					</div>
					<div class="small-8 columns">
					<input type="password" id="right-label" name="pwd">
					</div>
				</div>

				<div class="row">
					<div class="small-4 columns">

					</div>
					<div class="small-8 columns">
						<input type="submit" id="right-label" value="Login" style="background: #0078AO; border; none; color; fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
					</div>
				</div>
			</div>
		</div>
	</form>

	<div class="row" style="margin-top: 10px;">
		<div class="small-12">

			<footer style="margin-top:10px;">
				<p style="text-align:center; font-size:0.8em;clear:both;">&copy; Dodol Action Figure Shop. All Rights Reserved.</p>
			</footer>

		</div>
	</div>

	<script src="js/vendor/jquery.js"></script>
	<script src="js/foundation.min.js"></script>
	<script>
		$(document).foundation();
	</script>
</body>
</html>
