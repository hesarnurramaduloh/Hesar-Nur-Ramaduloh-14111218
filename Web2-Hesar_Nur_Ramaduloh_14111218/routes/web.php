<?php
route::get ('/', 'viewcontroller@index');
route::get ('/halamanawal', 'viewcontroller@haawal');
route::get ('/tambah', 'viewcontroller@htambah');
route::get ('/edit', 'viewcontroller@hedit');


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