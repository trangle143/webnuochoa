<div id="header" class="header">
    <div class="top-header">
        <div class="container">
            <div class="nav-top-links">
                <a class="first-item" href="#"><img alt="phone" src="{{asset('theme/assets/images/phone.png')}}" />03-69-943-439</a>
                <a href="#"><img alt="email" src="{{asset('theme/assets/images/email.png')}}" />trangle5200@gmai.com</a>
            </div>
            
            <div id="user-info-top" class="user-info pull-right">
                <div class="dropdown">
                        <!-- guest -->
                        @guest
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @can('admin')
                        <li class="nav-item dropdown"><a href="{{ route('thuonghieu') }}">Quản lí thương hiệu</a></li>
                        <li class="nav-item dropdown"><a href="{{ route('sanpham.quanli') }}">Quản lí sản phẩm</a></li>
                        <li class="nav-item dropdown"><a href="{{ route('sanpham.them') }}">Thêm sản phẩm</a></li>
                        <li class="nav-item dropdown"><a href="{{ route('donhang') }}">Quản lí đơn hàng</a></li>
                        @endcan
                        @endguest
                </div>
            </div>
        </div>
    </div>
    <!--/.top-header -->
    <!-- MAIN HEADER -->
    <div class="container main-header">
        <div class="row">
            <div class="col-xs-12 col-sm-3 logo">
                <a href="{{ route('index') }}"><img alt="Kute Shop" src="{{asset('theme/assets/images/logo3.png')}}" /></a>
            </div>
            <div class="col-xs-6 col-sm-6 header-search-box">
                <form class="form-inline">
                    @csrf 
                      <div class="form-group input-serach">
                        <input type="text"  name="ten" id="country_name" placeholder="Nhập từ khóa...">
                        <div id="countryList"></div>
                      </div>
                      <button type="submit" class="pull-right btn-search"></button>
                </form>
            </div>
            <div id="cart-block" class="col-xs-6 col-sm-3 shopping-cart-box">
                <a class="cart-link" href="{{ url('giohang') }}">
                    <span class="title">GIỎ HÀNG</span>
                    <span class="total">{{Cart::getContent()->count()}} món - {{number_format(Cart::getSubTotal())}}VND</span>
                    <span class="notify notify-left">{{Cart::getContent()->count()}}</span>
                </a>
                <div class="cart-block">
                    <div class="cart-block-content">
                        <h5 class="cart-title"><a href="{{url('giohang')}}">Đi đến giỏ hàng</a></h5>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- END MANIN HEADER -->
    <div id="nav-top-menu" class="nav-top-menu">
        <div class="container">
            <div class="row">
                <div class="col-sm-3" id="box-vertical-megamenus">
                    <div class="box-vertical-megamenus">
                        <h4 style="color: pink;"  class="title">
                            <span class="title-menu">Danh mục nước hoa</span>
                            <span class="btn-open-mobile pull-right home-page"><i class="fa fa-bars"></i></span>
                        </h4>
                        <div class="vertical-menu-content is-home">
                            <ul class="vertical-menu-list">
                                @foreach($loai as $l)
                                
                                <li>
                                    <a class="parent" href="{{ route('show.loai',$l->id) }}"><img class="icon-menu" alt="Funky roots" src="{{asset('theme/assets/images/perfume2.png')}}">{{ $l->ten }}</a>
                                    <div class="vertical-dropdown-menu">
                                        <div class="vertical-groups col-sm-12">
                                            @foreach($l->thuonghieu as $th)
                                            <div class="mega-group col-sm-4">
                                                <ul class="group-link-default">
                                                    <li><a href="{{ route('show.thuonghieu',$th->id) }}"><img class="icon-menu" alt="" src="assets/data/1.png">{{ $th->ten}}</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-2">
                                                <ul class="group-link-default">
                                                    <li>
                                                    </li>
                                                </ul>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </li>
                                
                                @endforeach
                                
                                <li class="cat-link-orther">
                                    <a href="category.html">
                                        <img class="icon-menu" alt="baby" src="theme/assets/images/boygirl.png">
                                        Bé trai &amp; Bé gái
                                    </a>
                                </li>
                                <li class="cat-link-orther">
                                    <a href="category.html">
                                        <img class="icon-menu" alt="namnu" src="{{asset('theme/assets/images/unisex.png')}}">
                                    Nước hoa nam &amp; Nước hoa nữ
                                    </a>
                                </li>
                            </ul>
                            <div class="all-category"><span class="open-cate">Sản phẩm nổi bật</span></div>
                        </div>
                    </div>
                </div>
                <div id="main-menu" class="col-sm-9 main-menu">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <a class="navbar-brand" href="#">MENU</a>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li class="">
                                        <a href="{{route('index')}}">Trang chủ</a>
                                       
                                    </li>
                                    <li class="dropdown">
                                        <a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Khuyến mãi</a>
                                        <ul class="dropdown-menu mega_dropdown" role="menu" style="width: 830px;">
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <a href="#">
                                                            <img class="img-responsive" src="{{asset('theme/assets/data/men.png')}}" alt="sport">
                                                        </a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">Nước hoa nam</a>
                                                    </li>
                                                    <li class="link_container"><a href="#">Ck</a></li>
                                                    <li class="link_container"><a href="#">Dior Homme</a></li>
                                                    <li class="link_container"><a href="#">Very sexy boy</a></li>
                                                    <li class="link_container"><a href="#">Polo</a></li>
                                                    <li class="link_container"><a href="#">Chanel boy</a></li>
                                                </ul>
                                            </li>
                                             <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <a href="#">
                                                            <img class="img-responsive" src="{{asset('theme/assets/data/women.png')}}" alt="sport">
                                                        </a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">Nước hoa nữ</a>
                                                    </li>
                                                    <li class="link_container"><a href="#">Chanel no19</a></li>
                                                    <li class="link_container"><a href="#">Very sexy</a></li>
                                                    <li class="link_container"><a href="#">Gucci</a></li>
                                                    <li class="link_container"><a href="#">Good girl</a></li>
                                                    <li class="link_container"><a href="#">Dior jadore</a></li>
                                                </ul>
                                            </li>
                                             <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <a href="#">
                                                            <img class="img-responsive" src="{{asset('theme/assets/data/kid.png')}}" alt="sport">
                                                        </a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">Nước hoa baby</a>
                                                    </li>
                                                    <li class="link_container"><a href="#">Barbie</a></li>
                                                    <li class="link_container"><a href="#">Mickey</a></li>
                                                    <li class="link_container"><a href="#">Princess</a></li>
                                                    <li class="link_container"><a href="#">TheSmurfsVanity</a></li>
                                                    <li class="link_container"><a href="#">TheSmurfsPapa</a></li>
                                                </ul>
                                            </li>
                                             <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <a href="#">
                                                            <img class="img-responsive" src="{{asset('theme/assets/data/trending.png')}}" alt="sport">
                                                        </a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">Nước hoa Unisex</a>
                                                    </li>
                                                    <li class="link_container"><a href="#">CK be</a></li>
                                                    <li class="link_container"><a href="#">Gris clair</a></li>
                                                    <li class="link_container"><a href="#">CK one (Unisex)</a></li>
                                                    <li class="link_container"><a href="#">Chergui</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                   
                                    <li class="dropdown">
                                        <a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Sản phẩm mới</a>
                                        <ul class="dropdown-menu mega_dropdown" role="menu" style="width: 830px;">
                                            @foreach($loai as $l)
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <a href="#">
                    <img class="img-responsive" src="<?php echo asset("image/nuochoa_nu/$l->hinhanh") ?>" alt="sport">
                                                        </a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">{{ $l->ten }}</a>
                                                    </li>
                                                    <?php $i=0 ?>
                                                    @foreach($l->sanpham->sortByDesc('id') as $sp)
                                                    <li class="link_container"><a href="#">{{$sp->ten}}</a></li>
                                                    <?php if(++$i==4) break; ?>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Sản phẩm bán chạy</a>
                                            <ul class="mega_dropdown dropdown-menu" style="width: 830px;">
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="link_container group_header">
                                                        <a href="#">Nước hoa nam</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Dior homme</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Ck free</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Polo</a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">Nước hoa baby</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Princess</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">TheSmurfsPapa</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Barbie</a>
                                                    </li>
                                                   
                                                </ul>
                                            </li>
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="link_container group_header">
                                                        <a href="#">Nước hoa nữ</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Very sexy</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Chanel no19</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Good girl</a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">Nước hoa Unisex</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Ck be</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Gris clair</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Chergui</a>
                                                    </li>
                                                    
                                                </ul>
                                            </li>
                                            <!--<li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="link_container group_header">
                                                        <a href="#">FAST</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Hamberger</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Pizza</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Noodles</a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">Sandwich</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Salad</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Paste</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                </ul>
                                            </li>-->
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <img src="{{asset('theme/assets/data/banner-topmenu.jpg')}}" alt="Banner">
                                                    </li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Video</a>
                                        <ul class="dropdown-menu container-fluid">
                                            <li class="block-container">
                                                <ul class="block">
                                                    <li class="link_container"><a href="#">Nước hoa nam</a></li>
                                                    <li class="link_container"><a href="#">Nước hoa nữ</a></li>
                                                    <li class="link_container"><a href="#">Nước hoa baby</a></li>
                                                    <li class="link_container"><a href="#">Nước hoa Unisex</a></li>
                                                </ul>
                                            </li> 
                                        </ul>
                                    </li>
                                    <li><a href="category.html">Tư vấn</a></li>
                                    <li><a href="category.html">Lịch sử</a></li>
                        
                                </ul>
                            </div><!--/.nav-collapse -->
                        </div>
                    </nav>
                </div>
            </div>
            <!-- userinfo on top-->
            <div id="form-search-opntop">
            </div>
            <!-- userinfo on top-->
            <div id="user-info-opntop">
            </div>
            <!-- CART ICON ON MMENU -->
            <div id="shopping-cart-box-ontop">
                <i class="fa fa-shopping-cart"></i>
                <div class="shopping-cart-box-ontop-content"></div>
            </div>
        </div>
    </div>
</div>
<script>
  $(document).ready(function(){

   $('#country_name').keyup(function(){ //bắt sự kiện keyup khi người dùng gõ từ khóa tim kiếm
    var query = $(this).val(); //lấy gía trị ng dùng gõ
    if(query != '') //kiểm tra khác rỗng thì thực hiện đoạn lệnh bên dưới
    {
     var _token = $('input[name="_token"]').val(); // token để mã hóa dữ liệu
     $.ajax({
      url:"{{ route('search') }}", // đường dẫn khi gửi dữ liệu đi 'search' là tên route mình đặt bạn mở route lên xem là hiểu nó là cái j.
      method:"POST", // phương thức gửi dữ liệu.
      data:{query:query, _token:_token},
      success:function(data){ //dữ liệu nhận về
       $('#countryList').fadeIn();  
       $('#countryList').html(data); //nhận dữ liệu dạng html và gán vào cặp thẻ có id là countryList
     }
   });
   }
 });

   $(document).on('click', 'li', function(){  
    $('#country_name').val($(this).text());  
    $('#countryList').fadeOut();  
  });  

 });
</script>