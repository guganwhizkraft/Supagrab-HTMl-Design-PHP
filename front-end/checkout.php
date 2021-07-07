<?php include_once 'templates/header.php'; ?>
<!-- section start -->
<section class="section-b-space">
    <div class="container">
        <div class="checkout-page">
            <div class="checkout-form">
                <form>
                    <div class="row">
                        <div class="col-lg-7 col-sm-12 col-xs-12">
                            <div class="checkout-title">
                                <h3>Billing Details</h3>
                            </div>
                            <div class="row check-out">
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">First Name</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Last Name</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Phone</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Email Address</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Country</div>
                                    <select>
                                        <option>India</option>
                                        <option>South Africa</option>
                                        <option>United State</option>
                                        <option>Australia</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Address</div>
                                    <input type="text" name="field-name" value="" placeholder="Street address">
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Town/City</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                    <div class="field-label">State / County</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                    <div class="field-label">Postal Code</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="checkbox" name="shipping-option" id="account-option"> &ensp;
                                    <label for="account-option">Create An Account?</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-12 col-xs-12">
                            <div class="apply_code_sec">
                                <h2><img src="../assets/images/custom/price_tag.png" class="img-fluid">Apply Coupon</h2>
                                <div class="coupon_toogle">
                                    <div class="coupon ">
                                        <label for="coupon_code"></label>
                                        <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code">
                                        <button type="submit" class="btn-solid btn" name="apply_coupon" value="APPLY">APPLY</button>
                                    </div>
                                </div>
                            </div>

                            <div class="checkout-details">
                                <div class="order-box">
                                    <div class="title-box">
                                        <div>Product <span>Total</span></div>
                                    </div>
                                    <ul class="qty">
                                        <li>Pink Slim Shirt × 1 <span>$25.10</span></li>
                                        <li>SLim Fit Jeans × 1 <span>$555.00</span></li>
                                    </ul>
                                    <ul class="sub-total">
                                        <li>Subtotal <span class="count">$380.10</span></li>
                                        <li>Shipping
                                            <div class="shipping">
                                                <div class="shopping-option">
                                                    <input type="checkbox" name="free-shipping" id="free-shipping">
                                                    <label for="free-shipping">Free Shipping</label>
                                                </div>
                                                <div class="shopping-option">
                                                    <input type="checkbox" name="local-pickup" id="local-pickup">
                                                    <label for="local-pickup">Local Pickup</label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="total">
                                        <li>Total <span class="count">$620.00</span></li>
                                    </ul>
                                </div>
                                <div class="payment-box">
                                    <div class="upper-box">
                                        <div class="payment-options">
                                            <ul>
                                                <li>
                                                    <div class="radio-option">
                                                        <input type="radio" name="payment-group" id="payment-1"
                                                               checked="checked">
                                                        <label for="payment-1">Check Payments<span
                                                                class="small-text">Please send a check to Store
                                                                Name, Store Street, Store Town, Store State /
                                                                County, Store Postcode.</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio-option">
                                                        <input type="radio" name="payment-group" id="payment-2">
                                                        <label for="payment-2">Cash On Delivery<span
                                                                class="small-text">Please send a check to Store
                                                                Name, Store Street, Store Town, Store State /
                                                                County, Store Postcode.</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio-option paypal">
                                                        <input type="radio" name="payment-group" id="payment-3">
                                                        <label for="payment-3">PayPal<span class="image"><img
                                                                    src="../assets/images/paypal.png"
                                                                    alt=""></span></label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text-end"><a href="order-success.php" class="btn-solid btn">Place Order</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- section end -->

<?php include_once 'templates/footer.php'; ?>