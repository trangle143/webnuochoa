@extends('frontend.layout.app')
@section('title')
Trang chủ
@endsection
@section('content')
@include('frontend.includes.menu')
@include('frontend.includes.banner')
<!-- start service and not edit here -->
<div class="container">
    <div class="service ">
        <div class="col-xs-6 col-sm-3 service-item">
            <div class="icon">
                <img alt="services" src="{{asset('theme/assets/data/s1.png')}}" />
            </div>
            <div class="info">
                <a href="#"><h3>Free Shipping</h3></a>
                <span>On order over $200</span>
            </div>
        </div>
        <div class="col-xs-6 col-sm-3 service-item">
            <div class="icon">
                <img alt="services" src="{{asset('theme/assets/data/s2.png')}}" />
            </div>
            <div class="info">
                <a href="#"><h3>30-day return</h3></a>
                <span>Moneyback guarantee</span>
            </div>
        </div>
        <div class="col-xs-6 col-sm-3 service-item">
            <div class="icon">
                <img alt="services" src="{{asset('theme/assets/data/s3.png')}}" />
            </div>
            
            <div class="info" >
                <a href="#"><h3>24/7 support</h3></a>
                <span>Online consultations</span>
            </div>
        </div>
        <div class="col-xs-6 col-sm-3 service-item">
            <div class="icon">
                <img alt="services" src="{{asset('theme/assets/data/s4.png')}}" />
            </div>
            <div class="info">
                <a href="#"><h3>SAFE SHOPPING</h3></a>
                <span>Safe Shopping Guarantee</span>
            </div>
        </div>
    </div>
</div>
<!-- end services -->
<!-- start -->
<div class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-9 page-top-left">
                <div class="popular-tabs">
                      <ul class="nav-tab">
                        <li class="active"><a data-toggle="tab" href="#tab-1">Sản phẩm nổi bật</a></li>
                        <li><a data-toggle="tab" href="#tab-2">Quà tặng</a></li>
                        <!--<li><a data-toggle="tab" href="#tab-3">New products</a></li>-->
                      </ul>
                      <div class="tab-container">
                        <!-- tab - 1 -->
                            <div id="tab-1" class="tab-panel active">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                                    <li>
                                        <div class="left-block">
                                            <a href="detail.html">
                                                <img class="img-responsive" alt="product" src="{{asset('theme/assets/images/valentino donna.jpg')}}" />
                                                         
                                            </a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                            <div class="group-price">
                                                <span class="product-new">NEW</span>
                                                <span class="product-sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="detail.html">Valentino Donna</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">3,500,000 VND</span>
                                                <span class="price old-price">3,000,000 VND</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="detail.html"><img class="img-responsive" alt="product" src="{{asset('theme/assets/images/goodgirl.jpeg')}}" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="detail.html">Good Girl</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">4,000,000 VND</span>
                                                <!--<span class="price old-price">$52,00</span>-->
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="detail.html"><img class="img-responsive" alt="product" src="{{asset('theme/assets/images/versacexanh.jpg')}}" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="group-price">
                                                <span class="product-new">NEW</span>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="detail.html">Versace Xanh</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">3,780,000 VND</span>
                                                <!--<span class="price old-price">$52,00</span>-->
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="detail.html"><img class="img-responsive" alt="product" src="{{asset('theme/assets/data/bs4.jpg')}}" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="detail.html">Flowers Dress</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- end tab- 1 -->
                            <!-- start tab- 2 -->
                            <div id="tab-2" class="tab-panel">
                                <ul class="product-list owl-carousel"  data-dots="false" data-loop="true" data-nav = "true" data-margin = "30"  data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                                    <li>
                                        <div class="left-block">
                                            <a href="detail.html">
                                            <img class="img-responsive" alt="product" src="{{asset('theme/assets/data/p48.jpg')}}" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="detail.html">
                                            <img class="img-responsive" alt="product" src="assets/data/p49.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="detail.html"><img class="img-responsive" alt="product" src="{{asset('theme/assets/data/p50.jpg')}}" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="detail.html"><img class="img-responsive" alt="product" src="{{asset('theme/assets/data/p51.jpg')}}" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- end tab-2 -->
                            <!-- start tab - 3 -->
                            <div id="tab-3" class="tab-panel">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                                    <li>
                                        <div class="left-block">
                                            <a href="detail.html"><img class="img-responsive" alt="product" src="{{asset('theme/assets/data/p60.jpg')}}" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="detail.html"><img class="img-responsive" alt="product" src="{{asset('theme/assets/data/p61.jpg')}}" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="detail.html"><img class="img-responsive" alt="product" src="{{asset('theme/assets/data/p62.jpg')}}" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="detail.html"><img class="img-responsive" alt="product" src="{{asset('theme/assets/data/p63.jpg')}}" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- end tab - 3 -->
                      </div>
                </div>
            </div>
    </div>
