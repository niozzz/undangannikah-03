
<?php

if (!isset($_SESSION))
{
	session_start();

	
}

$_SESSION['statusTamu'] = "true";

if (isset($_GET['untuk']))
{
	$namaTamu = htmlspecialchars ($_GET['untuk']);
}
?>

<!DOCTYPE HTML>

<html lang="en">



<style>

    .center-landing {

        margin: 0;

        position: absolute;

        top: 50%;

        left: 50%;

        -ms-transform: translate(-50%, -50%);

        transform: translate(-50%, -50%);

    }

    

    img[alt="www.000webhost.com"]{display:none;}

</style>



<head>

	<title>Wedding Invitation</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta charset="UTF-8">

	

	<b:if cond='data:view.isHomepage'>

	<meta name="description" content="Undangan Pernikahan Dzulqa &amp; Andi">
	<meta property="og:title" content="Undangan Pernikahan Dzulqa &amp; Andi" />
	<link rel="shortcut icon" href="https://inveet.id/landing/favicon.ico">
	<meta property="og:url" content="https://u-nik.my.id" />
	<meta property="og:description" content="Undangan Pernikahan Dzulqa &amp; Andi">
	<meta property="og:image" content="https://undangannikahcitra.000webhostapp.com/assets/images/slider1.jpg">

    </b:if>

    

	<!-- Font -->

	<link href="https://fonts.googleapis.com/css?family=Playball%7CBitter" rel="stylesheet">

	<!-- Stylesheets -->

	<link href="cw/assets/css/bootstrap.css" rel="stylesheet">

	<link href="cw/assets/css/fluidbox.min.css" rel="stylesheet">

	<link href="cw/assets/css/font-icon.css" rel="stylesheet">

	<link href="cw/assets/css/listTamu/styles.css" rel="stylesheet">

	<link href="cw/assets/css/listTamu/responsive.css" rel="stylesheet">

	<link rel="icon" type="image/png" sizes="16x16" href="cw/assets/images/logo-black.png">



	

</head>



<body class="contact-area">

	



	<!-- start = untuk list tamu -->

	<section class="section center-landing">

		<div class="container">

			<div class="row">



		

                

				<div style="margin:auto; " class="col-sm-12 col-md-6 ">

					<div class="contact-form margin-bottom">

						<h2 class="center-text" style="margin-bottom:20px;">Dzulqa <br> <i style="color:#E45F74;" class="icon icon-heart"></i> <br> Andi</h2>
						<?php if (isset($_GET['untuk'])) {?>
						<p class="center-text">
							Turut mengundang Bapak/Ibu/Saudara/i
							<br>
							<span style="margin:10px 0px;font-size: 2rem;font-weight:bold;"><?= ucwords( $namaTamu) ?></span>
							
						</p>
						<?php } ?>
						<form method="post" action="index.php">

							<div class="row">

								<form method="POST" action="index.php">
									<!-- <input type="hidden" name="statusTamu" value="true"> -->
									<div class="col-sm-12 center-text">

										<button class="btn"><b>Buka Undangan</b></button>

									</div>

								</form>

								





							</div><!-- row -->

						</form>

					</div><!-- contact-form -->

				</div><!-- col-sm-6 -->

                



			</div><!-- row -->

		</div><!-- container -->

        <div class="container center-text">



			

			<p class="copyright"> Copyright &copy;<script>

					document.write(new Date().getFullYear());

				</script>

				-  Dibuat dengan <i class="icon-heart" aria-hidden="true"></i> oleh Millenio</p>

		</div>

	</section><!-- section -->

	<!-- end = untuk list tamu -->







	<!-- start = footer  -->

	

	<!-- end = footer -->





	<script src="cw/assets/js/jquery-3.1.1.min.js"></script>





	<script src="cw/assets/js/tether.min.js"></script>

	<script src="cw/assets/js/bootstrap.js"></script>

	<script src="cw/assets/js/scripts.js"></script>

	<script src='assets/sakura.js'></script>





   



</body>



</html>