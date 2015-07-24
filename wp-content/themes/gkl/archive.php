<?php get_header(); ?>

<div class="group buffer">
   
    <section>
    	<article>
            
        <h2>Aktuelles</h2>
        
        		<?php if (have_posts()) : ?>
					<?php query_posts('posts_per_page=5'); ?>
		<?php while (have_posts()) : the_post(); ?>
			<div <?php post_class() ?>>
				<p class="datum"><?php the_time('j. F Y') ?></p>
                <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

				<div class="entry">
					<?php the_content() ?>
				</div><!-- end entry -->
				</div><!-- end post -->

		<?php endwhile; ?>

		<div class="navigationBottom">
			<div class="alignleft"><?php next_posts_link('&laquo; Ältere Einträge') ?></div>
			<div class="alignright"><?php previous_posts_link('Neuere Einträge &raquo;') ?></div>
		</div><!-- end navigation -->

	<?php else :		
			echo("<h2 class='center'>Keine Beiträge gefunden.</h2>");
	endif; ?>
        </article>
    </section>

	<aside>
	    <?php get_sidebar(); ?>
    </aside>

</div>

<?php get_footer(); ?>