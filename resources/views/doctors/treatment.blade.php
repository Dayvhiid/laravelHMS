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
        {{-- <div class="statusbar">
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
         </div> --}}
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
                    <input type="text" placeholder="Enter Patient Id" name="patient_id" class="search_input">
                    {{-- <input type="submit" value="Search" class="searchBtn">  --}}
                </div>
              {{-- DOSAGE --}}
              <div class="textarea">
                <label for="TextArea">Dosage:</label>
                <textarea class="dosage" name="dosage">
                
                </textarea>
              </div>
              {{-- DURATION --}}
              <div class="duration">
                  <label for="" >DURATION</label>
                  <select name="duration" id=""  class="durationMenu">
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
                <textarea class="dosage" name="tab">
                
                </textarea>
              </div>
              {{-- GUTT --}}
              <div class="textarea">
                <label for="TextArea">GUTT:</label>
                <textarea class="dosage" name="gutt">
                
                </textarea>
              </div>
              {{-- OC --}}
              <div class="textarea">
                <label for="TextArea">OC:</label>
                <textarea class="dosage" name="oc">
                
                </textarea>
              </div>
               {{-- SUR --}}
               <div class="textarea">
                <label for="TextArea"  >SUR:</label>
                <textarea class="dosage" name="sur">
                
                </textarea>
              </div>
               {{-- RTC --}}
               <div class="textarea">
                <label for="TextArea">RTC:</label>
                <textarea class="dosage"  name="rtc">
                
                </textarea>
              </div>
              {{-- Remark --}}
              <div class="textarea">
                <label for="TextArea" >Remark:</label>
                <textarea class="remark" name="remark">
                
                </textarea>
              </div>
             {{-- LENS --}}

               <div class="single_vision">
                <h3>Lens Type</h3>
                <h5>Single Vision tintable</h5>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="singlevision[]" value="Single Vision Tintable Photochromic" id="flexCheckIndeterminate">
                    <label class="form-check-label" for="flexCheckIndeterminate">
                      Single Vision Tintable Photochromic
                    </label>
                  </div>
                  <div>
                    <input class="form-check-input" type="checkbox" name="singlevision[]" value="single vision transition A/R" id="flexCheckIndeterminate">
                    <label class="form-check-label" for="flexCheckIndeterminate">
                        single vision transition A/R
                    </label>
                  </div>
                   <div>
                    <input class="form-check-input" type="checkbox" name="singlevision[]" value="single vision transition A/R B/C" id="flexCheckIndeterminate">
                    <label class="form-check-label" for="flexCheckIndeterminate">
                        single vision transition A/R B/C
                    </label>
                   </div>
               </div>

               <div class="Bifocal_tintable">
                  <h5>Bifocal Tintable</h5>
                    <div>
                        <input class="form-check-input" type="checkbox" name="bifocal[]" value="Bifocal transition A/R" id="flexCheckIndeterminate">
                        <label class="form-check-label" for="flexCheckIndeterminate">
                           Bifocal transition A/R 
                        </label>
                    </div>
                    <div>
                        <input class="form-check-input" type="checkbox" name="bifocal[]" value="Bifocal transition A/R B/C" id="flexCheckIndeterminate">
                        <label class="form-check-label" for="flexCheckIndeterminate">
                           Bifocal transition A/R B/C
                        </label>
                    </div>
               </div>

               <div class="specialOrder">
                <h5>Special Order Single Vision Tintable</h5>
                  <div>
                      <input class="form-check-input" type="checkbox" name="specialorder[]" value="Special order fused bifocal tintable" id="flexCheckIndeterminate">
                      <label class="form-check-label" for="flexCheckIndeterminate">
                          Special order fused bifocal tintable
                      </label>
                  </div>
                  <div>
                      <input class="form-check-input" type="checkbox" name="specialorder[]" value="Special order DTOP bifocal tintable" id="flexCheckIndeterminate">
                      <label class="form-check-label" for="flexCheckIndeterminate">
                         Special order DTOP bifocal tintable
                      </label>
                  </div>
                  <div>
                        <input class="form-check-input" type="checkbox" name="specialorder[]" value="Special order fused bifocal A/R" id="flexCheckIndeterminate">
                        <label class="form-check-label" for="flexCheckIndeterminate">
                        Special order fused bifocal A/R
                        </label>
                   </div>
                   <div>
                        <input class="form-check-input" type="checkbox" name="specialorder[]" value="Special order DTOP A/R" id="flexCheckIndeterminate">
                        <label class="form-check-label" for="flexCheckIndeterminate">
                        Special order DTOP A/R
                        </label>
                    </div>
                    <div>
                        <input class="form-check-input" type="checkbox" name="specialorder[]" value="Special order fused bifocal A/R B/C" id="flexCheckIndeterminate">
                        <label class="form-check-label" for="flexCheckIndeterminate">
                        Special order fused bifocal A/R B/C
                        </label>
                   </div>
                   <div>
                        <input class="form-check-input" type="checkbox" name="specialorder[]" value="Special order DTOP bifocal A/R B/C" id="flexCheckIndeterminate">
                        <label class="form-check-label" for="flexCheckIndeterminate">
                        Special order DTOP bifocal A/R B/C
                        </label>
                  </div>
                  <div class="invisible">
                        <h3>Invisible</h3>
                        <div>
                            <input class="form-check-input" type="checkbox" name="invisible[]" value="Invisible bifocal tintable" id="flexCheckIndeterminate">
                            <label class="form-check-label" for="flexCheckIndeterminate">
                            Invisible bifocal tintable
                            </label>
                        </div>
                        <div>
                            <input class="form-check-input" type="checkbox" name="invisible[]" value="Invisible bifocal A/R" id="flexCheckIndeterminate">
                            <label class="form-check-label" for="flexCheckIndeterminate">
                                Invisible bifocal A/R
                            </label>
                        </div>
                        <div>
                            <input class="form-check-input" type="checkbox" name="invisible[]" value="Invisible bifocal A/R B/C" id="flexCheckIndeterminate">
                            <label class="form-check-label" for="flexCheckIndeterminate">
                                Invisible bifocal A/R B/C
                            </label>
                        </div>
                  </div>
              </div>

              <div class="progressive">
                <h5>Progressive</h5>
                <div>
                    <input class="form-check-input" type="checkbox" name="progressive[]" value="Progressive Tintable" id="flexCheckIndeterminate">
                    <label class="form-check-label" for="flexCheckIndeterminate">
                    Progressive Tintable
                    </label>
                </div>
                <div>
                    <input class="form-check-input" type="checkbox" name="progressive[]" value="Progressive tintable A/R" id="flexCheckIndeterminate">
                    <label class="form-check-label" for="flexCheckIndeterminate">
                    Progressive tintable A/R 
                    </label>
                </div>
                <div>
                    <input class="form-check-input" type="checkbox" name="progressive[]" value="Progressive tintable A/R B/C" id="flexCheckIndeterminate">
                    <label class="form-check-label" for="flexCheckIndeterminate">
                        Progressive tintable A/R B/C
                    </label>
                </div>
                 
             </div>
            
                {{--save  --}}
                <div class="save">
                    <input type="submit" value="save" class="saveBtn">
                </div>
              </form>
             
    </div>
</body>
</html>