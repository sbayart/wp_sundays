<?php
/*Template Name: Produit
Template Post Type: post
*/
get_header()
?>
<div class="main single">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <div id="produit">
        <h3><?php the_title(); ?></h3>
        <?php echo the_post_thumbnail();?>
        <p><?php the_content(); ?></p>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>
<?php get_footer(); ?>
