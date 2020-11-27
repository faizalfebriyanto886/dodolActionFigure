<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Your Account || Dodol Action Figure</title>
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



<img src="images/accounts.jpg">
    <div class="row" style="margin-top:30px;">
      <div class="small-12">
        <p><?php echo '<h3>Halo!</h3>'; ?></p>

        <p><h4>Ini Adalah Akun Anda</h4></p>

        <p><b><font color="red">Ingin mengganti data diri anda?</font></b></p> <a href="account-edit.php"> Klik Disini! </a>
      </div>
    </div>

    <div class="row" style="margin-top:30px;">
      <div class="small-12">
        <p><b><font color="red">Ingin melihat daftar transaksi anda?</font></b></p> <a href="orders.php"> Klik Disini! </a>
      </div>
    </div>

    <div class="row" style="margin-top:30px;">
      <div class="small-12">
        <p><b><font color="red">Ingin keluar?</font></b></p> <a href="logout.php"> Klik Disini! </a>
      </div>
    </div>



    <div class="row" style="margin-top:30px;">
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
