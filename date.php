<?php get_header(  ); 
if (have_posts()) {
	?>
	<h2>Post Date : <?php echo get_the_date( ); ?></h2>
	<?php
	include_once 'common.php';
	}
else{
	?>
	<h1>No post</h1>
	<?php
}
 ?>
<?php get_footer(  ); ?>