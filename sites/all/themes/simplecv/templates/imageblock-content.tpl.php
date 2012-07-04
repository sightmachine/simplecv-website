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

<ul id="CalloutList">
  <li class="callout">
    <div class="calloutLeft">
      <?php print $image; ?>
    </div>
    <div class="calloutRight">
      <p>
      <?php print $content; ?>
      </p>
    </div>
  </li>
</ul>

