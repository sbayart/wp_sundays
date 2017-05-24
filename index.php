<?php get_header(); ?>

<nav>
    <h3>Spring Summer 2017</h3>

    <article>
        <?php   $args = array(
                        'category_name' => 'catalogue',
                        'posts_per_page' => 18
                        );
                $posts = get_posts($args);
                foreach ($posts as $post) {
                    // global $post;
                    setup_postdata( $post );?>
                        <section>
                            <a href="<?php the_permalink(); ?>">
                            <?php get_template_part( 'template-parts/content' );
                            $tag = get_the_tags();

                            echo '<h4 class="'.$tag[0]->slug.'">'.$tag[0]->name.'</h4>';
                            ?>
                            <p><?php echo the_title();?></p>
                            <p><?php echo the_post_thumbnail();?> </p>
                            <?php  $custom_fields = get_post_custom(0);
                            $my_custom_field = $custom_fields['Prix'];
                            foreach ( $my_custom_field as $key => $value ) {
                                echo '<p class="price">'. $value . '</p></a>';
                            }?>
                        </section>
                <?php }?>
    </article>
</nav>
<?php get_footer(); ?>
