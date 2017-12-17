<?php include 'classes/Router.php'; ?>

<div class="wrap content">
	<h1>Testing</h1>
	<p>request_uri: <?= $_SERVER['REQUEST_URI'] ?></p>
	<h2>Request:</h2>
	<p><?php var_dump(Router::getRequest()); ?></p>
</div>

