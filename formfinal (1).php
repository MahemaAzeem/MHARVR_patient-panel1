

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>MHARVR_PatientDashboard</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
   
    <!-- Our Custom CSS --
    <link rel="stylesheet" href="style.css">-->

    <!--Font Awesome updated version link-->
    <script src="https://kit.fontawesome.com/a1510cf044.js" crossorigin="anonymous"></script>

   <!-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">

     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>-->

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<style>
@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";


*{
   
    box-sizing: border-box;
    font-family: Verdana, sans-serif;
}

body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}

a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}


/*logo and MHARVR styling on the sidebar*/
.sidebar-header a .logo
{
    position: relative;
    height: 60px;
    min-width: 50px;
    line-height: 60px;
    padding:2px 0px;
    margin-top: -20px;
    margin-left: -8px;
    display:inline;
    vertical-align: middle;
}

.sidebar-header a .titlelogo
{
    position: relative;
    display: inline-block;
    padding: 20px 10px;
    margin-bottom: 30px;
    height: 30px;
    line-height: 0px;
    white-space: nowrap;
    font-size: 15px;
    vertical-align: middle;
    color: #fff;
    font-weight: 500;
    font-size: 2em;
}
/*logo and MHARVR styling on the sidebar finish*/

.navbar {
    /*padding: 5px 10px;*/
    background: #fff;
    width: 103%;
    height: 80px;
    border: none;
    border-radius: 0;
    margin-bottom: 70px;
    margin-top: -20px;
    margin-left: -20px;
    margin-right: 20px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
    margin-bottom: 10px;
    line-height: 50px;
}


/* -------------------------------------------------------------
    SIDEBAR STYLE which contains dashboard, patient details etc
---------------------------------------------------------------- */

.wrapper 
{
    display: flex;
    width: 100%;
    align-items: stretch;
}

/*Sidebar ki styling*/
#sidebar 
{
    min-width: 340px;  /*250*/
    /*max-width: 250px;*/
    background: #6A1767;;
    color: #fff;
    transition: all 0.3s;
    position: relative;
}

#sidebar.active 
{
    margin-left: -340px;
}

#sidebar .sidebar-header 
{
    padding: 20px;
    background: #6A1767;;
}

#sidebar ul 
{
    padding: -10px 10px;
    list-style: none;
    margin-left: -30px;
    font-size: 1em;
}

#sidebar ul p 
{
    color: #fff;
    padding: 10px;
}

#sidebar ul li a 
{
    padding: 20px;
    font-size: 100%;
    display: block;
    vertical-align: middle;
    cursor: pointer;
    margin-left: -10px;
}
    
#sidebar ul li a:hover {
    color: #ffff;
    background: #03a9f4;
    border-radius: 90px;
    /*margin-left: auto;*/
    margin-right: 6px;
}

#sidebar ul li.active>a,
a[aria-expanded="true"] {
    color: #fff;
    background: #03a9f4; /*#6d7fcc;*/
    border-radius: 90px; /*Round corner hover on the sidebar links*/ 
    margin-right: 6px;
}

a[data-toggle="collapse"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}


/*Dropdown styling*/

ul ul a {
    font-size: 1em !important;
    padding-left: 70px !important;
    background: #6A1767;  #03a9f4; /*#6d7fcc;*/

}

#sidebar ul ul li .TD a:hover {
    color: #ffff;
    /*background: #03a9f4;
    /*margin-left: auto;*/
    margin-right: 6px;
}
/*Search bar styling finish*/

.search
{
    position: relative;
    width: 210px;
    /*margin: 10px 800px;*/
    margin-left: 1140px;
    margin-top: -50px;
    margin-bottom: 50px;
    grid-template-columns: repeat(4, 1fr);
    display: flex;
}

.search label
{
    position: relative;
    width: 100%;
}

.search label input
{
    width: 100%;
    height: 40px;
    border-radius: 20px;
    padding: 5px 20px;
    padding-left: 35px;
    outline: none;
    border: 1px soid rgba(0,0,0,0.2);
}

.search label .fa
{
    position: absolute;
    left: 20px;
    margin-top: -100%;

}

