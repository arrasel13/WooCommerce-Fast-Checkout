<?php

?>

<div class="wcfc-container">
    <div class="wcfc-container-wrap">
        <div class="wcfc-header">
            <div class="wcfc-header-text">
                <p><i class="fa-solid fa-cart-shopping"></i> Shopping Cart <span>(3)</span> </p>
                <button id="wcfc-clear-all"><i class="fa-regular fa-trash-can"></i> Clear All </button>
            </div>
            <!-- <button class="wcfc-close-button" id="wcfc-close-button">Close Menu</button> -->
            <button class="fa-solid fa-xmark wcfc-close-button" id="wcfc-close-button"></button>

        </div>

        <div class="wcfc-empty-content">
            <div class="wcfc-empty-content-wrapper">
                <div class="wcfc-empty-cart-img">
                    <img src="./img/cart-min 1.png" alt="Empty Cart">
                </div>
                <h2>Your cart is empty !</h2>
                <p>Please add product to your cart list</p>
            </div>
        </div>

        <div class="wcfc-main-container">
            <div class="wcfc-main-container-wrapper">
                <div class="wcfc-items">
                    <div class="wcfc-single-item">
                        <div class="wcfc-item-image">
                            <div class="wcfc-img-wrapper">
                                <img src="img/shirt.png" alt="">
                                <div class="wcfc-item-remove">
                                    <button class="fa-regular fa-trash-can"></button>
                                </div>
                            </div>
                        </div>
                        <div class="wcfc-item-details">
                            <h2 class="wcfc-item-title">Trendy Shoes for Man</h2>
                            <p><span class="wcfc-item">1 Pair</span> X <span class="wcfc-quantity">5</span></p>
                            <span class="wcfc-qty">
                                <div class="wcfc-quantity">
                                    <form>
                                        <div class="wcfc-quantity-row">
                                            <span class="wcfc-quantity-col wcfc-quantity-col-minus wcfc-quantity-button">
                                                <i class="fa-solid fa-minus"></i>
                                            </span>
                                            <span class="wcfc-quantity-col wcfc-quantity-col-input">
                                                <input type="number" id="wcfc-quantity-121" class="wcfc-input-text wcfc-num-qty text" step="1" min="1" max="" name="wcfc-quantity" value="5" title="Qty" placeholder="" inputmode="numeric">
                                            </span>
                                            <span class="wcfc-quantity-col wcfc-quantity-col-plus wcfc-quantity-button">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </span>
                        </div>
                        <div class="wcfc-item-price">
                            <span>$50</span>
                        </div>
                    </div>

                    <div class="wcfc-single-item">
                        <div class="wcfc-item-image">
                            <div class="wcfc-img-wrapper">
                                <img src="img/shirt.png" alt="">
                                <div class="wcfc-item-remove">
                                    <button class="fa-regular fa-trash-can"></button>
                                </div>
                            </div>
                        </div>
                        <div class="wcfc-item-details">
                            <h2 class="wcfc-item-title">Rubber Slipper</h2>
                            <p><span class="wcfc-item">1 bunch</span> X <span class="quantity">1</span></p>
                            <span class="wcfc-qty">
                                <div class="wcfc-quantity">
                                    <form>
                                        <div class="wcfc-quantity-row">
                                            <span class="wcfc-quantity-col wcfc-quantity-col-minus wcfc-quantity-button">
                                                <i class="fa-solid fa-minus"></i>
                                            </span>
                                            <span class="wcfc-quantity-col wcfc-quantity-col-input">
                                                <input type="number" id="wcfc-quantity-121" class="wcfc-input-text wcfc-num-qty text" step="1" min="1" max="" name="wcfc-quantity" value="1" title="Qty" placeholder="" inputmode="numeric">
                                            </span>
                                            <span class="wcfc-quantity-col wcfc-quantity-col-plus wcfc-quantity-button">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </span>
                        </div>
                        <div class="wcfc-item-price">
                            <span>$2.00</span>
                        </div>
                    </div>

                    <div class="wcfc-single-item">
                        <div class="wcfc-item-image">
                            <div class="wcfc-img-wrapper">
                                <img src="img/shirt.png" alt="">
                                <div class="wcfc-item-remove">
                                    <button class="fa-regular fa-trash-can"></button>
                                </div>
                            </div>
                        </div>
                        <div class="wcfc-item-details">
                            <h2 class="wcfc-item-title">Retro Band Polarized Sungla...</h2>
                            <p><span class="wcfc-item">1 packet</span> X <span class="quantity">5</span></p>
                            <span class="wcfc-qty">
                                <div class="wcfc-quantity">
                                    <form>
                                        <div class="wcfc-quantity-row">
                                            <span class="wcfc-quantity-col wcfc-quantity-col-minus wcfc-quantity-button">
                                                <i class="fa-solid fa-minus"></i>
                                            </span>
                                            <span class="wcfc-quantity-col wcfc-quantity-col-input">
                                                <input type="number" id="wcfc-quantity-121" class="wcfc-input-text wcfc-num-qty text" step="1" min="1" max="" name="wcfc-quantity" value="1" title="Qty" placeholder="" inputmode="numeric">
                                            </span>
                                            <span class="wcfc-quantity-col wcfc-quantity-col-plus wcfc-quantity-button">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </span>
                        </div>
                        <div class="wcfc-item-price">
                            <span>$1.50</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wcfc-menu-footer-top">
                <div class="wcfc-subtotal">
                    <div class="wcfc-st-left">
                        <h2>Subtotal:</h2>
                    </div>
                    <div class="wcfc-st-right">
                        <span>$125</span>
                    </div>
                </div>

                <div class="wcfc-shipping-method">
                    <h2>Shipping method:</h2>
                    <div class="wcfc-shipping-wrapper">
                        <div class="wcfc-shipping-option">
                            <label for="wcfc-flat-rate">
                                <input type="radio" name="wcfc-shipping-option" id="wcfc-flat-rate" class="wcfc-radio__input" checked>
                                <div class="wcfc-radio__radio"></div>
                                Flat Rate
                            </label>
                            <label for="wcfc-local-pickup">
                                <input type="radio" name="wcfc-shipping-option" id="wcfc-local-pickup" class="wcfc-radio__input">
                                <div class="wcfc-radio__radio"></div>
                                Local Pickup
                            </label>

                        </div>
                        <div class="wcfc-shipping-rate">
                            <span>$125</span>
                        </div>
                    </div>
                </div>

                <div class="wcfc-apply-coupon">
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
                </div>

                <div class="wcfc-shipping-address">
                    <h2>Shipping address:</h2>
                    <p id="wcfc-address">4639 Hart Ridge Road, Saginaw, Michigan, 48603, 989-249-8309, USA.</p>
                </div>
            </div>

        </div>

        <div class="wcfc-menu-footer-bottom">
            <div class="wcfc-bottom-button">
                <a href="#" class="wcfc-shopping-btn">
                    <i class="fa-solid fa-cart-shopping"></i> Continue Shopping
                </a>
                <a href="#" class="wcfc-view-cart-btn">
                    <i class="fa-solid fa-cart-shopping"></i> View Cart
                </a>
                <a href="#" class="wcfc-checkout-btn">
                    <i class="fa-regular fa-credit-card"></i> Proceed To Checkout
                </a>
            </div>
        </div>


    </div>
    <button class="menu-button" id="open-button">Open Menu</button>

    <div class="content-wrap">

    </div>
</div><!-- /container -->