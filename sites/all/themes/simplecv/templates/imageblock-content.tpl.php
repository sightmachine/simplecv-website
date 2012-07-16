<?php

/**
 * @file
 * Default theme implementation to display image block content.
 *
 * Available variables:
 * - $image: Block image.
 * - $content: Block content.
 * - $block: Block object.
 *
 * @see template_preprocess()
 * @see template_preprocess_imageblock_content()
 */
?>
	<li class="callout">
		<div class="calloutLeft">
			<?php print $image; ?>
			<p><?php print $title; ?></p>
		</div>
		<div class="calloutRight">
			<?php print $content; ?>
		</div>
	</li>
