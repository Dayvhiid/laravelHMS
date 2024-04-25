<style>
    body{
      overflow-x: hidden;
    }
.links{
    margin-right: 5%;
    font-family: "Montserrat", sans-serif;
    font-weight: 400;
    width: 45%;
}
.links ul li{
    display: inline-block;
    list-style-type: none;
    margin-right: 10%;
    padding-top: 3%;
}
.navbar{
    display: flex;
    justify-content: space-between
}
.statusbar{
    width: 20%;
    margin-left: 2%;
}
.statusbar div{
    margin-bottom: 10%;
}
.home{
    display: flex;
    justify-content: space-around;
    height: 5%px;
    width: 5%px;
}
.home p{
    font-weight: 400;
}
.homepng{
    margin-top: 6%;
}
.patients{
    display: flex;
    justify-content: space-around;
    height: 5%px;
    width: 5%px;
}
.patients p{
    font-weight: 400;
}
.patientpng{
    margin-top: 6%;
}

.app{
    display: flex;
    justify-content: space-around;
    height: 5%px;
    width: 5%px;
}
.app p{
    font-weight: 400;
}
.apppng{
    margin-top: 6%;
}
.billing{
    display: flex;
    justify-content: space-around;
    height: 5%px;
    width: 5%px;
}
.billing p{
    font-weight: 400;
}
.billingpng{
    margin-top: 6%;
}
.records{
    display: flex;
    justify-content: space-around;
    height: 5%px;
    width: 5%px;
}
.records p{
    font-weight: 400;
}
.recordspng{
    margin-top: 6%;
}
.patientBtn{
  padding: 15px 55px;
  background-color: green;
  border-radius: 10px;
  border: 1px solid green;
  position: absolute;
  bottom: 15%;
  color: #ccc;
  margin-left: 1%;
}
.main{
    display: flex;
    width: 100%;
}
.content{
    margin-left: auto;
    margin-right: auto;
    width: 80%;
}
.search{
    width: 130%;
    display: flex;
    margin-left: 20%;
}
.form1{
  
    width: 60%;
    margin-left: auto;
    margin-right: auto; 
}
.search_input{
    border: 1px solid grey;
    border-radius: 5px;
    padding: 10px 10px;
    width: 110%;
}
.searchBtn{
    background-color: green;
    border-radius: 5px;
    border: 1px solid green;
    width: 40%;
    color: white;
}
.textarea{
     display: grid;
     align-items: center;
}
.textarea label{
    padding-top: 2%;
  margin-left: 20%;
}
.dosage{
    width: 60%;
    margin-left: auto;
    margin-right: auto;
    border: 1px solid grey;
    border-radius: 5px;
    padding: 10px 10px;
    background-color: #dddddd;
  color: #666666;
  padding: 1em;
  border-radius: 10px;
  border: 2px solid transparent;
  outline: none;
  font-family: "Heebo", sans-serif;
  font-weight: 500;
  font-size: 16px;
  line-height: 1.4;
  height: 100px;
  transition: all 0.2s;
}
.remark{
    width: 60%;
    margin-left: auto;
    margin-right: auto; 
}
.duration{
    display: grid;
     align-items: center;  
}
.durationMenu{
    width: 60%;
    margin-left: auto;
    margin-right: auto;
}
.duration label{
    padding-top: 1%;
  margin-left: 20%;
}
.saveBtn{
    background-color: green;
    border-radius: 5px;
    border: 1px solid green;
    width: 20%;
    color: white;
}
.save{
    margin-left: 20%;
}
/* generated code */
body {
    font-family: sans-serif;
}

.container {
    width: 800px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ddd;
}

h1 {
    text-align: center;
}

