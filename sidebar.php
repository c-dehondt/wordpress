<aside class="col-12 col-md-3 col-lg-3">

  <ul class="pagination d-flex justify-content-center">
    <li class="page-item" onclick="b(1)">
      <button class="nav-link btn-warning" type="button" name="button">news</button>
    </li>
    <li class="page-item" onclick="b(2)">
      <button class="nav-link btn-warning" type="button" name="button">Infos</button>
    </li>
    <li class="page-item" onclick="b(3)">
      <button class="nav-link btn-warning" type="button" name="button">Evenements</button>
    </li>
  </ul>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <article id="page1">
    <div class="card">
      <img class="card-img-top" src="img/pc/a1.png" alt="photo article">
      <div class="card-block">
        <h4 class="card-title"><?php the_title(); ?><h4>
        <p class="card-text"> <?php the_content(); ?></p>
      </div>
    </div>
  </article>
<?php endwhile; else: ?>
 <?php endif; ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <article id="page2">
    <div class="card" >
      <img class="card-img-top" src="img/pc/a2.jpeg" alt="photo article">
      <div class="card-block">
        <h4 class="card-title"><?php the_title(); ?></h4>
        <p class="card-text"><?php the_content(); ?></p>
      </div>
    </div>
  </article>
<?php endwhile; else: ?>
 <?php endif; ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <article id="page3">
    <div class="card" >
      <img class="card-img-top" src="img/pc/a3.png" alt="photo article">
      <div class="card-block">
        <h4 class="card-title"><?php the_title(); ?></h4>
        <p class="card-text"><?php the_content(); ?></p>
      </div>
    </div>
  </article>
<?php endwhile; else: ?>
 <?php endif; ?>

</aside>
