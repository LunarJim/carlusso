<?php get_header(); ?>

  
  <div class="container">
    <div class="row single-car-infos mt-3">
      <h2 class="single-car-title w-100">
         <?php the_title(); ?> 
      </h2>
      <p class="single-car-main-infos w-100 font-weight-bold font-italic">
          <?= get_field('année'); ?> - <?= get_field('kilomètres'); ?> kilomètres - <?= get_field('prix'); ?> Euros
      </p>
      <p class="w-100 single-car-details">
        <?= get_field('description'); ?>
      </p>
    </div>
    <div class="row">
      <div class="row">

      <?php $postImages = getPostImages($size = 'full'); ?>
            <?php foreach($postImages as $image): ?>

              <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                     data-image="<?= $image ?>"
                     data-target="#image-gallery">
                      <img class="img-thumbnail"
                           src="<?= $image ?>" 
                           alt="Another alt text">
                  </a>
              </div>

            <?php endforeach; ?>
    
          </div>
  
  
          <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h4 class="modal-title" id="image-gallery-title"></h4>
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                          </button>
                      </div>
                      <div class="modal-body">
                          <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                          </button>
  
                          <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                          </button>
                      </div>
                  </div>
              </div>
          </div>
    </div>
  </div>
  
  <?php get_footer(); ?>