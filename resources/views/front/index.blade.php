@extends('front.layouts.master')
@section('title') Elite Shoppy @endsection
@section('content')
    <!-- banner -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
            <li data-target="#myCarousel" data-slide-to="4" class=""></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>The Biggest <span>Sale</span></h3>
                        <p>Special for today</p>
                        <a class="hvr-outline-out button2" href="mens.html">Shop Now </a>
                    </div>
                </div>
            </div>
            <div class="item item2">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>Summer <span>Collection</span></h3>
                        <p>New Arrivals On Sale</p>
                        <a class="hvr-outline-out button2" href="mens.html">Shop Now </a>
                    </div>
                </div>
            </div>
            <div class="item item3">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>The Biggest <span>Sale</span></h3>
                        <p>Special for today</p>
                        <a class="hvr-outline-out button2" href="mens.html">Shop Now </a>
                    </div>
                </div>
            </div>
            <div class="item item4">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>Summer <span>Collection</span></h3>
                        <p>New Arrivals On Sale</p>
                        <a class="hvr-outline-out button2" href="mens.html">Shop Now </a>
                    </div>
                </div>
            </div>
            <div class="item item5">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>The Biggest <span>Sale</span></h3>
                        <p>Special for today</p>
                        <a class="hvr-outline-out button2" href="mens.html">Shop Now </a>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!-- The Modal -->
    </div>
    <!-- //banner -->

    <!-- banner-bootom-w3-agileits -->
    <div class="banner-bootom-w3-agileits">
        <div class="container">
            <h3 class="wthree_text_info">Çok <span>Satanlar</span></h3>

            <div class="col-md-5 bb-grids bb-left-agileits-w3layouts">
                <a href="womens.html">
                    <div class="bb-left-agileits-w3layouts-inner grid">
                        <figure class="effect-roxy">
                            <img src="{{asset('front/images/template-images')}}/bb1.jpg" alt=" " class="img-responsive" />
                            <figcaption>
                                <h3><span>S</span>ale </h3>
                                <p>Upto 55%</p>
                            </figcaption>
                        </figure>
                    </div>
                </a>
            </div>
            <div class="col-md-7 bb-grids bb-middle-agileits-w3layouts">
                <a href="mens.html">
                    <div class="bb-middle-agileits-w3layouts grid">
                        <figure class="effect-roxy">
                            <img src="{{asset('front/images/template-images')}}/bottom3.jpg" alt=" " class="img-responsive" />
                            <figcaption>
                                <h3><span>S</span>ale </h3>
                                <p>Upto 55%</p>
                            </figcaption>
                        </figure>
                    </div>
                </a>
                <a href="mens.html">
                    <div class="bb-middle-agileits-w3layouts forth grid">
                        <figure class="effect-roxy">
                            <img src="{{asset('front/images/template-images')}}/bottom4.jpg" alt=" " class="img-responsive">
                            <figcaption>
                                <h3><span>S</span>ale </h3>
                                <p>Upto 65%</p>
                            </figcaption>
                        </figure>
                    </div>
                </a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <!-- /new_arrivals -->
    <div class="new_arrivals_agile_w3ls_info">
        <div class="container">
            <h3 class="wthree_text_info">En <span>Yeniler</span></h3>
            <div id="horizontalTab">
                <ul class="resp-tabs-list">
                    <li> Men's</li>
                    <li> Women's</li>
                    <li> Bags</li>
                    <li> Footwear</li>
                </ul>
                <div class="resp-tabs-container">
                    <!--/tab_one-->
                    <div class="tab1">
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('front/images/template-images')}}/m1.jpg" alt="" class="pro-image-front">
                                    <img src="{{asset('front/images/template-images')}}/m1.jpg" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Formal Blue Shirt</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$45.99</span>
                                        <del>$69.71</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Formal Blue Shirt" />
                                                <input type="hidden" name="amount" value="30.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('front/images/template-images')}}/m2.jpg" alt="" class="pro-image-front">
                                    <img src="{{asset('front/images/template-images')}}/m2.jpg" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Gabi Full Sleeve Sweatshirt</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$45.99</span>
                                        <del>$69.71</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Sweatshirt" />
                                                <input type="hidden" name="amount" value="30.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('front/images/template-images')}}/m3.jpg" alt="" class="pro-image-front">
                                    <img src="{{asset('front/images/template-images')}}/m3.jpg" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Dark Blue Track Pants</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$80.99</span>
                                        <del>$89.71</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Dark Blue Track Pants" />
                                                <input type="hidden" name="amount" value="30.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('front/images/template-images')}}/m4.jpg" alt="" class="pro-image-front">
                                    <img src="{{asset('front/images/template-images')}}/m4.jpg" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Round Neck Black T-Shirt</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$190.99</span>
                                        <del>$159.71</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Black T-Shirt" />
                                                <input type="hidden" name="amount" value="30.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('front/images/template-images')}}/m5.jpg" alt="" class="pro-image-front">
                                    <img src="{{asset('front/images/template-images')}}/m5.jpg" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Men's Black Jeans</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$60.99</span>
                                        <del>$90.71</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Men's Black Jeans" />
                                                <input type="hidden" name="amount" value="30.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('front/images/template-images')}}/m7.jpg" alt="" class="pro-image-front">
                                    <img src="{{asset('front/images/template-images')}}/m7.jpg" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Analog Watch</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$160.99</span>
                                        <del>$290.71</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Analog Watch" />
                                                <input type="hidden" name="amount" value="30.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('front/images/template-images')}}/m6.jpg" alt="" class="pro-image-front">
                                    <img src="{{asset('front/images/template-images')}}/m6.jpg" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Reversible Belt</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$30.99</span>
                                        <del>$50.71</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Reversible Belt" />
                                                <input type="hidden" name="amount" value="30.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('front/images/template-images')}}/m8.jpg" alt="" class="pro-image-front">
                                    <img src="{{asset('front/images/template-images')}}/m8.jpg" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Party Men's Blazer</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$260.99</span>
                                        <del>$390.71</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Party Men's Blazer" />
                                                <input type="hidden" name="amount" value="30.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!--//tab_one-->
                    <!--/tab_two-->
                    <div class="tab2">
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('front/images/template-images')}}/w1.jpg" alt="" class="pro-image-front">
                                    <img src="{{asset('front/images/template-images')}}/w1.jpg" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">A-line Black Skirt</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$130.99</span>
                                        <del>$189.71</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="A-line Black Skirt" />
                                                <input type="hidden" name="amount" value="30.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('front/images/template-images')}}/w2.jpg" alt="" class="pro-image-front">
                                    <img src="{{asset('front/images/template-images')}}/w2.jpg" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Sleeveless Solid Blue Top</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$140.99</span>
                                        <del>$189.71</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Sleeveless Solid Blue Top" />
                                                <input type="hidden" name="amount" value="30.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('front/images/template-images')}}/w3.jpg" alt="" class="pro-image-front">
                                    <img src="{{asset('front/images/template-images')}}/w3.jpg" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Skinny Jeans</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$150.99</span>
                                        <del>$189.71</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Skinny Jeans " />
                                                <input type="hidden" name="amount" value="30.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('front/images/template-images')}}/w4.jpg" alt="" class="pro-image-front">
                                    <img src="{{asset('front/images/template-images')}}/w4.jpg" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Black Basic Shorts</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$120.99</span>
                                        <del>$189.71</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Black Basic Shorts" />
                                                <input type="hidden" name="amount" value="30.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('front/images/template-images')}}/w5.jpg" alt="" class="pro-image-front">
                                    <img src="{{asset('front/images/template-images')}}/w5.jpg" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Pink Track Pants</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$220.99</span>
                                        <del>$389.71</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Pink Track Pants" />
                                                <input type="hidden" name="amount" value="30.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('front/images/template-images')}}/w6.jpg" alt="" class="pro-image-front">
                                    <img src="{{asset('front/images/template-images')}}/w6.jpg" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Analog Watch</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$320.99</span>
                                        <del>$489.71</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Analog Watch" />
                                                <input type="hidden" name="amount" value="30.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('front/images/template-images')}}/w7.jpg" alt="" class="pro-image-front">
                                    <img src="{{asset('front/images/template-images')}}/w7.jpg" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Ankle Length Socks</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$100.99</span>
                                        <del>$159.71</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Ankle Length Socks" />
                                                <input type="hidden" name="amount" value="30.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('front/images/template-images')}}/w8.jpg" alt="" class="pro-image-front">
                                    <img src="{{asset('front/images/template-images')}}/w8.jpg" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Reebok Women's Tights</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$130.99</span>
                                        <del>$169.71</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Reebok Women's Tights" />
                                                <input type="hidden" name="amount" value="30.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!--//tab_two-->
                    <div class="tab3">

                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('front/images/template-images')}}/b1.jpg" alt="" class="pro-image-front">
                                    <img src="{{asset('front/images/template-images')}}/b1.jpg" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Laptop Messenger Bag</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$140.99</span>
                                        <del>$169.71</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value=" Laptop Messenger Bag" />
                                                <input type="hidden" name="amount" value="30.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('front/images/template-images')}}/b2.jpg" alt="" class="pro-image-front">
                                    <img src="{{asset('front/images/template-images')}}/b2.jpg" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Puma Backpack</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$127.99</span>
                                        <del>$169.71</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Puma Backpack" />
                                                <input type="hidden" name="amount" value="30.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('front/images/template-images')}}/b3.jpg" alt="" class="pro-image-front">
                                    <img src="{{asset('front/images/template-images')}}/b3.jpg" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html"> Laptop Backpack</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$120.99</span>
                                        <del>$189.71</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value=" Laptop Backpack" />
                                                <input type="hidden" name="amount" value="30.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('front/images/template-images')}}/b4.jpg" alt="" class="pro-image-front">
                                    <img src="{{asset('front/images/template-images')}}/b4.jpg" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Travel Duffel Bag </a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$190.99</span>
                                        <del>$259.71</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Travel Duffel Bag " />
                                                <input type="hidden" name="amount" value="30.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('front/images/template-images')}}/b5.jpg" alt="" class="pro-image-front">
                                    <img src="{{asset('front/images/template-images')}}/b5.jpg" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html"> Hand-held Bag </a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$190.99</span>
                                        <del>$259.71</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value=" Hand-held Bag " />
                                                <input type="hidden" name="amount" value="30.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('front/images/template-images')}}/b6.jpg" alt="" class="pro-image-front">
                                    <img src="{{asset('front/images/template-images')}}/b6.jpg" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Butterflies Bag </a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$190.99</span>
                                        <del>$259.71</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Butterflies Bag" />
                                                <input type="hidden" name="amount" value="30.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('front/images/template-images')}}/b7.jpg" alt="" class="pro-image-front">
                                    <img src="{{asset('front/images/template-images')}}/b7.jpg" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Costa Swiss Bag </a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$290.99</span>
                                        <del>$359.71</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Costa Swiss Bag" />
                                                <input type="hidden" name="amount" value="30.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('front/images/template-images')}}/b8.jpg" alt="" class="pro-image-front">
                                    <img src="{{asset('front/images/template-images')}}/b8.jpg" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Noble Designs Bag </a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$120.99</span>
                                        <del>$159.71</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Noble Designs Bag " />
                                                <input type="hidden" name="amount" value="30.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="tab4">

                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('front/images/template-images')}}/s1.jpg" alt="" class="pro-image-front">
                                    <img src="{{asset('front/images/template-images')}}/s1.jpg" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Running Shoes</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$80.99</span>
                                        <del>$89.71</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Running Shoes" />
                                                <input type="hidden" name="amount" value="30.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('front/images/template-images')}}/s2.jpg" alt="" class="pro-image-front">
                                    <img src="{{asset('front/images/template-images')}}/s2.jpg" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Shoetopia Lace Up</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$90.99</span>
                                        <del>$59.71</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Shoetopia Lace Up" />
                                                <input type="hidden" name="amount" value="30.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('front/images/template-images')}}/s3.jpg" alt="" class="pro-image-front">
                                    <img src="{{asset('front/images/template-images')}}/s3.jpg" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Steemo Casuals(Black)</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$90.99</span>
                                        <del>$59.71</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Steemo Casuals (Black)" />
                                                <input type="hidden" name="amount" value="30.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('front/images/template-images')}}/s4.jpg" alt="" class="pro-image-front">
                                    <img src="{{asset('front/images/template-images')}}/s4.jpg" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Benetton Flip Flops</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$40.99</span>
                                        <del>$99.71</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Benetton Flip Flops" />
                                                <input type="hidden" name="amount" value="30.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('front/images/template-images')}}/s5.jpg" alt="" class="pro-image-front">
                                    <img src="{{asset('front/images/template-images')}}/s5.jpg" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Moonwalk Bellies </a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$80.99</span>
                                        <del>$99.71</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Moonwalk Bellies" />
                                                <input type="hidden" name="amount" value="30.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('front/images/template-images')}}/s6.jpg" alt="" class="pro-image-front">
                                    <img src="{{asset('front/images/template-images')}}/s6.jpg" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Aero Canvas Loafers  </a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$120.99</span>
                                        <del>$199.71</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Aero Canvas Loafers" />
                                                <input type="hidden" name="amount" value="30.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('front/images/template-images')}}/s7.jpg" alt="" class="pro-image-front">
                                    <img src="{{asset('front/images/template-images')}}/s7.jpg" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Sparx Sporty Canvas Shoes</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$160.99</span>
                                        <del>$199.71</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Sparx Sporty Canvas Shoes" />
                                                <input type="hidden" name="amount" value="30.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('front/images/template-images')}}/s8.jpg" alt="" class="pro-image-front">
                                    <img src="{{asset('front/images/template-images')}}/s8.jpg" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Women BLACK Heels</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$180.99</span>
                                        <del>$199.71</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Women BLACK Heels" />
                                                <input type="hidden" name="amount" value="30.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //new_arrivals -->
    <!-- /we-offer -->
    <div class="sale-w3ls">
        <div class="container">
            <h6><span style="color:green;">%40</span>'a Varan İndirimler !</h6>

            <a class="hvr-outline-out button2" href="single.html">Alışverişe Başla !</a>
        </div>
    </div>
    <!-- //we-offer -->
    <!--/grids-->
    <div class="coupons">
        <div class="coupons-grids text-center">
            <div class="w3layouts_mail_grid">
                <div class="col-md-3 w3layouts_mail_grid_left">
                    <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                        <i class="fa fa-truck" aria-hidden="true"></i>
                    </div>
                    <div class="w3layouts_mail_grid_left2">
                        <h3>ÜCRETSİZ KARGO</h3>
                        <p>Fiziksel olarak almak isterseniz ücretsiz kargo ile gönderebiliriz!</p>
                    </div>
                </div>
                <div class="col-md-3 w3layouts_mail_grid_left">
                    <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                        <i class="fa fa-headphones" aria-hidden="true"></i>
                    </div>
                    <div class="w3layouts_mail_grid_left2">
                        <h3>7/24 CANLI DESTEK</h3>
                        <p>7/24 Canlı Destek hattımız mevcuttur.</p>
                    </div>
                </div>
                <div class="col-md-3 w3layouts_mail_grid_left">
                    <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    </div>
                    <div class="w3layouts_mail_grid_left2">
                        <h3>İADE GARANTİSİ</h3>
                        <p>Herhangi bir sorunda iade garantisi vardır.</p>
                    </div>
                </div>
                <div class="col-md-3 w3layouts_mail_grid_left">
                    <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                        <i class="fa fa-gift" aria-hidden="true"></i>
                    </div>
                    <div class="w3layouts_mail_grid_left2">
                        <h3>HEDİYE KUPONLAR</h3>
                        <p>Alışveriş yaptıkça indirim kuponları kazanın.</p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>

        </div>
    </div>
    <!--grids-->
