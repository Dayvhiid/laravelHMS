<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script> --}}
    <link rel="stylesheet" href="css/newbooking.css"/>
    <title>Book an appointment</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="{{route('booking.store')}}" method="POST">
            @csrf
            @method('POST')
            <h2 class="title">Book Now</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="name" name="name" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="date" placeholder="date" name="date" required/>
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="time" placeholder="time" name="time" required/>
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="phone" placeholder="phone Number" name="phone" required/>
            </div>
            <textarea id="my-text-area" rows="4" placeholder="Enter your Complaints" name="complaints"></textarea>
            <input type="submit" value="Book Now" class="btn solid" />
            {{-- <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div> --}}
          </form>
          {{-- <form action="#" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" class="btn" value="Sign up" /> --}}
            {{-- <p class="social-text">Or Sign up with social platforms</p> --}}
            {{-- <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div> --}}
          {{-- </form> --}}
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Book an appointment with us</h3>
            <p>
              We promise to get back to you in a matter of minutes
            </p>
            {{-- <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button> --}}
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script>
        const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");



sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});
    </script>
  </body>
</html>