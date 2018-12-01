<?php
// $Id: block-footer.tpl.php,v 1.2 2009/09/16 18:30:36 blagoj Exp $
?>
<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="col1 block-<?php print $block->module ?>">
  <?php if (isset($block->subject)): ?>
    <h3><?php print $block->subject ?></h3>
  <?php endif; ?>
  <?php print $content ?>
</div>
