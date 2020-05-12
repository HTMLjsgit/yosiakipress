<?php get_header(); ?>
	<div class="newPostBox">
		<h1>最新の記事</h1>
	</div>
	<div class="scrollingBox">
		<div class="container">
			<div class="single-item">
				<?php
					$args = array(
						'posts_per_page' => 5
					);
				?>
				<?php $the_query = new WP_Query($args); ?>
				<?php while($the_query->have_posts() ) : $the_query->the_post(); ?>
					<?php if (has_post_thumbnail()) : ?>
						<a href="<?php the_permalink(); ?>" class="permalinkscroll">
							<div class="scrollingBoxCenter">
								<?php the_post_thumbnail('humbnail'); ?>
								<h2>
									<?php the_short_title(10);  ?>
								</h2>
							</div>
						</a>
					<?php else: ?>
						<a href="<?php the_permalink(); ?>" class="permalinkscroll">
							<div class="scrollingBoxCenter">
								<img src="<?php bloginfo('template_directory')?>/cssandjs/no.png">
								<h2><?php the_short_title(10); ?></h2>
							</div>
						</a>:
					<?php endif; ?>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
	<div class="postAllAndFooterBox">
		<main>
			<div class="postAllBox">
				<?php if(have_posts()): while(have_posts()): the_post(); ?>
					<a href="<?php the_permalink(); ?>">
						<div class="postBox">
							<!-- もし投稿があったら、投稿をwhile文にして表示 -->
							<?php if (has_post_thumbnail()) : ?>

								<!-- もしサムネイル画像があったら -->

								<?php the_post_thumbnail('thumbnail', array('class' => 'noimage')); ?>
							<?php else: ?>
								<img src="<?php bloginfo('template_directory')?>/cssandjs/no.png" class="noimage">
							<?php endif; ?>
							<h2><?php the_short_title(10); ?></h2>
							<p class="excerpt">
								<?php the_excerpt(); ?>
							</p><br>
							<!--  -->
							<!-- <p><?//php the_excerpt(); ?></p> -->
						</div>
					</a>
				<?php endwhile; endif; ?>
			</div>
			<div class="menuNextButton">
				<?php
					the_posts_pagination(array(
						'prev_text' => '&lt;',
						'next_text' => '&gt;',
					) );
				?>
			</div>
		</main>
		<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>

<style>
	.smartNav{
		position: fixed;
		z-index: 5;
		top: 2em;
	}
	#home_label{
		left: 72%;
		top: 47px;
	}
	body{
	}
</style>

<script>
		$(window).scroll(function(){
		if($(this).scrollTop() <= 0){
			$('#home_label').css('top', '47px');
			$('#home_label').css('transition', '0.5s');
		}else if($(this).scrollTop() >= 100 ){
			$('#home_label').css('top', '7em');
		}
	})
</script>