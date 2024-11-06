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
            //echo "Matriculado en la asignatura: " . $asignatura->nombre . ".\n";
        } else {
            //echo "Ya estás matriculado en la asignatura: " . $asignatura->nombre . ".\n";
        }
    }

    public function bajaEnAsignatura(Asignatura $asignatura) { 
        $key = array_search($asignatura, $this->asignaturas);
        if ($key !== false) {
            unset($this->asignaturas[$key]);
            //echo "Dado de baja en la asignatura: " . $asignatura->nombre . ".\n";
        } else {
            //echo "No estás matriculado en la asignatura: " . $asignatura->nombre . ".\n";
        }
    }

    public static function crearAlumnosDeMuestra() {
        $alumnos = [
            new Alumno(1, "Juan", "Pérez", "juan@example.com", 20),
            new Alumno(2, "María", "Gómez", "maria@example.com", 22),
            new Alumno(3, "Luis", "Fernández", "luis@example.com", 19),
            new Alumno(4, "Ana", "Martínez", "ana@example.com", 21),
            new Alumno(5, "Carlos", "López", "carlos@example.com", 23),
            new Alumno(6, "Laura", "Sánchez", "laura@example.com", 18),
            new Alumno(7, "José", "Rodríguez", "jose@example.com", 24),
            new Alumno(8, "Lucía", "Torres", "lucia@example.com", 20),
            new Alumno(9, "Pedro", "Díaz", "pedro@example.com", 22),
            new Alumno(10, "Elena", "Morales", "elena@example.com", 19),
        ];
    
        
        $asignaturas = Asignatura::crearAsignaturasDeMuestra();
    
        
        $alumnos[0]->matricularseEnAsignatura($asignaturas[1]);
        $alumnos[1]->matricularseEnAsignatura($asignaturas[1]);
        $alumnos[1]->matricularseEnAsignatura($asignaturas[2]);
        $alumnos[2]->matricularseEnAsignatura($asignaturas[1]);
        $alumnos[2]->matricularseEnAsignatura($asignaturas[3]);
        $alumnos[3]->matricularseEnAsignatura($asignaturas[1]);
        $alumnos[4]->matricularseEnAsignatura($asignaturas[1]);
        $alumnos[4]->matricularseEnAsignatura($asignaturas[2]);
        $alumnos[4]->matricularseEnAsignatura($asignaturas[3]);
        $alumnos[5]->matricularseEnAsignatura($asignaturas[1]);
        $alumnos[6]->matricularseEnAsignatura($asignaturas[2]);
        $alumnos[7]->matricularseEnAsignatura($asignaturas[3]);
        $alumnos[8]->matricularseEnAsignatura($asignaturas[2]);
        $alumnos[9]->matricularseEnAsignatura($asignaturas[1]);
    
        return $alumnos;
    }
}
?>

