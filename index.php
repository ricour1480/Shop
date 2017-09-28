<?php
session_start();
?>
<html>
    <head>
        <title>Petit application web</title>
        <meta charset="iso-8859-1" />
    </head>
    <body>
        <header>
            <h3>Application pour un cinéma </h3>
            <figure>
                <img src="./images/cinema.jpg" alt="cinema"/>
            </figure>
        </header>
        <section>
            <nav>
                <ul>
                    <li>Filmes &aacute; voir</li>
                    <li>Reservations</li>
                    <li>Contact</li>
                </ul>
            </nav>
            <section>
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
                <figure>
                    <img src="./images/pub.jpg" alt="pub"/>
                </figure>
            </aside>
            <footer>D&eacute;veloppé par Ricour Christopher</footer>
        </section>
    </body>
</html>
