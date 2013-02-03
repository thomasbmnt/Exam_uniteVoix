<article class="gmap_item">
<?php foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->separator)): ?>
    <?php print $field->separator; ?>
  <?php endif; ?>
  <?php print $field->content; ?>
<?php endforeach; ?>
 </article>