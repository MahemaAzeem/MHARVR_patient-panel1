
 <?php include_once('includes/header.php');?>
    
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

 


<?php include_once('includes/header.php');?>
 