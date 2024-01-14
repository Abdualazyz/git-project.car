	
<html>
 <head><title>انشاء حساب</title><link rel="stylesheet" type="text/css"href="stylee.css"></head>
 <body>
 <div align="center">


 <?php

 $ms1 = $ms2 = $ms3 = $ms4 = $ms5 = $ms6= "";
 if (isset($_POST['submit'])) {

 if (empty($_POST['name'])) {
 $ms1 = 'name is requird';
 }
 if (empty($_POST['username'])) {
 $ms2 = 'username is requird';
 }
 if (empty($_POST['password1'])) {
 $ms3 = 'password is requird';
 }
 if (empty($_POST['password2'])) {
 $ms4 = 'password conformation is requird';
 }

 $name = $_POST['name'];
 $uname = $_POST['username'];
 $pass1 = $_POST['password1'];
 $pass2 = $_POST['password2'];
 if ($pass1 !==$pass2) {
 $ms5 = "mismatched passwords ";
 }

 if ($ms1 =="" && $ms2 =="" && $ms3 =="" && $ms4=="" && $ms5=="" ) {
	
 include 'conn.php';
 $sql1 ="select * from users where uname= '$uname'";
$query =mysqli_query($conn,$sql1);
    if (mysqli_num_rows($query)==1) {
    $ms6="username is already used";

 }
  
else {
$sql ="insert into users (name,uname,pass,level) values('$name','$uname','$pass1',0)";
$query = mysqli_query($conn,$sql);
if ($query) {
echo 'thank you for registration !';
 }
 
 }
}
 }
 


 ?>
 <fieldset style="width:50%">
 <legend><h2>تسجيل مستخدم</h2></legend>
 <form action="signup.car.php" method="post" >
 Name: <input type="text" name="name"> <?php echo $ms1; ?> <br><br>
 User name: <input type="text" name="username"><?php echo $ms2; ?> <br><br>
 Password: <input type="password" name="password1"> <?php echo $ms3; ?> <br><br>
 Re-Password: <input type="password" name="password2"> <?php echo $ms4; ?> <br><br>
 <input type="submit" name ="submit" value="Register"><br><br>
 <?php echo $ms5." ".$ms6;?>

<font>already a member? </font><a href="logn.car.php">log in</a>
</form>
</fieldset>
</div>
</body>
</html>
