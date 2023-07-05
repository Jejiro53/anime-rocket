<?php
class modules extends mysqli {
    public function __construct($host, $usuario, $pass, $bd) {
        parent::__construct($host, $usuario, $pass, $bd);
    }

    public function get_data() {
        $consulta = "SELECT u.id, u.usuario, u.email, u.passwords, e.nombre AS estatus, r.nombre AS rol 
                     FROM usuarios u LEFT JOIN u_estatus e ON u.estatus = e.id LEFT JOIN u_rol r ON u.rol = r.id";
        $result = $this->query($consulta);
        $array = [];
        while ($row = $result->fetch_assoc()) {
            $array[] = [
                "id" => $row["id"],
                "usuario" => $row["usuario"],
                "correo" => $row["email"],
                "password" => $row["passwords"],
                "status" => $row["estatus"],
                "rol" => $row["rol"],
            ];
        }
        echo json_encode($array);
    }

    public function insert_data() {
        mysqli_report(MYSQLI_REPORT_OFF);
        $usuario = $_POST['usuario'];
        $email = $_POST['correo'];
        $passwords = $_POST['password'];
        $estatus = $_POST['status'];
        $rol = $_POST['rol'];

        $isUnique = $this->isUsuarioUnique($usuario);
        if (!$isUnique) {
            $array = [
                "status" => "error",
                "text" => "El usuario ya existe en la base de datos"
            ];
            echo json_encode($array);
            return;
        }

        $consulta = "INSERT INTO usuarios (usuario, email,  passwords, estatus, rol) 
                     VALUES ('$usuario', '$email', '$passwords', '$estatus', '$rol')";
        $array = [
            "status" => "success",
            "text" => "se insertó correctamente"
        ];
        if (!$this->query($consulta)) {
            $array = [
                "status" => "error",
                "text" => "no se pudo insertar el registro: " . $this->error
            ];
        }
        echo json_encode($array);
    }

    public function isUsuarioUnique($usuario) {
        $usuario = $this->real_escape_string($usuario);
        $consulta = "SELECT COUNT(*) AS count FROM usuarios WHERE usuario = '$usuario'";
        $result = $this->query($consulta);

        if ($result === false) {
            die("Error al ejecutar la consulta: " . $this->error);
        }

        $row = $result->fetch_assoc();
        $count = $row['count'];

        return $count === '0';
    }
}

$modules = new modules("localhost:3308", "root", "", "anime-rocket");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    switch ($_POST["funcion"]) {
        case 'get_data':
            $modules->get_data();
            break;
        case 'insert_data':
            $modules->insert_data();
            break;
        default:
            echo "funcion incompleta";
            break;
    }
}
?>
