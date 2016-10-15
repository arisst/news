<header id="header">
	<div id="header-middle">
		<div class="wrapper clearfix">
			<div id="logo-image"><a href="{{ url('/') }}"><img src="{{ asset('template/placeholders/logo.png') }}" alt="logo" /></a></div>
		</div><!--wrapper-->
	</div><!--header-middle-->
	<div id="navigation">
		<nav id="secondary-menu" class="wrapper clearfix">
			<ul class="clearfix" id="main-nav">
				<li class="current-menu-item"><a href="index.html">Home</a></li>
				<li><a href="#">News</a>
					<ul>
						<li><a href="#">Sport</a></li>
						<li><a href="#">Entertaiment</a></li>
						<li><a href="#">Asia</a>
							<ul>
								<li><a href="#">Sport</a></li>
								<li><a href="#">Entertaiment</a></li>
								<li><a href="#">Asia</a></li>
								<li><a href="#">Sport</a></li>
								<li><a href="#">Elements</a></li>
							</ul>
						</li>
						<li><a href="#">Sport</a></li>
						<li><a href="#">Elements</a></li>
					</ul>
				</li>
				<li><a href="#">Sport</a>
					<ul>
						<li><a href="#">Sport</a></li>
						<li><a href="#">Entertaiment</a></li>
						<li><a href="#">Asia</a></li>
						<li><a href="#">Sport</a></li>
						<li><a href="#">Elements</a></li>
					</ul>
				</li>
				<li><a href="#">Single</a></li>
				<li><a href="#">Elements</a></li>
				<li>
					<a href="#">Pages</a>
					<ul>
						<li><a href="#">Single</a></li>
						<li><a href="#">404</a></li>
						<li><a href="#">Elements</a></li>
					</ul>
				</li>
				<li><a href="#">Shortcodes</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#">Sport</a></li>
				<li><a href="#">Entertaiment</a></li>
				<li><a href="#">Asia</a></li>
				<li><a href="#">Samples</a></li>
			</ul><!--end:main-nav-->
		</nav><!--end:secondary-menu-->
	</div><!--navigation-->
	<div id="header-bottom">
		<div class="wrapper clearfix">
        	<div class="breadcrumb clearfix">
                <a href="#">Home</a>&nbsp;&raquo;&nbsp;<a href="#" class="current-page">Entertaiment</a>
            </div><!--end:breadcrumb-->
			<div class="sub-search-box clearfix">
				<form action="#" class="search-form" method="get" />
					<input type="text" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';" value="Search" name="s" class="search-text" />
					<input type="submit" value="" name="submit" class="search-submit" />
				</form><!-- search-form -->
			</div><!--end:search-box-->
		</div><!--end:wrapper-->
	</div><!--header-bottom-->

</header>
