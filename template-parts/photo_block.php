<div class="photo_block" data-post-id="<?php echo get_the_ID(); ?>">
    <?php $post_url = get_permalink(); ?>
    <!-- Overlay Img --> 
    <div class="photo_block_overlay">
    <div class="text_reference"><?php  the_title (''); ?></div>  

    <div class="text_category">
    <?php 
    $terms = get_the_terms(get_the_ID(), 'categorie'); // Récupère les termes de la taxonomie "categorie"
    if ($terms && !is_wp_error($terms)) {
        foreach ($terms as $term) {
            echo esc_html($term->name) . ' '; // Affiche le nom de chaque terme
        }
    } else {
        echo 'Pas de catégorie'; // Message si aucun terme n'est assigné
    }
    ?>
</div>
        <div class="icon_eye">
            <a href="<?php echo $post_url; ?>" class="lightbox_trigger">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/icon-eye.svg' ?>">
            </a> 

            

        </div>
        <div class="icon_fullscreen" data-title="<?php  the_title(); ?>"
            data-image="<?php echo esc_attr(get_the_post_thumbnail_url(get_the_ID())); ?>"
            data-reference="<?php  the_field('reference'); ?>" 
            data-categories ="<?php the_field('categories') ?>">
            <img src="
                    <?php echo get_template_directory_uri() . '/assets/img/Icon_fullscreen.png' ?>">
        </div>
    </div>  
    <!-- Template Part post Img -->
    <?php get_template_part('template-parts/photo_img'); ?>
</div>