<?php get_header(); ?>

	<div id="banner" class="group">
				<a href="<?php echo home_url(); ?>"><img src="/wp-content/images/homeheader.jpg"></a>
	</div>
		<div id="inner-page-wrap" class="group">

			<div id ="page-content">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<ul>
				<?php wp_list_authors('show_fullname=0&optioncount=0&orderby=name&order=ASC'); ?>
			</ul>
			</div>
			<?php endwhile; endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

<!-- <?php get_footer(); ?> -->
</div><!--END inner-page-wrap-->
