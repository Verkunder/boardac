<?php
// $Id: template.php,v 1.2 2009/09/16 18:30:36 blagoj Exp $ 

function pixel_preprocess_page(&$variables) {
  $variables['footer_msg'] = ' &copy; ' . $variables['site_name'] . ' ' . date('Y');
  //$variables['search_box'] = str_replace(t('Search this site: '), '', $variables['search_box']);
  $variables['p_links'] = '';

$href_attributes = '';

  if(!empty($variables['main_menu'])) {

    foreach ($variables['main_menu'] as $link) {
      $link_current = '"active"';
      $attributes = 'class="menu"';

      //$href_attributes = 'class="fadeThis"';
      $href = url($link['href']);

      if ($link['href'] == '<front>') {
        $attributes = 'class="menu"';

       // if (drupal_is_front_page())
        //$attributes .= ' class="primarymenu"';

        //$href_attributes = 'class="menu"';

      }

      if($link['href'] == $_GET['q']) {
        $attributes = 'class="current_page_item fadeThis"';
      }
      $variables['p_links'] .= '<li ' . $attributes . '><a ' . $href_attributes . ' href="' . $href . '" ><span>' . $link['title'] . '</span></a></li>';
      }
    }  

  $variables['footer_tp'] = '';
  if ($_SERVER['REQUEST_URI'] == '/')
  $variables['footer_tp'] = ' <a href="http://www.discountforhosting.com/">discountforhosting.com/</a> ';
        
}
  
function pixel_preprocess_node(&$variables) {
  $variables['posted_by'] = t('By !username on !postdate', array('!username' => $variables['name'], '!postdate' => format_date($variables['node']->created, 'custom', 'd F Y')));
}

function pixel_preprocess_comment_wrapper(&$variables) {
  $node = $variables['node'];
  $variables['header'] = t('<strong>!count comments</strong> on %title', array('!count' => $node->comment_count, '%title' => $node->title));
}

function pixel_preprocess_comment(&$variables) {
  $variables['classes'] = array('comment');
  if ($variables['zebra'] == 'odd') {
	$variables['classes'][] = 'alt';
  }
  $variables['classes'] = implode(' ', $variables['classes']);
}

