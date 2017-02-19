<?php
session_start();
include 'koneksi.php';
	
	if (isset ($_post['login'])){
	$username = $_post['username'];
	$password = sha1($_post['password']);
	
	$sqlquery = "select * from login where username = '$username' and password = '$password'";
	
	if (mysql_query ($sqlquery)){
		$num_rows = mysql_num_rows (mysql_query($sqlquery));
		if ($num_rows == 1) {
			$session ['username'] = $username;

			?>
	<SCRIPT type = "text/JAVASCRIPT">
	alert " Anda Berhasil Masuk";
	window.location.href = "halaman_awal.php";	
	</SCRIPT>
		<?php } else
			{
	?>
	<SCRIPT type = "text/JAVASCRIPT">
	alert (" username dan password anda salah");
	window.location.href = "index.php";	
	</SCRIPT>
	<?php } 
	{
	?>
	<SCRIPT type = "text / JAVASCRIPT">
	alert ("Terjadi Error");
	window.location.href = "index.php";	
	</SCRIPT>
	<?php } 
	}
	if (isset ($_post ['batal'])){	
	?>
	<SCRIPT type = "text / JAVASCRIPT">
	window.location.href = "index.php";	
	</SCRIPT>
	<?php } 
	}
	?>
	
	
<!DOCTYPE html>
<html>
<html>
<title>Halaman Awal Operasi CRUD</TITLE>
<style>
div.container {
	width: 100%;
	border 1px solid gray;
}
header, footer {
	padding: 0.5cm;
	color: white;
	background-color: #0000CC;
	clear: left;
	text-align: center;
	}
	
nav {
	float: left;
	max-width: 160px;
	margin: 0;
	padding: 1cm;
}
nav ul {
	list-style-type: none;
	padding: 0;
}
nav ul a {
	text-decoration: none;
}
artikle{
margin-left: 170px;
berder-left: 1px colid gray;
padding :1px;   
overflow; hidden;
}
</style>
</head>
<body>


<div class-"container">
<header> 
<h1>Operasi CRUD</h1>
<h3>(Create Read Update Delete)</h3>
</header>

<!--<nav>
	<ul>
	<li><b>MENU</b></li>
	<li><a href ="#">Menu 1</a></li>
	<li><a href ="#">Menu 2</a></li>
	<li><a href ="#">Menu 3</a></li>

	</ul>
</nav> -->

	</nav>
	<article>
	<form method = "post"
		<table weidht = "60" align = "center">
		<tr>
		<th align = "center" colspan = "2">Login<a href = "daftar.php"> daftar </a> </th>
		</tr>
		<tr> <br></br>
			<td> username </td>
			<td> <input type = "text" name = "username" size = "80"></td>
		</tr>
		<tr>
			<td> <br></br>password </td>
			<td> <input type = "text" name = "password" size = "80"></td>
		</tr>
		<tr>
			<td colspan = "2" align = "right"> <br></br><input type = "submit" value = "login" name = "login"> <input type = "submit" value = "batal" name = "batal"></td>
		</tr>
		</table>
		</form>
	</article>
	
	
<footer>
<h2>Hesar Nur Ramaduloh (14111218)</h2>
<h3> "14 TIF Reguler malan" </h3>
</footer>
</div>
</body>
</html>