
 <?php 

get_header(  );
/*
* Template Name: login  
*/
while (have_posts()) {
	the_post();
echo do_shortcode(  '[ultimatemember form_id="74"]');
}


 ?>