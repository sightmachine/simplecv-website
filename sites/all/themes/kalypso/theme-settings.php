<?php

global $slide_number;
$slide_number = theme_get_setting('slides_number');

drupal_add_js(drupal_get_path('theme', 'kalypso') .'/js/theme_settings.js'); 
 
function kalypso_form_system_theme_settings_alter(&$form, &$form_state) {
  global $slide_number;

 // Default path for image
  $bg_path = theme_get_setting('bg_path');
  if (file_uri_scheme($bg_path) == 'public') {
    $bg_path = file_uri_target($bg_path);
  }
  
  // Default path for back-ground image
  $background_path = theme_get_setting('background_path');
  if (file_uri_scheme($background_path) == 'public') {
    $background_path = file_uri_target($background_path);
  }  
  
  $count = 1;
  while ($count <= $slide_number){
    ${'slide_path_' . $count} = theme_get_setting('slide_path_'.$count.'');
    if (file_uri_scheme(${'slide_path_' . $count}) == 'public') {
      ${'slide_path_' . $count} = file_uri_target(${'slide_path_' . $count});
    }  
  $count++;
  }

  // Container
  $form['options'] = array(
    '#type' => 'vertical_tabs',
    '#default_tab' => 'defaults',
    '#weight' => '-10',
    '#attached' => array(
      'css' => array(drupal_get_path('theme', 'kalypso') . '/css/theme-options.css'),
    ),
  );
 
  // General
  $form['options']['general'] = array(
    '#type' => 'fieldset',
    '#title' => 'General',
  );
  
    // Breadcrumbs
    $form['options']['general']['breadcrumbs'] = array(
      '#type' => 'checkbox',
      '#title' => 'Breadcrumbs',
      '#default_value' => theme_get_setting('breadcrumbs'),
    );
        
    // SEO
    $form['options']['general']['seo'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">SEO</h3>',
    );
    
      // SEO Title
      $form['options']['general']['seo']['seo_title'] = array(
        '#type' => 'textfield',
        '#title' => 'Title',
        '#default_value' => theme_get_setting('seo_title'),
      );
      
       // SEO Description
      $form['options']['general']['seo']['seo_description'] = array(
        '#type' => 'textarea',
        '#title' => 'Description',
        '#default_value' => theme_get_setting('seo_description'),
      );
      
       // SEO Keywords
      $form['options']['general']['seo']['seo_keywords'] = array(
        '#type' => 'textarea',
        '#title' => 'Keywords',
        '#default_value' => theme_get_setting('seo_keywords'),
      );
        
  // Header Options
  $form['options']['header'] = array(
    '#type' => 'fieldset',
    '#title' => t('Header'),
  );
  
    // Logo
    $form['options']['header']['branding'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">Branding</h3>',
    );
    
      // Logo Toggle
      $form['options']['header']['branding']['branding_type'] = array(
        '#type' => 'select',
        '#title' => 'Branding Type',
        '#default_value' => theme_get_setting('branding_type'),
        '#options' => array(
          'logo' => 'Logo',
          'text' => 'Text',
        ),
      );

      $form['options']['header']['branding']['bg_path'] = array(
        '#type' => 'textfield',
        '#title' => 'Path to logo',
        '#default_value' => $bg_path,
        '#disabled' => TRUE,
        '#states' => array(
          'visible' => array('#edit-branding-type' => array('value' => 'logo')),
        ), 
      );

      $form['options']['header']['branding']['bg_upload'] = array(
        '#type' => 'file',
        '#title' => 'Upload logo',
        '#description' => 'Upload a new logo image.',
        '#states' => array(
          'visible' => array('#edit-branding-type' => array('value' => 'logo')),
        ), 
      );
	  
	  //for back-ground image
	  $form['options']['header']['branding']['background_path'] = array(
        '#type' => 'textfield',
        '#title' => 'Path to Background image',
        '#default_value' => $background_path,
        '#disabled' => TRUE,
        '#states' => array(
          'visible' => array('#edit-branding-type' => array('value' => 'background')),
        ), 
      );
	  
	  
	 $form['options']['header']['branding']['background_upload'] = array(
        '#type' => 'file',
        '#title' => 'Upload Back-ground image',
        '#description' => 'Upload a Back-ground image.',
	
        '#states' => array(
          'visible' => array('#edit-branding-type' => array('value' => 'background')),
        ), 
      );
	
  // Front Page
  $form['options']['front_page'] = array(
    '#type' => 'fieldset',
    '#title' => 'Front Page',
  );
  
    // highlight
    $form['options']['front_page']['highlight'] = array(
      '#type' => 'fieldset', 
      '#title' => '<div class="plus"></div><h3 class="options_heading">Highlight</h3>',
      
    );
    
      // Enable highlight 
      $form['options']['front_page']['highlight']['enable_highlight'] = array(
        '#type' => 'checkbox',
        '#title' => 'Enable Highlight',
        '#default_value' => theme_get_setting('enable_highlight'),
      );
      
      // highlight Text
      $form['options']['front_page']['highlight']['highlight_text'] = array(
      	'#type' => 'textarea',
      	'#title' => 'Highlight Text',
      	'#default_value' => theme_get_setting('highlight_text'),
      	'#states' => array (
          'invisible' => array(
            'input[name="enable_highlight"]' => array('checked' => FALSE)
          )
        )
      );
  
    // Slider
    $form['options']['front_page']['slider'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">Image Slider</h3>',
      
    );
    
      // Enable Slider
      $form['options']['front_page']['slider']['enable_slider'] = array(
        '#type' => 'checkbox',
        '#title' => 'Enable Image Slider',
        '#default_value' => theme_get_setting('enable_slider'),
      );
      
      // Slider Type
      $form['options']['front_page']['slider']['slider_type'] = array(
        '#type' => 'select',
        '#title' => 'Slider Type',
        '#default_value' => theme_get_setting('slider_type'),
        '#options' => array(
          'default' => 'Elasic Image (default)',
          'nivo' => 'Nivo Slider',
          'bootstrap' => 'Twitter Bootstrap',
        ),
        '#states' => array (
          'invisible' => array(
            'input[name="enable_slider"]' => array('checked' => FALSE)
          )
        )
      );
      
      // Enable Slider
      $form['options']['front_page']['slider']['slides_number'] = array(
        '#type' => 'select',
        '#title' => 'Select the number of slides you wish to use:',
        '#default_value' => theme_get_setting('slides_number'),
        '#options' => array(
          '1' => '1',
          '2' => '2',
          '3' => '3',
          '4' => '4',
          '5' => '5',
          '6' => '6',
          '7' => '7',
          '8' => '8',
          '9' => '9',
          '10' => '10',
        ),
        '#states' => array (
          'invisible' => array(
            'input[name="enable_slider"]' => array('checked' => FALSE)
          )
        )
      );

      $i = 1;
      while ($i <= $slide_number) {
      
        $form['options']['front_page']['slider']['slide_'.$i.''] = array(
          '#type' => 'fieldset',
          '#title' => '<h3 class="options_heading">Slide '.$i.'</h3>',
          '#states' => array (
          'invisible' => array(
            'input[name="enable_slider"]' => array('checked' => FALSE)
          )
        )
        );

          $form['options']['front_page']['slider']['slide_'.$i.'']['slide_path_'.$i.''] = array(
            '#type' => 'textfield',
            '#title' => 'Path to Slide '.$i.'',
            '#default_value' => ${'slide_path_' . $i},
            '#disabled' => TRUE,
          );
	      
	      $form['options']['front_page']['slider']['slide_'.$i.'']['slide_upload_'.$i.''] = array(
            '#type' => 'file',
            '#title' => 'Upload image for Slide '.$i.'',
            '#description' => 'Upload a slide image.',
          );
          
          $form['options']['front_page']['slider']['slide_'.$i.'']['slide_url_'.$i.''] = array(
            '#type' => 'textfield',
            '#title' => 'URL for Slide '.$i.'',
            '#default_value' => theme_get_setting('slide_url_'.$i.''),
          );
          
          $form['options']['front_page']['slider']['slide_'.$i.'']['slide_caption_'.$i.''] = array(
            '#type' => 'textfield',
            '#title' => 'Caption for Slide '.$i.'',
            '#default_value' => theme_get_setting('slide_caption_'.$i.''),
          );

	    $i++;    
      }
      
    // Panels
    $form['options']['front_page']['panels'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">Panels</h3>',
      
    );
    
      // Enable Panels
      $form['options']['front_page']['panels']['enable_panels'] = array(
        '#type' => 'checkbox',
        '#title' => 'Enable Panels',
        '#default_value' => theme_get_setting('enable_panels'),
      );
      
      //Panel Title
      $form['options']['front_page']['panels']['panels_title'] =array(
        '#type' => 'textfield',
        '#title' => 'Panels Title',
        '#default_value' => theme_get_setting('panels_title'),
        '#states' => array (
          'invisible' => array(
            'input[name="enable_panels"]' => array('checked' => FALSE)
          )
        )
      );
      
  // Panels
    $form['options']['front_page']['portfolio'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">Portfolio</h3>',
      
    );
    
      // Enable Panels
      $form['options']['front_page']['portfolio']['enable_portfolio'] = array(
        '#type' => 'checkbox',
        '#title' => 'Enable Portfolio',
        '#default_value' => theme_get_setting('enable_portfolio'),
      );
      
      //Panel Title
      $form['options']['front_page']['portfolio']['portfolio_title'] =array(
        '#type' => 'textfield',
        '#title' => 'Portfolio Title',
        '#default_value' => theme_get_setting('portfolio_title'),
        '#states' => array (
          'invisible' => array(
            'input[name="enable_portfolio"]' => array('checked' => FALSE)
          )
        )
      ); 
      
    // Contact
    $form['options']['front_page']['contact'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">contact</h3>',
      
    );
    
      // Enable Contact
      $form['options']['front_page']['contact']['enable_contact'] = array(
        '#type' => 'checkbox',
        '#title' => 'Enable Contact',
        '#default_value' => theme_get_setting('enable_contact'),
      );
      
      //Contact Title
      $form['options']['front_page']['contact']['contact_title'] =array(
        '#type' => 'textfield',
        '#title' => 'Contact Title',
        '#default_value' => theme_get_setting('contact_title'),
        '#states' => array (
          'invisible' => array(
            'input[name="enable_contact"]' => array('checked' => FALSE)
          )
        )
      ); 
      
      // Enable Map
      $form['options']['front_page']['contact']['enable_map'] = array(
        '#type' => 'checkbox',
        '#title' => 'Enable Google Map',
        '#default_value' => theme_get_setting('enable_map'),
        '#states' => array (
          'invisible' => array(
            'input[name="enable_contact"]' => array('checked' => FALSE)
          )
        )
      );
      
      //Map Address
      $form['options']['front_page']['contact']['map_address'] =array(
        '#type' => 'textarea',
        '#title' => 'Google Map Embed Code',
        '#default_value' => theme_get_setting('map_address'),
        '#states' => array (
          'invisible' => array(
            'input[name="enable_map"]' => array('checked' => FALSE)
          )
        )
      ); 
  
  // Panels
    $form['options']['front_page']['clients'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">Clients</h3>',
      
    );
    
      // Enable clients
      $form['options']['front_page']['clients']['enable_clients'] = array(
        '#type' => 'checkbox',
        '#title' => 'Enable Clients',
        '#default_value' => theme_get_setting('enable_clients'),
      );
      
      //Panel Title
      $form['options']['front_page']['clients']['clients_title'] =array(
        '#type' => 'textfield',
        '#title' => 'Clients Title',
        '#default_value' => theme_get_setting('clients_title'),
        '#states' => array (
          'invisible' => array(
            'input[name="enable_clients"]' => array('checked' => FALSE)
          )
        )
      );  
        
  // Layout
  $form['options']['layout'] = array(
    '#type' => 'fieldset',
    '#title' => 'Layout',
  );
    // Page Layout
    $form['options']['layout']['page_layout'] = array(
      '#type' => 'radios',
      '#title' => 'Select a page layout:',
      '#default_value' => theme_get_setting('page_layout'),
      '#options' => array(
        'sidebar_right' => 'Sidebar Right',
        'full_width' => 'Full Width',
      ),
    );
    
    // Blog Layout
    $form['options']['layout']['blog_layout'] = array(
      '#type' => 'radios',
      '#title' => 'Select a blog layout:',
      '#default_value' => theme_get_setting('blog_layout'),
      '#options' => array(
        'sidebar_right' => 'Sidebar Right',
        'full_width' => 'Full Width',
      ),
    );
   
  // Design
  $form['options']['design'] = array(
    '#type' => 'fieldset',
    '#title' => 'Design',
  );
  
   // Colors
    $form['options']['design']['colors'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">Colors</h3>',
    );
  
      // Color Scheme
      $form['options']['design']['colors']['color_scheme'] = array(
        '#type' => 'select',
        '#title' => 'Color Scheme',
        '#default_value' => theme_get_setting('color_scheme'),
        '#options' => array(
          'black' => 'Black',
          'light-grey' => 'Light Grey',
          'dark-grey' => 'Dark Grey',
          'light-blue' => 'Light Blue (default)',
          'dark-blue' => 'Dark Blue',
          'green' => 'Green',
          'yellow' => 'Yellow',
          'purple' => 'Purple',
          'orange' => 'Orange',
          'red' => 'Red',
        ),
      );
      
    // Background
    $form['options']['design']['background'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">Background</h3>',
    );
    
      // Background
    $form['options']['design']['background']['background_select'] = array(
      '#type' => 'radios',
      '#title' => 'Select a background image:',
      '#default_value' => theme_get_setting('background_select'),
      '#options' => array(
        'gplaypattern' => 'item',
        'cream_dust' => 'item',
        'grey' => 'item',
        'noisy_grid' => 'item',
      ),
    );  
      
    // CSS
    $form['options']['design']['css'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">CSS</h3>',
    );
      
      // User CSS
      $form['options']['design']['css']['user_css'] = array(
        '#type' => 'textarea',
        '#title' => 'Add your own CSS',
        '#default_value' => theme_get_setting('user_css'),
      ); 
  
  // Typography
  $form['options']['typography'] = array(
    '#type' => 'fieldset',
    '#title' => 'Typography',
  );
  
    // Font
    $form['options']['typography']['font'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">Font</h3>',
    );
    
      // Font Family
      $form['options']['typography']['font']['font_family'] = array(
        '#type' => 'select',
        '#title' => 'Select a font family',
        '#default_value' => theme_get_setting('font_family'),
        '#options' => array(
          'Arial, Helvetica, sans-serif' => 'Arial, Helvetica, sans-serif',
          'Georgia, serif' => 'Georgia, serif',
          '"Helvetica Neue", Helvetica, Arial, sans-serif' => '"Helvetica Neue", Helvetica, Arial, sans-serif',
          'Open Sans, serif' => '"Open Sans", serif (default)',
          '"Times New Roman", Times, serif' => '"Times New Roman", Times, serif',
          'Verdana, Arial, Helvetica, sans-serif' => 'Verdana, Arial, Helvetica, sans-serif',
        ),
      );
    
    //Headings
    $form['options']['typography']['headings'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">Headings</h3>',
    );
    
      //H1
      $form['options']['typography']['headings']['h1'] =array(
        '#type' => 'textfield',
        '#title' => 'h1 Size',
        '#default_value' => theme_get_setting('h1'),
      );
      
      //H2
      $form['options']['typography']['headings']['h2'] =array(
        '#type' => 'textfield',
        '#title' => 'h2 Size',
        '#default_value' => theme_get_setting('h2'),
      );
      
      //H3
      $form['options']['typography']['headings']['h3'] =array(
        '#type' => 'textfield',
        '#title' => 'h3 Size',
        '#default_value' => theme_get_setting('h3'),
      );
      
      //H4
      $form['options']['typography']['headings']['h4'] =array(
        '#type' => 'textfield',
        '#title' => 'h4 Size',
        '#default_value' => theme_get_setting('h4'),
      );
      
      //H5
      $form['options']['typography']['headings']['h5'] =array(
        '#type' => 'textfield',
        '#title' => 'h5 Size',
        '#default_value' => theme_get_setting('h5'),
      );
      
      //H6
      $form['options']['typography']['headings']['h6'] =array(
        '#type' => 'textfield',
        '#title' => 'h6 Size',
        '#default_value' => theme_get_setting('h6'),
      );
      
  // Footer
  $form['options']['footer'] = array(
    '#type' => 'fieldset',
    '#title' => 'Footer',
  );
      
    // Enable Primary Footer
    $form['options']['footer']['enable_primary_footer'] = array(
      '#type' => 'checkbox',
      '#title' => 'Enable Primary Footer',
      '#default_value' => theme_get_setting('enable_primary_footer'),
    );
      
    // Social Icons
    $form['options']['footer']['social'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">Social Icons</h3>',
    );
    
      // Twitter Icon
      $form['options']['footer']['social']['twitter_icon'] = array(
        '#type' => 'checkbox',
        '#title' => 'Twitter Icon',
        '#default_value' => theme_get_setting('twitter_icon'),
      );
      
      // Twitter Icon URL
      $form['options']['footer']['social']['twitter_url'] = array(
        '#type' => 'textfield',
        '#title' => 'Twitter URL',
        '#default_value' => theme_get_setting('twitter_url'),
        '#size' => 10,
        '#maxlenght' => 10,
        '#states' => array (
          'invisible' => array(
            'input[name="twitter_icon"]' => array('checked' => FALSE)
          )
        )
      );
      
      // Facebook Icon
      $form['options']['footer']['social']['facebook_icon'] = array(
        '#type' => 'checkbox',
        '#title' => 'Facebook Icon',
        '#default_value' => theme_get_setting('facebook_icon'),
      );
      
      // Facebook Icon URL
      $form['options']['footer']['social']['facebook_url'] = array(
        '#type' => 'textfield',
        '#title' => 'Facebook URL',
        '#default_value' => theme_get_setting('facebook_url'),
        '#states' => array (
          'invisible' => array(
            'input[name="facebook_icon"]' => array('checked' => FALSE)
          )
        )
      );
      
      // Flickr Icon
      $form['options']['footer']['social']['flickr_icon'] = array(
        '#type' => 'checkbox',
        '#title' => 'Flickr Icon',
        '#default_value' => theme_get_setting('flickr_icon'),
      );
      
      // Flickr Icon URL
      $form['options']['footer']['social']['flickr_url'] = array(
        '#type' => 'textfield',
        '#title' => 'Flickr URL',
        '#default_value' => theme_get_setting('flickr_url'),
        '#states' => array (
          'invisible' => array(
            'input[name="flickr_icon"]' => array('checked' => FALSE)
          )
        )
      );
      
      // Google Plus Icon
      $form['options']['footer']['social']['google_plus_icon'] = array(
        '#type' => 'checkbox',
        '#title' => 'Google+ Icon',
        '#default_value' => theme_get_setting('google_plus_icon'),
      );
      
      // Google Plus URL
      $form['options']['footer']['social']['google_plus_url'] = array(
        '#type' => 'textfield',
        '#title' => 'Google+ URL',
        '#default_value' => theme_get_setting('google_plus_url'),
        '#states' => array (
          'invisible' => array(
            'input[name="google_plus_icon"]' => array('checked' => FALSE)
          )
        )
      );
      
       // Pinterest Icon
      $form['options']['footer']['social']['pinterest_icon'] = array(
        '#type' => 'checkbox',
        '#title' => 'Pinterest Icon',
        '#default_value' => theme_get_setting('pinterest_icon'),
      );
      
      // Pinterest URL
      $form['options']['footer']['social']['pinterest_url'] = array(
        '#type' => 'textfield',
        '#title' => 'Pinterest URL',
        '#default_value' => theme_get_setting('pinterest_url'),
        '#states' => array (
          'invisible' => array(
            'input[name="pinterest_icon"]' => array('checked' => FALSE)
          )
        )
      );
      
       // LinkedIn Icon
      $form['options']['footer']['social']['linkedin_icon'] = array(
        '#type' => 'checkbox',
        '#title' => 'LinkedIn Icon',
        '#default_value' => theme_get_setting('linkedin_icon'),
      );
      
      // linkedin URL
      $form['options']['footer']['social']['linkedin_url'] = array(
        '#type' => 'textfield',
        '#title' => 'LinkedIn URL',
        '#default_value' => theme_get_setting('linkedin_url'),
        '#states' => array (
          'invisible' => array(
            'input[name="linkedin_icon"]' => array('checked' => FALSE)
          )
        )
      );

      // Youtube Icon
      $form['options']['footer']['social']['youtube_icon'] = array(
        '#type' => 'checkbox',
        '#title' => 'Youtube Icon',
        '#default_value' => theme_get_setting('youtube_icon'),
      );
      
      // Youtube URL
      $form['options']['footer']['social']['youtube_url'] = array(
        '#type' => 'textfield',
        '#title' => 'Youtube URL',
        '#default_value' => theme_get_setting('youtube_url'),
        '#states' => array (
          'invisible' => array(
            'input[name="youtube_icon"]' => array('checked' => FALSE)
          )
        )
      );

      // RSS Icon
      $form['options']['footer']['social']['rss_icon'] = array(
        '#type' => 'checkbox',
        '#title' => 'RSS Icon',
        '#default_value' => theme_get_setting('rss_icon'),
      );
      
      // Twitter URL
      $form['options']['footer']['social']['rss_url'] = array(
        '#type' => 'textfield',
        '#title' => 'RSS URL',
        '#default_value' => theme_get_setting('rss_url'),
        '#states' => array (
          'invisible' => array(
            'input[name="rss_icon"]' => array('checked' => FALSE)
          )
        )
      );

    // Secondary Footer
    $form['options']['footer']['secondary_footer'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">Secondary Footer</h3>',
    ); 
    
      // Enable Secondary Footer
      $form['options']['footer']['secondary_footer']['enable_secondary_footer'] = array(
        '#type' => 'checkbox',
        '#title' => 'Enable Secondary Footer',
        '#default_value' => theme_get_setting('enable_secondary_footer'),
      );
      
      // Secondary Footer Left
      $form['options']['footer']['secondary_footer']['secondary_footer_text'] = array(
        '#type' => 'textfield',
        '#title' => 'Secondary Footer Text',
        '#default_value' => theme_get_setting('secondary_footer_text'),
        '#states' => array (
          'invisible' => array(
            'input[name="enable_secondary_footer"]' => array('checked' => FALSE)
          )
        )
      );
        
  // Submit Button
  $form['#submit'][] = 'kalypso_settings_submit';
  $form['#submit'][] = 'kalypso_background_settings_submit';
  $form['#submit'][] = 'kalypso_slide_settings_submit';
  
}

