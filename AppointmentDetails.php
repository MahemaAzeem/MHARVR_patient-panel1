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
                            <td>Bill Status</td>
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
                                              `bill_status`
                                            FROM `mhrvr`.`patient_appointment`
                                            LIMIT 0, 1000;";
                            $results = mysqli_query($conn, $SelectQuery);
                            $sHtml = '';
                            if (mysqli_num_rows($results) > 0) 
                            {   
                                 $sHtml = '';
                                  while($row = mysqli_fetch_assoc($results)) 
                                  {
                                     $sHtml .= '<tr><td>'. $row["patient_appointment_Id"].'</td>';
                                     $sHtml .='<td>'.$row["patient_name"].'</td>';
                                     $sHtml .='<td>'.$row["mental_health_professional"].'</td>';
                                     $sHtml .='<td>'.$row["disorder_type"].'</td>';
                                     $sHtml .='<td>'.$row["condition"].'</td>';
                                     $sHtml .='<td>'.$row["appointment_date"].'</td>';
                                     $sHtml .='<td>'.$row["appointment_time"].'</td>';
                                     $sHtml .='<td>'.$row["fees"].'</td>';
                                     $sHtml .='<td>'.$row["bill_status"].'</td>';
                                     $sHtml .='<td>'.$row["clinic_type"].'</td>';

                                     if($row["bill_status"] =="unpaid")
                                     {
                                         $sHtml .='<td><a href="Payment.php?id='.$row["patient_appointment_Id"].'" style="color: blue;">Pay Bill</a></td></tr>'; 
                                     }else
                                     {
                                         $sHtml .='<td>Booked</td></tr>'; 
                                     }
                                    
                                  }
                            } 
                            else 
                            {
                                $sHtml = "<tr><td>Records Not Found</td></tr>";
                              
                            }
                            print( $sHtml);
                        ?>
                    </tbody>
                 </table>
             </div>
         </div>
     </div>
<?php include_once('includes/footer.php');?>