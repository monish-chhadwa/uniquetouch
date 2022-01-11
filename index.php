<?php
//Todo:This needs to be in autoload(as in single file before any file)
include_once 'config/autoload.php';
include_once 'html/header.php';
include_once 'html/products-carousel-printer.php';
?>
<style>
    @media (min-width: 900px) {/*968px was written in bootstrap and hence*/
        .imgmonish {
            height: 100vh;
        }
    }
</style>
<body>

<?php
define('PAGE', INDEX);
include_once 'html/nav-bar.php';
?>
<!-- END nav -->

<div class="hero-wrap">
    <div class="overlay"></div>
    <div class="container-fluid">
        <div class="slider-text d-md-flex align-items-center" data-scrollax-parent="true">

            <div class="one-forth ftco-animate align-self-md-center" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-4"> Best
                    <strong class="typewrite" data-period="4000" data-type='[ "imported Basins", "Designer Basins" ]'>
                        <span class="wrap"></span>
                    </strong>
                </h1>
                <p class="mb-md-5 mb-sm-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Uniqueness at
                    its best...</p>
                <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="#"
                                                                                      class="btn btn-primary px-4 py-3">Get
                        a Quote</a> <a href="about.php#section-counter" class="btn btn-primary btn-outline-primary px-4 py-3">Our Portfolio</a>
                </p>
            </div>
            <div class="one-half align-self-md-end align-self-sm-center">
                <div class="slider-carousel owl-carousel">
                    <div class="item">
                        <img src="images/ut/blue-graphic.jpg" class="img-fluid img" alt="">
                    </div>
                    <div class="item">
                        <img src="images/ut/products/9009/IMG_20211126_150316_Bokeh__01__01__01__01.jpg" class="img-fluid img" alt="">
                    </div>
                    <div class="item">
                        <img src="images/ut/products/9012%20egg%20series/IMG_20211126_153724_Bokeh__01__01__01.jpg" class="img-fluid img imgmonish" alt="">
                    </div>
                    <div class="item">
                        <img src="images/ut/products/9014/IMG_20211126_154526_Bokeh__01__01__01__01__01.jpg" class="img-fluid img imgmonish" alt="">
                    </div>
                    <div class="item">
                        <img src="images/ut/products/9088/Screenshot_20211008-015650__01.jpg" class="img-fluid img imgmonish" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<section class="ftco-section ftco-section-2">-->
<!--    <div class="overlay"></div>-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-8">-->
<!--                <h3 class="heading-white">We Provide High Quality Products</h3>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!---->
<!--<section class="ftco-section ftco-services">-->
<!--    <div class="container">-->
<!--        <div class="row justify-content-center mb-5 pb-5">-->
<!--            <div class="col-md-7 text-center heading-section ftco-animate">-->
<!--                <h2 class="mb-2">Our Service Keeps you Happy</h2>-->
<!--                <span class="subheading">Search Engine &amp; Social Media Optimization Experts</span>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="col-md-4 d-flex align-self-stretch ftco-animate">-->
<!--                <div class="media block-6 services d-block text-center">-->
<!--                    <div class="d-flex justify-content-center">-->
<!--                        <div class="icon"><span class="flaticon-research"></span></div>-->
<!--                    </div>-->
<!--                    <div class="media-body p-2 mt-3">-->
<!--                        <h3 class="heading">Market Research</h3>-->
<!--                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost-->
<!--                            unorthographic.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-4 d-flex align-self-stretch ftco-animate">-->
<!--                <div class="media block-6 services d-block text-center">-->
<!--                    <div class="d-flex justify-content-center">-->
<!--                        <div class="icon"><span class="flaticon-creativity"></span></div>-->
<!--                    </div>-->
<!--                    <div class="media-body p-2 mt-3">-->
<!--                        <h3 class="heading">Business Strategy</h3>-->
<!--                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost-->
<!--                            unorthographic.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-4 d-flex align-self-stretch ftco-animate">-->
<!--                <div class="media block-6 services d-block text-center">-->
<!--                    <div class="d-flex justify-content-center">-->
<!--                        <div class="icon"><span class="flaticon-market"></span></div>-->
<!--                    </div>-->
<!--                    <div class="media-body p-2 mt-3">-->
<!--                        <h3 class="heading">Audience Analytics</h3>-->
<!--                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost-->
<!--                            unorthographic.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="container-wrap mt-5">-->
<!--        <div class="row d-flex no-gutters">-->
<!--            <div class="col-md-6 img ftco-animate" style="background-image: url(images/about.jpg);">-->
<!--            </div>-->
<!--            <div class="col-md-6 d-flex">-->
<!--                <div class="services-wrap">-->
<!--                    <div class="heading-section mb-5 ftco-animate">-->
<!--                        <h2 class="mb-2">Our Service Keeps you Happy</h2>-->
<!--                        <span class="subheading">Search Engine &amp; Social Media Optimization Experts</span>-->
<!--                    </div>-->
<!--                    <div class="list-services d-flex ftco-animate">-->
<!--                        <div class="icon d-flex justify-content-center align-items-center">-->
<!--                            <span class="icon-pencil"></span>-->
<!--                        </div>-->
<!--                        <div class="text">-->
<!--                            <h3>Logo Branding</h3>-->
<!--                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,-->
<!--                                there live the blind texts.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="list-services d-flex ftco-animate">-->
<!--                        <div class="icon d-flex justify-content-center align-items-center">-->
<!--                            <span class="icon-web"></span>-->
<!--                        </div>-->
<!--                        <div class="text">-->
<!--                            <h3>Development</h3>-->
<!--                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,-->
<!--                                there live the blind texts.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="list-services d-flex ftco-animate">-->
<!--                        <div class="icon d-flex justify-content-center align-items-center">-->
<!--                            <span class="icon-pie-chart"></span>-->
<!--                        </div>-->
<!--                        <div class="text">-->
<!--                            <h3>Online Marketing</h3>-->
<!--                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,-->
<!--                                there live the blind texts.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!---->
<!--<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);"-->
<!--         data-stellar-background-ratio="0.5">-->
<!--    <div class="container">-->
<!--        <div class="row justify-content-center">-->
<!--            <div class="col-md-11">-->
<!--                <div class="row">-->
<!--                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">-->
<!--                        <div class="block-18 text-center">-->
<!--                            <div class="text">-->
<!--                                <strong class="number" data-number="6780">0</strong>-->
<!--                                <span>Happy Clients</span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">-->
<!--                        <div class="block-18 text-center">-->
<!--                            <div class="text">-->
<!--                                <strong class="number" data-number="4500">0</strong>-->
<!--                                <span>Running Projects</span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">-->
<!--                        <div class="block-18 text-center">-->
<!--                            <div class="text">-->
<!--                                <strong class="number" data-number="4200">0</strong>-->
<!--                                <span>Project Completed</span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">-->
<!--                        <div class="block-18 text-center">-->
<!--                            <div class="text">-->
<!--                                <strong class="number" data-number="320">0</strong>-->
<!--                                <span>Cups of Coffe</span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<section class="ftco-section ftco-work">
    <div class="container-fluid">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-2">Our Products</h2>
                <span class="subheading">We're Happy to launch our new Products</span>
            </div>
        </div>
        <div class="row">
            <?php
            Products::printProductLinks();
            ?>
