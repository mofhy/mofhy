<header class="navbar navbar-expand-md navbar-dark d-print-none">
	<div class="container-xl">
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
			<span class="navbar-toggler-icon"></span>
		</button>
		<h1 class="navbar-brand d-none-navbar-horizontal pe-0 pe-md-3" style="filter: brightness(0) invert(1);">
			<a href=".">
				<img src="assets/img/logo.svg" width="240" height="40" alt="MofhyLite" class="navbar-brand-image">
			</a>
		</h1>
		<div class="navbar-nav flex-row order-md-last">
			<a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Enable dark mode">
					<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z"></path></svg>
				</a>
				<a href="?theme=light" class="nav-link px-0 hide-theme-light" title="" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Enable light mode">
					<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="4"></circle><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7"></path></svg>
				</a>
			<div class="nav-item dropdown">
				<?php function get_gravatar($email, $s = 80, $d = 'mp', $r = 'g', $img = false, $atts = array())
				{
					$url = 'https://www.gravatar.com/avatar/';
					$url .= md5(strtolower(trim($email)));
					$url .= "?s=$s&d=$d&r=$r";
					if ($img) {
						$url = '<img src="' . $url . '"';
						foreach ($atts as $key => $val) $url .= ' ' . $key . '="' . $val . '"';
						$url .= ' />';
					}
					return $url;
				} ?>
				<a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
					<span class="avatar avatar-sm rounded-1" style="background-image: url(<?php echo get_gravatar($ClientInfo['hosting_client_email']) ?>)"></span>
					<div class="d-none d-xl-block ps-2">
						<div><?php echo $ClientInfo['hosting_client_fname'] . " " . $ClientInfo['hosting_client_lname']; ?></div>
						<div class="mt-1 small text-muted"><?php echo $ClientInfo['hosting_client_email']; ?></div>
					</div>
				</a>
				<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
					<a class="dropdown-item" href="profile">
						Profile
					</a>
					<a class="dropdown-item" href="logout">
						Sign Out
					</a>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="navbar-expand-md">
	<div class="collapse navbar-collapse" id="navbar-menu">
		<div class="navbar navbar-light">
			<div class="container-xl">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a href="." class="nav-link">
							<span class="nav-link-icon d-md-none d-lg-inline-block">
								<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
									<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
									<polyline points="5 12 3 12 12 3 21 12 19 12"></polyline>
									<path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
									<path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
								</svg>
							</span>
							<span class="nav-link-title">
								Home
							</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="profile" class="nav-link ">
							<span class="nav-link-icon d-md-none d-lg-inline-block">
								<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
									<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
									<circle cx="12" cy="7" r="4"></circle>
									<path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
								</svg>
							</span>
							<span class="nav-link-title">
								Profile
							</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="accounts" class="nav-link">
							<span class="nav-link-icon d-md-none d-lg-inline-block">
								<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-server" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
									<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
									<rect x="3" y="4" width="18" height="8" rx="3"></rect>
									<rect x="3" y="12" width="18" height="8" rx="3"></rect>
									<line x1="7" y1="8" x2="7" y2="8.01"></line>
									<line x1="7" y1="16" x2="7" y2="16.01"></line>
								</svg>
							</span>
							<span class="nav-link-title">
								Accounts
							</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="sslCertificates" class="nav-link ">
							<span class="nav-link-icon d-md-none d-lg-inline-block">
								<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shield-lock" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
									<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
									<path d="M12 3a12 12 0 0 0 8.5 3a12 12 0 0 1 -8.5 15a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3"></path>
									<circle cx="12" cy="11" r="1"></circle>
									<line x1="12" y1="12" x2="12" y2="14.5"></line>
								</svg>
							</span>
							<span class="nav-link-title">
								Free SSL Certificates
							</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="tools" class="nav-link ">
							<span class="nav-link-icon d-md-none d-lg-inline-block">
								<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-tools" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
									<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
									<path d="M3 21h4l13 -13a1.5 1.5 0 0 0 -4 -4l-13 13v4"></path>
									<line x1="14.5" y1="5.5" x2="18.5" y2="9.5"></line>
									<polyline points="12 8 7 3 3 7 8 12"></polyline>
									<line x1="7" y1="8" x2="5.5" y2="9.5"></line>
									<polyline points="16 12 21 17 17 21 12 16"></polyline>
									<line x1="16" y1="17" x2="14.5" y2="18.5"></line>
								</svg>
							</span>
							<span class="nav-link-title">
								Extra Tools
							</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="https://dnschecker.org/ns-lookup.php" class="nav-link" target="_blank">
							<span class="nav-link-icon d-md-none d-lg-inline-block">
								<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
									<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
									<circle cx="12" cy="12" r="9"></circle>
									<path d="M9 12l2 2l4 -4"></path>
								</svg>
							</span>
							<span class="nav-link-title">
								Domain Checker
							</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="https://forum.mofh.cf/docs" class="nav-link" target="_blank">
							<span class="nav-link-icon d-md-none d-lg-inline-block">
								<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-help" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
									<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
									<circle cx="12" cy="12" r="9"></circle>
									<line x1="12" y1="17" x2="12" y2="17.01"></line>
									<path d="M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4"></path>
								</svg>
							</span>
							<span class="nav-link-title">
								Knowledge Base
							</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="https://forum.mofh.cf" class="nav-link" target="_blank">
							<span class="nav-link-icon d-md-none d-lg-inline-block">
								<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-messages" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
									<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
									<path d="M21 14l-3 -3h-7a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1h9a1 1 0 0 1 1 1v10"></path>
									<path d="M14 15v2a1 1 0 0 1 -1 1h-7l-3 3v-10a1 1 0 0 1 1 -1h2"></path>
								</svg>
							</span>
							<span class="nav-link-title">
								Community Forum
							</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
