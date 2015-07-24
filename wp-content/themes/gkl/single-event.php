<?php
/**
 * The template for displaying a single event
 *
 * Please note that since 1.7, this template is not used by default. You can edit the 'event details'
 * by using the event-meta-event-single.php template.
 *
 * Or you can edit the entire single event template by creating a single-event.php template
 * in your theme. You can use this template as a guide.
 *
 * For a list of available functions (outputting dates, venue details etc) see http://codex.wp-event-organiser.com/
 *
 ***************** NOTICE: *****************
 *  Do not make changes to this file. Any changes made to this file
 * will be overwritten if the plug-in is updated.
 *
 * To overwrite this template with your own, make a copy of it (with the same name)
 * in your theme directory. See http://docs.wp-event-organiser.com/theme-integration for more information
 *
 * WordPress will automatically prioritise the template in your theme directory.
 ***************** NOTICE: *****************
 *
 * @package Event Organiser (plug-in)
 * @since 1.0.0
 */

//Call the template header
get_header(); ?>

<div class="group buffer">
   
    <section <?php post_class(); ?>>

		<?php while ( have_posts() ) : the_post(); ?>
        
        <time itemprop="startDate" datetime="<?php eo_the_start($microformat); ?>">
                        	<span class="monat"><?php eo_the_start(M); ?></span>
                        	<span class="tag"><?php eo_the_start(d); ?></span>
                        	<span class="zeit"><?php eo_the_start(get_option('time_format')); ?></span>
                        </time>

	<h2 class="entry-title"><?php the_title(); ?></h2>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<header class="entry-header">

				<!-- Display event title -->

			</header><!-- .entry-header -->
	
			<div class="entry-content">
            
                        <?php if ( has_post_thumbnail() ) { 
                    the_post_thumbnail( 'gkl_thumbnail' ); 
            } ?>
            
            <!-- The content or the description of the event-->
				<?php the_content(); ?>

				<!-- Get event information, see template: event-meta-event-single.php -->
				<?php eo_get_template_part('event-meta','event-single'); ?>

				
			</div><!-- .entry-content -->


		<?php endwhile; // end of the loop. ?>
        <p><a href="/veranstaltungen/">&laquo; alle Veranstaltungen</a></p>

    </section>

	<aside>
		<?php include "monatswahl.php"; ?>
	    <?php get_sidebar(); ?>
    </aside>

</div>

<?php get_footer(); ?>
