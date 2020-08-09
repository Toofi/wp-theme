<?php get_header() ?>

<div class="card-container">
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
<div class="card">
  <div class="card-header">  
    <div class="card-img" style="overflow: hidden;">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('high', ['class' => 'transition-scale-up', 'alt' => 'Une image mise en avant', 'style' => 'height: auto; box-sizing: border-box;']) ?></a>
    </div>
    <div class="card-author">
      <?php the_category(' : : '); ?> : : <?php the_date(); ?>
    </div>
    <div class="card-title">
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </div>
    <div class="card-author">
      Auteur : <?php the_author(); ?>
    </div>
  </div>
  <div class="card-body">
    <div class="card-text">
      <?php the_excerpt(); ?>
    </div>
  </div>
  <div class="card-footer">
    <div class="card-link">
      <a href="<?php the_permalink(); ?>">Lire la suite</a>
    </div>
  </div>
</div>
<?php endwhile ?>
<?php else : ?>
<h1>Pas d'articles</h1>
<?php endif; ?>
</div>

<!-- <div class="card">
  <div class="card-header">  
    <div class="card-img">
      <img src="https://picsum.photos/300/200">
    </div>
    <div class="card-title">
      Titre de l'article
    </div>
    <div class="card-author">
      Auteur : Toofi<br />
      Catégories : Développement, Musique
    </div>
  </div>
  <div class="card-body">
    <div class="card-text">
      Voici un extrait de l'article. Ce n'est pas énorme mais ça permet de se faire une idée de ce qu'il y aura.
    </div>
  </div>
  <div class="card-footer">
    <div class="card-link">
      <a href="un lien">Un lien</a>
    </div>
  </div>
</div> -->

<?php get_footer() ?>