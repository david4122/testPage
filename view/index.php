<div class="wrap content">
	<h1>Testing</h1>
	<p>request_uri: <?= Router::getRequest()->getUri() ?></p>
	<h2>Request:</h2>
	<p><?php var_dump(Router::getRequest()); ?></p>
	<h2>Controller:</h2>
	<p><?= $controller ?></p>
</div>
