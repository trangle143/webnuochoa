@extends('frontend.layout.app')
@section('title')
Trang chủ
@endsection
@section('content')
@include('frontend.includes.menu')
<!-- loai san pham -->
<div id="home-slider">
    <div class="container">
        <div class="row">
            <!-- <div class="col-sm-4 slider-left"></div> -->
            <div class="col-sm-12 header-top-right">
               <div class="row">
                @foreach($loai->sanpham as $sp)
                <div class="col-md-3">
                  <div  class="product-list"  data-margin="20">
                    <li style=" list-style-type: none;">
                        <div class="left-block">
                            <a href="detail.html">
                                <img class="img-responsive" alt="product" src="<?php echo asset("image/nuochoa_nu/$sp->hinhanh") ?>" />
                            </a>
                            <div class="quick-view">
                                    <a title="Add to my wishlist" class="heart" href="#"></a>
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
                            <div class="group-price">
                                @if($sp->giakhuyenmai == $sp->price)) 
                                    
                                @else   
                                     <span class="product-sale">Sale</span>
                                @endif
                               
                            </div>
                        </div>
                        <div class="right-block">
                            <h5 class="product-name"><a href="{{ route('show.sanpham',$sp->id) }}">{{ $sp->ten }}</a></h5>
                            <div class="content_price">
                                <span class="price product-price">{{ number_format($sp->giakhuyenmai) }}</span>
                                @if($sp->giakhuyenmai == $sp->price)
                                    
                                @else   
                                    <span class="price old-price">{{ number_format($sp->price) }}</span>
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
                     </div>
                 </div>
                    @endforeach                
                </div>
                        



               <!--  <div class="header-banner banner-opacity">
                    <a href="#"><img alt="Funky roots" src="{{asset('theme/assets/data/ads1.jpg')}}" /></a>
                </div> -->

            </div>
        </div>
    </div>
</div>  
<div class="container-fluid">
    
</div>

@endsection