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
    margin-top: 3%;
    display: flex;
    width: 45%;
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
    <div class="navbar">
        <h2>Diagnosis Vitals</h2>
        <div class="links">
            <ul>
                <li> New Patients</li>
                <li>Records</li>
                <li>Invoice</li>
                <li>Inventory</li>
            {{-- <button class="doc" onclick="window.location.href='/HMS/hospital/doc.html'">
              <img src="/HMS/hospital/images/doctor.png" height="35px" width="35px">
            </button> --}}
            </ul>
        </div>
    </div>
    <div class="main">
        <div class="statusbar">
            <div class="home">
              <img height="35px" width="35px" class="homepng" src="/hospital/images/house.png">
              <p>Home</p>
            </div>
            <!-- Patients -->
            <div class="patients">
              <img height="35px" width="35px" class="patientpng" src="/hospital/icons/patient(1).png">
              <p>Patient</p>
            </div>
            <!-- Appointment -->
            <div class="app">
              <img height="35px" width="35px" class="apppng" src="/hospital/icons/appointment.png">
              <p>Appointment</p>
            </div>
            <!-- Billing -->
            <div class="billing">
              <img height="35px" width="35px" class="billingpng" src="/hospital/icons/bill.png">
              <p>Billing</p>
            </div>
            <!-- Records -->
            <div class="records">
              <img height="35px" width="35px" class="recordspng" src="/hospital/icons/search-interface-symbol.png">
              <p>Records</p>
            </div>
            <div class="button">
              <input type="submit" class="patientBtn" value="New Patient" onclick="window.location.href='/HMS/hospital/newPatient.php';">
            </div>
         </div>
        <div class="content">         
              <div class="search">
                    <form action="" method="post" class="form1">
                        <input type="text" placeholder="Enter Drug Name" class="search_input">
                        <input type="submit" value="Search" class="searchBtn"> 
                    </form>
              </div>
              <form>
              {{-- DOSAGE --}}
              <div class="textarea">
                <label for="TextArea">Dosage:</label>
                <textarea class="dosage">
                
                </textarea>
              </div>
              {{-- DURATION --}}
              <div class="duration">
                  <label for="" >DURATION</label>
                  <select name="" id=""  class="durationMenu">
                      <option>1 Day</option>
                      <option>2 Day</option>
                      <option>3 Day</option>
                      <option>4 Day</option>
                      <option>5 Day</option>
                      <option>6 Day</option>
                      <option>1 week</option>
                      <option>2 weeks</option>
                      <option>3 weeks</option>
                      <option>1 Month</option>
                  </select>
              </div>
              {{-- TAB --}}
              <div class="textarea">
                <label for="TextArea">TAB:</label>
                <textarea class="dosage">
                
                </textarea>
              </div>
              {{-- GUTT --}}
              <div class="textarea">
                <label for="TextArea">GUTT:</label>
                <textarea class="dosage">
                
                </textarea>
              </div>
              {{-- OC --}}
              <div class="textarea">
                <label for="TextArea">OC:</label>
                <textarea class="dosage">
                
                </textarea>
              </div>
               {{-- SUR --}}
               <div class="textarea">
                <label for="TextArea">SUR:</label>
                <textarea class="dosage">
                
                </textarea>
              </div>
               {{-- RTC --}}
               <div class="textarea">
                <label for="TextArea">RTC:</label>
                <textarea class="dosage">
                
                </textarea>
              </div>
              </form>
              {{--save  --}}
              <div class="save">
                  <input type="submit" value="save" class="saveBtn">
              </div>
         
    </div>
</body>
</html>