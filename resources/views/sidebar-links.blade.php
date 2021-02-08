<ul>
    <li><a
        class = "font-bold text-lg mb-4 block"
        href="/"
        >Home</a></li>

    <li><a
            class = "font-bold text-lg mb-4 block"
            href="/profile/{{ auth()->user()->id  }}"
        >Profile</a></li>

    <li><a
        class = "font-bold text-lg mb-4 block"
        href="/explore"
        >Explore</a></li>

    <li><a
        class = "font-bold text-lg mb-4 block"
        href="/"
        >Messages</a></li>
</ul>
