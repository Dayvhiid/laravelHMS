<style>
  *{
    font-family: "Montserrat", sans-serif;
}
.navbar{
    text-align: center;
    height: 10%;
    display: flex;
    justify-content: space-between;
}
.top{
  margin-top: 4%;
}
.top table{
    border-collapse: collapse;
    border: none;
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
.container{
    display: flex;
}
.statusbar{
    width: 15%;
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
.saveBtn{
  padding: 15px 55px;
  background-color: green;
  border-radius: 10px;
  border: 1px solid green;
  color: #ccc;
}
.save{
  margin-left: 9%;
  margin-top: 2%;
}
#btn-success{
  /* padding: 5px 5px; */
  background-color: green;
  border-radius: 10px;
  border: 1px solid green;
  color: #ccc;
  margin-left: 1%;
}
.searchbox{
    width: 60%;
    /* margin-left: 5%; */
    margin-left:10%;
    margin-right: auto;
}
.searchbox input{
    padding: 2% 15px;
    width: 60%;
    border: 1px solid;
    border-radius: 10px;
}
.searchdiv{
    display: flex;
    background-color: #cccc;
    width: 120%;
    height: 15%;
    border: 1px solid #cccc;
    border-radius: 10px;
    justify-content: space-between;
}
/* .searchpng{
   margin-top: 1%;
   margin-left: 1%;
} */
.searchinp{
    background-color: #cccc;
    margin-left: 3%;
    color: black;
}
.searchdiv input{
    outline:0px solid #cccc;
    border: none;
    width: 50%;
}
.searchButton{
    width: 5%;
    padding: 5px 10px;
    background-color: green;
}
input [type="text"]{
    border: none;
}
.flexside{
    display: flex;
    width: 150%;
    justify-content: space-between;
    margin-top: 5%;
}
/* .flexside table{
    border: 1px solid black;
} */
.flexside table {
  border-collapse: collapse; /* Ensures borders don't overlap */
  /*width: 70%; /* Adjust width as needed */
 /* margin: 0 auto; /* Centers the table horizontally */
}
.flexside .left{
  float: left;
}

.flexside .right{
  float: right;
  margin-left: 15%;
}
.flexside th, td {
  border: 1px solid black; /* Adds borders to all cells */
  padding: 10px; /* Adds padding for spacing around content */
  text-align: left; /* Aligns content to the left by default */
}

.flexside th {
  background-color: #f0f0f0; /* Adds a light gray background to headers */
  font-weight: bold; /* Makes header text bold */
}
.flexbox2{
    display: flex;
    justify-content: space-between;
    width: 140%;
    margin-top: 4%;
}
.flexbox2 .flexleft{
  float:left
}
.flexbox2 .flexright{
  float: right;
  margin-left: 10%;
}
.flexbox2 table {
    /* width: 25vw; */
    border-collapse: collapse; /* Ensures borders don't overlap */
    /*width: 100%; /* Adjust width as needed */
    /*margin: 0 auto; /* Centers the table horizontally */
  }
  
  .flexbox2 th, td {
    border: 1px solid black; /* Adds borders to all cells */
    padding: 10px; /* Adds padding for spacing around content */
    text-align: left; /* Aligns content to the left by default */
  }
  
  .flexbox2 th {
    background-color: #f0f0f0; /* Adds a light gray background to headers */
    font-weight: bold; /* Makes header text bold */
  }
  .flexbox3 table {
    border-collapse: collapse; /* Ensures borders don't overlap */
    /*width: 100%; /* Adjust width as needed */
    margin: 0 auto; /* Centers the table horizontally */
  }
  
  .flexbox2 th, td {
    border: 1px solid black; /* Adds borders to all cells */
    padding: 10px; /* Adds padding for spacing around content */
    text-align: left; /* Aligns content to the left by default */
  }
  
  .flexbox2 th {
    background-color: #f0f0f0; /* Adds a light gray background to headers */
    font-weight: bold; /* Makes header text bold */
  }
  /* th .cyl{
    width: 10%;
  } */
  .flexbox3{
    /* display: flex; */
    justify-content: space-between;
    margin-top: 0%;
    width: 120%;
  }
  .flexbox3 div{
    /* margin-left: 5%; */
    margin-top: 4%;
  }
  .flexbox3 table {
    /* width: 25vw; */
    border-collapse: collapse; /* Ensures borders don't overlap */
    width: 100%; /* Adjust width as needed
    /* margin: 0 auto; Centers the table horizontally */
  }
  
  .flexbox3 th, td {
    border: 1px solid black; /* Adds borders to all cells */
    padding: 10px; /* Adds padding for spacing around content */
    text-align: left; /* Aligns content to the left by default */
  }
  
  .flexbox3 th {
    background-color: #f0f0f0; /* Adds a light gray background to headers */
    font-weight: bold; /* Makes header text bold */
  }
.flexbox4{
    display: flex;
    justify-content: space-between;
    margin-top: 8%;
}
.flexbox4 table {
    width: 25vw;
    border-collapse: collapse; /* Ensures borders don't overlap */
    /*width: 100%; /* Adjust width as needed */
    margin: 0 auto; /* Centers the table horizontally */
  }
  
  .flexbox4 th, td {
    border: 1px solid black; /* Adds borders to all cells */
    padding: 10px; /* Adds padding for spacing around content */
    text-align: left; /* Aligns content to the left by default */
  }
  
  .flexbox4 th {
    background-color: #f0f0f0; /* Adds a light gray background to headers */
    font-weight: bold; /* Makes header text bold */
  }
  .time{
     margin-top: 10%;
  }
  .search{
    display: flex
  }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/vitals.css">
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <title>Vitals</title>
</head>
<body>
<div class="navbar">
        <h2>Diagnosis Vitals</h2>
        <div class="links">
            <ul>
              {{-- <li><a class="nav-link" href="{{route('doctors.index')}}">Home</a></li> --}}
              <li><a class="nav-link" href="{{route('doctors.treatment')}}">Treatment Plan</a></li>
              <li><a class="nav-link" href="{{route('search.vitals')}}">Vitals Records</a></li>
              <li><a class="nav-link" href="{{route('search.treatment')}}">Treatment Records</a></li>
            {{-- <button class="doc" onclick="window.location.href='/HMS/hospital/doc.html'">
              <img src="/HMS/hospital/images/doctor.png" height="35px" width="35px">
            </button> --}}
            </ul>
        </div>
    </div>
    <div class="container">
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
          <div class="button"> --}}
            {{-- <input type="submit" class="patientBtn" value="New Patient" onclick="window.location.href='/HMS/hospital/newPatient.php';">
          </div> --}}
       </div>
       <div class="searchbox">
         
        
         
        <div>  
         
