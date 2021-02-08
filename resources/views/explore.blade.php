@extends('layouts.app')

@section('content')
    <div>
        @foreach ($users as $user)
        <div class="flex items-center mb-5">
            
            <!-- 
                <img src="{{$user->avatar}}"
                    alt="{{$user->username}}"
                    width="60"
                >-->

            <div>
                <h4 class="font-bold">{{ '@' . $user->username }}</h4>
            </div>
        </div>
        @endforeach
    </div>
    
@endsection