<form action="" method="post">
    <label style='font-size: 35px; background: red;' for"name">!!!CALCULADORA DEL DIA 13!!!</label><br><br>
    <input type="number" name="anio" placeholder="Escriba el año">
    <input type="number" name="mes" placeholder="Escriba el mes">
    <input style='color:blue;' type="submit" value="Enviar" name="enviar">
</form>
<?php

$anio = "";
$mes = "";
if (isset($_POST['enviar'])) {
    $anio  = $_POST['anio'];
    $mes = $_POST['mes'];
}

function viernes13(int $mes, int $anio)
{
    $fecha = new DateTime("$anio-$mes-13");
    return $fecha->format("w") == 5;
}

if (isset($_POST['mes']) && isset($_POST['anio'])) {

    if (viernes13($mes, $anio)) {
        echo "<span style='font-size: 25px; color:red;'>¡Cuidado!</span><br>";
        echo "<img src='https://cdn.pixabay.com/animation/2024/10/05/00/54/00-54-49-599_512.gif' alt=''><br>";
        echo "<span style='font-size: 25px; color:red;'>El 13 de este mes es viernes</span>";
    } else {
        echo "<span style='font-size: 25px; color:green;'>Estas a salvo!!</span><br><br>";
        echo "<img src='https://i0.wp.com/www.gamerfocus.co/wp-content/uploads/2022/11/friday_the_12th.jpeg?fit=1920%2C1080&ssl=1' alt=''><br><br>";
        echo "<span style='font-size: 25px; color:green;'>El 13 no es viernes</span>";
    }
}

?>

<style>
    img {
        height: 300px;
        width: 300px;
    }
</style>