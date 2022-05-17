<?php

	use Nox\RenderEngine\Exceptions\LayoutDoesNotExist;
	use Nox\RenderEngine\Exceptions\ParseError;
	use Nox\RenderEngine\Exceptions\ViewFileDoesNotExist;
	use Nox\RenderEngine\Renderer;
	use Nox\Router\Attributes\Controller;
	use Nox\Router\Attributes\Route;
	use Nox\Router\BaseController;

	#[Controller]
	class HomeController extends BaseController{

		#[Route("GET", "/")]
		public function homeView(): string{
			$viewsFolder = self::$noxInstance->getViewsDirectory();

			return file_get_contents($viewsFolder . "/home.html");
		}
	}