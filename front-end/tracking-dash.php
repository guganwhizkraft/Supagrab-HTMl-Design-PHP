<?php include_once 'templates/header.php'; ?>
<!-- section start -->
<section class="section-b-space tracking-page">
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
                            <li><a href="address-book-main.php">Address Book</a></li>
                            <li class="active"><a href="my-orders.php">My Orders</a></li>
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
                            <h2>Track Your Order <span class="add_link"><a href="my-orders.php" class="btn btn-solid">Back</a></span></h2>
                        </div>
                        <div class="welcome-msg">
                            <p>Hello, MARK JECNO !</p>                            
                        </div>
                        <div class="tracking-section">
                            <h4 class="mt-4 pb-2">status for order no: 54151548</h4>
                            <div class="row border-part">
                                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-3">
                                    <div class="product-detail">
                                        <img src="../assets/images/custom/20210424_141556-min.jpg" class="img-fluid  " alt="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-9 col-md-9 col-sm-9">
                                    <div class="tracking-detail">
                                        <ul>
                                            <li>
                                                <div class="left">
                                                    <span>Order name</span>
                                                </div>
                                                <div class="right">
                                                    <span>Slim Fit Dress</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="left">
                                                    <span>customer number</span>
                                                </div>
                                                <div class="right">
                                                    <span>54151548</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="left">
                                                    <span>order date</span>
                                                </div>
                                                <div class="right">
                                                    <span>20 Nov 2020</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="left">
                                                    <span>Ship Date</span>
                                                </div>
                                                <div class="right">
                                                    <span>20 Nov 2020</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="left">
                                                    <span>shipping address</span>
                                                </div>
                                                <div class="right">
                                                    <span>2253 Short Street Austin, TX Texas, 78701</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="left">
                                                    <span>carrier</span>
                                                </div>
                                                <div class="right">
                                                    <span>FedEx</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="left">
                                                    <span>carrier tracking number</span>
                                                </div>
                                                <div class="right">
                                                    <span>65697454151</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
                                    <div class="order-map">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55107.59629446948!2d-97.77629221286301!3d30.316123884942762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8644ca7d7a2a6d0d%3A0x209a4c2782a39461!2sCentral%20Market!5e0!3m2!1sen!2sin!4v1607754725548!5m2!1sen!2sin"
                                            frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="wrapper">
                                <div class="arrow-steps clearfix">
                                    <div class="step done"> <span> order placed</span> </div>
                                    <div class="step current"> <span>preparing to ship</span> </div>
                                    <div class="step"><span> shipped</span> </div>
                                    <div class="step"><span>delivered</span> </div>
                                </div>
                            </div>
                            <div class="order-table table-responsive-sm">
                                <table class="table mb-0 table-striped table-borderless">
                                    <thead class="">
                                        <tr>
                                            <th scope="col">Date</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Location</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>20 Nov 2020</td>
                                            <td>12.00 AM</td>
                                            <td>shipped</td>
                                            <td>california</td>
                                        </tr>
                                        <tr>
                                            <td>20 Nov 2020</td>
                                            <td>12.00 AM</td>
                                            <td>shipping info received</td>
                                            <td>california</td>
                                        </tr>
                                        <tr>
                                            <td>20 Nov 2020</td>
                                            <td>12.00 AM</td>
                                            <td>origin scan</td>
                                            <td>california</td>
                                        </tr>
                                        <tr>
                                            <td>20 Nov 2020</td>
                                            <td>12.00 AM</td>
                                            <td>shipping info received</td>
                                            <td>california</td>
                                        </tr>
                                    </tbody>
                                </table>
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