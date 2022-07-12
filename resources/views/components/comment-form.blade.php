<div>
    <form x-on:submit="((e) => {
        const hiddenReplyTo = $el.querySelector('input[name=replyTo]')
        hiddenReplyTo.value = replyTo.comment
    })($event)" method="POST" action="/api/posts/{{$post->id}}/comments">
        @csrf
        <div class="flex flex-col gap-y-7">
            <input type="hidden" name="replyTo">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10">
                <input name="name" type="text" required placeholder="Your name" class="input w-full bg-gray-200 focus:bg-white" />
                <input name="email" type="email" required placeholder="Your email" class="input w-full bg-gray-200 focus:bg-white" />
            </div>
            <div>
                <textarea name="message" required placeholder="Your Comments" class="w-full bg-gray-200 rounded border border-gray-300 input px-2 py-1 h-32 text-base outline-none text-gray-700 resize-none leading-6 transition-colors duration-200 ease-in-out focus:bg-white"></textarea>
            </div>
            <div class="flex justify-end">
                <button class="btn btn-primary" type="submit">
                    Post Comment
                </button>
            </div>
        </div>
    </form>
</div>