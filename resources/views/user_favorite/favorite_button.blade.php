    @if (Auth::user()->is_favoriting($microposts->id))
        {!! Form::open(['route' => ['user.unfavorite', $microposts->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
   @else
        {!! Form::open(['route' => ['user.favorite', $microposts->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
   @endif