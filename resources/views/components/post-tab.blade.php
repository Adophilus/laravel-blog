<div class="w-full">
    <a href="/posts/{{$post->id}}">
        @if ($cover)
            <img class="object-cover h-2/5 shadow-md w-full -mb-10 -z-10" src="/imgs/mock.jpg" />
        @endif
        <div @class([
            "bg-gray-100",
            "z-10",
            "relative" => $cover,
            "w-11/12" => $cover,
            "px-6",
            "py-4",
            "shadow-md"
            ])>
            <div class="flex gap-x-2">
                <span class="h-1 w-4 bg-primary self-center"></span>
                <span>
                    Lifestyle
                </span>
            </div>
            <h2 class="text-2xl mb-2 font-dm-serif-display tracking-wider font-bold duration-300 ease-in-out hover:text-primary">
                {{$post->title}}
            </h2>
            <div class="text-gray-700 mb-4 flex items-center gap-x-4">
                {{date_format($post->updated_at, "M j, Y")}} <x-circle className="text-gray-700" /> {{$post->reading_time}} min read
            </div>
            <div>
                <a class="link link-primary no-underline flex gap-x-2" href="/posts/{{$post->id}}">
                    Read Article <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>
    </a>
</div>
