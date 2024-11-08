<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CỬA HÀNG BÁNH KẸO</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ url('CSS/style.css') }}">
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
            <div class="container-fluid">
                <div class="my-logo">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('images/logo/logo5.png')}}" alt="Logo" class="img-responsive" style = "height: 75px; width: 75px; margin-top: -10px;">
                    </a>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarSupportedContent">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Trang chủ</a></li>
                        <li><a href="{{ route('login')}}">Đăng nhập</a></li>
                    </ul>
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nội dung cần tìm">
                        </div>
                        <button type="submit" class="btn btn-outline-success">Tìm</button>
                    </form>
                </div>
            </div>
        </nav>
    
        <!-- Carousel -->
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
                                <img src="{{ url('images/slideshow/banh_keo.jpg')}}" alt="">
                            </div>	
                            <div class="item">
                                <img src="{{ url('images/slideshow/banh-trung-thu-dong-khanh-4.jpg')}}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ url('images/slideshow/banh_moon.jpg')}}" alt="">
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
                <h2>Danh sách các mặt hàng</h2>
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
    <footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary" style="height: 80px;">
       
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>