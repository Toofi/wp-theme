<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<div class="article-body">
  <div class="article-category"><?php the_category(' : : '); ?></div>
  <div class="article-img"><?php the_post_thumbnail(); ?></div>
  <div class="article-author">écrit par : <?php the_author_link(); ?> le <?php the_date(); ?></div>
  <div class="article-title"><?php the_title(); ?></div>
  <hr />
  <div class="article-content"><?php the_content(); ?></div>
  <hr />
  <?php the_comment() ?>
  <hr />
  <?php comment_form(); ?>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>