<?php do_action('main_bottom'); ?>
</section> <!-- .main -->
<?php get_sidebar('primary'); ?>
<?php do_action('after_main'); ?>
<?php
$fbStudent = "https://www.facebook.com/PortlandEsl";
$fbTeacher = "https://www.facebook.com/groups/PortlandESLNetwork";
$youtube = "https://www.youtube.com/channel/UC07ICj_72wCrsQ0mSpQ0bRg";
?>
</div><!-- .max-width -->
</div><!-- .primary-container -->

    <footer id="site-footer" class="site-footer" role="contentinfo">
        <div class="max-width">
            <?php do_action('footer_top'); ?>
        </div>
        <div class="design-credit">

            <nav class="nav-list">
                <ul>
                    <li><a href="<?php echo site_url('/about-us') ?>">About Us</a></li>
                    <li><a href="<?php echo site_url('/volunteer-with-us') ?>">Volunteer With Us</a></li>
                    <li><a href="<?php echo site_url('/submit-a-new-class') ?>">Submit a New Class</a></li>
                </ul>
            </nav>
            <nav class="social-list">
                <ul>
                    <li><a href=<?php echo $fbStudent?> target="_blank"><i class="fab fa-facebook-square fa-2x"> </i></a></li>
                    <li><a href=<?php echo $fbStudent?> target="_blank">For Students</a></li>
                    <li><a href=<?php echo $fbTeacher?> target="_blank"><i class="fab fa-facebook-square fa-2x"> </i></a></li>
                    <li><a href=<?php echo $fbTeacher?> target="_blank">For Teachers</a></li>
                    <li><a href=<?php echo $youtube?> target="_blank"><i class="fab fa-youtube fa-2x"></i></a></li>
                    <li><a href=<?php echo $youtube?> target="_blank">YouTube</a></li>
                </ul>
            </nav>

            <p>Copyright &#169; 2021 Portland ESL Network</p>

        </div>
    </footer>

</div><!-- .overflow-container -->

<?php do_action('body_bottom'); ?>

<?php wp_footer(); ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>