<div>
    <header class="section-title">
        <h3 class="flex gap-x-1">
            Comments <pre class="bg-inherit text-gray-700">({{count($post->comments)}})</pre>
        </h3>
    </header>
    <div class="text-xl divide-y-2 divide-gray-300">
        @foreach ($post->comments->splice(0, 3) as $comment)
            <div class="flex flex-col py-4 gap-y-1">
                <div>
                    <span class="font-bold">
                        {{$comment->poster}}
                    </span>
                </div>
                <div class="text-gray-700">
                    {{$comment->content}}
                </div>
                <div class="flex justify-end">
                    <span class="text-gray-500 cursor-pointer" x-on:click="replyTo = {
                        name: '{{$comment->poster}}',
                        comment: {{$comment->id}}
                    }">
                        Reply
                    </span>
                </div>
            </div>
        @endforeach
    </div>
</div>