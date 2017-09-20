<?php get_header(); ?>

<section class="module parallax parallax-1">
  <div class="container">
   <h2 class="title"><?php bloginfo('name'); ?></h2>
  </div>
</section>

    <div id='wrapper'>
<!-- START CONTENT -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<main id="content" class="single">
    <strong class="breadcrumb"><?php if (function_exists('bcn_display')) { bcn_display(); } ?></strong>
        <h2><?php the_title(); ?></h2>
    <p class="postmetadata"><b>
    	<span class="date">Posted on <?php the_time('F jS, Y') ?></span> in
		<span class="cat"><?php the_category(', ') ?></span>
		<span class="author">by <?php the_author_posts_link(); ?></span>
    </b></p>
    <?php the_content('More &raquo;'); ?>
    <?php wp_link_pages(); ?>
		<nav class="post-nav">
			<div class="alignleft"><?php previous_post_link('&laquo; %link', '%title', false) ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;', '%title', false) ?></div>
		</nav>
    <?php edit_post_link('Edit this entry.', '<p class="clear"><small>', '</small></p>'); ?>
	<?php comments_template(); ?>
    <?php endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
</main>
<sidebar id="primary">
<!-- START SIDEBAR -->
<?php get_sidebar(primary); ?>
<!-- END SIDEBAR -->
</sidebar>
</div>
<?php get_footer(); ?>
