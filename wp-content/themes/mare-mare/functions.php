<?php

// Remove sidebar
// add_action('wp', 'mare_remove_sidebar_product_pages');
// function mare_remove_sidebar_product_pages()
// {
//     if (is_woocommerce() || is_checkout()) {
//         remove_action('storefront_sidebar', 'storefront_get_sidebar', 10);
//     }
// }

// Limit the amount of products per page
function mare_products_per_page($products)
{
    $products = 6;
    return $products;
}
add_filter('loop_shop_per_page', 'mare_products_per_page', 20);

// Create new footer
function mare_new_footer()
{
    echo "<div class='mare-footer'>";
    echo "<p>All rights reserved &copy; Mare-Mare" . " " . get_the_date('Y') . "</p>";
    echo "</div>";
}
// Remove the default wooCommerce footer and add new one
function mare_replace_footer()
{
    remove_action('storefront_footer', 'storefront_credit', 20);
    add_action('storefront_after_footer', 'mare_new_footer', 10);
}
add_action('init', 'mare_replace_footer', 10);
