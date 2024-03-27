<style>
  * {
    font-family: "Montserrat", sans-serif;
    background-color: white;
  }
a {
  text-decoration: none;
}  
.navbar{
    /* display: flex; */
    justify-content: space-between;
}
.logo{
  margin-top: -5%;
}
.links{
    margin-right: 5%;
    font-family: "Montserrat", sans-serif;
    font-weight: 400;
    width: 40%;
    width:45%;
}
.links ul li{
    display: inline-block;
    list-style-type: none;
    margin-right: 10%;
    padding-top: 3%;

}
.container{
  display: flex;
  justify-content: space-between;
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
.statusbar{
  width: 15%;
  margin-left: 2%;
}
.statusbar div{
  margin-bottom: 20%;
}
hr{
  border: 1px solid #ccc;
  margin: 20px 0;
  margin-top: -4%;
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
.content{
 
}
.slb{
  text-align: center;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">s
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/docmain.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <title>Doctor's Page</title>
</head>
<body>
    <div class="navbar">
          <img class="logo" src="/HMS/hospital/images/IMG_2260.PNG.png" height="300px" width="300px">
          <h2>DOCTORS</h2>
        <div class="links">
            <ul>
                <li> New Patients</li>
                <li><a href="searchPatients.html">Records</a></li>
                <li>Invoice</li>
                <li>Inventory</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="statusbar">
           <div class="home">
             <img height="35px" width="35px" class="homepng" src="/HMS/hospital/images/house.png">
             <p>Home</p>
           </div>
           <!-- Vitals -->
           <div class="patients" id="vitals" >
             <img height="35px" width="35px" class="patientpng" src="/HMS/hospital/icons/patient(1).png">
             <p>Vitals</p>
           </div>
           <!-- Treatment Plan -->
           <div class="app">
             <img height="35px" width="35px" class="apppng" src="/HMS/hospital/icons/therapy.png">
             <p>Treatment Plan</p>
           </div>
           <!-- Medical Records -->
           <div class="billing">
             <img height="35px" width="35px" class="billingpng" src="/HMS/hospital/icons/search-interface-symbol.png">
             <p>Medical Records</p>
           </div>
           <div class="button">
             <input type="submit" class="patientBtn" value="New Patient" onclick="window.location.href='/HMS/hospital/newPatient.html';">
           </div>
           <div class="button">
            <input type="submit" class="patientBtn" value="New Patient" onclick="window.location.href='/HMS/hospital/newPatient.html';">
           </div>
          </div>
           <div class="content">
               <form method="POST">
                  <table>
                    <td>Slit Lamp bimicroscope: </td>
                    <td><textarea></textarea></td>
                  </table>
               </form>
           </div>
        </div>

        <script>
             $(document).ready(function() {
                 $('#vitals').click(function(e) {
                    e.preventDefault();
                    window.location.href = "vitals.php"
                 })
             })
        </script>
</body>
</html>