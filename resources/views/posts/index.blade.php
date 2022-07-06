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
					All Posts
				</h3>
				<span></span>
			</header>

			<div class="grid grid-cols-3 gap-10">
				@foreach ($posts as $post)
					<x-post-tab :post="$post" />
				@endforeach
			</div>
		</div>
	</section>

@endsection