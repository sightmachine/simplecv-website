<?php kalypso_header($page); global $root; ?>

      <!-- main span10 -->
      <div class="span10">
        
        <?php if (theme_get_setting('enable_highlight') == '1') { ?>
        <div class="row">
          <div class="span10">
            <div id="page_heading">
            <h2 class="page_heading_text"><?php echo theme_get_setting('highlight_text'); ?></h2>
            </div>
          </div>
        </div> 
        <?php } ?>

      <div class="separator"></div>

      <div class="row">
          <div id="panels"> 
            <div class="main-content">

              <div class="section">
                <div class="two_thirds">
                  <div class="content left">
                    <h3>What is it?</h3>
                    <p>SimpleCV is an open source framework for building computer vision applications. With it, you get access to several high-powered computer vision libraries such as OpenCV – without having to first learn about bit depths, file formats, color spaces, buffer management, eigenvalues, or matrix versus bitmap storage. <strong>This is computer vision made easy.</strong></p>

                  </div>
                </div>
                <div class="one_third">
                  <div class="content right">
                    <h3>The Book</h3>
                    <a href="http://shop.oreilly.com/product/0636920024057.do"><img src="<?php print file_create_url(drupal_get_path('theme', 'kalypso')); ?>/images/thebook.png" /></a>
                    <p>Need more help? Check out our book, <a href="http://shop.oreilly.com/product/0636920024057.do">"Practical Computer Vision with SimpleCV."</a></p>
                  </div>
                </div>
              </div>

              <div class="separator"></div>

              <div class="section">
                <h3>Getting Started</h3>
                <div class="two_thirds">
                  <div class="content left">
<pre><code>from SimpleCV import *

cam = Camera()
disp = Display()

while disp.isNotDone():
  img = cam.getImage()
  if disp.mouseLeft:
    break
  img.save(disp)</code></pre>

                  </div>
                </div>
                <div class="one_third">
                  <div class="content right">
                    <p>This example shows a "Hello World" program that uses SimpleCV. In this example we first connect to a USB web camera. We then capture images from the web cam, apply a binary threshold that turns our image black and white, and then draw some text in red. The program then print the results to a display</p>
                  </div>
                </div>
              </div>

              <div class="separator"></div>

              <div class="section juniper">
                <h3>Juniper the Example Goddess</h3>
                <div class="one_third">
                  <div class="content left">
                    <img src="<?php print file_create_url(drupal_get_path('theme', 'kalypso')); ?>/images/juniloobinarize.png" />
                    <p>This image shows the SimpleCV threshold function. The threshold method sets each pixel in an image to black or white depending on its brightness.</p>
                  </div>
                </div>
                <div class="one_third">
                  <div class="content">
                    <img src="<?php print file_create_url(drupal_get_path('theme', 'kalypso')); ?>/images/junilooedges.png" />
                    <p>In this image we applied the SimpleCV edges method. This method sets edge pixels in the image to white.</p>
                  </div>
                </div>
                <div class="one_third">
                  <div class="content right">
                    <img src="<?php print file_create_url(drupal_get_path('theme', 'kalypso')); ?>/images/juniloopixelize.png" />
                    <p>In this image we applied a pixelization operation. Pixelization can sometimes be helpful for looking for regions of a certain color. </p>
                  </div>
                </div>
              </div>

            </div>
          </div>
      </div>

      <div class="separator"></div>
      
  
      </div>
    </div>       
  </div>
  <!-- end main body container -->  

<?php kalypso_footer($page); // Call Footer ?>