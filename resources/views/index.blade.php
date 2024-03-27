<style>
    * {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
}

#banner {
    background: linear-gradient(rgba(0, 0, 0, 0.5), #009688), url(./images/alessandro-bianchi-_kdTyfnUFAc-unsplash.jpg);
    background-size: cover;
    background-position: center;
    height: 100vh;
}

.logo {
    width: 140px;
    position: absolute;
    top: 4%;
    left: 5%;
}

.banner-text {
    text-align: center;
    color: white;
    padding-top: 190px;
}

.banner-text h1 {
    font-family: 'Kaushan Script', cursive;
    font-size: 100px;
}

.banner-text h1 span{
    font-family: 'Kaushan Script', cursive;
    color:#009688 ;
}

.banner-text p {
    font-size: 20px;
    font-style: italic;
}

.banner-btn {
    margin: 70px auto 0;
}

.banner-btn a {
    width: 150px;
    text-decoration: none;
    display: inline-block;
    margin: 0 10px;
    padding: 12px 0;
    color: #fff;
    border: .5px solid #fff;
    position: relative;
    z-index: 1;
    transition: color 0.5s;
}

.banner-btn a span {
    width: 0%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background-color: #fff;
    z-index: -1;
    transition: 0.5s;
}

.banner-btn a:hover span {
    width: 100%;
}

.banner-btn a:hover {
    color: black;
}

#sideNav {
    width: 250px;
    height: 100vh;
    position: fixed;
    right: -250px;
    top: 0;
    background: #009688;
    z-index: 2;
    transition: 0.5s;
}

nav ul li {
    list-style: none;
    margin: 50px 20px;
}

nav ul li a {
    text-decoration: none;
    color: #fff;
}

#menuBtn {
    width: 50px;
    height: 50px;
    background: #009688;
    text-align: center;
    position: fixed;
    right: 30px;
    top: 20px;
    border-radius: 3px;
    z-index: 3;
    cursor: pointer;
}

#menuBtn img {
    width: 20px;
    margin-top: 15px;
}

#feature {
    font-family: 'Poppins', sans-serif;
    width: 100%;
    padding: 70px 0;
}

.title-text {
    text-align: center;
    padding-bottom: 70px;
}

.title-text p {
    margin: auto;
    font-size: 20px;
    color: #009688;
    font-weight: bold;
    position: relative;
    z-index: 1;
    display: inline-block;
}

.title-text p::after {
    content: '';
    width: 50px;
    height: 35px;
    background: linear-gradient(#019587, #fff);
    position: absolute;
    top: -20px;
    left: 0;
    z-index: -1;
    transform: rotate(10deg);
    border-top-left-radius: 35px;
    border-bottom-right-radius: 35px;
}

.title-text h1 {
    font-size: 40px;
}

.feature-box {
    width: 80%;
    margin: auto;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    text-align: center;
}

.features {
    flex-basis: 50%;
    height: 25vh;
}

.features-img {
    flex-basis: 50%;
    margin: auto;
}

.features-img img {
    width: 70%;
}

.features h1 {
    text-align: left;
    margin-bottom: 10px;
    font-weight: 100;
    color: #009688;
}

.features-desc {
    display: flex;
    align-items: center;
    margin-bottom: 40px;
}

.feature-text p {
    padding: 0 20px;
    text-align: initial;
}


/* service */

#service {
    width: 100%;
    padding: 70px 0;
    background: #efefef;
}

.service-box {
    width: 80%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin: auto;
}

.single-service {
    flex-basis: 48%;
    text-align: center;
    border-radius: 7px;
    margin-bottom: 20px;
    color: #fff;
    position: relative;
}

.single-service img {
    width: 100%;
    border-radius: 7px;
}

.overlay {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    border-radius: 7px;
    cursor: pointer;
    background: linear-gradient(rgba(0, 0, 0, 0.5), #009688);
    opacity: 0;
    transition: 1s;
}

.single-service:hover .overlay {
    opacity: 1;
}

.service-desc {
    width: 80%;
    position: absolute;
    bottom: 50%;
    left: 50%;
    transform: translateX(-50%);
}

.service-desc p {
    font-size: 14px;
}

hr {
    background: #fff;
    height: 2px;
    border: 0;
    margin: 15px auto;
    width: 60%;
}


/* footer */

#footer {
    padding: 100px 0 25px;
    background: #efefef;
}

.footer-row {
    width: 80%;
    margin: 0 auto;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}

.footer-left {
    display: none;
}

.footer-right {
    flex-basis: 80%;
    padding: 10px;
    margin-bottom: 20px;
    text-align: center;
    line-height: 60px;
}

.footer-right a {
    text-decoration: none;
    color: black;
}

.footer-right {}

.footer-row h1 {
    margin: 10px 0;
}

.footer-row p {
    line-height: 35px;
}

