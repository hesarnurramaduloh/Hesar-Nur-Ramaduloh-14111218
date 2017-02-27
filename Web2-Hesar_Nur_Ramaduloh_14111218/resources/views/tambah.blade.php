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

	</nav>
	<article>
	<form  action="{{url('add_items/action')}}" method="post" enctype="multipart/form-data"  >
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	<h2 align="center">Tambah Data</h2>	
		<table border="1" width="75%" align="center">
			<tr>
				<td align=center>NIS</td>
				<td>:</td>
				<td><input type="text" name="nis" size="70"></input></td>
			</tr>
			<tr>
				<td align=center>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" size="70"></input></td>
			</tr>
			<tr>
				<td align=center>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" size="70"></input></td>
			</tr>
			<tr>

				<td colspan="3"><input type="submit" value="SIMPAN"><a href="{{URL('halamanawal')}}"><button type="button">BATAL</button></a></td>
			</tr>
		</table>
		</form>
	</article>
@stop
