
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Xgenious</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-onix-digital.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animated.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">
<!--

TemplateMo 565 Onix Digital

https://templatemo.com/tm-565-onix-digital

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
        <div id="app">
            <header class="header-area ">
        <div class="container">
        <div class="row">
            <div class="col-12  main-col">
            <nav class="main-nav">
                <!-- ***** Logo Start ***** -->
                <a href="index.html" class="logo">
                <img src="{{asset('assets/images/xgen.png')}}">
                </a>
                <!-- ***** Logo End ***** -->
                <!-- ***** Menu Start ***** -->
                <ul class="nav navbarList">
                <li class="navList"><a href="#top" class="active">Home</a></li>
                <li class="navList"><a href="#services">About</a></li>
                <li class="navList"><a href="#about">Service List</a></li>
                <li class="navList"><a href="#portfolio">Dashboard</a></li>
                <li class="navList"><a href="#video">Multistep Form</a></li> 
                <li class="navList"><a href="#contact">Blog </a></li> 
                <li class="navList"><a href="#blog">Contact </a></li> 
                
                </ul>        
                
                <!-- ***** Menu End ***** -->
            </nav>
            <nav class="navbar navbar-expand-lg navbar-light bg-light mt-2">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item ni-list">
                        <i class="fal fa-shopping-cart fa-2x"></i>  
                    </li>
                    <li class="nav-item ni-list">
                    <i class="far fa-bell fa-2x"></i>
                    <a href="#" class="notification">
                        
                        
                        <span class='badge'>3</span>
                        </a>
                    </li>
                    <li class="nav-item ni-list ni-list-img">
                    <img src="{{asset('assets/images/author-nav.jpg')}}" alt="">
                    </li>
                    </ul>
                </div>
                </nav>
            </div>
        </div>
                </div>
            </header>
            <!-- ***** Header Area End ***** -->

            <div class="main-banner" id="top">
                <div class="container" id='content'>
                    <router-view></router-view>
                </div>
            </div>
            <!-- Footer -->
            <footer style='margin-top:50px;'>
                <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <img class='footerImg' src="assets/images/xgen.png" alt="">
                        <span class='footerDsc'>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document.Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document. </span>
                    </div>
                    <div class="col-md-3">
                        <h6>Category</h6>
                        <ul>
                            <li><span class="arrow arrow-cat">></span><span class='footerCat'>Cleaning</span></li>
                            <li><span class="arrow arrow-cat">></span><span class='footerCat'>House Move</span></li>
                            <li><span class="arrow arrow-cat">></span><span class='footerCat'>Electric</span></li>
                            <li><span class="arrow arrow-cat">></span><span class='footerCat'>Painting</span></li>
                            <li><span class="arrow arrow-cat">></span><span class='footerCat'>House and Spa</span></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                    <h6>Store Info</h6>
                        <ul>
                            <li><span class="arrow arrow-cat"><i class="far fa-map-marker-alt"></i></span><span class='footerCat'>41/1 Hilton Mall, NY City</span></li>
                            <li><span class="arrow arrow-cat"><i class="fas fa-mobile-alt"></i></span><span class='footerCat'>+012-54971276</span></li>
                            <li><span class="arrow arrow-cat"><i class="far fa-envelope"></i></span><span class='footerCat'>help@gmail.com</span></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                    <h6>Get In Touch</h6>
                        <ul>
                            <li><span class='footerCat'>Sign up to our mailing list right now!</span></li>
                            <li><span class='footerCat'><input type="text" class='form-control' style='font-size:14px;' placeholder='Your Mail'></span><span class="arrow arrow-cat"><i class="far fa-paper-plane" style='background:#d15106;height:35px;width:30px;padding-top:9px;color:white;padding-left:6px;'></i></span></li>
                            <li><span class='footerCat' style='display:flex;padding-left:5px;font-size:25px'><i class="fab fa-facebook-f" id='faicon'></i><i class="fab fa-twitter-square" id='faicon'></i><i class="fab fa-instagram " id='faicon'></i></span></li>
                        </ul>
                    </div>

                </div>
                </div>
            </footer>
 
        </div>

  <!-- Scripts -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAe-7DKy3o9XtCNjgqg6Jw0CTtlaRB0-dU&callback=initMap&libraries=&v=weekly"
     async defer   ></script>  -->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script> 
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/js/owl-carousel.js')}}"></script>
  <script src="{{asset('assets/js/animation.js')}}"></script>
  <script src="{{asset('assets/js/imagesloaded.js')}}"></script>
  <script src="{{asset('assets/js/custom.js')}}"></script>
  <script src="{{asset('js/app.js')}}"></script>  
  <script src="https://js.stripe.com/v3"></script>           
  <script>
  // Acc
    $(document).on("click", ".naccs .menu div", function() {
      var numberIndex = $(this).index();

      if (!$(this).is("active")) {
          $(".naccs .menu div").removeClass("active");
          $(".naccs ul li").removeClass("active");

          $(this).addClass("active");
          $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

          var listItemHeight = $(".naccs ul")
            .find("li:eq(" + numberIndex + ")")
            .innerHeight();
          $(".naccs ul").height(listItemHeight + "px");
        }
    });
  </script>
</body>
</html>