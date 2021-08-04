<?php 
include_once('includes/header.php');
include_once('includes/connection.php');

   if ( isset($_GET['msg']) && $_GET['msg'] !='')
    {
         echo $_GET['msg'];
    }
 ?>


        <h2>Appointment Details</h2>

           <span> <a href="AppointmentPatient.php" style="float: right;"><button  class="btn btn-info">Book An Appointment</button></a></span><br>
       <div class="patientdetails" style="width:100%">
      
            <div class="patienttable" style="overflow: scroll;overflow: auto;">
                  
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>Appointment ID</td>
                            <td>Patient Name</td>
                            <td>MH Professional Name</td>
                            <td>Disorder Type</td>
                            <td>Condition</td>
                            <td>Appointment Date</td>
                            <td>Appointment Time</td>
                            <td>Fees</td>
                            <td>Clinic Type</td>
                            <td>Appointment Status</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                         $SelectQuery = "SELECT
                                              `patient_appointment_Id`,
                                              `patient_name`,
                                              `mental_health_professional`,
                                              `disorder_type`,
                                              `condition`,
                                              `appointment_date`,
                                              `appointment_time`,
                                              `fees`,
                                              `clinic_type`,
                                              `appointment_status`
                                            FROM `mhrvr`.`patient_appointment`
                                            LIMIT 0, 1000;";
                            $results = mysqli_query($conn, $SelectQuery);

                            if (mysqli_num_rows($results) > 0) 
                            {
                                  while($row = mysqli_fetch_assoc($results)) 
                                  {
                                        echo "<tr><td>" . $row["patient_appointment_Id"]. "</td>
                                        <td>" . $row["patient_name"]. "</td>
                                        <td>" . $row["mental_health_professional"]. "</td>
                                        <td>" . $row["disorder_type"]. "</td>
                                        <td>" . $row["condition"]. "</td>
                                        <td>" . $row["appointment_date"]. "</td>
                                        <td>" . $row["appointment_time"]. "</td>
                                        <td>" . $row["fees"]. " PKR</td>
                                        <td>" . $row["clinic_type"]. "</td>
                                        <td>" . $row["appointment_status"]. "</td></tr>";
                                  }
                            } 
                            else 
                            {
                              echo "<tr><td>Records Not Found</td></tr>";
                            }
                        ?>
                    </tbody>
                 </table>
             </div>
         </div>
     </div>
<?php include_once('includes/footer.php');?>