<?php
class TriangleGenerator {
    public function generateTriangle(int $altura): string {
        if ($altura < 0) {
            return "";
        }
        
        $triangulo = "<pre>";
        
        for ($i = 0; $i < $altura; $i++) {
            $espacios = $altura - $i - 1;
            $asteriscos = 2 * $i + 1;
            
            $linea = str_repeat(" ", $espacios) . str_repeat("*", $asteriscos);
            
            $triangulo .= "$linea\n";
        }
        
        $triangulo .= "</pre>";
        
        return $triangulo;
    }
}

$altura = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $altura = (int)$_POST['altura'];
}

$triangleGenerator = new TriangleGenerator();
?>

