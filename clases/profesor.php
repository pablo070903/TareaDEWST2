<?php
require_once 'miembro.php';

class Profesor extends Miembro {
    public bool $titular;
    public string $asignatura;

    public function __construct(int $id, string $nombre, string $apellidos, string $email, bool $titular, string $asignatura) {
        parent::__construct($id, $nombre, $apellidos, $email);
        $this->titular = $titular;
        $this->asignatura = $asignatura;
    }

    public static function crearProfesoresDeMuestra() {
        return [
            new Profesor(1, "Steve Wozniak", "Wozniak", "steve@apple.com", true, "DWES"),
            new Profesor(2, "Ada Lovelace", "Lovelace", "ada@gmail.com", false, "DIW"),
            new Profesor(3, "Taylor Otwell", "Otwell", "taylor@laravel.com", true, "DWEC"),
            new Profesor(4, "Rasmus Lerdorf", "Lerdorf", "rasmus@php.com", false, "DAW")
        ];
    }
}


//$profesores = Profesor::crearProfesoresDeMuestra();
//foreach ($profesores as $profesor) {
//    echo "Titular: " . ($profesor->titular ? 'Sí' : 'No') . ", Asignatura: " . $profesor->asignatura . "\n";
//}
?>


