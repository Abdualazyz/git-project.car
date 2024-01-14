
<html>
<head><title></title><?php include 'header page.php';?>
<div align="center">
<fieldset style="width:60%">
<legend> <h3 style="font-family: "Lucida Console"">اضافة مركبة</h3></legend>
<?php
$ms1 = $ms2 = $ms3 =$ms4 =$ms5= $ms6="";
if(isset($_POST["submit"])){
	}
if (empty($_POST['model'])) {
$ms1 = 'Please fill out the field';
}
if (empty($_POST['col'])) {
$ms2 = 'Please fill out the field';
}
if (empty($_FILES["myfile"]["name"])) {
$ms3 = 'Please fill out the field';
}

$file_loc = 'img/';
$filename = time(). '_' . basename($_FILES["myfile"]["img"]);
$path = $file_loc . $filename;
$img_size = basename($_FILES["myfile"]["size"]);
$img_type = strtolower(basename($_FILES["myfile"]["type"]));
if ($img_size > 2000000 ) {
$ms4 ='image size no more 2 GB';
}
if ($img_type !='png' && $img_type !='jpg' && $img_type!= 'jpeg') {
$ms5 ='png and jpg only';
}
if ($ms1 =="" && $ms2 =="" && $ms3=="" && $ms4=="" && $ms5=="" && $ms6=="" ) {
  
  include 'conn.php';
  $brnd =$_POST['brand'];
  $modl =$_POST['model'];
  $colr =$_POST['col'];
move_uploaded_file ($_FILES["myfile"]["tmp_name"],$path);


 $sql="insert into ca (model,color,image,bno)values('$modl','$colr','$path',$brnd)";

 if (mysqli_query($conn,$sql)) {
 echo "car info has been inserted";
 }
 else
 {
 echo "error";
 }

 }
?>
<form action="insert car.php" method="post" enctype="multipart/form-data">
Brand: <select name="brand">
<?php
 include 'conn.php';
 $sql = "select * from cardb";
 $query = mysqli_query($conn,$sql);
 $row = mysqli_fetch_row($query);
 while ($row) {
 echo '<option value="'.$row[0].'">'.$row[1].'</option>';
 $row = mysqli_fetch_row($query);
 } 
 mysqli_close($conn);
 ?>
</select> <br><br>
model: <input type="text" name="model"><font color="red">*</font><?php echo
$ms1;?><br><br>
<font color="blue">color:
<input type="radio" name="col" value="red" > <label>Red</label>
<input type="radio" name="col" value="blue"> <label>blue</label>
<input type="radio" name="col" value="white"> <label>white</label>
<input type="radio" name="col" value="black" > <label>black</label></font>
<font color="red">*</font> <?php echo $ms2?><br><br>

</select> <?php echo $ms6;?><br><br>
<font color="blue">Image: </font>
<input type ="file" name="myfile"><font color="red">*</font><?php echo $ms3. ' '.$ms4.''.$ms5;?><br><br>
<input type="submit" name="submit" value="insert">
 <a href="header page.php"><button> Back </button></a>
</form>

</fieldset>
</div>
</body>
</html>