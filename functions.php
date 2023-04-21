function replace_variable_shortcode( $atts ) {
    // Get the current post title
    $post_title = get_the_title();

    // Define the strings to remove from the post title
    $string_to_remove_1 = 'Your Title with';
    $string_to_remove_2 = 'Example of Removing String';

    // Check if the post title contains the first string
    if ( strpos( $post_title, $string_to_remove_1 ) !== false ) {
        // Remove the first string from the post title
        $modified_title = str_replace( $string_to_remove_1, '', $post_title );
    } else {
        // Remove the second string from the post title
        $modified_title = str_replace( $string_to_remove_2, '', $post_title );
    }

    // Return the modified title
    return $modified_title;
}
add_shortcode( 'variable', 'replace_suburb_shortcode' );
add_shortcode( 'Variable', 'replace_suburb_shortcode' );
