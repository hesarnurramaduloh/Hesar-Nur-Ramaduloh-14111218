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
	<form action="{{route('siswa.update', $mahasiswa->id)}}" method="post">
					<input name="_method" type="hidden" value="PATCH">
					{{csrf_field()}}
					<tr>
				<h2 align="center">Ubah Data</h2>
					<table border="1" width="75%" align="center">
			<tr>
				<td align=center>NIS</td>
				<td>:</td>
						<td><input type="text" name="nis" size="70" class="form-control" placeholder="NIS" value="{{$mahasiswa->nis}}"></td>

			</tr>
			<tr>
				<td align=center>Nama</td>
				<td>:</td>
						<td><input type="text" name="nama" size="70" class="form-control" placeholder="Nama" value="{{$mahasiswa->nama}}"></td>

			</tr>
			<tr>
				<td align=center>Alamat</td>
				<td>:</td>
						<td><input type="text" name="alamat" size="70" class="form-control" placeholder="Alamat" value="{{$mahasiswa->alamat}}"></td>
				</tr>
			<tr>
						<td align="center">
							<input type="submit" class="btn btn-primary" value="Simpan" onclick="return confirm('Anda yakin akan merubah data ?');"><a href="{{URL('halamanawal')}}"><button type="button">BATAL</button></a></td>
				</tr>
			</table>
			</form>
	</article>
@stop






























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