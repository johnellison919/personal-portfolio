<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link href="/favicon.ico" rel="icon" type="image/x-icon">
		<link href="{{ asset('style/theme.css') }}" rel="stylesheet">

		<title>PLACEHOLDER | John Ellison</title>
		<meta name="description" content="PLACEHOLDER">
	</head>
	<body>
		<main>
			@include('partials.aside')
			<section>
				<div class="d-flex flex-column justify-content-center py-5 px-3">
					<div class="py-5">
						<div>
							<div class="d-flex justify-content-between align-items-center border-bottom mb-3 pb-3">
								<h2 class="fw-light">PLACEHOLDER</h2>
								<a class="btn btn-primary d-flex align-items-center justify-content-center" href="/">
									<svg width="1.25rem" height="1.25rem" viewBox="0 0 16 16" class="bi bi-arrow-left-circle me-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
										<path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
									</svg>
									Return
								</a>
							</div>
							<div class="px-5 mb-3 text-center">
								<picture>
									<source type="image/webp" srcset="https://via.placeholder.com/1400x400">
									<img src="https://via.placeholder.com/1400x400" alt="PLACEHOLDER" class="img-fluid">
								</picture>
							</div>
							<h3 class="fw-light">Project Brief</h3>
							<p>
								PLACEHOLDER
							</p>
							<h3 class="fw-light">My Role</h3>
							<p>
								PLACEHOLDER
							</p>
							<a href="PLACEHOLDER" class="btn btn-primary">PLACEHOLDER</a>
						</div>
					</div>
				</div>
			</section>
		</main>
	</body>
</html>
