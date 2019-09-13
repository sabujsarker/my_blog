	<div class="row">
	<div class="col-md-8">
	<div class="post read">
	<?php 
	while (have_posts()) {
		the_post(); ?>
	<?php 
	if (the_post_thumbnail( )==true) {
		?>
		<img src="<?php the_post_thumbnail_url(); ?>">
		<?php
	}
		?>
		
		<h1><?php the_title() ?></h1>
		<div class="single row">
			<?php the_category(array('category_name')); 	?>
			<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
			<a href="<?php echo get_day_link(get_the_time('Y'),get_the_time('m'),get_the_time('d'));?>" ><?php echo get_the_date() ; ?></a>

		</div>
		<?php
		$readmore=__('Read More','my_blog');
		$more = '<p class="link"><a href="'.get_permalink().'">Read More</a></p>';
		
		?>
		<p><?php echo wp_trim_words(get_the_content(),50,' [......]'); ?></p>
		<?php 
		echo $more;
} ?>
</div>
</div>
