<?php

/**
 *
 */
class Login
{
    private $id_user;
    private $nombre;
    private $user;
    private $password;
    private $rol;

    public function __construct()
    {

    }

    public function __construct($user, $pass)
    {
        $this->user     = $user;
        $this->password = $pass;
    }

    public function validarUsuario()
    {
        $user     = trim($this->user);
        $password = trim($this->password);
        if (!empty($user) and !empty($password)) {
            $db   = new Conexion();
            $data = $db->real_escape_string($user);
            $pass = sha1($password);
            $sql  = $db->query("SELECT id FROM users WHERE (user = '$data' OR email = '$data') AND pass = '$pass' LIMIT 1;");
            if ($db->rows($sql) > 0) {
                ini_set('session.cookie_lifetime', time() + (60 * 60 * 24));
                $_SESSION['id'] = $db->recorrer($sql)[0];
            } else {
                echo '<div class="alert alert-dismissible alert-danger"><button type="button" class="close" data-dismiss="alert">x</button><strong>ERROR: </strong>Las credenciales son incorrectas.</div>';
            }
            $db->liberar($sql);
            $db->close();
        } else {
            echo '<div class="alert alert-dismissible alert-danger"><button type="button" class="close" data-dismiss="alert">x</button><strong>ERROR: </strong>Todos los datos deben de estar llenos</div>';
        }
    }
}
