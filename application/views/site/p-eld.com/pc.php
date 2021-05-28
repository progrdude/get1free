<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<!-- Bootstrap CSS -->
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="/assets/css/style.css" rel="stylesheet">
	<link href="/assets/css/easywheel.min.css" rel="stylesheet">
	<script src="https://apps.elfsight.com/p/platform.js" defer></script>
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
	<script async src="https://www.googletagmanager.com/gtag/js?id=<?= $config_site["anal"] ?>"></script>
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
				<a class="nav-link btn-link" data-bs-toggle="modal" data-bs-target="#loginModal">Log in</a>

			</div>
		</div>
	</div>
</nav>
<div class="bg" style="background-image: url(/assets/image/<?= $config_site['background'] ?>);height: 560px;background-size: cover;background-repeat: no-repeat;background-position: inherit;">

	<div class="blur h-100">
		<div class="cd-filter filter-is-visible">
			<div class="cd-filter-inner">

				<div class="wheel-wrapper">
					<div class="wheel"></div>
				</div>
				<div class="wheel-content-wrapper">
					<div class="wheel-content-center">


						<div class="card">
							<div class="card-body">
                                <div class="mb-3 text-center d-flex align-items-center justify-content-between">
                                    <img src="/assets/image/arrow_bot.png" alt="" style="height: 60px;">
                                    <h3 style="color: #f14668;font-size: 2vw;font-weight: 600;">
                                        TO GET YOUR PRIZE
                                    </h3>
                                    <img src="/assets/image/arrow_bot.png" alt="" style="height: 60px;">
                                </div>
								<div class="mb-3 text-center">
									<label class="form-label">Enter your order ID</label>
									<input type="text" class="form-control" id="order_id">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#howfindModal">How do i find my order id?</a>
								</div>
								<div class="mb-3 text-center">
									<label for="exampleInputEmail1" class="form-label">Email address</label>
									<input type="email" class="form-control" id="email" aria-describedby="emailHelp">
									<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
								</div>
								<button type="submit" onclick="register()" class="btn btn-site spin-button w-100" style="background: #f14668" >spin to win</button>


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
		</div> <!-- cd-filter -->
		<div class="container-fluid h-100">
			<div class="row h-100">
				<div class="col-lg-12 no-padding h-100">
					<div class="container-fluid h-100">
						<div class="row h-100">
							<div class="col-lg-5 h-100  d-flex align-items-center justify-content-end">

							</div>
							<div class="col-lg-7 h-100 d-flex align-items-end justify-content-end">
								<img src="/assets/image/<?= $config_site['image'] ?>" alt="" style="height: 97%">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12">

				</div>
			</div>
		</div>
	</div>
</div>
<div class="container mt-5">
	<div class="row">
		<div style="position: relative" id="progress-bar">
			<div class="step_info d-flex">

				<div class="col">
					<div class="step_info_step active">
						<img src="/assets/image/icon-3.svg">
						<img src="/assets/image/galina.svg" alt="">
						<span>enter<br> your order id</span>

					</div>
				</div>
                <div class="col">
                    <div class="step_info_step now">
                        <img src="/assets/image/icon-1.svg" style="width: 100px;">
                        <img src="/assets/image/galina.svg" alt="">
                        <span>spin <br> to win</span>

                    </div>
                </div>
				<div class="col">
					<div class="step_info_step ">
						<img src="/assets/image/icon.svg">
                        <img src="/assets/image/galina.svg" alt="">
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
	<div class="row mt-5">

		<div class="col-12" style="text-align: center">
			<?= $config_site['text_two'] ?>
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
<div style="background: <?= $config_site['color_second'] ?>;">
	<div class="container py-5">
		<div class="row text-center">
			<h1>Featured collection</h1>
		</div>
		<div class="row mt-5">

			<?php if (!empty($all_site_product)) { ?>
				<?php foreach ($all_site_product as $site) { ?>
					<div class="col-lg-10 mx-auto mt-4">
						<div class="card-product">
							<div class="row h-100">
								<div class="col-lg-7">
									<h3 class="mb-3"><?= $site['name'] ?></h3>
									<p>
										<b>About:</b>
										<?= $site['about'] ?>
									</p>
									<p>
										<b>Instruction manual:</b>
										<?= $site['manual'] ?>
									</p>
                                    <a href="<?= $site['amazon_url'] ?>" class="btn amz_btn" target="_blank" style="background: <?= $config_site['color'] ?>">
                                        Order now at Amazon.com
                                    </a>
								</div>
                                <div class="col-5 d-flex align-items-center justify-content-center">
                                    <img src="/assets/image/<?= $site['image'] ?>" alt="" class="img-fluid">
                                </div>


							</div>

						</div>
					</div>
				<?php } ?>
			<?php } ?>


		</div>
	</div>
</div>
<div style="background-color: <?= $config_site['color'] ?>;" class="container-fluid pt-5">
	<div class="row">
		<div class="col-12 pt-5 pb-5 text-center text-white">
			<img alt="" src="/assets/image/<?= $config_site['logo'] ?>" width="150px">
		</div>
		<div class="col-12 text-center pb-5">
			<a style="color: white" href="" data-bs-toggle="modal" data-bs-target="#policyModal">Privacy Policy</a>
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

