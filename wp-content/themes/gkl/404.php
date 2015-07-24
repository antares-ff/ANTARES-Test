<?php the_post(); ?>
<?php get_header(); ?>

<div class="group buffer">
   
    <section <?php post_class(); ?>>
    	<article>
            <h2>Seite nicht gefunden</h2>

<p>Entschuldigung, leider existiert die Seite, die Sie suchen nicht mehr, oder Sie ist umgezogen.</p>
        </article>
    </section>

	<aside>
	    <?php get_sidebar(); ?>
    </aside>

</div>

<?php get_footer(); ?>