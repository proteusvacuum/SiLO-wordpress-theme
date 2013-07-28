<?php get_header(); ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="articlenav">
			<ul>
				<li>
					<img src="/wp-content/images/logo.png">
					<ul>
						<li id="go-home"><a href="<?php echo home_url(); ?>">Home</a></li>
						<li><div id="also-this" class="line"><span>Also in this issue</span></div></li>
						<li><div id="date" class="line"><span> <?php the_date() ?></span></div></li>
						<?php $articleDate = get_the_date();
							$query = new WP_Query( 'year=' . get_the_date('Y') . '&monthnum=' . get_the_date('m') . '&day=' . get_the_date('j') );?>
							<?php if ( $query->have_posts() ) :?>
								<?php while ( $query->have_posts() ) :?>
									<?php $query->the_post();?>									
									<li><a href="<?php the_permalink() ?>"><?php the_title()?></a></li>
								<?php endwhile ?>
							 <?php endif ?>							
							<?php wp_reset_postdata();?>						
						<li id="bottom"></li>
						<li class="social-media">
							<div class="fb-like" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false" data-font="tahoma"></div>  &nbsp
							<a href="https://twitter.com/share" class="twitter-share-button" data-via="SiLOMontreal">Tweet</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>							
						</li>
						<li class = "social-media">							
								
						</li>							
					</ul>
				</li>
			</ul>
		</div>

		

			<?php if (has_post_thumbnail( $post->ID ) ): ?>
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); ?>

<?php if (in_category('sketchbook')): include 'sketchbook.php'; else: ?>  <!-- If this is a sketchbook entry, display the featured image differently -->

				<div class="featured-image group" style="background-image: url('<?php echo $image[0]; ?>')">
					<!-- <img src="<?php echo $image[0]; ?>"> -->
					
						<div class="article-info group">
							<div class="article-info-wrapper">
							<div class="article-date"><?php echo get_the_date(); ?></div>
							<div class="article-title"><?php the_title(); ?></div>
							<div class="subhead"><?php the_excerpt(); ?></div>
							<div class="article-byline"><?php the_author_posts_link(); ?></div>					
							<!-- <div class="image-credit"><a href="#">Platon</a></div> -->
							<!-- <img src="images/sushicat.jpg"> -->
						</div>
					</div>
				</div>
<?php endif; ?><!-- End if-sketchbook -->				
					<?php if ( thisismyurl_has_custom_media_field( get_post_thumbnail_id( $post->ID ), 'image_credit') ) {

    					$image_credit = thisismyurl_get_custom_media_field( get_post_thumbnail_id( $post->ID ), 'image_credit' );
    					$credit_url = thisismyurl_get_custom_media_field( get_post_thumbnail_id( $post->ID ), 'credit_url' );
    					$image_type = thisismyurl_get_custom_media_field( get_post_thumbnail_id( $post->ID ), 'image_type' );
					    if ( empty( $image_credit ) )
					        $image_credit = '';
					    if ( empty ($credit_url))
					    	$credit_url='';
						if (empty ($image_type))
					    	$image_type='Photo';

					    if ( !empty( $credit_url ) )
					        $credit_text = '<a href="' . $credit_url . '" title="' . $image_credit . '">' . $image_credit . '</a>';
					    else
					        $credit_text = $image_credit;

					    $credit_text = $image_type . ' by ' . $credit_text;

					    /*$credit_text = '<div class="featured-image-credit">' . $credit_text; . '</div>';*/
					    $credit_text =  '<div class="featured-image-credit">' . $credit_text . '</div>';

					    echo $credit_text;
					}?>
				
					<?php endif; ?>	<!-- End media credit -->
				

	<div class="article-text group">
		<?php the_content(); ?>
	
	<?php endwhile; endif; ?>
	
<?php /*<?php get_sidebar(); ?>*/?>

<?php get_footer(); ?>