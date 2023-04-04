<?php if ( ! $cart->is_empty() ): ?>
<?php foreach ( $cart->get_cart() as $cart_item_key => $cart_item ): ?>
<?php
    $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
    $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
    $thumbnail  = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
    $product_quantity = $cart_item['quantity'];
?>
<?php if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ): ?>
            <ul class="wcfc-products">
                <li class="wcfc-product-list">
                    <div class="wcfc-product-info">
                        <?php echo $thumbnail; ?>
                        <div class="wcfc-product-info-2">
                            <p><?php echo wp_kses_post( $_product->get_name() ); ?></p>
                            <p><?php echo '1 pair X ' .$product_quantity ?></p>
                            <div class="wcfc-info-group">
                                <svg class="wcfc-decrement" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.92 22C17.42 22 21.92 17.5 21.92 12C21.92 6.5 17.42 2 11.92 2C6.42 2 1.92 6.5 1.92 12C1.92 17.5 6.42 22 11.92 22Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7.92 12H15.92" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <input type="number" class="wcfc-class" name="wcfc-qty" value="<?php echo $product_quantity; ?>"></input>
                                <svg class="wcfc-increment" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 12H16" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12 16V8" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                        <p class="wcfc-product-price"><?php echo $cart->get_product_price( $_product ); ?></p>
                    </div>
                </li>
            </ul>
        <?php endif;?>
<?php endforeach;?>
<?php else: ?>
    <p>No Products Available In Cart</p>
<?php endif;?>