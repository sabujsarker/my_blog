<div class="col-md-4 ">
	<div class="right">
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