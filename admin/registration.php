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
            <h2 class="title-5 m-b-35">Application</h2>
            <div class="card">
                <div class="card-header">Application Form</div>
                    <div class="card-body card-block">
                        <form action="php/insert.php" method="POST">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" id="username" name="firstname" placeholder="Enter Your First Name & Initials" class="form-control">
                                    <input type="text" id="username" name="surname" placeholder="Enter Your Surname" class="form-control">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" id="IDnumber" name="IDnumber" placeholder="Enter Your National ID Number" class="form-control">
                                    <input type="date" id="DOB" name="DOB" placeholder="Enter Your D.O.B" class="form-control">
                                    <select name="sex" id="sex" class="form-control">
                                        <option value="0" selected>Sex</option>
                                        <option value="1">Female</option>
                                        <option value="2">Male</option>
                                    </select>
                                    <select name="course" id="course" class="form-control">
                                        <option value="0" selected>Courses</option>
                                        <?php 

                                            $min = mysqli_query($conn,"SELECT * FROM courses");
                                            if (mysqli_num_rows($min)>0) {
                                                $rows=mysqli_num_rows($min);
                                                for ($i=0; $i < $rows; $i++) { 
                                                $data = mysqli_fetch_assoc($min);
                                                ?>
                                                <option value="<?php echo $data['courseID'];?>"><?php echo $data['courseName'];?></option>
                                                <?php
                                                            }

                                                        }
                                                        ?>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <input type="address" id="address" name="address" placeholder="Enter Address" class="form-control">
                                    <input type="phone" id="phone" name="phone" placeholder="Enter Your Phone Number" class="form-control">
                                    <input type="email" id="email" name="email" placeholder="Enter Your Email" class="form-control">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="address"  placeholder="Proposed Week Period  From Mon:To Fri" class="form-control" disabled>
                                    <input type="date" id="DOB" name="startingDate" placeholder="Starting Date" class="form-control">
                                    <input type="date" id="DOB" name="finishingDate" placeholder="Finishing date" class="form-control">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-asterisk"></i>
                                    </div>
                                    <select name="category" id="category" class="form-control col-md-4" onchange="fun_showtextbox()" >
                                        <option value="0" selected disabled>Category</option>
                                        <option value="Government">Government Employee</option>
                                        <option value="Citizen">Zimbabwean Citizen</option>
                                    </select>
                                    <div id="min" style="display: none;" class="input-group col-md-8">
                                        <select name="ministry" id="ministry" class="form-control">
                                            <option value="0" selected disabled>Ministry</option>
                                            <?php 

                                            $min = mysqli_query($conn,"SELECT * FROM ministries");
                                            if (mysqli_num_rows($min)>0) {
                                                $data = mysqli_fetch_assoc($min);
                                                for ($i=0; $i < mysqli_num_rows($min); $i++) { 
                                                    ?>
                                                    <option value="<?php echo $data['minID'];?>"><?php echo $data['ministry'];?></option>
                                                    <?php
                                                }

                                            }
                                            ?>
                                        </select>
                                        <input type="text" id="designation" name="designation" placeholder="Designation" class="form-control">

                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-actions form-group">
                                <button type="submit" class="btn btn-success btn-sm" name="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

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