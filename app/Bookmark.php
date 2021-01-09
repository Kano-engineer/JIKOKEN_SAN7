<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
   {
    //テーブル名
    protected $table = 'bookmarks';

    //可変項目(変わる項目)
    protected $fillable =
    [
        'user_id',
        'title',
        'url',
        'explanatory_text',
    ];

    //Bookmarkモデルからuserを唱えるとユーザーにアクセスできる
    public function user(){
        return $this->belongsTo(User::class);
    }
}
