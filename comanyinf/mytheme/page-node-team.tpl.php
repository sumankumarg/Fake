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
<div class="logoc"><a href="<?php print base_path();?>"><img src="<?php print($path_to_theme); ?>/images/logo.gif" alt="logo"/></a></div>
<div class="punchwordsc"><img src="<?php print($path_to_theme); ?>/images/punchwords.jpg" alt="punchwords" width="425" height="152" border="0" /><a href="mailto:hi@clearsenses.com"><img src="<?php print($path_to_theme); ?>/images/email.jpg" alt="email" /></a></div>
</div>

<div class="contentc">

<div class="menuc">
<a href="<?php print base_path();?>"><img src="<?php print($path_to_theme); ?>/images/home_off.jpg" alt="home" />
<a href="<?php print base_path(); ?>node/team"><img src="<?php print($path_to_theme); ?>/images/team_on.jpg" alt="team" /></a>
<a href="<?php print base_path(); ?>node/contact"><img src="<?php print($path_to_theme); ?>/images/contact_us.jpg" alt="contact us" /></a></div>
<?php 
$sanjay_block = module_invoke('block', 'block', 'view', 4);
$sandeep_block = module_invoke('block', 'block', 'view', 5);
?>
<div class="cholderc">
  <div class="centerc">

<div class="holderc"><!--<img alt="team" src="<?php print($path_to_theme); ?>/images/team.gif"><br>-->

<?php print $sanjay_block['content']; ?>
<?php print $sandeep_block['content']; ?>
<!--<a href="http://www.linkedin.com/in/sanjaysuri"><img width="139" height="33" alt="linked in" src="<?php print($path_to_theme); ?>/images/sanjay_in.gif"></a><br>
<?php print $sandeep_block['content']; ?>
<a href="http://www.linkedin.com/in/sandeepss"><img width="149" height="33" alt="sandeep" src="<?php print($path_to_theme); ?>/images/sandeep_on.gif"></a><br>-->
          </div>
</div>
<div class="footerc"><?php print "All rights reserved."?></div>
</div>

  <?php print $closure ?>
</div>
  </body>
</html>
