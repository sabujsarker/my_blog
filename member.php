<?php 

get_header(  );
/*
* Template Name: member  
*/
while (have_posts()) {
	the_post();
echo do_shortcode(  '[ultimatemember form_id="76"]');
}


 ?>