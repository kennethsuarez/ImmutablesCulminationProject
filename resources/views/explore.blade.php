@extends('layouts.app')

@section('content')
    <div>
        @foreach ($users as $user)
            <div class="d-flex align-items-center">
                <img src="{{ $user->profile->profileImage() }}" height="150px" class="rounded-circle w-20">
                <a href ="/profile/{{ $user->id  }}" class="flex items-center mb-5">

                <!--
                <img src="{{$user->avatar}}"
                    alt="{{$user->username}}"
                    width="60"
                >-->

                    <div>
                        <h4 class="font-bold pt-5 pl-3">{{ '@' . $user->username }}</h4>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

@endsection
