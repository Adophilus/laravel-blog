<div>
    <form x-data="{
        name: '',
        email: '',
        message: ''
    }" x-on:submit.prevent="
        (function () {
            let data = {
                name,
                email,
                message
            }

            if (!!replyTo.comment)
                data.replyTo = replyTo.comment

            fetch('/api/posts/{{$post->id}}/comments', {
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                method: 'post',
                body: JSON.stringify(data)
            }).then((res) => res.text())
            .then((data) => {
                console.log(data)
                return
                name = ''
                email = ''
                message = ''
                onSubmitted ? onSubmitted() : null
            }).catch(err => console.log(err))
        })()
    ">
        <div class="flex flex-col gap-y-7">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10">
                <input x-model="name" type="text" required placeholder="Your name" class="input w-full bg-gray-200 focus:bg-white" />
                <input x-model="email" type="email" required placeholder="Your email" class="input w-full bg-gray-200 focus:bg-white" />
            </div>
            <div>
                <textarea x-model="message" required placeholder="Your Comments" class="w-full bg-gray-200 rounded border border-gray-300 input px-2 py-1 h-32 text-base outline-none text-gray-700 resize-none leading-6 transition-colors duration-200 ease-in-out focus:bg-white"></textarea>
            </div>
            <div class="flex justify-end">
                <button class="btn btn-primary" type="submit">
                    Post Comment
                </button>
            </div>
        </div>
    </form>
</div>