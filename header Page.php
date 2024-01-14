<html>
<body>
<head><link rel="stylesheet" type="text/css"href="stylee.css"></head>

	</head>
<style>
.btn{
width:80%;
}
table, td {
border-top: 1px solid white;
border-bottom: 1px solid white;
width: 70%;
margin-left: auto;
margin-right: auto;
padding: 3;
border-collapse: collapse;
}
td {
width: 200;
text-align: center;
}
h3 {
color : blue;
}
font{
color : blue;
margin-left:60%;
}
img {
margin-bottom: 20;
margin-top: 20;
width: 55%;
height:55%;
}
font {
font-size:40;
font-family:arial;
color:#7682B4;
}
</font>
</style>
</head>
<?php session_start();
$uid =$_SESSION['uid'];
$uname = $_SESSION['uname'];
$ulevel =$_SESSION['ulevel'];
echo '<font>welcome <b>'. $uname. '</b></font> ';
echo '<a href="logout.php"><button calss="btn">Logout</button> </a>';
?>
<header>
<div id="top-header">
<div id="logo" align="center">
<a href=hoom.car.php><img src="img/header.JPG" width="90%"
height="20%"></a>
</div>

<nav>
<table> <tr>
<td> <a href="hoom.car.php"><button class="btn">Home</button>
</a></td>
<td> <a href="insert car.php"><button
class="btn">Insert car</button> </td>
<td> <a href="Insert Car2.php"><button
class="btn">IInsert Car2.</button> </a> </td>
</tr></table>
</nav>
</div>
</header>
</body>
</html>