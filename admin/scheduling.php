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


 <?php
 if (isset($_GET['app_id']) && !empty($_GET['app_id'])) {
     
 $id = $_GET['app_id'];

    $select = mysqli_query($conn,"SELECT * FROM `applications`  WHERE `applicationID` = '$id' ");
    if (mysqli_num_rows($select) > 0) {
        $rows = mysqli_num_rows($select);
        $aid = mysqli_fetch_assoc($select);

        $book_id = $aid['applicationID'];
        $fDate = $aid['finishingDate'];
        $sDate = $aid['startingDate'];
        $f1 = $aid['firstname'];
        $f2 = $aid['surname'];

        $name = $f1.' '.$f2;
    }

}
?>






    <div class="row">
        <div class="col-md-10">
         <!-- DATA TABLE -->
            <h2 class="title-5 m-b-35">Booking</h2>
            <div class="card">
                <div class="card-header">Schedule for: <span style="color: firebrick; font-weight: bold;"> <?php echo $name ?></span></div>
                    <div class="card-body card-block">
                        <form action="php/trainingbook.php" method="POST">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="number" id="username" name="book_id" value="<?php echo $book_id ?>" class="form-control" style="display: none;">
                                    <input type="date" id="username" name="sDate" value="<?php echo $sDate ?>" class="form-control">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" id="" name="fDate" value="<?php echo $fDate ?>" class="form-control">
                                </div>
                            </div>
                            <hr>
                           
                            <div class="form-actions form-group">
                                <button type="submit" class="btn btn-success btn-sm" name="schedule">Schedule</button>
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