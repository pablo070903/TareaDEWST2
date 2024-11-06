<?php
$libros = [  
    "libro1" => [  
        "titulo" => "PHP para Principiantes",  
        "autor" => "Carlos Ruiz",  
        "precio" => 19.99,  
        "categoria" => "Desarrollo web"  
    ],  
    "libro2" => [  
        "titulo" => "JavaScript Avanzado",  
        "autor" => "Laura García",  
        "precio" => 25.99,  
        "categoria" => "Desarrollo web"  
    ],  
    "libro3" => [  
        "titulo" => "Algoritmos en Python",  
        "autor" => "Miguel Fernández",  
        "precio" => 29.99,  
        "categoria" => "Algoritmos"  
    ]  
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Biblioteca</h1>

    <h2>Información de todos los libros</h2>
    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Precio</th>
                <th>Categoría</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($libros as $libro) : ?>
                <tr>
                    <td><?php echo $libro['titulo']; ?></td>
                    <td><?php echo $libro['autor']; ?></td>
                    <td><?php echo $libro['precio']; ?></td>
                    <td><?php echo $libro['categoria']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Libros de la categoría Desarrollo Web</h2>
    <ol>
        <?php foreach ($libros as $libro) : ?>
            <?php if ($libro['categoria'] === 'Desarrollo web') : ?>
                <li><?php echo $libro['titulo']; ?></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ol>
</body>
</html>
