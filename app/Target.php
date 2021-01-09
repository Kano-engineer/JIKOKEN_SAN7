<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    //テーブル名
    protected $table = 'targets';

    //可変項目(変わる項目)
    protected $fillable =
    [
        'user_id',
        'big',
        'middle'
    ];

    //Targetモデルからuserを唱えるとユーザーにアクセスできる
    public function user(){
        return $this->belongsTo(User::class);
    }
}
