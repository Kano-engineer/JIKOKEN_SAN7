<?php

namespace App\Http\Controllers;

use App\User;
use App\Bookmark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    public function index($id){
        $user=User::find($id);

        return view('post.bookmark',['user' => $user]);
    }

    public function post(Request $request) {

        //$user = Auth::user();
        $user = User::where('id', $request->user_id)->first();

        // ビューで使う配列データの作成
        $bookmark = $request->all();
        Bookmark::create($bookmark);
		//$bookmark = array(
		//	'title' => $request->input('title'),
		//	'url' => $request->input('url'),
		//	'explanatory_text' => $request->input('explanatory_text'),
        //);

        return view('post.send',['user' => $user]);
}
        //bookmark 作成完了画面を表示
    public function send(){
        return view('post.send');
    }

    //リスト画面表示
    public function showList($id){
        $bookmarks = Bookmark::where('user_id', $id)->get();

        $user = User::where('id', $id)->first();
        return view('post.bookmark_list',['bookmarks' => $bookmarks],['user' => $user]);
    }
}
