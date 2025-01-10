    

<?php
require_once 'include/navbar.php';
?>

<!-- Carousel Start -->
<div class="container-fluid mb-3">
    <div class="row px-xl-5">
        <div class="col-lg-8">
            <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#header-carousel" data-slide-to="1"></li>
                    <li data-target="#header-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item position-relative active" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="front/img/carousel-1.jpg" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">BEE</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item position-relative" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="front/img/product-2.jpg" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">QUEENS</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item position-relative" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="front/img/carousel-3.jpg" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">HONEEY</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->

<!-- Categories Start -->
<div class="container-fluid pt-5">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Categories</span></h2>
    <div class="row px-xl-5 pb-3">
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="bee.php">
                <div class="cat-item d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="front/img/cat-1.jpg" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>Bee</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="honey.php">
                <div class="cat-item img-zoom d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="front/img/product-6.jpg" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>Honey</h6>

                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="queen.php">
                <div class="cat-item img-zoom d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="front/img/product-3.jpg" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>Queen</h6>

                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- Categories End -->



<!-- Products Start -->
<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Products</span></h2>
    <div class="row px-xl-5">
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="front/img/product-1.jpg" alt="">
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">queen</a>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="front/img/product-5.jpg" alt="">
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Hony</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="front/img/cat-3.jpg" alt="">
                </div>
                <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">Bee</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Products End -->




















                <!-- Vendor Start -->
                <div class="container-fluid pt-5 pb-2">
                    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3"></span>About</span></h2>
                    <h1>My Name Khder Ahmed And Im Working In Bee since 2017 </h1>
                    <div class="container-fluid py-5">
                        <div class="row px-xl-5">
                            <div class="col">
                                <div class="owl-carousel vendor-carousel">
                                    <div class="bg-light p-4">
                                        <img src="front/img/vendor-1.jpg" alt="">
                                    </div>
                                    <div class="bg-light p-4">
                                        <img src="front/img/vendor-2.jpg" alt="">
                                    </div>
                                    <div class="bg-light p-4">
                                        <img src="front/img/vendor-3.jpg" alt="">
                                    </div>
                                    <div class="bg-light p-4">
                                        <img src="front/img/vendor-4.jpg" alt="">
                                    </div>
                                    <div class="bg-light p-4">
                                        <img src="front/img/vendor-5.jpg" alt="">
                                    </div>
                                    <div class="bg-light p-4">
                                        <img src="front/img/vendor-6.jpg" alt="">
                                    </div>
                                    <div class="bg-light p-4">
                                        <img src="front/img/vendor-7.jpg" alt="">
                                    </div>
                                    <div class="bg-light p-4">
                                        <img src="front/img/vendor-8.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Vendor End -->


<?php
require_once 'include/footer.php';
?>