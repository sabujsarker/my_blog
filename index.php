<?php get_header( ); 
if (have_posts()) {

	include_once 'common.php';
	}
else{
	?>
	<h1>No post</h1>
	<?php
}
 ?>
<?php get_footer(  ); ?> 