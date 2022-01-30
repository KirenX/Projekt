<?php
$localhost = "localhost";
$user = "root";
$password = "";
$database = "seezyxkiren";
$connect = mysqli_connect($localhost,$user, $password,$database);
if ($connect){
    echo "działa";
    $autor = $_POST['autor'];
    $tresc = $_POST['tresc'];
    $zapytanie = "insert into posty(autor_posta, tresc_posta) values('$autor','$tresc')";
    $query = mysqli_query($connect,$zapytanie);
}
else{
    echo "nie działa";
}
mysqli_close($connect);
?>

