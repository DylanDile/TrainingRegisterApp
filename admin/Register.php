
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


<body>

<?php 
include_once 'header.php';?>
                <div class="row">
                            <div class="col-md-11">
                                <!-- DATA TABLE -->
                                <h2 class="title-5 m-b-35">Register </h2>
                               
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2" style="height: 100px">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox" checked>
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th style="display: none;" >Current Day</th>
                                                <th>Attendance</th>
                                                <th>Evaluation</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                        <?php
                            include_once 'php/conn.php';
                            $IDs = $_SESSION['id'];
                            $day = $_SESSION['day'];

                            if (is_array($IDs)) {
                                

                            foreach ($IDs as $app_id) {
                            
                                $select = mysqli_query($conn,"SELECT * FROM `applications`  WHERE `applicationID` = '$app_id'  ");
                                if (mysqli_num_rows($select) > 0 ) {
                                    $rows = mysqli_num_rows($select);
                                    for ($i=0; $i < $rows; $i++) {
                                         $id = mysqli_fetch_assoc($select);

                                            $fname = $id['firstname'];
                                            $sname = $id['surname'];
                                            $app = $id['applicationID'];
                                            $phone = $id['phoneNumber'];
                                        
                                        ?>
                                        <form action="php/markRegister.php" method="POST">
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td class="names"><?php echo $fname.' '.$sname; ?></td>
                                                
                                                <td class="desc"><?php echo $phone; ?><input type="number" name="id" value="<?php echo $app; ?>" style="display: none;" > </td>
                                                <td class="desc"  style="display: none;" >
                                                    <input type="number" name="day" value="<?php echo $day; ?>" > 
                                                </td>
                                                <td class="desc">
                                                    <select name="action" class="form-control input-sm" required />
                                                        <option selected disabled>Mark</option>
                                                        <option value="1">Present</option>
                                                        <option value="0">Absent</option>
                                                    </select> 
                                                </td><td class="desc">
                                                    <select name="comment" class="form-control input-sm" required />
                                                        <option selected disabled>Participation Evaluation</option>
                                                        <option value="1" >Not Satisfactory</option>
                                                        <option value="2" >Fair</option>
                                                        <option value="3" >Good</option>
                                                        <option value="4" >Very Good</option>
                                                        <option value="5" >Excellent</option>
                                                    </select> 
                                                </td>
                                                
                                                <td class="table-data-feature">
                                                    <div class="table-data-feature">
                                                        
                                                        
                                                       <button type="submit" name="mark" class="item" data-toggle="tooltip" data-placement="top" title="Update Attendance">
                                                            <i class="zmdi zmdi-edit"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </form>
                                            <tr class="spacer"></tr>
                                        <?php }} }}
                                        else{ echo "No Data";}?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>  <!-- END DATA TABLE-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</div>
</div>



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



</body>

</html>