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
	<link href="/assets/css/cabinet/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">

	<title>
		<?= $title ?>
	</title>
	<script SameSite="None; Secure" src="https://static.landbot.io/landbot-3/landbot-3.0.0.js"></script>
	<script>
		var myLandbot = new Landbot.Livechat({
			configUrl: 'https://chats.landbot.io/v3/H-867907-W22EMU7O8UGYD9J0/index.json',
		});
	</script>
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
<div style="background-image: url(/assets/image/fon.png);background-size: cover;min-height: 100vh;background-repeat: no-repeat;">

<div class="blur">
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
					<a class="nav-link" href="/cabinet/logout">Log out</a>

				</div>
			</div>
		</div>
	</nav>
<div class="container">
	<div class="row">





