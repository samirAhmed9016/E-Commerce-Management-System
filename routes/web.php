<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\TestController;
use Illuminate\Bus\Batch;
// use App\Http\Controllers\test;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view::make('index');
});
// Route::get('users/{id?}', function ($id = null) {
//     return 'samir ' . $id;
// });
// Route::get('pro/create', function () {
//     return "samir";
// });
// Route::get('pro/edit', function () {
//     return "ahmed";
// });

// route::prefix('pro')->group(function () {
//     Route::get('create', function () {
//         return "samir";
//     });
//     Route::get('edit', function () {
//         return "ahmed";
//     });
// });
// route::group(['prefix=>pro'], function () {
//     Route::get('create', function () {
//         return "samir";
//     });
//     Route::get('edit', function () {
//         return "ahmed";
//     });
// });
// route::fallback(fn () => redirect::to('edit'));
// route::controller(test::class)->group(function () {
//     route::get('make', 'my_data');
// });
// route::get('make', 'test@my_data');
// route::resource('example', 'test1');
// Route::get('about', function () {
//     return view('about');
// });
// Route::get('samir', function () {
//     $filter = request('id');
//     if (isset($filter)) {
//         return 'hello samir and id is ' . strip_tags($filter);
//     }
//     return 'hello samir';
// });
// Route::get('store/{category?}/{item?}', function ($category = null, $item = null) {
//     if (isset($category)) {
//         if (isset($item)) {
//             return '<h1>' . $item . ' </h1>';
//         }
//         return "<h1>  {$category}  </h1>";
//     }
//     return '<h1> store </h1>';
// });


// Route::get('set/session', function () {
//     // session()->put(['test' => 'test_value']);//always here
//     //session()->flash('test', 'test_value'); //only one to use
//     //session()->put('test', 'test_value');
//     session(['test' => ['hi samir', 'hi noura']]);
//     //session()->put('test2', 'test_value2');
// });
// Route::get('get/session', function () {
//     //echo session('test');
//     //echo session('test2');
//     //session()->flush(); //delete
//     // session()->forget('test');
//     // dd(session()->all());
//     //dd(session()->missing('test'));
//     session()->push('test.items', 'samir1', 'samir2');
//     if (session()->exists('test')) {
//         return session('test');
//     }

//     // if (session()->has('test')) {
//     //     return session('test');
//     // }
// });


/*
|------------------------------------------|
| //http://127.0.0.1:8025/ ======>mail_hog |
|------------------------------------------|
*/

// use Illuminate\Support\Facades\Mail;

// Route::get('send/email', function () {
//     $data = [
//         'title' => 'this is title of email',
//         'body' => 'this is body of email'
//     ];
//     Mail::send([], $data, function ($message) {
//         $message->to('samirsayed94@gmail.com')
//             ->subject('Test Email from Laravel Application');
//     });
// });
////////////////////////////////////////////////////////////////////


route::resource('example', TestController::class);

route::delete('example/force/delete/{example}', 'TestController@forceDelete')->name('example.forceDelete');
route::post('example/restore/{example}', 'TestController@restore')->name('example.restore');


Auth::routes(['verify' => true]);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verified')->name('home');







Route::get('send/demo', function () {


    // $data = [
    //     'title' => 'test',
    //     'content' => 'test2'
    // ];
    // Mail::to('sa2291063@gmail.com')->queue(new \App\Mail\DemoMail($data));
    // dispatch(new App\Jobs\JobDemo);
    // dispatch(new App\Jobs\JobDemo1);
    bus::batch([
        new App\Jobs\JobDemo,
        new App\Jobs\JobDemo1,
    ])->then(function (Batch $batch) {
    })->catch(function (Batch $batch, Throwable $e) {
    })->dispatch();
});
