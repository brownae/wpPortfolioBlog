<?php get_header(); ?>

<section class="module parallax parallax-1">
  <div class="container">
   <h2 class="title"><?php the_title(); ?></h2>
  </div>
</section>

<div id='wrapper'>
    <main class="page">
        <!-- START CONTENT -->
        <h2 class="page-id"><?php the_title(); ?></h2>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="postBox" id="post-<?php the_ID(); ?>">
                <?php the_content(); ?>
                <?php edit_post_link('Edit this entry.', '<p class="clear"><small>', '</small></p>'); ?>
            </div>
        <?php endwhile; endif; ?>
        <?php get_child_pages() ?>
        <!-- END CONTENT -->
    </main>
    <sidebar id="primary">
        <!-- START SIDEBAR -->
        <?php get_sidebar(primary); ?>
        <!-- END SIDEBAR -->
    </sidebar>
</div>
<?php get_footer(); ?>
