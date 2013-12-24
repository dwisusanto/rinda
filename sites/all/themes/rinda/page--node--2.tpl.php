<?php include_once 'header.tpl.php' ?>
<div id="middle">
	<div class="mid-left sec-left">
    <div class="mid-leftsec">
      <h2><?php print render($title); ?></h2>
      <p class="about-text">
      <?php print render($page['content']); ?>
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