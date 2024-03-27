<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css"> --}}
    <link rel="stylesheet" href="https://classless.de/classless.css">
</head>
<body>
<title>SignUp</title>
<div class="dropdown-menu">
    <form class="px-4 py-3" method="POST" action="{{ route('doctors.check')}}">   
      @csrf
      @method('POST')   
      <div class="form-group">
        <label for="exampleDropdownFormEmail1">Name</label>
        <input type="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="Enter your name" name="name">
      </div>
      <div class="form-group">
        <label for="exampleDropdownFormPassword1">Password</label>
        <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password" name="password">
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="dropdownCheck">
        <label class="form-check-label" for="dropdownCheck">
          Remember me
        </label>
      </div>
      <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
  </div>
</body>
</html>