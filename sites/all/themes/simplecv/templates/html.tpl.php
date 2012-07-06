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
	<?php drupal_add_js('js/libs/jquery-1.7.1.min.js'); ?>
  <title>SimpleCV: Home</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="description" content="SimpleCV is an open source framework for building computer vision applications.">
  <meta name="viewport" content="width=device-width">
  <meta name="robots" content="index, follow">
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
</head>
<body itemscope itemtype="http://schema.org/WebPage">
    <!-- BEGIN Header -->
    <div id="HeaderWrapper">
        <div id="Header">
            <div id="HeaderTop">
                <div id="Logo">
                    <a href="/index.html"><img src="<?php print base_path().drupal_get_path('theme', 'simplecv') . '/images/logo.gif'; ?>" width="243" height="63" alt="SimpleCV"></a>
                </div>
                <ul id="Social">
									  <li>
												
                        <a href="https://github.com/ingenuitas/simplecv"><img src="<?php print base_path().drupal_get_path('theme', 'simplecv') . '/images/github_grey.gif'; ?>" height="28" width="28" alt="GitHub"></a>
                    </li>
                    <li>
                        <a href="http://twitter.com/#!/Simple_CV"><img src="<?php print base_path().drupal_get_path('theme', 'simplecv') . '/images/twitter_blue.gif'; ?>" height="28" width="28" alt="Twitter"></a>
                    </li>
                    <li>
                        <a href="http://www.facebook.com/pages/SimpleCV/150136128401869"><img src="<?php print base_path().drupal_get_path('theme', 'simplecv') . '/images/facebook_blue.gif'; ?>" height="28" width="28" alt="Facebook"></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/115199279159361214026/posts"><img src="<?php print base_path().drupal_get_path('theme', 'simplecv') . '/images/google_red.gif'; ?>" height="28" width="28" alt="Google+"></a>
                    </li>
                </ul>
            </div>
		<?php
			$home_nav_class = NULL;
			$learn_nav_class = NULL;
			$docs_nav_class = NULL;
			$contribute_nav_class = NULL;
			$news_nav_class = NULL;
			$download_nav_class = NULL;

			$url_array = parse_url($_SERVER['REQUEST_URI']);
			$url_path = $url_array['path'];

			if(preg_match("/^\/learn\//",$url_path)) { $learn_nav_class = 'class="current" '; }		
			elseif(preg_match("/^\/docs\//",$url_path)) { $docs_nav_class = 'class="current" '; }		
			elseif(preg_match("/^\/contribute\//",$url_path)) { $contribute_nav_class = 'class="current" '; }		
			elseif(preg_match("/^\/news\//",$url_path)) { $news_nav_class = 'class="current" '; }		
			elseif(preg_match("/^\/download\//",$url_path)) { $download_nav_class = 'class="current" '; }		
			elseif(preg_match("/^\/$/",$url_path)) { $home_nav_class = 'class="current" '; }

		?>
            <ul id="Menu1" role="navigation" itemprop="breadcrumb">

                <li class="homeButton">
                    <a <?php print $home_nav_class; ?>href="/"></a>
                </li>
                <li>
                    <a <?php print $learn_nav_class; ?>href="/learn/">LEARN</a>
                </li>
                <li>
                    <a <?php print $docs_nav_class; ?>href="/docs/">DOCUMENTATION</a>
                </li>
                <li>
                    <a <?php print $contribute_nav_class; ?>href="/contribute/">CONTRIBUTE</a>
                </li>
                <li>
                    <a <?php print $news_nav_class; ?>href="/news/">NEWS &amp; EVENTS</a>
                </li>
                <li>
                    <a <?php print $download_nav_class; ?>href="/download/">DOWNLOAD</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END Header -->

		<!-- BEGIN Main Content -->
		<?php print $page_top; ?>
		<?php print $page; ?>
		<?php print $page_bottom; ?>
		<!-- END Main content -->
    

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
</body>
</html>
