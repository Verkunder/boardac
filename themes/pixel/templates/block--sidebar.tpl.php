<?php
// $Id: block-right.tpl.php,v 1.2 2009/09/16 18:30:36 blagoj Exp $
?>
<li>
   <div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="sidebarbox block-<?php print $block->module ?>">
     <?php if (isset($block->subject)): ?>
       <h2><?php print $block->subject ?></h2>
     <?php endif; ?>
   <?php print $content ?>
   </div>
 </li>
