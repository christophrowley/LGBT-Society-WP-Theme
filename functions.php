<?php 
	add_action('get_header', 'remove_admin_login_header');
	function remove_admin_login_header() {
		remove_action('wp_head', '_admin_bar_bump_cb');
	}

	function new_excerpt_more( $more ) {
		return '... <a class="read-more" href="' . get_permalink( get_the_ID() ) . '">' . __( '[&nbsp;continue&nbsp;reading&nbsp;]', 'your-text-domain' ) . '</a>';
	}
	add_filter( 'excerpt_more', 'new_excerpt_more' );
?>