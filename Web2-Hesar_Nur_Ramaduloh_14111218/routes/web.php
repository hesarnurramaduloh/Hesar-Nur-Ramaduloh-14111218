<?php
use App\Mahasiswa;

route::get ('/', 'viewcontroller@index');
route::get ('/halamanawal', 'viewcontroller@haawal');
//route::get ('/tambah', 'viewcontroller@htambah');
//route::get ('/edit', 'viewcontroller@hedit');



route::get('/tambah', function(){
$mahasiswa = new Mahasiswa ;
$mahasiswa -> nis = "11";
$mahasiswa -> nama = "nda";
$mahasiswa -> alamat = "sumedang";
$mahasiswa -> save ();
});

route::get('/edit', function(){
$mahasiswa = Mahasiswa::find(1);
$mahasiswa -> nis = "1212";
$mahasiswa -> nama = "hesar rama";
$mahasiswa -> alamat = "ndung";
$mahasiswa -> save ();
});

route::get('/tampil', function(){
	$mahasiswa = Mahasiswa::all();
	foreach ($mahasiswa as $mhs ) {
		echo "<b>nis</b>         :    ";
		echo $mhs -> nis;
		echo "<br> <b>Nama</b>   :   " ;
		echo $mhs -> nama;
		echo "<br> <b>Alamat</b> : ";
		echo $mhs -> alamat;
		echo "<br> <br>";
	}
});


route::get('/delete', function(){
$mahasiswa = Mahasiswa::find(2);
$mahasiswa -> delete ();
});



/*route::get('/',function(){
	return view('home');
	});
route::get('/halamanawal',function(){
	return view('halamanawal');
});
route::get('/tambah',function(){
	return view('tambah');
});
route::get('/edit',function(){
	return view('edit');
});*/