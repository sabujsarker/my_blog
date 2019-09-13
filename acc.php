<?php 

get_header(  );
/*
* Template Name: account  
*/
while (have_posts()) {
	the_post();
echo do_shortcode(  '[ultimatemember_account]');
}


 ?>