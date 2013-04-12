<?php kalypso_header($page);?>
        <div class="span10">
        
          <div class="row">
            <div class="span10">
              <div id="page_heading">
              <h2 class="page_heading_text"><?php print $title; ?></h2>
              <div id="breadcrumbs"><h3><?php if (theme_get_setting('breadcrumbs') == '1') {print $breadcrumb . $title; } ?></h3></div>
              </div>
            </div>
          </div> 
          
          <div class="row">
            <div id ="main_content_wrap" class="<?php if (theme_get_setting('page_layout') == 'sidebar_right') { echo "span10"; } else { echo "span10"; } ?>">
              <div id="main_content">
	              <?php print render($title_prefix); ?>
	              <?php print render($title_suffix); ?>
	              <?php if ($tabs = render($tabs)): ?>
							    <div id="drupal_tabs" class="tabs">
							    <?php print render($tabs); ?>
							    </div>
							  <?php endif; ?>
					      <?php print render($page['help']); ?>
					      <?php if ($action_links): ?>
					        <ul class="action-links">
					          <?php print render($action_links); ?>
					        </ul>
					      <?php endif; ?>
	              <?php print render($page['content']); ?>
	            </div>
	          </div>
        	</div>
        </div>    
        
      </div>
    </div>  
    
<?php kalypso_footer($page);?>