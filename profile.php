<?php 

get_header(  );
/*
* Template Name: profile  
*/
while (have_posts()) {
	the_post();
echo do_shortcode(  '[ultimatemember form_id="75"]');
}


 ?>