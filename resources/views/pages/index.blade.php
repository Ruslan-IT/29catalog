@extends('layouts.app')

@section('title', 'Главная')

@section('content')

    <style>


        /* Основной фон */
        .popup {
            display: none; /* скрыт по умолчанию */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            justify-content: center;
            align-items: center;
            z-index: 1000;
            animation: fadeIn 0.3s ease forwards;
        }

        /* Контент попапа */
        .popup-content {
            background-color: #fff;
            padding: 30px 25px;
            border-radius: 12px;
            max-width: 400px;
            width: 90%;
            text-align: center;
            position: relative;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
            transform: scale(0.7);
            animation: scaleIn 0.3s ease forwards;
        }

        /* Заголовок */
        .popup-content h3 {
            margin: 0 0 10px;
            color: #4CAF50;
            font-size: 22px;
        }

        /* Сообщение */
        .popup-content p {
            font-size: 16px;
            color: #333;
            margin-bottom: 20px;
        }

        /* Кнопка закрытия */
        .popup-close {
            position: absolute;
            top: 12px;
            right: 15px;
            font-size: 24px;
            cursor: pointer;
            color: #aaa;
            transition: color 0.2s;
        }

        .popup-close:hover {
            color: #000;
        }

        /* Кнопка OK */
        .popup-ok {
            background-color: #4CAF50;
            border: none;
            color: #fff;
            padding: 10px 25px;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .popup-ok:hover {
            background-color: #45a049;
        }

        /* Анимации */
        @keyframes fadeIn {
            from {opacity: 0;}
            to {opacity: 1;}
        }

        @keyframes scaleIn {
            from {transform: scale(0.7);}
            to {transform: scale(1);}
        }



        .single_categorie_banner {
            height: 280px; /* выбери нужную высоту */
            display: flex;
            flex-direction: column;
        }

        .categorie_banner_thumb {
            position: relative;
            height: 100%;
            overflow: hidden;
        }

        .categorie_banner_thumb a {
            display: block;
            height: 100%;
        }

        .categorie_banner_thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

    </style>

    <!--slider area start-->
    <div class="slider_area owl-carousel">
        <div class="single_slider slider_one">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="slider_content">
                            <h1>Industrial Water <br><strong>Treatment Equipment</strong></h1>
                            <h3>engineering solutions</h3>
                            <h2>for factories</h2>
                            <p>Design, installation and commissioning</p>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="Быстрый просмотр">Click me</a>

                                Request a quote

                            </a>
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
                            <h1><strong>Water Purification</strong><br> Systems for Industry</h1>
                            <h3>reliable and efficient</h3>
                            <h2>technologies</h2>
                            <p>Turnkey solutions for industrial plants</p>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="Быстрый просмотр">Click me</a>

                                Get consultation

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--slider area end-->

    <!--shipping area start-->
    @include('partials.shipping')
    <!--shipping area end-->

    <!--categories banner start-->
    @include('partials.categorieBanner')
    <!--categories banner end-->

    <!--countdown product area start-->
    @include('partials.countdownProduct')
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

    @include('partials.produtcArea')

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
            @include('partials.shippingForm')
            <!--shipping area end-->



            <!-- modal area start-->

            @include('partials.modal')





            <div id="popup" class="popup">
                <div class="popup-content">
                    <span id="popup-close" class="popup-close">&times;</span>
                    <h3>Thank you!</h3>
                    <p id="popup-message">We will contact you soon!</p>
                    {{--<button id="popup-ok" class="popup-ok">OK</button>--}}
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


