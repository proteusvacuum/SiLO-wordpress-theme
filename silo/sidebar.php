<aside>
    <nav>
        <ul>
            <li><a href="<?php echo home_url(); ?>"><img src="/wp-content/images/logo.png" width="100px"></a></li>
            <!-- <li><a href="#">Features</a></li>
            <li><a href="#">People</a></li>
            <li><a href="#">Places</a></li>
            <li><a href="#">Sketchbook</a></li>
            <li><a href="#">Food</a></li>
            <li><a href="#">Arts & Culture</a></li>    --> 
            <?php wp_nav_menu(array('menu'=> 'homepage menu'));?>
            <li>&nbsp</li>
        </ul>
        <!-- <div id="current-issue"><a href="#">Current Print Issue</a></div> -->
        <ul>
            <?php wp_list_pages('title_li='); ?>
            <li>&nbsp</li>
        </ul>
        <ul>
            <li><a href="https://www.facebook.com/pages/Silo-Montreal/229165940561583">Facebook</a></li>
            <li><a href="https://twitter.com/SILOMontreal">Twitter</a></li>
            <li><a href="mailto:editors@silomagazine.com">Email</a></li>
        </ul>
    </nav>          
</aside>

	

