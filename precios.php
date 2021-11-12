<?php
session_start();
if (empty($_SESSION['valueuser'])) {
    echo '<script type="text/javascript">
    alert("No has iniciado sesión");
    window.location.href="index.php";
    </script>';
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>UGRPM - Precios</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
        html,
        body {
            min-height: 100%;
        }

        body,
        div,
        form,
        input,
        select,
        p {
            padding: 0;
            margin: 0;
            outline: none;
            font-family: Roboto, Arial, sans-serif;
            font-size: 16px;
            color: #eee;
        }

        body {
            background-size: cover;
        }

        h1,
        h2 {
            text-transform: uppercase;
            font-weight: 400;
        }

        h2 {
            margin: 0 0 0 8px;
        }

        .main-block {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            padding: 25px;
            background: rgba(0, 0, 0, 0.5);
        }

        .left-part,
        form {
            padding: 25px;
        }

        .left-part {
            text-align: center;
        }

        .fa-graduation-cap {
            font-size: 72px;
        }

        form {
            background: rgba(0, 0, 0, 0.7);
        }

        .title {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .info {
            display: flex;
            flex-direction: column;
        }

        input,
        select {
            padding: 5px;
            margin-bottom: 30px;
            background: transparent;
            border: none;
            border-bottom: 1px solid #eee;
        }

        input::placeholder {
            color: #eee;
        }

        option:focus {
            border: none;
        }

        option {
            background: black;
            border: none;
        }

        .checkbox input {
            margin: 0 10px 0 0;
            vertical-align: middle;
        }

        .checkbox a {
            color: #743323;
        }

        .checkbox a:hover {
            color: #743323;
        }

        .btn-item,
        button {
            padding: 10px 5px;
            margin-top: 20px;
            border-radius: 5px;
            border: none;
            background: #743323;
            text-decoration: none;
            font-size: 15px;
            font-weight: 400;
            color: #fff;
        }

        .btn-item {
            display: inline-block;
            margin: 20px 5px 0;
        }

        button {
            width: 100%;
        }

        button:hover,
        .btn-item:hover {
            background: #743323;
            cursor: pointer;
        }

        @media (min-width: 568px) {

            html,
            body {
                height: 100%;
            }

            .main-block {
                flex-direction: row;
                height: calc(100% - 50px);
            }

            .left-part,
            form {
                flex: 1;
                height: auto;
            }
        }
    </style>
    <link href="images/icon.webp" rel="icon">
</head>

<body>
    <?php
    $dtz = new DateTimeZone("America/Mexico_City");
    $dt = new DateTime("now", $dtz);
    //Stores time as "2021-04-04T13:35:48":
    $currentTime = $dt->format("d-m-Y");
    ?>
    <div class="main-block">
        <div class="left-part">
            <img src="images/logo.png">
            <h1>Precios del Cerdo</h1>
            <p>Unión Ganadera Regional de Porcicultores de Michoacán</p>
            <a href="index.php">Salir</a>
        </div>
        <form action="actualiza.php" method="post">
            <div class="title">
                <h2>Actualizar precios del cerdo al <?php echo ("$currentTime"); ?></h2>
            </div>
            <div class="info">
                <Label>Cerdo de Línea $</Label>
                <input class="fname" type="number" step="0.01" name="linea" placeholder="$" required>
                <Label>Hembra Multípara $</Label>
                <input type="number" step="0.01" name="multipara" placeholder="$" required>
                <Label>Semental de desecho $</Label>
                <input type="number" step="0.01" name="semental" placeholder="$" required>
                <Label>Lechón $</Label>
                <input type="number" step="0.01" name="lechon" placeholder="$" required>
            </div>
            <button type="submit">Guardar</button>
        </form>
    </div>
</body>

</html>