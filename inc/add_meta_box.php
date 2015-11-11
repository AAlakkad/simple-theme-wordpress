<?php
// Meta box for companies info

/**
 * Adds a box to the main column on the Post and Page edit screens.
 */
function aliqtiasdi_add_meta_box() {
    add_meta_box('aliqtiasdi_sectionid', 'Company Information', 'aliqtiasdi_meta_box_callback', 'company', 'side', 'high');
}
add_action( 'add_meta_boxes', 'aliqtiasdi_add_meta_box' );

/**
 * Prints the box content.
 *
 * @param WP_Post $post The object for the current post/page.
 */
function aliqtiasdi_meta_box_callback( $post ) {

    // Add a nonce field so we can check for it later.
    wp_nonce_field( 'aliqtiasdi_save_meta_box_data', 'aliqtiasdi_meta_box_nonce' );

    /*
     * Use get_post_meta() to retrieve an existing value
     * from the database and use the value for the form.
     */
    $website = get_post_meta( $post->ID, 'website', true );
    $address = get_post_meta( $post->ID, 'address', true );

    echo '<label for="company_website">Website</label>';
    echo '<input type="url" id="company_website" name="company_website" value="' . esc_attr( $website ) . '" size="25" />';
    echo '<label for="company_adderss">Address</label>';
    echo '<input type="text" id="company_address" name="company_address" value="' . esc_attr( $address ) . '" size="25" />';
}

/**
 * When the post is saved, saves our custom data.
 *
 * @param int $post_id The ID of the post being saved.
 */
function aliqtiasdi_save_meta_box_data( $post_id ) {

    /*
     * We need to verify this came from our screen and with proper authorization,
     * because the save_post action can be triggered at other times.
     */

    // Check if our nonce is set.
    if ( ! isset( $_POST['aliqtiasdi_meta_box_nonce'] ) ) {
        return;
    }

    // Verify that the nonce is valid.
    if ( ! wp_verify_nonce( $_POST['aliqtiasdi_meta_box_nonce'], 'aliqtiasdi_save_meta_box_data' ) ) {
        return;
    }

    // If this is an autosave, our form has not been submitted, so we don't want to do anything.
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    /* OK, it's safe for us to save the data now. */

    // Make sure that it is set.
    if ( ! isset( $_POST['company_website'] ) or ! isset( $_POST['company_website'] )) {
        return;
    }

    // Sanitize user input.
    $website = sanitize_text_field( $_POST['company_website'] );
    $address = sanitize_text_field( $_POST['company_address'] );

    // Update the meta field in the database.
    update_post_meta( $post_id, 'website', $website );
    update_post_meta( $post_id, 'address', $address );
}
add_action( 'save_post_company', 'aliqtiasdi_save_meta_box_data' );
