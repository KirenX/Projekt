<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

    <title>Document</title>
</head>

<body>
    <nav>
        <div class="container d-flex">
            <div class="icons">
                <a href="#" class="active"><i class="fas fa-home"></i></a>
                <a href="#"><i class="fas fa-hashtag"></i></a>
                <a href="#"><i class="far fa-bell"></i></a>
                <a href="#"><i class="far fa-envelope"></i></a>
            </div>
            <div class="user">
                <div class="user-img-wrapper">
                    <img src="assets/icon.png">
                </div>
                <a href="#" class="user-link">Jane Smith</a>
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>
    </nav>
    <main>
        <div class="left-sidebar"></div>
        <div class="main">
            <div class="container">
            <?php
            $localhost = "localhost";
            $user = "root";
            $password = "";
            $database = "seezyxkiren";
            $connect = mysqli_connect($localhost,$user, $password,$database);
                $zapytanie_2 = 'select autor_posta, tresc_posta from posty';
                $odpowiedz = mysqli_query($connect, $zapytanie_2);
                while($wynik = mysqli_fetch_row($odpowiedz)){
                    echo '<div class="card">';
                    echo '<div class="card-user">'.$wynik[0].'</div>';
                    echo '<div class="card-content">'.$wynik[1].'</div>';
                    echo "</div>";
                }
            ?>
                <form action="script.php" method="post">
                    <input type="text" name="autor"><br>
                    <input type="text" name="tresc"><br>
                    <input type="submit" value="wyslij">
                </form>
            </div>
        </div>
        <div class="right-sidebar"></div>
    </main>
</body>

</html>