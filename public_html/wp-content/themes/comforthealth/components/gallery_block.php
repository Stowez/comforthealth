<?php
// Gallery Block - PhotoSwipe Integration
$images = get_sub_field('image_gallery');

if( $images ): ?>
    <section class="gallery-section">
        <div class="pswp-gallery gallery-grid" id="gallery-<?php echo uniqid(); ?>">
            <?php foreach( $images as $image ): 
                // Get full image dimensions for PhotoSwipe
                $image_width = isset($image['width']) ? $image['width'] : 1280;
                $image_height = isset($image['height']) ? $image['height'] : 853;
                $caption = isset($image['caption']) ? $image['caption'] : $image['alt'];
            ?>
                <a href="<?php echo $image['url']; ?>" 
                   data-pswp-width="<?php echo $image_width; ?>" 
                   data-pswp-height="<?php echo $image_height; ?>"
                   class="gallery-item"
                   target="_blank">
                    <img src="<?php echo $image['sizes']['medium']; ?>" 
                         alt="<?php echo $image['alt']; ?>" 
                         class="gallery-item__image"/>
                    <?php if( $caption ): ?>
                        <div class="gallery-item__caption"><?php echo $caption; ?></div>
                    <?php endif; ?>
                </a>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>
<!-- /gallery-block -->
 