<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="col2">
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry clear">
	<div class="page_image">
		<h1><?php bloginfo( 'name' );?></h1>
		<h2><?php bloginfo( 'description', 'display' );?></h2>
	</div>
        <?php the_content(); ?>
        <?php edit_post_link(); ?>
    </div><!--end entry-->
  </div><!--end post-->
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
  <div class="navigation index">
    <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
    <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
  </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>
</div>
<?php get_footer(); ?>


