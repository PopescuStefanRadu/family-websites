<?php if(!empty($nid) && !empty($images)): ?> 
    <?php $no_images = count($images); ?>
    <div id="myCarousel" class="carousel slide img-polaroid species-carousel">
        <!-- Carousel items -->
        <?php if($no_images > 1): ?><a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a><?php endif; ?>
        <div class="carousel-inner">
            <div class="active item">                    
                <?php if ('arkive' == $image_type): ?>
                    <?php echo $images[0];
                    unset($images[0]); ?>
                <?php elseif ('cck' == $image_type): ?>
                    <img src="<?php echo image_style_url('species_block', $images[0]['raw']['uri']); ?>" alt="" title="" class="species-custom-image" />
                    <?php unset($images[0]); ?>
                <?php endif; ?>                
            </div>
            <?php if(count($images) > 1): ?>                
                <?php foreach ($images as $index => $image): ?>
                    <div class="item">
                        <?php if ('arkive' == $image_type): ?>
                            <?php echo $image; ?>
                        <?php elseif ('cck' == $image_type): ?>
                            <img src="<?php echo image_style_url('species_block', $image['raw']['uri']); ?>" alt="" title="" class="species-custom-image" />
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>                
            <?php endif; ?>
        </div>
        <?php if($no_images > 1): ?><a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a><?php endif; ?>
    </div> 
    <p class="species-custom-image-author"><?php echo l($title, drupal_lookup_path('alias', 'node/'.$nid)); ?></p>
<?php endif; ?>





