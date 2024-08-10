
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Patient Form</title>
    <link rel="stylesheet" href="css/nePatient.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="navbar">
        <img class="logo" src="/icons/logo.png" height="300px" width="300px">
        <div class="links">
            <ul>
                    <li><a href="{{ route('generate.show') }}">Invoice</a></li>
                    <li><a href="{{ route('public.records') }}">Records</a></li>
                    <li><a href="{{ route('doctorSignIn') }}">Doctors Portal</a></li>
                    {{-- <li><a href="{{ route('testing') }}">Inventory</a></li> --}}
                    <li><a href="{{ route('search.treatment') }}">Opticianry</a></li>
                    <li><a href="{{ route('admin.admin2') }}">Admin 2</a></li>
                    <li><a href="{{ route('image.upload') }}">Case File Upload</a></li>
                    {{-- <li><a href="{{ route('doctors.drugs') }}">Drug</a></li> --}}
            </ul>
        </div>
    </div>
    @if(session()->has('success'))
      <div>
        {{ session('success')}}
      </div>
    @endif
    <form class="form" method="POST" action="{{route('pages.store')}}">
        @csrf
        @method('POST')
        <div class="formContainer">
            <h1 class="patientLabel">New Patient</h1>

            <label class="fnlabel">First Name:</label><br>
            <input type="text" placeholder="Enter First Name" class="fninput" name="firstname" required>

            <label class="lnlabel">Last Name:</label><br>
            <input type="text" placeholder="Enter Last Name" class="lninput" name="lastname" required>

            <label class="doblabel">Date Of Birth:</label>
            <input type="date" placeholder="yyyy/mm/dd" class="dobinput" name="dob" required>

            <div class="male">
                <input type="radio"  class="maleinput" name="radio" value="male"required> 
                <label >MALE</label>
            </div>

            <div class="female">
                <input type="radio"  class="femaleinput" name="radio" value="female"required>
                <label >FEMALE</label>
            </div>

            <div class="contactInfo">
                <div class="phone">
                   <label>Phone:</label><br>
                   <input type="tel" placeholder="Enter Phone Number" class="phoneinput" name="phone"required>
                </div>
                <div class="email">
                    <label>Email:</label><br>
                    <input type="text" placeholder="Enter Email"class="emailinput" name="email"required>
                </div>
            </div>
            <div class="adl">
                <label class="adlabel">Address:</label>
            </div>
            <div class="cityAndstate">
                <div class="city">
                    <label>CITY:</label><br>
                    <input type="text" placeholder="Enter Your City" class="cityinput" name="city" required>
                </div>
                <div class="state">
                    <label>STATE:</label><br>
                    <input type="text" placeholder="Enter Phone Number" class="stateinput" name="state" required>
                </div>
            </div>
            
            <div class="street">
                <label>Street:</label>
                <input type="text" placeholder="Enter your street address" class="streetinput" name="street" required>
            </div>
            <!-- Occupation -->
            <div class="occ">
                <label>Occupation:</label>
                <input type="text" placeholder="Enter your occupation" class="occinput" name="occupation" required>
            </div>
<!-- Emergency Contact -->
            <div class="emergencyLabel">
                <label>Emergency Contact</label>
            </div>
            <div class="emergencyContact">
                <div class="emergencyfn">
                    <label>FULL NAME:</label><br>
                    <input type="text" placeholder="Enter Full Name" class="efninput" name="efn" required>
                </div>
                <div class="relationship">
                    <label>RELATIONSHIP:</label><br>
                    <input type="text" placeholder="Enter Your Relationship" class="relationshipinput" name="erel" required>
                </div>
            </div>
            <div class="contactInfo">
                <div class="phone">
                   <label>Phone:</label><br>
                   <input type="tel" placeholder="Enter Phone Number" class="phoneinput" name="epn" required>
                </div>
                <div class="email">
                    <label>Email:</label><br>
                    <input type="text" placeholder="Enter Email"class="emailinput" name="ee" required>
                </div>
        </div>
        @php
           $random_number = rand(1, 1000);
           $currentDate = date('m/Y');
           $patientID = $random_number."/".$currentDate;
        @endphp
        <div class="pid">
            <label>PatientID:</label><br>
            <input type="input" placeholder="Enter Email"class="emailinput" value="<?php echo $patientID ?>"  name="pid" readonly>
        </div>
        <script>
            
              
        </script>
        <div class="buttons">
            {{-- <input type="button" class="genbtn" value="Generate Patient ID" id="generateButton" > --}}
            <input type="submit" class="save" value="Register Patient" name="submitBtn">
        </div>
        <div id="generated-number">

        </div>
    </form>
    <script>

    $(document).ready(function() {
     
     $("#generateButton").click(function() {
    // Generate a random number between 12001 (inclusive) and 99999 (exclusive)
    var randomNumber = Math.floor(Math.random() * (99999 - 12000 + 1)) + 12000;

    // Display the generated number
    $("#generated-number").text(randomNumber);
  });
});

  </script>
</body>        
