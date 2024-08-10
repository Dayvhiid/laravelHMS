<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Ola-Oluwa Eye Clinic
    </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/landingpage.css">
</head>

<body>
    <!-- MOBILE NAV -->
    <div class="mb-nav">
        <div class="mb-move-item"></div>
        <div class="mb-nav-item active">
            <a href="#home">
                <i class="bx bxs-home"></i>
            </a>
        </div>
        <div class="mb-nav-item">
            <a href="#about">
                <i class='bx bxs-wink-smile'></i>
            </a>
        </div>
        <div class="mb-nav-item">
            <a href="#food-menu-section">
                <i class='bx bxs-food-menu'></i>
            </a>
        </div>
        <div class="mb-nav-item">
            <a href="#testimonial">
                <i class='bx bxs-comment-detail'></i>
            </a>
        </div>
    </div>
    <!-- END MOBILE NAV -->
    <!-- BACK TO TOP BTN -->
    <a href="#home" class="back-to-top">
        <i class="bx bxs-to-top"></i>
    </a>
    <!-- END BACK TO TOP BTN -->
    <!-- TOP NAVIGATION -->
    <div class="nav">
        <div class="menu-wrap">
            <a href="#home">
                <div class="logo">       
                    {{-- <img src="icons/logo.png" height="200px" width="200px" class="logos"> --}}
                    <h1 class="logo-text"><span class="primary-color-logo">Ola-oluwa</span> <span class="primary-color-logo2">Eye Clinic</span></h1>
                </div>
            </a>
            <div class="menu h-xs">
                <a href="#home">
                    <div class="menu-item active">
                        Home
                    </div>
                </a>
                <a href="#about">
                    <div class="menu-item">
                        About
                    </div>
                </a>
                <a href="#food-menu-section">
                    <div class="menu-item">
                        Staff
                    </div>
                </a>
                <a href="#testimonial">
                    <div class="menu-item">
                        Testimonials
                    </div>
                </a>
            </div>
            {{-- box icon --}}
            <div class="right-menu" onclick="toggle()">
                {{-- <div class="cart-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path></svg>
                </div> --}}
            </div>
            <div id="sideNav">
                <nav>
                    <div id="menuBtn" onclick="toggle()">
                        <img src="/icons/menu.png" id="menu">
                    </div>
                    <ul>
                        <li><a href="{{route('NewBooking')}}">Book Appointment</a></li>
                        <li><a href="{{route('NewSignUp')}}">Login/signUp (for staff only)</a></li>
                        <li><a href="{{route('admin1.index')}}">Admin 1.</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- END TOP NAVIGATION -->
    <!-- SECTION HOME -->
    <section id="home" class="fullheight align-items-center bg-img bg-img-fixed"
        style="background-image: url(icons/display3.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-6 col-xs-12">
                    <div class="slogan">
                        <h1 class="left-to-right play-on-scroll">
                             Ola - Oluwa Eye clinic
                        </h1>
                        <p class="left-to-right play-on-scroll delay-2" style="color: var(--primary-color)">
                            At Ola-oluwa Eye clinic, we help you see the world clearly. Our team of experienced ophthalmologists and optometrists are dedicated to providing comprehensive eye care for all ages. We offer advanced diagnostic tools and personalized treatment plans to ensure optimal vision health.
                        </p>
                        <div class="left-to-right play-on-scroll delay-4">
                           <a href="{{route('NewBooking')}}">
                            <button>
                                Book an appointment
                            </button>
                           </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION HOME -->
    <!-- SECION ABOUT -->
    <section class="about fullheight align-items-center" id="about">
        <div class="container">
            <div class="row">
                <div class="col-7 h-xs">
                    <img src="icons/display.jpg" alt=""
                        class="fullwidth left-to-right play-on-scroll">
                </div>
                <div class="col-5 col-xs-12 align-items-center">
                    <div class="about-slogan right-to-left play-on-scroll">
                        <h3>
                            <span class="primary-color">We</span> create <span class="primary-color">Wonderfull</span>
                            memories for <span class="primary-color">you</span>
                        </h3>
                        <p>
                            Ola-Oluwa Eye Clinic is dedicated to providing the highest quality comprehensive eye care for patients of all ages. Our team of experienced and board-certified ophthalmologists, optometrists, and technicians combine expertise with a commitment to compassionate care.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECION ABOUT -->
    <!-- FOOD MENU SECTION -->
    <section class="align-items-center bg-img bg-img-fixed" id="food-menu-section"
        style="background-image: url(assets/katherine-chase-4MMK78S7eyk-unsplas.jpg);">
        <div class="container">
            <div class="food-menu">
                <h1>
                   Meet <span class="primary-color">our</span> staff.
                </h1>
                <p>
                    At Ola-Oluwa Eye Clinic, we believe in fostering a collaborative environment where experienced professionals work together to provide exceptional care for your vision. Our dedicated team includes:
                </p>
                <div class="food-category">
                    <div class="zoom play-on-scroll">
                        <button class="active" data-food-type="all">
                            All food
                        </button>
                    </div>
                    <div class="zoom play-on-scroll delay-2">
                        <button data-food-type="salad">
                            Salad
                        </button>
                    </div>
                    <div class="zoom play-on-scroll delay-4">
                        <button data-food-type="lorem">
                            Lorem
                        </button>
                    </div>
                    <div class="zoom play-on-scroll delay-6">
                        <button data-food-type="ipsum">
                            Ipsum
                        </button>
                    </div>
                    <div class="zoom play-on-scroll delay-8">
                        <button data-food-type="dolor">
                            Dolor
                        </button>
                    </div>
                </div>

                <div class="food-item-wrap all">
                    <div class="food-item salad-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url(icons/display1.jpg);"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Dr Braimoh
                                    </h3>
                                    <span>
                                        C.E.O
                                    </span>
                                </div>
                                {{-- <div class="cart-btn">
                                    <i class="bx bx-cart-alt"></i>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                    <div class="food-item lorem-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url('icons/display2.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Dr Oluchi Izuwa
                                    </h3>
                                    <span>
                                        Optometrist
                                    </span>
                                </div>
                                {{-- <div class="cart-btn">
                                    <i class='bx bx-cart-alt'></i>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                    <div class="food-item ipsum-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url('icons/display4.jpg');">
                                </div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Dr C. Nwachukwu 
                                    </h3>
                                    <span>
                                        Optometrist
                                    </span>
                                </div>
                                {{-- <div class="cart-btn">
                                    <i class='bx bx-cart-alt'></i>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                    <div class="food-item lorem-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url('icons/display5.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Mr Dayo O Ghazal
                                    </h3>
                                    <span>
                                        Clinic Manager
                                    </span>
                                </div>
                             
                            </div>
                        </div>
                    </div>

                    <div class="food-item dolor-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url('icons/display6.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Miss O. Fakayode 
                                    </h3>
                                    <span>
                                        Optician
                                    </span>
                                </div>
                    
                            </div>
                        </div>
                    </div>

                    <div class="food-item salad-type" >
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url('icons/display7.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Miss  A. Taleeb 
                                    </h3>
                                    <span>
                                        Receptionist
                                    </span>
                                </div>
                               
                            </div>
                        </div>
                    </div>

                    {{-- <div class="food-item lorem-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url('assets/sina-piryae-bBzjWthTqb8-unsplash.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Lorem ipsum
                                    </h3>
                                    <span>
                                        120$
                                    </span>
                                </div>
                                <div class="cart-btn">
                                    <i class='bx bx-cart-alt'></i>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="food-item dolor-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url('assets/carly-jayne-Lv174o7fn7Y-unsplash.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Lorem ipsum
                                    </h3>
                                    <span>
                                        120$
                                    </span>
                                </div>
                                <div class="cart-btn">
                                    <i class='bx bx-cart-alt'></i>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- END FOOD MENU SECTION -->
    <!-- TESTIMONIAL SECTION -->
    <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-4 col-xs-12">
                    <div class="review-wrap zoom play-on-scroll delay-2">
                        <div class="review-content">
                            <p>
                                "I've been going to Ola-Oluwa Eye Clinic for years, and they've always provided the best care. Dr. Braimoh is incredibly knowledgeable and explains everything in a way I can understand. The staff is friendly and helpful, and I never feel rushed during my appointments. I highly recommend them!"
                            </p>
                            <div class="review-img bg-img"
                                style="background-image: url(assets/testimonial2.jpg);">
                            </div>
                        </div>
                        <div class="review-info">
                            <h3>
                                Mr Toluwade Olanikpekun
                            </h3>
                            <div class="rating">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-xs-12">
                    <div class="zoom play-on-scroll">
                        <div class="review-wrap active">
                            <div class="review-content">
                                <p>
                                    "My vision had been getting progressively worse, and I was worried about what was going on. When I came to Ola-oluwa Eye Clinic, they were very thorough in their examination and diagnosed me with cataracts. Dr. Braimoh explained the treatment options clearly and answered all my questions patiently. The surgery went smoothly, and I can't believe how much better I can see now! I'm so grateful for their expertise and care." 
                                </p>
                                <div class="review-img bg-img"
                                    style="background-image: url(assets/testimonial4.jpg);">
                                </div>
                            </div>
                            <div class="review-info">
                                <h3>
                                    Mrs Akande Boluwatife
                                </h3>
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-xs-12">
                    <div class="review-wrap zoom play-on-scroll delay-4">
                        <div class="review-content">
                            <p>
                                My kids can be nervous at the doctor, but the staff at Ola-oluwa Eye Clinic made their eye exams fun and stress-free. They used kid-friendly language and explained everything in a way my children could understand. They also have a great selection of fun frames for kids to choose from. We'll definitely be back!
                            </p>
                            <div class="review-img bg-img"
                                style="background-image: url(assets/testimonial3.jpg);">
                            </div>
                        </div>
                        <div class="review-info">
                            <h3>
                                Mr. Olamilekan Gabriel
                            </h3>
                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END TESTIMONIAL SECTION -->
    <!-- FOOTER SECTION -->
    <section class="footer bg-img"  style="background-color:#000223 ">
        <div class="container">
            <div class="row">
                <div class="col-6 col-xs-12">
                    <h1>
                        Olaoluwa Eye clinic
                    </h1>
                    <br>
                    <p>You can follow us up on the following channels</p>
                    <br>
                    <p>Email: olaoluwa</p>
                    <p>Phone: +00 123 456 789</p>
                    <p>Website: www.olaoluwaeyeclinic.com</p>
                </div>
                {{-- <div class="col-2 col-xs-12">
                    <h1>
                        About us
                    </h1>
                    <br>
                    <p>
                        <a href="#">
                            Chefs
                        </a>
                    </p>
                    <p>
                        <a href="#">
                            Menu
                        </a>
                    </p>
                    <p>
                        <a href="#">
                            Testimonials
                        </a>
                    </p>
                    <p>
                        <a href="#">
                            Lorem ipsum
                        </a>
                    </p>
                </div> --}}
                <div class="col-4 col-xs-12">
                    <h1>
                        Book an appointment with us
                    </h1>
                    <br>
                    <p>Book an appointment with us now at any convenient date and time and our doctors will get back to you in a matter of minutes</p>
                    {{-- <div class="input-group">
                        <input type="text" placeholder="Enter your email"> --}}
                        {{-- <button class="appButton" >
                            <a href="{{route('booking')}}"></a>
                            Book An Appointment
                        </button> --}}
                        <a href="{{route('NewBooking')}}">
                            <button class="appButton" >
                                Book An Appointment
                            </button>
                        </a>
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- END FOOTER SECTION -->

    <script src="assets/index.js"></script>
</body>

</html>