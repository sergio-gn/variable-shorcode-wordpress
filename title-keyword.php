function replace_variable_shortcode( $content ) {
    global $post;
    $title = get_the_title( $post );
    $words = explode( ' ', $title );
    $variable = end( $words );
    $content = str_replace( '{variable}', $variable, $content );
    return $content;
}
add_filter( 'the_content', 'replace_variable_shortcode' );
