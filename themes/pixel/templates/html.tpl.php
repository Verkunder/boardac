<?php
// $Id: page.tpl.php,v 1.2 2009/09/16 18:30:36 blagoj Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  
  <!--[if lt IE 8]>
    <link href="<?php  print base_path() . path_to_theme() ?>/ie.css" rel="stylesheet" type="text/css" />
  <![endif]-->

  <!--[if lt IE 7]>
    <link href="<?php  print base_path() . path_to_theme() ?>/ie6.css" rel="stylesheet" type="text/css" />
    <script src="http://ie7-js.googlecode.com/svn/version/2.0(beta3)/IE7.js" type="text/javascript"></script>
  <![endif]-->
</head>
<body>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>	
</body>
</html>	