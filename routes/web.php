<?php

use Illuminate\Support\Facades\Route;

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
    return view('top');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//マイプロフィール画面へ遷移
Route::get('/home/myprofile', 'HomeController@showMyProfile')->name('profile');

//マイプロフィール画面から画像をアップする
Route::post('/home/myprofile', 'HomeController@storeMyImg')->name('storeImg');

Route::get('/post', 'HomeController@push')->name('push');

//todoとdiary作成画面へ遷移
Route::get('/post/todo_daily','PostController@index');

//todoとdiary作成して、画面遷移
Route::post('/post/todo_daily','PostController@post');

//todoとdiary作成完了画面へ遷移 
// ➡︎不要？
Route::get('/post/send','PostController@send');

//target作成画面へ遷移
Route::get('/post/target','TargetController@index');

//bigとmiddle作成して、画面遷移
Route::post('/post/target','TargetController@post');

//bigとmiddle作成完了画面へ遷移
Route::get('/post/send','TargetController@send');

//ブックマーク画面へ遷移
Route::get('/post/bookmark/{id}','BookmarkController@index');

//ブックマークを作成して、画面遷移
Route::post('/post/bookmark/{id}','BookmarkController@post');

//ブックマークを作成完了画面へ遷移
Route::get('/post/send','BookmarkController@send');

//ブックマークリスト画面へ遷移
Route::get('/post/bookmark_list/{id}','BookmarkController@showList');

//timelineを表示
Route::get('/post/timeline','PostController@showTimeline')->name('showTimeline');

//timelineのコメントを表示
Route::get('/post/comment/{id}','PostController@showComment')->name('showComment');

//timelineのコメント投稿
Route::post('/post/comment/{id}','PostController@postComment');

//timelineのコメント編集ページへ移動
Route::get('/post/commentedit/{id}/{comment_id}','PostController@editComment')->name('editComment');

//timelineのコメント編集ページへ移動
Route::post('/post/commentedit/{id}/{comment_id}','PostController@postEditComment')->name('postEditComment');

//timelineのコメントを削除
Route::get('/post/commentdelete/{id}/{comment_id}','PostController@deleteComment')->name('deleteComment');

//ユーザープロフィール画面へ遷移
Route::get('/userprofile/{id}', 'HomeController@showUserProfile')->name('userprofile');

// ゲストログイン
Route::get('/login/guest', 'Auth\LoginController@guestLogin');