.mhlogo img  /*MHARVR logo styling which is on the navbar*/
{
    position: relative;
    width: 60px;
    margin-left: 300px;
    height: 60px;
    line-height: 50px;
    padding: 2px 0px;
    margin-top: -80px;
    overflow: hidden;
    cursor: pointer;
    object-fit: cover;
    float: left;
    align-items: center;
    vertical-align: middle;
}

.mhlogo a 
{
  text-decoration: none;
  color: black;
  display: flex;
  align-items: center;
  margin-right: 380px;
}

.user
{
    position: relative;
    min-width: 20px;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    overflow: hidden;
    cursor: pointer;
    line-height: 50px;
}

#navbar .user .admin        /*Admin ki heading ki styling*/
{
    color: black;
    font-weight: 500;
    font-size: 2em;
    display: flex;
    align-items: center;
    margin-left: -200px;

}

.navbar .user img   /*Admin's image(icon) ki styling*/
{
    position: relative;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    line-height: 50px;
}

.user a h3   /*Admin ki heading ki styling*/
{
  text-decoration: none;
  color: black;
  display: flex;
  align-items: center;
  margin-left: -200px;
}

.navbar-brand 
{
   margin-right: -50px;
   text-align: center;
   padding: 10 !important;
   margin: 0;
   line-height: 50px;

}

#sidebar-header ul li a .icon
{
 position: relative;
 display: block;
 min-width: 60px;
 height: 60px;
 line-height: 60px;
 text-align: center;
 font-size: 15px;
 vertical-align: middle;
 cursor: pointer;
}

/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

#content 
{
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
}
.myDiv {
  
  background-color: #ffffff;
  text-align: center;
  width: 92%;
  height: 2670px;
  margin-left: 40px;


  box-shadow:
  0 2.8px 2.2px rgba(0, 0, 0, 0.034),
  0 6.7px 5.3px rgba(0, 0, 0, 0.048),
  0 12.5px 10px rgba(0, 0, 0, 0.06),
  0 22.3px 17.9px rgba(0, 0, 0, 0.072),
  0 41.8px 33.4px rgba(0, 0, 0, 0.086),
  0 100px 80px rgba(0, 0, 0, 0.12)
;

  margin: 30px auto;
  background: white;
  border-radius: 5px;
}




.container {
  display: block;
  font-family: Montserrat;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 18px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  text-align: left;
}

/* Hide the browser's default checkbox */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 0;
  height: 20px;
  width: 20px;
  background-color: #eee;

}
/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #c90000;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
  left: 7px;
  top: 2px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 2px 2px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}






/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */

@media (max-width: 768px) {
    #sidebar {
        margin-left: -310px;  /*250px*/
    }
    #sidebar.active {
        margin-left: 0;
    }
    #sidebarCollapse span {
        display: none;
    }

    .navbar
    {
        /*width: 100%;*/
        left: 0;
        width: 100%;
    }

    .navbar-brand
    {
        position: fixed;
        
    }

    
        grid-template-columns: repeat(1,1fr); 
    .cardHeader h2
    {
        font-weight: 600;
        font-size: 18px;
    }

      .cardBox
    {
        grid-template-columns: repeat(1,1fr); 
    }

    .patientdetails .patienttable
    {
        overflow-x: auto;
    }

    .patientdetails .patienttable table
    {
        width: 600px;
    }

    .navigation .active
    {
        width: 100%;
        left: 0;
    }

    .toggle .active
    {
        position: fixed;
        z-index: 10000;
        right: 0;
        left: initial;
    }

    .toggle .active::before
    {
        color: #ffff;
    }

    .main, .main .active
    {
        width: 100%;
        /*left: 0;*/
    }
}



@media (max-width: 768px)
{
    .details
    {
        grid-template-columns: repeat(1,1fr); 
    }

    .cardHeader h2
    {
        font-weight: 600;
        font-size: 18px;
    }
}

