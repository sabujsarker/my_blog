  <?php wp_head(); ?>
      <header class="slideRight">
      	<?php wp_nav_menu( array(
      		'container'       => 'nav',
      		'container_class' => 'slideLeft',
      		'menu_class'      => 'nav',
      		'echo'            => true,
      		'fallback_cb'     => 'wp_page_menu',
      		'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
      		'depth'           => 3,
      	) ); ?>
      </header>
  


    <!DOCTYPE html>
<html>
<head>
  <title>My Blog</title>
  <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato|Pathway+Gothic+One|Satisfy&display=swap" rel="stylesheet">
</head>
<body>
  <a href=""><h1>My blog</h1></a>