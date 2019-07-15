  <?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('homeuser', function () {
    return view('user.homeuser');
});

Route::get('skincare', function () {
    return view('user.skincare');
});

Route::get('makeup', function () {
    return view('user.makeup');
});

Route::get('fashion', function () {
    return view('user.fashion');
});

Route::get('viewadmin', function () {
    return view('admin.viewadmin');
});

Route::get('kategori', function () {
    return view('admin.kategori');
});

Route::get('riview', function () {
    return view('user.riview');
});

Route::resource('/list-post', 'BlogController');
Route::get('/add-post', 'BlogController@create')->name('add');
Route::get('/list-post', 'BlogController@index')->name('list');
Route::post('/add-post/post', 'BlogController@store');
Route::get('/list-post/delete/{id}', 'BlogController@destroy');
Route::get('/list-post/view/{id}', 'BlogController@show');
Route::get('/list-post/edit/{id}', 'BlogController@edit');
Route::get('/list-post/update/{id}', 'BlogController@update');

Route::get('dtpengunjung', function () {
    return view('pages.admin.dtpengunjung');
});

Route::get('profil', function () {
    return view('pages.admin.profil');
});

Route::get('login', 'BlogController@index');

Route::get('/', function(){
    return view('pages.admin.logaktivitas');
});

Route::get('post', function () {
    return view('pages.admin.post');
});