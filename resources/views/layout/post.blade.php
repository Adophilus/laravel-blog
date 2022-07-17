@extends("layout.base")


@section("title")
	{{$post->title}}
@endsection

@section("errors")
	@if ($errors->any())
    @foreach ($errors->all() as $error)
      <div x-init="setInterval(() => show = false, 3000)" x-transition.duration.2000ms x-data="{ show: true }" x-show="show" class="alert alert-error shadow-lg">
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
        <span>{{$error}}</span>
      </div>
      <div class="flex-none">
        <button class="btn btn-sm btn-error">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>
    </div>
    @endforeach
	@endif
@endsection

@section("content")
  <!-- Banner (mobile) -->
  <section class="md:hidden bg-white">

  <div class="py-2">
    <img src="/imgs/mock.jpg" style="max-height: 50vh" class="w-full object-cover"/>
  </div>
  <div class="my-container">
      <div>
        <h1 class="capitalize font-medium text-4xl mb-4 font-dm-serif-display tracking-wider" style="overflow-wrap: anywhere">
          {{$post->title}}
        </h1>
      </div>
      <div class="flex gap-x-2">
        <div>
          <img src="data:image/jpeg;base64,{{$post->author->profile}}" class="w-10 h-10 rounded-full" />
        </div>
        <div>
          <span class="self-center">
            {{$post->author->first_name}} {{$post->author->last_name}}
          </span>
          <div class="flex gap-x-4">
            <span class="text-gray-500 self-center">
              {{date_format($post->updated_at, "M j, Y")}}
            </span>
            <x-circle className="self-center text-gray-500" />
            <span class="text-gray-500 self-center">
            {{$post->reading_time}} min read
            </span>
          </div>
        </div>
      </div>
      <div class="my-2">
        <div class="flex justify-end gap-x-4 items-center mx-4">
          <x-social-btn-fb :post="$post" />
          <x-social-btn-twitter :post="$post" />
          </div>
        </div>
      </div>
  </section>

  <!-- Banner -->
	<section class="hidden bg-gray-500 relative md:flex items-end justify-center bg-center" style="height: 60vh; background-image: url('/imgs/mock.jpg')">
		&nbsp;
		<div class="my-container drop-shadow-2xl bg-white p-6 py-10 translate-y-1/2">
			<header>
				<div class="flex gap-x-2">
            <span class="h-1 w-4 bg-primary self-center"></span>
            <span>
              {{$post->category->name}}
            </span>
        </div>
				<h1 class="font-medium text-6xl mb-4 font-dm-serif-display tracking-wider">
					{{$post->title}}
				</h1>
				<div class="flex flex-col gap-y-2 items-center sm:flex-row gap-x-6">
					<div class="flex gap-x-2">
						<img src="data:image/jpeg;base64,{{$post->author->profile}}" class="w-10 h-10 rounded-full" />
						<span class="self-center">
							{{$post->author->first_name}} {{$post->author->last_name}}
						</span>
					</div>
					<x-circle className="hidden sm:block self-center text-gray-500" />
					<div class="flex gap-x-4">
						<div class="text-gray-500 self-center">
							{{date_format($post->updated_at, "M j, Y")}}
						</div>
						<x-circle className="self-center text-gray-500" />
						<div class="text-gray-500 self-center">
            {{$post->reading_time}} min read
						</div>
					</div>
					<div class="flex gap-x-4 items-center sm:ml-auto">
						<x-social-btn-fb :post="$post" />
						<x-social-btn-twitter :post="$post" />
					</div>
				</div>
			</header>
		</div>
	</section>

	<section class="bg-white">
		<!-- Spacer -->
		<div class="md:h-52 bg-white"></div>
		<section x-data="{
			content: '',
      init () {
      /*
				fetch('/post.html')
					.then(res => res.text())
          .then(data => this.content = data)
      */
			}
		}" class="my-container flex">
			<!-- Sidebar Widget -->
			<div class="basis-3/4 hidden lg:block">
				<div class="top-20 sticky flex flex-col gap-y-10">
					<div>
						<i class="fa-solid text-primary fa-thumbs-up"></i> 20 Likes
					</div>
					<div>
						<i class="fa-solid text-primary fa-message"></i> 100 Comments
					</div>
				</div>
			</div>

			<div>
				<!-- Blog post content -->
        <!-- <div x-html="content" class="mb-20 lg:mx-32"></div> -->
				<div class="mb-20 lg:mx-32">
					@section("post-content")
					@show
				</div>

				<!-- Blog post footer -->
				<div class="flex flex-col md:flex-row gap-y-6 items-center justify-center gap-x-10 border-y-2 border-gray-300 py-10">
					<div>
						<button class="btn btn-primary btn-wide flex gap-x-2">
							<i class="fa-solid fa-thumbs-up"></i> Like
						</button>
					</div>
					<div class="flex gap-x-4">
						<span class="self-center hidden lg:block">
							Share the post:
						</span>
						<div class="flex gap-x-4">
							<x-social-btn-fb :post="$post" />
							<x-social-btn-twitter :post="$post" />
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>

	<!-- Featured Posts -->
	<section class="bg-white py-10">
		<div class='my-container px-8'>
			<div class="flex justify-between">
				<header class="section-title">
					<h3 class="capitalize">
						You may also like
					</h3>
					<span></span>
				</header>
				<a class="link link-primary no-underline self-center text-xl hidden sm:block" href="/posts">
					View All
				</a>
			</div>

			<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
				@foreach ($posts->take(2) as $post)
					<x-post-tab :post="$post" />
				@endforeach
			</div>
		</div>
	</section>

	@include("inc.comments", ["post" => $post])
	
@endsection
