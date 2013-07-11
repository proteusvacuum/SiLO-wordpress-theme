<!-- 		<div id="footer">
			&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?>
		</div> -->

	</div>

	<?php wp_footer(); ?>
	<?php if (!is_home()): ?>
	<footer>
		 <div id="footer-logo" class="footer-section">
		 	<a href="<?php echo home_url(); ?>"><img src="/wp-content/images/logo.png" width ="100px"></a>
		 		<p id="copyright">&copy; SiLO Magazine <?php echo date('Y'); ?></p>
		 </div>		 
		 <div id="footer-categories" class="footer-section">
		 	<div class="footer-section-title">
		 		<h2>Read More</h2>
		 	</div>
		 		<?php wp_nav_menu(array('menu'=> 'homepage menu'));?>
		 </div>
		 <div id="footer-who-we-are" class="footer-section">
		 	<div class="footer-section-title">
		 		<h2>Who We Are</h2>
		 	</div>
			<ul>            	
            	<?php wp_list_pages('title_li='); ?>            
            	<li>&nbsp</li>
      		  </ul>
		 	<!-- <p id="footer-who-text">
		 		SiLO is a Montreal-based collective of writers, photographers, designers, and illustrators. This website and these people came together out of a common appreciation for the numerous oddities of Montreal — in particular the massive concrete structure sitting on the St. Laurence river known as Silo no. 5.
		 	</p> -->


		 </div>
		 <div id="footer-contact" class="footer-section">
		 	<div class="footer-section-title">
		 		<h2>Contact Us</h2>
		 	</div>
		 	<ul>
		 		<li><a href="https://www.facebook.com/pages/Silo-Montreal/229165940561583">Facebook</a></li>
		 		<li><a href="https://twitter.com/SILOMontreal">Twitter</a></li>
		 		<li><a href="mailto:editors@silomagazine.com">Email</a></li>
		 	</ul>
		 </div>
	</footer>
	<?php endif ?>
	
	<!-- Don't forget analytics -->
	
</body>

</html>
