<?php
class Asignatura{
 
    public $id;
    public $nombre;
    public $creditos;

  
    public function __construct($id, $nombre, $creditos) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->creditos = $creditos;
    }

 
    public static function crearAsignaturasDeMuestra() {
        return [
            new Asignatura(1, "Matemáticas", 5),
            new Asignatura(2, "Física", 4),
            new Asignatura(3, "Química", 3),
        ];
    }
}

$asignaturas = Asignatura::crearAsignaturasDeMuestra();
foreach ($asignaturas as $asignatura) {
    echo "ID: " . $asignatura->id . " - Nombre: " . $asignatura->nombre . " - Créditos: " . $asignatura->creditos . "\n";
}
?>
