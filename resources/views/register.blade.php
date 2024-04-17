<style>
    .signin{
      color: black;
    }
    #signup{
      margin-top: 2%;
    }
  </style>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <title>SignUp</title>
  </head>
  <body class="bg-light">
      <div class="mt-5 .rounded">
          <form class="w-50 mx-auto border rounded-lg p-5 " method="POST" action=" {{route('register.data')}} ">
            @csrf
            @method('POST')
              <div class="form-group">
                <label for="exampleInputEmail1">Full Name</label>
                <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter name">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1"> Confirm Password</label>
                  <input type="password" class="form-control" name="confirm_password" placeholder="Password">
                </div>
             <div class="d-flex">
              <button type="submit" id="signup" class="btn btn-primary" >Sign Up</button>
             </div>
             <div class="signin">
              <a href="{{ route('register.signin') }}">Sign In</li>   
            </div>
            </form>
            
      </div>
  </body>
  </html>