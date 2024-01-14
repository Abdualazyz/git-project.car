<?php
session_start();
//unset ($_SESSION['level']);
//unset ($_SESSION['uname']);
session_destroy();
header ('location:Logn.car.php');


?> 