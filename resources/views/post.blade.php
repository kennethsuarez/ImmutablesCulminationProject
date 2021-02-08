<div class="flex p-4 border-b border-b-gray-300" >
    <div class="mr-2" style="flex-shrink:0">
        <img
        src="{{ $post->user->profile->profileImage() }}"
        alt=""
        class="rounded-full mr-2 w-20"
    >
</div>

    <div class="w-full">
        <h5 class="font-bold mb-2">{{ $post->user->name }}</h5>
        <div class="flex flex-col justify-between">
            <p class="text-sm mb-2">
                {{ $post->body }}
            </p>

            <div class="flex justify-between">
                <div class="">
                    <p class="text-xs text-gray-500" title="{{$post->created_at->setTimezone('Asia/Taipei')->format('M d, Y h:i A')}}">Posted {{ $post->created_at->diffForHumans() }}</p>
                </div>
                @auth
                <div class="flex w-2/12 justify-between">
                @if (!$post->likedBy(auth()->user()))
                    <div class="mr-2 text-gray-500">
                        <form action="{{ route('posts.likes', $post) }}" method="post">
                            @csrf
                            <button type="submit" title="Like">
                                <span class="icon">
                                    <i class="fa fa-heart"></i> <!--Like Button-->
                                </span>
                            </button>
                        </form>
                    </div>
                @else
                    <div class="mr-2 text-blue-500">
                        <form action="{{ route('posts.destroy', $post) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" title="Unlike">
                                <span class="icon">
                                    <i class="fa fa-heart" aria-hidden="true"></i> <!--Unlike Button-->
                                </span>
                            </button>
                        </form>
                    </div>
                @endif
                    <div>
                        <p class="text-sm text-gray-500">
                        {{$post->likes->count()}} {{Str::plural('like', $post->likes->count())}}
                        </p>
                    </div>
                </div>
                @endauth
            </div>

        </div>
    </div>
</div>
