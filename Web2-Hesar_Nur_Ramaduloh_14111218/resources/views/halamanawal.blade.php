
@extends('templates.index')
@section('content')

		<article>
			<form id="logout-form" action="{{ route('logout') }}" method="POST">
                                            {{ csrf_field() }}
		<table weidht = "60" align = "right">
		<tr>
			<td colspan="3" align="right"><button type="submit">Logout </button></a>
		</tr>
		</table>
		</form>
		<br></br>
		<form method = "post">
		<table weidht = "100" align = "center">
		<tr>
			<td colspan="3" align = "center"><a href="{{URL('tambah')}}"><button type="button">Tambah</button></a>
		</tr>
	<nav>
	<ul>
	<li><b>MENU</b></li>
	<li><a href ='#'>Menu 1</a></li>
	<li><a href ='#'>Menu 2</a></li>
	<li><a href ='#'>Menu 3</a></li>

	</ul>
	</nav>

	<article>
			<form method = "post">
		<table border="1" width="50%" align="center">
			<tr>
				<td align=center>NIS </td>
				<td align=center>Nama </td>
				<td align=center>Alamat </td>
			</tr>		
			@foreach ($mahasiswa as $mhs ) 	
		<tr>
				<td align=center> {{ $mhs -> nis}}</td>
				<td align=center> {{ $mhs -> nama}}</td>
				<td align=center> {{ $mhs -> alamat}}</td>
                <td><form method="POST"  action="{{ route('siswa.destroy', $mhs->id) }}" >
		                            <input name="_method" type="hidden" value="DELETE">
		                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
		                            <a href="{{route('siswa.edit', $mhs->id)}}" class="btn btn-primary"><input type="button" value="Edit"></a>
		                        	<input type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');" value="Delete">
		                        </form></td>
			</tr>
			 @endforeach
		</table>
		
	</article>
	
@stop

 