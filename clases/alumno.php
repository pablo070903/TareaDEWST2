<?php
require_once 'miembro.php';
require_once 'asignatura.php'; 

class Alumno extends Miembro {
    
    public $edad; 
    public $asignaturas; 
    public $cursoAbonado; 

    public function __construct(int $id, string $nombre, string $apellidos, string $email, int $edad) {
        parent::__construct($id, $nombre, $apellidos, $email);
        $this->edad = $edad;
        $this->asignaturas = [];
        $this->cursoAbonado = false;
    }
    public function abonarCurso() {
        $this->cursoAbonado = true;
        echo "Curso abonado.\n";
    }

    public function matricularseEnAsignatura(Asignatura $asignatura) { 
        if (!in_array($asignatura, $this->asignaturas)) {
            $this->asignaturas[] = $asignatura;
            echo "Matriculado en la asignatura: " . $asignatura->nombre . ".\n";
        } else {
            echo "Ya estás matriculado en la asignatura: " . $asignatura->nombre . ".\n";
        }
    }

    public function bajaEnAsignatura(Asignatura $asignatura) { 
        $key = array_search($asignatura, $this->asignaturas);
        if ($key !== false) {
            unset($this->asignaturas[$key]);
            echo "Dado de baja en la asignatura: " . $asignatura->nombre . ".\n";
        } else {
            echo "No estás matriculado en la asignatura: " . $asignatura->nombre . ".\n";
        }
    }

    public static function crearAlumnosDeMuestra() {
        $alumno1 = new Alumno(1, "Juan", "Pérez", "juan@example.com", 20);
        $alumno1->abonarCurso();
        $asignaturaMatematicas = new Asignatura(1, "Matemáticas", 5);
        $asignaturaHistoria = new Asignatura(2, "Historia", 3);
        $alumno1->matricularseEnAsignatura($asignaturaMatematicas);
        $alumno1->matricularseEnAsignatura($asignaturaHistoria);
 
        $alumno2 = new Alumno(2, "María", "Gómez", "maria@example.com", 22);
        $asignaturaBiologia = new Asignatura(3, "Biología", 4);
        $asignaturaQuimica = new Asignatura(4, "Química", 3);
        $alumno2->matricularseEnAsignatura($asignaturaBiologia);
        $alumno2->matricularseEnAsignatura($asignaturaQuimica);
 
        return [$alumno1, $alumno2];
    }
}
?>

