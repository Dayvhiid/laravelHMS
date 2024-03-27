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
    margin-left: 5%;
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
    margin-top: 4%;
}
.flexbox2 .flexleft{
  float:left
}
.flexbox2 .flexright{
  float: right;
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
    margin-top: 5%;
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
    <div class="container">
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
       <div class="searchbox">
          <h2>Search Patients</h2>
        
         
        <div>  
         
<form method="post">  
  <div class="search"> 
    <input type="text" placeholder="Enter patient ID" name="pid">
    <input type="submit" id="btn-success" value="SAVE">
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
            <table width="70%">
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
    <td><input type="text" name="ODSPH"></td>
    <td><input type="text" name="ODCYL"></td>
    <td><input type="text" name="ODAXIS"></td>
    <td><input type="text" name="ODVA"></td>
  </tr>

  <tr>
    <td>OS:</td>
    <td><input type="text" name="OSSPH"></td>
    <td><input type="text" name="OSCYL"></td>
    <td><input type="text" name="OSAXIS"></td>
    <td><input type="text" name="OSVA"></td>
  </tr>

  <tr>
    <td>ADD:</td>
    <td><input type="text" name="ADDDSPH"></td>
    <td><input type="text" name="ADDCYL"></td>
    <td><input type="text" name="ADDAXIS"></td>
    <td><input type="text" name="ADDVA"></td>
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
    <td><input type="text" name="arodsph"></td>
    <td><input type="text" name="arodcyl"></td>
    <td><input type="text" name="arodaxis"></td>
  </tr>
  <tr>
    <td>OS</td>
    <td><input type="text" name="arossph"></td>
    <td><input type="text" name="aroscyl"></td>
    <td><input type="text" name="arosaxis"></td>
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
    <td><input type="text" name="rodsph"></td>
    <td><input type="text" name="rodcyl"></td>
    <td><input type="text" name="rodaxis"></td>
  </tr>
  <tr>
    <td>OS</td>
    <td><input type="text" name="rossph"></td>
    <td><input type="text" name="roscyl"></td>
    <td><input type="text" name="rosaxis"></td>
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
                        <td><input type="text" name="srodsph"></td>
                        <td><input type="text" name="srodcyl"></td>
                        <td><input type="text" name="srodaxis"></td>
                        <td><input type="text" name="srodva"></td>
                        <td><input type="text" name="srodadd"></td>
                        <td><input type="text" name="srodnva"></td>
                    </tr>
                    <tr>
                        <td>OS:</td>
                        <td><input type="text" name="srossph"></td>
                        <td><input type="text" name="sroscyl"></td>
                        <td><input type="text" name="srosaxis"></td>
                        <td><input type="text" name="srosva"></td>
                        <td><input type="text" name="srosadd"></td>
                        <td><input type="text" name="srosnva"></td>
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
                        <td><input type="text" name="fodsph"></td>
                        <td><input type="text" name="fodcyl"></td>
                        <td><input type="text" name="fodaxis"></td>
                        <td><input type="text" name="fodva"></td>
                        <td><input type="text" name="fodadd"></td>
                        <td><input type="text" name="fodnva"></td>
                    </tr>
                    <tr>
                        <td>OS:</td>
                        <td><input type="text" name="fossph"></td>
                        <td><input type="text" name="foscyl"></td>
                        <td><input type="text" name="fosaxis"></td>
                        <td><input type="text" name="fosva"></td>
                        <td><input type="text" name="fosadd"></td>
                        <td><input type="text" name="fosnva"></td>
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
                        <td><input type="text" name="eyelidod"></td>
                        <td><input type="text" name="eyelidos"></td>
                    </tr>

                    <tr>
                        <td>Conjuctiva</td>
                        <td><input type="text" name="conjuctivaod"></td>
                        <td><input type="text" name="conjuctivaos"></td>
                    </tr>

                    <tr>
                        <td>Cornea</td>
                        <td><input type="text" name="corneaod"></td>
                        <td><input type="text" name="corneaos"></td>
                    </tr>

                    <tr>
                        <td>Pupil</td>
                        <td><input type="text" name="pupilod"></td>
                        <td><input type="text" name="pupilos"></td>
                    </tr>

                    <tr>
                        <td>Iris</td>
                        <td><input type="text" name="irisod"></td>
                        <td><input type="text" name="irisos"></td>
                    </tr>

                    <tr>
                        <td>Lens</td>
                        <td><input type="text" name="lensod"></td>
                        <td><input type="text" name="lensos"></td>
                    </tr>

                    <tr>
                        <td>Virtreous</td>
                        <td><input type="text" name="vitreousod"></td>
                        <td><input type="text" name="vitreousos"></td>
                    </tr>

                    <tr>
                        <td>C/D Ratio</td>
                        <td><input type="text" name="cdratiood"></td>
                        <td><input type="text" name="cdratioos"></td>
                    </tr>

                    <tr>
                        <td>Macula</td>
                        <td><input type="text" name="maculaod"></td>
                        <td><input type="text" name="maculaos"></td>
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
                        <td><input type="text" name="odcct"></td>
                        <td><input type="text" name="odnct"></td>
                    </tr>

                    <tr>
                        <td>OS</td>
                        <td><input type="text" name="oscct"></td>
                        <td><input type="text" name="osnct"></td>
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

    </div>
 </form> 

 <script>
     $(document).ready(function (){
        $('#saveBtn').click(function(e) {
           e.preventDefault()
           var pid = $('input[name=pid]').val();
           var cc = $('input[name=cc]').val();
           var pohx = $('input[name=pohx]').val();
           var lee = $('input[name=lee]').val();
           var pmhx = $('input[name=pmhx]').val();
           var pfohx = $('input[name=pfohx').val();
           //visual activity
           var ODunaided = $('input[name=ODunaided]').val();
           var ODpinhole = $('input[name=ODpinhole]').val();
           var ODnearva = $('input[name=ODnearva]').val();
           var OSunaided = $('input[name=OSunaided]').val();
           var OSpinhole = $('input[name=OSpinhole]').val();
           var OSnearva = $('input[name=OSnearva]').val();
           //LENSOMETRY
           var odsph = $('input[name=ODSPH]').val();
           var odcyl = $('input[name=ODCYL]').val();
           var odaxis = $('input[name=ODAXIS]').val();
           var odva = $('input[name=ODVA]').val();
           var ossph = $('input[name=OSSPH]').val();
           var oscyl = $('input[name=OSCYL]').val();
           var osaxis = $('input[name=OSAXIS]').val();
           var osva = $('input[name=OSVA]').val();
           var addsph = $('input[name=ADDSPH]').val();
           var addcyl = $('input[name=ADDCYL]').val();
           var addaxis = $('input[name=ADDAXIS]').val();
           var addva = $('input[name=ADDVA]').val();
           //AUTO-REFRACTION
           var arodsph = $('input[name=arodsph]').val();
           var arodcyl = $('input[name=arodcyl]').val();
           var arodaxis = $('input[name=arodaxis]').val();
           var arossph = $('input[name=arossph]').val();
           var aroscyl = $('input[name=aroscyl]').val();
           var arosaxis = $('input[name=arosaxis]').val();
           //RETINOSCOPE
           var rodsph = $('input[name=rodsph]').val();
           var rodcyl = $('input[name=rodcyl]').val();
           var rodaxis = $('input[name=rodaxis]').val();
           var rossph = $('input[name=rossph]').val();
           var roscyl = $('input[name=roscyl]').val();
           var rosaxis = $('input[name=rosaxis]').val();
           $.ajax({
                type:"POST",
                url: "vitalspush.php",
                data: {
                    "save_btn_post":  1,
                    "pid": pid,
                     "cc": cc,
                     "pohx": pohx,
                     "lee": lee,
                     "pmhx":pmhx,
                     "pfohx":pfohx,
                     //VISUAL ACTIVITY
                     "ODunaided": ODunaided,
                     "ODpinhole":ODpinhole,
                     "ODnearva":ODnearva,
                     "OSunaided": OSunaided,
                     "OSpinhole": OSpinhole,
                     "OSnearva":OSnearva,
                     //LENSOMETRY
                     "odsph": odsph,
                     "odcyl":odcyl,
                     "odaxis": odaxis,
                     "odva":odva,
                     "ossph": ossph,
                     "oscyl":oscyl,
                     "osaxis": osaxis,
                     "osva":osva,
                     "addsph": addsph,
                     "addcyl":addcyl,
                     "addaxis":addaxis,
                     "addva":addva,
                     //AUTO-REFRACTION
                     "arodsph":arodsph,
                     "arodcyl":arodcyl,
                     "arodaxis":arodaxis,
                     "arossph":arossph,
                     "aroscyl":aroscyl,
                     "arosaxis":arosaxis,
                     //RETINOSCOPE
                     "rodsph":rodsph,
                     "rodcyl":rodcyl,
                     "rodaxis":rodaxis,
                     "rossph":rossph,
                     "roscyl":roscyl,
                     "rosaxis":rosaxis,
                     
                },
                dataType: "text",
                success: function (response){
                    $('#status').html(response);
                    console.log("success");
                }
           })
        })
     })
 </script>
</body>
</html>

