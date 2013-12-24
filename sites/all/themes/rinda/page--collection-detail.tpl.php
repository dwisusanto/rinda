<?php 
drupal_add_js(drupal_get_path('theme', 'rinda') .'/js/jquery.flexslider.js', 'file');
drupal_add_js(drupal_get_path('theme', 'rinda') .'/js/jquery.carouFredSel-5.6.1.js', 'file');
drupal_add_js(drupal_get_path('theme', 'rinda') .'/js/custom.js', 'file');
drupal_add_css(drupal_get_path('theme', 'rinda') . '/css/flexslider.css', array('group' => CSS_DEFAULT, 'every_page' => FALSE));
$slider_folder = drupal_get_path('theme', 'rinda') . '/images/';
?>
<?php include_once 'header.tpl.php' ?>
<?php
$prod = commerce_product_load(arg(1));
if ($prod) {
  drupal_set_title($prod->title);
  $image = field_get_items('commerce_product', $prod, 'field_detail_image');
  $image = file_create_url($image[0]['uri']);
  $desc = field_get_items('commerce_product', $prod, 'field_description');
?>
<div id="middle">
	<div class="flexslider">
    <ul class="slides">
      <li>
          <img class="thumbnails" src="<?php print $image; ?>" alt=""  />
          <div class="slide-content-dua">
            <div class="slide-content-duacon">
                  <h2><?php print $prod->title; ?></h2>                   
                  <p class="slider-text">
                  <?php print $desc[0]['safe_value']; ?>
                  </p>
                  <ul>
                      <li class="efbe"><a href="#">fb</a></li>
                      <li class="tewe"><a href="#">tw</a></li>
                  </ul>
              </div>
          </div>
      </li>
    </ul>
  </div>    
</div>
<?php } ?>
<?php include_once 'footer.tpl.php' ?>