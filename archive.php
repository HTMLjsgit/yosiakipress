<?php get_header(); ?>
<div class="postAllAndFooterBox">
	<main>
		<h1 class="categoryText">
			<?php wp_get_archives(); ?>
		</h1>
		<div class="postAllBox">
			
			<?php if(have_posts()): while(have_posts()): the_post(); ?>

				<a href="<?php the_permalink(); ?>">
					<div class="postBox">
						<!-- もし投稿があったら、投稿をwhile文にして表示 -->
						<?php if (has_post_thumbnail()) : ?>
							<!-- もしサムネイル画像があったら -->
							<div class="thumbnailBox">
								<?php the_post_thumbnail('thumbnail'); ?>
							</div>
						<?php else: ?>
							<img src="<?php bloginfo('template_directory')?>/cssandjs/no.png" class="noimage">
						<?php endif; ?>
						<h2><?php the_short_title(15); ?></h2>
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
<style>
	.rightMenu{
		margin-top: 10em;
	}
</style>

<?php get_footer(); ?>
