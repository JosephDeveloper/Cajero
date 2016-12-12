<!-- Navigation -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="navbar-toggle" data-target=".navbar-ex1-collapse" data-toggle="collapse" type="button">
                <span class="sr-only">
                    Toggle navigation
                </span>
                <span class="icon-bar">
                </span>
                <span class="icon-bar">
                </span>
                <span class="icon-bar">
                </span>
            </button>
            <a class="navbar-logo" href="#">
                <img src="images/groceries.png"/>
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <?php if (isset($_SESSION['id'])) {?>
                <ul class="nav navbar-nav navbar-left">
                    <!-- Administrador -->
                    <li>
                        <a href="#">
                            Hola Joseph
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="dropdown <?php echo $pagina == 'cliente' ? 'active' : ''; ?>">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            Clientes
                            <span class="caret">
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="?view=cliente">
                                    Gestión de Clientes
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            Proveedores
                            <span class="caret">
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">
                                    Gestión de Proveedores
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            Productos
                            <span class="caret">
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">
                                    Gestión de Productos
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Ingresar al Inventario
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            Reportes
                            <span class="caret">
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">
                                    Reporte de Clientes
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Reporte de Proveedores
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Reporte de Productos
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Reporte de Inventario
                                </a>
                            </li>
                        </ul>
                    </li>
            <?php }?>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">
                            Acerca De
                        </a>
                    </li>
                </ul>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>