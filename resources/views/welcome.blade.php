<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('asset/css/counter.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    <style>
        .checked {
            color: orange;
        }
    </style>

    <title>Hello, world!</title>
</head>

<body>
    <div class="container-fluid" style="background-color: #000000;">
        <div class="container">
            <nav class="navbar navbar-expand-lg ">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" style="color:#fff;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="fa fa-navicon" style="color:#fff; font-size:28px;"></i>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="btn btn-lg btn-danger text-light ml-5"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Add To Cart</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>






    <!--slider start -->

    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>

            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('asset/img/shop 1.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p class="slider-title">NEW COLLCRTION ARRIVED</p>
                        <p class="slider-text">heck the latest collection on Women's Dress</p>
                        <p class="buttob mt-5"> <a class="btn btn-lg btn-success">BUY NOW</a>&nbsp; &nbsp; <a class="btn btn-danger btn-lg">KNOW MORE</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('asset/img/shop 2.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p class="slider-title">EMI Available In <i class="fa fa-credit-card-alt" aria-hidden="true"></i></p>
                        <p class="slider-text">50% off in some popular brand product.</p>
                        <p class="buttob mt-5"> <a class="btn btn-lg btn-success">BUY NOW</a>&nbsp; &nbsp; <a class="btn btn-danger btn-lg">KNOW MORE</a></p>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!--slider end-->

    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-12">
                <h1 class="text-center">Featured Products</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="owl-carousel" id="owl-carousel1">

            @foreach ($fProducts as $product)
            <div>
                <div class="card product-card">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach (json_decode($product->images_url, true) as $image)
                            @if ($loop->first)
                            <div class="carousel-item active">
                                <img class="card-img-top img-fluid" src="{{ asset('/asset/img/product/'.$image) }}">
                            </div>
                            @else
                            <div class="carousel-item">
                                <img class="card-img-top img-fluid" src="{{ asset('/asset/img/product/'.$image) }}">
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-title"> {{$product->title}}</div>
                        @for ($count = 1; $count<= 5; $count ++)
                          @if ($count <= $product->rating)
                            <span class="fa fa-star checked"></span>
                          @else
                            <span class="fa fa-star"></span>
                          @endif
                        @endfor
                            <h3>Price: ${{$product->price}}</h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- newsletter -->
    <div class="container-fluid" id="discount">
        <div class="container discount-session-content">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-light text-capitalize">
                        Newsletter
                    </h1><br />
                </div>
                <div class="col-md-6">
                    <form class="form-inline">
                        <div class="form-group mx-sm-12 mb-2">
                            <label for="inputPassword2" class="sr-only">Mail Id</label>
                            <input type="password" class="form-control" id="inputPassword2" placeholder="Enter Your Mail Id">
                            &nbsp; &nbsp;
                        </div>
                        <button type="submit" class="btn btn-danger text-light mb-2">SUBSCRIBE US</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
<!-- newsletter end-->

    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-12">
                <h1 class="text-center">All products</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="owl-carousel" id="owl-carousel2">
          @foreach ($products as $product)
          <div>
                <div class="card product-card">
                  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                          @foreach (json_decode($product->images_url, true) as $image)
                          @if ($loop->first)
                          <div class="carousel-item active">
                              <img class="card-img-top img-fluid" src="{{ asset('/asset/img/product/'.$image) }}">
                          </div>
                          @else
                          <div class="carousel-item">
                              <img class="card-img-top img-fluid" src="{{ asset('/asset/img/product/'.$image) }}">
                          </div>
                          @endif
                          @endforeach
                      </div>
                  </div>
                  <div class="card-body">
                      <div class="card-title"> {{$product->title}}</div>
                      @for ($count = 1; $count<= 5; $count ++)
                        @if ($count <= $product->rating)
                          <span class="fa fa-star checked"></span>
                        @else
                          <span class="fa fa-star"></span>
                        @endif
                      @endfor
                        <h3>Price: ${{$product->price}}</h3>
                      <div class="card-text"><br />
                          <a class="btn btn-info">Buy Now</a> &nbsp; &nbsp; <a class="btn btn-success">Add To Cart</a>
                      </div>

                  </div>
                </div>
            </div>
          @endforeach
        </div>
    </div>

    <!-- Footer -->
    <!-- Footer -->
    <footer class="page-footer font-small stylish-color-dark pt-4">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4 mx-auto">

                    <!-- Content -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Footer Content</h5>
                    <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
                        consectetur
                        adipisicing elit.</p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">
                <!-- Grid column -->
                <div class="col-md-2 mx-auto">
                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        <!-- Footer Links -->
        <hr>
        <hr>

    </footer>
    <!-- Footer -->
    <!-- Footer -->
    <div class="container-fluid bg-dark">
        <div class="row">
            <div class="col-md-12 text-capitalize text-center text-light">
                DESIGNED BY Zia Uddin Ahmed.Email:zia.ete10
                @gmail.com
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
    <script>
        $('#owl-carousel1').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 2,
                    nav: false,
                    loop: true
                }
            }
        });
        $('#owl-carousel2').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 4,
                    nav: false,
                    loop: true
                }
            }
        })
    </script>
</body>

</html>
