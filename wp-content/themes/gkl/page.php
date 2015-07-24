<?php the_post(); ?>
<?php get_header(); ?>

<div class="group buffer">
   
    <section <?php post_class(); ?>>
    	<article>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </article>
    </section>

	<aside>
	    <?php get_sidebar(); ?>
    </aside>

</div>

<?php get_footer(); ?>