       <!-- Barra de navegación --> 
        <nav> 
            <ul> 
                <li><a href="Inicio.php">Inicio</a></li> 
                <?php if(isset($_SESSION["rol"]) && ($_SESSION["rol"] === "registrado" || $_SESSION["rol"] === "admin")): ?>
                <li><a href="Perfil.php">Perfil</a></li> 
                <?php endif; ?>
                <?php if(isset($_SESSION["rol"]) && $_SESSION["rol"] === "admin"): ?>
                <li><a href="Administracion.php">Administración</a></li> 
                <?php endif; ?>
                <?php if(isset($_SESSION["rol"]) && ($_SESSION["rol"] === "registrado" || $_SESSION["rol"] === "admin")): ?>
                <li><a href="estructura/logout.inc.php">Logout</a></li> 
                <?php endif; ?>
            </ul> 
        </nav>