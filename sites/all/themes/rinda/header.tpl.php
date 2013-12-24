<?php global $base_url; ?>
<div id="header">
  <h1 class="logo sec-left">
      <a href="#"><img src="<?php print $base_url . '/' . drupal_get_path('theme', 'rinda'); ?>/img/img_logo.png" alt="RINDA Salmun"></a>
  </h1>
  <div class="top-menu sec-right">
    <ul>
      <li><a href="<?php print url('about');?>" class="<?php print (arg(0) == "node" && arg(1) == "1") ? "current" : ""; ?>">About</a></li>
      <li><a href="<?php print url('collection');?>" class="<?php print (arg(0) == "collection") ? "current" : ""; ?>">collection</a></li>
      <li><a href="<?php print url('press');?>" class="<?php print (arg(0) == "press") ? "current" : ""; ?>">Press</a></li>
      <li><a href="<?php print url('contact');?>" class="<?php print (arg(0) == "node" && arg(1) == "2") ? "current" : ""; ?>">Contact</a></li>
      <li style="display:none"><a href="#"><span><img src="<?php print drupal_get_path('theme', 'rinda'); ?>/img/img_chart.png" alt="chart" /></span> 10</a></li>
      <li class="search">
        <input type="text" value="" name="s" class="search-text">
        <span><input type="submit" value="Cari" name="submit" class="search-submit"></span>
      </li>
    </ul>
  </div>
  <div class="clear"></div>
</div>