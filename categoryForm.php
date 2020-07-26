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
        $('#desig').show();
    }
    else
    {
        $('#min').hide();
        $('#desig').hide();
    }
}
</script>

<body>

<?php include_once 'header.php';
include_once 'php/conn.php'; 

$app_id=$_SESSION['applicationID'];
$id=$_SESSION['IDnumber'];
$msg=$_SESSION['msg'];



?>
                <div class="main-content">
                    
                    <!-- ALERT-->
                    <div class="alert au-alert-success alert-dismissible fade show au-alert au-alert--70per" role="alert">
                        <i class="zmdi zmdi-check-circle"></i>
                        <span class="content"><?php echo $msg?></span>
                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="zmdi zmdi-close-circle"></i>
                            </span>
                        </button>
                    </div>
                    <!-- END ALERT-->

                    
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-8">
                                <div class="card">
                                    <form action="php/applicationInsert.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                         
                                    <div class="card-header">
                                        <strong>Category</strong> 
                                    </div>
                                    <div class="card-body card-block">
                                          
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="number" name="applicationID" value="<?php echo $app_id?>" class="form-control" style="display: none;">
                                                    <input type="id" name="IDnumber" value="Your ID Number" class="form-control col-md-3" disabled>
                                                    <input type="id" name="IDnumber" value="<?php echo $id?>" class="form-control col-md-3" style="float: right;" readonly/>
                                                </div>
                                                <hr class="col-md-6"><hr>
                                            </div>
                                            
                                            
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="course" class=" form-control-label">Course</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="course" id="course" class="form-control">
                                                        <option selected disabled >Please select</option>
                                                        <?php
                                                            $select = mysqli_query($conn,"SELECT * FROM `courses`");
                                                            $rows = mysqli_num_rows($select);
                                                            for ($i=0; $i < $rows; $i++) {
                                                                $id = mysqli_fetch_assoc($select);

                                                                    $course = $id['courseName'];
                                                               

                                                            ?>
                                                            <option value="<?php echo $id['courseID']; ?>"><?php echo $course; ?></option>
                                                        <?php }?>
                                                    </select>
                                                </div>
                                            </div>

                                            
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Category</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="category" id="category" class="form-control col-md-4" onchange="fun_showtextbox()" >
                                                        <option value="0" selected disabled>Category</option>
                                                        <option value="Government">Government Employee</option>
                                                        <option value="Citizen">Zimbabwean Citizen</option>
                                                    </select>
                                                </div>
                                            </div>

                                            
                                            
                                            <div class="row form-group"  id="min" style="display: none;">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Ministry</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="ministry" id="ministry" class="form-control">
                                                        <option value="0" selected disabled>Ministry</option>
                                                        <?php 

                                                        $min = mysqli_query($conn,"SELECT * FROM ministries");
                                                        if (mysqli_num_rows($min)>0) {
                                                            for ($i=0; $i < mysqli_num_rows($min); $i++) { 
                                                                $data = mysqli_fetch_assoc($min);
                                                                ?>
                                                                <option value="<?php echo $data['minID'];?>"><?php echo $data['ministry'];?></option>
                                                                <?php
                                                            }

                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group"  id="desig" style="display: none;">
                                                <div class="col col-md-3">
                                                    <label for="designation" class=" form-control-label">Designation</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="designation" name="designation" placeholder="Enter your designation" class="form-control">
                                                </div>
                                            </div>
                                        
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success btn-sm" name="categories">
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