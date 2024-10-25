<?php
class Alumno extends Miembro{
    public $edad; 
    public $asignaturas; 
    public $cursoAbonado; 

    public function __construct($edad) {
        $this->edad = $edad;
        $this->asignaturas = []; 
        $this->cursoAbonado = false; 
    }

    public function abonarCurso() {
        $this->cursoAbonado = true;
        echo "Curso abonado.\n";
    }

    public function matricularseEnAsignatura($asignatura) {
        
        if (!in_array($asignatura, $this->asignaturas)) {
            $this->asignaturas[] = $asignatura;
            echo "Matriculado en la asignatura: " . $asignatura->nombre . ".\n";
        } else {
            echo "Ya estás matriculado en la asignatura: " . $asignatura->nombre . ".\n";
        }
    }

    public function bajaEnAsignatura($asignatura) {
        
        $key = array_search($asignatura, $this->asignaturas);
        if ($key !== false) {
            unset($this->asignaturas[$key]);
            echo "Dado de baja en la asignatura: " . $asignatura->nombre . ".\n";
        } else {
            echo "No estás matriculado en la asignatura: " . $asignatura->nombre . ".\n";
        }
    }

    public static function crearAlumnosDeMuestra() {
        $alumno1=new Alumno(20);
        $alumno1->abonarCurso();
        $alumno1->matricularseEnAsignatura("Matemáticas");
        $alumno1->matricularseEnAsignatura("Historia");
 
        $alumno2 = new Alumno(22);
        $alumno2->matricularseEnAsignatura("Biología");
        $alumno2->matricularseEnAsignatura("Química");
 
        $alumnos[] = $alumno1;
        $alumnos[] = $alumno2;
        
        return $alumnos;
    }
}

?>
