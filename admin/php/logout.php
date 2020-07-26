<?php
session_start();
  session_unset();
  session_destroy();
echo '<script type="text/javascript">alert("Good Bye."); window.location.href = "../index.php"; </script>';