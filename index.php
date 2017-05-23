<?php get_header(); ?>

<nav>
    <h3>Spring Summer 2017</h3>
        <?php   $args = array(
                        'category_name' => 'catalogue',
                        'posts_per_page' => 18
                        );
                $posts = get_posts($args);
                foreach ($posts as $post) {
                    // global $post;
                    setup_postdata( $post );?>
                    <article>
                        <section>
                            <a href="produit.html">
                            <?php get_template_part( 'template-parts/content' );?>

                            <p><?php echo the_title();?> </p>
                            <p><?php echo the_content();?> </p>

                            <?php  $custom_fields = get_post_custom(0);
                            $my_custom_field = $custom_fields['Prix'];
                            foreach ( $my_custom_field as $key => $value ) {
                                echo '<p class="price">'. $value . '</p>';
                            }?>
                        </section>
                    </article>
                <?php }?>
</nav>
<?php get_footer(); ?>
