<div class="border border-blue rounded-lg py-6 px-8 mb-8">
    <form action="posts" method="post">
        @csrf
        <textarea
            name="body"
            class="w-full"
            placeholder="What's on your mind?"
            required
        ></textarea>
        
        <hr class="my-4">

        <footer class="flex justify-between">
            <img 
            src="https://i.pravatar.cc/40?u={{ auth()->user()->email }}"
            alt=""
            class="rounded-full mr-2"
            >

            <button type="submit" class="bg-blue-500 shadow rounded-lg py-2 px-2 text-white">Post</button>
        </footer>
    </form>
</div>