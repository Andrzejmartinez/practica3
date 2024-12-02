<?php
require_once '../capa_datos/Database.php';

class Usuari {
    private $db;

    // Constructor: inicializa la conexión a la base de datos
    public function __construct() {
        $this->db = new Database();
    }

    // Método para agregar un nuevo usuario
    public function addUser($name, $surname, $alias, $email, $password) {
        try {
            // Encripta la contraseña
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Consulta SQL para insertar el usuario en la tabla "Usuari"
            $query = "INSERT INTO Usuari (nom, cognoms, alies, email, passwd) VALUES (?, ?, ?, ?, ?)";

            // Ejecuta la consulta con los valores proporcionados
            return $this->db->execute($query, [$name, $surname, $alias, $email, $hashedPassword]);
        } catch (Exception $e) {
            // Maneja cualquier error y lanza una excepción
            throw new Exception("Error al registrar el usuario: " . $e->getMessage());
        }
    }

    // Método para validar un usuario con su email y contraseña
    public function isValidUser($email, $password) {
        try {
            // Consulta SQL para obtener la contraseña y alias del usuario con el email proporcionado
            $query = "SELECT passwd, alies FROM Usuari WHERE email = ?";

            // Obtiene el resultado de la consulta
            $result = $this->db->fetch($query, [$email]);

            // Verifica si se encontró un usuario y si la contraseña es válida
            if ($result && password_verify($password, $result['passwd'])) {
                // Retorna el alias del usuario si las credenciales son correctas
                return $result['alies'];
            }

            // Retorna false si no se encuentra el usuario o la contraseña no coincide
            return false;
        } catch (Exception $e) {
            // Maneja cualquier error y lanza una excepción
            throw new Exception("Error al validar el usuario: " . $e->getMessage());
        }
    }
}
