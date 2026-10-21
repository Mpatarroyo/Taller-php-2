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

for ($i = 0; $i < strlen($nombre); $i++) {
     $letra = strtolower($nombre[$i]);
     if ($letra == "a") {
          $resultado .= "4";
     } else if ($letra == "b") {
          $resultado .= "I3";
     } else if ($letra == "c") {
          $resultado .= "[";
     } else if ($letra == "d") {
          $resultado .= ")";
     } else if ($letra == "e") {
          $resultado .= "3";
     } else if ($letra == "f") {
          $resultado .= "|=";
     } else if ($letra == "g") {
          $resultado .= "&";
     } else if ($letra == "h") {
          $resultado .= "#";
     } else if ($letra == "i") {
          $resultado .= "1";
     } else if ($letra == "j") {
          $resultado .= ",_|";
     } else if ($letra == "k") {
          $resultado .= ">|";
     } else if ($letra == "l") {
          $resultado .= "1";
     } else if ($letra == "m") {
          $resultado .= "/\/\\";
     } else if ($letra == "n") {
          $resultado .= "^/";
     } else if ($letra == "o") {
          $resultado .= "0";
     } else if ($letra == "p") {
          $resultado .= "|*";
     } else if ($letra == "q") {
          $resultado .= "(_,)";
     } else if ($letra == "r") {
          $resultado .= "I2";
     } else if ($letra == "s") {
          $resultado .= "5";
     } else if ($letra == "t") {
          $resultado .= "7";
     } else if ($letra == "u") {
          $resultado .= "(_)";
     } else if ($letra == "v") {
          $resultado .= "\/";
     } else if ($letra == "w") {
          $resultado .= "\/\/";
     } else if ($letra == "x") {
          $resultado .= "><";
     } else if ($letra == "y") {
          $resultado .= "j";
     } else if ($letra == "z") {
          $resultado .= "2";
     } else if ($letra == " ") {
          $resultado .= "   ";
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