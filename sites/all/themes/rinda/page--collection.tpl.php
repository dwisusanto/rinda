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
        	<ul>
                <li><a href="#">Primrose Hill 2014</a></li>
                <li><a href="#">Neurosis</a></li>
                <li><a href="#">Neo Nirvana</a></li>
            </ul>
            
            <div class="clear"></div>
            
            <div class="list-carousel responsive">
                <ul id="feature-gall">
                    <li>
                       <div class="box-img">
                        <a href="#"><img class="" alt="" src="<?php print $slider_folder; ?>gallery_01.jpg" width="190"></a>
                        </div>
                        <div class="box-text">
                            <a href="#">
                                <h4>Lorem ipsum dolor </h4>
                                <span>the dress</span>
                                <span><b>$40</b></span>
                            </a>
                      	</div>                       
                    </li>
                    <li>
                        <div class="box-img">
                        <a href="#"><img class="" alt="" src="<?php print $slider_folder; ?>gallery_02.jpg" width="190"></a>
                        </div>
                        <div class="box-text">
                            <a href="#">
                                <h4>Lorem ipsum dolor </h4>
                                <span>the dress</span>
                                <span><b>$40</b></span>
                            </a>
                      	</div>            
                    </li>
                    <li>
                       <div class="box-img">
                        <a href="#"><img class="" alt="" src="<?php print $slider_folder; ?>gallery_03.jpg" width="190"></a>
                        </div>
                        <div class="box-text">
                            <a href="#">
                                <h4>Lorem ipsum dolor </h4>
                                <span>the dress</span>
                                <span><b>$40</b></span>
                            </a>
                      	</div>           
                    </li>
                    <li>
                        <div class="box-img">
                        <a href="#"><img class="" alt="" src="<?php print $slider_folder; ?>gallery_03.jpg" width="190"></a>
                        </div>
                        <div class="box-text">
                            <a href="#">
                                <h4>Lorem ipsum dolor </h4>
                                <span>the dress</span>
                                <span><b>$40</b></span>
                            </a>
                      	</div>           
                    </li>
                    <li>
                        <div class="box-img">
                        <a href="#"><img class="" alt="" src="<?php print $slider_folder; ?>gallery_02.jpg" width="190"></a>
                        </div>
                        <div class="box-text">
                            <a href="#">
                                <h4>Lorem ipsum dolor </h4>
                                <span>the dress</span>
                                <span><b>$40</b></span>
                            </a>
                      	</div>           
                    </li>
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