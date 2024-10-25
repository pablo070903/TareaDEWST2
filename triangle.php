<?php
include("clases/triangleGenerator.php");
$triangleGenerator = new TriangleGenerator();
echo $triangleGenerator->generateTriangle(13);
?>