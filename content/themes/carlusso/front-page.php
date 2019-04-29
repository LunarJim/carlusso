<?php get_header(); ?>

        <!-- carousel-->
      <div class="container fluid align-middle justify-content-center">
      <div class="row mt-3">
        <div id="carouselExampleIndicators" class="carousel slide col-lg-6 mb-0" data-ride="carousel">
          <div class="carousel-inner">

            <?php     $arg = [
                'post_type' => 'Voiture',
                'meta_query' => array(
                  array(
                    'key'     => 'rank',
                    'value'   => 1,
                  ),
                ),
            ];

    

            $wp_query = new WP_Query($arg);

            if ($wp_query->have_posts()): while($wp_query->have_posts()): $wp_query->the_post();

            ?>

            <div class="carousel-item active" data-interval="2">
              <img src="<?= the_post_thumbnail_url(); ?>
              " class="" alt="...">
            </div>

            <?php

            wp_reset_postdata();

            endwhile;endif;
            ?>

            <?php $wp_query = new WP_Query($arg);

            if ($wp_query->have_posts()): while($wp_query->have_posts()): $wp_query->the_post();

            ?>

            <?php $postImages = getPostImages($size = 'full'); ?>
            <?php foreach($postImages as $image): ?>

            <div class="carousel-item" >
              <img src="<?= $image ?>" class="" alt="...">
            </div>

            <?php endforeach; ?>
            
          </div>
        </div>
        <div class="col-lg-4 mb-1 header-title mx-auto">
            <h2 class="ml-1 mb-2">
              A la une : <?php the_title(); ?>
            </h2>
            <ul class="list-group">
                <li class="list-group-item"><span class="font-italic text-secondary">Km :</span> <?= get_field('kilomètres'); ?></li>
                <li class="list-group-item"><span class="font-italic text-secondary">Année :</span> <?= get_field('année'); ?></li>
                <li class="list-group-item text-right text-primary font-weight-bold"><?= get_field('prix'); ?> Euros</li>
              </ul>
              <a href="<?= get_post_permalink(); ?>"><button type="button" class="btn btn-secondary mt-2">Découvrir</button></a>
        </div>
      </div>
    </div>

        <?php

        wp_reset_postdata();

        endwhile;endif;
        ?>
      
  
      <div class="row cards justify-content-center">


      <?php     $arg = [
                'post_type' => 'Voiture',
                'posts_per_page' => -1
            ];
            
            $wp_query = new WP_Query($arg);

            if ($wp_query->have_posts()): while($wp_query->have_posts()): $wp_query->the_post();

            ?>

          <div class="card" style="width: 19rem;">
            <img src="<?= the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h6 class="card-title"><?= the_title(); ?></h6>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">km : <?= get_field('kilomètres'); ?></li>
                  <li class="list-group-item">AM : <?= get_field('année'); ?></li>
                  <li class="list-group-item">Prix : <?= get_field('prix'); ?></li>
                </ul>
                <a href="<?= get_post_permalink(); ?>" class="btn btn-secondary mt-2 ml-5 fiche">Fiche détaillée</a>
              </div>
          </div>
          
          <?php

          wp_reset_postdata();

          endwhile;endif;
          ?>

      </div>

      <?php get_footer(); ?>
  

  
    
