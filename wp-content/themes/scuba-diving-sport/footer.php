<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Scuba Diving Sport
 */

?>

<footer>
  <div class="container">
    <?php
      if ( is_active_sidebar('scuba-diving-sport-footer-sidebar')) {
        echo '<div class="row footer-area">';
          dynamic_sidebar('scuba-diving-sport-footer-sidebar');
        echo '</div>';
      }
    ?>
    <div class="row">
      <div class="col-lg-6 col-md-6 align-self-center">
        <p class="mb-0 py-3 text-center text-md-left">
          <?php
            if (!get_theme_mod('scuba_diving_sport_footer_text') ) { ?>
              <a href="<?php echo esc_url(__('https://www.wpelemento.com/elementor/free-water-sport-wordpress-theme/', 'scuba-diving-sport' )); ?>" target="_blank">
              <?php esc_html_e('Scuba Diving Sport WordPress Theme','scuba-diving-sport'); ?>
              </a>
          <?php } else {
              echo esc_html(get_theme_mod('scuba_diving_sport_footer_text'));
            }
          ?>
          <?php if ( get_theme_mod('scuba_diving_sport_copyright_enable', true) == true ) : ?>
          <?php
            /* translators: %s: WP Elemento */
            printf( esc_html__( ' By %s', 'scuba-diving-sport' ), 'WP Elemento' ); ?>
          <?php endif; ?>
        </p>
      </div>
      <div class="col-lg-6 col-md-6 align-self-center text-center text-md-right">
        <?php if ( get_theme_mod('scuba_diving_sport_copyright_enable', true) == true ) : ?>
          <a href="<?php echo esc_url('https://wordpress.org'); ?>" rel="generator"><?php  /* translators: %s: WordPress */ printf( esc_html__( 'Proudly powered by %s', 'scuba-diving-sport' ), 'WordPress' ); ?></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
