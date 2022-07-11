<?php 
$host = "141.136.43.151";
$user = "u505471166_brigitta ";
$password = "B.igit.7_?";

$connect = mysqli_connect( $host, $user, $password );

if(!$connect) {
    die( "Error: Can not connect to server" );
}

if ( isset($_POST["teljesnev"]) && isset($_POST["email"]) && isset($_POST["telefonszam"]) && isset($_POST["message"])) {
    $nev =  $_POST["teljesnev"];
    $email = $_POST["email"];
    $tel = $_POST["telefonszam"];
    $message= $_POST["message"];

    $sql = "INSERT INTO u505471166_lmfd.email (teljesnev, email, telefonszam, message)
    VALUES ('" . $nev ."', '". $email. "', '". $tel. "', '". $message . "')";
    mysqli_query( $connect, $sql ) or die ("Hiba a beszúrásnál");

    mail($to, $subject, $message, $headers, "-figit.7@outlook.hu"); 
    $host = "pop.gmail.com";
    $username = "kovacsbrigi711@gmail.com";
    $password = "Garnela112";
    $from = 'email';
    $to = 'igit.7@outlook.hu'; 
    $subject = 'Ajánlatkérés'; 
    $headers = 'From: email'. "\r\n" . 
    $headers = "A következő üzenete érkezett: . \r\n" ;
    $message = 'message';
    'X-Mailer: PHP/' . phpversion(); 

        // Ha elküldtük a formba beírt adatokat, így nem üres a $_POST
        if( ! empty( $_POST ) )
        {
            // Mivel csak egy mező kötelező csak azt kell ellenőrizni
            if( empty( $_POST["email"] ) )
            {
                echo "<p>Kérjük adja meg az email címét!</p>";
            }
        }

}



mysqli_close($connect);

?>