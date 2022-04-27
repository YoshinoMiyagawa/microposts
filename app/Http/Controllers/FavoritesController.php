<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
   
    public function store($id)
    {
        
        
        \Auth::user()->favorite($id);
        return back();
    }

    /**
     * 投稿をお気に入りから外すアクション。
     *
     */
    public function destroy($id)
    {
        
        \Auth::user()->unfavorite($id);
        
        return back();
    }
    
    
    /**
     * このユーザに関係するモデルの件数をロードする。
     */
    public function loadRelationshipCounts()
    {
        $this->loadCount(['microposts', 'followings', 'followers']);
    }
    
}
