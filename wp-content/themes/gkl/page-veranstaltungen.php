<?php
/*
Template Name: Veranstaltungen
*/
?>

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
    
    <?php
    
    global $eo_event_loop,$eo_event_loop_args;

//Date % Time format for events
$date_format = get_option('date_format');
$time_format = get_option('time_format');

//The list ID / classes
$id = ( $eo_event_loop_args['id'] ? 'id="'.$eo_event_loop_args['id'].'"' : '' );
$classes = $eo_event_loop_args['class'];

$current_month = false;

?>

<?php if( $eo_event_loop->have_posts() ): ?>
	<h3>Monatsauswahl</h3>

        <?php while( $eo_event_loop->have_posts() ): $eo_event_loop->the_post(); ?>

            <?php 
            if( $current_month != eo_get_the_start('m') ){

                    //End previous group
                    //Start new group
                    echo '<p class="month"><a href="/veranstaltungen/on/'. eo_get_the_start('Y/m').'">'.eo_get_the_start('F Y').'</a></p>';
            }
            $current_month = eo_get_the_start('m');

            //Generate HTML classes for this event
            $eo_event_classes = eo_get_event_classes(); 

            //For non-all-day events, include time format
            $format = ( eo_is_all_day() ? $date_format : $date_format. '--' .$time_format );
            ?>

        <?php endwhile; ?>

<?php elseif( ! empty($eo_event_loop_args['no_events']) ): ?>

    <ul id="<?php echo esc_attr($id);?>" class="<?php echo esc_attr($classes);?>" > 
        <li class="eo-no-events" > <?php echo $eo_event_loop_args['no_events']; ?> </li>
    </ul>

<?php endif; ?>

    <hr />
	    <?php get_sidebar(); ?>
    </aside>

</div>

<?php get_footer(); ?>