@extends('layouts.app')

@section('content')
    @foreach($users as $user)
    <div class="flex items-center mb-5">
        <!-- @foreach ($users as $user)
            <img src="{{$user->avatar}}"
                alt="{{$user->username}}"
                width="60"
            >
        @endforeach -->

        <div>
            <h4 class="font-bold">{{ '@' . $user->id}}</h4>
        </div>
    </div>
    @endforeach
@endsection