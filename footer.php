<footer class="footer">
                <a class="phone" href="tel:+<?php the_field('phone') ?>">
                     <?php the_field('phone') ?>
                </a>
                <div class="footer__email">
                    <span>
                        <?php the_field('email') ?>
                    </span>
                </div>

            </footer>
            <?php wp_footer(); ?>
            <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/main.js"></script> -->
    </div>
    </body>
</html>