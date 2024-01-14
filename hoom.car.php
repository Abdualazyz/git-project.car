
<html>

	<head>
	    

<title> home </title><link rel="stylesheet" type="text/css"href="stylee.css"></head>

	</head>
<body>
<div align="center">
<fieldset style="width:30%">
<table  width="50%"   border="1"  align='center'  >
<tr>
<th>model</th>   
 <th>Photo</th>
 <th>Delete </th>   
  <th>Details </th>   


</tr> 
<?php

include "conn.php";
$sqll = 'select * from  ca';
$query =  mysqli_query ($conn,$sqll);
while ($row = mysqli_fetch_array($query)){
	?>
	 <tr>

	 <td  align='center'  ><?php echo $row ['model'] ;   ?></td>
    <td align='center' > <img src=" <?php  echo $row['image'];   ?>"  width="150px" height="100px;" >  </td>
	
	  <td><a href="Delete.page.php?$no= <?php echo $row['no'];?>" </a> 
	   <button>Delete </button>
 </a></td>
 <td><a href="details.php?$no= <?php echo $row['no'];?>" </a> 
	   <button>Details </button>
 </a></td>
 </tr>
 
	<?php
}

?>



</table>
</body>

 <a href="header page.php"><button> Back </button></a>
</html>