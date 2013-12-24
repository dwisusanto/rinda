<?php 
drupal_add_js(drupal_get_path('theme', 'rinda') .'/js/jquery.flexslider.js', 'file');
drupal_add_js(drupal_get_path('theme', 'rinda') .'/js/jquery.carouFredSel-5.6.1.js', 'file');
drupal_add_js(drupal_get_path('theme', 'rinda') .'/js/custom.js', 'file');
drupal_add_css(drupal_get_path('theme', 'rinda') . '/css/flexslider.css', array('group' => CSS_DEFAULT, 'every_page' => FALSE));
$slider_folder = drupal_get_path('theme', 'rinda') . '/images/';
?>
<?php include_once 'header.tpl.php' ?>
<div id="middle">
	<div class="mid-left sec-left">
    <div class="mid-leftsec">
      <h2>collection</h2>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br /><br />
        Contact @rindasalmun.com
        </p>
    </div>
    </div>
    <div class="mid-right sec-left">
    	<div class="mid-rightsec">
<?php
$cat = taxonomy_get_tree(2);
?>        
        <ul>
        <?php foreach ($cat as $data) { 
          $class = (arg(1) == $data->tid) ? "current" : "";
        ?>
          <li><a href="<?php print url('collection/'.$data->tid); ?>" class="<?php print $class; ?>"><?php print $data->name; ?></a></li>
        <?php } ?>
        </ul>
            
        <div class="clear"></div>
<?php
$tid = arg(1);
$tid = (!empty($tid)) ? $tid : '1';
$view = views_get_view('collection');
$view->set_display('page');
$filter = $view->get_item('page', 'filter', 'field_collection_tid');
$filter['value'] = $tid;
$view->set_item('page', 'filter', 'field_collection_tid', $filter);
$view->pre_execute();
$view->execute();
//print_r($view->result);

?> 
        <div class="list-carousel responsive">
          <ul id="feature-gall">
<?php foreach ($view->result as $data) { 
        $image = file_create_url($data->field_field_product_image[0]['raw']['uri']);
        $link = url('collection_detail/'.$data->product_id);
?>
            <li>
              <div class="box-img">
                <a href="<?php print $link; ?>"><img class="" alt="" src="<?php print $image; ?>" width="190"></a>
              </div>
              <div class="box-text">
                <a href="<?php print $link; ?>">
                  <h4><?php print $data->commerce_product_title;?></h4>
                  <span><?php print $data->field_field_product_category[0]['rendered']['#markup'];?></span>
                  <span><b><?php print $data->field_commerce_price[0]['rendered']['#markup'];?></b></span>
                </a>
              </div>                       
            </li>
<?php } ?>
          </ul>
          <div class="clear"></div>
          <a id="prev1" class="prev" href="#">pr</a>
          <a id="next1" class="next" href="#">nx</a>
        </div>
      </div>
    </div>
    <div class="clear"></div>
    
</div>
<?php include_once 'footer.tpl.php' ?>