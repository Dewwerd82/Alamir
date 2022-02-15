<?php

include_once './kletka.php';

// Получаем значение полей

if(isset($_POST['submit']))
    {

        $count = $_POST['count']; // Кол. циклов
        $_SESSION['count'] = $count;

        $startRed = $_POST['startRed']; //Старт красных
        $_SESSION['startRed'] = $startRed;

        $startGreen = $_POST['startGreen']; //Старт зелёных
        $_SESSION['startGreen'] = $startGreen;

        $redRed = $_POST['redRed']; //Сколько получается красных из красных
        $_SESSION['redRed'] = $redRed;

        $redGreen = $_POST['redGreen']; //Сколько получается зелёных из красных
        $_SESSION['redGreen'] = $redGreen;

        $greenGreen = $_POST['greenGreen']; //Сколько получается красных из зелёных
        $_SESSION['greenGreen'] = $greenGreen;

        $greenRed = $_POST['greenRed']; //Сколько получается зелёных из зелёных
        $_SESSION['greenRed'] = $greenRed;



        

        header("Location: /");// Делаем редирект обратно
    }

    
?>