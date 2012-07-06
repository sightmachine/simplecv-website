<!-- BEGIN Content -->
<div id="Content" role="Main" itemprop="mainContentOfPage">
	<div id="LeftColumnWide">
		<div id="AccordionWrapper">
				<h1 class="pageHeader">
					Enabling Computers To See
				</h1>
				<div id="AccordionMain">
					<div id="Accordion">
						<h3><a href="#">About</a></h3>
						<div>
						<div class="accordion-content-left">
							<p>
							SimpleCV is an open source framework for building computer vision applications. With it, you get access to several high-powered computer vision libraries such as OpenCV – without having to first learn about bit depths, file formats, color spaces, buffer management, eigenvalues, or matrix versus bitmap storage. 
							</p><p>
							<b>This is computer vision made easy.</b>
							</p>
						</div>
						<div class="accordion-content-right">
							<a href="download"><img src="<?php print path_to_theme(); ?>/images/download-button.png" width="103" height="103" alt="download"></a>
							<h2><a href="download/index.html">Download</a></h2>
							<p>Version 1.3</p>
						</div>
					</div>
					<h3><a href="#">More Information</a></h3>
					<div>
						<p>
							SimpleCV is an open source framework &mdash; meaning that it is a collection of libraries and software that you can use to develop vision applications.  It lets you work with the images or video streams that come from webcams, Kinects, FireWire and IP cameras, or mobile phones.  It’s helps you build software to make your various technologies not only see the world, but understand it too.
						</p>
						<p>
							SimpleCV is written in Python, and it's free to use.  It runs on Mac, Windows, and Ubuntu Linux, and it's licensed under the BSD license.
						</p>
					</div>
					<h3><a href="#">Features</a></h3>
					<div>
						<ul>
							<li> Convenient "Superpack" installation for rapid deployment</li>
							<li> Feature detection and discrimination of Corners, Edges, Blobs, and Barcodes</li>
							<li> Filter and sort image features by their location, color, quality, and/or size</li>
							<li> An integrated iPython interactive shell makes developing code easy</li>
							<li> Image manipulation and format conversion</li>
							<li> Capture and process video streams from Kinect, Webcams, Firewire, IP Cams, or even mobile phones</li>
						</ul>
					</div>
				</div> <!-- END Accordion -->
			</div>
		</div>
	</div>
	<div id="RightColumn">
			<ul id="CalloutList">
					<li class="callout">
							<div class="calloutLeft">
									<a href="/learn/"><img src="<?php print path_to_theme(); ?>/images/book.png" width="53" height="53" alt="Information"></a>
									<p>Information</p>
							</div>
							<div class="calloutRight">
									<h3 class="calloutTitle">
											<a href="/learn/">Getting Started</a>
									</h3>
									<p>
Learn how to <a href="/learn/install_guide.html">install SimpleCV</a>, watch our <a href="/learn/videos.html">demos</a>, or browse through our <a href="/docs/">documentation</a>.  
									</p>
							</div>
					</li>
					<li class="callout">
							<div class="calloutLeft">
									<a href="/download/"><img src="<?php print path_to_theme(); ?>/images/download-small.png" width="53" height="53" alt="Download"></a>
							<p>Download</p>
							</div>
							<div class="calloutRight">
									<h3 class="calloutTitle">
	<a href="/download/">Download Version 1.3</a>
									</h3>
									<p>
Download the <a href="/download/">latest release</a> – or you can get the code from our <a href="https://github.com/ingenuitas/simplecv">GitHub repository</a>.
									</p>
							</div>
					</li>
					<li class="callout">
							<div class="calloutLeft">
									<a href="/contribute/"><img src="<?php print path_to_theme(); ?>/images/people.png" width="53" height="53" alt="Contribute"></a>
							<p>Learn More</p>
							</div>
							<div class="calloutRight">
									<h3 class="calloutTitle">
											<a href="/contribute/">Contribute</a>
									</h3>
									<p>
There are a lot of different ways that you can get involved!
									</p>
							</div>
					</li>
			</ul>
	</div>
<div class="subsection-wrapper">
	<div class="subsection-front">

		<div id="book-block">
			<div id="callOutHeader">
				<h2>Our New Book!</h2>
			</div>
			<div id="callOutContent">	
				<a href="http://shop.oreilly.com/product/0636920024057.do"><img src="<?php print path_to_theme(); ?>/images/book.gif" width="94" height="122" class="bookCover"></a>

				<p><a href="http://shop.oreilly.com/product/0636920024057.do">Practical Computer Vision with SimpleCV</a></p>

				<p>We wrote a book to help programmers learn how to build computer vision applications using SimpleCV.  The book introduces you to computer vision concepts, and includes example code for a variety of applications.  We walk through the code step-by-step, so you can understand exactly what's going on and why. If you're interested in learning SimpleCV, this is a great place to start!
                                </p>
                                <p><a href="http://shop.oreilly.com/product/0636920024057.do">Pre-Order Now ></a></p>
			</div>
		</div>
		
		<div id="tweet-block">
			<?php	$block = block_load('views','tweets-block');?>
			<?php	$block = module_invoke('views', 'block_view', 'tweets-block');?>
                        <div id="callOutHeader">
				<h2><?php	print $block['subject'];?></h2>
			</div>
                        <div id="callOutContent">
				<?php	print $block['content']['#markup'];?>
			</div>
		</div>

		<div id="development-block">
			<?php $block = module_invoke('aggregator', 'block_view', 'feed-1'); ?>
			 <div id="callOutHeader">
				<h2><?php print $block['subject']; ?></h2>
			</div>
			<div id="callOutContent">
				<?php print $block['content']; ?>
			</div>
		</div>

	</div>
</div>

</div>
<!-- END Content -->
    
