<?php
if (isset($_GET['e'])) {
    switch ($_GET['e']) {
        case 'login':
            $user =  new UserController();
            $user->login();
            break;
    }
} else {
    print('Error');
}
class UserController
{

    public function login()
    {
        include '../db/conecction.php';
        $query = "SELECT * FROM users WHERE email = '" . $_POST['email'] . "' AND password='" . md5($_POST['password']) . "'  ";
        $result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());
        if ($row = pg_fetch_array($result, null, PGSQL_ASSOC)) {
            print_r($row);
        } else {
            print('Usuario no encontrado');
        }
    }
}
