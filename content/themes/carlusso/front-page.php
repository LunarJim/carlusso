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

            <div class="carousel-item active">
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

            <div class="carousel-item">
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
          <div class="card" style="width: 19rem;">
            <img src="images/bm5.JPG" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">BMW Série 5</h5>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">km : 450 000</li>
                  <li class="list-group-item">AM : 1999</li>
                  <li class="list-group-item">Prix : 5 Euros</li>
                </ul>
                <a href="#" class="btn btn-secondary mt-2 ml-5 fiche">Fiche détaillée</a>
                
              </div>
          </div>
          <div class="card" style="width: 19rem;">
              <img src="images/picasso.JPG" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Citron Pikatchou</h5>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">km : 900 000</li>
                    <li class="list-group-item">AM : 2020</li>
                    <li class="list-group-item">Prix : 17 Euros</li>
                  </ul>
                  <a href="#" class="btn btn-secondary mt-2 ml-5 fiche">Fiche détaillée</a>
                </div>
            </div>
            <div class="card" style="width: 19rem;">
                <img src="images/megane.JPG" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">meguan 7</h5>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">km : peu</li>
                      <li class="list-group-item">AM : 2017</li>
                      <li class="list-group-item">Prix : peu</li>
                    </ul>
                    <a href="#" class="btn btn-secondary mt-2 ml-5 fiche">Fiche détaillée</a>
                  </div>
              </div>
              <div class="card" style="width: 19rem;">
                  <img src="images/bm1.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">BéhèmeV 1ère série</h5>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                      </ul>
                      <a href="#" class="btn btn-secondary mt-2 ml-5 fiche">Fiche détaillée</a>
                    </div>
                </div>
                <div class="card" style="width: 19rem;">
                    <img src="images/touran.JPG" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">VW tour âne</h5>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                        <a href="#" class="btn btn-secondary mt-2 ml-5 fiche">Fiche détaillée</a>
                      </div>
                  </div>
                  <div class="card" style="width: 19rem;">
                      <img src="images/alfaRomeoGiulia.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                          </ul>
                          <a href="#" class="btn btn-secondary mt-2 ml-5 fiche">Fiche détaillée</a>
                        </div>
                    </div>
                    <div class="card" style="width: 19rem;">
                        <img src="images/ferrari.jpeg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">250 GTO</h5>
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item">...</li>
                              <li class="list-group-item">...</li>
                              <li class="list-group-item">...</li>
                            </ul>
                            <a href="#" class="btn btn-secondary mt-2 ml-5 fiche">Fiche détaillée</a>
                          </div>
                      </div>
                      <div class="card" style="width: 19rem;">
                          <img src="images/titanic.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">épave Titanic</h5>
                              <ul class="list-group list-group-flush">
                                <li class="list-group-item">Km : à évaluer</li>
                                <li class="list-group-item">AM : 1910 et des bananes</li>
                                <li class="list-group-item">Prix : à évaluer aussi</li>
                              </ul>
                              <a href="#" class="btn btn-secondary mt-2 ml-5 fiche">Fiche détaillée</a>
                            </div>
                        </div>
                        
      </div>

      <?php get_footer(); ?>
  

  
    
