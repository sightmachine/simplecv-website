  <div class="container">
    <div class="row">
        <div class="span12">
        
          <div class="row">
            <div class="span12">
              <div id="page_heading">
              <h2 class="page_heading_text"><?php print $title; ?></h2>
              <div id="breadcrumbs"><h3><?php if (theme_get_setting('breadcrumbs') == '1') {print $breadcrumb . $title; } ?></h3></div>
              </div>
            </div>
          </div> 
          
          <div class="row">
            <div id ="main_content_wrap" class="span12">
              <div id="main_content">
	              <div class="error_wrap">
		              <div class="error_img">
		                <img src="<?php global $root; echo $root;?>/images/404.png" alt="404">
		              </div>
		             
		              <div class="error_text">
		                <h2>Page not found</h2>
		                <p>We're sorry, but the page you are looking for cannot be found. Try one of the following instead:</p>
		                <br>
		                <p><a class="btn btn-large" href="<?php print base_path();?>"> Home</a></p>
		              </div>    
		            </div>
                  </div>
                  <!--end error wrap-->
	            </div>
	          </div>
        
		      </div>
        </div>    
      </div>
    </div>  
  
<?php kalypso_footer($page);?>