<div id="comments" class="comments">
	<?php $args = array(
		'title_reply' => 'コメントする',
		'comment_notes_before' => '<p>コメント記入欄の上に表示するメッセージ</p>',
		'comment_notes_after' => '<p>コメント記入欄の下に表示するメッセージ</p>',
		'label_submit' => '送信'
	);
	comment_form($args);
	?>

</div>

	<?php if(have_comments()): ?>
		<h3>コメント</h3>
		<ol class="comments-list">
			<?php wp_list_comments(array(
				'avatar_size=30 ',
				'type' => 'comment')); ?>
		</ol>
	<?php endif; ?>