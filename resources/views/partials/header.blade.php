<!--header area start-->
<header class="header_area">
    <!--header top start-->
    <div class="header_top">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 col-md-6">
                    <div class="welcome_text">
                        <p>England's Fastest Online Shopping Destination</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="top_right text-end">
                        <ul>
                            <li class="top_links"><a href="#">My Account <i class="ion-chevron-down"></i></a>
                                <ul class="dropdown_links">
                                    <li><a href="wishlist.html">My Wish List </a></li>
                                    <li><a href="my-account.html">My Account </a></li>
                                    <li><a href="#">Sign In</a></li>
                                    <li><a href="#">Compare Products  </a></li>
                                </ul>
                            </li>
                            <li class="currency"><a href="#">USD <i class="ion-chevron-down"></i></a>
                                <ul class="dropdown_currency">
                                    <li><a href="#">EUR</a></li>
                                    <li><a href="#">BRL</a></li>
                                </ul>
                            </li>
                            <li class="language"><a href="#"><img src="/img/logo/language.png" alt=""> English <i class="ion-chevron-down"></i></a>
                                <ul class="dropdown_language">
                                    <li><a href="#"><img src="assets/img/logo/cigar.jpg" alt=""> French</a></li>
                                    <li><a href="#"><img src="assets/img/logo/language2.png" alt="">German</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header top start-->

    <!--header middel start-->
    <div class="header_middel">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4">
                    <div class="logo">
                        <a href="/" class="text-logo">
                            <span class="logo-main">29</span>
                            <span class="logo-sub">CATALOG</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-5">
                    <div class="search_bar">
                        <form action="#">
                            <input placeholder="Search entire store here..." type="text">
                            <button type="submit"><i class="ion-ios-search-strong"></i></button>
                        </form>
                    </div>
                </div>
              {{--  <div class="col-lg-2 col-md-3">
                    <div class="cart_area">
                        <div class="wishlist_link">
                            <a href="#"><i class="ion-ios-heart-outline"></i></a>
                        </div>

                        --}}{{--<div class="cart_link">
                            <a href="javascript:void(0)"><i class="ion-ios-cart-outline"></i>My Cart</a>
                            <span class="cart_count">2</span>
                            <!--mini cart-->
                            <div class="mini_cart">
                                <div class="items_nunber">
                                    <span>2 Items in Cart</span>
                                </div>
                                <div class="cart_button checkout">
                                    <a href="checkout.html">Proceed to Checkout</a>
                                </div>
                                <div class="cart_item">
                                    <div class="cart_img">
                                        <a href="#"><img src="assets/img/cart/cart1.jpg" alt=""></a>
                                    </div>
                                    <div class="cart_info">
                                        <a href="#">Mr.Coffee 12-Cup</a>
                                        <form action="#">
                                            <input min="0" max="100" type="number">
                                            <span>$60.00</span>
                                        </form>
                                    </div>
                                </div>
                                <div class="cart_item">
                                    <div class="cart_img">
                                        <a href="#"><img src="assets/img/cart/cart2.jpg" alt=""></a>
                                    </div>
                                    <div class="cart_info">
                                        <a href="#">Lid Cover Cookware</a>
                                        <form action="#">
                                            <input min="0" max="100" type="number">
                                            <span>$160.00</span>
                                        </form>
                                    </div>
                                </div>
                                <div class="cart_button view_cart">
                                    <a href="#">View and Edit Cart</a>
                                </div>
                            </div>
                            <!--mini cart end-->
                        </div>--}}{{--

                    </div>
                </div>--}}
            </div>
        </div>
    </div>
    <!--header middel end-->

    <!--header bottom satrt-->

    <div class="header_bottom sticky-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="categories_menu">
                        <div class="categories_title">
                            <h2 class="categori_toggle">All categories</h2>
                        </div>
                        <div class="categories_menu_inner">


                            @include('partials.categoriesMenu')


                        </div>
                    </div>

                </div>
                <div class="col-lg-7 position-relative">
                    <div class="main_menu_inner">
                        <div class="main_menu d-none d-lg-block">
                            <ul>


                                <li>
                                    <a href="#">Оборудование <i class="fa fa-angle-down"></i></a>

                                    <ul class="mega_menu">

                                        @foreach($categories as $category)
                                            <li>
                                                {{-- Корневая категория --}}
                                                <a href="{{ route('category.show', $category->id) }}">
                                                    {{ $category->name }}
                                                </a>

                                                <ul>

                                                    {{-- ТОВАРЫ БЕЗ ПОДКАТЕГОРИИ --}}
                                                    @foreach($category->products as $product)
                                                        <li>
                                                            <a href="{{ route('product.show', $product->slug) }}">
                                                                {{ $product->title }}
                                                            </a>
                                                        </li>
                                                    @endforeach

                                                    {{-- ПОДКАТЕГОРИИ --}}
                                                    @foreach($category->children as $child)
                                                        <li>
                                                            <strong>
                                                                <a href="{{ route('category.show', $child->id) }}">
                                                                    {{ $child->name }}
                                                                </a>
                                                            </strong>
                                                        </li>

                                                        {{-- ТОВАРЫ ПОДКАТЕГОРИИ --}}
                                                        @foreach($child->products as $product)
                                                            <li class="ps-3">
                                                                <a href="{{ route('product.show', $product->slug) }}">
                                                                    {{ $product->title }}
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    @endforeach

                                                    {{-- Все товары --}}
                                                    <li class="mt-2">
                                                        <a href="{{ route('category.show', $category->id) }}">
                                                            Все товары →
                                                        </a>
                                                    </li>

                                                </ul>
                                            </li>
                                        @endforeach

                                    </ul>
                                </li>

                                </li>

                                <li><a href="{{ route('contacts') }}">Contact Us</a></li>
                            </ul>

                        </div>
                        <div class="mobile-menu d-lg-none mean-container"><div class="mean-bar"><a href="#nav" class="meanmenu-reveal" style="background:;color:;right:0;left:auto;"><span></span><span></span><span></span></a><nav class="mean-nav">
                                    <ul style="display: none;">
                                        <li><a href="index.html">Home</a>
                                            <ul style="display: none;">
                                                <li><a href="index.html">Home 1</a></li>
                                                <li><a href="index-2.html">Home 2</a></li>
                                                <li><a href="index-3.html">Home 3</a></li>
                                                <li><a href="index-4.html">Home 4</a></li>
                                            </ul>
                                            <a class="mean-expand" href="#" style="font-size: 18px">+</a></li>
                                        <li><a href="shop.html">shop</a>
                                            <ul style="display: none;">
                                                <li><a href="#">Shop Layouts</a>
                                                    <ul style="display: none;">
                                                        <li><a href="shop-fullwidth.html">Full Width</a></li>
                                                        <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                                        <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                                        <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                                        <li><a href="shop-list.html">List View</a></li>
                                                    </ul>
                                                    <a class="mean-expand" href="#" style="font-size: 18px">+</a></li>
                                                <li><a href="#">other Pages</a>
                                                    <ul style="display: none;">
                                                        <li><a href="portfolio.html">portfolio</a></li>
                                                        <li><a href="portfolio-details.html">portfolio details</a></li>
                                                        <li><a href="cart.html">cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li><a href="my-account.html">my account</a></li>


                                                    </ul>
                                                    <a class="mean-expand" href="#" style="font-size: 18px">+</a></li>
                                                <li><a href="#">Product Types</a>
                                                    <ul style="display: none;">
                                                        <li><a href="product-details.html">product details</a></li>
                                                        <li><a href="product-sidebar.html">product sidebar</a></li>
                                                        <li><a href="product-gallery.html">product gallery</a></li>
                                                        <li><a href="product-slider.html">product slider</a></li>

                                                    </ul>
                                                    <a class="mean-expand" href="#" style="font-size: 18px">+</a></li>
                                            </ul>
                                            <a class="mean-expand" href="#" style="font-size: 18px">+</a></li>
                                        <li><a href="blog.html">blog</a>
                                            <ul style="display: none;">
                                                <li><a href="#">Blog Layouts</a>
                                                    <ul style="display: none;">

                                                        <li><a href="blog-details.html">blog details</a></li>
                                                        <li><a href="blog-sidebar.html">blog  Sidebar</a></li>
                                                        <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                                    </ul>
                                                    <a class="mean-expand" href="#" style="font-size: 18px">+</a></li>
                                                <li><a href="#">blog Pages</a>
                                                    <ul style="display: none;">
                                                        <li><a href="#">Author</a></li>
                                                        <li><a href="blog-sidebar.html">Category</a></li>
                                                        <li><a href="#">Blog tag</a></li>
                                                    </ul>
                                                    <a class="mean-expand" href="#" style="font-size: 18px">+</a></li>
                                                <li><a href="#">Post Formats</a>
                                                    <ul style="display: none;">
                                                        <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                                        <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                                        <li><a href="blog-sidebar.html">Gallery Format</a></li>
                                                    </ul>
                                                    <a class="mean-expand" href="#" style="font-size: 18px">+</a></li>
                                            </ul>
                                            <a class="mean-expand" href="#" style="font-size: 18px">+</a></li>
                                        <li><a href="#">pages</a>
                                            <ul style="display: none;">
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="services.html">services</a></li>
                                                <li><a href="faq.html">Frequently Questions</a></li>
                                                <li><a href="login.html">login</a></li>
                                                <li><a href="my-account.html">my account</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="404.html">Error 404</a></li>
                                                <li><a href="compare.html">Compare</a></li>
                                                <li><a href="coming-soon.html">Coming soon</a></li>
                                            </ul>
                                            <a class="mean-expand" href="#" style="font-size: 18px">+</a></li>
                                        <li class="mean-last"><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </nav></div>
                            <div class="mean-push"></div><nav style="display: none;">
                                <ul>

                                    <li><a href="blog.html">blog</a>
                                        <ul>
                                            <li><a href="#">Blog Layouts</a>
                                                <ul>

                                                    <li><a href="blog-details.html">blog details</a></li>
                                                    <li><a href="blog-sidebar.html">blog  Sidebar</a></li>
                                                    <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">blog Pages</a>
                                                <ul>
                                                    <li><a href="#">Author</a></li>
                                                    <li><a href="blog-sidebar.html">Category</a></li>
                                                    <li><a href="#">Blog tag</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Post Formats</a>
                                                <ul>
                                                    <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                                    <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                                    <li><a href="blog-sidebar.html">Gallery Format</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="contact_phone">
                        <div class="contact_icone">
                            <span class="pe-7s-headphones"></span>
                        </div>
                        <div class="contact_number">

                            <p>Call Us:</p>
                            <span>(999) 1234 56789</span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--header bottom end-->
</header>
<!--header area end-->



