<?php
/*
 Template Name: Home
*/

get_header();
?>

<div class="row">
  <div class="col-sm-10 col-sm-offset-1">

    <?php
		// Start the loop.
		while ( have_posts() ) : the_post();
    ?>

    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
        <?php the_content(); ?>
      </div>
    </div>

    <?php
    // End of the loop.
    endwhile;
    ?>

    <?php
  $pages = tsc_get_pages(home);
  foreach($pages as $page) :
?>

  <div class="row <?php echo $page->post_name; ?>">
    <div class="col-sm-10 col-sm-offset-1">
      <div class="content">
        <h3><?php echo $page->post_title; ?></h3>
        <div class="col-sm-10 col-sm-offset-1 content"><p><?php echo $page->post_content; ?></p></div>
      </div>
    </div>
  </div>

<?php endforeach; ?>


  </div>
</div>

<?php get_footer(); ?>