@media screen and (max-width: 770px) {
    .banner-text h1 {
        font-size: 44px;
    }
    .banner-btn a {
        display: block;
        margin: 20px auto;
    }
    .title-text h1 {
        font-size: 30px;
    }
    .features {
        flex-basis: 100%;
    }
    .features h1 {
        text-align: center;
    }
    .features-img {
        flex-basis: 100%;
    }
    .features-img img {
        width: 100%;
    }
    .single-service {
        flex-basis: 100%;
        margin-bottom: 30px;
    }
    .service-desc p {
        font-size: 12px;
    }
    hr {
        margin: 5px auto;
    }
}
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Energipay</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;1,100&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="index.css"> --}}
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
</head>

<body>
    <section id="banner">
        <img src="sophialogo.png" height="125px" class="logo">
        <div class="banner-text">
            <h1>Ola <span>Oluwa</span></h1>
            <p>Your eye is just a pair, no spare, take care.</p>
            <div class="banner-btn">
                <a  href="{{ route('login') }}"><span></span>Login</a>
                <a href="{{ route('register') }}"><span></span> Register</a>
            </div>
        </div>
    </section>
    {{-- @if (Route::has('login'))
    <nav class="-mx-3 flex flex-1 justify-end">
        @auth
            <a
                href="{{ url('/dashboard') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
            >
                Dashboard
            </a>
        @else
            <a
                href="{{ route('login') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
            >
                Log in
            </a>

            @if (Route::has('register'))
                <a
                    href="{{ route('register') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                >
                    Register
                </a>
            @endif
        @endauth
    </nav>
@endif --}}
    <div id="sideNav">
        <nav>
            <ul>
                <li><a href="{{route('dashboard')}}">Home</a></li>
                <li><a href="video.html">Video</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="#footer">Contact Us</a></li>
            </ul>
        </nav>
    </div>
    <div id="menuBtn" onclick="toggle()">
        <img src="menu.png" id="menu">
    </div>
</body>
<!-- feature -->

<section id="feature">
    <div class="title-text">
        <p>FEATURES</p>
        <h1>Why choose us</h1>
    </div>
    <div class="feature-box">
        <div class="features">
            <h1>Quality Products</h1>
            <div class="features-desc">
                <div class="feature-icon">
                    <i class="fa fa-star"></i>
                </div>
                <div class="feature-icon">
                    <p>Exercitation nulla fugiat velit ad ea consequat irure.</p>
                </div>
            </div>
            <h1>Best Prices</h1>
            <div class="features-desc">
                <div class="feature-icon">
                    <i class="fa-solid fa-shield"></i>
                </div>
                <div class="feature-icon">
                    <p>Exercitation nulla fugiat velit ad ea consequat irure.</p>
                </div>
            </div>
            <!-- <h1>Quick Delivery</h1>
            <div class="features-desc">
                <div class="feature-icon">
                    <i class="fa fa-shield"></i>
                </div>
                <div class="feature-icon">
                    <p>Exercitation nulla fugiat velit ad ea consequat irure.</p>
                </div>
            </div> -->
        </div>
        <div class="features-img">
            <img src="pic3.png">
        </div>
    </div>

</section>
<!-- service -->
<section id="service">
    <div class="title-text">
        <p>SERVICES</p>
        <h1>We Provide the best services</h1>
    </div>
    <div class="service-box">
        <div class="single-service">
            <img src="display1.jpg">
            <div class="overlay">
                <div class="service-desc">
                    <h3>Hair Styling</h3>
                    <hr>
                    <p class="sd">Reprehenderit culpa in qui ea pariatur proident.</p>
                </div>
            </div>
        </div>
        <div class="single-service">
            <img src="display2.jpg">
            <div class="overlay">
                <div class="service-desc">
                    <h3>Hair Styling</h3>
                    <hr>
                    <p>Reprehenderit culpa in qui ea pariatur proident.</p>
                </div>
            </div>
        </div>
        <div class="single-service">
            <img src="display3.jpg">
            <div class="overlay">
                <div class="service-desc">
                    <h3>Hair Styling</h3>
                    <hr>
                    <p>Reprehenderit culpa in qui ea pariatur proident.</p>
                </div>
            </div>
        </div>
        <div class="single-service">
            <img src="display4.jpg">
            <div class="overlay">
                <div class="service-desc">
                    <h3>Hair Styling</h3>
                    <hr>
                    <p>Reprehenderit culpa in qui ea pariatur proident.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- footer -->

<script>
    var menuBtn = document.getElementById("menuBtn")
    var sideNav = document.getElementById("sideNav")
    var menu = document.getElementById("menu")
    sideNav.style.right = "-250px"

    function toggle() {
        if (sideNav.style.right == "-250px") {
            sideNav.style.right = "0";
            menu.src = "close.png";
        } else {
            sideNav.style.right = "-250px";
            menu.src = "menu.png";
        }
    }
</script>

</html>