<html>
<head><link rel="stylesheet" type="text/css"href="stylee.css"></head><title>insert brand</title>
<style>

</style>

<body>
<?php include 'header page.php';
$ms1="";
if(isset($_POST["submit"])){

 include 'conn.php';
 $brand = $_POST['brand'];
 $sql="insert into cardb (brand) values('$brand')";

 if (mysqli_query($conn,$sql)) {
 echo "brand has been inserted";
 }
 else{
 echo "error";
 } 

 mysqli_close($conn);
 }

 ?>
<div >
<fieldset>
<legend> <h1>اضافة علامة تجارية</h1></legend>
<form action="insert Car2.php" method="post">
<label>Brand:</label> <input type="text" name="brand"> <label
class="alert"><?php echo $ms1;?></label><br><br>
<input type="submit" name="submit" value="INSERT">
</form>
</fieldset>
</div>
</body>
</html>