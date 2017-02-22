@extends('templates.index')
@section('content')
	<article>
	<form method = "post">
		<table weidht = "60" align = "center">
		<tr>
		<th align = "center" colspan = "2">LOGIN </th>
		</tr>
		<tr> 
			<td> Username </td>
			<td> <input type = "text" name = "username" size = "80"></td>
		</tr>
		<tr>
			<td> <br></br>Password </td>
			<td> <input type = "text" name = "password" size = "80"></td>
		</tr>
		<tr>
			<td colspan="3" align="right"><a href="{{URL('halamanawal')}}"><button type="button">Login</button></a><input type="button" value="Batal"></input></td>
		</tr>
		</table>
		</form>
	</article>
	

@stop
