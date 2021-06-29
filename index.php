<?php include_once('includes/header.php');?>

   <!-- <div class="search">
        <label> 
            <input type="text" placeholder= "search here">
            <!-<i class="fa fa-search" aria-hidden="true"></i>--
                </label>
            </div>-->

            <div class="heading">
                <h1>Welcome Patient</h1>
            </div>
            <br><br>

<!--Cardbox jo upper show hongaya-->

                <div class="cardBox">
                    <div class="card"> <div>
                    <div class="numbers">04</div>
                        <div class="cardNumber">Activities-to-do
                                <div class="iconBox">
                                <a href="patient details.php"><i class="fa fa-users" aria-hidden="true"></i></a>
                                </div>
                        </div>
                    </div>
                </div>

                    <div class="card">
                    <div>
                    <div class="numbers">04</div>
                    <div class="cardNumber">Mental Health Professionals
                            <div class="iconBox">
                                <a href="MH prof.php"><i class="fa fa-user-md" aria-hidden="true"></i></a>
                            </div>
                    </div>
        </div>
    </div>

            <div class="card">
                <div>
                    <div class="numbers">02</div>
                    <div class="cardNumber">Appointments
                    <div class="iconBox">
                     <a href="AppointmentsDetails.php"><i class="fa fa-calendar" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>

            
</div>

<div class="details">
      <div class = "recentCustomers">
                <div class="cardHeader">
                    <h2>Activities-to-do</h2>
                    <a href="patient details.php" class="btn">View All</a>
                </div>

                <table class="table2">
                    <tbody>
                        <tr>
                            <td width = "60px"><div class= "imgBx"><img src="./assets/img/yoga1.png"></div></td>
                            <td><h4>Activity1<br></h4></td>
                        </tr>


                        <tr>
                            <td width = "60px"><div class= "imgBx"><img src="./assets/img/yoga.png"></div></td>
                            <td><h4>Worksheet<br></h4></td>
                        </tr>

                        <tr>
                            <td width = "60px"><div class= "imgBx"><img src="./assets/img/yoga2.png"></div></td>
                            <td><h4>Activity2<br></h4></td>
                        </tr>

                        <tr>
                            <td width = "60px"><div class= "imgBx"><img src="./assets/img/yoga1.png"></div></td>
                            <td><h4>Worksheet2<br></h4></td>
                        </tr>

                    </tbody>
                </table>
            </div>


<!--Cardbox finish-->


            <!--<div class="details">-->
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Appointments</h2>
                    <a href="AppointmentsDetails.php" class="btn">View All</a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <td>Appointment ID</td>
                            <td>Patient Name</td>
                            <td>MH Professional Name</td>
                            <td>Appointment Date</td>
                            <td>Appointment Time</td>
                            <td>Appointment Status</td>
                            
                        </tr>

                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Farhan Majeed</td>
                            <td>Qasim Shah</td>
                            <td>26-06-2021</td>
                            <td>10:00 AM - 11:00 AM</td>
                          <td><span class="status delivered">Booked</td>
                        </tr> 
                    </tbody>
                 </table>
            </div>
        </div>
    </div>

<?php include_once('includes/footer.php');?>