@media (max-width: 768px)
{
    .cardBox
    {
        grid-template-columns: repeat(1,1fr); 
    }

    .details .recentOrders
    {
        overflow-x: auto;
    }

    .details .recentOrders table
    {
        width: 600px;
    }

    .navigation .active
    {
        width: 100%;
        left: 0;
    }

    .toggle .active
    {
        position: fixed;
        z-index: 10000;
        right: 0;
        left: initial;
    }

    .toggle .active::before
    {
        color: #ffff;
    }

    .main, .main .active
    {
        width: 100%;
        left: 0;
    }
}
option {
  margin: 0.1em;
}

</style>

<body>
   <div class="wrapper">
        <!-- Yahan sy Sidebar start hai  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="#"><img src="MHARVR_LOGO.png" class="logo"><h2 class="titlelogo">MHARVR</h2></a>
            </div>

             <ul>
                    <li > <!--Ye wala code kaam kar raha hai for linking.USE THIS CODE ONLY-->
                    <a href="Mharvrpatientdashboard.php"> <!--data-toggle="collapse" aria-expanded="false">-->
                    <span class="icon"><i class="fas fa-tachometer-alt"></i></i></span>
                    <span class="title">Dashboard</span></a>
                </li>

                 <li class="active"> <!--Ye wala code kaam kar raha hai for linking.USE THIS CODE ONLY-->
                    <a href="formfinal (1).php">
                    <span class="icon"><i class="fas fa-file-alt" aria-hidden="true"></i></i></span>
                    <span class="title">Intake Form</span></a>
                </li>

                   <li> <!--Ye wala code kaam kar raha hai for linking.USE THIS CODE ONLY-->
                    <a href="mentalHealthProfessional.php">
                    <span class="icon"><i class="fa fa-user-md" aria-hidden="true"></i></i></span>
                    <span class="title">Mental Health Professional </span></a>
                </li>

                  <li> <!--Ye wala code kaam kar raha hai for linking.USE THIS CODE ONLY-->
                    <a href="Appointmentpatient.php">
                    <span class="icon"><i class="fa fa-calendar" aria-hidden="true"></i></i></span>
                    <span class="title">Appointment</span></a>
                </li>

                     <li> <!--Ye wala code kaam kar raha hai for linking.USE THIS CODE ONLY-->
                     <a href="activity.php">
                    <span class="icon"><i class="fa fa-list-alt" aria-hidden="true"></i></i></span>
                    <span class="title">Activity-to-do</span></a>
                </li>

                  <li> <!--Ye wala code kaam kar raha hai for linking.USE THIS CODE ONLY-->
                    <a href="#">
                    <span class="icon"><i class="fa fa-cog" aria-hidden="true"></i></i></span>
                    <span class="title">Settings</span></a>
                </li>

                   <li> <!--Ye wala code kaam kar raha hai for linking.USE THIS CODE ONLY-->
                    <a href="#">
                    <span class="icon"><i class="fas fa-sign-out-alt" aria-hidden="true"></i></i></span>
                    <span class="title">Sign Out</span></a>
                </li>
            </ul>
           
            </nav>
            <!--Yahn sidebar ki coding finish hai-->

<!--Navbar coding starts from here-->

<div id="content">
<nav class="navbar navbar-light" style="background-color: #ffff";>
     <button type="button" id="sidebarCollapse" class="btn btn-info"> <i class="fas fa-align-left"></i>
                <span></span>
            </button>
  <a class="navbar-brand" href="#">
    <img src="MHARVR_LOGO.png" width="50" height="50" class="d-inline-block align-top" alt="">Mental Healthcare Application using AR and VR Technology
  </a>

  <div class="user">
    <a href="PatientProfil.php">
    <img src="download.png"></a>
    <span class="admin">Admin</span></a>
</div>
</nav>


   <!-- <div class="search">
        <label> 
            <input type="text" placeholder= "search here">
            <!-<i class="fa fa-search" aria-hidden="true"></i>--
                </label>
            </div>-->

<div class="main">
 
   

       
      

      </div>
    
<div class="welcome">
            <h1><b>Intake Form</b></h1>
        </div>
      
