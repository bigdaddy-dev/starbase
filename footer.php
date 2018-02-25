<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starbase
 */

?>

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6">
        <ul class="site-info footer-content">
          <li>&copy; Starcore Labs 2018</li>
          <li><a href="<?php echo get_page_link( get_page_by_title( 'terms of service' )->ID ); ?>">Terms of Service</a></li>
          <li><a href="<?php echo get_page_link( get_page_by_title( 'privacy policy' )->ID ); ?>">Privacy Policy</a></li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6">
        <ul class="footer-content social-links">
          <li><a href="https://www.facebook.com/StarcoreLabs"><img src="<?php bloginfo('template_directory'); ?>/assets/img/facebook.svg" alt="Facebook"></a></li>
          <li><a href="https://twitter.com/starcorelabs"><img src="<?php bloginfo('template_directory'); ?>/assets/img/twitter.svg" alt="Twitter"></a></li>
          <li><a href="https://www.youtube.com/user/starcorelabs"><img src="<?php bloginfo('template_directory'); ?>/assets/img/youtube.png" alt="YouTube"></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>


<?php wp_footer(); ?>

<!-- Bootstrap core JavaScript
  ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->


</div><!--#content-->
</div><!--#page-->
</body>
</html>
