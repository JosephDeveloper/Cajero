<?php

require 'core/core.php';

if (isset($_GET['view']) && isset($_SESSION['id'])) {
    $pagina = isset($_GET['view']) ? strtolower($_GET['view']) : 'index';
    if ($pagina == 'index') {
        include 'views/html/index/index.php';
    } else {
        if (file_exists('views/app/' . $pagina . '.php')) {
            require_once 'views/html/index/index.php';
            require_once 'views/app/' . $pagina . '.php';
        } else {
            require 'core/controllers/errorController.php';
        }
    }
} else {
    include 'views/html/index/index.php';
}
