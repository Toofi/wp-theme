<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
  <?php wp_head() ?>
  <title><?php wp_title(); ?>  </title>
</head>
<body>
  <div class="hd-div">
    <div class="hd-title"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></div>
    <div class="hd-description"><?php bloginfo('description'); ?></div>
  </div>