<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<!-- Bootstrap CSS -->
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="/assets/css/style_mobile.css" rel="stylesheet">
	<link href="/assets/css/easywheel.min.css" rel="stylesheet">
    <!-- Hotjar Tracking Code for https://revicare-beauty.com/ -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:2357296,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
    <title>
        <?= $title ?>
    </title>
	<script SameSite="None; Secure" src="https://static.landbot.io/landbot-3/landbot-3.0.0.js"></script>
	<script>
		var myLandbot = new Landbot.Livechat({
			configUrl: 'https://chats.landbot.io/v3/H-867907-W22EMU7O8UGYD9J0/index.json',
		});
	</script>
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=<?= $config_site["anal"] ?>\"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '<?= $config_site["anal"] ?>');
    </script>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','<?= $config_site["tag_head"] ?>');</script>
</head>
<body>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $config_site["tag_body"] ?>"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<nav class="navbar navbar-expand-lg navbar-dark " style="background-color:<?= $config_site['color'] ?>">
	<div class="container">
		<a class="navbar-brand" href="#">
			<img src="/assets/image/<?= $config_site['logo'] ?>" alt="" height="60px">
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a class="nav-link" href="#">Log in</a>

			</div>
		</div>
	</div>
</nav>
<div class="bg" style="background: <?= $config_site['color_second'] ?>;height: 100%;background-size: cover;background-repeat: no-repeat;background-position: inherit;">
		<div class="container pt-5">
			<div class="row">
				<div class="col-lg-12 no-padding h-100">
					<div class="container h-100">
						<div class="row h-100">
							<div class="col-12">
								<img src="/assets/image/<?= $config_site['image'] ?>" alt="" class="w-100 img-fluid">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12 pb-5">
					<div class="cd-filter filter-is-visible">
						<div class="cd-filter-inner">

							<div class="wheel-wrapper">
								<div class="wheel"></div>
							</div>
							<div class="wheel-content-wrapper">
								<div class="wheel-content-center">


									<div class="card">
										<div class="card-body">



											<div class="mb-3 text-center">
												<label class="form-label">Enter your order ID</label>
												<input type="text" class="form-control" id="order_id">
											</div>
											<div class="mb-3 text-center">
												<label for="exampleInputEmail1" class="form-label">Email address</label>
												<input type="email" class="form-control" id="email" aria-describedby="emailHelp">
												<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
											</div>
											<button type="submit" onclick="register()" class="btn btn-site spin-button w-100" style="background: <?= $config_site['color'] ?>" disabled>spin to win</button>



											<div class="mt-3 text-center">
												<p>You will be automaticly redirected
													to your profile
													to check delivery status</p>
											</div>

										</div>

									</div>


								</div>
							</div>


						</div> <!-- cd-filter inner -->
					</div>
				</div>
			</div>
		</div>
		 <!-- cd-filter -->

</div>
<div class="container mt-5">
	<div class="row">

		<div class="col-12" style="text-align: center">
			<?= $config_site['text_two'] ?>
		</div>


	</div>
	<div class="row mt-5">
		<div style="position: relative" id="progress-bar">
			<div class="step_info d-flex">
				<div class="col">
					<div class="step_info_step active">
						<img src="/assets/image/icon-1.svg">
						<img src="/assets/image/galina.svg" alt="">
						<span>choose <br> your prize</span>

					</div>
				</div>
				<div class="col">
					<div class="step_info_step now">
						<img src="/assets/image/icon-3.svg">
						<img src="/assets/image/galina.svg" alt="">
						<span>enter<br> your order id</span>

					</div>
				</div>
				<div class="col">
					<div class="step_info_step ">
						<img src="/assets/image/icon-4.svg"><img src="/assets/image/galina.svg" alt="">
						<span>sumbit your delivery<br> information</span>
					</div>
				</div>
				<div class="col">
					<div class="step_info_step ">
						<img src="/assets/image/icon-4.svg">
						<img src="/assets/image/galina.svg" alt="">
						<span>share <br>your experience</span>
					</div>
				</div>
				<div class="col">
					<div class="step_info_step ">
						<img src="/assets/image/icon-5.svg">
						<img src="/assets/image/galina.svg" alt="">
						<span>get <br>your reward</span>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<div style="background-color: <?= $config_site['color'] ?>;">
	<div class="container d-flex h-100 mt-5">
		<div class="row align-self-center w-100 py-5" style="margin-left: 0px;">

			<div class="col-lg-6 col-sm-12  mx-auto">
				<img alt="" src="/assets/image/<?= $config_site['img_three'] ?>" style="max-width: 100%;">
			</div>
			<div class="col-lg-6 col-sm-12  mx-auto align-self-center">
				<div class="card_sec">
					<?= $config_site['text_three'] ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container mt-5">
	<div class="row">
		<div class="col-lg-12">

			<div class="<?= $config_site['review_id'] ?>"></div>


		</div>
	</div>
</div>
<div style="background: <?= $config_site['color_second'] ?>;background-size: cover;background-repeat: no-repeat;">
	<div class="container py-5">
		<div class="row text-center">
			<h1>Featured collection</h1>
		</div>
		<div class="row mt-5">

			<?php if (!empty($all_site_product)) { ?>
				<?php foreach ($all_site_product as $site) { ?>
					<div class="col-lg-6 mt-4">
						<div class="card-product">
							<div class="row h-100">
								<div class="col-12">
									<h1><?= $site['name'] ?></h1>
									<p>
										<b>About:</b>
										<?= $site['about'] ?>
									</p>
									<p>
										<b>Instruction manual:</b>
										<?= $site['manual'] ?>
									</p>
								</div>
								<div class="container">
									<div class="row h-100">
										<div class="col-6 d-flex align-items-center">
											<a href="<?= $site['amazon_url'] ?>" target="_blank">
												<img src="/assets/image/amazon-button3.png" alt="" class="img-fluid">
											</a>


										</div>
										<div class="col-6 d-flex align-items-end">
											<img src="/assets/image/<?= $site['image'] ?>" alt="" class="img-fluid">
										</div>
									</div>
								</div>


							</div>

						</div>
					</div>
				<?php } ?>
			<?php } ?>


		</div>
	</div>
</div>
<div style="background-color: <?= $config_site['color'] ?>;" class="container-fluid mt-5">
	<div class="row">
		<div class="col-12 pt-5 pb-5 text-center text-white">
			<img alt="" src="/assets/image/<?= $config_site['logo'] ?>" width="150px">
		</div>
		<div class="col-12 text-center pb-5">
			<a style="color: white" href="" data-toggle="modal" data-target="#policyModal">Privacy Policy</a>
		</div>
	</div>
</div>

<script src="/assets/js/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js" type="text/javascript"></script>
<script src="/assets/js/bootstrap.bundle.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="/assets/js/jquery.easywheel.min.js"></script>
<script src="/assets/js/wheel.js" ></script>
<script src="/assets/js/script.js" ></script>


</body>
</html>


