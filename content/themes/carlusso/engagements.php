<?php
/*
Template Name: engagements
Template Post Type: page
*/ ?>



<?php get_header(); ?>

<div class="container">
    <div class="row justify-content-center">
    <h4>
        <?php the_title(); ?>
    </h4>
    </div>
    <div class="row mt-4">
        <p> 
        <?php 
        $post_id = 93;
        $content = get_post_field('post_content', $post_id);
        echo do_shortcode( $content );//executing shortcodes ?>
        </p>
    </div>
</div>



<?php get_footer(); ?>