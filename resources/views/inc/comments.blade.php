<section class="my-container bg-white py-10" x-data="{ replyTo: { name: null, comment: null } }">
	<div class="md:px-40">
		<header class="section-title">
			<h3>
				Leave a Comment
			</h3>
		</header>
		<x-comment-form />
		<div>
			<x-comments-section :post="$post" />

			<div x-show='replyTo.name'>
				<header class="section-title">
					<h3 x-text="'Reply to ' + replyTo.name">
						
					</h3>
				</header>

				<div x-data="{
					onSubmitted () {
						replyTo = null
					}
				}">
					<x-comment-form />
				</div>
			</div>
		</div>
	</div>
</section>