<footer>
    <section>
        <h5>Quick links</h5>
        <ul>
            <li>About Us</li>
            <li>Blog</li>
            <li>Careers</li>
        </ul>
    </section>
    <section>
        <h5>Contact us</h5>
        <ul>
            <li><i class="fa fa-twitter" aria-hidden="true"></i>@californiatheme</li>
            <li><i class="fa fa-envelope-o" aria-hidden="true"></i>support@smallvictories.co</li>
            <li><i class="fa fa-phone" aria-hidden="true"></i>+1 917 (123) 4567</li>
        </ul>
    </section>
    <section>
        <h5>Newsletter</h5>
        <div class="input-group">
            <form method="post">
                <input type="email" name="email" class="form-control" placeholder="Your email..." aria-describedby="basic-addon2">
                <?php
                    if (isset($_POST['email'])) {
                        $wpdb->insert( 'wp_emails',  array(   'email' => $_POST['email'])
                                            // 'datetime' => the_date())
                                        );
                    } ?>
                <button class="input-group-addon" id="basic-addon2" type="submit" name="button">OK</button>
            </form>
        </div>
    </section>
    <section>
        <h5>Follow us</h5>
        <ul>
            <li><i class="fa fa-pinterest-square" aria-hidden="true"></i>Pinterest</li>
            <li><i class="fa fa-instagram" aria-hidden="true"></i>Instagram</li>
            <li><i class="fa fa-vimeo-square" aria-hidden="true"></i>Vimeo</li>
        </ul>
    </section>
</footer>
</div>

<script src="<?php echo get_stylesheet_directory_uri().'/static/external/jquery/dist/jquery.min.js' ; ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri().'/static/external/bootstrap/dist/js/bootstrap.min.js'; ?>"></script>

</body>
</html>
