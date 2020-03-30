<?php 
    $thumbnail_links = get_sub_field('thumbnail_link');
?>
        <div class="block block--thumbnail-links">
            <?php if ( $thumbnail_links ) : ?>
                <ul class="thumbnail-links">
                    <?php foreach ( $thumbnail_links as $thumbnail ) :
                        $image_url = $thumbnail["image"] ? $thumbnail["image"]["url"] : "";
                        $text = $thumbnail["text"];
                        $link = $thumbnail["link"];
                    ?>
                        <li class="thumbnail" style="background-image: url(<?php echo esc_url($image_url); ?>);">
                            <a class="thumbnail__link" href="<?php echo esc_url($link["url"]); ?>" target="<?php echo $link["target"]; ?>">
                                <?php if ( $text ) : ?>
                                    <span class="thumbnail__text"><?php echo $text; ?></span>
                                <?php endif; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>