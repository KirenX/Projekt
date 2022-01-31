
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Projekt</title>
</head>

<body>
    <!-- main page -->
<section class="main-page">
    <div class="bg-video">
        <video src="images/bg.mp4" autoplay loop muted></video>
    </div>
    <!-- login form -->
    <div class="login">
        <button type="button" class="btn-top">Dołącz</button>
    </div>
    <!-- login modal box -->
    <div class="modal-wrapper">
        <div class="modal">
            <div class="modal-header">
                <div class="modal-img">
                <img src="images/lisa.gif">
                 </div>
            </div>
        <form class="login-form">
         <input type="text" 
         class="user-info input" 
         placeholder="Login Giga Chada">
            <input type="password" 
             class="password input" 
             placeholder="Hasło Giga Chada">
        </form>
        <div class="modal-btn">
        <button type="button" class="modal-button btn-signup">Rejestracja</button>
        <button type="button" class="modal-button btn-login">Wbijam</button>
         </div>
         <div class="modal-footer">
            <p class="footer-text">Rejestracja powoduje automatyczne dołączenie do klubu rasistów</p>
         </div>
        </div>
    </div>
    </div>
    <!-- end of login modal box -->

        <!-- register modal -->
    <div class="modal-register-wrapper">
        <div class="modal-register">
            <div class="modal-register-header">
                <div class="h2-wrapper">
                <h2>
                    Zostań Giga Chadem
                </h2>
                </div>  
            </div>
            <form class="modal-register-content">
                <input type="text" 
                class="username-register input" 
                placeholder="Login Giga Chada">
                <input type="email" 
                class="mail-register input" 
                placeholder="E-mail">
                <input type="password" 
                class="password-register input" 
                placeholder="Hasło">
                <input type="password" 
                class="repeat-password-register input" 
                placeholder="Powtórz Hasło">
            </form>
            <div class="modal-register-button">
                <button type="button" class="">Zarejestruj</button>
            </div>
            <div class="modal-register-footer">
            <p class="footer-text footer-register-text">Wróć do logowania</p>
            </div>
        </div>

    </div>
 
    <!-- end of register modal -->

    <!-- end of login form -->

</section>
<!-- end of main page -->
<!-- feeds page feeds page feeds page feeds page -->
<section class="feeds-page">
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
    <div class="left-sidebar">
        <div class="left-sidebar-content">
            <p><a href="#">Wydarzenia</a></p>
            <p><a href="#">#cyrk</a></p>
            <p><a href="#">#bot</a></p>
            <p><a href="#">#azjatki</a></p>
            <p><a href="#">#quality-memuchy</a></p>
        </div>
    </div>
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
                <input type="text" name="autor">
                <input type="text" name="tresc" id="dodaj"><br>
                <input type="submit" value="wyslij">
            </form>
        </div>
    </div>
    <div class="right-sidebar"></div>
</main>
</section>
<!-- end of feeds page -->
<script src="script.js"></script>
</body>

</html>