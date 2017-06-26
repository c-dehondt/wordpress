<?php get_header(); ?>


<main>
  <nav class="navbar-toggleable-md navbar-light bg-faded container-fluid top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="info navbar-brand">
      <p id="date"></p>
      <p id="heure"></p>
      <p id="temps"></p>
    </div>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav centre">
        <li class="nav-item active">
          <a class="nav-link home" href="#"><i class="fa fa-home" aria-hidden="true"></i><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">actualité</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Innovation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Jeux</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Apps</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Teste</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-warning" href="#" type="button" data-toggle="modal" data-target="#abonnement">
            S'abonner</a>
        </li>
        <li>

        </li>
      </ul>
    </div>

  </nav>

  <!-- Modal s'abonner -->
  <div class="modal fade" id="abonnement" tabindex="-1" role="dialog" aria-labelledby="abonnementTitle" aria-hidden="true">
    <div class="modal-dialog abonner" role="document">
      <div class="card">
    <div class="card-block">

      <!--Header Modal-->
      <div class="text-center">
          <h3><i class="fa fa-pencil"></i>Abonnez vous!</h3>
          <hr class="mt-2 mb-2">
      </div>

      <!--Body Modal-->
      <p>Recevez nos dernières nouvelles directement
        dans votre boîte de réception ! (1 seule fois par semaine max)</p>
      <br>

      <!--Body-->
      <div class="md-form">
        <i class="fa fa-user prefix"></i>
        <input type="text" id="form3" class="form-control">
        <label for="form3">Nom</label>
      </div>

      <div class="md-form">
        <i class="fa fa-envelope prefix"></i>
        <input type="text" id="form2" class="form-control">
        <label for="form2">Email</label>
      </div>

      <div class="text-center">
          <button type="submit" onclick="abonner()" class="btn btn-warning">Je m'abonne</button>
      </div>

     </div>
    </div>
   </div>
  </div>

<!-- *********************************début images pub du site**************************************** -->

  <article>
      <figure id="img1"><img class="pub" src="" alt="image pub 1"></figure>
      <figure id="img2"><img class="pub" src="" alt="image pub 2"></figure>
      <figure id="img3"><img class="pub" src="" alt="image pub 3"></figure>

      <nav aria-label="...">
        <ul class="pagination d-flex justify-content-center">
          <li class="page-item" onclick="f(1)">
            <button class="btn btn-warning" type="button" name="button">1</button></li>

          <li class="page-item" onclick="f(2)">
            <button class="btn btn-warning" type="button" name="button">2</button></li>

          <li class="page-item" onclick="f(3)">
            <button class="btn btn-warning" type="button" name="button">3</button></li>
        </ul>
      </nav>
  </article>

<!-- *************************************************Fin images pub du site************************************ -->

<!-- *****************************************debut card article du site*************************************** -->


    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <article class="container">
    <div class="row">
      <div class="col-10 no-padding lib-item" data-category="view">
                <h3><?php the_title(); ?></h3>
              <div class="lib-row lib-desc">
                <?php the_content(); ?>
              </div>
              <button type="button" class="btn btn-lg btn-warning">En savoir plus</button>
           </div>
    </div>
  </article>
  <?php endwhile; else: ?>
   <?php endif; ?>
 </main>

<!-- *********************************************fin article du site****************************************** -->
<!-- ************************************debut aside du site****************************************** -->



<?php get_footer(); ?>
