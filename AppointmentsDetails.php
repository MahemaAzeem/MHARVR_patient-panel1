
 
    <?php include_once('includes/header.php');?>

              <div class="cardHeader">
                    <h2>Appointment Details</h2>
                </div>

      

<!--Appointment ka table-->
       <div class="patientdetails">

            <div class="patienttable">

                   <!-- <a href="#" class="btn">Add new patient</a>-->

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
                           
                            <!--<td></td>-->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Farhan Majeed</td>
                            <td>Qasim Shah (Coach)</td>
                            <td>Anxiety</td>
                            <td>Mild</td>
                            <td>26-06-2021</td>
                            <td>10:00 AM - 11:00 AM</td>
                            <td>500 PKR</td>
                            <td>Virtual</td>
                            <td><button type="button"class="btn btn-success">Booked</button>
                            
                            <!--<button type="button" class="btn btn-danger">Delete</button>--></td>
                            <!--<td><span class="status delivered">Booked</td>-->
                        </tr>

                        <tr>
                            <td>02</td>
                            <td>Fatima Ahmed</td>
                            <td>Qasim Shah (Coach)</td>
                            <td>Mood Disorder</td>
                            <td>Mild</td>
                            <td>13-08-2021</td>
                            <td>11:00 AM - 12:00 PM</td>
                            <td>500 PKR</td>
                            <td>Virtual</td>
                            <td><button type="button"class="btn btn-success">Booked</button>
                            
                            <!--<button type="button" class="btn btn-danger">Delete</button>--></td>
                            <!--<td><span class="status delivered">Booked</td>-->
                        </tr>


                      
                        
                    </tbody>
                     <a href="AppointmentPatient.php">
                       
                        <span class="name"><button type="button" class="btn btn-info btn-lg" style="margin-top: 100px; margin-left: 1000px;">Book An Appointment</button></span></a>

                     </span>
                 </table>
             </div>
         </div>
     </div>



     <?php include_once('includes/footer.php');?>