.table-container {
    margin-bottom: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th,
td {
    padding: 8px;
    border: 1px solid #ddd;
}

th {
    text-align: left;
}

.blank {
    width: 20px;
}

.fas {
    font-size: 16px;
}

.comments,
.final-diagnosis {
    margin-bottom: 20px;
}

h2 {
    margin-top: 0;
}
.single_vision{
   margin-left: 20%;
}
.Bifocal_tintable{
    margin-left: 20%; 
}
.specialOrder{
    margin-left: 20%;  
}
.progressive{
    margin-left: 20%;  
    margin-top: -10%; 
}
.alert{
   display: flex;
   justify-content: center;
   font-size: 2rem;
   margin-top: 10%;
}
.lenses{
    display: grid;
     align-items: center;
     margin-left: 15%;
}
</style>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($users->isEmpty())
    <div class="alert">
      Patient record not found please verify the Patient ID.
    </div>
  @else
  <div class="main">
    <div class="content">         
          <div class="search">
                {{-- <form action="" method="post" class="form1"> --}}
                    {{-- <div class="form1"> --}}
                        {{-- <input type="text" placeholder="Enter Patient Id" name="patient_id" class="search_input"> --}}
                        {{-- <input type="submit" value="Search" class="searchBtn">  --}}
                    {{-- </div> --}}
                {{-- </form> --}}
          </div>
          <form method="POST" action="{{route('treatment.store')}}">
            @csrf
            @method('POST')
            <div class="form1">
                <label for="TextArea">Patient ID:</label>
                <input type="text" value="{{$users[0]->patient_id}}" placeholder="Enter Patient Id" name="patient_id" class="search_input">
                {{-- <input type="submit" value="Search" class="searchBtn">  --}}
            </div>
          {{-- DOSAGE --}}
          <div class="textarea">
            <label for="TextArea">Dosage:</label>
            <input class="dosage" type="text" value="{{$users[0]->dosage}}" readonly>
          </div>
          {{-- DURATION --}}
          <div class="duration">
              <label for="" >DURATION</label>
              <input class="dosage" type="text" value="{{$users[0]->duration}}" readonly>
          </div>
          {{-- TAB --}}
          <div class="textarea">
            <label for="TextArea">TAB:</label>
            <input class="dosage" type="text" value="{{$users[0]->tab}}" readonly>
          </div>
          {{-- GUTT --}}
          <div class="textarea">
            <label for="TextArea">GUTT:</label>
            <input class="dosage" type="text" value="{{$users[0]->gutt}}" readonly>
          </div>
          {{-- OC --}}
          <div class="textarea">
            <label for="TextArea">OC:</label>
            <input class="dosage" type="text" value="{{$users[0]->oc}}" readonly>
          </div>
           {{-- SUR --}}
           <div class="textarea">
            <label for="TextArea"  >SUR:</label>
            <input class="dosage" type="text" value="{{$users[0]->sur}}" readonly>
          </div>
           {{-- RTC --}}
           <div class="textarea">
            <label for="TextArea">RTC:</label>
            <input class="dosage" type="text" value="{{$users[0]->rtc}}" readonly>
          </div>
          {{-- Remark --}}
          <div class="textarea">
            <label for="TextArea" >Remark:</label>
            <input class="dosage" type="text" value="{{$users[0]->remark}}" readonly>
          </div>
          <div class="lenses">
              <h1>Lens</h1>
              <h3>Single Vision Tintable</h3>      
              @php
              $decodedData = json_decode($users[0]->single_vision, true); // Decode and convert to associative array
                if (is_array($decodedData)) 
                    if (is_array($decodedData)) {
                    foreach ($decodedData as $item) {
                    echo "<li>" . $item . "</li>";
                    }
                }
              @endphp
              <h3>Bifocal Tintable</h3>
              @php
              $decodedData = json_decode($users[0]->bifocal, true); // Decode and convert to associative array
              if (is_array($decodedData)) {
                    foreach ($decodedData as $item) {
                    echo "<li>" . $item . "</li>";
                    }
                }
              @endphp
               <h3>Special Order</h3>
               @php
               $decodedData = json_decode($users[0]->special_order, true); // Decode and convert to associative array
               if (is_array($decodedData)) {
                    foreach ($decodedData as $item) {
                    echo "<li>" . $item . "</li>";
                    }
                }
               @endphp
                <h3>Progressive</h3>
                @php
                $decodedData = json_decode($users[0]->progressive, true); // Decode and convert to associative array
                    if (is_array($decodedData)) {
                    foreach ($decodedData as $item) {
                    echo "<li>" . $item . "</li>";
                    }
                }
                @endphp
            
          </div>
  @endif

    
   
</body>
</html>