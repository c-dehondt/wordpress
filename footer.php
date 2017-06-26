<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage newtech
 * @since 1.0
 * @version 1.2
 */

?>
<footer class="row contenair-fluid d-flex justify-content-center">
  <section class="col-lg-3">
   <h3>Abonnez vous!</h3>
   <p>Recevez nos dernières nouvelles directement
     dans votre boîte de réception ! (1 seule fois par semaine max) </p>
   <form>
     <div class="form-group row">
       <label for="inputNom" class="col-sm-2 col-form-label">Nom</label>
       <div class="col-sm-10">
         <input type="nom" class="form-control" id="inputNom" placeholder="Nom">
       </div>
     </div>
     <div class="form-group row">
       <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
       <div class="col-sm-10">
         <input type="email" class="form-control" id="inputPassword3" placeholder="Email">
       </div>
     </div>
     <div class="form-group row">
       <div class="offset-sm-2 col-sm-10">
         <button type="submit" onclick="abonner()" class="btn btn-warning">Je m'abonne</button>
       </div>
     </div>
   </form>
 </section>

  <div class=" col-lg-7 row">
    <section class="col-lg-4  col-md-6 col-sm-12">
      <h3> Lorem Ipsum </h3>
        <ul>
            <li> <a href="#"> Lorem Ipsum </a> </li>
            <li> <a href="#"> Lorem Ipsum </a> </li>
            <li> <a href="#"> Lorem Ipsum </a> </li>
            <li> <a href="#"> Lorem Ipsum </a> </li>
        </ul>
    </section>
    <section class="col-lg-4  col-md-6 col-sm-12">
        <h3> Lorem Ipsum </h3>
        <ul>
            <li> <a href="#"> Lorem Ipsum </a> </li>
            <li> <a href="#"> Lorem Ipsum </a> </li>
            <li> <a href="#"> Lorem Ipsum </a> </li>
            <li> <a href="#"> Lorem Ipsum </a> </li>
        </ul>
    </section>
    <section class="col-lg-4  col-md-6 col-sm-12">
     <h3> Lorem Ipsum </h3>
       <ul>
            <li> <a href="#"> Lorem Ipsum </a> </li>
            <li> <a href="#"> Lorem Ipsum </a> </li>
            <li> <a href="#"> Lorem Ipsum </a> </li>
            <li> <a href="#"> Lorem Ipsum </a> </li>
        </ul>
    </section>
  </div>
 </footer>

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<script type="text/javascript">
function abonner(){
  confirm("voulez vous confirmer votre inscription?");

  if (true) {
    alert("merci pour votre confiance");
}
}
// onglet d'images

function f(val){

  switch(val)
  {
    case 1:
    document.getElementById("img1").style.display = "block";
    document.getElementById("img2").style.display = "none";
    document.getElementById("img3").style.display = "none";

    break;
    case 2:
    document.getElementById("img1").style.display = "none";
    document.getElementById("img2").style.display = "block";
    document.getElementById("img3").style.display = "none";

    break;
    case 3:
    document.getElementById("img1").style.display = "none";
    document.getElementById("img2").style.display = "none";
    document.getElementById("img3").style.display = "block";
    break;
}
}


// aside du site
function b(val){

  switch(val)
  {
    case 1:
    document.getElementById("page1").style.display = "block";
    document.getElementById("page2").style.display = "none";
    document.getElementById("page3").style.display = "none";

    break;
    case 2:
    document.getElementById("page1").style.display = "none";
    document.getElementById("page2").style.display = "block";
    document.getElementById("page3").style.display = "none";

    break;
    case 3:
    document.getElementById("page1").style.display = "none";
    document.getElementById("page2").style.display = "none";
    document.getElementById("page3").style.display = "block";
    break;
}
}

// info images
function on() {
    var x= document.getElementById("imgArticle").alt;
           document.getElementById("alt").innerHTML = x;
}

function off(){
         document.getElementById("alt").innerHTML = "";
}

// fonction date et heure

// date
var d = new Date();
var n = d.toLocaleDateString();
document.getElementById("date").innerHTML = n;

// heure + chrono
var secondes = setInterval
  (function(){chrono(),
    times()} ,1000);

function times() {
var d = new Date();
var h = d.toLocaleTimeString();
document.getElementById("heure").innerHTML = h;
}

// fonction chrono
function chrono() {
  var t= 0;
  document.getElementById("temps").innerHTML = t;
}

  window.onload = f(1);
  window.onload = chrono();
  window.onload = b(1);
</script>

</body>
</html>
