<?php
$template_name = get_field('designBaseName', 'option');
get_template_part('/design-base/' . $template_name . '/performance/header');
?>

<main class="main">
  <?php
  $template_name = get_field('designBaseName', 'option');
  get_template_part('/design-base/' . $template_name . '/performance/section09-single');
  ?>
</main>

<?php
$template_name = get_field('designBaseName', 'option');
get_template_part('/design-base/' . $template_name . '/performance/footer');
?>