<style>
    *{
    font-family: "Montserrat", sans-serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
  }
    .text {
  text-align: center;
  margin-top:15%;
}
button{
  margin-top: 5%;
  border-radius: 5px;
  background-color: green;
  padding: 5px 15px;
  border: 1px solid green;
  color: white;
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:ital,wght@0,300;0,400;0,500;0,600;1,500&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Notable&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    @if(session()->has('msg'))
     <div class="text">
        <h2> {{ session('msg') }}</h2>
        <div>
            <button onclick="goBack()">Go Back</button>
          </div>
        </div>
    @endif 
</body>
<script>
    function goBack() {
    window.history.go(-1);
  }
  </script>
</html>