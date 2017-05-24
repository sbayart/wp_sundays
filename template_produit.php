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



<!-- <p class="i"><a href="panier.html"><i class="fa fa-shopping-basket fa-2x" aria-hidden="true"></i></a></p>
<section id="produit">
    <h3>Winter Scarf</h3>
    <img src="http://placehold.it/450x450" class="img-responsive" alt="produit1">
    <figure>
        <img src="http://placehold.it/150x150" class="img-responsive" alt="ImageProduit" />
        <img src="http://placehold.it/150x150" class="img-responsive" alt="ImageProduit" />
        <img src="http://placehold.it/150x150" class="img-responsive" alt="ImageProduit" />
    </figure>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p>Price : <span>180 $</span><button type="button" class="btn btn-default"><a href="panier.html">Commander</a></button></p>

</section> -->
