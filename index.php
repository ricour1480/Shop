<?php
session_start();
?>
<html>
    <head>
        <title>Petit application web</title>
        <meta charset="iso-8859-1" />
        <link rel="stylesheet" type="text/css" href="./lib/css/style_page.css"/>
     </head>
    <body>
        <header>
            <h3 id="titre">Application pour un cinéma </h3>
            <figure id="banniere">
                <img src="./images/cinema.jpg" alt="cinema"/>
            </figure>
        </header>
        <section id="principale">
            <nav id="menu">
                <ul>
                    <li><a href="">Filmes &aacute; voir</a></li>
                    <li><a href="">Reservation</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </nav>
            <section id="page">
                <?php
                if (!isset($_SESSION['page'])) {
                    $_SESSION['page'] = "./pages/accueil.php";
                }
                //si il existe une variable "page" dans l'url
                if (isset($_GET['page'])) {
                    $_SESSION['page'] = $_GET['page'];
                }

                if (file_exists('./pages/' . $_SESSION['page'])) {
                    include ('./pages/' . $_SESSION['page']);
                } else {
                    print "<span class='txtGras'>Oups!!</span>";
                }
                ?>
            </section>
            <aside>
                <figure class="pub">
                    <img src="./images/pub.jpg" alt="pub"/>
                </figure>
            </aside>
            <footer id="footer">D&eacute;veloppé par Ricour Christopher</footer>
        </section>
    </body>
</html>
