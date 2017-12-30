<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8"/>
		<title><?= $title ?></title>
		<meta name="description" content="<?= $description ?>"/>
		<meta name="viewport" content="width:device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="/css/style.css"/>
		<link rel="shortcut icon" type="image/ico" href="/assets/favicon.ico"/>
	</head>
	<body>
		<header>
			<div id="page-header" class="row wrap">
				<div id="logo-wrapper">
					<a href="/">
						<img id="logo" src="/assets/ubuntu.svg" alt="logo"/>
					</a>
				</div>
				<div>
					<a href="/" class="page-title">
						Test page
					</a>
				</div>
			</div>
			<div id="navbar-replacer" style="height: 0px;"></div>
			<div id="navbar-block">
				<div class="wrap">
					<div id="mobile-navbar">
						<div>
							<a href="/" class="page-title">Test page</a>
						</div>
						<div id="show-menu">
							<div id="top" class="bar"></div>
							<div id="middle" class="bar"></div>
							<div id="bottom" class="bar"></div>
						</div>
					</div>
					<ul id="navbar">
						<li class="nav-item">
							<a href="/">Test</a>
						</li>
						<li class="dropdown nav-item">
							<a href="">Dropdown</a>
							<span class="expand-dropdown"></span>
							<ul class="dropdown-content">
								<li class="dropdown-item">
									<a href="">1</a>
								</li>
								<li class="dropdown-item">
									<a href="">2</a>
								</li>
								<li class="dropdown-item">
									<a href="">3</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="/example">Example</a>
						</li>
						<li class="dropdown nav-item">
							<span class="expand-dropdown"></span>
							<a href="">Nested</a>
							<ul class="dropdown-content">
								<li class="dropdown-item dropdown">
									<span class="expand-dropdown"></span>
									<a href="">1</a>
									<ul class="dropdown-content">
										<li class="dropdown-item">
											<a href="">A</a>
										</li>
										<li class="dropdown-item">
											<a href="">B</a>
										</li>
										<li class="dropdown-item">
											<a href="">C</a>
										</li>
									</ul>
								</li>
								<li class="dropdown-item dropdown">
									<span class="expand-dropdown"></span>
										<a href="">2</a>
									<ul class="dropdown-content">
										<li class="dropdown-item">
											<a href="">I</a>
										</li>
										<li class="dropdown-item dropdown">
											<span class="expand-dropdown"></span>
											<a href="">II</a>
											<ul class="dropdown-content">
												<li class="dropdown-item">
													<a href="">a</a>
												</li>
												<li class="dropdown-item">
													<a href="">b</a>
												</li>
												<li class="dropdown-item">
													<a href="">c</a>
												</li>
											</ul>
										</li>
										<li class="dropdown-item">
											<a href="">III</a>
										</li>
										<li class="dropdown-item dropdown">
											<span class="expand-dropdown"></span>
											<a href="">IV</a>
											<ul class="dropdown-content">
												<li class="dropdown-item">
													<a href="">a</a>
												</li>
												<li class="dropdown-item">
													<a href="">b</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="dropdown-item dropdown">
									<span class="expand-dropdown"></span>
									<a href="">3</a>
									<ul class="dropdown-content">
										<li class="dropdown-item">
											<a href="">a</a>
										</li>
										<li class="dropdown-item">
											<a href="">b</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="">Test5</a>
						</li>
					</ul>
					<div style="clear: both"></div>
				</div>
			</div>
		</header>
