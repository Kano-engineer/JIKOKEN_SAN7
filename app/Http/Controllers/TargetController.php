<?php

namespace App\Http\Controllers;

use App\User;
use App\Target;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TargetController extends Controller
{
    //todo or diary 作成画面を表示
    public function index(){
        // $posts=Target::all();
        // dd($posts);
         return view('post.target_index');
    }

    //DBに登録し、投稿完了画面へ
    public function post(Request $request){
             $user = Auth::user();

        //bigがpostされた時
        if($request->has('big')){
             $bigPost = $request->all();
             Target::create($bigPost);
             $bigPost = array(
             'big' => $request->input('big'),
        );
         return view('post.send');

        //middleがpostされた時
        }elseif($request->has('middle')){
             $middlePost = $request->all();
             Target::create($middlePost);
             $middlePost = array(
             'middle' => $request->input('middle'),
        );
         return view('post.send');
        };
    }
    
    //big or middle 作成完了画面を表示
    public function send(){
         return view('post.send');
    }

}
