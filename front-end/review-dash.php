<?php include_once 'templates/header.php'; ?>
<!-- section start -->
<section class="section-b-space my_orders_pg">
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
                            <li><a href="address-book.php">Address Book</a></li>
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
                            <h2>Write Review <span class="add_link"><a href="my-orders.php" class="btn btn-solid">Back</a></span></h2>
                        </div>
                        <div class="welcome-msg">
                            <p>Hello, MARK JECNO !</p>                            
                        </div>
						<div class="product-order mt-4 review_prod_list">
							<div class="row product-order-detail">																
								<div class="col-sm-12 col-md-12 order_detail">
								<div class="revi-pro-img">
										<a href="product-page(left-image).php"><img src="../assets/images/custom/20210414_201442-min.jpg" alt="olive"></a>										
									</div>
									<div class="revi-pro-name">
										<h5>Beautiful Swarovski Stud Earrings</h5>
									</div>								
									<div class="revi-price">
										<h5>$500 <del>$600</del></h5>										
									</div>								
									<div class="revi-quan">										
										<h5>Quantity - 5</h5>
									</div>
								</div>								
							</div>						
						</div>
                        <div class="review_section imm-grayfrm_box">							
							<form class="theme-form">
								<div class="col-md-12">
									<div class="media">
										<label>Rating</label>
										<div class="media-body ms-3">
											<div class="rating three-star"><i class="fa fa-star"></i> <i
													class="fa fa-star"></i> <i class="fa fa-star"></i> <i
													class="fa fa-star"></i> <i class="fa fa-star"></i></div>
										</div>
									</div>
								</div>	
								<div class="form-row row">																	
									<div class="col-md-12">
										<label for="review">Review Title</label>
										<input type="text" class="form-control" id="review"
											placeholder="Enter your Review Subjects" required>
									</div>
									<div class="col-md-12">
										<label for="review">Review Title</label>
										<textarea class="form-control" placeholder="Wrire Your Testimonial Here"
												id="exampleFormControlTextarea1" rows="6"></textarea>
									</div>
									<div class="col-md-12">
										<button class="btn btn-solid mt-4" type="submit">Submit YOur
											Review</button>
									</div>
								</div>
							</form>										
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section end -->
<?php include_once 'templates/footer.php'; ?>