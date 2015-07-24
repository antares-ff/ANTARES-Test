<?php // Monate mit Terminen filtern
 $events = eo_get_events(array(
         'event_start_after'=>'today',
         'showpastevents'=>true,//Will be deprecated, but set it to true to play it safe.
    ));
$current_month = false;

  if($events):
  	echo '<div class="selectMonth">';
  	echo '<h3>Monatsauswahl</h3>';
     foreach ($events as $event):
	 		if ($current_month != eo_get_the_start('y/m', $event->ID,null,$event->occurrence_id) ){
			$current_month = eo_get_the_start('y/m', $event->ID,null,$event->occurrence_id) ;
          //Check if all day, set format accordingly
		  if ($monat == eo_get_the_start('Ym', $event->ID,null,$event->occurrence_id)){ $actMonth = 'actMonth'; } else { $actMonth = ''; };
        $format = ( eo_is_all_day($event->ID) ? get_option('date_format') : get_option('date_format').' '.get_option('time_format') );
          printf(
             '<p class="month '. $actMonth .' %s"><a href="%s"> %s </a></p>',
			 eo_get_the_start('Ym', $event->ID,null,$event->occurrence_id),
			 '/veranstaltungen/on/'.eo_get_the_start('Y/m', $event->ID,null,$event->occurrence_id),
			 eo_get_the_start('F Y', $event->ID,null,$event->occurrence_id)
          );
	};
     endforeach;
	 $current_month = eo_get_the_start('y/m', $event->ID,null,$event->occurrence_id) ;
	 
	  echo '<p class="month"><a href="/veranstaltungen">alle zeigen</a></p>';
       echo'<hr />';
       echo'</div>';
  endif;
  		
 ?>