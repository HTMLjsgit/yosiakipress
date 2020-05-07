<?php  get_header(); ?>
	<div class="postAllAndFooterBox">
		<main>
			<p class="category"><?php the_category('/') ?></p>
				<div class="singleTimeBox">
					<h1 class="singleTheTitle"><?php echo esc_html(get_the_title()); ?></h1>
					<time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="time">
						<p class="time"><?php echo get_the_date(); ?></p>
					</time>
				</div>

			<div class="postAllBox">
				<?php if(have_posts()): while(have_posts()): the_post(); ?>
						<?php if (has_post_thumbnail()) : ?>
							<div class="imageshow">
								<?php the_post_thumbnail('thumbnail'); ?>
							</div>
						<?php else: ?>
							<div class="noimageshow">
							</div>
						<?php endif; ?>

					<div class="showBox">
						<p><?php the_content(); ?></p>
					</div>


				<?php endwhile; endif; ?>
			</div>

		</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

<style>
	.rightMenu{
		margin-top: 30em;
		margin-left: 50px;
	}
	main{
		margin-top: 50px;
	}


</style>