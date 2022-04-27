

    @if (Auth::user()->is_favorites($micropost->id)){{-- ここに今見ている投稿のidを入れたい--}}
        
        {{-- お気に入りするボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.destroy', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('お気に入りから外す', ['class' => "btn btn-secondary btn-sm"]) !!}
        {!! Form::close() !!}
    @else
        {{-- お気に入り外すボタンのフォーム FavoritesControllerのfavoriteファンクションにアクセス？--}}
        {!! Form::open(['route' => ['favorites.store', $micropost->id]]) !!}
            {!! Form::submit('お気に入り', ['class' => "btn btn-primary btn-sm"]) !!}
        {!! Form::close() !!}
    @endif

                      
                       
     