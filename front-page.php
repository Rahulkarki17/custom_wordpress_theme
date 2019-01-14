<?php

get_header(); ?>
	
	<!-- site-content -->
	<div class="site-content clearfix">

       
		

			<?php if (have_posts()) :
				while (have_posts()) : the_post();

				the_content();

				endwhile;

				else :
					echo '<p>No content found</p>';

                endif; ?>
                
                <!-- home-columns -->
                <div class="home-columns clearfix">

                    <!-- one-half -->
                    <div class="one-half">

                    <?php // welcome posts loop begins here
                        $welcomePosts = new WP_Query('cat=25&posts_per_page=2');
                        
                        if ($welcomePosts->have_posts()) :

                            while ($welcomePosts->have_posts()) : 
                    $welcomePosts->the_post(); ?>
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                                <?php the_excerpt(); ?>
                            <?php endwhile;

                            else :
                                // fallback no content message here
                            endif;
                            wp_reset_postdata(); ?>

                    </div><!-- /one-half -->

                    <!-- one-half -->
                    <div class="one-half last">

                    <?php // opinion posts loop begins here
                    $opinionPosts = new WP_Query('cat=24&posts_per_page=2');
                
                    if ($opinionPosts->have_posts()) :

                    while ($opinionPosts->have_posts()) : 
                        $opinionPosts->the_post(); ?>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<?php the_excerpt(); ?>
                    <?php endwhile;

                    else :
                        // fallback no content message here
                    endif;
                    wp_reset_postdata(); ?>

                    </div><!-- /one-half -->

                </div><!-- /home-columns -->
    

       
		
	</div><!-- /site-content -->
	
	<?php get_footer();

?>