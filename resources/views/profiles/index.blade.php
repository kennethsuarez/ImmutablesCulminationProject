@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 pr-5">
                <img src="https://yt3.ggpht.com/ytc/AAUvwnhbv9F6Du9P6GVUYfap8qBfe2_nUGqH6xm3HE9C3Q=s900-c-k-c0x00ffffff-no-rj" height="150px" class="rounded-circle">

            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between pb-4 align-items-center">
                    <div class="font-bold padding"><h1 style="font-size:30px">{{ $user->username }}</h1></div>
                    <a href="#">Add New Post</a>
                    <a href="#">Edit Profile</a>
                </div>

                <div class="d-flex">
                    <div class="pr-5"><strong>153</strong> posts</div>
                    <div class="pr-5"><strong>23k</strong> followers</div>
                    <div class="pr-5"><strong>212</strong> following</div>
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
