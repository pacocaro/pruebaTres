<?php
  if (isset($_SESSION['active'])  && !empty($_SESSION['active']) && $_SESSION['active'] == 1)
  {
    //usuario loggeado, no hacer nada
  }
  else{
    //usuario no loggeado, redirigirlo al log
    header("Location: login.php");
  }
?>
<header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1>Mi pagina web con PHP</h1>
          <h2>Simple. Actual. Plantilla Web.</h2>
        </div>
      </div>
      <nav>
        <ul class="sf-menu" id="nav">
          <li class="selected"><a href="index.php">Inicio</a></li>
          <li><a href="about.php">Acerca de</a></li>
          <li><a href="portfolio.php">Mi portafolio</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="#">Ejemplo</a>
            <ul>
              <li><a href="#">Drop Down One</a></li>
              <li><a href="#">Drop Down Two</a>
                <ul>
                  <li><a href="#">Sub Drop Down One</a></li>
                  <li><a href="#">Sub Drop Down Two</a></li>
                  <li><a href="#">Sub Drop Down Three</a></li>
                  <li><a href="#">Sub Drop Down Four</a></li>
                  <li><a href="#">Sub Drop Down Five</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down Three</a></li>
              <li><a href="#">Drop Down Four</a></li>
              <li><a href="#">Drop Down Five</a></li>
            </ul>
          </li>
          <li><a href="contact.php">Contáctanos</a></li>
          <li><a href="logout.php">Salir</a></li>
        </ul>
      </nav>
    </header>