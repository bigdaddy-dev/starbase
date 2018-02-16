<?php
/*
  Template Name: Home Page
*/

// advanced custom fields
$hire_image = get_field('hire_image');
$hire_content = get_field('hire_content');
$process_step_1 = get_field('process_step_1');
$process_step_2 = get_field('process_step_2');
$process_step_3 = get_field('process_step_3');
$process_step_4 = get_field('process_step_4');

get_header(); ?>

<!-- Jumbotron -->
<div class="jumbotron page-top">
  <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="beaker star logo">
  <h1 class="display-3"><?php bloginfo('name'); ?></h1>
  <p><?php bloginfo('description'); ?></p>

  <!-- Button trigger modal -->
  <p><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newsletter">
Newsletter
</button></p>

  <!-- Modal -->
  <div class="modal fade" id="newsletter" tabindex="-1" role="dialog" aria-labelledby="newsletter" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Join My Newsletter</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
        </div>
        <div class="modal-body">
          <!-- Begin MailChimp Signup Form -->
          <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
          <div id="mc_embed_signup">
            <form action="https://starcorelabs.us2.list-manage.com/subscribe/post?u=826675123a9972027483be635&amp;id=ba0897b4cd" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <div id="mc_embed_signup_scroll">
                <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
                <div class="mc-field-group">
                  <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
                  <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                </div>
                <div class="mc-field-group">
                  <label for="mce-FNAME">First Name </label>
                  <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
                </div>
                <div class="mc-field-group">
                  <label for="mce-LNAME">Last Name </label>
                  <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
                </div>
                <div id="mce-responses" class="clear">
                  <div class="response" id="mce-error-response" style="display:none"></div>
                  <div class="response" id="mce-success-response" style="display:none"></div>
                </div>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_826675123a9972027483be635_ba0897b4cd" tabindex="-1" value=""></div>
                <div class="clear text-right mr-3"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
              </div>
            </form>
          </div>
          <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
          <script type='text/javascript'>
            (function($) {
              window.fnames = new Array();
              window.ftypes = new Array();
              fnames[0] = 'EMAIL';
              ftypes[0] = 'email';
              fnames[1] = 'FNAME';
              ftypes[1] = 'text';
              fnames[2] = 'LNAME';
              ftypes[2] = 'text';
            }(jQuery));
            var $mcj = jQuery.noConflict(true);
          </script>
          <!--End mc_embed_signup-->
        </div>
      </div>
    </div>
  </div>
  <!-- End Modal -->
</div>

<!-- blog list -->
<section class="blog-list section-space">
  <div class="container">
    <div class="row">
      <div class="col-md-12 section-title">
        <h3>Blog</h3>
      </div>
    </div>

    <div class="row">
<?php
   // the query
   $the_query = new WP_Query( array(
      'posts_per_page' => 3,
   ));
?>

<?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <div class="col-md-4">
      <div class="card mb-4 box-shadow">
        <?php if ( has_post_thumbnail() ) { // check for feature image ?>
        <div class="post-image card box-shadow">
          <?php the_post_thumbnail(); ?>
        </div>
        <?php } ?>
        <div class="card-body">
          <h5>
            <?php
              the_title( '<h5 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h5>' );
              ?>
          </h5>
          <p class="card-text"><?php echo excerpt(15); ?></p>
        </div>
      </div>
    </div>

  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php __('No Posts'); ?></p>
<?php endif; ?>
    </div>

    <div class="row">
      <div class="col-md-12 button-center">
        <p><a class="btn btn-primary" href="<?php echo get_page_link( get_page_by_title( blog )->ID ); ?>" role="button">MORE</a></p>
      </div>
    </div>
  </div>
</section>
<!-- end blog list -->

<!-- projects list -->
<section class="projects-list section-space">
  <div class="container">
    <div class="row">
      <div class="col-md-12 section-title pt-4">
        <h3>Projects</h3>
      </div>
    </div>
    <div class="row">
      <?php $loop = new WP_Query( array( 'post_type' => 'project', 'posts_per_page' => 3, 'orderby' => 'post_id', 'order' => 'ASC')); ?>

      <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

        <?php get_template_part( 'template-parts/content-projects', get_post_format() ); ?>

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    </div>

    <div class="row">
      <div class="col-md-12 button-center">
        <p><a class="btn btn-primary" href="<?php echo get_page_link( get_page_by_title( projects )->ID ); ?>" role="button">MORE</a></p>
      </div>
    </div>
  </div>
</section>
<!-- end projects list -->

<!-- hire -->
<a class="hire-anchor" id="hire"></a>
<section class="hire section-space mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12 section-title">
        <h3>Hire</h3>
      </div>
    </div>
    <div class="row margin-bottom justify-content-center">
      <div class="col-md-4">
        <div class="card">
          <?php if(!empty($hire_image)) : ?>
              <img class="card-img-top square-img img-responsive" src="<?php echo $hire_image['url']; ?>" alt="<?php echo $hire_image['alt']; ?>">
          <?php endif; ?>
          <div class="card-body">
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <?php echo $hire_content; ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 section-title">
        <h3>Design Process</h3>
      </div>
    </div>
    <div class="row margin-bottom justify-content-center">
      <div class="col-md-4">
        <p>&nbsp;</p>
      </div>
      <div class="col-md-8">
        <ul class="process">
          <li>
            <p>Step 1</p>
            <?php if(!empty($process_step_1)) : ?>
                <?php echo $process_step_1; ?>
            <?php endif; ?>
          </li>
          <li>
            <p>Step 2</p>
            <?php if(!empty($process_step_2)) : ?>
                <?php echo $process_step_2; ?>
            <?php endif; ?>
          </li>
          <li>
            <p>Step 3</p>
            <?php if(!empty($process_step_3)) : ?>
                <?php echo $process_step_3; ?>
            <?php endif; ?>
          </li>
          <li>
            <p>Step 4</p>
            <?php if(!empty($process_step_4)) : ?>
                <?php echo $process_step_4; ?>
            <?php endif; ?>
          </li>
        </ul>
      </div>
    </div>
    <div class="row margin-bottom justify-content-center">
      <div class="col-md-4">
        <p>&nbsp;</p>
      </div>
      <div class="col-md-8">

        <?php while (have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
</section>
<!-- hire -->

<?php get_footer(); ?>
