<?php include_once 'templates/header.php'; ?>
<!-- personal deatail section start -->
<section class="contact-page register-page profile_pg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>PERSONAL DETAIL</h3>
                <form class="theme-form imm-grayfrm_box">
                    <div class="form-row row">
                        <div class="col-md-6">
                            <label for="name">First Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Your name"
                                   required="">
                        </div>
                        <div class="col-md-6">
                            <label for="email">Last Name</label>
                            <input type="text" class="form-control" id="last-name" placeholder="Email" required="">
                        </div>
                        <div class="col-md-6">
                            <label for="review">Phone number</label>
                            <input type="text" class="form-control" id="review" placeholder="Enter your number"
                                   required="">
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Email" required="">
                        </div>
                        <div class="col-md-12">
                            <label for="review">Write Your Message</label>
                            <textarea class="form-control mb-0" placeholder="Write Your Message"
                                      id="exampleFormControlTextarea1" rows="6"></textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->


<!-- address section start -->
<section class="contact-page register-page section-b-space profile_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>SHIPPING ADDRESS</h3>
                <form class="theme-form imm-grayfrm_box">
                    <div class="form-row row">
                        <div class="col-md-6">
                            <label for="name">flat / plot</label>
                            <input type="text" class="form-control" id="home-ploat" placeholder="company name"
                                   required="">
                        </div>
                        <div class="col-md-6">
                            <label for="name">Address *</label>
                            <input type="text" class="form-control" id="address-two" placeholder="Address"
                                   required="">
                        </div>
                        <div class="col-md-6">
                            <label for="email">Zip Code *</label>
                            <input type="text" class="form-control" id="zip-code" placeholder="zip-code"
                                   required="">
                        </div>
                        <div class="col-md-6 select_input">
                            <label for="review">Country *</label>
                            <select class="form-control" size="1">
                                <option value="India">India</option>
                                <option value="UAE">UAE</option>
                                <option value="U.K">U.K</option>
                                <option value="US">US</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="review">City *</label>
                            <input type="text" class="form-control" id="city" placeholder="City" required="">
                        </div>
                        <div class="col-md-6">
                            <label for="review">Region/State *</label>
                            <input type="text" class="form-control" id="region-state" placeholder="Region/state"
                                   required="">
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-sm btn-solid" type="submit">Save setting</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->

<?php include_once 'templates/footer.php'; ?>