<div class=" myDiv">
  <h2 style="text-align: left; font-size: 20px; margin-left: 35px; padding-top: 20PX; color: #6A1767; font-weight: bold;">Personal Information</h2><br>

  <form>
    <div class="form-row" >
    <div class="form-group col-md-3 " style="width: 31%; margin-left: 55px;">
      <label for="inputEmail4" style="margin-right: 60%;"> First Name</label>
      <input type="firstname" class="form-control" id="firstname" placeholder="" style="background-color: #E5E5E5 ">
    </div>
    <div class="form-group col-md-3 " style="width: 31%; ">
      <label for="inputEmail4" style="margin-right: 60%;">Last Name</label>
      <input type="lastname" class="form-control" id="lastname" placeholder="" style="background-color: #E5E5E5 ">
    </div>
 
  
    <div class="form-group col-md-3"style="width: 31%">
      <label for="inputState" style="margin-right: 82%;">Gender</label>
      <select id="inputState" class="form-control"  style="background-color: #E5E5E5 ">
        <option selected>Choose...</option>
        <option>Male</option>
          <option>Female</option>
      </select>
    </div>

     <div class="form-row" >
    <div class="form-group col-md-9 " style="width: 31%; margin-left: 60px;">
      <label for="inputEmail4" style="margin-right: 84%;"> Email Address</label>
      <input type="email" class="form-control" id="email" placeholder="" style="background-color: #E5E5E5 ">
    </div>
     <div class="form-row" >
    <div class="form-group  " style="width: 36%; margin-left: 70px;">
      <label for="inputEmail4" style="margin-right: 73%;"> Contact no.</label>
      <input type="contact" class="form-control" id="Contact" placeholder="" style="background-color: #E5E5E5 ">
    </div>
    <div class="form-group " style="width: 36%; margin-left: 1%" >
      <label for="inputEmail4" style="margin-right: 57%;">Emergency Contact</label>
      <input type="e-contact" class="form-control" id="e-contact" placeholder="" style="background-color: #E5E5E5 ">
    </div>
     <div class="form-row" >
    <div class="form-group  " style="width: 36%; margin-left: 70px;">
      <label for="inputEmail4" style="margin-right: 78%;"> Address</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="" style="background-color: #E5E5E5 ">
    </div>
    <div class="form-group " style="width: 36%; margin-left: 1%" >
      <label for="inputEmail4" style="margin-right: 88%;">City</label>
      <input type="City" class="form-control" id="City" placeholder="" style="background-color: #E5E5E5 ">
    </div>
 
   
    <div class="form-group col-md-3 " style="width: 31%; margin-left: 50px;">
    
       <form action="/action_page.php" style="outline: none;">
       <label for="inputEmail4" style="margin-right: 69%;">D.O.B</label>
  <input type="date" id="birthday" name="birthday" style="background-color: #E5E5E5 ;border: hidden; margin-left: 7% ; width: 96%; height: 51%">
  
