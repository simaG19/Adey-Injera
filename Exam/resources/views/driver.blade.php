@section('content')
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adey Injera</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="icon" href="images/Adey Injera Logo PNG.jpg">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- wow js -->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <!-- owl crouse css file  -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/fakeLoader.min.css">
    <!-- scroling aos.css -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="wow fadeInDown" data-wow-duration="4s">

    <div id="menu-bar" class="fas fa-bars" style="cursor: pointer; "></div>

    <a href="#" class="logo" style="display: inline-block; margin-right: auto;"><img src="images/Adey Injera Logo PNG.png" alt="logo" style="width:60px; height:60px;"></a>

    <nav class="navbar" style="display: flex; justify-content: space-between; align-items: center;">
        <div class="nav-links" style="display: flex; gap: 20px; margin-right: auto;">
            @auth
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            @endauth
        </div>
    </nav>
        

</header>


<!-- header section ends -->



<!-- home section starts  -->

<section class="home" id="home">

    <div class="content wow fadeInUp" data-wow-duration="4s">
        <h3>Bright your future with <span>Enjera</span></h3>
        <p>Authentic taste of, <span>Ethiopia</span></p>
        <a href="{{ route('login') }}" class="btn" style="background-color: transparent; color: #fff; border: 2px solid #fff; padding: 10px 20px; text-decoration: none; font-size: 16px; border-radius: 5px; transition: background-color 0.3s ease;">discover more</a>
    </div>

</section>

<style>
   .home {
    position: relative;
    width: 100%;
    min-height: 100vh;
    background: url('images/bg1.jpeg') no-repeat center center/cover;
    display: flex;
    justify-content: center;
    align-items: center;
}

.home::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.8); /* Adjust the last value for darkness */
    z-index: 1; /* Ensure it's below the text but above the background */
}

.home > * {
    position: relative; /* Ensure child elements are above the overlay */
    z-index: 2; /* Make sure content is above the overlay */
}


    .content {
        position: relative;
        z-index: 1;
        text-align: center;
        color: #fff;
    }

    .content h3, .content p {
        margin: 0;
        padding: 10px 0;
    }

    .content a.btn {
        margin-top: 20px;
    }
</style>

<!-- home section ends -->


<!-- packages section starts  -->

<section class="packages" id="packages">

    <h1 class="heading wow fadeIn">
        packages
    </h1>
    
    <style>
        .heading {
            font-size: 38px;  /* Larger font size */
            font-weight: bold;  /* Bold for emphasis */
            color: #333;  /* Darker color for contrast */
            text-align: center;  /* Center the text */
            letter-spacing: 3px;  /* Add some spacing between letters */
            text-transform: uppercase;  /* Make all letters uppercase */
            margin-bottom: 30px;  /* Add space below the heading */
            position: relative;
            display: inline-block;
        }
    
        .heading::after {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: -10px;
            width: 60px;  /* Line below the heading */
            height: 3px;
            background-color: #ff6600;  /* Accent color */
        }
    
        
    </style>
    
<br/>
<br/>
    <h1 style="text-align: center;    font-size: 28px;  text-transform: uppercase; margin-bottom: 10px;">
        Export
    </h1>
    
  


    <div class="box-container owl-carousel first_carousel">
        @if($vehicles->count())
            @foreach($vehicles as $vehicle)
                @if($vehicle->license_plate == 'export') <!-- Check if license_plate is 'export' -->
                    <div class="box wow fadeInUp" data-wow-duration="2s">
                        <a href="images/injera5.jpg">
                            <img src="images/injera5.jpg" alt="image">
                        </a> 
                        <div class="content">
                            <h3>Type : {{ $vehicle->make }}</h3>
                            <h3>Amount : {{ $vehicle->model }}</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="price"><h3>Price: ${{ $vehicle->year }}</h3></div>
                            <a href="{{ route('vehicle.show', $vehicle->id) }}" class="btn">buy now</a>
                        </div>
                    </div>
                @endif
            @endforeach
        @else
            <p>No Injera packages found.</p>
        @endif
    </div>
    
    <!-- section item start  -->

    <br/>
    <br/>
    <br/>
    <br/>
        <h1 style="text-align: center;    font-size: 28px;  text-transform: uppercase; margin-bottom: 10px;">
            Domestic Market
        </h1>

        <div class="box-container owl-carousel first_carousel">
            @if($vehicles->count())
                @foreach($vehicles as $vehicle)
                    @if($vehicle->license_plate == 'local') <!-- Check if license_plate is 'local' -->
                        <div class="box wow fadeInUp" data-wow-duration="2s">
                            <a href="images/injera5.jpg">
                                <img src="images/injera5.jpg" alt="image">
                            </a> 
                            <div class="content">
                                <h3>Type : {{ $vehicle->make }}</h3>
                                <h3>ID : {{ $vehicle->id }}</h3>
                                <h3>Amount : {{ $vehicle->model }}</h3>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="price"><h3>Price: {{ $vehicle->year }} birr</h3></div>
                                <a href="{{ route('vehicle.show', $vehicle->id) }}" class="btn">buy now</a> <!-- Pass the vehicle ID here -->
                            </div>
                        </div>
                    @endif
                @endforeach
            @else
                <p>No Injera packages found.</p>
            @endif
        </div>
        
        
