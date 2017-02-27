<?php

use App\Mahasiswa;
echo "<nav>
	<ul>
	<li><b>MENU</b></li>
	<li><a href ='#'>Menu 1</a></li>
	<li><a href ='#'>Menu 2</a></li>
	<li><a href ='#'>Menu 3</a></li>

	</ul>
</nav>";
echo "<article>
			<form method = 'post'>
		<table border='1' width='50%' align='center'>
			<tr>
				<td align=center>NIS</td>
				<td align=center>Nama</td>
				<td align=center>Alamat</td>
				<td align=center>Edit</td>
				<td align=center>Hapus</td>
			</tr>";

		
			$mahasiswa = Mahasiswa::all();
        foreach ($mahasiswa as $mhs ) {	
		echo "<tr>
				<td align=center>";
				echo $mhs -> nis;
				echo "</td>
				<td align=center>";
				echo $mhs -> nama;
				echo "</td>
				<td align=center>";
				echo $mhs -> alamat;
				echo "</td>
				<td align=center><a href='{{URL('edit')}}'><button type='submit'>EDIT</button></a></td>
				<td align=center>Hapus</td>
			</tr>";
			 }
		echo "</table>
		
	</article>"
 ?>
