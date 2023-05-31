<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

$display = null;

// Añadir numeros
if (isset($_GET["boton-num"])) {
    $display = $_GET["result"] == "Error"
        ? $_GET["boton-num"]
        : $_GET["result"] . $_GET["boton-num"];
}

// Hacer calculo
if (isset($_GET["boton-result"])) {
    try {
        $expression = $_GET["result"];
        $display = eval("return $expression;");
    } catch (\Throwable $th) {
        echo "Error";
    }
}

?>
<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <main class="container_php">
        <article>
            <h3>Calculin 👾</h3>
            <form action="" method="get">
                <input type="text" placeholder="result" name="result" value="<?php echo $display  ?>">

                <div class="grid">
                    <input name="boton-num" value="+" type="submit"></input>
                    <input name="boton-num" value="-" type="submit"></input>
                    <input name="boton-num" value="*" type="submit"></input>
                    <input name="boton-num" value="/" type="submit"></input>
                </div>
                <div class="grid">
                    <input name="boton-num" value="1" type="submit"></input>
                    <input name="boton-num" value="2" type="submit"></input>
                    <input name="boton-num" value="3" type="submit"></input>
                    <input name="boton-num" value="4" type="submit"></input>
                    <input name="boton-num" value="5" type="submit"></input>
                </div>
                <div class="grid">
                    <input name="boton-num" value="6" type="submit"></input>
                    <input name="boton-num" value="7" type="submit"></input>
                    <input name="boton-num" value="8" type="submit"></input>
                    <input name="boton-num" value="9" type="submit"></input>
                    <input name="boton-num" value="10" type="submit"></input>
                </div>
                <div class="grid">
                    <input name="boton-result" value="🟰" type="submit"></input>
                    <input name="boton-reset" value="🆑" type="submit"></input>

                </div>
            </form>
        </article>
    </main>
</body>

</html>