</div>
<!---->
<div class="content-page" style="background-image: linear-gradient(#E80AAC 30%, #FBBC4D 70%)">
    <div class="container">
        <!-- featured category jewelry  536-->
        @foreach($loai as $l)
        
        <div class="category-featured">
            <nav class="navbar nav-menu nav-menu-gray show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="{{ asset('theme/assets/images/perfume1.png') }}" />{{ $l->ten }}</a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">           
                  <ul class="nav navbar-nav">
                    <li class="active"><a data-toggle="tab" href="#tab-15">Best Seller</a></li>
                    @foreach($l->thuonghieu as $th)
                    @if($th->noibat==1)
                    <li><a data-toggle="tab" href="#{{ $th->id }}">{{ $th->ten }}</a></li>
                    @endif
                    @endforeach
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-6" class="floor-elevator">
                    <a href="#elevator-5" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#" class="btn-elevator disabled down fa fa-angle-down"></a>
              </div>
            </nav>
            
           <div class="product-featured clearfix">
                <div class="banner-featured">
                    <div class="featured-text"><span>featured</span></div>
                    <div class="banner-img" style="height: 200px">
                        <a href="#"><img width="100%" height="380px" alt="Featurered 1" src="<?php echo asset("image/nuochoa_nu/$l->hinhanh") ?>" /></a>
                    </div>
                </div>
                <div class="product-featured-content">
                
                    <div class="product-featured-list">
                        <div class="tab-container autoheight">
                            <!-- tab product -->
                            <div class="tab-panel active" id="1">
                                
                                <ul class="product-list owl-carousel"  data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                    @foreach($l->thuonghieu as $th)
                                    @foreach($th->sanpham as $sp)
                                    
                                    <li>
                                        <div class="left-block">
                                            <a href="{{ route('show.sanpham',$sp->id) }}"><img class="img-responsive" alt="product" src="http://localhost/nuochoa/public/image/nuochoa_nu/{{ $sp->hinhanh }}" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="{{ url('like',$sp->id) }}"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                             <form method="POST" action="{{route('cart.add')}}">
                                            <div class="add-to-cart">
                                                @csrf
                                                 <input name="id" type="hidden" value="{{$sp->id}}">
                                                   <button type="submit"><a title="Add to Cart">Add to Cart</a></button>
                                            </div>
                                            </form>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="detail.html">{{ $sp->ten }}</a></h5>
                                            <div class="content_price">
                                                <?php $km = ($sp->giakhuyenmai/100)*$sp->price ?>
                                                <?php $tongcong = $sp->price - $km ?>
                                                <span class="price product-price">{{ $tongcong }}</span>
                                                @if($tongcong === $sp->price)
                                                <span></span>
                                                @else
                                                <span class="price old-price">{{ $sp->price }}</span>

                                                @endif
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                    @endforeach
                                    

                               

                                </ul>
                            </div>
        
                                    
                            <!-- tab product -->
                            <div class="tab-panel" id="tab-15">
                                <ul class="product-list owl-carousel"  data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                    <li>
                                        <div class="left-block">
                                            <a href="detail.html"><img class="img-responsive" alt="product" src="assets/data/p33.jpg" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
           </div>
        </div>
        
        @endforeach
        <div class="row banner-bottom">
            <div class="col-sm-8">
                <div class="banner-boder-zoom">
                    <a href="#"><img alt="Baner here" class="img-responsive" src="image/nuochoa3.jpg" /></a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="banner-boder-zoom">
                    <a href="#"><img alt="Baner here" class="img-responsive" src="image/nuochoa6.jpg" /></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="brand-showcase">
        <h2 class="brand-showcase-title">
            brand showcase
        </h2>
        <div class="brand-showcase-box">
            <ul class="brand-showcase-logo owl-carousel" data-loop="true" data-nav = "true" data-dots="false" data-margin = "1" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":2},"600":{"items":5},"1000":{"items":8}}'>
                @foreach($thuonghieu as $thuonghieu)
                <li data-tab="showcase-{{$thuonghieu->id}}"  id="grand"><img src="<?php echo asset("image/nuochoa_nu/$thuonghieu->hinhanh") ?>" alt="logo" class="item-img active" /></li>
                @endforeach
            </ul>
            <div class="brand-showcase-content">
                @foreach($thuonghieu1 as $thuonghieu1)
                <div class="brand-showcase-content-tab" id="showcase-{{$thuonghieu1->id}}">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 trademark-info">
                            
                            <div class="trademark-desc">
                                <p>{{ $thuonghieu1->gioithieu }}</p>
                                Whatever the occasion, complete your outfit with one of Hermes Fashion’s stylish women’s bags. Discover our spring collection.
                            </div>
                            <a href="#" class="trademark-link">shop this brand</a>
                        </div>
                        <div class="col-xs-12 col-sm-8 trademark-product">
                            <div class="row">
                                @foreach($thuonghieu1->sanpham as $sanpham)
                                <!-- san phẩm -->
                                <div class="col-xs-12 col-sm-6 product-item">
                                    <div class="image-product hover-zoom">
                                        <a href="detail.html"><img class="img-repon" src="<?php echo asset("image/nuochoa_nu/$sanpham->hinhanh") ?>" alt=""></a>
                                    </div>
                                    <div class="info-product">
                                        <a href="detail.html">
                                            <h5>{{$sanpham->ten}}</h5>
                                        </a>
                                        <span class="product-price">{{$sanpham->giakhuyenmai}}</span>
                                        <div class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a class="btn-view-more" title="View More" href="#">View More</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
    </div>
</div>

  @endsection