function kalypso_settings_submit($form, &$form_state) {
  // Get the previous value
  $previous = 'public://' . $form['options']['header']['branding']['bg_path']['#default_value'] ;
  
  $file = file_save_upload('bg_upload');
  if ($file) {
    $parts = pathinfo($file->filename);
    $destination = 'public://' . $parts['basename'];
    $file->status = FILE_STATUS_PERMANENT;
    
    if(file_copy($file, $destination, FILE_EXISTS_REPLACE)) {
      $_POST['bg_path'] = $form_state['values']['bg_path'] = $destination;
      if ($destination != $previous) {
        return;
      }
    }
  } else {
    // Avoid error when the form is submitted without specifying a new image
    $_POST['bg_path'] = $form_state['values']['bg_path'] = $previous;
  }
  
}

// for background image//ntf
function kalypso_background_settings_submit($form, &$form_state) {

  // Get the previous value
  $previous = 'public://' . $form['options']['header']['branding']['background_path']['#default_value'] ;
  
  $file = file_save_upload('background_upload');
  if ($file) {
    $parts = pathinfo($file->filename);
    $destination = 'public://' . $parts['basename'];
    $file->status = FILE_STATUS_PERMANENT;
    
    if(file_copy($file, $destination, FILE_EXISTS_REPLACE)) {
      $_POST['background_path'] = $form_state['values']['background_path'] = $destination;
      if ($destination != $previous) {
        return;
      }
    }
  } else {
    // Avoid error when the form is submitted without specifying a new image
    $_POST['background_path'] = $form_state['values']['background_path'] = $previous;
  }
  
}

// for background image//ntf
function kalypso_slide_settings_submit($form, &$form_state) {
  global $slide_number;
  $counter = '1';
  
  while ($counter <= $slide_number) {
  // Get the previous value
  $previous = 'public://' . $form['options']['front_page']['slider']['slide_'.$counter.'']['slide_path_'.$counter.'']['#default_value'] ;
  
  $file = file_save_upload('slide_upload_'.$counter.'');
  if ($file) {
    $parts = pathinfo($file->filename);
    $destination = 'public://' . $parts['basename'];
    $file->status = FILE_STATUS_PERMANENT;
    
    if(file_copy($file, $destination, FILE_EXISTS_REPLACE)) {
      $_POST['slide_path_'.$counter.''] = $form_state['values']['slide_path_'.$counter.''] = $destination;
      if ($destination != $previous) {
        return;
      }
    }
  } else {
    // Avoid error when the form is submitted without specifying a new image
    $_POST['slide_path_'.$counter.''] = $form_state['values']['slide_path_'.$counter.''] = $previous;
  }
  
  $counter++;
  }
}

?>