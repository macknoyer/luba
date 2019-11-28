
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
    
    

    <!--====== APPOINTMENT WORKING PART START ======-->

    <section class="appointment-working pt-80 pb-130 mt-130 mb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="appointment-area mt-45">
                        <div class="section-title section-title-two">
                            <h5 class="sub-title">Make an</h5>
                            <h3 class="title">Appointment</h3>
                        </div> <!-- section title -->
                        <div class="appointment-form mt-30">
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single-appointment-form">
                                            <input type="text" placeholder="Full Name">
                                        </div> <!-- single-appointment-form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-appointment-form">
                                            <input type="text" placeholder="Your Phone">
                                        </div> <!-- single-appointment-form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-appointment-form">
                                            <input id="datepicker" type="text" placeholder="MM/DD/YY">
                                        </div> <!-- single-appointment-form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-appointment-form">
                                            <select>
                                                <option value="0">Services</option>
                                                <option value="1">Home Health Care</option>
                                                <option value="2">Housekeeping</option>
                                                <option value="3">Medical Social</option>
                                                <option value="4">Nursing</option>
                                                <option value="5">Physical Therapy</option>
                                                <option value="6">Speech Therapy</option>
                                            </select>
                                        </div> <!-- single-appointment-form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-appointment-form">
                                            <button class="main-btn main-btn-2">Submit Now</button>
                                        </div> <!-- single-appointment-form -->
                                    </div>
                                </div> <!-- row -->
                            </form>
                        </div> <!-- appointment form -->
                    </div> <!-- appointment area -->
                </div>
                <div class="col-lg-6">
                    <div class="working-area mt-45">
                        <div class="section-title section-title-two">
                            <h5 class="sub-title">DISCOVER</h5>
                            <h3 class="title">Working Time</h3>
                        </div> <!-- section title -->
                        <div class="working-content mt-20">
                            <div class="single-work-time d-sm-flex justify-content-between">
                                <p>Monday – Friday <span class="time">8.00 – 17.00</span></p>
                                <p>Saturday 9.30 – 17.30</p>
                            </div> <!-- single work time -->
                            <div class="single-work-time d-sm-flex justify-content-between">
                                <p>Sunday <span class="closed">CLOSED</span></p>
                                <p class="number"><i class="lni-phone-handset"></i> 987 654 3216</p>
                            </div> <!-- single work time -->
                            <div class="single-work-time">
                                <a class="main-btn" href="#">time table</a>
                            </div> <!-- single work time -->
                        </div>
                    </div> <!-- working area -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== APPOINTMENT WORKING PART ENDS ======-->

    <!--====== CALL TO ACTION PART START ======-->

    <section class="call-action-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="call-action d-lg-flex justify-content-between align-items-center">
                        <div class="action-content">
                            <h3 class="action-title">Don’t hasitate to contact us!</h3>
                            <p class="text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem.</p>
                        </div> <!-- action content -->
                        <div class="action-btn">
                            <a class="main-btn" href="#">get appointment</a>
                        </div> <!-- action btn -->
                    </div> <!-- call action -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CALL TO ACTION PART ENDS ======-->

<?php include('templates/footer.php');?>
