<?php

include_once './counter.php';
include_once "./timer.php";
$_SESSION['load'] = false;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Test</title>
</head>
<body>
    <div class="container">
      <form action="counter.php" method="POST">
        <div class="input-group">
          <span class="input-group-text">Количество циклов</span>
          <input type="text" placeholder="Counter" class="form-control" name="count" value="5">
        </div>
        <br>
        <div class="input-group">
          <span class="input-group-text">Нач. позиции красные/зелёные</span>
          <input type="text" placeholder="Start red" class="form-control" name="startRed" value="1">
          <input type="text" placeholder="Start green" class="form-control" name="startGreen" value="1">
        </div>

        <br>

        <div class="input-group">
          <span class="input-group-text">Выход для RED красные/зелёные</span>
          <input type="text" placeholder="Start red" class="form-control" name="redRed" value="4">
          <input type="text" placeholder="Start green" class="form-control" name="redGreen" value="3">
        </div>


        <br>

        <div class="input-group">
          <span class="input-group-text">Выход для GREEN красные/зелёные</span>
          <input type="text" placeholder="Start red" class="form-control" name="greenRed" value="2">
          <input type="text" placeholder="Start green" class="form-control" name="greenGreen" value="5">
        </div>


        <br>
        <button type="submit" class="btn btn-primary" name="submit">Start</button>
      </form>
      
    </div>

    <br>
    <hr>
    <br>

    <div class="container">
        <table class="table"> <!--  Делаем таблицу  -->
            <thead>
              <tr>
                <th scope="col">№</th>
                <th scope="col">RED</th>
                <th scope="col">GREEN</th>
                
              </tr>
            </thead>

            <tbody>
              <?php
                    if($_SESSION['load'] || $_SESSION['start']){
                      //Запускаем таймер 
                      timer1();

                    }
                    
                    $_SESSION['start'] = false;
              ?>

              
            </tbody>
          </table>
    </div>
</body>
</html>