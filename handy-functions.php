// Get Site Title
<?php echo bloginfo("name"); ?>

// Get Site Tagline
<?php echo bloginfo("description"); ?>

// WordPress Loop
<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
  // You code here
<?php endwhile; endif; ?>

// Retrieve the ID of the current item inside the WordPress Loop
<?php echo get_the_ID(); ?>

// Retrieve the ID of the current item outside the WordPress Loop
<?php echo get_queried_object_id(); ?>

// Custom WP Query
<?php
  // Setup WP Query args
  $args = array(
    '<arg1>' => <arg1_value>,
    '<arg2>' => <arg2_value>,
    ...
  );
  // Define our WP Query
  $query = new WP_Query($args);
  // Start our WP Query loop
  while ($query -> have_posts()): $query -> the_post();
?>

// Get Current User
<?php $user = wp_get_current_user(); ?>

// Get Author's Username
<?php echo get_the_author(); ?>

// Get Post's Published Date
<?php echo get_the_time("F j, Y"); ?>

// Get User's Profile Image
<?php echo get_avatar_url($user->ID); ?>

// Get User's Biological Info
<?php echo get_the_author_meta("description"); ?>

// Get Field's data set using Advanced Custom Fields plugin
<?php echo get_field('<custom_field_name>'); ?>
