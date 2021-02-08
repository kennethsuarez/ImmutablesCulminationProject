@extends('layouts.app')

@section('content')
    <div>
        @foreach ($users as $user)
            <img src="{{$user->avatar}}"
                alt="{{$user->username}}"
                width="60"
            >
        @endforeach
    </div>
@endsection