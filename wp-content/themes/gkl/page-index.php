<?php
/*
Template Name: Startseite
*/
?>
<?php the_post(); ?>
<?php get_header(); ?>

<div class="group buffer topGroup">
        <div id="sliderCont">
        
        <div class="slider">
        	<?php echo do_shortcode( '[responsive_slider]' ); ?>
        </div>
        </div>
        
        <div class="aktuelles gruen">
        	<h3>Aktuelles</h3>
            
            <?php
	$args = array( 'numberposts' => '3' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
		echo '<p class="datum"><em>'.date( 'd.m.Y', strtotime( $recent['post_date'] ) ).'</em></p>
		<p class="title"><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </p> ';
	}
?>
            <p class="weiterlesen"><a href="/themen/aktuelles">» alle aktuellen Beiträge</a></p>
            <div id="schmetterling">&nbsp;</div>
        </div>
    </div>
    
    <div class="group buffer">
	 <div class="twoCol teaser">
    <?php
	// Die vier Startseitenteaser aufrufen
	$args = array(
	  'post_type'   => 'startseitenteaser',
	  'posts_per_page' => 4, 
	  'tax_query' => array(
			array(
				'taxonomy' => 'platzierung',
				'field' => 'slug',
				'terms' => 'klein'
			)
		)
	);
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'gkl_startseitenTeaser' );
	$url = $thumb['0']; ?>
            <div class="one" style="background-image: url(<?php echo $url ?>);">
			<a href="<?php echo get_post_meta($post->ID, 'Zielseite', true); ?>"><div class="teaserTitle mouseOver">
					<h3><?php the_title() ?></h3>
                    
					<?php the_content() ?>
			   </div></a>
	  		</div>
	 <?php
	endwhile;
	?>
        </div>
        
        	<?php
	// Die vier Startseitenteaser aufrufen
	$args = array(
	  'post_type'   => 'startseitenteaser',
	  'posts_per_page' => 1, 
	  'tax_query' => array(
			array(
				'taxonomy' => 'platzierung',
				'field' => 'slug',
				'terms' => 'zweizeilig'
			)
		)
	);
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post(); ?>
    		<?php $thePostID = get_the_title(); ?>
            <div class="oneCol">
            <div class="two gruen zweizeilig">
            <a href="<?php echo get_post_meta($post->ID, 'Zielseite', true); ?>">
			<div class="teaserTitle">
					<h3><?php the_title() ?></h3>
	  	    </div>
			<?php the_content() ?>
  
            </a>
	  		</div>
           </div>
	 <?php
	endwhile;
	?>
        
        <!--
        <div class="oneCol">
            <div class="two gruen">
                <a href="#">
                    <div class="teaserTitle">
	                    <h3>SWKcard</h3>
                    </div>
                    <p>Mit der SWKcard lorem ipsum dolor sifficatur aut ipienim esusandipsum, adignitiunto picias aut reperunt</p>
                    <img src="<?php bloginfo('template_directory'); ?>/img/abbildung_swkcard.png">
                </a>
            </div>
        </div> -->
    </div>
    
    <div class="group">
    	<div class="twoCol one partner">
	        <div class="teaserTitle">
				<h3>Unterstützer und Partner</h3>
            </div>
            <div class="center">
                <a href="http://www.swk-kl.de/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/logo_swk.png"></a>
                <a href="https://www.aktion-mensch.de/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/logo_aktion-mensch.png"></a>
                <a href="http://www.lebenshilfe-kl.de/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/logo_lebenshilfe-westpfalz.png"></a>
                <a href="http://www.das-brauhaus-kl.de" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/logo_das-brauhaus-an-der-gartenschau.png"></a>
            </div>
        </div>
        <div class="oneCol one oeffnungszeiten">
	        <div class="teaserTitle">
				<h3>Öffnungszeiten</h3>
            </div>
            <p class="tag">Montag bis Sonntag</p>
            <p class="uhrzeit">9 bis 19 Uhr</p>
        </div>
    </div>
            

<?php get_footer(); ?>