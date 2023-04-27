<?php

// Remove sidebar
add_action('wp', 'mare_remove_sidebar_product_pages');
function mare_remove_sidebar_product_pages()
{
    if (is_woocommerce() || is_checkout()) {
        remove_action('storefront_sidebar', 'storefront_get_sidebar', 10);
    }
}




// Limit the amount of products per page
function products_per_page($products)
{
    $products = 6;
    return $products;
}
add_filter('loop_shop_per_page', 'products_per_page', 20);

remove_action('storefront_footer', 'storefront_credit');