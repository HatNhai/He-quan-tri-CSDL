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
</head> 
<script>
	$(document).ready(function(){
		$(".wish-icon i").click(function(){
			$(this).toggleClass("fa-heart fa-heart-o");
		});
	});	
</script>
<style>
    /* Navbar Styling */
    /* .navbar {
        background-color: #FF8C00; /* Màu nền của navbar */
        /* border: none;
        border-radius: 0;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);}
         */
    
    
    .navbar-brand img {
        height: 60px;
        width: 60px;
        margin-top: -15px;
    }

    /* .navbar-nav > li > a {
        color: #fff;
        font-family: 'Merienda One', cursive;
        font-size: 18px;
    } */

    .navbar-nav > li > a:hover, .navbar-nav > li.active > a {
        color: #FF4500; /* Màu khi hover */
        background-color: transparent;
    }

    /* Dropdown Styling */
    .dropdown-menu {
        background-color: #FF8C00;
    }

    .dropdown-menu > li > a {
        color: #fff;
    }

    .dropdown-menu > li > a:hover {
        background-color: #FFA07A;
    }

    /* Search Box Styling */
    .search-box .form-control {
        border-radius: 20px;
        padding: 8px 15px;
        box-shadow: none;
        border: 1px solid #FFA07A;
    }

    .search-box .input-group-addon {
        background-color: #FFA07A;
        color: #fff;
        border-radius: 0 20px 20px 0;
        border: none;
    }

    /* Notifications and Messages */
    .navbar-right .notifications, .navbar-right .messages {
        color: #fff;
    }

    .navbar-right .badge {
        background-color: #FF4500;
        font-size: 10px;
        position: absolute;
        top: 10px;
        right: 15px;
    }

    /* Carousel Styling */
    .carousel-unique {
        margin-top: 20px;
    }

    .carousel-inner .item img {
        width: 100%;
        border-radius: 10px;
    }

    .carousel-control {
        width: 40px;
        height: 40px;
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
        top: 50%;
        transform: translateY(-50%);
    }

    .carousel-control i {
        font-size: 20px;
        color: #fff;
        position: relative;
        top: 50%;
        transform: translateY(-50%);
    }

    /* Media Queries for Responsive Design */
    @media (max-width: 768px) {
        .navbar-nav {
            text-align: center;
        }

        .navbar-header .navbar-brand img {
            height: 50px;
            width: 50px;
        }

        .search-box .form-control {
            width: 100%;
        }
    }
</style>

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
                            <li><a href="{{route('hoaDon.index')}}">Thống kê hoá đơn</a></li>			
                        
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Nhà Cung Cấp<b class="caret"></b></a>
                        <ul class="dropdown-menu">	
                            <li><a href="{{ route('viewnhacungcap.index') }}">Danh sách nhà cung cấp</a></li>
                            <li><a href="{{ route('nhacungcap.create') }}">Thêm mới nhà cung cấp</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Nhân viên <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('nhanvienview.view') }}">Danh sách nhân viên</a></li>
                            <li><a href="{{ route('nhanvien.index') }}">Quản lý nhân viên</a></li>

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
                    <li><a href="#" class="notifications"><i class="fa fa-bell-o"></i><span class="badge"></span></a></li>
                    <li><a href="#" class="messages"><i class="fa fa-envelope-o"></i><span class="badge"></span></a></li>
                    <li class="dropdown">
                        @auth
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle user-action">
                                <img src="https://as1.ftcdn.net/v2/jpg/03/46/83/96/1000_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg" class="avatar" alt="Avatar"> 
                                {{ Auth::user()->name }} <b class="caret"></b>
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="user-action">Đăng nhập</a>
                        @endauth
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-user-o"></i> Profile</a></li>
                            <li><a href="#"><i class="fa fa-calendar-o"></i> Calendar</a></li>
                            <li><a href="#"><i class="fa fa-sliders"></i> Settings</a></li>
                            <li class="divider"></li>
                            <li>
                            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="logout-button">
                                    <i class="material-icons">&#xE8AC;</i> Logout
                                </button>
                            </form>

                            </li>
                        </ul>
                    </li>
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

    
</body>
</html>                            