/**
* Copy this file into your own theme and rename if you use a field other than "field_a2j_interview"
*/
<?php
if (!empty(variable_get('a2j_viewer_field_name'))) {
  $iframe_class = '';
  $src = '';
  $field_name = variable_get('a2j_viewer_field_name');
  if (isset($element['#object']->$field_name)) {
    $folder = variable_get('a2j_viewer_file_directory');
    $fid = $element['#object']->$field_name[LANGUAGE_NONE][0]['fid'];
    $url = '/sites/default/files/' .$folder .'/fid' .$fid;
    $template_url =$url .'/Guide.xml';
    $file_url = $url;
    $src = '/sites/all/libraries/a2j-viewer/viewer/viewer.html?templateURL=' .$template_url .'&fileURL=' .$file_url;
    if (!empty(variable_get('a2j_viewer_class'))) {
      $iframe_class = variable_get('a2j_viewer_class');
    }
  }
}
?>

<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php if (!$label_hidden): ?>
    <div class="field-label"<?php print $title_attributes; ?>><?php print $label ?>:&nbsp;</div>
  <?php endif; ?>

  <div class="field-items"<?php print $content_attributes; ?>>
    <iframe class="<?php print $iframe_class?>" src="<?php print $src?>"></iframe>
  </div>
</div>