<?php 
/* 
 * Designed and built by Chris Rowley
 * Template Name: Blog
 */ 
?>

<?php 
	$args = array( 
		'post_type' => post,
		'posts_per_page' => 3,
		'paged' => $paged
	);
	$the_query = new $wp_query( $args ); 

	$maxed = 999999999;
	$pagination_links = paginate_links( array (
		'current' => max( 1, get_query_var('paged') ),
		'total' => $the_query->max_num_pages
	) );
?>

<?php include 'header.php'; ?>

<div class="banner blog">
	<h1><a href="<?php echo home_url(); ?>/blog">Blog</a></h1>
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
			<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
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
			<div class="pagination">
				<?php echo $pagination_links; ?>
			</div>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
</section>

<?php include 'footer.php'; ?>