<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
<head>
<?php print backdrop_get_html_head(); ?>
<title><?php print $head_title; ?></title>
<?php backdrop_get_css(); ?>
<?php backdrop_get_js(); ?>
<!--[if lt IE 9]><script src="<?php print base_path() . drupal_get_path('theme', 'responsive_blog') . '/js/html5.js'; ?>"></script><![endif]-->
</head>
<body class="<?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>