@endsection

@section('customPageCss')
    <style rel="stylesheet">
        /*-- banner --*/
        .carousel .item{
            background:-webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/banner1.jpg) no-repeat;
            background:-moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/banner1.jpg) no-repeat;
            background:-ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/banner1.jpg) no-repeat;
            background:linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/banner1.jpg) no-repeat;
            background-size:cover;
        }
        .carousel .item.item2{
            background:-webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/banner2.jpg) no-repeat;
            background:-moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/banner2.jpg) no-repeat;
            background:-ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/banner2.jpg) no-repeat;
            background:linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/banner2.jpg) no-repeat;
            background-size:cover;
        }
        .carousel .item.item3{
            background:-webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/banner3.jpg) no-repeat;
            background:-moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/banner3.jpg) no-repeat;
            background:-ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/banner3.jpg) no-repeat;
            background:linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/banner3.jpg) no-repeat;
            background-size:cover;
        }
        .carousel .item.item4{
            background:-webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/banner4.jpg) no-repeat;
            background:-moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}{{asset('front/images/template-images')}}/banner4.jpg) no-repeat;
            background:-ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/banner4.jpg) no-repeat;
            background:linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/banner4.jpg) no-repeat;
            background-size:cover;
        }
        .carousel .item.item5{
            background:-webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/banner5.jpg) no-repeat;
            background:-moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/banner5.jpg) no-repeat;
            background:-ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/banner5.jpg) no-repeat;
            background:linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/banner5.jpg) no-repeat;
            background-size:cover;
        }
    </style>
@endsection
