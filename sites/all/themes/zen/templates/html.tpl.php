<?php
/**
 * @file
 * Zen theme's implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation. $language->dir
 *   contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $html_attributes: String of attributes for the html element. It can be
 *   manipulated through the variable $html_attributes_array from preprocess
 *   functions.
 * - $html_attributes_array: Array of html attribute values. It is flattened
 *   into a string within the variable $html_attributes.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $default_mobile_metatags: TRUE if default mobile metatags for responsive
 *   design should be displayed.
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $skip_link_anchor: The HTML ID of the element that the "skip link" should
 *   link to. Defaults to "main-menu".
 * - $skip_link_text: The text for the "skip link". Defaults to "Jump to
 *   Navigation".
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It should be placed within the <body> tag. When selecting through CSS
 *   it's recommended that you use the body tag, e.g., "body.front". It can be
 *   manipulated through the variable $classes_array from preprocess functions.
 *   The default values can contain one or more of the following:
 *   - front: Page is the home page.
 *   - not-front: Page is not the home page.
 *   - logged-in: The current viewer is logged in.
 *   - not-logged-in: The current viewer is not logged in.
 *   - node-type-[node type]: When viewing a single node, the type of that node.
 *     For example, if the node is a Blog entry, this would be "node-type-blog".
 *     Note that the machine name of the content type will often be in a short
 *     form of the human readable label.
 *   The following only apply with the default sidebar_first and sidebar_second
 *   block regions:
 *     - two-sidebars: When both sidebars have content.
 *     - no-sidebars: When no sidebar content exists.
 *     - one-sidebar and sidebar-first or sidebar-second: A combination of the
 *       two classes when only one of the two sidebars have content.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see zen_preprocess_html()
 * @see template_process()
 */
?>
<!doctype html>
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <?php if ($add_respond_js): ?>
    <!--[if lt IE 9]>
    <script src="<?php print $base_path . $path_to_zen; ?>/js/html5-respond.js"></script>
    <![endif]-->
  <?php elseif ($add_html5_shim): ?>
    <!--[if lt IE 9]>
    <script src="<?php print $base_path . $path_to_zen; ?>/js/html5.js"></script>
    <![endif]-->
  <?php endif; ?>
  <title>SimpleCV: Home</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="description" content="SimpleCV is an open source framework for building computer vision applications.">
  <meta name="viewport" content="width=device-width">
  <meta name="robots" content="index, follow">
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
  <link rel="stylesheet" href="css/style.css" />
  <script src="js/libs/modernizr-2.5.0.min.js"></script>
</head>
<body itemscope itemtype="http://schema.org/WebPage">
    <!-- BEGIN Header -->
    <div id="HeaderWrapper">
        <div id="Header">
            <div id="HeaderTop">
                <div id="Logo">
                    <a href="/index.html"><img src="images/logo.gif" width="243" height="63" alt="SimpleCV"></a>
                </div>
                <ul id="Social">
                    <li>
                        <a href="https://github.com/ingenuitas/simplecv"><img src="images/github_grey.gif" height="28" width="28" alt="GitHub"></a>
                    </li>
                    <li>
                        <a href="http://twitter.com/#!/Simple_CV"><img src="images/twitter_blue.gif" height="28" width="28" alt="Twitter"></a>
                    </li>
                    <li>
                        <a href="http://www.facebook.com/pages/SimpleCV/150136128401869"><img src="images/facebook_blue.gif" height="28" width="28" alt="Facebook"></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/115199279159361214026/posts"><img src="images/google_red.gif" height="28" width="28" alt="Google+"></a>
                    </li>
                </ul>
            </div>
            <ul id="Menu1" role="navigation" itemprop="breadcrumb">
                <li class="homeButton">
                    <a class="current" href="/index.html"></a>
                </li>
                <li>
                    <a href="/learn/">LEARN</a>
                </li>
                <li>
                    <a href="/docs/">DOCUMENTATION</a>
                </li>
                <li>
                    <a href="/contribute/">CONTRIBUTE</a>
                </li>
                <li>
                    <a href="/news/">NEWS &amp; EVENTS</a>
                </li>
                <li>
                    <a href="/download/">DOWNLOAD</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END Header -->

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
					<a href="download/index.html"><img src="images/download-button.png" width="103" height="103" alt="download"></a>
					<h2><a href="download/index.html">Download</a></h2>
					<p>Version 1.3</p>
				</div>
			</div>
                    	<h3><a href="#">More Information</a></h3>
                    	<div>
                    		<p>
				SimpleCV is an open source framework &mdash; meaning that it is a collection of libraries and software that you can use to develop vision applications.  It lets you work with the images or video streams that come from webcams, Kinects, FireWire and IP cameras, or mobile phones.  It’s helps you build software to make your various technologies not only see the world, but understand it too.
				</p><p>
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
                        <a href="/learn/"><img src="images/book.png" width="53" height="53" alt="Information"></a>
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
                        <a href="/download/"><img src="images/download-small.png" width="53" height="53" alt="Download"></a>
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
                        <a href="/contribute/"><img src="images/people.png" width="53" height="53" alt="Contribute"></a>
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
    </div>
    <!-- END Content -->

    <!-- BEGIN Footer -->
    <div id="FooterWrapper">
        <div id="Footer">
            <ul id="FooterLeft">
                <li>&copy; <a href="http://www.sightmachine.com">Sight Machine</a> 2012</li>
            </ul>
        </div>
    </div>
    <!-- END Footer -->
    
    <!-- BEGIN Scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>
    <script src="js/libs/jquery-ui-1.8.21.custom.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/script.js"></script>
    <script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-23517471-3']);
	  _gaq.push(['_setDomainName', 'simplecv.org']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
    </script>
    <!-- END Scripts -->

  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  test
</body>
</html>
