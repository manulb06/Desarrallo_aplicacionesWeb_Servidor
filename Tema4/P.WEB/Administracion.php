<?php session_start(); ?>
<?php include_once("estructura/header.inc.php"); ?>
<?php include_once("estructura/navbar.inc.php"); ?>
<?php if(isset($_SESSION["rol"]) && $_SESSION["rol"] === "admin"): ?>
        <!-- Contenido principal -->
        <main>
            <h2>Administrador del sitio</h2>

            <section>
                <p>Blablabla</p>
            </section>
        </main>
        
<?php else: include_once("AccesoNoAutorizado.php");
      endif;
?>
<?php include_once("estructura/footer.inc.php"); ?>     