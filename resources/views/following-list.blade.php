<h3 class="font-bold text-xl mb-4">Following</h3>
<ul>
    @foreach (auth()->user()->follows as $user)
    <li class="mb-2">
        <div class="flex items-center text-sm">
            <a href="/profile/{{ $user->id }}">
                <img
                    src="{{ $user->avatar }}"
                    alt=""
                    class="rounded-full mr-2"
                >

            {{ $user->name }}
            </a>
        </div>
    </li>
    @endforeach
</ul>
