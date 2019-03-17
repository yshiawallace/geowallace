<?php 
    $gallery_images = get_sub_field('gallery');
?>        
        <div class="block block--gallery">
            <div class="gallery">
            <?php
                $count = 0;
                foreach( $gallery_images as $image ) :
                    $img_id = $image['ID'];
                    $url = $image['url'];
                    $alt = $image['alt'];
                    $width = $image['width'];
                    $height = $image['height'];
                    $size = 'full';
                    $img = wp_get_attachment_image($img_id, $size);
                    $thumbnail = wp_get_attachment_image($img_id, 'thumbnail');

                    if( $count === 0 ) :
                ?>
                    <figure class="gallery__item gallery__item--first" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                        <a href="<?php echo $url; ?>" data-size="<?php echo $width . 'x' . $height; ?>"><?php echo $thumbnail; ?></a>
                        <?php if( $alt ) : ?>
                            <figcaption itemprop="caption description"><?php echo $alt; ?></figcaption>
                        <?php endif; ?>
                    </figure>
                <?php
                    else :
                ?>  
                    <figure class="gallery__item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                        <a href="<?php echo $url; ?>" data-size="<?php echo $width . 'x' . $height; ?>"><?php echo $thumbnail; ?></a>
                        <?php if( $alt ) : ?>
                            <figcaption itemprop="caption description"><?php echo $alt; ?></figcaption>
                        <?php endif; ?>
                    </figure>          
            <?php
                    endif;
                    $count++;
                endforeach;
            ?>
            </div>
        </div>