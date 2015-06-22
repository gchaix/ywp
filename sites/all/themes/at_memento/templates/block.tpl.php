<<?php print $tag; ?> id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <div class="block-inner">
    <div class="block-inner-2 clearfix">

      <?php print render($title_prefix); ?>

      <?php if ($block->subject): ?>
        <h2<?php print $title_attributes; ?>><?php print $block->subject; ?></h2>
      <?php endif; ?>

      <?php print render($title_suffix); ?>

      <div<?php print $content_attributes; ?>>
        <?php print $content ?>
      </div>

    </div>
  </div>

</<?php print $tag; ?>>