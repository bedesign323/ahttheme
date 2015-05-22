<div id="splash">
<div id="header">
	<div class="social-icons">
		<a href="http://twitter.com/" target="_blank" class="icon-twitter"></a>
		<a href="http://facebook.com/" target="_blank" class="icon-facebook"></a>
		<a href="http://instagram.com/" target="_blank" class="icon-instagram"></a>
		<a href="http://pinterest.com/" target="_blank" class="icon-pinterest"></a>
	</div>
</div>

<div id="mag" class="bg-holder">
	<div class="inner">
		<?php 
			$block = module_invoke('views', 'block_view', 'projects-block_3');
		   print render($block['content']);
		?>
	</div>
</div>

<div id="creative" class="bg-holder">
	<div class="inner">
		
		<?php 
			$block = module_invoke('views', 'block_view', 'projects-block_2');
		   print render($block['content']);
		?>
	</div>
</div>



<div id="workshop" class="bg-holder">
	<div class="inner">
		
	</div>
</div>

<div id="skyline"><img src="<?php echo drupal_get_path('theme', 'base'); ?>/images/skyline-white.svg" alt="" /></div>
<div id="main">
	<div class="inner">
		<h1>Aim High</h1>
		<div class="divider">{</div>
		<ul>
			<li><a href="/creative" class="creative">The <span>Agency</span></a></li>
			<li><a href="/recent" class="mag">The <span>Magazine</span></a></li>
			<li><a href="/recent" class="workshop">The <span>Workshop</span></a></li>
		</ul>
	</div>
</div>

<div id="footer">
	<div class="copy">&copy; <?php echo date('Y'); ?> Aim High. Don't steal. It's not nice.</div>
</div>
</div>