<?php
// Include the custom login API file
require get_template_directory() . '/login-endpoint.php';
require get_template_directory() . '/protected_post-endpoint.php';
require get_template_directory() . '/buy-product.php';

// add_action('save_post', 'create_wc_product_on_post_publish', 10, 3);

// function create_wc_product_on_post_publish($post_id, $post, $update) {
//     // Only create product for posts, not custom post types or revisions
//     if ($post->post_type != 'post' || $update) {
//         return;
//     }

//     // Create the WooCommerce product
//     $product = new WC_Product_Simple();
//     $product->set_name($post->post_title); // Set the product title to the post title
//     $product->set_status('publish'); // Publish the product
//     $product->set_catalog_visibility('visible'); // Set product visibility

//     $product->save();
// }