{{-- <form method="post" action="{{route('vitals.store')}}">   --}}
  {{-- @csrf
  @method('POST') --}}
  <div></div>
  <div class="search"> 
    <input type="text" placeholder="Enter patient ID" name="patient_code">
    
   </div>
<label id="status"></label>   
         <div class="top">
         <table>
          <tr>
          <h3>Case history</h3>
            <td>C/C:</td>
            <td><input type="text" name="cc"></td>
          </tr>
          <tr>
            <td>PoHx:</td>
            <td><input type="text" name="pohx"></td>
          </tr>
          <tr>
            <td>LEE:</td>
            <td><input type="text" name="lee"></td>
          </tr>
          <tr>
            <td>PmHx:</td>
            <td><input type="text" name="pmhx"></td>
          </tr>
          <tr>
            <td>PfoHx:</td>
            <td><input type="text" name="pfohx"></td>
          </tr>
         </table>
         </div>

         <div class="flexside">
            <div class="left">
            <label>VISUAL ACTIVITY</label>
            <table width="130%">
            <tr>
                <th></th>
                <th>UNAIDED</th>
                <th>PIN HOLE</th>
                <th>NEAR V/A</th>
            </tr>

            <tr>
                <td>OD:</td>
                <td><input type="text" name="ODunaided"></td>
                <td><input type="text" name="ODpinhole"></td>
                <td><input type="text" name="ODnearva"></td>
            </tr>

                <tr>
                    <td>OS:</td>
                    <td><input type="text" name="OSunaided"></td>
                    <td><input type="text" name="OSpinhole"></td>
                    <td><input type="text" name="OSnearva"></td>
                </tr>

            <!-- <tr>
                <td>Data 3-1</td>
                <td>Data 3-2</td>
                <td>Data 3-3</td>
                <td>Data 3-4</td>
            </tr> -->
   </table>

            </div>
            <div class="right">
            <label>LENSOMETRY</label>
