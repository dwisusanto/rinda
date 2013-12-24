<?php include_once 'header.tpl.php' ?>
<div id="middle">
	<div class="mid-left sec-left">
    <div class="mid-leftsec">
      <h2>the <span>designer</span></h2>
      <p class="about-text">
      <?php print render($page['content']); ?>
      <br /><br /><b>Follow Rinda Salmun On,</b></p>
      <ul>
          <li class="efbe"><a href="#">fb</a></li>
          <li class="fbtext">Facebook</li>
          <li class="tewe"><a href="#">fb</a></li>
          <li class="fbtext">Twitter</li>
      </ul>
    </div>
  </div>
  <div class="mid-right sec-left">&nbsp;
    <?php if ($messages): ?>
      <div id="console" class="clearfix"><?php print $messages; ?></div>
    <?php endif; ?>
  </div>
  <div class="clear"></div>
    
</div>
<?php include_once 'footer.tpl.php' ?>