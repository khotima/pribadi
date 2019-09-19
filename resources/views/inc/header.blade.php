<body class="bg-dark">
	
<!-- Header -->
<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<div class="topbar">
				<div class="content-topbar container h-100">
					<div class="left-topbar">
						<span class="left-topbar-item flex-wr-s-c">
							<span>
								Khotima
							</span>

							<img class="m-b-1 m-rl-8" src="assets/images/icons/icon-night.png" alt="IMG">

							<span>
								HI 58° LO 56°
							</span>
						</span>

						<a href="#" class="left-topbar-item">
							About
						</a>

						<a href="#" class="left-topbar-item">
							Contact
						</a>

						<a href="#" class="left-topbar-item">
							Sing up
						</a>

						<a href="{{route('logout')}}" class="left-topbar-item">
							Log out
						</a>
					</div>

					<div class="right-topbar">
						<a href="#">
							<span class="fab fa-facebook-f"></span>
						</a>

						<a href="#">
							<span class="fab fa-twitter"></span>
						</a>

						<a href="#">
							<span class="fab fa-pinterest-p"></span>
						</a>

						<a href="#">
							<span class="fab fa-vimeo-v"></span>
						</a>

						<a href="#">
							<span class="fab fa-youtube"></span>
						</a>
					</div>
				</div>
			</div>

			<!-- Header Mobile -->
			<div class="wrap-header-mobile">
				<!-- Logo moblie -->		
				<div class="logo-mobile">
				
					<p >Admin {{Auth::user()->name}}</p>
				
					<!-- <a href="index.html"><img src="assets/images/icons/logo-01.png" alt="IMG-LOGO"></a> -->
				</div>

				<!-- Button show menu -->
				<div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>

			<!-- Menu Mobile -->
			<div class="menu-mobile">
				<ul class="topbar-mobile">
					<li class="left-topbar">
						<span class="left-topbar-item flex-wr-s-c">
							<span>
								New York, NY
							</span>

							<img class="m-b-1 m-rl-8" src="assets/images/icons/icon-night.png" alt="IMG">

							<span>
								HI 58° LO 56°
							</span>
						</span>
					</li>

					<li class="left-topbar">
						<a href="#" class="left-topbar-item">
							About
						</a>
						<a href="{{route('logout')}}" class="left-topbar-item">
							Log out
						</a>
					</li>

					<li class="right-topbar">
						<a href="#">
							<span class="fab fa-facebook-f"></span>
						</a>

						<a href="#">
							<span class="fab fa-twitter"></span>
						</a>

						<a href="#">
							<span class="fab fa-pinterest-p"></span>
						</a>

						<a href="#">
							<span class="fab fa-vimeo-v"></span>
						</a>

						<a href="#">
							<span class="fab fa-youtube"></span>
						</a>
					</li>
				</ul>

				<ul class="main-menu-m">
					<li>
						<a href="/dashboard">Dashboard</a>
					</li>
					<li>
						<a href="/penduduk">Data Penduduk</a>
					</li>

					<li>
						<a href="/kematian">Data Kematian</a>
					</li>

					<li>
						<a href="/pendatang">Data Pendatang</a>
					</li>

					<li>
						<a href="/pindahan">Data Pindahan</a>
					</li>

					<li>
						<a href="/kk">Data KK</a>
					</li>

					<li>
						<a href="/anak">Data Anak</a>
					</li>

					
				</ul>
			</div>
			
			<!--  -->
			<div class="wrap-logo container">
				<!-- Logo desktop -->		
				<div class="logo">
					<p>Admin {{Auth::user()->name}}</p>
				</div>	

				<!-- Banner -->
				<div class="banner-header">
					
				</div>
			</div>	
			
			<!--  -->
			<div class="wrap-main-nav">
				<div class="main-nav">
					<!-- Menu desktop -->
					<nav class="menu-desktop">
						<a class="logo-stick" href="index.html">
							<img src="assets/images/icons/logo-01.png" alt="LOGO">
						</a>

						<ul class="main-menu">
								
						<li class="main-menu-item">
								<a href="/dashboard">Dashboard</a>
								<div class="sub-mega-menu"></div>
							</li>
							<li class="main-menu-item">
								<a href="/penduduk">Data Penduduk</a>
								<div class="sub-mega-menu"></div>
							</li>

							<li class="main-menu-item">
								<a href="/kelahiran">Data Kelahiran</a>
								<div class="sub-mega-menu"></div>
							</li>
							
							<li class="main-menu-item">
								<a href="/kematian">Data Kematian</a>	
								<div class="sub-mega-menu"></div>
							</li>
							<li class="main-menu-item">
								<a href="/pendatang">Data Pendatang</a>
								<div class="sub-mega-menu"></div>
							</li>

							<li class="main-menu-item">
								<a href="/pindahan">Data Pindahan</a>
								<div class="sub-mega-menu"></div>
							</li>
							
							<li class="main-menu-item">
								<a href="/kk">Data KK</a>	
								<div class="sub-mega-menu"></div>
							</li>
							<li class="main-menu-item">
								<a href="/detail">Data Detail KK</a>
								<div class="sub-mega-menu"></div>
							</li>

							<li class="main-menu-item">
								<a href="/anak">Data Anak</a>
								<div class="sub-mega-menu"></div>
							</li>
							
						


						</ul>
					</nav>
				</div>
			</div>	
		</div>
	</header>
	</body>