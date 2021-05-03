<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link href="/favicon.ico" rel="icon" type="image/x-icon">
		<link href="{{ asset('style/theme.css') }}" rel="stylesheet">

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
							<h2 class="m-0 fw-light">
								<a href="{{ $project->id }}">{{ $project->title }}</a>
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
