@extends("layout.postlist")

@section("title")
	Posts
@endsection

@section("content")
	<!-- All Posts -->
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

@endsection