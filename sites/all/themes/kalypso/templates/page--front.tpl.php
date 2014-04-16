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
                    <a href="/book"><img src="<?php print file_create_url(drupal_get_path('theme', 'kalypso')); ?>/images/thebook.png" /></a>
                    <p>Need more help? Check out our book, <a href="/book">"Practical Computer Vision with SimpleCV."</a></p>
                  </div>
                </div>
              </div>

              <hr />

              <div class="section">
                <h3>Getting Started</h3>
                <div class="two_thirds">
                  <div class="content left">
<pre><code>from SimpleCV import Camera
<span style="color: #999;"># Initialize the camera</span>
cam = Camera()
<span style="color: #999;"># Loop to continuously get images</span>
while <span style="color: maroon;">True</span>:
    <span style="color: #999;"># Get Image from camera</span>
    img = cam.getImage()
    <span style="color: #999;"># Make image black and white</span>
    img = img.binarize()
    <span style="color: #999;"># Draw the text "Hello World" on image</span>
    img.drawText(<span style="color: red; ">"Hello World!"</span>)
    <span style="color: #999;"># Show the image</span>
    img.show()</code></pre>

                  </div>
                </div>
                <div class="one_third">
                  <div class="content right">
                    <p>This example shows a "Hello World" program that uses SimpleCV. In this example we first connect to a USB web camera. We then capture images from the web cam, apply a binary threshold that turns our image black and white, and then draws some text. The program then prints the results to a display.</p>
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
                    <a href="https://gist.github.com/sight-machine/5406587" title="Binary Example" target="_blank">Example</a></p>
                  </div>
                </div>
                <div class="one_third">
                  <div class="content middle">
                    <img src="<?php print file_create_url(drupal_get_path('theme', 'kalypso')); ?>/images/juniperedges.png" />
                    <p>In this image we applied the SimpleCV edges method. This method sets edge pixels in the image to white.
                    <a href="https://gist.github.com/sight-machine/5406598" title="Edges Example" target="_blank">Example</a></p>
                  </div>
                </div>
                <div class="one_third right">
                  <div class="content right">
                    <img src="<?php print file_create_url(drupal_get_path('theme', 'kalypso')); ?>/images/juniperfeats.png" />
                    <p>Keypoints are visually unique areas of an image that are used for a variety of 3D reconstruction and image matching tasks. Finding keypoints in SimpleCV is super easy, just call the Image.findKeypoints method. 
                    <a href="https://gist.github.com/sight-machine/5406600" title="Features Example" target="_blank">Example</a></p>

                  </div>
                </div>
              </div>

              <hr/>

              <div class="section">
                <div class="content left">
                  <p>These are just a small number of things you can do with SimpleCV.  If you would like to learn more please refer to our <a href="http://tutorial.simplecv.org">tutorial</a>.  There are also many examples included in the SimpleCV directory under the examples folder which can also be downloaded from <a href="https://github.com/sightmachine/SimpleCV/tree/develop/SimpleCV/examples">here</a>.</p>
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