<?php 
drupal_add_js(drupal_get_path('theme', 'rinda') .'/js/jquery.flexslider.js', 'file');
drupal_add_js(drupal_get_path('theme', 'rinda') .'/js/jquery.carouFredSel-5.6.1.js', 'file');
drupal_add_js(drupal_get_path('theme', 'rinda') .'/js/custom.js', 'file');
drupal_add_css(drupal_get_path('theme', 'rinda') . '/css/flexslider.css', array('group' => CSS_DEFAULT, 'every_page' => FALSE));
$slider_folder = drupal_get_path('theme', 'rinda') . '/images/';
?>
<?php include_once 'header.tpl.php' ?>
<div id="middle">
	<div class="flexslider">
        <ul class="slides">
            <li>
                <img class="thumbnails" src="<?php print $slider_folder; ?>slider_01x.jpg" alt=""  />
                <div class="slide-content-dua">
                	<div class="slide-content-duacon">
                        <h2>Primrose <span>Hill <span>2014</span></span></h2>                   
                        <p class="slider-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                        <ul>
                            <li class="efbe"><a href="#">fb</a></li>
                            <li class="tewe"><a href="#">tw</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <img class="thumbnails"  src="<?php print $slider_folder; ?>slider_01x.jpg" alt=""  />
                <div class="slide-content-dua">
                	<div class="slide-content-duacon">
                        <h2>Primrose 2<span>Hill <span>2014</span></span></h2>                   
                        <p class="slider-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                        <ul>
                            <li class="efbe"><a href="#">fb</a></li>
                            <li class="tewe"><a href="#">tw</a></li>
                        </ul>
                	</div>
                </div>
            </li>
            <li>
                <img class="thumbnails"  src="<?php print $slider_folder; ?>slider_01x.jpg" alt="" />
                <div class="slide-content-dua">
                	<div class="slide-content-duacon">
                        <h2>Primrose 3<span>Hill <span>2014</span></span></h2>
                        <p class="slider-text">
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
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
<?php include_once 'footer.tpl.php' ?>