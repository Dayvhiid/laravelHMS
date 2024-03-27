<style>
  .W-sidebar{
    height: 60vh;
  }
  ul li{
    margin-bottom: 10vh;
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
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Doctors</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="#">New Patients</a>
              <a class="nav-link" href="#">Record</a>
              <a class="nav-link" href="#">Invoice</a>
              <a class="nav-link" href="{{route('doctors.inventory')}}">Inventory</a>
            </div>
          </div>
        </div>
      </nav>
      {{-- side menu bar --}}
      <div class="d-flex flex-column h-screen">
        <div class="w-sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('doctors.vitals')}}">Vitals</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('doctors.treatment')}}">Treatment Plan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Medical Records</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">New Patients</a>
            </li>
          </ul>
        </div>
        </div>
      
      
</body>
</html>