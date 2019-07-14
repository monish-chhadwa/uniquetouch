<?php
//Todo:This needs to be in autoload
include_once 'config/autoload.php';
include_once 'html/header.php';
include_once 'html/products-carousel-printer.php';
$form = Forms::getForm(['name', 'email', 'mobile', 'quantity', 'readonly']);
?>
<style>
    .productenquiry {
        /*background: #e8fbf9;*/
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        content: '';
        text-align: center;
        opacity: 0;
        -moz-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        -webkit-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
    .item:hover .productenquiry,.item:focus .productenquiry {
        opacity: 1;
    }
</style>
<script>
    function sendProductEnquiry(productId) {
        var productIdElem = $('#readonly');
        productIdElem.attr('placeholder', 'Sending enquiry for product: '+productId);
        productIdElem.val(productId);
    }
</script>
<?php echo $form['css']; ?>
<body>

<?php
define('PAGE', PRODUCTS);
include_once 'html/nav-bar.php';
?>
<!-- END nav -->

<div class="hero-wrap hero-wrap-2" style="background-image: url(images/ut/net/slide-01-1.jpg);"
     data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container-fluid">
        <div class="row no-gutters d-flex slider-text align-items-center justify-content-center"
             data-scrollax-parent="true">
            <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <!--          	<p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>Services</span></p>-->
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Products</h1>
                <h6>Click/Hover on the product to send an enquiry</h6>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-services">
    <div class="container" id="basins">
        <?php
        Products::printProductCarousels();
        ?>

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
    </div>
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
</section>


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

<?php
include_once 'html/modal.php';
?>

<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<?php echo $form['js']?>
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