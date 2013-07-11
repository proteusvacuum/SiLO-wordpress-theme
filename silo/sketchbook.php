<!-- Display sketchbook entries differently -->

<div class="sketchbook-info group">	 
	<div class="article-info group">
		<div class="article-date"><?php echo get_the_date(); ?></div>
		<div class="article-title"><?php the_title(); ?></div>
		<div class="subhead"><?php the_excerpt(); ?></div>
		<div class="article-byline"><?php the_author_posts_link(); ?></div>					
		<!-- <div class="image-credit"><a href="#">Platon</a></div> -->
		<!-- <img src="images/sushicat.jpg"> -->
	</div>
</div>

<div class="sketchbook-image">
	<img src="<?php echo $image[0]; ?>"><!-- Display the featured image below the credits -->
</div>