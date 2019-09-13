<?php include_once 'header.php'; ?>

<?php 

if (have_posts()) {
	?>
	<h2>Tag Name :<?php single_tag_title( ); ?></h2>
	
	<?php
	include_once 'common.php';
}
 ?>

<?php get_footer(  ); ?>