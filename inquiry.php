<?php
/*
	Template Name: お問い合わせ
*/

?>

<?php get_header(); ?>
<div class="postAllAndFooterBox">
	<div class="pagebox">

		<?php if(have_posts()): while(have_posts()): the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>
		<?php endwhile; endif; ?>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

<style>
	.rightMenu{
		margin-top: 10em;
		margin-left: 50px;
	}
	.pageBox{
		width: 850px;
	}
	.postAllAndFooterBox{
		width: 1000px;
	}

</style>