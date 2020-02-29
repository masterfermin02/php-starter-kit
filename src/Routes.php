<?php declare(strict_types = 1);

use Http\Response;

return [
	['GET', '/', ['FPBlog\Controllers\Homepage', 'show']],
	['GET', '/hello-world', function (Response $response) {
		$response->setContent('Hello World'); //echo 'Hello World';
	}],
	['GET', '/another-route', function (Response $response) {
		$response->setContent('This is another route');
	}],
];