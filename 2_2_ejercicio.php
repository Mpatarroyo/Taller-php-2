<form action="" method="post">
    <label style='font-size: 50px; background: green;' for"name">!!!Traductor Hacker!!!</label><br><br>
    <input type="text" name="nombre" placeholder="Escriba su nombre">
    <input style='color:blue;' type="submit" value="Enviar" name="enviar">
</form>
<?php

$nombre = "";
$resultado = "";
if (isset($_POST['enviar'])) {
    $nombre = $_POST['nombre'];
}

$abecedario = [
    "a" => "4",
    "b" => "I3",
    "c" => "[",
    "d" => ")",
    "e" => "3",
    "f" => "|=",
    "g" => "&",
    "h" => "#",
    "i" => "1",
    "j" => ",_|",
    "k" => ">|",
    "l" => "1",
    "m" => "/\/\\",
    "n" => "^/",
    "o" => "0",
    "p" => "|*",
    "q" => "(_,)",
    "r" => "I2",
    "s" => "5",
    "t" => "7",
    "u" => "(_)",
    "v" => "\/",
    "w" => "\/\/",
    "x" => "><",
    "y" => "j",
    "z" => "2",
    " " => "  "
];

$letras = str_split(strtolower($nombre));
foreach ($letras as $letra) {
    if (isset($abecedario[$letra])) {
        $resultado .= $abecedario[$letra];
    } else {
        $texto = "No se permiten números ni simbolos";
    }
}
if (isset($texto)) {
    echo "<span style='font-size: 25px; color:red;'>¡¡ERROR!!</span><br><br>";
    echo "<img style=' width: 150px; height: 150px;' src='https://i.redd.it/p3kn908jytsd1.gif' alt=''>";
    echo "<p style='font-size: 25px; color:red;'>$texto</p>";
} else {
    echo "<p style='font-size: 30px; color:green;'>El lenguaje cifrado del nombre <br><span style='font-size: 25px; color:blue;'>$nombre</span></p>";
    echo "<p style='font-size: 25px; white-space: pre-wrap;'>$resultado</p>";
}

if (strtolower($nombre) == "fabio") {
    echo "<br><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSt_Bq4hSfBSqH0WU9PvsnxUMdle6iiDqbsJiO9EShWRnRtdOu9i_78zQ4&s=10' alt=''>";
}

?>

<style>
    img {
        width: 350px;
        height: 200px;
    }
</style>