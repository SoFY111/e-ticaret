@extends('front.layouts.master')
@section('title') Bilgisayar @endsection
@section('content')

<div class="page-head_agile_info_w3l">
    <div class="container">
        <h3>Bİlgİsayar<span></span></h3>
        <!--/w3_short-->
        <div class="services-breadcrumb">
            <div class="agile_inner_breadcrumb">

                <ul class="w3_short">
                    <li><a href="{{route('front.mainpage')}}">Ana Sayfa</a><i>|</i></li>
                    <li>Bİlgİsayar</li>
                </ul>
            </div>
        </div>
        <!--//w3_short-->
    </div>
</div>
    <!-- banner-bootom-w3-agileits -->
	<div class="banner-bootom-w3-agileits">
        <div class="container">
             <!-- mens -->
            <div class="col-md-4 products-left">
                <div class="filter-price">
                    <h3>Fİyata Göre <span>Fİltreleme</span></h3>
                        <ul class="dropdown-menu6">
                            <li>                
                                <div id="slider-range"></div>							
                                <input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
                            </li>			
                        </ul>
                </div>
                <div class="css-treeview">
                    <h4>TÜR</h4>
                    <ul class="tree-list-pad">
                        <li><input type="checkbox" checked="checked" id="item-0" /><label for="item-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Aksiyon</label></li>
                        <li><input type="checkbox" id="item-1" checked="checked" /><label for="item-1"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Bulmaca</label>
                        </li>
                        <li><input type="checkbox" checked="checked" id="item-2" /><label for="item-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Dövüş</label>
                        <li><input type="checkbox" id="item-2-2" /><label for="item-2-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Nişancı</label>
                        <li><input type="checkbox" id="item-2-2" /><label for="item-2-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Rol Yapma</label>
                        <li><input type="checkbox" id="item-2-2" /><label for="item-2-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Simülasyon</label>
                            <li><input type="checkbox" id="item-2-2" /><label for="item-2-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Spor</label>
                            <li><input type="checkbox" id="item-2-2" /><label for="item-2-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Strateji</label>
                                <li><input type="checkbox" id="item-2-2" /><label for="item-2-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Yarış</label>
                        </li>
                    </ul>
                </div>
                <div class="community-poll">
                    <h4>YAYINCI</h4>
                    <div class="swit form">	
                        <form>
                        <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Ubisoft</label> </div></div>
                        <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>2K Games</label> </div></div>
                        <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Sony Interactive Ent.</label> </div></div>
                        <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>RockStar Games</label> </div></div>
                        <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Electronic Arts</label> </div></div>	
                        <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>WarnerBros Games</label> </div></div>
                        <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>CD Projekt Red</label> </div></div>	
                        <input type="submit" value="FİLTRELE">
                        </form>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-8 products-right">
                <h5>Ürün <span>Karşılaştırma(0)</span></h5>
                <div class="sort-grid">
                    <div class="sorting">
                        <h6>Sırala</h6>
                        <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                            <option value="null">Varsayılan</option>
                            <option value="null">İsim (A - Z)</option> 
                            <option value="null">İsim (Z - A)</option>
                            <option value="null">Fiyat (Çok - Az)</option>
                            <option value="null">Fiyat (Az - Çok)</option>	
                            <option value="null">En Yeni</option>
                            <option value="null">Çok Satan</option>					
                        </select>
                        <div class="clearfix"></div>
                    </div>
                    <div class="sorting">
                        <h6>Göster</h6>
                        <select id="country2" onchange="change_country(this.value)" class="frm-field required sect">
                            <option value="null">7</option>
                            <option value="null">14</option> 
                            <option value="null">28</option>					
                            <option value="null">35</option>								
                        </select>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="men-wear-top">
                    
                    <div  id="top" class="callbacks_container">
                        <ul class="rslides" id="slider3">
                            <li>
                                <img class="img-responsive" src="{{asset('front/images/template-images')}}/banner2.jpg" alt=" "/>
                            </li>
                            <li>
                                <img class="img-responsive" src="{{asset('front/images/template-images')}}/banner5.jpg" alt=" "/>
                            </li>
                            <li>
                                <img class="img-responsive" src="{{asset('front/images/template-images')}}/banner2.jpg" alt=" "/>
                            </li>
    
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="men-wear-bottom">
                    <div class="col-sm-4 men-wear-left">
                        <img class="img-responsive" src="{{asset('front/images/template-images')}}/windows.jpg" alt=" " />
                    </div>
                    <div class="col-sm-8 men-wear-right">
                        <h4>Bİlgİsayar <span>Oyunları</span></h4>
                        <p style="text-align: justify">Bilgisayar Oyunları fiyatlarını ve özelliklerini en popüler, en ucuz, en yeni ürünler olarak gruplayabilirsiniz. Bilgisayar Oyunları fiyatları karşılaştırma listesine ekleyerek size en uygun seçenekleri tek ekranda inceleyin. Bilgisayar Oyunları kategorisinde en favori markalar şu şekilde: Diğer, Kitap, Microsoft, Disney, Cars. onlarca adet Bilgisayar Oyunları fiyatlarını karşılaştırmaya başlayabilirsin! </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                    <div class="col-md-4 product-men">
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
                                                                        <input type="hidden" name="cmd" value="_cart">
                                                                        <input type="hidden" name="add" value="1">
                                                                        <input type="hidden" name="business" value=" ">
                                                                        <input type="hidden" name="item_name" value="Party Men's Blazer">
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
                <div class="col-md-4 product-men">
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
                                                                        <input type="hidden" name="cmd" value="_cart">
                                                                        <input type="hidden" name="add" value="1">
                                                                        <input type="hidden" name="business" value=" ">
                                                                        <input type="hidden" name="item_name" value="Analog Watch">
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
                <div class="col-md-4 product-men">
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
                                                                        <input type="hidden" name="cmd" value="_cart">
                                                                        <input type="hidden" name="add" value="1">
                                                                        <input type="hidden" name="business" value=" ">
                                                                        <input type="hidden" name="item_name" value="Running Shoes">
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
            </div>
            <div class="clearfix"></div>
            
            <div class="single-pro">
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
        </div>
    </div>	
    <!-- //mens -->
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
