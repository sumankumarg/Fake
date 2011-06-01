<?php
// $Id: page.tpl.php,v 1.18.2.1 2009/04/30 00:13:31 goba Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>

<link type="text/css" href="css/themename/jquery-ui-1.8.11.custom.css" rel="Stylesheet" />	
<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.11.custom.min.js"></script>

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
<a href="<?php print base_path();?>"><img src="<?php print($path_to_theme); ?>/images/home_off.jpg" alt="home" /></a>
<a href="<?php print base_path(); ?>node/team"><img src="<?php print($path_to_theme); ?>/images/team.jpg" alt="team" /></a>
<a href="<?php print base_path(); ?>node/contact"><img src="<?php print($path_to_theme); ?>/images/contact_on.jpg" alt="contact us" /></a></div>
<div class="cholderc">
<div class="centerc">
<div class="holderc">
<?php 
$contact_us = module_invoke('block', 'block', 'view', 6);
print($contact_us['content']); ?>
<div>
<iframe width="425" scrolling="no" height="350" frameborder="0" src="http://maps.google.com/maps/ms?ie=UTF8&amp;hl=en&amp;msa=0&amp;ll=28.603249,77.354414&amp;spn=0.004973,0.009645&amp;msid=106443548140913988099.000473b4f8eec0734a6f7&amp;output=embed" marginwidth="0" marginheight="0"></iframe><br>
<small><?php print "View" ; ?> <a style="color: rgb(0, 0, 255); text-align: left;" href="http://maps.google.com/maps/ms?ie=UTF8&amp;hl=en&amp;msa=0&amp;ll=28.603249,77.354414&amp;spn=0.004973,0.009645&amp;msid=106443548140913988099.000473b4f8eec0734a6f7&amp;source=embed"><?php print "clearsenses office"; ?></a> <?php print "in a larger map" ?></small>
</div>
</div>
</div>
<div class="footerc"><?php print "All rights reserved."?></div>
</div>
</div>
</div>

<?php print $closure ?>
</div>
</body>
</html>