<div class="modal fade" id="policyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Privacy Policy</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="frm_message" role="status">
					<p><strong>Privacy Policy</strong></p>
					<p><?= $_SERVER['SERVER_NAME'] ?> website administration is obliged to maintain your privacy on the Internet. We pay great atte
						ntion to securing the data you provided to us. Our privacy policy is based on
						<a href="https://ec.europa.eu/info/law/law-topic/data-protection_en">the General Data Protection Re
							gulation (GDPR) of the European Union. </a>The purposes, for which we collect your personal data
						are: improvement of our service, communication with visitors to this site, present
						ing the information requested by the user, providing services associated with the website’s speci
						alization, , and for other actions listed below.</p>
					<p><strong>Personal data storage and processing</strong></p>
					<p>We collect and process your personal data only with your willing consent.
						Wi th your permission, we can collect and process the following data:
						e-mail address, phone number, home address, . Collection and processing
						of your personal information is carried out in accordance with the laws
						of the European Union and the USA.</p>
					<p><strong>Data storage, alteration, and removal</strong></p>
					<p>The user, who has provided <?= $_SERVER['SERVER_NAME'] ?> with their personal data, has the right for
						their alteration and removal, as well as the right to recall the agreement to data
						processing. Time, during which your personal data will be stored is: time the personal
						data is used that is necessary for the website’s main activity. After finishing with the
						processing of your personal data, the website’s administration will permanently delete it.
						To access your personal data, you can contact the administration on: <?= $_SERVER['SERVER_NAME'] ?>. We will
						be able to pass your data to a third party only with your willing consent. If the data was
						transferred to a third party, which is not associated with our organization, we cannot perform
						any changes to that data.</p>
					<p>
						<strong>Processing of visiting technical data</strong>
					</p><p>Records of your IP address, time of visit, browser settings,
						operational system and other technical information is saved in the database
						when you visit <?= $_SERVER['SERVER_NAME'] ?>. This data is necessary for the correct display of
						the website’s content. It is impossible to identify the person of the visitor using this data.</p>
					<p><strong>Children’s personal information</strong></p>
					<p>If you are a parent or a legal guardian of an underage child, and you know that the child has provided us with their personal information without your consent, please contact us on: <?= $_SERVER['SERVER_NAME'] ?>. It is forbidden to enter personal data of underage users without the agreement of parents or lawful guardians.</p>
					<p><strong>Cookies processing</strong></p>
					<p>We use cookie files for the correct display of the website’s content and for the convenience of browsing  <?= $_SERVER['SERVER_NAME'] ?>. They are small files, that are stored on your device. They help the website to remember information about you, such as in which language you use the website and which pages have you already opened. This information will be useful in the next visit. Thanks to cookie files, the website’s browsing becomes much more convenient. You can learn more about these files <a href="https://en.wikipedia.org/wiki/HTTP_cookie">here</a>. You can set up cookies reception and blocking in your browser yourself. Inability to receive cookie files may limit the functionality of the website.</p><p><strong>Processing of personal data by other services</strong></p>
					<p>This website uses third-party online services, which perform data collecting, independent from us. Such services include: Google Analytics , Facebook.com, .</p>
					<p>Data collected by these services may be provided to other services within those organizations. They can use the data for advertising personalization of their own advertising network. You can learn about user agreements of those organizations on their websites. You can also refuse their collection of your personal data. For example, Google Analytics Opt-out Browser Add-on can be found <a href="https://tools.google.com/dlpage/gaoptout?hl=en"> here </a>. We do not pass any personal data to other organizations or services, which are not listed in this privacy policy. As an exception, the collected data may be provided on a lawful request of state authorities, that are authorized to request such information.</p>
					<p><strong>Links to other websites</strong></p>
					<p>Our website <?= $_SERVER['SERVER_NAME'] ?> may contain links to other websites, which are not under our control. We are not responsible for the content of these websites. We recommend you familiarize yourself with the privacy policy of every website that you visit, if such policy exists.</p><p><strong>Changes to the privacy policy</strong></p><p>From time to time, our website <?= $_SERVER['SERVER_NAME'] ?> may update our privacy policy. We inform about any changes to the privacy policy, placed on this webpage. We are monitoring any changes in legislation, which is related to personal data in European Union and USA. If you have entered any of your personal data on our website, we will inform you about the changes in our privacy policy. If your personal data, and more specifically, your contact information  was entered incorrectly, we will not be able to contact you.</p><p><strong>Feedback and final clauses</strong></p><p>You can contact the administration of <?= $_SERVER['SERVER_NAME'] ?> regarding any questions related to privacy policy on: <?= $_SERVER['SERVER_NAME'] ?>, or by filling a contact form specified in a corresponding section of this website. If you do not agree with this privacy policy, you cannot use the services of <?= $_SERVER['SERVER_NAME'] ?>. In this case you should avoid visiting our website.</p></div>
			</div>

		</div>
	</div>
</div>
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="text" class="form-control form-control-lg" id="loginEmail" required="">
                    </div>
                    <div class="mb-4">
                        <label for="password">Password</label>
                        <input type="password" class="form-control form-control-lg" id="loginPass" required="">
                    </div>

                    <button type="button" class="btn btn-site btn-lg w-100" style="background: <?= $config_site['color'] ?>"  onclick="login()">Login</button>

                </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-link"">Recovery password</button>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="howfindModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <img src="/assets/image/how_to_find.png" alt="" class="img-fluid">
                <h4 class="mt-4">How do i find my order id?</h4>
                <p>You can find Order ID in your Amazon Account Order History or on the packing slip you received in your package</p>
                <a href="https://www.amazon.com/gp/css/order-history?ref_=nav_orders_first" class="btn btn-site btn-lg w-100"  style="background: #f14668">Amazon Account Order History</a>
            </div>


        </div>
    </div>
</div>
</body>
</html>


