<?php 
function kalypso_bootstrap_slider($page){
  global $root; 
  $slide_number = theme_get_setting('slides_number');
?>
	<div class="row">
    <div class="span10">
      <div id="myCarousel" class="carousel slide">
      
		   	<div class="carousel-inner">
			    <?php $i = '1'; while ($i <= $slide_number) { ?>
			    <div class="<?php if ($i == '1') {echo "active ";} ?>item">
			      <a href="<?php echo theme_get_setting('slide_url_'.$i.''); ?>">
			      	<img src="<?php print file_create_url(theme_get_setting('slide_path_'.$i.'')); ?>">
			      </a>
			      <?php if (theme_get_setting('slide_caption_'.$i.'') != '') : ?>
			    	<div class="carousel-caption">
				    	<p><?php echo theme_get_setting('slide_caption_'.$i.''); ?></p>
				    </div><!-- end caption -->
				    <?php endif; ?>
			    </div><!-- end item -->
			    <?php $i++; } ?>
			  </div>
			  <!-- end carousel-inner -->
			
			  <!-- Carousel nav -->
			  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		  
		  </div>
		  <!-- end myCarousel -->            
		</div>
  </div>
  
  <script type="text/javascript">
		jQuery(document).ready(function ($) {
		  $('.carousel').carousel({
		    interval: 5000
		  })
		})
  </script>
          
<?php }

function kalypso_nivo_slider($page){
  global $root; 
  $slide_number = theme_get_setting('slides_number');
?>
	<div class="row">
    <div class="span10">
      <div class="slider-wrapper theme-default">
        
        <div id="slider" class="nivoSlider">
          <?php $i = '1'; while ($i <= $slide_number) { ?>  
          	<a href="<?php echo theme_get_setting('slide_url_'.$i.''); ?>">
            	<img src="<?php print file_create_url(theme_get_setting('slide_path_'.$i.'')); ?>" alt="slider" title="#htmlcaption<?php echo $i;?>">
            </a>
          <?php $i++; } ?>              
        </div>
        
        <?php $i = '1'; while ($i <= $slide_number) { ?> 
        <div id="htmlcaption<?php echo $i;?>" class="nivo-html-caption">
         <?php echo theme_get_setting('slide_caption_'.$i.''); ?>
        </div>
        <?php $i++; } ?> 
        
      </div>
    </div>
  </div>
  
  <script type="text/javascript">
    jQuery(document).ready(function ($) {
    	$('#slider').nivoSlider();
    });
  </script>
<?php }

function kalypso_elastic_image_slider($page){
  global $root; 
  $slide_number = theme_get_setting('slides_number');
?>
	<div class="row">
    <div class="span10">
      <div id="ei-slider" class="ei-slider">
      
        <ul class="ei-slider-large">
          <?php $i = '1'; while ($i <= $slide_number) { ?>
          <li>
          	<a href="<?php echo theme_get_setting('slide_url_'.$i.''); ?>">
            	<img src="<?php print file_create_url(theme_get_setting('slide_path_'.$i.'')); ?>" alt="slider">
            </a>
            <?php if (theme_get_setting('slide_caption_'.$i.'') != '') : ?>
            <div class="ei-title">
            	<?php echo theme_get_setting('slide_caption_'.$i.''); ?>
            </div>
            <?php endif; ?>
          </li>
          <?php $i++; } ?>        
        </ul>
        <!-- ei-slider-large -->
        
        <ul class="ei-slider-thumbs">
        	<li class="ei-slider-element">Current</li>
          <?php $i = '1'; while ($i <= $slide_number) { ?>
          <li><a href="#">Slide <?php echo $i; ?></a><img src="<?php print file_create_url(theme_get_setting('slide_path_'.$i.'')); ?>" alt="thumb" height="60" width="150" /></li>
          <?php $i++; } ?>
        </ul>
        <!-- ei-slider-thumbs -->
      </div>
      <!-- ei-slider -->
    </div>
  </div>
  
  <script type="text/javascript">
    jQuery(document).ready(function ($) {
    	$('#ei-slider').eislideshow({
				animation			: 'center',
				autoplay			: true,
				slideshow_interval	: 3000,
				titlesFactor		: 0
		  });
    });
  </script>
<?php } ?>