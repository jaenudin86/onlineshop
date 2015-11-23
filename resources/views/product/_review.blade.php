<br /><br />
<div>
	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#review" aria-controls="review" role="tab" data-toggle="tab">Reviews</a></li>
		<li role="presentation"><a href="#discussion" aria-controls="discussion" role="tab" data-toggle="tab">Discussions</a></li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="review">
			
			@include('review.index')

			@if (Auth::check())
			
				@include('review._form')

			@else

				<a href="/auth/login" class="btn btn-success">Silakan login untuk memberikan review</a>

			@endif

		</div>

		<div role="tabpanel" class="tab-pane" id="discussion">
			
			@include('discussion.index')

			@if (Auth::check())
				
				@include('discussion._form')
			
			@else

				<a href="/auth/login" class="btn btn-success">Silakan login untuk diskusi</a>

			@endif
		
		</div>

	</div>
</div>