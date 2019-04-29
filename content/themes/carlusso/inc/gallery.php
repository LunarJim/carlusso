<?php

/*
 * Retreive url's for image attachments from a post
 */

function getPostImages($size = 'full'){
    global $post;
    $urls = array();

    $images = get_children(array(
        'post_parent' => $post->ID, 
        'post_status' => 'inheret',
        'post_type'   => 'attachment',
        'post_mime_type' => 'image'
    ));

    if(isset($images)){
        foreach($images as $image){
            $imgThumb = wp_get_attachment_image_src($image->ID, $size, false);
            $urls[] = $imgThumb[0];
        }  

        return $urls;
    }else{
        return false;
    }
}

add_action('wp_enqueue_scripts', 'getPostImages');