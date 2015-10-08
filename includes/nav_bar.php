<?php
	$jump_prefix = home_url( '/' );
	if( is_front_page() ) {
		?>
			<nav>
				<div class="upper"></div>
				<div class="lower">
					<div class="inner">
						<a id="left-panel-activate" href="#panel-open-left"></a>
						<div class="logo-container">
							<a id="logo" href="<?php echo $jump_prefix; ?>"></a>
							<h1 id="logo-text" href=""><a href="<?php echo $jump_prefix; ?>">UCLan:LGBT</a></h1>
						</div>
						<a id="right-panel-activate" href="#panel-open-right"></a>	
						<div id="nav-links">
							<a class="jump-link" href="#about">about</a>
							<a href="<?php echo $jump_prefix . 'support'; ?>">support</a>
							<a href="<?php echo $jump_prefix . 'blog' ; ?>">blog</a>
							<a class="jump-link" href="#contact">contact</a>
						</div>
					</div>			
				</div>
			</nav>
		<?php 
	} else {
		?>
			<nav>
				<div class="upper"></div>
				<div class="lower">
					<div class="inner">
						<a id="left-panel-activate" href="#panel-open-left"></a>
						<div class="logo-container">
							<a id="logo" href="<?php echo $jump_prefix; ?>"></a>
							<h1 id="logo-text" href=""><a href="<?php echo $jump_prefix; ?>">UCLan:LGBT</a></h1>
						</div>
						<a id="right-panel-activate" href="#panel-open-right"></a>	
						<div id="nav-links">
							<a href="<?php echo $jump_prefix . '#about' ; ?>">about</a>
							<a href="<?php echo $jump_prefix . 'support'; ?>">support</a>
							<a href="<?php echo $jump_prefix . 'blog'; ?>">blog</a>
							<a href="<?php echo $jump_prefix . '#contact'; ?>">contact</a>
						</div>
					</div>			
				</div>
			</nav>
		<?php 
	}
?>