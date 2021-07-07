<?php include_once 'templates/header.php'; ?>
<!-- section start -->
<section class="section-b-space address_book_pg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="account-sidebar"><a class="popup-btn">my account</a></div>
                <div class="dashboard-left">
                    <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left"
                                                                                     aria-hidden="true"></i> back</span></div>
                    <div class="block-content">
                        <ul>
                            <li><a href="dashboard.php">Account Info</a></li>
                            <li class="active"><a href="address-book-main.php">Address Book</a></li>
                            <li><a href="my-orders.php">My Orders</a></li>
                            <li><a href="wishlist-dashboard.php">My Wishlist</a></li>
                            <li class="last"><a href="#">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="dashboard-right">
                    <div class="dashboard">
                        <div class="page-title">
                            <h2>Address Book</h2>
                        </div>
                        <div class="welcome-msg">
                            <p>Hello, MARK JECNO !</p>                           
                        </div>
                        <div class="address-book_sec">                            
                            <div class="shippingaddress-changes imm-grayfrm_box">
                                <form class="theme-form">
                                    <div class="form-row row">
                                        <div class="col-md-12">
                                            <h4>New Address</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="name">Flat/Plot</label>
                                            <input type="text" class="form-control" id="home-ploat" placeholder="Company Name" required="">
                                            <span class="error_span" aria-hidden="true">The field is required.</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="name">Address *</label>
                                            <input type="text" class="form-control" id="address-two" placeholder="Address" required="">
                                            <span class="error_span" aria-hidden="true">The field is required.</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="email">Zip Code *</label>
                                            <input type="text" class="form-control" id="zip-code" placeholder="Zip Code" required="">
                                            <span class="error_span" aria-hidden="true">The field is required.</span>
                                        </div>
                                        <div class="col-md-6 select_input">
                                            <label for="review">Country *</label>
                                            <select class="form-control" size="1">
                                                <option value="India">India</option>
                                                <option value="UAE">UAE</option>
                                                <option value="U.K">U.K</option>
                                                <option value="US">US</option>
                                            </select>
                                            <span class="error_span" aria-hidden="true">The field is required.</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="review">City *</label>
                                            <input type="text" class="form-control" id="city" placeholder="City" required="">
                                            <span class="error_span" aria-hidden="true">The field is required.</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="review">Region/State *</label>
                                            <input type="text" class="form-control" id="region-state" placeholder="Region/State" required="">
                                            <span class="error_span" aria-hidden="true">The field is required.</span>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="mt-4 btn btn-sm btn-solid" type="submit">Save setting</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section end -->
<?php include_once 'templates/footer.php'; ?>