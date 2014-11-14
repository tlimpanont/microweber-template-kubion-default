<?php
/*
type: layout
name: My Picture Slider
description: Pictures slider is cool
*/
?>
<?php if (is_array($data)): ?>
    <?php foreach ($data as $item): ?>
    <div class="slider slide-item-<?php print $item['id']; ?>">
        <img src="<?php print thumbnail($item['filename'], 700); ?>" />
        <?php print ($item['title']); ?>    
    </div>
    <?php endforeach; ?>
<?php else : ?>
No pictures found.
<?php endif; ?>