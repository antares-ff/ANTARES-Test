<?php the_post(); ?>
<?php get_header(); ?>

<div class="group buffer">
   
    <section <?php post_class(); ?>>
    	<article>
			<p class="datum"><?php the_time('j. F Y') ?></p>
            <h2><?php the_title(); ?></h2>
            
            <?php if ( has_post_thumbnail() ) { 
                    the_post_thumbnail( 'kickstartImageSize' ); 
            } ?>
        
            <?php the_content(); ?>
        </article>
    </section>

	<aside>
	    <?php get_sidebar(); ?>
    </aside>

</div>

<?php get_footer(); ?>