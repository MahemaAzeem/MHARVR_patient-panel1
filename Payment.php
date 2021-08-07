<?php 
include_once('includes/header.php');
include_once('includes/connection.php');
     
    if(isset($_POST['AppointmentBtn']))
    { 
        $patient_appointment_id    = (isset($_POST['patient_appointment_id']))?$_POST['patient_appointment_id']:"-";
        $country_id                = (isset($_POST['country']))?$_POST['country']:"-";
        $billingno                 = (isset($_POST['billingno']))?$_POST['billingno']:"-";
        $Cardholdername            = (isset($_POST['Cardholdername']))?$_POST['Cardholdername']:"-";
        $Cardno                    = (isset($_POST['Cardno']))?$_POST['Cardno']:"-";
        $Cardverificationcode      = (isset($_POST['Cardverificationcode']))?$_POST['Cardverificationcode']:"-"; 

        $InsertQuery = "INSERT INTO `mhrvr`.`patien_payment_details` (`patient_appointment_id`,`country_id`,`billing_no`,`card_holder_name`,`card_number`,`card_verfication_code`)
                        VALUES ('".$patient_appointment_id."','".$country_id."','".$billingno."','".$Cardholdername."','".$Cardno."','".$Cardverificationcode."');";
         
   
        if (mysqli_query($conn, $InsertQuery)) 
        { 
          $UpdateStatus = "UPDATE `mhrvr`.`patient_appointment`
                 SET   `bill_status` = 'paid'
                 WHERE `patient_appointment_Id` = '$patient_appointment_id';";
                 
            mysqli_query($conn, $UpdateStatus);
            echo("<script>location.href = 'AppointmentDetails.php?msg=Patient Bill Paid successfully';</script>");
        } else 
        {
            echo("<script>location.href = 'AppointmentDetails.php?msg=Error: ".$InsertQuery."<br>" . mysqli_error($conn)."';</script>");
        }
    }

    if ( isset($_GET['id']) && $_GET['id'] !='')
    { 

          $query = "SELECT * FROM `patient_appointment` AS PA WHERE PA.`patient_appointment_Id` ='".$_GET['id']."'";
          $result = $conn->query($query); 
          $Data = $result->fetch_assoc();  
    }
 ?>

              <div class="cardHeader">
                    <h1><b>Payment</b></h1><br><br><br><br>
                </div>
      

<!--Patient ka table check karny ky liya dala tha-->
       <div class="patientdetails">
            <div class="patienttable">

               <div class="appointinfo">Payment Details</div><br><b><br><br>
            <div class="line"></div> 
         
<form class="form-container" action="Payment.php" method="POST"  onSubmit="return validation()" class="bg-light" style=" margin-top:25px"> 
                     <input type="hidden" value="<?=isset($_GET['id'])?$_GET['id']:''?>" name="patient_appointment_id">

                     <label for="patientname" class="coachform form-row form-group col-md-6"><b>Patient Name</b></label>
                     <input type="text" id="patientname" value="<?=isset($Data)?$Data['patient_name']:''?>" disabled name="patientfirstname" placeholder="your  name.." class="form-control">

                    

                

                      <label for="professionalist" class="coachform"><b>Mental Health Professional </b></label>
                     <input type="text" id="professionalist" value="<?=isset($Data)?$Data['mental_health_professional']:''?>" disabled name="professionalist" placeholder="Mental Health Professonalist" class="form-control">

                      <label for="country" class="coachform"><b>Country</b></label>
                       <select id="country" name="country" class="form-control">

                         <?php

                            $getCountries = "SELECT `country_id`,`country_name` FROM `countries`";
                            $results = mysqli_query($conn, $getCountries);
                            if (mysqli_num_rows($results) > 0) 
                            {   
                                   while($row = mysqli_fetch_assoc($results)) 
                                  {
                                        echo "<option value='".$row['country_id']."'>".$row['country_name']."</option> ";
                                  }
                            } 
                         ?>
                            
                        </select>
 

                    <label for="appointmentdate" class="coachform"><b>Appointment Date </b></label>
                     <input type="date" id="appointmentdate" disabled value="<?=isset($Data)?$Data['appointment_date']:''?>" name="appointmentdate" placeholder="" class="form-control">

                      <label for="appointmenttime" class="coachform"><b>Appointment Time </b></label>
                     <input type="time" id="appointmenttime" disabled value="<?=isset($Data)?$Data['appointment_time']:''?>" name="appointmenttime" placeholder="" class="form-control"><br>

                     <label for="billingno" class="coachform"><b>Billing No </b></label>
                     <input type="text" id="billingno" required name="billingno" placeholder="Billing No" class="form-control">

                     <label for="Cardholdername" class="coachform"><b>Card Holder Name </b></label>
                     <input type="text" id="Cardholdername" required name="Cardholdername" placeholder="Card Holder Name.." class="form-control">

                     <label for="Cardno" class="coachform"><b>Card Number </b></label>
                     <input type="Number" id="Cardno" required name="Cardno" placeholder="Card No.." class="form-control"><br>

                    <label for="Cardverificationcode" class="coachform"><b>Card Verification Code </b></label>
                     <input type="text" id="Cardverificationcode" required name="Cardverificationcode" placeholder="Verification code.." class="form-control">

                     
                    <input type="submit" class="btn btn-info btn-lg" style="float: right;" name="AppointmentBtn" value="Pay">

                 
                   
  

                     </form><br><br>
                    </div>

   <?php include_once('includes/footer.php');?>