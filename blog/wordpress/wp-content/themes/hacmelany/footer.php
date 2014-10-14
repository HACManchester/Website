<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Melany
 */
?>
</main><!-- #main -->
</section><!-- #content -->
</div><!-- #page -->

<footer id="colophon" <?php melany_footer_class(); ?> role="contentinfo">
    <div class="site-info navbar-text text-center">
        <small>
            <?php printf( '&copy; ' ); ?>
            <?php echo date( 'Y ' ); ?>
            <?php bloginfo( 'name' ); ?>
            <span class="sep"> - </span>
            <?php $credits = get_theme_mod('melany_footer_credits');
            if ( ! empty($credits) )
                echo $credits . '<span class="sep"> - </span>'; ?>
        </small>
    </div><!-- .site-info -->
</footer><!-- #colophon -->

</div><!-- #scroll -->

<?php wp_footer(); ?>

</body>
</html>

