function add_preconnect_links() {
    ?>
    <!-- Preconnect para Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Preconnect para Google Tag Manager -->
    <link rel="preconnect" href="https://www.googletagmanager.com">
    <?php
}
add_action('wp_head', 'add_preconnect_links', 1);
