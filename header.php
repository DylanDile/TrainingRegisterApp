<?php

session_start();
?>
    <style type="text/css">
        
.btn-group button {
  background-color: #292118; /* brown */
  border: 1px solid #2e3b4c; /* brown */
  color: white; /* White text */
  padding: 10px 24px; /* Some padding */
  cursor: wait; /* Pointer/hand icon */
  float: left; /* Float the buttons side by side */
  font-weight: bolder;
  font-size: 16px;
  height: 80px;
}

/* Clear floats (clearfix hack) */
.btn-group:after {
  content: "";
  clear: both;
  display: table;
}

.btn-group button:not(:last-child) {
  border-right: none; /* Prevent double borders */
}

/* Add a background color on hover */
.btn-group button:hover {
  background-color: #2c2f33;
}
    </style>

        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            
        </header>

            <!-- HEADER DESKTOP-->

<div class="btn-group" style="width:100%">
  <button style="width:10%">CCS<img src="../images/zim.png" alt="CCS" height="50" width="50" align="left" /></button>
  <button style="width:15%">Central</button>
  <button style="width:20%">Computing</button>
  <button style="width:20%">Services</button>
  <button style="width:15%">Training</button>
  <button style="width:20%">Department</button>
</div>
     


<ul class="nav nav-pills" >
  <li class="nav-item">
    <a class="nav-link active" style="width: 150%;" href="logout.php" ><span><i class="fa fa-backward"></i>  Back</a>
  </li>
  <li class="nav-item" style="visibility: hidden;">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item dropdown" style="visibility: hidden;">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
  </li>
  <li class="nav-item" style="visibility: hidden;">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item" style="visibility: hidden;">
    <a class="nav-link disabled" href="#">Disabled</a>
  </li>
</ul>