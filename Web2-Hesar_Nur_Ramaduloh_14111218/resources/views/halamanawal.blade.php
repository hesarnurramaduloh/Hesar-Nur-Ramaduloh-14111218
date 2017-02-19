@extends('templates.index')
@section('content')
<nav>
	<ul>
	<li><b>MENU</b></li>
	<li><a href ="#">Menu 1</a></li>
	<li><a href ="#">Menu 2</a></li>
	<li><a href ="#">Menu 3</a></li>

	</ul>
</nav>

		<article>
			<form method = "post">
		<table weidht = "60" align = "right">
		<tr>
			<td colspan="3" align="right"><a href="{{URL::to('/')}}"><button type="button">Logout</button></a>
		</tr>
		</table>
		</form>
		<br></br>
		<table border="1" width="50%" align="center">

			<td>
				<th><a href="{{URL('tambah')}}" ><button type="submit">TAMBAH</button></a></th>
			</td>
			<td>
				<th><a href="{{URL('edit')}}"><button type="submit">EDIT</button></a></th>
			</td>
			<tr>
				<td align=center>Kode barang</td>
				<td align=center>Nama Barang</td>
				<td align=center>Stok</td>
				<td align=center>Harga</td>
				<td align=center>Edit</td>
				<td align=center>Hapus</td>
			</tr>

		</table>
		
	</article>
	
@stop


