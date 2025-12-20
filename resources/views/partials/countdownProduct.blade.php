<div class="countdown_product">
    <div class="container">
        <div class="countdown_product_inner">
            <div class="row">
                <div class="col-12">
                    <div class="countdown_product_title">
                        <h3>Deals Of The Week</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="countdown_produtc_active owl-carousel">
                    @foreach($deals as $product)
                        <div class="col-12">
                            <div class="countdown_produtc_wrapper">
                                <div class="single_countdown_product">
                                    <div class="countdown_product_thumb">
                                        <a href="{{ route('product.show', $product->slug) }}">
                                            <img src="{{ $product->main_image
                                                ? asset('storage/' . $product->main_image)
                                                : asset('assets/img/product/default.png') }}"
                                                 alt="{{ $product->title }}">
                                        </a>
                                        @if($product->discount_percent)
                                            <div class="sale_percent">
                                                <span>{{ $product->discount_percent }}%</span>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="countdown_product_content">
                                        <div class="countdown_product_ratting">
                                            <ul>
                                                @for($i=1; $i<=5; $i++)
                                                    <li>
                                                        <a href="#"><i class="{{ $i <= $product->rating ? 'ion-star' : 'ion-ios-star-outline' }}"></i></a>
                                                    </li>
                                                @endfor
                                            </ul>
                                        </div>
                                        <h3>
                                            <a href="{{ route('product.show', $product->slug) }}">
                                                {{ $product->title }}
                                            </a>
                                        </h3>
                                        <div class="countdown_product_price">
                                            @if($product->old_price)
                                                <span class="old_price">${{ number_format($product->old_price, 2) }}</span>
                                            @endif

                                        </div>
                                        <div class="countdown_product_desc">
                                            <p>{{ Str::limit($product->description, 50) }}</p>
                                        </div>
                                        <div class="product_timing">
                                            <h3>Hurry up!</h3>
                                            <p>Offer ends in:</p>
                                            <div data-countdown="{{ $product->deal_end_date ?? now()->addDays(7)->format('Y/m/d') }}"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
