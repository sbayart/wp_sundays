<?php
/*Template Name: Blog
*/
get_header(); ?>
<nav>
    <h3>Notre blog</h3>
    <article>
        <?php   $args = array(
                        'category_name' => 'blog',
                        'posts_per_page' => 10
                        );
                $posts = get_posts($args);
                foreach ($posts as $post) {
                    setup_postdata( $post );?>
                        <section>
                            <a href="<?php the_permalink(); ?>">
                            <p><?php echo the_title();?></p>
                            <p><?php echo the_post_thumbnail();?> </p>
                        </section>
                <?php }?>
    </article>
</nav>
<?php get_footer(); ?>
