<div id="wrap">

	

	<div id="extras-wrapper">
	<div id="extras">
		<h2 class="title">The Extras</h2>
			<div id="main-nav">
				<div class="inner-nav">
				<?php echo render($page['nav_main']); ?>
				</div>
			</div>
		<div class="inner">
			
			<?php echo render($page['sidebar_first']); ?>
			<div class="plane"><img src="/sites/all/themes/base/images/AH-plane-wt.png" alt="Aim High plane" nopin="nopin"></div>

		</div>
	</div>
	</div>
	
	<div id="logo"><a href="/"></a></div>
	
	<div id="main">
		<div id="side-control"><div class="icon-menu"></div></div>
		<div id="main-overlay"></div>
		<div class="inner">
			
			
			<?php if ($messages): ?>
	        <div class="messages-holder">
	          <?php echo render($messages); ?>
	        </div>
	      <?php endif; ?>

			<?php if(isset($title)): ?>
				<h1 class="page-title"><?php print $title; ?></h1>
			<?php endif; ?>
			
	      <?php if ($tabs): ?>
	        <div class="tabs">
	          <?php echo render($tabs); ?>
	        </div>
	      <?php endif; ?>

	      <div id="content">
				<?php echo render($page['content']); ?>
			</div>
		</div>
	</div>

	<div id="footer" class="bg-light">
		<div class="skyline"><img src="/sites/all/themes/base/images/AH-logo-footer.svg" alt=""></div>
		<div class="inner">
			
			<div id="footer-left">
				<h2>Why we exist...</h2>
				<a href="/about"><img src="/sites/all/themes/base/images/AH-about-2.jpg" alt="Aim High about image"></a>
				<p>When you Aim High you aim for a target that is above you. Being able to hit the target takes a combination of talent, skill, and dedication. Through photography, literature, music, lifestyle, and design we intend to hold the target up in order to inspire people to AIM HIGH. </p>

				<h2>Wanna see what it looks like when two creatives decide to give back?</h2>
				<a href="http://freshcharities.com" target="_blank"><img src="/sites/all/themes/base/images/FC-logo.jpg" alt=""></a>
			</div>
			
			<div id="footer-right">
				<h2>Get Social...</h2>
				<div class="social-icons">
					<a href="http://www.facebook.com/aimhighforlife" class="icon-facebook" target="_blank"></a>
				  	<a href="http://twitter.com/aimhighforlife" class="icon-twitter" target="_blank"></a>
				  	<a href="http://instagram.com/aimhighforlife" class="icon-instagram" target="_blank"></a>
				  	<a href="http://pinterest.com/aimhighforlife" class="icon-pinterest" target="_blank"></a>
					<a href="http://aimhighforlife.com/rss.xml" class="icon-rss" target="_blank"></a>
				</div>

				<h2>Those other links...</h2>
				<ul>
					<li><a href="mailto:info@aimhighforlife.com">Contact</a></li>
					<li><a href="mailto:submissiona@aimhighforlife.com">Submissions</a></li>
					<li><a href="mailto:info@aimhighforlife.com">Hire Us</a></li>
					<li><a href="mailto:advertise@aimhighforlife.com">Advertise</a></li>
					<li><a href="/terms-service">Terms of Service</a></li>
					<li><a href="/robots">Just for Robots</a></li>
				</ul>
				

			</div>

			<div class="copy">&copy; <?php echo date('Y'); ?> Aim High. Don't steal. It's not nice.</div>
		</div>
	</div>
</div>






