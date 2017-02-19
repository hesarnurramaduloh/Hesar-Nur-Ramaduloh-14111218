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

<nav>
	<ul>
	<li><b>MENU</b></li>
	<li><a href ="#">Menu 1</a></li>
	<li><a href ="#">Menu 2</a></li>
	<li><a href ="#">Menu 3</a></li>

	</ul>
</nav>

	</nav>
	<article>
		<table border="1" width="75%" align="center">
			<tr>
				<th>Tambah Data</th>
			</tr>
			<tr>
				<td align=center>No</td>
				<td>:</td>
				<td><input type="text" name="no" size="70"></input></td>
			</tr>
			<tr>
				<td align=center>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" size="70"></input></td>
			</tr>
			<tr>
				<td align=center>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim" size="70"></input></td>
			</tr>
			<tr>
				<td align=center>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" size="70"></input></td>
			</tr>
			<tr>
				<td align=center>Aksi</td>
				<td>:</td>
				<td><input type="text" name="aksi" size="70"></input></td>
			</tr>
			<tr>

				<td colspan="3"><input type="button" value="UPDATE"></input><input type="button" value="BATAL"></input><a href="index.php"><button type="submit">KEMBALI</button></a></td>
			</tr>
		</table>
	</article>


<footer>
<h2>Hesar Nur Ramaduloh (14111218)</h2>
<h3> "14 TIF Reguler malan" </h3>
</footer>
</div>
</body>
</html>