<!-- packages section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading wow fadeIn">
      services
    </h1>

    <div class="box-container">

        <div class="box wow fadeInUp" data-wow-duration="2s">
            <i class="fas fa-check-circle"></i>
            <h3>High quiality Enjera</h3>
            <p>We provide premium Enjera, crafted to meet high standards of quality and taste, ensuring an authentic Ethiopian culinary experience.</p>
        </div>
        <div class="box wow fadeInUp" data-wow-duration="2s">
            <i class="fas fa-boxes"></i>
            <h3>Large quantity</h3>
            <p>We offer large quantities of Enjera, perfect for events, restaurants, and retailers, ensuring everyone enjoys this beloved staple.</p>
        </div>
        <div class="box wow fadeInUp" data-wow-duration="2s">
            <i class="fas fa-truck"></i>
            <h3>Export</h3>
            <p>Our Export Enjera is meticulously prepared to meet international standards, bringing authentic Ethiopian flavors to customers worldwide.</p>
        </div>
        <div class="box wow fadeInUp" data-wow-duration="2s">
            <i class="fas fa-shipping-fast"></i>
            <h3>Delivery</h3>
            <p>Enjoy fast and reliable delivery of our fresh Enjera right to your doorstep, making it easy to savor authentic Ethiopian cuisine anytime.</p>
        </div>
        <div class="box wow fadeInUp" data-wow-duration="2s">
            <i class="fas fa-credit-card"></i>
            <h3>Online Payment</h3>
            <p>Experience hassle-free shopping with our secure online payment options, ensuring your transactions are quick and protected.</p>
        </div>
        <div class="box wow fadeInUp" data-wow-duration="2s">
            <i class="fas fa-headset"></i>
            <h3>Call agent guidance</h3>
            <p>Our friendly call agents are ready to assist you with questions, orders, or delivery options, ensuring you receive the support you need.</p>
        </div>

    </div>

</section>

<!-- services section ends -->

<section class="contact" id="contact">
    
    <h1 class="heading">
       contact
    </h1>

    <div class="row">

        <div class="image">
            <img src="images/injera2.jpg" alt="">
        </div>

        <form action="">
            <div class="inputBox">
                <input type="text" placeholder="name">
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="number">
                <input type="text" placeholder="subject">
            </div>
            <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>
            <input type="submit" class="btn btn-submit" value="send message">
        </form>

    </div>
    
</section>

<!-- contact section ends -->


<!-- footer section  -->

<section class="footer" style="width: 100%;">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quas magni pariatur est accusantium voluptas enim nemo facilis sit debitis.</p>
        </div>
        <!-- <div class="box">
            <h3>branch locations</h3>
            <a href="#">india</a>
            <a href="#">USA</a>
            <a href="#">japan</a>
            <a href="#">france</a>
        </div> -->
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">book</a>
            <a href="#">packages</a>
           
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="https://web.facebook.com/mamun3399">facebook</a>
            <a href="#">instagram</a>
            <a href="https://twitter.com/tmnewsbd24">twitter</a>
            <a href="https://www.linkedin.com/in/md-mamun-hossain-239451193/">linkedin</a>
        </div>

    </div>

    <h1 class="credit"> created by <span> Simon </span> | all rights reserved! </h1>

</section>
<!-- top to bottom scrolling  -->
<div id="totopscroller"></div>
<!-- preloader  -->
<div class="fakeLoader"></div>
















<!-- jaquery cdn  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- swiper-bundle.min.js -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- wow js -->
<script src="js/wow.min.js"></script>
<!-- lightbox.js -->
<script src="js/lightbox.js"></script>
<!-- owl.carousel.min.js -->
<script src="js/owl.carousel.min.js"></script>
<!-- top to bottom  -->
<script src="js/jquery.totop.js"></script>
<script src="js/fakeLoader.min.js"></script>
<!-- scroling aos js  -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<script>
    // owl carousel
    $('.first_carousel').owlCarousel({
    autoplay:true,
    margin:10,
    smartSpeed: 1000,
    nav:true,
    responsiveClass:true,

    responsive:{
        0:{
            items:1,
            nav:true
           
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:3,
            nav:false,
            loop:true,
          
        }
    }
})

// secound carousel 
 // owl carousel
 $('.secound_carousel').owlCarousel({
    autoplay:true,
    rtl:true,
    nav:true,
    margin:10,
    responsiveClass:true,
    smartSpeed: 1000,
    responsive:{
        0:{
            items:1,
            nav:true
           
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:3,
            nav:true,
            loop:true,
          
        }
    }
})

// top ot bottom 


// wow js 
new WOW().init();

// preloader
$.fakeLoader();

// aos scrolling  
AOS.init();
  //  water Remote Playback
    $('.water').ripples({

      // Image Url
      imageUrl: null,

      // The width and height of the WebGL texture to render to. 
      // The larger this value, the smoother the rendering and the slower the ripples will propagate.
      resolution: 256,

      // The size (in pixels) of the drop that results by clicking or moving the mouse over the canvas.
      dropRadius: 20,

      // Basically the amount of refraction caused by a ripple. 
      // 0 means there is no refraction.
      perturbance: 0.04,

      // Whether mouse clicks and mouse movement triggers the effect.
      interactive: true,

      // The crossOrigin attribute to use for the affected image. 
      crossOrigin: ''
    });
   
</script>

</body>
</html>