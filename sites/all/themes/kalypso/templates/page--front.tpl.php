<?php kalypso_header($page, $banner_html); global $root; ?>

      <!-- main span10 -->
      <div class="span10">
        
        <?php if (theme_get_setting('enable_highlight') == '1') { ?>
        <div class="row">
          <div id="page_heading">
            <h2 class="page_heading_text"><?php echo theme_get_setting('highlight_text'); ?></h2>
          </div>
        </div> 
        <?php } ?>

      <hr />

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

              <hr />

              <div class="section">
                <h3>Getting Started</h3>
                <div class="two_thirds">
                  <div class="content left">
<pre><code>from SimpleCV import Image, Display, Color, Camera
cam = Camera(<span style="color: green;">0</span>)                     <span style="color: #aaa;"># Get the first camera</span>
disp = Display((<span style="color: green;">640</span>,<span style="color: green;">480</span>))           <span style="color: #aaa;"># Create a 640x480 display</span>
while( disp.isNotDone() ):          <span style="color: #aaa;"># While we don't exit the display</span>
    img = cam.getImage().binarize() <span style="color: #aaa;"># Get an image and make it black and white</span>
    <span style="color: #aaa;"># Draw the text "Hello World" at (40,40) in red.</span>
    img.drawText(<span style="color: red;">"Hello World!"</span>,<span style="color: green;">40</span>,<span style="color: green;">40</span>,
                 fontsize=<span style="color: green;">60</span>,color=Color.RED ) 
    img.save(disp)                  <span style="color: #aaa;"># Save it to the screen</span></code></pre>

                  </div>
                </div>
                <div class="one_third">
                  <div class="content right">
                    <p>This example shows a "Hello World" program that uses SimpleCV. In this example we first connect to a USB web camera. We then capture images from the web cam, apply a binary threshold that turns our image black and white, and then draw some text in red. The program then print the results to a display</p>
                  </div>
                </div>
              </div>

              <hr />

              <div class="section juniper">
                <h3>Examples</h3>
                <div class="one_third left">
                  <div class="content left">
                    <img src="<?php print file_create_url(drupal_get_path('theme', 'kalypso')); ?>/images/juniperbinary.png" />
                    <p>This image shows the SimpleCV threshold function. The threshold method sets each pixel in an image to black or white depending on its brightness.
                    <a href="https://gist.github.com/kscottz/5372815" title="Binary Example" target="_blank">Example</a></p>
                  </div>
                </div>
                <div class="one_third">
                  <div class="content middle">
                    <img src="<?php print file_create_url(drupal_get_path('theme', 'kalypso')); ?>/images/juniperedges.png" />
                    <p>In this image we applied the SimpleCV edges method. This method sets edge pixels in the image to white.
                    <a href="https://gist.github.com/kscottz/5372843" title="Edges Example" target="_blank">Example</a></p>
                  </div>
                </div>
                <div class="one_third right">
                  <div class="content right">
                    <img src="<?php print file_create_url(drupal_get_path('theme', 'kalypso')); ?>/images/juniperfeats.png" />
                    <p>Keypoints are visually unique areas of an image that are used for a variety of 3D reconstruction and image matching tasks. Finding keypoints in SimpleCV is super easy, just call the Image.findKeypoints method. 
                    <a href="https://gist.github.com/kscottz/5372863" title="Features Example" target="_blank">Example</a></p>

                  </div>
                </div>
              </div>

            </div>
          </div>
      </div>

      <hr />
      
  
      </div>
    </div>       
  </div>
  <!-- end main body container -->  

<?php kalypso_footer($page); // Call Footer ?>