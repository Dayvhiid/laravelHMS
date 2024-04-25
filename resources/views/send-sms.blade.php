<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send Sms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card">
            @if(Session::has('success'))
               <h6 class="text-success"> {{ Session::get('success') }}</h6>
            @endif
            @if(Session::has('fail'))
            <h6 class="text-success"> {{ Session::get('fail') }}</h6> 
         @endif
            <div class="card-header">Send Message</div>
            <div class="card-body">
                <form action="{{route('sendSMS', ['sms' => $sms])}}" method="get">
                    @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" name="number" id="exampleFormControlInput1" placeholder="Enter Recipient Number" value="{{$sms->phone_number}}">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1"  class="form-label" >Your message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3"></textarea>
                  </div>

                  <button type="submit" class="btn btn-primary">Send</button>
                </form>
               </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>