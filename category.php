<?php
	$cat_post = get_posts(array(
		'post_type' => 'post',
		'category' => 1,
		'category' => 'srag',
		'posts_per_page' => 6,
		'orderby' => 'date',
		'order' => 'DESC'
		));
	global $post;
	if($cat_posts): foreach($cat_posts as $post): serup_postdata($post); ?>

		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	<?php endforeach; endif; wp_reset_postdata(); ?>
?>

dwada