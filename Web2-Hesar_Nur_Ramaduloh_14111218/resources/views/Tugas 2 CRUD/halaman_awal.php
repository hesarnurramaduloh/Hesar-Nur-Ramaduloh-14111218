<?php
include_once 'koneksi.php';
	if (isset ($_get ['delete_id'])){
		$sql_query = "DELETE FROM barang where Kdbarang"; $_get['delete_id'];
		mysql_query (sql_query);
		header ("location : $_server[php_self]");
	}
	?>

<!DOCTYPE html>
<html>
<head>
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
<script>
function edit_id (id){
	if (confirm ('yakin akan mengedit')){
		windows.location.href = 'edit.php?edit_id ='+ id;
		}
	}
function delete_id (id){
	if (confirm ('yakin akan menghapus')){
		windows.location.href = 'index.php?delete_id' = '+id';
}
}
</script>


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

		<article>
		<br></br>
		<table border="1" width="50%" align="center">

			<td>
				<th><a href="Tambah.php"><button type="submit">TAMBAH</button></a></th>
			</td>
			<td>
				<th><a href="edit.php"><button type="submit">EDIT</button></a></th>
			</td>
			<tr>
				<td align=center>Kode barang</td>
				<td align=center>Nama Barang</td>
				<td align=center>Stok</td>
				<td align=center>Harga</td>
				<td align=center>Edit</td>
				<td align=center>Hapus</td>
			</tr>
			<?php
	$sql_query = "select * FROM barang";
	$result_set = mysql_query ($sql_query);
	if (mysql_num_rows($result_set)>0){
		while ($row = mysql_fetch_row ($result_set)){
			?>
			<tr>
				<td align=center><?php echo $row[0]; ?> </td>
				<td align=center><?php echo $row[1]; ?> </td>
				<td align=center><?php echo $row[2]; ?> </td>
				<td align=center><?php echo $row[3]; ?> </td>
				<td align=center><a href = "javascript : edit_id(<?php echo $row[0]; ?>)">edit </a></td>
				<td align=center><a href = "javascript : delete_id(<?php echo $row[0]; ?>)">delete </a></td>
			</tr>
	<?php 
		}
	}
	else {
		?>
		<tr>
		<td> colspad = "5" > Data Tidak Ditemukan </td>
		</tr>
	<?php }
	?>
		</table>
	</article>
	
	
<footer>
<h2>Hesar Nur Ramaduloh (14111218)</h2>
<h3> "14 TIF Reguler malan" </h3>
</footer>
</div>
</body>
</html>