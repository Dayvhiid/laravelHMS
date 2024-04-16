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
    <form action="{{route('records.search', ['users' => $users])}}" type="get">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="query">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        <table class="table">
            <thead class="thead-dark">
              <tr>
               
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">P.I.D</th>
                <th scope="col">Gender</th>
                <th scope="col">Phone</th>
                <th scope="col">Street</th>
                <th scope="col">Occupation</th>
                <th scope="col">Age</th>
              </tr>
            </thead>
           @foreach($users as $user)
           <tbody>
            <tr>
              <td><input type="text" class="form-control" name="name" value="{{$user->first_name}}"></td>
              <td><input type="text" class="form-control" name="name" value="{{$user->last_name}}"></td>
              <td><input type="text" class="form-control" name="name" value="{{$user->patient_id}}"></td>
              <td><input type="text" class="form-control" name="name" value="{{$user->gender}}"></td>
              <td><input type="text" class="form-control" name="name" value="{{$user->phone}}"></td>
              <td><input type="text" class="form-control" name="name" value="{{$user->street}}"></td>
              <td><input type="text" class="form-control" name="name" value="{{$user->occupation}}"></td>
              <td><input type="text" class="form-control" name="name" value="{{ number_format(Carbon\Carbon::parse($user->date)->floor()->diffInYears(Carbon\Carbon::now()), 0) }}"></td>

            </tr>
          </tbody>
           @endforeach
          </table>              
    </form>
</body>
</html>