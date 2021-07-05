<?php include_once 'templates/header.php'; ?>
<!-- section start -->
<section class="section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="account-sidebar"><a class="popup-btn">my account</a></div>
                <div class="dashboard-left">
                    <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left"
                                                                                     aria-hidden="true"></i> back</span></div>
                    <div class="block-content">
                        <ul>
                            <li class="active"><a href="dashboard.php">Account Info</a></li>
                            <li><a href="address-book-main.php">Address Book</a></li>
                            <li><a href="my-orders.php">My Orders</a></li>
                            <li><a href="wishlist.php">My Wishlist</a></li>
                            <li class="last"><a href="#">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="dashboard-right">
                    <div class="dashboard acc_info_sec">
						<div class="page-title">
                            <h2>Account Info</h2>
                        </div>
						<div class="welcome-msg">
                            <p>Hello, MARK JECNO !</p>                           
                        </div>
                        <form class="theme-form">
                            <div class="form-row row">
                                <div class="col-md-6 pb-3">
                                    <label for="name">First Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter Your name"
                                           required="" value="MARK JECNO">
                                           <span class="error_span" aria-hidden="true">The field is required.</span>
                                </div>
                                <div class="col-md-6 pb-3">
                                    <label for="email">Last Name</label>
                                    <input type="text" class="form-control" id="last-name" placeholder="Email" required="" value="MARk-JECNO@gmail.com">
                                </div>
                                <div class="col-md-6">
                                    <label for="review">Phone number</label>
                                    <input type="text" class="form-control" id="review" placeholder="Enter your number"
                                           required="" value="09876543210">
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" value="testttt@gmail.com" id="email" placeholder="Email" required="">
                                </div>   
                                 <div class="col-md-12">
                                    <button class="btn btn-sm btn-solid mt-4" type="submit">Save setting</button>
                                </div>                     
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section end -->
<?php include_once 'templates/footer.php'; ?>