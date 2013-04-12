<?php 
function kalypso_footer($page){
  global $root; 
?>

<!-- begin footer -->        
    <div id="footer"> 
      <div class="container">
          <div class="content">
            <a href="href="http://sightmachine.com"><img src="<?php print file_create_url(drupal_get_path('theme', 'kalypso')); ?>/images/smlogo.png" /></a> <span style="margin-left: 20px;">Copyright <a href="http://sightmachine.com">Sight Machine</a>, Inc, SimpleCV is a trademark of Sight Machine, Inc.</span>
          </div>
        
      </div> 
    </div>
    <!-- end footer --> 
<?php }
?>