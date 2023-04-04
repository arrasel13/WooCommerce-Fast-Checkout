<ul class="wcfc-shipping-info">
    <?php if($cart->needs_shipping() && $cart->show_shipping() ) : ?>
        
        <?php 

        $cart->calculate_shipping();

        $packages = WC()->shipping()->get_packages();
        
        foreach ( $packages as $i => $package ) {
            $chosen_method = isset(WC()->session->chosen_shipping_methods[ $i ]) ? WC()->session->chosen_shipping_methods[ $i ] : '';
            $product_names = array();
    
            if (count($packages) > 1 ) {
                foreach ( $package['contents'] as $item_id => $values ) {
                    $product_names[ $item_id ] = $values['data']->get_name() . ' &times;' . $values['quantity'];
                }
                $product_names = apply_filters('woocommerce_shipping_package_details_array', $product_names, $package);
            }            
        }
        ?>
            <li class="wcfc-shipping-method">
            <h2>Shipping method:</h2>
            <div class="wcfc-shipping-wrapper">
                <div class="wcfc-shipping-option">
                    <?php 
                    foreach( $package['rates'] as $shipping_method ) {
                        if (isset($shipping_method->cost) && $shipping_method->id === $chosen_method ) {
                              $flat_shipping_rate = $shipping_method->cost;
                        }
                        ?>
                                <label for="wcfc-flat-rate">
                                    <input type="radio" name="wcfc-shipping-option" id="wcfc-flat-rate" class="wcfc-radio__input" <?php echo $shipping_method->id === $chosen_method ? 'checked': '' ?>>
                                    <div class="wcfc-radio__radio"></div>
                                 <?php echo $shipping_method->label; ?>
                                </label>
                            <?php
                    }
                    ?>
                </div>
                <div class="wcfc-shipping-rate">
                    <span><?php echo $flat_shipping_rate; ?></span>
                </div>
            </div>
            </li>
        <?php endif; ?>
    <li class="wcfc-apply-coupon">
        <h2>Apply Coupon:</h2>
        <div class="wcfc-coupon-wrapper">
            <div class="wcfc-coupon-option">
                <form action="" class="wcfc-applyCouponCodeForm">
                    <input type="text" placeholder="Coupon Code" name="wcfc-couponCode" class="wcfc-applyCouponCodeField">
                    <input type="submit" value="Apply" class="wcfc-applyCouponCodeBtn">
                </form>
            </div>
            <div class="wcfc-coupon-value">
                <span>-$12</span>
            </div>
        </div>
    </li>
    <li class="wcfc-subtotal">
        <div class="wcfc-st-left">
            <h2>Subtotal:</h2>
        </div>
        <div class="wcfc-st-right">
            <span><?php echo $cart->get_total(); ?></span>
        </div>
    </li>
    <li class="wcfc-shipping-address">
        <h2>Shipping address:</h2>
        <p id="wcfc-address">4639 Hart Ridge Road, Saginaw, Michigan, 48603, 989-249-8309, USA.</p>
    </li>
</ul>