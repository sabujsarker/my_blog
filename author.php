<?php include_once 'header.php'; ?>



<?php if (have_posts()): ?>
	<h2>Author Name : <?php the_author( ); ?></h2>
	<?php 
	include_once 'common.php';
	 ?>
	 <div class="col-md-4 ">
	 	<div class="right">
	 	<div class="author">
			<img src="<?php echo esc_url( get_avatar_url( wp_get_current_user() ) );  ?>">
			<h2>Author Name : <?php the_author( ); ?></h2>
			<h3>Author Email : <?php the_author_meta('email'); ?></h3>
			<h3>Number of Post : <?php echo count_user_posts( get_the_author_meta('ID') ); ?></h3>
			<div class="a_posts">
				<h2>Author Posts : </h2>
				<?php
				$author_posts= get_posts( 'author='.get_query_var('author'));
				if($author_posts){
				foreach ($author_posts as $author_post) {
				?>
				<ul>
					<li><span>&#8226</span> <a href="<?php echo get_permalink( ); ?>"><?php echo $author_post->post_title; ?></a></li>
				</ul>
				<?php
				}
				}
				?>
			</div>
		</div>
	<?php ( dynamic_sidebar('category'));
	(dynamic_sidebar( 'tag' )) ;
		?>
		
</div>
</div>
</div>
<div class="page">
		<?php echo paginate_links(array('prev_text'=> __(' Previous'),
										'next_text'=> __('Next'),)); ?>
</div>

</body>
</html>

<?php endif ?>
