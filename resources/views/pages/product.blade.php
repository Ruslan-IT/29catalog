@extends('layouts.app')

@section('title', $product->title)

@section('content')

    <style>
        .product_gallery .modal_img {
            aspect-ratio: 1 / 1; /* квадрат */
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .product_gallery .modal_img img {
            width: 100%;
            height: 100%;
            object-fit: contain; /* НЕ режет изображение */
        }
    </style>

    {{-- Хлебные крошки --}}
    <div class="breadcrumbs_area commun_bread">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>{{ $product->title }}</h3>
                        <ul>
                            <li><a href="{{ url('/') }}">Главная</a></li>

                            @foreach($product->category->breadcrumbs as $crumb)
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    <a href="{{ route('category.show', $crumb->id) }}">
                                        {{ $crumb->name }}
                                    </a>
                                </li>
                            @endforeach

                            <li>
                                <i class="fa fa-angle-right"></i>
                                <span>{{ $product->title }}</span>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>

    {{-- Товар --}}
    <div class="single_product_wrapper">
        <div class="container">
            <div class="row">

                {{-- ГАЛЕРЕЯ --}}
                <div class="col-lg-5 col-md-6">
                    <div class="product_gallery">

                        {{-- Большое изображение --}}
                        <div class="tab-content produc_thumb_conatainer">

                            {{-- Главное фото --}}
                            <div class="tab-pane fade show active" id="p_tab_main">
                                <div class="modal_img">
                                    <img src="{{ asset('storage/' . $product->main_image) }}"
                                         alt="{{ $product->title }}">
                                </div>
                            </div>

                            {{-- Галерея --}}
                            @if($product->gallery)
                                @foreach($product->gallery as $key => $image)
                                    <div class="tab-pane fade" id="p_tab_{{ $key }}">
                                        <div class="modal_img">
                                            <img src="{{ asset('storage/' . $image) }}"
                                                 alt="{{ $product->title }}">
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>

                        {{-- Превью --}}
                        <div class="product_thumb_button">
                            <ul class="nav product_d_button" role="tablist">

                                {{-- Главное фото --}}
                                <li>
                                    <a class="active" data-bs-toggle="tab" href="#p_tab_main">
                                        <img src="{{ asset('storage/' . $product->main_image) }}"
                                             alt="{{ $product->title }}">
                                    </a>
                                </li>

                                {{-- Галерея --}}
                                @if($product->gallery)
                                    @foreach($product->gallery as $key => $image)
                                        <li>
                                            <a data-bs-toggle="tab" href="#p_tab_{{ $key }}">
                                                <img src="{{ asset('storage/' . $image) }}"
                                                     alt="{{ $product->title }}">
                                            </a>
                                        </li>
                                    @endforeach
                                @endif

                            </ul>
                        </div>

                    </div>
                </div>

                {{-- ИНФОРМАЦИЯ --}}
                <div class="col-lg-7 col-md-6">
                    <div class="product_details">

                        <h3>{{ $product->title }}</h3>

                        <div class="product_price">

                        </div>

                        <div class="product_description">
                            {!! nl2br(e($product->description)) !!}
                        </div>


                    </div>
                </div>

                <div class="col-lg-9 col-md-12">

                    <div class="blog_content blog_details mr-10">
                        <p></p>
                        <div class="blog_desc">
                            <p>
                                {!! nl2br(e($product->desc1)) !!}
                            </p>

                            <p class="blockquote">
                                {!! nl2br(e($product->desc2)) !!}
                            </p>


                        </div>

                        <p class="blockquote">
                            {!! nl2br(e($product->desc3)) !!}
                        </p>
                    </div>

                </div>

                <div class="shipping_area shipping_contact  blog_shipping">
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
                                                <form id="mc-form" class="mc-form footer-newsletter" novalidate="true">
                                                    <input id="mc-email" type="email" autocomplete="off" placeholder="Please enter your email to subscribe" name="EMAIL">
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

            </div>
        </div>
    </div>

@endsection
