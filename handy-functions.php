// Get Site Title
<?php echo bloginfo("name"); ?>

// Get Site Tagline
<?php echo bloginfo("description"); ?>

// WordPress Loop
<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
  // You code here
<?php endwhile; endif; ?>

// Get Current User
<?php $user = wp_get_current_user(); ?>

// Display Author's Username
<?php the_author(); ?>

// Display Post's Published Date
<?php the_time("F j, Y"); ?>

// Get User's Profile Image
<?php echo get_avatar_url($user->ID); ?>

// Get User's Biological Info
<?php echo get_the_author_meta("description"); ?>

// Get Field's data set using Advanced Custom Fields plugin
<?php the_field('custom_field_name'); ?>
