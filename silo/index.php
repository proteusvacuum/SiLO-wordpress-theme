<?php get_header(); ?>

<?php function more_posts() {
  global $wp_query;
  return $wp_query->current_post + 1 < $wp_query->post_count;
}?>
<div id="frontpage" class="group">
<div id="banner" class="group">
				<a href="<?php echo home_url(); ?>"><img src="/wp-content/images/homeheader.jpg"></a>
</div>
	<div id="inner-page-wrap" class="group">
		<?php if (have_posts()): 
			$prevDate='';
		?>
		
			<div id ="homepage-content">		
			<?php while (have_posts()) : ?>	
			<?php if ($prevDate==''){the_post();}?>		<!-- First post-->	
			<div class="group issue">							
				<div class="date-line">						
					<span><?php the_date(); ?></span>						
				</div>
				<div class="article-grid group">
					<ul class="group">
						<?php $prevDate=get_the_date();	?>
						<?php while ($prevDate==get_the_date()): ?>								
							<li>
								<div class="front-article-thumb"><a href="<?php the_permalink() ?>"> <?php the_post_thumbnail('thumbnail'); ?> </a></div>
								<div class="front-article-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></div>	
								<div class="front-byline"><?php the_author_posts_link(); ?></div>
								<div class="front-kicker"> <?php the_excerpt(); ?> </div>
							</li>
							<?php $prevDate=get_the_date();	?>
							<?php the_post(); ?>
						<?php endwhile; ?>	
 					</ul>		
				</div>			
				</div>															
		<?php endwhile;?>
		<!-- END have_posts -->
		<?php else: ?>
			Blarg. Nothing found.
		<?php endif; ?>
		<div id="page-navigation"><?php posts_nav_link(); ?>	</div>
		</div><!--END homepage-content-->
<?php get_sidebar(); ?>
<?php get_footer();?>

</div><!--END inner-page-wrap-->
</div>
