<?php
// $Id: page.tpl.php,v 1.18.2.1 2009/04/30 00:13:31 goba Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
		<?php print $head ?>
    <title><?php print $clearsense_title ?></title>
    <?php print $styles ?>
    <?php print $scripts ?>
    <!--[if lt IE 7]>
      <?php print phptemplate_get_ie_styles(); ?>
    <![endif]-->
  <style type="text/css">object,embed{visibility:hidden !important;}</style>
   </head>
  <body>

<!--clearsenses-->
<?php $path_to_theme = base_path().path_to_theme(); ?>
<div id="containerc">
<div id="mainc">
<div class="logoc"><img src="<?php print($path_to_theme); ?>/images/logo.gif" alt="logo"/></div>
<div class="punchwordsc"><img src="<?php print($path_to_theme); ?>/images/punchwords.jpg" alt="punchwords" width="425" height="152" border="0" /><a href="mailto:hi@clearsenses.com"><img src="<?php print($path_to_theme); ?>/images/email.jpg" alt="email" /></a></div>
</div>

          <div class="contentc">

<div class="menuc"><img src="<?php print($path_to_theme); ?>/images/home.jpg" alt="home" />
<a href="<?php print base_path(); ?>node/team"><img src="<?php print($path_to_theme); ?>/images/team.jpg" alt="team" /></a><a href="<?php print base_path(); ?>node/contact"><img src="<?php print($path_to_theme); ?>/images/contact_us.jpg" alt="contact us" /></a></div>
<?php 
$leadership_block = module_invoke('block', 'block', 'view', 1);
$commitment_block = module_invoke('block', 'block', 'view', 2);
$expertise_block = module_invoke('block', 'block', 'view', 3);

?>
 
<div class="cholderc">
<div class="centerc">
<div style="margin-left: 30px;" class="column1"><img width="93" height="21"  src="<?php print($path_to_theme); ?>/images/leadership.gif" alt="leadership">
    <br />
<?php print($leadership_block['content']); ?>

</div>
<div class="column1"><img alt="personal committment" src="<?php print($path_to_theme); ?>/images/pc.gif">
  <br/>
<?php print($commitment_block['content']); ?>
</div>
<div class="column1"><img width="157" height="21" alt="depth of expertise" src="<?php print($path_to_theme); ?>/images/depth.gif">
  <br />

<?php print($expertise_block['content']); ?>
</div>
</div>
<div class="footerc"><?php print "All rights reserved."?></div>

          </div>

  <?php print $closure ?>
</div>
  </body>
</html>