</form>
    </div>
    <div class="form-group col-md-3 " style="width: 31%; margin-left: 7px;">
     <label for="inputState" style="margin-right: 56%;">Qualification</label>
      <select id="qualification" class="form-control"  style="background-color: #E5E5E5 ;">
        <option selected>Choose...</option>
        <option>No formal education</option>
          <option>Primary education</option>
           <option>Secondary education</option>
           <option>Bachelor's degree</option>
            <option>Master's degree</option>
             <option>Doctorate or higher</option>
              <option>General education diploma</option>
              <option>Vocational qualification</option>
      </select>
    </div>
    <div class="form-group col-md-5 " style="width: 31%; ">
    <label for="inputState" style="margin-right: 82%;">Occupation</label>
     <select class="form-control dropdown " id="occupation" name="occupation" style=" width: 58%;background-color: #E5E5E5 ">
    <option value="" selected="selected" disabled="disabled">Choose--</option>
    <optgroup label="Healthcare Practitioners and Technical Occupations:">
      <option value="1">-  Chiropractor</option>
      <option value="2">-  Dentist</option>
      <option value="3">-  Dietitian or Nutritionist</option>
      <option value="4">-  Optometrist</option>
      <option value="5">-  Pharmacist</option>
      <option value="6">-  Physician</option>
      <option value="7">-  Physician Assistant</option>
      <option value="8">-  Podiatrist</option>
      <option value="9">-  Registered Nurse</option>
      <option value="10">-  Therapist</option>
      <option value="11">-  Veterinarian</option>
      <option value="12">-  Health Technologist or Technician</option>
      <option value="13">-  Other Healthcare Practitioners and Technical Occupation</option>
    </optgroup>
    <optgroup label="Healthcare Support Occupations:">
      <option value="14">-  Nursing, Psychiatric, or Home Health Aide</option>
      <option value="15">-  Occupational and Physical Therapist Assistant or Aide</option>
      <option value="16">-  Other Healthcare Support Occupation</option>
    </optgroup>
    <optgroup label="Business, Executive, Management, and Financial Occupations:">
      <option value="17">-  Chief Executive</option>
      <option value="18">-  General and Operations Manager</option>
      <option value="19">-  Advertising, Marketing, Promotions, Public Relations, and Sales Manager</option>
      <option value="20">-  Operations Specialties Manager (e.g., IT or HR Manager)</option>
      <option value="21">-  Construction Manager</option>
      <option value="22">-  Engineering Manager</option>
      <option value="23">-  Accountant, Auditor</option>
      <option value="24">-  Business Operations or Financial Specialist</option>
      <option value="25">-  Business Owner</option>
      <option value="26">-  Other Business, Executive, Management, Financial Occupation</option>
    </optgroup>
    <optgroup label="Architecture and Engineering Occupations:">
      <option value="27">-  Architect, Surveyor, or Cartographer</option>
      <option value="28">-  Engineer</option>
      <option value="29">-  Other Architecture and Engineering Occupation</option>
    </optgroup>
    <optgroup label="Education, Training, and Library Occupations:">
      <option value="30">-  Postsecondary Teacher (e.g., College Professor)</option>
      <option value="31">-  Primary, Secondary, or Special Education School Teacher</option>
      <option value="32">-  Other Teacher or Instructor</option>
      <option value="33">-  Other Education, Training, and Library Occupation</option>
    </optgroup>
    <optgroup label="Other Professional Occupations:">
      <option value="34">-  Arts, Design, Entertainment, Sports, and Media Occupations</option>
      <option value="35">-  Computer Specialist, Mathematical Science</option>
      <option value="36">-  Counselor, Social Worker, or Other Community and Social Service Specialist</option>
      <option value="37">-  Lawyer, Judge</option>
      <option value="38">-  Life Scientist (e.g., Animal, Food, Soil, or Biological Scientist, Zoologist)</option>
      <option value="39">-  Physical Scientist (e.g., Astronomer, Physicist, Chemist, Hydrologist)</option>
      <option value="40">-  Religious Worker (e.g., Clergy, Director of Religious Activities or Education)</option>
      <option value="41">-  Social Scientist and Related Worker</option>
      <option value="42">-  Other Professional Occupation</option>
    </optgroup>
    <optgroup label="Office and Administrative Support Occupations:">
      <option value="43">-  Supervisor of Administrative Support Workers</option>
      <option value="44">-  Financial Clerk</option>
      <option value="45">-  Secretary or Administrative Assistant</option>
      <option value="46">-  Material Recording, Scheduling, and Dispatching Worker</option>
      <option value="47">-  Other Office and Administrative Support Occupation</option>
    </optgroup>
    <optgroup label="Services Occupations:">
      <option value="48">-  Protective Service (e.g., Fire Fighting, Police Officer, Correctional Officer)</option>
      <option value="49">-  Chef or Head Cook</option>
      <option value="50">-  Cook or Food Preparation Worker</option>
      <option value="51">-  Food and Beverage Serving Worker (e.g., Bartender, Waiter, Waitress)</option>
      <option value="52">-  Building and Grounds Cleaning and Maintenance</option>
      <option value="53">-  Personal Care and Service (e.g., Hairdresser, Flight Attendant, Concierge)</option>
      <option value="54">-  Sales Supervisor, Retail Sales</option>
      <option value="55">-  Retail Sales Worker</option>
      <option value="56">-  Insurance Sales Agent</option>
      <option value="57">-  Sales Representative</option>
      <option value="58">-  Real Estate Sales Agent</option>
      <option value="59">-  Other Services Occupation</option>
    </optgroup>
    <optgroup label="Agriculture, Maintenance, Repair, and Skilled Crafts Occupations:">
      <option value="60">-  Construction and Extraction (e.g., Construction Laborer, Electrician)</option>
      <option value="61">-  Farming, Fishing, and Forestry</option>
      <option value="62">-  Installation, Maintenance, and Repair</option>
      <option value="63">-  Production Occupations</option>
      <option value="64">-  Other Agriculture, Maintenance, Repair, and Skilled Crafts Occupation</option>
    </optgroup>
    <optgroup label="Transportation Occupations:">
      <option value="65">-  Aircraft Pilot or Flight Engineer</option>
      <option value="66">-  Motor Vehicle Operator (e.g., Ambulance, Bus, Taxi, or Truck Driver)</option>
      <option value="67">-  Other Transportation Occupation</option>
    </optgroup>
    <optgroup label="Other Occupations:">
      <option value="68">-  Military</option>
      <option value="69">-  Homemaker</option>
      <option value="70">-  Other Occupation</option>
      <option value="71">-  Don't Know</option>
      <option value="72">-  Not Applicable</option>
    </optgroup>
  </select>
