<div class="wrapper">
	<div id="main-content">
		<div class="primary">
			<article class="entry-item">
				<header>
					<span class="entry-author">by:&nbsp;</span>

					<a class="entry-author" href="#">{{ $news->author }}</a>

					<span class="entry-category">in:&nbsp;</span>

					<a class="entry-category" href="#">{{ $news->category_name }}</a>

					<span class="entry-date">&nbsp;&nbsp;|&nbsp;&nbsp;

						{{ $news->created_at }}

					</span>

					<h1 class="entry-title">{{ $news->title }}</h1>
				</header>

				<img class="responsive-img feature-img" src="{{ $news->image }}" alt="" />

				{{{ $news->content }}}

			<div class="clear"></div>
			</article>
			<div class="social-share clearfix">
				<h6>Share this post: </h6>
				<div class="social-share-button clearfix">
					<!--Begin  twitter-->
					<div class="social-share-twitter">
						<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
						<a href="http://twitter.com/share" class="twitter-share-button">Tweet</a>
					</div><!--twitter-share-->
					<!--Begin  facebook-->

					<div class="social-share-facebook">
						<div id="fb-root"></div>
						<script>
							window.fbAsyncInit = function()
							{
								FB.init({appId: 'your app id', status: true, cookie: true, xfbml: true});
							};

							(function() {
								var e = document.createElement('script');
								e.async = true;
								e.src = document.location.protocol +  '//connect.facebook.net/en_US/all.js';
								document.getElementById('fb-root').appendChild(e);
							}());
						</script>
						<div class="share_button btn_fb">
							<fb:like layout="button_count" font="tahoma"></fb:like>
						</div>
					</div>

					<!--end  facebook-->
					<!--Begin  Digg-->
					<div class="social-share-digg">
						<script type="text/javascript">
							(function() {
								var s = document.createElement('SCRIPT'), s1 = document.getElementsByTagName('SCRIPT')[0];
								s.type = 'text/javascript';
								s.async = true;
								s.src = 'http://widgets.digg.com/buttons.js';
								s1.parentNode.insertBefore(s, s1);
							})();
						</script>

						<!-- Compact Button -->
						<a class="DiggThisButton DiggCompact"></a>
						<!-- Icon Button
							<a class="DiggThisButton DiggIcon"></a> -->
						<!--end  Digg-->
					</div>
					<div class="social-share-google-plus">
						<!-- Place this tag where you want the +1 button to render. -->
						<div class="g-plusone" data-size="medium"></div>

						<!-- Place this tag after the last +1 button tag. -->
						<script type="text/javascript">
							(function() {
								var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
								po.src = 'https://apis.google.com/js/plusone.js';
								var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
							})();
						</script>
					</div>

				</div><!--social-share-button-->
			</div><!--social-share-->
			<div class="about-author">
				<h3>About author</h3>
				<div class="about-author-content">
					<img class="responsive-img" alt="" src="{{ asset('template/placeholders/avatar/author.png') }}" />
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
					<div class="clear"></div>
				</div><!--about-author-content-->
			</div><!--about-author-->
			<section class="related-posts">
				<h3>Related Articles</h3>
				<ul class="clearfix">
					<li>
						<article class="clearfix">
							<a href="#"><img class="responsive-img" src="{{ asset('template/placeholders/139x116/1.jpg') }}" alt="" /></a>
							<h6><a href="#">Why do you need dummy text?</a></h6>
						</article>
					</li>
					<li>
						<article class="clearfix">
							<a href="#"><img class="responsive-img" src="{{ asset('template/placeholders/139x116/1.jpg') }}" alt="" /></a>
							<h6><a href="#">Where can you get some?</a></h6>
						</article>
					</li>
					<li>
						<article class="clearfix">
							<a href="#"><img class="responsive-img" src="{{ asset('template/placeholders/139x116/1.jpg') }}" alt="" /></a>
							<h6><a href="#">What is Lorem Ipsum?</a></h6>
						</article>
					</li>
					<li>
						<article class="clearfix">
							<a href="#"><img class="responsive-img" src="{{ asset('template/placeholders/139x116/1.jpg') }}" alt="" /></a>
							<h6><a href="#">Great Wallpaper Search Engine with Easy</a></h6>
						</article>
					</li>
					<li class="last">
						<article class="clearfix">
							<a href="#"><img class="responsive-img" src="{{ asset('template/placeholders/139x116/1.jpg') }}" alt="" /></a>
							<h6><a href="#">Where can you buy our theme?</a></h6>
						</article>
					</li>
				</ul><!--end:related-posts-->
			</section><!--end:related-posts-->

		</div><!--end:primary-->
		<div class="secondary">
			<div id="sidebar-b" class="sidebar">
				<aside class="widget box-hover">
					<header class="entry-header">
						<h4 class="widget-title clearfix"><span>Latest from life style</span></h4>
					</header>
					<article class="entry-box clearfix">
						<img class="hover-effect responsive-img" src="{{ asset('template/placeholders/244x117/244x117-1.jpg') }}" alt="" />
						<div class="entry-content">
							<span class="entry-meta">On:&nbsp;</span><a class="entry-date" href="#">August .12 .2012</a>
							<h3 class="entry-title"><a href="#">There are many vaiations</a></h3>
							<p>There are many vaiations of passages lorem Ipsum avaible. There are many vaiations of passages lorem Ipsum avaible</p>
							<span class="entry-author">by:&nbsp;</span><a class="entry-author" href="#">Admin</a>
						</div><!--end:entry_content-->
					</article><!--end:entry-box-->
					<ul class="older-posts">
						<li><a href="#">Horse Racing Getting Closer to Becomming Official Olympic</a></li>
						<li><a href="#">Horse Racing Getting Closer to Becomming Official Olympic</a></li>
						<li><a href="#">Horse Racing Getting Closer to Becomming Official Olympic</a></li>
					</ul><!--end:older-posts-->
				</aside><!--end:widget-->
				<aside class="widget box-hover">
					<header class="entry-header">
						<h4 class="widget-title">Newsletter</h4>
					</header>
					<div class="newsletter">
						<div class="wpcf7">
							<form class="wpcf7-form" method="post" action="#" />
								<p>Enter your email address below to receive updates each time we publish new content</p>
								<p>
									<span class="wpcf7-form-control-wrap your-email"><input type="text" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email" value="" name="your-email" /></span>
									<input type="submit" class="wpcf7-form-control  wpcf7-submit" value="Submit" />
								</p>
							</form>
						</div>
					</div>
				</aside><!--end:widget-->
				<aside class="widget box-hover">
					<div class="adv-125-125 clearfix">
						<a href="#"><img class="hover-effect responsive-img" alt="" src="{{ asset('template/placeholders/125x125/sample-ad-1.jpg') }}" /></a>
						<a href="#"><img class="hover-effect responsive-img" alt="" src="{{ asset('template/placeholders/125x125/sample-ad-1.jpg') }}" /></a>
						<a href="#"><img class="hover-effect responsive-img" alt="" src="{{ asset('template/placeholders/125x125/sample-ad-1.jpg') }}" /></a>
						<a href="#"><img class="hover-effect responsive-img" alt="" src="{{ asset('template/placeholders/125x125/sample-ad-1.jpg') }}" /></a>
					</div>
				</aside><!--end:widget-->
				<aside class="widget box-hover">
					<header class="entry-header">
						<h4 class="widget-title clearfix"><span>Latest from life style</span></h4>
					</header>
					<article class="entry-box clearfix">
						<img class="hover-effect responsive-img" src="{{ asset('template/placeholders/244x117/244x117-1.jpg') }}" alt="" />
						<div class="entry-content">
							<span class="entry-meta">On:&nbsp;</span><a class="entry-date" href="#">August .12 .2012</a>
							<h3 class="entry-title"><a href="#">There are many vaiations</a></h3>
							<p>There are many vaiations of passages lorem Ipsum avaible. There are many vaiations of passages lorem Ipsum avaible</p>
							<span class="entry-author">by:&nbsp;</span><a class="entry-author" href="#">Admin</a>
						</div><!--end:entry_content-->
					</article><!--end:entry-box-->
					<ul class="older-posts">
						<li><a href="#">Horse Racing Getting Closer to Becomming Official Olympic</a></li>
						<li><a href="#">Horse Racing Getting Closer to Becomming Official Olympic</a></li>
						<li><a href="#">Horse Racing Getting Closer to Becomming Official Olympic</a></li>
					</ul><!--end:older-posts-->
				</aside><!--end:widget-->
				<div class="clear"></div>
			</div><!--end:sidebar-->
			<div class="clear"></div>
		</div><!--end:secondary-->
		<div class="clear"></div>
		<div id="footer-aside" class="box-hover">
			<aside class="widget">
				<div class="adv-footer">
					<a class="banner-bottom-left" href="#"><img class="hover-effect responsive-img" src="{{ asset('template/placeholders/728x90-banner.jpg') }}" alt="" /></a>
					<a class="banner-bottom-right" href="#"><img class="hover-effect responsive-img ml-10" src="{{ asset('template/placeholders/220x90/sample-ad-3.jpg') }}" alt="" /></a>
				</div><!--end:adv-footer-->
				<div class="clear"></div>
			</aside>
		</div><!--end:footer-aside-->
		<footer>
			<div class="wrapper clearfix">
				<p id="copyrights">Copyright © 2016 NBCNews. All Rights Reserved</p>
				<a id="scroll-to-top" href="#top">Back to top</a>
			</div><!--end:wrapper-->
		</footer>
	</div><!--main-content-->
</div><!--end:wrapper-->
