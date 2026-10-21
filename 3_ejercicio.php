<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light:regular" rel="stylesheet" />
<?php

$aprendices = [
    [
        "nombre" => "Manuel",
        "apellido" => "Patarroyo",
        "edad" => 28,
        "telefono" => 3123088264,
        "email" => "m.patarroyo.19@gmail.com"
    ],

    [
        "nombre" => "Omar",
        "apellido" => "Sanchez",
        "edad" => 26,
        "telefono" => 3154782168,
        "email" => "papelito@gmail.com"
    ],

    [
        "nombre" => "Sabino",
        "apellido" => "Triada",
        "edad" => 25,
        "telefono" => 3115782001,
        "email" => "alucin@gmail.com"
    ],

    [
        "nombre" => "Sara",
        "apellido" => "Gualdrón",
        "edad" => 20,
        "telefono" => 3165597564,
        "email" => "Sara@gmail.com"
    ],

    [
        "nombre" => "Mauricio",
        "apellido" => "Cardona",
        "edad" => 19,
        "telefono" => 3202468125,
        "email" => "mauricio9@gmail.com"
    ]

];

foreach ($aprendices as $aprendiz) {
    echo "<h1 style= 'color: red';>DATOS PERSONALES</h1>";

?>
    <ul>
        <li>
            <p>Nombre del aprendiz: <span> <?php echo $aprendiz["nombre"] ?> </span></p>
        </li>
        <li>
            <p>Apellido del aprendiz: <span><?php echo $aprendiz["apellido"] ?> </span></p>
        </li>
        <li>
            <p>Edad del aprendiz: <span><?php echo $aprendiz["edad"] ?> </span></p>
        </li>
        <li>
            <p>Telefono del aprendiz: <span> <?php echo $aprendiz["telefono"] ?> </span></p>
        </li>
        <li>
            <p>Email del aprendiz: <span> <?php echo $aprendiz["email"] ?> </span></p>
        </li>
        <br>
    </ul>

    <style>
        span {
            color: blue;
            font-size: 20px;
            font-family: 'Shadows Into Light';
        }

        p {
            color: green;
            font-size: 20px;
        }
    </style>

<?php

}