</fieldset>
    
    </div>
       </div><div>
   




<h2 style="text-align: left; font-size: 20px; margin-left: 60px; padding-top: 20PX; color: #6A1767; font-weight: bold;">Demographic Information</h2><br>
 <div class="form-row" style="margin-left: 50px; ">
   
 <div class="form-group col-md-4" style="width: 10%; margin-left: 4%">
      <label for="inputState" style="margin-right: 37%;">Marital status</label>
      <select id="marital" class="form-control"  style="background-color: #E5E5E5 ">
        <option selected>Choose...</option>
        <option>Single</option>
          <option>Married</option>
            <option>Partner</option>
              <option>Widowed</option>
                <option>Seperated</option>
      </select>
    </div>
 
  
    <div class="form-group col-md-4">
      <label for="inputState" style="margin-right: 26%;">Living situation</label>
      <select id="livingsitaution" class="form-control"  style="background-color: #E5E5E5 ">
        <option selected>Choose...</option>
        <option>Alone</option>
          <option>With spouse</option>
            <option>With parent(s)</option>
              <option>With childrens</option>
                <option>With friend(s)</option>
      </select>
    </div></div><br>

 <h2 style=" font-size: 20px;margin-right:43%;color: #6A1767; font-weight: bold;">General Information</h2><br>
    







    <label style="padding-right: 48%">Current Symptoms</label><br>


<br>
  <div class = "container">
  <div class="row">
    <div class="col-12" >
      
    </div>
  </div>
 
</div>
   <div class="row" >
        <div class="col-md-4"style="margin-left: 20%"> 
    
  
          <label class="container">Avoidance
            <input type="checkbox" checked="checked">
            <span class="checkmark"></span>
          </label>
       
          <label class="container">Anxiety attack
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
      
          <label class="container">Concentartion
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <label class="container">Crying spells
            <input type="checkbox" >
            <span class="checkmark"></span>
          </label>
          <label class="container">Decrease need for sleep
            <input type="checkbox" >
            <span class="checkmark"></span>
          </label>
          <label class="container">Excessive energy
            <input type="checkbox" >
            <span class="checkmark"></span>
          </label>
          <label class="container">Depressed mood
            <input type="checkbox" >
            <span class="checkmark"></span>
          </label>
         <label class="container">Excessive guilt
            <input type="checkbox" >
            <span class="checkmark"></span>
          </label>
          <label class="container">Excessive worry
            <input type="checkbox" >
            <span class="checkmark"></span>
          </label> 
          <label class="container">Fatigue
            <input type="checkbox" >
            <span class="checkmark"></span>
          </label> 
</div>
     <div class="row" >
        <div class="col-md-12">
           <label class="container">Hallucination
            <input type="checkbox" >
            <span class="checkmark"></span>
          </label>
       
          <label class="container">Impulsivity
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
      
          <label class="container" ">Increased irritability
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <label class="container">Increased risky behaviour
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <label class="container">Loss of interest
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <label class="container">Racing thoughts
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <label class="container">Sleep pattern distubance
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <label class="container">Suspisiousness
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <label class="container">Unable to enjoy activities
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <label class="container">Other
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
       
        </div>
    </div>
     

