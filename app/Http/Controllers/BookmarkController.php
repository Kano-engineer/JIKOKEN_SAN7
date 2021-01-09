<?php

namespace App\Http\Controllers;

use App\User;
use App\Bookmark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    public function index(){
        return view('post.bookmark');
    }

    public function post(Request $request) {

        $user = Auth::user();

        // ビューで使う配列データの作成
        $bookmark = $request->all();
        Bookmark::create($bookmark);
		$bookmark = array(
			'title' => $request->input('title'),
			'url' => $request->input('url'),
			'explanatory_text' => $request->input('explanatory_text'),
        );
        return view('post.send');
}
        //bookmark 作成完了画面を表示
    public function send(){
        return view('post.send');
    }
}
