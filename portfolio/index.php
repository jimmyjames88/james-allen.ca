<div class="content">

	<!-- Add fancyBox -->
	<script type="text/javascript">
		$(document).ready(function() {

			$("[rel='fancybox']").fancybox({
				thumbs: {
					autoStart: true
				}
			});

			$('a.fancybox-proxy').on('click', function(e) {
				e.preventDefault();
				$(this).parents('.portfolioWrap').find('a[rel=fancybox]:first').trigger('click');
			});
		});
	</script>

	<h1 class="title">Portfolio</h1>

	<div class="portfolioWrap animated flipInX">
		<div class="portfolioFrame">
			<div class="content">
				<a href="images/portfolio/norkraft/site-gallery.jpg" data-fancybox="norkraft" rel="fancybox">
					<img src="images/portfolio/norkraft/site-gallery.jpg" />
				</a>
				<a href="images/portfolio/norkraft/site-gallery-view.jpg" data-fancybox="norkraft" rel="fancybox"></a>
				<a href="images/portfolio/norkraft/site-gallery-view-photo.jpg" data-fancybox="norkraft" rel="fancybox"></a>
				<a href="images/portfolio/norkraft/admin-banners.png" data-fancybox="norkraft" rel="fancybox"></a>
				<a href="images/portfolio/norkraft/admin-projects.png" data-fancybox="norkraft" rel="fancybox"></a>
				<a href="images/portfolio/norkraft/admin-projects-edit.png" data-fancybox="norkraft" rel="fancybox"></a>
				<a href="images/portfolio/norkraft/admin-projects-edit2.png" data-fancybox="norkraft" rel="fancybox"></a>
			</div>
		</div>
		<h3><a href="images/portfolio/cocobrooks/tv-menu_01.jpg" class="fancybox-proxy">Norkraft.ca</a></h3>
		<p>Norkraft is a small business in need of a website to showcase their work, with the ability
			to manage their gallery and banner images with ease. The client was not interested in using
			any off-the-shelf solution.

		<p>
			Leveraging Laravel auth scaffolding and Vue components, I created a simple-to-use admin panel
			to meet the client's specific criteria. Delivered on time, and on budget!
		</p>
		<p>
			<a href="https://github.com/jimmyjames88/norkraft.ca" target="_blank">
				<i class="fab fa-github"></i> View it on GitHub
			</a>
		</p>
		<p>
			<span class="label label-info">Laravel</span>
			<span class="label label-success">VueJS</span>
			<span class="label label-warning">Bootstrap</span>
			<span class="label label-primary">Figma</span>
		</p>
	</div>

	<div class="portfolioWrap animated flipInX">
		<div class="portfolioFrame">
			<div class="content">
				<img src="images/portfolio/freebooks/preview.jpg" />
			</div>
		</div>
		<h3>FreeBooks - Free invoicing &amp; bookkeeping for freelancers</h3>

		<p>
			Where all my free time goes... Clean. Easy. Free... Coming soon...
		</p>
		<p>
			<span class="label label-primary">HTML5</span>
			<span class="label label-warning">CSS3</span>
			<span class="label label-warning">Bulma</span>
			<span class="label label-success">VueJS</span>
			<span class="label label-info">Laravel</span>
		</p>
	</div>

	<div class="portfolioWrap animated flipInX">
		<div class="portfolioFrame">
			<div class="content">
				<a href="http://triquestndt.james-allen.ca/" target="_blank"><img src="images/portfolio/triquestndt/preview.jpg" alt="TriQuest NDT Nondestructive Testing services serving Alberta" /></a>
			</div>
		</div>
		<h3><a href="http://triquestndt.james-allen.ca/" target="_blank">TriQuest NDT website &amp; SEO</a></h3>

		<p>
			Custom mobile-responsive design built collaboratively with the client. Built as a Single Page
			Application using Vue.js, but utilizes npm-prerender-spa to produce pre-compiled pages at
			every route. The result is a Vue.js powered, SEO friendly website.
		</p>
		<p>
			<a href="https://github.com/jimmyjames88/triquest.com" target="_blank">
				<i class="fab fa-github"></i> View it on GitHub
			</a>
		</p>
		<p>
			<span class="label label-primary">HTML5</span>
			<span class="label label-warning">CSS3</span>
			<span class="label label-warning">Bulma</span>
			<span class="label label-success">VueJS</span>
		</p>
	</div>

	<div class="portfolioWrap animated flipInX">
		<div class="portfolioFrame">
			<div class="content">
				<a href="images/portfolio/cocobrooks/preview.jpg" data-fancybox="cocobrooks" rel="fancybox">
					<img src="images/portfolio/cocobrooks/preview.jpg" />
				</a>
				<a href="images/portfolio/cocobrooks/tv-menu_01.jpg" data-fancybox="cocobrooks" rel="fancybox"></a>
				<a href="images/portfolio/cocobrooks/tv-menu_02.jpg" data-fancybox="cocobrooks" rel="fancybox"></a>
				<a href="images/portfolio/cocobrooks/tv-menu_03.jpg" data-fancybox="cocobrooks" rel="fancybox"></a>
			</div>
		</div>
		<h3><a href="images/portfolio/cocobrooks/tv-menu_01.jpg" class="fancybox-proxy">Coco Brooks Express digital menu board</a></h3>
		<p>&nbsp;</p>
		<p>
			<span class="label label-primary">Photoshop</span>
		</p>
	</div>

	<div class="portfolioWrap animated flipInX">
		<div class="portfolioFrame">
			<div class="content">
				<a href="http://portagedelivers.com/" target="_blank"><img src="images/portfolio/portage/preview.jpg" alt="Portage Peer-2-Peer Delivery" /></a>
			</div>
		</div>
		<h3><a href="http://portagedelivers.com" target="_blank">Portage website &amp; written content</a></h3>

		<p>Portage, a simple website to connect senders and travellers. Provided a simple admin panel built in Laravel for managing 'Senders' and 'Porters'. </p>
		<p>
			<a href="https://github.com/jimmyjames88/portage.ca" target="_blank">
				<i class="fab fa-github"></i> View it on GitHub
			</a>
		</p>
		<p>
			<span class="label label-primary">HTML5</span>
			<span class="label label-warning">CSS3</span>
			<span class="label label-warning">Bootstrap</span>
			<span class="label label-success">jQuery</span>
		</p>
	</div>

	<div class="portfolioWrap animated flipInX">
		<div class="portfolioFrame">
			<div class="content">
				<a href="http://retiremyridecalgary.com" target="_blank"><img src="images/portfolio/retiremyride/preview.jpg" alt="Retire My Ride Calgary vehicle recycling service" /></a>
			</div>
		</div>
		<h3><a href="http://retiremyridecalgary.com" target="_blank">Retire My Ride Calgary Website &amp; Google Adwords</a></h3>

		<p>Custom built mobile-responsive design leveraging Bulma. Utilized VueJS for iterated visual components. </p>
		<p>
			<a href="https://github.com/jimmyjames88/retiremyridecalgary.com" target="_blank">
				<i class="fab fa-github"></i> View it on GitHub
			</a>
		</p>
		<p>
			<span class="label label-primary">HTML5</span>
			<span class="label label-warning">CSS3</span>
			<span class="label label-warning">Bulma</span>
			<span class="label label-success">VueJS</span>
			<span class="label label-info">AdWords</span>
		</p>
	</div>

	<div class="portfolioWrap animated flipInX">
		<div class="portfolioFrame">
			<div class="content">
				<a href="http://saferidevictoria.com" target="_blank"><img src="images/portfolio/saferide/preview.jpg" alt="SafeRide Victoria designated drivers" /></a>
			</div>
		</div>
		<h3><a href="http://saferidevictoria.com" target="_blank">Safe Ride Victoria Website</a></h3>
		<p>Leveraging a Bootstrap-based template I was able to provide Safe Ride a clean, mobile-responsive website at an excellent price!</p>
		<p>
			<span class="label label-primary">HTML5</span>
			<span class="label label-warning">CSS3</span>
			<span class="label label-warning">Bootstrap</span>
		</p>
	</div>

	<div class="portfolioWrap animated flipInX">
		<div class="portfolioFrame">
			<div class="content">
				<a href="images/portfolio/creativedoor/1.jpg" data-fancybox="creativedoor" rel="fancybox">
					<img src="images/portfolio/creativedoor/preview.jpg" />
				</a>
				<a href="images/portfolio/creativedoor/2.jpg" data-fancybox="creativedoor" rel="fancybox"></a>
				<a href="images/portfolio/creativedoor/3.jpg" data-fancybox="creativedoor" rel="fancybox"></a>
				<a href="images/portfolio/creativedoor/4.jpg" data-fancybox="creativedoor" rel="fancybox"></a>
				<a href="images/portfolio/creativedoor/5.jpg" data-fancybox="creativedoor" rel="fancybox"></a>
				<a href="images/portfolio/creativedoor/6.jpg" data-fancybox="creativedoor" rel="fancybox"></a>
				<a href="images/portfolio/creativedoor/7.jpg" data-fancybox="creativedoor" rel="fancybox"></a>
				<a href="images/portfolio/creativedoor/8.jpg" data-fancybox="creativedoor" rel="fancybox"></a>
				<a href="images/portfolio/creativedoor/9.jpg" data-fancybox="creativedoor" rel="fancybox"></a>
				<a href="images/portfolio/creativedoor/10.jpg" data-fancybox="creativedoor" rel="fancybox"></a>
				<a href="images/portfolio/creativedoor/11.jpg" data-fancybox="creativedoor" rel="fancybox"></a>
				<a href="images/portfolio/creativedoor/12.jpg" data-fancybox="creativedoor" rel="fancybox"></a>
			</div>
		</div>
		<h3>
			<a href="#" class="fancybox-proxy">Creative Door mobile-responsive visualizer</a>
		</h3>
		<p><a href="http://www.renoworks.com/" target="_blank">Renoworks</a> Visualizer. Created mockups for desktop and mobile sized views. Developed the layout and visual components to be fully responsive.</p>
		<p>
			<span class="label label-primary">HTML5</span>
			<span class="label label-warning">CSS3</span>
			<span class="label label-success">jQuery</span>
		</p>

	</div>

	<div class="portfolioWrap animated flipInX">
		<div class="portfolioFrame">
			<div class="content">
				<a href="images/portfolio/emser/1.jpg" data-fancybox="/emsertile" rel="fancybox">
					<img src="images/portfolio/emser/preview.jpg" />
				</a>
				<a href="images/portfolio/emser/2.jpg" data-fancybox="/emsertile" rel="fancybox"></a>
				<a href="images/portfolio/emser/3.jpg" data-fancybox="/emsertile" rel="fancybox"></a>
				<a href="images/portfolio/emser/4.jpg" data-fancybox="/emsertile" rel="fancybox"></a>
				<a href="images/portfolio/emser/5.jpg" data-fancybox="/emsertile" rel="fancybox"></a>
				<a href="images/portfolio/emser/6.jpg" data-fancybox="/emsertile" rel="fancybox"></a>
				<a href="images/portfolio/emser/7.jpg" data-fancybox="/emsertile" rel="fancybox"></a>
			</div>
		</div>
		<h3>
			<a href="#" class="fancybox-proxy">Emser Tile mobile-responsive visualizer</a>
		</h3>
		<p>
			Created mockups for desktop and mobile sized views. Made usability and aesthetic improvements on the existing <a href="http://www.renoworks.com/" target="_blank">Renoworks</a> layer management and masking tools.
			Developed the layout and visual components to be fully responsive.
		</p>
		<p>
			<span class="label label-primary">HTML5</span>
			<span class="label label-warning">CSS3</span>
			<span class="label label-success">jQuery</span>
		</p>
	</div>

	<div class="portfolioWrap animated flipInX">
		<div class="portfolioFrame">
			<div class="content">
				<a href="images/portfolio/homeplayprime/1.jpg" data-fancybox="homeplayprime" rel="fancybox">
					<img src="images/portfolio/homeplayprime/preview.jpg" />
				</a>
				<a href="images/portfolio/homeplayprime/2.jpg" data-fancybox="homeplayprime" rel="fancybox"></a>
				<a href="images/portfolio/homeplayprime/3.jpg" data-fancybox="homeplayprime" rel="fancybox"></a>
				<a href="images/portfolio/homeplayprime/4.jpg" data-fancybox="homeplayprime" rel="fancybox"></a>
				<a href="images/portfolio/homeplayprime/5.jpg" data-fancybox="homeplayprime" rel="fancybox"></a>
			</div>
		</div>
		<h3>
			<a href="#" class="fancybox-proxy">Homeplay Prime mobile-responsive visualizer</a>
		</h3>
		<p><a href="http://www.renoworks.com/" target="_blank">Renoworks</a> Visualizer. Using a provide design for the desktop-sized web application, I provided visual mockups for portrait and landscape orientations on mobile devices.
			Developed the layout and visual components to be fully responsive.</p>
		<p>
			<span class="label label-primary">HTML5</span>
			<span class="label label-warning">CSS3</span>
			<span class="label label-success">jQuery</span>
		</p>
	</div>

	<div class="portfolioWrap animated flipInX">
		<div class="portfolioFrame">
			<div class="content">
				<a href="http://calgaryscrapautoremoval.com" target="_blank"><img src="images/portfolio/calgaryscrapautoremoval/preview.jpg" alt="Calgary Scrap Auto Removal get paid cash for your junk car" /></a>
			</div>
		</div>
		<h3><a href="http://calgaryscrapautoremoval.com" target="_blank">Calgary Scrap Auto Removal Website &amp; Google Adwords</a></h3>
		<p>
			Calgary Scrap Auto Removal is my oldest client. We recently redesigned their existing website using a mobile-responsive Bootstrap theme, as to provide their mobile visitors
			with the best experience. We also took the opportunity to revise their existing AdWords campaign to help maximize ROI.
		</p>
		<p>
			<span class="label label-primary">HTML5</span>
			<span class="label label-warning">CSS3</span>
			<span class="label label-warning">Bootstrap</span>
			<span class="label label-success">jQuery</span>
			<span class="label label-info">AdWords</span>
		</p>
	</div>

	<div class="portfolioWrap animated flipInX">
		<div class="portfolioFrame">
			<div class="content">
				<a href="projects/AthleteBookLanding" target="_blank"><img src="images/portfolio/athletebooklanding/preview.jpg" /></a>
			</div>
		</div>
		<h3><a href="http://athletebook.ca" target="_blank">AthleteBook.ca Contest Landing Page</a></h3>
		<p>
			This pre-launch promotional page was used to collect email addresses of people who were interested in the AthleteBook concept, so launch information could be announced.
		</p>
		<p>
			<span class="label label-primary">HTML5</span>
			<span class="label label-warning">CSS3</span>
			<span class="label label-success">jQuery</span>
		</p>
	</div>

	<div class="portfolioWrap animated flipInX">
		<div class="portfolioFrame">
			<div class="content">
				<a href="/images/portfolio/westerninspection/western-portfolio.png" rel="fancybox">
					<img src="images/portfolio/westerninspection/western-portfolio.png" />
				</a>
			</div>
		</div>
		<h3>
			<a href="#" class="fancybox-proxy">Western Inspection Logo Redesign</a>
		</h3>
		<p>
			A modern restyling of the outdated original logo.
		</p>
	</div>

	<div class="portfolioWrap animated flipInX">
		<div class="portfolioFrame">
			<div class="content">
				<a href="http://prairiemountainranch.com" target="_blank"><img src="images/portfolio/pmr/pmr-portfolio.png" alt="Prairie Mountain Ranch" /></a>
			</div>
		</div>
		<a href="http://prairiemountainranch.com" target="_blank">
			<h3>Prairie Mountain Ranch Design & Development</h3>
		</a>
		<p>
			Prairie Mountain Ranch required a straight-forward CMS solution to manage their constantly changing content including events, news, and photos.
			The theme was designed around their existing logo and then implemented in to Drupal 7.
		</p>
		<p>
			<span class="label label-primary">Drupal 7</span>
			<span class="label label-primary">HTML5</span>
			<span class="label label-warning">CSS3</span>
			<span class="label label-warning">Bulma</span>
			<span class="label label-success">jQuery</span>
		</p>
	</div>

	<div class="portfolioWrap animated flipInX">
		<div class="portfolioFrame">
			<div class="content">
				<a href="/images/portfolio/lionspc/lions-logo-lowres-2.png" rel="fancybox"><img src="images/portfolio/lionspc/preview.png" /></a>
			</div>
		</div>
		<a href="/images/portfolio/lionspc/lions-logo-lowres-2.png" rel="fancybox">
			<h3>Lions Professional Center Logo</h3>
		</a>
		<p>
			Lions needed a new logo for their newly opening professional offices center that represented strength and professionalism.
			Lions Professional Center is a client of Zee and Kais at <a href="http://www.blulion.ca" target="_blank">BluLion Media Networks</a>.
		</p>
	</div>

	<div class="portfolioWrap animated flipInX">
		<div class="portfolioFrame">
			<div class="content">
				<a href="http://www.okotokspizza.ca" target="_blank"><img src="images/portfolio/okotokspizza/preview.png" /></a>
			</div>
		</div>
		<h3>
			<a href="http://www.okotokspizza.ca" target="_blank">Okotoks Pizza Logo</a>
		</h3>
		<p>
			Okotoks Pizza & Pasta required a bold new logo after a change in ownership.
		</p>
	</div>

	<div class="portfolioWrap animated flipInX">
		<div class="portfolioFrame">
			<div class="content">
				<a href="http://www.racethebase.ca" target="_blank"><img src="images/portfolio/racethebase/preview.png" /></a>
			</div>
		</div>
		<h3>
			<a href="http://www.racethebase.ca" target="_blank">Race The Base 2012 Website Development & Registration Form</a>
		</h3>

		<p>
			<strong>[Website Inactive]</strong> This years website for the well-known fundraiser Race the Base was done in collaboration with Trevor at
			<a href="http://www.fuelcreative.ca" target="_blank">Fuel Creative</a> who handled the majority of design elements and managed the project.
			My contributions to the project include skinning and coding the provided design, content page creation, and most notably creating an online registration form.
			The <a href="http://racethebase.ca/?go=registration-html-form" target="_blank">registration form</a> collected a robust amount of competitors information, driver
			and car image uploading, intelligent form validation, and entry fee tabulation complete with a PayPal payment gateway.
		</p>

		<p>
			<span class="label label-primary">HTML5</span>
			<span class="label label-warning">CSS3</span>
			<span class="label label-success">jQuery</span>
			<span class="label label-success">jQuery UI</span>
		</p>
	</div>

	<div class="portfolioWrap animated flipInX">
		<div class="portfolioFrame">
			<div class="content">
				<a href="http://www.yummymummysaver.com" target="_blank"><img src="images/portfolio/yummymummysaver/preview.png" /></a>
			</div>
		</div>
		<h3>
			<a href="http://www.yummymummysaver.com" target="_blank">Yummy Mummy Saver Logo & Website</a>
		</h3>
		<p>
			<strong>[Website Inactive]</strong>Yummy Mummy Saver is a "group buy" website targetted towards moms. They offer lots of great deal on spa treaments, house cleaning,
			and more! I re-themed their website which runs on PHP GroupScript, setup mailing list integration with MailChimp API, and provided them with a re-polished logo.
		</p>
		<p>
			<span class="label label-primary">HTML5</span>
			<span class="label label-primary">CSS3</span>
		</p>
	</div>

	<div class="portfolioWrap animated flipInX">
		<div class="portfolioFrame">
			<div class="content">
				<a href="images/portfolio/heatherrobertson-clairerae/full.png" rel="fancybox"><img src="images/portfolio/heatherrobertson-clairerae/preview.png" /></a>
			</div>
		</div>
		<h3>
			<a href="images/portfolio/heatherrobertson-clairerae/full.png" rel="fancybox">Heather Robertson & Claire Rae "Comp Cards"</a>
		</h3>
		<p>
			Heather Robertson &amp; Claire Rae both required 8x6 inch "Comp Cards" to handout as promotional devices at the 2011 World Bodybuilding & Fitness Federation Nationals.
			Both clients were represented by <a href="http://www.stylelabs.ca" taget="_blank">StyleLabs</a> during my time there.
		</p>
	</div>

	<div class="portfolioWrap animated flipInX">
		<div class="portfolioFrame">
			<div class="content">
				<a href="images/portfolio/myhairstylist/full.jpg" rel="fancybox"><img src="images/portfolio/myhairstylist/preview.png" /></a>
			</div>
		</div>
		<h3>
			<a href="images/portfolio/myhairstylist/full.jpg" rel="fancybox">My Hair Stylist Website Design Draft</a>
		</h3>
		<p>
			This is a one of my favorite design drafts done during my time at <a href="http://www.stylelabs.ca" target="_blank">StyleLabs</a>.
			This was submitted as a concept for My Hair Stylist, and was eventually modified in a <a href="http://www.myhairstylist.ca" target="_blank">final version</a>
			by another designer.
		</p>
	</div>

	<div class="portfolioWrap animated flipInX">
		<div class="portfolioFrame">
			<div class="content">
				<a href="/images/portfolio/vap/vap-fullsize.jpg" rel="fancybox"><img src="images/portfolio/vap/preview.png" /></a>
			</div>
		</div>
		<a href="/images/portfolio/vap/vap-fullsize.jpg" rel="fancybox">
			<h3>VaP: Personal Vaporizer Logo</h3>
		</a>
		<p>
			VaP personal vaporizers were one of the first brands of electronic cigarette on the Canadian market. Their logo is meant to be symbolic in a number of different ways.
			The shape of the logo is meant to look like a flame, but the blue colour suggests that this is not actually fire, but more indicative of the watery vapor that the e-cigarettes
			produced in place of smoke.
		</p>
	</div>
</div>