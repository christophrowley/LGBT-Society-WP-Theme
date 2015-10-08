<?php 
/* 
 * Designed and built by Chris Rowley
 * Template Name: Single 
 */ 
?>

<?php
	$post_id = get_the_ID();
	$post = get_post( $post_id );
	$slug = $post->post_name;
	$this_url = get_bloginfo("url").'/'.$slug;
	the_post();
?>

<?php include 'header.php'; ?>

	<div class="blog top banner">
		<h1><a href="<?php echo home_url(); ?>/blog">Blog</a><span> // Post</span></h1>
	</div>

	<section id="blog">
			<div class="post-container">
				<article>
					<h1><?php echo $post->post_title; ?></h1>
						<h2 class="small-caps-heading"><?php echo the_date( "d F Y" ) . ' // ' . get_the_author(); ?></h2>
					<p><?php echo $post->post_content; ?></p>
					<div class="post-tags">
						<div class="tag-icon"></div>
						<?php 
							$tags = get_the_tags(); 
							if ( $tags ) {
								foreach( $tags as $tag ) {
									echo '<a href="' . get_tag_link( $tag->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $tag->name ) . '" ' . '>' . $tag->name . '</a>';
								}
							}
						?>
					</div>
					<div class="share-links">
						<div class="share-icon"></div>
						<a class="facebook" href="http://www.facebook.com/share.php?u=<?php echo get_permalink(); ?>&title=<?php echo $post->post_title; ?>" target="blank"></a><!--
						--><a class="twitter" href="http://twitter.com/intent/tweet?status=<?php echo $post->post_title; ?>+<?php echo get_permalink(); ?>" target="_blank"></a>
					</div>
				</article>
			</div>
	</section>

	<!-- <div class="blog bottom banner"></div> -->

<?php include 'footer.php'; ?>