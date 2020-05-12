<?php
	add_theme_support('post-thumbnails');
	add_filter('preprocess_comment', 'my_comment_tag_disable');
	remove_filter('comment_text', 'make_clickable', 9);

	function the_short_title($length = 10){
		$ret = get_the_title();
		if(mb_strlen($ret) > $length) {
			$ret = mb_substr($ret, 0, $length) . '...';
		}

		echo esc_html($ret);
	}
	function my_excerpt_length($length){
		return 10;
	}
	add_filter('excerpt_length', 'my_excerpt_length');
	function my_excerpt_more($more){
		return '...';
	}
	add_filter('excerpt_more', 'my_excerpt_more');
	add_theme_support('menus');

	register_sidebar(
		array(
			'id' => 'sidebar-1',
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		)
	);
?>