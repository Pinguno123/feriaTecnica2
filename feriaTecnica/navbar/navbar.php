<?php 
$url_base = "http://localhost/feriaTecnica/";
?>
<style>
header {
    padding: 20px;
    display: flex;
    align-items: baseline;
    justify-content: space-between;
}
.logo a {
    text-decoration: none;
    color: black;
}
nav a {
    text-decoration: none;
    margin-right: 10px;
    color: black;
}
</style>
<header>
        <section class="logo">
            <a href="<?php echo($url_base); ?>">
                <h2 class="logotipo">Nombre del proyecto</h2>
            </a>
        </section>
        <nav class="nav">
            <a href="<?php echo($url_base); ?>/juegos/Anderson/juegoAnderson.php">Juego 1 </a>
            <a href="<?php echo($url_base); ?>/juegos/Amilcar/Tperiodica.php">Juego 2 </a>
            <a href="<?php echo($url_base); ?>/juegos/Douglas/juegoDouglas.php">Juego 3 </a>
            <a href="">Juego 4 </a>
            <a href="">Juego 5 </a>
            <a href="">Juego 6 </a>
        </nav>
</header>

