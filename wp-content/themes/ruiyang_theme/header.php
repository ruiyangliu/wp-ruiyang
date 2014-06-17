<!doctype html>
<?php
  $template_url = get_template_directory_uri(); 
?>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Richard Ruiyang Liu</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" />
    <link rel="stylesheet" href="<?php print($template_url.'/stylesheets/application.css') ?>" />
    <?php wp_head() ?>
  </head>
  <body>

  <div id="container">

    <div id="header" class="header-bg">
      <div id="site-banner">
        <a id="site-img-link" href="/"><img src="<?php print($template_url.'/images/site-logo.png') ?>" alt="RL" /></a>
        <h2 id="name-title" class="header-text"><?php echo get_bloginfo('description'); ?></h2>
        <h1 id="site-name" class="header-text"><a href="/"><?php echo get_bloginfo('name'); ?></a></h1>
      </div>

      <div id="primary-navigation">
        <?php wp_nav_menu(); ?>
      </div>
    </div>

