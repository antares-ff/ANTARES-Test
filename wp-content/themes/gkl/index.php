<?php the_post(); ?>
<?php get_header(); ?>

<div class="group buffer">
    <section <?php post_class(); ?>>
    	<article>

<?php if (have_posts()): ?>
	<?php while(have_posts()): the_post(); ?>   
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_content(); ?>
	<?php endwhile; ?>
<?php else : ?>
	<h2>Tut uns sehr leid!</h2>
    <p>Wir konnten nichts passendes für Sie finden.</p>
<?php endif; ?>
        </article>
    </section>

	<aside>
	    <?php get_sidebar(); ?>
    </aside>

</div>

<?php get_footer(); ?>