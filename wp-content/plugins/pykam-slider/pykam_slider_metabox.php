<?php

const PYKAM_SLIDE_FIELD = 'pykam_slider_image_source';

/**
 * Register Metabox for slides
 */
function pykam_slider_metabox() {
	$post_type = 'slider';
	add_meta_box( 'extra_fields', 'Добавьте картинки для слайдера', 'pykam_slider_attachment_metabox', $post_type, 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'pykam_slider_metabox', 1 );

function pykam_slider_attachment_metabox( $post ) {
    $slides = get_post_meta( $post->ID, PYKAM_SLIDE_FIELD, true );
	?>
    <div class="attachment_field_containers">
        <div class="pykam-slides-info">
            <p>Shortcode для вставки: [pykam-slider <?php echo $post->ID ?>]</p>
        </div>
        <div class="pykam-slides">
            <button class="image_upload_btn">Add</button>
            <div class="pykam-slider-images"></div>
        </div>
    </div>
    <input type="hidden" name="extra_fields_nonce" value="<?= wp_create_nonce( 'extra_fields_nonce_id' ) ?>"/>
    <?php if ( $slides ) : ?>
        <script id="slides">
            <?php echo json_encode($slides) ?>
        </script>
    <?php endif;
}


add_action( 'save_post', 'pykam_attachment_save_metabox', 0);
function pykam_attachment_save_metabox( $post_id ) {

    if (get_post_type( $post_id ) !== 'slider'){
        return false;
    }

	if(
		empty( $_POST[PYKAM_SLIDE_FIELD] )
		|| ! wp_verify_nonce( $_POST['extra_fields_nonce'], 'extra_fields_nonce_id' )
		|| wp_is_post_autosave( $post_id ) || wp_is_post_revision( $post_id )
	){
		return false;
	}

    $slides = $_POST[PYKAM_SLIDE_FIELD];

    $slides = array_map( 'sanitize_text_field', $slides );
    $slides = array_filter($slides);

    if( $slides ) {
        update_post_meta( $post_id, PYKAM_SLIDE_FIELD, $slides );
    }
    else{
        delete_post_meta( $post_id, PYKAM_SLIDE_FIELD );
    }
}
