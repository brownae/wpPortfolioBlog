<?php get_header(); ?>

<section class="module parallax parallax-1">
  <div class="container">
   <h2 class="title"><?php bloginfo('name'); ?></h2>
  </div>
</section>

    <div id='wrapper'>
<main id="index">
     <h2 class="page-id"><?php wp_title('',true); ?></h2>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    	<div class="postBox">
      <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('cta-thumb'); ?></a>
    	<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
        <p class="postmetadata">
            <span class="date">Posted on <?php the_time('F jS, Y') ?></span> in
            <span class="cat"><?php the_category(', ') ?></span>
        </p>
		<?php the_excerpt(); ?>
     	<?php edit_post_link('Edit this entry.', '<p><small>', '</small></p>'); ?>
        <p class="read-more"><a href="<?php the_permalink() ?>" rel="bookmark" title="Read more about <?php the_title(); ?>">More...</a></p>
        </div>
    <?php endwhile; ?>
		<nav class="post-nav"><?php /*?> Posts appear in reverse chrono order, with newer posts at the top of the list. Thus the newer posts link is on the left, the older posts link is on the right. <?php */?>
            <p class="alignleft"><?php previous_posts_link('&laquo; Newer Posts') ?></p>
            <p class="alignright"><?php next_posts_link('Older Posts &raquo;') ?></p>
		</nav>
<?php endif; ?>
</main><!-- END CONTENT -->
    <!-- START SIDEBAR -->
<sidebar id="primary">
<?php get_sidebar(primary); ?>
</sidebar>
</div>
<?php get_footer(); ?>
