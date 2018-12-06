<?php header("Cache-Control: max-age=5, public "); ?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-PQPKTN6');</script>
		<!-- End Google Tag Manager -->

				<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120000450-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120000450-1');
  gtag('config', 'AW-621432292');
</script>

		<?php 
		$ip = getenv('HTTP_CLIENT_IP')?:
			getenv('HTTP_X_FORWARDED_FOR')?:
			getenv('HTTP_X_FORWARDED')?:
			getenv('HTTP_FORWARDED_FOR')?:
			getenv('HTTP_FORWARDED')?:
			getenv('REMOTE_ADDR');

			$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

		 ?>

		<meta charset="utf-8">
		<title>911-Crew Top rated HVAC professionals nearby %STATE%</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Cache-Control" content="public" />
		<meta http-equiv="Expires" content="5" />
		<meta http-equiv="Cache-Control" content="max-age=5" />

		<meta name="Description" CONTENT="911-Crew - Hire top rated local HVAC professionals to your door step in less than 60 minutes">

		<meta property="og:title" content="911 Crew HVAC Services %STATE%">
		<meta property="og:description" content="911-Crew - Hire top rated local HVAC professionals to your door step in less than 60 minutes">
		<meta property="og:url" content="<?php echo $_SERVER['REQUEST_URI']; ?>">
		<meta property="og:type" content="HVAC Services">
		<meta property="og:image" content="assets/images/logo.png">
		<meta property="og:site_name" content="911 - Crew">
		
		<script async src="//160857.tctm.co/t.js"></script>

		<link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/fav.png">
		<link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/fav.png">
		<link rel="icon" type="image/png" sizes="16x16" href="assets/favicons/fav.png">
		<link rel="manifest" href="assets/favicons/site.webmanifest">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">
		
		<meta name="msapplication-TileColor" content="#000000">
		<meta name="theme-color" content="#ffffff">

		<link rel="stylesheet" type="text/css" href="style.css">
		<!-- <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:400,700|Merriweather"> -->
	
		<noscript>
			<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:400,700|Merriweather">
			<link rel="stylesheet" type="text/css" href="assets/css/ouibounce.min.css">
		</noscript>

		<?php 

		$link_params = '';
		$lg_f = false;

		if (isset($_GET['lg']) && $_GET['lg'] && ($_GET['lg'] === 'f')) {
				$lg_f = true;
			}

			if (isset($_GET['kw_ad']) && $_GET['kw_ad'] && isset($_GET['call_ad']) && $_GET['call_ad']) {
				$link_params .= '?kw_ad=' . $_GET['kw_ad'] . '&call_ad=' . $_GET['call_ad'];
			}
			elseif (isset($_GET['kw_ad']) && $_GET['kw_ad']) {
				$link_params .= '?kw_ad=' . $_GET['kw_ad'];
			}
			elseif (isset($_GET['call_ad']) && $_GET['call_ad']) {
				$link_params .= '?call_ad=' . $_GET['call_ad'];
			}

			if (isset($_GET['kw_ad']) && $_GET['kw_ad']) {
				$s_query = str_replace('%20', ' ', $_GET['kw_ad']);
			}

			if (isset($_GET['call_ad']) && $_GET['call_ad']) {
				$s_num = "(" . substr($_GET['call_ad'], 0, 3) . ") ";
				$s_num .= substr($_GET['call_ad'], 3, 3) . "-" . substr($_GET['call_ad'], 6, 4);

				$s_num_code = substr($_GET['call_ad'], 0, 3) . "-";
				$s_num_code .= substr($_GET['call_ad'], 3, 3) . "-" . substr($_GET['call_ad'], 6, 4);
			}
			else {
				$s_num = '(786) 661-1500';
				$s_num_code = '786-661-1500';
			}

			$url_page = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

			if (strpos($url_page, 'state') !== false) {
				$page_class = 'c-state';
			}

		?>

		
	</head>
	<body class="">
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PQPKTN6"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->


	<div class="ep-header-mob-trigger">
			<i></i>
			<i></i>
			<i></i>
		</div>

		<div class="ep-header-mobile">
			<div class="ep-header-mobile-wrap">
				<ul>
					<li><a href="/<?php echo $link_params; ?>">Home</a></li>
					<li class="ep-header-mobile-dropdown">
						<a href="#">Commercial</a>
						<ul>
							<li><a href="/hvac/hvac-installation-and-repair<?php echo $link_params; ?>">Installation & Repair</a></li>
							<li><a href="/hvac/hvac-maintenance<?php echo $link_params; ?>">Maintenance</a></li>
						</ul>
					</li>
					<li class="ep-header-mobile-dropdown">
						<a href="#">HVAC Services</a>
						<ul>
							<li><a href="/hvac/air-cooling<?php echo $link_params; ?>">Air Cooling</a></li>
							<li><a href="/hvac/air-quality<?php echo $link_params; ?>">Air Quality</a></li>
							<li><a href="/hvac/control-systems<?php echo $link_params; ?>">Control Systems</a></li>
						</ul>
					</li>
					<li class="ep-header-mobile-dropdown">
						<a href="#">Services</a>
						<ul>
							<li><a href="/waterdamage<?php echo $link_params; ?>">Water Damage</a></li>
							<li><a href="/plumbing<?php echo $link_params; ?>">Plumbing</a></li>
							<li><a href="/hvac<?php echo $link_params; ?>">HVAC</a></li>
							<li><a href="/phonerepair<?php echo $link_params; ?>">Repair Phone</a></li>
						</ul>
					</li>
					<li><a href="/pro<?php echo $link_params; ?>">Pro? Join our network</a></li>
					<li><a href="/screening<?php echo $link_params; ?>">Screening process</a></li>
					<li><a href="/terms-of-use<?php echo $link_params; ?>">Terms of Use</a></li>
					<li><a href="/privacy<?php echo $link_params; ?>">Privacy Policy</a></li>
				</ul>
			</div>
		</div>

		<div class="ep-header-wrapper">
				<div class="ep-header c-content">
					<div class="ep-row">
						<a class="ep-header-logo" href="/<?php echo $link_params; ?>">
							
							<?php if ($lg_f === true) : ?>

								<h4><?php echo $s_query; ?></h4>
								
							<?php else: ?>
								
								<img src="assets/images/logo.png" alt="Logotype" width="200" height="35">

							<?php endif; ?>
						</a>
						<div class="ep-header-topbar">
							<h4 class="ep-main-color">
								AVAILABLE 24/7 <br> CALL US TODAY!
							</h4>
							<a class="ep-header-topbar-num" href="tel:<?php echo $s_num_code; ?>"><?php echo $s_num; ?></a>
							<a href="/pro<?php echo $link_params; ?>" class="ep-button-transparent">Service provider?</a>
						</div>
					</div>
					<div class="ep-row">
						<ul class="ep-header-menu">
							<li><a href="/hvac<?php echo $link_params; ?>">Home</a></li>
							<li class="ep-header-menu-dropdown">
								<a href="#">HVAC Services</a>
								<ul>
									<li><a href="/hvac/air-cooling<?php echo $link_params; ?>">Air Cooling</a></li>
									<li><a href="/hvac/air-quality<?php echo $link_params; ?>">Air Quality</a></li>
									<li><a href="/hvac/control-systems<?php echo $link_params; ?>">Control Systems</a></li>
								</ul>
							</li>
							<li class="ep-header-menu-dropdown">
								<a href="#">Commercial</a>
								<ul>
									<li><a href="/hvac/hvac-installation-and-repair<?php echo $link_params; ?>">Installation & Repair</a></li>
									<li><a href="/hvac/hvac-maintenance<?php echo $link_params; ?>">Maintenance</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>