<?php 
function kalypso_footer($page){
  global $root; 
?>

<!-- begin footer -->        
    <div id="footer"> 
      <div class="container">
          <div class="content">
            <div class="links">
              <ul>
                <li>
                  <a href="https://plus.google.com/115199279159361214026/posts" target="_blank">Google+</a>
                </li>
                <li>
                  <a href="http://www.facebook.com/pages/SimpleCV/150136128401869" target="_blank">Facebook</a>
                </li>
                <li>
                  <a href="http://twitter.com/Simple_CV" target="_blank">Twitter</a>
                </li>
                <li>
                  <a href="https://github.com/ingenuitas/simplecv" target="_blank">Github</a>
                </li>
                <li>
                  <a href="http://help.simplecv.org/" target="_blank">Help</a>
                </li>
              </ul>
            </div>
            <div class="copyright">
              Copyright <a href="http://sightmachine.com">Sight Machine</a>, Inc, SimpleCV is a trademark of Sight Machine, Inc.
            </div>
            <div class="footer-logo">
              <a href="href="http://sightmachine.com"><img src="<?php print file_create_url(drupal_get_path('theme', 'kalypso')); ?>/images/smlogo.png"/></a>
            </div>
          </div>
        
      </div> 
    </div>
    <!-- end footer --> 
<?php 
  }
?>