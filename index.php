
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <nav>
        <div class="container d-flex">
            <a href="#" class="logo">Navbrand</a>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
        </div>
    </nav>
    <main>
        <div class="container">
            <div class="formularz">
            <h2>TEST</h2>
            <form action="index.php" method="post">
                <input type="text" name="autor_posta"><br>
                <input type="text" name="tresc_posta"><br>
                <input type="submit" value="opublikuj">
                <?php
                $autor =  $_POST['autor_posta'];
                $tresc = $_POST['tresc_posta'];
                if(isset($autor) && isset($tresc)){
                    echo "dziala";
                }
                else {
                    echo "wypelnij wszystkie pola";
                }
                ?>
            </form>
        </div>
        </div>
    </main>
</body>

</html>