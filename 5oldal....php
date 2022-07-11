<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://allfont.net/allfont.css?fonts=playbill" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Antibandita Security Kft</title>
    <link href="file:///C:/Users/Brigi/Downloads/bank-gothic-medium-bt.ttf" rel='stylesheet' type='text/css'/>
    <link href="5oldal.css" rel="stylesheet" type="text/css" />
    
</head>
<body>
    <center><img src="képek\logo.png" alt="antibanditasecurity"></center>
    <input type="search" maxlenght="40" name="kereső" placeholder="Kereső" ><br><br>

    <div id="menu">
        <ul>
            <li><a href="index.html">Főoldal</a></li>
            <li><a href="1_oldal.html">Kamerák</a></li>
            <li><a href="2_oldal.html">Riasztók</a></li>
            <li><a href="3_oldal.html">Tűzjelzők</a></li>
            <li><a href="4_oldal.html">Referencia munkák</a></li>
            <li><a href="5_oldal.php">Elérhetőségeink</a></li>
        </ul>
    </div>
    
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3868.5780743747196!2d19.852907550601905!3d46.71564238115036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4743ebc18eb2ea55%3A0xeee5ee52c56744f8!2sKiskunf%C3%A9legyh%C3%A1za%2C%20Szent%20Imre%20herceg%20u.%2041%2C%206100!5e0!3m2!1shu!2shu!4v1656177280288!5m2!1shu!2shu" style="float:left" id="map" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>

<ul>
    <li class="list"><p id="font3">Címünk: </p></li>
    <li class="list"><p id="font2"> 6100 Kiskunfélegyháza Szent Imre herceg utca 41./a </p></li>
    <li class="list"><p id="font2">Antibandita Security Kft </p></li>
    <li class="list"><p id="font2">info@antibandita.hu </p></li>
    <li class="list"><p id="font3">Keress minket telefonon!</p></li>
    <li class="list2"><p id="font2">Bujdosó László: +36303943475</p></li>
    <li class="list2"><p id="font2">Bujdosó Bence: +36305644519</p></li>
</ul>
<br><br><br><br>


<div class="ajanlatkeres"> 
<?php 
    $host = "localhost";
    $user = "root";
    $password = "";

    $connect = mysqli_connect( $host, $user, $password );

    if(!$connect) {
        die( "Error: Can not connect to server" );
    }

    if ( isset($_POST["teljesnev"]) && isset($_POST["email"]) && isset($_POST["telefonszam"]) && isset($_POST["message"])) {
        $nev = $_POST["teljesnev"];
        $email = $_POST["email"];
        $tel = $_POST["telefonszam"];
        $mess= $_POST["message"];

        $sql = "INSERT INTO antibandita.ajanlatkeres (teljesnev, email, telefonszam, message)
        VALUES ('" . $nev ."', '". $email. "', '". $tel. "', '". $mess . "')";
        mysqli_query( $connect, $sql ) or die ("Hiba a beszúrásnál");
    }


    $from = '$email';
    $to = 'igit.7@outlook.hu'; 
    $subject = 'Ajánlatkérés'; 
    $message = $_POST["$message"]; ; 
    $headers = 'From: $email' . "\r\n" . 
    $headers = "A következő üzenete érkezett: . \r\n" ;
    'X-Mailer: PHP/' . phpversion(); 
    
    mail($to, $subject, $message, $headers ); 
    $host = "smtp.gmail.com";
    $username = "kovacsbrigi711";
    $password = "Garnela112";
    
        // Ha elküldtük a formba beírt adatokat, így nem üres a $_POST
        if( ! empty( $_POST ) )
        {
            // Mivel csak egy mező kötelező csak azt kell ellenőrizni
            if( empty( $_POST["email"] ) )
            {
                echo "<p>Kérjük adja meg az email címét!</p>";
            }
        }

    mysqli_close($connect);
?>


    <form action="5oldal.php" method="POST" name="ajanlatkeres">
       <fieldset>
        <ul>
            <li class="list"><p id="font3">Kérjen árajánlatot!</p></li>
            <li class="list"><label for="name"> Név:</label></li>
            <li class="list"><input type="name" name="teljesnev" placeholder="Teljes név" value="" autofocus required /></li>
            <li class="list"><label for="email" >E-mail:</label></li>
            <li class="list"><input type="text" name="email"  value="" placeholder="valami@valami.com" autofocus required /></li>
            <li class="list"><label for="telefonszam">Telefonszám:</label></li>
            <li class="list"><input type="tel" size="15" name="telefonszam"  maxlength="15" placeholder="+36(99)123-456" autofocus required /></li>
            <li class="list"><label for="message">Miben tudunk segíteni?</label></li>
            <li class="list"><textarea cols="50" rows="10" name="message" value="" placeholder="megjegyzés:" autofocus required></textarea></li>
            <li class="list"><input action="" type="submit" value="Küldés" id="button4" />
            <input type="reset" value="Törlés" id="button4"></li>
        <br><br>
       
        
        </ul>  
    </fieldset> 
    </form>
    
    
    
</div>
<div id="footer">
    <ul>
        <li class="list"><p>Antibandita Security Kft</p> </li>
        <li class="list"><a href="mailto:info@antibandita.hu"><button id="button4">Küldjön emailt!</button></a></li>
        <li class="list"><p>Keress minket telefonon! </p></li>
        <li class="list"><p> Bujdosó László:</p></li>
        <li class="list"><a href="tel:+36303943475"><button id="button4">Hívás most!</button></a></li>
        <li class="list"><p>Bujdosó Bence:</p></li>
        <li class="list"><a href="tel:+36305644519"><button id="button4">Hívás most!</button></a></li>
        <li class="list"><a href="https://www.facebook.com/antibandita" class="fa fa-facebook" >  Kövessen minket Facebookon!</a></li>
    </ul>
</div>
</body>
</html>