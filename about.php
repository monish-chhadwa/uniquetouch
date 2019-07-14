<?php
//Todo:This needs to be in autoload
include_once 'config/autoload.php';
include_once 'html/header.php';
?>
<body>

<?php
define('PAGE', ABOUT);
include_once 'html/nav-bar.php';
?>
<!-- END nav -->

<div class="hero-wrap hero-wrap-2" style="background-image: url(images/bg_2.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container-fluid">
        <div class="row no-gutters d-flex slider-text align-items-center justify-content-center"
             data-scrollax-parent="true">
            <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
<!--                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span-->
<!--                            class="mr-2"><a href="index.php">Home</a></span> <span>About</span></p>-->
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">About Us</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);"
         data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="row">
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="6780">0</strong>
                                <span>Happy Clients</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="4500">0</strong>
                                <span>Running Projects</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="4200">0</strong>
                                <span>Project Completed</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="320">0</strong>
                                <span>Cups of Coffe</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section">
    <div class="container">
        <div class="row d-md-flex">
            <div class="col-md-6 ftco-animate img about-image" style="background-image: url(images/about.jpg);">
            </div>
            <div class="col-md-6 ftco-animate p-md-5">
                <div class="row">
                    <div class="col-md-12 nav-link-wrap mb-5">
                        <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist"
                             aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-whatwedo-tab" data-toggle="pill"
                               href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo"
                               aria-selected="true">What we do</a>

                            <a class="nav-link" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission"
                               role="tab" aria-controls="v-pills-mission" aria-selected="false">Our mission</a>

                            <a class="nav-link" id="v-pills-goal-tab" data-toggle="pill" href="#v-pills-goal" role="tab"
                               aria-controls="v-pills-goal" aria-selected="false">Our goal</a>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex align-items-center">

                        <div class="tab-content ftco-animate" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel"
                                 aria-labelledby="v-pills-whatwedo-tab">
                                <div>
                                    <h2 class="mb-4">We Offer High Quality Services</h2>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts. Separated they live in Bookmarksgrove
                                        right at the coast of the Semantics, a large language ocean.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate,
                                        quibusdam sunt iste dolores consequatur</p>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-mission" role="tabpanel"
                                 aria-labelledby="v-pills-mission-tab">
                                <div>
                                    <h2 class="mb-4">Exceptional Web Solutions</h2>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts. Separated they live in Bookmarksgrove
                                        right at the coast of the Semantics, a large language ocean.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate,
                                        quibusdam sunt iste dolores consequatur</p>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-goal" role="tabpanel"
                                 aria-labelledby="v-pills-goal-tab">
                                <div>
                                    <h2 class="mb-4">Help Our Customer</h2>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts. Separated they live in Bookmarksgrove
                                        right at the coast of the Semantics, a large language ocean.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate,
                                        quibusdam sunt iste dolores consequatur</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
include_once 'html/testimony.php';
?>


<?php
include_once 'html/footer.php';
?>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>

<!-- Modal -->
<div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalRequestLabel">Request a Quote</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="form-group">
                        <!-- <label for="appointment_name" class="text-black">Full Name</label> -->
                        <input type="text" class="form-control" id="appointment_name" placeholder="Full Name">
                    </div>
                    <div class="form-group">
                        <!-- <label for="appointment_email" class="text-black">Email</label> -->
                        <input type="text" class="form-control" id="appointment_email" placeholder="Email">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- <label for="appointment_date" class="text-black">Date</label> -->
                                <input type="text" class="form-control" id="appointment_date" placeholder="Date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- <label for="appointment_time" class="text-black">Time</label> -->
                                <input type="text" class="form-control" id="appointment_time" placeholder="Time">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <!-- <label for="appointment_message" class="text-black">Message</label> -->
                        <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10"
                                  placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Get a Quote" class="btn btn-primary">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>