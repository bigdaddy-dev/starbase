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
        <ul class="footer-content">
          <li>&copy; Starcore Labs 2018</li>
          <li><a href="terms.php">Terms of Service</a></li>
          <li><a href="privacy.php">Privacy Policy</a></li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6">
        <ul class="footer-content social-links">
          <li><a href="https://www.facebook.com/StarcoreLabs"><img src="<?php bloginfo('template_directory'); ?>/assets/img/facebook.svg" alt="Facebook"></a></li>
          <li><a href="https://twitter.com/starcorelabs"><img src="<?php bloginfo('template_directory'); ?>/assets/img/twitter.svg" alt="Twitter"></a></li>
          <li><a href="https://www.linkedin.com/in/starcorelabs"><img src="<?php bloginfo('template_directory'); ?>/assets/img/linkedin.svg" alt="LinkedIn"></a></li>
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>
  window.jQuery || document.write('<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-slim.min.js"><\/script>')
</script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/popper.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
</body>

</body>
</html>
