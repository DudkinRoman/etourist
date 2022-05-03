<?php
use Illuminate\Support\Facades\Route;

Route::get('/blog/category/{slug?}', 'BlogController@category')->name('category');
Route::get('/blog/article/{slug?}', 'BlogController@article')->name('article');

//lessons
Route::get('/less', [\App\Http\Controllers\Lesson\LessonController::class, 'selectL'])->name('selectL');
Route::get('/less/{type_lesson}/new/{ud}', [\App\Http\Controllers\Lesson\LessonController::class, 'AddNew'])->name('AddNew');
Route::post('/less/add', [\App\Http\Controllers\Lesson\LessonController::class, 'AddLesson'])->name('AddLesson');
Route::get('/less/{type_lesson}', [\App\Http\Controllers\Lesson\LessonController::class, 'lessons'])->name('lessons');
Route::get('/less/{type_lesson}/{less?}',  [\App\Http\Controllers\Lesson\LessonController::class,'less'])->name('less');
Route::get('/urok/{type_lesson}/{less?}',  [\App\Http\Controllers\Lesson\LessonController::class,'less'])->name('less');
Route::get('/urok/{type_lesson}/0',  [\App\Http\Controllers\Lesson\LessonController::class,'less'])->name('less');
Route::get('/urok/{type_lesson}/{less}/{urok}', [\App\Http\Controllers\Lesson\LessonController::class,'urok'])->name('urok');
//slovar  Dictinary
Route::get('/slovar', [\App\Http\Controllers\Dict\DictController::class,'showDict'])->name('showDict');
Route::post('/slovar', [\App\Http\Controllers\Dict\DictController::class,'wordsDict'])->name('wordsDict');
Route::get('/word/{id}',[\App\Http\Controllers\Dict\DictController::class,'wordDict'])->name('wordDict');
// games with words
Route::get('/topic',[\App\Http\Controllers\Games\GameController::class,'topic'])->name('topic');
Route::get('/topic/{id}',[\App\Http\Controllers\Games\GameController::class,'top'])->name('top');
Route::get('/game/{topic}/{game}',[\App\Http\Controllers\Games\GameController::class,'game'])->name('game');
// карточки для запоминания
Route::get('/cards',[\App\Http\Controllers\Memory\MemoryContraller::class,'MemoryGame'])->name('MemoryGame');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth'] ], function () {
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
    Route::resource('/category', 'CategoryController', ['as'=>'admin']);
    Route::resource('/article', 'ArticleController', ['as'=>'admin']);
    Route::group(['prefix' => 'user_managment', 'namespace' => 'UserManagment'], function() {
    Route::resource('/user', 'UserController', ['as' => 'admin.user_managment']);
});
    Route::get('/article/{slug}/delete_image', 'ArticleImageController@DeleteImage') -> name('admin.article.delete_image');

});


Route::get('/', function () {
//    return view('welcome');
    return view('blog.home');
});

Route::get('/admin', function () {
    //Gate::authorize('view-protected-part'); //to 403
    if(Gate::check('view-protected-part')){
        return view('admintest');
    }
    else {
        return "You arnt AUTH";
    }

})->middleware(['auth'])->name('inner');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class,'index'])->name('home');
