<?php
// $Id: page.tpl.php,v 1.18.2.1 2009/04/30 00:13:31 goba Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
		<?php print $head ?>
    <title><?php print $head_title."This is head title" ?></title>
    <?php print $styles ?>
    <?php print $scripts ?>
    <!--[if lt IE 7]>
      <?php print phptemplate_get_ie_styles(); ?>
    <![endif]-->
  </head>
  <body<?php print phptemplate_body_class($left, $right); ?>>

<!-- Layout -->
 <div id="header-region" class="clear-block"><?php print $header; ?></div>

<?php $path_to_theme = base_path().path_to_theme(); ?>

<!--    <div id="wrapper">-->
    <div id="containerc">
<div id="mainc">
<div class="logoc"><a href="<?php print base_path();?>"><img src="<?php print($path_to_theme); ?>/images/logo.gif" alt="logo"/></a></div>
<div class="punchwordsc"><img src="<?php print($path_to_theme); ?>/images/punchwords.jpg" alt="punchwords" width="425" height="152" border="0" /><a href="mailto:hi@clearsenses.com"><img src="<?php print($path_to_theme); ?>/images/email.jpg" alt="email" /></a></div>
</div>

      <div id="header">
        
        <?php if (isset($primary_links)) : ?>
          <?php print theme('links', $primary_links, array('class' => 'links primary-links')) ?>
        <?php endif; ?>
        <?php if (isset($secondary_links)) : ?>
          <?php print theme('links', $secondary_links, array('class' => 'links secondary-links')) ?>
        <?php endif; ?>

      </div> <!-- /header -->
<br><br><br><br><br><br><br><br><br><br><br><br>
      <?php if ($left): ?>
        <div id="sidebar-left" class="sidebar">
          <?php if ($search_box): ?><div class="block block-theme"><?php print $search_box ?></div><?php endif; ?>
          <?php print $left ?>
        </div>
      <?php endif; ?> 
<div class="contentc">
<div class="cholderc">
      <div id="centerc"><div class="holderc"><div id="squeeze"><div class="right-corner"><div class="left-corner">
          <?php print $breadcrumb; ?>
          <?php if ($mission): print '<div id="mission">'. $mission .'</div>'; endif; ?>
          <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
          <?php if ($title): print '<h2'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h2>'; endif; ?>
          <?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
          <?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
          <?php if ($show_messages && $messages): print $messages; endif; ?>
          <?php print $help; ?>        
          <?php print $content ?>
          </div></div></div>
          <?php print $feed_icons ?>
          <div class="footerc"><?php print "All rights reserved"; ?></div>
      </div></div></div></div> <!-- /.left-corner, /.right-corner, /#squeeze, /#center -->

      <?php if ($right): ?>
        <div id="sidebar-right" class="sidebar">
          <?php if (!$left && $search_box): ?><div class="block block-theme"><?php print $search_box ?></div><?php endif; ?>
          <?php print $right ?>
        </div>
      <?php endif; ?>

    </div> <!-- /container -->
<!--  </div>-->
<!-- /layout -->

  <?php print $closure ?>
  </body>
</html>
