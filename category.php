<?php
	$arg = array(
		'posts_per_page' => 4,
		'orderby' => 'date',
		'order' => 'DESC',
		'category_name' => 'wp-customize'
	);
	$posts = get_posts($arg);
	if($posts): ?>
		<ul>
			<?php
			foreach($posts as $post) 
				setup_postdata($post); ?>
			<li><?php the_time('Y.m.d'); ?><?php the_title(); ?></li>
		<?php endforeach; ?>
	</ul>
	<?php
endif;
wp_reset_postdata(); ?>
?>