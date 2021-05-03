<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		@include('partials.meta')
		<title>Web Developer | John Ellison</title>
		<meta name="description" content="Are you looking for a hard-working, self-motivated website developer? If so, you've come to the right place!">
	</head>
	<body>
		<main>
			@include('partials.aside')
			<section>
				<div class="d-flex flex-column justify-content-center py-5 px-3">
					@foreach($projects as $project)
					<article class="border-top border-bottom py-5 d-flex">
						<div class="pe-3 my-auto">
							<picture>
								<source srcset="{{ $project->featured_image }}-thumb.webp" type="image/webp">
								<img src="{{ $project->featured_image }}-thumb.jpg" alt="{{ $project->title }} Thumbnail" class="img-fluid me-3">
							</picture>
						</div>
						<div class="my-auto">
							<h2 class="fw-light">
								<a href="{{ $project->slug }}">{{ $project->title }}</a>
							</h2>
							{!! $project->badges !!}
						</div>
					</article>
					@endforeach
				</div>
			</section>
		</main>
	</body>
</html>
