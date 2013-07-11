<?php get_header(); ?>
<div id="archivepage" id="group">
<div id="banner" class="group">
				<a href="<?php echo home_url(); ?>"><img src="/wp-content/images/homeheader.jpg"></a>
</div>

		<div id="inner-page-wrap" class="group">
			<div id ="category-content">	
			<?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));?>	

		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h2 id="category"><?php single_cat_title(); ?></h2>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2>Archive for <?php the_time('F jS, Y'); ?></h2>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2>Archive for <?php the_time('F, Y'); ?></h2>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2>Archive for <?php the_time('Y'); ?></h2>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2>Articles by <?php echo $curauth->display_name; ?></h2>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2>Blog Archives</h2>
			
			<?php } ?>

					
			<div class="category-grid issue">	
				<ul class="group">
					<?php while (have_posts()) : the_post(); ?>					
					<li class="single-category-entry">						
						<div class="article-thumb group"><a href="<?php the_permalink() ?>"> <?php the_post_thumbnail('thumbnail'); ?> </a></div>
						<div class="category-info group">
							<div class="front-article-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></div>	
							<div class="front-byline"><?php the_author_posts_link(); ?></div>
							<div class="front-date"><?php echo get_the_date(); ?></div>
							<div class="front-kicker"><?php the_excerpt(); ?> </div>
						</div> <!-- END article info -->
					</li>					
					<?php endwhile; ?>	
				</ul>
			
		</div>
	<?php else : ?>
		<h2>Nothing found</h2>
	<?php endif; ?>
	<div id="page-navigation"><?php posts_nav_link(); ?></div>

	</div><!--END homepage-content-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

<!-- <?php get_footer(); ?> -->
</div><!--END inner-page-wrap-->
</div>