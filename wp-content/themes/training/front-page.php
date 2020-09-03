<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package training
 */

get_header();
?>
    <div class="body-content outer-top-xs" id="top-banner-and-menu">
        <div class="container">
            <div class="row">
                <!-- ============================================== SIDEBAR ============================================== -->

                <!-- /.sidemenu-holder -->
                <!-- ============================================== SIDEBAR : END ============================================== -->

                <!-- ============================================== CONTENT ============================================== -->
                <div class="col-xs-12 col-sm-12 col-md-12 homebanner-holder">
                    <!-- ========================================== SECTION – HERO ========================================= -->

                    <div id="hero">
                        <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                            <div class="item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/sliders/01.jpg);">
                                <div class="container-fluid">
                                    <div class="caption bg-color vertical-center text-left">
                                        <div class="slider-header fadeInDown-1">Top Brands</div>
                                        <div class="big-text fadeInDown-1"> New Collections</div>
                                        <div class="excerpt fadeInDown-2 hidden-xs"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                                        </div>
                                        <div class="button-holder fadeInDown-3"><a href="index.php?page=single-product"
                                                                                   class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop
                                                Now</a></div>
                                    </div>
                                    <!-- /.caption -->
                                </div>
                                <!-- /.container-fluid -->
                            </div>
                            <!-- /.item -->

                            <div class="item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/sliders/02.jpg);">
                                <div class="container-fluid">
                                    <div class="caption bg-color vertical-center text-left">
                                        <div class="slider-header fadeInDown-1">Spring 2016</div>
                                        <div class="big-text fadeInDown-1"> Women <span class="highlight">Fashion</span>
                                        </div>
                                        <div class="excerpt fadeInDown-2 hidden-xs"><span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</span>
                                        </div>
                                        <div class="button-holder fadeInDown-3"><a href="index.php?page=single-product"
                                                                                   class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop
                                                Now</a></div>
                                    </div>
                                    <!-- /.caption -->
                                </div>
                                <!-- /.container-fluid -->
                            </div>
                            <!-- /.item -->

                        </div>
                        <!-- /.owl-carousel -->
                    </div>

                    <!-- ========================================= SECTION – HERO : END ========================================= -->

                    <!-- ============================================== INFO BOXES ============================================== -->
                    <div class="info-boxes wow fadeInUp">
                        <div class="info-boxes-inner">
                            <div class="row">
                                <div class="col-md-6 col-sm-4 col-lg-4">
                                    <div class="info-box">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <h4 class="info-box-heading green">money back</h4>
                                            </div>
                                        </div>
                                        <h6 class="text">30 Days Money Back Guarantee</h6>
                                    </div>
                                </div>
                                <!-- .col -->

                                <div class="hidden-md col-sm-4 col-lg-4">
                                    <div class="info-box">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <h4 class="info-box-heading green">free shipping</h4>
                                            </div>
                                        </div>
                                        <h6 class="text">Shipping on orders over $99</h6>
                                    </div>
                                </div>
                                <!-- .col -->

                                <div class="col-md-6 col-sm-4 col-lg-4">
                                    <div class="info-box">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <h4 class="info-box-heading green">Special Sale</h4>
                                            </div>
                                        </div>
                                        <h6 class="text">Extra $5 off on all items </h6>
                                    </div>
                                </div>
                                <!-- .col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.info-boxes-inner -->

                    </div>
                    <!-- /.info-boxes -->
                    <!-- ============================================== INFO BOXES : END ============================================== -->
                    <!-- ============================================== SCROLL TABS ============================================== -->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs animated"
                                 style="visibility: visible; animation-name: fadeInUp;">
                                <h3 class="section-title">hot deals</h3>
                                <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss"
                                     style="opacity: 1; display: block;">

                                    <div class="owl-wrapper-outer">
                                        <div class="owl-wrapper" style="width: 1338px; left: 0px; display: block;">
                                            <div class="owl-item" style="width: 223px;">
                                                <div class="item">
                                                    <div class="products">
                                                        <div class="hot-deal-wrapper">
                                                            <div class="image">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hot-deals/p25.jpg" alt="">
                                                            </div>
                                                            <div class="sale-offer-tag"><span>49%<br>off</span></div>
                                                            <div class="timing-wrapper">
                                                                <div class="box-wrapper">
                                                                    <div class="date box">
                                                                        <span class="key">120</span>
                                                                        <span class="value">DAYS</span>
                                                                    </div>
                                                                </div>

                                                                <div class="box-wrapper">
                                                                    <div class="hour box">
                                                                        <span class="key">20</span>
                                                                        <span class="value">HRS</span>
                                                                    </div>
                                                                </div>

                                                                <div class="box-wrapper">
                                                                    <div class="minutes box">
                                                                        <span class="key">36</span>
                                                                        <span class="value">MINS</span>
                                                                    </div>
                                                                </div>

                                                                <div class="box-wrapper hidden-md">
                                                                    <div class="seconds box">
                                                                        <span class="key">60</span>
                                                                        <span class="value">SEC</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.hot-deal-wrapper -->

                                                        <div class="product-info text-left m-t-20">
                                                            <h3 class="name"><a href="detail.html">Floral Print
                                                                    Buttoned</a></h3>
                                                            <div class="rating rateit-small rateit">
                                                                <button id="rateit-reset-2" data-role="none"
                                                                        class="rateit-reset" aria-label="reset rating"
                                                                        aria-controls="rateit-range-2"
                                                                        style="display: none;"></button>
                                                                <div id="rateit-range-2" class="rateit-range"
                                                                     tabindex="0" role="slider" aria-label="rating"
                                                                     aria-owns="rateit-reset-2" aria-valuemin="0"
                                                                     aria-valuemax="5" aria-valuenow="4"
                                                                     aria-readonly="true"
                                                                     style="width: 70px; height: 14px;">
                                                                    <div class="rateit-selected"
                                                                         style="height: 14px; width: 56px;"></div>
                                                                    <div class="rateit-hover" style="height:14px"></div>
                                                                </div>
                                                            </div>

                                                            <div class="product-price">
								<span class="price">
									$600.00
								</span>

                                                                <span class="price-before-discount">$800.00</span>

                                                            </div><!-- /.product-price -->

                                                        </div><!-- /.product-info -->

                                                        <div class="cart clearfix animate-effect">
                                                            <div class="action">

                                                                <div class="add-cart-button btn-group">
                                                                    <button class="btn btn-primary icon"
                                                                            data-toggle="dropdown" type="button">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </button>
                                                                    <button class="btn btn-primary cart-btn"
                                                                            type="button">Add to cart
                                                                    </button>

                                                                </div>

                                                            </div><!-- /.action -->
                                                        </div><!-- /.cart -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 223px;">
                                                <div class="item">
                                                    <div class="products">
                                                        <div class="hot-deal-wrapper">
                                                            <div class="image">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hot-deals/p5.jpg" alt="">
                                                            </div>
                                                            <div class="sale-offer-tag"><span>35%<br>off</span></div>
                                                            <div class="timing-wrapper">
                                                                <div class="box-wrapper">
                                                                    <div class="date box">
                                                                        <span class="key">120</span>
                                                                        <span class="value">Days</span>
                                                                    </div>
                                                                </div>

                                                                <div class="box-wrapper">
                                                                    <div class="hour box">
                                                                        <span class="key">20</span>
                                                                        <span class="value">HRS</span>
                                                                    </div>
                                                                </div>

                                                                <div class="box-wrapper">
                                                                    <div class="minutes box">
                                                                        <span class="key">36</span>
                                                                        <span class="value">MINS</span>
                                                                    </div>
                                                                </div>

                                                                <div class="box-wrapper hidden-md">
                                                                    <div class="seconds box">
                                                                        <span class="key">60</span>
                                                                        <span class="value">SEC</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.hot-deal-wrapper -->

                                                        <div class="product-info text-left m-t-20">
                                                            <h3 class="name"><a href="detail.html">Floral Print
                                                                    Buttoned</a></h3>
                                                            <div class="rating rateit-small rateit">
                                                                <button id="rateit-reset-3" data-role="none"
                                                                        class="rateit-reset" aria-label="reset rating"
                                                                        aria-controls="rateit-range-3"
                                                                        style="display: none;"></button>
                                                                <div id="rateit-range-3" class="rateit-range"
                                                                     tabindex="0" role="slider" aria-label="rating"
                                                                     aria-owns="rateit-reset-3" aria-valuemin="0"
                                                                     aria-valuemax="5" aria-valuenow="4"
                                                                     aria-readonly="true"
                                                                     style="width: 70px; height: 14px;">
                                                                    <div class="rateit-selected"
                                                                         style="height: 14px; width: 56px;"></div>
                                                                    <div class="rateit-hover" style="height:14px"></div>
                                                                </div>
                                                            </div>

                                                            <div class="product-price">
								<span class="price">
									$600.00
								</span>

                                                                <span class="price-before-discount">$800.00</span>

                                                            </div><!-- /.product-price -->

                                                        </div><!-- /.product-info -->

                                                        <div class="cart clearfix animate-effect">
                                                            <div class="action">

                                                                <div class="add-cart-button btn-group">
                                                                    <button class="btn btn-primary icon"
                                                                            data-toggle="dropdown" type="button">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </button>
                                                                    <button class="btn btn-primary cart-btn"
                                                                            type="button">Add to cart
                                                                    </button>

                                                                </div>

                                                            </div><!-- /.action -->
                                                        </div><!-- /.cart -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 223px;">
                                                <div class="item">
                                                    <div class="products">
                                                        <div class="hot-deal-wrapper">
                                                            <div class="image">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hot-deals/p10.jpg" alt="">
                                                            </div>
                                                            <div class="sale-offer-tag"><span>35%<br>off</span></div>
                                                            <div class="timing-wrapper">
                                                                <div class="box-wrapper">
                                                                    <div class="date box">
                                                                        <span class="key">120</span>
                                                                        <span class="value">Days</span>
                                                                    </div>
                                                                </div>

                                                                <div class="box-wrapper">
                                                                    <div class="hour box">
                                                                        <span class="key">20</span>
                                                                        <span class="value">HRS</span>
                                                                    </div>
                                                                </div>

                                                                <div class="box-wrapper">
                                                                    <div class="minutes box">
                                                                        <span class="key">36</span>
                                                                        <span class="value">MINS</span>
                                                                    </div>
                                                                </div>

                                                                <div class="box-wrapper hidden-md">
                                                                    <div class="seconds box">
                                                                        <span class="key">60</span>
                                                                        <span class="value">SEC</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.hot-deal-wrapper -->

                                                        <div class="product-info text-left m-t-20">
                                                            <h3 class="name"><a href="detail.html">Floral Print
                                                                    Buttoned</a></h3>
                                                            <div class="rating rateit-small rateit">
                                                                <button id="rateit-reset-4" data-role="none"
                                                                        class="rateit-reset" aria-label="reset rating"
                                                                        aria-controls="rateit-range-4"
                                                                        style="display: none;"></button>
                                                                <div id="rateit-range-4" class="rateit-range"
                                                                     tabindex="0" role="slider" aria-label="rating"
                                                                     aria-owns="rateit-reset-4" aria-valuemin="0"
                                                                     aria-valuemax="5" aria-valuenow="4"
                                                                     aria-readonly="true"
                                                                     style="width: 70px; height: 14px;">
                                                                    <div class="rateit-selected"
                                                                         style="height: 14px; width: 56px;"></div>
                                                                    <div class="rateit-hover" style="height:14px"></div>
                                                                </div>
                                                            </div>

                                                            <div class="product-price">
								<span class="price">
									$600.00
								</span>

                                                                <span class="price-before-discount">$800.00</span>

                                                            </div><!-- /.product-price -->

                                                        </div><!-- /.product-info -->

                                                        <div class="cart clearfix animate-effect">
                                                            <div class="action">

                                                                <div class="add-cart-button btn-group">
                                                                    <button class="btn btn-primary icon"
                                                                            data-toggle="dropdown" type="button">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </button>
                                                                    <button class="btn btn-primary cart-btn"
                                                                            type="button">Add to cart
                                                                    </button>

                                                                </div>

                                                            </div><!-- /.action -->
                                                        </div><!-- /.cart -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="owl-controls clickable">
                                        <div class="owl-buttons">
                                            <div class="owl-prev"></div>
                                            <div class="owl-next"></div>
                                        </div>
                                    </div>
                                </div><!-- /.sidebar-widget -->
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
                                <div class="more-info-tab clearfix ">
                                    <h3 class="new-product-title pull-left">New Products</h3>
                                    <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
                                        <li class="active"><a data-transition-type="backSlide" href="#all"
                                                              data-toggle="tab">All</a></li>
                                        <li><a data-transition-type="backSlide" href="#smartphone" data-toggle="tab">Clothing</a>
                                        </li>
                                        <li><a data-transition-type="backSlide" href="#laptop" data-toggle="tab">Electronics</a>
                                        </li>
                                        <li><a data-transition-type="backSlide" href="#apple"
                                               data-toggle="tab">Shoes</a></li>
                                    </ul>
                                    <!-- /.nav-tabs -->
                                </div>
                                <div class="tab-content outer-top-xs">
                                    <div class="tab-pane in active" id="all">
                                        <div class="product-slider">
                                            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme"
                                                 data-item="3">
                                                <div class="item item-carousel">
                                                    <div class="products">
                                                        <div class="product">
                                                            <div class="product-image">
                                                                <div class="image"><a href="detail.html"><img
                                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p1.jpg"
                                                                                alt=""></a></div>
                                                                <!-- /.image -->

                                                                <div class="tag new"><span>new</span></div>
                                                            </div>
                                                            <!-- /.product-image -->

                                                            <div class="product-info text-left">
                                                                <h3 class="name"><a href="detail.html">Floral Print
                                                                        Buttoned</a></h3>
                                                                <div class="rating rateit-small"></div>
                                                                <div class="description"></div>
                                                                <div class="product-price"><span
                                                                            class="price"> $450.99 </span> <span
                                                                            class="price-before-discount">$ 800</span>
                                                                </div>
                                                                <!-- /.product-price -->

                                                            </div>
                                                            <!-- /.product-info -->
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button data-toggle="tooltip"
                                                                                    class="btn btn-primary icon"
                                                                                    type="button" title="Add Cart"><i
                                                                                        class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                    type="button">Add to cart
                                                                            </button>
                                                                        </li>
                                                                        <li class="lnk wishlist"><a
                                                                                    data-toggle="tooltip"
                                                                                    class="add-to-cart"
                                                                                    href="detail.html" title="Wishlist">
                                                                                <i class="icon fa fa-heart"></i> </a>
                                                                        </li>
                                                                        <li class="lnk"><a data-toggle="tooltip"
                                                                                           class="add-to-cart"
                                                                                           href="detail.html"
                                                                                           title="Compare"> <i
                                                                                        class="fa fa-signal"
                                                                                        aria-hidden="true"></i> </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /.action -->
                                                            </div>
                                                            <!-- /.cart -->
                                                        </div>
                                                        <!-- /.product -->

                                                    </div>
                                                    <!-- /.products -->
                                                </div>
                                                <!-- /.item -->

                                                <div class="item item-carousel">
                                                    <div class="products">
                                                        <div class="product">
                                                            <div class="product-image">
                                                                <div class="image"><a href="detail.html"><img
                                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p2.jpg"
                                                                                alt=""></a></div>
                                                                <!-- /.image -->

                                                                <div class="tag hot"><span>hot</span></div>
                                                            </div>
                                                            <!-- /.product-image -->

                                                            <div class="product-info text-left">
                                                                <h3 class="name"><a href="detail.html">Floral Print
                                                                        Buttoned</a></h3>
                                                                <div class="rating rateit-small"></div>
                                                                <div class="description"></div>
                                                                <div class="product-price"><span
                                                                            class="price"> $450.99 </span> <span
                                                                            class="price-before-discount">$ 800</span>
                                                                </div>
                                                                <!-- /.product-price -->

                                                            </div>
                                                            <!-- /.product-info -->
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                    data-toggle="dropdown"
                                                                                    type="button"><i
                                                                                        class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                    type="button">Add to cart
                                                                            </button>
                                                                        </li>
                                                                        <li class="lnk wishlist"><a class="add-to-cart"
                                                                                                    href="detail.html"
                                                                                                    title="Wishlist"> <i
                                                                                        class="icon fa fa-heart"></i>
                                                                            </a></li>
                                                                        <li class="lnk"><a class="add-to-cart"
                                                                                           href="detail.html"
                                                                                           title="Compare"> <i
                                                                                        class="fa fa-signal"
                                                                                        aria-hidden="true"></i> </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /.action -->
                                                            </div>
                                                            <!-- /.cart -->
                                                        </div>
                                                        <!-- /.product -->

                                                    </div>
                                                    <!-- /.products -->
                                                </div>
                                                <!-- /.item -->

                                                <div class="item item-carousel">
                                                    <div class="products">
                                                        <div class="product">
                                                            <div class="product-image">
                                                                <div class="image"><a href="detail.html"><img
                                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p4.jpg"
                                                                                alt=""></a></div>
                                                                <!-- /.image -->

                                                                <div class="tag sale"><span>sale</span></div>
                                                            </div>
                                                            <!-- /.product-image -->

                                                            <div class="product-info text-left">
                                                                <h3 class="name"><a href="detail.html">Floral Print
                                                                        Buttoned</a></h3>
                                                                <div class="rating rateit-small"></div>
                                                                <div class="description"></div>
                                                                <div class="product-price"><span
                                                                            class="price"> $450.99 </span> <span
                                                                            class="price-before-discount">$ 800</span>
                                                                </div>
                                                                <!-- /.product-price -->

                                                            </div>
                                                            <!-- /.product-info -->
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                    data-toggle="dropdown"
                                                                                    type="button"><i
                                                                                        class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                    type="button">Add to cart
                                                                            </button>
                                                                        </li>
                                                                        <li class="lnk wishlist"><a class="add-to-cart"
                                                                                                    href="detail.html"
                                                                                                    title="Wishlist"> <i
                                                                                        class="icon fa fa-heart"></i>
                                                                            </a></li>
                                                                        <li class="lnk"><a class="add-to-cart"
                                                                                           href="detail.html"
                                                                                           title="Compare"> <i
                                                                                        class="fa fa-signal"
                                                                                        aria-hidden="true"></i> </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /.action -->
                                                            </div>
                                                            <!-- /.cart -->
                                                        </div>
                                                        <!-- /.product -->

                                                    </div>
                                                    <!-- /.products -->
                                                </div>
                                                <!-- /.item -->

                                                <div class="item item-carousel">
                                                    <div class="products">
                                                        <div class="product">
                                                            <div class="product-image">
                                                                <div class="image"><a href="detail.html"><img
                                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p3.jpg"
                                                                                alt=""></a></div>
                                                                <!-- /.image -->

                                                                <div class="tag sale"><span>sale</span></div>
                                                            </div>
                                                            <!-- /.product-image -->

                                                            <div class="product-info text-left">
                                                                <h3 class="name"><a href="detail.html">Floral Print
                                                                        Buttoned</a></h3>
                                                                <div class="rating rateit-small"></div>
                                                                <div class="description"></div>
                                                                <div class="product-price"><span
                                                                            class="price"> $450.99 </span> <span
                                                                            class="price-before-discount">$ 800</span>
                                                                </div>
                                                                <!-- /.product-price -->

                                                            </div>
                                                            <!-- /.product-info -->
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                    data-toggle="dropdown"
                                                                                    type="button"><i
                                                                                        class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                    type="button">Add to cart
                                                                            </button>
                                                                        </li>
                                                                        <li class="lnk wishlist"><a class="add-to-cart"
                                                                                                    href="detail.html"
                                                                                                    title="Wishlist"> <i
                                                                                        class="icon fa fa-heart"></i>
                                                                            </a></li>
                                                                        <li class="lnk"><a class="add-to-cart"
                                                                                           href="detail.html"
                                                                                           title="Compare"> <i
                                                                                        class="fa fa-signal"
                                                                                        aria-hidden="true"></i> </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /.action -->
                                                            </div>
                                                            <!-- /.cart -->
                                                        </div>
                                                        <!-- /.product -->

                                                    </div>
                                                    <!-- /.products -->
                                                </div>
                                                <!-- /.item -->

                                                <div class="item item-carousel">
                                                    <div class="products">
                                                        <div class="product">
                                                            <div class="product-image">
                                                                <div class="image"><a href="detail.html"><img
                                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p30.jpg"
                                                                                alt=""></a></div>
                                                                <!-- /.image -->

                                                                <div class="tag hot"><span>hot</span></div>
                                                            </div>
                                                            <!-- /.product-image -->

                                                            <div class="product-info text-left">
                                                                <h3 class="name"><a href="detail.html">Floral Print
                                                                        Buttoned</a></h3>
                                                                <div class="rating rateit-small"></div>
                                                                <div class="description"></div>
                                                                <div class="product-price"><span
                                                                            class="price"> $450.99 </span> <span
                                                                            class="price-before-discount">$ 800</span>
                                                                </div>
                                                                <!-- /.product-price -->

                                                            </div>
                                                            <!-- /.product-info -->
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                    data-toggle="dropdown"
                                                                                    type="button"><i
                                                                                        class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                    type="button">Add to cart
                                                                            </button>
                                                                        </li>
                                                                        <li class="lnk wishlist"><a class="add-to-cart"
                                                                                                    href="detail.html"
                                                                                                    title="Wishlist"> <i
                                                                                        class="icon fa fa-heart"></i>
                                                                            </a></li>
                                                                        <li class="lnk"><a class="add-to-cart"
                                                                                           href="detail.html"
                                                                                           title="Compare"> <i
                                                                                        class="fa fa-signal"
                                                                                        aria-hidden="true"></i> </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /.action -->
                                                            </div>
                                                            <!-- /.cart -->
                                                        </div>
                                                        <!-- /.product -->

                                                    </div>
                                                    <!-- /.products -->
                                                </div>
                                                <!-- /.item -->

                                                <div class="item item-carousel">
                                                    <div class="products">
                                                        <div class="product">
                                                            <div class="product-image">
                                                                <div class="image"><a href="detail.html"><img
                                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p29.jpg"
                                                                                alt=""></a></div>
                                                                <!-- /.image -->

                                                                <div class="tag new"><span>new</span></div>
                                                            </div>
                                                            <!-- /.product-image -->

                                                            <div class="product-info text-left">
                                                                <h3 class="name"><a href="detail.html">Floral Print
                                                                        Buttoned</a></h3>
                                                                <div class="rating rateit-small"></div>
                                                                <div class="description"></div>
                                                                <div class="product-price"><span
                                                                            class="price"> $450.99 </span> <span
                                                                            class="price-before-discount">$ 800</span>
                                                                </div>
                                                                <!-- /.product-price -->

                                                            </div>
                                                            <!-- /.product-info -->
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                    data-toggle="dropdown"
                                                                                    type="button"><i
                                                                                        class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                    type="button">Add to cart
                                                                            </button>
                                                                        </li>
                                                                        <li class="lnk wishlist"><a class="add-to-cart"
                                                                                                    href="detail.html"
                                                                                                    title="Wishlist"> <i
                                                                                        class="icon fa fa-heart"></i>
                                                                            </a></li>
                                                                        <li class="lnk"><a class="add-to-cart"
                                                                                           href="detail.html"
                                                                                           title="Compare"> <i
                                                                                        class="fa fa-signal"
                                                                                        aria-hidden="true"></i> </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /.action -->
                                                            </div>
                                                            <!-- /.cart -->
                                                        </div>
                                                        <!-- /.product -->

                                                    </div>
                                                    <!-- /.products -->
                                                </div>
                                                <!-- /.item -->
                                            </div>
                                            <!-- /.home-owl-carousel -->
                                        </div>
                                        <!-- /.product-slider -->
                                    </div>
                                    <!-- /.tab-pane -->

                                    <div class="tab-pane" id="smartphone">
                                        <div class="product-slider">
                                            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                                                <div class="item item-carousel">
                                                    <div class="products">
                                                        <div class="product">
                                                            <div class="product-image">
                                                                <div class="image"><a href="detail.html"><img
                                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p5.jpg"
                                                                                alt=""></a></div>
                                                                <!-- /.image -->

                                                                <div class="tag sale"><span>sale</span></div>
                                                            </div>
                                                            <!-- /.product-image -->

                                                            <div class="product-info text-left">
                                                                <h3 class="name"><a href="detail.html">Floral Print
                                                                        Buttoned</a></h3>
                                                                <div class="rating rateit-small"></div>
                                                                <div class="description"></div>
                                                                <div class="product-price"><span
                                                                            class="price"> $450.99 </span> <span
                                                                            class="price-before-discount">$ 800</span>
                                                                </div>
                                                                <!-- /.product-price -->

                                                            </div>
                                                            <!-- /.product-info -->
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                    data-toggle="dropdown"
                                                                                    type="button"><i
                                                                                        class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                    type="button">Add to cart
                                                                            </button>
                                                                        </li>
                                                                        <li class="lnk wishlist"><a class="add-to-cart"
                                                                                                    href="detail.html"
                                                                                                    title="Wishlist"> <i
                                                                                        class="icon fa fa-heart"></i>
                                                                            </a></li>
                                                                        <li class="lnk"><a class="add-to-cart"
                                                                                           href="detail.html"
                                                                                           title="Compare"> <i
                                                                                        class="fa fa-signal"
                                                                                        aria-hidden="true"></i> </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /.action -->
                                                            </div>
                                                            <!-- /.cart -->
                                                        </div>
                                                        <!-- /.product -->

                                                    </div>
                                                    <!-- /.products -->
                                                </div>
                                                <!-- /.item -->

                                                <div class="item item-carousel">
                                                    <div class="products">
                                                        <div class="product">
                                                            <div class="product-image">
                                                                <div class="image"><a href="detail.html"><img
                                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p6.jpg"
                                                                                alt=""></a></div>
                                                                <!-- /.image -->

                                                                <div class="tag new"><span>new</span></div>
                                                            </div>
                                                            <!-- /.product-image -->

                                                            <div class="product-info text-left">
                                                                <h3 class="name"><a href="detail.html">Floral Print
                                                                        Buttoned</a></h3>
                                                                <div class="rating rateit-small"></div>
                                                                <div class="description"></div>
                                                                <div class="product-price"><span
                                                                            class="price"> $450.99 </span> <span
                                                                            class="price-before-discount">$ 800</span>
                                                                </div>
                                                                <!-- /.product-price -->

                                                            </div>
                                                            <!-- /.product-info -->
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                    data-toggle="dropdown"
                                                                                    type="button"><i
                                                                                        class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                    type="button">Add to cart
                                                                            </button>
                                                                        </li>
                                                                        <li class="lnk wishlist"><a class="add-to-cart"
                                                                                                    href="detail.html"
                                                                                                    title="Wishlist"> <i
                                                                                        class="icon fa fa-heart"></i>
                                                                            </a></li>
                                                                        <li class="lnk"><a class="add-to-cart"
                                                                                           href="detail.html"
                                                                                           title="Compare"> <i
                                                                                        class="fa fa-signal"
                                                                                        aria-hidden="true"></i> </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /.action -->
                                                            </div>
                                                            <!-- /.cart -->
                                                        </div>
                                                        <!-- /.product -->

                                                    </div>
                                                    <!-- /.products -->
                                                </div>
                                                <!-- /.item -->

                                                <div class="item item-carousel">
                                                    <div class="products">
                                                        <div class="product">
                                                            <div class="product-image">
                                                                <div class="image"><a href="detail.html"><img
                                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p7.jpg"
                                                                                alt=""></a></div>
                                                                <!-- /.image -->

                                                                <div class="tag sale"><span>sale</span></div>
                                                            </div>
                                                            <!-- /.product-image -->

                                                            <div class="product-info text-left">
                                                                <h3 class="name"><a href="detail.html">Floral Print
                                                                        Buttoned</a></h3>
                                                                <div class="rating rateit-small"></div>
                                                                <div class="description"></div>
                                                                <div class="product-price"><span
                                                                            class="price"> $450.99 </span> <span
                                                                            class="price-before-discount">$ 800</span>
                                                                </div>
                                                                <!-- /.product-price -->

                                                            </div>
                                                            <!-- /.product-info -->
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                    data-toggle="dropdown"
                                                                                    type="button"><i
                                                                                        class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                    type="button">Add to cart
                                                                            </button>
                                                                        </li>
                                                                        <li class="lnk wishlist"><a class="add-to-cart"
                                                                                                    href="detail.html"
                                                                                                    title="Wishlist"> <i
                                                                                        class="icon fa fa-heart"></i>
                                                                            </a></li>
                                                                        <li class="lnk"><a class="add-to-cart"
                                                                                           href="detail.html"
                                                                                           title="Compare"> <i
                                                                                        class="fa fa-signal"
                                                                                        aria-hidden="true"></i> </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /.action -->
                                                            </div>
                                                            <!-- /.cart -->
                                                        </div>
                                                        <!-- /.product -->

                                                    </div>
                                                    <!-- /.products -->
                                                </div>
                                                <!-- /.item -->

                                                <div class="item item-carousel">
                                                    <div class="products">
                                                        <div class="product">
                                                            <div class="product-image">
                                                                <div class="image"><a href="detail.html"><img
                                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p8.jpg"
                                                                                alt=""></a></div>
                                                                <!-- /.image -->

                                                                <div class="tag new"><span>new</span></div>
                                                            </div>
                                                            <!-- /.product-image -->

                                                            <div class="product-info text-left">
                                                                <h3 class="name"><a href="detail.html">Floral Print
                                                                        Buttoned</a></h3>
                                                                <div class="rating rateit-small"></div>
                                                                <div class="description"></div>
                                                                <div class="product-price"><span
                                                                            class="price"> $450.99 </span> <span
                                                                            class="price-before-discount">$ 800</span>
                                                                </div>
                                                                <!-- /.product-price -->

                                                            </div>
                                                            <!-- /.product-info -->
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                    data-toggle="dropdown"
                                                                                    type="button"><i
                                                                                        class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                    type="button">Add to cart
                                                                            </button>
                                                                        </li>
                                                                        <li class="lnk wishlist"><a class="add-to-cart"
                                                                                                    href="detail.html"
                                                                                                    title="Wishlist"> <i
                                                                                        class="icon fa fa-heart"></i>
                                                                            </a></li>
                                                                        <li class="lnk"><a class="add-to-cart"
                                                                                           href="detail.html"
                                                                                           title="Compare"> <i
                                                                                        class="fa fa-signal"
                                                                                        aria-hidden="true"></i> </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /.action -->
                                                            </div>
                                                            <!-- /.cart -->
                                                        </div>
                                                        <!-- /.product -->

                                                    </div>
                                                    <!-- /.products -->
                                                </div>
                                                <!-- /.item -->

                                                <div class="item item-carousel">
                                                    <div class="products">
                                                        <div class="product">
                                                            <div class="product-image">
                                                                <div class="image"><a href="detail.html"><img
                                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p9.jpg"
                                                                                alt=""></a></div>
                                                                <!-- /.image -->

                                                                <div class="tag hot"><span>hot</span></div>
                                                            </div>
                                                            <!-- /.product-image -->

                                                            <div class="product-info text-left">
                                                                <h3 class="name"><a href="detail.html">Floral Print
                                                                        Buttoned</a></h3>
                                                                <div class="rating rateit-small"></div>
                                                                <div class="description"></div>
                                                                <div class="product-price"><span
                                                                            class="price"> $450.99 </span> <span
                                                                            class="price-before-discount">$ 800</span>
                                                                </div>
                                                                <!-- /.product-price -->

                                                            </div>
                                                            <!-- /.product-info -->
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                    data-toggle="dropdown"
                                                                                    type="button"><i
                                                                                        class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                    type="button">Add to cart
                                                                            </button>
                                                                        </li>
                                                                        <li class="lnk wishlist"><a class="add-to-cart"
                                                                                                    href="detail.html"
                                                                                                    title="Wishlist"> <i
                                                                                        class="icon fa fa-heart"></i>
                                                                            </a></li>
                                                                        <li class="lnk"><a class="add-to-cart"
                                                                                           href="detail.html"
                                                                                           title="Compare"> <i
                                                                                        class="fa fa-signal"
                                                                                        aria-hidden="true"></i> </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /.action -->
                                                            </div>
                                                            <!-- /.cart -->
                                                        </div>
                                                        <!-- /.product -->

                                                    </div>
                                                    <!-- /.products -->
                                                </div>
                                                <!-- /.item -->

                                                <div class="item item-carousel">
                                                    <div class="products">
                                                        <div class="product">
                                                            <div class="product-image">
                                                                <div class="image"><a href="detail.html"><img
                                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p10.jpg"
                                                                                alt=""></a></div>
                                                                <!-- /.image -->

                                                                <div class="tag hot"><span>hot</span></div>
                                                            </div>
                                                            <!-- /.product-image -->

                                                            <div class="product-info text-left">
                                                                <h3 class="name"><a href="detail.html">Floral Print
                                                                        Buttoned</a></h3>
                                                                <div class="rating rateit-small"></div>
                                                                <div class="description"></div>
                                                                <div class="product-price"><span
                                                                            class="price"> $450.99 </span> <span
                                                                            class="price-before-discount">$ 800</span>
                                                                </div>
                                                                <!-- /.product-price -->

                                                            </div>
                                                            <!-- /.product-info -->
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                    data-toggle="dropdown"
                                                                                    type="button"><i
                                                                                        class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                    type="button">Add to cart
                                                                            </button>
                                                                        </li>
                                                                        <li class="lnk wishlist"><a class="add-to-cart"
                                                                                                    href="detail.html"
                                                                                                    title="Wishlist"> <i
                                                                                        class="icon fa fa-heart"></i>
                                                                            </a></li>
                                                                        <li class="lnk"><a class="add-to-cart"
                                                                                           href="detail.html"
                                                                                           title="Compare"> <i
                                                                                        class="fa fa-signal"
                                                                                        aria-hidden="true"></i> </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /.action -->
                                                            </div>
                                                            <!-- /.cart -->
                                                        </div>
                                                        <!-- /.product -->

                                                    </div>
                                                    <!-- /.products -->
                                                </div>
                                                <!-- /.item -->
                                            </div>
                                            <!-- /.home-owl-carousel -->
                                        </div>
                                        <!-- /.product-slider -->
                                    </div>
                                    <!-- /.tab-pane -->

                                    <div class="tab-pane" id="laptop">
                                        <div class="product-slider">
                                            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                                                <div class="item item-carousel">
                                                    <div class="products">
                                                        <div class="product">
                                                            <div class="product-image">
                                                                <div class="image"><a href="detail.html"><img
                                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p11.jpg"
                                                                                alt=""></a></div>
                                                                <!-- /.image -->

                                                                <div class="tag new"><span>new</span></div>
                                                            </div>
                                                            <!-- /.product-image -->

                                                            <div class="product-info text-left">
                                                                <h3 class="name"><a href="detail.html">Floral Print
                                                                        Buttoned</a></h3>
                                                                <div class="rating rateit-small"></div>
                                                                <div class="description"></div>
                                                                <div class="product-price"><span
                                                                            class="price"> $450.99 </span> <span
                                                                            class="price-before-discount">$ 800</span>
                                                                </div>
                                                                <!-- /.product-price -->

                                                            </div>
                                                            <!-- /.product-info -->
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                    data-toggle="dropdown"
                                                                                    type="button"><i
                                                                                        class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                    type="button">Add to cart
                                                                            </button>
                                                                        </li>
                                                                        <li class="lnk wishlist"><a class="add-to-cart"
                                                                                                    href="detail.html"
                                                                                                    title="Wishlist"> <i
                                                                                        class="icon fa fa-heart"></i>
                                                                            </a></li>
                                                                        <li class="lnk"><a class="add-to-cart"
                                                                                           href="detail.html"
                                                                                           title="Compare"> <i
                                                                                        class="fa fa-signal"
                                                                                        aria-hidden="true"></i> </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /.action -->
                                                            </div>
                                                            <!-- /.cart -->
                                                        </div>
                                                        <!-- /.product -->

                                                    </div>
                                                    <!-- /.products -->
                                                </div>
                                                <!-- /.item -->

                                                <div class="item item-carousel">
                                                    <div class="products">
                                                        <div class="product">
                                                            <div class="product-image">
                                                                <div class="image"><a href="detail.html"><img
                                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p12.jpg"
                                                                                alt=""></a></div>
                                                                <!-- /.image -->

                                                                <div class="tag new"><span>new</span></div>
                                                            </div>
                                                            <!-- /.product-image -->

                                                            <div class="product-info text-left">
                                                                <h3 class="name"><a href="detail.html">Floral Print
                                                                        Buttoned</a></h3>
                                                                <div class="rating rateit-small"></div>
                                                                <div class="description"></div>
                                                                <div class="product-price"><span
                                                                            class="price"> $450.99 </span> <span
                                                                            class="price-before-discount">$ 800</span>
                                                                </div>
                                                                <!-- /.product-price -->

                                                            </div>
                                                            <!-- /.product-info -->
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                    data-toggle="dropdown"
                                                                                    type="button"><i
                                                                                        class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                    type="button">Add to cart
                                                                            </button>
                                                                        </li>
                                                                        <li class="lnk wishlist"><a class="add-to-cart"
                                                                                                    href="detail.html"
                                                                                                    title="Wishlist"> <i
                                                                                        class="icon fa fa-heart"></i>
                                                                            </a></li>
                                                                        <li class="lnk"><a class="add-to-cart"
                                                                                           href="detail.html"
                                                                                           title="Compare"> <i
                                                                                        class="fa fa-signal"
                                                                                        aria-hidden="true"></i> </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /.action -->
                                                            </div>
                                                            <!-- /.cart -->
                                                        </div>
                                                        <!-- /.product -->

                                                    </div>
                                                    <!-- /.products -->
                                                </div>
                                                <!-- /.item -->

                                                <div class="item item-carousel">
                                                    <div class="products">
                                                        <div class="product">
                                                            <div class="product-image">
                                                                <div class="image"><a href="detail.html"><img
                                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p13.jpg"
                                                                                alt=""></a></div>
                                                                <!-- /.image -->

                                                                <div class="tag sale"><span>sale</span></div>
                                                            </div>
                                                            <!-- /.product-image -->

                                                            <div class="product-info text-left">
                                                                <h3 class="name"><a href="detail.html">Floral Print
                                                                        Buttoned</a></h3>
                                                                <div class="rating rateit-small"></div>
                                                                <div class="description"></div>
                                                                <div class="product-price"><span
                                                                            class="price"> $450.99 </span> <span
                                                                            class="price-before-discount">$ 800</span>
                                                                </div>
                                                                <!-- /.product-price -->

                                                            </div>
                                                            <!-- /.product-info -->
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                    data-toggle="dropdown"
                                                                                    type="button"><i
                                                                                        class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                    type="button">Add to cart
                                                                            </button>
                                                                        </li>
                                                                        <li class="lnk wishlist"><a class="add-to-cart"
                                                                                                    href="detail.html"
                                                                                                    title="Wishlist"> <i
                                                                                        class="icon fa fa-heart"></i>
                                                                            </a></li>
                                                                        <li class="lnk"><a class="add-to-cart"
                                                                                           href="detail.html"
                                                                                           title="Compare"> <i
                                                                                        class="fa fa-signal"
                                                                                        aria-hidden="true"></i> </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /.action -->
                                                            </div>
                                                            <!-- /.cart -->
                                                        </div>
                                                        <!-- /.product -->

                                                    </div>
                                                    <!-- /.products -->
                                                </div>
                                                <!-- /.item -->

                                                <div class="item item-carousel">
                                                    <div class="products">
                                                        <div class="product">
                                                            <div class="product-image">
                                                                <div class="image"><a href="detail.html"><img
                                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p14.jpg"
                                                                                alt=""></a></div>
                                                                <!-- /.image -->

                                                                <div class="tag hot"><span>hot</span></div>
                                                            </div>
                                                            <!-- /.product-image -->

                                                            <div class="product-info text-left">
                                                                <h3 class="name"><a href="detail.html">Floral Print
                                                                        Buttoned</a></h3>
                                                                <div class="rating rateit-small"></div>
                                                                <div class="description"></div>
                                                                <div class="product-price"><span
                                                                            class="price"> $450.99 </span> <span
                                                                            class="price-before-discount">$ 800</span>
                                                                </div>
                                                                <!-- /.product-price -->

                                                            </div>
                                                            <!-- /.product-info -->
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                    data-toggle="dropdown"
                                                                                    type="button"><i
                                                                                        class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                    type="button">Add to cart
                                                                            </button>
                                                                        </li>
                                                                        <li class="lnk wishlist"><a class="add-to-cart"
                                                                                                    href="detail.html"
                                                                                                    title="Wishlist"> <i
                                                                                        class="icon fa fa-heart"></i>
                                                                            </a></li>
                                                                        <li class="lnk"><a class="add-to-cart"
                                                                                           href="detail.html"
                                                                                           title="Compare"> <i
                                                                                        class="fa fa-signal"
                                                                                        aria-hidden="true"></i> </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /.action -->
                                                            </div>
                                                            <!-- /.cart -->
                                                        </div>
                                                        <!-- /.product -->

                                                    </div>
                                                    <!-- /.products -->
                                                </div>
                                                <!-- /.item -->

                                                <div class="item item-carousel">
                                                    <div class="products">
                                                        <div class="product">
                                                            <div class="product-image">
                                                                <div class="image"><a href="detail.html"><img
                                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p15.jpg"
                                                                                alt="image"></a></div>
                                                                <!-- /.image -->

                                                                <div class="tag hot"><span>hot</span></div>
                                                            </div>
                                                            <!-- /.product-image -->

                                                            <div class="product-info text-left">
                                                                <h3 class="name"><a href="detail.html">Floral Print
                                                                        Buttoned</a></h3>
                                                                <div class="rating rateit-small"></div>
                                                                <div class="description"></div>
                                                                <div class="product-price"><span
                                                                            class="price"> $450.99 </span> <span
                                                                            class="price-before-discount">$ 800</span>
                                                                </div>
                                                                <!-- /.product-price -->

                                                            </div>
                                                            <!-- /.product-info -->
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                    data-toggle="dropdown"
                                                                                    type="button"><i
                                                                                        class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                    type="button">Add to cart
                                                                            </button>
                                                                        </li>
                                                                        <li class="lnk wishlist"><a class="add-to-cart"
                                                                                                    href="detail.html"
                                                                                                    title="Wishlist"> <i
                                                                                        class="icon fa fa-heart"></i>
                                                                            </a></li>
                                                                        <li class="lnk"><a class="add-to-cart"
                                                                                           href="detail.html"
                                                                                           title="Compare"> <i
                                                                                        class="fa fa-signal"
                                                                                        aria-hidden="true"></i> </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /.action -->
                                                            </div>
                                                            <!-- /.cart -->
                                                        </div>
                                                        <!-- /.product -->

                                                    </div>
                                                    <!-- /.products -->
                                                </div>
                                                <!-- /.item -->

                                                <div class="item item-carousel">
                                                    <div class="products">
                                                        <div class="product">
                                                            <div class="product-image">
                                                                <div class="image"><a href="detail.html"><img
                                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p16.jpg"
                                                                                alt=""></a></div>
                                                                <!-- /.image -->

                                                                <div class="tag sale"><span>sale</span></div>
                                                            </div>
                                                            <!-- /.product-image -->

                                                            <div class="product-info text-left">
                                                                <h3 class="name"><a href="detail.html">Apple Iphone 5s
                                                                        32GB</a></h3>
                                                                <div class="rating rateit-small"></div>
                                                                <div class="description"></div>
                                                                <div class="product-price"><span
                                                                            class="price"> $450.99 </span> <span
                                                                            class="price-before-discount">$ 800</span>
                                                                </div>
                                                                <!-- /.product-price -->

                                                            </div>
                                                            <!-- /.product-info -->
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                    data-toggle="dropdown"
                                                                                    type="button"><i
                                                                                        class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                    type="button">Add to cart
                                                                            </button>
                                                                        </li>
                                                                        <li class="lnk wishlist"><a class="add-to-cart"
                                                                                                    href="detail.html"
                                                                                                    title="Wishlist"> <i
                                                                                        class="icon fa fa-heart"></i>
                                                                            </a></li>
                                                                        <li class="lnk"><a class="add-to-cart"
                                                                                           href="detail.html"
                                                                                           title="Compare"> <i
                                                                                        class="fa fa-signal"
                                                                                        aria-hidden="true"></i> </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /.action -->
                                                            </div>
                                                            <!-- /.cart -->
                                                        </div>
                                                        <!-- /.product -->

                                                    </div>
                                                    <!-- /.products -->
                                                </div>
                                                <!-- /.item -->
                                            </div>
                                            <!-- /.home-owl-carousel -->
                                        </div>
                                        <!-- /.product-slider -->
                                    </div>
                                    <!-- /.tab-pane -->

                                    <div class="tab-pane" id="apple">
                                        <div class="product-slider">
                                            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                                                <div class="item item-carousel">
                                                    <div class="products">
                                                        <div class="product">
                                                            <div class="product-image">
                                                                <div class="image"><a href="detail.html"><img
                                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p18.jpg"
                                                                                alt=""></a></div>
                                                                <!-- /.image -->

                                                                <div class="tag sale"><span>sale</span></div>
                                                            </div>
                                                            <!-- /.product-image -->

                                                            <div class="product-info text-left">
                                                                <h3 class="name"><a href="detail.html">Floral Print
                                                                        Buttoned</a></h3>
                                                                <div class="rating rateit-small"></div>
                                                                <div class="description"></div>
                                                                <div class="product-price"><span
                                                                            class="price"> $450.99 </span> <span
                                                                            class="price-before-discount">$ 800</span>
                                                                </div>
                                                                <!-- /.product-price -->

                                                            </div>
                                                            <!-- /.product-info -->
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                    data-toggle="dropdown"
                                                                                    type="button"><i
                                                                                        class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                    type="button">Add to cart
                                                                            </button>
                                                                        </li>
                                                                        <li class="lnk wishlist"><a class="add-to-cart"
                                                                                                    href="detail.html"
                                                                                                    title="Wishlist"> <i
                                                                                        class="icon fa fa-heart"></i>
                                                                            </a></li>
                                                                        <li class="lnk"><a class="add-to-cart"
                                                                                           href="detail.html"
                                                                                           title="Compare"> <i
                                                                                        class="fa fa-signal"
                                                                                        aria-hidden="true"></i> </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /.action -->
                                                            </div>
                                                            <!-- /.cart -->
                                                        </div>
                                                        <!-- /.product -->

                                                    </div>
                                                    <!-- /.products -->
                                                </div>
                                                <!-- /.item -->

                                                <div class="item item-carousel">
                                                    <div class="products">
                                                        <div class="product">
                                                            <div class="product-image">
                                                                <div class="image"><a href="detail.html"><img
                                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p18.jpg"
                                                                                alt=""></a></div>
                                                                <!-- /.image -->

                                                                <div class="tag hot"><span>hot</span></div>
                                                            </div>
                                                            <!-- /.product-image -->

                                                            <div class="product-info text-left">
                                                                <h3 class="name"><a href="detail.html">Floral Print
                                                                        Buttoned</a></h3>
                                                                <div class="rating rateit-small"></div>
                                                                <div class="description"></div>
                                                                <div class="product-price"><span
                                                                            class="price"> $450.99 </span> <span
                                                                            class="price-before-discount">$ 800</span>
                                                                </div>
                                                                <!-- /.product-price -->

                                                            </div>
                                                            <!-- /.product-info -->
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                    data-toggle="dropdown"
                                                                                    type="button"><i
                                                                                        class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                    type="button">Add to cart
                                                                            </button>
                                                                        </li>
                                                                        <li class="lnk wishlist"><a class="add-to-cart"
                                                                                                    href="detail.html"
                                                                                                    title="Wishlist"> <i
                                                                                        class="icon fa fa-heart"></i>
                                                                            </a></li>
                                                                        <li class="lnk"><a class="add-to-cart"
                                                                                           href="detail.html"
                                                                                           title="Compare"> <i
                                                                                        class="fa fa-signal"
                                                                                        aria-hidden="true"></i> </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /.action -->
                                                            </div>
                                                            <!-- /.cart -->
                                                        </div>
                                                        <!-- /.product -->

                                                    </div>
                                                    <!-- /.products -->
                                                </div>
                                                <!-- /.item -->

                                                <div class="item item-carousel">
                                                    <div class="products">
                                                        <div class="product">
                                                            <div class="product-image">
                                                                <div class="image"><a href="detail.html"><img
                                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p17.jpg"
                                                                                alt=""></a></div>
                                                                <!-- /.image -->

                                                                <div class="tag sale"><span>sale</span></div>
                                                            </div>
                                                            <!-- /.product-image -->

                                                            <div class="product-info text-left">
                                                                <h3 class="name"><a href="detail.html">Floral Print
                                                                        Buttoned</a></h3>
                                                                <div class="rating rateit-small"></div>
                                                                <div class="description"></div>
                                                                <div class="product-price"><span
                                                                            class="price"> $450.99 </span> <span
                                                                            class="price-before-discount">$ 800</span>
                                                                </div>
                                                                <!-- /.product-price -->

                                                            </div>
                                                            <!-- /.product-info -->
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                    data-toggle="dropdown"
                                                                                    type="button"><i
                                                                                        class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                    type="button">Add to cart
                                                                            </button>
                                                                        </li>
                                                                        <li class="lnk wishlist"><a class="add-to-cart"
                                                                                                    href="detail.html"
                                                                                                    title="Wishlist"> <i
                                                                                        class="icon fa fa-heart"></i>
                                                                            </a></li>
                                                                        <li class="lnk"><a class="add-to-cart"
                                                                                           href="detail.html"
                                                                                           title="Compare"> <i
                                                                                        class="fa fa-signal"
                                                                                        aria-hidden="true"></i> </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /.action -->
                                                            </div>
                                                            <!-- /.cart -->
                                                        </div>
                                                        <!-- /.product -->

                                                    </div>
                                                    <!-- /.products -->
                                                </div>
                                                <!-- /.item -->

                                                <div class="item item-carousel">
                                                    <div class="products">
                                                        <div class="product">
                                                            <div class="product-image">
                                                                <div class="image"><a href="detail.html"><img
                                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p16.jpg"
                                                                                alt=""></a></div>
                                                                <!-- /.image -->

                                                                <div class="tag new"><span>new</span></div>
                                                            </div>
                                                            <!-- /.product-image -->

                                                            <div class="product-info text-left">
                                                                <h3 class="name"><a href="detail.html">Floral Print
                                                                        Buttoned</a></h3>
                                                                <div class="rating rateit-small"></div>
                                                                <div class="description"></div>
                                                                <div class="product-price"><span
                                                                            class="price"> $450.99 </span> <span
                                                                            class="price-before-discount">$ 800</span>
                                                                </div>
                                                                <!-- /.product-price -->

                                                            </div>
                                                            <!-- /.product-info -->
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                    data-toggle="dropdown"
                                                                                    type="button"><i
                                                                                        class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                    type="button">Add to cart
                                                                            </button>
                                                                        </li>
                                                                        <li class="lnk wishlist"><a class="add-to-cart"
                                                                                                    href="detail.html"
                                                                                                    title="Wishlist"> <i
                                                                                        class="icon fa fa-heart"></i>
                                                                            </a></li>
                                                                        <li class="lnk"><a class="add-to-cart"
                                                                                           href="detail.html"
                                                                                           title="Compare"> <i
                                                                                        class="fa fa-signal"
                                                                                        aria-hidden="true"></i> </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /.action -->
                                                            </div>
                                                            <!-- /.cart -->
                                                        </div>
                                                        <!-- /.product -->

                                                    </div>
                                                    <!-- /.products -->
                                                </div>
                                                <!-- /.item -->

                                                <div class="item item-carousel">
                                                    <div class="products">
                                                        <div class="product">
                                                            <div class="product-image">
                                                                <div class="image"><a href="detail.html"><img
                                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p13.jpg"
                                                                                alt=""></a></div>
                                                                <!-- /.image -->

                                                                <div class="tag new"><span>new</span></div>
                                                            </div>
                                                            <!-- /.product-image -->

                                                            <div class="product-info text-left">
                                                                <h3 class="name"><a href="detail.html">Floral Print
                                                                        Buttoned</a></h3>
                                                                <div class="rating rateit-small"></div>
                                                                <div class="description"></div>
                                                                <div class="product-price"><span
                                                                            class="price"> $450.99 </span> <span
                                                                            class="price-before-discount">$ 800</span>
                                                                </div>
                                                                <!-- /.product-price -->

                                                            </div>
                                                            <!-- /.product-info -->
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                    data-toggle="dropdown"
                                                                                    type="button"><i
                                                                                        class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                    type="button">Add to cart
                                                                            </button>
                                                                        </li>
                                                                        <li class="lnk wishlist"><a class="add-to-cart"
                                                                                                    href="detail.html"
                                                                                                    title="Wishlist"> <i
                                                                                        class="icon fa fa-heart"></i>
                                                                            </a></li>
                                                                        <li class="lnk"><a class="add-to-cart"
                                                                                           href="detail.html"
                                                                                           title="Compare"> <i
                                                                                        class="fa fa-signal"
                                                                                        aria-hidden="true"></i> </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /.action -->
                                                            </div>
                                                            <!-- /.cart -->
                                                        </div>
                                                        <!-- /.product -->

                                                    </div>
                                                    <!-- /.products -->
                                                </div>
                                                <!-- /.item -->

                                                <div class="item item-carousel">
                                                    <div class="products">
                                                        <div class="product">
                                                            <div class="product-image">
                                                                <div class="image"><a href="detail.html"><img
                                                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p14.jpg"
                                                                                alt=""></a></div>
                                                                <!-- /.image -->

                                                                <div class="tag hot"><span>hot</span></div>
                                                            </div>
                                                            <!-- /.product-image -->

                                                            <div class="product-info text-left">
                                                                <h3 class="name"><a href="detail.html">Samsung Galaxy
                                                                        S4</a></h3>
                                                                <div class="rating rateit-small"></div>
                                                                <div class="description"></div>
                                                                <div class="product-price"><span
                                                                            class="price"> $450.99 </span> <span
                                                                            class="price-before-discount">$ 800</span>
                                                                </div>
                                                                <!-- /.product-price -->

                                                            </div>
                                                            <!-- /.product-info -->
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                    data-toggle="dropdown"
                                                                                    type="button"><i
                                                                                        class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                    type="button">Add to cart
                                                                            </button>
                                                                        </li>
                                                                        <li class="lnk wishlist"><a class="add-to-cart"
                                                                                                    href="detail.html"
                                                                                                    title="Wishlist"> <i
                                                                                        class="icon fa fa-heart"></i>
                                                                            </a></li>
                                                                        <li class="lnk"><a class="add-to-cart"
                                                                                           href="detail.html"
                                                                                           title="Compare"> <i
                                                                                        class="fa fa-signal"
                                                                                        aria-hidden="true"></i> </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /.action -->
                                                            </div>
                                                            <!-- /.cart -->
                                                        </div>
                                                        <!-- /.product -->

                                                    </div>
                                                    <!-- /.products -->
                                                </div>
                                                <!-- /.item -->
                                            </div>
                                            <!-- /.home-owl-carousel -->
                                        </div>
                                        <!-- /.product-slider -->
                                    </div>
                                    <!-- /.tab-pane -->

                                </div>
                                <!-- /.tab-content -->
                            </div>
                        </div>
                    </div>
                    <!-- /.scroll-tabs -->
                    <!-- ============================================== SCROLL TABS : END ============================================== -->
                    <!-- ============================================== WIDE PRODUCTS ============================================== -->
                    <div class="wide-banners wow fadeInUp outer-bottom-xs">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="wide-banner cnt-strip">
                                    <div class="image"><img class="img-responsive"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/banners/home-banner1.jpg" alt=""></div>
                                </div>
                                <!-- /.wide-banner -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6 col-sm-6">
                                <div class="wide-banner cnt-strip">
                                    <div class="image"><img class="img-responsive"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/banners/home-banner2.jpg" alt=""></div>
                                </div>
                                <!-- /.wide-banner -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.wide-banners -->

                    <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
                    <!-- ============================================== FEATURED PRODUCTS ============================================== -->
                    <section class="section featured-product wow fadeInUp">
                        <h3 class="section-title">Featured products</h3>
                        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
                            <div class="item item-carousel">
                                <div class="products">
                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image"><a href="detail.html"><img
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p5.jpg" alt=""></a></div>
                                            <!-- /.image -->

                                            <div class="tag hot"><span>hot</span></div>
                                        </div>
                                        <!-- /.product-image -->

                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="description"></div>
                                            <div class="product-price"><span class="price"> $450.99 </span> <span
                                                        class="price-before-discount">$ 800</span></div>
                                            <!-- /.product-price -->

                                        </div>
                                        <!-- /.product-info -->
                                        <div class="cart clearfix animate-effect">
                                            <div class="action">
                                                <ul class="list-unstyled">
                                                    <li class="add-cart-button btn-group">
                                                        <button class="btn btn-primary icon" data-toggle="dropdown"
                                                                type="button"><i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                        <button class="btn btn-primary cart-btn" type="button">Add to
                                                            cart
                                                        </button>
                                                    </li>
                                                    <li class="lnk wishlist"><a class="add-to-cart" href="detail.html"
                                                                                title="Wishlist"> <i
                                                                    class="icon fa fa-heart"></i> </a></li>
                                                    <li class="lnk"><a class="add-to-cart" href="detail.html"
                                                                       title="Compare"> <i class="fa fa-signal"
                                                                                           aria-hidden="true"></i> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.action -->
                                        </div>
                                        <!-- /.cart -->
                                    </div>
                                    <!-- /.product -->

                                </div>
                                <!-- /.products -->
                            </div>
                            <!-- /.item -->

                            <div class="item item-carousel">
                                <div class="products">
                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image"><a href="detail.html"><img
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p6.jpg" alt=""></a></div>
                                            <!-- /.image -->

                                            <div class="tag new"><span>new</span></div>
                                        </div>
                                        <!-- /.product-image -->

                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="description"></div>
                                            <div class="product-price"><span class="price"> $450.99 </span> <span
                                                        class="price-before-discount">$ 800</span></div>
                                            <!-- /.product-price -->

                                        </div>
                                        <!-- /.product-info -->
                                        <div class="cart clearfix animate-effect">
                                            <div class="action">
                                                <ul class="list-unstyled">
                                                    <li class="add-cart-button btn-group">
                                                        <button class="btn btn-primary icon" data-toggle="dropdown"
                                                                type="button"><i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                        <button class="btn btn-primary cart-btn" type="button">Add to
                                                            cart
                                                        </button>
                                                    </li>
                                                    <li class="lnk wishlist"><a class="add-to-cart" href="detail.html"
                                                                                title="Wishlist"> <i
                                                                    class="icon fa fa-heart"></i> </a></li>
                                                    <li class="lnk"><a class="add-to-cart" href="detail.html"
                                                                       title="Compare"> <i class="fa fa-signal"
                                                                                           aria-hidden="true"></i> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.action -->
                                        </div>
                                        <!-- /.cart -->
                                    </div>
                                    <!-- /.product -->

                                </div>
                                <!-- /.products -->
                            </div>
                            <!-- /.item -->

                            <div class="item item-carousel">
                                <div class="products">
                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image"><a href="detail.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blank.gif"
                                                                                          data-echo="<?php echo get_template_directory_uri(); ?>/assets/images/products/p7.jpg"
                                                                                          alt=""></a></div>
                                            <!-- /.image -->

                                            <div class="tag sale"><span>sale</span></div>
                                        </div>
                                        <!-- /.product-image -->

                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="description"></div>
                                            <div class="product-price"><span class="price"> $450.99 </span> <span
                                                        class="price-before-discount">$ 800</span></div>
                                            <!-- /.product-price -->

                                        </div>
                                        <!-- /.product-info -->
                                        <div class="cart clearfix animate-effect">
                                            <div class="action">
                                                <ul class="list-unstyled">
                                                    <li class="add-cart-button btn-group">
                                                        <button class="btn btn-primary icon" data-toggle="dropdown"
                                                                type="button"><i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                        <button class="btn btn-primary cart-btn" type="button">Add to
                                                            cart
                                                        </button>
                                                    </li>
                                                    <li class="lnk wishlist"><a class="add-to-cart" href="detail.html"
                                                                                title="Wishlist"> <i
                                                                    class="icon fa fa-heart"></i> </a></li>
                                                    <li class="lnk"><a class="add-to-cart" href="detail.html"
                                                                       title="Compare"> <i class="fa fa-signal"
                                                                                           aria-hidden="true"></i> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.action -->
                                        </div>
                                        <!-- /.cart -->
                                    </div>
                                    <!-- /.product -->

                                </div>
                                <!-- /.products -->
                            </div>
                            <!-- /.item -->

                            <div class="item item-carousel">
                                <div class="products">
                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image"><a href="detail.html"><img
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p8.jpg" alt=""></a></div>
                                            <!-- /.image -->

                                            <div class="tag hot"><span>hot</span></div>
                                        </div>
                                        <!-- /.product-image -->

                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="description"></div>
                                            <div class="product-price"><span class="price"> $450.99 </span> <span
                                                        class="price-before-discount">$ 800</span></div>
                                            <!-- /.product-price -->

                                        </div>
                                        <!-- /.product-info -->
                                        <div class="cart clearfix animate-effect">
                                            <div class="action">
                                                <ul class="list-unstyled">
                                                    <li class="add-cart-button btn-group">
                                                        <button class="btn btn-primary icon" data-toggle="dropdown"
                                                                type="button"><i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                        <button class="btn btn-primary cart-btn" type="button">Add to
                                                            cart
                                                        </button>
                                                    </li>
                                                    <li class="lnk wishlist"><a class="add-to-cart" href="detail.html"
                                                                                title="Wishlist"> <i
                                                                    class="icon fa fa-heart"></i> </a></li>
                                                    <li class="lnk"><a class="add-to-cart" href="detail.html"
                                                                       title="Compare"> <i class="fa fa-signal"
                                                                                           aria-hidden="true"></i> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.action -->
                                        </div>
                                        <!-- /.cart -->
                                    </div>
                                    <!-- /.product -->

                                </div>
                                <!-- /.products -->
                            </div>
                            <!-- /.item -->

                            <div class="item item-carousel">
                                <div class="products">
                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image"><a href="detail.html"><img
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p9.jpg" alt=""></a></div>
                                            <!-- /.image -->

                                            <div class="tag new"><span>new</span></div>
                                        </div>
                                        <!-- /.product-image -->

                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="description"></div>
                                            <div class="product-price"><span class="price"> $450.99 </span> <span
                                                        class="price-before-discount">$ 800</span></div>
                                            <!-- /.product-price -->

                                        </div>
                                        <!-- /.product-info -->
                                        <div class="cart clearfix animate-effect">
                                            <div class="action">
                                                <ul class="list-unstyled">
                                                    <li class="add-cart-button btn-group">
                                                        <button class="btn btn-primary icon" data-toggle="dropdown"
                                                                type="button"><i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                        <button class="btn btn-primary cart-btn" type="button">Add to
                                                            cart
                                                        </button>
                                                    </li>
                                                    <li class="lnk wishlist"><a class="add-to-cart" href="detail.html"
                                                                                title="Wishlist"> <i
                                                                    class="icon fa fa-heart"></i> </a></li>
                                                    <li class="lnk"><a class="add-to-cart" href="detail.html"
                                                                       title="Compare"> <i class="fa fa-signal"
                                                                                           aria-hidden="true"></i> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.action -->
                                        </div>
                                        <!-- /.cart -->
                                    </div>
                                    <!-- /.product -->

                                </div>
                                <!-- /.products -->
                            </div>
                            <!-- /.item -->

                            <div class="item item-carousel">
                                <div class="products">
                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image"><a href="detail.html"><img
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p10.jpg" alt=""></a></div>
                                            <!-- /.image -->

                                            <div class="tag sale"><span>sale</span></div>
                                        </div>
                                        <!-- /.product-image -->

                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="description"></div>
                                            <div class="product-price"><span class="price"> $450.99 </span> <span
                                                        class="price-before-discount">$ 800</span></div>
                                            <!-- /.product-price -->

                                        </div>
                                        <!-- /.product-info -->
                                        <div class="cart clearfix animate-effect">
                                            <div class="action">
                                                <ul class="list-unstyled">
                                                    <li class="add-cart-button btn-group">
                                                        <button class="btn btn-primary icon" data-toggle="dropdown"
                                                                type="button"><i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                        <button class="btn btn-primary cart-btn" type="button">Add to
                                                            cart
                                                        </button>
                                                    </li>
                                                    <li class="lnk wishlist"><a class="add-to-cart" href="detail.html"
                                                                                title="Wishlist"> <i
                                                                    class="icon fa fa-heart"></i> </a></li>
                                                    <li class="lnk"><a class="add-to-cart" href="detail.html"
                                                                       title="Compare"> <i class="fa fa-signal"
                                                                                           aria-hidden="true"></i> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.action -->
                                        </div>
                                        <!-- /.cart -->
                                    </div>
                                    <!-- /.product -->

                                </div>
                                <!-- /.products -->
                            </div>
                            <!-- /.item -->
                        </div>
                        <!-- /.home-owl-carousel -->
                    </section>
                    <!-- /.section -->
                    <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
                    <!-- ============================================== WIDE PRODUCTS ============================================== -->
                    <div class="wide-banners wow fadeInUp outer-bottom-xs">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="wide-banner cnt-strip">
                                    <div class="image"><img class="img-responsive"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/banners/home-banner.jpg" alt=""></div>
                                    <div class="strip strip-text">
                                        <div class="strip-inner">
                                            <h2 class="text-center">New Mens Fashion<br>
                                                <span class="shopping-needs">Save up to 40% off</span></h2>
                                        </div>
                                    </div>
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                    </div>
                                    <!-- /.new-label -->
                                </div>
                                <!-- /.wide-banner -->
                            </div>
                            <!-- /.col -->

                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.wide-banners -->
                    <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
                    <!-- ============================================== BEST SELLER ============================================== -->

                    <div class="best-deal wow fadeInUp outer-bottom-xs">
                        <h3 class="section-title">Best seller</h3>
                        <div class="sidebar-widget-body outer-top-xs">
                            <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
                                <div class="item">
                                    <div class="products best-product">
                                        <div class="product">
                                            <div class="product-micro">
                                                <div class="row product-micro-row">
                                                    <div class="col col-xs-5">
                                                        <div class="product-image">
                                                            <div class="image"><a href="#"> <img
                                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p20.jpg" alt="">
                                                                </a></div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col2 col-xs-7">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"><span
                                                                        class="price"> $450.99 </span></div>
                                                            <!-- /.product-price -->

                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-micro-row -->
                                            </div>
                                            <!-- /.product-micro -->

                                        </div>
                                        <div class="product">
                                            <div class="product-micro">
                                                <div class="row product-micro-row">
                                                    <div class="col col-xs-5">
                                                        <div class="product-image">
                                                            <div class="image"><a href="#"> <img
                                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p21.jpg" alt="">
                                                                </a></div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col2 col-xs-7">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"><span
                                                                        class="price"> $450.99 </span></div>
                                                            <!-- /.product-price -->

                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-micro-row -->
                                            </div>
                                            <!-- /.product-micro -->

                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="products best-product">
                                        <div class="product">
                                            <div class="product-micro">
                                                <div class="row product-micro-row">
                                                    <div class="col col-xs-5">
                                                        <div class="product-image">
                                                            <div class="image"><a href="#"> <img
                                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p22.jpg" alt="">
                                                                </a></div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col2 col-xs-7">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"><span
                                                                        class="price"> $450.99 </span></div>
                                                            <!-- /.product-price -->

                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-micro-row -->
                                            </div>
                                            <!-- /.product-micro -->

                                        </div>
                                        <div class="product">
                                            <div class="product-micro">
                                                <div class="row product-micro-row">
                                                    <div class="col col-xs-5">
                                                        <div class="product-image">
                                                            <div class="image"><a href="#"> <img
                                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p23.jpg" alt="">
                                                                </a></div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col2 col-xs-7">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"><span
                                                                        class="price"> $450.99 </span></div>
                                                            <!-- /.product-price -->

                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-micro-row -->
                                            </div>
                                            <!-- /.product-micro -->

                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="products best-product">
                                        <div class="product">
                                            <div class="product-micro">
                                                <div class="row product-micro-row">
                                                    <div class="col col-xs-5">
                                                        <div class="product-image">
                                                            <div class="image"><a href="#"> <img
                                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p24.jpg" alt="">
                                                                </a></div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col2 col-xs-7">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"><span
                                                                        class="price"> $450.99 </span></div>
                                                            <!-- /.product-price -->

                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-micro-row -->
                                            </div>
                                            <!-- /.product-micro -->

                                        </div>
                                        <div class="product">
                                            <div class="product-micro">
                                                <div class="row product-micro-row">
                                                    <div class="col col-xs-5">
                                                        <div class="product-image">
                                                            <div class="image"><a href="#"> <img
                                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p25.jpg" alt="">
                                                                </a></div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col2 col-xs-7">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"><span
                                                                        class="price"> $450.99 </span></div>
                                                            <!-- /.product-price -->

                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-micro-row -->
                                            </div>
                                            <!-- /.product-micro -->

                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="products best-product">
                                        <div class="product">
                                            <div class="product-micro">
                                                <div class="row product-micro-row">
                                                    <div class="col col-xs-5">
                                                        <div class="product-image">
                                                            <div class="image"><a href="#"> <img
                                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p26.jpg" alt="">
                                                                </a></div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col2 col-xs-7">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"><span
                                                                        class="price"> $450.99 </span></div>
                                                            <!-- /.product-price -->

                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-micro-row -->
                                            </div>
                                            <!-- /.product-micro -->

                                        </div>
                                        <div class="product">
                                            <div class="product-micro">
                                                <div class="row product-micro-row">
                                                    <div class="col col-xs-5">
                                                        <div class="product-image">
                                                            <div class="image"><a href="#"> <img
                                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p27.jpg" alt="">
                                                                </a></div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col2 col-xs-7">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"><span
                                                                        class="price"> $450.99 </span></div>
                                                            <!-- /.product-price -->

                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-micro-row -->
                                            </div>
                                            <!-- /.product-micro -->

                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="products best-product">
                                        <div class="product">
                                            <div class="product-micro">
                                                <div class="row product-micro-row">
                                                    <div class="col col-xs-5">
                                                        <div class="product-image">
                                                            <div class="image"><a href="#"> <img
                                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p20.jpg" alt="">
                                                                </a></div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col2 col-xs-7">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"><span
                                                                        class="price"> $450.99 </span></div>
                                                            <!-- /.product-price -->

                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-micro-row -->
                                            </div>
                                            <!-- /.product-micro -->

                                        </div>
                                        <div class="product">
                                            <div class="product-micro">
                                                <div class="row product-micro-row">
                                                    <div class="col col-xs-5">
                                                        <div class="product-image">
                                                            <div class="image"><a href="#"> <img
                                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p21.jpg" alt="">
                                                                </a></div>
                                                            <!-- /.image -->

                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col2 col-xs-7">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price"><span
                                                                        class="price"> $450.99 </span></div>
                                                            <!-- /.product-price -->

                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-micro-row -->
                                            </div>
                                            <!-- /.product-micro -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.sidebar-widget-body -->
                    </div>
                    <!-- /.sidebar-widget -->
                    <!-- ============================================== BEST SELLER : END ============================================== -->

                    <!-- ============================================== BLOG SLIDER ============================================== -->
                    <section class="section latest-blog outer-bottom-vs wow fadeInUp">
                        <h3 class="section-title">latest form blog</h3>
                        <div class="blog-slider-container outer-top-xs">
                            <div class="owl-carousel blog-slider custom-carousel">
                                <div class="item">
                                    <div class="blog-post">
                                        <div class="blog-post-image">
                                            <div class="image"><a href="blog.html"><img
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-post/post1.jpg" alt=""></a></div>
                                        </div>
                                        <!-- /.blog-post-image -->

                                        <div class="blog-post-info text-left">
                                            <h3 class="name"><a href="#">Voluptatem accusantium doloremque
                                                    laudantium</a></h3>
                                            <span class="info">By Jone Doe &nbsp;|&nbsp; 21 March 2016 </span>
                                            <p class="text">Sed quia non numquam eius modi tempora incidunt ut labore et
                                                dolore magnam aliquam quaerat voluptatem.</p>
                                            <a href="#" class="lnk btn btn-primary">Read more</a></div>
                                        <!-- /.blog-post-info -->

                                    </div>
                                    <!-- /.blog-post -->
                                </div>
                                <!-- /.item -->

                                <div class="item">
                                    <div class="blog-post">
                                        <div class="blog-post-image">
                                            <div class="image"><a href="blog.html"><img
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-post/post2.jpg" alt=""></a></div>
                                        </div>
                                        <!-- /.blog-post-image -->

                                        <div class="blog-post-info text-left">
                                            <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla
                                                    pariatur</a></h3>
                                            <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                                            <p class="text">Sed quia non numquam eius modi tempora incidunt ut labore et
                                                dolore magnam aliquam quaerat voluptatem.</p>
                                            <a href="#" class="lnk btn btn-primary">Read more</a></div>
                                        <!-- /.blog-post-info -->

                                    </div>
                                    <!-- /.blog-post -->
                                </div>
                                <!-- /.item -->

                                <!-- /.item -->

                                <div class="item">
                                    <div class="blog-post">
                                        <div class="blog-post-image">
                                            <div class="image"><a href="blog.html"><img
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-post/post1.jpg" alt=""></a></div>
                                        </div>
                                        <!-- /.blog-post-image -->

                                        <div class="blog-post-info text-left">
                                            <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla
                                                    pariatur</a></h3>
                                            <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                                            <p class="text">Sed ut perspiciatis unde omnis iste natus error sit
                                                voluptatem accusantium</p>
                                            <a href="#" class="lnk btn btn-primary">Read more</a></div>
                                        <!-- /.blog-post-info -->

                                    </div>
                                    <!-- /.blog-post -->
                                </div>
                                <!-- /.item -->

                                <div class="item">
                                    <div class="blog-post">
                                        <div class="blog-post-image">
                                            <div class="image"><a href="blog.html"><img
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-post/post2.jpg" alt=""></a></div>
                                        </div>
                                        <!-- /.blog-post-image -->

                                        <div class="blog-post-info text-left">
                                            <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla
                                                    pariatur</a></h3>
                                            <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                                            <p class="text">Sed ut perspiciatis unde omnis iste natus error sit
                                                voluptatem accusantium</p>
                                            <a href="#" class="lnk btn btn-primary">Read more</a></div>
                                        <!-- /.blog-post-info -->

                                    </div>
                                    <!-- /.blog-post -->
                                </div>
                                <!-- /.item -->

                                <div class="item">
                                    <div class="blog-post">
                                        <div class="blog-post-image">
                                            <div class="image"><a href="blog.html"><img
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-post/post1.jpg" alt=""></a></div>
                                        </div>
                                        <!-- /.blog-post-image -->

                                        <div class="blog-post-info text-left">
                                            <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla
                                                    pariatur</a></h3>
                                            <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                                            <p class="text">Sed ut perspiciatis unde omnis iste natus error sit
                                                voluptatem accusantium</p>
                                            <a href="#" class="lnk btn btn-primary">Read more</a></div>
                                        <!-- /.blog-post-info -->

                                    </div>
                                    <!-- /.blog-post -->
                                </div>
                                <!-- /.item -->

                            </div>
                            <!-- /.owl-carousel -->
                        </div>
                        <!-- /.blog-slider-container -->
                    </section>
                    <!-- /.section -->
                    <!-- ============================================== BLOG SLIDER : END ============================================== -->

                    <!-- ============================================== FEATURED PRODUCTS ============================================== -->
                    <section class="section wow fadeInUp new-arriavls">
                        <h3 class="section-title">New Arrivals</h3>
                        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
                            <div class="item item-carousel">
                                <div class="products">
                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image"><a href="detail.html"><img
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p19.jpg" alt=""></a></div>
                                            <!-- /.image -->

                                            <div class="tag new"><span>new</span></div>
                                        </div>
                                        <!-- /.product-image -->

                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="description"></div>
                                            <div class="product-price"><span class="price"> $450.99 </span> <span
                                                        class="price-before-discount">$ 800</span></div>
                                            <!-- /.product-price -->

                                        </div>
                                        <!-- /.product-info -->
                                        <div class="cart clearfix animate-effect">
                                            <div class="action">
                                                <ul class="list-unstyled">
                                                    <li class="add-cart-button btn-group">
                                                        <button class="btn btn-primary icon" data-toggle="dropdown"
                                                                type="button"><i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                        <button class="btn btn-primary cart-btn" type="button">Add to
                                                            cart
                                                        </button>
                                                    </li>
                                                    <li class="lnk wishlist"><a class="add-to-cart" href="detail.html"
                                                                                title="Wishlist"> <i
                                                                    class="icon fa fa-heart"></i> </a></li>
                                                    <li class="lnk"><a class="add-to-cart" href="detail.html"
                                                                       title="Compare"> <i class="fa fa-signal"
                                                                                           aria-hidden="true"></i> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.action -->
                                        </div>
                                        <!-- /.cart -->
                                    </div>
                                    <!-- /.product -->

                                </div>
                                <!-- /.products -->
                            </div>
                            <!-- /.item -->

                            <div class="item item-carousel">
                                <div class="products">
                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image"><a href="detail.html"><img
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p28.jpg" alt=""></a></div>
                                            <!-- /.image -->

                                            <div class="tag new"><span>new</span></div>
                                        </div>
                                        <!-- /.product-image -->

                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="description"></div>
                                            <div class="product-price"><span class="price"> $450.99 </span> <span
                                                        class="price-before-discount">$ 800</span></div>
                                            <!-- /.product-price -->

                                        </div>
                                        <!-- /.product-info -->
                                        <div class="cart clearfix animate-effect">
                                            <div class="action">
                                                <ul class="list-unstyled">
                                                    <li class="add-cart-button btn-group">
                                                        <button class="btn btn-primary icon" data-toggle="dropdown"
                                                                type="button"><i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                        <button class="btn btn-primary cart-btn" type="button">Add to
                                                            cart
                                                        </button>
                                                    </li>
                                                    <li class="lnk wishlist"><a class="add-to-cart" href="detail.html"
                                                                                title="Wishlist"> <i
                                                                    class="icon fa fa-heart"></i> </a></li>
                                                    <li class="lnk"><a class="add-to-cart" href="detail.html"
                                                                       title="Compare"> <i class="fa fa-signal"
                                                                                           aria-hidden="true"></i> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.action -->
                                        </div>
                                        <!-- /.cart -->
                                    </div>
                                    <!-- /.product -->

                                </div>
                                <!-- /.products -->
                            </div>
                            <!-- /.item -->

                            <div class="item item-carousel">
                                <div class="products">
                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image"><a href="detail.html"><img
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p30.jpg" alt=""></a></div>
                                            <!-- /.image -->

                                            <div class="tag hot"><span>hot</span></div>
                                        </div>
                                        <!-- /.product-image -->

                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="description"></div>
                                            <div class="product-price"><span class="price"> $450.99 </span> <span
                                                        class="price-before-discount">$ 800</span></div>
                                            <!-- /.product-price -->

                                        </div>
                                        <!-- /.product-info -->
                                        <div class="cart clearfix animate-effect">
                                            <div class="action">
                                                <ul class="list-unstyled">
                                                    <li class="add-cart-button btn-group">
                                                        <button class="btn btn-primary icon" data-toggle="dropdown"
                                                                type="button"><i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                        <button class="btn btn-primary cart-btn" type="button">Add to
                                                            cart
                                                        </button>
                                                    </li>
                                                    <li class="lnk wishlist"><a class="add-to-cart" href="detail.html"
                                                                                title="Wishlist"> <i
                                                                    class="icon fa fa-heart"></i> </a></li>
                                                    <li class="lnk"><a class="add-to-cart" href="detail.html"
                                                                       title="Compare"> <i class="fa fa-signal"
                                                                                           aria-hidden="true"></i> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.action -->
                                        </div>
                                        <!-- /.cart -->
                                    </div>
                                    <!-- /.product -->

                                </div>
                                <!-- /.products -->
                            </div>
                            <!-- /.item -->

                            <div class="item item-carousel">
                                <div class="products">
                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image"><a href="detail.html"><img
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p1.jpg" alt=""></a></div>
                                            <!-- /.image -->

                                            <div class="tag hot"><span>hot</span></div>
                                        </div>
                                        <!-- /.product-image -->

                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="description"></div>
                                            <div class="product-price"><span class="price"> $450.99 </span> <span
                                                        class="price-before-discount">$ 800</span></div>
                                            <!-- /.product-price -->

                                        </div>
                                        <!-- /.product-info -->
                                        <div class="cart clearfix animate-effect">
                                            <div class="action">
                                                <ul class="list-unstyled">
                                                    <li class="add-cart-button btn-group">
                                                        <button class="btn btn-primary icon" data-toggle="dropdown"
                                                                type="button"><i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                        <button class="btn btn-primary cart-btn" type="button">Add to
                                                            cart
                                                        </button>
                                                    </li>
                                                    <li class="lnk wishlist"><a class="add-to-cart" href="detail.html"
                                                                                title="Wishlist"> <i
                                                                    class="icon fa fa-heart"></i> </a></li>
                                                    <li class="lnk"><a class="add-to-cart" href="detail.html"
                                                                       title="Compare"> <i class="fa fa-signal"
                                                                                           aria-hidden="true"></i> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.action -->
                                        </div>
                                        <!-- /.cart -->
                                    </div>
                                    <!-- /.product -->

                                </div>
                                <!-- /.products -->
                            </div>
                            <!-- /.item -->

                            <div class="item item-carousel">
                                <div class="products">
                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image"><a href="detail.html"><img
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p2.jpg" alt=""></a></div>
                                            <!-- /.image -->

                                            <div class="tag sale"><span>sale</span></div>
                                        </div>
                                        <!-- /.product-image -->

                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="description"></div>
                                            <div class="product-price"><span class="price"> $450.99 </span> <span
                                                        class="price-before-discount">$ 800</span></div>
                                            <!-- /.product-price -->

                                        </div>
                                        <!-- /.product-info -->
                                        <div class="cart clearfix animate-effect">
                                            <div class="action">
                                                <ul class="list-unstyled">
                                                    <li class="add-cart-button btn-group">
                                                        <button class="btn btn-primary icon" data-toggle="dropdown"
                                                                type="button"><i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                        <button class="btn btn-primary cart-btn" type="button">Add to
                                                            cart
                                                        </button>
                                                    </li>
                                                    <li class="lnk wishlist"><a class="add-to-cart" href="detail.html"
                                                                                title="Wishlist"> <i
                                                                    class="icon fa fa-heart"></i> </a></li>
                                                    <li class="lnk"><a class="add-to-cart" href="detail.html"
                                                                       title="Compare"> <i class="fa fa-signal"
                                                                                           aria-hidden="true"></i> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.action -->
                                        </div>
                                        <!-- /.cart -->
                                    </div>
                                    <!-- /.product -->

                                </div>
                                <!-- /.products -->
                            </div>
                            <!-- /.item -->

                            <div class="item item-carousel">
                                <div class="products">
                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image"><a href="detail.html"><img
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/products/p3.jpg" alt=""></a></div>
                                            <!-- /.image -->

                                            <div class="tag sale"><span>sale</span></div>
                                        </div>
                                        <!-- /.product-image -->

                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="description"></div>
                                            <div class="product-price"><span class="price"> $450.99 </span> <span
                                                        class="price-before-discount">$ 800</span></div>
                                            <!-- /.product-price -->

                                        </div>
                                        <!-- /.product-info -->
                                        <div class="cart clearfix animate-effect">
                                            <div class="action">
                                                <ul class="list-unstyled">
                                                    <li class="add-cart-button btn-group">
                                                        <button class="btn btn-primary icon" data-toggle="dropdown"
                                                                type="button"><i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                        <button class="btn btn-primary cart-btn" type="button">Add to
                                                            cart
                                                        </button>
                                                    </li>
                                                    <li class="lnk wishlist"><a class="add-to-cart" href="detail.html"
                                                                                title="Wishlist"> <i
                                                                    class="icon fa fa-heart"></i> </a></li>
                                                    <li class="lnk"><a class="add-to-cart" href="detail.html"
                                                                       title="Compare"> <i class="fa fa-signal"
                                                                                           aria-hidden="true"></i> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.action -->
                                        </div>
                                        <!-- /.cart -->
                                    </div>
                                    <!-- /.product -->

                                </div>
                                <!-- /.products -->
                            </div>
                            <!-- /.item -->
                        </div>
                        <!-- /.home-owl-carousel -->
                    </section>
                    <!-- /.section -->
                    <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->

                </div>
                <!-- /.homebanner-holder -->
                <!-- ============================================== CONTENT : END ============================================== -->
            </div>
            <!-- /.row -->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
            <div id="brands-carousel" class="logo-slider wow fadeInUp">
                <div class="logo-slider-inner">
                    <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                        <div class="item m-t-15"><a href="#" class="image"> <img
                                        data-echo="<?php echo get_template_directory_uri(); ?>/assets/images/brands/brand1.png" src="<?php echo get_template_directory_uri(); ?>/assets/images/blank.gif"
                                        alt=""> </a></div>
                        <!--/.item-->

                        <div class="item m-t-10"><a href="#" class="image"> <img
                                        data-echo="<?php echo get_template_directory_uri(); ?>/assets/images/brands/brand2.png" src="<?php echo get_template_directory_uri(); ?>/assets/images/blank.gif"
                                        alt=""> </a></div>
                        <!--/.item-->

                        <div class="item"><a href="#" class="image"> <img data-echo="<?php echo get_template_directory_uri(); ?>/assets/images/brands/brand3.png"
                                                                          src="<?php echo get_template_directory_uri(); ?>/assets/images/blank.gif" alt=""> </a>
                        </div>
                        <!--/.item-->

                        <div class="item"><a href="#" class="image"> <img data-echo="<?php echo get_template_directory_uri(); ?>/assets/images/brands/brand4.png"
                                                                          src="<?php echo get_template_directory_uri(); ?>/assets/images/blank.gif" alt=""> </a>
                        </div>
                        <!--/.item-->

                        <div class="item"><a href="#" class="image"> <img data-echo="<?php echo get_template_directory_uri(); ?>/assets/images/brands/brand5.png"
                                                                          src="<?php echo get_template_directory_uri(); ?>/assets/images/blank.gif" alt=""> </a>
                        </div>
                        <!--/.item-->

                        <div class="item"><a href="#" class="image"> <img data-echo="<?php echo get_template_directory_uri(); ?>/assets/images/brands/brand6.png"
                                                                          src="<?php echo get_template_directory_uri(); ?>/assets/images/blank.gif" alt=""> </a>
                        </div>
                        <!--/.item-->

                        <div class="item"><a href="#" class="image"> <img data-echo="<?php echo get_template_directory_uri(); ?>/assets/images/brands/brand2.png"
                                                                          src="<?php echo get_template_directory_uri(); ?>/assets/images/blank.gif" alt=""> </a>
                        </div>
                        <!--/.item-->

                        <div class="item"><a href="#" class="image"> <img data-echo="<?php echo get_template_directory_uri(); ?>/assets/images/brands/brand4.png"
                                                                          src="<?php echo get_template_directory_uri(); ?>/assets/images/blank.gif" alt=""> </a>
                        </div>
                        <!--/.item-->

                        <div class="item"><a href="#" class="image"> <img data-echo="<?php echo get_template_directory_uri(); ?>/assets/images/brands/brand1.png"
                                                                          src="<?php echo get_template_directory_uri(); ?>/assets/images/blank.gif" alt=""> </a>
                        </div>
                        <!--/.item-->

                        <div class="item"><a href="#" class="image"> <img data-echo="<?php echo get_template_directory_uri(); ?>/assets/images/brands/brand5.png"
                                                                          src="<?php echo get_template_directory_uri(); ?>/assets/images/blank.gif" alt=""> </a>
                        </div>
                        <!--/.item-->
                    </div>
                    <!-- /.owl-carousel #logo-slider -->
                </div>
                <!-- /.logo-slider-inner -->

            </div>
            <!-- /.logo-slider -->
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#top-banner-and-menu -->

<?php
get_footer();
