@extends('layouts.app')

@section('title', 'Главная')

@section('content')

    <!--slider area start-->
    <div class="slider_area owl-carousel">
        <div class="single_slider slider_one">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="slider_content">
                            <h1>Dual Front Camera <br><strong>Canvas Gear</strong></h1>
                            <h3>get up to</h3>
                            <h2>30% off</h2>
                            <p>Upgrade every 12 months</p>
                            <a href="#">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider slider_two">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="slider_content">
                            <h1><strong>Nx80 Wireless </strong><br> Headphones </h1>
                            <h3>get up to</h3>
                            <h2>30% off</h2>
                            <p>20.3 Megapixels plus 80 Megapixel</p>
                            <a href="#">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--slider area end-->

    <!--shipping area start-->
{{--
    @include('partials.shipping')--}}
    <!--shipping area end-->

    <!--categories banner start-->
   {{-- <div class="categorie_banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="categorie_banner_title">
                        <h3>Top Categories11</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="categorie_banner_active owl-carousel">
                    <div class="single_categorie_banner">
                        <div class="categorie_banner_thumb">
                            <img src="assets/img/banner/banner1.png" alt="">
                            <div class="categorie_banner_content">
                                <h3>Consoles & Games</h3>
                                <ul>
                                    <li><a href="#">PC Gamepads</a></li>
                                    <li><a href="#">Controllers</a></li>
                                    <li><a href="#">Video Game</a></li>
                                    <li><a href="#">Xbox Consoles</a></li>
                                    <li><a href="#">See More</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single_categorie_banner">
                        <div class="categorie_banner_thumb">
                            <img src="assets/img/banner/banner2.png" alt="">
                            <div class="categorie_banner_content">
                                <h3>Headphoness</h3>
                                <ul>
                                    <li><a href="#">Earbud & In-Ear</a></li>
                                    <li><a href="#">On-Ear</a></li>
                                    <li><a href="#">Over-Ear</a></li>
                                    <li><a href="#">Microphones</a></li>
                                    <li><a href="#">See More</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single_categorie_banner">
                        <div class="categorie_banner_thumb">
                            <img src="assets/img/banner/banner3.png" alt="">
                            <div class="categorie_banner_content">
                                <h3>Camera & Photos</h3>
                                <ul>
                                    <li><a href="#">Digital Cameras</a></li>
                                    <li><a href="#">Cameras</a></li>
                                    <li><a href="#">DSLR Cameras</a></li>
                                    <li><a href="#">Lenses</a></li>
                                    <li><a href="#">See More</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single_categorie_banner">
                        <div class="categorie_banner_thumb">
                            <img src="assets/img/banner/banner4.png" alt="">
                            <div class="categorie_banner_content">
                                <h3>Laptop & Computers</h3>
                                <ul>
                                    <li><a href="#">PC Gamepads</a></li>
                                    <li><a href="#">Controllers</a></li>
                                    <li><a href="#">Video Game</a></li>
                                    <li><a href="#">Xbox Consoles</a></li>
                                    <li><a href="#">See More</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single_categorie_banner">
                        <div class="categorie_banner_thumb">
                            <img src="assets/img/banner/banner1.png" alt="">
                            <div class="categorie_banner_content">
                                <h3>Earbud & In-Ear</h3>
                                <ul>
                                    <li><a href="#">See More</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single_categorie_banner">
                        <div class="categorie_banner_thumb">
                            <img src="assets/img/banner/banner2.png" alt="">
                            <div class="categorie_banner_content">
                                <h3>On-Ear</h3>
                                <ul>
                                    <li><a href="#">See More</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
    <!--categories banner end-->

    <!--countdown product area start-->
    {{--<div class="countdown_product">
        <div class="container">
            <div class="countdown_product_inner">
                <div class="row">
                    <div class="col-12">
                        <div class="countdown_product_title">
                            <h3>Deals Of The Weeks</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="countdown_produtc_active owl-carousel">
                        <div class="col-12">
                            <div class="countdown_produtc_wrapper">
                                <div class="single_countdown_product">
                                    <div class="countdown_product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product1.jpg" alt=""></a>
                                        <div class="sale_percent">
                                            <span>15%</span>
                                        </div>
                                    </div>
                                    <div class="countdown_product_content">
                                        <div class="countdown_product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3><a href="product-details.html">PowMax Gapo PG-9037q</a></h3>
                                        <div class="countdown_product_price">
                                            <span class="old_price">$26.00</span>
                                            <span class="current_price">$23.00</span>
                                        </div>
                                        <div class="countdown_product_desc">
                                            <p>The Imaginext DC Super Friends Batbot Xtreme is the.</p>
                                        </div>
                                        <div class="product_timing">
                                            <h3>Hurry up!</h3>
                                            <p>Offer ends in:</p>
                                            <div data-countdown="2024/12/15"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="countdown_produtc_wrapper">
                                <div class="single_countdown_product">
                                    <div class="countdown_product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product3.jpg" alt=""></a>
                                        <div class="sale_percent">
                                            <span>15%</span>
                                        </div>
                                    </div>
                                    <div class="countdown_product_content">
                                        <div class="countdown_product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3><a href="product-details.html">	Bonna 21 mega pixelsf</a></h3>
                                        <div class="countdown_product_price">
                                            <span class="old_price">$26.00</span>
                                            <span class="current_price">$23.00</span>
                                        </div>
                                        <div class="countdown_product_desc">
                                            <p>The Imaginext DC Super Friends Batbot Xtreme is the.</p>
                                        </div>
                                        <div class="product_timing">
                                            <h3>Hurry up!</h3>
                                            <p>Offer ends in:</p>
                                            <div data-countdown="2024/12/15"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="countdown_produtc_wrapper">
                                <div class="single_countdown_product">
                                    <div class="countdown_product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product4.jpg" alt=""></a>
                                        <div class="sale_percent">
                                            <span>10%</span>
                                        </div>
                                    </div>
                                    <div class="countdown_product_content">
                                        <div class="countdown_product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3><a href="product-details.html">Mpow 059 Bluetootht</a></h3>
                                        <div class="countdown_product_price">
                                            <span class="old_price">$26.00</span>
                                            <span class="current_price">$23.00</span>
                                        </div>
                                        <div class="countdown_product_desc">
                                            <p>The Imaginext DC Super Friends Batbot Xtreme is the.</p>
                                        </div>
                                        <div class="product_timing">
                                            <h3>Hurry up!</h3>
                                            <p>Offer ends in:</p>
                                            <div data-countdown="2024/12/15"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>--}}
    <!--countdown product area end-->

    <!--banner area start-->
    {{--<div class="banner_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="#"><img src="assets/img/banner/banner5.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-12">
                            <div class="single_banner">
                                <div class="banner_thumb">
                                    <a href="#"><img src="assets/img/banner/banner6.png" alt=""></a>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-7">
                            <div class="single_banner">
                                <div class="banner_thumb">
                                    <a href="#"><img src="assets/img/banner/banner7.png" alt=""></a>
                                </div>
                            </div>
                            <div class="single_banner">
                                <div class="banner_thumb">
                                    <a href="#"><img src="assets/img/banner/banner8.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <div class="single_banner">
                                <div class="banner_thumb">
                                    <a href="#"><img src="assets/img/banner/banner9.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
    <!--banner area end-->

    <!--product area start-->
    {{--<div class="produtc_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_tab_button">
                        <ul class="nav" role="tablist">
                            <li>
                                <a class="active" data-bs-toggle="tab" href="#Products" role="tab" aria-controls="Products" aria-selected="true"> New Products</a>
                            </li>
                            <li>
                                <a data-bs-toggle="tab" href="#OnSale" role="tab" aria-controls="OnSale" aria-selected="false"> OnSale</a>
                            </li>
                            <li>
                                <a data-bs-toggle="tab" href="#Feature" role="tab" aria-controls="Feature" aria-selected="false">  Feature Products</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="Products" role="tabpanel">
                    <div class="row">
                        <div class="product_active owl-carousel">
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product6.jpg" alt=""></a>
                                        <div class="btn_quickview">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3><a href="product-details.html">Nonstick Dishwasher PFOA</a></h3>
                                        <div class="product_price">
                                            <span class="current_price">$23.00</span>
                                        </div>
                                        <div class="product_action">
                                            <ul>
                                                <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product7.jpg" alt=""></a>
                                        <div class="btn_quickview">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3><a href="product-details.html">Cutlery Knife Set</a></h3>
                                        <div class="product_price">
                                            <span class="current_price">$20.00</span>
                                        </div>
                                        <div class="product_action">
                                            <ul>
                                                <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product8.jpg" alt=""></a>
                                        <div class="btn_quickview">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3><a href="product-details.html">Aicok Stand Mixet</a></h3>
                                        <div class="product_price">
                                            <span class="current_price">$28.00</span>
                                        </div>
                                        <div class="product_action">
                                            <ul>
                                                <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product9.jpg" alt=""></a>
                                        <div class="btn_quickview">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3><a href="product-details.html">Cuisinart DCC-3200</a></h3>
                                        <div class="product_price">
                                            <span class="current_price">$27.00</span>
                                        </div>
                                        <div class="product_action">
                                            <ul>
                                                <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product10.jpg" alt=""></a>
                                        <div class="btn_quickview">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                        </div>

                                    </div>
                                    <div class="product_content">
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3><a href="product-details.html">Classic 17-Piece Tool	</a></h3>
                                        <div class="product_price">
                                            <span class="current_price">$24.00</span>
                                        </div>
                                        <div class="product_action">
                                            <ul>
                                                <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="OnSale" role="tabpanel">
                    <div class="row">
                        <div class="product_active owl-carousel">
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product12.jpg" alt=""></a>
                                        <div class="btn_quickview">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3><a href="product-details.html">Nonstick Dishwasher PFOA</a></h3>
                                        <div class="product_price">
                                            <span class="current_price">$23.00</span>
                                        </div>
                                        <div class="product_action">
                                            <ul>
                                                <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product13.jpg" alt=""></a>
                                        <div class="btn_quickview">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3><a href="product-details.html">Cutlery Knife Set</a></h3>
                                        <div class="product_price">
                                            <span class="current_price">$20.00</span>
                                        </div>
                                        <div class="product_action">
                                            <ul>
                                                <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product14.jpg" alt=""></a>
                                        <div class="btn_quickview">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3><a href="product-details.html">Aicok Stand Mixet</a></h3>
                                        <div class="product_price">
                                            <span class="current_price">$28.00</span>
                                        </div>
                                        <div class="product_action">
                                            <ul>
                                                <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product15.jpg" alt=""></a>
                                        <div class="btn_quickview">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3><a href="product-details.html">Cuisinart DCC-3200</a></h3>
                                        <div class="product_price">
                                            <span class="current_price">$27.00</span>
                                        </div>
                                        <div class="product_action">
                                            <ul>
                                                <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product16.jpg" alt=""></a>
                                        <div class="btn_quickview">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                        </div>

                                    </div>
                                    <div class="product_content">
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3><a href="product-details.html">Classic 17-Piece Tool	</a></h3>
                                        <div class="product_price">
                                            <span class="current_price">$24.00</span>
                                        </div>
                                        <div class="product_action">
                                            <ul>
                                                <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="Feature" role="tabpanel">
                    <div class="row">
                        <div class="product_active owl-carousel">
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product17.jpg" alt=""></a>
                                        <div class="btn_quickview">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3><a href="product-details.html">Nonstick Dishwasher PFOA</a></h3>
                                        <div class="product_price">
                                            <span class="current_price">$23.00</span>
                                        </div>
                                        <div class="product_action">
                                            <ul>
                                                <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product18.jpg" alt=""></a>
                                        <div class="btn_quickview">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3><a href="product-details.html">Cutlery Knife Set</a></h3>
                                        <div class="product_price">
                                            <span class="current_price">$20.00</span>
                                        </div>
                                        <div class="product_action">
                                            <ul>
                                                <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product19.jpg" alt=""></a>
                                        <div class="btn_quickview">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3><a href="product-details.html">Aicok Stand Mixet</a></h3>
                                        <div class="product_price">
                                            <span class="current_price">$28.00</span>
                                        </div>
                                        <div class="product_action">
                                            <ul>
                                                <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product20.jpg" alt=""></a>
                                        <div class="btn_quickview">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3><a href="product-details.html">Cuisinart DCC-3200</a></h3>
                                        <div class="product_price">
                                            <span class="current_price">$27.00</span>
                                        </div>
                                        <div class="product_action">
                                            <ul>
                                                <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product10.jpg" alt=""></a>
                                        <div class="btn_quickview">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                        </div>

                                    </div>
                                    <div class="product_content">
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3><a href="product-details.html">Classic 17-Piece Tool	</a></h3>
                                        <div class="product_price">
                                            <span class="current_price">$24.00</span>
                                        </div>
                                        <div class="product_action">
                                            <ul>
                                                <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
    <!--product area end-->

    <!--discount banner srart-->
    {{--<div class="discount_banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="discount_banner_thumb">
                        <a href="#"><img src="assets/img/banner/bgbanner.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
    <!--discount banner end-->

    <!--consoles product start-->
    {{--<div class="consoles_product">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="consoles_header">
                        <div class="consoles_product_title">
                            <h3>Consoles & Games</h3>
                        </div>
                        <div class="product_tab_button">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-bs-toggle="tab" href="#Gamepads" role="tab" aria-controls="Gamepads" aria-selected="true"> PC Gamepads</a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#Control" role="tab" aria-controls="Control" aria-selected="false"> Controllers</a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#Game" role="tab" aria-controls="Game" aria-selected="false">  Video Game</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="#"><img src="assets/img/banner/bgbanner2.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="Gamepads" role="tabpanel">
                            <div class="row">
                                <div class="consoles_product_active owl-carousel">
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product21.jpg" alt=""></a>
                                                <div class="btn_quickview">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h3><a href="product-details.html">Nonstick Dishwasher PFOA</a></h3>
                                                <div class="product_price">
                                                    <span class="current_price">$23.00</span>
                                                </div>
                                                <div class="product_action">
                                                    <ul>
                                                        <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                        <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                        <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product22.jpg" alt=""></a>
                                                <div class="btn_quickview">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h3><a href="product-details.html">Cutlery Knife Set</a></h3>
                                                <div class="product_price">
                                                    <span class="current_price">$20.00</span>
                                                </div>
                                                <div class="product_action">
                                                    <ul>
                                                        <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                        <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                        <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product23.jpg" alt=""></a>
                                                <div class="btn_quickview">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h3><a href="product-details.html">Aicok Stand Mixet</a></h3>
                                                <div class="product_price">
                                                    <span class="current_price">$28.00</span>
                                                </div>
                                                <div class="product_action">
                                                    <ul>
                                                        <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                        <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                        <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product9.jpg" alt=""></a>
                                                <div class="btn_quickview">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h3><a href="product-details.html">Cuisinart DCC-3200</a></h3>
                                                <div class="product_price">
                                                    <span class="current_price">$27.00</span>
                                                </div>
                                                <div class="product_action">
                                                    <ul>
                                                        <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                        <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                        <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product10.jpg" alt=""></a>
                                                <div class="btn_quickview">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                                </div>

                                            </div>
                                            <div class="product_content">
                                                <div class="product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h3><a href="product-details.html">Classic 17-Piece Tool	</a></h3>
                                                <div class="product_price">
                                                    <span class="current_price">$24.00</span>
                                                </div>
                                                <div class="product_action">
                                                    <ul>
                                                        <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                        <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                        <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="Control" role="tabpanel">
                            <div class="row">
                                <div class="consoles_product_active owl-carousel">
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product12.jpg" alt=""></a>
                                                <div class="btn_quickview">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h3><a href="product-details.html">Nonstick Dishwasher PFOA</a></h3>
                                                <div class="product_price">
                                                    <span class="current_price">$23.00</span>
                                                </div>
                                                <div class="product_action">
                                                    <ul>
                                                        <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                        <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                        <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product13.jpg" alt=""></a>
                                                <div class="btn_quickview">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h3><a href="product-details.html">Cutlery Knife Set</a></h3>
                                                <div class="product_price">
                                                    <span class="current_price">$20.00</span>
                                                </div>
                                                <div class="product_action">
                                                    <ul>
                                                        <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                        <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                        <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product14.jpg" alt=""></a>
                                                <div class="btn_quickview">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h3><a href="product-details.html">Aicok Stand Mixet</a></h3>
                                                <div class="product_price">
                                                    <span class="current_price">$28.00</span>
                                                </div>
                                                <div class="product_action">
                                                    <ul>
                                                        <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                        <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                        <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product15.jpg" alt=""></a>
                                                <div class="btn_quickview">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h3><a href="product-details.html">Cuisinart DCC-3200</a></h3>
                                                <div class="product_price">
                                                    <span class="current_price">$27.00</span>
                                                </div>
                                                <div class="product_action">
                                                    <ul>
                                                        <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                        <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                        <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product16.jpg" alt=""></a>
                                                <div class="btn_quickview">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                                </div>

                                            </div>
                                            <div class="product_content">
                                                <div class="product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h3><a href="product-details.html">Classic 17-Piece Tool	</a></h3>
                                                <div class="product_price">
                                                    <span class="current_price">$24.00</span>
                                                </div>
                                                <div class="product_action">
                                                    <ul>
                                                        <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                        <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                        <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Game" role="tabpanel">
                            <div class="row">
                                <div class="consoles_product_active owl-carousel">
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product17.jpg" alt=""></a>
                                                <div class="btn_quickview">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h3><a href="product-details.html">Nonstick Dishwasher PFOA</a></h3>
                                                <div class="product_price">
                                                    <span class="current_price">$23.00</span>
                                                </div>
                                                <div class="product_action">
                                                    <ul>
                                                        <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                        <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                        <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product18.jpg" alt=""></a>
                                                <div class="btn_quickview">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h3><a href="product-details.html">Cutlery Knife Set</a></h3>
                                                <div class="product_price">
                                                    <span class="current_price">$20.00</span>
                                                </div>
                                                <div class="product_action">
                                                    <ul>
                                                        <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                        <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                        <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product19.jpg" alt=""></a>
                                                <div class="btn_quickview">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h3><a href="product-details.html">Aicok Stand Mixet</a></h3>
                                                <div class="product_price">
                                                    <span class="current_price">$28.00</span>
                                                </div>
                                                <div class="product_action">
                                                    <ul>
                                                        <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                        <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                        <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product20.jpg" alt=""></a>
                                                <div class="btn_quickview">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h3><a href="product-details.html">Cuisinart DCC-3200</a></h3>
                                                <div class="product_price">
                                                    <span class="current_price">$27.00</span>
                                                </div>
                                                <div class="product_action">
                                                    <ul>
                                                        <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                        <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                        <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/product10.jpg" alt=""></a>
                                                        <div class="btn_quickview">
                                                             <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                                        </div>

                                                    </div>
                                                    <div class="product_content">
                                                        <div class="product_ratting">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <h3><a href="product-details.html">Classic 17-Piece Tool	</a></h3>
                                                        <div class="product_price">
                                                            <span class="current_price">$24.00</span>
                                                        </div>
                                                        <div class="product_action">
                                                            <ul>
                                                                <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                                <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                                <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                               </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>--}}
            <!--consoles product end-->

            <!--pages banner sction start-->
            {{--<div class="home_banner_sction">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="single_banner">
                                <div class="banner_thumb">
                                    <a href="#"><img src="assets/img/banner/bgbanner3.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="single_banner">
                                <div class="banner_thumb">
                                    <a href="#"><img src="assets/img/banner/bgbanner4.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>--}}
            <!--pages banner sction end-->

            <!--consoles product start-->
            {{--<div class="consoles_product">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="consoles_header">
                                <div class="consoles_product_title">
                                    <h3>Camera & Photo</h3>
                                </div>
                                <div class="product_tab_button">
                                    <ul class="nav" role="tablist">
                                        <li>
                                            <a class="active" data-bs-toggle="tab" href="#digital" role="tab" aria-controls="digital" aria-selected="true"> Digital Cameras</a>
                                        </li>
                                        <li>
                                            <a data-bs-toggle="tab" href="#dslr" role="tab" aria-controls="dslr" aria-selected="false"> DSLR Cameras </a>
                                        </li>
                                        <li>
                                            <a data-bs-toggle="tab" href="#cameras" role="tab" aria-controls="cameras" aria-selected="false">  Cameras</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <div class="single_banner">
                                <div class="banner_thumb">
                                    <a href="#"><img src="assets/img/banner/bgbanner5.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="digital" role="tabpanel">
                                   <div class="row">
                                        <div class="consoles_product_active owl-carousel">
                                            <div class="col-lg-3">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                         <a href="product-details.html"><img src="assets/img/product/product17.jpg" alt=""></a>
                                                         <div class="btn_quickview">
                                                             <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="product_ratting">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <h3><a href="product-details.html">Nonstick Dishwasher PFOA</a></h3>
                                                        <div class="product_price">
                                                            <span class="current_price">$23.00</span>
                                                        </div>
                                                        <div class="product_action">
                                                            <ul>
                                                                <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                                <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                                <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                         <a href="product-details.html"><img src="assets/img/product/product18.jpg" alt=""></a>
                                                         <div class="btn_quickview">
                                                             <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="product_ratting">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <h3><a href="product-details.html">Cutlery Knife Set</a></h3>
                                                        <div class="product_price">
                                                            <span class="current_price">$20.00</span>
                                                        </div>
                                                        <div class="product_action">
                                                            <ul>
                                                                <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                                <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                                <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                         <a href="product-details.html"><img src="assets/img/product/product20.jpg" alt=""></a>
                                                         <div class="btn_quickview">
                                                             <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="product_ratting">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <h3><a href="product-details.html">Aicok Stand Mixet</a></h3>
                                                        <div class="product_price">
                                                            <span class="current_price">$28.00</span>
                                                        </div>
                                                        <div class="product_action">
                                                            <ul>
                                                                <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                                <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                                <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                         <a href="product-details.html"><img src="assets/img/product/product9.jpg" alt=""></a>
                                                         <div class="btn_quickview">
                                                             <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="product_ratting">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <h3><a href="product-details.html">Cuisinart DCC-3200</a></h3>
                                                        <div class="product_price">
                                                            <span class="current_price">$27.00</span>
                                                        </div>
                                                        <div class="product_action">
                                                            <ul>
                                                                <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                                <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                                <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/product10.jpg" alt=""></a>
                                                        <div class="btn_quickview">
                                                             <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                                        </div>

                                                    </div>
                                                    <div class="product_content">
                                                        <div class="product_ratting">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <h3><a href="product-details.html">Classic 17-Piece Tool	</a></h3>
                                                        <div class="product_price">
                                                            <span class="current_price">$24.00</span>
                                                        </div>
                                                        <div class="product_action">
                                                            <ul>
                                                                <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                                <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                                <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                   </div>
                                </div>
                                <div class="tab-pane fade" id="dslr" role="tabpanel">
                                   <div class="row">
                                        <div class="consoles_product_active owl-carousel">
                                            <div class="col-lg-3">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                         <a href="product-details.html"><img src="assets/img/product/product12.jpg" alt=""></a>
                                                         <div class="btn_quickview">
                                                             <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="product_ratting">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <h3><a href="product-details.html">Nonstick Dishwasher PFOA</a></h3>
                                                        <div class="product_price">
                                                            <span class="current_price">$23.00</span>
                                                        </div>
                                                        <div class="product_action">
                                                            <ul>
                                                                <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                                <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                                <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                         <a href="product-details.html"><img src="assets/img/product/product13.jpg" alt=""></a>
                                                         <div class="btn_quickview">
                                                             <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="product_ratting">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <h3><a href="product-details.html">Cutlery Knife Set</a></h3>
                                                        <div class="product_price">
                                                            <span class="current_price">$20.00</span>
                                                        </div>
                                                        <div class="product_action">
                                                            <ul>
                                                                <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                                <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                                <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                         <a href="product-details.html"><img src="assets/img/product/product14.jpg" alt=""></a>
                                                         <div class="btn_quickview">
                                                             <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="product_ratting">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <h3><a href="product-details.html">Aicok Stand Mixet</a></h3>
                                                        <div class="product_price">
                                                            <span class="current_price">$28.00</span>
                                                        </div>
                                                        <div class="product_action">
                                                            <ul>
                                                                <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                                <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                                <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                         <a href="product-details.html"><img src="assets/img/product/product15.jpg" alt=""></a>
                                                         <div class="btn_quickview">
                                                             <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="product_ratting">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <h3><a href="product-details.html">Cuisinart DCC-3200</a></h3>
                                                        <div class="product_price">
                                                            <span class="current_price">$27.00</span>
                                                        </div>
                                                        <div class="product_action">
                                                            <ul>
                                                                <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                                <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                                <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/product16.jpg" alt=""></a>
                                                        <div class="btn_quickview">
                                                             <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                                        </div>

                                                    </div>
                                                    <div class="product_content">
                                                        <div class="product_ratting">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <h3><a href="product-details.html">Classic 17-Piece Tool	</a></h3>
                                                        <div class="product_price">
                                                            <span class="current_price">$24.00</span>
                                                        </div>
                                                        <div class="product_action">
                                                            <ul>
                                                                <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                                <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                                <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                               </div>
                               <div class="tab-pane fade" id="cameras" role="tabpanel">
                                   <div class="row">
                                        <div class="consoles_product_active owl-carousel">
                                            <div class="col-lg-3">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                         <a href="product-details.html"><img src="assets/img/product/product17.jpg" alt=""></a>
                                                         <div class="btn_quickview">
                                                             <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="product_ratting">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <h3><a href="product-details.html">Nonstick Dishwasher PFOA</a></h3>
                                                        <div class="product_price">
                                                            <span class="current_price">$23.00</span>
                                                        </div>
                                                        <div class="product_action">
                                                            <ul>
                                                                <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                                <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                                <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                         <a href="product-details.html"><img src="assets/img/product/product18.jpg" alt=""></a>
                                                         <div class="btn_quickview">
                                                             <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="product_ratting">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <h3><a href="product-details.html">Cutlery Knife Set</a></h3>
                                                        <div class="product_price">
                                                            <span class="current_price">$20.00</span>
                                                        </div>
                                                        <div class="product_action">
                                                            <ul>
                                                                <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                                <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                                <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                         <a href="product-details.html"><img src="assets/img/product/product19.jpg" alt=""></a>
                                                         <div class="btn_quickview">
                                                             <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="product_ratting">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <h3><a href="product-details.html">Aicok Stand Mixet</a></h3>
                                                        <div class="product_price">
                                                            <span class="current_price">$28.00</span>
                                                        </div>
                                                        <div class="product_action">
                                                            <ul>
                                                                <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                                <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                                <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                         <a href="product-details.html"><img src="assets/img/product/product20.jpg" alt=""></a>
                                                         <div class="btn_quickview">
                                                             <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="product_ratting">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <h3><a href="product-details.html">Cuisinart DCC-3200</a></h3>
                                                        <div class="product_price">
                                                            <span class="current_price">$27.00</span>
                                                        </div>
                                                        <div class="product_action">
                                                            <ul>
                                                                <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                                <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                                <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/product10.jpg" alt=""></a>
                                                        <div class="btn_quickview">
                                                             <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="Quick View"><i class="ion-ios-eye"></i></a>
                                                        </div>

                                                    </div>
                                                    <div class="product_content">
                                                        <div class="product_ratting">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <h3><a href="product-details.html">Classic 17-Piece Tool	</a></h3>
                                                        <div class="product_price">
                                                            <span class="current_price">$24.00</span>
                                                        </div>
                                                        <div class="product_action">
                                                            <ul>
                                                                <li class="product_cart"><a href="cart.html" title="Add to Cart">Add to Cart</a></li>
                                                                <li class="add_links"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-ios-heart-outline"></i></a></li>
                                                                <li class="add_links"><a href="compare.html" title="Add to Compare"><i class="ion-loop"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                               </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>--}}
            <!--consoles product end-->

             <!--discount banner srart-->
           {{-- <div class="discount_banner section_2">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="discount_banner_thumb">
                                <a href="#"><img src="assets/img/banner/bgbanner6.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>--}}
            <!--discount banner end-->

            <!--custom product start-->
           {{-- <div class="custom_product">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="custom_product_wrapper">
                                <div class="custom_product_title">
                                    <h3>recent product</h3>
                                </div>
                                <div class="custom_product_active owl-carousel">
                                    <div class="custom_product_list">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product10.jpg" alt=""></a>

                                            </div>
                                            <div class="product_content">
                                                <div class="product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h3><a href="product-details.html">Classic 17-Piece Tool	</a></h3>
                                                <div class="product_price">
                                                    <span class="current_price">$24.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product24.jpg" alt=""></a>

                                            </div>
                                            <div class="product_content">
                                                <div class="product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h3><a href="product-details.html">Cook N Home 12-Piece	</a></h3>
                                                <div class="product_price">
                                                    <span class="current_price">$25.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product25.jpg" alt=""></a>

                                            </div>
                                            <div class="product_content">
                                                <div class="product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h3><a href="product-details.html">Lid Cover Cookware	</a></h3>
                                                <div class="product_price">
                                                    <span class="current_price">$28.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom_product_list">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product11.jpg" alt=""></a>

                                            </div>
                                            <div class="product_content">
                                                <div class="product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h3><a href="product-details.html">Flare Glassware Set	</a></h3>
                                                <div class="product_price">
                                                    <span class="current_price">$26.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product12.jpg" alt=""></a>

                                            </div>
                                            <div class="product_content">
                                                <div class="product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h3><a href="product-details.html">Cook N Home 12-Piece	</a></h3>
                                                <div class="product_price">
                                                    <span class="current_price">$25.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product13.jpg" alt=""></a>

                                            </div>
                                            <div class="product_content">
                                                <div class="product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h3><a href="product-details.html">Flash Furniture Black	</a></h3>
                                                <div class="product_price">
                                                    <span class="current_price">$28.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="custom_product_wrapper">
                                <div class="custom_product_title">
                                    <h3>random products</h3>
                                </div>
                                <div class="custom_product_active owl-carousel">
                                    <div class="custom_product_list">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product20.jpg" alt=""></a>

                                            </div>
                                            <div class="product_content">
                                                <div class="product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h3><a href="product-details.html">Classic 17-Piece Tool	</a></h3>
                                                <div class="product_price">
                                                    <span class="current_price">$24.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product21.jpg" alt=""></a>

                                            </div>
                                            <div class="product_content">
                                                <div class="product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h3><a href="product-details.html">Cook N Home 12-Piece	</a></h3>
                                                <div class="product_price">
                                                    <span class="current_price">$25.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product22.jpg" alt=""></a>

                                            </div>
                                            <div class="product_content">
                                                <div class="product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h3><a href="product-details.html">Lid Cover Cookware	</a></h3>
                                                <div class="product_price">
                                                    <span class="current_price">$28.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom_product_list">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product23.jpg" alt=""></a>

                                            </div>
                                            <div class="product_content">
                                                <div class="product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h3><a href="product-details.html">Flare Glassware Set	</a></h3>
                                                <div class="product_price">
                                                    <span class="current_price">$26.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product24.jpg" alt=""></a>

                                            </div>
                                            <div class="product_content">
                                                <div class="product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h3><a href="product-details.html">Cook N Home 12-Piece	</a></h3>
                                                <div class="product_price">
                                                    <span class="current_price">$25.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product25.jpg" alt=""></a>

                                            </div>
                                            <div class="product_content">
                                                <div class="product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h3><a href="product-details.html">Flash Furniture Black	</a></h3>
                                                <div class="product_price">
                                                    <span class="current_price">$28.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="custom_product_wrapper">
                                <div class="custom_product_title">
                                    <h3>featured products </h3>
                                </div>
                                <div class="custom_product_active owl-carousel">
                                    <div class="custom_product_list">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product15.jpg" alt=""></a>

                                            </div>
                                            <div class="product_content">
                                                <div class="product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h3><a href="product-details.html">Classic 17-Piece Tool	</a></h3>
                                                <div class="product_price">
                                                    <span class="current_price">$24.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product16.jpg" alt=""></a>

                                            </div>
                                            <div class="product_content">
                                                <div class="product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h3><a href="product-details.html">Cook N Home 12-Piece	</a></h3>
                                                <div class="product_price">
                                                    <span class="current_price">$25.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product17.jpg" alt=""></a>

                                            </div>
                                            <div class="product_content">
                                                <div class="product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h3><a href="product-details.html">Lid Cover Cookware	</a></h3>
                                                <div class="product_price">
                                                    <span class="current_price">$28.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom_product_list">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product18.jpg" alt=""></a>

                                            </div>
                                            <div class="product_content">
                                                <div class="product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h3><a href="product-details.html">Flare Glassware Set	</a></h3>
                                                <div class="product_price">
                                                    <span class="current_price">$26.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product19.jpg" alt=""></a>

                                            </div>
                                            <div class="product_content">
                                                <div class="product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h3><a href="product-details.html">Cook N Home 12-Piece	</a></h3>
                                                <div class="product_price">
                                                    <span class="current_price">$25.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product20.jpg" alt=""></a>

                                            </div>
                                            <div class="product_content">
                                                <div class="product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h3><a href="product-details.html">Flash Furniture Black	</a></h3>
                                                <div class="product_price">
                                                    <span class="current_price">$28.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>--}}
            <!--custom product end-->

            <!--brand area start-->
            {{--<div class="brand_area">
                <div class="container">
                    <div class="brand_inner">
                        <div class="row">
                            <div class="brand_active owl-carousel">
                                <div class="single_brand">
                                    <a href="#"><img src="assets/img/brand/bra1.png" alt=""></a>
                                </div>
                                <div class="single_brand">
                                    <a href="#"><img src="assets/img/brand/bra2.png" alt=""></a>
                                </div>
                                <div class="single_brand">
                                    <a href="#"><img src="assets/img/brand/bra3.png" alt=""></a>
                                </div>
                                <div class="single_brand">
                                    <a href="#"><img src="assets/img/brand/bra4.png" alt=""></a>
                                </div>
                                <div class="single_brand">
                                    <a href="#"><img src="assets/img/brand/bra5.png" alt=""></a>
                                </div>
                                <div class="single_brand">
                                    <a href="#"><img src="assets/img/brand/bra6.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>--}}
            <!--brand area end-->



            <!--shipping area start-->
            <div class="shipping_area shipping_contact ">
                <div class="container">
                    <div class="shipping_contact">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="single_shipping">
                                    <div class="shipping_icone">
                                        <span class="pe-7s-call"></span>
                                    </div>
                                    <div class="shipping_content">
                                        <h3>(999) 1234 56789</h3>
                                        <p>Free support line!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single_shipping">
                                    <div class="shipping_icone">
                                        <span class="pe-7s-mail"></span>
                                    </div>
                                    <div class="shipping_content">
                                        <h3>Support@plazathemes.com</h3>
                                        <p>Orders Support!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single_shipping column_3">
                                    <div class="shipping_icone">
                                        <span class="pe-7s-timer"></span>
                                    </div>
                                    <div class="shipping_content">
                                        <h3>Mon - Fri / 8:00 - 18:00</h3>
                                        <p>Working Days/Hours!</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--newsletter area start-->
                        <div class="newsletter_area">
                            <div class="row">
                                <div class="col-12">
                                    <div class="field_newsletter">
                                        <div class="newsletter_text">
                                            <h3>Sign Up For Newsletter</h3>
                                            <p>Be the First to Know. Sign up to newsletter today</p>
                                        </div>
                                        <div class="subscribe_form">
                                            <form id="mc-form" class="mc-form footer-newsletter" >
                                                <input id="mc-email" type="email" autocomplete="off" placeholder="Please enter your email to subscribe" />
                                                <button id="mc-submit">Subscribe</button>
                                                <div class="email_icon">
                                                    <i class="icon-mail"></i>
                                                </div>
                                            </form>
                                            <!-- mailchimp-alerts Start -->
                                            <div class="mailchimp-alerts text-centre">
                                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                            </div><!-- mailchimp-alerts end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--newsletter area end-->
                    </div>
                </div>
            </div>
            <!--shipping area end-->



            <!-- modal area start-->
            <div class="modal fade" id="modal_box" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="modal_body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-12">
                                        <div class="modal_tab">
                                            <div class="tab-content product-details-large">
                                                <div class="tab-pane fade show active" id="tab1" role="tabpanel" >
                                                    <div class="modal_tab_img">
                                                        <a href="#"><img src="assets/img/product/product44.jpg" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab2" role="tabpanel">
                                                    <div class="modal_tab_img">
                                                        <a href="#"><img src="assets/img/product/product45.jpg" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab3" role="tabpanel">
                                                    <div class="modal_tab_img">
                                                        <a href="#"><img src="assets/img/product/product46.jpg" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab4" role="tabpanel">
                                                    <div class="modal_tab_img">
                                                        <a href="#"><img src="assets/img/product/product47.jpg" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal_tab_button">
                                                <ul class="nav product_navactive owl-carousel" role="tablist">
                                                    <li >
                                                        <a class="nav-link active" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="assets/img/cart/cart5.jpg" alt=""></a>
                                                    </li>
                                                    <li>
                                                         <a class="nav-link" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="assets/img/cart/cart6.jpg" alt=""></a>
                                                    </li>
                                                    <li>
                                                       <a class="nav-link button_three" data-bs-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="assets/img/cart/cart7.jpg" alt=""></a>
                                                    </li>
                                                    <li>
                                                       <a class="nav-link" data-bs-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="assets/img/cart/cart8.jpg" alt=""></a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-12">
                                        <div class="modal_right">
                                            <div class="modal_title mb-10">
                                                <h2>Handbag feugiat</h2>
                                            </div>
                                            <div class="modal_price mb-10">
                                                <span class="new_price">$64.99</span>
                                                <span class="old_price" >$78.99</span>
                                            </div>
                                            <div class="modal_content mb-10">
                                                <p>Short-sleeved blouse with feminine draped sleeve detail.</p>
                                            </div>
                                            <div class="modal_size mb-15">
                                               <h2>size</h2>
                                                <ul>
                                                    <li><a href="#">s</a></li>
                                                    <li><a href="#">m</a></li>
                                                    <li><a href="#">l</a></li>
                                                    <li><a href="#">xl</a></li>
                                                    <li><a href="#">xxl</a></li>
                                                </ul>
                                            </div>
                                            <div class="modal_add_to_cart mb-15">
                                                <form action="#">
                                                    <input min="1" max="100" step="2" value="1" type="number">
                                                    <button type="submit">add to cart</button>
                                                </form>
                                            </div>
                                            <div class="modal_description mb-15">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                            </div>
                                            <div class="modal_social">
                                                <h2>Share this product</h2>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal area start-->

            <!--news letter popup start-->
            {{--<div class="newsletter_popup">
                <div class="popup_container">
                    <div class="popup_close">
                        <span>close</span>
                    </div>
                    <div class="popup_text">
                        <h2>Subscribe to our Newsletter</h2>
                        <p>Subscribe to the Pebona mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                        <form action="#">
                            <input placeholder="Enter your email address" type="text">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                    <div class="popup_footer">
                        <form action="#">
                            <input id="check_newsletter" class="form_check" type="checkbox">
                            <span class="checkmark"></span>
                            <label class="form_check" for="check_newsletter">Don't show this popup again</label>
                        </form>
                    </div>
                </div>
            </div>--}}
            <!--news letter popup start-->



@endsection

