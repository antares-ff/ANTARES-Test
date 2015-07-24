<?php
/*
Template Name: Archives
*/
get_header(); ?>

<div class="group buffer">
    <section>
    	<article>
        <h2>
        <?php if ( is_category('Aktuelles') ) { 
			single_cat_title();
		} else {
		echo '<a href="/themen/aktuelles">Aktuelles</a> > ';
		single_cat_title();
		}
		?>
        </h2>
        
        		<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?>>
				<p class="datum"><?php the_time('j. F Y') ?></p>
				<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

				<div class="entry">
					<?php the_content('<p class="weiterlesen">&raquo; weiterlesen</p>') ?>
				</div><!-- end entry -->

		<?php edit_post_link(' &raquo; Artikel bearbeiten', '<p>', '</p>'); ?>
           <hr />

			</div><!-- end post -->

		<?php endwhile; ?>

		<div class="navigationBottom">
        <?php get_next_posts_link(); ?>
        <?php get_previous_posts_link(); ?>
		</div><!-- end navigation -->
		
		<!-- This clears all floats -->
		<div class="clear">&nbsp;</div>

	<?php else :

		if ( is_category() ) { // If this is a category archive
			printf("<h2 class='center'>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2 class='center'>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
		} else {
			echo("<h2 class='center'>No posts found.</h2>");
		}
		get_search_form();

	endif; ?>
        </article>
    </section>

	<aside>
	    <?php get_sidebar(); ?>
    </aside>

</div>

<?php get_footer(); ?>