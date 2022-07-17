@extends("layout.postlist")

@section("title")
	Category | {{$category->name}}
@endsection

@section("content")
  <!-- All Posts -->
	<section class="bg-white py-10">
		<div class='my-container px-8'>
			<header class="section-title">
				<h3 class="capitalize">
          {{$category->name}} Posts
				</h3>
				<span></span>
      </header>
      @if ($category->posts()->count() > 0)
        <div class="grid grid-cols-3 gap-10">
          @foreach ($category->posts()->get() as $post)
            <x-post-tab :post="$post" />
          @endforeach
        </div>
      @else
        <h3 class="text-gray-700 text-center text-3xl md:text-4xl">
          No posts in this category!
        </h3>
      @endif
		</div>
	</section>
@endsection
