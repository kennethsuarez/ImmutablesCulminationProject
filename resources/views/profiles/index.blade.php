@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 pr-5">
                
                <img src="{{ asset('storage/'.$user->profile->image) }}" height="150px" class="rounded-circle">

            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between pb-3 align-items-center">
                    <div class="font-bold"><h1 style="font-size:30px">{{ $user->username }}</h1></div>

                    @can('update', $user->profile)
                        <a href="#">Add New Post</a>
                    @endcan
                </div>

                <div class="flex mb-2"> 
                    @can('update', $user->profile)
                    <a 
                        class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2" 
                        href="/profile/{{ $user->id }}/edit"
                    >Edit Profile</a>
                    @endcan

                    <form method="POST" action="/profile/{{$user->id}}/follow">
                        @csrf
                        <button type="submit"
                            class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs" 
                        >Follow</button>
                    </form>
                </div>

                <div class="d-flex">
                    <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> {{Str::plural('post', $user->posts->count())}}</div>
                    <div class="pr-5"><strong>{{ $user->follows->count() }}</strong> followers</div>
                    <div class="pr-5"><strong>{{ $user->follows->count() }}</strong> following</div>
                </div>
                <div class="pt-4 font-weight-bold"> {{ $user->profile->title }} </div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="#">{{ $user->profile->url }}</a></div>
            </div>
        </div>

        <div class="row pt-5">
            <div class="col-4">
                <img src="https://pbs.twimg.com/media/ERO7sYjXUAAZVAi.jpg" alt="" class="w-100">
            </div>
            <div class="col-4">
                <img src="https://pbs.twimg.com/media/EbyQ51DXgAcA_gs.jpg" alt="" class="w-100">
            </div>
            <div class="col-4">
                <img src="https://sbly-web-prod-shareably.netdna-ssl.com/wp-content/uploads/2020/06/03165105/tucker-1.jpg" alt="" class="w-100">
            </div>
        </div>
    </div>
@endsection