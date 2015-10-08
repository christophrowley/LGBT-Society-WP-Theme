<?php 
/* 
 * Designed and built by Chris Rowley
 * Template Name: Tag
 */ 
?>

<?php include 'header.php'; ?>

<div class="banner blog">
	<h1><a href="<?php echo home_url(); ?>/blog">Blog</a><span> // #<?php single_tag_title(); ?></span></h1>
</div>

<section id="blog">
	<div class="grid">
		<div class="cell col-1 span-4">
			<?php get_search_form(); ?>
			<div class="tags">
				<h2 class="small-caps-heading">Search tags:</h2>
				<div class="tag-container">
					<?php 
						$tags = get_tags(); 
						if ( $tags ) {
							foreach( $tags as $tag ) {
								echo '<a href="' . get_tag_link( $tag->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $tag->name ) . '" ' . '>' . $tag->name . '</a>';
							}
						}
					?>
				</div>
			</div>
		</div>
		<div class="cell col-5 span-8">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article>
					<h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					<h2 class="small-caps-heading"><?php echo get_the_date("d F Y"); ?> // <?php echo get_the_author(); ?></h2>
					<?php the_excerpt(); ?>
				</article>
			<?php endwhile; ?>
			<?php else: ?>
				<article>
					<div class="content">
						<p class="no-posts">Sorry, no articles matched</p>
					</div>
				</article>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
</section>

<?php include 'footer.php'; ?>