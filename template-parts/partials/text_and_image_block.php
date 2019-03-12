<?php 
    $image_position = get_sub_field('image_position');
    $image_x_axis = get_sub_field('image_position_x_axis');
    $image_y_axis = get_sub_field('image_position_y_axis');
    $text = get_sub_field('text');
    $image = get_sub_field('image');
?>
        <div class="block block--text-image<?php echo ' ' . $image_position; ?>">
            <?php if ( $text ) : ?>
                <div class="text"> 
                    <?php echo $text; ?>
                </div> 
            <?php endif; ?>
            <?php if ( $image ) : ?>
                <div class="image" style="background: url(<?php echo $image['url'] . ')' . ' ' . $image_x_axis . '% ' . $image_y_axis . '% ' ; ?> no-repeat;">
                    <?php if( $image['alt'] ) : ?>
                        <span class="screen-reader-text"><?php echo $image['alt']; ?></span>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>