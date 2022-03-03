@extends('front.layouts.master')
@section('title') Hakkımızda @endsection
@section('content')
    <!-- /banner_bottom_agile_info -->
    <div class="page-head_agile_info_w3l">
        <div class="container">
            <h3>HAKKIMIZDA <span></span></h3>
            <!--/w3_short-->
            <div class="services-breadcrumb">
                <div class="agile_inner_breadcrumb">

                    <ul class="w3_short">
                        <li><a href="{{route('front.mainpage')}}">Ana Sayfa</a><i>|</i></li>
                        <li>Hakkımızda</li>
                    </ul>
                </div>
            </div>
            <!--//w3_short-->
        </div>
    </div>
    <!-- /banner_bottom_agile_info -->
    <div class="banner_bottom_agile_info">
        <div class="container">
            <div class="agile_ab_w3ls_info">
                <div class="col-md-6 ab_pic_w3ls">
                    <img src="{{asset('front/images/template-images')}}/ab_pic.jpg" alt=" " class="img-responsive" />
                </div>
                <div class="col-md-6 ab_pic_w3ls_text_info">
                    <h5>EGO OYUN <span> HAKKINDA</span> </h5>
                    <p>EGO OYUN, resmi bir çevrimiçi dijital dağıtım platformudur ve milyonlarca oyuncuya geniş dijital oyun kataloğunu en iyi fiyatlarla, anında teslimat ve harika hizmet amacıyla sunar.</p>
                    <p>Tam operasyonel stratejileri doğrultusunda, her geçen yıl global bir marka olma yolunda ilerlemektedir. 85’in üzerinde oyun firmasının Türkiye'deki yetkili satıcısı olarak, en geniş oyun kataloğuna sahip firmalarından biridir.</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="banner_bottom_agile_info_inner_w3ls">
                <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
                    <figure class="effect-roxy">
                        <img src="{{asset('front/images/template-images')}}/bottom1.jpg" alt=" " class="img-responsive" />
                        <figcaption>
                            <h3><span>F</span>all Ahead</h3>
                            <p>New Arrivals</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
                    <figure class="effect-roxy">
                        <img src="{{asset('front/images/template-images')}}/bottom2.jpg" alt=" " class="img-responsive" />
                        <figcaption>
                            <h3><span>F</span>all Ahead</h3>
                            <p>New Arrivals</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- team -->
    <div class="banner_bottom_agile_info team">
        <div class="container">
            <h3 class="wthree_text_info">Our Team <span>Members</span></h3>
            <div class="inner_w3l_agile_grids">
                <div class="col-md-3 team-grids">
                    <div class="thumbnail team-w3agile">
                        <img src="{{asset('front/images/template-images')}}/t1.jpg" class="img-responsive" alt="">
                        <div class="social-icons team-icons right-w3l fotw33">
                            <div class="caption">
                                <h4>Joanna Vilken</h4>
                                <p>Add Short Description</p>
                            </div>
                            <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
                                <li><a href="#" class="facebook">
                                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                                <li><a href="#" class="twitter">
                                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                                <li><a href="#" class="instagram">
                                        <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                                <li><a href="#" class="pinterest">
                                        <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 team-grids">
                    <div class="thumbnail team-w3agile">
                        <img src="{{asset('front/images/template-images')}}/t2.jpg" class="img-responsive" alt="">
                        <div class="social-icons team-icons right-w3l fotw33">
                            <div class="caption">
                                <h4>Anika Mollik</h4>
                                <p>Add Short Description</p>
                            </div>
                            <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
                                <li><a href="#" class="facebook">
                                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                                <li><a href="#" class="twitter">
                                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                                <li><a href="#" class="instagram">
                                        <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                                <li><a href="#" class="pinterest">
                                        <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 team-grids">
                    <div class="thumbnail team-w3agile">
                        <img src="{{asset('front/images/template-images')}}/t3.jpg" class="img-responsive" alt="">
                        <div class="social-icons team-icons right-w3l fotw33">
                            <div class="caption">
                                <h4>Megali Deo</h4>
                                <p>Add Short Description</p>
                            </div>
                            <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
                                <li><a href="#" class="facebook">
                                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                                <li><a href="#" class="twitter">
                                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                                <li><a href="#" class="instagram">
                                        <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                                <li><a href="#" class="pinterest">
                                        <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 team-grids">
                    <div class="thumbnail team-w3agile">
                        <img src="{{asset('front/images/template-images')}}/t4.jpg" class="img-responsive" alt="">
                        <div class="social-icons team-icons right-w3l fotw33">
                            <div class="caption">
                                <h4>Retas Word</h4>
                                <p>Add Short Description</p>
                            </div>
                            <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
                                <li><a href="#" class="facebook">
                                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                                <li><a href="#" class="twitter">
                                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                                <li><a href="#" class="instagram">
                                        <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                                <li><a href="#" class="pinterest">
                                        <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //team -->

    <!-- schedule-bottom -->
    <div class="schedule-bottom">
        <div class="col-md-6 agileinfo_schedule_bottom_left">
            <img src="{{asset('front/images/template-images')}}/mid.jpg" alt=" " class="img-responsive" />
        </div>
        <div class="col-md-6 agileits_schedule_bottom_right">
            <div class="w3ls_schedule_bottom_right_grid">
                <h3>Misyon <span>&</span> Vizyon</h3>
                <p>Her yıl bir öncekinden daha büyük başarılara imza atmak isteyen EGOOYUN, bu doğrultuda daima ileriyi hedelemektedir. 
                10 yıl içerisinde ulusal ve uluslararası düzeyde öncü rol oynayıp dünyanın oyun satan en büyük 3 dijital içerik satıcısından biri olma hedefinde kararldır.</p>
                <div class="col-md-4 w3l_schedule_bottom_right_grid1">
                    <i class="fa fa-user-o" aria-hidden="true"></i>
                    <h4>Üyeler</h4>
                    <h5 class="counter">250</h5>
                </div>
                <div class="col-md-4 w3l_schedule_bottom_right_grid1">
                    <i class="fa fa-calendar-o" aria-hidden="true"></i>
                    <h4>Oyunlar</h4>
                    <h5 class="counter">85</h5>
                </div>
                <div class="col-md-4 w3l_schedule_bottom_right_grid1">
                    <i class="fa fa-shield" aria-hidden="true"></i>
                    <h4>Ödüller</h4>
                    <h5 class="counter">45</h5>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!-- //schedule-bottom -->
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
