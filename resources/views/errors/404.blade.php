<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		@include('partials.meta')
		<title>404 | Page Not Found</title>
		<meta name="description" content="The page you were looking for has not been found.">
	</head>
	<body>
		<main>
			@include('partials.aside')
			<section class="vh-100 d-flex align-items-center">
				<div class="py-5 px-3">
					<h1 class="fw-lighter">404 | Page Not Found</h1>
					<p>
						The page you were looking for has not been found. <a href="/">Click here</a> to go back to the home page and try again.
					</p>
				</div>
			</section>
		</main>
	</body>
</html>
