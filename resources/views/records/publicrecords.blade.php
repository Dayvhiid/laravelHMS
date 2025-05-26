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
    {{-- <form action="{{route('records.search', ['users' => $users])}}" type="get"> --}}
        {{-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="query"> --}}
        {{-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> --}}
        {{-- <form action="{{ route('update.patient', $user->id) }}" method="POST"> --}}
            @csrf
            @method('PUT') <!-- Tell Laravel this is a PUT request -->
        <table class="table">
            <thead class="thead-dark">
              <tr>
               
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Full Name</th>
                <th scope="col">P.I.D</th>
                <th scope="col">Gender</th>
                <th scope="col">Phone</th>
                <th scope="col">Street</th>
                <th scope="col">Occupation</th>
                <th scope="col">Age</th>
                 <th scope="col">Date</th>
              </tr>
            </thead>
               <tbody>
           @foreach($users as $user)
            <form action="{{ route('users.update', $user->id) }}" method="POST">
              @csrf
              @method('PUT') {{-- For RESTful update --}}
           {{-- <tbody> --}}
            <tr>
              <td><input type="text" class="form-control" name="first_name" value="{{$user->first_name}}"></td>
              <td><input type="text" class="form-control" name="last_name" value="{{$user->last_name}}"></td>
               <td><input type="text" class="form-control" name="fullname" value="{{$user->fullname}}"></td> 
              <td><input type="text" class="form-control" name="patient_id" value="{{$user->patient_id}}"></td>
              <td><input type="text" class="form-control" name="gender" value="{{$user->gender}}"></td>
              <td><input type="text" class="form-control" name="phone" value="{{$user->phone}}"></td>
              <td><input type="text" class="form-control" name="street" value="{{$user->street}}"></td>
              <td><input type="text" class="form-control" name="occupation" value="{{$user->occupation}}"></td>
              @php
    $age = $user->date;
    $isTwoDigitNumber = is_numeric($age) && strlen(trim($age)) == 2;
@endphp
              <td><input type="text"  name="age"  value="{{ $isTwoDigitNumber ? $age : number_format(\Carbon\Carbon::parse($age)->diffInYears(\Carbon\Carbon::now()), 0) }}"></td>
              {{-- <td><input type="text" class="form-control" name="age" value="{{ number_format(Carbon\Carbon::parse($user->date)->floor()->diffInYears(Carbon\Carbon::now()), 0) }}  "></td> --}}
              <td><input type="text" class="form-control" name="datee" value="{{$user->datee}}"></td>
              <td><button type="submit" class="btn btn-success">Update</button></td>

            </tr>
           @endforeach
            </tbody>
          </table>              
    </form>
</body>
</html>