<?php
/*
Template Name: contact
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
        <div class="col-sm-6">
            <?php echo do_shortcode('[wpgmza id="1"]'); ?>
        </div>
    <div class="col-sm-6 align-self-center text-center">
            <?php 
            $post_id = 98;
            $content = get_post_field('post_content', $post_id);
            echo do_shortcode( $content );//executing shortcodes ?>
    </div>
    <div class="container text-center mt-4">
        
            <?php echo do_shortcode('[contact-form-7 id="101" title="Contact form 1"]'); ?>
        
    </div>
</div>



<?php get_footer(); ?>