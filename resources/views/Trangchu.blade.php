<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Trang chủ cửa hàng bánh kẹo</title>
<link href="https://fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="{{ url('CSS/Trangchu.css') }}">
<link rel="stylesheet" href="{{ url('CSS/style_main.css') }}">
<link rel="stylesheet" href="{{ url('CSS/carousel.css') }}">
</head> 
<script>
	$(document).ready(function(){
		$(".wish-icon i").click(function(){
			$(this).toggleClass("fa-heart fa-heart-o");
		});
	});	
</script>
<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <div class="my-logo">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('images/logo/logo5.png')}}" alt="Logo" class="img-responsive" style = "height: 75px; width: 75px; margin-top: -10px;">
                    </a>
                </div>	
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="navbar-toggler-icon"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collection of nav links, forms, and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Trang chủ</a></li>

                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Hoá Đơn<b class="caret"></b></a>
                        <ul class="dropdown-menu">		
                            <li><a href="{{route('hoaDon.index')}}">Danh sách hoá đơn</a></li>			
                            <li><a href="#">Tạo hoá đơn</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Sản Phẩm<b class="caret"></b></a>
                        <ul class="dropdown-menu">		
                            <li><a href="{{ route('sanpham.index') }}">Danh sách sản phẩm</a></li>			
                            <li><a href="{{ route('doanhthu.index') }}">Thống kê doanh thu của từng sản phẩm</a></li>
                            <li><a href="#">Lập phiếu nhập sản phẩm</a></li>     
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Khách Hàng<b class="caret"></b></a>
                        <ul class="dropdown-menu">	
                            <li><a href="{{ route('khachhang.index') }}">Danh sách khách hàng</a></li>							
                            <li><a href="{{ route('khachhang.doanhthuKH') }}">Thống kê khách hàng có doanh thu cao nhất</a></li>   
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Nhà Cung Cấp<b class="caret"></b></a>
                        <ul class="dropdown-menu">	
                            <li><a href="{{ route('nhacungcap.index') }}">Danh sách nhà cung cấp</a></li>							
                        </ul>
                    </li>
                </ul>

                <form class="navbar-form form-inline">
                    <div class="input-group search-box">								
                        <input type="text" id="search" class="form-control" placeholder="Search by Name" style="width: 300px;">
                        <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
                    </div>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" class="notifications"><i class="fa fa-bell-o"></i><span class="badge">1</span></a></li>
                    <li><a href="#" class="messages"><i class="fa fa-envelope-o"></i><span class="badge">10</span></a></li>
                   
                </ul>
            </div>
        </nav>

        <div class="container carousel-unique">
            <div class="row">
                <div class="col-md-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
                        <!-- Carousel indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>   
                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="http://www.thegioibanhkeo.com/wp-content/uploads/2012/12/banh-trung-thu-dong-khanh-4.jpg" alt="">
                            </div>	
                            <div class="item">
                                <img src="http://www.thegioibanhkeo.com/wp-content/uploads/2012/12/d2fbtt.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="http://www.thegioibanhkeo.com/wp-content/uploads/2012/12/2eedbf3628258cdc6968f88749a83d65_38978384.untitled2.jpg" alt="">
                            </div>	
                        </div>
                        <!-- Carousel controls -->
                        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="carousel-control right" href="#myCarousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-12">
                <h2>Danh sách các sản phẩm</h2>
                <div>
                    <div id="myCarousel1" class="carousel slide" data-ride="carousel" data-interval="0">
                        <!-- Carousel indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel1" data-slide-to="1"></li>
                            <li data-target="#myCarousel1" data-slide-to="2"></li>
                        </ol>   
                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="{{ url('images/slideshow/banh_oreo.webp')}}" class="img-responsive" alt="">									
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Oreo Black Cream</h4>						    			
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="item-price"><strike>10.000 VND</strike> <b>9.000 VND</b></p>
                                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                            </div>						
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="{{ url('images/slideshow/banh_quy.jpg')}}" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>AFC Coconut Biscuit</h4>									
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="item-price"><strike>20.000 VND</strike> <b>15.000 VND</b></p>
                                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                            </div>						
                                        </div>
                                    </div>		
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="{{ url('images/slideshow/banh_gao.png')}}" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Kenju Rice Biscuit </h4>									
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="item-price"><strike>30.000 VND</strike> <b>25.000 VND</b></p>
                                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                            </div>						
                                        </div>
                                    </div>								
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="{{ url('images/slideshow/banh_quy_dua.jpg')}}" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Coconut Cracker</h4>									
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="item-price"><strike>13.400 VND</strike> <b>10.500 VND</b></p>
                                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                            </div>						
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="{{ url('images/slideshow/banh_trung.jpg')}}" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Tipo Egg Cake</h4>
                                                <p class="item-price"><strike>30.000 VND</strike> <span>24.000 VND</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                            </div>						
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="{{ url('images/slideshow/banh_gao_nuong.jpg')}}" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Grilled Rice Cake</h4>
                                                <p class="item-price"><strike>34.000 VND</strike> <span>30.000 VND</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                            </div>						
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="{{ url('images/slideshow/banh_mi_kinhdo.jpg')}}" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Kinh Do Bread </h4>
                                                <p class="item-price"><strike>12.000 VND</strike> <span> 10.000 VND</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                            </div>						
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="{{ url('images/slideshow/keo_bac_ha.webp')}}" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Mint Candy</h4>
                                                <p class="item-price"><strike>19.000 VND</strike> <span>18.900 VND</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                            </div>						
                                        </div>
                                    </div>				
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="{{ url('images/slideshow/banh_que.webp')}}" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Glico Pocky Socola</h4>
                                                <p class="item-price"><strike>20.000 VND</strike> <span>17.000 VND</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                            </div>						
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="{{ url('images/slideshow/cay_cay.webp')}}" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Chilly Stick</h4>
                                                <p class="item-price"><strike>15.000</strike> <span>12.500</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                            </div>						
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="{{ url('images/slideshow/keo_the.webp')}}" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Play More Candy</h4>
                                                <p class="item-price"><strike>45.000 VND</strike> <span>28.500 VND</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                            </div>						
                                        </div>
                                    </div>	
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="{{ url('images/slideshow/danisa.webp')}}" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Danisa Butter Cookies</h4>
                                                <p class="item-price"><strike>350.000 VND</strike> <span>265.000 VND</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                            </div>						
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Carousel controls -->
                        <a class="carousel-control left" href="#myCarousel1" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="carousel-control right" href="#myCarousel1" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>                            