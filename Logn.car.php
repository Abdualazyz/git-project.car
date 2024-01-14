
<?php
 session_start();
 ?>
 <html>
 <head><title>تسجيل دخول</title><link rel="stylesheet" type="text/css"href="stylee.css"></head>
 <body>

 <div align="center">
 <?php
 $ms1 = $ms2 = $ms3 = "";
 if (isset($_POST['submit'])) {
	 
 $uname =$_POST['username'];
 $pass = $_POST['password'];

 if (empty($uname)) {
 $ms1 = 'Please enter username';
 }
 if (empty($pass)) {
 $ms2 = 'Please enter password';
 }
 if ($ms1 =="" && $ms2==""){
 include 'conn.php';
 $sql ="select * from users where uname='$uname' and pass='$pass'";
$query = mysqli_query($conn,$sql);
 $rslt = mysqli_fetch_assoc($query);
 $row_num = mysqli_num_rows($query);
 if ($row_num == 1 ) {
 $_SESSION['uid']= $rslt['id'];
 $_SESSION['uname'] = $rslt['name'];
 $_SESSION['ulevel'] = $rslt['level'];



 header ('location:header page.php');
 }
 else {
 $ms3 = 'username or password not correct';
 
 }
 }

 }

 ?>
 <fieldset style="width:50%">
 <legend><h2>Log in</h2></legend>
 <form action="logn.car.php" method="post" >
 username: <input type="text" name="username"> <?php echo $ms1; ?> <br><br>
 Password: <input type="password" name="password"> <?php echo $ms2; ?> <br><br>
 <input type="submit" name ="submit" value="log in"><br><br>
 <?php echo '<font color="red">'. $ms3 .'</font>'; ?>
 </form>
 </fieldset>
 </div>
 </body>
 </html> 
   Create an account <a href="signup.car.php"><button>new account