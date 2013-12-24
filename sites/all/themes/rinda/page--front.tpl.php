<?php
drupal_add_js(drupal_get_path('theme', 'rinda') .'/js/jquery.backstretch.min.js', 'file');
drupal_add_css(drupal_get_path('theme', 'rinda') . '/css/slider.css', array('group' => CSS_DEFAULT, 'every_page' => FALSE));
$slider_folder = drupal_get_path('theme', 'rinda') . '/slider/';
?>

<div class="welcome-box welcome-black">
  <img src="<?php print $slider_folder; ?>logo_black.png" width="400">
  <a href="<?php print url("collection"); ?>" class="welcome-link">Enter Site</a>
</div>
<script type="text/javascript">
  jQuery(function($){
    $("body").backstretch([
      "<?php print $slider_folder; ?>sample-4.jpg", 
      "<?php print $slider_folder; ?>sample-2.jpg", 
      "<?php print $slider_folder; ?>sample-1.jpg", 
      "<?php print $slider_folder; ?>sample-3.jpg"],
      {
        fade: 750,
        duration: 4000
      });
    });
</script>