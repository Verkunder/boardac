<div id="wrapper">

  <div id="header">

    <div id="logo">
      <h1><a href="<?php print $front_page; ?>"><?php print $site_name; ?></a></h1>
      <?php if (isset($site_slogan)): ?><span><?php print $site_slogan; ?></span><?php endif; ?>
    </div>

    <div id="topright">
      <ul>
        <li><a href="#main"><?php print t('skip to content'); ?> &darr;</a></li>
      </ul>
    </div>
    <div class="clearfix"></div>
  </div> <!-- Closes header -->

  <div id="catnav">
    <div id="toprss"><?php print $feed_icons ?></div> <!-- Closes toprss -->
<?php if (isset($site_slogan)): ?>
    <ul id="nav" class="primarymenu"><?php print $p_links; ?></ul><?php endif; ?>
  </div> <!-- Closes catnav -->

  <div class="clearfix"></div>

  <div id="main">

    <div id="contentwrapper">
<?php print render($page['highlighted']); ?>
       			  <?php if (!empty($breadcrumb)): ?><div class="drupal-breadcrumb"><?php print $breadcrumb; ?></div><?php endif; ?>

<?php if (!empty($messages)): ?><div style="margin:10px;"><?php print $messages; ?></div><?php endif; ?>
      			  <?php print render($title_prefix); ?>
      			  <?php if (isset($title)): ?>
      				<h1 class="title" id="page-title">
      				  <?php print $title; ?>
      				</h1>
      			  <?php endif; ?>
      			  <?php print render($title_suffix); ?>
      			  <?php if (isset($tabs)): ?>
      				<div class="tabs">
      				  <?php print render($tabs); ?>
      				</div>
      			  <?php endif; ?>
      			  <?php print render($page['help']); ?>
      			  <?php if (isset($action_links)): ?>
      				<ul class="action-links">
      				  <?php print render($action_links); ?>
      				</ul>
      			  <?php endif; ?>
                  <?php if ($is_front && !empty($page['mission'])): ?>
                  	<div id="mission"><?php print render($page['mission']); ?></div>
                  <?php endif; ?>

       			<?php print render($page['content']); ?>
    </div> <!-- Closes contentwrapper-->

  <div id="sidebars">
    <?php if(!empty($page['sidebar'])): ?>
      <div id="sidebar_full">
        <ul>
          <?php print render($page['sidebar']); ?>
        </ul>
      </div><!-- Closes Sidebar_full -->
    <?php endif; ?>

  <div class="clearfix"></div>
  </div> <!-- Closes Sidebars --><div class="clearfix"></div>

</div><!-- Closes Main -->
<?php if(!empty($page['footer'])): ?>

  <div id="morefoot">
	<?php print render($page['footer']); ?>
    <div class="clearfix"></div>
  </div><!-- Closes morefoot -->
<?php endif; ?>

<div id="footer">
  <div id="footerleft">
    <p><?php print $footer_msg; ?> | <a href="http://drupalstyle.ru/">DrupalStyle.ru</a>. <a href="#main">Back to top &uarr;</a></p>
  </div>
  <div class="clearfix"></div>
</div><!-- Closes footer -->

</div><!-- Closes wrapper -->
