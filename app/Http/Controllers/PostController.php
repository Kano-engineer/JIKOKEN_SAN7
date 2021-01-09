<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use App\Target;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //todo or diary 作成画面を表示
    public function index(){
         return view('post.todo_daily_index');
    }

    //DBに登録し、投稿完了画面へ
    public function post(Request $request){
             $user = Auth::user();

        //todoがpostされた時
        if($request->has('todo')){
             $todoPost = $request->all();
             Post::create($todoPost);
             $todoPost = array(
             'todo' => $request->input('todo'),
        );
         return view('post.send');

        //diaryがpostされた時
        }elseif($request->has('daily')){
              $diaryPost = $request->all();
              Post::create($diaryPost);
              $diaryPost = array(
              'diary' => $request->input('diary'),
        );
         return view('post.send');
        };
    }

    //todo or diary 作成完了画面を表示
    public function send(){
         return view('post.send');
    }

    //タイムライン画面を表示
    public function showTimeline(){
             $posts=Post::all();
         return view('post.timeline',['posts' => $posts],);
    }

    //timelineのコメント画面を表示
    public function showComment($id){

             //timelineのpostから詳細投稿を取得
             $post=Post::find($id);

             //投稿者を判別するためのリレーション処理
             $user_name = Post::find($id)->user->name;

             //コメントを全て取ってくる
             $comments=Comment::all();

         //withメソッドで値をviewへ返す
         return view('post.comment',['post' => $post],['comments' => $comments])->with('user_name',$user_name);
    }

    //timelineのコメントを投稿
    public function postComment(Request $request_comment,$id)
    {
        //timelineのpostから詳細投稿を取得
        $post=Post::find($id);

        //投稿者を判別するためのリレーション処理
        $user_name = Post::find($id)->user->name;


       //データを受け取る
        $input = $request_comment->all();
  
        Comment::create($input);
        $comments=Comment::all();

        //withメソッドで値をviewへ返す
        return view('post.comment',['post' => $post],['comments' => $comments])->with('user_name',$user_name);
    }

    //timelineのコメント編集画面へ遷移
    public function editComment($id,$comment_id){
        //timelineのpostから詳細投稿を取得
        $post=Post::find($id);

        //投稿者を判別するためのリレーション処理
        $user_name = Post::find($id)->user->name;

        //コメントを全て取ってくる
        //$comments=Comment::all();
        $comment=Comment::find($comment_id);

        //withメソッドで値をviewへ返す
        return view('post.commentedit',['post' => $post],['comment' => $comment])->with('user_name',$user_name);
    }

    //timelineのコメントを編集
    public function postEditComment(Request $request)
    {
        //timelineのpostから詳細投稿を取得
        $post=Post::find($id);

        //投稿者を判別するためのリレーション処理
        $user_name = Post::find($id)->user->name;


       //データを受け取る
        $edit_comment=$request->comment;
        $edit_comment_id = $request->comment_id;
        
        //$comment_idを持つコメントレコードを削除
        $deletecomment = \App\Comment::find($edit_comment_id);
        $deletecomment->delete();

        //データを受け取る
        $input = $request_comment->all();
  
        Comment::create($input);
        $comments=Comment::all();

        //withメソッドで値をviewへ返す
        return view('post.comment',['post' => $post],['comments' => $comments])->with('user_name',$user_name);
    }

    
    //timelineのコメントを削除
    public function deleteComment($id,$comment_id){
        //timelineのpostから詳細投稿を取得
        $post=Post::find($id);

        //投稿者を判別するためのリレーション処理
        $user_name = Post::find($id)->user->name;

        //$comment_idを持つコメントレコードを削除
        $deletecomment = \App\Comment::find($comment_id);
        $deletecomment->delete();

        //コメントを全て取ってくる
        $comments=Comment::all();

        //withメソッドで値をviewへ返す
        return view('post.comment',['post' => $post],['comments' => $comments])->with('user_name',$user_name);
    }
}