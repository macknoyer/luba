
<?php include('templates/header.php');?>
    
    <!--====== PAGE BANNER PART START ======-->

    <section class="page-banner bg_cover" style="background-image: url(assets/images/header2.jpg)" data-overlay="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-content text-center">
                        <h2 class="page-title">Make an Appointment</h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Appointment</a></li>
                        </ul>
                    </div> <!-- page content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->
    
    <!--====== CONTACT PART START ======-->

    <section class="contact-page pt-80 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-form pt-20">
                        <form id="contact-form" action="assets/contact.php" method="post" data-toggle="validator">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-contact-form form-group">
                                        <input type="text" name="name" placeholder="Name" data-error="Name is required." required="required">
                                        <div class="help-block with-errors"></div>
                                        <i class="la la-user"></i>
                                    </div> <!-- single-contact-form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-contact-form form-group">
                                        <input type="email" name="email" placeholder="Email" data-error="Valid email is required." required="required">
                                        <div class="help-block with-errors"></div>
                                        <i class="la la-envelope"></i>
                                    </div> <!-- single-contact-form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-contact-form form-group">
                                        <div class="single-contact-select">
                                            <select name="" id="">
                                                <option value="">Position</option>
                                                <option value="">Position</option>
                                                <option value="">Position</option>
                                            </select>
                                        </div>
                                    </div> <!-- single-contact-form -->
                                </div>
                               <!--  <div class="col-md-6">
                                    <div class="single-contact-form form-group">
                                        <input type="text" name="subject" placeholder="Subject"  data-error="Subject is required." required="required">
                                        <div class="help-block with-errors"></div>
                                        <i class="la la-pencil"></i>
                                    </div>
                                </div> -->
                                <div class="col-md-6">
                                    <div class="single-contact-form form-group">
                                        <input type="text" name="phone" placeholder="Phone Number"  data-error="Phone is required." required="required">
                                        <div class="help-block with-errors"></div>
                                        <i class="la la-phone"></i>
                                    </div> <!-- single-contact-form -->
                                </div>
                                <div class="col-md-12">
                                    <div class="single-contact-form form-group">
                                        <textarea name="message" placeholder="Your Comment" data-error="Please,leave us a message." required="required"></textarea>
                                        <div class="help-block with-errors"></div>
                                        <i class="la la-pencil-alt"></i>
                                    </div> <!-- single-contact-form -->
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="single-contact-form form-group">
                                        <button type="submit" class="main-btn">Submit</button>
                                    </div> <!-- single-contact-form -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- contact-form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== DEPARTMENT PART START ======-->

    <section class="department-two-area pt-125 pb-130 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title text-center pb-25">
                        <h5 class="sub-title">Luba’s Home Care</h5>
                        <h3 class="title">What Services Does Our Home Care Agency in NYC Provide?</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-12 mb-30">
                    <p>Life is unpredictable – one day everything is fine and then you have to face challenges you didn’t expect. It can be old age creeping up on you or a sudden illness. In any case, people often don’t know when they might need New York home health care for daily activities – and this is when you need the best home care agencies in NYC.</p>
                    <p>Luba’s New York home health care, one of the best home health care agencies in NYC, serves all clients of all ages, from all walks of life. Our goal is to improve your everyday life and fill it with ease and comfort. Wherever you are, you can rely on our New York home care agency. Our private home care agency in NYC serves all five boroughs – Manhattan, Brooklyn, Queens, Staten Island, and The Bronx – so that no one will be left behind.</p>
                </div>
            </div>
        </div> <!-- container -->
    </section>
    <!--====== CONTACT PART ENDS ======-->
    
    <!--====== TESTIMONIAL PART START ======-->

<?php include('templates/testimonial.php');?>

    <!--====== TESTIMONIAL PART ENDS ======-->
    
    <!--====== DOCTOR PART START ======-->

<?php include('templates/team.php');?>

    <!--====== DOCTOR PART ENDS ======-->

<?php include('templates/footer.php');?>
