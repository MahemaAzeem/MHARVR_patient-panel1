<?php include_once('includes/header.php');?>
              <div class="cardHeader">
                    <h2>Appointment</h2>
                </div>
      

<!--Patient ka table check karny ky liya dala tha-->
       <div class="patientdetails">
            <div class="patienttable">
                <div class="appointinfo">Appointment Information</div><br><br>
            <div class="line"></div>

               

 <form class="form-container"  onSubmit="return validation()" class="bg-light" style=" margin-top:25px">
                    <form action="action_page.php">

                     <label for="patientname" class="coachform form-row form-group col-md-6"><b>Patient Name</b></label>
                     <input type="text" id="patientname" name="patientname" placeholder="your  name.." class="form-control">

                     <label for="professionalist" class="coachform"><b>Mental Health Professional</b></label><input type="text" id="professionalist" name="professionalist" placeholder="Mental Health Professonalist" class="form-control">

                    <label for="country" class="coachform"><b>Disorder Type</b></label>
                       <select id="country" name="disordertype" class="form-control">
                <option value="Anxiety">Anxiety</option>
                <option value="Mood">Mood</option>
                <option value="Trauma">Trauma</option>
                </select>

                <label for="condition" class="coachform"><b>Condition</b></label>
                       <select id="country" name="condition" class="form-control">
                <option value="Mild">Mild</option>
                <option value="Moderate">Moderate</option>
                <option value="Severe">Severe</option>
                </select>

                 <label for="AppointmentDate" class="coachform"><b>Appointment Date</b></label><input type="date" id="AppointmentDate" name="Appointment Date" Appointment Date" class="form-control">

                 <label for="Appointmenttime" class="coachform"><b>Appointment Time</b></label><br><input type="time" id="AppointmentDate" name="AppointmentDate" Appointment Time" class="form-control" placeholder="Fees"><br>

                   <label for="Fees" class="coachform"><b>Fees</b></label><input type="text" id="Fees" name="Fees" placeholder="Fees" class="form-control">

                 <label for="Clinic Type" class="coachform"><b>Clinic Type</b></label>
                       <select id="country" name="Clinic Type" class="form-control">
                <option value="Virtual">Virtual</option>
                <option value="Physcial">Physical</option>
               
                </select>

 

                     
                   <a href="Payment.php">
                       
                        <span class="name"><button type="button" class="btn btn-info btn-lg" style="margin-top: 100px; margin-left: 700px;">Confirm</button></sp
                            an></span></a>

 

                     </form><br><br>
                    </div>

    <?php include_once('includes/footer.php');?>