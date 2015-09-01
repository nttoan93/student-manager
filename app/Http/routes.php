<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*trang chu*/
Route::get('/', 'WelcomeController@index');

/*admin*/

Route::get('admin',array('as' => 'admin','uses'=>'AdminController@index'));

Route::get('admin/qlgiaovien/themgv', array('as'=>'themgiaovien','uses'=>'AdminController@themgiaovien'));

Route::get('admin/qlkhac/dantoc',array('as' => 'adqldantoc','uses'=>'AdminController@quanlidantoc'));

Route::post('admin/qlkhac/dantoc',array('as' => 'adqldantocpost','uses'=>'AdminController@quanlidantocpost'));

Route::get('admin/qlkhac/tongiao',array('as' => 'adqltongiao','uses'=>'AdminController@quanlitongiao'));

Route::get('admin/qlgiaovien/cngiaovien',array('as' => 'adcngiaovien','uses'=>'AdminController@capnhatgiaovien'));




/*hoc sinh*/

Route::get('hocsinh',array('as' => 'hocsinh','uses'=>'HocsinhController@index'));

Route::get('hocsinh/xemdiem',array('as' => 'hsxemdiem','uses'=>'HocsinhController@xemdiem'));

/*giao vien*/

Route::get('giaovien',array('as' => 'giaovien','uses'=>'GiaovienController@index'));









Route::get('temp', function(){
	return view('base.basegiaovien');
});


Route::get('schema/create/tongiao',function(){
	Schema::create('tongiao',function($table){
		$table->increments('id');
		$table->string('tentongiao');
	});

	});
Route::get('schema/create/hk1',function(){
	Schema::create('hk1',function($table){
		$table->increments('id');
		$table->integer('m1');
		$table->integer('m2');
		$table->integer('15p1');
		$table->integer('15p2');
		$table->integer('1t1');
		$table->integer('1t2');
		$table->integer('1t3');
		$table->integer('thi');
		$table->integer('idmh')->unsigned();
		$table->foreign('idmh')->references('id')->on('mon');

	});
});

Route::get('schema/create/dantoc',function(){
	Schema::create('dantoc',function($table){
		$table->increments('id');
		$table->string('tendantoc');
	});

	});


Route::get('get',function(){
	$data=DB::table('mon')->get();
	echo "<pre>";
	print_r($data);
	echo "</pre>";
});

Route::get('column',function(){
	$data=DB::table('mon')->select('tenmon')->get();
	echo "<pre>";
	print_r($data);
	echo "</pre>";
});

Route::get('or',function(){
	$data=DB::table('hk1')->select('id')->where('idmh',13)->orwhere('id',4)->get();
	echo "<pre>";
	print_r($data);
	echo "</pre>";
});

Route::get('where',function(){
	$data=DB::table('hk1')->select('id')->where('m2',7)->where('idmh',13)->get();
	echo "<pre>";
	print_r($data);
	echo "</pre>";
});
Route::get('limit',function(){
	$data=DB::table('hk1')->select('id')->skip(2)->take(2)->get();
	
	foreach ($data as $a ) {
		echo $a->id;
		echo "<br>";
	}
	
});

Route::get('between',function(){
	$data=DB::table('hk1')->select('id')->wherebetween('id',[2,5])->get();
	
	foreach ($data as $a ) {
		echo $a->id;
		echo "<br>";
	}
	echo "<br>";
	$data1=DB::table('hk1')->select('id')->wherenotbetween('id',[2,5])->get();
	
	foreach ($data1 as $a1 ) {
		echo $a1->id;
		echo "<br>";
	}
});

Route::get('wherein',function(){
	$data=DB::table('hk1')->select('id')->wherein('id',[1,3,5])->get();
	
	foreach ($data as $a ) {
		echo $a->id;
		echo "<br>";
	}

	$data=DB::table('hk1')->select('id')->wherenotin('id',[1,3,5])->get();
	
	foreach ($data as $a ) {
		echo $a->id;
		echo "<br>";
	}
	
});

Route::get('c',function(){
	$data=DB::table('hk1')->count();
	
	echo $data;
	echo "<br>";
	echo "<br>";
	$data=DB::table('hk1')->max('idmh');
	
	echo $data;
	echo "<br>";
	echo "<br>";
	$data=DB::table('hk1')->min('idmh');
	echo $data;
	echo "<br>";
	echo "<br>";

	$data=DB::table('hk1')->avg('idmh');
	echo $data;
	echo "<br>";
	echo "<br>";
	
	$data=DB::table('hk1')->sum('idmh');
	echo $data;
	echo "<br>";
	echo "<br>";
});

Route::get('insert',function(){
	DB::table('mon')->insert([
		['tenmon'=>'Tiếng Hàn'],
		['tenmon'=>'Tiếng Trung']
		]);
});





//Route::get('admin',array('as' => 'admin',function(){
//	return view('admin.homead');
//}));