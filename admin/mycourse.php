
<script src="../vendor/sweetalert/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="../vendor/sweetalert/sweetalert.css">

<?php
session_start();
include_once 'php/conn.php';
if (isset($_GET["reg_id"])) {
	$reg_id = $_GET["reg_id"];	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Course</title>
	    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="mictpcs ">
    <meta name="author" content="Tapiwa Nobela">
    <meta name="keywords" content="ccs">

    <!-- Title Page-->
    <title>CCS</title>


    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/css/font-awesome.min.css" /><!-- fontawesome-CSS -->
        <link rel="stylesheet" href="css/style.css">
    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
</head>
<body>
<!-- My course information -->
<?php include_once 'header.php'; ?>
<div class="row justify-content-center">
<div class="col-md-9">
    <div class="card">
        <div class="card-header">
            <?php echo  'Application ID  : '.  $_GET['reg_id']; 
            ?>
        </div>
        <div class="card-body">
            <?php 
            $app_id = $_GET['reg_id'];
            $select = mysqli_query($conn,"SELECT * FROM `applications`  WHERE `applicationID` = '$app_id' ");
                if (mysqli_num_rows($select) > 0) {  
                    $id = mysqli_fetch_assoc($select);
                    $course = $id['course'];
                    $fname = $id['firstname'];
                    $sname = $id['surname'];
                    $email = $id['email'];
                    $phone = $id['phoneNumber'];
                    $sDate = $id['startingDate'];
                    $fDate = $id['finishingDate'];
                    //Check Course
                    $sel = mysqli_query($conn,"SELECT * FROM `courses`  WHERE `courseID` = '$course' ");
                    if (mysqli_num_rows($sel) > 0) 
                    {  
                        $cs = mysqli_fetch_assoc($sel);
                        $cID = $cs['courseID'];
                        $cName = $cs['courseName'];
                    }
                    else
                    {
                        $cName = "Course not found";
                    }
                }
            ?>
            <h3><u>Applicant Details</u></h3>
            <hr>
            <label> Name : <?php echo $fname; ?></label>
            <br>
            <label> Surname : <?php echo $sname; ?></label>

            <h3><u>Course Details</u></h3>
            <hr>
            <label> Course Name : <?php echo $cName; ?></label>
            <br>
            <label> Course Start Date : <?php echo $sDate; ?></label>
            <br>
            <label> Course End Date : <?php echo $fDate; ?></label>
            <hr>

            <h4>Today's Date : <?php echo date('Y-m-d'); ?> </h4>

            <?php
            if($cName == "Course not found")
            {
                echo "There no specified course on this application.";
            }
            else
            {
                $datetime1 = date_create(date('Y-m-d'));
                $datetime2 = date_create($fDate);
                $interval = date_diff($datetime1, $datetime2);

                $val = $interval->format('%R%a');

                if($val > 0 )
                {
                    echo 'We are left with <b>'.$val. '</b> days to finish this course .';
                }
                else
                {
                    $num = explode("-", $val);
                    echo "We have <b>".  $num[1] . " </b> days since the course have finished.";

                    $update = mysqli_query($conn,"UPDATE `applications` SET  `status` = 'trained' WHERE `applicationID` = '$app_id' ");

                }
            }              
               
            ?>
            <br>

            <div class="bg-warning">
                <br>
                <?php
                $dt1 = date_create(date('Y-m-d'));
                $dt2 = date_create($sDate);
                $intv = date_diff($dt2, $dt1);
                $val1 = $intv->format('%R%a');
                
                if($val1 +1  > 0 && $cName != "Course not found" && $val1 <=7)
                {
                ?>
                <form method="post" action="php/postedRegister.php" class="form-inline form-row">
                    <input type="hidden" name="reg_id" value="<?php echo $app_id; ?>">
                    <input type="hidden" name="cid" value="<?php echo $course; ?>">
                        <label class="col-sm-1">Day </label>  
                        <input type="text" class="col-sm-1 form-control" readonly="" name="day" value="<?php echo $val1 + 1; ?>" >  
                            &nbsp;     &nbsp;              
                            <select name="attendance" class="form-control col-sm-3" required="">
                                <option selected="" disabled="">Attendance</option>
                                <option value="0">Absent</option>
                                <option value="1">Present</option>
                            </select>
                             &nbsp; 
                             <select name="comment" class="form-control input-sm col-sm-3" required />
                                <option selected disabled>Evaluation</option>
                                    <option value="1" >Not Satisfactory</option>
                                    <option value="2" >Fair</option>
                                    <option value="3" >Good</option>
                                    <option value="4" >Very Good</option>
                                    <option value="5" >Excellent</option>
                            </select>
                             &nbsp; 
                            <?php
                            $today = date_create(date('Y-m-d'));
                            $endDate = date_create($fDate);
                            $intVal = date_diff($today, $endDate);

                            $valC = $intVal->format('%R%a');

                            if($valC  > 0 )
                            {

                            ?>
                             <input type="submit" name="mark" class="btn btn-rounded btn-info col-sm-2" value="Submit" id="mark">
                            <?php         
                            }
                            ?>
                           
                </form>
                <br>
            <?php } ?>
            </div>

            <div class="jumbotron-hr">
                <div class="active">
                    <hr>
                    <h5>Aplicant Register</h5>
                    <table class="table table-responsive" width="100%">
                        <thead>
                            <tr>
                            <th>Course Name</th>
                            <th>Day 1</th>
                            <th>Day 2</th>
                            <th>Day 3</th>
                            <th>day 4</th>
                            <th>Day 5</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                    $checkCourse = mysqli_query($conn,"SELECT * FROM `weeklyregister` WHERE `applicationID` = '$app_id' and  `course` = '$course' ");
                                    if (mysqli_num_rows($checkCourse) > 0) 
                                    {  
                                        $courseRegister = mysqli_fetch_assoc($checkCourse);
                                        $day1 = $courseRegister['day1'];
                                        $day2 = $courseRegister['day2'];
                                        $day3 = $courseRegister['day3'];
                                        $day4 = $courseRegister['day4'];
                                        $day5 = $courseRegister['day5'];                      
                                    
                                    ?>
                                    <td><?php echo $cName;  ?></php></td>
                                    <td><?php echo $day1;  ?></php></td>
                                    <td><?php echo $day2;  ?></php></td>
                                    <td><?php echo $day3;  ?></php></td>
                                    <td><?php echo $day4;  ?></php></td>
                                    <td><?php echo $day5;  ?></php></td>
                                <?php } else{ ?>
                                    <td colspan="6"> <b style="color: red;">No register recorded for this applicant.</b></td>
                                <?php } ?>
                            </tr>
                        </tbody>                  
                    
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


	<!-- End my course information -->
</body>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>


    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
</html>