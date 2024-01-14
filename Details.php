<html>
 <head><title>Log in Page</title><link rel="stylesheet" type="text/css"href="stylee.css"></head>
 <body>
 <?php
 
include 'conn.php';
 
 $sql = "select * from ca";
 $query = mysqli_query($conn,$sql);
 echo '<div align ="center">';
 echo '<table border ="5" width ="30%" ="beige">';
 $rslt = mysqli_fetch_assoc($query);
 echo'<th align="center" ="brown" style="color:black" >المواصفات</td></th>';
 echo'<tr align="center"><td>'.$rslt['color'].'</td></tr>';
 echo'<tr align="center"><td>'.$rslt['model'].'</td></tr>';
 echo'<tr align="center"><td>'.$rslt['no'].'</td></tr>'; 
 echo'<tr align="center"><td><img src="'.$rslt['image'].'" width="300" height="300"></td></tr>';
 echo'<tr align="center"><td><a href="hoom.car.php"><button> Back </button></a></td></tr>
 </table>';

 echo '</div>';
 ?>