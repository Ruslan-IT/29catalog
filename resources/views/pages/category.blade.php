@extends('layouts.app')

@section('title', 'Главная')

@section('content')


    <div class="shop_wrapper shop_fullwidth">
        <div class="container">


            <div class="breadcrumbs_area commun_bread">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb_content">
                                <h3>{{ $category->name }}</h3>

                                <ul>
                                    <li>
                                        <a href="{{ url('/') }}">Главная</a>
                                    </li>

                                    @foreach($category->breadcrumbs as $crumb)
                                        <li>
                                            <i class="fa fa-angle-right"></i>
                                            <a href="{{ route('category.show', $crumb->id) }}">
                                                {{ $crumb->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <!--shop tab product-->
            <div class="shop_tab_product">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="large" role="tabpanel">
                        <div class="row">

                            <ul>
                                @foreach($category->children as $child)
                                    <li><a href="{{ route('category.show', $child->id) }}">{{ $child->name }}</a></li>
                                @endforeach
                            </ul>

                            @foreach($products as $product)
                                <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a href="{{ route('product.show', $product->slug) }}">

                                                <img src="{{ asset('storage/' . $product->main_image) }}"

                                                     alt="{{ $product->title }}">

                                            </a>
                                        </div>
                                        <div class="product_content">
                                            <h3><a href="#">{{ $product->title }}</a></h3>
                                            <div class="product_price">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach





                        </div>
                    </div>

                </div>
            </div>
            <!--shop tab product end-->

            <!--pagination style start-->
           {{-- <div class="row">
                <div class="col-12">
                    <div class="pagination_style fullwidth">
                        <ul>
                            <li class="current_number">1</li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">»</a></li>
                        </ul>
                    </div>
                </div>
            </div>--}}
            <!--pagination style end-->
        </div>
    </div>


@endsection


