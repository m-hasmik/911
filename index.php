<?php 

// ob_start();
include("header.php");
// $buffer=ob_get_contents();
// ob_end_clean();

// $buffer=str_replace("%STATE%","",$buffer);
// echo $buffer;

?>

<div id="wrapper">

	<div class="intro-page content">
		<div class="intro-page-main row">

			<!-- <a class="google-review" href="tel:<?php echo $s_num_code; ?>">
				<img srcset="assets/images/google-review-mob.png 991w,
				assets/images/google-review.png, 992w" 
				sizes="(max-width: 991px) 991px,
				992px"
				class="c-popup-trigger" src="assets/images/google-review.png" alt="Google review" width="150" height="86">
			</a> -->

			<?php if (isset($s_query)) : ?>

				<h1 id="s_query"><?php echo $s_query; ?></h1>

			<?php endif; ?>

			<h1 id="main-header">24/7 Services</h1>
			<a class="btn ep-call-button" id="main-call-hvac" href="tel:<?php echo $s_num_code; ?>">314-259-1100</a>
			<div class="active phone-button-wrapper">
				<div class="phone-button" id="popup-open"></div>
				<div class="phone-button-info">
					<span class="phone-button-info-close"></span>
					<p id="popup-open"><b>Request a FREE Estimate!</b> <br> <span>We'll call you back in 25 seconds!</span></p>
				</div>
			</div>

		</div>
		<div class="intro-page-info row">
			<div class="intro-page content">
				<h1>314-259-1100</h1>
				<h2>10% Off On All Locksmith Services</h2>
			</div>
		</div>
		<div>
		<h1>About Us</h1>
		<div class="intro-page-info">
			<div class="col">
			<img src="//img1.wsimg.com/isteam/stock/18348a6187bd1c79842d3c29be028bb7a8ef564cf64c53fa0875ae61015848a9/:/rs=w:223,h:223,cg:true,m/cr=w:223,h:223" data-aid="ABOUT_IMAGE_RENDERED0" style="width:223px;height:223px;border-radius:50%; padding-bottom:20px;" alt="image-placeholder" class="x-el x-el-img x-ntrl-alt x-img x-b-rad-circle x-d-inline x-w-auto x-w-100m x-m-t-0-bpxs x-m-r-0-bpxs x-m-b-0-bpxs x-m-l-0-bpxs x-h-auto x-f-pri-fam x-f-sz-md  x-d-aid x-d-page">
				<h4>Residential Locksmith</h4>
				<p>Affordable Locksmith does all residential jobs 24/7 including House Lockout, Lock Change, Re key, Key Extraction and fixing any types of locks.</p>
			</div>
			<div class="col">
			<img src="//img1.wsimg.com/isteam/ip/003f6486-8525-4604-918d-cf9e09c6ea19/auto%20locksmith%20minneapolis%201.jpg/:/rs=w:223,h:223,cg:true,m/cr=w:223,h:223" data-aid="ABOUT_IMAGE_RENDERED1" style="width:223px;height:223px;border-radius:50%; padding-bottom:20px;" alt="image-placeholder" class="x-el x-el-img x-ntrl-alt x-img x-b-rad-circle x-d-inline x-w-auto x-w-100m x-m-t-0-bpxs x-m-r-0-bpxs x-m-b-0-bpxs x-m-l-0-bpxs x-h-auto x-f-pri-fam x-f-sz-md  x-d-aid x-d-page">
				<h4>Auto Locksmith</h4>
				<p>Locked Out, Need a key?  Affordable locksmith is very professional and has fast response with helping customers 24/7  unlocking their vehicles, making car key and programming on the spot or even fixing your ignition. </p>
			</div>
			<div class="col">
			<img src="//img1.wsimg.com/isteam/ip/003f6486-8525-4604-918d-cf9e09c6ea19/98a30f1c-1ebe-419b-9fda-d7369dc24685.jpeg/:/rs=w:223,h:223,cg:true,m/cr=w:223,h:223" data-aid="ABOUT_IMAGE_RENDERED2" style="width:223px;height:223px;border-radius:50%; padding-bottom:20px;" alt="image-placeholder" class="x-el x-el-img x-ntrl-alt x-img x-b-rad-circle x-d-inline x-w-auto x-w-100m x-m-t-0-bpxs x-m-r-0-bpxs x-m-b-0-bpxs x-m-l-0-bpxs x-h-auto x-f-pri-fam x-f-sz-md  x-d-aid x-d-page">
				<h4>Commercial Locksmith</h4>
				<p>Affordable Locksmith is trained to help any businesses with Lockouts, Master Re-key ,Re-key, Change Locks and Fix Locks for any services.  We make sure your business is safe and secure.</p>
			</div>
		</div>
		</div>
	</div>

	<div class="hv-info hv-info-left">
		<div class="row">
			<h1>Price List</h1>
			<h3>Service Call $15 *</h3>
			<h4>*Service Call Is not Include Labor</h4>
		</div>
		<div class="hv-row">
			<div class="hv-col">
				<h1>Lockout Service</h1>
			</div>
			<div class="hv-col">
				
				<h1>
					Start fron $35
				</h1>
			</div>
		</div>
		<div class="hv-row">
			<div class="hv-col">
				<h1>Lock Change</h1>
			</div>
			<div class="hv-col">
				
				<h1>
					Start From $45
				</h1>
			</div>
		</div>
		<div class="hv-row">
			<div class="hv-col">
				<h1>Re-key</h1>
			</div>
			<div class="hv-col">
				
				<h1>
					Start From $19
				</h1>
			</div>
		</div>
		<div class="hv-row">
			<div class="hv-col">
				<h1>Car Key</h1>
			</div>
			<div class="hv-col">
				
				<h1>
					Start From $119
				</h1>
			</div>
		</div>
		<div class="hv-row">
			<div class="hv-col">
				<h1>Fix Ignition</h1>
			</div>
			<div class="hv-col">
				
				<h1>
					Start From $119
				</h1>
			</div>
		</div>
	</div>

	<div class="hv-info hv-info-bg hv-info-bg-home " id = 'keys'>
		<div class="intro-page content">
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" class="x-el x-el-form x-acnt-def x-m-b-0-bpxs x-f-pri-fam x-f-sz-md  "><input type="hidden" name="edit_selector" data-aid="EDIT_PANEL_EDIT_PAYMENT_ICON"><input type="hidden" name="business" value=""><input type="hidden" name="cmd" value="_donations"><input type="hidden" name="item_name" value=""><input type="hidden" name="item_number" value=""><input type="hidden" name="amount" value="0.00" data-aid="PAYMENT_HIDDEN_AMOUNT"><input type="hidden" name="shipping" value="0.00"><input type="hidden" name="currency_code" value="USD" data-aid="PAYMENT_HIDDEN_CURRENCY"><input type="hidden" name="rm" value="0"><input type="hidden" name="return" value="http://affordablelocksmithmsp.com/"><input type="hidden" name="cancel_return" value="http://affordablelocksmithmsp.com/"><input type="hidden" name="cbt" value="Return to Affordable Locksmith MSP"><div data-route="settings/donateButtonLabel" class="x-el x-el-div x-acnt-def x-d-inline-block x-f-pri-fam x-f-sz-md  x-d-route"><button name="submit" data-aid="PAYMENT_PAYPALBUTTON_RENDERED" class="x-el x-el-button x-acnt-def px_-pt-15px px_-pb-15px px_-pl-30px px_-pr-30px px_-border-style-none px_-d-inline-block px_-letter-spacing-1px px_-text-align-center px_-text-decoration-none px_-text-transform-uppercase px_-w-100P px__focus-outline-none _media_min-width__1024pxpx_-w-auto x-c-act-bg x-c-act-bg-hover x-f-alt-fam x-f-sz-sm x-f-wt-bold x-c-act-text  x-d-aid"><img src="https://www.paypalobjects.com/webstatic/icon/pp258.png" style="width:30px;height:auto;margin-right:8px;" alt="image-placeholder" class="x-el x-el-img x-acnt-def x-img x-d-inline x-va-middle x-w-auto x-w-100m x-m-t-0-bpxs x-m-r-0-bpxs x-m-b-0-bpxs x-m-l-0-bpxs x-h-auto x-f-alt-fam x-f-sz-sm  "><span class="x-el x-el-span x-acnt-def x-va-middle x-f-alt-fam x-f-sz-sm  "></span></button></div></form>
				<img data-aid="PAYMENT_CREDIT_CARD_BADGES_RENDERED" src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/cc-badges-ppmcvdam.png" style="width:150px;height:auto;" alt="Pay with PayPal or a debit/credit card" class="x-el x-el-img x-acnt-def x-img x-d-inline x-w-auto x-w-100m x-m-t-0-bpxs x-m-r-0-bpxs x-m-b-0-bpxs x-m-l-0-bpxs x-m-t-xs-bpxs x-h-auto x-f-pri-fam x-f-sz-md  x-d-aid">
			<div class="hv-col">
			</div>
		</div>
	</div>

</div>

<?php include("footer.php"); ?>