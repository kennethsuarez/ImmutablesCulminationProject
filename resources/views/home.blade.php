@extends('layouts.app')

@section('content')
    <div class="lg:flex lg:justify-between">
        <div class="lg:w-1/6">
            @include ('sidebar-links')
        </div>

        <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">
            @include ('publish-panel')

            <div class="border border-gray-300 rounded-lg">
                @include ('post')
                @include ('post')
                @include ('post')
                @include ('post')
            </div>
        </div>

        <div class="lg:w-1/8">
            @include ('friends-list')
        </div>
    </div>
@endsection
