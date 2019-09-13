<?php get_header(  ); ?>


<?php 
if (have_posts()) {
	?>
	<h2>Category Name : <?php the_category(array('category_name')); ?></h2>
	
	<?php
	include_once 'common.php';
}
 ?>

<?php get_footer(  ); ?>