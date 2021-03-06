<?php 

require "database_connect.php";
session_start();
if(!isset($_SESSION['user']) || !isset($_SESSION['admin'])){
	header("location:loginPage.php");
}
$query = "SELECT * FROM data";
$exec = mysqli_query($conn, $query);
$error;
if (!$exec) {
	"Unable to retrieve Blog information from databse";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../images/favicon.ico">

	<title>Academy | Thelpis Capital</title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="css/vendors_css.css">

	<!-- Style-->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">

</head>

<body class="theme-warning">

	<header>
		<nav hidden class="nav-white nav-transparent dark-overlay">
			<div class="nav-header">
				<a href="index3.html" class="brand">
					<li>Thelpis Capital</li>
				</a>
				<button class="toggle-bar">
					<span class="ti-menu"></span>
				</button>
			</div>
			<ul class="menu">

				<li><a href="index3.html">Home </a></li>
				<li><a href="currency_converter.html">Currency Converter</a></li>
				<li><a href="live_coin.html">Live Coin Chart</a></li>
				<li><a href="https://paxful.com/" target="_blank">Instant Buy & Sell</a></li>
				<li><a href="about.html"><i class="ti-arrow-circle-right me-10"></i>About Us</a></li>
				<li class="megamenu">
					<a href="#">User Pages</a>
					<div class="megamenu-content">
						<div class="row">
							<div class="col-lg-3 col-3">
								<ul class="list-group">
									<li>
										<h4 class="menu-title">User Pages</h4>
									</li>
									<li><a href="faqs.html"><i class="ti-arrow-circle-right me-10"></i>FAQs</a></li>
									<li><a href="membership.html"><i class="ti-arrow-circle-right me-10"></i>Membership</a></li>
								</ul>
							</div>
							<div class="col-lg-3 col-3">
								<ul class="list-group">
									<li>
										<h4 class="menu-title">Academy</h4>
									</li>
									<li><a href="academy.html"><i class="ti-arrow-circle-right me-10"></i>Academy</a></li>
									<li><a href="loginPage.php"><i class="ti-arrow-circle-right me-10"></i>Login</a></li>
									<li><a href="register_login.html"><i class="ti-arrow-circle-right me-10"></i>Register & Login</a></li>
									<li><a href="forgot_pass.html"><i class="ti-arrow-circle-right me-10"></i>Forgot Password</a></li>
								</ul>
							</div>
						</div>
					</div>
				</li>
				<li>
					<a href="blog_grid_2.html">Blog</a>
				</li>
				<li>
					<a href="contact_us.html">Contact</a>
				</li>
			</ul>
			<ul class="attributes">
				<li class="d-md-block d-none"><a href="registerPage.php" class="px-10 pt-15 pb-10">
						<div class="btn btn-primary py-5">Register Now</div>
					</a></li>
				<li><a href="#" class="toggle-search-fullscreen"><span class="ti-search"></span></a></li>

			</ul>

			<div class="wrap-search-fullscreen">
				<div class="container">
					<button class="close-search"><span class="ti-close"></span></button>
					<input type="text" placeholder="Search..." />
				</div>
			</div>
		</nav>
	</header>

	<!---page Title --->
	<section class="bg-img pt-150 pb-20" data-overlay="7" style="background-image: url(../images/front-end-img/background/bg-8.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-center">
						<h2 class="page-title text-white">Academy Trading Content for Learning</h2>
						<ol class="breadcrumb bg-transparent justify-content-center">
							<li class="breadcrumb-item"><a href="index3.html" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
							<li class="breadcrumb-item text-white active" aria-current="page">Academy</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="content">
		<div class="container-fluid">
			<?php if (isset($error)) {
				$err = <<<EOT
										<div class = "alert alert-danger" role = "alert">
											$error
										</div>
									EOT;
				echo $err;
			}
			?>
			<div style = "margin-top: 10px;" >
				<!--Page content -->
				<div class="container">

					<div class="row">
						<div class="col-12">
							<h2>Blog Tutorials </h2>
							<hr>
						</div>
					</div>
				</div>
				<div class="row">
					<?php
					if ($exec) {
						foreach ($exec as $q) { ?>
							<div class="col-4 d-flex justify-content-center align-items-center">
								<div class="card text-white bg-dark mt-5">
									<div class="card-body">
										<h5 class="card-title"><?php echo $q['title']; ?></h5>
										<p class="card-text" id = "set-limit"><?php echo $q['content']; ?></p>
										<a href="readBlogs.php?index=<?php echo $q['id']?>" class="btn btn-light"> Read more <span class="text-danger">&rarr;</span></a>
									</div>
								</div>
							</div>

					<?php }
					}  ?>
				</div>
			</div>

			<section class="py-50">
				<div class="container">

					<div class="row">
						<div class="col-12">
							<h2>Bitcoin Widgets / Crypto Price Widgets</h2>
							<hr>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div style="height:669px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38; padding: 0px; margin: 0px; width: 100%;">
								<div style="height:649px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=full_v2&theme=dark&cnt=10&pref_coin_id=1505&graph=yes" width="100%" height="645px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div>
								<div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div>
							</div>
						</div>

						<hr>
						<div class="col-12">
							<div style="height:669px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F; padding: 0px; margin: 0px; width: 100%;">
								<div style="height:649px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=full_v2&theme=light&cnt=10&pref_coin_id=1505&graph=yes" width="100%" height="645px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div>
								<div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-12">
							<h2>Single Coin Live Crypto/Bitcoin Widget</h2>
							<hr>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12">
							<div style="width: 250px; height:220px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; block-size:220px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F;padding:1px;padding: 0px; margin: 0px;">
								<div style="height:200px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=single_v2&theme=light&coin_id=859&pref_coin_id=1505" width="250" height="196px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;"></iframe></div>
								<div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<div style="width: 250px; height:220px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; block-size:220px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F;padding:1px;padding: 0px; margin: 0px;">
								<div style="height:200px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=single_v2&theme=light&coin_id=145&pref_coin_id=1505" width="250" height="196px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;"></iframe></div>
								<div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<div style="width: 250px; height:220px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; block-size:220px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F;padding:1px;padding: 0px; margin: 0px;">
								<div style="height:200px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=single_v2&theme=light&coin_id=359&pref_coin_id=1505" width="250" height="196px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;"></iframe></div>
								<div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12">
							<div style="width: 250px; height:220px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:220px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px;">
								<div style="height:200px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=single_v2&theme=dark&coin_id=859&pref_coin_id=1505" width="250" height="196px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;"></iframe></div>
								<div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<div style="width: 250px; height:220px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:220px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px;">
								<div style="height:200px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=single_v2&theme=dark&coin_id=145&pref_coin_id=1505" width="250" height="196px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;"></iframe></div>
								<div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<div style="width: 250px; height:220px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:220px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px;">
								<div style="height:200px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=single_v2&theme=dark&coin_id=359&pref_coin_id=1505" width="250" height="196px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;"></iframe></div>
								<div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-12">
							<h2>Crypto/Bitcoin Currency Converter</h2>
							<hr>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-12">
							<div style="width: 340px; height:335px; background-color: #232937; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:335px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;margin: 0;width: 340px;padding:1px;padding: 0px; margin: 0px;">
								<div style="height:315px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=converter&theme=dark" width="340" height="310px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div>
								<div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div>
							</div>
						</div>
						<div class="col-md-6 col-12">
							<div style="width: 340px; height:335px; background-color: #FAFAFA; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; block-size:335px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F;margin: 0;width: 340px;padding:1px;padding: 0px; margin: 0px;">
								<div style="height:315px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=converter&theme=light" width="340" height="310px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div>
								<div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div>
							</div>
						</div>
					</div>
					<hr>

					<div class="row">
						<div class="col-12">
							<h2>Horizontal Live Ticker</h2>
							<hr>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div style="height:62px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F;padding:1px;padding: 0px; margin: 0px; width: 100%;">
								<div style="height:40px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=light&pref_coin_id=1505&invert_hover=" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div>
								<div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div>
							</div>
						</div>
						<hr>
						<div class="col-12">
							<div style="height:62px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px; width: 100%;">
								<div style="height:40px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=dark&pref_coin_id=1505&invert_hover=no" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div>
								<div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div>
							</div>
						</div>
					</div>


				</div>

				<footer class="footer_three">
					<div class="footer-top bg-dark3 pt-50">
						<div class="container">
							<div class="row">
								<div class="col-lg-3 col-12">
									<div class="widget">
										<h4 class="footer-title">About</h4>
										<hr class="bg-primary mb-10 mt-0 d-inline-block mx-auto w-60">
										<p class="text-capitalize mb-20">Bringing the crypto world closer to home, ensuring you're included in this market.<br><br>Help us help you. Register today.</p>
									</div>
								</div>
								<div class="col-lg-3 col-12">
									<div class="widget">
										<h4 class="footer-title">Contact Info</h4>
										<hr class="bg-primary mb-10 mt-0 d-inline-block mx-auto w-60">
										<ul class="list list-unstyled mb-30">
											<li> <i class="fa fa-map-marker"></i> 1 University Drive, Berekuso<br>Eastern Region, Ghana</li>
											<li> <i class="fa fa-phone"></i> <span>+233550861693 </span><br><span>+233550487456 </span></li>
											<li> <i class="fa fa-envelope"></i> <span>thelpishelpdesk@gmail.com </span></li>
										</ul>
									</div>
								</div>
								<div class="col-12 col-lg-3">
									<div class="widget footer_widget clearfix">
										<h4 class="footer-title">Our Gallery</h4>
										<hr class="bg-primary mb-10 mt-0 d-inline-block mx-auto w-60">
										<ul class="list-unstyled">
											<li><a href="index3.html">Home</a></li>
											<li><a href="blog_grid_2.html">Blog</a></li>
											<li><a href="contact_us.html">Contact</a></li>
										</ul>
									</div>
								</div>
								<div class="col-lg-3 col-12">
									<div class="widget">
										<h4 class="footer-title">Accept Card Payments</h4>
										<hr class="bg-primary mb-10 mt-0 d-inline-block mx-auto w-60">
										<ul class="payment-icon list-unstyled d-flex gap-items-1">
											<li class="ps-0">
												<a href="javascript:;"><i class="fa fa-cc-amex" aria-hidden="true"></i></a>
											</li>
											<li>
												<a href="javascript:;"><i class="fa fa-cc-visa" aria-hidden="true"></i></a>
											</li>
											<li>
												<a href="javascript:;"><i class="fa fa-credit-card-alt" aria-hidden="true"></i></a>
											</li>
											<li>
												<a href="javascript:;"><i class="fa fa-cc-mastercard" aria-hidden="true"></i></a>
											</li>
											<li>
												<a href="javascript:;"><i class="fa fa-cc-paypal" aria-hidden="true"></i></a>
											</li>
										</ul>
										<h4 class="footer-title mt-20">Newsletter</h4>
										<hr class="bg-primary mb-4 mt-0 d-inline-block mx-auto w-60">
										<div class="mb-20">
											<form class="" action="" method="post">
												<div class="input-group">
													<input name="email" required="required" class="form-control" placeholder="Your Email Address" type="email">
													<button name="submit" value="Submit" type="submit" class="btn btn-primary"> <i class="fa fa-envelope"></i> </button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="footer-bottom bg-dark3">
						<div class="container">
							<div class="row align-items-center">
								<div class="col-md-6 col-12 text-md-start text-center"> ?? 2021 <span class="text-white"> Thelpis Capital</span> All Rights Reserved.</div>
								<div class="col-md-6 mt-md-0 mt-20">
									<div class="social-icons">
										<ul class="list-unstyled d-flex gap-items-1 justify-content-md-end justify-content-center">
											<li><a href="https://facebook.com/thelpis" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-facebook"><i class="fa fa-facebook"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</footer>


				<!-- Vendor JS -->
				<script src="js/vendors.min.js"></script>
				<!-- Corenav Master JavaScript -->
				<script src="corenav-master/coreNavigation-1.1.3.js"></script>
				<script src="js/nav.js"></script>
				<script src="../assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
				<script src="../assets/vendor_components/OwlCarousel2/dist/owl.carousel.js"></script>
				<script src="../assets/vendor_components/select2/dist/js/select2.full.js"></script>
				<script src="../assets/vendor_components/vertical-slider/jquery.vticker-min.js"></script>


				<!-- CryptoCurrency front end -->
				<script src="js/template.js"></script>
				<script src="js/pages/widget.js"></script>
			</section>
		</div>
	</div>
</body>

</html>