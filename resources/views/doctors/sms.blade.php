<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h2>Send Message</h2>
        {{-- <form method="get" action="{{route('doctor.sms', ['sms' => $sms])}}">
             <div>
                <label>Reciever Phone Number:</label>
                <input type="text" name="phone" value="{{$sms->phone_number}}">
             </div>
             <div>
                <label>Message:</label>
                <input type="text" name="message">
             </div>
             <input type="submit" value="SEND SMS">
        </form> --}}
        <form method="get" action="{{route('NaijaSMS')}}">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="phone" id="floatingInput" placeholder="name@example.com" value="{{$sms->phone_number}}" readonly>
                <label for="floatingInput"></label>
              </div>
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingPassword" name="message" placeholder="Enter User Message">
                <label for="floatingPassword">Enter Message</label>
              </div>
              <button class="btn btn-outline-secondary" name="submit" type="submit" id="inputGroupFileAddon04">SEND SMS</button>
              {{-- @php      
              $email = $_GET['phone'];    
                if(isset($_GET['submit'])){
                    echo $email
                }
                
              @endphp --}}
        </form>
    </div>
</body>
</html>