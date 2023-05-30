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
            <form action="">
                <input type="number" placeholder="num1" name="num1" value="num2">
                <input type="number" placeholder="num2" name="num2" value="num2">
                <input name="boton" value="+" type="submit"></input>



                <div class="grid">
                    <input name="boton" value="-" type="submit"></input>
                    <input name="boton" value="*" type="submit"></input>
                    <input name="boton" value="/" type="submit"></input>
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
            </form>
        </article>
        <?php
        $funciones = [
            '+' => fn (int $a, int $b) => $a + $b,
            '-' => fn (int $a, int $b) => $a - $b,
            '*' => fn (int $a, int $b) => $a * $b,
            '/' => fn (int $a, int $b) => $a / $b,
        ];
        echo "la operacion es: " . $funciones[$_GET['boton']]($_GET['num1'], $_GET['num2']);
        ?>
    </main>



</body>

</html>