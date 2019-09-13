<?php include_once 'header.php'; ?>
<div class="post s_post ">
	<div class="row ">
	<div class="col-md-8">
	<?php
	if (have_posts()) {
			while ( have_posts() ) {
				the_post();
			if (the_post_thumbnail( )==true) {
				?>
				<img src="<?php the_post_thumbnail_url(); ?>">
				<?php
			}
				?>
				<h1><?php the_title(); ?></h1>
				<div class="row single">
				<?php the_category(array('category_name')); ?>
				<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) );?>"><?php the_author( ); ?></a>
				<a href="<?php echo get_day_link(get_the_time('Y'),get_the_time('m'),get_the_time('d')); ?>"><?php echo get_the_date(  ); ?></a>
				</div>
				<?php
				the_content();
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
			}

	}
			?>
		</div>

<?php get_footer(  ); 
?>