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
    <title>Tables</title>


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
</head>

<body>

<?php include_once 'header.php';
include_once 'php/conn.php'; 




?>
                <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-8">
                                <div class="card">
                                    <form action="php/applicationInsert.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                         
                                    <div class="card-header">
                                        <strong>Basic Information</strong> 
                                    </div>
                                    <div class="card-body card-block">
                                           
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="firstname" class=" form-control-label">First Name</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="firstname" name="firstname" placeholder="" class="form-control">
                                                    <small class="form-text text-muted">Enter Name & Initials</small>
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="surname" class=" form-control-label">Second Name</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="surname" name="surname" placeholder="" class="form-control">
                                                    <small class="form-text text-muted">Enter Your family name</small>
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="IDnumber" class=" form-control-label">National ID Number</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="IDnumber" name="IDnumber" placeholder="" class="form-control">
                                                    <small class="form-text text-muted">Identity Number</small>
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="DOB" class=" form-control-label">Date Of Birth</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="date" id="DOB" name="DOB" placeholder="Text" class="form-control">
                                                    <small class="form-text text-muted">Enter Your DOB</small>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="sex" class=" form-control-label">Sex</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="sex" id="sex" class="form-control">
                                                        <option selected disabled >Please select</option>
                                                        <option value="female">Female</option>
                                                        <option value="male">Male</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                        
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success btn-sm" name="basic">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                    </div>
                                    </form>
                                </div>
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