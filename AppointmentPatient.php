<?php 
include_once('includes/header.php');
include_once('includes/connection.php');
 
    if(isset($_POST['AppointmentBtn']))
    {
        $patientname        = (isset($_POST['patientname']))?$_POST['patientname']:"-";
        $professionalist    = (isset($_POST['professionalist']))?$_POST['professionalist']:"-";
        $disordertype       = (isset($_POST['disordertype']))?$_POST['disordertype']:"-";
        $condition          = (isset($_POST['condition']))?$_POST['condition']:"-";
        $appointment_Date   = (isset($_POST['Appointment_Date']))?$_POST['Appointment_Date']:"-";
        $appointmentTime    = (isset($_POST['AppointmentTime']))?$_POST['AppointmentTime']:"-";
        $fees               = (isset($_POST['Fees']))?$_POST['Fees']:"-";
        $clinic_Type        = (isset($_POST['Clinic_Type']))?$_POST['Clinic_Type']:"-";


        $InsertQuery = "INSERT INTO `mhrvr`.`patient_appointment` (`patient_name`,`mental_health_professional`,`disorder_type`,`condition`,`appointment_date`,`appointment_time`,`fees`,`clinic_type`)
                VALUES ('".$patientname."','".$professionalist."','".$disordertype."','".$condition."','".$appointment_Date."','".$appointmentTime."','".$_POST['Fees']."','".$clinic_Type."');";

        if (mysqli_query($conn, $InsertQuery)) 
        {
            echo("<script>location.href = 'AppointmentDetails.php?msg=New Appointment Added successfully';</script>");
        } else 
        {
            echo("<script>location.href = 'AppointmentDetails.php?msg=Error: ".$InsertQuery."<br>" . mysqli_error($conn)."';</script>");
        }
    }

    
?>


              <div class="cardHeader">
                    <h2>Appointment</h2>
                </div>
      

<!--Patient ka table check karny ky liya dala tha-->
       <div class="patientdetails">
            <div class="patienttable">
                <div class="appointinfo">Appointment Information</div><br><br>
            <div class="line"></div>
               

 <form class="form-container" action="AppointmentPatient.php" method="POST"  onSubmit="return validation()" class="bg-light" style=" margin-top:25px">
                  

                     <label for="patientname" class="coachform form-row form-group col-md-6"><b>Patient Name</b></label>
                     <input type="text" id="patientname" name="patientname" placeholder="your  name.." class="form-control" required>

                     <label for="professionalist" class="coachform"><b>Mental Health Professional</b></label>
                     <input type="text" id="professionalist" name="professionalist" placeholder="Mental Health Professonalist" class="form-control" required>

                <label for="country" class="coachform"><b>Disorder Type</b></label>
               <select id="country" name="disordertype" class="form-control" required>
                        <option value="Anxiety">Anxiety</option>
                        <option value="Mood">Mood</option>
                        <option value="Trauma">Trauma</option>
                </select>

                <label for="condition" class="coachform"><b>Condition</b></label>
               <select id="country" name="condition" class="form-control" required>
                    <option value="Mild">Mild</option>
                    <option value="Moderate">Moderate</option>
                    <option value="Severe">Severe</option>
                </select>

                 <label for="AppointmentDate" class="coachform"><b>Appointment Date</b></label>
                 <input type="date" id="AppointmentDate" name="Appointment Date" class="form-control" required>

                 <label for="Appointmenttime" class="coachform"><b>Appointment Time</b></label><br>
                 <input type="time" id="AppointmentTime" name="AppointmentTime" class="form-control" placeholder="Fees"  required><br>

                   <label for="Fees" class="coachform"><b>Fees</b></label>
                   <input type="text" id="Fees" name="Fees" placeholder="Fees" class="form-control" required>

                 <label for="Clinic Type" class="coachform"><b>Clinic Type</b></label>
                    <select id="country" name="Clinic Type" class="form-control" required>
                        <option value="Virtual">Virtual</option>
                        <option value="Physcial">Physical</option>
                       
                  </select>

 
                    <span class="name">
                        <input type="submit" class="btn btn-info btn-lg" style="margin-top: 100px; margin-left: 700px;" name="AppointmentBtn" value="Confirm">

                    </span>

 

                     </form><br><br>
                    </div>

    <?php include_once('includes/footer.php');?>