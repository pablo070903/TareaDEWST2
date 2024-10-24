<?php
class Profesor {
    public $titular;
    public $asignatura;

    public function __construct($titular, $asignatura) {
        $this->titular = $titular;
        $this->asignatura = $asignatura;
    }

    public static function crearProfesoresDeMuestra() {
        return [
            new Profesor(true, "Matemáticas"),
            new Profesor(false, "Historia"),
            new Profesor(true, "Ciencias"),
            new Profesor(false, "Literatura")
        ];
    }
}

$profesores = Profesor::crearProfesoresDeMuestra();
foreach ($profesores as $profesor) {
    echo "Titular: " . ($profesor->titular ? 'Sí' : 'No') . ", Asignatura: " . $profesor->asignatura . "\n";
}
?>