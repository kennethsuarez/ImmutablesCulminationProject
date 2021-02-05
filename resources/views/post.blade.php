<div class="flex p-4 border-b border-b-gray-300" >
    <div class="mr-2" style="flex-shrink:0">
        <img 
        src="https://i.pravatar.cc/50?u={{ $post->user->email }}"
        alt=""
        class="rounded-full mr-2"
    >
</div>

    <div>
        <h5 class="font-bold mb-4">{{ $post->user->name }}</h5>
        <p class="text-sm mb-2">
            {{ $post->body }}
        </p>
        <p class="text-xs text-gray-500">Posted {{ $post->created_at->diffForHumans() }}</p>
    </div>
</div>