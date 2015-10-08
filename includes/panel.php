<?php
	$jump_prefix = home_url();
	if( is_front_page() ) {
		?>
			<div class="side-pane left">
				<h1><a href="<?php $jump_prefix; ?>">UCLan:LGBT</a></h1>
				<ul>
					<li><a class="jump-link" href="#about">about</a></li>
					<li><a href="<?php echo $jump_prefix . '/support'; ?>">support</a></li>
					<li><a href="<?php echo $jump_prefix . '/blog'; ?>">blog</a></li>
					<li><a class="jump-link" href="#contact">contact</a></li>
				</ul>
				<ul class="social">
					<li><a href="https://www.facebook.com/groups/uclansulgbt/" class="facebook" target="_blank"></a></li>
					<li><a href="https://twitter.com/uclanlgbt" target="_blank" class="twitter"></a></li>
				</ul>
			</div>

			<div class="side-pane right"> 
				<h1>Support the society</h1>
				<ul>
					<li><a class="merch" href="http://www.redbubble.com/people/christophrowley/works/12401351-pastel-lgbt-diamond" target="_blank"></a></li>
					<li><a class="membership" href="http://www.uclansu.co.uk/groups/lgbt--6" target="_blank"></a></li>
				</ul>	
			</div>
		<?php 
	} else {
		$jump_prefix = home_url();
		?>
			<div class="side-pane left">
				<h1><a href="<?php $jump_prefix; ?>">UCLan:LGBT</a></h1>
				<ul>
					<li><a href="<?php echo $jump_prefix . '/#about'; ?>">about</a></li>
					<li><a href="<?php echo $jump_prefix . '/support'; ?>">support</a></li>
					<li><a href="<?php echo $jump_prefix . '/blog'; ?>">blog</a></li>
					<li><a href="<?php echo $jump_prefix . '/#contact'; ?>">contact</a></li>
				</ul>
				<ul class="social">
					<li><a href="https://www.facebook.com/groups/uclansulgbt/" class="facebook" target="_blank"></a></li>
					<li><a href="https://twitter.com/uclanlgbt" target="_blank" class="twitter"></a></li>
				</ul>
			</div>

			<div class="side-pane right"> 
				<h1>Support the society</h1>
				<ul>
					<li><a class="merch" href="http://www.redbubble.com/people/christophrowley/works/12401351-pastel-lgbt-diamond" target="_blank"></a></li>
					<li><a class="membership" href="http://www.uclansu.co.uk/groups/lgbt--6" target="_blank"></a></li>
				</ul>	
			</div>
		<?php 
	}
?>