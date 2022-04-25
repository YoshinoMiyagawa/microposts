<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    //
    protected $fillable = ['content'];
    
    //この投稿を所有するユーザ。（ Userモデルとの関係を定義）
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    
    /**
     * この投稿をfav中のユーザ。（ Userモデルとの関係を定義）
     */
    public function favorite_users()
    {
        return $this->belongsToMany(User::class, 'favorites', 'micropost_id', 'user_id')->withTimestamps();
        //引数について
        //(関係先のmodelのクラス,中間テーブル,中間テーブル内の自分のid,を示すカラム名,関係先のid を示すカラム名)
    
    }
    
    
}
