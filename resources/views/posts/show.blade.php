@extends("layout.post")

@section("title")
	{{$post->title}}
@endsection

@section("content")
	<!-- Banner -->
	<section class="bg-gray-500 relative flex items-end justify-center bg-center" style="height: 60vh; background-image: url('/imgs/mock.jpg')">
		&nbsp;
		<div class="my-container drop-shadow-2xl bg-white p-6 py-10 translate-y-1/2">
			<header>
			<h1 class="font-medium text-6xl mb-4 font-dm-serif-display tracking-wider">
				{{$post->title}}
			</h1>
			<div class="flex gap-x-6">
				<div class="flex gap-x-2">
					<img src="/imgs/author.svg" class="w-10 h-10 rounded-full" />
					<span class="self-center">
						{{$post->author}}
					</span>
				</div>
				<x-circle className="self-center text-gray-500" />
				<div class="text-gray-500 self-center">
					June 5, 2022
				</div>
				<x-circle className="self-center text-gray-500" />
				<div class="text-gray-500 self-center">
					4 min read
				</div>
				<div class="flex gap-x-4 items-center ml-auto">
					<x-social-btn-fb :post="$post" />
					<x-social-btn-twitter :post="$post" />
				</div>
			</div>
		</header>
		</div>
	</section>

	<section class="bg-white">
		<!-- Spacer -->
		<div class="h-52 bg-white"></div>
		<section x-data="{
			content: '',
			init () {
				fetch('/post.html')
					.then(res => res.text())
					.then(data => this.content = data)
			}
		}" class="my-container flex">
			<!-- Sidebar Widget -->
			<div class="flex flex-col gap-y-10 basis-1/2">
				<div>
					<i class="fa-solid text-primary fa-thumbs-up"></i> 20 Likes
				</div>
				<div>
					<i class="fa-solid text-primary fa-message"></i> 100 Comments
				</div>
			</div>

			<div>
				<!-- Blog post content -->
				<div x-html="content" class="mb-20"></div>

				<!-- Blog post footer -->
				<div class="flex items-center justify-center gap-x-6 border-y-2 border-gray-300 py-10">
					<div>
						<button class="btn btn-primary btn-wide flex gap-x-2">
							<i class="fa-solid fa-thumbs-up"></i> Like
						</button>
					</div>
					<div class="flex gap-x-4">
						<span class="self-center">
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
			<header class="section-title">
				<h3 class="capitalize">
					You may also like
				</h3>
				<span></span>
			</header>

			<div class="flex justify-center gap-x-10">
				@for ($i = 0; $i < 2; $i++)
					<x-post-tab :post="$posts[$i]" />
				@endfor
			</div>
		</div>
	</section>
@endsection