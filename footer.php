<?php do_action( 'main_bottom' ); ?>
</section> <!-- .main -->
<?php get_sidebar( 'primary' ); ?>
<?php do_action( 'after_main' ); ?>
</div><!-- .max-width -->
</div><!-- .primary-container -->

<?php 
// Elementor `footer` location
if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) :
?>
<footer id="site-footer" class="site-footer" role="contentinfo">
    <div class="max-width">
        <?php do_action( 'footer_top' ); ?>
    </div>
    <div class="design-credit">
        <span>
            <?php
            $footer_text = sprintf( __( '<a href="%1$s" rel="nofollow">%2$s WordPress Theme</a> by Compete Themes.', 'period' ), 'https://www.competethemes.com/period/', wp_get_theme( get_template() ) );
            $footer_text = apply_filters( 'ct_period_footer_text', $footer_text );
            echo do_shortcode( wp_kses_post( $footer_text ) );
            ?>
        </span>
    </div>
</footer>
<?php endif; ?>
</div><!-- .overflow-container -->

<?php do_action( 'body_bottom' ); ?>

<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>