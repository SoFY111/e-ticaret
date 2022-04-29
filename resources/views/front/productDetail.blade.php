@extends('front.layouts.master')
@section('title') {{$product['name']}} @endsection
@section('content')

    <!-- banner-bootom-w3-agileits -->

    <div class="banner-bootom-w3-agileits">
        <div class="container">
            <div class="col-md-6 single-right-left ">
                <div id="top" class="callbacks_container2">
                    <ul class="rslides" id="slider3">
                        <img src="{{asset($product->coverImage)}}" class="img-responsive img" alt="res">
                        <?php $images = json_decode($product->imagesPaths) ?>
                        @for($i = 0; $i < count($images); $i++)
                        <li>
                            <img class="img-responsive img" src="{{asset($images[$i])}}" 
                                 alt=" "/>
                        </li>
                        @endfor
                    </ul>
                </div>

            </div>

            <div class="col-md-6 single-right-left simpleCart_shelfItem">
                <h3>{{$product['name']}}</h3>
                <p><span class="item_price">@if($product->discountRate !== 0)
                            <span class="item_price">{{number_format($product->price-($product->price*($product->discountRate / 100)), 2)}}₺</span>
                            <del>{{$product->price}}₺</del>
                        @else
                            <span class="item_price">{{$product->price}} ₺</span>
                    @endif</p>
                <div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
                </div>
                <div class="description">
                    <h5>Bulunduğunuz yerde teslimatı, ödeme seçeneklerini ve ücretleri kontrol edin.</h5>
                    <form action="#" method="post">
                        <input type="text" value="Kodu Girin" onfocus="this.value = '';"
                               onblur="if (this.value == '') {this.value = 'Kodu Girin';}" required="">
                        <input type="submit" value="Kontrol Et">
                    </form>
                </div>

                <div class="description">
                    <h5>Adet</h5>
                        <input type="number" id="quantity" name="quantity" value="1" max="{{$product->stock}}" 
                        style="width: 20%; height: 5%; text-align: center">
                </div>


                <div class="occasion-cart">
                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                        <form action="{{route('front.cart.add')}}" method="post">
                            @csrf
                            <fieldset>
                                <input type="hidden" name="product_id" value="{{$product->id}}" id="">
                                <input type="submit" name="submit" value="Sepete Ekle" class="button">
                            </fieldset>
                        </form>
                    </div>

                </div>
                <ul class="social-nav model-3d-0 footer-social w3_agile_social single_page_w3ls">
                    <li class="share">Paylaş :</li>
                    <li><a href="#" class="facebook">
                            <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                        </a></li>
                    <li><a href="#" class="twitter">
                            <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                        </a></li>
                    <li><a href="#" class="instagram">
                            <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                        </a></li>
                    <li><a href="#" class="pinterest">
                            <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                        </a></li>
                </ul>

            </div>

            <div class="clearfix"></div>
            <!-- /new_arrivals -->
            <br><br><br>
            <div class="responsive_tabs_agileits">
                <div id="horizontalTab">
                    <ul class="resp-tabs-list">
                        <li>Açıklama</li>
                        <li>Sİstem Gereksİnİmlerİ</li>
                    </ul>
                    <div class="resp-tabs-container">
                        <!--/tab_one-->
                        <div class="tab1">

                            <div class="single_page_agile_its_w3ls">
                                <h6>{{$product['descriptionHead']}}</h6>
                                <p>{!! $product['description'] !!}</p>
                            </div>
                        </div>
                        <!--//tab_one-->

                        <div class="tab3">

                            <div class="single_page_agile_its_w3ls">
                                {!! $product->systemRequirementsText !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- //new_arrivals -->
            <!--/slider_owl-->

            <div class="w3_agile_latest_arrivals">
                <h3 class="wthree_text_info">Benzer <span>Oyunlar</span></h3>
                <div class="col-md-3 product-men single">
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
                            <div
                                class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="business" value=" ">
                                        <input type="hidden" name="item_name" value="Sleeveless Solid Blue Top">
                                        <input type="hidden" name="amount" value="30.99">
                                        <input type="hidden" name="discount_amount" value="1.00">
                                        <input type="hidden" name="currency_code" value="USD">
                                        <input type="hidden" name="return" value=" ">
                                        <input type="hidden" name="cancel_return" value=" ">
                                        <input type="submit" name="submit" value="Add to cart" class="button">
                                    </fieldset>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-men single">
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
                            <div
                                class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="business" value=" ">
                                        <input type="hidden" name="item_name" value="Black Basic Shorts">
                                        <input type="hidden" name="amount" value="30.99">
                                        <input type="hidden" name="discount_amount" value="1.00">
                                        <input type="hidden" name="currency_code" value="USD">
                                        <input type="hidden" name="return" value=" ">
                                        <input type="hidden" name="cancel_return" value=" ">
                                        <input type="submit" name="submit" value="Add to cart" class="button">
                                    </fieldset>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-men single">
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
                            <h4><a href="single.html">Aero Canvas Loafers </a></h4>
                            <div class="info-product-price">
                                <span class="item_price">$120.99</span>
                                <del>$199.71</del>
                            </div>
                            <div
                                class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="business" value=" ">
                                        <input type="hidden" name="item_name" value="Aero Canvas Loafers">
                                        <input type="hidden" name="amount" value="30.99">
                                        <input type="hidden" name="discount_amount" value="1.00">
                                        <input type="hidden" name="currency_code" value="USD">
                                        <input type="hidden" name="return" value=" ">
                                        <input type="hidden" name="cancel_return" value=" ">
                                        <input type="submit" name="submit" value="Add to cart" class="button">
                                    </fieldset>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-men single">
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
                            <div
                                class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="business" value=" ">
                                        <input type="hidden" name="item_name" value="Ankle Length Socks">
                                        <input type="hidden" name="amount" value="30.99">
                                        <input type="hidden" name="discount_amount" value="1.00">
                                        <input type="hidden" name="currency_code" value="USD">
                                        <input type="hidden" name="return" value=" ">
                                        <input type="hidden" name="cancel_return" value=" ">
                                        <input type="submit" name="submit" value="Add to cart" class="button">
                                    </fieldset>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <!--//slider_owl-->
            </div>
        </div>
    </div>

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
                <div class="clearfix"></div>
            </div>

        </div>
    </div>
@endsection

@section('customPageCss')
    <style>
        .dot {
            height: 12px;
            width: 12px;
            background-color: rgb(34 34 34);
            border-radius: 50px;
            display: inline-block;
            margin: 15px;
            margin-left: 25px;
            cursor: pointer;
            transition: 0.5s;
            padding-right: 25px;
        }

        .carousel,
        .achats {
            width: clamp(400px, 100%, 800px);
            padding-right: 50px;
        }

        .img {
            aspect-ratio: 1/1;
            scroll-behavior: smooth;
            overflow: hidden;
            display: flex;
            object-fit: cover;
            border-radius: 10px;
            width: 100%;
            height: 100%;
        }

        .callbacks_tabs li {
    display:inline-block;
    margin: 100px 7px;
}
/*----*/
.callbacks_tabs a{
 visibility: hidden;
 margin-left: 35px;
}
.callbacks_tabs a:after {
    content: "\f111";
    font-size: 0;
    font-family: FontAwesome;
    visibility: visible;
    display: block;
    height:11px;
    width:25px;
    display: inline-block;
    background: #000000;
    border-radius: 50%;
    -webkit-border-radius: 20%;
    -o-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
}
.callbacks_here a:after{
       background:#2fdab8;
}

@media (max-width: 767px){
	.callbacks_tabs li {
		display:inline-block;
		margin: 100px 7px;
	}
	/*----*/
	.callbacks_tabs a{
	 visibility: hidden;
	 margin-left: 10px;
	}
}
    </style>

@endsection

@section('customPageJs')
    <script>
        let img_list = document.querySelectorAll(".carousel > .img > img");

        for (i = 0; i < img_list.length; i++) {
            let a = document.createElement("a");
            a.setAttribute("class", "dot");
            a.setAttribute("href", "#img" + i);
            img_list[i].id = "img" + i;
            document.querySelector(".carousel > .span-cont").appendChild(a);
        }

        let spans = document.querySelectorAll(".span-cont > a");
        spans[0].style.backgroundColor = "#5397b4";
        for (i = 0; i < spans.length; i++) {
            spans[i].onclick = function () {
                for (y = 0; y < spans.length; y++) {
                    spans[y].style.backgroundColor = "rgb(34 34 34)";
                }
                this.style.backgroundColor = "#5397b4";
            };
        }

    </script>
@endsection
