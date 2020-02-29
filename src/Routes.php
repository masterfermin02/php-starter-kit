<?php declare(strict_types = 1);

return [
	['GET', '/', ['FPBlog\Controllers\Homepage', 'show']],
	['GET', '/{slug}', ['FPBlog\Controllers\Page', 'show']],
];
