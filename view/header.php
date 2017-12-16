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
			<div class="row wrap">
				<div>
					<a href="/">
						<img id="logo" src="/assets/ubuntu.svg" alt="logo"/>
					</a>
				</div>
				<div>
					<a href="/" id="page-title">
						Test page
					</a>
				</div>
			</div>
			<div style="clear: both;"></div>
			<div id="navbar-block">
				<div class="wrap">
					<ul id="navbar">
						<li class="nav-item">
							<a href="">Test</a>
						</li>
						<li class="dropdown nav-item">
							<a href="">Dropdown</a>
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
							<a href="">Test3</a>
						</li>
						<li class="dropdown nav-item">
							<a href="">Nested</a>
							<ul class="dropdown-content">
								<li class="dropdown-item dropdown-nested dropdown">
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
								<li class="dropdown-item dropdown-nested dropdown">
									<a href="">2</a>
									<ul class="dropdown-content">
										<li class="dropdown-item">
											<a href="">I</a>
										</li>
										<li class="dropdown-item dropdown-nested dropdown">
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
										<li class="dropdown-item dropdown-nested dropdown">
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
								<li class="dropdown-item dropdown-nested dropdown">
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
						<div style="clear: both;"></div>
					</ul>
				</div>
			</div>
			<div id="navbar-replacer" style="height: 0px;"></div>
		</header>