<table >
  <tr>
    <th></th>
    <th>SPH</th>
    <th>CYL</th>
    <th>AXIS</th>
    <th>VA</th>
  </tr>

  <!-- <tr>
    <td>Data 1-1</td>
    <td>Data 1-2</td>
    <td>Data 1-3</td>
    <td>Data 1-4</td>
    <td>Data 1-5</td>
  </tr> -->

  <tr>
    <td>OD:</td>
    <td><input type="text" name="ODSPH" value="{{$item->lodsph}}"></td>
    <td><input type="text" name="ODCYL" value="{{$item->lodcyl}}"></td>
    <td><input type="text" name="ODAXIS" value="{{$item->lodaxis}}"></td>
    <td><input type="text" name="ODVA"></td>
  </tr>

  <tr>
    <td>OS:</td>
    <td><input type="text" name="OSSPH" value="{{$item->lossph}}"></td>
    <td><input type="text" name="OSCYL" value="{{$item->loscyl}}"></td>
    <td><input type="text" name="OSAXIS" value="{{$item->losaxis}}"></td>
    <td><input type="text" name="OSVA" value="{{$item->losva}}"></td>
  </tr>

  <tr>
    <td>ADD:</td>
    <td><input type="text" name="ADDDSPH" value="{{$item->addsph}}"></td>
    <td><input type="text" name="ADDCYL" value="{{$item->addcyl}}"></td>
    <td><input type="text" name="ADDAXIS" value="{{$item->addaxis}}"></td>
    <td><input type="text" name="ADDVA" value="{{$item->addva}}"></td>
  </tr>
</table>

            </div>
         </div>
 <!-- flexbox 2 -->
 <div class="flexbox2">
           <div class="flexleft">
           <label>AUTO-REFRACTION</label>
           <table width="95%" >
  <tr>
    <th></th>
    <th>SPHERE</th>
    <th>CYL</th>
    <th>AXIS</th>
  </tr>
  <tr>
    <td>OD</td>
    <td><input type="text" name="arodsph" value="{{$item->arodsph}}"></td>
    <td><input type="text" name="arodcyl" value="{{$item->arodcyl}}"></td>
    <td><input type="text" name="arodaxis" value="{{$item->arodaxis}}"></td>
  </tr>
  <tr>
    <td>OS</td>
    <td><input type="text" name="arossph" value="{{$item->arossph}}"></td>
    <td><input type="text" name="aroscyl" value="{{$item->aroscyl}}"></td>
    <td><input type="text" name="arosaxis" value="{{$item->arosaxis}}"></td>
  </tr>
</table>

           </div>
           <div class="flexright">
           <label>RETINOSCOPE</label>
           <table width="90%">
  <tr>
    <th></th>
    <th>SPHERE</th>
    <th>CYL</th>
    <th>AXIS</th>
  </tr>
  <tr>
    <td>OD</td>
    <td><input type="text" name="rodsph" value="{{$item->rodsph}}"></td>
    <td><input type="text" name="rodcyl" value="{{$item->rodcyl}}"></td>
    <td><input type="text" name="rodaxis" value="{{$item->rodaxis}}"></td>
  </tr>
  <tr>
    <td>OS</td>
    <td><input type="text" name="rossph" value="{{$item->rossph}}"></td>
    <td><input type="text" name="roscyl" value="{{$item->roscyl}}"></td>
    <td><input type="text" name="rosaxis" value="{{$item->rosaxis}}"></td>
  </tr>
