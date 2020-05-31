<!DOCTYPE html>
<html lang="vi">

<!-- Mirrored from shooter-game.bitballoon.com/index-ancient-ages.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Jan 2018 08:21:21 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<!-- Responsive Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- IE Compatibility Meta -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Page Title -->
	<title>@yield('title')</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{url('/')}}/public/images/favicon.ico"> 

	<!-- Bootstrap Stylesheet -->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/css/bootstrap.min.css" />
	<link rel="stylesheet" href="{{url('/')}}/public/css/fontawesome.css">
	<link rel="stylesheet" href="{{url('/')}}/public/css/animate.css">
	<link rel="stylesheet" href="{{url('/')}}/public/css/flaticon.css">
    @yield('link')
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700" rel="stylesheet">

	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="{{url('/')}}/public/css/style.css">
    @yield('style')
    
</head>
<body>

	<!-- Page Holder -->
	<div class="page-holder" style="overflow:hidden">

        <div class="header">
            <nav class="navbar main-navigation war navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="http://localhost:8080/webgame"><img src="{{url('/')}}/public/images/war/logo-war.png" class="center-block" alt="logo">BKAPSHOP</a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar">

                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="js-scroll-trigger active " href="{{route('payment')}}" >Thanh Toán</a></li>
                            <li><a class="js-scroll-trigger" href="{{route('about')}}" >Giới Thiệu</a></li>
                            <li><a class="js-scroll-trigger" href="{{route('contact')}}" >Liên Hệ</a></li>
                            <li class="dropdown js-scroll-trigger">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Thông Tin </b></a>
                                <ul class="dropdown-menu" style="background-color: #353b48;">
                                    <li><a href="{{route('gamebanquyen')}}">Game Bản Quyền là gì?</a></li>
                                    <li><a href="{{route('dieukhoandichvu')}}">Điều Khoản Dịch Vụ</a></li>
                                    
                                </ul>
                            </li>

                            @if(Auth::check())
                            <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user-tie"></i> {{Auth::user()->username}}</b></a>
                                <ul class="dropdown-menu" id="user-info">

                                    <li>
                                        <p><b>SỐ DƯ TÀI KHOẢN:</b></p>
                                        <p class="text-center">{{number_format(Auth::user()->money,0,'','.')}} vnđ</p>
                                        <a href="" class="btn btn-primary">Nạp thêm</a>
                                    </li>
                                    @if(Auth::user()->group == 'admin')
                                    <li><a href="{{route('backend.index')}}">Trang quản lý</a></li>
                                    @endif
                                    <li><a href="{{route('transaction-history')}}">Lịch sử giao dịch</a></li>
                                    <li><a href="{{route('userinfo')}}">Thông tin tài khoản</a></li>
                                    <li><a class="js-scroll-trigger" href="{{route('home-logout')}}" >Đăng Xuất <i class="fas fa-sign-out-alt"></i></a></li>
                                </ul>
                            </li>
                            @else
                            <li><a class="js-scroll-trigger" href="{{route('home-login')}}" >Đăng Nhập</a></li>
                            <li><a class="js-scroll-trigger" href="{{route('registration')}}" >Đăng Ký</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        

        <div class="divider"><span class="divider-core"></span></div>
        <div class="main" style="margin-top: 20px;">
            <section class="showcase aged">
                <div class="container">
                    <nav class="navbar navbar-inverse"> 
                        <div class="container-fluid"> 
                            <ul class="nav navbar-nav"> 
                                <li style="background-color: #e67e22;"><a style="color: white; font-size: 16px;"><i class="fas fa-bars"></i> Danh mục sản phẩm</a></li>
                                &nbsp
                                @foreach($cats as $c)
                                <li style="margin-left: 20px;">
                                    <a href="{{route('category',['id'=>$c->id])}}" class="navbar-brand">{{$c->name}}</a> 
                                </li>
                                @endforeach 
                            </ul> 
                            <form class="navbar-form navbar-left" action="{{route('search')}}"> 
                                <div class="input-group"> 
                                    <input type="text" id="search" name="key" class="form-control" placeholder="Search" name="search"> 
                                    <div id="searchList"></div>
                                    <div class="input-group-btn">
                                       <button class="btn btn-default" type="submit"> <i class="glyphicon glyphicon-search"></i> 
                                       </button> 
                                   </div> 
                               </div>
                              </form> 
                               {{ csrf_field() }}}
                              <ul class="nav navbar-nav">
                                <li style="background-color: #3498db; padding: 0px 5px 0px 5px; border-radius: 5px;" id="cart"><a href="{{route('view-cart')}}" style="color: white; font-size: 16px;" ><i class="fas fa-shopping-cart"></i> Giỏ hàng <span style="width: 20px; background-color: orange;"><b style="padding: 5px;">{{ $cart->getTotalQuantity() }}</b></span></a></li>
                              </ul>
                          </div> 
                      </nav>


                    @yield('main')

                </div>

                @yield('main1')

            </section>

        </div>
        <!-- ======================================= 
        ==End Showcase section==  
        =======================================-->

        <div class="divider"><span class="divider-core"></span></div>

        <footer class="main-footer text-center" id="footer">
        	<!--Footer Bottom-->
        	<div class="footer-bottom">
                <h3 class="text-center" style="color: white;">Đồ án tốt nghiệp Đại học</h3>
                <p style="color: white;">Trường Đại học Công nghệ giao thông vận tải, số 54 Triều Khúc - Thanh Xuân - Hà Nội</p>
        		<div class="container">
        			<div class="col-md-6 col-sm-12">
        				<div class="copyright-text">Copyright © 2020. All Rights Reserved By Hoang
                        </div>
        			</div>
        			<div class="col-md-6 col-sm-12">
        				<ul class="social-links">
        					<li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
        					<li><a href="#"><span class="fa fa-twitter"></span></a></li>
        					<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
        					<li><a href="#"><span class="fa fa-linkedin"></span></a></li>
        					<li><a href="#"><span class="fa fa-instagram"></span></a></li>
        				</ul>
        			</div>
        		</div>
        	</div>
        </footer>
        <!-- ======================================= 
        ==End footer section==  
        =======================================-->

        <!-- ======================================= 
        ==Start preloader section==  
        =======================================-->
        <div class="preloader">
        	<div class="loader">
        		<div class="loader-inner"></div>
        	</div>
        </div>
        <!-- ======================================= 
        ==End preloader section==  
        =======================================-->

    </div>
    <!-- End Page Holder -->


    <script type="text/javascript" src="{{url('/')}}/public/js/jquery.min.js"></script>
    <script type="text/javascript" src="{{url('/')}}/public/js/bootstrap.min.js"></script>
    <script src="../cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="{{url('/')}}/public/js/jquery.counterup.min.js"></script>
    <script src="{{url('/')}}/public/js/slick.js"></script>
    <script src="{{url('/')}}/public/js/jquery.easing.min.js"></script>
    <script src="{{url('/')}}/public/js/wow.min.js"></script>
    <script src="{{url('/')}}/public/js/script.js"></script>
    <script src="{{url('/')}}/public/js/myscript.js"></script>
    <script src="https://kit.fontawesome.com/9d4aa3c9cf.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $('#check').click(function(){
            if($(this).is(':checked')){
                $('#nguoi-nhan').css('display','block');
            }else{
                $('#nguoi-nhan').css('display','none');
            }
        });
    </script>

    <script type="text/javascript">
        $('#search').keyup(function(event) {
            var query = $(this).val();
            if(query != ''){
                var _token = $('input[name = "_token"]').val();
                $.ajax({
                    url: "{{route('autocomplete-search')}}",
                    type: 'POST',
                    data: {
                        _token: _token,
                        query: query
                    },
                })
                .done(function(data) {
                    console.log(data);
                    $('#searchList').html(data);
                })
                .fail(function() {
                    console.log("error");
                })
                .always(function() {
                    console.log("complete");
                });
                
            }
        });

       $(document).on('click', '#product_name', function(event) {
           event.preventDefault();
           $('#search').val($(this).text());
       });
    </script>
    @yield('script')

</body>

<!-- Mirrored from shooter-game.bitballoon.com/index-ancient-ages.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Jan 2018 08:22:04 GMT -->
</html>



