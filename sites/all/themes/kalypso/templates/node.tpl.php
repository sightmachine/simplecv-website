<?php 
global $root, $base_url;
$share_url = $base_url.'/node/'.$node->nid;
?>

<?php if (!$page): ?>
  <article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
<?php endif; ?>

  <?php if ($user_picture || $display_submitted || !$page): ?>
    <?php print render($title_prefix); ?>

      <h3 class="post_title" <?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>

    <?php print render($title_suffix); ?>
  
    <?php if ($display_submitted): ?>
      <ul class="meta">
        <li>by <?php print $name; ?></li>
        <li><?php print format_date($node->created, 'custom', 'M d, Y'); ?></li>
        
     </ul>
     <?php if (render($content['field_tags'])): ?>
     <div class="tags"><i class="icon-tags"></i><?php print render($content['field_tags']); ?></div>
     <?php endif; ?>
         <?php endif; ?>
    <?php print render($content['field_image']); ?>
  <?php endif; ?>
  
  <div class="article_content"<?php print $content_attributes; ?>>
    <?php
      // Hide comments, tags, and links now so that we can render them later.
      hide($content['taxonomy_forums']);
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_tags']);
      hide($content['field_image']);
      print render($content);
    ?>
  </div>
  
  <?php if (!$page): ?>
  <div class="read_more"> 
  	<?php if($teaser): ?>
  	<a href="<?php print $node_url;?>">read more &raquo;</a>
    <?php endif;?>
  </div>
  <hr>
<?php endif; ?>


<?php if (!$page): ?>
  </article> <!-- /.node -->
<?php endif; ?>