<!--            <div class="col-md-4 ftco-animate">-->
<!--                <div class="work-entry">-->
<!--                    <a href="#" class="img" style="background-image: url(images/work-4.jpg);">-->
<!--                        <div class="text d-flex justify-content-center align-items-center">-->
<!--                            <div class="p-3">-->
<!--                                <span>Branding</span>-->
<!--                                <h3>Work 01</h3>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-4 ftco-animate">-->
<!--                <div class="work-entry">-->
<!--                    <a href="#" class="img" style="background-image: url(images/work-5.jpg);">-->
<!--                        <div class="text d-flex justify-content-center align-items-center">-->
<!--                            <div class="p-3">-->
<!--                                <span>Branding</span>-->
<!--                                <h3>Work 02</h3>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-4 ftco-animate">-->
<!--                <div class="work-entry">-->
<!--                    <a href="#" class="img" style="background-image: url(images/work-6.jpg);">-->
<!--                        <div class="text d-flex justify-content-center align-items-center">-->
<!--                            <div class="p-3">-->
<!--                                <span>Branding</span>-->
<!--                                <h3>Work 03</h3>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</section>


<section class="ftco-quote">
    <div class="container">
        <div class="row">
            <div class="col-md-6 pr-md-5 aside-stretch py-5 choose">
                <div class="heading-section heading-section-white mb-5 ftco-animate">
                    <h2 class="mb-2">Reasons for Choosing Us </h2>
                </div>
                <div class="ftco-animate">
                    <p>The products you use, define your class. We believe in 'B3' formula - Best Quality,
                        Best Price, Best Services. Our products are designed to give <b>Unique Touch</b> to your Ordinary needs
                        to make you feel Extra Ordinary.
                    </p>
                    <ul class="un-styled my-5">
                        <li><span class="icon-check"></span>Best Quality</li>
                        <li><span class="icon-check"></span>Best Pricing</li>
                        <li><span class="icon-check"></span>Best Services</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 py-5 pl-md-5">
                <div class="heading-section mb-5 ftco-animate">
                    <h2 class="mb-2">Get a Free Quote</h2>
                </div>
                <form action="#" class="ftco-animate">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Full Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Website">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="" id="" cols="30" rows="7" class="form-control"
                                          placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="Get a Quote" class="btn btn-primary py-3 px-5">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<?php
include_once 'html/testimony.php';
?>


<!--<section class="ftco-section-parallax">-->
<!--    <div class="parallax-img d-flex align-items-center">-->
<!--        <div class="container">-->
<!--            <div class="row d-flex justify-content-center">-->
<!--                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">-->
<!--                    <h2>Subcribe to our Newsletter</h2>-->
<!--                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there-->
<!--                        live the blind texts. Separated they live in</p>-->
<!--                    <div class="row d-flex justify-content-center mt-5">-->
<!--                        <div class="col-md-8">-->
<!--                            <form action="#" class="subscribe-form">-->
<!--                                <div class="form-group d-flex">-->
<!--                                    <input type="text" class="form-control" placeholder="Enter email address">-->
<!--                                    <input type="submit" value="Subscribe" class="submit px-3">-->
<!--                                </div>-->
<!--                            </form>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA17eCylHjg9WEI537e-eMRFhaoyEpdq8A&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>
