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
				<div class="content">
					<article>
						<div class="pe-3 my-auto">
							<picture>
								<source srcset="PLACEHOLDER.webp" type="image/webp">
								<img src="PLACEHOLDER.png" alt="PLACEHOLDER" class="PLACEHOLDER">
							</picture>
						</div>
						<div class="my-auto">
							<h2>
								<a href="PLACEHOLDER">PLACEHOLDER</a>
							</h2>
							<p>
								PLACEHOLDER CONTENT
							</p>
						</div>
					</article>
				</div>
			</section>
		</main>
	</body>
</html>
