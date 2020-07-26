<!DOCTYPE html>
<html lang="en">

<head>
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

    <script src="js/jquery.min.js"></script>

<script type="text/javascript">
function fun_showtextbox()
{
    var select_status=$('#category').val();

    if(select_status== 'Government')
    {
        $('#min').show();
    }
    else
    {
        $('#min').hide();
    }
}
</script>

<body>

<?php
include_once 'header.php';
include_once 'php/conn.php';  ?>
    <div class="row">
        <div class="col-md-10">
         <!-- DATA TABLE -->
            <h2 class="title-5 m-b-35">Courses Daily Register</h2>
            <div class="card">
                <div class="card-header">Register for all Attendances</div>
                    <div class="card-body card-block">

                        <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                        
                            <thead>
                                <tr>
                                    <th>Course ID</th>
                                    <th>Application ID</th>
                                    <th>First Name</th>
                                    <th>Day 1</th>
                                    <th>Day 2</th>
                                    <th>Day 3</th>
                                    <th>Day 4</th>
                                    <th>Day 5</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <?php
                                    include_once 'php/conn.php';
                                    $select = mysqli_query($conn,"SELECT a.firstname, w.applicationID, w.course,  w.day1, w.day2, w.day3, w.day4, w.day5 
                                                                  from weeklyregister w, applications a 
                                                                  where w.applicationID = a.applicationID 
                                                                  and w.course = a.course ");
                                    if (mysqli_num_rows($select) > 0) {
                                        $rows = mysqli_num_rows($select);
                                        for ($i=0; $i < $rows; $i++) {
                                            $id = mysqli_fetch_assoc($select);
                                            $fname = $id['firstname'];
                                            $app_id = $id['applicationID'];
                                            $course = $id['course'];
                                            $day1 = $id['day1'];
                                            $day2 = $id['day2'];
                                            $day3 = $id['day3'];
                                            $day4 = $id['day4'];
                                            $day5 = $id['day5'];
                                    ?>
                                    <tr>    
                                        <td> <?php echo $course; ?></td>
                                        <td> <?php echo $app_id; ?></td>
                                        <td> <?php echo $fname; ?></td>
                                        <td> <?php echo $dayVal = ($day1 == 1)? "<b style='color: green;'>Present</b>" :"<b style='color: red;'>Absent</b>"; ?></td>
                                        <td> <?php echo $dayVa2 = ($day2 == 1)? "<b style='color: green;'>Present</b>" :"<b style='color: red;'>Absent</b>"; ?></td>
                                        <td> <?php echo $dayVa3 = ($day3 == 1)? "<b style='color: green;'>Present</b>" :"<b style='color: red;'>Absent</b>"; ?></td>
                                        <td> <?php echo $dayVa4 = ($day4 == 1)? "<b style='color: green;'>Present</b>" :"<b style='color: red;'>Absent</b>"; ?></td>
                                        <td> <?php echo $dayVa5 = ($day5 == 1)? "<b style='color: green;'>Present</b>" :"<b style='color: red;'>Absent</b>"; ?></td>
                                    </tr> 
                                    <?php
                                        }
                                    }
                                    ?>
                            </tbody>
                        </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
       </b>
      <!-- Start Coments Sections -->
      <div class="row">
        <div class="col-md-10">
         <!-- DATA TABLE -->
            <h2 class="title-5 m-b-35">Courses Comments</h2>
            <div class="card">
                <div class="card-header">Comments for all Applicants
                    <hr>
                    <b><label> 1. Not Satisfactory &nbsp; &nbsp; 2. Fair &nbsp;&nbsp; 3. Good &nbsp;&nbsp;4.Very Good &nbsp;&nbsp;5.Excellent </label></b>      
                </div>
                    <div class="card-body card-block">

                        <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                        
                            <thead>
                                <tr>
                                    <th>Course ID</th>
                                    <th>Application ID</th>
                                    <th>First Name</th>
                                    <th>Day 1</th>
                                    <th>Day 2</th>
                                    <th>Day 3</th>
                                    <th>Day 4</th>
                                    <th>Day 5</th>

                                </tr>
                            </thead>
                            <tbody>
                                    <?php
                                    include_once 'php/conn.php';
                                    $select = mysqli_query($conn,"SELECT c.applicationID, a.firstname, a.course, c.courseID, c.day1, c.day2, c.day3, c.day4, c.day5 
                                                                  from comments c, applications a  
                                                                  where c.applicationID = a.applicationID ");
                                    if (mysqli_num_rows($select) > 0) {
                                        $rows = mysqli_num_rows($select);
                                        for ($i=0; $i < $rows; $i++) {
                                            $id = mysqli_fetch_assoc($select);
                                            $fname = $id['firstname'];
                                            $app_id = $id['applicationID'];
                                            $course = $id['course'];
                                            $day1 = $id['day1'];
                                            $day2 = $id['day2'];
                                            $day3 = $id['day3'];
                                            $day4 = $id['day4'];
                                            $day5 = $id['day5'];
                                    ?>
                                    <tr>    
                                        <td> <?php echo $course; ?></td>
                                        <td> <?php echo $app_id; ?></td>
                                        <td> <?php echo $fname; ?></td>
                                        <td> <?php echo $day1; ?></td>
                                        <td> <?php echo $day2; ?></td>
                                        <td> <?php echo $day3; ?></td>
                                        <td> <?php echo $day4; ?></td>
                                        <td> <?php echo $day5; ?></td>
                                        
                                    </tr> 
                                    <?php
                                        }
                                    }
                                    ?>
                           </tbody>
                        </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

      <!-- End Comments Section -->

    </div>
</div>
</div>


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



</body>

</html>