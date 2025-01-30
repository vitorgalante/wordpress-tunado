<?php
/**
 * Copie o código abaixo e cole-o no arquivo function.php do tema child
 * Este snippet adiciona uma preconexão com serviços da google na requisição de header da página
 * versão - 0.1.300125t13
 */
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
