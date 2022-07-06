<div class="group w-full">
    <a href="/posts/{{$post->id}}">
        @if ($cover)
            <img class="object-cover shadow-md h-2/5 w-full -mb-10 -z-10" src="/imgs/mock.jpg" />
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
            <p class="flex gap-x-2">
                <span class="h-1 w-4 bg-primary self-center"></span>
                <span>
                    Lifestyle
                </span>
            </p>
            <h2 class="text-2xl mb-2 font-dm-serif-display tracking-wider font-bold duration-300 ease-in-out hover:text-primary">
                {{$post->title}}
            </h2>
            <p class="text-gray-700 mb-4 flex items-center gap-x-4">
                June 05, 2022 <x-circle className="text-gray-700" /> 4 min read
            </p>
            <p>
                <a class="link link-primary no-underline flex gap-x-2" href="/posts/{{$post->id}}">
                    Read Article <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </p>
        </div>
    </a>
</div>