</div>
<br>


 <p style="margin-left:13%; text-align: left; font-weight: bold;">Have you ever had feelings or thoughts that you didn't want to live?
</p>
</p>
<div class="form-check" style="margin-right: 55%">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
  Yes
  </label>
</div>
<div class="form-check"style="margin-right: 56%">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    No
  </label>
</div>


 <p style="margin-left:13%; text-align: left;font-weight: bold;">Do you currently feel that you don't want to live?
</p>
<div class="form-check" style="margin-right: 55%">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
  Yes
  </label>
</div>
<div class="form-check"style="margin-right: 56%">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    No
  </label>
</div>
  <p style=" text-align: left; margin-left:13%; font-weight: bold;">When was the last time you had thoughts of dying?</p>
 <div class="form-group col-md-4 " style=" margin-left: 90px; ">
     
       <div class="col-xs-6" style="margin-left: 8%;background-color: #E5E5E5 ">
  <select class="form-control" name="select1" id="select1" style="background-color: #E5E5E5">
    <option value="1">Days ago</option>
    <option value="2">Month ago</option>
    <option value="3">Year ago</option>
  
  </select>
</div>
<div class="col-xs-6" style="margin-left: 8%;background-color: #E5E5E5 ">
  <select class="form-control" name="select2" id="select2"style="background-color: #E5E5E5">
    <option value="1"> 1 Day </option>
    <option value="1">2 Days</option>
    <option value="1">3 Days</option>
    <option value="1">4 Days</option>
    <option value="1">More than Five Days</option>
    <option value="1">More than Ten Days</option>
    <option value="1">More than 20 Days</option>
    <option value="2">1 Month </option>
    <option value="2">More than Month</option>
      <option value="3"> 1 Year</option>
    <option value="3">More than a Year</option>
</select>
</div>
    
    </div>

<h2 style="text-align: left; font-size: 20px; margin-left: 50px; padding-top: 20PX; color: #6A1767; font-weight: bold;">Family Psychiatrist History:</h2>
<br>



 <p style="margin-right: -100px;font-weight: bold;">Has anyone in your family been diagnosed with or treated for:</p><br>

<div class="row" >
        <div class="col-md-4"style="margin-left: 18%"> 
    
  
          <label class="container">Acute stress
            <input type="checkbox" checked="checked">
            <span class="checkmark"></span>
          </label>
       
          <label class="container">Alcohol abuse
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
      
          <label class="container">Bipolar disorder
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <label class="container">Panic disorder
            <input type="checkbox" >
            <span class="checkmark"></span>
          </label>
          <label class="container">Major depression
            <input type="checkbox" >
            <span class="checkmark"></span>
          </label>
          <label class="container">Suicide
            <input type="checkbox" >
            <span class="checkmark"></span>
          </label>

</div>
     <div class="row" >
        <div class="col-md-12">
           <label class="container">Generalized anxiety disorder
            <input type="checkbox" >
            <span class="checkmark"></span>
          </label>
       
          <label class="container">Social anxiety disorder
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
      
          <label class="container" ">Post traumatic diorder
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <label class="container">Obsessive compulsive disorder
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <label class="container">Persistent depression diorder
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <label class="container">Other
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
         
       
        </div>
    </div>
    <br><br><br>
     

</div>    <br><br><br><button type="submit" class="btn btn-default" style="width: 25%; background:#6A1767; color: white;border-radius: 15px; margin-right: 38% ">Submit</button>

</div>


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


<!--Script used for toggling the sidebar-->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });


        //Reference: https://jsfiddle.net/fwv18zo1/
var $select1 = $( '#select1' ),
    $select2 = $( '#select2' ),
    $options = $select2.find( 'option' );
    
$select1.on( 'change', function() {
  $select2.html( $options.filter( '[value="' + this.value + '"]' ) );
} ).trigger( 'change' );
    </script>

</body>

</html>