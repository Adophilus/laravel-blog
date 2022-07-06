@extends("layout.postlist")

@section("title")
	Posts
@endsection

@section("content")
	<!-- hero -->
	<section class="flex h-screen">
		<div class="flex justify-end items-center w-2/5">
		<div class="w-90 p-6 drop-shadow-2xl translate-x-1/2 z-10 bg-white py-10">
			<h1 class="font-bold text-4xl mb-2">
				{{$posts[0]->title}}
			</h1>
			<h3 class="mb-4">
				{{$posts[0]->desc}}
			</h3>
			<p>
				<button class="btn btn-primary">Read More</button>
			</p>
		</div>
		</div>
		<div class="bg-gray-500 grow">
	        <img class="object-cover drop-shadow-2xl w-full -z-10" style="height: 110%" src="/imgs/mock.jpg" />
		</div>
	</section>

	<!-- Recent Posts -->
	<section class="bg-white py-10">
		<div class='my-container px-8'>
			<header class="section-title">
				<h3>
					Recent Posts
				</h3>
				<span></span>
			</header>

			<div class="flex justify-center gap-x-10">
				@for ($i = 0; $i < 3; $i++)
					<x-post-tab :cover="false" :post="$posts[$i]" />
				@endfor
			</div>
		</div>
	</section>

	<!-- Latest Posts -->
	<section class="bg-white py-10">
		<div class='my-container px-8'>
			<header class="section-title">
				<h3>
					Latest Posts
				</h3>
				<span></span>
			</header>

			<div class="flex flex-col gap-y-5">
				<div class="flex justify-center gap-x-10">
					@for ($i = 0; $i < 3; $i++)
						<x-post-tab :post="$posts[$i]" />
					@endfor
				</div>
				<div class="flex justify-center gap-x-10">
					@for ($i = 3; $i < 6; $i++)
						<x-post-tab :post="$posts[$i]" />
					@endfor
				</div>
			</div>
		</div>
	</section>

	<!-- Featured Posts -->
	<section class="bg-white py-10">
		<div class='my-container px-8'>
			<header class="section-title">
				<h3>
					Featured Posts
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

	<!-- All Posts -->
	<section class="bg-white py-10">
		<div class='my-container px-8'>
			<header class="section-title">
				<h3>
					All Posts
				</h3>
				<span></span>
			</header>

			<div class="flex gap-x-10">
				<div>
					<div class="flex justify-center gap-x-10">
						@for ($i = 0; $i < 2; $i++)
					<x-post-tab :post="$posts[$i]" />
				@endfor
					</div>
					<div class="flex justify-center gap-x-10">
						@for ($i = 2; $i < 4; $i++)
							<x-post-tab :post="$posts[$i]" />
						@endfor
					</div>
				</div>
				<div>
					<h3>
						Featured Category
					</h3>
					<div class="flex flex-col gap-y-2">
						<div class="flex bg-gray-500">
							<h4 class="bg-white px-2 py-1">
								Travel
							</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection