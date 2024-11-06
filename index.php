<?php
require_once 'clases/miembro.php';
require_once 'clases/alumno.php';
require_once 'clases/profesor.php';
require_once 'clases/asignatura.php';


$alumnos = Alumno::crearAlumnosDeMuestra();
$profesores = Profesor::crearProfesoresDeMuestra();
$asignaturas = Asignatura::crearAsignaturasDeMuestra();


$alumnosMenores23 = array_filter($alumnos, function($alumno) {
    return $alumno->edad < 23;
});


$alumnosConDosAsignaturas = array_filter($alumnos, function($alumno) {
    return count($alumno->asignaturas) >= 2;
});


$asignaturasConAlumnos = array_filter($asignaturas, function($asignatura) use ($alumnos) {
    foreach ($alumnos as $alumno) {
        foreach ($alumno->asignaturas as $asignaturaAlumno) {
            if ($asignatura->id === $asignaturaAlumno->id) {
                return true;
            }
        }
    }
    return false;
});

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Miembros</title>
    <style>
        body { font-family: Arial, sans-serif; }
        h2 { margin-top: 20px; }
        ul { margin: 0; padding: 0; list-style-type: none; }
    </style>
</head>
<body>

    <h1>Alumnos</h1>
    <ul>
        <?php foreach ($alumnos as $alumno): ?>
            <li>Nombre: <?php echo $alumno->getNombre(); ?>, Email: <?php echo $alumno->getEmail(); ?></li>
        <?php endforeach; ?>
    </ul>

    <h1>Profesores</h1>
    <ul>
        <?php foreach ($profesores as $profesor): ?>
            <li>Nombre: <?php echo $profesor->getNombre(); ?>, Email: <?php echo $profesor->getEmail(); ?></li>
        <?php endforeach; ?>
    </ul>

    <h1>Asignaturas</h1>
    <ul>
        <?php foreach ($asignaturas as $asignatura): ?>
            <li>Nombre: <?php echo $asignatura->nombre; ?>, Créditos: <?php echo $asignatura->creditos; ?></li>
        <?php endforeach; ?>
    </ul>

    <h1>Alumnos Menores de 23 Años</h1>
    <ul>
        <?php foreach ($alumnosMenores23 as $alumno): ?>
            <li>Nombre: <?php echo $alumno->getNombre(); ?>, Email: <?php echo $alumno->getEmail(); ?></li>
        <?php endforeach; ?>
    </ul>

    <h1>Alumnos con Al Menos Dos Asignaturas</h1>
    <ul>
        <?php foreach ($alumnosConDosAsignaturas as $alumno): ?>
            <li>Nombre: <?php echo $alumno->getNombre(); ?>, Email: <?php echo $alumno->getEmail(); ?></li>
        <?php endforeach; ?>
    </ul>

    <h1>Asignaturas con Algún Alumno Matriculado</h1>
    <ul>
        <?php foreach ($asignaturasConAlumnos as $asignatura): ?>
            <li>Nombre: <?php echo $asignatura->nombre; ?>, Créditos: <?php echo $asignatura->creditos; ?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>

