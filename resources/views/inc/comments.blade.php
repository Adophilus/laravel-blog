<section class="my-container bg-white py-10">
	<div class="md:px-40">
		<header class="section-title">
			<h3>
				Leave a Comment
			</h3>
		</header>
		<form>
			<div class="flex flex-col gap-y-7">
				<div class="grid grid-cols-1 md:grid-cols-2 gap-x-10">
					<input type="text" required placeholder="Your name" class="input w-full bg-gray-200 focus:bg-white" />
					<input type="email" required placeholder="Your email" class="input w-full bg-gray-200 focus:bg-white" />
				</div>
				<div>
			        <textarea required placeholder="Your Comments" class="w-full bg-gray-200 rounded border border-gray-300 input px-2 py-1 h-32 text-base outline-none text-gray-700 resize-none leading-6 transition-colors duration-200 ease-in-out focus:bg-white"></textarea>
			    </div>
			    <div class="flex justify-end">
			    	<button class="btn btn-primary" type="submit">
			    		Post Comment
			    	</button>
			    </div>
		    </div>
		</form>
	</div>
</section>