<div class="bg-white">
	<nav class="container mx-auto px-4 flex py-4 justify-between">
		<div class="flex items-center">
			<a href="/">
				<img src="/imgs/logo-black.png" class="w-24" alt="alive blog" />
			</a>
		</div>
		<div class="flex lg:hidden items-center">
			<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
		</div>
		<div class="hidden lg:flex gap-x-6 items-center">
			@foreach ([
				[
					'name' => "home",
					"url" => "/"
				],
				[
					'name' => "travel",
					"url" => "/categories/travel"
				],
				[
					'name' => "food",
					"url" => "/categories/food"
				],
				[
					'name' => "lifestyle",
					"url" => "/categories/lifestyle"
				],
				[
					'name' => "fashion",
					"url" => "/categories/fashion"
				]
			] as $page)
				<x-nav-link :page="$page" />
			@endforeach
			<form action="/search">
				<div class="form-control">
	  <div class="input-group">
	    <input type="text" required placeholder="Search…" class="input input-bordered" />
	    <button type="submit" class="btn btn-square bg-primary">
	      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
	    </button>
	  </div>
	</div>
			</form>
		</div>
	</nav>
</div>