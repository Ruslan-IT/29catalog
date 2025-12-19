<div class="produtc_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    <h2>Products</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="product_active owl-carousel">

                @foreach($products as $product)
                    <div class="col-lg-3">
                        <div class="single_product">

                            <div class="product_thumb">
                                <a href="{{ route('product.show', $product->slug) }}">
                                    <img
                                        src="{{ $product->main_image
                                            ? asset('storage/' . $product->main_image)
                                            : asset('assets/img/no-image.png') }}"
                                        alt="{{ $product->title }}">
                                </a>

                                <div class="btn_quickview">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="Быстрый просмотр"><i class="ion-ios-eye"></i></a>

                                </div>
                            </div>

                            <div class="product_content">
                                <h3>
                                    <a href="{{ route('product.show', $product->slug) }}">
                                        {{ $product->title }}
                                    </a>
                                </h3>

                                <div class="product_price">
                                    <span class="current_price">
                                        {{ $product->price ?? '' }}
                                    </span>
                                </div>

                                <div class="product_action">
                                    <ul>
                                        <li class="product_cart">
                                            <a href="#" title="Add to Cart">Add to Cart</a>
                                        </li>
                                        <li class="add_links">
                                            <a href="#" title="Wishlist">
                                                <i class="ion-ios-heart-outline"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
