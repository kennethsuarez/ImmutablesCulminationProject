@extends('layouts.app')

@section('content')
    <div class="lg:flex lg:justify-between">
        <div class="lg:w-1/6">
            @include ('sidebar-links')
        </div>

        <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">
            @include ('publish-panel')

            <div class="border border-gray-300 rounded-lg">
                @foreach($posts as $post)
                    @include('post')
                @endforeach
            </div>
        </div>

        <div class="lg:w-1/8">
            @include ('following-list')
        </div>
    </div>
@endsection
