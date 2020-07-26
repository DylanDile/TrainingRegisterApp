<?php

if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
if(!$_SESSION["email"]) { header("location:index.php"); }
$email = $_SESSION['email'];
$role = $_SESSION['role'];
$id = $_SESSION['id'];

?>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/zim.png);"></a>
            <a href="application.php" class="active text-warning"> <h3 style="color: orange; " >Dashboad</h3></a>
            <!-- <hr> -->
	        <ul class="list-unstyled components mb-5">
            <li>
                <a href="today.php"> <i class="fa fa-file"></i>  Register</a>
            </li>
            <li>
                <a href="application.php"><i class="fa fa-file"></i> Waiting List</a>
            </li>
            <li>
                <a href="bookedApplications.php"> <i class="fa fa-file"></i>  Booked Applicants</a>
            </li>           
            <li>
                <a href="ontraining.php"> <i class="fa fa-file"></i>  On Training</a>
            </li>
             <li>
                <a href="trained.php"> <i class="fa fa-file"></i>  Trained Applicants</a>
            </li>
            <li class="active">
              <a href="#homeSubmenuu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-list"></i> <span> Add Parameters</span></a>
              <ul class="collapse list-unstyled" id="homeSubmenuu">
                <li>
                    <a href="addCourse.php">Add Courses</a>
                </li>
                <li>
                    <a href="addUser.php">Add Users</a>
                </li>
                <li>
                    <a href="addRole.php">Add Roles</a>
                </li>
              </ul>
            </li>
            
	        </ul>


            <div class="footer">
                <p>
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> <i class="icon-heart" aria-hidden="true"></i><a href="" target="_blank"></a>
                      </p>
            </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only"></span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-home"></i>
            </button>
                    <strong><a class="nav-link" href="#"><?php echo $role.' || '.$email;?></a></strong>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registration.php">On Office Application</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Edit My Credentials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="php/logout.php">Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>





    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  