</table>
           </div>
           </div>
           <div class="flexbox3">
               <div class="flexbox3left">
                <label>SUBJECTIVE REFRACTION</label>
               <table class="srtable" style="width: 800px" >
                    <tr>
                        <th></th>
                        <th>SPH</th>
                        <th>CYL</th>
                        <th>AXIS</th>
                        <th>VA</th>
                        <th>ADD</th>
                        <th>NVA</th>
                    </tr>
                    <tr>
                        <td>OD:</td>
                        <td><input type="text" name="srodsph" value="{{$item->srodsph}}"></td>
                        <td><input type="text" name="srodcyl" value="{{$item->srodcyl}}"></td>
                        <td><input type="text" name="srodaxis" value="{{$item->srodaxis}}"></td>
                        <td><input type="text" name="srodva" value="{{$item->srodva}}"></td>
                        <td><input type="text" name="srodadd" value="{{$item->srodadd}}"></td>
                        <td><input type="text" name="srodnva" value="{{$item->srodnva}}"></td>
                    </tr>
                    <tr>
                        <td>OS:</td>
                        <td><input type="text" name="srossph" value="{{$item->srossph}}"></td>
                        <td><input type="text" name="sroscyl" value="{{$item->sroscyl}}"></td>
                        <td><input type="text" name="srosaxis" value="{{$item->srosaxis}}"></td>
                        <td><input type="text" name="srosva" value="{{$item->srosva}}"></td>
                        <td><input type="text" name="srosadd" value="{{$item->srosadd}}"></td>
                        <td><input type="text" name="srosnva" value="{{$item->srosnva}}"></td>
                    </tr>
                    <!-- <tr>
                        <td>Data 3-1</td>
                        <td>Data 3-2</td>
                        <td>Data 3-3</td>
                        <td>Data 3-4</td>
                        <td>Data 3-5</td>
                        <td>Data 3-6</td>
                        <td>Data 3-7</td>
                    </tr> -->
                    </table>
               </div>
               <div class="flexbox3right">
               <label>FINAL RX</label>
               <table width="70%">
                    <tr>
                        <th></th>
                        <th>SPH</th>
                        <th>CYL</th>
                        <th>AXIS</th>
                        <th>VA</th>
                        <th>ADD</th>
                        <th>NVA</th>
                    </tr>
                    <tr>
                        <td>OD:</td>
                        <td><input type="text" name="fodsph" value="{{$item->fodsph}}"></td>
                        <td><input type="text" name="fodcyl" value="{{$item->fodcyl}}"></td>
                        <td><input type="text" name="fodaxis" value="{{$item->fodaxis}}"></td>
                        <td><input type="text" name="fodva" value="{{$item->fodva}}"></td>
                        <td><input type="text" name="fodadd" value="{{$item->fodadd}}"></td>
                        <td><input type="text" name="fodnva" value="{{$item->fodnva}}"></td>
                    </tr>
                    <tr>
                        <td>OS:</td>
                        <td><input type="text" name="fossph" value="{{$item->fossph}}"></td>
                        <td><input type="text" name="foscyl" value="{{$item->foscyl}}"></td>
                        <td><input type="text" name="fosaxis" value="{{$item->fosaxis}}"></td>
                        <td><input type="text" name="fosva" value="{{$item->fosva}}"></td>
                        <td><input type="text" name="fosadd" value="{{$item->fosadd}}"></td>
                        <td><input type="text" name="fosnva" value="{{$item->fosnva}}"></td>
                    </tr>
                    <!-- <tr>
                        <td>Data 3-1</td>
                        <td>Data 3-2</td>
                        <td>Data 3-3</td>
                        <td>Data 3-4</td>
                        <td>Data 3-5</td>
                        <td>Data 3-6</td>
                        <td>Data 3-7</td>
                    </tr> -->
                    </table>
               </div>
        
       </div>
       <div class="flexbox4">
                  <div class="flexbox4left">
                    <table>
                    <label>External Examination And Internal Examination</label>
                    <tr>
                        <th></th>
                        <th>OD</th>
                        <th>OS</th>
                    </tr>

                    <tr>
                        <td>Eyelid</td>
                        <td><input type="text" name="eyelidod" value="{{$item->eyelidod}}"></td>
                        <td><input type="text" name="eyelidos" value="{{$item->eyelidos}}"></td>
                    </tr>

                    <tr>
                        <td>Conjuctiva</td>
                        <td><input type="text" name="conjuctivaod" value="{{$item->conjuctivaod}}"></td>
                        <td><input type="text" name="conjuctivaos" value="{{$item->conjuctivaos}}"></td>
                    </tr>

                    <tr>
                        <td>Cornea</td>
                        <td><input type="text" name="corneaod" value="{{$item->corneaod}}"></td>
                        <td><input type="text" name="corneaos" value="{{$item->corneaos}}"></td>
                    </tr>

                    <tr>
                        <td>Pupil</td>
                        <td><input type="text" name="pupilod" value="{{$item->pupilod}}"></td>
                        <td><input type="text" name="pupilos" value="{{$item->pupilos}}"></td>
                    </tr>

                    <tr>
                        <td>Iris</td>
                        <td><input type="text" name="irisod" value="{{$item->irisod}}"></td>
                        <td><input type="text" name="irisos" value="{{$item->irisos}}"></td>
                    </tr>

                    <tr>
                        <td>Lens</td>
                        <td><input type="text" name="lensod" value="{{$item->lensod}}"></td>
                        <td><input type="text" name="lensos" value="{{$item->lensod}}"></td>
                    </tr>

                    <tr>
                        <td>Virtreous</td>
                        <td><input type="text" name="vitreousod" value="{{$item->vitreousod}}"></td>
                        <td><input type="text" name="vitreousos" value="{{$item->vitreousos}}"></td>
                    </tr>

                    <tr>
                        <td>C/D Ratio</td>
                        <td><input type="text" name="cdratiood" value="{{$item->cdratiood}}"></td>
                        <td><input type="text" name="cdratioos" value="{{$item->cdratioos}}"></td>
                    </tr>

                    <tr>
                        <td>Macula</td>
                        <td><input type="text" name="macularod" value="{{$item->macularod}}"></td>
                        <td><input type="text" name="maculaos" value="{{$item->macularos}}"></td>
                    </tr>
                    </table>

                  </div>
                  <div class="flexbox4right">
                    <table>
                        <label>IOP</label>
                    <tr>
                        <th></th>
                        <th>CCT</th>
                        <th>NCT</th>
                    </tr>

                    <tr>
                        <td>OD</td>
                        <td><input type="text" name="odccct" value="{{$item->odccct}}"></td>
                        <td><input type="text" name="odnct" value="{{$item->odnct}}"></td>
                    </tr>

                    <tr>
                        <td>OS</td>
                        <td><input type="text" name="oscct" value="{{$item->oscct}}"></td>
                        <td><input type="text" name="osnct" value="{{$item->osnct}}"></td>
                    </tr>
                    </table>

                    <div class="time">
                    <tr>
                        <td>Time:</td>
                        <td><input type="text" value="<?php echo date("h:ia")?>"></td>
                    </tr>
                    </div>

                  </div>
               </div>
                  </div>

               </div>

       </div>
      {{-- <div class="save">
        <input type="submit" class="saveBtn" id="btn-success" value="SAVE">
      </div> --}}
    </div>
 {{-- </form>  --}}

</body>
</html>

