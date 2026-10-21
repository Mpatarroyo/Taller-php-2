<form action="" method="post">
    <label style='font-size: 40px; background: gray;' for="name">!!!EXTRACTOR DE URL!!!</label><br><br>
    <input type="text" name="url" placeholder="Escriba la url">
    <input style='color:blue;' type="submit" value="Enviar" name="enviar">
</form>

<?php

$url = "";
$valores = [];
if (isset($_POST['enviar'])) {
    $url = $_POST['url'];
}

function valor(string $direccion)
{
    $valores = [];
    $partesUrl = explode('?', $direccion);

    if (isset($partesUrl[1])) {
        $parametros = $partesUrl[1];

        foreach (explode('&', $parametros) as $parametro) {
            $par = explode('=', $parametro);
            if (isset($par[1])) {
                $valores[] = $par[1];
            }
        }
    }

    return $valores;
}

?>

<span style="font-size: 25px; color: green;">
    <?= json_encode(valor($url)) ?>
</span>